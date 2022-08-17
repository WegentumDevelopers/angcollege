{{-- @php
$setting=App\Models\Setting::where('status',1)->get();
@endphp --}}
@include('frontend.include.header')

<section class="content">
    
    {{-- <div class="container-fluid"> --}}
      @yield('all_content')
    {{-- </div> --}}
</section>
@include('frontend.include.footer')