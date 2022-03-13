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
    <!-- <select name="subcategory_id" id="subcategory_id">
        <option value="">--- Choose a Subcategory / Category ---</option>
    </select> -->
    <input type="submit" value="Save">
</form>

@endsection