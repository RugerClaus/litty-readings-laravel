@extends('layouts.Master')

@section('content')
    <form action="{{route('add.service')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="">
        <input type="text" name="name" placeholder="Name: ">
        <textarea name="desc" id="" cols="30" rows="10" placeholder="Description: " maxlength="255"></textarea>
        <input type="text" name="price" placeholder="Price:">
        <input type="submit" value="Add to Services">
    </form>
@endsection