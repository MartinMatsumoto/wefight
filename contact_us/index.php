<?php
require_once '../entrance.php';
$index_contact_us_dao = new index_contact_us_dao();
$banner_dao = new index_banner_dao();

$result = $index_contact_us_dao->getOne(1);
$contact_us = new contact_us($result->fetch());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0043)http://www.kungfuyc.com/page7 -->
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
    <script type="text/javascript">
        //<![CDATA[
        window.jQuery || document.write("<script src='http://api.map.baidu.com/api?v=2.0&ak=mUog7vgB2oLAQNST1bsO7AubAHIKnp3M'>"+"<"+"/script>");
        //]]>
    </script>
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
    }, {"phpsessionid": "", "punyurl": "\/\/www.kungfuyc.com", "curr_locale": "zh_CN", "mscript_name": "", "converted": false}));

</script>
<link href="/index/common.css" rel="stylesheet" />
<div id="page_set_css">
</div>
<input name="page_id" id="page_id" type="hidden" value="7" rpid="7" />
<div class="scroll_contain" id="scroll_container">
    <div id="scroll_container_bg">
        &nbsp;
    </div>
    <script>
        initScrollcontainerHeight();
    </script>
    <div id="overflow_canvas_container">
        <div id="canvas" style="margin: 0px auto; width: 1200px; height: 1123px;">
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
            <div class="cstlayer" id="layer617850E97F5764746E724A5681758787" style="left: 530px; top: 725px; width: 564px; height: 348px; position: absolute; z-index: 113;" deg="0" mid="" type="baidumap">
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('.lockmove').width(0).height(0);
                        var iscr = $('#layer617850E97F5764746E724A5681758787 .wp-baidumap_content iframe').attr('src');
                        $('#layer617850E97F5764746E724A5681758787 .wp-baidumap_content iframe').attr('src', encodeURI(iscr));
                    });
                </script>
                <div class="wp-baidumap_content" style="border-width: 0px; border-color: transparent; width: 564px; height: 348px;">
                    <div class="lockmove" style="width: 564px; height: 348px; position: absolute;"></div>
                    <div id="map_container" class="map_container" style="width: 564px;height: 348px;"></div>
                    <script type="text/javascript">
                        var map = new BMap.Map("map_container");          // 创建地图实例
                        var point = new BMap.Point(<?php echo $contact_us->longitude ?>,<?php echo $contact_us->latitude ?>);  // 创建点坐标
                        map.centerAndZoom(point, 30);                 // 初始化地图，设置中心点坐标和地图级别

                        map.addControl(new BMap.NavigationControl());
                        map.addControl(new BMap.ScaleControl());
                        map.addControl(new BMap.OverviewMapControl());
                        // 启用滚轮放大缩小
                        map.enableScrollWheelZoom();

                        var marker = new BMap.Marker(point);  // 创建标注
                        var opts = {
                            width : 100,     // 信息窗口宽度
                            height: 70,     // 信息窗口高度
                            enableMessage:true,//设置允许信息窗发送短息
                        }
                        var infoWindow = new BMap.InfoWindow("<?php echo $contact_us->address ?>", opts);  // 创建信息窗口对象
                        marker.addEventListener("click", function(){
                            map.openInfoWindow(infoWindow,point); //开启信息窗口
                        });
                        map.openInfoWindow(infoWindow,point); //开启信息窗口
                        map.addOverlay(marker);               // 将标注添加到地图中
                        marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
                    </script>
                </div>
            </div>
            <script>                 $('#layer617850E97F5764746E724A5681758787').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerF7BFA717942B3D51CF3FD77C76C8EB9A" style="left: 128px; top: 741px; width: 211px; height: 45px; position: absolute; z-index: 109;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 211px; height: 44px; display: block; -ms-word-wrap: break-word;">
                    <span style="color: rgb(43, 43, 43); line-height: normal; font-family: 微软雅黑; font-size: 26px; background-color: rgb(255, 255, 255);">联系我们&nbsp;</span>
                    <span style="color: rgb(43, 43, 43); line-height: normal; font-family: 微软雅黑; font-size: 16px; background-color: rgb(255, 255, 255);"><font color="#666666" style="color: rgb(102, 102, 102);">Contact us</font></span>
                </div>
            </div>
            <script>                 $('#layerF7BFA717942B3D51CF3FD77C76C8EB9A').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer70998F03250F546436C6D652486A498D" style="left: 134px; top: 786px; width: 80px; height: 10px; position: absolute; z-index: 110;" deg="0" mid="" type="chtml">
                <div class="wp-chtml_content" style="background: none; border-width: 3px 0px 0px; border-style: solid; border-color: rgb(70, 205, 0) transparent transparent; padding: 0px; width: 80px; height: 8px; overflow: hidden;">
                    <div class="imgloading" id="loading_layer70998F03250F546436C6D652486A498D"></div>
                    <iframe src="about:blank" frameborder="0" scrolling="no" style="width: 80px; height: 10px;" allowtransparency="true" onload="document.getElementById(&quot;loading_layer70998F03250F546436C6D652486A498D&quot;).style.display = &quot;none&quot;;" type=""></iframe>
                </div>
                <script>
                    (function () {
                        var imgover = $('#loading_layer70998F03250F546436C6D652486A498D').closest('.wp-chtml_content');
                        imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
                    })()
                </script>
            </div>
            <script>                 $('#layer70998F03250F546436C6D652486A498D').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layerFF6A07072ABA53D0B692EC31429A74E4" style="left: 131px; top: 797px; width: 310px; height: 34px; position: absolute; z-index: 111;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="border-width: 0px; border-color: transparent; padding: 0px; width: 310px; height: 35px; display: block; -ms-word-wrap: break-word;">
                    <span style="font-family: 微软雅黑;">如有任何问题请联系我们，我们7*24小时竭诚为您服务</span>
                </div>
            </div>
            <script>                 $('#layerFF6A07072ABA53D0B692EC31429A74E4').triggerHandler('layer_ready');</script>
            <div class="cstlayer" id="layer3E604B5DA72A51953547CFC6A9BA9C13" style="left: 134px; top: 852px; width: 300px; height: 199px; position: absolute; z-index: 112;" deg="0" mid="" type="title">
                <div class="wp-title_content" style="padding: 0px; border: 0px solid transparent; border-image: none; width: 300px; height: 199px; display: block; -ms-word-wrap: break-word;">
                    <div style="font: 12px/140% Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90);">
                        <span style="color: rgb(102, 102, 102); line-height: 300%; font-family: 微软雅黑; font-size: 14px;">联系QQ：<?php echo $contact_us->qq ?></span>
                    </div>
                    <div style="font: 12px/140% Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90);">
                        <span style="color: rgb(102, 102, 102); line-height: 300%; font-family: 微软雅黑; font-size: 14px;">联系地址：<?php echo $contact_us->address ?></span>
                    </div>
                    <div style="font: 12px/140% Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90);">
                        <span style="color: rgb(102, 102, 102); line-height: 300%; font-family: 微软雅黑; font-size: 14px;">手机号码：<?php echo $contact_us->phone ?></span>
                    </div>
                    <div style="font: 12px/140% Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90);">
                        <span style="font: 14px/300% 微软雅黑; color: rgb(102, 102, 102);">联系邮箱：</span>
                        <font color="#666666" face="微软雅黑"><span style="line-height: 42px; font-size: 14px;"><?php echo $contact_us->email ?></span></font>
                    </div>
                    <div>
                        <span style="font: 14px/300% 微软雅黑; color: rgb(102, 102, 102);">联系电话：</span>
                        <font color="#666666" face="微软雅黑"><span style="line-height: 42px; font-size: 14px;"><?php echo $contact_us->tel ?></span></font>
                    </div>
                </div>
            </div>
            <script>                 $('#layer3E604B5DA72A51953547CFC6A9BA9C13').triggerHandler('layer_ready');</script>
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