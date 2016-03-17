    <div class="navbar">
        <div class="navbar-inner">
            @if (Config::get('app.locale') === 'lt')
                <a id="logo" href="{{ URL::to('/') }}">Feeria</a>
            @else
                <a id="logo" href="{{ Config::get('app.locale_prefix') }}">Feeria</a>
            @endif

            <ul class="nav">
                
                @if (Config::get('app.locale') === 'lt')
                    <li><a href="{{ URL::to('/') }}">{{ trans('header.menu.home') }}</a></li>
                @else
                    <li><a href="/{{ Config::get('app.locale_prefix') }}">{{ trans('header.menu.home') }}</a></li>
                @endif
                <li><a href="{{ trans('routes.about') }}">{{ trans('header.menu.about') }}</a></li>
                <li><a href="{{ trans('routes.projects') }}">{{ trans('header.menu.projects') }}</a></li>
                <li><a href="{{ trans('routes.request') }}">{{ trans('header.menu.request') }}</a></li>
                <li><a href="{{ trans('routes.services') }}">{{ trans('header.menu.services') }}</a></li>
                <li><a href="{{ trans('routes.testimonials') }}">{{ trans('header.menu.testimonials') }}</a></li>
                <li><a href="{{ trans('routes.contacts') }}">{{ trans('header.menu.contacts') }}</a></li>
                <hr>
                <li><a href="{{URL::to('/')}}">LT</a></li>
                <li><a href="{{URL::to('/en')}}">EN</a></li>
                <li><a href="{{URL::to('/ru')}}">RU</a></li>
            </ul>
        </div>
    </div>

                
                @if (Config::get('app.locale_prefix') === '' )
                    no prefix
                @else
                    prefix is {{ Config::get('app.locale_prefix') }}
                @endif