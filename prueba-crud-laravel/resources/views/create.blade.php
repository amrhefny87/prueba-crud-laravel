@extends('layouts.app')

@section('create')

<div class="card text-center mx-5 mt-5">
  <div class="card-header">
    Create Document
  </div>
  <div class="card-body">
  <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="d-flex flex-row mb-3">
            <label class="label-edit" for="name">Document Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        
        <div class="d-flex flex-row mb-3">
            <label class="label-edit" for="description">Description</label>
            <input type="text" class="form-control" name="description">
        </div>

        <div class="d-flex flex-row mb-3">
            <label class="label-edit" for="">Subcategory / Category</label>
            <select class="form-control" name="subcategory_id" id="inputSubcategory_id" required="required">
                <option value="">--- Choose a Subcategory / Category ---</option>
                @foreach ($subcategories as $subcategory)
                <option name="subcategory_id" value="{{$subcategory->id}}">{{$subcategory->name}} / {{$subcategory->category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex flex-row justify-content-around">
            <input class="button-edit btn btn-secondary" type="submit" value="Save">
            <a class="button-edit btn btn-secondary" href="{{ route('index') }}">
                Cancel
            </a>
            
            
        </div>
    </form>
  </div>
</div>
@endsection