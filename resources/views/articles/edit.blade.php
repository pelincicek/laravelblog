@extends('layout')

@section('content')

<form action="{{ route('updateArticle', $article) }}" method="post">
    @METHOD('PUT')
    @csrf
    <label for="inpTitle">Başlık</label><br>
    <input type="text" name="title" id="inpTitle" value ="{{$article->title}}"><br>
    <label for="txtContent">İçerik</label><br>
    <textarea name="content" id="txtContent" cols="30" rows="10">{{$article->content}}</textarea><br>
    <button type="submit">Ekle</button>
</form>

@endsection