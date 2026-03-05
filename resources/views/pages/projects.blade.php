@extends('layouts.app')

@section('content')

<h1 class="page-title fade-up fade-up-1">Projects</h1>
<p class="page-subtitle fade-up fade-up-1">A selection of things I've built</p>

{{-- Project count --}}
@if(count($data['projects']) > 0)
<p class="fade-up fade-up-2" style="font-size:0.8rem;color:var(--text-muted);margin-bottom:2rem;letter-spacing:0.03em;">
    {{ count($data['projects']) }} {{ Str::plural('project', count($data['projects'])) }}
</p>
@endif

{{-- Grid --}}
<div class="fade-up fade-up-2" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:1.5rem;">
    @forelse($data['projects'] as $project)
        <x-project-card :project="$project"/>
    @empty
        <p style="color:var(--text-muted);font-size:0.875rem;grid-column:1/-1;">No projects added yet.</p>
    @endforelse
</div>

@endsection
