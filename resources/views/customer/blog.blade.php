@extends('layouts.Customer')
@section('title', 'Blog')

@section('content')
    <div class="blogposts">
        @foreach($posts as $post)
        <div class="blogpost">
                <div class="article">
                    <p>
                        <?php 
                            $date =  $post->created_at;
                            $dt = new DateTime($date);
                            echo $dt->format('Y-m-d');
                            $interval = $dt->diff(new DateTime());
                        ?>
                    </p>
                    <p>{!! $post->article !!}</p>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        const articles = document.querySelectorAll('.article')

        articles.forEach(article => {
            article.innerHTML = article.innerHTML.replace(/[\[\]']+/g,'')
        })
    </script>
@endsection