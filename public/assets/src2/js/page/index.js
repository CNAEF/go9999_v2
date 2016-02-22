/**
 * index.js
 *
 * @desc    首页脚本
 * @author  soulteary <soulteary@qq.com> (http://soulteary.com)
 */
(function (w, d, $, author) {
    if (!w.console || !w.console.log) {
        w.console = {};
        w.console.log = function () {return true;};
    }

    /*
    var suSays = ['至看到这段文字的你：', 'Hi~', '  中国支教联盟网站急缺建设志愿者&维护志愿者，如果你对维护联盟网站感兴趣，即使因为现实的原因你不能投身偏远地区，', '但是你的行为一样可以帮助到所有的有志于支教的人们，如果你心动了，不妨用页面中的联系方式联系我们。', '当然，如果你发现了网站的缺陷或者漏洞，也不妨告知我们。', '                                                                                    @soulteary', '                                                                                    2013/07/20'];
    for (var i = 0, j = suSays.length; i < j; i++) {
        console.log(suSays[i]);
    }
     */

    function RandomChars(strlen, opt, cut) {
        var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
        if (opt) {
            switch (opt) {
                case 'NUMBER':
                    chars = '1234567890';
                    break;
                case 'UCASE':
                    chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    break;
                case 'LCASE':
                    chars = 'abcdefghijklmnopqrstuvwxyz';
                    break;
            }
        }
        if (cut) {
            for (var m = cut.length - 1; m >= 0; m--) {
                chars = chars.replace(cut[m], '');
            }
        }

        var len = chars.length;
        var result = '';
        if (!strlen) {
            strlen = Math.random(len);
        }
        var d = new Date - 0;
        for (var i = 0; i < strlen; i++) {
            result += chars.charAt(Math.ceil(Math.random() * d) % len);
        }
        return result;
    }

    var _bdhmProtocol = (('https:' == d.location.protocol) ? 'https://': 'http://');
    d.write(unescape('%3Cscript src=\'' + _bdhmProtocol + 'hm.baidu.com/h.js%3F724519214f055ce821d3d1235c7e3621\' type=\'text/javascript\'%3E%3C/script%3E'));

    $(document).ready(function () {

        var index=0;
        var play=null;
        $(".news_title").children().mouseover(function(){
            clearInterval(play);
            index=$(this).index();
            $(this).animate({
                opacity:1
            },200);
            $(this).siblings().animate({
                opacity:0.7
            },200);

            $(".news_main ul").eq(index).siblings().hide();
            $(".news_main ul").eq(index).fadeIn();

        }).mouseout(function(){
            autoplay();
        });
        function autoplay(){
            play=setInterval(function(){
                index++
                if(index>1){index=0;}
                $(".news_title").children().eq(index).animate({
                    opacity:1
                },200);
                $(".news_title").children().eq(index).siblings().animate({
                    opacity:0.7
                },200);
                $(".news_main ul").eq(index).siblings().hide();
                $(".news_main ul").eq(index).fadeIn();

            },5000)
        }
        autoplay();
    });
})(window, document, window.jQuery, 'soulteary 2013/10/30');