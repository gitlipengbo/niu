<?php if (!defined('THINK_PATH')) exit(); $niuname['0']='无牛'; $niuname['1']='牛一'; $niuname['2']='牛二'; $niuname['3']='牛三'; $niuname['4']='牛四'; $niuname['5']='牛五'; $niuname['6']='牛六'; $niuname['7']='牛七'; $niuname['8']='牛八'; $niuname['9']='牛九'; $niuname['10']='牛牛'; $niuname['11']='五花牛'; $niuname['12']='炸弹牛'; $niuname['13']='五小牛'; ?>
<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="renderer" content="webkit" />
    <title>授权大厅</title>
    <meta name="apple-mobile-web-app-title" content="授权大厅" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <script src="//res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
    <script src="/app/js/jquery3.2.1.min.js"></script>
    <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/public.css" />
    <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/alert.css" />
    <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/swiper-3.4.2.min.css" />
    <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bull_vue-1.0.0.css" />
    <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bullalert.css" />
    <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bullshop.css" />
    <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/common/alert.css" />
    <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/activity.css">
    <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/dasheng.css">
</head>
<body>
<div id="loadings" style="position:fixed;top:0;right:0;bottom:0;left:0;background:#fff;z-index:999;font-size:16px;">
    <div class="spinner">
        <div class="spinner-container container1">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <div class="spinner-container container2">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <div class="spinner-container container3">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
    </div>
    <div class="loadings-text">
        页面加载中
        <span data-item="1">.</span>
        <span data-item="2">.</span>
        <span data-item="3">.</span>
    </div>
</div>
<div id="networkReconnect" style="position: fixed; width:2.88rem; line-height:.2rem; font-size:.1rem; left:.36rem; text-align: center; bottom:45%; background: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0)); background: -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0)); background: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0)); color:#fff; display:none; z-index:9999;">
    您的网络已断开，我们正在尝试重连...
</div>
<div class="wrap">
    <div class="top">
        对战明细
        <div class="return"></div>
        <div class="scoreboard"></div>
    </div>
    <div class="detailed">
        <div class="game-info">
            <div class="game-code"><?php print_r($dkxx); ?>
                房间号：<?php echo ($room['roomid']); ?>
            </div>
            <div class="times">
                <?php echo date('Y/m/d H:i:s', $room['time']);?> ~ <?php echo date('Y/m/d H:i:s', $room['endtime']);?>
            </div>
        </div>
        <div class="game-rules">
            <?php echo ($room['zjs']); ?>局<?php echo ($room['fk']); ?>房卡

            <?php if($room['df']): ?>底注<?php echo ($room['df']); endif; ?>

            <?php echo ($room['wfname']); ?>

            <?php if($room['gz']): echo ($room['gz']); endif; ?>

            <?php if($room['px']): ?>牌型:
                <?php echo implode('-',$room['px']); endif; ?>

            <?php if($room['sz']): ?>上庄：<?php echo ($room['sz']); endif; ?>
        </div>
    </div>
    <div class="detailed-list">
        <?php foreach( $dj as $one ): ?>
        <?php
 $djxx = json_decode($one['djxx'],true); $my_one = []; foreach( $djxx as $j_one ) { if( $user['id'] == $j_one['user']['id'] ) { $my_one = $j_one; } } ?>
        <div class="detailed-item">
          <div class="item-top">
              <div class="innings"><span class="innings-text">局数：</span><span class="innings-number"><?php echo ($one["js"]); ?>/<?php echo ($room['zjs']); ?></span></div>
              <?php if( $my_one['jf'] >= 0 ): ?>
              <div class="win-lost-score">
                  <span class="win-lost">积分</span>
                  <span class="score"><?php echo ($my_one["jf"]); ?></span>
              </div>
              <?php endif; ?>

              <?php if( $my_one['jf'] < 0 ): ?>
                  <div class="win-lost-score lost">
                      <span class="win-lost">积分</span>
                      <span class="score"><?php echo ($my_one["jf"]); ?></span>
                  </div>
              <?php endif; ?>
          </div>
          <div class="item-info">
              <div class="info-head">
                  <div class="head-user-name">用户名字</div>
                  <div class="head-card-type">牌型</div>
                  <div class="head-multiple">倍数</div>
                  <div class="head-info-score">积分</div>
              </div>
              <div class="info-list">
                  <?php $all_user = json_decode( $room['user'], TRUE ); ?>
                  <?php foreach( $djxx as $line ): ?>
                  <?php if( isset( $all_user[$line['user']['id']] ) ) unset($all_user[$line['user']['id']]); ?>
                  <?php $line_user = userdata($line['user']['id']); ?>
                    <div class="info-list-item flex-center">
                        <div class="list-user-name flex-center">
                          <div class="user-path">
                              <img src="<?php echo ($line_user["img"]); ?>">
                              <?php if($line['sfbank'] != 0): ?><span>庄</span><?php endif; ?>
                          </div>
                          <div class="user-name-text"><?php echo ($line_user["nickname"]); ?></div>
                        </div>
                        <div class="list-card-type flex-center">
                          <div class="card-type-text">
                              <div class="card-type-text2"><?php echo ($niuname[$line['user']['niu']]); ?> </div>
                          </div>
                          <div class="card-type">
                              <div class="cardbox cardOver">
                                  <?php foreach($line['user']['card'] as $keyxx=>$three){ ?>
                                  <div class="back card<?php echo ($three["card"]); ?> pai<?php echo $keyxx+1 ?>"></div>
                                  <?php } ?>
                              </div>
                          </div>
                        </div>
                        <div class="list-multiple"><?php echo ($line["beishu"]); ?>倍 </div>
                        <div class="list-info-score">
                            <?php if($line['jf'] > 0): ?>+<?php echo ($line["jf"]); ?>
                                <?php else: ?>
                                <?php echo ($line["jf"]); endif; ?>
                        </div>
                    </div>
                  <?php endforeach; ?>
                  <?php foreach( $all_user as $un_join => $v ): ?>
                  <?php $line_user = userdata($un_join); ?>
                  <div class="info-list-item flex-center">
                      <div class="list-user-name flex-center">
                          <div class="user-path">
                              <img src="<?php echo ($line_user["img"]); ?>">
                          </div>
                          <div class="user-name-text"><?php echo ($line_user["nickname"]); ?></div>
                      </div>
                      <div class="list-card-type flex-center"></div>
                      <div class="" style="font-size: .1440rem; position: relative; right: 35%; color: #ecba85;">本局未参加</div>
                  </div>
                  <?php endforeach; ?>
              </div>
          </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<script type="text/javascript" src="/app/js/jquery3.2.1.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("div.detailed-item").click(function(e) {
            $(this).find(".item-info").slideToggle();
            if($(this).find(".item-top").hasClass("icon")) {
                $(this).find(".item-top").removeClass("icon");
            } else {
                $(this).find(".item-top").addClass("icon");
            }

        });
    });
</script>
<script>

    $.alert = function(msg, fn, style, sec) {
        style = style || 'success';
        if (typeof(fn) == 'string') {
            style = fn;
        }
        if (!sec) {
            if (style == 'error' || style == 'puncherror') {
                sec = 9;
            } else {
                sec = 0;
            }
        }
        var box = $('<div>').addClass('resourceBox ' + style).attr('id', 'alertBox');
        box.html('<div class="context">' + msg + '</div>');
        box.appendTo('body');
        var h = win.width / 360 * 100;
        box.css({
            'opacity': 1,
            'margin-top': -1 * (box.height() + h) / 2
        });
        if (sec >= 9) {
            var alertBoxLay = $('<div>').addClass('alertBoxLay').appendTo('body');
            $('<a>').attr('href', 'javascript:void(0);').addClass('closed').appendTo(box).text('我知道了');
            $('#alertBox a.closed, .alertBoxLay').click(function() {
                box.css({
                    'opacity': 0,
                    'margin-top': -1 * (box.height() + h)
                });
                alertBoxLay.css('opacity', 0);
                setTimeout(function() {
                        box.remove();
                        alertBoxLay.remove();
                        if (typeof(fn) == 'function') fn();
                    },
                    500);
            });
        } else {
            setTimeout(function() {
                    box.css({
                        'opacity': 0,
                        'margin-top': -1 * (box.height() + h)
                    });
                    setTimeout(function() {
                            box.remove();
                            if (typeof(fn) == 'function') fn();
                        },
                        500);
                },
                1000 + sec * 1000);
        }
    };
    $.dialog = function(msg, fn, is_lock, classname) {
        is_lock = is_lock || true;
        if (typeof(fn) != 'function') return;
        classname = classname || '';
        var box = $('<div>').addClass('resourceBox  ' + classname).attr('id', 'dialogBox');
        var sb = $('<div>').addClass('sbox').appendTo(box);
        sb.html('<div class="context">' + msg + '</div>');
        box.appendTo('body');
        var h = win.width / 360 * 100;
        box.css({
            'opacity': 1,
            'margin-top': -1 * (box.height() + h) / 2
        });
        if (is_lock) {
            var dialogBoxLay = $('<div>').addClass('dialogBoxLay').appendTo('body');
        }
        var btns = $('<div>').addClass('btns').appendTo(sb);
        $('<button>').addClass('closeBtn').appendTo(btns).text('否');
        var agree = $('<button>').addClass('agree').appendTo(btns).text('是');
        agree.click(function() {
            if (fn() !== false) {
                box.css({
                    'opacity': 0,
                    'margin-top': -1 * (box.height() + h)
                });
                if (is_lock) dialogBoxLay.css('opacity', 0);
                setTimeout(function() {
                        box.remove();
                        if (is_lock) dialogBoxLay.remove();
                    },
                    500);
            }
        });
        $('#dialogBox button.closeBtn, .dialogBoxLay, .clearpsd, .noticeid').click(function() {
            box.css({
                'opacity': 0,
                'margin-top': -1 * (box.height() + h)
            });
            dialogBoxLay.css('opacity', 0);
            setTimeout(function() {
                    box.remove();
                    dialogBoxLay.remove();
                },
                500);
        });
    };
    $.fn.touch = function(callback) {
        this.each(function() {
            if (typeof(callback) == 'function') {
                if (navigator.userAgent.indexOf('QQBrowser') > 0) {
                    $(this).on('click', callback);
                } else {
                    var time = 0;
                    this.fn = callback;
                    $(this).on('touchstart',
                        function() {
                            time = (new Date()).getTime();
                        });
                    $(this).on('touchend',
                        function() {
                            if ((new Date()).getTime() - time <= 300) {
                                this.fn(this);
                            }
                        });
                }
            } else {
                if (navigator.userAgent.indexOf('QQBrowser') > 0) {
                    $(this).click();
                } else {
                    this.fn(this);
                }
            }
        });
    };
    function ajax(path, data, fn, type) {
        if (!IS_SSL) var url = 'http://' + API_DOMAIN + '/';
        else var url = 'https://' + API_DOMAIN + '/';
        var async = type === false ? false: true;
        if (typeof(data) == 'function') {
            fn = data;
            data = {};
        }
        var arr = location.href.substr(url.length).split('/');
        https = [arr[0] ? arr[0] : 'home', arr[1] ? arr[1] : 'index', arr[2] ? arr[2] : 'index'];
        var arr = path.split('/');
        switch (arr.length) {
            case 3:
                https[2] = arr[2];
            case 2:
                https[1] = arr[1];
            case 1:
                https[0] = arr[0];
        }
        url += https.join('/') + '.html';
        if (win.token != null) {
            url += "?token=" + win.token + "&v=" + win.version;
            var postdata = {};
            var getdata = [];
            if (data) {
                if (data.get) {
                    if (data.post) postdata = data.post;
                    for (i in data.get) {
                        getdata.push(i + '=' + encodeURIComponent(data.get[i]));
                    }
                    url += '&' + getdata.join('&');
                } else {
                    postdata = data;
                }
            }
            var arr = [];
            for (var i in postdata) {
                if (postdata[i] instanceof Array) {
                    for (var j in postdata[i]) {
                        arr.push(i + '[]=' + encodeURIComponent(postdata[i][j]));
                    }
                } else if (typeof(postdata[i]) == 'number' || typeof(postdata[i]) == 'string') {
                    arr.push(i + '=' + encodeURIComponent(postdata[i]));
                }
            }
            postdata = arr.join('&');
            var xmlHttp = new XMLHttpRequest();
            if (xmlHttp != null) {
                xmlHttp.open("POST", url, true);
                xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=utf-8");
                xmlHttp.send(postdata);
                xmlHttp.onreadystatechange = function() {
                    if (xmlHttp.readyState == 4) {
                        if (xmlHttp.status == 200) {
                            var data = '';
                            try {
                                data = JSON.parse(xmlHttp.responseText);
                            } catch(e) {
                                data = xmlHttp.responseText;
                            }
                            if (typeof(fn) == 'function') fn(data);
                        }
                    }
                };
            } else {
                alert("Your browser does not support XMLHTTP.");
            }
        }
    }
    String.prototype.decodeURL = function() {
        var url = this.toString();
        if (url.indexOf('?') > 0) {
            url = url.split('?')[1];
        }
        var arr = url.split('&');
        var params = {};
        for (var i in arr) {
            var a = arr[i].split('=');
            if (a.length == 2) {
                params[a[0]] = a[1];
            }
        }
        return params;
    };
    String.prototype.timeFormat = function(format) {
        var time = this.toString();
        if (/^\d+$/.test(time)) {
            var myDate = new Date(time * 1000);
        } else {
            time = time.replace(/\-/g, '/');
            var myDate = new Date(time);
        }
        var _date = {};
        _date.Y = myDate.getFullYear();
        _date.m = (myDate.getMonth() + 1).toString();
        if (_date.m.length == 1) _date.m = '0' + _date.m;
        _date.d = myDate.getDate().toString();
        if (_date.d.length == 1) _date.d = '0' + _date.d;
        _date.H = myDate.getHours();
        if (_date.H.length == 1) _date.H = '0' + _date.H;
        _date.i = myDate.getMinutes().toString();
        if (_date.i.length == 1) _date.i = '0' + _date.i;
        _date.s = myDate.getSeconds().toString();
        if (_date.s.length == 1) _date.s = '0' + _date.s;
        _date.w = myDate.getDay().toString();
        weekday = ['周日', '周一', '周二', '周三', '周四', '周五', '周六'];
        _date.W = weekday[myDate.getDay()];
        for (var i in _date) {
            format = format.replace(i, _date[i]);
        }
        return format;
    };
    function share(title, desc, link, imgUrl, fun) {
        imgUrl = getShareIconLink(win.gameId);
        wx.onMenuShareTimeline({
            title: title,
            desc: desc,
            link: link,
            imgUrl: imgUrl,
            success: function(res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
        wx.onMenuShareAppMessage({
            title: title,
            desc: desc,
            link: link,
            imgUrl: imgUrl,
            success: function(res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
        wx.onMenuShareQQ({
            title: title,
            desc: desc,
            link: link,
            imgUrl: imgUrl,
            success: function(res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
        wx.onMenuShareWeibo({
            title: title,
            desc: desc,
            link: link,
            imgUrl: imgUrl,
            success: function(res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
        wx.onMenuShareQZone({
            title: title,
            desc: desc,
            link: link,
            imgUrl: imgUrl,
            success: function(res) {
                if (typeof(fun) == 'function') fun(res);
            }
        });
    }
    function setTitle(title) {
        document.title = title;
        if (/ip(hone|od|ad)/i.test(navigator.userAgent)) {
            var i = document.createElement('iframe');
            i.src = '/favicon.ico';
            i.style.display = 'none';
            i.onload = function() {
                setTimeout(function() {
                        i.remove();
                    },
                    9)
            }
            document.body.appendChild(i);
        }
    }
    function isIOS() {
        return /iphone|ipad|ipod/.test(navigator.userAgent.toLowerCase());
    }
    function createCode(len) {
        var char = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'.split('');
        var code = '';
        for (var i = 0; i < len; i++) {
            code += char[Math.floor(Math.random() * 62)];
        }
        return code;
    }
    function oClone(obj) {
        var _obj = {};
        for (var i in obj) {
            if (typeof(obj[i]) == 'object' && !(obj[i] instanceof Array)) {
                _obj[i] = oClone(obj[i]);
            } else {
                _obj[i] = obj[i];
            }
        }
        return _obj;
    }
    function cacl(arr, callback) {
        var ret;
        for (var i = 0; i < arr.length; i++) {
            ret = callback(arr[i], ret);
        }
        return ret;
    }
    function array_max(array) {
        return cacl(array,
            function(item, max) {
                if (! (max > item)) {
                    return item;
                } else {
                    return max;
                }
            });
    }
    function array_min(array) {
        return cacl(array,
            function(item, min) {
                if (! (min < item)) {
                    return item;
                } else {
                    return min;
                }
            });
    }
    function array_sum(array) {
        return cacl(array,
            function(item, sum) {
                if (typeof(sum) == 'undefined') {
                    return item;
                } else {
                    return sum += item;
                }
            });
    }
    function array_avg(array) {
        if (array.length == 0) {
            return 0;
        }
        return array_sum(array) / array.length;
    }
    var win = {
        width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
        height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
        version: '1.0.0',
        ws: {},
        status: 0,
        readed: 0,
        gameId: 0,
        reset: function(fn) {
            this.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            this.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
            document.getElementsByTagName('html')[0].setAttribute('style', 'font-size:' + 100 * (this.width / 360) + 'px !important');
            if (typeof(fn) == 'function') fn();
        },
        loading: function() {
            if (this.overlay) {
                this.overlay.remove();
                this.overlay = null;
            }
            this.overlay = $('<div>').css({
                'position': 'fixed',
                'width': '100%',
                'height': '100%',
                'background': 'rgba(255,255,255,0.7)',
                'z-index': 110000
            }).appendTo('body');
            if (this.loadingLay) {
                this.loadingLay.remove();
                this.loadingLay = null;
            }
            var code = '<div class="spinner">';
            code += ' <div class="spinner-container container1">';
            code += ' <div class="circle1"></div>';
            code += ' <div class="circle2"></div>';
            code += ' <div class="circle3"></div>';
            code += ' <div class="circle4"></div>';
            code += ' </div>';
            code += ' <div class="spinner-container container2">';
            code += ' <div class="circle1"></div>';
            code += ' <div class="circle2"></div>';
            code += ' <div class="circle3"></div>';
            code += ' <div class="circle4"></div>';
            code += ' </div>';
            code += ' <div class="spinner-container container3">';
            code += ' <div class="circle1"></div>';
            code += ' <div class="circle2"></div>';
            code += ' <div class="circle3"></div>';
            code += ' <div class="circle4"></div>';
            code += ' </div>';
            code += '</div>';
            document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code);
        },
        close_loading: function() {
            if (this.overlay) {
                this.overlay.remove();
                this.overlay = null;
            }
            if (this.loadingLay) {
                this.loadingLay.remove();
                this.loadingLay = null;
            }
        },
        closeLoading: function() {
            document.getElementById('loadings').style.opacity = 0;
            setTimeout(function() {
                    document.getElementById('loadings').style.display = 'none';
                },
                500);
        },
        load: function() {
            this.reset();
            if (typeof(Page) == 'object' && typeof(Page.load) == 'function') Page.load();
        },
        ready: function() {
            this.reset();
            if (typeof(Page) == 'object' && typeof(Page.ready) == 'function') Page.ready();
        },
        readyJoin: function(code, func) {
            ajax('home/index/readyJoin', {
                    code: code
                },
                function(d) {
                    win.gameId = d.game;
                    var user_list = d.room_users;
                    if (typeof(d.info) != 'undefined') {
                        if (d.info == 0) {
                            alert2('加入房间失败',
                                function() {
                                    wx.closeWindow();
                                });
                        } else if (d.info == -1) {
                            alert2('房间号错误',
                                function() {
                                    wx.closeWindow();
                                });
                        } else if (d.info == 1) {
                            document.body.style.background = '#000000';
                            document.body.minHeight = 'initial';
                            if (document.getElementsByClassName('body')[0]) {
                                document.body.removeChild(document.getElementsByClassName('body')[0]);
                            }
                            if (document.getElementsByTagName('canvas')[0]) {
                                document.body.removeChild(document.getElementsByTagName('canvas')[0]);
                            }
                            ajax('home/index/result', {
                                    code: Page.code
                                },
                                function(data) {
                                    if (data == 'error') {
                                        Page.init();
                                        return;
                                    }
                                    if (parseInt(data.game_id) === 3) {
                                        if (win.version == '1.0.0') {
                                            Page.createRanking(data,
                                                function(data) {
                                                    var img = document.createElement('img');
                                                    img.className = 'room-gameover';
                                                    img.src = data;
                                                    img.onload = function() {
                                                        document.body.appendChild(img);
                                                        win.closeLoading();
                                                    };
                                                });
                                        } else if (win.version == '2.0.0') {
                                            Page.createRanking(data,
                                                function(d) {
                                                    var img = new Image();
                                                    img.className = 'room-gameover ranking-img';
                                                    img.src = d;
                                                    img.onload = function() {
                                                        if (document.getElementsByClassName('body')[0]) {
                                                            document.body.removeChild(document.getElementsByClassName('body')[0]);
                                                        }
                                                        document.body.style.backgroundColor = '#000000';
                                                        document.body.style.minHeight = 'initial';
                                                        document.body.appendChild(img);
                                                        var div = document.createElement('div');
                                                        div.className = 'search-number-box';
                                                        document.body.appendChild(div);
                                                        var detailedBtn = '<a class="search-number-box-btn" href="pkdetailed.html?code=' + Page.code + '" style="position: absolute;"></a>';
                                                        div.insertAdjacentHTML("beforeend", detailedBtn);
                                                        win.closeLoading();
                                                        getRankingSix();
                                                    };
                                                });
                                        }
                                    } else if (parseInt(data.game_id) === 7) {
                                        if (win.version == '1.0.0') {
                                            Page.createRanking(data,
                                                function(data) {
                                                    var img = document.createElement('img');
                                                    img.className = 'room-gameover';
                                                    img.src = data;
                                                    img.onload = function() {
                                                        document.body.appendChild(img);
                                                        win.closeLoading();
                                                    };
                                                });
                                        } else if (win.version == '2.0.0') {
                                            Page.createRanking(data,
                                                function(d) {
                                                    var img = new Image();
                                                    img.className = 'room-gameover ranking-img';
                                                    img.src = d;
                                                    img.onload = function() {
                                                        document.body.style.backgroundColor = '#000000';
                                                        document.body.style.minHeight = 'initial';
                                                        document.body.appendChild(img);
                                                        var div = document.createElement('div');
                                                        div.className = 'search-number-box';
                                                        document.body.appendChild(div);
                                                        var detailedBtn = '<a class="search-number-box-btn" href="pkdetailed.html?code=' + Page.code + '" style="position: absolute;"></a>';
                                                        div.insertAdjacentHTML("beforeend", detailedBtn);
                                                        getRankingSix();
                                                        win.closeLoading();
                                                    };
                                                });
                                        }
                                    } else if (parseInt(data.game_id) === 8 || parseInt(data.game_id) === 9) {
                                        canvasRanking(data,
                                            function(d) {
                                                var img = document.createElement('img');
                                                img.className = 'room-gameover ranking-img';
                                                img.setAttribute('src', d);
                                                img.onload = function() {
                                                    document.body.appendChild(img);
                                                    var div = document.createElement('div');
                                                    div.className = 'search-number-box';
                                                    document.body.appendChild(div);
                                                    win.closeLoading();
                                                    var detailedBtn = '<a class="search-number-box-btn" href="pkdetailed.html?code=' + Page.code + '" style="position: absolute;"></a>';
                                                    div.insertAdjacentHTML("beforeend", detailedBtn);
                                                    $('.body').remove();
                                                    $('body').css({
                                                        'background': '#000000',
                                                        'min-height': 'initial'
                                                    });
                                                    getRankingSix();
                                                };
                                            });
                                    } else {
                                        if (win.version == '1.0.0') {
                                            createRanking(data,
                                                function(d) {
                                                    var img = new Image();
                                                    img.src = d;
                                                    if (parseInt(data.users.length) > 6) {
                                                        img.className = 'room-gameover-ten';
                                                    } else {
                                                        img.className = 'room-gameover';
                                                    }
                                                    img.onload = function() {
                                                        document.body.appendChild(img);
                                                        win.closeLoading();
                                                        if (document.getElementsByClassName('body')[0]) {
                                                            document.body.removeChild(document.getElementsByClassName('body')[0]);
                                                        }
                                                        document.body.style.backgroundColor = '#000000';
                                                        document.body.style.minHeight = 'initial';
                                                        if (typeof(jQuery) != 'undefined') $(document.body).off('touchmove');
                                                    };
                                                });
                                        } else if (win.version == '2.0.0') {
                                            liuliuCreateRanking(data,
                                                function(d) {
                                                    var img = document.createElement('img');
                                                    if (parseInt(data.users.length) > 6) {
                                                        img.className = 'room-gameover-ten ranking-img';
                                                    } else {
                                                        img.className = 'room-gameover ranking-img';
                                                    }
                                                    img.src = d;
                                                    img.onload = function() {
                                                        if (document.getElementsByClassName('body')[0]) {
                                                            document.body.removeChild(document.getElementsByClassName('body')[0]);
                                                        }
                                                        document.body.style.backgroundColor = '#000000';
                                                        document.body.style.minHeight = 'initial';
                                                        document.body.appendChild(img);
                                                        var div = document.createElement('div');
                                                        div.className = 'search-number-box';
                                                        document.body.appendChild(div);
                                                        var detailedBtn = '<a class="search-number-box-btn" href="pkdetailed.html?code=' + Page.code + '" style="position: absolute;"></a>';
                                                        div.insertAdjacentHTML("beforeend", detailedBtn);
                                                        win.closeLoading();
                                                        if (typeof(jQuery) != 'undefined') $(document.body).off('touchmove');
                                                        getRankingSix();
                                                    };
                                                });
                                        }
                                    }
                                });
                        } else if (d.info == 2) {
                            alert2('该房间人数已满',
                                function() {
                                    wx.closeWindow();
                                })
                        }
                    } else if (typeof(d.member) != 'undefined') {
                        if (d.member == 1) {
                            var code = '<div class="request-member-mask">';
                            code += '<div class="requst-member">';
                            code += '<div class="text">你不是该房主的好友,无法加入房间；</div>';
                            code += '<div class="room-user flex-cont">';
                            code += '<div class="room-user-path"><img id="roomUserPath" src="' + d.room_owner.path + '" onerror="this.src=\'../images/ucenter/user.png\'"></div>';
                            code += '<div class="room-user-name" id="roomUserName">' + d.room_owner.nickname + '</div>';
                            code += '</div>';
                            code += '<div class="text">是否申请成为好友？</div>';
                            code += '<div class="button" id="button">';
                            code += '<div class="request-btn" id="requestBtn">确定</div>';
                            code += '</div>';
                            code += '</div>';
                            code += '</div>';
                            document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code);
                            win.closeLoading();
                            document.getElementById('requestBtn').onclick = function() {
                                document.getElementById('button').innerHTML = '<div class="request-btn request-btn2">申请中</div>';
                                ajax('home/user/applyForFriend', {
                                        user_id: d.room_owner.id
                                    },
                                    function(d) {
                                        if (d.status == 1) {} else {}
                                    })
                            }
                        } else if (d.member == 2) {
                            var code = '<div class="request-member-mask">';
                            code += '<div class="requst-member">';
                            code += '<div class="text">你不是该房主的好友,无法加入房间；</div>';
                            code += '<div class="room-user flex-cont">';
                            code += '<div class="room-user-path"><img id="roomUserPath" src="' + d.room_owner.path + '" onerror="this.src=\'../images/ucenter/user.png\'"></div>';
                            code += '<div class="room-user-name" id="roomUserName">' + d.room_owner.nickname + '</div>';
                            code += '</div>';
                            code += '<div class="text">是否申请成为好友？</div>';
                            code += '<div class="button" id="button">';
                            code += '<div class="request-btn request-btn2">申请中</div>';
                            code += '</div>';
                            code += '</div>';
                            code += '</div>';
                            document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", code);
                        }
                    } else {
                        if (d.first_join || d.first_join == 1) {
                            if (win.version == '1.0.0') {
                                var joinUser = '<div class="join-user" id="joinUser">';
                                joinUser += '<div class="join-info">';
                                if (user_list.length > 5) {
                                    joinUser += '<div class="user-text2">';
                                    joinUser += '<div class="gameuser-list" id="gameuser-list">';
                                    for (var n in user_list) {
                                        var code = '<div class="join-user-info">';
                                        code += '<img src="' + user_list[n].path + '" alt="" onerror="this.src=\'../images/ucenter/user.png\'"><span>' + user_list[n].nickname + '</span>';
                                        code += '</div>';
                                        joinUser += code;
                                    }
                                } else {
                                    joinUser += '<div class="user-text">';
                                    joinUser += '<div class="gameuser-list" id="gameuser-list">';
                                    for (var n in user_list) {
                                        var code = '<div class="join-user-info">';
                                        code += '<img src="' + user_list[n].path + '" alt=""><span>' + user_list[n].nickname + '</span>';
                                        code += '</div>';
                                        joinUser += code;
                                    }
                                }
                                joinUser += '</div>';
                                joinUser += '</div>';
                                joinUser += '<div class="join-user-bottom">';
                                joinUser += '<button class="return-index" onclick="location.href=\'index.html\'">返回首页</button>';
                                joinUser += '<button class="join-game" id="joinGame">加入房间</button>';
                                joinUser += '</div>';
                                joinUser += '</div>';
                                joinUser += '</div>';
                            } else if (win.version == '2.0.0') {
                                var joinUser = '<div class="window-masks user-join" id="joinUser">';
                                joinUser += '<div class="border-opacity">';
                                joinUser += '<div class="container">';
                                joinUser += '<i class="mask-icon mask-top"></i><i class="mask-icon mask-right"></i><i class="mask-icon mask-bottom"></i><i class="mask-icon mask-left"></i>';
                                joinUser += '<div class="user-id">ID：' + (parseInt(user.id) + 100000) + '</div>';
                                joinUser += '<div class="main">';
                                joinUser += '<div class="rules">';
                                if (parseInt(d.game) === 1 || parseInt(d.game) === 4 || parseInt(d.game) === 8 || parseInt(d.game) === 9) {
                                    var zhuangTypeText = '',
                                        cardRule = d.rule.card_rule,
                                        cardRuleText = '',
                                        handPatterns = d.rule.hand_patterns,
                                        handPatternsText = '',
                                        maxMatchesText = '';
                                    if (parseInt(d.zhuang_type) === 1) {
                                        zhuangTypeText = '明牌抢庄';
                                    } else if (parseInt(d.zhuang_type) === 2) {
                                        zhuangTypeText = '通比牛.牛';
                                    } else if (parseInt(d.zhuang_type) === 3) {
                                        zhuangTypeText = '自由抢庄';
                                    } else if (parseInt(d.zhuang_type) === 4) {
                                        zhuangTypeText = '牛.牛上庄';
                                    } else if (parseInt(d.zhuang_type) === 5) {
                                        zhuangTypeText = '固定庄家';
                                    }
                                    if (parseInt(cardRule) === 1) {
                                        cardRuleText = '牛.牛×3 牛九×2 牛八×2';
                                    } else if (parseInt(cardRule) === 2) {
                                        cardRuleText = '牛.牛×4 牛九×3 牛八×2 牛七×2';
                                    }
                                    for (var handp in handPatterns) {
                                        if (parseInt(handPatterns[handp]) === 1) {
                                            handPatternsText += '五花牛（5倍）';
                                        } else if (parseInt(handPatterns[handp]) === 2) {
                                            handPatternsText += '炸弹牛（6倍）';
                                        } else if (parseInt(handPatterns[handp]) === 3) {
                                            handPatternsText += '五小牛（8倍）';
                                        }
                                    }
                                    if (parseInt(d.max_matches) === 10) {
                                        maxMatchesText = '10局×1房卡 ';
                                    } else if (parseInt(d.max_matches) === 12) {
                                        maxMatchesText = '12局×2房卡 ';
                                    } else if (parseInt(d.max_matches) === 20) {
                                        maxMatchesText = '20局×2房卡 ';
                                    } else if (parseInt(d.max_matches) === 24) {
                                        maxMatchesText = '24局×4房卡 ';
                                    }
                                    joinUser += '<p>模式：' + zhuangTypeText + '</p>';
                                    joinUser += '<p>底分：' + d.rule.end_points + '分</p>';
                                    joinUser += '<p>规则：' + cardRuleText + '</p>';
                                    if (handPatterns) {
                                        joinUser += '<p>牌型：' + handPatternsText + '</p>';
                                    }
                                    joinUser += '<p>局数：' + maxMatchesText + '</p>';
                                } else if (parseInt(d.game) === 2) {
                                    var goldChipRule = '',
                                        goldMatchesText = '',
                                        goldLimit = '';
                                    if (parseInt(d.rule.chip_rule) === 1) {
                                        goldChipRule = '2/4，4/8，8/16，10/20';
                                    } else if (parseInt(d.rule.chip_rule) === 2) {
                                        goldChipRule = '2/4，5/10，10/20，20/40';
                                    }
                                    if (parseInt(d.max_matches) === 10) {
                                        goldMatchesText = '10局×1房卡 ';
                                    } else if (parseInt(d.max_matches) === 20) {
                                        goldMatchesText = '20局×2房卡 ';
                                    }
                                    if (parseInt(d.rule.upper_limit) === 0) {
                                        goldLimit = '无';
                                    } else if (parseInt(d.rule.upper_limit) === 500) {
                                        goldLimit = '500 ';
                                    } else if (parseInt(d.rule.upper_limit) === 1000) {
                                        goldLimit = '1000 ';
                                    } else if (parseInt(d.rule.upper_limit) === 2000) {
                                        goldLimit = '2000 ';
                                    }
                                    joinUser += '<p>底分：' + d.rule.end_points + '分</p>';
                                    joinUser += '<p>分数：' + goldChipRule + '</p>';
                                    joinUser += '<p>局数：' + goldMatchesText + '</p>';
                                    joinUser += '<p>上限：' + goldLimit + '</p>';
                                } else if (parseInt(d.game) === 3) {
                                    var playType = '',
                                        shuiMatches = '';
                                    if (parseInt(d.rule.play_type) === 1) {
                                        playType = '经典';
                                    }
                                    if (parseInt(d.max_matches) === 5) {
                                        shuiMatches = '5局×1房卡 ';
                                    } else if (parseInt(d.max_matches) === 10) {
                                        shuiMatches = '10局×2房卡 ';
                                    } else if (parseInt(d.max_matches) === 20) {
                                        shuiMatches = '20局×4房卡 ';
                                    }
                                    joinUser += '<p>底分：' + d.rule.end_points + '分</p>';
                                    joinUser += '<p>玩法：' + playType + '</p>';
                                    joinUser += '<p>局数：' + shuiMatches + '</p>';
                                } else if (parseInt(d.game) === 5) {
                                    var texaPoints = '',
                                        texaMatches = '',
                                        texaPointsRule = '';
                                    if (parseInt(d.rule.end_points) === 1) {
                                        texaPoints = '1/2';
                                    } else if (parseInt(d.rule.end_points) === 2) {
                                        texaPoints = '2/4';
                                    }
                                    if (parseInt(d.max_matches) === 10) {
                                        texaMatches = '10局×2房卡 ';
                                    } else if (parseInt(d.max_matches) === 20) {
                                        texaMatches = '20局×4房卡 ';
                                    }
                                    if (parseInt(d.rule.end_points_rule) === 0) {
                                        texaPointsRule = '无';
                                    } else if (parseInt(d.rule.end_points_rule) === 1) {
                                        texaPointsRule = '1倍小盲';
                                    } else if (parseInt(d.rule.end_points_rule) === 2) {
                                        texaPointsRule = '2倍小盲';
                                    }
                                    joinUser += '<p>小盲/大盲：' + texaPoints + '</p>';
                                    joinUser += '<p>局数：' + texaMatches + '</p>';
                                    joinUser += '<p>前注：' + texaPointsRule + '</p>';
                                    joinUser += '<p>初始分数：' + d.rule.init_points + '</p>';
                                } else if (parseInt(d.game) === 6) {
                                    var sanMatches = '',
                                        sanZhuangType = '';
                                    if (parseInt(d.zhuang_type) === 1) {
                                        sanZhuangType = '抢庄模式';
                                    } else if (parseInt(d.zhuang_type) === 2) {
                                        sanZhuangType = '通比模式';
                                    } else if (parseInt(d.zhuang_type) === 3) {
                                        sanZhuangType = '三公当庄';
                                    }
                                    if (parseInt(d.max_matches) === 12) {
                                        sanMatches = '12局×2房卡 ';
                                    } else if (parseInt(d.max_matches) === 24) {
                                        sanMatches = '24局×4房卡 ';
                                    }
                                    joinUser += '<p>模式：' + sanZhuangType + '</p>';
                                    joinUser += '<p>底分：' + d.rule.end_points + '分</p>';
                                    if (parseInt(d.rule.card_rule) === 2) {
                                        cardRuleText = '暴玖×9';
                                        joinUser += '<p>规则：' + cardRuleText + '</p>';
                                    }
                                    joinUser += '<p>局数：' + sanMatches + '</p>';
                                } else if (parseInt(d.game) === 7) {
                                    var str = '';
                                    if (parseInt(d.rule.games_mode) === 1) {
                                        str = '半坑（满5人10起）';
                                    } else if (parseInt(d.rule.games_mode) === 2) {
                                        str = '半坑（满5人9起）';
                                    } else if (parseInt(d.rule.games_mode) === 3) {
                                        str = '半坑（满4人J起）';
                                    } else if (parseInt(d.rule.games_mode) === 4) {
                                        str = '全坑（2-A）';
                                    }
                                    joinUser += '<p>模式：' + str + '</p>';
                                    joinUser += '<p>底注：' + d.rule.end_points + '分</p>';
                                    joinUser += '<p>喜分：' + d.rule.happy_points + '分</p>';
                                    var rule = '';
                                    if (d.rule.play_type && parseInt(d.rule.play_type.split(',').length) === 2) {
                                        rule += '带王  王中炮  ';
                                    } else if (d.rule.play_type && parseInt(d.rule.play_type.split(',').length) === 1 && parseInt(d.rule.play_type.split(',')[0]) === 1) {
                                        rule += '带王  ';
                                    }
                                    if (parseInt(d.rule.sorce_type) === 1) {
                                        rule += '烂锅翻倍';
                                    }
                                    if (rule != '') {
                                        joinUser += '<p>规则：' + rule + '</p>';
                                    }
                                    var sanMatches = '';
                                    if (parseInt(d.rule.max_matches) === 10) {
                                        sanMatches = '10局×1房卡 ';
                                    } else if (parseInt(d.rule.max_matches) === 20) {
                                        sanMatches = '20局×2房卡 ';
                                    }
                                    joinUser += '<p>局数：' + sanMatches + '</p>';
                                }
                                joinUser += '</div>';
                                joinUser += '<div class="user-list">';
                                for (var n in user_list) {
                                    var code = '<div class="join-user-info">';
                                    code += '<img src="' + user_list[n].path + '" alt="" onerror="this.src=\'../images/ucenter/user.png\'"><span>' + user_list[n].nickname + '</span>';
                                    code += '</div>';
                                    joinUser += code;
                                }
                                joinUser += '</div>';
                                joinUser += '</div>';
                                joinUser += '<div class="button">';
                                joinUser += '<div class="return" onclick="location.href=\'index.html\'">创建房间</div>';
                                joinUser += '<div class="join-game" id="joinGame">加入游戏</div>';
                                joinUser += '</div>';
                                joinUser += '</div>';
                                joinUser += '</div>';
                                joinUser += '</div>';
                            }
                            document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", joinUser);
                            document.getElementById('joinGame').onclick = function() {
                                win.status = 1;
                                document.getElementsByTagName('body')[0].removeChild(document.getElementById('joinUser'));
                                if (typeof(func) == 'function') func();
                            }
                        } else {
                            if (user_list.length == 0) win.status = 1;
                            if (typeof(func) == 'function') func();
                        }
                    }
                });
        },
        reload: function() {
            if (/[\?\&]q=[0-9\.]+/.test(location.href)) location.href = location.href.replace(/([\?\&]q=)[0-9\.]+/, '$1' + Math.random());
            else location.href = location.href + (location.href.indexOf('?') > 0 ? '&': '?') + 'q=' + Math.random();
        }
    };
    var user = null;
    var ws = {};
    window.onresize = function() {
        win.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        win.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        win.reset();
    };
    function alert2(msg, fn, style, sec) {
        style = style || 'success';
        if (typeof(fn) == 'string') {
            style = fn;
        }
        if (!sec) {
            if (style == 'error' || style == 'puncherror') {
                sec = 9;
            } else {
                sec = 0;
            }
        }
        var box = document.createElement('div');
        box.className = 'resourceBox ' + style;
        box.id = 'alertBox';
        box.innerHTML = '<div class="context">' + msg + '</div>';
        document.getElementsByTagName('body')[0].appendChild(box);
        var h = win.width / 360 * 100;
        box.style.opacity = 1;
        box.style.marginTop = -1 * (box.offsetHeight + h) / 2 + 'px';
        if (sec >= 9) {
            var alertBoxLay = document.createElement('div');
            alertBoxLay.className = 'alertBoxLay';
            document.getElementsByTagName('body')[0].appendChild(alertBoxLay);
            var BtnA = document.createElement('a');
            BtnA.innerText = '我知道了';
            BtnA.setAttribute('href', 'javascript:void(0);');
            BtnA.className = 'closed';
            box.appendChild(BtnA);
            alertBoxLay.addEventListener('click',
                function() {
                    box.style.opacity = 0;
                    box.style.marginTop = -1 * (box.offsetHeight + h) + 'px';
                    this.style.opacity = 0;
                    setTimeout(function() {
                            document.getElementsByTagName('body')[0].removeChild(box);
                            document.getElementsByTagName('body')[0].removeChild(alertBoxLay);
                            if (typeof(fn) == 'function') fn();
                        },
                        500);
                })
        } else {
            setTimeout(function() {
                    box.style.opacity = 0;
                    box.style.marginTop = -1 * (box.offsetHeight + h) + 'px';
                    setTimeout(function() {
                            document.getElementsByTagName('body')[0].removeChild(box);
                            if (typeof(fn) == 'function') fn();
                        },
                        500);
                },
                1000 + sec * 1000);
        }
    }
    $.fn.overscroll = function() {
        this.on('touchstart',
            function(event) {
                $(document.body).off('touchmove');
            });
        this.on('touchend',
            function(event) {
                $(document.body).on('touchmove',
                    function(evt) {
                        evt.preventDefault();
                    });
            });
    };
    var sound = {
        audioContext: null,
        audioBuffers: [],
        isloaded: false,
        isBgm: false,
        o: {},
        source: [],
        initModule: function() {
            this.audioBuffers = [];
            window.AudioContext = window.AudioContext || window.webkitAudioContext || window.mozAudioContext || window.msAudioContext;
            this.audioContext = new window.AudioContext();
        },
        stopSound: function(name) {
            var buffer = this.audioBuffers[name];
            if (buffer) {
                if (buffer.source) {
                    buffer.source.stop(0);
                    buffer.source = null;
                }
            }
        },
        playSound: function(name, isLoop) {
            var buffer = this.audioBuffers[name];
            if (buffer) {
                WeixinJSBridge.invoke('getNetworkType', {},
                    function(e) {
                        buffer.source = null;
                        buffer.source = sound.audioContext.createBufferSource();
                        buffer.source.buffer = buffer.buffer;
                        buffer.source.loop = false;
                        var gainNode = sound.audioContext.createGain();
                        if (isLoop == true) {
                            buffer.source.loop = true;
                            gainNode.gain.value = 0.7;
                        } else {
                            gainNode.gain.value = 1.0;
                        }
                        buffer.source.connect(gainNode);
                        gainNode.connect(sound.audioContext.destination);
                        buffer.source.start(0);
                    });
            }
        },
        initSound: function(arrayBuffer, name) {
            this.audioContext.decodeAudioData(arrayBuffer,
                function(buffer) {
                    sound.audioBuffers[name] = {
                        "name": name,
                        "buffer": buffer,
                        "source": null
                    };
                    if (name == "bgm") {
                        sound.isloaded = true;
                        sound.playSound(name, true);
                    }
                },
                function(e) {
                    console.warn('Error decoding file');
                });
        },
        loadAudioFile: function(url, name) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.responseType = 'arraybuffer';
            xhr.onload = function(e) {
                sound.initSound(xhr.response, name);
            };
            xhr.send();
        },
        load: function() {
            if (this.isloaded) return;
            for (var i in this.source) {
                this.loadAudioFile(this.source[i], i);
            }
        },
        play: function(num, sex) {
            if (!storage.get('pausemusic')) {
                if (sex) {
                    var name = 'sound_';
                    if (sex == 1) name += '1';
                    else name += '2';
                    if (/^\d+$/.test(num)) name += '_' + num;
                    else name += num;
                    this.playSound(name);
                } else {
                    if (num) this.playSound(num);
                }
            }
        }
    };
    var notice = {
        data: '',
        play: function(data) {
            if (data.length > 0) {
                var gonggao = document.getElementById("gongao");
                if (!gonggao) {
                    var aa = '<div id="gongao" class="all-gonggao">';
                    aa += '<div class="gonggao-icon"></div>';
                    aa += '<div class="scroll_div" style="" id="scroll_div">';
                    aa += '<div id="scroll_begin" class="scroll_begin" style="">➤ ' + data.join('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;➤ ') + '</div>';
                    aa += '<div id="scroll_end" class="scroll_end" style=""></div>';
                    aa += '</div>';
                    aa += '</div>';
                    document.getElementsByTagName('body')[0].insertAdjacentHTML("beforeend", aa);
                    var speed = 20;
                    var scroll_begin = document.getElementById("scroll_begin");
                    var scroll_div = document.getElementById("scroll_div");
                    var left_begin = scroll_div.offsetWidth;
                    scroll_begin.style.left = left_begin + 'px';
                    function Marquee() {
                        if (left_begin <= -scroll_begin.offsetWidth) {
                            var gonggao = document.getElementById("gongao");
                            if (gonggao) {
                                gonggao.parentNode.removeChild(gonggao);
                            }
                            clearInterval(MyMar);
                            return;
                        }
                        left_begin--;
                        scroll_begin.style.left = left_begin + 'px';
                    }
                    var MyMar = setInterval(Marquee, speed);
                }
            }
        },
        start: function() {
            var that = this;
            var datas = [];
            try {
                datas = JSON.parse(this.data);
            } catch(e) {
                return;
            }
            setInterval(function() {
                    var data = [];
                    var time = Math.round(new Date().getTime() / 1000).toString();
                    for (var i in datas) {
                        if ((datas[i].play_time <= time && datas[i].end_time >= time) || (datas[i].play_time <= time && datas[i].end_time == 0)) {
                            data.push(datas[i].contents);
                        }
                    }
                    that.play(data);
                },
                10000);
        }
    };
    var Page = {
        timer: '',
        game: 0,
        code: '',
        cardCode: '',
        shuiCode1: '',
        shuiCode2: '',
        shuiCode0: '',
        load: function() {
            $('.top .return').touch(function() {
                location.href = '/index.php/portal/home/dashengkaifangchaxun';
            });
            $('#loadings').fadeOut('fast',
                function() {
                    $(this).remove();
                });
        },
        detailedItem: function() {
            $('.detailed-item').click(function() {
                clearTimeout(Page.timer);
                var match = $(this).data('item');
                if ($(this).children('.item-info').children().length > 0) {
                    Page.timer = setTimeout(function() {
                            $('.detailed-list .detailed-item[data-item="' + match + '"] .item-info').slideToggle();
                            if ($('.detailed-list .detailed-item[data-item="' + match + '"] .item-top').is('.icon')) {
                                $('.detailed-list .detailed-item[data-item="' + match + '"] .item-top').removeClass('icon');
                            } else {
                                $('.detailed-list .detailed-item[data-item="' + match + '"] .item-top').addClass('icon');
                            }
                        },
                        300);
                } else {
                    ajax('home/user/matchRecord', {
                            code: Page.code,
                            match: match
                        },
                        function(d) {
                            Page.cardCode = '';
                            if (parseInt(d.status) === 1) {
                                var codeItem = '<div class="info-head">';
                                codeItem += '<div class="head-user-name">用户名字</div>';
                                codeItem += '<div class="head-card-type">牌型</div>';
                                if (Page.game === 1 || Page.game === 4 || Page.game === 6 || Page.game === 8 || Page.game === 9) {
                                    codeItem += '<div class="head-multiple">倍数</div>';
                                }
                                codeItem += '<div class="head-info-score">积分</div>';
                                codeItem += '</div>';
                                codeItem += '<div class="info-list">';
                                for (var j in d.info.player) {
                                    codeItem += '<div class="info-list-item flex-center" data-item="' + j + '">';
                                    codeItem += '<div class="list-user-name flex-center">';
                                    codeItem += '<div class="user-path"><img src="' + d.info.player[j].path + '" onerror="this.src=\'../images/ucenter/user.png\'">';
                                    if (Page.game === 1 || Page.game === 4 || Page.game === 6 || Page.game === 8 || Page.game === 9) {
                                        if (parseInt(d.info.player[j].zhuang) === 1) {
                                            codeItem += '<span>庄</span>';
                                        }
                                    } else if (Page.game === 5 || Page.game === 7) {
                                        if (parseInt(d.info.player[j].discard) === 1) {
                                            codeItem += '<span>弃</span>';
                                        }
                                    }
                                    codeItem += '</div>';
                                    codeItem += '<div class="user-name-text">' + d.info.player[j].nickname + '</div>';
                                    codeItem += '</div>';
                                    codeItem += '<div class="list-card-type flex-center">';
                                    if (Page.game === 3) {
                                        codeItem += '<div class="card-type-text"><div class="card-type-text1"></div><div class="card-type-text2"></div><div class="card-type-text3"></div></div>';
                                        codeItem += '<div class="card-type0">';
                                        codeItem += '<div class="card-type1"></div>';
                                        codeItem += '<div class="card-type2"></div>';
                                        codeItem += '<div class="card-type3"></div>';
                                    } else {
                                        if (parseInt(d.info.player[j].no_join) === 1) {
                                            codeItem += '<div class="card-type-text"></div>';
                                            codeItem += '<div class="card-type">';
                                        } else {
                                            Page.cardType(d, j);
                                            if (parseInt(d.info.player[j].discard) === 1) {
                                                codeItem += '<div class="card-type-text"></div>';
                                            } else {
                                                codeItem += '<div class="card-type-text">' + Page.cardCode + '</div>';
                                            }
                                            codeItem += '<div class="card-type">';
                                            for (var c in d.info.player[j].card) {
                                                codeItem += '<div class="cardbox" data-item="' + c + '">';
                                                if (Page.game === 5) {
                                                    if (parseInt(d.info.player[j].card[c][1]) === 14) {
                                                        codeItem += '<span class="card" data-value="1" data-color="' + d.info.player[j].card[c][0] + '"></span>';
                                                    } else {
                                                        codeItem += '<span class="card" data-value="' + d.info.player[j].card[c][1] + '" data-color="' + d.info.player[j].card[c][0] + '"></span>';
                                                    }
                                                } else if (Page.game === 7) {
                                                    if (parseInt(d.info.player[j].card[c][1]) === 15) {
                                                        codeItem += '<span class="card" data-value="1" data-color="' + d.info.player[j].card[c][0] + '"></span>';
                                                    } else {
                                                        codeItem += '<span class="card" data-value="' + d.info.player[j].card[c][1] + '" data-color="' + d.info.player[j].card[c][0] + '"></span>';
                                                    }
                                                } else {
                                                    codeItem += '<span class="card" data-value="' + d.info.player[j].card[c][1] + '" data-color="' + d.info.player[j].card[c][0] + '"></span>';
                                                }
                                                codeItem += '</div>';
                                            }
                                        }
                                    }
                                    codeItem += '</div>';
                                    codeItem += '</div>';
                                    if (Page.game === 1 || Page.game === 4 || Page.game === 6 || Page.game === 8 || Page.game === 9) {
                                        if (d.info.player[j].no_join != 1) {
                                            codeItem += '<div class="list-multiple">' + d.info.player[j].multiple + '倍</div>';
                                        }
                                    }
                                    if (parseInt(d.info.player[j].no_join) === 1) {
                                        codeItem += '<div class="" style="font-size: .1440rem; position: relative; right: 35%; color: #ecba85;">本局未参加</div>';
                                    } else {
                                        codeItem += '<div class="list-info-score">' + d.info.player[j].value + '</div>';
                                    }
                                    codeItem += '</div>';
                                }
                                codeItem += '</div>';
                                $('.detailed-list .detailed-item[data-item="' + match + '"] .item-top').addClass('icon');
                                $(codeItem).appendTo('.detailed-item[data-item="' + match + '"] .item-info');
                                $('.detailed-item[data-item="' + match + '"] .item-info').slideDown();
                                if (Page.game === 3) {
                                    for (var jj in d.info.player) {
                                        for (var sc1 in d.info.player[jj].card) {
                                            if (sc1 < 3) {
                                                var codeItem1 = '<div class="cardbox" data-item="' + sc1 + '">';
                                                if (parseInt(d.info.player[jj].card[sc1][1]) === 14) {
                                                    codeItem1 += '<span class="card" data-value="1" data-color="' + d.info.player[jj].card[sc1][0] + '"></span>';
                                                } else {
                                                    codeItem1 += '<span class="card" data-value="' + d.info.player[jj].card[sc1][1] + '" data-color="' + d.info.player[jj].card[sc1][0] + '"></span>';
                                                }
                                                codeItem1 += '</div>';
                                                $(codeItem1).appendTo('.detailed-item[data-item="' + match + '"] .item-info .info-list-item[data-item="' + jj + '"] .card-type1');
                                            } else if (sc1 >= 3 && sc1 < 8) {
                                                var codeItem2 = '<div class="cardbox" data-item="' + sc1 + '">';
                                                if (parseInt(d.info.player[jj].card[sc1][1]) === 14) {
                                                    codeItem2 += '<span class="card" data-value="1" data-color="' + d.info.player[jj].card[sc1][0] + '"></span>';
                                                } else {
                                                    codeItem2 += '<span class="card" data-value="' + d.info.player[jj].card[sc1][1] + '" data-color="' + d.info.player[jj].card[sc1][0] + '"></span>';
                                                }
                                                codeItem2 += '</div>';
                                                $(codeItem2).appendTo('.detailed-item[data-item="' + match + '"] .item-info .info-list-item[data-item="' + jj + '"] .card-type2');
                                            } else if (sc1 >= 8) {
                                                var codeItem3 = '<div class="cardbox" data-item="' + sc1 + '">';
                                                if (parseInt(d.info.player[jj].card[sc1][1]) === 14) {
                                                    codeItem3 += '<span class="card" data-value="1" data-color="' + d.info.player[jj].card[sc1][0] + '"></span>';
                                                } else {
                                                    codeItem3 += '<span class="card" data-value="' + d.info.player[jj].card[sc1][1] + '" data-color="' + d.info.player[jj].card[sc1][0] + '"></span>';
                                                }
                                                codeItem3 += '</div>';
                                                $(codeItem3).appendTo('.detailed-item[data-item="' + match + '"] .item-info .info-list-item[data-item="' + jj + '"] .card-type3');
                                            }
                                        }
                                        for (var type3 in d.info.player[jj].card_code) {
                                            var number3 = parseInt(d.info.player[jj].card_code[type3]);
                                            if (type3 == 0) {
                                                if (number3 === 0) {
                                                    Page.shuiCode0 = '乌龙';
                                                } else if (number3 === 1) {
                                                    Page.shuiCode0 = '一对';
                                                } else if (number3 === 2) {
                                                    Page.shuiCode0 = '两对';
                                                } else if (number3 === 3) {
                                                    Page.shuiCode0 = '三条';
                                                } else if (number3 === 4) {
                                                    Page.shuiCode0 = '顺子';
                                                } else if (number3 === 5) {
                                                    Page.shuiCode0 = '同花';
                                                } else if (number3 === 6) {
                                                    Page.shuiCode0 = '葫芦';
                                                } else if (number3 === 7) {
                                                    Page.shuiCode0 = '铁支';
                                                } else if (number3 === 8) {
                                                    Page.shuiCode0 = '同花顺';
                                                }
                                                $('.detailed-item[data-item="' + match + '"] .item-info .info-list-item[data-item="' + jj + '"] .card-type-text1').html(Page.shuiCode0);
                                            } else if (type3 == 1) {
                                                if (number3 === 0) {
                                                    Page.shuiCode1 = '乌龙';
                                                } else if (number3 === 1) {
                                                    Page.shuiCode1 = '一对';
                                                } else if (number3 === 2) {
                                                    Page.shuiCode1 = '两对';
                                                } else if (number3 === 3) {
                                                    Page.shuiCode1 = '三条';
                                                } else if (number3 === 4) {
                                                    Page.shuiCode1 = '顺子';
                                                } else if (number3 === 5) {
                                                    Page.shuiCode1 = '同花';
                                                } else if (number3 === 6) {
                                                    Page.shuiCode1 = '葫芦';
                                                } else if (number3 === 7) {
                                                    Page.shuiCode1 = '铁支';
                                                } else if (number3 === 8) {
                                                    Page.shuiCode1 = '同花顺';
                                                }
                                                $('.detailed-item[data-item="' + match + '"] .item-info .info-list-item[data-item="' + jj + '"] .card-type-text2').html(Page.shuiCode1);
                                            } else if (type3 == 2) {
                                                if (number3 === 0) {
                                                    Page.shuiCode2 = '乌龙';
                                                } else if (number3 === 1) {
                                                    Page.shuiCode2 = '一对';
                                                } else if (number3 === 2) {
                                                    Page.shuiCode2 = '两对';
                                                } else if (number3 === 3) {
                                                    Page.shuiCode2 = '三条';
                                                } else if (number3 === 4) {
                                                    Page.shuiCode2 = '顺子';
                                                } else if (number3 === 5) {
                                                    Page.shuiCode2 = '同花';
                                                } else if (number3 === 6) {
                                                    Page.shuiCode2 = '葫芦';
                                                } else if (number3 === 7) {
                                                    Page.shuiCode2 = '铁支';
                                                } else if (number3 === 8) {
                                                    Page.shuiCode2 = '同花顺';
                                                }
                                                $('.detailed-item[data-item="' + match + '"] .item-info .info-list-item[data-item="' + jj + '"] .card-type-text3').html(Page.shuiCode2);
                                            }
                                        }
                                    }
                                }
                            }
                        });
                }
            })
        },
        cardType: function(d, j) {
            if (Page.game === 1 || Page.game === 4 || Page.game === 8 || Page.game === 9) {
                for (var k in d.info.player[j].card_code) {
                    var number = parseInt(d.info.player[j].card_code[k]);
                    if (number === 0) {
                        Page.cardCode = '没牛';
                    } else if (number === 1) {
                        Page.cardCode = '牛一';
                    } else if (number === 2) {
                        Page.cardCode = '牛二';
                    } else if (number === 3) {
                        Page.cardCode = '牛三';
                    } else if (number === 4) {
                        Page.cardCode = '牛四';
                    } else if (number === 5) {
                        Page.cardCode = '牛五';
                    } else if (number === 6) {
                        Page.cardCode = '牛六';
                    } else if (number === 7) {
                        Page.cardCode = '牛七';
                    } else if (number === 8) {
                        Page.cardCode = '牛八';
                    } else if (number === 9) {
                        Page.cardCode = '牛九';
                    } else if (number === 10) {
                        Page.cardCode = '牛牛';
                    } else if (number === 11) {
                        Page.cardCode = '五花牛';
                    } else if (number === 12) {
                        Page.cardCode = '炸弹牛';
                    } else if (number === 13) {
                        Page.cardCode = '五小牛';
                    } else {
                        Page.cardCode = '';
                    }
                }
            } else if (Page.game === 2) {
                for (var gold in d.info.player[j].card_code) {
                    var goldNumber = parseInt(d.info.player[j].card_code[gold]);
                    if (goldNumber === 0) {
                        Page.cardCode = '高牌';
                    } else if (goldNumber === 1) {
                        Page.cardCode = '对子';
                    } else if (goldNumber === 2) {
                        Page.cardCode = '顺子';
                    } else if (goldNumber === 3) {
                        Page.cardCode = '同花';
                    } else if (goldNumber === 4) {
                        Page.cardCode = '';
                    } else if (goldNumber === 5) {
                        Page.cardCode = '同花顺';
                    } else if (goldNumber === 6) {
                        Page.cardCode = '豹子';
                    } else {
                        Page.cardCode = '';
                    }
                }
            } else if (Page.game === 5) {
                for (var de in d.info.player[j].card_code) {
                    var deNumber = parseInt(d.info.player[j].card_code[de]);
                    if (deNumber === 1) {
                        Page.cardCode = '高牌';
                    } else if (deNumber === 2) {
                        Page.cardCode = '一对';
                    } else if (deNumber === 3) {
                        Page.cardCode = '两对';
                    } else if (deNumber === 4) {
                        Page.cardCode = '三条';
                    } else if (deNumber === 5) {
                        Page.cardCode = '顺子';
                    } else if (deNumber === 6) {
                        Page.cardCode = '同花';
                    } else if (deNumber === 7) {
                        Page.cardCode = '葫芦';
                    } else if (deNumber === 8) {
                        Page.cardCode = '四条';
                    } else if (deNumber === 9) {
                        Page.cardCode = '同花顺';
                    } else if (deNumber === 10) {
                        Page.cardCode = '皇家同花顺';
                    } else {
                        Page.cardCode = '';
                    }
                }
            } else if (Page.game === 6) {
                for (var s in d.info.player[j].card_code) {
                    var Snumber = parseInt(d.info.player[j].card_code[s]);
                    if (Snumber === 0) {
                        Page.cardCode = '零点';
                    } else if (Snumber === 1) {
                        Page.cardCode = '一点';
                    } else if (Snumber === 2) {
                        Page.cardCode = '二点';
                    } else if (Snumber === 3) {
                        Page.cardCode = '三点';
                    } else if (Snumber === 4) {
                        Page.cardCode = '四点';
                    } else if (Snumber === 5) {
                        Page.cardCode = '五点';
                    } else if (Snumber === 6) {
                        Page.cardCode = '六点';
                    } else if (Snumber === 7) {
                        Page.cardCode = '七点';
                    } else if (Snumber === 8) {
                        Page.cardCode = '八点';
                    } else if (Snumber === 9) {
                        Page.cardCode = '九点';
                    } else if (Snumber === 110) {
                        Page.cardCode = '三公';
                    } else if (Snumber === 130) {
                        Page.cardCode = '小三公';
                    } else if (Snumber === 140) {
                        Page.cardCode = '大三公';
                    } else if (Snumber === 150) {
                        Page.cardCode = '暴玖';
                    } else {
                        Page.cardCode = '';
                    }
                }
            } else if (Page.game === 7) {
                for (var keng in d.info.player[j].card_code) {
                    var kengNumber = parseInt(d.info.player[j].card_code[keng]);
                    if (kengNumber === 1) {
                        Page.cardCode = '三张';
                    } else if (kengNumber === 2) {
                        Page.cardCode = '四张';
                    } else if (kengNumber === 3) {
                        Page.cardCode = '双王';
                    } else if (kengNumber === 4) {
                        Page.cardCode = '王中炮';
                    } else {
                        Page.cardCode = '';
                    }
                }
            }
        }
    };
    var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?80efa2441f82216a74a64ac0e941a394";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();

    const DOMAIN = 'www.u5zcx.cn';
    const API_DOMAIN = 'shouquandatingapi.lfzgame.com';
    const WS_DOMAIN = 'shouquandatingws.lfzgame.com';
    const JUMP_DOMAIN = 'www.u5zcx.cn';
    const USE_QRCODE = 0;
    const IS_SSL = true;
    win.version = '2.0.0';
    win.sign = 'shouquandating';
    win.token = 'vIoEPtCwetBlspZjQjxrMEQizeccaoMaYmvVvrNM';
    notice.data = '';
    var user = {
        "id": "533013",
        "wechat_id": "18",
        "nickname": "follow my heart",
        "sex": "1",
        "citys": "Chongqing,Shapingba",
        "path": "https:\/\/wx.qlogo.cn\/mmopen\/vi_32\/Q0j4TwGTfTJHzbaiaTPaeJTBydDFLrvegsDfZx6yG5icnLSOYRxiaw4oZSKz2JpGKJJDRPzkpKlhKWXnzGAibUibkUg\/64",
        "room_cards": "95"
    };
    window.onload = function() {
        win.load();
    }
    wx.config({
        appId: 'wxed4e97d70ed402cc',
        // 必填，公众号的唯一标识
        timestamp: '1512106767',
        // 必填，生成签名的时间戳
        nonceStr: 'kOmGJtUPe1GoRvIC',
        // 必填，生成签名的随机串
        signature: 'e326f6154e0964a2f60fb2f287447fef7fd3a2ec',
        // 必填，签名，见附录1
        jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareQZone', 'getLocation', 'hideOptionMenu']
    });
    wx.ready(function() {
        if (win.readed == 1) return;
        win.readed = 1;
        win.ready();
    });
    wx.error(function(res) {
        //$.alert('微信API获取失败！');
    });

</script>
</body>
</html>