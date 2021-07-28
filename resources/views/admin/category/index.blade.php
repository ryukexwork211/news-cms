@extends('adminlte::page')

@section('title', 'List categories')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List categories</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Categories</li>
                </ol>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-2">
                <a href="{{route('category.add')}}" class="btn btn-success btn-block">Add new category</a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@stop

@section('content')
    @php
        $heads = [
            'No.',
            'Name',
            'Slug',
            'Position',
            'Created At',
            ['label' => 'Actions', 'width' => 20, 'no-export' => true],
        ];
    @endphp

    <x-adminlte-datatable id="list-categories" :heads="$heads">
        @foreach($categories as $index => $row)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->slug }}</td>
                <td>{{ $row->position }}</td>
                <td>{{ $row->created_at }}</td>
                <td>
                    <button type="button" class="btn btn-outline-primary "><i class="fa fa-edit"></i> Edit</button>
                    <button type="button" class="btn btn-outline-info "><i class="fa fa-eye"></i> Detail</button>
                    <button type="button" class="btn btn-outline-danger delete-category"><i class="fa fa-trash"></i> Delete</button>
                </td>
            </tr>
        @endforeach
    </x-adminlte-datatable>
@endsection
@push('js')
    <script>
        $(document).ready(function()
        {
            // Read flag from the controller.
            let shouldFire = @json($fireAlert ?? false);

            if (shouldFire) {
                Swal.fire('Success!', 'Entry Successfull', 'success');
            }

            $('.delete-category').on('click', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        });
    </script>
@endpush
