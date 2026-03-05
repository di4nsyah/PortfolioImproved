@extends('layouts.app')

@section('content')

{{-- ── Hero ── --}}
<div class="bio-hero fade-up fade-up-1">
    <img
        src="{{ $data['profile']['photo'] }}"
        alt="{{ $data['profile']['name'] }}"
        onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($data['profile']['name']) }}&background=c8d9ef&color=4a6fa5&size=240'"
    >
    <div>
        <p class="bio-hero-role">{{ $data['profile']['role'] ?? 'Software Developer' }}</p>
        <h1 class="bio-hero-name">{{ $data['profile']['name'] }}</h1>

        {{-- Skills tags --}}
        @if(!empty($data['profile']['skills']))
        <div style="margin-top:0.75rem;">
            @foreach($data['profile']['skills'] as $skill)
            <span class="bio-tag">{{ $skill }}</span>
            @endforeach
        </div>
        @endif
    </div>
</div>

{{-- ── Bio Card ── --}}
<div class="card fade-up fade-up-2" style="margin-bottom:1.5rem;">
    <p style="font-size:0.9rem;line-height:1.8;color:var(--text-secondary);font-weight:300;">
        {{ $data['profile']['bio'] }}
    </p>
</div>

{{-- ── Info Stats ── --}}
<div class="stat-row fade-up fade-up-3">
    @if(!empty($data['profile']['location']))
    <div class="stat-pill">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/>
        </svg>
        <strong>{{ $data['profile']['location'] }}</strong>
    </div>
    @endif

    @if(!empty($data['profile']['availability']))
    <div class="stat-pill">
        <span style="width:8px;height:8px;background:#34d399;border-radius:50%;flex-shrink:0;"></span>
        <strong>{{ $data['profile']['availability'] }}</strong>
    </div>
    @endif

    @if(!empty($data['profile']['experience']))
    <div class="stat-pill">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/>
        </svg>
        <strong>{{ $data['profile']['experience'] }}</strong>
    </div>
    @endif
</div>

@endsection
