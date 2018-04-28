<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2017/1/9
 * Time: 15:01
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
    <META content="IE=11.0000" http-equiv="X-UA-Compatible">
    <META http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <TITLE>成都北武咏春国术馆</TITLE>
    <META name="keywords" content="网站关键字">
    <META name="description" content="网站描述">
    <liNK href="index/default.css" rel="stylesheet" type="text/css">
    <liNK href="index/media.css" rel="stylesheet" type="text/css">
    <liNK href="index/title.css" rel="stylesheet" type="text/css">
    <liNK href="index/unslider.css" rel="stylesheet" type="text/css">
    <liNK href="index/chtml.css" rel="stylesheet" type="text/css">
    <STYLE type="text/css">.prop_rotate_angle sup, .prop_rotate_angle .posblk-deg {
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
    </STYLE>
</HEAD>
<BODY><INPUT name="_user_level_val" type="hidden" value="2">
<?php
require_once 'entrance.php';
$banner_dao = new index_banner_dao();
$index_content_dao = new index_content_dao();
$index_about_us_dao = new index_about_us_dao();
$result = $index_about_us_dao->getOne(1);
$about_us = new about_us($result->fetch());
$course_intro_dao = new course_intro_dao();
$news_dao = new news_dao();
?>
<SCRIPT language="javascript" src="index/script.js" type="text/javascript"></SCRIPT>

<SCRIPT language="javascript" src="index/plugin.js" type="text/javascript"></SCRIPT>

<SCRIPT language="javascript" type="text/javascript">
    //js版本url生成函数
    var webmodel = {};

    wp_pages_global_func($.extend({
        'isedit': '0',
        'islogin': '0',
        'domain': 'tpl-cf61794',
        'p_rooturl': 'http://www.wefight.com',
        'static_rooturl': '/index',
        'interface_locale': "zh_CN",
        'dev_mode': "0",
        'getsession': ''
    }, {
        "phpsessionid": "",
        "punyurl": "\/\/www.wefight.com",
        "curr_locale": "zh_CN",
        "mscript_name": "",
        "converted": false
    }));

</SCRIPT>
<liNK href="index/common.css" rel="stylesheet">
<div id="page_set_css">
</div>
<INPUT name="page_id" id="page_id" type="hidden" value="1" rpid="1">
<div class="scroll_contain" id="scroll_container">
    <div id="scroll_container_bg">&nbsp;</div>
    <SCRIPT>
        initScrollcontainerHeight();
    </SCRIPT>

    <div id="overflow_canvas_container">
        <div id="canvas" style="margin: 0px auto; width: 1200px; height: 2877px;">
            <!-- 顶部 开始 -->
            <?php
                include './include/header.php'
            ?>
            <!-- 顶部 结束 -->
            <!-- banner 开始 -->
            <?php
            include './include/banner.php'
            ?>
            <!-- banner 结束 -->
            <div class="cstlayer" id="layerAAA5BCD743D22067B05E5412A480A1AF"
                 style="left: 901px; top: 637px; width: 299px; height: 296px; position: absolute; z-index: 111;"
                 deg="0" mid="" type="chtml">
                <div class="wp-chtml_content"
                     style="background: rgb(233, 72, 174); padding: 0px; border: 0px solid transparent; border-image: none; width: 299px; height: 296px; overflow: hidden;">

                    <div class="imgloading"
                         id="loading_layerAAA5BCD743D22067B05E5412A480A1AF"></div>
                    <IFRAME src="about:blank"
                            frameborder="0" scrolling="no" style="width: 299px; height: 296px;"
                            allowtransparency="true"
                            onload='document.getElementById("loading_layerAAA5BCD743D22067B05E5412A480A1AF").style.display = "none";'
                            type=""></IFRAME>
                </div>
                <SCRIPT>
                    (function () {
                        var imgover = $('#loading_layerAAA5BCD743D22067B05E5412A480A1AF').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layerAAA5BCD743D22067B05E5412A480A1AF').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerDFEBE5423277068C84213F3B9E4D14C0"
                 style="left: 601px; top: 637px; width: 300px; height: 296px; position: absolute; z-index: 108;"
                 deg="0" mid="" type="chtml">
                <div class="wp-chtml_content"
                     style="background: rgb(48, 122, 213); padding: 0px; border: 0px solid transparent; border-image: none; width: 300px; height: 296px; overflow: hidden;">

                    <div class="imgloading"
                         id="loading_layerDFEBE5423277068C84213F3B9E4D14C0"></div>
                    <IFRAME src="about:blank"
                            frameborder="0" scrolling="no" style="width: 300px; height: 296px;"
                            allowtransparency="true"
                            onload='document.getElementById("loading_layerDFEBE5423277068C84213F3B9E4D14C0").style.display = "none";'
                            type=""></IFRAME>
                </div>
                <SCRIPT>
                    (function () {
                        var imgover = $('#loading_layerDFEBE5423277068C84213F3B9E4D14C0').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layerDFEBE5423277068C84213F3B9E4D14C0').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerC2D3C1D6CEFB521820F6DCE88688CED0"
                 style="left: 301px; top: 638px; width: 300px; height: 296px; position: absolute; z-index: 110;"
                 deg="0" mid="" type="chtml">
                <div class="wp-chtml_content"
                     style="background: rgb(253, 199, 53); padding: 0px; border: 0px solid transparent; border-image: none; width: 300px; height: 296px; overflow: hidden;">

                    <div class="imgloading"
                         id="loading_layerC2D3C1D6CEFB521820F6DCE88688CED0"></div>
                    <IFRAME src="about:blank"
                            frameborder="0" scrolling="no" style="width: 300px; height: 296px;"
                            allowtransparency="true"
                            onload='document.getElementById("loading_layerC2D3C1D6CEFB521820F6DCE88688CED0").style.display = "none";'
                            type=""></IFRAME>
                </div>
                <SCRIPT>
                    (function () {
                        var imgover = $('#loading_layerC2D3C1D6CEFB521820F6DCE88688CED0').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layerC2D3C1D6CEFB521820F6DCE88688CED0').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerCB144323B92E4112EA28446B509476A6"
                 style="left: 1px; top: 638px; width: 300px; height: 296px; position: absolute; z-index: 109;"
                 deg="0" mid="" type="chtml">
                <div class="wp-chtml_content"
                     style="background: rgb(16, 196, 92); padding: 0px; border: 0px solid transparent; border-image: none; width: 300px; height: 296px; overflow: hidden;">

                    <div class="imgloading"
                         id="loading_layerCB144323B92E4112EA28446B509476A6"></div>
                    <IFRAME src="about:blank"
                            frameborder="0" scrolling="no" style="width: 300px; height: 296px;"
                            allowtransparency="true"
                            onload='document.getElementById("loading_layerCB144323B92E4112EA28446B509476A6").style.display = "none";'
                            type=""></IFRAME>
                </div>
                <SCRIPT>
                    (function () {
                        var imgover = $('#loading_layerCB144323B92E4112EA28446B509476A6').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layerCB144323B92E4112EA28446B509476A6').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerCC0AC635D3A32D824D93164414A25B85"
                 style="left: 341px; top: 652px; width: 72px; height: 72px; position: absolute; z-index: 115;"
                 deg="0" mid="" type="media">
                <SCRIPT>
                    create_pc_media_set_pic('layerCC0AC635D3A32D824D93164414A25B85', false);
                </SCRIPT>

                <div class="wp-media_content"
                     style="border-width: 0px; border-style: solid; padding: 0px; width: 72px; height: 72px; overflow: hidden;"
                     type="0">
                    <div class="img_over"
                         style="border-width: 0px; border-color: transparent; width: 72px; height: 72px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image"
                             id="wp-media-image_layerCC0AC635D3A32D824D93164414A25B85"
                             style="width: 72px; height: 72px;"
                             src="index/blank.gif" type="zoom"
                             data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/bitcoin_head_mind_72px_1140509_easyicon.png">
                    </div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layerCC0AC635D3A32D824D93164414A25B85');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layerCC0AC635D3A32D824D93164414A25B85').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerE3740813ADBF854C782D046FAAC7CCCA"
                 style="left: 37px; top: 654px; width: 55px; height: 59px; position: absolute; z-index: 112;"
                 deg="0" mid="" type="media">
                <SCRIPT>
                    create_pc_media_set_pic('layerE3740813ADBF854C782D046FAAC7CCCA', false);
                </SCRIPT>

                <div class="wp-media_content"
                     style="border-width: 0px; border-style: solid; padding: 0px; width: 55px; height: 59px; overflow: hidden;"
                     type="0">
                    <div class="img_over"
                         style="border-width: 0px; border-color: transparent; width: 55px; height: 59px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image"
                             id="wp-media-image_layerE3740813ADBF854C782D046FAAC7CCCA"
                             style="width: 55px; height: auto;"
                             src="index/blank.gif" type="zoom"
                             data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/fx5n.png">
                    </div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layerE3740813ADBF854C782D046FAAC7CCCA');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layerE3740813ADBF854C782D046FAAC7CCCA').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer5D4335DC7A52A8223E3523512C799803"
                 style="left: 650px; top: 655px; width: 61.56px; height: 58px; position: absolute; z-index: 122;"
                 deg="0" mid="" type="media">
                <SCRIPT>
                    create_pc_media_set_pic('layer5D4335DC7A52A8223E3523512C799803', false);
                </SCRIPT>

                <div class="wp-media_content"
                     style="border-width: 0px; border-style: solid; padding: 0px; width: 62px; height: 58px; overflow: hidden;"
                     type="0">
                    <div class="img_over"
                         style="border-width: 0px; border-color: transparent; width: 62px; height: 58px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image"
                             id="wp-media-image_layer5D4335DC7A52A8223E3523512C799803"
                             style="left: 0px; top: 0px; width: 62px; height: auto; position: relative;"
                             src="index/blank.gif" type="zoom"
                             data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/person_people_75.png">
                    </div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layer5D4335DC7A52A8223E3523512C799803');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layer5D4335DC7A52A8223E3523512C799803').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer9CEA2B60C77DCD96A40F4C84B04C0D9E"
                 style="left: 946px; top: 656px; width: 60.13px; height: 41px; position: absolute; z-index: 119;"
                 deg="0" mid="" type="media">
                <SCRIPT>
                    create_pc_media_set_pic('layer9CEA2B60C77DCD96A40F4C84B04C0D9E', false);
                </SCRIPT>

                <div class="wp-media_content"
                     style="border-width: 0px; border-style: solid; padding: 0px; width: 60px; height: 41px; overflow: hidden;"
                     type="0">
                    <div class="img_over"
                         style="border-width: 0px; border-color: transparent; width: 60px; height: 41px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image"
                             id="wp-media-image_layer9CEA2B60C77DCD96A40F4C84B04C0D9E"
                             style="width: 60px; height: auto;"
                             src="index/blank.gif" type="zoom"
                             data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/certificate_103.png">
                    </div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layer9CEA2B60C77DCD96A40F4C84B04C0D9E');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layer9CEA2B60C77DCD96A40F4C84B04C0D9E').triggerHandler('layer_ready');</SCRIPT>
            <?php
                $result = $index_content_dao->listIndexContent();
                $index_content1 = new index_content($result->fetch());
                $index_content2 = new index_content($result->fetch());
                $index_content3 = new index_content($result->fetch());
                $index_content4 = new index_content($result->fetch());
            ?>
            <div class="cstlayer" id="layer0FFAFDE3EB568CD24F7997A7EC51CD79"
                 style="left: 337px; top: 729px; width: 150px; height: 29px; position: absolute; z-index: 116;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 150px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#ffffff" face="微软雅黑"><span
                                style="line-height: 28px; font-size: 20px;"><?php echo $index_content2->title?></span></FONT></div>
            </div>
            <SCRIPT>                 $('#layer0FFAFDE3EB568CD24F7997A7EC51CD79').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer835B82F5622067E406D576F39298A70B"
                 style="left: 33px; top: 729px; width: 150px; height: 29px; position: absolute; z-index: 113;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 150px; height: 29px; display: block; -ms-word-wrap: break-word;"><span
                            style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 20px;"><?php echo $index_content1->title?></span></div>
            </div>
            <SCRIPT>                 $('#layer835B82F5622067E406D576F39298A70B').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer5CDB3AC4AC291BB9B392094894B76E74"
                 style="left: 943px; top: 729px; width: 174px; height: 29px; position: absolute; z-index: 120;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 174px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#ffffff" face="微软雅黑"><span
                                style="line-height: 28px; font-size: 20px;"><?php echo $index_content4->title?></span></FONT></div>
            </div>
            <SCRIPT>                 $('#layer5CDB3AC4AC291BB9B392094894B76E74').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerAA4992471EB4235972B2C296997A1E9F"
                 style="left: 646px; top: 730px; width: 150px; height: 29px; position: absolute; z-index: 118;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 150px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#ffffff" face="微软雅黑"><span
                                style="line-height: 28px; font-size: 20px;"><?php echo $index_content3->title?></span></FONT></div>
            </div>
            <SCRIPT>                 $('#layerAA4992471EB4235972B2C296997A1E9F').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer503D667A018C0594D777168C8DC64B46"
                 style="left: 921px; top: 765px; width: 266px; height: 145px; position: absolute; z-index: 121;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 266px; height: 145px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#ffffff" face="微软雅黑"><span
                                style="line-height: 30.8px; font-size: 14px;"><?php echo $index_content4->content?></span></FONT>
                </div>
            </div>
            <SCRIPT>                 $('#layer503D667A018C0594D777168C8DC64B46').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer418768531F2218F955EFE3C140399AA4"
                 style="left: 643px; top: 766px; width: 230px; height: 126px; position: absolute; z-index: 123;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 230px; height: 126px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#ffffff" face="微软雅黑"><span
                                style="line-height: 30.8px; font-size: 14px;"><?php echo $index_content3->content?></span></FONT>
                </div>
            </div>
            <SCRIPT>                 $('#layer418768531F2218F955EFE3C140399AA4').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer765C5C507E844FAF2D960F41F74D27D7"
                 style="left: 331px; top: 767px; width: 239px; height: 126px; position: absolute; z-index: 117;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 239px; height: 126px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#ffffff" face="微软雅黑"><span
                                style="line-height: 30.8px; font-size: 14px;"><?php echo $index_content2->content?></span></FONT>
                </div>
            </div>
            <SCRIPT>                 $('#layer765C5C507E844FAF2D960F41F74D27D7').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerBD6CD19F1B129784BB1A400B5A81AE7D"
                 style="left: 30px; top: 768px; width: 230px; height: 126px; position: absolute; z-index: 114;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 230px; height: 126px; display: block; -ms-word-wrap: break-word;"><span
                            style="color: rgb(255, 255, 255); line-height: 220%; font-family: 微软雅黑; font-size: 14px;"><?php echo $index_content1->content?></span>
                </div>
            </div>
            <SCRIPT>                 $('#layerBD6CD19F1B129784BB1A400B5A81AE7D').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer46A65C44D066744C18F2D863CF82F08B"
                 style="left: 488px; top: 975px; width: 165px; height: 55px; position: absolute; z-index: 124;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 165px; height: 55px; display: block; -ms-word-wrap: break-word;">
                    <B
                            style="text-align: center; color: rgb(255, 255, 255); line-height: 67.2px; font-family: 微软雅黑; font-size: 48px;"><FONT
                                color="#fd734a" style="color: rgb(253, 115, 74);"><span
                                    style="font-size: 40px;">热门课程</span></FONT></B></div>
            </div>
            <SCRIPT>                 $('#layer46A65C44D066744C18F2D863CF82F08B').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerF00418CE7523438895E5C4AC494E5AD9"
                 style="left: 491px; top: 1034px; width: 159px; height: 27px; position: absolute; z-index: 125;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 159px; height: 27px; display: block; -ms-word-wrap: break-word;"><span
                            style="text-transform: uppercase; font-size: 16px;">Popular course</span></div>
            </div>
            <SCRIPT>                 $('#layerF00418CE7523438895E5C4AC494E5AD9').triggerHandler('layer_ready');</SCRIPT>

            <?php
                $pageCount = 4;
                $begin = 0;
                $i = 0;
                $result = $course_intro_dao->listCourseIntro($begin, $pageCount, null, 0, 1);
                while ($row = $result->fetch()) {
                $t0 = 3 + 300 * $i;
                $t1 = 5 + 300 * $i;
                $course_introduce = new course_introduce($row);
            ?>
            <div class="cstlayer" id="layerC7A8A47396ED38044DBC26BB7BB85C2B"
                 style="left: <?php echo $t0 ?>px; top: 1116px; width: 287px; height: 187px; display: block; position: absolute; z-index: 126;"
                 deg="0" mid="" type="media">
                <SCRIPT>
                    create_pc_media_set_pic('layerC7A8A47396ED38044DBC26BB7BB85C2B', false);
                </SCRIPT>

                <div class="wp-media_content"
                     style="border-width: 0px; border-style: solid; padding: 0px; width: 287px; height: 187px; overflow: hidden;"
                     type="0">
                    <div class="img_over"
                         style="border-width: 0px; border-color: transparent; width: 287px; height: 187px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <A class="media_link" target="_blank" href="./course_introduce/essay?id=<?php echo $course_introduce->id ?>&type=<?php echo $course_introduce->type ?>"
                           target="_self"><img class="img_lazy_load paragraph_image"
                                               id="wp-media-image_layerC7A8A47396ED38044DBC26BB7BB85C2B"
                                               style="left: -14px; top: 0px; width: auto; height: 187px; position: relative;"
                                               src="index/blank.gif" type="zoom"
                                               data-original="<?php echo $course_introduce->cover_url?>">
                        </A></div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layerC7A8A47396ED38044DBC26BB7BB85C2B');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layerC7A8A47396ED38044DBC26BB7BB85C2B').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerABC5E0BE72E26548F1E2DFE64BF5AD3A"
                 style="left: <?php echo $t1?>px; top: 1314px; width: 270px; height: 29px; display: block; position: absolute; z-index: 132;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 270px; height: 29px; display: block; -ms-word-wrap: break-word;"><span
                            style="color: rgb(255, 153, 0); font-family: 微软雅黑; font-size: 20px;"><?php echo $course_introduce->title ?></span></div>
            </div>
            <SCRIPT>                 $('#layerABC5E0BE72E26548F1E2DFE64BF5AD3A').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerF4E16F14100DF0A7ABF8A0F643BA11D6"
                 style="left: <?php echo $t0?>px; top: 1352px; width: 267px; height: 92px; position: absolute; z-index: 134;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 267px; height: 92px; display: block; -ms-word-wrap: break-word;"><span
                            style="line-height: 190%; font-family: 微软雅黑; font-size: 13px;"><?php echo $course_introduce->sub_title ?></span>
                </div>
            </div>
            <SCRIPT>                 $('#layerF4E16F14100DF0A7ABF8A0F643BA11D6').triggerHandler('layer_ready');</SCRIPT>
                <?php
                    $i++;
            }
            ?>
            <div class="full_column" id="layer29E94011A71CBCF5399B5D74E1164BDE" style="top: 1504px; width: 1200px; height: 567px; position: absolute; z-index: 129;">
                <div class="full_width"
                     style="height: 567px; position: absolute; background-color: rgb(247, 63, 65);"></div>
                <div class="full_content"
                     style="left: 0px; top: 0px; width: 1200px; height: 567px; margin-left: 0px; position: absolute;">
                    <div class="cstlayer" id="layer465128E465339A247C3D2ACBA29B29B2"
                         style="left: 529px; top: 21px; width: 133px; height: 49px; position: absolute; z-index: 102;"
                         deg="0" mid="" type="title" fatherid="layer29E94011A71CBCF5399B5D74E1164BDE">
                        <div class="wp-title_content"
                             style="border-width: 0px; border-color: transparent; padding: 0px; width: 133px; height: 49px; display: block; -ms-word-wrap: break-word;">
                            <div style="text-align: center;"><FONT color="#fd734a" face="微软雅黑">
                                    <span style="color: rgb(255, 255, 255); line-height: 56px; font-size: 27px;">
                                        <B>关于我们</B>
                                    </span>
                                </FONT>
                            </div>
                        </div>
                    </div>
                    <SCRIPT>                 $('#layer465128E465339A247C3D2ACBA29B29B2').triggerHandler('layer_ready');</SCRIPT>
                    <div class="cstlayer" id="layer071CFA28FBCF6809A38D06C59E3B21F2"
                         style="left: 611px; top: 426px; width: 103px; height: 37px; position: absolute; z-index: 105;"
                         deg="0" mid="" type="buttons" fatherid="layer29E94011A71CBCF5399B5D74E1164BDE">
                        <div class="wp-buttons_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 103px; height: 37px; overflow: hidden;">
                            <A class="btnarea button_btndefault-link" style="left: 0px; top: 0px; width: 101px; height: 35px; line-height: 35px;" href="/about_us">
                                <span class="button_btndefault-label">查看更多&gt;&gt;</span>
                            </A>
                            <SCRIPT language="javascript">$('#layer071CFA28FBCF6809A38D06C59E3B21F2').layer_ready(function () {
                                });</SCRIPT>
                        </div>
                    </div>
                    <SCRIPT>                 $('#layer071CFA28FBCF6809A38D06C59E3B21F2').triggerHandler('layer_ready');</SCRIPT>
                    <div class="cstlayer" id="layerD86B710DD0E0E410438CED66C128EABE"
                         style="left: 601px; top: 134px; width: 577px; height: 266px; position: absolute; z-index: 104;"
                         deg="0" mid="" type="title" fatherid="layer29E94011A71CBCF5399B5D74E1164BDE">
                        <div class="wp-title_content"
                             style="border-width: 0px; border-color: transparent; padding: 0px; width: 577px; height: 266px; display: block; -ms-word-wrap: break-word;">

                            <FONT color="#ffffff" face="微软雅黑">
                                <span style="line-height: 33.6px; font-size: 14px;">
                                    <span style="line-height: 260%; font-size: 15px;"><?php echo $about_us->content?></span>
                                    <span style="line-height: 260%; font-size: 15px;"></span>
                                </span>
                            </FONT>
                        </div>
                    </div>
                    <SCRIPT>                 $('#layerD86B710DD0E0E410438CED66C128EABE').triggerHandler('layer_ready');</SCRIPT>

                    <div class="cstlayer" id="layer0077201B707589EEC88DAE9BF57B53A7"
                         style="left: 71px; top: 129px; width: 480.94px; height: 353px; position: absolute; z-index: 101;"
                         deg="0" mid="" type="media" fatherid="layer29E94011A71CBCF5399B5D74E1164BDE">
                        <SCRIPT>
                            create_pc_media_set_pic('layer0077201B707589EEC88DAE9BF57B53A7', false);
                        </SCRIPT>

                        <div class="wp-media_content"
                             style="border-width: 0px; border-style: solid; padding: 0px; width: 481px; height: 353px; overflow: hidden;"
                             type="0">
                            <div class="img_over"
                                 style="border-width: 0px; border-color: transparent; width: 481px; height: 353px; overflow: hidden;">
                                <div class="imgloading" style="z-index: 100;"></div>
                                <img class="img_lazy_load paragraph_image"
                                     id="wp-media-image_layer0077201B707589EEC88DAE9BF57B53A7"
                                     style="left: -119px; top: 0px; width: auto; height: 353px; position: relative;"
                                     src="index/blank.gif" type="zoom"
                                     data-original="<?php echo $about_us->img_url?>">
                            </div>
                        </div>
                        <SCRIPT>
                            (function () {
                                layer_media_init_func('layer0077201B707589EEC88DAE9BF57B53A7');
                            })()
                        </SCRIPT>
                    </div>
                    <SCRIPT>                 $('#layer0077201B707589EEC88DAE9BF57B53A7').triggerHandler('layer_ready');</SCRIPT>

                    <div class="cstlayer" id="layerE157BD6FC536C21462BF5874F55F9B9E"
                         style="left: 550px; top: 72px; width: 95px; height: 27px; position: absolute; z-index: 103;"
                         deg="0" mid="" type="title" fatherid="layer29E94011A71CBCF5399B5D74E1164BDE">
                        <div class="wp-title_content"
                             style="border-width: 0px; border-color: transparent; padding: 0px; width: 95px; height: 27px; display: block; -ms-word-wrap: break-word;"><span
                                    style="text-transform: uppercase; line-height: 22.4px; font-size: 16px;"><span
                                        style="color: rgb(255, 255, 255);">About us</span><span
                                        style="color: rgb(255, 255, 255);">​</span></span></div>
                    </div>
                    <SCRIPT>                 $('#layerE157BD6FC536C21462BF5874F55F9B9E').triggerHandler('layer_ready');</SCRIPT>

                    <div class="cstlayer" id="layerC1377ED4ED7A4DA719BBD6A15BC015F0"
                         style="left: 30px; top: 180px; width: 393px; height: 320px; position: absolute; z-index: 100;"
                         deg="0" mid="" type="chtml" fatherid="layer29E94011A71CBCF5399B5D74E1164BDE">
                        <div class="wp-chtml_content"
                             style="background: none; padding: 0px; border: 2px solid rgb(255, 255, 255); border-image: none; width: 389px; height: 316px; overflow: hidden;">

                            <div class="imgloading"
                                 id="loading_layerC1377ED4ED7A4DA719BBD6A15BC015F0"></div>
                            <IFRAME src="about:blank"
                                    frameborder="0" scrolling="no" style="width: 393px; height: 320px;"
                                    allowtransparency="true"
                                    onload='document.getElementById("loading_layerC1377ED4ED7A4DA719BBD6A15BC015F0").style.display = "none";'
                                    type=""></IFRAME>
                        </div>
                        <SCRIPT>
                            (function () {
                                var imgover = $('#loading_layerC1377ED4ED7A4DA719BBD6A15BC015F0').closest('.wp-chtml_content');
                                imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                            })()
                        </SCRIPT>
                    </div>
                    <SCRIPT>                 $('#layerC1377ED4ED7A4DA719BBD6A15BC015F0').triggerHandler('layer_ready');</SCRIPT>
                </div>
            </div>
            <SCRIPT>
                var $fullwidth = $('#layer29E94011A71CBCF5399B5D74E1164BDE .full_width');
                $fullwidth.css({
                    left: 0 - $('#canvas').offset().left + $('#scroll_container').offset().left - $('#scroll_container').scrollLeft() - $.parseInteger($('#canvas').css("borderLeftWidth")),
                    width: $('#scroll_container_bg').width()
                });
                $(function () {
                    var videoParams = {
                        "id": "layer29E94011A71CBCF5399B5D74E1164BDE",
                        "bgauto": null,
                        "ctauto": null,
                        "bVideouse": null,
                        "cVideouse": null,
                        "bgvHeight": null,
                        "bgvWidth": null
                    };
                    fullcolumn_bgvideo_init_func(videoParams);
                });
            </SCRIPT>

            <div class="full_column" id="layer41806514BC67303D3ED21D79FC267930"
                 style="top: 2037px; width: 1200px; height: 58px; position: absolute; z-index: 131;">
                <div class="full_width"
                     style='background-position: center; height: 58px; position: absolute; background-image: url("http://tpl-cf61794.pic34.websiteonline.cn/upload/dbx.png"); background-repeat: no-repeat; background-color: transparent;'></div>
                <div class="full_content"
                     style="left: 0px; top: 0px; width: 1200px; height: 58px; margin-left: 0px; position: absolute;"></div>
            </div>
            <SCRIPT>
                var $fullwidth = $('#layer41806514BC67303D3ED21D79FC267930 .full_width');
                $fullwidth.css({
                    left: 0 - $('#canvas').offset().left + $('#scroll_container').offset().left - $('#scroll_container').scrollLeft() - $.parseInteger($('#canvas').css("borderLeftWidth")),
                    width: $('#scroll_container_bg').width()
                });
                $(function () {
                    var videoParams = {
                        "id": "layer41806514BC67303D3ED21D79FC267930",
                        "bgauto": null,
                        "ctauto": null,
                        "bVideouse": null,
                        "cVideouse": null,
                        "bgvHeight": null,
                        "bgvWidth": null
                    };
                    fullcolumn_bgvideo_init_func(videoParams);
                });
            </SCRIPT>

            <div class="cstlayer" id="layer34ABEAD75D5CC18A041895B159EB0C40"
                 style="left: 640px; top: 2115px; width: 82px; height: 73px; position: absolute; z-index: 136;"
                 deg="0" mid="" type="media">
                <SCRIPT>
                    create_pc_media_set_pic('layer34ABEAD75D5CC18A041895B159EB0C40', false);
                </SCRIPT>

                <div class="wp-media_content"
                     style="border-width: 0px; border-style: solid; padding: 0px; width: 82px; height: 73px; overflow: hidden;"
                     type="0">
                    <div class="img_over"
                         style="border-width: 0px; border-color: transparent; width: 82px; height: 73px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image"
                             id="wp-media-image_layer34ABEAD75D5CC18A041895B159EB0C40"
                             style="width: 82px; height: 73px;"
                             src="index/blank.gif" type="zoom"
                             data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/lx2.png">
                    </div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layer34ABEAD75D5CC18A041895B159EB0C40');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layer34ABEAD75D5CC18A041895B159EB0C40').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer4023C11E7F75E775EEAF17F9DFC8B804"
                 style="left: 419px; top: 2139px; width: 102px; height: 42px; position: absolute; z-index: 133;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 102px; height: 42px; display: block; -ms-word-wrap: break-word;"><span
                            style="font-family: 微软雅黑; font-size: 24px;"><STRONG>新闻动态</STRONG></span></div>
            </div>
            <SCRIPT>                 $('#layer4023C11E7F75E775EEAF17F9DFC8B804').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerE63E115748267EAE0AD4B7BECEEA7687"
                 style="left: 519px; top: 2151px; width: 113px; height: 21px; position: absolute; z-index: 135;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 113px; height: 21px; display: block; -ms-word-wrap: break-word;"><span
                            style="color: rgb(204, 204, 204); text-transform: uppercase; font-size: 14px;">News
Center</span></div>
            </div>
            <SCRIPT>                 $('#layerE63E115748267EAE0AD4B7BECEEA7687').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerEFF873442C95C9DE6C17ED8D1ECF453C"
                 style="left: 28px; top: 2249px; width: 1141px; height: 508px; position: absolute; z-index: 141;"
                 deg="0" mid="" type="article_list">
                <SCRIPT>
                    (function () {
                        var param = {"layer_id": "layerEFF873442C95C9DE6C17ED8D1ECF453C", "articleStyle": "skin3"};
                        layer_article_list_init_func(param);
                    })()
                </SCRIPT>

                <div class="wp-article_content wp-article_list_content" style="border-width: 0px; border-color: transparent; width: 1160px; height: 508px; overflow: hidden;">
                    <div class="wp-article_css wp-article_list_css" style="display: none;" skin="skin3">
                        <SCRIPT type="text/javascript">


                            if ("skin3" === "skin3") {
                                $(function () {
                                    $('#layerEFF873442C95C9DE6C17ED8D1ECF453C').find("ul li").hover(function () {
                                        $(this).removeClass("lihout").addClass("lihover");
                                    }, function () {
                                        $(this).removeClass("lihover").addClass("lihout");
                                    });

                                });
                            }
                        </SCRIPT>
                    </div>
                    <div class="article_list-layerEFF873442C95C9DE6C17ED8D1ECF453C" style="overflow: hidden;">
                        <ul>
                            <?php
                                $pageCount = 8;
                                $begin = 0;

                                $result = $news_dao->listNews($begin, $pageCount, 0,1);
                                while ($row = $result->fetch()) {
                                $news = new news($row);
                            ?>
                            <li class="lihout" style="width: 260px; margin-right: 22px; margin-bottom: 0px;">
                                <div class="imgloading" style="width: 258px; height: 148px;"></div>
                                <P class="img"
                                   style="width: 260px; height: 150px; text-align: center; overflow: hidden; position: relative;">
                                    <A
                                            class="articleid"
                                            href="/news/essay/?id=<?php echo $news->id?>"
                                            articleid="25"><img class="wp-article_list-thumbnail img_lazy_load"
                                                                style="width: 260px; height: 150px; position: relative;"
                                                                onload="set_thumb_layerEFF873442C95C9DE6C17ED8D1ECF453C(this);"
                                                                alt="<?php echo $news->sub_title?>"
                                                                src="index/blank.gif"
                                                                data-original="<?php echo $news->cover_url?>">
                                    </A>
                                </P>
                                <div class="wp-new-article-style-c">
                                    <P class="title"><A title="<?php echo $news->title?>" class="articleid"
                                                        href="/news/essay/?id=<?php echo $news->id?>"
                                                        articleid="25"><?php echo $news->title?></A></P>
                                    <P class="time"><span class="wp-new-ar-pro-time"><?php echo $news->create_date?></span></P>
                                    <P class="abstract" style="height: 36px;overflow: hidden;"><?php echo $news->sub_title?></P></div>
                            </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="article_list_save_itemList" style="display: none;" pagepar="p_article_list"
                         pageop="0" pageskip="1" memberartshow="off" imgtnode="Tile" imghnode="150"
                         imgwnode="260" getparamcategoryid="empty" articlestyle="skin3" sortvalue="desc"
                         sorttype="i_order" listnum="8" titlewordnum="15" introwordnum="20" isshowdots="Yes"
                         linkdetailurl="8" isshowmorecn="No" isshowmore="No" linkmoreurl="3"
                         linkcategoryurl="3" articletags="" articlecategroies="1,2,3,4" showpager="0"
                         morealign="left" pageralign="right" pagernum="每页显示文章数" pagerstyle="default/skin1"
                         opendetailurl="0" openmoreurl="0" opencategoryurl="0"></div>
                </div>
                <SCRIPT language="javascript">
                    layer_img_lzld('layerEFF873442C95C9DE6C17ED8D1ECF453C');

                </SCRIPT>
                <liNK href="index/shopping_cart.css" rel="stylesheet" type="text/css">
                <SCRIPT type="text/javascript">

                    (function () {
                        var params = {"layer_id": "layerEFF873442C95C9DE6C17ED8D1ECF453C", "islogin": 0};
                        layer_article_list_checkid_func(params);

                        var $curlayer = $('#layerEFF873442C95C9DE6C17ED8D1ECF453C');
                        $curlayer.find('.mask').mouseover(function () {
                            var effect = $curlayer.data('wopop_imgeffects');
                            if (effect) {
                                $(this).css('z-index', '-1001');
                            }
                        })

                        $curlayer.find('.wp-article_list-thumbnail').mouseover(function (event) {
                            $(this).data('over', 1);
                            var running = $(this).data('run');
                            var effect = $curlayer.data('wopop_imgeffects');
                            var $this = $(this);
                            if (effect && running != 1) {
                                $this.setimgEffects(true, effect, 1);
                                var effectrole = effect['effectrole'];
                                var dset = effect['dset'];
                                if (effectrole != 'dantu' && typeof(dset) != "undefined") {
                                    var temp_effect = {};
                                    temp_effect['type'] = effect['type'];
                                    temp_effect['effectrole'] = 'dantu';
                                    temp_effect['effect'] = effect['dset']['effect'];
                                    temp_effect['duration'] = effect['dset']['duration'];
                                    $this.setimgEffects(true, temp_effect, 1);
                                }
                            }
                        });

                    })();
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layerEFF873442C95C9DE6C17ED8D1ECF453C').triggerHandler('layer_ready');</SCRIPT>
        </div>
    </div>
    <!-- 底部 开始 -->
    <?php
    include './include/footer.php'
    ?>
    <!-- 底部 结束 -->
    <!--//wp-mobile_navigate end--> </div>
    <SCRIPT type="text/javascript">
        var b;
        doc_end_exec();
    </SCRIPT>

<SCRIPT>
    function wx_open_login_dialog(func) {
        func(true);
    }
</SCRIPT>

<SCRIPT>
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
</SCRIPT>
</BODY>
</HTML>
