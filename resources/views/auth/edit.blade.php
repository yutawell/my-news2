{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成2')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyNews</title>
    </head>
    <body>
        <h1>Myニュース作成画面</h1>
        <h1>応用課題４　edit</h1>
    </body>
</html>
@endsection