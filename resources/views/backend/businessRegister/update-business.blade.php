@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | Add Product
    @endsection
    @section('page-main-title')
        EDIT BUSINESS REGISTERATION
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="{{ route('submit.update.Business') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">

                            {{-- Display session message --}}
                            @if(Session::has('success'))
                                <p class="text-green-600 text-center">{{ Session::get('success') }}</p>
                            @endif
                            @if(Session::has('error'))
                                <p class="text-red-600 text-center">{{ Session::get('error') }}</p>
                            @endif

                            <div class="row">
                                <input type="hidden" name="update_id" value="{{ $row->id }}">
                                {{-- Upload image --}}
                                <div class="flex gap-4">

                                    {{-- Image product of local --}}
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium text-[#0F4634]">Image Product of Award Wining</label>
                                        <label for="thumbnailFile"
                                            class="flex flex-col items-center justify-center w-[200px] h-[300px] border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition relative overflow-hidden">
                                            <img id="thumbnailPreview" src="{{ asset('storage/local_product/' . $row->thumbnail) }}"
                                                class="absolute inset-0 m-auto w-[150px] h-[220px] object-contain" />
                                            <div id="thumbnailPlaceholder"
                                                class="flex flex-col items-center justify-center text-center">
                                                <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none" stroke="currentColor"
                                                    stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                                </svg>
                                                <p class="text-xs text-gray-500">Upload</p>
                                            </div>
                                            <input type="hidden" name="old_thumbnail" value="{{ $row->thumbnail }}">
                                            <input id="thumbnailFile" type="file" name="update_thumbnail" accept="image/*"
                                                class="hidden" />
                                        </label>
                                        @error('thumbnail')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            {{-- Buttons --}}
                            <div class="flex gap-3">
                                <a href="{{ route('view.Business') }}"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                                    Cancel
                                </a>
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200"
                                    value="Edit Now">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection