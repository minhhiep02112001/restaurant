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
                                data-url-form="{{ route('admin.menu.create') }}">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>Tìm kiếm</button>
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>Reload</button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1 pt-2">
                    <div class="col-md-12">
                        <form id="form_search_data_table">
                            <div class="row" id="search_data_table">
                                <div class="form-group col-4">
                                    <input type="text" class="form-control" name="title" placeholder="Search text">
                                </div> 
                                <div class="form-group col-2">
                                    <select name="location_id" id="location_id" class="form-control">
                                        <option selected>Chọn ---------</option>
                                        @foreach (config('data.config_menu') as $key => $item)
                                            <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>

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
        var url_ajax_list = window.APP_URL + "/admin/ajax/menu";
        var url_ajax_edit = window.APP_URL + "/admin/menu";
        console.log(url_ajax_list);
        // Dom Ready
        $(document).ready(function() {
            datatables_columns = [{
                    data: "checkID",
                    width: 20,
                    orderable: false,
                    visible: false,
                    className: 'text-center'
                },
                {
                    data: "id",
                    title: "ID",
                    className: 'text-center',
                    orderable: false,
                    width: 50,
                },
                {
                    data: "title",
                    title: "Tiêu đề",
                    className: 'text-center',
                    width: 250,
                    orderable: false,
                }, {
                    data: "link",
                    title: "Link",
                    className: 'text-center',
                    width: 250,
                    orderable: false,
                },
                {
                    data: "parent_id",
                    title: "Danh mục cha",
                    className: 'text-center',
                    width: 250,
                    orderable: false,
                    render: function(t, item, data) {
                        return '<p class="text-center" > ' + data.parent_id + '</p>';
                    }
                },
                {
                    data: "position",
                    title: "Vị trí",
                    className: 'text-center',
                    width: 250,
                    orderable: false,
                },
                {
                    data: "location_id",
                    title: "Thuộc",
                    className: 'text-center',
                    width: 250,
                    orderable: false, 
                },
                // {
                //     data: "is_status",
                //     title: "Status",
                //     orderable: false,
                //     className: 'text-center',
                //     width: 50,
                //     render: function(t, item, data) {
                //         let url = url_ajax_edit + "/" + data.id;
                //         let status = data.is_status; 
                //         var e = {
                //             0: {
                //                 title: "Hiển thị",
                //                 class: "badge-danger"
                //             },
                //             1: {
                //                 title: "Hiển thị",
                //                 class: "badge-success"
                //             },
                //         };
                         
                //         let html = '<span data-field="is_status" data-url="' + url + '" data-id="' + data
                //             .id + '" data-value="' + (status == 1 ? 0 : 1) + '" class="' + e[status].class +
                //             ' btnUpdateField p-1">' + e[status].title + "</span>"; 
                //         return html;
                //     }
                // },
                {
                    data: null,
                    width: 30,
                    title: "Actions",
                    className: 'pr-0',
                    render: function(t, e, item) {
                        let url_edit = url_ajax_edit + "/" + item.id + '/edit';
                        let url = url_ajax_edit + "/" + item.id;
                        let content = '<div style="white-space:nowrap;">';
                        content +=
                            `<button style="margin-right: 5px;" data-url-form="${url_edit}" data-method="PUT"  class="btn btn-sm btn-warning  btn-call-modal" data-id="${item.id}">Sửa</button>`;
                        content +=
                            `<button data-action="${url}" data-method="DELETE" data-id="${item.id}" class="btn btn-sm btn-danger  btnDelete">Xóa</button>`;
                        content += "</div>"
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
