@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | edit news
    @endsection
    @section('page-main-title')
        EDIT NEWS
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="{{ route('submit.update.news') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="update_id" value="{{ $row->id }}">
                    <input type="hidden" name="old_image_news" value="{{ $row->image_news }}">

                    <div class="grid grid-cols-2 gap-10">
                        <div>
                            <div class="mb-3">
                                <label for="update_title" class="form-label text-[#0F4634]">Title</label>
                                <input type="text" name="update_title" id="update_title" class="form-control"
                                    value="{{ $row->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="update_description" class="form-label text-[#0F4634]">Description</label>
                                <textarea name="update_description" class="form-control" cols="50"
                                    rows="9">{{ $row->description }}</textarea>
                            </div>
                        </div>

                        <div>
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-[#0F4634]">Please choose image
                                    media</label>
                                <label for="thumbnailFile"
                                    class="flex flex-col items-center justify-center w-[400px] h-[300px] border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition relative overflow-hidden">
                                    <img id="thumbnailPreview" src="{{ asset('storage/local_product/' . $row->image_news) }}"
                                        class="absolute inset-0 m-auto w-[300px] h-[250px] object-contain" />
                                    <div id="thumbnailPlaceholder"
                                        class="flex flex-col items-center justify-center text-center">
                                        <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                        </svg>
                                        <p class="text-xs text-gray-500">Upload</p>
                                    </div>
                                    <input id="thumbnailFile" type="file" name="update_image_news" accept="image/*"
                                        class="hidden" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('view.media') }}"
                            class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                            Cancel
                        </a>
                        <input type="submit" value="Edit Media"
                            class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection