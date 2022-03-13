@extends('layouts.app')

@section('welcome')
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Subcategory Id</th>
            <th>Deleted</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($documents as $document)
        <tr>
            <td>{{$document->id}}</td>
            <td>{{$document->name}}</td>
            <td>{{$document->description}}</td>
            <td>{{$document->subcategory_id}}</td>
            <td>{{$document->deleted}}</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection