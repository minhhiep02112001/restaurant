@extends('admin._layout.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="table-data__tool mb-0">
                        <div class="table-data__tool-left">
                            <h3 class="card-title">Danh Sách</h3>
                        </div>
                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small btn-call-modal" id="btnAddData"
                                data-url-form="{{ route('admin.redirect.create') }}">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                    <i class="zmdi zmdi-plus"></i>Tìm kiếm</button>
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                <i class="zmdi zmdi-plus"></i>Reload</button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1 pt-2">
                     

                    <div class="col-md-12">
                        
                        <!-- DATA TABLE -->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3" id="data_table">

                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admins/js/tinymce.js') }}"></script>

    <script>
        //setting url
        var url_ajax_list = window.APP_URL + "/admin/ajax/redirect";
        var url_ajax_edit = window.APP_URL + "/admin/redirect";
        console.log(url_ajax_list);
        // Dom Ready
        $(document).ready(function() {
            datatables_columns = [
                {
                    data: null,
                    width: 24,
                    orderable: false,
                    textAlign: "center",
                    selector: {class: "m-checkbox--solid m-checkbox--brand"}
                },
                {
                    data: "id",
                    title: "ID",
                    width: 40,
                    textAlign: "center",
                    orderable: false,
                    className: 'text-center',
                    filterable: !1,
                },{
                    data: "type",
                    title: "Loại",
                    orderable: false,
                    className: 'text-center',
                    width: 250
                },{
                    data: "url_old",
                    title: "Link 301",
                    orderable: false,
                    className: 'text-center',
                    width: 450
                },{
                    data: "url_new",
                    title: "Link 200",
                    orderable: false,
                    className: 'text-center',
                    width: 450
                },
                {
                    data: "is_status",
                    title: "Status",
                    orderable: false,
                    className: 'text-center',
                    width: 50,
                    render: function(t, item, data) {
                        let url = url_ajax_edit + "/" + data.id;
                        let status = data.is_status;
                        let index = data.is_robot;
                        var e = {
                            0: {
                                title: "Chờ duyệt",
                                class: "badge-danger"
                            },
                            1: {
                                title: "Hiển thị",
                                class: "badge-success"
                            },
                        };
                        var r = {
                            0: {
                                title: "No index",
                                class: "badge-danger"
                            },
                            1: {
                                title: "Index",
                                class: "badge-success"
                            },
                        };
                        let html = '<span data-field="is_status" data-url="' + url + '" data-id="' + data
                            .id + '" data-value="' + (status == 1 ? 0 : 1) + '" class="' + e[status].class +
                            ' btnUpdateField p-1">' + e[status].title + "</span>";
                        html += '<span data-field="is_robot" data-url="' + url +
                            '" style="margin-left: 5px;"  data-id="' + data.id + '"  data-value="' + (
                                index == 1 ? 0 : 1) + '" class="' + r[index].class +
                            ' btnUpdateField  p-1">' +
                            r[index].title + "</span>";
                        return html;
                    }
                },
                {
                    data: null,
                    width: 10,
                    title: "Actions",
                    className:'pr-0',
                    render: function(t, e, item) {
                        let url_edit = url_ajax_edit + "/" + item.id + '/edit';
                        let url = url_ajax_edit + "/" + item.id;
                        let content = '';
                        content +=
                            `<button style="margin-right: 5px;" data-url-form="${url_edit}" data-method="PUT"  class="btn btn-sm btn-warning  btn-call-modal" data-id="${item.id}">Sửa</button>`;
                        content +=
                            `<button data-action="${url}" data-method="DELETE" data-id="${item.id}" class="btn btn-sm btn-danger  btnDelete">Xóa</button>`;
                        return content;
                    }
                }
            ];
            // On document ready
            DatatablesServerSide.init();
        });
        $(document).ready(function(e) {
            AutoloadDataService.init($(document));
        });
    </script>
@endpush
