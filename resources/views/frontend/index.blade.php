@extends('frontend.layouts.master')

@section('content')

    <section class="hdp w_1000">
        <section class="index_hdp">
            <div id="myTab_div_Content0" class="hdpbgimg" style="display: block;">
                <a href="javascript:;"><img src="{{ asset('upload/index-top-1.jpg') }}"  border="0" /></a>
            </div>
            <div id="myTab_div_Content1" class="hdpbgimg" style="display: none;">
                <a href="javascript:;"><img src="{{ asset('upload/index-top-1.jpg') }}"  border="0" /></a>
            </div>
            <div class="navli">
                <ul id="myTab_div">
                    <li class="active" id="myTab0" onmousemove="nTabs(this,0);">1</li>
                    <li class="normal" id="myTab1" onmousemove="nTabs(this,1);">2</li>
                </ul>
            </div>
        </section>
    </section>

    <section class="img_btn3 w_1000">
    	<ul>
    		<li><img src="{{ asset('upload/img_wx1.gif') }}" alt="" /></li>
    		<li><a target="_blank" href="/map"><img src="{{ asset('upload/img_dz2.gif') }}" alt="" /></a></li>
    		<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1652000376&site=qq&menu=yes"><img src="{{ asset('upload/img_qq3.gif') }}" alt="" /></a></li>
    	</ul>
    </section>

    <section class="bt_h1 w_1000">
    	<h1>娱乐嘉年华</h1>
    </section>
    <section class="yule">
    	<ul>
    	@for ($i = 1; $i <= 8; $i++)
            <li>
                <div class="imgnr">
                    <a href='javascript:;'><img src='{{ asset('upload/yule-') }}{{ $i }}.jpg' border='0' width='' height=''></a>
                </div>
                <div class="txtnr">
                    <a href='javascript:;'>追击狩猎</a>
                </div>
            </li>
        @endfor
    	</ul>
    	<div class="c_0"></div>
    </section>
    <div class="piao_more">
    	<a href="javascript:;">查看更多娱乐项目 >></a>
    </div>


    <section class="bt_h1 w_1000">
    	<h1>住宿嘉年华</h1>
    </section>

    <section class="zhusu w_1000">
    	<ul>
    		<li>
    			<a href="/muwu/info.html">
    			<div class="imgnr">
    				<img src="{{ asset('upload/zhusu-1.jpg') }}" alt="" />
    			</div>
    			<div class="txtnr">
    				草原特色木屋
    			</div>
    			</a>
    		</li>
    		<li>
    			<a href="/zhangpeng/info.html">
    			<div class="imgnr">
    				<img src="{{ asset('upload/zhusu-2.jpg') }}" alt="" />
    			</div>
    			<div class="txtnr">
    				草原特色帐篷
    			</div>
    			</a>
    		</li>
    		<li>
    			<a href="/dujiacun/bieshu_ps.html">
    			<div class="imgnr">
    				<img src="{{ asset('upload/zhusu-3.jpg') }}" alt="" />
    			</div>
    			<div class="txtnr">
    				坝上度假村别墅
    			</div>
    			</a>
    		</li>
    	</ul>
    	<div class="c_0"></div>
    </section>

@endsection