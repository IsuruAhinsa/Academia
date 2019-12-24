@foreach($items as $menu_item)
    <a href="@if(Route::has($menu_item->route)) {{ route($menu_item->route) }} @endif"><span class="{{ $menu_item->title }}"></span></a>
@endforeach
