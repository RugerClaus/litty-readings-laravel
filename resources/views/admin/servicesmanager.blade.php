@extends('layouts.Master')

@section('content')
    <section>
        <table style="width: 80%; padding: 40px;">
            <tr>
                <td>Service ID:</td>
                <td>Service Name:</td>
                <td>Service Image:</td>
                <td>Service Description:</td>
            </tr>
            @foreach($services as $service)
                <tr class="tr">
                    <td>{{$service->id}}</td>
                   <td><h3>{{$service->name}}</h3></td>
                   <td><img src="{{$service->image}}" alt=""></td> 
                   <td>{{$service->description}}</td>
                   <td>
                        <form action="{{route('edit.service')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$service->id}}">
                            <input type="submit" class="btn" value="Edit">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('delete.service')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$service->id}}">
                            <input type="submit" class="btn" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection