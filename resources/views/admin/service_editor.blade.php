@extends('layouts.Master')

@section('content')
<style>
    .editService {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        gap: 2rem;
        padding: 50px;
    }
    .editService img {
        align-self: center;
        max-width: 60%;
    }
    .editService h2 {
        align-self: center;
    }
</style>
    <section class="editService">
        @foreach ($services as $service)
            <img src="{{asset($service->image)}}" alt="">
            <h2>Update Service Details</h2>
            <form action="{{route('update.service')}}" method="post">
                @csrf
                <input type="hidden" name='id' value="{{$service->id}}">
                <input type="text" name="name" value="{{$service->name}}">
                <textarea name="desc" id="" cols="30" rows="10" maxlength="255">{{$service->description}}</textarea>
                <input type="text" name="price" value="{{$service->price}}">
                <input type="submit" value="Update Details">
            </form>
            <h2>Update Image for Service</h2>
            <form action="{{route('update.service.image')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$service->id}}">
                <input type="file" name="image">
                <input type="submit" value="Update Image">
            </form>
        @endforeach
    </section>
@endsection