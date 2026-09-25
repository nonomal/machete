<?php
//常用方法
require_once __DIR__ . '/../../../../plugins/Html.php';

$linkPrefix = '';
//多用户路径支持
if (!empty(FSC::$app['config']['multipleUserUriParse']) && !empty(FSC::$app['user_id'])) {
    $linkPrefix = '/' . FSC::$app['user_id'];
}
?><!DocType html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $pageTitle;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="icon" type="image/x-icon" href="/tajian/favicon.ico?v2">
<link href="/css/tajian_index.css?v<?=Html::getStaticFileVersion('tajian_index.css', 'css')?>" rel="stylesheet">
</head>
<body class="is-boxed has-animations" style="height: 100%;">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0 logo">
                            <a href="/" class="log_tn">
                                <span>Ta荐</span> - TaJian.tv
                            </a>
                        </h1>
                    </div>
                    <a class="connect_me_tn" href="/site/login/"><img src="/img/PersonalCenter.svg" alt="用户登录" width="22"></a>
                </div>
            </div>
        </header>

        <?php
        //### Render view file
        if (!empty($viewFile) && file_exists($viewFile)) {
            include_once $viewFile;
        }
        ?>

        <footer class="site-footer text-light">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="/" class="log_tn">
                            <span>Ta荐</span> - TaJian.tv
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li><a href="/site/terms" target="_blank">Terms</a></li>
                        <li><a href="/site/privacy" target="_blank">Privacy</a></li>
                        <li><a href="https://herounion.website" target="_blank">HeroUnion</a></li>
                        <li><a href="https://github.com/filesite-io/machete" target="_blank">源码下载</a></li>
                        <li><a href="/site/wakeup" target="_blank">觉醒者</a></li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li><a href="/site/about/">About</a></li>
                        <li><a href="/site/contact/">Contact</a></li>
                        <li><a href="https://medium.com/@tajian-tv" target="_blank">Blog</a></li>
                        <li><a href="https://www.youtube.com/@Tajian-TV" target="_blank">Vlog</a></li>
                    </ul>
                    <div class="footer-copyright">
                        <a href="https://filesite.io" target="_blank">&copy;FileSite.io</a>&nbsp;2022，耗时 {page_time_cost} ms
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <?php
    $user_id = '';
    if (!empty(FSC::$app['config']['multipleUserUriParse']) && !empty(FSC::$app['user_id'])) {
        $user_id = FSC::$app['user_id'];
    }
    ?>
    <script>var current_user_id = '<?=$user_id?>';</script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/lazyload.js"></script>
    <script src="/js/tajian.js?v<?=Html::getStaticFileVersion('tajian.js', 'js')?>"></script>
    <?php echo Html::getGACode(); ?>
</body>
</html>
