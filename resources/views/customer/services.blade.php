@extends('layouts.Customer')

@section('title', 'Services')

@section('content')
    <style>
        body {
            background-color: rgb(245,198,69);
        }
        .products {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            align-items: center;
            padding: 50px;
            row-gap: 2rem;
        }
        .product {
            justify-content: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }
        .nameprice {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .desc {
            max-width: 60%;
        }
        
        .type p {
            max-width: 5rem;
        }
        .type {
            width: 200px;
        }
        @media(max-width:1000px) {
            .products {
                display: flex;
                flex-direction: column;
                
            }
        }
    </style>
    <div class="products">
        @foreach ($services as $service)
            <div class="product">
                <div class="productimg">
                    <img src="{{$service->image}}" alt="">
                </div>
                <div class="nameprice" style="color: rgb(100, 206, 187);">
                    <h2>{{$service->name}}</h2>
                    <h2>${{$service->price}}</h2>
                </div>
                @if ($service->id === 6)
                    <form action="" method="post">
                        <input type="hidden" name="selection" value="{{$service->id}}">
                        <input type="submit" name="bookappt" class="bookNow" value="Book Now!" />
                    </form>
                @elseif($service->id === 7)
                    <form action="" method="post">
                        <input type="hidden" name="selection" value="{{$service->id}}">
                        <input type="submit" name="bookappt" class="bookNow" value="Book Now!" />
                    </form>
                @elseif($service->id === 8)
                    <form action="" method="post">
                        <input type="hidden" name="selection" value="{{$service->id}}">
                        <input type="submit" name="bookappt" class="bookNow" value="Book Now!" />
                    </form>
                @endif
                <div class="desc" style="color: rgb(245,198,69); font-family: spe;">
                    <p>{{$service->description}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <section class="header">
        <img src="{{asset('images/whaticanreadtarot.webp')}}" alt="">
    </section>
    <section class="maincontent" style="flex-direction: column; color: rgb(245,198,69);">
        <div class="types" style="display: grid; grid-template-columns: repeat(2,1fr); gap: 5rem; font-family: spe;">
            <div class="type" style="grid-column: 1; display:flex; align-items: center; gap: 2rem; justify-content:space-evenly">
                <img src="{{asset('images/heart.webp')}}" alt="">
                <p>Love and Relationships</p>
            </div>
            <div class="type" style="grid-column: 2; display:flex; align-items: center; gap: 2rem; justify-content:space-evenly">
                <img src="{{asset('images/target.webp')}}" alt="">
                <p>Guidance for Future Goals and Desires</p>
            </div> 
            <div class="type" style="grid-column: 1; display:flex; align-items: center; gap: 2rem; justify-content:space-evenly">
                <img src="{{asset('images/scroll.webp')}}" alt="">
                <p>Career: New Opportunities and Promotions</p>
            </div>
            <div class="type" style="grid-column: 2; display:flex; align-items: center; gap: 2rem; justify-content:space-evenly">
                <img src="{{asset('images/zoso.webp')}}" alt="">
                <p>Inner Growth and Spiritual Development</p>
            </div>
        </div>
        <img src="{{asset('images/littyreadingslogobig.webp')}}" alt="">
    </section>
@endsection