<?php
$linkPrefix = '';
//多用户路径支持
if (!empty(FSC::$app['config']['multipleUserUriParse']) && !empty(FSC::$app['user_id'])) {
    $linkPrefix = '/' . FSC::$app['user_id'];
}

$shareUrl = "{$linkPrefix}/";
?><main class="g_main_lay">
    <div class="breadcrumbs">
        <a href="<?=$linkPrefix?>/my/">&lt;&lt;返回</a>
    </div>
    <form class="g_form_style mt65" id="share_form" action="" method="POST">
        <div class="mb-3 pt20">
            <label for="text_share_content" class="form-label">分享链接</label>
            <textarea id="text_share_content" name="share_content" rows="5">tajian点tv<?=$shareUrl?> 
在浏览器地址栏输入打开“<?=$viewData['nickname']?>”的聚宝盆，整理了各大平台很不错的视频/直播。</textarea>
            <p class="mt10">点下面按钮复制分享内容，在微信、QQ等App里粘贴发给朋友。</p>
        </div>
        <div class="avform_bt">
            <button class="jsbtn" aria-label="复制" type="button" data-clipboard-target="#text_share_content">
                <div class="loading_bt bt_class_JS elementNone verMiddle">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20"></circle>
                    </svg>
                </div>
                <span class="bt_text_JS">复制</span>
                <div class="bt_loading_cover bt_class_JS elementNone"></div>
            </button>
        </div>
    </form>
</main>
<script src="/js/clipboard.min.js"></script>