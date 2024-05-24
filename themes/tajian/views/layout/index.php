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
                        <li>
                            <a href="https://github.com/filesite-io/machete" target="_blank">源码下载</a>
                        </li>
                        <li>
                            <a href="https://herounion.filesite.io" target="_blank">HeroUnion</a>
                        </li>
                        <li>
                            <a href="https://filesite.io" target="_blank">FileSite.io</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="https://space.bilibili.com/3461581318916273" target="_blank">
                                <span class="screen-reader-text">B站</span>
<svg width="18" height="18" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" fill="#FFFFFF">
    <g>
        <path fill="none" d="M0 0h24v24H0z"/>
        <path d="M18.223 3.086a1.25 1.25 0 0 1 0 1.768L17.08 5.996h1.17A3.75 3.75 0 0 1 22 9.747v7.5a3.75 3.75 0 0 1-3.75 3.75H5.75A3.75 3.75 0 0 1 2 17.247v-7.5a3.75 3.75 0 0 1 3.75-3.75h1.166L5.775 4.855a1.25 1.25 0 1 1 1.767-1.768l2.652 2.652c.079.079.145.165.198.257h3.213c.053-.092.12-.18.199-.258l2.651-2.652a1.25 1.25 0 0 1 1.768 0zm.027 5.42H5.75a1.25 1.25 0 0 0-1.247 1.157l-.003.094v7.5c0 .659.51 1.199 1.157 1.246l.093.004h12.5a1.25 1.25 0 0 0 1.247-1.157l.003-.093v-7.5c0-.69-.56-1.25-1.25-1.25zm-10 2.5c.69 0 1.25.56 1.25 1.25v1.25a1.25 1.25 0 1 1-2.5 0v-1.25c0-.69.56-1.25 1.25-1.25zm7.5 0c.69 0 1.25.56 1.25 1.25v1.25a1.25 1.25 0 1 1-2.5 0v-1.25c0-.69.56-1.25 1.25-1.25z"/>
    </g>
</svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.zhihu.com/people/30-41-11-34" target="_blank">
                                <span class="screen-reader-text">知乎</span>
<svg width="18" height="18" fill="#FFFFFF" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" class="icon">
    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm-90.7 477.8l-.1 1.5c-1.5 20.4-6.3 43.9-12.9 67.6l24-18.1 71 80.7c9.2 33-3.3 63.1-3.3 63.1l-95.7-111.9v-.1c-8.9 29-20.1 57.3-33.3 84.7-22.6 45.7-55.2 54.7-89.5 57.7-34.4 3-23.3-5.3-23.3-5.3 68-55.5 78-87.8 96.8-123.1 11.9-22.3 20.4-64.3 25.3-96.8H264.1s4.8-31.2 19.2-41.7h101.6c.6-15.3-1.3-102.8-2-131.4h-49.4c-9.2 45-41 56.7-48.1 60.1-7 3.4-23.6 7.1-21.1 0 2.6-7.1 27-46.2 43.2-110.7 16.3-64.6 63.9-62 63.9-62-12.8 22.5-22.4 73.6-22.4 73.6h159.7c10.1 0 10.6 39 10.6 39h-90.8c-.7 22.7-2.8 83.8-5 131.4H519s12.2 15.4 12.2 41.7H421.3zm346.5 167h-87.6l-69.5 46.6-16.4-46.6h-40.1V321.5h213.6v387.3zM408.2 611s0-.1 0 0zm216 94.3l56.8-38.1h45.6-.1V364.7H596.7v302.5h14.1z"></path>
    </g>
</svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.jianshu.com/u/4af0d80e3642" target="_blank">
                                <span class="screen-reader-text">简书</span>
<svg class="wCYvWN" width="28" height="14" fill="#FFFFFF" focusable="false" aria-hidden="true" viewBox="0 0 106 50" version="1.1" style="margin-top:2px">
    <g><path d="M79.6542664,49.2735656 L75.6602511,49.6932377 L75.6602511,27.3313525 L59.1137321,27.3313525 C58.6314725,27.3313525 57.9655336,26.8821721 57.8498237,26.1776639 L57.5346557,23.1870902 L75.6602511,23.1887295 L75.6602511,12.1260246 L62.1759992,12.1260246 C61.6180832,12.0858607 61.0229458,11.7788934 60.8894344,10.9870902 L60.5819534,7.93790984 L75.6602511,7.93790984 L75.6602511,0.409631148 L81.2074496,0.409631148 L81.2074496,7.93790984 L97.4727855,7.93790984 L97.4727855,23.1887295 L103.836831,23.1887295 L103.836831,38.1235656 C103.836831,42.2026639 100.70174,44.4715164 97.7187702,44.4715164 L92.357274,44.4715164 C91.6217473,44.4715164 91.0290374,43.9440574 90.9659229,43.3719262 L90.6681519,40.5223361 L92.1274725,40.5223361 L95.7933733,40.5223361 C97.0864115,40.5223361 98.3321137,39.6739754 98.3321137,38.1235656 L98.3321137,27.3313525 L81.2074496,27.3313525 L81.2074496,47.4452869 C81.2074496,48.5985656 80.4148771,49.1264344 79.6542664,49.2735656 L79.6542664,49.2735656 Z M81.260045,22.917418 L91.9745412,22.917418 L91.9745412,12.0514344 L81.260045,12.0514344 L81.260045,22.917418 Z M104.57519,13.9920082 L100.167289,13.9920082 C99.5871214,9.9170082 97.5274038,5.26987705 95.0355947,1.96209016 L100.167289,1.96209016 C102.583037,4.95553279 104.693327,8.85922131 105.720556,12.5608607 C105.867015,13.1711066 105.472144,13.9920082 104.57519,13.9920082 L104.57519,13.9920082 Z"></path><path d="M4.98236412,12.0515574 L9.99834885,12.0515574 C11.3953641,13.8056557 12.3169977,15.077377 13.7310053,18.5515574 C13.8337687,18.8339344 13.9130664,20.2007377 12.5900893,20.2007377 L8.57624962,20.2007377 C7.43047863,15.8630328 6.43521145,14.337623 4.97831832,12.0540164 C3.51980687,13.0105738 1.86507405,13.8138525 -4.04580153e-05,14.3802459 L-4.04580153e-05,10.3880328 C2.35987557,9.24172131 4.08662366,7.6892623 5.34608168,5.85278689 C6.43399771,4.2654918 7.18206641,2.47901639 7.58300534,0.409754098 L11.8043947,0.409754098 C12.772555,0.409754098 13.2313489,1.06877049 13.0962191,1.56139344 C12.9129443,2.1392623 12.5342573,2.99377049 12.1640664,3.78270492 L25.2676084,3.78270492 L25.0038221,6.30278689 C24.9370664,6.85483607 24.5227763,7.57532787 23.6181351,7.57532787 L17.5377,7.57532787 C18.2930511,9.24336066 18.7571046,10.7601639 18.9112496,11.3568852 C19.0508298,11.9036066 18.7004634,12.7810656 17.765074,12.7810656 L13.9850817,12.7810656 C13.7127992,10.9581148 13.4073412,9.70811475 12.633784,7.57532787 L9.82963893,7.57532787 C8.54266947,9.20852459 6.93891374,10.7679508 4.98236412,12.0515574 L4.98236412,12.0515574 Z M14.1651198,43.4847541 L14.1651198,22.1413115 L34.8367382,22.1413115 L34.8367382,36.8896721 C34.9253412,41.1093443 31.729158,43.4847541 28.4929214,43.4847541 L14.1651198,43.4847541 Z M35.3776618,49.3056557 C34.6793565,49.3056557 34.1008069,48.7921311 34.0028985,48.0851639 L33.669929,45.2757377 L38.4682496,45.2372131 C39.5310817,45.2372131 40.5696389,44.5277869 40.5696389,42.9769672 L40.5696389,18.4761475 L16.1390664,18.4761475 C15.6288908,18.4761475 15.0078603,18.2769672 14.819326,17.2298361 L14.5478527,14.3802459 L45.940845,14.3802459 L45.940845,43.4048361 C45.940845,45.4257377 44.1275168,49.2339344 39.6552878,49.3056557 L35.3776618,49.3056557 Z M6.84505115,49.2904918 L3.0626313,49.6933607 L3.0626313,20.2007377 L8.42250916,20.2007377 L8.42250916,47.3646721 C8.42250916,48.0146721 8.09399008,49.0794262 6.84505115,49.2904918 L6.84505115,49.2904918 Z M41.1040893,12.617541 L37.1335397,12.617541 C36.8025931,10.8986885 36.5436618,9.44581967 35.7462344,7.47942623 L32.2174863,7.47942623 C31.3132496,8.52245902 30.2645779,9.69581967 28.8404557,10.8204098 C27.3799214,11.9736885 25.5018603,13.1154918 22.9704023,13.9917213 L22.9704023,9.96672131 C27.0331962,7.6904918 29.0237305,4.6007377 29.9906771,0.409754098 L34.2080206,0.409754098 C35.3258756,0.409754098 35.6547992,1.21385246 35.5848069,1.4892623 C35.3121198,2.35811475 34.9075397,2.9892623 34.6032954,3.70360656 L48.620784,3.70360656 L48.3602344,6.23434426 C48.2724405,6.99745902 47.669616,7.47942623 47.0243107,7.47942623 L40.7173107,7.47942623 C41.4892496,9.14459016 41.945616,10.3318852 42.1398145,11.2503279 C42.223158,11.6478689 41.9775779,12.5761475 41.1040893,12.617541 L41.1040893,12.617541 Z M19.1422649,39.6040164 L27.579784,39.6040164 C29.230471,39.6040164 29.861616,38.5290164 29.861616,37.3347541 L29.861616,34.5634426 L19.1693718,34.5589344 L19.1422649,39.6040164 Z M19.1422649,30.6786066 L29.8620206,30.6786066 L29.8620206,26.0220492 L19.1422649,26.0220492 L19.1422649,30.6786066 Z"></path></g>
</svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2024 Machete, execute {page_time_cost} ms</div>
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
