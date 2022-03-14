@extends('layouts.app')

@section('welcome')
<div class="d-flex flex-wrap justify-content-between m-3">
    <div class="search-form">
        <form action="{{route('search')}}" method="GET">
            <div class="d-flex flex-row justify-content-around">
                <input class="form-control mr-3" type="search" placeholder="Search documents by name" name="search">
                <button type="submit" class="btn btn-secondary">Search</button>
            </div>
        </form>
    </div>
    <div>
        <a href="{{route('create')}}">
            <button class="btn btn-secondary">Add a new document</button>
        </a>
    </div>
    
</div>

<div class="table-responsive">
    <table class="table table-dark">
        <thead class="thead-light">
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
                    |
                    <a href="{{route('delete',  ["id"=>$document->id])}}">Delete</a>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>



@endsection