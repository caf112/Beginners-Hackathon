@extends('layouts.app')
@section('content')
<p><a href="{{ route('articles.create') }}">記事を書く</a></p>
@foreach ($articles as $article)
<article class="article-item">
    <div class="article-title">
        <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
    </div>
    <div class="article-info">{{ $article->created_at }}</div>
</article>
<form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('articles.destroy', $article) }}" method="post">
    @csrf 
    @method('delete')
    <button type="submit">削除</button>
</form>
@endforeach
@endsection()