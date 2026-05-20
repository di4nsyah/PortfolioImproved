@extends('layouts.app')

@section('content')

{{-- ══════════════════════════════
     HEADER
══════════════════════════════ --}}
<div class="section fade-up fade-up-1" style="margin-bottom:2.5rem;">
    <p class="section-label">Achievements</p>
    <h1 class="section-title">Certificates & Awards</h1>
    <p class="section-desc">
        Competitions and events I've participated in — representing my school and pushing my skills under pressure.
    </p>

    {{-- Summary pills --}}
    <div class="stat-row" style="margin-top:0;">
        <div class="stat-pill">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>
            </svg>
            <strong>{{ count($data['certificates']) }}</strong>&nbsp;certificates
        </div>
        @php
            $years = collect($data['certificates'])->pluck('year')->unique()->filter()->sort()->values();
        @endphp
        @if($years->count())
        <div class="stat-pill">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            <strong>{{ $years->first() }}{{ $years->count() > 1 ? ' – ' . $years->last() : '' }}</strong>
        </div>
        @endif
    </div>
</div>

{{-- ══════════════════════════════
     FILTER TABS
══════════════════════════════ --}}
@php
    $categories = collect($data['certificates'])->pluck('category')->unique()->filter()->values();
@endphp

@if($categories->count() > 1)
<div class="cert-filter-bar fade-up fade-up-2" x-data="{ active: 'all' }">
    <button class="cert-filter-btn" :class="{ 'active': active === 'all' }" @click="active = 'all'">
        All
        <span class="cert-filter-count">{{ count($data['certificates']) }}</span>
    </button>
    @foreach($categories as $cat)
    <button
        class="cert-filter-btn"
        :class="{ 'active': active === '{{ $cat }}' }"
        @click="active = '{{ $cat }}'"
    >
        {{ $cat }}
        <span class="cert-filter-count">{{ collect($data['certificates'])->where('category', $cat)->count() }}</span>
    </button>
    @endforeach>
</div>
@endif

{{-- ══════════════════════════════
     CERTIFICATE GRID
     Lightbox handled with Alpine
══════════════════════════════ --}}
<div
    x-data="{
        active: 'all',
        lightbox: null,
        open(cert) { this.lightbox = cert; document.body.style.overflow = 'hidden'; },
        close()    { this.lightbox = null; document.body.style.overflow = ''; }
    }"
    @keydown.escape.window="close()"
>

    {{-- Grid --}}
    <div class="cert-grid fade-up fade-up-3">
        @forelse($data['certificates'] as $index => $cert)
        <article
            class="cert-card"
            style="animation-delay: {{ $index * 0.07 }}s"
            @click="open({{ json_encode($cert) }})"
            role="button"
            tabindex="0"
            @keydown.enter="open({{ json_encode($cert) }})"
            aria-label="View certificate: {{ $cert['title'] }}"
        >
            {{-- Certificate image / preview --}}
            <div class="cert-card-img-wrap">
                @if(!empty($cert['image']))
                <img
                    src="{{ $cert['image'] }}"
                    alt="{{ $cert['title'] }}"
                    class="cert-card-img"
                    loading="lazy"
                    onerror="this.parentElement.querySelector('.cert-placeholder').style.display='flex'; this.style.display='none';"
                >
                @endif
                <div class="cert-placeholder" style="{{ empty($cert['image']) ? '' : 'display:none;' }}">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" style="opacity:0.3;">
                        <circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>
                    </svg>
                </div>

                {{-- Overlay on hover --}}
                <div class="cert-card-overlay">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        <line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/>
                    </svg>
                    <span style="font-size:0.75rem;font-weight:500;margin-top:0.375rem;">View</span>
                </div>

                {{-- Place badge (1st, 2nd, etc.) --}}
                @if(!empty($cert['place']))
                <div class="cert-place-badge cert-place-{{ Str::slug($cert['place']) }}">
                    {{ $cert['place'] }}
                </div>
                @endif
            </div>

            {{-- Body --}}
            <div class="cert-card-body">
                @if(!empty($cert['category']))
                <span class="cert-tag">{{ $cert['category'] }}</span>
                @endif

                <h3 class="cert-title">{{ $cert['title'] }}</h3>
                <p class="cert-issuer">{{ $cert['issuer'] ?? '' }}</p>

                <div class="cert-meta">
                    @if(!empty($cert['year']))
                    <span class="cert-meta-item">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        {{ $cert['year'] }}
                    </span>
                    @endif
                    @if(!empty($cert['level']))
                    <span class="cert-meta-item">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        {{ $cert['level'] }}
                    </span>
                    @endif
                </div>
            </div>
        </article>
        @empty
        <p style="color:var(--text-muted);font-size:0.875rem;grid-column:1/-1;">No certificates added yet.</p>
        @endforelse
    </div>

    {{-- ══════════════════════════════
         LIGHTBOX
    ══════════════════════════════ --}}
    <div
        class="cert-lightbox"
        x-show="lightbox !== null"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click.self="close()"
        style="display:none;"
        role="dialog"
        aria-modal="true"
    >
        <div
            class="cert-lightbox-inner"
            x-show="lightbox !== null"
            x-transition:enter="transition ease-out duration-250"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        >
            {{-- Close button --}}
            <button class="cert-lightbox-close" @click="close()" aria-label="Close">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>

            {{-- Image --}}
            <div class="cert-lightbox-img-wrap">
                <template x-if="lightbox && lightbox.image">
                    <img :src="lightbox.image" :alt="lightbox.title" class="cert-lightbox-img">
                </template>
                <template x-if="lightbox && !lightbox.image">
                    <div class="cert-lightbox-no-img">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" style="opacity:0.25;">
                            <circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/>
                        </svg>
                        <span style="font-size:0.75rem;color:var(--text-muted);margin-top:0.75rem;">No preview available</span>
                    </div>
                </template>
            </div>

            {{-- Details --}}
            <div class="cert-lightbox-body">
                <template x-if="lightbox">
                    <div>
                        <div style="display:flex;align-items:flex-start;justify-content:space-between;gap:1rem;margin-bottom:1rem;">
                            <div>
                                <span class="cert-tag" x-text="lightbox.category" x-show="lightbox.category" style="margin-bottom:0.6rem;display:inline-block;"></span>
                                <h2 class="cert-lightbox-title" x-text="lightbox.title"></h2>
                                <p class="cert-lightbox-issuer" x-text="lightbox.issuer"></p>
                            </div>
                            <template x-if="lightbox.place">
                                <div class="cert-place-badge-lg" x-text="lightbox.place"></div>
                            </template>
                        </div>

                        <div class="cert-lightbox-meta">
                            <template x-if="lightbox.year">
                                <div class="cert-lightbox-meta-item">
                                    <span class="about-meta-label">Year</span>
                                    <span class="about-meta-value" x-text="lightbox.year"></span>
                                </div>
                            </template>
                            <template x-if="lightbox.level">
                                <div class="cert-lightbox-meta-item">
                                    <span class="about-meta-label">Level</span>
                                    <span class="about-meta-value" x-text="lightbox.level"></span>
                                </div>
                            </template>
                            <template x-if="lightbox.team">
                                <div class="cert-lightbox-meta-item">
                                    <span class="about-meta-label">Team</span>
                                    <span class="about-meta-value" x-text="lightbox.team"></span>
                                </div>
                            </template>
                            <template x-if="lightbox.place">
                                <div class="cert-lightbox-meta-item">
                                    <span class="about-meta-label">Result</span>
                                    <span class="about-meta-value" x-text="lightbox.place"></span>
                                </div>
                            </template>
                        </div>

                        <template x-if="lightbox.description">
                            <p class="cert-lightbox-desc" x-text="lightbox.description"></p>
                        </template>

                        <template x-if="lightbox.credential_url">
                            <a :href="lightbox.credential_url" target="_blank" rel="noopener" class="btn btn-primary" style="margin-top:1.25rem;display:inline-flex;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15,3 21,3 21,9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                Verify Certificate
                            </a>
                        </template>
                    </div>
                </template>
            </div>
        </div>
    </div>

</div>{{-- end x-data --}}

@endsection