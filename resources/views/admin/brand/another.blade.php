<x-.admin.layouts.master>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Brands List <a href="{{ route('brands.list') }}">
                                        < </a>
                                            <button type="button" class="btn btn-primary float-end"
                                                data-bs-toggle="modal" data-bs-target="#addItemModal"> Add Brand
                                            </button>
                                </h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">sl</th>
                                            <th scope="col">name</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $brand)
                                            <tr>
                                                <td>{{ $brand->id }}</td>
                                                <td>{{ $brand->name }}</td>
                                                <td>{{ $brand->slug }}</td>
                                                <td>{{ $brand->status == 1 ? 'Visible' : 'Hidden' }}</td>
                                                <td>
                                                    {{-- <button type="button" class="btn btn-info editbtn">
                                                        Edit
                                                    </button> --}}
                                                    <!-- Button trigger modal -->
                                                    <a href="#exampleModal{{ $brand->id }}" class="btn btn-info"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $brand->id }}">
                                                        Edit
                                                    </a>
                                                    @include('admin.brand.action')
                                                    <a href="#deleteModal{{ $brand->id }}" class="btn btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $brand->id }}">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-.admin.layouts.master>
