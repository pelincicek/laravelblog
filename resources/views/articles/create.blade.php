@extends('layout')

@section('content')


<form action="{{ route('storeArticle') }}" method="post" class=form>
    @csrf
    <label for="inpTitle">Başlık</label><br>
    <input type="text" name="title" id="inpTitle" class="form-control"><br>
    <label for="txtContent">İçerik</label><br>
    <textarea name="content" id="txtContent" cols="30" rows="10" class="form-control"></textarea><br>
    <button type="submit" class="btn btn-primary btn-block">Ekle</button>
</form>
@endsection