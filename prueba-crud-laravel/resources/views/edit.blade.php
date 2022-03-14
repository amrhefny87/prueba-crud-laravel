@extends('layouts.app')

@section('edit')

<div class="card text-center mx-5 mt-5">
  <div class="card-header">
    Edit Document
  </div>
  <div class="card-body">
  <form action="{{ route('update', $document->id) }}" method="PUT">
        @csrf
        
        <div class="d-flex flex-row mb-3">
            <label class="label-edit" for="name">Document Name</label>
            <input type="text" class="form-control" name="name" value="{{$document->name}}">
            
        </div>
        <div class="alert-danger mb-3">
                {{$errors->first()}}
        </div>
        
        <div class="d-flex flex-row mb-3">
            <label class="label-edit" for="description">Description</label>
            <input type="text" class="form-control" name="description" value="{{$document->description}}">
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