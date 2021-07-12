@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    @if ($item != null)
        <table width="400px">
            <tr>
                <th width="50px">title</th>
                <td>{{$item->title}}</td>
            </tr>
            <tr>
                <th width="50px">message</th>
                <td>{{$item->message}}</td>
            </tr>
        </table>
        <a href="../reply/add?thread_id={{$item->id}}">
            メッセージ作成
        </a>
    @endif
    @if ($replies != null)
        @foreach($replies as $reply )
            <table width="400px">
                <tr>
                    <th width="50px">{{$reply->user->name}}</th>
                    <td  width="400px">{{$reply->message}}</td>
                    <td>{{$reply->created_at}}</td>
                </tr>
            </table>
        @endforeach
    @endif
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection
