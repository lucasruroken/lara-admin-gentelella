<ul class="nav side-menu">
    @foreach($menuBuilder->getButtons() AS $button)
        @include('gentelella::elements.button', ['button' => $button])
    @endforeach
</ul>