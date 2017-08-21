@extends('layouts.app')

@section('content')
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Type</th>
            <th>Size</th>
            <th>User</th>
            <th>Downloaded</th>
            <th>Description</th>
            <th>Download</th>
        </tr>
    @foreach($data as $row)
        <tr>
            <td>{{$row->title}}</td>
            <td>{{$row->type}}</td>
            <td>{{$row->size}} bytes</td>
            <td>{{$row->user}}</td>
            <td>{{$row->downloaded}}</td>
            <td>{{$row->description}}</td>
            <td><a>Ce da skines</a></td>
        </tr>
    @endforeach
    </table>
@endsection