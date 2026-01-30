@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | Add Post
    @endsection
    @section('page-main-title')
        ADD COMMENT
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="{{ route('submit.add.comment') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif
                        <div class="card-body">
                            <div class="row col-6">
                                {{--  Name --}}
                                    <div class="mb-3 col-12">
                                        <label class="form-label text-[#0F4634]">Name</label>
                                        <input class="form-control" type="text" name="name" value="">
                                        @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    {{-- Comment --}}
                                    <div class="mb-3 col-12">
                                        <label class="form-label text-[#0F4634]">Your Comment</label>
                                        <textarea class="form-control" type="text" name="comment" value=""></textarea> 
                                        @error('comment')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                    </div>
                                 {{-- Upload image --}}
                                <div class="flex gap-4">
                                    {{-- Image Award Wining of local --}}
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium text-[#0F4634]">Please choose your Profile</label>
                                        <label for="thumbnailFile"
                                            class="flex flex-col items-center justify-center w-[150px] h-[150px] rounded-full border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition relative overflow-hidden">
                                            <img id="thumbnailPreview"
                                                class="hidden absolute inset-0 m-auto w-[150px] h-[220px] object-contain" />
                                            <div id="thumbnailPlaceholder"
                                                class="flex flex-col items-center justify-center text-center">
                                                <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none" stroke="currentColor"
                                                    stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                                </svg>
                                                <p class="text-xs text-gray-500">Upload</p>
                                            </div>
                                            <input id="thumbnailFile" type="file" name="profile" accept="image/*"
                                                class="hidden" />
                                        </label>
                                        @error('thumbnail')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <a href="{{ route('view.comment') }}"  class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                                    Cancel
                                </a>
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                                    value="Add">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection