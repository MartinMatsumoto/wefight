<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
@$key = $_COOKIE['wefight_manager_key'];
@$name = $_COOKIE['wefight_manager_name'];
@$id = $_COOKIE['wefight_manager_id'];

$url = './login.php';
if (!empty($key) && !empty($name) && !empty($id)) {
    $ip = $_SERVER["REMOTE_ADDR"];
    $keyBeforeSha = $ip . $id;
    $keySha = sha1($keyBeforeSha);
    if ($keySha != $key) {
        Header("HTTP/1.1 303 See Other");
        Header("Location: $url");
        exit;
    }
} else {
    Header("HTTP/1.1 303 See Other");
    Header("Location: $url");
    exit;
}

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>成都北武咏春国术馆-后台管理系统</title>

    <link rel="stylesheet" type="text/css" href="css/desktop.css"/>
    <link rel="stylesheet" type="text/css" href="css/ext-all.css"/>
    <script type="text/javascript" src="js/ext-all.js"></script>
    <script type="text/javascript">
        Ext.Loader.setPath({
            'Ext.ux.desktop': 'js',
            MyDesktop: './modules'
        });

        Ext.require('MyDesktop.App');

        var myDesktopApp;
        Ext.onReady(function () {
            myDesktopApp = new MyDesktop.App();
        });
    </script>
    <!-- </x-compile> -->
</head>

<body>
<div id="poweredby">
    <div></div>
</div>

</body>
</html>
