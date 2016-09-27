<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>@yield('sidebar-title', 'General')</h3>
        <ul class="nav side-menu">
            @foreach($menuBuilder->getButtons() AS $button)
                @include('gentelella::elements.button', ['button' => $button])
            @endforeach
        </ul>
    </div>
</div>