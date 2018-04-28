<?php
$index_contact_us_dao = new index_contact_us_dao();

$result = $index_contact_us_dao->getOne(1);
$contact_us = new contact_us($result->fetch());
?>
<div id="site_footer" style="width: 1200px; height: 296px; margin-top: 0px; position: absolute; z-index: 500;">
    <div class="full_width" style="height: 296px; position: absolute; background-color: rgb(23, 23, 23);" margintopheight="0"></div>
    <div class="full_content" id="footer_content" style="left: 0px; top: 0px; width: 1200px; height: 296px; margin-left: 0px; position: absolute;">
        <div class="cstlayer" id="layer7BC8C5DC82896F441A726BD69BE30964" style="left: 73px; top: 59px; width: 363px; height: 199px; position: absolute; z-index: 101;" deg="0" mid="" type="title" inbuttom="1">
            <div class="wp-title_content" style="padding: 0px; border: 0px solid transparent; border-image: none; width: 363px; height: 199px; display: block; -ms-word-wrap: break-word;">
                <div style="font: 12px/140% Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90);">
                    <span style="color: rgb(204, 204, 204); line-height: 300%; font-family: 微软雅黑; font-size: 14px;">联系QQ：<?php echo $contact_us->qq ?></span>
                </div>
                <div style="font: 12px/140% Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90);">
                    <span style="color: rgb(204, 204, 204); line-height: 300%; font-family: 微软雅黑; font-size: 14px;">联系地址：<?php echo $contact_us->address ?></span>
                </div>
                <div style="font: 12px/140% Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90);">
                    <span style="color: rgb(204, 204, 204); line-height: 300%; font-family: 微软雅黑; font-size: 14px;">手机号码：<?php echo $contact_us->phone ?></span>
                </div>
                <div>
                    <span style="font: 14px/300% 微软雅黑; color: rgb(204, 204, 204);">联系邮箱：</span>
                    <font color="#cccccc" face="微软雅黑"><span style="line-height: 42px; font-size: 14px;"><?php echo $contact_us->email ?></span></font>
                </div>
                <div style="font: 12px/140% Arial, 宋体, Helvetica, sans-serif, Verdana; color: rgb(90, 90, 90);">
                    <span style="color: rgb(204, 204, 204); line-height: 300%; font-family: 微软雅黑; font-size: 14px;">联系电话：<?php echo $contact_us->tel ?></span>
                </div>
            </div>
        </div>
        <script>                 $('#layer7BC8C5DC82896F441A726BD69BE30964').triggerHandler('layer_ready');</script>
        <div class="cstlayer" id="layer3B96EC04F640766817A41F971B772246" style="left: 75px; top: 15px; width: 86px; height: 34px; position: absolute; z-index: 100;" deg="0" mid="" type="title" inbuttom="1">
            <div class="wp-title_content" style="padding: 0px; border: 0px solid transparent; border-image: none; width: 86px; height: 34px; display: block; -ms-word-wrap: break-word;">
                <span style="color: rgb(204, 204, 204); font-family: 微软雅黑; font-size: 20px;">联系我们</span>
            </div>
        </div>
        <script>                 $('#layer3B96EC04F640766817A41F971B772246').triggerHandler('layer_ready');</script>
        <div class="cstlayer" id="layerFA7142981F4F9B1279EA8BD66124B477" style="left: 738px; top: 28px; width: 334px; height: 254px; position: absolute; z-index: 102;" deg="0" mid="" type="new_message_form" inbuttom="1">
            <link href="index/uploadify2.css" rel="stylesheet" type="text/css" />
            <div class="wp-new_message_form_content" style="padding: 0px; border: 0px solid transparent; border-image: none; width: 334px; height: 254px; overflow: hidden;">
                <style type="text/css">#layerFA7142981F4F9B1279EA8BD66124B477 .requiredtip {
                        display: inline;
                        position: absolute;
                        left: 0;
                        top: 0;
                        padding: 2px 6px 5px;
                        background-color: #ffe2e2;
                        border: 1px solid #fbc3c3;
                        color: #f00;
                        font-family: '微软雅黑';
                        font-size: 12px;
                        line-height: 140%;
                        text-align: center;
                        text-shadow: 0 0 1px white;
                        white-space: nowrap;
                        -moz-border-radius: 4px;
                        -webkit-border-radius: 4px;
                        border-radius: 4px;
                        z-index: 1111;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .tipshadow, #layerFA7142981F4F9B1279EA8BD66124B477 .pointytip {
                        border: 6px dashed transparent;
                        border-bottom-style: solid;
                        border-bottom-color: #ffe2e2;
                        top: -12px;
                        height: 0;
                        left: 20%;
                        margin-left: 4px;
                        position: absolute;
                        width: 0;
                        overflow: hidden;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .tipshadow {
                        border-width: 7px;
                        top: -14px;
                        margin-left: 3px;
                        border-bottom-color: #fbc3c3;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields {
                        float: left;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields input, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields textarea {
                        font-family: '微软雅黑';
                        resize: none;
                        outline: none;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields li {
                        font-family: '微软雅黑';
                        float: left;
                        margin: 7px 0;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 a.btnsubmit {
                        display: block;
                        font-family: '微软雅黑';
                        float: left;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 img.captchapic {
                        cursor: pointer;
                        position: absolute;
                        left: 0;
                        top: 0;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 span.reqtip {
                        color: #f00;
                        line-height: 100%;
                        padding-left: 3px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields li {
                        float: left;
                        width: 100%;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .title {
                        float: left;
                        line-height: 1.5;
                        width: 70px;
                        color: #5a5a5a;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .inpbox {
                        float: left;
                        width: 248px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .inptext {
                        font-family: '微软雅黑';
                        background-color: #f7f7f7;
                        border: 1px solid #dedede;
                        font-size: 12px;
                        text-indent: 5px;
                        height: 38px;
                        line-height: 38px;
                        width: 100%;
                        border-radius: 3px;
                        -moz-border-radius: 3px;
                        -webkit-border-radius: 3px;
                        -o-border-radius: 3px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .inptext.datepicker {
                        background-color: #f7f7f7;
                        background-image: url(/website/plugin/new_message_form/images/datepicker.png) !important;
                        background-position: right 5px center !important;
                        background-repeat: no-repeat !important;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox {
                        background: transparent !important;
                        padding-left: 22px;
                        position: relative;
                        line-height: 40px;
                        height: 40px;
                        float: left;
                        margin-right: 15px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox label {
                        display: inline-block;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox input[type="radio"] {
                        box-sizing: border-box;
                        left: -1px;
                        margin: 3px;
                        padding: 0;
                        position: absolute;
                        top: 0px;
                        vertical-align: middle;
                        opacity: 0;
                        filter: alpha(opacity=0);
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox label.labelofradio:before, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox label.labelofradio .before {
                        content: " ";
                        background: url(/website/plugin/new_message_form/images/radio_bg.png) left center no-repeat;
                        height: 100%;
                        left: 0;
                        width: 16px;
                        position: absolute;
                        position: absolute \0;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox.on label.labelofradio {
                        color: #f7901d;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox.on label.labelofradio:before, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox.on label.labelofradio .before {
                        content: " ";
                        background: url(/website/plugin/new_message_form/skins/ms2/radio_checkedbg.png) left center no-repeat;
                        color: #f7901d;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox {
                        background: transparent !important;
                        padding-left: 22px;
                        position: relative;
                        line-height: 40px;
                        height: 40px;
                        float: left;
                        margin-right: 15px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox label {
                        display: inline-block;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox input[type="checkbox"] {
                        box-sizing: border-box;
                        left: -1px;
                        margin: 3px;
                        padding: 0;
                        position: absolute;
                        top: 0px;
                        vertical-align: middle;
                        opacity: 0;
                        filter: alpha(opacity=0);
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox label.labelofcheckbox:before, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox label.labelofcheckbox .before {
                        content: " ";
                        background: url(/website/plugin/new_message_form/images/checkbox_bg.png) left center no-repeat;
                        height: 100%;
                        left: 0;
                        position: absolute;
                        width: 16px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox.on label.labelofcheckbox:before, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox.on label.labelofcheckbox .before {
                        content: "";
                        background: url(/website/plugin/new_message_form/skins/ms2/checkbox_checkedbg.png) left center no-repeat;
                        color: #f7901d;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox.on label.labelofcheckbox {
                        color: #f7901d;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .btn-select {
                        position: relative;
                        background-color: #f7f7f7;
                        background-image: url(/website/plugin/new_message_form/images/selarrow.png) !important;
                        background-position: right 5px center !important;
                        background-repeat: no-repeat !important;
                        border: #dedede 1px solid;
                        float: left;
                        display: block;
                        height: 38px;
                        line-height: 38px;
                        font-size: 12px;
                        color: #797979;
                        width: 100%;
                        -moz-border-radius: 5px;
                        -webkit-border-radius: 5px;
                        border-radius: 5px;
                        cursor: pointer;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .btn-select select {
                        position: absolute;
                        text-indent: 10px;
                        top: 0;
                        left: 0;
                        filter: alpha(opacity=0);
                        -moz-opacity: 0;
                        opacity: 0;
                        display: block;
                        cursor: pointer;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .btn-select .cur_select {
                        text-indent: 10px;
                        display: block;
                        height: 100%;
                        width: 100%;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .btn-select .cp_sele {
                        width: 100%;
                        height: 100%;
                        text-align: center;
                        background: #fff;
                        border: #dedede 1px solid;
                        -moz-border-radius: 5px;
                        -webkit-border-radius: 5px;
                        border-radius: 5px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .msel {
                        margin-top: 3px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .txtarea {
                        font-size: 12px;
                        padding: 5px 0;
                        width: 100%;
                        height: 60px;
                        background-color: #f7f7f7;
                        border: 1px solid #dedede;
                        border-radius: 3px;
                        -moz-border-radius: 3px;
                        -webkit-border-radius: 3px;
                        -o-border-radius: 3px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .btnsubmit {
                        display: block;
                        margin-left: 70px;
                        background-color: #f60;
                        border-style: solid;
                        border-width: 0;
                        line-height: 40px;
                        height: 40px;
                        width: 250px;
                        border-radius: 3px;
                        -moz-border-radius: 3px;
                        -webkit-border-radius: 3px;
                        -o-border-radius: 3px;
                        text-align: center;
                        color: #fff;
                        margin-top: 5px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .btnsubmit:hover {
                        background-color: #ff8030;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .webuploader-container {
                        text-align: center;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .webuploader-container {
                    / / position: relative;
                        background: white;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .webuploader-element-invisible {
                        position: absolute !important;
                        clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
                        clip: rect(1px, 1px, 1px, 1px);
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .webuploader-pick {
                        width: 100%;
                        display: inline-block;
                        position: relative;
                        cursor: pointer;
                        color: #626262;
                        text-align: center;
                        border-radius: 3px;
                        overflow: hidden;
                    / / padding: 1 px 6 px;
                    / / color: #626262;
                    / / text-align: center;
                    / / background: url(../../template/default/images/wp-button-bg.gif) repeat-x bottom #5183c9;
                    / / line-height: 38 px;
                        position: relative;
                    }

                    /
                    /
                    .webuploader-pick:before { /*    content:'.'; display:inline-block; line-height: 33px; background: url(../../template/default/images/wp-picture-upload_arrow.png) no-repeat 0 6px;    text-indent:-999px;    padding-left: 20px;    margin-left: 5px;*/
                    / /
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .webuploader-pick-hover {
                    / / background: #2e5fb2;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .webuploader-pick-disable {
                        opacity: 0.6;
                        pointer-events: none;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .webuploader-pick_btn {
                        float: right;
                        display: inline-block;
                        background-color: #f60;
                        color: white;
                        padding: 0 9px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .inptext:focus, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .btn-select.on, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox.on, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox.on, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .txtarea:focus {
                        font-family: "Microsoft YaHei";
                        font-size: auto;
                        color: #000;
                        text-align: left;
                        border-color: #dedede;
                        border-width: 1px;
                        border-radius: 3px;
                        -moz-border-radius: 3px;
                        -webkit-border-radius: 3px;
                        -o-border-radius: 3px;
                        font-weight: normal;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .inptext:focus, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .inptext.datepicker:focus, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .btn-select.on, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .txtarea:focus {
                        background-color: #f7f7f7;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .inptext:focus, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .btn-select.on, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .txtarea:focus, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox input[type="radio"]:checked + label, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox input[type="checkbox"]:checked + label {
                        text-decoration: none;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox.on {
                        background-color: transparent;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox.on label.labelofradio {
                        color: #f7901d;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox.on label.labelofradio:before, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .radiobox.on label.labelofradio .before {
                        background-image: url(/website/plugin/new_message_form/skins/ms2/radio_checkedbg.png);
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox.on {
                        background-color: transparent;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox.on label.labelofcheckbox {
                        color: #f7901d;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox.on label.labelofcheckbox:before, #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .checkbox.on label.labelofcheckbox .before {
                        background-image: url(/website/plugin/new_message_form/skins/ms2/checkbox_checkedbg.png);
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .btn-select.on {
                        background-image: url(/website/plugin/new_message_form/images/selarrow.png) !important;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .inptext.datepicker:focus {
                        background-image: url(/website/plugin/new_message_form/images/datepicker.png) !important;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 a.btnsubmit:hover {
                        color: #fff;
                        background-image: none;
                        background-color: #ff8030;
                        border-color: transparent;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 ul.mfields .title {
                        color: #cccccc;
                    }</style>
                <style type="text/css">
                    #layerFA7142981F4F9B1279EA8BD66124B477 .radiobox input[type="radio"] {
                        filter: alpha(opacity=100);
                        opacity: 1;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .radiobox input[type="radio"] + label:before {
                        position: relative;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .checkbox input[type="checkbox"] {
                        filter: alpha(opacity=100);
                        opacity: 1;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .checkbox input[type="checkbox"] + label:before {
                        position: relative;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .send {
                        width: 100px;
                        float: left;
                        background: #00aff1;
                        height: 40px;
                        line-height: 40px;
                        color: #FFF;
                        text-align: center;
                        border-top-right-radius: 3px;
                        -moz-border-top-right-radius: 3px;
                        -weblik-border-top-right-radius: 3px;
                        border-bottom-right-radius: 3px;
                        cursor: pointer;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .cancel {
                        background: #666666;
                        cursor: default;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .verify {
                        width: 216px;
                        float: left;
                        border-top-right-radius: 0px;
                        -moz-border-top-right-radius: 0px;
                        -weblik-border-top-right-radius: 0px;
                        border-bottom-right-radius: 0px;
                    }

                    #layerFA7142981F4F9B1279EA8BD66124B477 .defaultval {
                        display: none;
                    }
                </style>
                <form class="mesform" style="overflow: hidden; position: relative;" action="/structure/contact_us/controller/retain_message_save.php" method="post">
                    <input name="msid" type="hidden" value="1" />
                    <ul class="mfields">
                        <li>
                            <div class="title">
                                姓名
                            </div>
                            <div class="inpbox">
                                <input name="name" class="inptext" type="text" maxlength="50" />
                            </div>
                            <div style="overflow: hidden; clear: both;"></div> </li>
                        <li>
                            <div class="title">
                                电话
                            </div>
                            <div class="inpbox">
                                <input name="tel" class="inptext" type="text" maxlength="150" data-rule-mobile="true" />
                            </div>
                            <div style="overflow: hidden; clear: both;"></div> </li>
                        <li>
                            <div class="title">
                                留言内容
                            </div>
                            <div class="inpbox">
                                <textarea name="message" class="txtarea" maxlength="50"></textarea>
                            </div>
                            <div style="overflow: hidden; clear: both;"></div> </li>
                    </ul>
                    <div style="overflow: hidden; clear: both;"></div>
                    <a class="btnsubmit" href="javascript:;">提交</a>
                </form>
                <script>
                    function add_id(id) {
                        window.id = id;
                    }
                </script>
                <script>
                    $(function () {
                        var $curlayer = $('#layerFA7142981F4F9B1279EA8BD66124B477'), curskn = 'ms2';
                        var layerid = 'layerFA7142981F4F9B1279EA8BD66124B477';
                        // Placeholder
                        if (curskn == 'ms3') {
                            var decode = function (str) {
                                return (str || '').replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '"').replace(/&#039;/g, "'")
                            };
                            $curlayer.find('input[type="text"],select,textarea').each(function (i, node) {
                                var $parent = $(node).parent(), $title = $parent.closest('li').children('.title'),
                                    $reqtip = $([]);
                                if ($title.children('.reqtip').length > 0) $reqtip = $title.children('.reqtip').detach();
                                if ($parent.is('.inpbox')) {
                                    $(node).attr('placeholder', decode($title.hide().html() || ''));
                                    $LAB.script('/website/script/userloginpc/jquery.placeholder.min.js').wait(function () {
                                        $(node).placeholder();
                                    })
                                } else {
                                    if ($parent.is(':hidden')) return true;
                                    $parent.children('span.cur_select').html($title.hide().html());
                                }
                                if ($reqtip.length) $reqtip.css({
                                    "position": 'absolute',
                                    "right": '-10px',
                                    "top": '0'
                                }).appendTo($title.next('.inpbox').css("position", 'relative'));
                            });

                            $curlayer.find('.' + layerid + 'user_pic_upload').each(function () {
                                var pictitle_node = $(this).parent('.inpbox').siblings('.title'),
                                    $picreqtip = $([]);
                                if (pictitle_node.children('.reqtip').length > 0) $picreqtip = pictitle_node.children('.reqtip').detach();
                                var pictitle = pictitle_node.html();
                                $(this).find('.webuploader-pick_txt').html(pictitle);
                                pictitle_node.hide();
                                if ($picreqtip.length) $picreqtip.css({
                                    "position": 'absolute',
                                    "right": '-10px',
                                    "top": '0'
                                }).appendTo($(this).parent('.inpbox').css("position", 'relative'));
                            });
                        } else if (curskn == 'ms2') {/*Title line-height*/
                            var $inpbox = $([]);
                            $curlayer.find('ul > li').each(function (i, node) {
                                var $title = $('> .title', node);
                                $inpbox = $('> .inpbox', node);
                                $title.css("padding-top", Math.ceil(Math.max($inpbox.height() - $title.height()) / 2) + 'px');
                            });
                            if ($inpbox.length) $curlayer.find('a.btnsubmit').css("margin-left", $inpbox.position().left + 'px');
                        } else if (curskn == 'ms4') {/*Inpbox max-height*/
                            var $lis = $curlayer.find('ul > li');
                            for (var i = 0, c = $lis.length; i < c; i += 2) {
                                var maxh = 0;
                                if (c == i + 1) break;
                                var $inpbox = $lis.filter(':eq(' + i + ')').next('li').andSelf().children('.inpbox').height('auto');
                                maxh = Math.max.apply(null, $inpbox.map(function () {
                                    return $(this).height()
                                }).toArray());
                                $inpbox.height(maxh);
                            }
                        }
                        // Captcha
                        if ('yes' == 'no') {
                            var $captchapic = $curlayer.find('img.captchapic'),
                                $cainp = $captchapic.siblings('.inptext'),
                                inptxtind = parseInt($cainp.css("text-indent") || '0'),
                                capicleft = inptxtind + parseInt($cainp.css("borderLeftWidth") || '0');
                            $cainp.css("text-indent", (inptxtind + 65 + 10) + 'px');
                            $captchapic.css({
                                "top": Math.ceil(($cainp.outerHeight(true) - 18) / 2) + 'px',
                                "left": capicleft + 'px'
                            }).click(function () {
                                $(this).attr("src", parseToURL('new_message_form', 'captcha', {
                                    "capkey": 'layerFA7142981F4F9B1279EA8BD66124B477',
                                    "s": (new Date()).getTime()
                                }));
                            });
                            $cainp.keyup(function () {
                                var str = $cainp.val();
                                if (str.match(/^[0-9]$/) === null) {
                                    suboptstr = '<span class="requiredtip" style="top:41px;">该字段必须是数字<span class="tipshadow"></span><span class="pointytip"></span></span>';
                                    $cainp.parent().append(suboptstr);
                                }
                                if (str.match(/^[0-9]$/) !== null) {
                                    $cainp.parent().children('.requiredtip').remove();
                                }
                            });
                        }
                    })</script>
            </div>
            <script>$(function () {
                    var $curlayer = $('#layerFA7142981F4F9B1279EA8BD66124B477');
                    var layerid = 'layerFA7142981F4F9B1279EA8BD66124B477';
                    var curskn = 'ms2';
                    // Custom-select
                    $curlayer.find('select.cp_sele').change(function () {
                        $(this).closest('.btn-select').removeClass("on");
                        $(this).prev('span.cur_select').html($('> option:selected', this).html());
                    }).focus(function () {
                            $(this).closest('.btn-select').addClass("on")
                        })
                        .blur(function () {
                            $(this).closest('.btn-select').removeClass("on")
                        });
                    // Radio:checked & Checkbox:checked
                    $curlayer.find(':radio,:checkbox').click(function () {
                        $(this).parent()[$(this).prop("checked") ? 'addClass' : 'removeClass']("on");
                        if (this.type == 'radio') $(this).parent().siblings('.radiobox').removeClass("on");
                    });
                    // Datepicker
                    if ('' == 'datepicker') {
                        var datedir = "/website/plugin/new_message_form/js";
                        if ($('link#date_picker').length == 0) {
                            $('<link id="date_picker" rel="stylesheet" />').attr({
                                "type": 'text/css', "href": datedir + '/jquery.cxcalendar.css'
                            }).appendTo('head');
                        }
                        $LAB.script(datedir + '/jquery.cxcalendar.min.js').wait(function () {
                            $curlayer.find('input.datepicker').not('.datepickers').cxCalendar();
                        });
                    }
                    if ('' == 'datepickers') {
                        var datedir = "/website/plugin/new_message_form/js";
                        if ($('link#date_picker').length == 0) {
                            $('<link id="date_picker" rel="stylesheet" />').attr({
                                "type": 'text/css', "href": datedir + '/jquery.cxcalendar.css'
                            }).appendTo('head');
                        }
                        $LAB.script(datedir + '/jquery.cxcalendar.min.js').wait(function () {
                            $curlayer.find('input.datepickers').cxCalendar(
                                {
                                    type: 'datetime',
                                    format: 'YYYY-MM-DD HH:mm:ss'
                                }
                            );
                        });
                    }
                    // Multi-select
                    var mselectjsn = [];
                    if ($.isPlainObject(mselectjsn) && !$.isEmptyObject(mselectjsn)) {
                        $curlayer.find('select[data-role="mselect"]').change(function () {
                            var $select = $(this), $parent = $select.closest('.inpbox'), curid = $select.val();
                            $select.parent(".btn-select").next('.btn-select').css({"display": "none"});
                            level = '0', ky = ($select.attr("name") || '').replace(/(\[\d+\])$/, function ($0, $1) {
                                level = parseInt($1.replace(/^\[|\]$/, '')) + 1;
                                return '';
                            }), preid = $parent.find('select[name="' + ky + '[' + (level - 2) + ']"]').val() || '';
                            var suboptjsn = mselectjsn[ky][level][(preid ? preid + '-' : '') + curid];
                            if ((suboptjsn || []).length == 0) return false;
                            // reset 'sub-select' option
                            $select.parent().nextAll('.btn-select').each(function (i, node) {
                                $('> span.cur_select', this).html(' --- ');
                                $('> select > option:gt(0)', this).remove();
                                $(this).hide();
                            });
                            // sub - level
                            var suboptstr = '<option value=""> --- </option>';
                            for (var i in suboptjsn) {
                                var subopt = suboptjsn[i];
                                suboptstr += '<option value="' + subopt['id'] + '">' + subopt['name'] + '</option>';
                            }
                            $parent.find('select[name="' + ky + '[' + level + ']"]').empty().append(suboptstr).parent().show();

                            //bug2806,提交按钮margin-top修改
//			var amsel=$parent.find('select[name="'+ky+'['+level+']"]').empty().append(suboptstr).parent();
//			if(amsel.is(':visible')){
//				var abtn=$curlayer.find('a.btnsubmit');
//				var a_top=abtn.css('margin-top').replace('px','');
//				var new_top=parseInt(a_top)+40;
//				new_top=new_top+'px';
//				abtn.css('margin-top',new_top)
//			}

                            wp_heightAdapt($curlayer);
                            /*Auto change 'layer-height'*/
                        });
                    }
                    // Submit
                    $LAB
                        .script('/index/jquery.validate.js')
                        .script("/index/webuploader.js")
                        .wait(function () {
                            var getQueenItem = function (id) {
                                return $('.fileQueue_chooser_' + window.id).find('.uploadifyQueueItem').filter(function () {
                                    return this.id.match(new RegExp(id + '$'));
                                })
                            }

                            var mimetypestr = '', mimetypearr = {
                                'pic': 'image/png,image/jpg,image/jpeg,image/gif,.ico',
                                'mp3': 'audio/mpeg',
                                'swf': '.swf', 'rar': '.rar',
                                'doc': 'application/pdf,.doc,.docx,.ppt,.pptx,.odt,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                'text': 'text/plain,text/html'
                            };

                            var filetype = 'pic';//临时写死

                            if (filetype == 'all') {
                                for (var k in mimetypearr) {
                                    if ($.inArray(k, ['swf', 'rar']) != -1) continue;
                                    mimetypestr += mimetypearr[k] + ',';
                                }
                                mimetypestr = mimetypestr.replace(/,$/, '');
                            } else mimetypestr = mimetypearr[filetype];
                            //WebUploader 上传插件初始化
                            var uploader;
                            var pickid = '.' + layerid + 'user_pic_upload';
                            uploader = WebUploader.create({
                                auto: false,
                                swf: '/website/script/webuploader/Uploader.swf',
                                server: parseToURL('wp_frontpage', 'locale_users_uploadify'),
                                pick: {id: pickid, multiple: false},
                                formData: {fileType: 'ico|gif|jpg|jpeg|png', maxFileSize: '2097152'},//文件上传请求的参数表，每次发送都会发送此对象中的参数。
                                fileVal: 'Filedata',
                                // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                                resize: false,
                                //fileNumLimit:10,//验证文件总数量, 超出则不允许加入队列。（Q_EXCEED_NUM_LIMIT）
                                fileSingleSizeLimit: 2 * 1024 * 1024,// 验证单个文件大小是否超出限制, 超出则不允许加入队列（F_EXCEED_SIZE）
                                // 只允许选择图片文件。
                                accept: {
                                    title: 'Images',
                                    extensions: 'gif,jpg,jpeg,bmp,png',
                                    mimeTypes: mimetypestr
                                },
                                thumb: {
                                    width: 40,
                                    height: 40,
                                    quality: 70,// 图片质量，只有type为`image/jpeg`的时候才有效。
                                    allowMagnify: true, // 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
                                    crop: true,// 是否允许裁剪。
                                    //type: 'image/jpeg'// 为空的话则保留原有图片格式。// 否则强制转换成指定的类型。
                                },
                                compress: false,
                                duplicate: true
                            });
                            // 开始上传
                            //$('.submitbtn').click(function(){
                            //    uploader.upload();
                            //});
                            // 当文件被加入队列之前触发，此事件的handler返回值为false，则此文件不会被添加进入队列。
                            uploader.on('beforeFileQueued', function (file) {
                                var itemData = {
                                    'fileID': file.id,
                                    'instanceID': file.id,
                                    'fileName': file.name,
                                    'fileSize': WebUploader.formatSize(file.size),
                                    'cancelpng': "/website/script/multiupload/cancel.png",
                                    'className': 'uploadifyQueueItem'
                                }
                                // Create the file item template
                                var itemTemplate = '<div id="${fileID}" class="${className}">\
                <div class="cancel">\
                    <a class="WebupRemove" href="jQuery:$(\'#${instanceID}\').uploadifyCancel(\'cancel\', \'${fileID}\')"><img src="${cancelpng}" border="0" /></a>\
                </div>\
                <img style="width:48px;height:48px;margin-right:3px;" class="${fileID}"><span class="fileName">${fileName} (${fileSize})</span><span class="percentage"></span>\
                \
            </div>';

                                // Replace the item data in the template
                                var itemHTML = itemTemplate;
                                for (var d in itemData) {
                                    itemHTML = itemHTML.replace(new RegExp('\\$\\{' + d + '\\}', 'g'), itemData[d]);
                                }

                                // Add the file item to the queue
                                var $chooser = $('.fileQueue_chooser_' + window.id);
                                var oldfileid = $chooser.find(".uploadifyQueueItem").attr("id");
                                if ($chooser.children().length) {
                                    var queen_exitfile = uploader.getFile(oldfileid);
                                    if (queen_exitfile) uploader.removeFile(queen_exitfile, true);

                                    $chooser.empty(itemHTML);
                                } else {
                                    $chooser.css({'border': '1px solid #dedede'});
                                    if (curskn == 'ms4') {
                                        var filequeen_height = $chooser.parents("li:eq(0)").outerHeight(true);
                                        $chooser.css({
                                            'border': '1px solid #dedede',
                                            'height': filequeen_height - 2
                                        });
                                        $chooser.parent('.inpbox').height('auto');
                                    }
                                }
                                $chooser.append(itemHTML);
                                $chooser.siblings('.' + layerid + 'user_pic_upload').children('.webuploader-pick').find('.webuploader-pick_txt').html('已选择1张图片');
                                if ($chooser.children('.jscroll-c').length) $chooser = $chooser.children('.jscroll-c');
                                //console.log('allfile222:',uploader.getFiles());//队列中的记录还在其实已经删除了
                                //console.log('onefile:',uploader.getFile('WU_FILE_0'));//undefined
                            });
                            var required_pic_post_f = '';
                            var choose_pic_post_f = '';
                            //当文件被加入队列以后触发
                            uploader.on('fileQueued', function (file) {
                                //图片加入队列后生成缩略图
                                uploader.makeThumb(file, function (error, src) {
                                    if (error) {
                                        $("." + file.id).replaceWith('<span>不能预览</span>');
                                        return;
                                    }
                                    $("." + file.id).attr('src', src);
                                }, 1, 1);
                                //Remove item
                                $('#' + file.id + ' a.WebupRemove').click(function () {
                                    if (curskn == 'ms3') {
                                        var oldname = $(this).parents('.filequeue').siblings('.uppic_hidden').attr('field_name');
                                        $(this).parents('.filequeue').siblings('.' + layerid + 'user_pic_upload').children('.webuploader-pick').find('.webuploader-pick_txt').html(oldname);
                                    } else {
                                        $(this).parents('.filequeue').siblings('.' + layerid + 'user_pic_upload').children('.webuploader-pick').find('.webuploader-pick_txt').html('');
                                    }
                                    $(this).parents('.filequeue').css({'border': 'none', 'height': 'auto'});
                                    $('#' + file.id).remove();
                                    uploader.removeFile(file, true);
                                    wp_heightAdapt($curlayer);
                                });
                                wp_heightAdapt($curlayer);
                            })
                            // 文件上传过程中创建进度条实时显示。
//        uploader.on( 'uploadProgress', function( file, percentage ) {
//            var $li = $( '#'+file.id ),
//            $percent = $li.find('.uploadifyProgressBar');
//            $percentTxt = $li.find('.percentage');
//            // 避免重复创建
//            if ( !$percent.length ) {
//                //$percent = $('<p class="progress"><span></span></p>').appendTo( $li ).find('span');
//            }
//            var per_width = Math.round(percentage * 100) + '%'
//            $percent.css( 'width', per_width );
//            $percentTxt.html(' - ' + per_width);
//            if(percentage==1) $percentTxt.html(" - Completed");
//        });

                            //当validate不通过时，会以派送错误事件的形式通知调用者
                            uploader.on('error', function (file, max, fileobj) {
                                if (file == 'F_EXCEED_SIZE') {   //验证单个文件大小  fileSingleSizeLimit
                                    var uploadsize = max / 1024 / 1024;
                                    getQueenItem(fileobj.id).find('.percentage').css('color', 'red').html(" - 文件大小不能超过" + ((uploadsize >= 1 ? uploadsize + 'MB' : uploadsize * 1024 + "KB")));
                                } else if (file == 'Q_EXCEED_NUM_LIMIT') { //验证文件总数量 fileNumLimit
                                    $('#' + fileobj.id).remove();
                                    uploader.removeFile(fileobj, true);
                                } else if (file == 'Q_TYPE_DENIED') { //验证类型 Q_TYPE_DENIED
                                    getQueenItem(max.id).find('.percentage').css('color', 'red').html(" - 非法的上传类型");
                                }
                                //Remove item
                                $('#' + fileobj.id + ' a.WebupRemove').click(function () {
                                    if (curskn == 'ms3') {
                                        var oldname = $(this).parents('.filequeue').siblings('.uppic_hidden').attr('field_name');
                                        $(this).parents('.filequeue').siblings('.' + layerid + 'user_pic_upload').children('.webuploader-pick').find('.webuploader-pick_txt').html(oldname);
                                    } else {
                                        $(this).parents('.filequeue').siblings('.' + layerid + 'user_pic_upload').children('.webuploader-pick').find('.webuploader-pick_txt').html('');
                                    }
                                    $(this).parents('.filequeue').css({'border': 'none', 'height': 'auto'});
                                    $('#' + fileobj.id).remove();
                                    wp_heightAdapt($curlayer);
                                    //uploader.removeFile(file,true);
                                });
                                wp_heightAdapt($curlayer);
                            });
                            // 文件成功、失败处理
                            uploader.on('uploadSuccess', function (file, result) {
                                var fname = result.fname;
                                $("#" + file.id).parent().next("input:hidden").val(fname);
                                if (result.result == 'ERROR') {
                                    var $li = $('#' + file.id),
                                        $percent = $li.find('.percentage');
                                    $percent.css('color', 'red').html(' - ' + result.errmsg);
                                }
                            });

                            uploader.on('uploadError', function (file) {
                                alert('上传失败！');
                                var $li = $('#' + file.id),
                                    $percent = $li.find('.percentage');
                                $percent.css('color', 'red').html(' - ' + '上传失败！');
                            });

                            uploader.on('uploadComplete', function (file) {
                                //图片类必填项图片是否全部上传
                                $curlayer.find('.mesform').find(".uppic_hidden").each(function () {
                                    var is_required = $(this).attr("required");
                                    var imgstr = $(this).val();
                                    if (is_required) {
                                        if (imgstr == '') {
                                            required_pic_post_f = false;
                                            return false;
                                        } else {
                                            required_pic_post_f = true;
                                        }
                                    }
                                })
                                //选择上传的图片是否全部上传
                                $curlayer.find('.mesform').find(".filequeue").each(function () {
                                    var uppic_hidden_node = $(this).siblings('.uppic_hidden');
                                    var is_choose_pic = $(this).html();
                                    var imgstr2 = uppic_hidden_node.val();
                                    if (is_choose_pic != '') {
                                        if (imgstr2 == '') {
                                            choose_pic_post_f = false;
                                            return false;
                                        } else {
                                            choose_pic_post_f = true;
                                        }
                                    }
                                })
                                if (choose_pic_post_f) {
                                    $curlayer.find('.btnsubmit').click();
                                    uploader.reset();
                                }
//            alert('上传完成';
                                //$( '#'+file.id ).find('.uploadifyProgress').remove();
                            });
                            $curlayer.find('.mesform').validate({
                                errorPlacement: function (error, el) {
                                    var $tiparent = el.closest('.inpbox'),
                                        $reqtip = $tiparent.children('.requiredtip');
                                    if ($reqtip.length > 0) $reqtip.remove();
                                    var _top = $tiparent.outerHeight(), tipmsg = '该字段是必填项';
                                    if (el.val().length && (el.attr("data-rule-email") == 'true')) tipmsg = '请输入有效的电子邮件地址';
                                    if (el.val().length && (el.attr("data-rule-mobile") == 'true')) tipmsg = '请输入有效的手机号码';
                                    if (el.val().length && (el.attr("data-rule-Idcard") == 'true')) tipmsg = '请输入有效的身份证号码';
                                    $tiparent.css("position", 'relative').append('<span class="requiredtip" style="top:' + _top + 'px;">'
                                        + tipmsg + '<span class="tipshadow"></span><span class="pointytip"></span></span>');
                                }, success: function (label) {
                                    var inpnstr = (label.attr("id") || '').replace('-error', '');
                                    $curlayer.find('[name="' + inpnstr + '"]').closest('.inpbox').children('.requiredtip').remove();
                                }, submitHandler: function (form, e) {
                                    var isempty = false, frmdata = $(form).serializeArray();
                                    var useauthcode = 'no';
                                    $("input:[name='mobile']").val("0");
                                    for (var i in frmdata) {
                                        var frmobj = frmdata[i];
                                        if (/^mes/i.test(frmobj['name'])) {
                                            var keyname = frmobj['name'];
                                            var kval = $.trim(frmobj['value']);
                                            if (keyname.indexOf("mobile") > 0) {
                                                if (kval.length > 0) {
                                                    $("input:[name='mobile']").val("1");
                                                }
                                            }
                                        }
                                    }
                                    for (var i in frmdata) {
                                        var frmobj = frmdata[i];
                                        if (/^mes/i.test(frmobj['name'])) {
                                            var keyname = frmobj['name'];
                                            var kval = $.trim(frmobj['value']);
                                            if (keyname.indexOf("picturesupload") > 0) {
                                                continue;
                                            }
                                            if (keyname.indexOf("Idcard") > 0) {
                                                if (!(kval.length == 15 || kval.length == 18)) {
                                                    alert('身份证号码长度必须为15或18位');
                                                    return false;
                                                } else {
                                                    var reg = /^[1-9]{1}[0-9]{13}([0-9]|[xX])$|^[1-9]{1}[0-9]{16}([0-9]|[xX])$/;
                                                    if (reg.test(kval)) {
                                                    } else {
                                                        alert('请输入有效的身份证号码');
                                                        return false;
                                                    }

                                                }
                                            }
                                            if (kval.length > 0) break;
                                            else isempty = true;
                                        }
                                    }
                                    if (isempty) return false;
                                    //检查图片类必填项，的图片是否加入队列
                                    var has_re_pic_upload = $curlayer.find('.mesform .uppic_hidden[required]').length;
                                    if (has_re_pic_upload && !required_pic_post_f) {
                                        var requiredpic_add_queen = '';
                                        $curlayer.find('.mesform').find(".uppic_hidden").each(function () {
                                            var is_required = $(this).attr("required");
                                            if (is_required) {
                                                var is_add_queen = $(this).siblings('.filequeue').html();
                                                var imgstr_name = $(this).attr('field_name');
                                                if (is_add_queen == '') {
                                                    requiredpic_add_queen = false;
                                                    alert(imgstr_name + ':字段不能为空！');
                                                    return false;
                                                } else {
                                                    requiredpic_add_queen = true;
                                                }
                                            } else {
                                                requiredpic_add_queen = true;
                                            }
                                        })
                                        if (requiredpic_add_queen) {
                                            uploader.upload();
                                        } else {
                                            return false;
                                        }
                                        return;//图片类必填项，选择上传的图片是否全部上传
                                    }
                                    var has_pic_upload = $curlayer.find('.mesform').find('.' + layerid + 'user_pic_upload').length;
                                    //图片上传类的非必填项是否选择了图片
                                    var has_file_inqueen = '';
                                    if (has_pic_upload) {
                                        $curlayer.find('.mesform').find(".uppic_hidden").each(function () {
                                            has_file_inqueen = $(this).siblings('.filequeue').html();
                                            if (has_file_inqueen != '') {
                                                has_file_inqueen = true;
                                                return false;
                                            }
                                        })
                                    }
                                    //图片类只有非必填项时的上传
                                    if (has_pic_upload && !has_re_pic_upload && !choose_pic_post_f && has_file_inqueen) {
                                        if (has_file_inqueen) {
                                            uploader.upload();
                                        }
                                        return;
                                    }

                                    $.post("/structure/contact_us/controller/retain_message_save.php", $(form).serialize(), function (data) {
                                        $('#layerFA7142981F4F9B1279EA8BD66124B477').find(".defaultval").html(2);
                                        $('#layerFA7142981F4F9B1279EA8BD66124B477').find(".send").removeClass("cancel").html("发送验证码");
                                        alert("提交成功");
                                        form.reset();
                                        required_pic_post_f = false;
                                        choose_pic_post_f = false;
                                        $curlayer.find('.mesform').find(".uppic_hidden").each(function () {
                                            $(this).val('');
                                        })
                                        $curlayer.find('.mesform').find(".filequeue").each(function () {
                                            $(this).html('');
                                            $(this).css({'border': 'none', 'height': 'auto'});
                                        })
                                        $curlayer.find('.mesform').find(".webuploader-pick_txt").each(function () {
                                            if (curskn == 'ms3') {
                                                var oldname = $(this).parents('.webuploader-container').siblings('.uppic_hidden').attr('field_name');
                                                $(this).html(oldname);
                                            } else {
                                                $(this).html('');
                                            }
                                        })
                                        var skn = 'ms2';
                                        $('.radiobox, .checkbox', form).removeClass("on");
                                        $('.btn-select > span.cur_select', form).html(function () {
                                            var tipstr = ' --- ', $li = $(this).closest('li');
                                            if (skn == 'ms3') tipstr = $li.children('.title').html() || ' --- ';
                                            $li.find('> .inpbox > .btn-select:gt(0)').hide();
                                            return tipstr;
                                        });
                                        if (useauthcode == 'yes') $('img.captchapic', form).trigger("click");
                                        wp_heightAdapt($curlayer);
                                        $('span.requiredtip', form).remove();
                                    });
                                }
                            });
                        });
                    $curlayer.find('a.btnsubmit').unbind('click').click(function () {
                        $curlayer.find('.mesform').submit()
                    });
                })</script>
        </div>
        <script>                 $('#layerFA7142981F4F9B1279EA8BD66124B477').triggerHandler('layer_ready');</script>
    </div>
</div>
<script>
    (function () {
        $('#copyright2').css('left', ($('#canvas').width() - $('#copyright2').width()) / 2);
        var minzindex = 2000;
        $('#site_footer .full_content .cstlayer,#site_footer .full_content .full_column').each(function () {
            var zindex = parseInt($(this).css('z-index'));
            if (zindex >= minzindex) minzindex = zindex + 1;
        })
        $('#copyright2').css('z-index', minzindex);
    })()
</script>