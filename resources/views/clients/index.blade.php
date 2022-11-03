<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <table>
            <th>
                <tr>
                    <td>#</td>
                    <td>name</td>
                    <td>email</td>
                    <td>phone</td>
                    <td>Action</td>
                </tr>
            </th>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>
                            {{$client->id}}
                        </td>
                        <td>
                            {{$client->name}}
                        </td>
                        <td>
                            {{$client->email}}
                        </td>
                        <td>
                            {{$client->phone_number}}
                        </td>
                        <td>
                            <a href="{{url('clients/edit/'.$client->id)}}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>