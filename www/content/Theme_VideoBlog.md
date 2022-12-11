# Theme - VideoBlog

仿照谷歌图片搜索网站的视频网站皮肤**VideoBlog**。


## 皮肤特点

* 支持mp4和m3u8两种视频格式
* 支持nginx的防盗链功能
* 兼容PC和手机
* PC下视频高度相同，分多行展示，宽度自适应
* 手机下视频宽度占满屏幕，高度自适应
* 视频下方展示标题，标题不换行，超出部分自动隐藏
* 顶部展示一行分类，可左右滑动以展示更多分类
* 顶部展示网站名称、logo及介绍内容，介绍内容以悬浮菜单方式展示


## conf/app.php配置

```
'content_directory' => 'videos/',        //内容存放目录
'theme' => 'videoblog',                  //皮肤名称
```