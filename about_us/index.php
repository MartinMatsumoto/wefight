<?php
require_once '../entrance.php';
$index_about_us_dao = new index_about_us_dao();
$index_content_dao = new index_content_dao();
$banner_dao = new index_banner_dao();

$result = $index_about_us_dao->getOne(1);
$about_us = new about_us($result->fetch());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="IE=11.0000" http-equiv="X-UA-Compatible" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>成都北武咏春国术馆</title>
    <meta name="keywords" content="网站关键字" />
    <meta name="description" content="网站描述" />
    <link href="/index/default.css" rel="stylesheet" type="text/css" />
    <link href="/index/media.css" rel="stylesheet" type="text/css" />
    <link href="/index/title.css" rel="stylesheet" type="text/css" />
    <link href="/index/unslider.css" rel="stylesheet" type="text/css" />
    <link href="/index/chtml.css" rel="stylesheet" type="text/css" />
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
        'p_rooturl': 'http://www.wefight.com',
        'static_rooturl': '/index',
        'interface_locale': "zh_CN",
        'dev_mode': "0",
        'getsession': ''
    }, {"phpsessionid": "", "punyurl": "\/\/www.wefight.com", "curr_locale": "zh_CN", "mscript_name": "", "converted": false}));

</script>
<link href="/index/common.css" rel="stylesheet" />
<div id="page_set_css">
</div>
<input name="page_id" id="page_id" type="hidden" value="4" rpid="4" />
<div class="scroll_contain" id="scroll_container">
    <div id="scroll_container_bg">
        &nbsp;
    </div>
    <script>
        initScrollcontainerHeight();
    </script>
    <div id="overflow_canvas_container">
        <div id="canvas" style="margin: 0px auto; width: 1200px; height: 1596px;">
            <!-- 顶部 开始 -->
            <?php
            include '../include/header.php'
            ?>
            <!-- 顶部 结束 -->
            <!-- banner 开始 -->
            <?php
            include '../include/banner.php'
            ?>
            <!-- banner 结束 -->
            <div class="cstlayer" id="layerC84DE14F9340CCF4F37E7F281BCA3699" style="left: 547px; top: 719px; width: 145px; height: 35px; display: block; position: absolute; z-index: 109;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 145px; height: 35px; display: block; -ms-word-wrap: break-word;">
                    <font color="#002d66" face="微软雅黑"><span style="color: rgb(247, 63, 65); line-height: 32.2px; letter-spacing: 4px; font-size: 30px;"><strong>关于我们</strong></span></font>
                </div>
            </div>
            <script>                 $('#layerC84DE14F9340CCF4F37E7F281BCA3699').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer2D56897E7FE33534739BE7D6F1A30DE4" style="left: 556px; top: 760px; width: 118px; height: 24px; display: block; position: absolute; z-index: 110;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 118px; height: 24px; display: block; -ms-word-wrap: break-word;">
                    <span style="background-color: rgb(255, 255, 255);"><font color="#222222" face="Arial, Helvetica, sans-serif"><span style="font: 12px/normal Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90); letter-spacing: 0px; white-space: pre-wrap;">—— &nbsp;</span><span style="line-height: normal; white-space: pre-wrap;">About us</span><span style="font: 12px/normal Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90); letter-spacing: 0px; white-space: pre-wrap;">&nbsp; ——</span></font></span>
                </div>
            </div>
            <script>                 $('#layer2D56897E7FE33534739BE7D6F1A30DE4').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerE9DBFCB980A026215F4247D7A3F49CC4" style="left: 562px; top: 825px; width: 602px; height: 363px; position: absolute; z-index: 111;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 602px; height: 363px; display: block; -ms-word-wrap: break-word;">
                    <div>
                        <font color="#ffffff" face="微软雅黑"><span style="color: rgb(102, 102, 102); line-height: 220%; font-size: 15px;">&nbsp; &nbsp;<?php echo $about_us->content?></span></font>
                    </div>
                </div>
            </div>
            <script>                 $('#layerE9DBFCB980A026215F4247D7A3F49CC4').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer1644F095A600EC622E1292598EE46065" style="left: 58px; top: 830px; width: 481px; height: 353px; position: absolute; z-index: 114;" deg="0" mid="" type="media">
                <script>
                    create_pc_media_set_pic('layer1644F095A600EC622E1292598EE46065', false);
                </script>
                <div class="wp-media_content" style="border-width: 0px; border-style: solid; padding: 0px; width: 481px; height: 353px; overflow: hidden;" type="0">
                    <div class="img_over" style="border-width: 0px; border-color: transparent; width: 481px; height: 353px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image" id="wp-media-image_layer1644F095A600EC622E1292598EE46065" style="left: -119px; top: 0px; width: auto; height: 353px; position: relative;" src="<?php echo $about_us->img_url?>" type="zoom" data-original="<?php echo $about_us->img_url?>" />
                    </div>
                </div>
                <script>
                    (function () {
                        layer_media_init_func('layer1644F095A600EC622E1292598EE46065');
                    })()
                </script>
            </div>
            <script>                 $('#layer1644F095A600EC622E1292598EE46065').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer4C3CAAA5F907D7FC48F45101EC3C84DC" style="left: 601px; top: 1257px; width: 300px; height: 296px; position: absolute; z-index: 98;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: rgb(48, 122, 213); padding: 0px; border: 0px solid transparent; border-image: none; width: 300px; height: 296px; overflow: hidden;">
                    <div class="imgloading" id="loading_layer4C3CAAA5F907D7FC48F45101EC3C84DC"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 300px; height: 296px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layer4C3CAAA5F907D7FC48F45101EC3C84DC&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layer4C3CAAA5F907D7FC48F45101EC3C84DC').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layer4C3CAAA5F907D7FC48F45101EC3C84DC').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerA6E27BE5105781728B68E21E43B249F6" style="left: 901px; top: 1257px; width: 299px; height: 296px; position: absolute; z-index: 113;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: rgb(233, 72, 174); padding: 0px; border: 0px solid transparent; border-image: none; width: 299px; height: 296px; overflow: hidden;">
                    <div class="imgloading" id="loading_layerA6E27BE5105781728B68E21E43B249F6"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 299px; height: 296px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layerA6E27BE5105781728B68E21E43B249F6&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layerA6E27BE5105781728B68E21E43B249F6').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layerA6E27BE5105781728B68E21E43B249F6').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerFAED1A5770088FB18D40CE8ED34CBF34" style="left: 300px; top: 1258px; width: 300px; height: 296px; position: absolute; z-index: 112;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: rgb(253, 199, 53); padding: 0px; border: 0px solid transparent; border-image: none; width: 300px; height: 296px; overflow: hidden;">
                    <div class="imgloading" id="loading_layerFAED1A5770088FB18D40CE8ED34CBF34"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 300px; height: 296px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layerFAED1A5770088FB18D40CE8ED34CBF34&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layerFAED1A5770088FB18D40CE8ED34CBF34').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layerFAED1A5770088FB18D40CE8ED34CBF34').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerB449C93206489368E9C038897A566A85" style="left: 0px; top: 1258px; width: 300px; height: 296px; position: absolute; z-index: 99;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: rgb(16, 196, 92); padding: 0px; border: 0px solid transparent; border-image: none; width: 300px; height: 296px; overflow: hidden;">
                    <div class="imgloading" id="loading_layerB449C93206489368E9C038897A566A85"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 300px; height: 296px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layerB449C93206489368E9C038897A566A85&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layerB449C93206489368E9C038897A566A85').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layerB449C93206489368E9C038897A566A85').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerDF8E351D7C49D692D8E4DD9D6032D5A9" style="left: 341px; top: 1273px; width: 72px; height: 72px; position: absolute; z-index: 118;" deg="0" mid="" type="media">
                <script>
                    create_pc_media_set_pic('layerDF8E351D7C49D692D8E4DD9D6032D5A9', false);
                </script>
                <div class="wp-media_content" style="border-width: 0px; border-style: solid; padding: 0px; width: 72px; height: 72px; overflow: hidden;" type="0">
                    <div class="img_over" style="border-width: 0px; border-color: transparent; width: 72px; height: 72px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image" id="wp-media-image_layerDF8E351D7C49D692D8E4DD9D6032D5A9" style="width: 72px; height: 72px;" src="/index/blank.gif" type="zoom" data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/bitcoin_head_mind_72px_1140509_easyicon.png" />
                    </div>
                </div>
                <script>
                    (function () {
                        layer_media_init_func('layerDF8E351D7C49D692D8E4DD9D6032D5A9');
                    })()
                </script>
            </div>
            <script>                 $('#layerDF8E351D7C49D692D8E4DD9D6032D5A9').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer7FE1302749D7334B89385A7C1BCC8D8F" style="left: 650px; top: 1275px; width: 61.56px; height: 58px; position: absolute; z-index: 125;" deg="0" mid="" type="media">
                <script>
                    create_pc_media_set_pic('layer7FE1302749D7334B89385A7C1BCC8D8F', false);
                </script>
                <div class="wp-media_content" style="border-width: 0px; border-style: solid; padding: 0px; width: 62px; height: 58px; overflow: hidden;" type="0">
                    <div class="img_over" style="border-width: 0px; border-color: transparent; width: 62px; height: 58px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image" id="wp-media-image_layer7FE1302749D7334B89385A7C1BCC8D8F" style="left: 0px; top: 0px; width: 62px; height: auto; position: relative;" src="/index/blank.gif" type="zoom" data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/person_people_75.png" />
                    </div>
                </div>
                <script>
                    (function () {
                        layer_media_init_func('layer7FE1302749D7334B89385A7C1BCC8D8F');
                    })()
                </script>
            </div>
            <script>                 $('#layer7FE1302749D7334B89385A7C1BCC8D8F').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer132C8F9667CDC237A1C188D5527C8CFF" style="left: 946px; top: 1276px; width: 60.13px; height: 41px; position: absolute; z-index: 122;" deg="0" mid="" type="media">
                <script>
                    create_pc_media_set_pic('layer132C8F9667CDC237A1C188D5527C8CFF', false);
                </script>
                <div class="wp-media_content" style="border-width: 0px; border-style: solid; padding: 0px; width: 60px; height: 41px; overflow: hidden;" type="0">
                    <div class="img_over" style="border-width: 0px; border-color: transparent; width: 60px; height: 41px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image" id="wp-media-image_layer132C8F9667CDC237A1C188D5527C8CFF" style="width: 60px; height: auto;" src="/index/blank.gif" type="zoom" data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/certificate_103.png" />
                    </div>
                </div>
                <script>
                    (function () {
                        layer_media_init_func('layer132C8F9667CDC237A1C188D5527C8CFF');
                    })()
                </script>
            </div>
            <script>                 $('#layer132C8F9667CDC237A1C188D5527C8CFF').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer0FCA14C15E58AED82F1918D6C4DA728F" style="left: 38px; top: 1276px; width: 55px; height: 59px; position: absolute; z-index: 115;" deg="0" mid="" type="media">
                <script>
                    create_pc_media_set_pic('layer0FCA14C15E58AED82F1918D6C4DA728F', false);
                </script>
                <div class="wp-media_content" style="border-width: 0px; border-style: solid; padding: 0px; width: 55px; height: 59px; overflow: hidden;" type="0">
                    <div class="img_over" style="border-width: 0px; border-color: transparent; width: 55px; height: 59px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image" id="wp-media-image_layer0FCA14C15E58AED82F1918D6C4DA728F" style="width: 55px; height: auto;" src="/index/blank.gif" type="zoom" data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/fx5n.png" />
                    </div>
                </div>
                <script>
                    (function () {
                        layer_media_init_func('layer0FCA14C15E58AED82F1918D6C4DA728F');
                    })()
                </script>
            </div>
            <?php
                $result = $index_content_dao->listIndexContent();
                $index_content1 = new index_content($result->fetch());
                $index_content2 = new index_content($result->fetch());
                $index_content3 = new index_content($result->fetch());
                $index_content4 = new index_content($result->fetch());
            ?>
            <script>                 $('#layer0FCA14C15E58AED82F1918D6C4DA728F').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer247922CE481F10609AAC2E8FF035AE25" style="left: 943px; top: 1349px; width: 174px; height: 29px; position: absolute; z-index: 123;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 174px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <font color="#ffffff" face="微软雅黑"><span style="line-height: 28px; font-size: 20px;"><?php echo $index_content4->title?></span></font>
                </div>
            </div>
            <script>                 $('#layer247922CE481F10609AAC2E8FF035AE25').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer09935B81BBE0DE84B364C121D2C60B70" style="left: 337px; top: 1350px; width: 150px; height: 29px; position: absolute; z-index: 119;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 150px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <font color="#ffffff" face="微软雅黑"><span style="line-height: 28px; font-size: 20px;"><?php echo $index_content2->title?></span></font>
                </div>
            </div>
            <script>                 $('#layer09935B81BBE0DE84B364C121D2C60B70').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer53D381C45332BA4F54584E086046DC3A" style="left: 646px; top: 1350px; width: 150px; height: 29px; position: absolute; z-index: 121;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 150px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <font color="#ffffff" face="微软雅黑"><span style="line-height: 28px; font-size: 20px;"><?php echo $index_content3->title?></span></font>
                </div>
            </div>
            <script>                 $('#layer53D381C45332BA4F54584E086046DC3A').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer41DF5066290DFCC252130AE858DB44B5" style="left: 34px; top: 1351px; width: 150px; height: 29px; position: absolute; z-index: 116;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 150px; height: 29px; display: block; -ms-word-wrap: break-word;">
                    <span style="color: rgb(255, 255, 255); font-family: 微软雅黑; font-size: 20px;"><?php echo $index_content1->title?></span>
                </div>
            </div>
            <script>                 $('#layer41DF5066290DFCC252130AE858DB44B5').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer199D92A1634A3EED8ECF30A3AB68440F" style="left: 921px; top: 1385px; width: 266px; height: 145px; position: absolute; z-index: 124;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 266px; height: 145px; display: block; -ms-word-wrap: break-word;">
                    <font color="#ffffff" face="微软雅黑"><span style="line-height: 30.8px; font-size: 14px;"><?php echo $index_content4->content?></span></font>
                </div>
            </div>
            <script>                 $('#layer199D92A1634A3EED8ECF30A3AB68440F').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerC8D3766C1569D63AF7188EC14DBE00FD" style="left: 643px; top: 1386px; width: 230px; height: 126px; position: absolute; z-index: 126;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 230px; height: 126px; display: block; -ms-word-wrap: break-word;">
                    <font color="#ffffff" face="微软雅黑"><span style="line-height: 30.8px; font-size: 14px;"><?php echo $index_content3->content?></span></font>
                </div>
            </div>
            <script>                 $('#layerC8D3766C1569D63AF7188EC14DBE00FD').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer581A3A3732990D8E01D9DE755D036D7B" style="left: 331px; top: 1388px; width: 239px; height: 126px; position: absolute; z-index: 120;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 239px; height: 126px; display: block; -ms-word-wrap: break-word;">
                    <font color="#ffffff" face="微软雅黑"><span style="line-height: 30.8px; font-size: 14px;"><?php echo $index_content2->content?></span></font>
                </div>
            </div>
            <script>                 $('#layer581A3A3732990D8E01D9DE755D036D7B').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer7C02EE41B40F05AC4E58D035FEA40CCA" style="left: 31px; top: 1390px; width: 230px; height: 126px; position: absolute; z-index: 117;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 230px; height: 126px; display: block; -ms-word-wrap: break-word;">
                    <span style="color: rgb(255, 255, 255); line-height: 220%; font-family: 微软雅黑; font-size: 14px;"><?php echo $index_content1->content?></span>
                </div>
            </div>
            <script>                 $('#layer7C02EE41B40F05AC4E58D035FEA40CCA').triggerHandler('layer_ready');</script>
        </div>
    </div>
    <!-- 底部 开始 -->
    <?php
    include '../include/footer.php'
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