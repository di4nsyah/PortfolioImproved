@extends('layouts.app')

@section('content')

{{-- ══════════════════════════════
     HERO
══════════════════════════════ --}}
<div class="bio-hero fade-up fade-up-1">
    <img
        src="{{ $data['profile']['photo'] }}"
        alt="{{ $data['profile']['name'] }}"
        onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($data['profile']['name']) }}&background=c8d9ef&color=4a6fa5&size=240'"
    >
    <div>
        <p class="bio-hero-role">{{ $data['profile']['role'] ?? 'Software Developer' }}</p>
        <h1 class="bio-hero-name">{{ $data['profile']['name'] }}</h1>

        @if(!empty($data['profile']['skills']))
        <div style="margin-top:0.75rem;">
            @foreach($data['profile']['skills'] as $skill)
            <span class="bio-tag">{{ $skill }}</span>
            @endforeach
        </div>
        @endif
    </div>
</div>

{{-- Info pills --}}
<div class="stat-row fade-up fade-up-2" style="margin-top:0;margin-bottom:3.5rem;">
    @if(!empty($data['profile']['location']))
    <div class="stat-pill">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <strong>{{ $data['profile']['location'] }}</strong>
    </div>
    @endif
    @if(!empty($data['profile']['availability']))
    <div class="stat-pill">
        <span style="width:7px;height:7px;background:var(--green);border-radius:50%;flex-shrink:0;"></span>
        <strong>{{ $data['profile']['availability'] }}</strong>
    </div>
    @endif
    @if(!empty($data['profile']['experience']))
    <div class="stat-pill">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
        <strong>{{ $data['profile']['experience'] }}</strong>
    </div>
    @endif
</div>

{{-- ══════════════════════════════
     ABOUT ME
══════════════════════════════ --}}
<section class="section fade-up fade-up-3">
    <p class="section-label">About Me</p>
    <h2 class="section-title">A little about myself</h2>
    <p class="section-desc">{{ $data['about']['story'] }}</p>

    <div class="card-flat" style="border-radius:var(--radius);">
        <div class="about-grid">
            @if(!empty($data['about']['learning_since']))
            <div class="about-meta-item">
                <span class="about-meta-label">Learning Since</span>
                <span class="about-meta-value">{{ $data['about']['learning_since'] }}</span>
            </div>
            @endif
            @if(!empty($data['about']['specialization']))
            <div class="about-meta-item">
                <span class="about-meta-label">Specialization</span>
                <span class="about-meta-value">{{ $data['about']['specialization'] }}</span>
            </div>
            @endif
            @if(!empty($data['about']['career_goal']))
            <div class="about-meta-item">
                <span class="about-meta-label">Career Goal</span>
                <span class="about-meta-value">{{ $data['about']['career_goal'] }}</span>
            </div>
            @endif
            @if(!empty($data['about']['currently_building']))
            <div class="about-meta-item">
                <span class="about-meta-label">Currently Building</span>
                <span class="about-meta-value">{{ $data['about']['currently_building'] }}</span>
            </div>
            @endif
        </div>
    </div>
</section>

{{-- ══════════════════════════════
     SKILLS
══════════════════════════════ --}}
<section class="section fade-up fade-up-4">
    <p class="section-label">Skills</p>
    <h2 class="section-title">Technologies I work with</h2>
    <p class="section-desc">A collection of tools and languages I've picked up along the way.</p>

    {{-- Skill Category Tags --}}
    <div class="skills-grid" style="margin-bottom:2rem;">
        @foreach($data['skills']['categories'] as $category)
        <div class="card-flat">
            <p class="skill-category-title">{{ $category['name'] }}</p>
            <div class="skill-tag-group">
                @foreach($category['items'] as $item)
                <span class="skill-tag">{{ $item }}</span>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

    {{-- Skill Bars --}}
    <div class="card-flat">
        <p class="skill-category-title" style="margin-bottom:1.25rem;">Proficiency</p>
        <div class="skill-bars">
            @foreach($data['skills']['proficiency'] as $skill)
            <div class="skill-bar-item">
                <div class="skill-bar-header">
                    <span class="skill-bar-name">{{ $skill['name'] }}</span>
                    <span class="skill-bar-pct">{{ $skill['pct'] }}%</span>
                </div>
                <div class="skill-bar-track">
                    <div class="skill-bar-fill" style="width:{{ $skill['pct'] }}%;animation-delay:{{ $loop->index * 0.08 }}s;"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ══════════════════════════════
     STATS
══════════════════════════════ --}}
<section class="section fade-up fade-up-5">
    <p class="section-label">Numbers</p>
    <h2 class="section-title">By the numbers</h2>

    <div class="stats-grid">
        @foreach($data['stats'] as $stat)
        <div class="stat-card">
            <div class="stat-number">
                {{ $stat['number'] }}<span>{{ $stat['suffix'] ?? '' }}</span>
            </div>
            <div class="stat-label">{{ $stat['label'] }}</div>
        </div>
        @endforeach
    </div>
</section>

@endsection