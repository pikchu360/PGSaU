<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @foreach ($menus as $key => $item)
                @if ($item['padre'] != 0)
                    @break
                @endif
                    @include('shared.menu-item', ['item' => $item])
            @endforeach
        </ul>
    </div>
</nav>