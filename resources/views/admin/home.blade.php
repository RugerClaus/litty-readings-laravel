@extends('layouts.Master')

@section('content')
    <h1>Create A Blog Post</h1>
    <form class="textEditor" action="{{route('create.article')}}" method="post" id="edithomeform">
        @csrf
        <textarea name="body" value="" class="texteditor" id="body"></textarea>
        <input class="btn" type="submit" value="Submit">
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@endsection