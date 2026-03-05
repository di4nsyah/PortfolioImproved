@props(['data'])

<aside
    class="sidebar"
    :class="{ 'open': sidebarOpen }"
    id="sidebar"
    aria-label="Main navigation"
>
    {{-- ── Profile ── --}}
    <div class="sidebar-profile">
        <img
            src="{{ $data['profile']['photo'] }}"
            alt="{{ $data['profile']['name'] }}"
            onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($data['profile']['name']) }}&background=c8d9ef&color=4a6fa5&size=160'"
        >
        <p class="profile-name">{{ $data['profile']['name'] }}</p>
        <p class="profile-role">{{ $data['profile']['role'] ?? 'Software Developer' }}</p>
    </div>

    {{-- ── Navigation ── --}}
    <nav class="sidebar-nav" aria-label="Portfolio sections">
        <a href="{{ route('biodata') }}"   class="{{ request()->routeIs('biodata')   ? 'active' : '' }}">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
            </svg>
            Biodata
        </a>
        <a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'active' : '' }}">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3.3 2 8.7 2 12 0v-5"/>
            </svg>
            Education
        </a>
        <a href="{{ route('projects') }}"  class="{{ request()->routeIs('projects')  ? 'active' : '' }}">
            <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/>
            </svg>
            Projects
        </a>
    </nav>

    {{-- ── Social Links ── --}}
    @if(!empty($data['socials']))
    <div class="sidebar-socials">
        @if(!empty($data['socials']['github']))
        <a href="{{ $data['socials']['github'] }}" target="_blank" rel="noopener" title="GitHub">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.013-1.703-2.782.605-3.369-1.342-3.369-1.342-.454-1.155-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.03-2.683-.103-.253-.447-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.547 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.163 22 16.418 22 12c0-5.523-4.477-10-10-10z"/>
            </svg>
        </a>
        @endif
        @if(!empty($data['socials']['linkedin']))
        <a href="{{ $data['socials']['linkedin'] }}" target="_blank" rel="noopener" title="LinkedIn">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
        </a>
        @endif
        @if(!empty($data['socials']['email']))
        <a href="mailto:{{ $data['socials']['email'] }}" title="Email">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2,4 12,13 22,4"/>
            </svg>
        </a>
        @endif
    </div>
    @endif
</aside>
