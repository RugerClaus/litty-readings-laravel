@extends('layouts.Master')

@section('content')
    @foreach ($article as $art)
        <form action="{{ route('update.article') }}" style="background-color: white; width: fit-content; margin: auto auto auto auto; background-clip: content-box;" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$art->id}}">
            <textarea name="article" id="" cols="30" rows="10">
                {{$art->article}}
            </textarea>
            <input style="background-color: aqua; border: 0px; font-size: 2rem; padding: 2rem;" type="submit" value="Update">
        </form>
    @endforeach

    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas)</script>
@endsection