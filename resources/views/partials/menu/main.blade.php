<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

    @foreach($items as $menu_item)

        @if(count($menu_item->children) >= 1)

            <li class="has-children">
                <a href="@if(Route::has($menu_item->route)) {{ route($menu_item->route) }} @endif" class="nav-link text-left font-weight-bold">
                    {{ $menu_item->title }}
                </a>

                <ul class="dropdown">
                    @foreach($menu_item->children as $item)
                        <li>
                            <a href="@if(Route::has($item->route)) {{ route($item->route) }} @endif" class="font-weight-bold">
                                {{$item->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </li>

        @else

            <li>
                <a href="@if(Route::has($menu_item->route)) {{ route($menu_item->route) }} @endif" class="nav-link text-left font-weight-bold">
                    {{ $menu_item->title }}
                </a>
            </li>

        @endif

    @endforeach

</ul>
