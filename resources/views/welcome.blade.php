@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" align="center" >
                    <h2>Selamat Datang Di Website Kami </h2>
                    <br>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example" >
                        <button type="submit" class="btn btn-warning"><a href="{{route('login')}}">Klik Untuk Login</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@endsection