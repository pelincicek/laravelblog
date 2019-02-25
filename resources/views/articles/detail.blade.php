@extends('layout')

@section('content')

<h1>{{$article->title}}</h1>
<p>
    {{$article->content}}
</p>
<hr>
Oluşturma :   {{$article->created_at->diffForHumans()}} <br>
Güncelleme :  {{$article->updated_at->diffForHumans()}}
<hr>
<a href="{{ route('editArticle', $article)}}">Düzenle </a>

<form action="{{ route('deleteArticle', $article)}}" onsubmit="return confirm('Gerçekten mi? :( ')" method="post">
    @METHOD('DELETE')
    @csrf
    <button type="submit">Sil</button>
</form>

<hr>
<a href="{{ route('articles')}}">Listeye dön </a>


@endsection