<?php
require_once '../../entrance.php';
$banner_dao = new index_banner_dao();

$id = empty($_GET["id"]) ? 0 : $_GET["id"];
$course_intro_dao = new course_intro_dao();
$course_intro_content_dao = new course_intro_content_dao();
if($id != 0){
    $result = $course_intro_dao->getOne($id);
    $row = $result->fetch();
    $course = new course_introduce($row);

    $content_result = $course_intro_content_dao->listCourseIntroContents($id,1);
    $img_result = $course_intro_content_dao->listCourseIntroContents($id,2);

    $prevResult = $course_intro_dao->getPrev($id);
    $nextResult = $course_intro_dao->getNext($id);
    $prevNews = new course_introduce($prevResult->fetch());
    $nextNews = new course_introduce($nextResult->fetch());
}else{
    $news = new course_introduce();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0082)http://www.kungfuyc.com/page9 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="IE=11.0000" http-equiv="X-UA-Compatible" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    include '../../include/header_title.php'
    ?>
    <link href="/index/default.css" rel="stylesheet" type="text/css" />
    <link href="/index/media.css" rel="stylesheet" type="text/css" />
    <link href="/index/title.css" rel="stylesheet" type="text/css" />
    <link href="/index/unslider.css" rel="stylesheet" type="text/css" />
    <link href="./product_category.css" rel="stylesheet" type="text/css" />
    <link href="./product_detail.css" rel="stylesheet" type="text/css" />
    <link href="./css.css" rel="stylesheet" type="text/css" />
    <style type="text/css">.prop_rotate_angle sup, .prop_rotate_angle .posblk-deg {
            font-size: 11px;
            color: #CDCDCD;
            font-weight: normal;
            font-style: normal;
        }

        ins#qiao-wrap {
            height: 0;
        }

        #qiao-wrap {
            display: block;
        }

        .navigation .lihover {
            background-color: #f73f41 !important;
        }

        .navigation .ahover {
            color: #ffffff !important;
        }
    </style>
</head>
<body>
<input name="_user_level_val" type="hidden" value="2" />
<script language="javascript" src="/index/script.js" type="text/javascript"></script>
<script language="javascript" src="/index/plugin.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
    //js版本url生成函数
    var webmodel = {};

    wp_pages_global_func($.extend({
        'isedit': '0',
        'islogin': '0',
        'domain': 'tpl-cf61794',
        'p_rooturl': 'http://www.kungfuyc.com',
        'static_rooturl': '/index',
        'interface_locale': "zh_CN",
        'dev_mode': "0",
        'getsession': ''
    }, {
        "phpsessionid": "",
        "punyurl": "\/\/www.kungfuyc.com",
        "curr_locale": "zh_CN",
        "mscript_name": "",
        "converted": false
    }));

</script>
<link href="./common.css" rel="stylesheet" />
<div id="page_set_css">

</div>
<input name="page_id" id="page_id" type="hidden" value="9" rpid="5" />
<div class="scroll_contain" id="scroll_container">
    <div id="scroll_container_bg">
        &nbsp;
    </div>
    <script>
        initScrollcontainerHeight();
    </script>
    <div id="overflow_canvas_container">
        <div id="canvas" style="margin: 0px auto; width: 1200px; height: 1681px;">
            <!-- 顶部 开始 -->
            <?php
            include '../../include/header.php'
            ?>
            <!-- 顶部 结束 -->
            <!-- banner 开始 -->
            <?php
            include '../../include/banner.php'
            ?>
            <!-- banner 结束 -->
            <div class="cstlayer" id="layer215BBD0361C70B03C1C7546324FDEC26" style="left: 517px; top: 722px; width: 145px; height: 35px; display: block; position: absolute; z-index: 109;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 145px; height: 36px; display: block; -ms-word-wrap: break-word;">
                    <font color="#002d66" face="微软雅黑"><span style="color: rgb(247, 63, 65); line-height: 32.2px; letter-spacing: 4px; font-size: 30px;"><strong>课程介绍</strong></span></font>
                </div>
            </div>
            <script>                 $('#layer215BBD0361C70B03C1C7546324FDEC26').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerB37F02DD9E478288A58BC17416BF7C47" style="left: 498px; top: 766px; width: 181px; height: 23px; display: block; position: absolute; z-index: 108;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 181px; height: 23px; display: block; -ms-word-wrap: break-word;">
                    <span style="background-color: rgb(255, 255, 255);"><font color="#222222" face="Arial, Helvetica, sans-serif"><span style="font: 12px/normal Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90); letter-spacing: 0px; white-space: pre-wrap;">—— &nbsp; </span><span style="line-height: normal; white-space: pre-wrap;">Course introduction</span><span style="font: 12px/normal Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90); letter-spacing: 0px; white-space: pre-wrap;"> &nbsp; ——</span></font></span>
                </div>
            </div>
            <script>                 $('#layerB37F02DD9E478288A58BC17416BF7C47').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer56B82BCBA686C3D5D1AD7B598D84F21B" style="left: 253px; top: 798px; width: 661px; height: 50px; position: absolute; z-index: 110;" deg="0" mid="" type="product_category">
                <div class="wp-product_category_content" id="wp-ptype_layer56B82BCBA686C3D5D1AD7B598D84F21B" style="border-width: 0px; border-color: transparent; width: 661px; height: 50px;">
                    <div class="nav1 menu_hs9" submethod="" hover="1" morecolor="darkorange" moreshow="1" more="更多" direction="0" colorstyle="black" ishorizon="" skin="hs9" subopen="">
                        <div id="datasty_layer56B82BCBA686C3D5D1AD7B598D84F21B" style="width: 0px; height: 0px; display: none;"></div>
                        <div id="datastys_layer56B82BCBA686C3D5D1AD7B598D84F21B" style="width: 0px; height: 0px; display: none;"></div>
                        <div id="hoverlayer56B82BCBA686C3D5D1AD7B598D84F21B" style="width: 0px; height: 0px; display: none;"></div>
                        <ul class="navigation" id="nav_layer56B82BCBA686C3D5D1AD7B598D84F21B">
                            <?php
                            $course_type_dao = new course_type_dao();
                            $result = $course_type_dao->listCourseTypes(0, 100, 0);
                            $i = 0;
                            while ($row = $result->fetch()) {
                                $course_type = new course_type($row);
                                if($i == 0){
                                    $type = empty($_GET["type"]) ? $course_type->id : $_GET["type"];
                                }
                                ?>
                                <li style="width:25%;z-index:2;" class="wp_subtop" pid="<?php echo $course_type->id ?>">
                                    <a class="" href="../?type=<?php echo $course_type->id?>" style="">
                                        <span style="display:block;overflow:hidden;"><?php echo $course_type->name ?></span>
                                    </a>
                                </li>
                                <?php
                                $i ++;
                            }
                            ?>
                        </ul>
                        <div class="default_pid" style="width: 0px; height: 0px; display: none;">
                            <?php echo $type ?>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">

                    function wp_showdefaultHoverCss(layer_id) {
                        var layertype = $('#' + layer_id).attr('type');
                        if (layertype && window['wp_showdefaultHoverCss_' + layertype]) {
                            return window['wp_showdefaultHoverCss_' + layertype](layer_id);
                        }
                        return false;
                    }

                    function wp_showdefaultHoverCss_product_category(layer_id) {
                        var plugin_name = $("#" + layer_id).attr('type');
                        var hover = $("#" + layer_id).find('.nav1').attr('hover');
                        if (hover != 1) {
                            return;
                        }

                        wp_getdefaultHoverCss(layer_id);
                        var n = 0;

                        if (plugin_name == 'new_navigation') {
                            var page_id = $("#page_id").val();
                            var rootpid = $("#page_id").attr("rpid") * 1;
                        } else {
                            var page_id = $('#' + layer_id + '').find(".default_pid").html();
                            if (page_id == 0 || page_id.length == 0) {
                                //page_id=$('#nav_'+layer_id+'').children('li:first').attr('pid');
                            }
                        }
                        var isshowdefault = false;
                        $('#nav_' + layer_id + '').children('li').each(function () {
                            var type_pid = $(this).attr('pid');
                            if (type_pid == <?php echo $type ?>) {
                                $(this).addClass("lihover").children('a').addClass("ahover");
                                isshowdefault = true;
                            }
                            if (window.location.href == $(this).find("a").attr("href") || window.location.href == $(this).find("a").attr("href") + "&brd=1") {
                                isshowdefault = true;
                                $(this).addClass("lihover").children('a').addClass("ahover");
                            }
                            n++;
                        });
                        if (!isshowdefault) {
                            $('#nav_' + layer_id + '').children('li:first').addClass("lihover").children('a').addClass("ahover");
                        }

                    }

                    var wp_showdefaultHoverCss_layer56B82BCBA686C3D5D1AD7B598D84F21B = wp_showdefaultHoverCss;

                    function wp_addMoreButton(layer_id) {
                        var layertype = $('#' + layer_id).attr('type');
                        if (layertype && window['wp_addMoreButton_' + layertype]) {
                            return window['wp_addMoreButton_' + layertype](layer_id);
                        }
                        return false;
                    }

                    function wp_addMoreButton_product_category(layer_id) {
                        var firstLiTop = 0;
                        var hasMore = false;
                        $('#nav_' + layer_id).children('li.wp_subtop').each(function (i) {
                            if (i == 0) {
                                firstLiTop = $(this).offset().top;
                                return true;
                            }
                            if ($(this).offset().top > firstLiTop) {
                                $('#' + layer_id).data('hasMore', 'yes');//配置逻辑获取
                                var more = $.trim($('#' + layer_id).children('.wp-product_category_content').children('.nav1').attr('more'));
                                var doms = $(this).prev().prev().nextAll().clone();
                                var objA = $(this).prev().children('a');
                                if (objA.children('span').length > 0) objA.children('span').html(more);
                                else objA.html(more);

                                if (objA.hasClass('sub')) {
                                    objA.next('ul').empty();
                                    doms.appendTo(objA.next('ul'));
                                }
                                else {
                                    objA.after('<ul></ul>');
                                    doms.appendTo(objA.next('ul'));
                                    objA.addClass('sub');
                                }

                                $(this).prev().nextAll().remove();
                                objA.next('ul').children('li').removeClass('wp_subtop');
                                hasMore = true;

                                objA.attr('href', 'javascript:void(0);');

                                //点击"更多"弹出全站导航
                                if ($("#" + layer_id).find('.nav1').attr('moreshow') == 1) {
                                    objA.click(function (e) {
                                        $('#' + layer_id).find('#basic-modal-content_' + layer_id).modal({
                                            containerId: 'wp-product_category-simplemodal-container_' + layer_id,
                                            zIndex: 9999,
                                            close: false,
                                            onOpen: function (dialog) {
                                                dialog.overlay.fadeIn('slow', function () {
                                                    dialog.container.slideDown('slow', function () {
                                                        dialog.data.fadeIn('slow', 'swing', function () {
                                                            $('.wp_menus').not('.wp_thirdmenu0').each(function () {
                                                                var left = $(this).parent().parent().children('a').eq(0).outerWidth() + 5;
                                                                $(this).css({position: 'relative', left: left + 'px'});
                                                            });
                                                        });
                                                    });
                                                });
                                            },
                                            onClose: function (dialog) {
                                                dialog.data.fadeOut('slow', function () {
                                                    dialog.container.slideUp('slow', function () {
                                                        dialog.overlay.fadeOut('slow', function () {
                                                            $.modal.close();
                                                        });
                                                    });
                                                });
                                            }
                                        });
                                        return false;
                                    });
                                }
                                return false;
                            }
                        });
                        if (!hasMore) $('#' + layer_id).data('hasMore', 'no');
                        wp_showdefaultHoverCss(layer_id);
                    }

                    //编辑模式水平拖动动态刷新修改More按钮
                    function wp_updateMoreButton(layer_id) {
                        var $layer = $('#' + layer_id);
                        var $nav1 = $layer.children('.wp-product_category_content').children('.nav1');
                        var tmp_css = $.trim($("#datastys_" + layer_id).text());
                        var tmp_cssa = $.trim($("#datasty_" + layer_id).text());
                        $.post(parseToURL("product_category", "refreshNavigator", {
                            menustyle: $.trim($nav1.attr('skin')),
                            saveCss: 'yes',
                            page_id: $("#page_id").val(),
                            blockid: layer_id,
                            typeval: $.trim($layer.find(".wp-product_category_content").attr('type')),
                            colorstyle: $.trim($nav1.attr('colorstyle')),
                            direction: $.trim($nav1.attr('direction')),
                            more: $.trim($nav1.attr('more')),
                            hover: $.trim($nav1.attr('hover')),
                            moreshow: $.trim($nav1.attr('moreshow')),
                            morecolor: $.trim($nav1.attr('morecolor'))
                        }), function (data) {
                            $layer.find('.wp-product_category_content').html(data);
                            $("#datastys_" + layer_id).text(tmp_css);

                            var setcss = $("#page_set_css").html();
                            setcss = setcss.replace(/<style>/i, '').replace(/<\/style>/i, '');
                            var reg = new RegExp("(.*)([/][/*]" + layer_id + "[/*][/])(.*)([/][/*]" + layer_id + "[/*][/])(.*)", "gmi");
                            var url = setcss;
                            var rep = url.replace(reg, "$1 $5");
                            var tempcss = rep + " /*" + layer_id + "*/ " + tmp_cssa + " " + tmp_css + " /*" + layer_id + "*/ ";
                            tempcss = tempcss.replace(/[\r\n]/g, " ").replace(/\s+/g, " ");
                            $("#page_set_css").html('<style> ' + tempcss + '</style>');
                        });
                        wp_showdefaultHoverCss(layer_id);
                    }


                    function wp_removeLoading(layer_id) {

                        var $nav1 = $('#' + layer_id).find(".nav1");
                        var ishorizon = $nav1.attr("ishorizon");
                        if (ishorizon == '1') {
                            $("#" + layer_id).find('.wp-new_navigation_content').css({
                                height: 'auto',
                                overflow: 'hidden'
                            });
                        } else {
                            $("#" + layer_id).find('.wp-new_navigation_content').css({
                                width: 'auto',
                                overflow: 'hidden'
                            });
                        }
                        // 修复IE浏览器部分版本导航无法显示问题 2013/12/26

                        var temptimer = setTimeout(function () {
                            $("#" + layer_id).find('.wp-new_navigation_content').css("overflow", 'visible');
                            clearTimeout(temptimer);
                        }, 50);
                    }
                </script>
                <script type="text/javascript">
                    function layer56B82BCBA686C3D5D1AD7B598D84F21B_liHoverCallBack() {
                        $(".menu_hs9 #nav_layer56B82BCBA686C3D5D1AD7B598D84F21B li").hover(function () {
                            $(this).children("ul").css("left", "0px").show();
                        }, function () {
                            $(this).children("ul").hide();


                        });

                    }

                    function layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss(css_pro, type) {
                        var typeval = type;
                        if (typeval == 1) {
                            var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+ul+\\s+li+\\s+a:\\s*hover\\s*{\\s*" + css_pro + "\\s*:[^;]+";
                        } else if (typeval == 2) {
                            var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*{\\s*" + css_pro + "\\s*:[^;]+";
                        } else if (typeval == 3) {
                            var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*:\\s*hover\\s*{\\s*" + css_pro + "\\s*:[^;]+";
                        }
                        else {
                            var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+li\.wp_subtop>a:\\s*hover\\s*{\\s*" + css_pro + "\\s*:[^;]+";
                        }
                        var navStyle = $.trim($("#layer56B82BCBA686C3D5D1AD7B598D84F21B").data("datastys_"));
                        if (navStyle.length > 0) {
                            var patt1 = new RegExp(regex, 'i');
                            var tmp = patt1.exec($.trim(navStyle));
                            if (tmp) {
                                return $.trim((tmp[0].match(/{[^:]+:[^;]+/)[0]).match(/:[^;]+/)[0].replace(':', ''));
                            }
                        }
                        navStyle = $.trim($("#layer56B82BCBA686C3D5D1AD7B598D84F21B").data("datasty_"));

                        if (navStyle.length > 0) {
                            if (typeval == 1) {
                                var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul+\\s+li+\\s+a:\\s*hover\\s*{[^}]+}", 'i');
                            } else if (typeval == 2) {
                                var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*{[^}]+}", 'i');
                            } else if (typeval == 3) {
                                var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*:\\s*hover\\s*{[^}]+}", 'i');
                            } else {
                                var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+li\.wp_subtop>a:\\s*hover\\s*{[^}]+}", 'i');
                            }
                            var tmp = patt1.exec(navStyle);

                            if (tmp) {
                                var tmp1 = tmp[0].match(/{[^}]+}/)[0];
                                var patt2 = new RegExp(css_pro + "\\s*:\\s*[^;]+;", 'i');
                                tmp = patt2.exec(tmp1);
                                if (tmp) return $.trim(tmp[0].replace(/[^:]+:/, '').replace(';', ''));
                            }
                        }

                        return $.trim($("#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B ul li a").css(css_pro));
                    }

                    layer56B82BCBA686C3D5D1AD7B598D84F21B_liHoverCallBack;
                    $(document).ready(function () {
                        layer56B82BCBA686C3D5D1AD7B598D84F21B_liHoverCallBack();

                        //第三级即下级菜单随高度增加位置动态修改
                        $('#layer56B82BCBA686C3D5D1AD7B598D84F21B .menu_hs9 li').hover(function () {
                            $(this).children('ul').css('top', $(this).outerHeight());
                        });

                        function getSubMenuHoverCsslayer56B82BCBA686C3D5D1AD7B598D84F21B(css_pro, regex, isLi) {
                            var navStyle = $.trim($("#layer56B82BCBA686C3D5D1AD7B598D84F21B").data("datastys_"));
                            if (navStyle.length > 0) {
                                var patt1 = new RegExp(regex, 'i');
                                var tmp = patt1.exec($.trim(navStyle));
                                if (tmp) {
                                    return $.trim((tmp[0].match(/{[^:]+:[^;]+/)[0]).match(/:[^;]+/)[0].replace(':', ''));
                                }
                            }
                            navStyle = $.trim($("#layer56B82BCBA686C3D5D1AD7B598D84F21B").data("datasty_"));


                            if (navStyle.length > 0) {
                                var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s+a\\s*\\s*{[^}]+}", 'i');
                                if (isLi)
                                    patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*\\s*{[^}]+}", 'i');
                                var tmp = patt1.exec(navStyle);

                                if (tmp) {
                                    var tmp1 = tmp[0].match(/{[^}]+}/)[0];
                                    var patt2 = new RegExp(css_pro + "\\s*:\\s*[^;]+;", 'i');
                                    tmp = patt2.exec(tmp1);
                                    if (tmp) return $.trim(tmp[0].replace(/[^:]+:/, '').replace(';', ''));
                                }
                            }
                            return false;
                        }

                        $("#layer56B82BCBA686C3D5D1AD7B598D84F21B li").hover(function () {
                            var thisleft = $(this).offset().left;
                            var thiswidth = $(this).outerWidth();
                            //父中心点坐标
                            var thiswidthcenter = 0;
                            //子中心点坐标
                            var thischildwidthcenter = 0;
                            var orgleft = $("#layer56B82BCBA686C3D5D1AD7B598D84F21B").offset().left;
                            var orgright = $("#layer56B82BCBA686C3D5D1AD7B598D84F21B").outerWidth();
                            orgright = orgright + orgleft;
                            thiswidthcenter = thisleft + thiswidth / 2;

                            //计算子菜单总宽度
                            var childlidom = $(this).children('ul').children('li');
                            var childliwidth = 0;
                            childlidom.each(function () {
                                childliwidth = childliwidth + $(this).outerWidth();
                            });

                            thischildwidthcenter = childliwidth / 2;
                            var chavalue = thiswidthcenter - thischildwidthcenter;
                            var charightvalue = thiswidthcenter + thischildwidthcenter;

                            var ulwidth = $("#layer56B82BCBA686C3D5D1AD7B598D84F21B").width();
                            if (chavalue < orgleft && charightvalue > orgright) {
                                //超出边界不做处理
                            } else {
                                if (chavalue > orgleft && charightvalue < orgright) {
                                    $(this).children("ul:eq(0)").css("padding-left", (chavalue - orgleft) + "px");
                                    if (ulwidth > 0) {
                                        $(this).children("ul:eq(0)").css("width", (ulwidth - chavalue + orgleft) + "px");
                                    }
                                } else {
                                    if (chavalue > orgleft && charightvalue > orgright) {
                                        $(this).children("ul:eq(0)").css("padding-left", (ulwidth - childliwidth) + "px");
                                        if (ulwidth > 0) {
                                            $(this).children("ul:eq(0)").css("width", (childliwidth) + "px");
                                        }
                                    }
                                }
                            }

                            if (!$(this).hasClass('wp_subtop')) {
                                $(this).css('background-image', layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss('background-image', 3));
                                $(this).css('background-repeat', layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss('background-repeat', 3));
                                $(this).css('background-color', layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss('background-color', 3));
                                $(this).css('background-position', layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss('background-position', 3));
                            }
                            if ($(this).children('ul').length > 0) {
                                $(this).children('ul').css('background-image', layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss('background-image', 2));
                                $(this).children('ul').css('background-repeat', layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss('background-repeat', 2));
                                $(this).children('ul').css('background-color', layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss('background-color', 2));
                                $(this).children('ul').css('background-position', layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss('background-position', 2));

                                $(this).children('ul').children('li').css({
                                    'background-image': 'none',
                                    'background-color': 'transparent'
                                });
                            }

                        }, function () {
                            if (!$(this).hasClass('wp_subtop'))
                                $(this).css({'background-color': 'transparent', 'background-image': 'none'});
                            $(this).children("ul:eq(0)").css("left", "-99999px").hide();
                        });

                        $('.menu_hs9 #nav_layer56B82BCBA686C3D5D1AD7B598D84F21B').find('li').hover(function () {
                            var direction = $("#layer56B82BCBA686C3D5D1AD7B598D84F21B").find('.nav1').attr('direction');
                            var height = parseInt($(this).outerHeight());
                            if (direction == 1) {
                                $(this).children('ul').css('top', 'auto').css('bottom', height + 'px');
                            } else {
                                $(this).children('ul').css('top', height + 'px').css('bottom', 'auto');
                            }
                            if ($(this).parent().hasClass('navigation')) {
                                $(this).children('a').css({
                                    'font-family': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("font-family", 0),
                                    'font-size': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("font-size", 0),
                                    'color': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("color", 0),
                                    'font-weight': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("font-weight", 0),
                                    'font-style': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("font-style", 0)
                                });
                            } else {
                                $(this).children('a').css({
                                    'font-family': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("font-family", 1),
                                    'font-size': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("font-size", 1),
                                    'color': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("color", 1),
                                    'font-weight': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("font-weight", 1),
                                    'font-style': layer56B82BCBA686C3D5D1AD7B598D84F21B_getSubMenuHoverCss("font-style", 1)
                                });
                            }
                            if ($(this).parent().hasClass('navigation')) {
                                $('#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B .wp_subtop').removeClass("lihover").children('a').removeClass("ahover");
                            }
                        }, function () {
                            if ($(this).parent().hasClass('navigation')) {
                                wp_showdefaultHoverCss('layer56B82BCBA686C3D5D1AD7B598D84F21B');
                            }
                            $(this).children('a').attr("style", '');
                        });
                        wp_showdefaultHoverCss('layer56B82BCBA686C3D5D1AD7B598D84F21B');
                        wp_removeLoading('layer56B82BCBA686C3D5D1AD7B598D84F21B');
                    });
                </script>
                <script>
                    $(function () {
                        var options = $.extend({}, {
                            "morecolor": "darkorange",
                            "moreshow": "1",
                            "hover": "1",
                            "more": "\u66f4\u591a",
                            "direction": "0",
                            "colorstyle": "black",
                            "menustyle": "hs9",
                            "typeval": "",
                            "customcss": "#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B{background-image:url(plugin\/product_category\/view\/images\/png_bg.png);}#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B li.wp_subtop>a{color:#666666;}#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B li.wp_subtop>a{font-family:Microsoft YaHei;}#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B li.wp_subtop{background-position:center center;}#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B{background-color:transparent;}#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B ul{background-color:transparent;}#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B li.wp_subtop:hover{background-image:url(plugin\/product_category\/view\/images\/png_bg.png);}#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B li.wp_subtop>a:hover{color:#ffffff;}#nav_layer56B82BCBA686C3D5D1AD7B598D84F21B li.wp_subtop:hover{background-color:#f73f41;}",
                            "oldparam": {
                                "pcids": "2,3,4,5,6",
                                "showtype": "mhover",
                                "link": "5",
                                "isfirst": "true",
                                "version": "2",
                                "openNewWindow": "0"
                            },
                            "userstyle": {"skin": "skin5", "styles": []}
                        });
                        $('#layer56B82BCBA686C3D5D1AD7B598D84F21B').mod_property(options);
                        $('#wp-product_category-style').data('userstyle', options['userstyle']);
                        $('#wp-product_category-style').trigger('setStyle');
                        $('#layer56B82BCBA686C3D5D1AD7B598D84F21B').find('.mask').css({
                            'width': $('#layer56B82BCBA686C3D5D1AD7B598D84F21B').width(),
                            height: $('#layer56B82BCBA686C3D5D1AD7B598D84F21B').height()
                        }).show();
                    });
                </script>
            </div>
            <script>                 $('#layer56B82BCBA686C3D5D1AD7B598D84F21B').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerA2F0C72F0F57DA2F939601D7B2C2AE04" style="left: 139px; top: 878px; width: 947px; height: 703px; position: absolute; z-index: 111;" deg="0" mid="" type="product_detail">
                <script language="javascript">
                    function preloadImages(image) {
                        if (!(image instanceof jQuery)) return;
                        // preLoad images
                        var thumb_preload = [];
                        image.each(function (i, img) {
                            thumb_preload[i] = new Image();
                            thumb_preload[i].src = $(img).attr("data-src");
                        });
                    }

                    function set_thumb_layerA2F0C72F0F57DA2F939601D7B2C2AE04(obj) {
                        var callback = function (img) {
                            var classname = 'wp-new-prodcuts-detail-picture-small-element';
                            var methodname = 'remove';
                            var imgbig = $('.wp-new-prodcuts-detail-picture-big');
                            methodname = 'hide';
                            classname = 'wp-magnifier_small,.pic';
                            var callback2 = function (width, height) {
                                var $prdimg = img;
                                var maxw = imgbig.width();
                                var maxh = imgbig.height();
                                if ($prdimg.parent().hasClass('wp-new-prodcuts-detail-picture-small-element')) {
                                    maxw = $prdimg.parent().width();
                                    maxh = $prdimg.parent().height();
                                }
                                var tmpw = 0, tmph = 0;
                                if ((width >= maxw) || (height >= maxh)) {
                                    var direct = (width / maxw) >= (height / maxh);

                                    if (direct) {
                                        $prdimg.width(maxw);
                                        //if($prdimg.is('.wp-product_detail-imgpreview')) $prdimg.css('height','auto');
                                        $prdimg.css('height', 'auto');
                                        tmph = $prdimg.height();
                                        $prdimg.css("margin", ((maxh - tmph) / 2) + 'px 0');
                                    }
                                    else {
                                        $prdimg.height(maxh).width("auto");
                                        tmpw = $prdimg.width();
                                        $prdimg.css("margin", '0 ' + ((maxw - tmpw) / 2) + 'px');
                                    }
                                } else {
                                    $prdimg.css("margin", ((maxh - height) / 2) + 'px ' + ((maxw - width) / 2) + 'px');
                                }
                            };
                            var theimage = new Image();
                            theimage.onload = function () {
                                callback2(this.width, this.height);
                            }
                            theimage.src = img.attr('src');
                            img.show();
                            img.closest('.' + classname).children('.imgloading')[methodname]();
                        }
                        $(obj).each(function () {
                            var img = $(this);
                            callback(img);
                        });
                    }
                </script>
                <div class="wp-product_detail_content" style="border-width: 0px; border-color: transparent; width: 947px; height: 703px; overflow: hidden;" setsid="goods46">
                    <style type="text/css">
                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 .wp-new-prodcuts-descone {
                            display: none;
                            font-size: 12px;
                            margin-bottom: 10px;
                        }

                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 .wp-magnifier_small {
                            width: 300px;
                            height: 240px;
                        }

                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 .wp-magnifier_box {
                            width: 300px;
                            height: 240px;
                        }

                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 {
                            margin-left: px;
                        }

                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 .Xgt {
                        }

                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 .Xgt .zgt li {
                        }

                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 .wp-products-artview_info {
                            display: none;
                        }

                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 .desc {
                            display: none;
                        }

                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 .goods_info_desc_txt {
                            display: none;
                        }

                        #layerA2F0C72F0F57DA2F939601D7B2C2AE04 .artview_intro {
                            display: none;
                        }
                    </style>
                    <script type="text/javascript">

                    </script>
                    <div class="artdetail_title">
                        <?php echo $course->title ?>
                    </div>
                    <div class="artview_info">发布时间: <?php echo $course->create_date ?></div>
                    <div class="artview_intro"></div>
                    <div class="artview_content">
                        <div class="Gpic wp-magnifier_box">
                            <div class="pic wp-magnifier_small wp-new-prodcuts-detail-picture-big">
                                <div class="imgloading" style="width: 298px; height: 298px;"></div>
                                <span class="wp-magnifier_mark"></span>
                                <img class="wp-product_detail-imgpreview" id="newPage_layerA2F0C72F0F57DA2F939601D7B2C2AE04" style="display: none;" onerror="set_thumb_layerA2F0C72F0F57DA2F939601D7B2C2AE04(this);" onload="set_thumb_layerA2F0C72F0F57DA2F939601D7B2C2AE04(this);" alt="英语培训" src="<?php echo $course->cover_url?>" />
                            </div>
                            <div id="wp-magnifier_boxbig">
                                <div class="wp-magnifier_big">
                                    <img src="<?php echo $course->cover_url?>" />
                                </div>
                            </div>
                            <div class="Xgt">
                                <div class="Al arrowimg">
                                    <img class="arrow_left" id="goleft_layerA2F0C72F0F57DA2F939601D7B2C2AE04" src="/index/an1L.gif" />
                                </div>
                                <div class="zgt">
                                    <div class="zgt" id="photos_layerA2F0C72F0F57DA2F939601D7B2C2AE04">
                                        <div style="width: 10000px; height: 70px; float: left;">
                                            <div id="showArea_layerA2F0C72F0F57DA2F939601D7B2C2AE04">
                                                <ul>
                                                    <?php
                                                    $imgs_count = 0;
                                                    while ($row = $img_result->fetch()) {
                                                        $course_introduce_content = new course_introduce_content($row);
                                                        $imgs_count ++;
                                                        ?>
                                                        <li>
                                                            <div class="wp-new-prodcuts-detail-picture-small-element" style="width: 60px; height: 60px;">
                                                                <div class="imgloading"></div>
                                                                <img style="display: none;" onerror="set_thumb_layerA2F0C72F0F57DA2F939601D7B2C2AE04(this);" onload="set_thumb_layerA2F0C72F0F57DA2F939601D7B2C2AE04(this);" src="<?php echo $course_introduce_content->content?>" data-src="<?php echo $course_introduce_content->content?>" />
                                                            </div>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div id="colee_left2_layerA2F0C72F0F57DA2F939601D7B2C2AE04" style="float: left;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Ar arrowimg">
                                    <img class="arrow_right" id="goright_layerA2F0C72F0F57DA2F939601D7B2C2AE04" src="/index/an1R.gif" />
                                </div>
                            </div>
                        </div>
                        <script language="javascript">

                            $("#layerA2F0C72F0F57DA2F939601D7B2C2AE04").find(".arrow_left").attr("src", "/index/an1L.gif");
                            $("#layerA2F0C72F0F57DA2F939601D7B2C2AE04").find(".arrow_left").attr("datas", "/index/an1L.gif");

                            $("#layerA2F0C72F0F57DA2F939601D7B2C2AE04").find(".arrow_right").attr("src", "/index/an1R.gif");
                            $("#layerA2F0C72F0F57DA2F939601D7B2C2AE04").find(".arrow_right").attr("datas", "/index/an1R.gif");


                            $("#layerA2F0C72F0F57DA2F939601D7B2C2AE04").find(".arrow_left").attr("data", "/index/an1L.gif");

                            $("#layerA2F0C72F0F57DA2F939601D7B2C2AE04").find(".arrow_right").attr("data", "/index/an1R.gif");


                            $('#layerA2F0C72F0F57DA2F939601D7B2C2AE04').find('.arrow_left,.arrow_right').hover(function () {
                                var h_img = $(this).attr("data");
                                $(this).attr("src", h_img);
                            }, function () {
                                var h_img = $(this).attr("datas");
                                $(this).attr("src", h_img);
                            })

                            function ResizePic(ImgTag, FitWidth, FitHeight) {
                                var image = new Image();
                                image.src = ImgTag.src;

                                if (image.width > 0 && image.height > 0) {
                                    if (image.width / image.height >= FitWidth / FitHeight) {
                                        if (image.width > FitWidth) {
                                            ImgTag.width = FitWidth;
                                            ImgTag.height = (image.height * FitWidth) / image.width;
                                        } else {
                                            ImgTag.width = image.width;
                                            ImgTag.height = image.height;
                                        }
                                    } else {
                                        if (image.height > FitHeight) {
                                            ImgTag.height = FitHeight;
                                            ImgTag.width = (image.width * FitHeight) / image.height;
                                        } else {
                                            ImgTag.width = image.width;
                                            ImgTag.height = image.height;
                                        }
                                    }
                                }
                            }

                            (function () {
                                var this_nums = <?php echo $imgs_count?>;
                                this_nums = parseInt(this_nums) || 0;
                                var this_width = $("#layerA2F0C72F0F57DA2F939601D7B2C2AE04").find(".Gpic").width();
                                this_width = (this_width - 50) / 66;
                                this_width = parseInt(this_width);

                                var zgtw = $('#layerA2F0C72F0F57DA2F939601D7B2C2AE04 .Xgt').width();
                                var minw = 249;
                                var maxw = zgtw - 50;
                                var allimgw = 66 * (this_nums + 1);
                                if (maxw > minw) {
                                    if (allimgw > minw && maxw > allimgw) {
                                        $('#layerA2F0C72F0F57DA2F939601D7B2C2AE04 .Xgt .zgt').css('width', allimgw + 'px');
                                        $('#layerA2F0C72F0F57DA2F939601D7B2C2AE04 .Xgt .Al').css('margin-left', (maxw - allimgw) / 2 + 'px');
                                    } else if (allimgw >= maxw) {
                                        $('#layerA2F0C72F0F57DA2F939601D7B2C2AE04 .Xgt .zgt').css('width', maxw + 'px');
                                    } else {
                                        $('#layerA2F0C72F0F57DA2F939601D7B2C2AE04 .Xgt .Al').css('margin-left', (maxw - minw) / 2 + 'px');
                                    }
                                } else {
                                    $('#layerA2F0C72F0F57DA2F939601D7B2C2AE04 .Xgt .zgt').css('width', maxw + 'px');
                                }
                                if (this_nums >= this_width) {
                                    var colee_left2_layerA2F0C72F0F57DA2F939601D7B2C2AE04 = document.getElementById("colee_left2_layerA2F0C72F0F57DA2F939601D7B2C2AE04");
                                    var colee_left1_layerA2F0C72F0F57DA2F939601D7B2C2AE04 = document.getElementById("showArea_layerA2F0C72F0F57DA2F939601D7B2C2AE04");
                                    var colee_left_layerA2F0C72F0F57DA2F939601D7B2C2AE04 = document.getElementById("photos_layerA2F0C72F0F57DA2F939601D7B2C2AE04");
                                    colee_left2_layerA2F0C72F0F57DA2F939601D7B2C2AE04.innerHTML = colee_left1_layerA2F0C72F0F57DA2F939601D7B2C2AE04.innerHTML

                                    var start_layerA2F0C72F0F57DA2F939601D7B2C2AE04 = document.getElementById("goleft_layerA2F0C72F0F57DA2F939601D7B2C2AE04");
                                    var stops_layerA2F0C72F0F57DA2F939601D7B2C2AE04 = document.getElementById("goright_layerA2F0C72F0F57DA2F939601D7B2C2AE04");

                                    start_layerA2F0C72F0F57DA2F939601D7B2C2AE04.onclick = function () {
                                        if (colee_left2_layerA2F0C72F0F57DA2F939601D7B2C2AE04.offsetWidth - colee_left_layerA2F0C72F0F57DA2F939601D7B2C2AE04.scrollLeft <= 0) {
                                            colee_left_layerA2F0C72F0F57DA2F939601D7B2C2AE04.scrollLeft -= colee_left1_layerA2F0C72F0F57DA2F939601D7B2C2AE04.offsetWidth;
                                            colee_left_layerA2F0C72F0F57DA2F939601D7B2C2AE04.scrollLeft += 66;
                                        } else {
                                            for (i = 0; i < 66; i++) {
                                                colee_left_layerA2F0C72F0F57DA2F939601D7B2C2AE04.scrollLeft++
                                            }
                                        }
                                    }

                                    stops_layerA2F0C72F0F57DA2F939601D7B2C2AE04.onclick = function () {
                                        if (colee_left_layerA2F0C72F0F57DA2F939601D7B2C2AE04.scrollLeft <= 0) {
                                            colee_left_layerA2F0C72F0F57DA2F939601D7B2C2AE04.scrollLeft += colee_left2_layerA2F0C72F0F57DA2F939601D7B2C2AE04.offsetWidth - 66;
                                        } else {
                                            for (i = 0; i < 66; i++) {
                                                colee_left_layerA2F0C72F0F57DA2F939601D7B2C2AE04.scrollLeft--
                                            }

                                        }
                                    }
                                }

                                $("#photos_layerA2F0C72F0F57DA2F939601D7B2C2AE04 img").click(function () {
                                    var thissrc = $(this).attr('src');
                                    $("#newPage_layerA2F0C72F0F57DA2F939601D7B2C2AE04").attr('src', thissrc);
                                    $('#wp-magnifier_boxbig img').removeAttr("src").attr("src", $(this).attr("data-src"));
                                    if (!($.browser.msie && ($.browser.version < "9.0"))) productDetailImgAdaptive();
                                });
                            })();
                            $(function () {
                                // preLoad images
                                preloadImages($('#showArea_layerA2F0C72F0F57DA2F939601D7B2C2AE04 li > img'));
                            });
                        </script>
                        <div style="clear: both;"></div>
                        <div class="artview_detail">
                            <?php
                            while ($row = $content_result->fetch()) {
                                $course_introduce_content = new course_introduce_content($row);
                                ?>
                                    <SPAN style="color: rgb(102, 102, 102); line-height: 25px; font-family: Microsoft YaHei; font-size: 14px;display: block;">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $course_introduce_content->content?>
                                    </SPAN>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                    <div class="product_list_save_itemList" style="display: none;" productstyle="listStyle"></div>
                    <div class="prdview_prev_next">
                        <div style="width: 100%; margin: 20px 0 20px 0;">
                            <div>
                                <span class="prev_next_text prev_txt" style="margin-right: 5px; float: left; display: block;">上一个： </span>
                                <A title="<?php
                                if(!empty($prevNews->id)){
                                    echo "$prevNews->sub_title";
                                }
                                ?>" class="prev_next_link" style="float: left; display: block;" href="<?php
                                if(!empty($prevNews->id)){
                                    echo "/course_introduce/essay/?type=".$course_type->id."&id=".$prevNews->id;
                                }
                                ?>">
                                    <?php
                                    if(empty($prevNews->title)){
                                        echo "没有了";
                                    }else{
                                        echo $prevNews->title;
                                    }
                                    ?>
                                </A>
                                <div style="clear: both;"></div>
                            </div>
                            <div>
                                <span class="prev_next_text next_txt" style="margin-right: 5px; float: left; display: block;">下一个：</span>
                                <A title="<?php
                                if(!empty($nextNews->id)){
                                    echo "$nextNews->sub_title";
                                }
                                ?>" class="prev_next_link" style="float: left; display: block;" href="<?php
                                if(!empty($nextNews->id)){
                                    echo "/course_introduce/essay/?type=".$course_type->id."&id=".$nextNews->id;
                                }
                                ?>">
                                    <?php
                                    if(empty($nextNews->title)){
                                        echo "没有了";
                                    }else{
                                        echo $nextNews->title;
                                    }
                                    ?>
                                </A>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        var layer = $.trim("#layerA2F0C72F0F57DA2F939601D7B2C2AE04");
                        if (layer.length === 1) return;
                        var min = Math.min, max = Math.max, $layercnt = $(layer).children('.wp-product_detail_content');
                        var cstyle = 'listStyle';
                        if (cstyle == 'default') {
                            var magnifier = $(layer).find('.wp-magnifier_small');
                            var magnifier_box = $(layer).find('.wp-magnifier_box');
                            var magnifier_small_h = 0;
                            var magnifier_small = $(layer).find('.wp-new-prodcuts-detail-picture-small');
                            if (magnifier_small.height() > 0) magnifier_small_h = magnifier_small.outerHeight(true);
                            if (magnifier_box.height() < magnifier.height()) magnifier_box.css('height', magnifier.height() + magnifier_small_h);
                        }
                        $('.wp-magnifier_small', $layercnt).bind("mousemove", function (e) {
                            $layercnt.css("overflow", '');
                            var $target = $(this), $prebox = $target.next('#wp-magnifier_boxbig'),
                                $bigbox = $prebox.children('.wp-magnifier_big'),
                                $mark = $target.children('.wp-magnifier_mark'),
                                $img = $target.children('img.wp-product_detail-imgpreview'), bigImgW = 0,
                                bigImgH = 0, boxW = $target.outerWidth(), boxH = $target.outerHeight(),
                                imgW = $img.outerWidth(), imgH = $img.outerHeight(),
                                marginLeft = magnifier_intval($img.css("marginLeft")),
                                marginTop = magnifier_intval($img.css("marginTop"));
                            // Big-image size
                            var $bigimg = $bigbox.children('img'), bigimg = $bigimg[0];
                            bigImgW = $bigimg.outerWidth() || bigimg.width;
                            bigImgH = $bigimg.outerHeight() || bigimg.height;
                            // Mark size
                            var scaleX = bigImgW / imgW, scaleY = bigImgH / imgH,
                                markW = min(imgW, magnifier_intval(imgW / scaleX)),
                                markH = min(imgH, magnifier_intval(imgH / scaleY));
                            $mark.width(markW).height(markH);
                            markW = $mark.outerWidth();
                            markH = $mark.outerHeight();
                            // Mouse position
                            var offset = $target.offset(), difX = e.pageX - offset.left, difY = e.pageY - offset.top;
                            if ((difX < marginLeft) || (difX > boxW - marginLeft) || (difY < marginTop) || (difY > boxH - marginTop)) return;
                            var mouseX = difX - markW / 2 - marginLeft, mouseY = difY - markH / 2 - marginTop;
                            // Max range
                            var maxLeft = imgW - markW, maxTop = imgH - markH, markLeft = mouseX, markTop = mouseY;
                            // A moving distance of the magnifier
                            markLeft = (markLeft < 0) ? 0 : min(markLeft, maxLeft);
                            markTop = (markTop < 0) ? 0 : min(markTop, maxTop);
                            // A moving rate of the magnifier
                            var perX = markLeft / imgW, perY = markTop / imgH;
                            // Handler position
                            var markL = markLeft + marginLeft, markT = markTop + marginTop;
                            $mark.css({display: 'block', left: markL + 'px', top: markT + 'px'});
                            // Image preview position
                            var preboxH = $prebox.outerHeight(),
                                boxMarginL = magnifier_intval($target.css("marginLeft"));
                            $prebox.width(markW * scaleX).height(markH * scaleY).css({
                                left: (markL + markW + boxMarginL + 5) + 'px',
                                top: max(markT - (preboxH - markH) / 2, 0) + 'px'
                            });
                            // Image position
                            $bigbox.css({
                                display: 'block',
                                left: -(perX * $bigbox.outerWidth()) + 'px',
                                top: -(perY * $bigbox.outerHeight()) + 'px'
                            });
                            // Unset
                            $target = $bigbox = $mark = $img = $prebox = null;
                        }).bind("mouseleave", function (e) {
                            $layercnt.css("overflow", 'hidden');
                            $('.wp-magnifier_big, #wp-magnifier_boxbig, .wp-magnifier_mark', layer).removeAttr("style");
                        });
                        // <<<End
                        if ('listStyle' != 'listStyle') {/* Dyn-set right-area width 2013/07/19 */
                            var $prdetail = $(layer).find('.wp-new-prodcuts-detail'),
                                ltwidth = $prdetail.children('.wp-new-prodcuts-detail-left').width(),
                                maxwidth = $prdetail.closest('.wp-new-prodcuts-detail-outside').width();
                            if ($prdetail.length && maxwidth) {
                                $prdetail.width(maxwidth).children('.wp-new-prodcuts-detail-right').width(maxwidth - ltwidth);
                            }
                        }
                    });

                    function magnifier_intval(numstr) {
                        var number = parseFloat(numstr);
                        if (isNaN(number)) return 0;
                        return number;
                    }

                    function productDetailImgAdaptive() {
                        // Adaptive Image
                        var layerid = $.trim("layerA2F0C72F0F57DA2F939601D7B2C2AE04");
                        if (layerid.length === 0) return;
                        var $prdimg = $('img.wp-product_detail-imgpreview', '#' + layerid),
                            maxw = 300, maxh = 300, _loadImg = function (img, callback) {
                                if (img.complete) callback(img.width, img.height);
                                else {
                                    img.onload = function () {
                                        callback(img.width, img.height);
                                        img.onload = null;
                                    };
                                }
                            };
                        $prdimg.removeAttr("style");
                        _loadImg($prdimg[0], function (width, height) {
                            var tmpw = 0, tmph = 0;
                            if (width == 300 && height == 300) {
                                if ((width >= maxw) || (height >= maxh)) {
                                    var direct = (width >= maxw) ? (width >= height) : (height < width);
                                    // Horizontal
                                    if (direct) {
                                        $prdimg.width(maxw).height("auto");
                                        tmph = $prdimg.height();
                                        $prdimg.css("margin", ((maxh - tmph) / 2) + 'px');
                                    }
                                    // Vertical
                                    else {
                                        $prdimg.height(maxh).width("auto");
                                        tmpw = $prdimg.width();
                                        $prdimg.css("margin", '0 ' + ((maxw - tmpw) / 2) + 'px');
                                    }
                                }
                            } else return;
                        });
                    }
                </script>
            </div>
            <script>                 $('#layerA2F0C72F0F57DA2F939601D7B2C2AE04').triggerHandler('layer_ready');</script>
        </div>
    </div>
    <!-- 底部 开始 -->
    <?php
    include '../../include/footer.php'
    ?>
    <!-- 底部 结束 -->
</div>
<script type="text/javascript">
    var b;


    doc_end_exec();
</script>
<script>
    function wx_open_login_dialog(func) {
        func(true);
    }
</script>
<script>
    $(window).load(function () {
        if (location.hash && location.hash != '' && location.hash != '#') {
            location.href = location.hash;
        }
    });
    (function () {
        if (('standalone' in window.navigator) && window.navigator.standalone) {
            var noddy, remotes = false;
            document.addEventListener('click', function (event) {
                noddy = event.target;
                while (noddy.nodeName !== 'A' && noddy.nodeName !== 'HTML') noddy = noddy.parentNode;
                if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)) {
                    event.preventDefault();
                    document.location.href = noddy.href;
                }
            }, false);
        }
    })();
</script>
</body>
</html>