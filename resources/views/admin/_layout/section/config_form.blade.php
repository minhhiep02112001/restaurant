@extends('admin._layout.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid p-0 m-0">
            @yield('content-block')
        </div>
    </div>
@endsection
@push('scripts')
    @yield('javascript')
@endpush
