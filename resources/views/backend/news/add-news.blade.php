@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | Add News
    @endsection
    @section('page-main-title')
        ADD NEWS
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="{{ route('submit.add.news') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif
                        <div class="card-body grid grid-cols-1 md:grid-cols-2 gap-10">

                            <div>
                                <div class="row col-12">
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Title</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>
                                </div>
                                <div class="row col-12">
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Description</label>
                                        <textarea name="description" class="form-control" cols="50" rows="9"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row col-12">
                                    {{-- Upload image --}}
                                    <div class="flex gap-4">
                                        {{-- Image Award Wining of local --}}
                                        <div class="mb-5">
                                            <label class="block mb-2 text-sm font-medium text-[#0F4634]">Please Choose Image
                                                News</label>
                                            <label for="thumbnailFile"
                                                class="flex flex-col items-center justify-center w-[300px] lg:w-[400px] xl:w-[400px] sm:w-[300px] h-[300px] border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition relative overflow-hidden">
                                                <img id="thumbnailPreview"
                                                    class="hidden absolute inset-0 m-auto w-[300px] h-[250px] object-contain" />
                                                <div id="thumbnailPlaceholder"
                                                    class="flex flex-col items-center justify-center text-center">
                                                    <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none"
                                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                                    </svg>
                                                    <p class="text-xs text-gray-500">Upload</p>
                                                </div>
                                                <input id="thumbnailFile" type="file" name="image_news" accept="image/*"
                                                    class="hidden" />
                                            </label>
                                            @error('thumbnail')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <a href="{{ route('view.news') }}"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                                    Cancel
                                </a>
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                                    value="Add News">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection