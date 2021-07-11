@extends('layouts.helloapp')

@section('title', 'Thread.index')

@section('menubar')
    @parent
    スレッド一覧
@endsection

@section('content')
    <table>
        <tr><th>Title</th></tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->title}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 syota.
@endsection
