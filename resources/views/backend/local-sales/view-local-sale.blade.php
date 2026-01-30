@extends('backend.admin')
@section('content')
    <div class="content-wrapper">
        @section('site-title')
            Admin | List Post
        @endsection
        @section('page-main-title')
            LIST PRODUCT
        @endsection

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="flex items-center">
                {{-- <h1 class="text-2xl font-bold text-gray-800">LIST PRODUCTS</h1> --}}
                <span class="text-sm text-gray-500">Total: {{ $row->count() }} Items</span>
            </div>
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Brand Name</th>
                                <th>Name</th>
                                <th>Type of Crop</th>
                                <th>Price</th>
                                <th>Packing Size</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($row as $local)
                                <tr>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <img src="../../storage/local_product/{{ $local->image_local }}"
                                                alt="Product Image" class="w-[60px] h-[80px] object-cover rounded">
                                        </ul>
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $local->brand }}</strong>
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $local->name }}</strong>
                                    </td>
                                    <td>{{ $local->type }}</td>
                                    <td>${{ $local->price }}</td>
                                    <td>{{ $local->capacity }}</td>
                                    <td>
                                        <div class="dropdown position-static">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ route('edit.localsales',['id'=>$local->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a href="javascript:void(0);" class="dropdown-item remove-post-key" data-id="{{ $local->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#basicModal">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-3">
                <form action="{{ route('remove.local.selling') }}" method="post">
                    @csrf
                    <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Are you sure to remove this post?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" class="remove-val" name="remove_id" id="remove_id">
                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>

            <hr class="my-5" />
        </div>
        <!-- / Content -->
    </div>
    </div>

@endsection