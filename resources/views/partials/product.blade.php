@foreach ($products as $item)
    <div class="product{{ $item->id }}">
        <img src="{{ $item->image }}" alt="">
        <div class="contentimage">
            <h4>{{ $item->nama }}</h4>
            <h5>Price: {{ $item->harga }}</h5>
            <h6>Description: {{ $item->deskripsi }}</h6>
        </div>
    </div>    
@endforeach

