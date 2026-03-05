@extends('layouts.app')

@section('content')

<h1 class="page-title fade-up fade-up-1">Education</h1>
<p class="page-subtitle fade-up fade-up-1">Academic background &amp; learning journey</p>

<div class="timeline fade-up fade-up-2">
    @forelse($data['education'] as $index => $edu)
    <div class="timeline-item">
        <div class="card">
            {{-- Year badge --}}
            @if(!empty($edu['year']))
            <span style="display:inline-block;padding:0.2rem 0.6rem;background:var(--accent-soft);color:var(--accent);border-radius:100px;font-size:0.7rem;font-weight:500;margin-bottom:0.75rem;letter-spacing:0.03em;">
                {{ $edu['year'] }}
            </span>
            @endif

            <h2 class="edu-title">{{ $edu['title'] }}</h2>
            <p class="edu-desc" style="margin-bottom:{{ !empty($edu['note']) ? '0.5rem' : '0' }}">{{ $edu['description'] }}</p>

            @if(!empty($edu['note']))
            <p style="font-size:0.775rem;color:var(--text-muted);margin-top:0.5rem;font-style:italic;">{{ $edu['note'] }}</p>
            @endif
        </div>
    </div>
    @empty
    <p style="color:var(--text-muted);font-size:0.875rem;">No education data added yet.</p>
    @endforelse
</div>

@endsection
