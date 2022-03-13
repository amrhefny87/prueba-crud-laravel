@extends('layouts.app')

@section('create')
<form action="{{ route('store') }}" method="post">
    @csrf
    <label for="name">Document Name</label>
    <input type="text" name="name">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description">
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