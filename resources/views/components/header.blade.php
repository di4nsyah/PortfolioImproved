@props(['title'])

<header class="site-header">
    {{-- Logo --}}
    <a href="{{ route('biodata') }}" class="logo" style="text-decoration:none;">
        {{ $title }}
    </a>

    {{-- Spacer --}}
    <div style="flex:1;"></div>

    {{-- Current page indicator (desktop) --}}
    <span class="hidden md:block" style="font-size:0.75rem;color:var(--text-muted);letter-spacing:0.04em;">
        {{ ucfirst(request()->route()->getName() ?? 'portfolio') }}
    </span>

    {{-- Mobile hamburger --}}
    <button
        class="hamburger"
        @click="sidebarOpen = !sidebarOpen"
        aria-label="Toggle navigation"
        style="display:none;"
        x-show="true"
        x-bind:class="{ 'md:hidden': true }"
    >
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round">
            <template x-if="!sidebarOpen">
                <g>
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="18" x2="21" y2="18"/>
                </g>
            </template>
            <template x-if="sidebarOpen">
                <g>
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </g>
            </template>
        </svg>
    </button>
</header>

<style>
@media (max-width: 768px) {
    .hamburger { display: flex !important; }
}
</style>
