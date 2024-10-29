<footer>
    <div class="footerDesc m-auto">
        @if (isset($ACTIVE_TITLE) && $ACTIVE_TITLE != 'social')
            <img src="{{ asset('images/svg/Previous.svg') }}" class="prev" alt="footer Prev logo"/>
            <img src="{{ asset('images/Logos/Logo1.svg') }}" class="mood-logo mx-2" alt="footer Mood logo" />
            <img src="{{ asset('images/svg/Next.svg') }}" class="next" alt="footer Next logo"/>
        @endif
    </div>
</footer>