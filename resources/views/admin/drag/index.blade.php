@extends('admin._layout.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="table-data__tool mb-0">
                        <div class="table-data__tool-left">
                            <h3 class="card-title">Quản lý Trending</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body ">

                    <div class="row">
                        <div class="col-12">
                            <div class="card border border-success">
                                <div class="card-header">
                                    <div class=" row">
                                        <div class="col-11">
                                            <select name="key" id="" class="form-control select2">
                                                @if (!empty($key))
                                                    @foreach ($key as $k => $item)
                                                        <option value="{{ $k }}">{{ $item }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-1">
                                            <button class=" btn btn-sm btn-primary btnShowDrag">Loading <i
                                                    class="fa fa-spinner fa-spin" style="display: none"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row content-drag hide" style="display:none;" id="box">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Select Category</strong>
                                </div>
                                <div class="card-body">
                                    <select name="data_id" id="form_select_data" class="form-control select2">

                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-warning addtonavmenu">Thêm vào Trending
                                        <i class="fa fa-spinner fa-spin" style="display: none"></i> </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="card border border-primary">
                                <div class="card-header d-flex d-flex align-items-center p-2 justify-content-between">
                                    <strong class="card-title mb-0">Outline</strong>
                                    <button class="btn btn-sm btn-success" id="btnSaveMenu"> Save Trending</button>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="dd col-12" id="nestableDrag" style="width:100%;">
                                            <ol class="dd-list"></ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <style>
        .dd-list .action-item {
            position: absolute;
            margin: 0;
            right: 0;
            top: 0;
            cursor: pointer;
            width: 30px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            border: 1px solid #aaa;
            background: #ddd;
            background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
            background: -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
            background: linear-gradient(top, #ddd 0%, #bbb 100%);
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            height: 100%;
            line-height: 30px;
        }
    </style>
    <script src="{{ asset('admins/js/nestable.js') }}"></script>

    @if ($type == 'game')
        <script>
            var type = "";
            var url_load_select = "/admin/ajax/game";
        </script>
    @else
        <script>
            var type = "game";
            var url_load_select = "/admin/ajax/category";
        </script>
    @endif

    <script>
        let url_ajax_load = "/admin/ajax/list-drag";
        var dragType = "{{ $type }}";
        $(document).ready(function() {

            $(".select2").select2({
                allowClear: true,
                placeholder: "Select an item",
            });

            loadSelectDataFilter($("select[name='data_id']"));

            $(".btnShowDrag").click(function() {
                let this_ = $(this);
                this_.find(".fa-spinner").show();
                $(".content-drag").removeClass('hide');
                loadSelectDataFilter($("select[name='data_id']"));
                let key = $("select[name='key']").val();
                showmenus(key, dragType);
                $("#box").show();
                this_.find(".fa-spinner").hide();
                return false;
            });

            $(document).on("click", ".addtonavmenu", function() {
                let select = $("select[name='data_id'] option:selected");
                let id = select.val();
                let title = select.html();
                console.log(id, title);
                if (!id || id == "undefined") {
                    Notification("error", "Vui lòng chọn data");
                    return;
                }
                let length = $('#nestableDrag').find('[data-id=' + id + ']').length;
                if (length == 0) {
                    $("#nestableDrag > ol.dd-list").append(
                        '<li class="dd-item dd3-item" data-id="' +
                        id +
                        '" data-type="' +
                        dragType +
                        '"><div class="dd-handle dd3-handle"></div><div class="dd3-content">' +
                        title +
                        '</div><div class="action-item"><span class="nestledeletedd fa fa-trash"></span></div></li>'
                    );
                    $("#nestableDrag").nestable({
                        maxDepth: 1,
                    });
                }
            });

            $(document).on("click", ".nestledeletedd", function() {
                let element = $(this).parent().parent();
                element.remove();
                element.find("ol.dd-list").remove();
            });

            $(document).on("click", "#btnSaveMenu", function() {
                let select = $("#nestableDrag");

                let domain = $("#menu_domains").val();

                let type = $("input[name='type']").val();
                let key = $("select[name='key']").val();


                let structure = select.nestable("serialize");
                console.log(structure);
                let check = [];
                let save = 1;
                structure.forEach(function(item, key) {
                    if (check.includes(item.id)) {
                        Notification("error", "Không thể trùng data!");
                        save = 0;
                        return false;
                    } else {
                        check.push(item.id);
                    }
                });
                if (save == 1) {
                    saveData(structure, key, type);
                }
            });
        });

        function saveData(structure, key, type) {
            $.ajax({
                type: "POST",
                url: "/admin/drag",
                data: {
                    drag_id: structure,
                    key,
                    type,
                },
                dataType: "json",
                cache: "false",
                success: function(result) {
                    if (result.status == 'success') {
                        Notification("success", "Lưu thành công !");
                    } else {
                        Notification("error", "Lưu không thành công !");
                    }
                },
            });
        }

        function showmenus(key, type) {
            $.ajax({
                type: "GET",
                url: url_ajax_load,
                data: {
                    key,
                    type
                },
                dataType: "json",
                cache: "false",
                success: function(result) {
                    var content = html_drag(result);
                    $("#nestableDrag .dd-list").html(content);
                    $("#nestableDrag").nestable();
                },
            });
        }

        function html_drag(dataDrag) {
            var _html = "";

            if (dataDrag)
                $.each(dataDrag, function(i, v) {
                    _html += `<li class="dd-item dd3-item" data-id="${v.id}" data-type="${v.type}">
                    <div class="dd-handle dd3-handle"></div>
                    <div class="dd3-content">${v.text}</div>
                    <div class="action-item"><span class="nestledeletedd fa fa-trash"></span></div>
                </li>`;
                });
            return _html;
        }

        function loadSelectDataFilter(selector, dataSelected) {
            if (selector.length > 0) {
                selector.select2({
                    placeholder: "Chọn dữ liệu",
                    data: dataSelected,
                    ajax: {
                        url: url_load_select,
                        dataType: "json",
                        delay: 250,
                        data: function(e) {
                            return {
                                limit: 10,
                                title: e.term,
                                page: e.page,
                                type: type,
                                is_status: 1
                            };
                        },
                        processResults: function(e, t) {
                            let data = [];
                            if (e.data) {
                                data = (e.data).map((x) => {
                                    return {
                                        'id': x.id,
                                        'text': x.title
                                    }
                                });
                            }
                            return (
                                (t.page = t.page || 1), {
                                    results: data,
                                    pagination: {
                                        more: 10 * t.page < e.iTotalRecords,
                                    },
                                }
                            );
                        },
                        cache: !0,
                    },
                });
                if (typeof dataSelected !== "undefined")
                    selector.find("> option").prop("selected", "selected").trigger("change");
            }
        }
    </script>
@endpush
