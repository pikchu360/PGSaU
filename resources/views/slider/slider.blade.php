<div id="carousel-example" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($slides as $item)
            <li data-target="#carousel-example" data-slide-to="{{ $loop->index }}"
                class="{{ $loop->first ? ' active' : '' }}"></li>
        @endforeach
    </ol>
    <div class='carousel-inner'>
        @foreach($slides as $item)
            <div class="carousel-item {{ $loop->first ? ' active' : '' }}" style="border-color: white;">
                <center><img src="{{ url($item->url) }}" alt="{{ $item->title }}" style="margin: auto;" height=512 width=1024></center>
                <div class="carousel-caption">
                    <h1 style="color:#2e86c1; text-shadow: 5px 5px 5px black;">{{ $item->title }}</h1>
                    <h3 style="color:white; text-shadow: 5px 5px 5px black;">{{ $item->description}}</h3>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
<div id="editSlider">
    <a href="{{ route('images.index') }}">Editar Slider</a>
</div>
<!-- End Carousel Controls -->