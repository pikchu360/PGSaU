@if ($item['submenu'] == [])
    <li class="nav-item">
        <a class="nav-link btn-primary" style="color:white;"
        href="{{ url($item['pagina']) }}">{{ $item['etiqueta'] }} <span class="sr-only">(current)</span></a>      
    </li>
@else
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn-primary" style="color:white;" href="#" id="navbarDropdown"
        role="button" data-toggle="dropdown" aria-haspopup="true" aria-
        expanded="false">{{ $item['etiqueta'] }} <span class="caret"></span></a>
        <div class="dropdown-menu" style="background-color: #e3f2fd;" aria-labelledby="navbarDropdown">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <a class="dropdown-item"
                    href="{{ url($submenu['pagina']) }}">{{ $submenu['etiqueta'] }}</a>
                @else
                    @include('shared.menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </div>
    </li>
@endif