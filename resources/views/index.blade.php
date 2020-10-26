<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>students</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Sesso</th>
                        <th scope="col">Data di nascita</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">*</th>
                            <td class = "pad_rig">{{$student->name}}</td>
                            <td>{{$student->lastname}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->date_of_birth}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>