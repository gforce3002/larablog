<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Post</title>
</head>
<body>
    <h1>Entro a la vista create</h1>
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
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <label for="">Categoria</label>
            <select name="category_id" id="">
                <option value=""></option>
                @foreach($categories as $c)
                    <option value="{{$c->id}}">{{$c->title}}</option>
                @endforeach
            </select>
            <label for="">Posteado</label>
            <select name="posts" id="">
                <option value="yes">Si</option>
                <option value="not">No</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>