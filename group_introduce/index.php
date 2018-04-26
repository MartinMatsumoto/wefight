<?php
require_once '../entrance.php';
$banner_dao = new index_banner_dao();
$group_dao = new group_dao();

$result_group = $group_dao->listGroup(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="IE=11.0000" http-equiv="X-UA-Compatible" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>您的网站名称</title>
    <meta name="keywords" content="网站关键字" />
    <meta name="description" content="网站描述" />
    <link href="http://static.websiteonline.cn/website/template/default/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="http://static.websiteonline.cn/website/template/default/images/favicon.ico" rel="Bookmark" />
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
    <meta name="GENERATOR" content="MSHTML 11.00.10570.1001" />
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
        'p_rooturl': 'http://education-300.view.sitestar.cn',
        'static_rooturl': 'http://static.websiteonline.cn/website',
        'interface_locale': "zh_CN",
        'dev_mode': "0",
        'getsession': ''
    }, {"phpsessionid": "", "punyurl": "\/\/education-300.view.sitestar.cn", "curr_locale": "zh_CN", "mscript_name": "", "converted": false}));

</script>
<link href="./common.css" rel="stylesheet" />
<div id="page_set_css">
</div>
<input name="page_id" id="page_id" type="hidden" value="6" rpid="6" />
<div class="scroll_contain" id="scroll_container">
    <div id="scroll_container_bg">
        &nbsp;
    </div>
    <script>
        initScrollcontainerHeight();
    </script>
    <div id="overflow_canvas_container">
        <div id="canvas" style="margin: 0px auto; width: 1200px; height: 2270px;">
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
            <div class="cstlayer" id="layerEAA832628E2ECF291A247B35AB5FE3B7" style="left: 395px; top: 696px; width: 435px; height: 63px; position: absolute; z-index: 131;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 435px; height: 63px; display: block; -ms-word-wrap: break-word;">
                    <b style="text-align: center; color: rgb(102, 102, 102); line-height: normal; font-family: 微软雅黑; font-size: 35px; background-color: rgb(255, 255, 255);"><span style="color: rgb(255, 0, 0); line-height: 80px; font-size: 28px;"><font color="#54c244" style="color: rgb(84, 194, 68);">树立教学品牌，打造一流教学质量</font></span></b>
                </div>
            </div>
            <script>                 $('#layerEAA832628E2ECF291A247B35AB5FE3B7').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerA0055E2D97224FDB73371F14F0815495" style="left: 447px; top: 766px; width: 316px; height: 31px; position: absolute; z-index: 111;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 316px; height: 31px; display: block; -ms-word-wrap: break-word;">
                    <div style="text-align: left;">
                        <span style="text-align: center; color: rgb(109, 109, 109); line-height: 25px; font-family: 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);">专注于激发孩子们学习兴趣、动手能力、我们坚信</span>
                    </div>
                </div>
            </div>
            <script>                 $('#layerA0055E2D97224FDB73371F14F0815495').triggerHandler('layer_ready');</script>


            <?php
            $i = 0;
            while ($row = $result_group->fetch()) {
                $group = new group($row);
                ?>
                <div class="cstlayer" id="layer1D3F9BAB815CBDB42ED0F0524425B0BC" style="left: 557px; top: 804px; width: 60px; height: 10px; position: absolute; z-index: 110;" deg="0" mid="" type="chtml">
                    <div class="wp-chtml_content" style="background: none; border-width: 4px 0px 0px; border-style: solid; border-color: rgb(137, 190, 46) transparent transparent; padding: 0px; width: 60px; height: 7px; overflow: hidden;">
                        <div class="imgloading" id="loading_layer1D3F9BAB815CBDB42ED0F0524425B0BC"></div>
                        <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 60px; height: 10px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layer1D3F9BAB815CBDB42ED0F0524425B0BC&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                    </div>
                    <script>
                        (function () {
                            var imgover = $('#loading_layer1D3F9BAB815CBDB42ED0F0524425B0BC').closest('.wp-chtml_content');
                            imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                        })()
                    </script>
                </div>
                <script>                 $('#layer1D3F9BAB815CBDB42ED0F0524425B0BC').triggerHandler('layer_ready');</script>
                <div class="cstlayer" id="layerF5C32B27676ADF0306EDC897B2D93FD2" style="left: 156px; top: 870px; width: 231px; height: 280px; position: absolute; z-index: 112;" deg="0" mid="" type="chtml">
                    <div class="wp-chtml_content" style="background: none; padding: 0px; border: 2px solid rgb(88, 235, 205); border-image: none; width: 227px; height: 276px; overflow: hidden;">
                        <div class="imgloading" id="loading_layerF5C32B27676ADF0306EDC897B2D93FD2"></div>
                        <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 231px; height: 280px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layerF5C32B27676ADF0306EDC897B2D93FD2&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                    </div>
                    <script>
                        (function () {
                            var imgover = $('#loading_layerF5C32B27676ADF0306EDC897B2D93FD2').closest('.wp-chtml_content');
                            imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                        })()
                    </script>
                </div>
                <script>                 $('#layerF5C32B27676ADF0306EDC897B2D93FD2').triggerHandler('layer_ready');</script>
                <div class="cstlayer" id="layerFDEB20C44100C61FC88C5AD8FA1BA72B" style="left: 471px; top: 885px; height: 37px; position: absolute; z-index: 114;" deg="0" mid="" type="title">
                    <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; height: 37px; display: block; -ms-word-wrap: break-word;">
                        <span style="color: rgb(51, 51, 51); line-height: normal; font-family: 微软雅黑; font-size: 30px;"><?php echo $group->name ?></span>
                    </div>
                </div>

                <script>                 $('#layerFDEB20C44100C61FC88C5AD8FA1BA72B').triggerHandler('layer_ready');</script>
                <div class="cstlayer" id="layer3FBE718F60A8AF1E71111456F9DDD0F2" style="left: 180px; top: 888px; width: 229px; height: 299px; position: absolute; z-index: 113;" deg="0" mid="" type="media">
                    <script>
                        create_pc_media_set_pic('layer3FBE718F60A8AF1E71111456F9DDD0F2', false);
                    </script>
                    <div class="wp-media_content" style="border-width: 0px; border-style: solid; padding: 0px; width: 230px; height: 299px; overflow: hidden;" type="0">
                        <div class="img_over" style="border-width: 0px; border-color: transparent; width: 230px; height: 299px; overflow: hidden;">
                            <div class="imgloading" style="z-index: 100;"></div>
                            <img class="img_lazy_load paragraph_image" id="wp-media-image_layer3FBE718F60A8AF1E71111456F9DDD0F2" style="left: -40px; top: 0px; width: auto; height: 298px; position: relative;" src="/index/blank.gif" type="zoom" data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/AD0I1NWxBRAEGAAgkpLBwAUoy_e72gYwhAI4_gE.png" />
                        </div>
                    </div>
                    <script>
                        (function () {
                            layer_media_init_func('layer3FBE718F60A8AF1E71111456F9DDD0F2');
                        })()
                    </script>
                </div>
                <script>                 $('#layer3FBE718F60A8AF1E71111456F9DDD0F2').triggerHandler('layer_ready');</script>
                <div class="cstlayer" id="layer9AF82A918E3A3EF24FFE67E47638B113" style="left: 471px; top: 926px; width: 196px; height: 28px; position: absolute; z-index: 117;" deg="0" mid="" type="title">
                    <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 197px; height: 28px; display: block; -ms-word-wrap: break-word;">
                        <span style="color: rgb(137, 190, 46); line-height: 26px; font-family: 微软雅黑; font-size: 17px;"><?php echo $group->career ?></span>
                    </div>
                </div>
                <script>                 $('#layer9AF82A918E3A3EF24FFE67E47638B113').triggerHandler('layer_ready');</script>


                <div class="cstlayer" id="layer4A19C00111731ABBAF6DC73A3BEA42A0" style="left: 473px; top: 984px; width: 552px; height: 10px; position: absolute; z-index: 115;" deg="0" mid="" type="chtml">
                    <div class="wp-chtml_content" style="background: none; border-width: 1px 0px 0px; border-style: solid; border-color: rgb(217, 217, 217) transparent transparent; padding: 0px; width: 552px; height: 10px; overflow: hidden;">
                        <div class="imgloading" id="loading_layer4A19C00111731ABBAF6DC73A3BEA42A0"></div>
                        <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 552px; height: 10px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layer4A19C00111731ABBAF6DC73A3BEA42A0&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                    </div>
                    <script>
                        (function () {
                            var imgover = $('#loading_layer4A19C00111731ABBAF6DC73A3BEA42A0').closest('.wp-chtml_content');
                            imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                        })()
                    </script>
                </div>
                <script>                 $('#layer4A19C00111731ABBAF6DC73A3BEA42A0').triggerHandler('layer_ready');</script>
                <div class="cstlayer" id="layer08A571F13CCFE23D409150DEFE811313" style="left: 473px; top: 1018px; width: 588px; height: 128px; position: absolute; z-index: 116;" deg="0" mid="" type="title">
                    <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 588px; height: 128px; display: block; -ms-word-wrap: break-word;">
                        <p><span style="color: rgb(67, 67, 67); line-height: 230%; font-family: 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);"><?php echo $group->intro ?></span></p>
                    </div>
                </div>
                <script>                 $('#layer08A571F13CCFE23D409150DEFE811313').triggerHandler('layer_ready');</script>
                <?php
                $i ++;
            }
            ?>


            <div class="cstlayer" id="layer32378DC18204997BA648C51D4D2A4C3E" style="left: 832px; top: 1229px; width: 231px; height: 280px; position: absolute; z-index: 118;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: none; padding: 0px; border: 2px solid rgb(88, 235, 205); border-image: none; width: 229px; height: 278px; overflow: hidden;">
                    <div class="imgloading" id="loading_layer32378DC18204997BA648C51D4D2A4C3E"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 231px; height: 280px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layer32378DC18204997BA648C51D4D2A4C3E&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layer32378DC18204997BA648C51D4D2A4C3E').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layer32378DC18204997BA648C51D4D2A4C3E').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer90C22E51DBB9E3FC8BD8BB684D48D90D" style="left: 148px; top: 1232px; width: 71px; height: 36px; position: absolute; z-index: 120;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 70px; height: 36px; display: block; -ms-word-wrap: break-word;">
                    <div>
                        <font color="#333333" face="微软雅黑"><span style="line-height: normal; font-size: 30px;">Jone​</span></font>
                    </div>
                    <div style="font: 12px/140% Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90);">
                        <br />
                    </div>
                </div>
            </div>
            <script>                 $('#layer90C22E51DBB9E3FC8BD8BB684D48D90D').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer9165602848CD3C73CFB5474C4144AF4B" style="left: 856px; top: 1247px; width: 230px; height: 299px; position: absolute; z-index: 119;" deg="0" mid="" type="media">
                <script>
                    create_pc_media_set_pic('layer9165602848CD3C73CFB5474C4144AF4B', false);
                </script>
                <div class="wp-media_content" style="border-width: 0px; border-style: solid; padding: 0px; width: 230px; height: 298px; overflow: hidden;" type="0">
                    <div class="img_over" style="border-width: 0px; border-color: transparent; width: 230px; height: 298px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image" id="wp-media-image_layer9165602848CD3C73CFB5474C4144AF4B" style="left: -40px; top: 0px; width: auto; height: 298px; position: relative;" src="/index/blank.gif" type="zoom" data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/AD0I1NWxBRAEGAAgkZLBwAUor6vMgAYwhAI4_gE.png" />
                    </div>
                </div>
                <script>
                    (function () {
                        layer_media_init_func('layer9165602848CD3C73CFB5474C4144AF4B');
                    })()
                </script>
            </div>
            <script>                 $('#layer9165602848CD3C73CFB5474C4144AF4B').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer501AD964516115228BE85F2D21FE3032" style="left: 148px; top: 1272px; width: 196px; height: 28px; position: absolute; z-index: 135;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 197px; height: 28px; display: block; -ms-word-wrap: break-word;">
                    <font color="#89be2e" face="微软雅黑"><span style="line-height: 26px; font-size: 17px;">CEO &nbsp;机构创始人</span></font>
                </div>
            </div>
            <script>                 $('#layer501AD964516115228BE85F2D21FE3032').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer4C3EDF3F5FB39BFF281B09DAD8051F0F" style="left: 150px; top: 1330px; width: 552px; height: 10px; position: absolute; z-index: 121;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: none; border-width: 1px 0px 0px; border-style: solid; border-color: rgb(217, 217, 217) transparent transparent; padding: 0px; width: 552px; height: 10px; overflow: hidden;">
                    <div class="imgloading" id="loading_layer4C3EDF3F5FB39BFF281B09DAD8051F0F"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 552px; height: 10px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layer4C3EDF3F5FB39BFF281B09DAD8051F0F&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layer4C3EDF3F5FB39BFF281B09DAD8051F0F').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layer4C3EDF3F5FB39BFF281B09DAD8051F0F').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer0B4E5DC1B30D7A923D1A69D206EA9983" style="left: 150px; top: 1364px; width: 588px; height: 128px; position: absolute; z-index: 122;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 588px; height: 128px; display: block; -ms-word-wrap: break-word;">
                    <p><font color="#434343" face="微软雅黑"><span style="line-height: 32.2px; font-size: 14px;">讲课风格，深入浅出，理论知识与实践经验有机的结合在一起，语言风趣幽默，善于与学员沟通。做事顾全大局，认真慎虑，诚信大度，执着坚定，有强烈的责任感和事业心。课堂气氛活跃，能充分调动学员的学习兴趣，颇得学员 爱戴。主讲手绘等课程，有扎实的美术基本功和丰富的专业室内与建筑设计经验。</span></font></p>
                </div>
            </div>
            <script>                 $('#layer0B4E5DC1B30D7A923D1A69D206EA9983').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerAE93C1C4B49116D2ACDBB7B193DC19BD" style="left: 155px; top: 1572px; width: 231px; height: 280px; position: absolute; z-index: 124;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: none; padding: 0px; border: 2px solid rgb(88, 235, 205); border-image: none; width: 227px; height: 276px; overflow: hidden;">
                    <div class="imgloading" id="loading_layerAE93C1C4B49116D2ACDBB7B193DC19BD"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 231px; height: 280px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layerAE93C1C4B49116D2ACDBB7B193DC19BD&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layerAE93C1C4B49116D2ACDBB7B193DC19BD').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layerAE93C1C4B49116D2ACDBB7B193DC19BD').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer03D119AEF70941C01BAE0A49E26A1A6E" style="left: 471px; top: 1588px; width: 110px; height: 35px; position: absolute; z-index: 125;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 110px; height: 35px; display: block; -ms-word-wrap: break-word;">
                    <font color="#333333" face="微软雅黑"><span style="line-height: normal; font-size: 30px;">Make</span></font>
                </div>
            </div>
            <script>                 $('#layer03D119AEF70941C01BAE0A49E26A1A6E').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerD7436F5CD75F2C03391061E29CA47386" style="left: 179px; top: 1590px; width: 230px; height: 299px; position: absolute; z-index: 125;" deg="0" mid="" type="media">
                <script>
                    create_pc_media_set_pic('layerD7436F5CD75F2C03391061E29CA47386', false);
                </script>
                <div class="wp-media_content" style="border-width: 0px; border-style: solid; padding: 0px; width: 230px; height: 299px; overflow: hidden;" type="0">
                    <div class="img_over" style="border-width: 0px; border-color: transparent; width: 230px; height: 299px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image" id="wp-media-image_layerD7436F5CD75F2C03391061E29CA47386" style="left: -40px; top: 0px; width: auto; height: 299px; position: relative;" src="/index/blank.gif" type="zoom" data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/AD0I1NWxBRAEGAAglJLBwAUoppDN4AQwhAI4_gE.png" />
                    </div>
                </div>
                <script>
                    (function () {
                        layer_media_init_func('layerD7436F5CD75F2C03391061E29CA47386');
                    })()
                </script>
            </div>
            <script>                 $('#layerD7436F5CD75F2C03391061E29CA47386').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer25E6DE1214C3CD4DF7E57828039C5FD1" style="left: 475px; top: 1632px; width: 196px; height: 28px; position: absolute; z-index: 135;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 197px; height: 28px; display: block; -ms-word-wrap: break-word;">
                    <font color="#89be2e" face="微软雅黑"><span style="line-height: 26px; font-size: 17px;">CEO &nbsp;机构创始人</span></font>
                </div>
            </div>
            <script>                 $('#layer25E6DE1214C3CD4DF7E57828039C5FD1').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer929CE80BF95816B6A6115D68747AE126" style="left: 472px; top: 1686px; width: 552px; height: 10px; position: absolute; z-index: 127;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: none; border-width: 1px 0px 0px; border-style: solid; border-color: rgb(217, 217, 217) transparent transparent; padding: 0px; width: 552px; height: 10px; overflow: hidden;">
                    <div class="imgloading" id="loading_layer929CE80BF95816B6A6115D68747AE126"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 552px; height: 10px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layer929CE80BF95816B6A6115D68747AE126&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layer929CE80BF95816B6A6115D68747AE126').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layer929CE80BF95816B6A6115D68747AE126').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer1DB046B7695513E215BD91DD2E57FEDF" style="left: 472px; top: 1720px; width: 588px; height: 128px; position: absolute; z-index: 127;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 588px; height: 128px; display: block; -ms-word-wrap: break-word;">
                    <p><font color="#434343" face="微软雅黑"><span style="line-height: 32.2px; font-size: 14px;">担任专业理论课讲师，主讲设计原理、空间设计、施工工艺 ,同时负责学生毕业后就业前的专业培训，非常精通cad 3dmax vray制作室内效果图，手绘能力超强，对于培训界来说，是一大奇才，所以担任理论讲师的同时也兼任手绘讲师和室内效果图的高级灯光部分，陈老师为人真诚，责任心强。</span></font></p>
                </div>
            </div>
            <script>                 $('#layer1DB046B7695513E215BD91DD2E57FEDF').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer791F7D326629BB2EE37A59CECA92819B" style="left: 136px; top: 1952px; width: 115px; height: 38px; position: absolute; z-index: 130;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 115px; height: 37px; display: block; -ms-word-wrap: break-word;">
                    <font color="#333333" face="微软雅黑"><span style="line-height: normal; font-size: 30px;">Jack</span></font>
                </div>
            </div>
            <script>                 $('#layer791F7D326629BB2EE37A59CECA92819B').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer957A7794000D261C7B72E68624A8E5F1" style="left: 820px; top: 1953px; width: 231px; height: 280px; position: absolute; z-index: 129;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: none; padding: 0px; border: 2px solid rgb(88, 235, 205); border-image: none; width: 229px; height: 278px; overflow: hidden;">
                    <div class="imgloading" id="loading_layer957A7794000D261C7B72E68624A8E5F1"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 231px; height: 280px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layer957A7794000D261C7B72E68624A8E5F1&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layer957A7794000D261C7B72E68624A8E5F1').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layer957A7794000D261C7B72E68624A8E5F1').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerE1756F761A9DF03CDEE21BF8EAD4BEDF" style="left: 844px; top: 1971px; width: 230px; height: 299px; position: absolute; z-index: 129;" deg="0" mid="" type="media">
                <script>
                    create_pc_media_set_pic('layerE1756F761A9DF03CDEE21BF8EAD4BEDF', false);
                </script>
                <div class="wp-media_content" style="border-width: 0px; border-style: solid; padding: 0px; width: 230px; height: 299px; overflow: hidden;" type="0">
                    <div class="img_over" style="border-width: 0px; border-color: transparent; width: 230px; height: 299px; overflow: hidden;">
                        <div class="imgloading" style="z-index: 100;"></div>
                        <img class="img_lazy_load paragraph_image" id="wp-media-image_layerE1756F761A9DF03CDEE21BF8EAD4BEDF" style="left: -40px; top: 0px; width: auto; height: 299px; position: relative;" src="/index/blank.gif" type="zoom" data-original="http://tpl-cf61794.pic34.websiteonline.cn/upload/AD0I1NWxBRAEGAAglpLBwAUouJ_j9AcwhAI4_gE.png" />
                    </div>
                </div>
                <script>
                    (function () {
                        layer_media_init_func('layerE1756F761A9DF03CDEE21BF8EAD4BEDF');
                    })()
                </script>
            </div>
            <script>                 $('#layerE1756F761A9DF03CDEE21BF8EAD4BEDF').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer1B8A4FD9FF48C1115A84DD98AE46B82A" style="left: 136px; top: 1993px; width: 196px; height: 28px; position: absolute; z-index: 134;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 197px; height: 28px; display: block; -ms-word-wrap: break-word;">
                    <span style="color: rgb(137, 190, 46); line-height: 26px; font-family: 微软雅黑; font-size: 17px;">CEO &nbsp;机构合作总监</span>
                </div>
            </div>
            <script>                 $('#layer1B8A4FD9FF48C1115A84DD98AE46B82A').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer75416146020B272D94EB263ADE9CF1A8" style="left: 138px; top: 2054px; width: 552px; height: 10px; position: absolute; z-index: 132;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: none; border-width: 1px 0px 0px; border-style: solid; border-color: rgb(217, 217, 217) transparent transparent; padding: 0px; width: 552px; height: 10px; overflow: hidden;">
                    <div class="imgloading" id="loading_layer75416146020B272D94EB263ADE9CF1A8"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 552px; height: 10px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layer75416146020B272D94EB263ADE9CF1A8&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layer75416146020B272D94EB263ADE9CF1A8').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layer75416146020B272D94EB263ADE9CF1A8').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerF588A11762FE65BB542F331D7EF39A36" style="left: 138px; top: 2088px; width: 588px; height: 128px; position: absolute; z-index: 132;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 588px; height: 128px; display: block; -ms-word-wrap: break-word;">
                    <p><font color="#434343" face="微软雅黑"><span style="line-height: 32.2px; font-size: 14px;">主要开发孩子的思维空间，学习方法，培养并注重孩子的兴趣和引导孩子实用结合；在孩子教育过程中,如何对孩子进行数学思维训练?著名科学家爱因斯坦说过:“兴趣是学生较好的老师。”兴趣是幼儿学习的动力.</span></font></p>
                </div>
            </div>
            <script>                 $('#layerF588A11762FE65BB542F331D7EF39A36').triggerHandler('layer_ready');</script>
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