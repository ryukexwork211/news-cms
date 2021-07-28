@extends('adminlte::page')

@section('title', 'List categories')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add categories</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('category.list')}}">Categories</a></li>
                    <li class="breadcrumb-item active">Add new</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@stop

@section('content')
    {!! FlashMessage::getMessage(request()) !!}
    <div class="card card-info">
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST">
            @csrf
            @if (isset($category))
                <input type="hidden" name="id" value="{{$category['id']}}">
            @endif
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') ?? $category['name'] ?? '' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="slug" class="col-sm-2 col-form-label">Slug <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{{ old('slug') ?? $category['slug'] ?? '' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="position" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="position" placeholder="Position" name="position" value="{{ old('position') ?? $category['position'] ?? '' }}">
                    </div>
                </div>
                {{--<div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Parent</label>
                    <div class="col-sm-10">
                        <x-adminlte-select2 name="parent" data-placeholder="Select a parent">
                            <option/>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </x-adminlte-select2>
                    </div>
                </div>--}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-info">Save</button>
                <a href="{{route('category.list')}}" class="btn btn-default">Cancel</a>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
@endsection
