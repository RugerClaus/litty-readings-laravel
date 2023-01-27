@extends('layouts.Master')

@section('content')
    
        
    <section class="article">
        <table>
            <tr>
                <td>
                    Date Created: 
                </td>
                <td>
                    Date Updated: 
                </td>
                <td>
                    Article: 
                </td>
                <td>
                    Article ID:
                </td>
            </tr>
            @foreach ($articles as $article)
                <tr class="tr">
                    <td>{{ $article->created_at }}</td>
                    <td>{{ $article->updated_at }}</td>
                    <td>{!! $article->article !!}</td>
                    <td>{{ $article->id }}</td>
                    <td>
                        <form action="{{route('delete.article')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$article->id}}">
                            <input type="submit" class="btn" value="Delete">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('edit.article')}}" method="get">
                            @csrf
                            <input type="hidden" name="id" value="{{$article->id}}">
                            <input type="submit" class="btn" value="Edit">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
        
    
@endsection