@extends('layouts.app')

@section('edit')
<form action="{{ route('update', $document->id) }}" method="PUT">
    @csrf
    <label for="name">Document Name</label>
    <input type="text" name="name" value="{{$document->name}}">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" value="{{$document->description}}">
    <br>
    <label for="">Subcategory / Category</label>
    <select name="subcategory_id" id="inputSubcategory_id" required="required">
        <option value="">--- Choose a Subcategory / Category ---</option>
        @foreach ($subcategories as $subcategory)
        <option name="subcategory_id" value="{{$subcategory->id}}">{{$subcategory->name}} / {{$subcategory->category->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Save">
</form>

@endsection