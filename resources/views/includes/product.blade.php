
@foreach($catalog as $item)
    <h2>
        {{$item->name}}
    </h2>

    @foreach($item->products as $prod)
        <div>{{$prod->name}}</div>
        <img src="{{asset('storage/' . $prod->picture)}}">
    @endforeach
@endforeach
@foreach($product_none_category as $item)
    <div>
        {{$item->name}}
    </div>
@endforeach
