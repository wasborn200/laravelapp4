@extends('layouts.helloapp')
<style>
    .pagination { font-size:14pt; }
    .pagination li { display: inline-block;}
    tr th a:link { color: white;}
    tr th a:visited {color: white;}
    tr th a:hover {color: white;}
    tr th a:active {color: white;}
</style>

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>こんにちは</p>

@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection
