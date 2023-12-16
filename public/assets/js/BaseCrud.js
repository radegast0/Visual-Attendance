class BaseCRUD
{
    static selector;
    static ajaxtable(params)
    {
        if(params.responsive === undefined)
            params.responsive = true;
        params.orderCellsTo = true;
        params.fixedHeader = true;
        params.select = true;
		params.searchDelay = 1000;
        params.processing = true;
        params.serverSide = true;
		params.dom = "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'l>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>><B>";
        params.language = {
            url: "/assets/js/custom/i18n.json",
            searchPlaceholder: "Arama...",
        };
		params.pageLength = 300;
        for (const column of params.columns) {
            if(column.defaultContent === undefined)
                column.defaultContent = '-';
        }
        if(typeof params.ajax == 'undefined')
        {
            params.ajax = {
                url: params.ajaxURL + (params.ajaxURL.indexOf('?') > 0 ? '&datatable=true' : '?datatable=true') ,
                type: 'GET',
            };
        }
        if(typeof params.order == 'undefined')
            params.order = [[0, 'asc']];
        if(typeof params.drawCallback == 'undefined')
        {
            params.drawCallback = function(settings, json)
            {
                $('[data-toggle="tooltip"]').tooltip();
            }
        }
        var table = $(BaseCRUD.selector).DataTable(params);
        return table;
    }
    static delete(route, callback = null)
    {
		console.log(route)
        $(document).on("click", "[row-delete]", function() {
            var id = $(this).attr('row-delete');
			console.log(id)
            Swal.fire({
                icon: "error",
                title: "",
                html: "Bu kayıt/lar kalıcı olarak silinecektir.<br>İşlemi onaylıyor musunuz ?",
                buttonsStyling: false,
                showCancelButton: true,
                cancelButtonText: "İptal",
                confirmButtonText: "Sil",
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: 'btn btn-secondary'
                }
            }).then(function(action){
                if (action.value)
                {
                    $.ajax({
                        url: route,
                        type: "DELETE",
                        data: {
                            _token: $('meta[name="csrf"]').attr('content'),
                            id: id,
                        },
                        success: function(data) {
                            if(data.status)
                            {
                                if(callback == null)
                                {
                                    $(BaseCRUD.selector).DataTable().ajax.reload();
                                } else {
                                    callback();
                                }
                            } else {
                                Swal.fire('', data.message, "warning");
                            }
                        }
                    });
                }
            });
        });
    }
}
