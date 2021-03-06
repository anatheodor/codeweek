<footer>
    <div class="content">
        <div class="question">
            <div class="text">
                @lang('base.still_have_question') @lang('base.drop_us_a_line')
            </div>
            <div class="get-in-touch">
                @if(Route::current() && Route::current()->getName() == 'ambassadors')
                    <a href="mailto:info@codeweek.eu"><div class="button">@lang('base.get_in_touch')</div></a>
                @else
                    <a href="/ambassadors"><div class="button">@lang('base.get_in_touch')</div></a>
                @endif

                <div>
                    <img src="/images/get_in_touch.svg" class="static-image">
                </div>
            </div>

        </div>
        <div class="about">
            <img src="/images/EU_logo.png">
            <div class="phrase">
                <div class="text">@lang('base.footer_msg')</div>
                <div class="text"><a href="{{route('privacy')}}">{{ucfirst(mb_strtolower(__('privacy.title'),'UTF-8'))}}</a> - <a href="{{route('cookie')}}">@lang('cookie_policy.title')</a></div>
            </div>
            <img src="/images/logo.svg" class="logo_footer">
            <img src="/images/bubbles_footer.svg" class="static-image bubbles_footer">
        </div>
        <div class="social-media-buttons">
            <div class="social-network">
                <a href="https://www.facebook.com/codeEU/" target="_blank">
                    <img src="/images/facebook.svg" alt="Twitter" class="button-icon">
                    Facebook
                </a>
            </div>
            <div class="social-network">
                <a href="https://twitter.com/CodeWeekEU" target="_blank">
                    <img src="/images/twitter.svg" alt="Twitter" class="button-icon">
                    Twitter
                </a>
            </div>
            <div class="social-network">
                <a href="https://www.instagram.com/codeweekeu/" target="_blank">
                    <img src="/images/instagram.svg" alt="Twitter" class="button-icon">
                    Instagram
                </a>
            </div>
        </div>

    </div>
</footer>
