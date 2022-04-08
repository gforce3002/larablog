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
            <label for=""></label>
            <input type="text" name="">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>