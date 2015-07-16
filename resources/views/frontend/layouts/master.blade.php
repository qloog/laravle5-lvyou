<!DOCTYPE html>
<html lang="cn">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="all" />
        <title>坝上草原嘉年华官网_FNCYX.COM</title>
        <meta name="description" content="描述。。。。" />
        <meta name="keywords" content="坝上草原嘉年华 坝上草原嘉年华官网 坝上草原 娱乐  " />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        @yield('style_before')
        <link href="{{ asset('css/2015_style.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <section class="head_top">
        	<section class="head_c w_1000">
        		<div class="logo">
        			<a href="/"><img src="{{ asset('upload/logo.gif') }}" alt="" title="" /></a>
        		</div>
        		<div class="btn_cx">
        			<a href="javascript:;" target="_blank">订单查询</a>
        		</div>
        		<div class="phone">
        			咨询热线：<span>18618228323</span>
        		</div>
        	</section>
        </section>

        <section class="head_nav w_1000">
            <ul>
                <li class='current'><a href='/'>首页</a></li>
                <li><a href='/introduction' @if >景区介绍</a></li>
                <li><a href='javascript:;' >住宿体验</a></li>
                <li><a href='javascript:;' >娱乐项目</a></li>
                <li><a href='javascript:;' >美食特色</a></li>
                <li><a href='javascript:;' >亲子游</a></li>
                <li><a href='javascript:;' >越野&周边</a></li>
                <li><a href='javascript:;' >爱心之旅</a></li>
            </ul>
        </section>

        @yield('content')

         <section class="foot w_1000">
            <p>坝上草原嘉年华 www.fncyx.com <b>官方网站</b> &nbsp; &nbsp; <a href="/company/info.html">关于我们</a></p>
            <p>咨询热线：<b>18618228323</b> &nbsp; &nbsp; 景区地址：<a href="/map">河北省承德市丰宁满族自治县大滩镇向北三公里244省道东侧</a></p>
            <p>工信部备案号：冀ICP备14009776号 &nbsp; &nbsp; 版权所有： 隶属于北京众合国际旅行社有限公司 &nbsp; 隶属于丰宁满族自治县云海文化产业有限公司
        </section>

        <script type="text/javascript">
            var nextNum=1;
            function nTabs(thisObj,Num){
                if(thisObj.className == "active")return;
                var tabObj = thisObj.parentNode.id;
                var tabList = document.getElementById(tabObj).getElementsByTagName("li");
                for(var i=0; i <tabList.length; i++)
                {
                    if (i == Num)
                    {
                        thisObj.className = "active";
                        document.getElementById(tabObj+"_Content"+i).style.display = "block";
                        nextNum = i+1;
                        if(i== (tabList.length-1)){
                            nextNum =0
                        }
                    } else {
                        tabList[i].className = "normal";
                        document.getElementById(tabObj+"_Content"+i).style.display = "none";
                    }
                }
            }

            setInterval(function(){nTabs(document.getElementById("myTab"+nextNum),nextNum);},4000);
        </script>
    </body>
</html>