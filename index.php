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
    <TITLE>您的网站名称</TITLE>
    <META name="keywords" content="网站关键字">
    <META name="description" content="网站描述">
    <liNK href="http://static.websiteonline.cn/website/template/default/images/favicon.ico" rel="shortcut icon"
          type="image/x-icon">
    <liNK href="http://static.websiteonline.cn/website/template/default/images/favicon.ico" rel="Bookmark">
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
    <META name="GENERATOR" content="MSHTML 11.00.10570.1001">
</HEAD>
<BODY><INPUT name="_user_level_val" type="hidden" value="2">
<?php
require_once 'entrance.php';
$banner_dao = new index_banner_dao();
$index_content_dao = new index_content_dao();
$index_about_us_dao = new index_about_us_dao();
$result = $index_about_us_dao->getOne(1);
$about_us = new about_us($result->fetch());
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
        'p_rooturl': 'http://education-300.view.sitestar.cn',
        'static_rooturl': 'http://static.websiteonline.cn/website',
        'interface_locale': "zh_CN",
        'dev_mode': "0",
        'getsession': ''
    }, {
        "phpsessionid": "",
        "punyurl": "\/\/education-300.view.sitestar.cn",
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
                                style="line-height: 30.8px; font-size: 14px;"><?php echo $index_content1->content?></span></FONT>
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
                                style="line-height: 30.8px; font-size: 14px;"><?php echo $index_content2->content?></span></FONT>
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
                                style="line-height: 30.8px; font-size: 14px;"><?php echo $index_content3->content?></span></FONT>
                </div>
            </div>
            <SCRIPT>                 $('#layer765C5C507E844FAF2D960F41F74D27D7').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerBD6CD19F1B129784BB1A400B5A81AE7D"
                 style="left: 30px; top: 768px; width: 230px; height: 126px; position: absolute; z-index: 114;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 230px; height: 126px; display: block; -ms-word-wrap: break-word;"><span
                            style="color: rgb(255, 255, 255); line-height: 220%; font-family: 微软雅黑; font-size: 14px;"><?php echo $index_content4->content?></span>
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
                            style="text-transform: uppercase; font-size: 16px;">Popular
course</span></div>
            </div>
            <SCRIPT>                 $('#layerF00418CE7523438895E5C4AC494E5AD9').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer164697F16D60E88004A46C3B41FD4377"
                 style="left: 909px; top: 1115px; width: 287px; height: 187px; display: block; position: absolute; z-index: 140;"
                 deg="0" mid="" type="media">
                <SCRIPT>
                    create_pc_media_set_pic('layer164697F16D60E88004A46C3B41FD4377', false);
                </SCRIPT>

                <div class="wp-media_content"
                     style="border-width: 0px; border-style: solid; padding: 0px; width: 287px; height: 187px; overflow: hidden;"
                     type="0">
                    <div class="img_over"
                         style="border-width: 0px; border-color: transparent; width: 287px; height: 187px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <A class="media_link" href="http://education-300.view.sitestar.cn/page5?product_category=5"
                           target="_self"><img class="img_lazy_load paragraph_image"
                                               id="wp-media-image_layer164697F16D60E88004A46C3B41FD4377"
                                               style="left: -18px; top: 0px; width: auto; height: 187px; position: relative;"
                                               src="index/blank.gif" type="zoom"
                                               data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/eayy.jpg">
                        </A></div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layer164697F16D60E88004A46C3B41FD4377');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layer164697F16D60E88004A46C3B41FD4377').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer33E6BC946B69AC4F1FBDB67471967E1A"
                 style="left: 303px; top: 1116px; width: 287px; height: 187px; display: block; position: absolute; z-index: 130;"
                 deg="0" mid="" type="media">
                <SCRIPT>
                    create_pc_media_set_pic('layer33E6BC946B69AC4F1FBDB67471967E1A', false);
                </SCRIPT>

                <div class="wp-media_content"
                     style="border-width: 0px; border-style: solid; padding: 0px; width: 287px; height: 187px; overflow: hidden;"
                     type="0">
                    <div class="img_over"
                         style="border-width: 0px; border-color: transparent; width: 287px; height: 187px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <A class="media_link" href="http://education-300.view.sitestar.cn/page5?product_category=2"
                           target="_self"><img class="img_lazy_load paragraph_image"
                                               id="wp-media-image_layer33E6BC946B69AC4F1FBDB67471967E1A"
                                               style="left: -16px; top: 0px; width: auto; height: 187px; position: relative;"
                                               src="index/blank.gif" type="zoom"
                                               data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/apa1.jpg">
                        </A></div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layer33E6BC946B69AC4F1FBDB67471967E1A');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layer33E6BC946B69AC4F1FBDB67471967E1A').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerC7A8A47396ED38044DBC26BB7BB85C2B"
                 style="left: 3px; top: 1116px; width: 287px; height: 187px; display: block; position: absolute; z-index: 126;"
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
                        <A class="media_link" href="http://education-300.view.sitestar.cn/page5?product_category=3"
                           target="_self"><img class="img_lazy_load paragraph_image"
                                               id="wp-media-image_layerC7A8A47396ED38044DBC26BB7BB85C2B"
                                               style="left: -14px; top: 0px; width: auto; height: 187px; position: relative;"
                                               src="index/blank.gif" type="zoom"
                                               data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/yjw9.jpg">
                        </A></div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layerC7A8A47396ED38044DBC26BB7BB85C2B');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layerC7A8A47396ED38044DBC26BB7BB85C2B').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer8F372576232708B282087CD34B0B30D3"
                 style="left: 608px; top: 1116px; width: 287px; height: 187px; display: block; position: absolute; z-index: 143;"
                 deg="0" mid="" type="media">
                <SCRIPT>
                    create_pc_media_set_pic('layer8F372576232708B282087CD34B0B30D3', false);
                </SCRIPT>

                <div class="wp-media_content"
                     style="border-width: 0px; border-style: solid; padding: 0px; width: 287px; height: 187px; overflow: hidden;"
                     type="0">
                    <div class="img_over"
                         style="border-width: 0px; border-color: transparent; width: 287px; height: 187px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <A class="media_link" href="http://education-300.view.sitestar.cn/page5?product_category=4"
                           target="_self"><img class="img_lazy_load paragraph_image"
                                               id="wp-media-image_layer8F372576232708B282087CD34B0B30D3"
                                               style="left: -13px; top: 0px; width: auto; height: 187px; position: relative;"
                                               src="index/blank.gif" type="zoom"
                                               data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/4mo1.jpg">
                        </A></div>
                </div>
                <SCRIPT>
                    (function () {
                        layer_media_init_func('layer8F372576232708B282087CD34B0B30D3');
                    })()
                </SCRIPT>
            </div>
            <SCRIPT>                 $('#layer8F372576232708B282087CD34B0B30D3').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerA080106D66F6A009C3756873A6393E52"
                 style="left: 919px; top: 1305px; width: 142px; height: 29px; display: block; position: absolute; z-index: 139;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 142px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#ff9900" face="微软雅黑"><span
                                style="line-height: 25.2px; font-size: 18px;">跆拳道课程培训</span></FONT></div>
            </div>
            <SCRIPT>                 $('#layerA080106D66F6A009C3756873A6393E52').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer9B4CF40364FA3215BEFC694CAECFD00D"
                 style="left: 618px; top: 1307px; width: 130px; height: 29px; display: block; position: absolute; z-index: 138;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 130px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#ff9900" face="微软雅黑"><span
                                style="line-height: 25.2px; font-size: 20px;">音乐课程培训</span></FONT></div>
            </div>
            <SCRIPT>                 $('#layer9B4CF40364FA3215BEFC694CAECFD00D').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerABC5E0BE72E26548F1E2DFE64BF5AD3A"
                 style="left: 5px; top: 1314px; width: 123px; height: 29px; display: block; position: absolute; z-index: 132;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 123px; height: 29px; display: block; -ms-word-wrap: break-word;"><span
                            style="color: rgb(255, 153, 0); font-family: 微软雅黑; font-size: 20px;">美术课程培训</span></div>
            </div>
            <SCRIPT>                 $('#layerABC5E0BE72E26548F1E2DFE64BF5AD3A').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer146370573CAFEC71BB3BBD9437743995"
                 style="left: 315px; top: 1315px; width: 141px; height: 29px; display: block; position: absolute; z-index: 137;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 141px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#ff9900" face="微软雅黑"><span
                                style="line-height: 25.2px; font-size: 20px;">外语课程培训</span></FONT></div>
            </div>
            <SCRIPT>                 $('#layer146370573CAFEC71BB3BBD9437743995').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerEEEFC1C53F1F19855E64DCFFE57A321B"
                 style="left: 923px; top: 1348px; width: 267px; height: 83px; position: absolute; z-index: 127;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 267px; height: 83px; display: block; -ms-word-wrap: break-word;"><span
                            style='color: rgb(85, 85, 85); line-height: 22px; font-family: Themege02, "Lantinghei SC", HiraginoSansGB-W3, Arial, "Microsoft YaHei", STHeiti, "WenQuanYi Micro Hei", sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);'>面对现代社会人与自然关系的变质，橙长汇为孩子们订制了一系列建设性的户外教育解决方案。</span>
                </div>
            </div>
            <SCRIPT>                 $('#layerEEEFC1C53F1F19855E64DCFFE57A321B').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layer0527EF3212AD0BAEDC2BE3F2ADDFD4B7"
                 style="left: 622px; top: 1350px; width: 267px; height: 83px; position: absolute; z-index: 128;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 267px; height: 83px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            face="微软雅黑"><span
                                style="line-height: 24.7px; font-size: 13px;">根据孩子的学习特点,集启橙十年语言能力教学精华,以主题聚焦,跨学科,升读学习为特色,提供灵活,快速的定制化语言学习解决方案。</span></FONT>
                </div>
            </div>
            <SCRIPT>                 $('#layer0527EF3212AD0BAEDC2BE3F2ADDFD4B7').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerF3EFBD263599C8E0F3EFC7A54BF09204"
                 style="left: 314px; top: 1350px; width: 267px; height: 83px; position: absolute; z-index: 142;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 267px; height: 83px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            face="微软雅黑"><span
                                style="line-height: 24.7px; font-size: 13px;">原版美国小学进口教材,全学科交叉教学,未来领导力培养贯穿始终,帮助学员建立英语思维,获得综合运用英语的能力</span></FONT>
                </div>
            </div>
            <SCRIPT>                 $('#layerF3EFBD263599C8E0F3EFC7A54BF09204').triggerHandler('layer_ready');</SCRIPT>

            <div class="cstlayer" id="layerF4E16F14100DF0A7ABF8A0F643BA11D6"
                 style="left: 3px; top: 1352px; width: 267px; height: 83px; position: absolute; z-index: 134;"
                 deg="0" mid="" type="title">
                <div class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 267px; height: 83px; display: block; -ms-word-wrap: break-word;"><span
                            style="line-height: 190%; font-family: 微软雅黑; font-size: 13px;">全球较大教育出版集团原版教材,侧重幼儿早期思维训练和行为习惯养成,全面引导和激发幼儿在语言学习方面的兴趣</span>
                </div>
            </div>
            <SCRIPT>                 $('#layerF4E16F14100DF0A7ABF8A0F643BA11D6').triggerHandler('layer_ready');</SCRIPT>

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
                            <li class="lihout" style="width: 260px; margin-right: 22px; margin-bottom: 0px;">
                                <div class="imgloading" style="width: 258px; height: 148px;"></div>
                                <P class="img"
                                   style="width: 260px; height: 150px; text-align: center; overflow: hidden; position: relative;">
                                    <A
                                            class="articleid"
                                            href="http://education-300.view.sitestar.cn/page8?article_id=25"
                                            articleid="25"><img class="wp-article_list-thumbnail img_lazy_load"
                                                                style="width: 260px; height: 150px; position: relative;"
                                                                onload="set_thumb_layerEFF873442C95C9DE6C17ED8D1ECF453C(this);"
                                                                alt="“小刘星”成高考明星 张一山成人礼上念师恩"
                                                                src="index/blank.gif"
                                                                data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/apa1.jpg">
                                    </A>
                                </P>
                                <div class="wp-new-article-style-c">
                                    <P class="title"><A title="“小刘星”成高考明星 张一山成人礼上念师恩" class="articleid"
                                                        href="http://education-300.view.sitestar.cn/page8?article_id=25"
                                                        articleid="25">“小刘星”成高考明星 张一山成......</A></P>
                                    <P class="time"><span class="wp-new-ar-pro-time">2014-09-24</span></P>
                                    <P class="abstract">开学前夕，大型家庭情景剧《家有儿女》中“......</P></div>
                                <INPUT class="articleid" type="hidden" data-title="“小刘星”成高考明星 张一山成人礼上念师恩">
                                <INPUT class="abstract" type="hidden"
                                       data-desc="开学前夕，大型家庭情景剧《家有儿女》中“小刘星”的饰演者——张一山，为自己跨入18岁专门举行了成年礼，并 参加《山起云涌 一山爱电影》特别节目录制。张一山出场便是一首劲爆的《惊声尖叫》歌，与韩国“舞王”“斗舞”，较令人动情处，张一山与18名同龄人共同庄严宣誓，回顾成 长成才历程！张一山还高兴“秀”起今年考取北京电影学院。他深情回顾高考前，在巨人学校一周每天8小时补课情景。他曾坦言，能考上北影，巨人学校功不可没。在这较激动时刻，张一山感念师恩，特别邀请巨人教育集团董事长兼总裁尹雄，尹校长也高兴前来祝贺他18岁成人典礼">
                            </li>
                            <li class="lihout" style="width: 260px; margin-right: 22px; margin-bottom: 0px;">
                                <div class="imgloading" style="width: 258px; height: 148px;"></div>
                                <P class="img"
                                   style="width: 260px; height: 150px; text-align: center; overflow: hidden; position: relative;">
                                    <A
                                            class="articleid"
                                            href="http://education-300.view.sitestar.cn/page8?article_id=24"
                                            articleid="24"><img class="wp-article_list-thumbnail img_lazy_load"
                                                                style="width: 260px; height: 150px; position: relative;"
                                                                onload="set_thumb_layerEFF873442C95C9DE6C17ED8D1ECF453C(this);"
                                                                alt="2010年我们的教师节到底应该怎么过"
                                                                src="index/blank.gif"
                                                                data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/p6s4.jpg">
                                    </A>
                                </P>
                                <div class="wp-new-article-style-c">
                                    <P class="title"><A title="2010年我们的教师节到底应该怎么过" class="articleid"
                                                        href="http://education-300.view.sitestar.cn/page8?article_id=24"
                                                        articleid="24">2010年我们的教师节到底应该......</A></P>
                                    <P class="time"><span class="wp-new-ar-pro-time">2014-09-24</span></P>
                                    <P class="abstract">设立教师节的初衷即是：倡导尊师重教，国家......</P></div>
                                <INPUT class="articleid" type="hidden" data-title="2010年我们的教师节到底应该怎么过">
                                <INPUT class="abstract" type="hidden"
                                       data-desc="设立教师节的初衷即是：倡导尊师重教，国家保障老师合法权益，勉励老师为教育事业作出更大贡献。但近几年，每到教师节来临之际，坊间谈论的是送礼，我们 耳边聒噪的是送礼，有人直接称，教师节已经异化成了送礼节。前几天，教育部网站刊登了十所知名中小学联合向全国教师发出的倡议书，倡导全国教师反对利用职 务之便谋取私利，不收受学生、家长的财物。甚至，还有人建议取消教师节。教师节的本来面目越来越模糊了，这不能不让人痛心。送礼这个话题不是不能谈，但教 师节的内涵绝不只是送礼，何况礼不单指礼品、礼物，还有礼节、礼仪。如果把教师节当做送礼(礼品)节，无疑是狭隘的。">
                            </li>
                            <li class="lihout" style="width: 260px; margin-right: 22px; margin-bottom: 0px;">
                                <div class="imgloading" style="width: 258px; height: 148px;"></div>
                                <P class="img"
                                   style="width: 260px; height: 150px; text-align: center; overflow: hidden; position: relative;">
                                    <A
                                            class="articleid"
                                            href="http://education-300.view.sitestar.cn/page8?article_id=23"
                                            articleid="23"><img class="wp-article_list-thumbnail img_lazy_load"
                                                                style="width: 260px; height: 150px; position: relative;"
                                                                onload="set_thumb_layerEFF873442C95C9DE6C17ED8D1ECF453C(this);"
                                                                alt="教育部：教师大交流遏止“择校热”"
                                                                src="index/blank.gif"
                                                                data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/fcs4.jpg">
                                    </A>
                                </P>
                                <div class="wp-new-article-style-c">
                                    <P class="title"><A title="教育部：教师大交流遏止“择校热”" class="articleid"
                                                        href="http://education-300.view.sitestar.cn/page8?article_id=23"
                                                        articleid="23">教育部：教师大交流遏止“择校热......</A></P>
                                    <P class="time"><span class="wp-new-ar-pro-time">2014-09-24</span></P>
                                    <P class="abstract">管培俊：近年来，国家出台一系列政策措施，......</P></div>
                                <INPUT class="articleid" type="hidden" data-title="教育部：教师大交流遏止“择校热”">
                                <INPUT class="abstract" type="hidden"
                                       data-desc="管培俊：近年来，国家出台一系列政策措施，教师待遇总体上逐步提高。一是在基本工资标准基础上，对中小学教师基本工资标准提高10%，并计入离退休费基 数。二是实行义务教育学校教师绩效工资制度。2009年增加财政支出1000多亿，中小学教师尤其是农村教师平均工资水平大幅提升。三是建立教龄津贴、班 主任津贴、特级教师津贴、特殊教育津贴等。四是对在艰苦边远地区工作的中小学教师发放津贴。">
                            </li>
                            <li class="lihout" style="width: 260px; margin-right: 22px; margin-bottom: 0px;">
                                <div class="imgloading" style="width: 258px; height: 148px;"></div>
                                <P class="img"
                                   style="width: 260px; height: 150px; text-align: center; overflow: hidden; position: relative;">
                                    <A
                                            class="articleid"
                                            href="http://education-300.view.sitestar.cn/page8?article_id=22"
                                            articleid="22"><img class="wp-article_list-thumbnail img_lazy_load"
                                                                style="width: 260px; height: 150px; position: relative;"
                                                                onload="set_thumb_layerEFF873442C95C9DE6C17ED8D1ECF453C(this);"
                                                                alt="俞敏洪：善于停止也是一种幸福"
                                                                src="index/blank.gif"
                                                                data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/87up.jpg">
                                    </A>
                                </P>
                                <div class="wp-new-article-style-c">
                                    <P class="title"><A title="俞敏洪：善于停止也是一种幸福" class="articleid"
                                                        href="http://education-300.view.sitestar.cn/page8?article_id=22"
                                                        articleid="22">俞敏洪：善于停止也是一种幸福</A></P>
                                    <P class="time"><span class="wp-new-ar-pro-time">2014-09-24</span></P>
                                    <P class="abstract">俞敏洪：善于停止也是一种幸福</P></div>
                                <INPUT class="articleid" type="hidden" data-title="俞敏洪：善于停止也是一种幸福">
                                <INPUT class="abstract" type="hidden" data-desc="俞敏洪：善于停止也是一种幸福"></li>
                            <li class="lihout" style="width: 260px; margin-right: 22px; margin-bottom: 0px;">
                                <div class="imgloading" style="width: 258px; height: 148px;"></div>
                                <P class="img"
                                   style="width: 260px; height: 150px; text-align: center; overflow: hidden; position: relative;">
                                    <A
                                            class="articleid"
                                            href="http://education-300.view.sitestar.cn/page8?article_id=21"
                                            articleid="21"><img class="wp-article_list-thumbnail img_lazy_load"
                                                                style="width: 260px; height: 150px; position: relative;"
                                                                onload="set_thumb_layerEFF873442C95C9DE6C17ED8D1ECF453C(this);"
                                                                alt="《孙子兵法》与现代企业战略管理"
                                                                src="index/blank.gif"
                                                                data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/716k.jpg">
                                    </A>
                                </P>
                                <div class="wp-new-article-style-c">
                                    <P class="title"><A title="《孙子兵法》与现代企业战略管理" class="articleid"
                                                        href="http://education-300.view.sitestar.cn/page8?article_id=21"
                                                        articleid="21">《孙子兵法》与现代企业战略管理</A></P>
                                    <P class="time"><span class="wp-new-ar-pro-time">2014-09-24</span></P>
                                    <P class="abstract">《孙子兵法》与现代企业战略管理</P></div>
                                <INPUT class="articleid" type="hidden" data-title="《孙子兵法》与现代企业战略管理">
                                <INPUT class="abstract" type="hidden" data-desc="《孙子兵法》与现代企业战略管理"></li>
                            <li class="lihout" style="width: 260px; margin-right: 22px; margin-bottom: 0px;">
                                <div class="imgloading" style="width: 258px; height: 148px;"></div>
                                <P class="img"
                                   style="width: 260px; height: 150px; text-align: center; overflow: hidden; position: relative;">
                                    <A
                                            class="articleid"
                                            href="http://education-300.view.sitestar.cn/page8?article_id=20"
                                            articleid="20"><img class="wp-article_list-thumbnail img_lazy_load"
                                                                style="width: 260px; height: 150px; position: relative;"
                                                                onload="set_thumb_layerEFF873442C95C9DE6C17ED8D1ECF453C(this);"
                                                                alt="为什么兴起“体验式培训”的深层原因"
                                                                src="index/blank.gif"
                                                                data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/d7pq.jpg">
                                    </A>
                                </P>
                                <div class="wp-new-article-style-c">
                                    <P class="title"><A title="为什么兴起“体验式培训”的深层原因" class="articleid"
                                                        href="http://education-300.view.sitestar.cn/page8?article_id=20"
                                                        articleid="20">为什么兴起“体验式培训”的深层......</A></P>
                                    <P class="time"><span class="wp-new-ar-pro-time">2014-09-24</span></P>
                                    <P class="abstract">为什么兴起“体验式培训”的深层原因</P></div>
                                <INPUT class="articleid" type="hidden" data-title="为什么兴起“体验式培训”的深层原因">
                                <INPUT class="abstract" type="hidden" data-desc="为什么兴起“体验式培训”的深层原因"></li>
                            <li class="lihout" style="width: 260px; margin-right: 22px; margin-bottom: 0px;">
                                <div class="imgloading" style="width: 258px; height: 148px;"></div>
                                <P class="img"
                                   style="width: 260px; height: 150px; text-align: center; overflow: hidden; position: relative;">
                                    <A
                                            class="articleid"
                                            href="http://education-300.view.sitestar.cn/page8?article_id=19"
                                            articleid="19"><img class="wp-article_list-thumbnail img_lazy_load"
                                                                style="width: 260px; height: 150px; position: relative;"
                                                                onload="set_thumb_layerEFF873442C95C9DE6C17ED8D1ECF453C(this);"
                                                                alt="什么是授教时刻？"
                                                                src="index/blank.gif"
                                                                data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/87up.jpg">
                                    </A>
                                </P>
                                <div class="wp-new-article-style-c">
                                    <P class="title"><A title="什么是授教时刻？" class="articleid"
                                                        href="http://education-300.view.sitestar.cn/page8?article_id=19"
                                                        articleid="19">什么是授教时刻？</A></P>
                                    <P class="time"><span class="wp-new-ar-pro-time">2014-09-24</span></P>
                                    <P
                                            class="abstract">&nbsp;&nbsp;&nbsp;&nbsp;一个年轻的勇士想知道善与恶的区别......</P></div>
                                <INPUT class="articleid" type="hidden" data-title="什么是授教时刻？">
                                <INPUT class="abstract" type="hidden"
                                       data-desc="    一个年轻的勇士想知道善与恶的区别。他长途跋涉去寻找一个名叫古鲁的人，因为别人告诉他，古鲁能给予他答案。当这个年轻人到达的时候，古鲁正闭着他的双眼 在思考。他说：“古鲁，我前来是想知道善与恶的区别。”古鲁没有回答。年轻人又说到：“古鲁，请你帮助我，我想知道善与恶的区别。”仍然没有回答。年轻人 变得有点恼怒，拔出他的剑说道：“古鲁，如果你不告诉我它们的区别，我将把你的头砍下来。”还是没有回答。年轻人把剑放在了古鲁的脖子上说道：“较后一次 机会，给我答案或者你的头。”仍然没有回答。勇士举起了他的剑，正当他正要砍下的时候，古鲁睁开了双眼答道：“这就是恶。”然后再一次闭上了眼睛。年轻勇 士突然克服了情感瘫痪在地上。古鲁愿意冒险用生命向他诠释什么是真正的邪恶，勇士被他折服了，陷入了沉思，想到了那些在战场上被他杀害的人，他怎么可以再 生杀念呢！勇士对他以前的罪孽感到抓狂。他变得无法入睡，整个晚上辗转难眠，也拒绝吃东西。这样的状态持续了几">
                            </li>
                            <li class="lihout" style="width: 260px; margin-right: 22px; margin-bottom: 0px;">
                                <div class="imgloading" style="width: 258px; height: 148px;"></div>
                                <P class="img"
                                   style="width: 260px; height: 150px; text-align: center; overflow: hidden; position: relative;">
                                    <A
                                            class="articleid"
                                            href="http://education-300.view.sitestar.cn/page8?article_id=18"
                                            articleid="18"><img class="wp-article_list-thumbnail img_lazy_load"
                                                                style="width: 260px; height: 150px; position: relative;"
                                                                onload="set_thumb_layerEFF873442C95C9DE6C17ED8D1ECF453C(this);"
                                                                alt="体验式培训是什么？"
                                                                src="index/blank.gif"
                                                                data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/so36.jpg">
                                    </A>
                                </P>
                                <div class="wp-new-article-style-c">
                                    <P class="title"><A title="体验式培训是什么？" class="articleid"
                                                        href="http://education-300.view.sitestar.cn/page8?article_id=18"
                                                        articleid="18">体验式培训是什么？</A></P>
                                    <P class="time"><span class="wp-new-ar-pro-time">2014-09-24</span></P>
                                    <P class="abstract">&nbsp;对于学习者，如果一节课具有惊奇的成分，......</P></div>
                                <INPUT class="articleid" type="hidden" data-title="体验式培训是什么？">
                                <INPUT class="abstract" type="hidden"
                                       data-desc=" 对于学习者，如果一节课具有惊奇的成分，并且设法迫使学习者完成一些他们一直认为不可能的事情的话，那就成为了探索。探索中有规定，并且这个规定为参加提 供既独特又与之相关的经验。探索中有挑战，参与者处在成功与失败的边缘，并且发现二者都同样有意义。探索中有冒险，不是实际身体上的冒险，而是当参与者之 前见到正常的结果后，情感上和“明显的”身体上的冒险。参与任何项目者都需要安全感，像这样他们可以讲出他们的意愿并且报导自己推到一个新的极限，更为重 要的是，体验中“啊哈！”的惊喜仅仅能够在安全和真正有趣的环境下发生。">
                            </li>
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
