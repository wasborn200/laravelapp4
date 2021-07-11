@extends('layouts.helloapp')

@section('title', 'Thread.Add')

@section('menubar')
    @parent
    スレッド作成ページ
@endsection

@section('content')
    <table>
        <form action="/thread/add" method="post">
            {{ csrf_field() }}
            <tr><th>person id:</th>
                <td><input type="number" name="user_id"
                           value="{{$user->id}}" /></td>
            </tr>
            <tr><th>title:</th>
                <td><input type="text" name="title"/></td>
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
