document.addEventListener("DOMContentLoaded", function () {
    Handle.init();
    window.lazySizesConfig = window.lazySizesConfig || {};
    window.lazySizesConfig.preloadAfterLoad = true;
    window.lazySizesConfig.expand = 10;
});

let Handle = (function () {
    const event_filter_data = () => {
        $("body").on("click", "button.btn-filter", function () {
            let box = $(this).closest("div").find(".data-content-filter");
            $(box).toggle("active");
            $(this)
                .find(".IconExpandSelect, .IconCollapseSelect")
                .toggle("active");
        });

        $(document)
            .off("click", ".data-content-filter li")
            .on("click", ".data-content-filter li", function () {
                let order = $(this).attr("data-order");
                $(this).closest("ul").find("li").removeClass("active");
                $(this).addClass("active");
                $(this)
                    .closest(".block-filter-title")
                    .attr("data-order_by", order)
                    .find("button.btn-filter span")
                    .text($(this).text());
                $(this).closest(".data-content-filter").toggle("active");
                $(this)
                    .closest(".block-filter-title")
                    .find(".IconExpandSelect, .IconCollapseSelect")
                    .toggle("active");

                $("#alltobe")
                    .attr("data-order_by", order)
                    .attr("data-page", 1)
                    .html(
                        `<img class="img-loading" src="${window.APP_URL}${img_loading}" alt="">`
                    );
                $("div.loadmore").hide();
                let data = $("#alltobe").data();
                data.page = $("#alltobe").attr("data-page");
                data.order_by = $("#alltobe").attr("data-order_by");
                loadEventDataHome("#alltobe", data);
            });
    };
    const event_dashboard = () => {
        if ($("#box-data-game").length > 0) {
            let data = $("#box-data-game").data();
            load_data(data);
        }
        $(document).on("click", "#paginate", function () {
            let _data = $("#box-data-game").data();
            _data["page"] = $("#box-data-game").attr("data-page");
            load_data(_data);
        });
        $(function () {
            var $goTop = $(
                '<div id="goTop"><i class="icon-font icon-stick"></i></div>'
            ).appendTo("body");
            $(window).scroll(function () {
                if ($(this).scrollTop() != 0) {
                    $goTop.fadeIn();
                } else {
                    $goTop.fadeOut();
                }
            });
            $goTop.click(function () {
                $("body, html").animate(
                    {
                        scrollTop: 0,
                    },
                    300
                );
            });
        });
        if ($(".oisjs").length > 0) {
            var $p = $(".oisjs").text();
            var $x = 1;
            if ($p <= 4.5) {
                var $s = $p * $x + 0.5;
            } else {
                var $s = $p * $x;
            }
            $(".oisjs").html($s.toFixed(1));
            $(".pfba").show();
        }

        $(document).on("click", "#fillter-category .filter", function (e) {
            e.preventDefault();
            $("#box-data-game").html("");
            $("#fillter-category .filter").removeClass("active");
            $(this).addClass("active");
            let _order = $(this).attr("data-order_by");
            let _data = $("#box-data-game").data();
            _data["page"] = 1;
            _data["order_by"] = _order;
            $("#box-data-game").attr("data-order_by", _order);
            load_data(_data);
        });

        $(document).on("keyup", "#searchform input[name='k']", function (e) {
            e.preventDefault();
            let _box = $("#content_search ul");
            _box.html("");

            let _val = $(this).val();
            if (_val.length > 2) {
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                });
                $.ajax({
                    type: "POST",
                    url: "/ajax/load-data-game",
                    data: {
                        type: "search",
                        title: _val,
                    },
                    dataType: "HTML",
                    success: function (response) {
                        _box.html("");
                        _box.append(response);
                    },
                });
            }
        });
        $(document).ready(function () {
            $(".nav_search").click(function () {
                $(".nav_search").toggleClass("nav_searchs");
                $(".search_form").toggleClass("nav_sblock");
                if (!$(".nav_search").hasClass("nav_searchs"))
                    $("#content_search ul").html("");
            });
        });
        $(document).ready(function () {
            $(".mobile-nav").click(function () {
                $(".nav_phone").toggleClass("nav_col");
                $(".nav_list").toggleClass("nav_block");
                $("html").toggleClass("navbody");
            });
        });
        $(document).ready(function () {
            $(".nav_phone").click(function () {
                $(".nav_phone").toggleClass("nav_col");
                $(".nav_list").toggleClass("nav_block");
                $("html").toggleClass("navbody");
            });
        });
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > $(".inx").height()) {
                    $(".Populargames").addClass("newcss");
                } else {
                    $(".Populargames").removeClass("newcss");
                }
            });
        });
    };

    const load_data = (data) => { 
        let _parent = $("#box-data-game");
        let button_loadmore = $("#paginate").find(".loadmore");
        if (button_loadmore)
            $(button_loadmore).find("span").removeClass("hidden");
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: "/ajax/load-data-game",
            data: data,
            dataType: "HTML",
            success: function (response) {
                $("#box-data-game").attr("data-page", parseInt(data.page) + 1);
                let length = $(`<div> ${response} </div>`).find(
                    "article.item"
                ).length;
                if (response) {
                    $("#box-data-game").append(response);
                    if (length < data.limit) {
                        $(button_loadmore).hide();
                    } else {
                        $(button_loadmore).show();
                        $(button_loadmore).find("span").addClass("hidden");
                    }
                } else {
                    $(button_loadmore).hide();
                }
            },
        });
    };

    const event_detail = () => {
        var check_vote = false;
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $(document).on("click", ".vote_game", function () {
            if (!check_vote) {
                let data = {
                    vote: $(this).attr("data-vote"),
                    game_id: $(this).attr("data-game_id"),
                };
                $.ajax({
                    type: "POST",
                    url: "/ajax/vote-game",
                    data: data,
                    success: function (response) {
                        if (response.status) {
                            $.notify(response.message, "success");
                        }
                    },
                });
            }
        });
        $("body")
            .off("click", ".download-file")
            .on("click", ".download-file", function () {
                let id = $(this).attr("data-id");
                let type = $(this).attr("data-type") ?? "apk";
                if (id) {
                    $.ajax({
                        url: "/ajax/download/" + id,
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            type,
                        },
                        success: function (response) {
                            if (response.status == "success") {
                                let a = document.createElement("a");
                                let url = new URL(response.href);
                                a.href = url;
                                a.download = "download-file-" + Date.now();
                                document.body.appendChild(a);
                                a.click();
                                console.log(a);
                                setTimeout(function () {
                                    document.body.removeChild(a);
                                    window.URL.revokeObjectURL(url);
                                }, 0);
                            } else {
                                $.notify("Server error !!!", "error");
                            }
                        },
                        error: function (e) {
                            $.notify("Server error !!!", "error");
                        },
                    });
                }
            });
    };
    return {
        init: function () {
            event_dashboard();
            event_filter_data();
            event_detail();
        },
    };
})();

function loadLimitScreen(dom) {
    let width = $(window).width();
    let limit = 36;
    if (width > 1200) {
        limit = 40;
    }

    if (width > 1400) {
        limit = 42;
    }

    if (width > 1910) {
        limit = 48;
    }

    if (width > 2500) {
        limit = 54;
    }

    if (width > 3000) {
        limit = 60;
    }
    $(dom).attr("data-limit", limit);
}

function loadEventDataHome(_parent, data = {}) {
    console.log(data);
    let button_loadmore = $("#paginate").find(".loadmore");
    if (button_loadmore) $(button_loadmore).find("span").removeClass("hidden");
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        type: "POST",
        url: url_load_more,
        data: data,
        dataType: "HTML",
        success: function (response) {
            let length = $(response).find(".item-sub").length;
            if (data.page == 1) {
                $("#alltobe .img-loading").remove();
            }
            if (response) {
                $(_parent).append(response);
                console.log(length, data.limit);
                if (length < data.limit) {
                    $(button_loadmore).hide();
                    $(_parent).attr("data-page", 1);
                } else {
                    $(button_loadmore).show();
                    $(_parent).attr("data-page", parseInt(data.page) + 1);
                    $(button_loadmore).find("span").addClass("hidden");
                }
            } else {
                $(button_loadmore).hide();
            }
        },
    });
}
