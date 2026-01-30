@extends('frontend.header')
@section('title', 'Career')
@section('background-career', asset('frontend/assets/imges/career.png'))
@section('rice-background', asset('frontend/assets/imges/rice-background.png'))
@section('title-career', 'Join Our Team')
@section('gmail-career')

    <div class="flex items-center justify-center gap-4 bg-white rounded-full w-[350px] h-[64px] mx-auto">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M25 50C11.2149 50 0 38.7851 0 25C0 11.2149 11.2149 0 25 0C38.7851 0 50 11.2149 50 25C50 38.7851 38.7851 50 25 50ZM37.9646 33.7823C38.2729 33.7823 38.5237 33.5315 38.5237 33.2232V17.5282L25.804 27.629C25.5687 27.816 25.2842 27.9095 24.9999 27.9095C24.7156 27.9095 24.4312 27.8159 24.1958 27.629L11.4762 17.5282V33.2232C11.4762 33.5315 11.7271 33.7823 12.0353 33.7823H37.9646ZM36.0154 16.2177L25 24.9652L13.9845 16.2177H36.0154ZM41.11 16.7768V33.2234C41.11 34.9577 39.6989 36.3687 37.9646 36.3687H12.0353C10.3009 36.3687 8.89004 34.9577 8.89004 33.2234V16.7768C8.89004 15.0425 10.301 13.6315 12.0353 13.6315H37.9646C39.6989 13.6314 41.11 15.0425 41.11 16.7768Z"
                fill="#53A557" />
        </svg>
        <h3 class="underline text-[16px] text-[#3e3e3e] flex text-center">hrdepartment@sekmeasrice.com</h3>
    </div>
@endsection


@section('section_content')
    @include('frontend.footer-career-contact')
@endsection