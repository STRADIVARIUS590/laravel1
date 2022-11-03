<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="http://127.0.0.1:8000/clients/" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre</label>
        <input type="text" name="name" value={{$client->name}}>

        <br>
        
        <label for="email">Correo</label>|  
        <input type="email" name="email" value={{$client->email}} >
        
        <br>
        
        <label for="phone_number">telefono</label>
        <input type="text" name="phone_number" value={{$client->phone_number}}>

        <input type="hidden" name="id" id="" value={{$client->id}}>
        
        <br>
        <input type="submit" name="Actualizar">
    </form>
</body>
</html>