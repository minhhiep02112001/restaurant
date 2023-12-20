@extends('admin._layout.section.config_form')

@section('content-block')
    <form id="form-ajax-modal" action="{{ $action ?? '' }}" method="{{ $method }}" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <div class="table-data__tool mb-0">
                    <div class="table-data__tool-left">
                        <h3 class="card-title mb-0">Thông tin dữ liệu</h3>
                    </div>
                    <div class="table-data__tool-right">
                        <button type="submit" class="btn btn-success btnSave">
                            <i class="fa fa-dot-circle-o"></i> Lưu dữ liệu
                        </button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="fa fa-ban"></i> Hủy
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">

                <div class="custom-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active show" id="custom-nav-home-tab" data-toggle="tab"
                                href="#custom-nav-home" role="tab" aria-controls="custom-nav-home"
                                aria-selected="true">Thông tin</a>
                            <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab"
                                href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
                                aria-selected="false">Thông tin chi tiết</a>
                        </div>
                    </nav>
                    <div class="tab-content pt-3" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="custom-nav-home" role="tabpanel"
                            aria-labelledby="custom-nav-home-tab">
                            <div class="row">
                                <div class="col-sm-8 col-xs-12">
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input name="title" placeholder="Tiêu đề" class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label>Tóm tắt</label>
                                        <textarea name="description" id="description" placeholder="Tóm tắt" class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea name="content" id="content" placeholder="Nội dung" class="form-control tinymce" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    @include('admin._layout.section.seo')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel"
                            aria-labelledby="custom-nav-profile-tab">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Danh mục cha:</label>
                                        <select class="form-control select2_suggest" data-module="category"
                                            style="width: 100%;">

                                        </select>
                                    </div>

                                    <?php if (!empty($data) && $data == 'story'): ?>
                                    <div class="form-group">
                                        <label>Danh mục liên quan sidebar:</label>
                                        <div class="input-group">
                                            <select name="related_category[]"
                                                class="form-control m-select2 related_category"
                                                style="width: 100%;"></select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Loại 2 danh mục kết hợp <br>(Ví dụ : Ngôn tình + sắc, Ngôn tình +
                                            hài)</label>
                                        <div class="input-group">
                                            <select name="two_category[]" class="form-control m-select2 two_category"
                                                style="width: 100%;"></select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Type category <br>(Loại danh mục vd : Hay , Mới, Full)</label>
                                        <input name="type_category" placeholder="Vd : Hay , Mới, Full" class="form-control"
                                            type="text" />
                                    </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <label>Hiện thị nội dung:</label>
                                        <select class="form-control m-input m-input--square" name="show_content">
                                            <option value="1">Hiển thị</option>
                                            <option value="0">Không hiển thị</option>
                                        </select>
                                    </div>


                                    <div class="form-group row" style="display: block;padding: 0px 15px;">
                                        <label for="is_status" class="col-sm-2 control-label"
                                            style="padding: 0; text-align: left;">Trạng
                                            thái:</label>
                                        <div class="col-sm-10">
                                            <input data-switch="true" type="checkbox" value="1" id="is_status"
                                                name="is_status" class="switchBootstrap">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="display: block;padding: 0px 15px;">
                                        <label for="is_robot" class="col-sm-2 control-label"
                                            style="padding: 0; text-align: left;">Google
                                            Index:</label>
                                        <div class="col-sm-10">
                                            <input data-switch="true" type="checkbox" value="1" id="is_robot"
                                                name="is_robot" class="switchBootstrap">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Text Speech:</label>
                                        <select class="form-control m-input m-input--square" name="is_text_speech">
                                            <option value="1">Có</option>
                                            <option value="2" selected>Không</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="thumbnail">Ảnh đại diện</label>
                                        <div class="parent-upload" data-field="thumbnail">
                                            <input type="file"  class="filepond-input filepond upload-file"
                                                name="files">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
@section('javascript')
    <script>
        console.log("done")
    </script>
@endsection
