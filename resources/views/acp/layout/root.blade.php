@extends("acp.layout.main")
@push("sidebar")
    @include("acp.layout.sidebar")
@endpush
@push("header")
    @include("acp.layout.header")
@endpush
@push("head-scripts")
    <script src="{{ asset("assets/js/BaseCrud.js") }}"></script>
@endpush
@push("scripts")
    @routes()
    @vite(['resources/js/app.js'])
@endpush
