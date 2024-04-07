<!-- ----------------------------------
 * 小枫毛玻璃拟态UI - 个人引导页（开源版）
 * 作者：小枫
 * 技术栈：
 * UI：Photoshop
 * 前端：HTML5 CSS3 JS jQuery
 * 本源码可以任意转载，但不能商用或变相商用！代码制作不易希望转载者能给枫留个名  :heart: (ɔˆз(ˆ⌣ˆc)（开源版严禁商用）。
 -------------------------------------- -->
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>毛玻璃拟态UI - 个人主页（开源版）</title>
    <meta name="keywords" content="毛玻璃,毛玻璃个人主页,个人主页,毛玻璃ui,拟态ui设计,拟态ui,个人引导页,个人介绍页,拟态引导页,简约个人主页,个人主页源码,原创,小枫网络,小枫拟态ui,小枫拟态ui5.0">
    <meta name="description" content="毛玻璃拟态UI个人主页是小枫原创的一款简约风格开源的新UI主页设计。">
    <meta name="author" content="小枫">
    <link rel="shortcut icon" href="〖放图标〗/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.staticfile.org/Swiper/8.3.0/swiper-bundle.min.css">
    <?php include "assets/ys.php";?>
    <!-- <link rel="stylesheet" href="./static/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="./static/css/normalize.css">
    <!-- 点开下面两个css，都是第四行代码替换背景 -->
    <link rel="stylesheet" href="./static/css/style.pc.css" media="screen and (min-width: 992px)"> <!-- PC端 -->
    <link rel="stylesheet" href="./static/css/style.phone.css" media="screen and (max-width: 992px)"> <!-- 移动端 -->
    <!-- 本地路径（如果免费的静态托管链接打不开就开本地的吧） -->
    <!-- <script src="./static/sweetalert/docs/assets/sweetalert/sweetalert.min.js"></script> -->
    <!-- <script src="./static/js/jquery-3.5.1.min.js"></script> -->
    <!-- 静态资源托管 -->
    <script src="https://npm.elemecdn.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
</head>

<body onmousedown="getClick(event)">
    <div class="xf_load">
        <span>页面加载中...</span>
    </div>
    <section class="big_box">
        <header class="xf_hd_box">
            <!-- 标题 -->
            <h1>Glass Mimic UI</h1>
            <!-- 标题阴影（两个要改一样的） -->
            <h2 class="xf_glass">Glass Mimic UI</h2>
            <div class="xf_search">
                <form action="https://www.baidu.com/baidu" target="_blank">
                    <input type="text" name="word" size="30" autocomplete="off" placeholder="百度一下">
                    <input type="submit" value=""><i class="iconfont icon-sousuo"></i>
                </form>
            </div>
        </header>
        <div class="main_content">
            <div class="xf_left_box slidebox">
                <div class="xf_leftbox_top xf_glass">
                    <div class="xf_time xf_glass">
                        <div class="clock">
                            <div class="hand hours"></div>
                            <div class="hand minutes"></div>
                            <div class="hand seconds"></div>
                            <div class="point"></div>
                            <div class="marker">
                                <span class="marker_time marker__1"></span>
                                <span class="marker_time marker__2"></span>
                                <span class="marker_time marker__3"></span>
                                <span class="marker_time marker__4"></span>
                            </div>
                        </div>
                        <div class="display_time">
                            <h3 class="xf_time_1">20:57</h3>
                            <h4 class="xf_time_2">2022年10月23日</h4>
                            <h5 class="xf_time_3">星期日</h5>
                        </div>
                    </div>
                    <div class="xf_weather xf_glass">
                        <div id="he-plugin-standard"></div>
                    </div>
                </div>
                <div class="xf_ico_banner">
                    <div class="swiper-wrapper">
                        <!-- 这是第一个轮播 -->
                        <div class="swiper-slide">
                            <ul>
                                <li class="xf_glass">
                                    <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                        <img src="./static/upload/qq.png">
                                    </a>
                                </li>
                                <li class="xf_glass">
                                    <a href="JavaScript:;" rel="noopener noreferrer">
                                        <!-- 这里切换微信图片 -->
                                        <img loading="lazy" id="xf_wxImg" src="./static/upload/tx.jpg" alt="扫一扫添加微信" width="300" height="200">
                                        <img src="./static/upload/wx.png">
                                    </a>
                                </li>
                                <li class="xf_glass">
                                    <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                        <img src="./static/upload/bilibili.png">
                                    </a>
                                </li>
                                <li class="xf_glass">
                                    <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                        <img src="./static/upload/mail.png">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- 这是第二个轮播 -->
                        <div class="swiper-slide">
                            <ul>
                                <li class="xf_glass">
                                    <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                        <img src="./static/upload/qq.png">
                                    </a>
                                </li>
                                <li class="xf_glass">
                                    <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                        <img src="./static/upload/wx.png">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next-ico"></div>
                    <div class="swiper-button-prev swiper-button-prev-ico"></div>
                </div>
            </div>
            <div class="xf_center_box slidebox">
                <div class="center_top xf_glass">
                    <div class="xf_jieshao">
                        <div class="xf_tx xf_glass"><img src="./static/upload/tx.jpg" alt="头像"></div>
                        <div class="name">
                            <small>ye xiao feng</small>
                            <h3>叶晓枫</h3>
                            <p>我热爱你所热爱的一切！</p>
                        </div>
                        <div class="iconfont icon-zhuanfa xf_zhuanfa"></div>
                    </div>
                    <div class="xf_but">
                        <a class="but_site" href="JavaScript:;">
                            <span>旗下站点</span>
                            <div></div>
                        </a>
                        <a class="but_fortune" href="JavaScript:;">
                            <span>今日运势</span>
                            <div></div>
                        </a>
                    </div>
                </div>
                <div class="center_bottom">
                    <div class="xf_site xf_glass">
                        <h4>
                            <font>旗下站点</font>
                        </h4>
                        <ul class="web_site">
                            <li class="xf_glass">
                                <!-- 这里替换链接 -->
                                <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                    <!-- 这里替换图标 -->
                                    <img class="xf_img_light" src="〖放图标〗/favicon.ico" alt="小枫网络"><span>小枫网络</span>
                                </a>
                            </li>
                            <li class="xf_glass">
                                <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                    <img class="xf_img_light" src="〖放图标〗/favicon.ico" alt="小枫音乐播放器"><span>小枫音乐播放器</span>
                                </a>
                            </li>
                            <li class="xf_glass">
                                <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                    <img class="xf_img_light" src="〖放图标〗/favicon.ico" alt="小枫拟态ui"><span>小枫拟态ui</span>
                                </a>
                            </li>
                            <li class="xf_glass">
                                <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                    <img class="xf_img_light" src="〖放图标〗/favicon.ico" alt="鸡你太美"><span>鸡你太美</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="xf_fortune xf_glass" style="display: none;">
                        <h4>
                            <font>今日运势: <span>★★★★★</span></font>
                        </h4>
                        <ul class="Today_Fortune xf_glass">
                            <li><strong>运势：</strong><span><em style="width: 45%;"></em></span></li>
                            <li><strong>爱情：</strong><span><em style="width: 70%;"></em></span></li>
                            <li><strong>健康：</strong><span><em style="width: 100%;"></em></span></li>
                            <li><strong>财富：</strong><span><em style="width: 20%;"></em></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="xf_right_box xf_glass slidebox">
                <div class="xf_music_box">
                    <i class="iconfont icon-youjiantou" id="icon-rotate"></i>
                    <div class="music_picture xf_glass">
                        <span id="music-img" class="music-img" alt="picture"></span>
                    </div>
                    <div class="Song_Title">
                        <div class="music-info"></div>
                        <div class="runningbox">
                            <div class="start">00:00</div>
                            <div class="running" onclick="changeProgress()">
                                <div class="running1"><i class="circular"></i></span></div>
                            </div>
                            <div class="end">00:00</div>
                        </div>
                        <ul class="music_but">
                            <li id="pre" class="iconfont" onclick="preMusic()">&#xe603;</li>
                            <li id="pause" class="iconfont" onclick="pauseMusic()">&#xe638;</li>
                            <li id="next" class="iconfont" onclick="nextMusic()">&#xe602;</li>
                        </ul>
                    </div>
                </div>
                <div class="xf_friends" style="display: none;">
                    <h4 id="xf-friend-rotate"><img src="./static/images/cooperation.png">我的好友</h4>
                    <ul class="xf_friend_YYDS">
                        <li>
                            <!-- 跳转链接 把123456替换你的QQ就行 -->
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes" target="_blank" rel="noopener noreferrer">
                                <!-- 获取你的QQ头像 -->
                                <img src="https://q2.qlogo.cn/headimg_dl?dst_uin=123456&amp;spec=100" alt="小枫">
                                <h5>小枫</h5>
                                <p>我热爱你所热爱的一切！</p>
                            </a>
                        </li>
                        <li>
                            <a href="JavaScript:;" target="_blank" rel="noopener noreferrer">
                                <img src="https://q2.qlogo.cn/headimg_dl?dst_uin=123456&amp;spec=100" alt="小枫">
                                <h5>小枫</h5>
                                <p>我热爱你所热爱的一切！</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div id="myModal" class="modal">
        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
    <div class="xf-swiper-pagination"></div>
    <footer class="xf_footer xf_glass">
        <p>Copyright &copy; 2022 <a href="JavaScript:;" rel="noopener noreferrer">小枫网络</a> 版权所有 已安全运行<span class="xf-days"></span></p>
        <!-- 如果没有备案号就把下面两个p标签注释 -->
        <p><img src="./static/images/icp.png" alt="icp备案"><a href="https://beian.miit.gov.cn/" target="_blank" rel="noopener noreferrer">赣ICP备2020011714号-5</a></p>
        <p><img src="./static/images/beian.png" alt="公安备案"><a href="https://www.beian.gov.cn/portal/registerSystemInfo?recordcode=36082502000055" target="_blank" rel="noopener noreferrer">赣公网安备36082502000055号</a></p>
    </footer>
    <script src="https://cdn.staticfile.org/Swiper/8.3.0/swiper-bundle.min.js"></script>
    <!-- <script src="./static/swiper/swiper-bundle.min.js"></script> -->
    <script src="./static/js/flexible.js"></script>
    <script src="./static/js/fireworks.js"></script>
    <script src="./static/js/index.js"></script>
    <script src="https://widget.qweather.net/standard/static/js/he-standard-common.js?v=2.0"></script>
    <script>
        // 这里修改网站运行时间
        var xf_footer_time1=new Date('2022-10-23').getTime()
        var xf_footer_time2=new Date().getTime()
        var days=xf_footer_time2-xf_footer_time1
        var number_of_days=parseInt(days/(1000*60*60*24))
        $(".xf-days")[0].innerHTML=number_of_days+'天'
    </script>
</body>

</html>