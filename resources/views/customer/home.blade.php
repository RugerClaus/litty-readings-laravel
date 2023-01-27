@extends('layouts.Customer')

@section('title', 'Home')

@section('content')
    <section class="header">
        <img src="{{asset('images/whoiam.webp')}}" alt="">
    </section>
    <section class="maincontent" style="display: flex;"> 
        <div class="imgwrapper">
            <img src="{{asset('images/littyreadingsphoto.webp')}}" alt="Reina Meza">
        </div>
        <div class="text">
            <p>
                @foreach ($blurb as $blur)
                    {{ $blur->introblurb }}
                @endforeach
            </p>
            <div class="logo">
                <img src="{{asset('images/littyreadingslogo.webp')}}" alt="Litty Readings Logo">
            </div>
        </div>
    </section>
@endsection