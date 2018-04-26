<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0081)http://education-300.view.sitestar.cn/page8 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
    <META content="IE=11.0000" http-equiv="X-UA-Compatible">
    <META http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <TITLE>东北师大附中与朝阳合作办学 2012年9月开学</TITLE>
    <META name="keywords" content="网站关键字">
    <META name="description" content="网站描述">
    <LINK href="/index/default.css"
          rel="stylesheet" type="text/css">
    <LINK href="/index/media.css"
          rel="stylesheet" type="text/css">
    <LINK href="/index/title.css"
          rel="stylesheet" type="text/css">
    <LINK href="/index/unslider.css"
          rel="stylesheet" type="text/css">
    <LINK href="./article_category.css"
          rel="stylesheet" type="text/css">
    <LINK href="./article_detail.css"
          rel="stylesheet" type="text/css">
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
<BODY>
<?php
require_once '../../entrance.php';
$banner_dao = new index_banner_dao();
?>
<?php
$id = empty($_GET["id"]) ? 0 : $_GET["id"];
$dao = new news_dao();
$news_content_dao = new news_content_dao();
if($id != 0){
    $result = $dao->getOne($id);
    $row = $result->fetch();
    $news = new news($row);

    $content_result = $news_content_dao->listNewsContents($id);

    $prevResult = $dao->getPrev($id);
    $nextResult = $dao->getNext($id);
    $prevNews = new news($prevResult->fetch());
    $nextNews = new news($nextResult->fetch());
}else{
    $news = new news();
}

?>
<INPUT name="_user_level_val" type="hidden" value="2">
<SCRIPT language="javascript" src="/index/script.js" type="text/javascript"></SCRIPT>

<SCRIPT language="javascript" src="/index/plugin.js" type="text/javascript"></SCRIPT>

<SCRIPT language="javascript" type="text/javascript">
    //js版本url生成函数
    var webmodel = {};

    wp_pages_global_func($.extend({
        'isedit': '0',
        'islogin': '0',
        'domain': 'tpl-cf61794',
        'p_rooturl': 'http://education-300.view.sitestar.cn',
        'static_rooturl': '/index',
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
<LINK href="/index/common.css"
      rel="stylesheet">
<DIV id="page_set_css">
</DIV>
<INPUT name="page_id" id="page_id" type="hidden" value="8" rpid="3">
<DIV class="scroll_contain" id="scroll_container" style="overflow-y: scroll">
    <DIV id="scroll_container_bg">&nbsp;</DIV>
    <SCRIPT>
        initScrollcontainerHeight();
    </SCRIPT>

    <DIV id="overflow_canvas_container">
        <DIV id="canvas" style="margin: 0px auto; width: 1200px; height: 1748px;">
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

            <DIV class="cstlayer" id="layer572DB5C37E85D49E3E1E0F4528F69E29"
                 style="left: 524px; top: 734px; width: 145px; height: 35px; display: block; position: absolute; z-index: 110;"
                 deg="0" mid="" type="title">
                <DIV class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 145px; height: 35px; display: block; -ms-word-wrap: break-word;">
                    <FONT
                            color="#002d66" face="微软雅黑"><SPAN
                                style="color: rgb(247, 63, 65); line-height: 32.2px; letter-spacing: 4px; font-size: 30px;"><STRONG>新闻中心</STRONG></SPAN></FONT>
                </DIV>
            </DIV>
            <SCRIPT>                 $('#layer572DB5C37E85D49E3E1E0F4528F69E29').triggerHandler('layer_ready');</SCRIPT>

            <DIV class="cstlayer" id="layer2EFA2A7E55FD9E4625151270A50C6FE9"
                 style="left: 519px; top: 775px; width: 157px; height: 24px; display: block; position: absolute; z-index: 108;"
                 deg="0" mid="" type="title">
                <DIV class="wp-title_content"
                     style="border-width: 0px; border-color: transparent; padding: 0px; width: 157px; height: 24px; display: block; -ms-word-wrap: break-word;"><SPAN
                            style="background-color: rgb(255, 255, 255);"><FONT color="#222222"
                                                                                face="Arial, Helvetica, sans-serif"><SPAN
                                    style="line-height: normal; letter-spacing: 0px; white-space: pre-wrap;">—— &nbsp; </SPAN><SPAN
                                    style="line-height: normal; white-space: pre-wrap;">News Center</SPAN><SPAN
                                    style="line-height: normal; letter-spacing: 0px; white-space: pre-wrap;"> &nbsp; ——</SPAN></FONT></SPAN>
                </DIV>
            </DIV>
            <SCRIPT>                 $('#layer2EFA2A7E55FD9E4625151270A50C6FE9').triggerHandler('layer_ready');</SCRIPT>

            <DIV class="cstlayer" id="layer322E97E0C21FC98E88F708C9E87A7C41"
                 style="left: 43px; top: 855px; width: 1115px; height: 758px; position: absolute; z-index: 111;"
                 deg="0" mid="" type="article_detail">
                <DIV class="wp-article_detail_content"
                     style="border-width: 0px; border-color: transparent; width: 1115px; height: 758px; overflow: hidden;">
                    <SCRIPT type="text/javascript"></SCRIPT>

                    <STYLE>
                        .wp-article_detail_content .artview_info {
                            text-align: center;
                            margin: 0 auto;
                            padding: 10px 0 15px;
                            line-height: 21px;
                            overflow: hidden;
                        }

                        .wp-article_detail_content .detail_head_title {
                            float: left;
                            display: inner_block;
                        }

                        .wp-article_detail_content .sourcedata {
                            text-align: center;
                            margin: 0 auto;
                            line-height: 21px;
                        }

                        .wp-article_detail_content .text-source-left01 {
                            float: left;
                            color: transparent;
                            padding: 0 15px;
                            display: inner_block;
                        }

                        .wp-article_detail_content .text-source-left02 {
                            float: left;
                            text-align: left;
                            padding-right: 8px;
                            display: inner_block;
                        }

                        .wp-article_detail_content .up_arrow {
                            background-image: url(/index/up_arrow.png);
                            background-repeat: no-repeat;
                            width: 11px;
                            height: 10px;
                            display: block;
                            float: left;
                            background-color: #c2c2c2;
                            margin-right: 3px;
                            margin-top: 3px;
                        }

                        .wp-article_detail_content .down_arrow {
                            background-image: url(/index/down_arrow.png);
                            background-repeat: no-repeat;
                            width: 11px;
                            height: 10px;
                            display: block;
                            float: left;
                            background-color: #C2C2C2;
                            margin-right: 3px;
                            margin-top: 3px;
                        }

                        .wp-article_detail_content .down_arrow_textover {
                            color: #048bcd;
                        }

                        .wp-article_detail_content .up_arrow_textover {
                            color: #727272;
                        }

                        .wp-article_detail_content .shareshow {
                            display: none;
                        }

                    </STYLE>

                    <DIV class="artdetail_title" style="color: rgb(66, 97, 0); font-family: Microsoft YaHei; font-size: 16px; font-weight: bold; text-decoration: none; display: block;">
                        <?php echo $news->title?>
                    </DIV>
                    <DIV class="artview_info"
                         style="color: rgb(90, 90, 90); font-family: Microsoft YaHei; font-size: 12px; font-weight: normal; text-decoration: none; display: block;">
                        <DIV class="sourcedata">
                            <SPAN class="detail_head_title aut_txt_span">
                                <SPAN class="aut_txt">作者:</SPAN><?php echo $news->author?></SPAN>
                            <SPAN class="text-source-left01">|</SPAN>
                            <SPAN class="detail_head_title pub_txt_span">
                                <SPAN class="pub_txt">发布时间: </SPAN><?php echo $news->create_date?></SPAN>
                            <STYLE>.wp-article_detail_content .bdsharebuttonbox a {
                                    margin: 3px;
                                }

                                .wp-article_detail_content .editshaimg {
                                    margin: 3px;
                                }

                                .bdsharebuttonbox a.bds_tsina_a {
                                    background-image: url("plugin/article_detail/view/images/sha_tsinaa.png");
                                }

                                .bdsharebuttonbox a.bds_tsina_a:hover {
                                    background-image: url("plugin/article_detail/view/images/sha_tsina.png");
                                }

                                .bdsharebuttonbox a.bds_sqq_a {
                                    background-image: url("plugin/article_detail/view/images/sha_sqqa.png");
                                }

                                .bdsharebuttonbox a.bds_sqq_a:hover {
                                    background-image: url("plugin/article_detail/view/images/sha_sqq.png");
                                }

                                .bdsharebuttonbox a.bds_weixin_a {
                                    background-image: url("plugin/article_detail/view/images/sha_weixina.png");
                                }

                                .bdsharebuttonbox a.bds_weixin_a:hover {
                                    background-image: url("plugin/article_detail/view/images/sha_weixin.png");
                                }

                                .bdsharebuttonbox a.bds_tqq_a {
                                    background-image: url("plugin/article_detail/view/images/sha_tqqa.png");
                                }

                                .bdsharebuttonbox a.bds_tqq_a:hover {
                                    background-image: url("plugin/article_detail/view/images/sha_tqq.png");
                                }

                                .bdsharebuttonbox a.bds_qzone_a {
                                    background-image: url("plugin/article_detail/view/images/sha_qzonea.png");
                                }

                                .bdsharebuttonbox a.bds_qzone_a:hover {
                                    background-image: url("plugin/article_detail/view/images/sha_qzone.png");
                                }

                                .bdsharebuttonbox a.bds_bdhome_a {
                                    background-image: url("plugin/article_detail/view/images/sha_bdhomea.png");
                                }

                                .bdsharebuttonbox a.bds_bdhome_a:hover {
                                    background-image: url("plugin/article_detail/view/images/sha_bdhome.png");
                                }

                                .bdsharebuttonbox a.bds_douban_a {
                                    background-image: url("plugin/article_detail/view/images/sha_doubana.png");
                                }

                                .bdsharebuttonbox a.bds_douban_a:hover {
                                    background-image: url("plugin/article_detail/view/images/sha_douban.png");
                                }

                                .bdsharebuttonbox a.bds_kaixin001_a {
                                    background-image: url("plugin/article_detail/view/images/sha_kaixin001a.png");
                                }

                                .bdsharebuttonbox a.bds_kaixin001_a:hover {
                                    background-image: url("plugin/article_detail/view/images/sha_kaixin001.png");
                                }

                                .wp-article_detail_content .bdsharebuttonbox img {
                                    float: left;
                                }

                                .shareshow a {
                                    display: block;
                                    height: 16px;
                                    padding-left: 17px;
                                    width: auto;
                                    background-repeat: no-repeat;
                                    float: left;
                                }
                            </STYLE>
                            <SPAN class="text-source-left01 shareshow">|</SPAN>
                            <SPAN class="detail_head_title shareshow">分享到:
                                </SPAN> <SPAN class="bdsharebuttonbox shareshow"></SPAN>
                        </DIV>
                    </DIV>
                    <DIV class="artview_content" style="color: rgb(90, 90, 90); font-family: SimSun; font-size: 12px; font-weight: normal; text-decoration: none; display: block;">
                        <DIV class="artview_detail" setsid="article8"><SPAN>
                                <?php
                                while ($row = $content_result->fetch()) {
                                    $essay_content = new news_content($row);
                                    ?>
                                    <?php
                                    if($essay_content -> type == 1){
                                        ?>
                                        <SPAN style="color: rgb(102, 102, 102); line-height: 25px; font-family: Microsoft YaHei; font-size: 14px;display: block;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <?php echo $essay_content->content?>
                                        </SPAN>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    if($essay_content -> type == 2){
                                        ?>
                                        <div class="essay_image">
                                            <img src="<?php echo $essay_content->content?>"/>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                }
                                ?>
                            <DIV style="clear: both;"></DIV>
                        </DIV>
                    </DIV>
                    <DIV class="artview_prev_next">
                        <DIV style="width: 100%; margin: 20px 0 20px 0;">
                            <DIV class="prevlist"><SPAN class="up_arrow"></SPAN>
                                <SPAN class="prev_next_text prev_txt" style="margin-right: 5px; float: left; display: block;">上一篇： </SPAN>
                                <A title="<?php
                                if(!empty($prevNews->id)){
                                    echo "$prevNews->sub_title";
                                }
                                ?>" class="prev_next_link" style="float: left; display: block;" href="<?php
                                if(!empty($prevNews->id)){
                                    echo "/news/essay/?id=".$prevNews->id;
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
                                <DIV style="clear: both;"></DIV>
                            </DIV>
                            <DIV class="nextlist"><SPAN class="down_arrow"></SPAN>
                                <SPAN class="prev_next_text next_txt" style="margin-right: 5px; float: left; display: block;">下一篇：</SPAN>
                                <A title="<?php
                                if(!empty($nextNews->id)){
                                    echo "$nextNews->sub_title";
                                }
                                ?>" class="prev_next_link" style="float: left; display: block;" href="<?php
                                if(!empty($nextNews->id)){
                                    echo "/news/essay/?id=".$nextNews->id;
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
                                <DIV style="clear: both;"></DIV>
                            </DIV>
                        </DIV>
                    </DIV>
                </DIV>
                <SCRIPT type="text/javascript">
                    $(function () {
                        var layer = $('#layer322E97E0C21FC98E88F708C9E87A7C41');

                        layer.find('.prevlist,.nextlist').mouseenter(function (e) {
                            $(this).find('.up_arrow,.down_arrow').addClass("arrowbj");
                            $(this).find('.prev_next_text,.prev_next_link').addClass("arrowfontcolor");
                            $(this).css("cursor", "pointer");
                        }).mouseleave(function (e) {
                            $(this).find('.up_arrow,.down_arrow').removeClass("arrowbj");
                            $(this).find('.prev_next_text,.prev_next_link').removeClass("arrowfontcolor");
                        });

                        var this_span = 0;
                        var sharelen = 0;
                        layer.find('.sourcedata').children("span").not(".bdsharebuttonbox").each(function () {
                            if ($(this).css("display") == "none") {
                            } else {
                                var shis_spanw = $(this).outerWidth();
                                this_span = this_span + shis_spanw;
                            }

                        })

                        this_span = this_span + sharelen * 28 + 4;
                        var sourcmax_width = $('.artview_info').width();
                        layer.find('.sourcedata').width(this_span);
                        layer.find('.sourcedata').css("max-width", sourcmax_width);

                    })

                </SCRIPT>

                <SCRIPT type="text/javascript">
                    setTimeout(function () {
                        var $artdetailayer = $('#layer322E97E0C21FC98E88F708C9E87A7C41');
                        var $artdetai = $artdetailayer.find('div.wp-article_detail_content');
                        var $site_footer = $('#site_footer');
                        var artdetaibortop = parseInt($artdetai.css('border-top-width'));
                        var artdetaiborbot = parseInt($artdetai.css('border-bottom-width'));
                        var artdetailayerhei = parseInt($artdetailayer.height());
                        var artdetaihei = parseInt($artdetai.height());
                        var site_footertop = parseInt($site_footer.css('top'));
                        var artdetaiall = artdetaihei + artdetaibortop + artdetaiborbot;
                        if (artdetaibortop == 0 && artdetaiborbot == 0) {
                            return false;
                        }
                        $artdetai.height(artdetaiall);
                        $artdetailayer.height(artdetailayerhei + artdetaiborbot + artdetaibortop);
                        $site_footer.css('top', (site_footertop + artdetaibortop + artdetaiborbot) + 'px');
                    }, 1000);
                </SCRIPT>
            </DIV>
            <SCRIPT>                 $('#layer322E97E0C21FC98E88F708C9E87A7C41').triggerHandler('layer_ready');</SCRIPT>
        </DIV>
    </DIV>
    <!-- 底部 开始 -->
    <?php
    include '../../include/footer.php'
    ?>
    <!-- 底部 结束 -->
</DIV>
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
