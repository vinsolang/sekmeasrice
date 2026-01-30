@extends('frontend.header')
@section('title', 'contact us')
@section('background-image', asset('frontend/assets/imges/contact-us.png'))
@section('img-background-contact',  asset('frontend/assets/imges/contact.png') )
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('text-title', 'Contact Us')

@section('section_content')

   @include('frontend.footer-career-contact')
@endsection