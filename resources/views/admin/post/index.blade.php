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
                                data-url-form="{{ route('admin.post.create') }}">
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
                            <input type="hidden"  name="type" value="{{$type ?? 1}}">
                            <div class="row" id="search_data_table">
                                <div class="form-group col-4">
                                    <input type="text" class="form-control" name="title" placeholder="Search text">
                                </div>
                                <div class="form-group col-2">
                                    <select name="is_status" class="form-control" aria-placeholder="Trạng thái">
                                        <option value="">Chọn trạng thái</option>
                                        <option value="0">Không hiển thị</option>
                                        <option value="1">Hiển thị</option>
                                        <option value="2">Mới CRAWLER</option> 
                                        <option value="3">Đang 301</option>
                                        <option value="4">DRAFT</option>
                                    </select>
                                </div>
                                <div class="form-group col-2">
                                    <select name="is_robot" class="form-control" aria-placeholder="Trạng thái">
                                        <option value="">Google Index</option>
                                        <option value="0">No index</option>
                                        <option value="1">Index</option>
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
        var url_ajax_list = window.APP_URL + "/admin/ajax/post";
        var url_ajax_edit = window.APP_URL + "/admin/post";
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
                    className: "text-center",
                    orderable: false,
                    width: 50,
                },
                {
                    data: "thumbnail",
                    title: "Hình ảnh",
                    className: "text-center",
                    width: 50,
                    orderable: false, 
                },
                {
                    data: "title",
                    title: "Tiêu đề",
                    width: 250,
                    orderable: false,
                },
                {
                    data: "is_status",
                    title: "Status",
                    orderable: false,
                    width: 30,
                    render: function(t, item, data) {
                        let url = url_ajax_edit + "/" + data.id;
                        let status = data.is_status;
                        let index = data.is_robot;
                        var e = {
                            0: {title: "Chờ duyệt", class: "badge badge-warning"},
                            1: {title: "Hiển thị", class: "badge badge-success"},
                            2: {title: "Mới crawler", class: "badge badge-primary"},
                            3: {title: "Đang 301", class: "badge badge-secondary"},
                            4: {title: "Hủy", class: "badge badge-danger"},
                        }; 
                        var r = {
                            0: {  title: "No index", class: "badge badge-danger" },
                            1: {  title: "Index", class: "badge badge-success" },
                        };
                        let html = '<span data-field="is_status" data-url="' + url + '" data-id="' + data
                            .id + '" data-value="' + (status == 1 ? 0 : 1) + '" class="' + e[status].class +
                            ' btnUpdateField d-block text-center p-2 w-100">' + e[status].title + "</span>";
                        html += '<span data-field="is_robot" data-url="' + url +
                            '"  data-id="' + data.id + '"  data-value="' + (
                                index == 1 ? 0 : 1) + '" class="' + r[index].class +
                            ' btnUpdateField text-center d-block w-100  p-2 mt-1">' +
                            r[index].title + "</span>";
                        return html;
                    }
                },
                {
                    data: null,
                    width: 100,
                    className: "text-left",
                    title: "Thông tin",
                    render: function(t, e, item) {
                        let content = "<ul>";
                        content += `<li>Lượt xem: ${item.viewed || 0}</li>`;
                        content += `<li>Lượt chơi: ${item.played||0}</li>`;
                        content += `<li>Đánh giá: ${item.total_vote|| 0}</li>`;
                        content += "</ul>";

                        return content;
                    }
                },
                {
                    data: null,
                    width: 100,
                    className: "text-left",
                    title: "Actions",
                    render: function(t, item, item) {
                        
                        let url_edit = url_ajax_edit + "/" + item.id + '/edit';
                        let url = url_ajax_edit + "/" + item.id;
                        let content = '';

                        content += "<ul>";
                        content += `<li>Ngày tạo: ${item.created_at}</li>`;
                        content += `<li>Ngày sửa: ${item.updated_at}</li>`;
                        content += "</ul>";

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
