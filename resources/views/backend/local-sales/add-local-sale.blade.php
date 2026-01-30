@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | Add Product
    @endsection
    @section('page-main-title')
        Add Product
    @endsection

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <form action="{{ route('submit.add.local') }}" method="post" enctype="multipart/form-data">
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

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                <div>
                                    {{-- Product Brand Name --}}
                                    <div class="mb-3 col-12">
                                        <label class="form-label text-[#0F4634]">Brand Name</label>
                                        <input class="form-control" type="text" name="brand" value="{{ old('brand') }}">
                                        @error('brand')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    {{-- Product Name --}}
                                    <div class="mb-3 col-12">
                                        <label class="form-label text-[#0F4634]">Name</label>
                                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                        @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    {{-- Type of Product --}}
                                    <div class="mb-3 col-12">
                                        <label class="form-label text-[#0F4634]">Type of crop (New or Old)</label>
                                        <input class="form-control" type="text" min="1" name="type"
                                            value="{{ old('type') }}">
                                        @error('type')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    {{-- Price --}}
                                    <div class="mb-3 col-12">
                                        <label class="form-label text-[#0F4634]">Price</label>
                                        <input class="form-control" type="number" step="0.01" min="0" name="price"
                                            value="{{ old('price') }}">
                                        @error('price')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                    </div>
                                    {{-- Capacity --}}
                                    <div class="mb-3 col-12">
                                        <label class="form-label text-[#0F4634]">Packing Size (KG, g)</label>
                                        <input class="form-control" type="text" min="1" name="capacity"
                                            value="{{ old('capacity') }}">
                                        @error('capacity')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                    </div>
                                </div>
                                <div>
                                    {{-- Upload image --}}
                                    <div class="flex gap-4">

                                        {{-- Image product of local --}}
                                        <div class="mb-5">
                                            <label class="block mb-2 text-sm font-medium text-[#0F4634]">Image Product of
                                                Local</label>
                                            <label for="thumbnailFile"
                                                class="flex flex-col items-center justify-center w-[300px] h-[380px] border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition relative overflow-hidden">
                                                <img id="thumbnailPreview"
                                                    class="hidden absolute inset-0 m-auto w-[250px] h-[350px] object-contain" />
                                                <div id="thumbnailPlaceholder"
                                                    class="flex flex-col items-center justify-center text-center">
                                                    <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none"
                                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                                    </svg>
                                                    <p class="text-xs text-gray-500">Upload</p>
                                                </div>
                                                <input id="thumbnailFile" type="file" name="image_local" accept="image/*"
                                                    class="hidden" />
                                            </label>
                                            @error('image_local')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- Buttons --}}
                            <div class="flex gap-3">
                                <a href="{{ route('local.sales.view') }}"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                                    Cancel
                                </a>
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200"
                                    value="Add Product">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection