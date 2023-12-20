@php
    $config_social = json_decode(getValueSetting('config_social'));
@endphp

<div class="addthis-tools">
    <div class="sharethis-inline-share-buttons st-left  st-inline-share-buttons st-animated" id="st-1">
        <div class="st-total st-hidden">
            <span class="st-label"></span>
            <span class="st-shares">
                Shares
            </span>
        </div>
        @if (!empty($config_social->facebook))
            <div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
                <a href="{{ $config_social->facebook }}">
                    <img alt="facebook sharing button" src="{{ asset('assets/img/icon/facebook.svg') }}">
                </a>
            </div>
        @endif
        @if (!empty($config_social->twitter))
            <div class="st-btn" data-network="twitter" style="display: inline-block;">
                <a href="{{ $config_social->twitter }}">
                    <img alt="twitter sharing button" src="{{ asset('assets/img/icon/twitter.svg') }}">
                </a>
            </div>
        @endif
        @if (!empty($config_social->telegram))
            <div class="st-btn" data-network="telegram" style="display: inline-block;">
                <a href="{{ $config_social->telegram }}">
                    <img alt="telegram sharing button" src="{{ asset('assets/img/icon/telegram.svg') }}">
                </a>
            </div>
        @endif
        @if (!empty($config_social->reddit))
            <div class="st-btn" data-network="reddit" style="display: inline-block;">
                <a href="{{ $config_social->reddit }}">
                    <img alt="reddit sharing button" src="{{ asset('assets/img/icon/reddit.svg') }}">
                </a>
            </div>
        @endif
        @if (!empty($config_social->vk))
            <div class="st-btn" data-network="vk" style="display: inline-block;">
                <a href="{{ $config_social->vk }}"> <img alt="vk sharing button"
                        src="{{ asset('assets/img/icon/vk.svg') }}">
                </a>
            </div>
        @endif
        @if (!empty($config_social->messenger))
            <div class="st-btn" data-network="messenger" style="display: inline-block;">
                <a href="{{ $config_social->messenger }}"> <img alt="messenger sharing button"
                        src="{{ asset('assets/img/icon/messenger.svg') }}">
                </a>
            </div>
        @endif
        @if (!empty($config_social->whatsapp))
            <div class="st-btn" data-network="whatsapp" style="display: inline-block;">
                <a href="{{ $config_social->whatsapp }}"> <img alt="whatsapp sharing button"
                        src="{{ asset('assets/img/icon/whatsapp.svg') }}">
                </a>
            </div>
        @endif
        @if (!empty($config_social->pinterest))
            <div class="st-btn" data-network="pinterest" style="display: inline-block;">
                <a href="{{ $config_social->pinterest }}"><img alt="pinterest sharing button"
                        src="{{ asset('assets/img/icon/pinterest.svg') }}">
                </a>
            </div>
        @endif
        @if (!empty($config_social->getpocket))
            <div class="st-btn" data-network="getpocket" style="display: inline-block;">
                <a href="{{ $config_social->getpocket }}"> <img alt="pocket sharing button"
                        src="{{ asset('assets/img/icon/pocket.svg') }}">
                </a>
            </div>
        @endif
        @if (!empty($config_social->sharethis))
            <div class="st-btn st-last" data-network="sharethis" style="display: inline-block;">
                <a href="{{ $config_social->sharethis }}"> <img alt="sharethis sharing button"
                        src="{{ asset('assets/img/icon/sharethis.svg') }}">
                </a>
            </div>
        @endif

    </div>
</div>
