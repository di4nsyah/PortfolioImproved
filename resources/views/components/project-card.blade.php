@props(['project'])

<article class="project-card fade-up">
    {{-- Image --}}
    @if(!empty($project['image']))
    <img
        src="{{ $project['image'] }}"
        alt="{{ $project['title'] }}"
        loading="lazy"
        onerror="this.parentElement.querySelector('.img-placeholder').style.display='flex'; this.style.display='none';"
    >
    @endif

    {{-- Fallback placeholder --}}
    <div class="img-placeholder" style="
        display:{{ empty($project['image']) ? 'flex' : 'none' }};
        width:100%;height:180px;
        background:linear-gradient(135deg, rgba(108,142,191,0.1), rgba(108,142,191,0.05));
        align-items:center;justify-content:center;
        color:var(--text-muted);font-size:0.75rem;letter-spacing:0.05em;
    ">
        NO IMAGE
    </div>

    {{-- Body --}}
    <div class="project-card-body">
        {{-- Tag (optional) --}}
        @if(!empty($project['tag']))
        <span style="display:inline-block;padding:0.2rem 0.6rem;background:var(--accent-soft);color:var(--accent);border-radius:100px;font-size:0.7rem;font-weight:500;margin-bottom:0.75rem;letter-spacing:0.03em;">
            {{ $project['tag'] }}
        </span>
        @endif

        <h3 class="project-card-title">{{ $project['title'] }}</h3>
        <p class="project-card-desc">{{ $project['description'] }}</p>

        <a href="{{ $project['link'] ?? '#' }}" class="project-card-link" target="{{ Str::startsWith($project['link'] ?? '', 'http') ? '_blank' : '_self' }}" rel="noopener">
            View Project
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12,5 19,12 12,19"/>
            </svg>
        </a>
    </div>
</article>
