@extends('layouts.app')

@section('content')

{{-- ══════════════════════════════
     EDUCATION
══════════════════════════════ --}}
<section class="section fade-up fade-up-1">
    <p class="section-label">Education</p>
    <h2 class="section-title">Academic background</h2>
    <p class="section-desc">Where I studied and what I learned along the way.</p>

    <div class="timeline">
        @forelse($data['education'] as $edu)
        <div class="timeline-item">
            <div class="card">
                @if(!empty($edu['year']))
                <span class="edu-year">{{ $edu['year'] }}</span>
                @endif
                <h3 class="edu-title">{{ $edu['title'] }}</h3>
                <p class="edu-desc">{{ $edu['description'] }}</p>
                @if(!empty($edu['note']))
                <p style="font-size:0.775rem;color:var(--text-muted);margin-top:0.625rem;font-style:italic;font-weight:300;">
                    {{ $edu['note'] }}
                </p>
                @endif
            </div>
        </div>
        @empty
        <p style="color:var(--text-muted);font-size:0.875rem;">No education data added yet.</p>
        @endforelse
    </div>
</section>

{{-- ══════════════════════════════
     EXPERIENCE TIMELINE
══════════════════════════════ --}}
<section class="section fade-up fade-up-2">
    <p class="section-label">Journey</p>
    <h2 class="section-title">My developer timeline</h2>
    <p class="section-desc">A progressive look at how I've grown as a developer.</p>

    <div class="exp-timeline">
        @foreach($data['experience_timeline'] as $exp)
        <div class="exp-item">
            <div class="card">
                <p class="exp-year">{{ $exp['year'] }}</p>
                <h3 class="exp-title">{{ $exp['title'] }}</h3>
                <p class="exp-desc">{{ $exp['description'] }}</p>
                @if(!empty($exp['highlight']))
                <div style="margin-top:0.875rem;padding:0.625rem 0.875rem;background:var(--accent-soft);border-radius:8px;">
                    <span style="font-size:0.775rem;color:var(--accent);font-weight:500;">✦ {{ $exp['highlight'] }}</span>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection