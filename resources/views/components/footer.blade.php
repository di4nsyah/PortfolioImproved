@props(['data'])

<footer class="site-footer">
    <span>
        &copy; {{ date('Y') }}
        <strong style="color:var(--text-secondary);font-weight:500;">{{ $data['profile']['name'] }}</strong>
    </span>
    <span style="letter-spacing:0.03em;">
        Built with Laravel &amp; Glassmorphism
        By Di4nsyah
    </span>
</footer>
