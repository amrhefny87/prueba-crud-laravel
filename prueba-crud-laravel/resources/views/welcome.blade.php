@extends('layouts.app')

@section('welcome')
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Subcategory</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($documents as $document)
        @if ($document->deleted != 1)
        <tr>
            <td>{{$document->id}}</td>
            <td>{{$document->name}}</td>
            <td>{{$document->description}}</td>
            <td>{{$document->subcategory->name}}</td>
            <td>{{$document->subcategory->category->name}}</td>
            <td>
                <a href="{{route('edit',  ["id"=>$document->id])}}">Edit</a>
                <a href="{{route('delete',  ["id"=>$document->id])}}">Delete</a>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>

@endsection