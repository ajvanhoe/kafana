<nav id="primary-menu" class="style-5">

    <ul class="norightborder norightpadding norightmargin">
        <li class="current"><a href="{{route('welcome')}}"><div><i class="icon-home2"></i>@lang('content.menu_home')</div></a>
        <li><a href="#"><div><i class="icon-file-alt"></i>@lang('content.menu_menu')</div></a></li>
        <li><a href="#"><div><i class="icon-picture"></i>@lang('content.menu_gallery')</div></a></li>
        <li><a href="#"><div><i class="icon-pencil2"></i>@lang('content.menu_blog')</div></a></li>
        <li><a href="#"><div><i class="icon-map-marker2"></i>@lang('content.menu_contact')</div></a></li>
        
        @if(session('locale') == 'en')
        <li><a href="{{ route('set.locale', ['locale'=>'sr']) }}"><div><i class="icon-line-flag"></i>Srpski</div></a></li>
        @else
        <li><a href="{{ route('set.locale', ['locale'=>'en']) }}"><div><i class="icon-line-flag"></i>English</div></a></li>
        @endif

    </ul>

</nav><!-- #primary-menu end -->