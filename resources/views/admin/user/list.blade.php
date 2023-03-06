@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contents')
        <h1>ユーザ一覧</h1>
        <table border="1">
        <tr>
            <th>ユーザID</th>
            <th>ユーザ名</th>
            <th>購入した「買うもの」の数</th>
        </tr>    
@foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</th>
            <td>{{ $user->name }}</th>
            <td>{{ $user->completed_shopping_list_num }}</th>
@endforeach
        </table>
@endsection