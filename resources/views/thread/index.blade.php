@extends('layouts.helloapp')

@section('title', 'Thread.index')

@section('menubar')
    @parent
    スレッド一覧
@endsection

@section('content')
    <table>
        <tr><th>Title</th><th>updated</th></tr>
        @foreach($items as $item)
            <tr>
                <td><a href="thread/show?id={{$item->id}}">
                        {{$item->title}}
                    </a></td>
                <td>{{$item->created_at}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2021 syota.
@endsection
