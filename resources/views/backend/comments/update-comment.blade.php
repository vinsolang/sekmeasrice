@extends('backend.admin')
@section('content')

@section('site-title')
    Admin | Edit Comment
@endsection

@section('page-main-title')
    EDIT COMMENT
@endsection

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xl-12">

            <form action="{{ route('submit.update.comment') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $row->id }}">

                <div class="card">
                    <div class="card-body">

                        <div class="row col-6">
                            {{-- Name --}}
                            <div class="mb-3 col-12">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="name" value="{{ $row->name }}">
                            </div>

                            {{-- Comment --}}
                            <div class="mb-3 col-12">
                                <label class="form-label">Comment</label>
                                <textarea class="form-control" name="comment">{{ $row->comment }}</textarea>
                            </div>

                            {{-- Profile --}}
                            <div class="mb-5">
                                <label class="block mb-2">Profile</label>

                                <img src="{{ asset('assets/comments/profile/'.$row->profile) }}" 
                                    class="w-20 h-20 rounded-full mb-3">

                                <input type="file" name="profile" class="form-control">
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <a href="{{ route('view.comment') }}" class="btn btn-outline-dark">Cancel</a>
                            <input type="submit" value="Update" class="btn btn-success">
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
