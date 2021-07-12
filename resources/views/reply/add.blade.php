@extends('layouts.helloapp')

@section('title', 'Reply.Add')

@section('menubar')
    @parent
    投稿作成ページ
@endsection

@section('content')
    <table>
        <form action="/reply/add" method="post">
            {{ csrf_field() }}
            <tr><th>thread id:</th>
                <td><input type="number" name="thread_id"
                           value="{{$thread_id}}" /></td>
            </tr>
            <tr><th>user id:</th>
                <td><input type="number" name="user_id"
                           value="{{$user->id}}" /></td>
            </tr>
            <tr><th>message:</th>
                <td><input type="text" name="message"/></td>
            </tr>
            <tr><th></th>
                <td><input type="submit"
                           value="send"/></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
    copyright 2021 syota.
@endsection
