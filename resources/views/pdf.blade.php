<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pendaftaran Web Dev 2018</title>
    <style>
        html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        h1 {
            margin: .67em 0;
            font-size: 2em
        }

        td,
        th {
            padding: 5px;
           font-size: 13px;
        }

        .text-center {
            text-align: center
        }

    </style>
</head>

<body>
    <h1 class="text-center">Pendaftaran Web Dev 2018</h1>
    <table class="table">
        <thead>
            <tr class="text-center">
                <th>Nama</th>
                <th>NRP</th>
                <th>Kelas</th>
                <th>Email</th>
                <th>No. WA</th>
                <th>ID Line</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_registers as $user_register)
            <tr>
                <td>{{ $user_register->nama }}</td>
                <td>{{ $user_register->nrp }}</td>
                <td>{{ $user_register->kelas }}</td>
                <td>{{ $user_register->email }}</td>
                <td>{{ $user_register->no_wa }}</td>
                <td>{{ $user_register->id_line }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
