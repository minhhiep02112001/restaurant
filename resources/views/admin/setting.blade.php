@php
    $config_website = !empty($setting['config_website']) ? json_decode($setting['config_website']) : [];
    $config_seo = !empty($setting['config_seo']) ? json_decode($setting['config_seo']) : [];
    $data_social = !empty($setting['data_social']) ? json_decode($setting['data_social']) : [];
@endphp
@extends('admin._layout.index')

@section('style_css')
    <!-- Plugin css for this page -->
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="{{ asset('theme_admin/template/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_admin/template/css/netsable.min.css') }}">
    <style>
        table td {
            white-space: unset !important;
        }

        .pagination,
        .jsgrid .jsgrid-pager {
            justify-content: center;
        }
    </style>
@endsection
@section('content')
    <div class="section__content section__content--p30 p-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div
                            style="
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                        ">
                            <h3 class="font-weight-bold">Cài đặt website</h3>
                            <button id="save_setting" class="btn btn-success">Save Setting</button>
                        </div>

                    </div>
                    <form id="setting_form">
                        <div class="card-body">
                            <div class="default-tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="true">Cài đặt website</a>
                                        <a class="nav-item nav-link" id="nav-social-tab" data-toggle="tab"
                                            href="#nav-social" role="tab" aria-controls="nav-social"
                                            aria-selected="false">Social</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-md-6 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-2 text-center">Thông tin website</h4>

                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Thương
                                                                hiệu:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class=" form-control form-control-sm"
                                                                    name="config_website[website]"
                                                                    value="{{ $config_website->website ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 row">
                                                            <label class="col-sm-3 col-form-label-sm">Địa
                                                                chỉ:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class=" form-control form-control-sm"
                                                                    name="config_website[address]"
                                                                    value="{{ $config_website->address ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 row">
                                                            <label class="col-sm-3 col-form-label-sm">Số điện
                                                                thoại:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class=" form-control form-control-sm"
                                                                    name="config_website[phone]"
                                                                    value="{{ $config_website->phone ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 row">
                                                            <label class="col-sm-3 col-form-label-sm">Email:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    name="config_website[email]"
                                                                    value="{{ $config_website->email ?? '' }}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-1 row">
                                                            <label class="col-sm-3 col-form-label-sm">Favicon:</label>
                                                            <div class="col-sm-9">
                                                                {{-- <div class="parent-upload"
                                                                    data-field="config_website[favicon]"
                                                                    data-image-source="{{ $config_website->favicon ?? '' }}">
                                                                    <input type="file" name="files"
                                                                        class="filepond-input filepond upload-file">
                                                                    <input type="hidden" name="config_website[favicon]"
                                                                        value="/images/redapk.png">

                                                                    <input type="hidden" name="config_website[favicon]"
                                                                        value="{{ $config_website->favicon ?? '' }}">
                                                                </div> --}}
                                                                <div class="parent-upload"
                                                                    data-field="config_website[favicon]"
                                                                    data-image-source="{{ $config_website->favicon ?? '' }}">
                                                                    <input type="file"
                                                                        value="{{ $config_website->favicon ?? '' }}"
                                                                        class="filepond-input filepond upload-file"
                                                                        name="config_website[favicon]">
                                                                </div>

                                                            </div>


                                                        </div>

                                                        <div class="form-group mb-1 row">
                                                            <label class="col-sm-3 col-form-label-sm">Logo:</label>
                                                            <div class="col-sm-9">
                                                                <div class="parent-upload" data-field="config_website[logo]"
                                                                    data-image-source="{{ $config_website->logo ?? '' }}">
                                                                    <input type="file"
                                                                        value="{{ $config_website->logo ?? '' }}"
                                                                        class="filepond-input filepond upload-file"
                                                                        name="config_website[logo]">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-1 row">
                                                            <label class="col-sm-3 col-form-label-sm" for="meta_title">Meta
                                                                title:</label>
                                                            <div class="col-sm-9">
                                                                <textarea name="config_seo[meta_title]" rows="2" class="form-control" placeholder="Meta meta_title">{{ $config_seo->meta_title ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 row">
                                                            <label class="col-sm-3 col-form-label-sm"
                                                                for="meta_keyword">Meta keywords:</label>
                                                            <div class="col-sm-9">
                                                                <textarea name="config_seo[meta_keyword]" rows="2" class="form-control" placeholder="Meta Keyword">{{ $config_seo->meta_keyword ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 row">
                                                            <label class="col-sm-3 col-form-label-sm"
                                                                for="summary_footer">Meta description:</label>
                                                            <div class="col-sm-9">
                                                                <textarea name="config_seo[meta_description]" rows="2" class="form-control" placeholder="Meta description">{{ $config_seo->meta_description ?? '' }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 row">
                                                            <label class="col-sm-3 col-form-label-sm">Index:</label>
                                                            <div class="col-sm-9">
                                                                <select name="config_seo[index]" id="index"
                                                                    class="form-control form-control-sm">
                                                                    <option value="1">Index</option>
                                                                    <option value="0"
                                                                        {{ empty($config_seo->index) ? 'selected' : '' }}>
                                                                        No Index</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 grid-margin transparent">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-2 text-center">Content Home</h4>

                                                        <div class="form-group mb-1 row">
                                                            <textarea name="config_seo[content_home]" rows="10" class="form-control tiny_mce_content" placeholder="Meta description">
                                                                {!! $config_seo->content_home ?? '' !!}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="nav-social" role="tabpanel"
                                        aria-labelledby="nav-social-tab">
                                        <div class="row">
                                            <div class="col-md-6 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title mb-2 text-center">Link socialite</h4>

                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Facebook:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[facebook]"
                                                                    value="{{ $config_social->facebook ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Twitter:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[twitter]"
                                                                    value="{{ $config_social->twitter ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Telegram:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[telegram]"
                                                                    value="{{ $config_social->telegram ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Reddit:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[reddit]"
                                                                    value="{{ $config_social->reddit ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Vk:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[vk]"
                                                                    value="{{ $config_social->vk ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Messenger:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[messenger]"
                                                                    value="{{ $config_social->messenger ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Whatsapp:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[whatsapp]"
                                                                    value="{{ $config_social->whatsapp ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Pinterest:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[pinterest]"
                                                                    value="{{ $config_social->pinterest ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Getpocket:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[getpocket]"
                                                                    value="{{ $config_social->getpocket ?? '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-1 form-group-sm row">
                                                            <label class="col-sm-3 col-form-label-sm">Sharethis:</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"
                                                                    class=" form-control form-control-sm"
                                                                    name="config_social[sharethis]"
                                                                    value="{{ $config_social->sharethis ?? '' }}">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script src="{{ asset('theme_admin/template/js/file-upload.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('admins/plugins/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function() { 
            option_TinyMCE.selector = '.tiny_mce_content';
            option_TinyMCE.height = '300';
            tinymce.init(option_TinyMCE);
        });
    </script>
    <script>
        const Ajax_setting = "{{ route('admin.setting') }}";

        $(document).on('click', '#save_setting', function(event) {
            tinymce.triggerSave();
            Swal.fire({
                title: 'Bạn có chắc không?',
                text: "Dữ liệu của bạn sẽ bị thay đổi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Không',
                confirmButtonText: 'Có'
            }).then((result) => {
                if (result.isConfirmed) {
                    SaveData();
                }
            })
        });

        const SaveData = () => { 
            let data = $("form#setting_form").serialize(); 
            console.log(data);
            $.ajax({
                type: "POST",
                url: Ajax_setting,
                data: data,
                dataType: "JSON",
                success: function(result) {
                    Swal.fire({
                        position: 'top-end',
                        icon: result.status,
                        title: 'Thành công ...',
                        text: result.messager,
                        showConfirmButton: false,
                        timer: 1500,
                    })
                },
                error: function() {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Lỗi ...',
                        text: result.messager,
                        showConfirmButton: false,
                        timer: 1500,
                    })
                }
            });
        }
    </script>
@endpush
