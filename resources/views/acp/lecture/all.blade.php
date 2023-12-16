@extends('acp.layout.root')
@section('title', $container->title)
@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ $container->title }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('acp.index') }}" class="text-muted text-hover-primary">Home Page</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ $container->title }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">{{ $container->title }}</h3>
                    <div class="card-toolbar">
                        <a href="{{ route($container->page.'.create') }}" type="button" class="btn btn-sm btn-light-primary"> Ekle </a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <table datatable class="table table-striped align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0"></tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function()
        {
            BaseCRUD.selector = "[datatable]";
            BaseCRUD.ajaxtable({
                ajax: {
                    url: "{{ route($container->page . '.index') }}?datatable=true",
                    type: 'GET',
                    data: function(d) {
                        return $.extend({}, d, {
                        });
                    },
                },
                columns: [
                    { title:'#',data: 'id', name: 'id', className: 'text-center' },
                    { title:'TITLE',data: 'title', name: 'title', className: 'text-center' },
                    { title:'SCHOOL',data: 'school.title', name: 'school.title', className: 'text-center' },
                ],
                dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'l>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>><'disabled-none'B>",
                buttons: [
                    {
                        extend: 'csv',
                        charset: 'UTF-8',
                        fieldSeparator: ';',
                        bom: true,
                        filename: '{{ $container->page }}List',
                        title: '{{ $container->page }} List'
                    },
                    'pdfHtml5'
                ],
                pageLength: 50,
            });
            $('[excel-export]').click(function(){
                $('.dt-buttons .buttons-csv').trigger('click');
            });
            BaseCRUD.delete("{{ route($container->page . '.delete') }}");
            $('[filter-name]').change(function(){
                localStorage.setItem('filter_' + $(this).attr('filter-name'), $(this).val());
                $("[datatable]").DataTable().ajax.reload();
            });
        });
    </script>
@endsection
