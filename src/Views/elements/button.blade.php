<li>
    <a @if(!$button->hasButtons()) href="{{ $button->getLink() }}" @endif>
        @if($button->getIcon()) {{ $button->getIcon() }} @endif
        {{ $button->getName() }}
        @if($button->hasButtons()) <span class="fa fa-chevron-down"></span> @endif
    </a>

    @if($button->hasButtons())
        <ul class="nav child_menu">
            @foreach($button->getButtons() AS $subButton)
                @include('gentelella::elements.button', ['button' => $subButton])
            @endforeach
        </ul>
    @endif
</li>