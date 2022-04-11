@extends('Dashboard.layout')

@section('content')
<h1>Crear un Post</h1>
    <!-- este fragmento de codigo es par visualizar los errrores de los campos
que deben de ser requeridos en codigo esta en la carpeta View/Dashboard/fragment/_error-form.blade.php
  -->
    @include('Dashboard.fragment._error-form')
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <label for="">Titulo</label>
            <input type="text" name="title">
            <label for="">Slug</label>
            <input type="text" name="slug">
            <label for="">Contenido:</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <label for="">Descripcion:</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            <label for="">Categoria</label>
            <select name="category_id" id="">
                <option value=""></option>
                @foreach($categories as $title => $id)
                    <option value="{{$id}}">{{$title}}</option>
                @endforeach
            </select>
            <label for="">Posteado</label>
            <select name="posted" id="">
                <option value="yes">Si</option>
                <option value="not">No</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection