<header>
    <div class="header-menu">
        <div class="ctnr">
            <div class="inner">
                <div class="logo">
                    @if(isset($header['header']))
                    <a href="/" title="">
                        <img src="{{ asset($header['header']->image_path) }}" alt="{{ $header['header']->name }}">
                    </a>
                    @endif
                </div>
                <div class="menu">
                    <div class="close-menu-mb" onclick="close_menu_mb()">
                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z" fill="#000000"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="logo-menu">
                        @if(isset($header['header']))
                        <a href="/" title="">
                            <img src="{{ asset($header['header']->image_path) }}" alt="{{ $header['header']->name }}" loading="lazy">
                        </a>
                        @endif
                    </div>
                    <ul class="level1">
                        {{--<li class="item-level1 {{ request()->is('/') ? 'active' : '' }}">
                            <a href="/" title="" class="name-level1">
                                Trang chủ
                            </a>
                        </li>--}}

                        @if(isset($header['category_post']))
                        @foreach($header['category_post'] as $categoryPost)
                        @php
                        $parent = $categoryPost;
                        $isActiveParent = request()->is(ltrim($parent->slug,'/'));
                        foreach ($parent->childs()->where('active',1)->get() as $child) {
                        if (request()->is(ltrim($child->slug,'/'))) {
                        $isActiveParent = true;
                        break;
                        }
                        }
                        @endphp
                        <li class="item-level1 {{ $isActiveParent ? 'active' : '' }}">
                            <a href="{{$categoryPost->slug_full}}" title="" class="name-level1">
                                {{ $categoryPost->name }}
                                @if(count($categoryPost->childs->where('active',1)))

                                <span class="icon-arrow">
                                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g clip-path="url(#clip0_429_11251)">
                                                <path d="M7 10L12 15" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 15L17 10" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_429_11251">
                                                    <rect width="24" height="24" fill="white">
                                                    </rect>
                                                </clipPath>
                                            </defs>
                                        </g>
                                    </svg>
                                </span>

                                @endif
                            </a>
                            @if(count($categoryPost->childs->where('active',1)))
                            <svg class="svg-icon svg-icon-plus" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
                                <g>
                                    <rect class="icon-plus-y" width="54" height="4" rx="2" y="34" x="9"></rect>
                                    <rect class="icon-plus-x" width="4" height="54" rx="2" y="9" x="34"></rect>
                                </g>
                            </svg>
                            <ul class="level2">
                                @foreach($categoryPost->childs()->where('active',1)->orderBy('order')->get() as $item)
                                <li class="item-level2">
                                    <a href="{{$item->slug_full}}" class="name-level2">
                                        {{$item->name}}
                                        @if(count($item->childs->where('active',1)))

                                        <span class="icon-arrow">
                                            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <g clip-path="url(#clip0_429_11251)">
                                                        <path d="M7 10L12 15" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12 15L17 10" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_429_11251">
                                                            <rect width="24" height="24" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </g>
                                            </svg>
                                        </span>

                                        @endif
                                    </a>
                                    @if(count($item->childs->where('active',1)))
                                    <svg class="svg-icon svg-icon-plus" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
                                        <g>
                                            <rect class="icon-plus-y" width="54" height="4" rx="2" y="34" x="9"></rect>
                                            <rect class="icon-plus-x" width="4" height="54" rx="2" y="9" x="34"></rect>
                                        </g>
                                    </svg>
                                    <ul class="level3">
                                        @foreach($item->childs()->where('active',1)->orderBy('order')->get() as $child)
                                        <li class="item-level3">
                                            <a href="{{$child->slug_full}}" class="name-level3">
                                                {{$child->name}}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>

                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                        @endif

                        {{--@if (!empty($header['album']))
                        <li class="item-level1 ">
                            <a href="javascript:;" title="{{ $header['album']->name }}" class="name-level1">
                                {{ $header['album']->name }}

                                @if ($header['album']->childs->isNotEmpty())
                                <span class="icon-arrow">
                                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g clip-path="url(#clip0_429_11251)">
                                                <path d="M7 10L12 15" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 15L17 10" stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_429_11251">
                                                    <rect width="24" height="24" fill="white">
                                                    </rect>
                                                </clipPath>
                                            </defs>
                                        </g>
                                    </svg>
                                </span>
                                @endif

                            </a>

                            @if ($header['album']->childs->isNotEmpty())
                            <svg class="svg-icon svg-icon-plus" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
                                <g>
                                    <rect class="icon-plus-y" width="54" height="4" rx="2" y="34" x="9"></rect>
                                    <rect class="icon-plus-x" width="4" height="54" rx="2" y="9" x="34"></rect>
                                </g>
                            </svg>
                            @endif

                            @if ($header['album']->childs->isNotEmpty())
                            <ul class="level2">
                                @foreach ($header['album']->childs as $child)
                                <li class="item-level2">
                                    <a href="{{ $child->slug }}" class="name-level2">
                                        {{ $child->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>

                        @endif--}}

                        <li class="item-level1 {{ request()->routeIs('tracking.index') ? 'active' : '' }}">
                            <a href="{{ route('tracking.index') }}" title="Tra cứu hành trình đơn hàng" class="name-level1">
                                Tra cứu đơn hàng
                            </a>
                        </li>

                        <li class="item-level1 {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                            <a href="{{route('contact.index')}}" title="" class="name-level1">
                                Liên hệ
                            </a>
                        </li>
                    </ul>
                    {{-- <div class="header-right">
                        <h3>{{$header['header']->value}}</h3>
                    <ul>
                        @foreach($header['header']->childs()->where('active',1)->orderBy('order')->get() as $item)
                        <li><a href="{{$item->slug}}" title="icon" rel="nofollow" target="_blank">
                                {!!$item->value!!}
                            </a></li>
                        @endforeach
                    </ul>
                </div> --}}
            </div>
            <div class="header-right">
                <div class="btn-open-modal button-web sm" data-target="#modal-dktv">
                    Báo giá/Hợp tác
                </div>

                <a href="javascript:;" title="icon" class="icon-menu-m" onclick="open_menu_mb()">
                    <svg width="64px" height="64px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="currentColor" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z">
                            </path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    </div>
</header>

<div class="overlay-m" onclick="close_menu_mb()"></div>
<div class="overlay"></div>

@if(isset($header['header']))
<div class="box-box right" id="box-content">
    <div class="box-title">
        <div class="logo">
            <a href="/">
                <img src="{{ asset($header['header']->image_path) }}" alt="{{ $header['header']->name }}" loading="lazy">
            </a>
        </div>
        <div class="close">
            <svg class="svg-icon svg-icon--close " aria-hidden="true" id="" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" data-icon-theme="option_2" width="72" height="72" viewBox="0 0 72 72">
                <title></title>
                <g transform="rotate(-90 -0.00000157361 72)" id="Close">
                    <rect x="0" y="72" fill="none" height="72" width="72" id="Rectangle_29183"></rect>
                    <path d="m58.76152,133.58844l-22.762,-22.577l-22.762,22.577a1.413,1.413 0 0 1 -1.994,0l-0.828,-0.824a1.381,1.381 0 0 1 0,-1.976l22.973,-22.787l-22.973,-22.788a1.387,1.387 0 0 1 0,-1.98l0.828,-0.824a1.422,1.422 0 0 1 1.994,0l22.764,22.579l22.76,-22.579a1.425,1.425 0 0 1 2,0l0.828,0.824a1.39,1.39 0 0 1 0,1.98l-22.969,22.788l22.969,22.787a1.389,1.389 0 0 1 0,1.979l-0.828,0.82a1.415,1.415 0 0 1 -2,0l0,0.001z" id="Union_2"></path>
                </g>
            </svg>
        </div>
    </div>
    <div class="info-content">
        <div class="top">
            <img src="{{ asset($header['header']->icon_path) }}" alt="Manage footer content">
            <div class="text noi-dung">
                {!!$header['header']->description!!}
            </div>
            <div class="contact">
                <div class="icon">
                    <div class="img-wrap">
                        <img src="{{asset($header['header']->icon_path2)}}" alt="icon1" loading="lazy">
                    </div>
                    <div class="info-contact">
                        {!!$header['header']->content!!}
                    </div>
                </div>
                <div class="icon">
                    <div class="img-wrap">
                        <img src="{{asset($header['header']->icon_path3)}}" alt="icon2" loading="lazy">
                    </div>
                    <div class="info-contact">
                        {!!$header['header']->content2!!}
                    </div>
                </div>
                <div class="icon location">
                    <div class="img-wrap">
                        <img src="{{asset($header['header']->icon_path4)}}" alt="icon3" loading="lazy">
                    </div>
                    <div class="info-contact">
                        {!!$header['header']->content3!!}
                    </div>
                </div>
            </div>
            <div class="header-right">
                <h3>{{$header['header']->value}}</h3>
                <ul>
                    @foreach($header['header']->childs()->where('active',1)->orderBy('order')->get() as $item)
                    <li><a href="{{$item->slug}}" title="icon" rel="nofollow" target="_blank">
                            {!!$item->value!!}
                        </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif

@if(isset($header['dang_ky_tu_van']))
<div class="modal-overlayyy" id="modal-dktv">
    <div class="modal-content">
        <button type="button" class="close-btn-modal">
            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z" fill="currentColor"></path>
                </g>
            </svg>
        </button>
        <div class="inner">
            <div class="image-wrap">
                <img src="{{ asset($header['dang_ky_tu_van']->image_path) }}" alt="" />
            </div>
            <form action="{{ route('contact.storeAjax') }}" id="form-header" method="POST">
                <input type="hidden" name="check_robot" value="">
                <input type="hidden" name="title" value="{{ $header['dang_ky_tu_van']->value }}">
                <h2>{{ $header['dang_ky_tu_van']->value }}</h2>
                <div class="form-group">
                    <input type="text" name="name" placeholder="Nhập họ và tên*">
                </div>
                <div class="form-group">
                    <input type="number" name="phone" placeholder="Nhập số điện thoại*">
                </div>
                <div class="form-group">
                    <input type="text" name="email" placeholder="Nhập email">
                </div>

                <div class="form-group">
                    <textarea placeholder="Nội dung thêm" name="content" cols="20" rows="3"></textarea>
                </div>
                <button class="submit button-web sm">{!! $header['dang_ky_tu_van']->description !!}</button>
            </form>
        </div>


    </div>
</div>
@endif
