@extends('backend.admin')
@section('content')

@section('site-title')
    Admin | View media
@endsection
@section('page-main-title')
    VIEW MEDIA
@endsection

@section('content')
    <div class="row mx-4 my-2">
        <div class="card">
            <h5 class="card-header">
                @yield('site-title')
            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>thumbnail</th>
                            <th>Description</th>
                            <th>Created_AT</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($row as $media)
                              <tr>
                                <td>{{ $media->id }}</td>
                                <td>
                                    <span class="short-text">
                                        {!! nl2br(e(\Illuminate\Support\Str::limit($media->title, 20))) !!}
                                    </span>
                                    <span class="full-text d-none" style="white-space: pre-line;">
                                        {!! nl2br(e($media->title)) !!}
                                    </span>
                                    <a href="javascript:void(0);" class="toggle-text text-primary">Read more</a>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <img src="../../storage/local_product/{{ $media->image_media }}"
                                                alt="Product Image" class="w-[80px] h-[70px] object-contain rounded">
                                    </ul>
                                </td>
                                <td>
                                    <span class="short-text">
                                        {!! nl2br(e(\Illuminate\Support\Str::limit($media->description, 20))) !!}
                                    </span>
                                    <span class="full-text d-none" style="white-space: pre-line;">
                                        {!! nl2br(e($media->description)) !!}
                                    </span>
                                    <a href="javascript:void(0);" class="toggle-text text-primary">Read more</a>
                                </td>
                                <td>{{ $media->created_at}}</td>
                                <td>
                                    <div class="dropdown position-static">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ route('edit.media', ['id'=>$media->id]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a href="javascript:void(0);" class="dropdown-item remove-post-key" data-id="{{ $media->id }}"
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

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <small class="text-light fw-semibold">Default</small>
                <div class="mt-3">

                    <!-- Modal -->
                    <div class="mt-3">
                        <form action="{{ route('submit.remove.media') }}" method="post">
                            @csrf
                            <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Are you sure to remove this
                                                post?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="text" class="remove-val" name="remove_id" id="remove_id">
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection