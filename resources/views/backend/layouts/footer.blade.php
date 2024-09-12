<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            @if($setting->first()->footer != null)
                <span>{{ $setting->first()->footer }} </span>
            @endif
            | Design and Development By <a target="_blanck" href="https://nugortechit.com/">Nugortech it</a>
          </p>
    </div>
</footer>
