const image_upload_handler_callback = (blobInfo, progress) =>
    new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open("POST", "upload.php");

        xhr.upload.onprogress = (e) => {
            progress((e.loaded / e.total) * 100);
        };

        xhr.onload = () => {
            if (xhr.status === 403) {
                reject({ message: "HTTP Error: " + xhr.status, remove: true });
                return;
            }

            if (xhr.status < 200 || xhr.status >= 300) {
                reject("HTTP Error: " + xhr.status);
                return;
            }

            const json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != "string") {
                reject("Invalid JSON: " + xhr.responseText);
                return;
            }

            resolve(json.location);
        };

        xhr.onerror = () => {
            reject(
                "Image upload failed due to a XHR Transport error. Code: " +
                xhr.status
            );
        };

        const formData = new FormData();
        formData.append("file", blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    });

var win = $(window),
    body = $("body"),
    doc = $(document),
    meta_csrf_token = $('meta[id="csrf_token"]'),
    csrf_cookie_name = "csrf_cookie_name",
    csrf_token_name = meta_csrf_token.attr("name"),
    csrf_token_hash = meta_csrf_token.attr("content"),
    method_modal = "",
    class_name = "post",
    slug_disable = false,
    option_TinyMCE = {
        height: "500",
        selector: "textarea.tinymce",
        entity_encoding: "raw",
        setup: function (ed) {
            ed.on("DblClick", function (e) {
                if (e.target.nodeName == "IMG") {
                    tinyMCE.activeEditor.execCommand("mceImage");
                }
            });

            ed.addButton("post_block_top", {
                type: "button",
                text: "Post Block Top",
                onclick: function () {
                    ed.insertContent('[postblock id="top"]');
                },
            });

            ed.addButton("post_block_bottom", {
                type: "button",
                text: "Post Block Bottom",
                onclick: function () {
                    ed.insertContent('[postblock id="bottom"]');
                },
            });

            ed.add;
        },
        plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker template",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern",
        ],

        toolbar1:
            "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2:
            "searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink image media code | forecolor backcolor",
        toolbar3:
            "table | removeformat | charmap emoticons | spellchecker | template restoredraft insertfile | post_block_top post_block_bottom",
        templates: [
            {
                title: "Textbox",
                description: "Tạo Textbox",
                url:
                    window.APP_URL +
                    "public/admin/plugins/tinymce/templates/text-box.html",
            },
        ],
        rel_list: [
            { title: "Do Follow", value: "dofollow" },
            {
                title: "No Follow",
                value: "nofollow",
            },
        ], // paste_as_text: true,
        menubar: false,
        element_format: "html",
        extended_valid_elements:
            "iframe[src|width|height|name|align], embed[width|height|name|flashvars|src|bgcolor|align|play|loop|quality|allowscriptaccess|type|pluginspage]",
        toolbar_items_size: "small",
        relative_urls: false,
        remove_script_host: true,
        convert_urls: true,
        verify_html: false,
        style_formats: [
            { title: "Bold text", inline: "b" },
            {
                title: "Red text",
                inline: "span",
                styles: { color: "#ff0000" },
            },
            { title: "Red header", block: "h1", styles: { color: "#ff0000" } },
            {
                title: "Example 1",
                inline: "span",
                classes: "example1",
            },
            { title: "Example 2", inline: "span", classes: "example2" },
            { title: "Table styles" },
            {
                title: "Table row 1",
                selector: "tr",
                classes: "tablerow1",
            },
        ],
        images_upload_credentials: true,
        file_browser_callback_types: "file image media",

        images_upload_url: window.SERVICE_UPLOAD_FILE,
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");
            input.onchange = function () {
                var file = this.files[0];

                var xhr, formData;

                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open("POST", window.SERVICE_UPLOAD_FILE);

                xhr.onload = function () {
                    var json;

                    if (xhr.status != 200) {
                        failure("HTTP Error: " + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);

                    if (json.status != 'success') {
                        failure("Upload Fails");
                        return;
                    }

                    cb(json.path, { title: json.path });
                };

                formData = new FormData();
                formData.append("files", file);
                formData.append("_token", $('meta[name="csrf_token"]').attr("content"));

                xhr.send(formData);

                // reader.readAsDataURL(file);
                // reader.onload = function () {
                //     // var id = "blobid" + new Date().getTime();
                //     // var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                //     // var base64 = reader.result.split(",")[1];
                //     // var blobInfo = blobCache.create(id, file, base64);
                //     // blobCache.add(blobInfo);
                //     cb(blobInfo.blobUri(), { title: file.name });
                // };
            };
            input.click();
        },

        // images_upload_handler: function (blobInfo, success, failure) {
        //     var xhr, formData;

        //     xhr = new XMLHttpRequest();
        //     xhr.withCredentials = false;
        //     xhr.open("POST",window.SERVICE_UPLOAD_FILE);

        //     xhr.onload = function () {
        //         var json;

        //         // if (xhr.status != 200) {
        //         //     failure("HTTP Error: " + xhr.status);
        //         //     return;
        //         // }

        //         // json = JSON.parse(xhr.responseText);

        //         // if (!json || typeof json.location != "string") {
        //         //     failure("Invalid JSON: " + xhr.responseText);
        //         //     return;
        //         // }

        //         // success(json.location);
        //     };

        //     formData = new FormData();
        //     formData.append("files", blobInfo.blob(), blobInfo.filename());
        //     formData.append("_token", $('meta[name="csrf_token"]').attr('content'));

        //     xhr.send(formData);
        // },
    },
    datatables_columns = [];

var colors = ["#f44336", "#fbc02d", "#4caf50"];
var button_success = "btn m-btn--pill m-btn--air btn-outline-success";
var button_danger = "btn m-btn--pill m-btn--air btn-outline-danger";
var button_warning = "btn m-btn--pill m-btn--air btn-outline-warning";
var success = "form-group has-success";
var warning = "form-group has-warning";
var danger = "form-group has-danger";

var text_danger = "form-control text-danger";
var text_success = "form-control text-success";
var text_warning = "form-control text-warning";
var SEO = {
    meta_title: function () {
        let _this = $('input[name="meta_title"]');
        if (_this.length > 0) {
            _this.closest("div").removeClass();
            let c_title = _this.val().length;
            let l_title = $("span.count-title");
            $(l_title).html(c_title);
            if (c_title >= 40 && c_title <= 80) {
                _this.closest("div").addClass(success);
            } else if (c_title >= 25 && c_title < 40) {
                _this.closest("div").addClass(warning);
            } else {
                _this.closest("div").addClass(danger);
            }
            let seo_title = _this.val();
            $(".gg-title").html(seo_title);
        }
    },
    meta_description: function () {
        let _this = $('textarea[name="meta_description"]');
        if (_this.length > 0) {
            _this.closest("div").removeClass();
            let c_desc = _this.val().length;
            let l_desc = $("span.count-desc");
            $(l_desc).html(c_desc);
            if (c_desc >= 120 && c_desc <= 150) {
                _this.closest("div").addClass(success);
            } else if (c_desc >= 90 && c_desc < 120) {
                _this.closest("div").addClass(warning);
            } else {
                _this.closest("div").addClass(danger);
            }
            let seo_desc = _this.val();
            $(".gg-desc").html(seo_desc);
        }
    },
    meta_keyword: function () {
        let _this = $('input[name="meta_keyword"]');
        if (_this.length > 0) {
            _this.closest("div").removeClass();
            let c_key = _this.val().length;
            let l_key = $("span.count-key");
            $(l_key).html(c_key);
            if (c_key >= 10) {
                _this.closest("div").addClass(success);
            } else if (c_key >= 6 && c_key < 10) {
                _this.closest("div").addClass(warning);
            } else {
                _this.closest("div").addClass(danger);
            }
            let seo_key = _this.val();
            $(".gg-result").val(seo_key);
        }
    },
    generate_slug: function (title, ele) {
        let slug;
        if (slug_disable) {
            return;
        }
        slug = title.toLowerCase();
        slug = slug.replace(/\//gim, "-");
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, "a");
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, "e");
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, "i");
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, "o");
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, "u");
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, "y");

        slug = slug.replace(/đ/gi, "d");
        slug = slug.replace(
            /\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
            ""
        );
        // slug = slug.replace(/[^a-zA-Z0-9 ]/g, "");
        slug = slug.replace(/ /gi, "-");
        slug = slug.replace(/\-\-\-\-\-/gi, "-");
        slug = slug.replace(/\-\-\-\-/gi, "-");
        slug = slug.replace(/\-\-\-/gi, "-");
        slug = slug.replace(/\-\-/gi, "-");
        slug = "@" + slug + "@";
        slug = slug.replace(/\@\-|\-\@|\@/gi, "");
        slug = slug.replace(/\s/g, "-");
        ele.val(slug);
    },
    init_slug: function () {
        let elementTitle = $('input[name="title"]');
        let elementSlug = $('input[name="slug"]');
        elementTitle.on("paste", function () {
            setTimeout(function () {
                SEO.generate_slug(elementTitle.val(), elementSlug);
            }, 500);
        });
        elementTitle.on("keyup", function () {
            SEO.generate_slug(elementTitle.val(), elementSlug);
        });
    },
    init: function () {
        SEO.init_slug();

        let cgg = $(".gg_1").text().split("").join("</span><span>");
        $(".gg_1").html(cgg);
        SEO.meta_title();
        SEO.meta_description();
        SEO.meta_keyword();
        $('input[name="meta_title"]').keyup(function () {
            SEO.meta_title($(this));
        });
        $('input[name="slug"]').keyup(function () {
            $(".gg-url").html(window.APP_URL + "/" + $(this).val());
        });
        $('input[name="meta_keyword"]').keyup(function () {
            SEO.meta_keyword($(this));
        });
        $('textarea[name="meta_description"]').keyup(function () {
            SEO.meta_description($(this));
        });
        $(".gg-url").html(
            window.APP_URL + "/" + $('input[name$="slug"]').val()
        );
    },
};

function generate_slug_from_title(title) {
    let slug;
    slug = title.toLowerCase();
    slug = slug.replace(/\//gim, "-");
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, "a");
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, "e");
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, "i");
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, "o");
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, "u");
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, "y");
    slug = slug.replace(/đ/gi, "d");
    // slug = slug.replace(/[^a-zA-Z0-9 ]/g, "");
    slug = slug.replace(/ /gi, "-");
    slug = slug.replace(/\-\-\-\-\-/gi, "-");
    slug = slug.replace(/\-\-\-\-/gi, "-");
    slug = slug.replace(/\-\-\-/gi, "-");
    slug = slug.replace(/\-\-/gi, "-");
    slug = "@" + slug + "@";
    slug = slug.replace(/\@\-|\-\@|\@/gi, "");
    slug = slug.replace(/\s/g, "-");
    return slug;
}

/*Function CRUD Modal*/
var AJAX_CRUD_MODAL = {
    open: function () {
        let modal_form = $("#modal_form");
        modal_form.on("shown.bs.modal", function (e) {
            // body.addClass('fixed');
            SEO.init();
            let diaLogScroll = modal_form,
                diaLogScrollHeight = diaLogScroll
                    .find(".modal-header")
                    .height(),
                diaLogScrollFooter = diaLogScroll.find(".modal-footer");
            diaLogScroll
                .find(".modal-footer")
                .addClass("modal-footer-top-button");
            diaLogScroll.scroll(function () {
                if (diaLogScroll.scrollTop() <= diaLogScrollHeight + 35) {
                    diaLogScrollFooter.addClass("modal-footer-top-button");
                } else {
                    diaLogScrollFooter.removeClass("modal-footer-top-button");
                }
            });
        });
    },
    close: function () {
        $("#modal_form").on("hidden.bs.modal", function (e) {
            body.removeClass("fixed");
            window.onbeforeunload = null;
            $(this).find("form").trigger("reset");
            $(this).find("input[type=hidden]").val(0);
            $(this).find(".select2_suggest").empty().trigger("change");
            $(this).find("div.form-control-feedback").remove();
            $(this).find('[name="username"]').attr("disabled", false);
            $(this).find(".form-group").removeClass("has-danger");
            $(this)
                .find(".preview img")
                .attr("src", "//via.placeholder.com/100x100");

            $(this).find('ul[role="tablist"] li a').removeClass("active show");
            $(this)
                .find('ul[role="tablist"] li:first-child a')
                .trigger("click")
                .addClass("active show");
            $(this).find("#list-album").html("");
            // $("input.tagsinput").tagsinput('removeAll');
            // $(this).find('input.switchBootstrap').bootstrapSwitch('state', false);
            // $(this).find('input[name="is_status"]').bootstrapSwitch('state', true);
            // $(this).find('input[name="is_featured"]').bootstrapSwitch('state', true);
            for (var j = 0; j < tinyMCE.editors.length; j++) {
                tinymce.get(tinyMCE.editors[j].id).setContent("");
            }
        });
    },
    disable_close: function () {
        $("#modal_form").modal({
            backdrop: "static",
            keyboard: false,
            show: false,
        });
    },
    add: function () {
        slug_disable = false; 
        $("#modal_form").modal("show");
        return false;
    },
    edit: function (func) {
        slug_disable = true;

        return func();
    },
    viewRevision: function (func) {
        return func();
    },
    save: function () {
        let modal_form = $("#modal_form");
        let url = modal_form.find("form").attr("action");
        let method = modal_form.find("form").attr("method");
        let modal_id = modal_form.find("form").attr("data-popup-id");
        if (tinymce.editors.length > 0) {
            for (let j = 0; j < tinymce.editors.length; j++) {
                let idInput = tinymce.editors[j].id;
                let content = tinymce.get(idInput).getContent();
                $('[name="' + idInput + '"]').val(content);
            }
            AJAX_CRUD_MODAL.getCountWordTinymce();
        }

        $.ajax({
            url: url,
            type: method,
            data: modal_form.find("form").serialize(),
            dataType: "JSON",
            beforeSend: function () { },
            success: function (data) {
                $(".form-control-feedback").remove();
                $(".form-group").removeClass("has-danger");
                if (data.status == "success") {
                    Notification("success", data.message);
                } else if (data.status == "warning") {
                    Notification("warning", data.message);
                }
                $(`#${modal_id}`).modal("hide");

                DatatablesServerSide.initReload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },
        });
        return false;
    },
    saveDraft: function () {
        let modal_form = $("#modal_form");
        let url;

        modal_form.find(".btnSave").attr("disabled", true);
        modal_form.find(".btnSaveDraft").attr("disabled", true);
        let id = modal_form.find('input[name="id"]').val();
        if (modal_form.find('input[name="id"]').val() == 0) {
            url = url_ajax_add_post_private;
        } else {
            url = url_ajax_add_draft;
        }

        if (tinyMCE.editors.length > 0) {
            for (let j = 0; j < tinyMCE.editors.length; j++) {
                let idInput = tinyMCE.editors[j].id;
                let content = tinymce.get(idInput).getContent();
                $('[name="' + idInput + '"]').val(content);
            }

            AJAX_CRUD_MODAL.getCountWordTinymce();
        }
        $.ajax({
            url: url,
            type: "POST",
            data: modal_form.find("form").serialize(),
            dataType: "JSON",
            beforeSend: function () {
                $(".form-control-feedback").remove();
                $(".form-group").removeClass("has-danger");
            },
            success: function (data) {
                toastr[data.type](data.message);
                if (data.type === "warning") {
                    $.each(data.validation, function (i, val) {
                        let input = $('[name^="' + i + '"]');
                        if (input.parent().hasClass("input-group")) {
                            input.closest(".input-group").after(val);
                        } else {
                            input.after(val);
                        }
                        input.addClass("form-control-danger");
                        input.closest(".form-group").addClass("has-danger");
                    });
                } else {
                    modal_form.find('input[name="id"]').val(data.post_id);
                    console.log(data.post_id);
                }
                modal_form.find(".btnSave").attr("disabled", false);
                modal_form.find(".btnSaveDraft").attr("disabled", false);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
                modal_form.find(".btnSave").attr("disabled", false);
                modal_form.find(".btnSaveDraft").attr("disabled", false);
            },
        });
        return false;
    },
    delete: function () {
        return false;
    },
    tinymce: function () {
        tinymce.init(option_TinyMCE);
    },
    getCountWordTinymce: function () {
        if ($('[name="total_word"]').length > 0) {
            let wordcount = tinyMCE.activeEditor.plugins.wordcount;
            $('[name="total_word"]').val(wordcount.getCount());
        }
    },
    summernote: function () {
        $(".summernote").summernote({ height: 150 });
    },
    init: function () {
        AJAX_CRUD_MODAL.disable_close();
        AJAX_CRUD_MODAL.open();
        AJAX_CRUD_MODAL.close();

        // doc.on('click', '.btnReload', function (e) {
        //     e.preventDefault();
        //     AJAX_DATATABLES.reload();
        // });

        doc.on("click", ".btnAddForm", function (e) {
            e.preventDefault();
            let method = $(this).data("method");
            let action = $(this).data("action");
            $("#modal_form")
                .find("form")
                .attr("data-method", method)
                .attr("data-action", action);
            AJAX_CRUD_MODAL.add();
        });
        doc.on("click", ".btnDeleteAll", function (ev) {
            ev.preventDefault();
            let listChecked = table.getSelectedRecords();
            if (listChecked.length == 0) {
                toastr.warning("Vui lòng chọn bản ghi bạn muốn xóa !");
                return false;
            }

            swal({
                title: "Bạn có chắc chắn xóa những bản ghi này ?",
                text: "Bạn không thể khôi phục những bản ghi này sau khi xóa!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Đúng, Xóa ngay !",
                cancelButtonText: "Không, Hủy nó !",
                reverseButtons: !0,
            }).then(function (e) {
                let ids = [];
                $.each(listChecked, function (i, v) {
                    ids.push($(v).find('input[type="checkbox"]').val());
                });
                if (ids) {
                    if (e.value) {
                        $.each(ids, function (index) {
                            $.ajax({
                                url: url_ajax_delete,
                                type: "POST",
                                data: { id: ids[index] },
                                dataType: "JSON",
                                success: function (data) {
                                    if (data.type) {
                                        toastr[data.type](data.message);
                                    }
                                    if (data.type === "success") {
                                        e.value
                                            ? swal(
                                                "Xóa thành công!",
                                                "Những bản ghi bạn chọn đã được xóa.",
                                                "success"
                                            )
                                            : "cancel" === e.dismiss &&
                                            swal(
                                                "Hủy bỏ thành công !",
                                                "Các bản ghi của bạn đã được an toàn :)",
                                                "error"
                                            );
                                    }
                                    AJAX_DATATABLES.reload();
                                },
                                error: function (
                                    jqXHR,
                                    textStatus,
                                    errorThrown
                                ) {
                                    console.log(errorThrown);
                                    console.log(textStatus);
                                    console.log(jqXHR);
                                },
                            });
                        });
                    } else {
                        swal(
                            "Hủy bỏ thành công !",
                            "Bản ghi của bạn đã được an toàn :)",
                            "error"
                        );
                    }
                }
            });
        });

        doc.on("change", ".updateSort", function (ev) {
            ev.preventDefault();
            let id = $(this).closest("tr").find('input[type="checkbox"]').val();
            let field = $(this).attr("name");
            let value = $(this).val();
            $.ajax({
                url: url_ajax_update_field,
                type: "POST",
                data: { id: id, field: field, value: value },
                dataType: "JSON",
                success: function (data) {
                    if (data.type) {
                        toastr[data.type](data.message);
                    }
                    AJAX_DATATABLES.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown);
                    console.log(textStatus);
                    console.log(jqXHR);
                },
            });
        });

        doc.off("click", ".btnSave").on("click", ".btnSave", function (e) {
            e.preventDefault();
            AJAX_CRUD_MODAL.save();
        });
        doc.off("click", ".btnSaveDraft").on(
            "click",
            ".btnSaveDraft",
            function (e) {
                e.preventDefault();
                AJAX_CRUD_MODAL.saveDraft();
            }
        );
        $(".number")
            .off("keyup")
            .keyup(function () {
                var number = $(this)
                    .val()
                    .replace(/[^0-9]/g, "");
                $(this).val(number);
            });
    },
};
/*Function CRUD Modal*/
/*Đây là các Function để dùng chung*/
var FUNC = {
    getParam: function (param) {
        let url_string = window.location.href;
        let url = new URL(url_string);
        let c = url.searchParams.get(param);
        return c;
    },
    imgError: (image) => {
        image.onerror = "";
        image.src = window.APP_URL + "public/admin/images/default.jpg";
        return true;
    },
    getImageThumb: (thumbnail) => {
        let src = media_url + thumbnail;
        return src;
    },
    chooseImage: function (_this) {
        moxman.browse({
            view: "thumbs",
            extensions: "jpg,jpeg,png,gif,ico",
            no_host: true,
            upload_auto_close: true,
            oninsert: function (args) {
                let element = $(_this).closest(".form-group").find("input");
                let url = args.files[0].url;
                let urlImageResponse = url.replace(media_name, "");
                let image = args.files[0].meta.thumb_url;
                element
                    .val(urlImageResponse)
                    .closest(".form-group")
                    .find(".preview")
                    .children("img")
                    .attr("src", image);
            },
        });
        return false;
    },
    chooseMultipleImage: function (_this) {
        let element = $(_this);
        let count = parseInt(
            element.closest(".preview").find("#list-album").attr("data-id")
        );
        moxman.browse({
            view: "thumbs",
            extensions: "jpg,jpeg,png,gif,ico",
            no_host: true,
            upload_auto_close: true,
            oninsert: function (args) {
                $.each(args.files, function (i, val) {
                    count += 1;
                    let urlImageResponse = val.url.replace(
                        "/" + script_name + media_name,
                        ""
                    );
                    //let image = val.meta.thumb_url;
                    //arrImage[i] = urlImageResponse;
                    let html = FUNC.itemGallery(count, urlImageResponse);
                    element
                        .closest(".preview")
                        .find("#list-album")
                        .append(html);
                });
                element
                    .closest(".preview")
                    .find(".list-album")
                    .attr(
                        "data-id",
                        element
                            .closest(".preview")
                            .find(".item_gallery:last")
                            .data("count")
                    );
                //element.val(JSON.stringify(arrImage));
            },
        });
        return false;
    },
    chooseFile: function (_this) {
        moxman.browse({
            view: "thumbs",
            extensions: "pdf,doc,docx",
            no_host: false,
            upload_auto_close: true,
            oninsert: function (args) {
                let element = $(_this).closest(".form-group").find("input");
                let url = args.focusedFile.url;
                let urlImageResponse = url.replace(media_url, "");
                //let urlImageResponse = args.focusedFile.name;
                element.val(urlImageResponse);
                console.log(args);
            },
        });
        return false;
    },
    showGallery: function (element, data) {
        console.log(data);
        console.log(element);
        if (data !== null && data.length > 0) {
            $.each(JSON.parse(data), function (i, v) {
                $(element).append(FUNC.itemGallery(i + 1, v));
            });
        }
    },
    itemGallery: function (count, urlImageResponse) {
        return (html =
            "<div class='item_gallery item_" +
            count +
            "' data-count='" +
            count +
            "'>" +
            "<img src='" +
            media_url +
            "/" +
            urlImageResponse +
            "' id='item_" +
            count +
            "' height='120' class='img-thumbnail'>" +
            "<input type='hidden' name='album[]' value='" +
            urlImageResponse +
            "' >" +
            "<span class='fa fa-times removeInput' onclick='this.parentNode.remove()'></span>" +
            "</div>");
    },
    getCookie: function (name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
    },
    getYoutubeKey: function (url) {
        var rx =
            /^.*(?:(?:youtu\.be\/|v\/|vi\/|u\/\w\/|embed\/)|(?:(?:watch)?\?v(?:i)?=|\&v(?:i)?=))([^#\&\?]*).*/;
        if (url) var arr = url.match(rx);
        if (arr) return arr[1];
    },
    ajaxShowRequest: function (formData, jqForm, options) {
        jqForm
            .find('[type="submit"]')
            .append(
                '<i class="fa fa-spinner fa-spin ml-2" style="fonts-size:24px;color: #ffffff;"></i>'
            );
        if (tinyMCE.editors.length > 0) {
            for (let j = 0; j < tinyMCE.editors.length; j++) {
                let idInput = tinyMCE.editors[j].id;
                let content = tinymce.get(idInput).getContent();
                $('[name="' + idInput + '"]').val(content);
            }
        }
        //let queryString = $.param(formData);
        return true;
    },
    ajaxShowResponse: function (response, statusText, xhr, $form) {
        if (response.csrf_form) {
            $form
                .find('input[name="' + response.csrf_form.csrf_name + '"]')
                .val(response.csrf_form.csrf_value);
            $('meta[name="csrf_form_token"]').attr(
                "content",
                response.csrf_form.csrf_value
            );
        }
        $form.find(".fa-spin").remove();
        if (typeof response.type !== "undefined") {
            toastr[response.type](response.message);
            if (response.type === "warning") {
                $form.find(".form-group").removeClass("has-danger");
                $form.find(".form-control-feedback").html("");
                $.each(response.validation, function (key, val) {
                    $form
                        .find('[name="' + key + '"]')
                        .after(val)
                        .parent()
                        .addClass("has-danger");
                });
            } else {
                $form.find(".form-group").removeClass("has-danger");
                $form.find(".form-control-feedback").html("");
                //$form.reset();
                setTimeout(function () {
                    location.reload();
                }, 1500);
                // setTimeout(function () {
                //     if(response.url_redirect) location.href = response.url_redirect;
                // },2000);
            }
        }
    },
    ajaxShowError: function () {
        toastr["error"]("The action you have requested is not allowed.");
    },
    clearCacheDb: function () {
        $.ajax({
            type: "GET",
            url: base_admin_url + "setting/ajax_clear_cache_db",
            dataType: "json",
            success: function (response) {
                if (typeof response.type !== "undefined") {
                    toastr[response.type](response.message);
                }
            },
        });
        return false;
    },
    clearCacheFile: function () {
        $.ajax({
            type: "GET",
            url: base_admin_url + "setting/delete_cache_file",
            dataType: "json",
            success: function (response) {
                if (typeof response.type !== "undefined") {
                    toastr[response.type](response.message);
                }
            },
        });
        return false;
    },
    clearCacheImage: function () {
        $.ajax({
            type: "GET",
            url: base_admin_url + "setting/ajax_clear_cache_image",
            dataType: "json",
            success: function (response) {
                if (typeof response.type !== "undefined") {
                    toastr[response.type](response.message);
                }
            },
        });
        return false;
    },
};
/*Đây là các Event Function để dùng chung*/
var UI = {
    activeMenu: function () {
        $('ul>li a[href="' + window.location.href + '"]')
            .parent()
            .addClass("m-menu__item--active")
            .closest(".m-menu__item--submenu")
            .addClass("m-menu__item--open m-menu__item--expanded");
    },
    ajaxFormSettingSubmit: function () {
        $('form[method="post"]').ajaxForm({
            url: url_ajax_setting_update,
            beforeSubmit: FUNC.ajaxShowRequest, // pre-submit callback
            success: FUNC.ajaxShowResponse, // post-submit callback
            type: "POST", // 'get' or 'post', override for form's 'method' attribute
            dataType: "JSON", // 'xml', 'script', or 'json' (expected server response type)
            clearForm: false, // clear all form fields after successful submit
            resetForm: true, // reset the form after successful submit
        });
    },
    ajaxFormSubmit: function () {
        $('form[method="post"]').ajaxForm({
            //target:        '#output1',   // target element(s) to be updated with server response
            beforeSubmit: FUNC.ajaxShowRequest, // pre-submit callback
            success: FUNC.ajaxShowResponse, // post-submit callback
            type: "POST", // 'get' or 'post', override for form's 'method' attribute
            dataType: "JSON", // 'xml', 'script', or 'json' (expected server response type)
            clearForm: false, // clear all form fields after successful submit
            resetForm: true, // reset the form after successful submit
            // $.ajax options can be used here too, for example:
        });
    },

    bootstrapSwitch: function () {
        $("[data-switch=true]").bootstrapSwitch();
    },
    init: function () {
        UI.activeMenu();
        // UI.bootstrapSwitch();
    },
};
jQuery(function ($) {
    UI.init();
});

var FileUpload = (function () {
    //
    // Setup module components
    //

    // Bootstrap file upload
    var _componentFileUpload = function (dom) {
        if (!$ || !FilePond) {
            return;
        }

        FilePond.registerPlugin(FilePondPluginImagePreview);

        jQuery(".filepond-input").each(function (index, item) {
            var self = $(item);
            let domUpload = self.closest(".parent-upload");
            let isMultiUpload = self.attr("multiple") ? 1 : 0;
            let fieldName = jQuery(domUpload).attr("data-field");
            let input_file = `<input type="hidden" name="${fieldName}" value="">`;

            let datas = [];

            let list = jQuery(domUpload).attr("data-image-source");
            if (isMultiUpload) {
                if (list) {
                    $.each(val_files, function (K, item) {
                        datas.push(filesConfig(item));
                    });
                }
            } else {
                if (list) {
                    datas = filesConfig(list);
                }
                $(input_file).val(list);
            }
            FilePond.destroy(item);
            let _class =
                "filepond-input-" + Math.floor(Math.random() * 100) * 1000;
            let input =
                '<input type="file" class="filepond-input ' +
                _class +
                ' filepond upload-file"  name="files">';
            domUpload.children().remove();
            jQuery(domUpload).append(input);
            if (
                $(domUpload).find('input[name="' + fieldName + '"]').length == 0
            ) {
                $(domUpload).append(input_file);
            }
            document.querySelectorAll("." + _class).forEach(function (item) {
                if (!isMultiUpload) {  
                    domUpload.find('input[name="' + fieldName + '"]').val(list ?? '');
                }
                $(item).trigger("change");
                var pond = FilePond.create(item);
                $.each(pond.getFiles(), function (k) {
                    pond.removeFile(k);
                });
                if (!list) {
                    datas = [];
                }

                pond.setOptions({
                    files: datas,
                    maxParallelUploads: 10,
                    checkValidity: true,
                    allowMultiple: isMultiUpload ? true : false,
                    instantUpload: true,
                    forceRevert: true,
                    server: {
                        url: "",
                        timeout: 7000,
                        process: {
                            url: window.SERVICE_UPLOAD_FILE,
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": $(
                                    'meta[name="csrf_token"]'
                                ).attr("content"),
                            },
                            withCredentials: false,
                            onload: (res) => {
                                var files = pond.getFiles();
                                if (isMultiUpload == 1) {
                                    let arr = [];
                                    $.each(files, (idx, item) =>
                                        arr.push(item.serverId)
                                    );
                                    domUpload
                                        .find('input[name="' + fieldName + '"]')
                                        .val(JSON.stringify(arr));
                                } else {
                                    domUpload
                                        .find('input[name="' + fieldName + '"]')
                                        .val(res);
                                }
                                console.log("file :" + files);
                                return res;
                            },
                            onerror: (response) => {
                                alert("Lỗi Upload: " + response);
                            }, //,
                        },
                        revert: null,
                        restore: null,
                        load: window.MEDIA_URL,
                        fetch: null,
                    },
                    instantUpload: true,
                    allowFileMetadata: true,
                    allowRevert: true,
                    allowRemove: true,
                });

                pond.on("processfile", (error, file) => {
                    console.log(file);
                    if (error) {
                        if (confirm("Something went wrong. Reload page?")) {
                            location.reload();
                        }
                    }
                });

                pond.on("addfilestart", function (file) { 
                   
                    console.log(`onaddfilestart`);
                    // buttonForm.classList.add('filepondUpload');
                    // buttonForm.setAttribute('disabled', 'true');
                });

                // This event is triggered when the remove/cancel button is clicked.
                pond.on("removefile", function () {
                    var files = pond.getFiles();
                    if (isMultiUpload == 1) {
                        let arr = [];
                        $.each(files, (idx, item) => arr.push(item.serverId));
                        domUpload
                            .find('input[name="' + fieldName + '"]')
                            .val(JSON.stringify(arr));
                    } else {
                        domUpload
                            .find('input[name="' + fieldName + '"]')
                            .val("");
                    }
                });
            });
        });
    };

    //
    // Return objects assigned to module
    //
    var filesConfig = function (url) {
        return [
            {
                source: url,
                options: {
                    type: "local",
                },
            },
        ];
    };
    return {
        init: function (parentDom) {
            _componentFileUpload(parentDom);
        },
        initReload: function (parentDom) {
            _componentFileUpload(parentDom);
        },
    };
})();

var DatatablesServerSide = (function () {
    // Shared variables
    var dt;
    var filterPayment;

    // Private functions
    var initDatatable = function () {
        dt = $("#data_table").DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: true,
            pagingType: "simple_numbers",
            paging: true,
            pageLength: 10,
            lengthMenu: [10, 20, 50, 100, 200, 500, 1000, 5000],
            stateSave: true,

            ajax: {
                url: url_ajax_list,
                type: "GET",
                data: {
                    params: getKeySearch,
                },
            },
            columns: datatables_columns,
            columnDefs: [],

            bInfo: true,
            initComplete: async function (oSettings) {
                
            },
            drawCallback: async function (settings) {
                // 
                await AutoloadDataService.init($("body"));
               
            },
        });

        table = dt.$;

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        dt.on("draw", function () {
            initToggleToolbar();
        });
    };

    var getKeySearch = function () {
        return $("#form_search_data_table").serialize();
    };

    // Filter Datatable
    var handleFilterDatatable = () => {
        // Select filter options
        filterPayment = document.querySelectorAll(
            '[data-kt-docs-table-filter="payment_type"] [name="payment_type"]'
        );
        const filterButton = document.querySelector(
            '[data-kt-docs-table-filter="filter"]'
        );

        // Filter datatable on submit
        filterButton.addEventListener("click", function () {
            // Get filter values
            let paymentValue = "";

            // Get payment value
            filterPayment.forEach((r) => {
                if (r.checked) {
                    paymentValue = r.value;
                }

                // Reset payment value if "All" is selected
                if (paymentValue === "all") {
                    paymentValue = "";
                }
            });

            // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
            dt.search(paymentValue).draw();
        });
    };

    // Delete customer
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = document.querySelectorAll(
            '[data-kt-docs-table-filter="delete_row"]'
        );

        deleteButtons.forEach((d) => {
            // Delete button on click
            d.addEventListener("click", function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest("tr");

                // Get customer name
                const customerName = parent.querySelectorAll("td")[1].innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text:
                        "Are you sure you want to delete " + customerName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary",
                    },
                }).then(function (result) {
                    if (result.value) {
                        // Simulate delete request -- for demo purpose only
                        Swal.fire({
                            text: "Deleting " + customerName,
                            icon: "info",
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000,
                        }).then(function () {
                            Swal.fire({
                                text: "You have deleted " + customerName + "!.",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                },
                            }).then(function () {
                                // delete row data from server and re-draw datatable
                                dt.draw();
                            });
                        });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: customerName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        });
                    }
                });
            });
        });
    };

    // Reset Filter
    var handleResetForm = () => {
        // Select reset button
        const resetButton = document.querySelector(
            '[data-kt-docs-table-filter="reset"]'
        );

        // Reset datatable
        resetButton.addEventListener("click", function () {
            // Reset payment type
            filterPayment[0].checked = true;

            // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
            dt.search("").draw();
        });
    };

    // Init toggle toolbar
    var initToggleToolbar = function () {
        // Toggle selected action toolbar
        // Select all checkboxes
        var container = $("#datatable");
        // container.find('[type="checkbox"]').each(c => {
        //
        //     // Checkbox on click event
        //     $(c).onclick(function () {
        //         setTimeout(function () {
        //             toggleToolbars();
        //         }, 50);
        //     });
        // });

        $(document)
            .off("click", ".btnDelete")
            .on("click", ".btnDelete", function (ev) {
                ev.preventDefault();
                let id = $(this)
                    .closest("tr")
                    .find('input[type="checkbox"]')
                    .val();

                let method = $(this).data("method");
                let action = $(this).data("action");
                Swal.fire({
                    title: "Bạn có chắc chắn xóa những bản ghi này ?",
                    text: "Bạn không thể khôi phục những bản ghi này sau khi xóa!",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary",
                    },
                }).then(function (result) {
                    if (result.value) {
                        // Simulate delete request -- for demo purpose only
                        $.ajax({
                            url: action,
                            type: method,
                            data: { id: id },
                            dataType: "JSON",
                            success: function (data) {
                                if (data.status === "success") {
                                    Notification("success", "Xóa thành công");
                                }
                                if (data.status === "warning") {
                                    Notification("warning", data.message);
                                }
                                initReloadDataTable();
                                return true;
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(errorThrown);
                                console.log(textStatus);
                                console.log(jqXHR);
                                Notification(
                                    "error",
                                    "Lỗi!!! Liên hệ Hiệp để xử lý..."
                                );

                                return true;
                            },
                        });
                    } else if (result.dismiss === "cancel") {
                        Notification(
                            "error",
                            "Hủy bỏ thành công !!! Bản ghi của bạn đã được an toàn"
                        );
                    }
                });
            });

        $(document)
            .off("click", ".btnUpdateField")
            .on("click", ".btnUpdateField", function (ev) {
                ev.preventDefault();
                let id = $(this)
                    .closest("tr")
                    .find('input[type="checkbox"]')
                    .val();
                let field = $(this).data("field");
                let value = $(this).data("value");
                let url = $(this).data("url");
                let obj = {};
                obj[field] = value;
                $.ajax({
                    url: url,
                    type: "PUT",
                    data: obj,
                    dataType: "JSON",
                    success: function (data) {
                        if (data.status === "success") {
                            Notification("success", data.message);
                        }
                        if (data.status === "warning") {
                            Notification("warning", data.message);
                        }
                        initReloadDataTable();
                        return true;
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(errorThrown);
                        console.log(textStatus);
                        console.log(jqXHR);
                        Notification(
                            "error",
                            "Lỗi!!! Liên hệ Hiệp để xử lý..."
                        );
                        return true;
                    },
                });
            });

        $(document).on(
            "change",
            "#search_data_table input, #search_data_table select",
            function () {
                dt.ajax.reload();
            }
        );
        // $("select[name='table_search_status'").on("change", function (e) {
        //     console.log("true");
        //     dt.ajax.reload();
        // });
    };

    // Toggle toolbars
    var toggleToolbars = function () {
        // Define variables
        const container = document.querySelector("#kt_datatable_example_1");
        const toolbarBase = document.querySelector(
            '[data-kt-docs-table-toolbar="base"]'
        );
        const toolbarSelected = document.querySelector(
            '[data-kt-docs-table-toolbar="selected"]'
        );
        const selectedCount = document.querySelector(
            '[data-kt-docs-table-select="selected_count"]'
        );

        // Select refreshed checkbox DOM elements
        const allCheckboxes = container.querySelectorAll(
            'tbody [type="checkbox"]'
        );

        // Detect checkboxes state & count
        let checkedState = false;
        let count = 0;

        // Count checked boxes
        allCheckboxes.forEach((c) => {
            if (c.checked) {
                checkedState = true;
                count++;
            }
        });

        // Toggle toolbars
        if (checkedState) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add("d-none");
            toolbarSelected.classList.remove("d-none");
        } else {
            toolbarBase.classList.remove("d-none");
            toolbarSelected.classList.add("d-none");
        }
    };

    var initReloadDataTable = async function () {
        document.querySelector('input[type="search"]').value = "";
        await dt.search("").ajax.reload(null, false);

        // await AutoloadDataService.init($("#data_table"));
    };

    var initReloadAjaxDataTable = function () {
        dt.ajax.reload();
    };
    // Public methods
    return {
        init: async function () {
            await initDatatable();
           
            // handleSearchDatatable();

            $(document).on("click", ".btnReload", function () {
                DatatablesServerSide.initReload();
            });
            // initToggleToolbar();
            // handleFilterDatatable();
            // handleDeleteRows();
            // handleResetForm();
        },
        initReload: function () {
            initReloadDataTable();
        },
    };
})();

const AutoloadDataService = (function () {
    var objSelect2Suggest = {
        category: {
            url: window.APP_URL + "/admin/ajax/category",
            formated: "$(title)",
            id: "id",
        },
        tag: {
            url: window.APP_URL + "/admin/ajax/tag",
            formated: "$(title)",
            id: "id",
        },
        menu: {
            url: window.APP_URL + "/admin/ajax/menu",
            formated: "$(title)",
            id: "id",
            query: ["location_id"],
        },
    };
    var arrDomAutoFill = [
        {
            url: window.APP_URL + "/admin/ajax/category",
            dom: ".em-category",
            attr: "data-id",
            formated: "$(title)",
            fk: "id",
        },
        {
            url: window.APP_URL + "/admin/ajax/tag",
            dom: ".em-tag",
            attr: "data-id",
            formated: "$(title)",
            fk: "id",
        },
        {
            url: window.APP_URL + "/admin/ajax/list-story",
            dom: ".em-story",
            attr: "data-id",
            formated: "$(title)",
            fk: "id",
        },
    ];

    //
    // Setup module components
    //

    // Basic Datatable examples
    var replaceData = function (parentDom) { 
        $.each(arrDomAutoFill, function (idx, item) {

            var focusDom = parentDom.find(`${item.dom}`);
            console.log(focusDom.length , item.dom);
            if (!focusDom.length) {
                return true;
            }
            /////////// FIX TAM CHO CAC DOM DANG CHAY ///////////

            /////////////  END //////////////////

            //if (item.pquery) {
            var arrId = [];
            focusDom.each(function () {
                var selfDom = $(this);

                if (selfDom.prop("tagName") == "SELECT") {
                    selfDom.find("option").each(function () {
                        var v = $(this).val();
                        if (v && $.inArray(v, arrId) == -1) {
                            arrId.push(v);
                        }
                    });
                } else {
                    var v = selfDom.attr(item.attr);

                    if (v && $.inArray(v, arrId) == -1) {
                        arrId.push(v);
                    }
                }
            });
            if (!arrId.length) {
                return;
            }
            arrId = arrId.map(($item) => parseInt($item));

            var count = 1;
            if (arrId.length > 200) {
                // lay so lam tron len
                count = Math.ceil(arrId.length / 200);
            }
            for (i = 1; i <= count; i++) {
                var objParams = {};

                var inqId = arrId.slice((i - 1) * 200, 200 * i);

                objParams[item.fk] = inqId;

                //replace url arg
                var urlQuery = item.url;
                if (item.url_arg) {
                    $.each(item.url_arg, function (k, v) {
                        urlQuery = urlQuery.replace(
                            "{" + k + "}",
                            objParams[v]
                        );
                        delete objParams[v];
                    });
                }

                var dataGet = objParams;
                $.ajax({
                    url: urlQuery,
                    type: "GET",
                    dataType: "json",
                    data: dataGet,
                    contentType:
                        "application/x-www-form-urlencoded; charset=UTF-8",

                    success: function (response) {
                        if (response.data.length == 0) {
                            ////console.log(data);
                            return false;
                        }
                        var data = response.data;
                        var new_str = item.formated;
                        var new_link = item.link;
                        var objData = {};

                        objLink = {};
                        $.each(data, function (key, value) {
                            objData[value[item.fk]] = value;
                        });
                        focusDom.each(function () {
                            if ($(this).prop("tagName") == "SELECT") {
                                var selectData = $(this);
                                var tmp = $(this).attr("data-format")
                                    ? $(this).attr("data-format")
                                    : new_str;
                                selectData
                                    .find("option")
                                    .each(function (element, key) {
                                        var v = $(this).val();

                                        if (objData[v]) {
                                            var replaced = formatReplace(
                                                tmp,
                                                objData[v]
                                            );
                                            $(key).text(replaced);
                                            setTimeout(function () {
                                                $(key).trigger(
                                                    "change_select2"
                                                );
                                            }, 1000);
                                        }
                                    });
                                $(selectData).trigger("change");
                            } else {
                                var v = $(this).attr(item.attr);
                                var _self = $(this);

                                if (objData[v]) {
                                    var tmp = $(this).attr("data-format")
                                        ? $(this).attr("data-format")
                                        : new_str;
                                    if (new_link) {
                                        $(this).html(
                                            '<a href="' +
                                            formatReplace(
                                                new_link,
                                                objData[v]
                                            ) +
                                            '" target="_blank">' +
                                            formatReplace(tmp, objData[v]) +
                                            "</a>"
                                        );
                                    } else {
                                        $(this).text(
                                            formatReplace(tmp, objData[v])
                                        );
                                    }
                                }
                            }
                        });
                    },
                    error: function () { },
                });
            }
        });
    };
    var selectData = function (parentDom) {
        var __cache = [];
        parentDom.find(".select2_suggest").each(function () {
            var self = $(this);
            loadSelectData(self);
            $(this).bind("select2_suggest", function (e) {
                var getID = $(this).select2("data");
                //console.log(getID[0]['_resultId']);
                var resultID = getID[0]["_resultId"];
                console.log(resultID);
                var res = resultID.split("-result-");

                //.text("TEST");
                $("#" + res[0] + "-container").text(
                    self.find("option:selected").text()
                );
            });
        });
    };

    var loadSelectData = function (current_dom, option = {}) {
        var dataTable = option.module || current_dom.attr("data-module");
        var showType = option.show || current_dom.attr("data-show");
        if (!dataTable) {
            return false;
        }
        var objData = objSelect2Suggest[dataTable];

        var urlLoad = objData.url || "";
        if (typeof objSelect2Suggest == "undefined" || !objData) {
            console.log("Suggest data" + dataTable + " not found");
            return false;
        }
        if (!urlLoad) {
            console.log("Thieu config cho suggest");
            return false;
        }
        var objParams = {};

        if (typeof option.query != "undefined") {
            $.each(option.query, function (qidx, qkey) {
                if (typeof objData["url_to_" + qidx] != "undefined") {
                    urlLoad = formatReplace(objData["url_to_" + qidx], {
                        [qidx]: qkey,
                    });
                } else {
                    if (typeof qkey == "object") {
                        objParams[qidx] = { inq: qkey };
                    } else {
                        objParams[qidx] = { eq: qkey };
                    }
                }
            });
        } else if (typeof objData.query != "undefined") {
            $.each(objData.query, function (qidx, qkey) {
                var objQuery = current_dom.attr("data-query-" + qkey);
                if (objQuery) {
                    if (typeof objData["url_to_" + qkey] != "undefined") {
                        urlLoad = formatReplace(objData["url_to_" + qkey], {
                            [qkey]: objQuery,
                        });
                    } else {
                        if (objQuery.indexOf(",") > 0) {
                            objQuery = objQuery.split(",");
                            objParams[qkey] = { inq: objQuery };
                        } else {
                            objParams[qkey] = objQuery;
                        }
                    }
                }
            });
        }
        var search_param = objData.search_param || "";
        //console.debug(objParams);
        var minimumInputLength =
            (typeof showType == "undefined" || showType != "all") &&
                search_param
                ? 2
                : 0;
        var limit = search_param ? 50 : 500;
        var __cache = [];
        let token = window.TOKEN_API_CLIENT;

        current_dom.select2({
            minimumInputLength: minimumInputLength,
            allowClear: true,
            cache: true,
            placeholder: current_dom.attr("placeholder") || "Select an option",
            ajax: {
                url: urlLoad,
                dataType: "json",
                delay: 300,
                cache: true,
                data: function (params) {
                    var query = {};
                    if (minimumInputLength > 0) {
                        if (search_param == "keyword") {
                            var moreParams = { keyword: params.term };
                        } else {
                            query = {
                                [search_param]: {
                                    like: params.term,
                                },
                            };
                        }
                    }
                    $.extend(query, objParams);
                    var offset =
                        params.page > 1 ? (params.page - 1) * limit : 0;
                    if (objData.version != 2) {
                        var result = {
                            where: query,
                            option: {
                                limit: limit,
                                offset: offset,
                            },
                        };
                    } else {
                        var result = {
                            filter: JSON.stringify({
                                where: query,
                                limit: limit,
                                offset: offset,
                            }),
                        };
                    }

                    if (typeof moreParams != "undefined") {
                        $.extend(result, moreParams);
                    }
                    return result;
                },
                headers: {
                    Authorization: "Bearer " + token,
                },
                processResults: function (data, params) {
                    if (data.error) {
                        return false;
                    }
                    var term = stringToSlug($.trim(params.term).toLowerCase());
                    //console.log(params);
                    var new_str = objData.formated;
                    var tmp = current_dom.attr("data-format")
                        ? current_dom.attr("data-format")
                        : new_str;
                    var tmp_val = current_dom.attr("data-format-val")
                        ? current_dom.attr("data-format-val")
                        : "$(" + objData.id + ")";
                    var html = objData.html || "";
                    var dataResult = [];
                    var result = data.data;
                    $.each(result, function (item_key, item) {
                        //console.log(tmp,item);
                        if (item) {
                            var replaced = formatReplace(tmp, item);
                            var valReplaced = formatReplace(tmp_val, item);
                            var htmlReplace = !html
                                ? replaced
                                : formatReplace(html, item);
                            if (params.term && !search_param) {
                                if (
                                    stringToSlug(
                                        replaced.toLowerCase()
                                    ).indexOf(term) > -1
                                ) {
                                    dataResult.push({
                                        id: valReplaced,
                                        text: replaced,
                                        html: htmlReplace,
                                    });
                                }
                            } else {
                                dataResult.push({
                                    id: valReplaced,
                                    text: replaced,
                                    html: htmlReplace,
                                });
                            }
                        }
                    });
                    //console.log(dataResult);
                    // Transforms the top-level key of the response object from 'items' to 'results'
                    return {
                        results: dataResult,
                        pagination: {
                            more: dataResult.length == limit ? true : false,
                        },
                    };
                },
                transport: function (params, success, failure) {
                    //retrieve the cached key or default to _ALL_
                    //console.log(params);
                    var __cachekey = params.url + "?" + $.param(params.data);
                    if ("undefined" !== typeof __cache[__cachekey]) {
                        success(__cache[__cachekey]);
                        return;
                    }
                    var $request = $.ajax(params);
                    $request.then(function (data) {
                        //store data in cache
                        __cache[__cachekey] = data;
                        //display the results
                        success(__cache[__cachekey]);
                    });
                    $request.fail(failure);
                    //return $request;
                },
            },
            templateResult: function (data) {
                return $($.parseHTML(data.html));
            },
        });
    };
    function stringToSlug(str) {
        // remove accents
        var from =
            "àáãảạăằắẳẵặâầấẩẫậèéẻẽẹêềếểễệđùúủũụưừứửữựòóỏõọôồốổỗộơờớởỡợìíỉĩịäëïîöüûñçýỳỹỵỷ",
            to =
                "aaaaaaaaaaaaaaaaaeeeeeeeeeeeduuuuuuuuuuuoooooooooooooooooiiiiiaeiiouuncyyyyy";
        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(RegExp(from[i], "gi"), to[i]);
        }

        str = str
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\-]/g, "-")
            .replace(/-+/g, "-");

        return str;
    }

    function formatRepo(repo) {
        if (repo.loading) {
            return repo.text;
        }

        var $container = $(
            "<div class='select2-result-repository clearfix'>" +
            "<div class='select2-result-repository__avatar'><img src='" +
            repo.owner.avatar_url +
            "' /></div>" +
            "<div class='select2-result-repository__meta'>" +
            "<div class='select2-result-repository__title'></div>" +
            "<div class='select2-result-repository__description'></div>" +
            "<div class='select2-result-repository__statistics'>" +
            "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> </div>" +
            "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> </div>" +
            "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> </div>" +
            "</div>" +
            "</div>" +
            "</div>"
        );

        $container
            .find(".select2-result-repository__title")
            .text(repo.full_name);
        $container
            .find(".select2-result-repository__description")
            .text(repo.description);
        $container
            .find(".select2-result-repository__forks")
            .append(repo.forks_count + " Forks");
        $container
            .find(".select2-result-repository__stargazers")
            .append(repo.stargazers_count + " Stars");
        $container
            .find(".select2-result-repository__watchers")
            .append(repo.watchers_count + " Watchers");

        return $container;
    }

    function formatRepoSelection(repo) {
        return repo.full_name || repo.text;
    }

    $.fn.loadSuggestData = function (params) {
        var o = $(this[0]); // This is the element
        loadSelectData($(this), params);
        return this; // This is needed so other functions can keep chaining off of this
    };

    function formatReplace(tpl, data) {
        return tpl.replace(/\$\(([^\)]+)?\)/g, function ($1, $2) {
            if (!data[$2] || data[$2] == "null") {
                return "";
            }
            return data[$2];
        });
    }

    //
    // Return objects assigned to module
    //

    return {
        init: async function (parentDom) {
            replaceData(parentDom);
            selectData(parentDom);
        },
        initReload: function (parentDom) {
            selectData(parentDom);
        },
    };
})();
// Initialize module
// ------------------------------

const Notification = (status, message) => {
    Swal.fire({
        position: "top-end",
        icon: status,
        text: message,
        showConfirmButton: false,
        timer: 1500,
    });
};

$(document)
    .off("click", ".btn-call-modal")
    .on("click", ".btn-call-modal", function (e) {
        e.preventDefault();
        let url_view = $(this).attr("data-url-form");

        var ajax_call_id = Math.random().toString(36).substring(2);
        html = `<div class="modal fade in"  id="${ajax_call_id}" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true" style="display: block;">
            <div class="modal-dialog modal-lg" id="modal_form" role="document">
                <div class="modal-content " style="min-height:500px;">
                   
                    <div class="modal-body modal-body-content p-0" style="minh-height:100px; padding:0;">

                    </div>
                </div>
            </div>
        </div>`;
        $("body").append(html);
        var body = $("#" + ajax_call_id);
        $.ajax({
            url: url_view,
            data: {
                view: "popup",
            },
            beforeSend: function () { },
            success: function (data) {
                body.modal();
                // body.find(".justify-content-center").remove();
                body.find(".modal-body-content")
                    .attr("data-popup-id", ajax_call_id)
                    .html(data);
                body.find(".page-header").remove();
                body.find("form").attr("data-redirect-uri", "popup_close");
                body.find("form").attr("data-popup-id", ajax_call_id);
                body.find(".modal-body-content").removeClass("d-none");
                //////////////////////
                body.on("hidden.bs.modal", function (e) {
                    $(this).remove();
                });
                SEO.init();
                body.trigger("MainContentReloaded", []);
                return true;
            },
            error: function (xhr, ajaxOptions, thrownError) {
                body.modal("hide");
                Notification(
                    "error",
                    "Lá»—i " +
                    xhr.status +
                    ": vui lÃ²ng liÃªn há»‡ IT Ä‘á»ƒ Ä‘Æ°á»£c xá»­ lÃ½"
                );
            },
        });
    });

(function ($) {
    // USE STRICT
    "use strict";

    // Load more
    try {
        $(document).on("DOMContentLoaded MainContentReloaded", function (e) {
            AJAX_CRUD_MODAL.init();
            $(this)
                .find("#datatable")
                .each(() => {
                    DatatablesServerSide.init();
                });
            // AJAX_CRUD_MODAL.tinymce();
            FileUpload.initReload($("form"));
            SEO.init_slug();
            AutoloadDataService.init($('form'));
            setTinyMce.init($("form"));

        });

        var setTinyMce = (function () {
            var config = function (domElement) {
                $(domElement)
                    .find(".tinymce")
                    .each((i, item) => {
                        let _dom = $(item);
                        let _id = $(item).attr("id");
                        if (tinymce.get(_id)) {
                            tinymce.get(_id).remove();
                        }
                        tinymce.init(option_TinyMCE);
                    });
            };
            return {
                init: function (parentDom) {
                    config(parentDom);
                },
            };
        })();
    } catch (error) { }
})(jQuery);
