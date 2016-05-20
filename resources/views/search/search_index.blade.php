<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh" xml:lang="zh" xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type" />

		<link href="{{ asset('css/search/bing.com.css')}}" rel="stylesheet" type="text/css"/>
         
        <title>
            微软必应搜索 - 全球搜索，有问必应 (Bing)
        </title>
        <link rel="icon" sizes="any" mask="" href="/fd/s/a/hp/bingcn.svg" />
        <meta name="theme-color" content="#4F4F4F" />
    </head>
    
    <body class="zhs zh-CN wkit" onload="hpResize(_ge(&#39;bgDiv&#39;));_ge(&#39;sb_form_q&#39;).focus();if(_w.lb)lb();">
       
        <table id="hp_table">
            <tr>
                <td id="hp_cellCenter" class="hp_hd">
                    <div id="hp_container">
                        <div id="bgDiv">
                            <div id="hp_vidwrp">
                            </div>
                            <video id="vid" onended="VM.pause();" autobuffer preload="auto" oncontextmenu="return false"
                            />
                        </div>
                        <div id="sbox" class="sw_sform" role="search">
                            <div class="hp_sw_logo hpcLogoWhite">
                                必应
                            </div>
                            <div class="search_controls">
                                <a href="javascript:void(0)" id="hpinsthk" h="ID=SERP,5102.1">
                                    <span>
                                    </span>
                                </a>
                                <form action="/find/find" id="sb_form" class="sw_box">
                                    <div class="b_searchboxForm">
                                        <input class="b_searchbox" id="sb_form_q" name="q" title="输入搜索词" type="search"
                                        value="" maxlength="100" autocapitalize="off" autocorrect="off" autocomplete="off"
                                        spellcheck="false" />
                                        <input type="submit" class="b_searchboxSubmit" id="sb_form_go" title="Search"
                                        tabIndex="0" name="go" />
                                        <!--<input id="sa_qs" name="qs" value="ds" type="hidden" />
                                        <input type="hidden" value="QBLH" name="form" />-->
                                    </div>
                                </form>
                            </div>
                        </div>
						<!--  头部导航条注释掉，需要的时候再加上------------
                        <div id="hp_sw_hdr" class="hp_hor_hdr">
                            <div class="sw_tb">
                                <ul id="sc_hdu" class="sc_hl1 hp_head_nav" role="navigation">
                                    <li id="scpt0" class="">
                                        <a href="/images?FORM=Z9LH" id="scpl0" aria-owns="scpc0" aria-controls="scpc0"
                                        aria-expanded="false" onclick="selectScope(this, 'images');" h="ID=SERP,5022.1">
                                            图片
                                        </a>
                                        <div id="scpc0" role="group" aria-labelledby="scpl0" aria-hidden="true"
                                        aria-expanded="false">
                                        </div>
                                    </li>
                                    <li id="scpt1" class="">
                                        <a href="/videos?FORM=Z9LH1" id="scpl1" aria-owns="scpc1" aria-controls="scpc1"
                                        aria-expanded="false" onclick="selectScope(this, 'video');" h="ID=SERP,5023.1">
                                            视频
                                        </a>
                                        <div id="scpc1" role="group" aria-labelledby="scpl1" aria-hidden="true"
                                        aria-expanded="false">
                                        </div>
                                    </li>
                                    <li id="scpt2" class="">
                                        <a href="/academic/?FORM=Z9LH2" id="scpl2" aria-owns="scpc2" aria-controls="scpc2"
                                        aria-expanded="false" onclick="selectScope(this, 'academic');" h="ID=SERP,5024.1">
                                            学术
                                        </a>
                                        <div id="scpc2" role="group" aria-labelledby="scpl2" aria-hidden="true"
                                        aria-expanded="false">
                                        </div>
                                    </li>
                                    <li id="scpt3" class="">
                                        <a href="/dict?FORM=Z9LH3" id="scpl3" aria-owns="scpc3" aria-controls="scpc3"
                                        aria-expanded="false" onclick="selectScope(this, 'dictionary');" h="ID=SERP,5025.1">
                                            词典
                                        </a>
                                        <div id="scpc3" role="group" aria-labelledby="scpl3" aria-hidden="true"
                                        aria-expanded="false">
                                        </div>
                                    </li>
                                    <li id="scpt4" class="">
                                        <a href="/ditu/?FORM=Z9LH4" id="scpl4" aria-owns="scpc4" aria-controls="scpc4"
                                        aria-expanded="false" onclick="selectScope(this, 'local');" h="ID=SERP,5026.1">
                                            地图
                                        </a>
                                        <div id="scpc4" role="group" aria-labelledby="scpl4" aria-hidden="true"
                                        aria-expanded="false">
                                        </div>
                                    </li>
                                    <li id="scpt5" class="">
                                        <a href="/explore?FORM=Z9LH5" id="scpl5" aria-owns="scpc5" aria-controls="scpc5"
                                        aria-expanded="false" onclick="selectScope(this, 'seeall');" h="ID=SERP,5027.1">
                                            更多
                                        </a>
                                        <div id="scpc5" role="group" aria-labelledby="scpl5" aria-hidden="true"
                                        aria-expanded="false">
                                        </div>
                                    </li>
                                    <li id="hdr_spl">
                                        &#124;
                                    </li>
                                    <li id="office">
                                        <a href="http://www.office.com?WT.mc_id=O16_BingHP" id="off_link" aria-owns="off_menu_cont"
                                        aria-controls="off_menu_cont" aria-expanded="false" target="_blank" h="ID=SERP,5012.1">
                                            Office Online
                                        </a>
                                        <div id="off_menu_cont" aria-labelledby="off_link" aria-expanded="false"
                                        aria-hidden="true" class="sc_pc" data-officemenuroot="office">
                                            <ul class="om">
                                                <li>
                                                    <a href="https://office.live.com/start/Word.aspx?WT.mc_id=O16_BingHP"
                                                    id="officemenu_word" title="Word Online" target="_blank" h="ID=SERP,5028.1">
                                                        <div>
                                                            <div class="oml_img" id="officemenu_word_img">
                                                            </div>
                                                            <div class="itm_desc">
                                                                Word Online
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://office.live.com/start/Excel.aspx?WT.mc_id=O16_BingHP"
                                                    id="officemenu_excel" title="Excel Online" target="_blank" h="ID=SERP,5029.1">
                                                        <div>
                                                            <div class="oml_img" id="officemenu_excel_img">
                                                            </div>
                                                            <div class="itm_desc">
                                                                Excel Online
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://office.live.com/start/PowerPoint.aspx?WT.mc_id=O16_BingHP"
                                                    id="officemenu_powerpoint" title="PowerPoint Online" target="_blank" h="ID=SERP,5030.1">
                                                        <div>
                                                            <div class="oml_img" id="officemenu_powerpoint_img">
                                                            </div>
                                                            <div class="itm_desc">
                                                                PowerPoint Online
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.onenote.com/notebooks?WT.mc_id=O16_BingHP" id="officemenu_onenote"
                                                    title="OneNote Online" target="_blank" h="ID=SERP,5031.1">
                                                        <div>
                                                            <div class="oml_img" id="officemenu_onenote_img">
                                                            </div>
                                                            <div class="itm_desc">
                                                                OneNote Online
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.sway.com?WT.mc_id=O16_BingHP&amp;utm_source=O16Bing&amp;utm_medium=Nav&amp;utm_campaign=HP"
                                                    id="officemenu_sway" title="Sway" target="_blank" h="ID=SERP,5032.1">
                                                        <div>
                                                            <div class="oml_img" id="officemenu_sway_img">
                                                            </div>
                                                            <div class="itm_desc">
                                                                Sway
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.docs.com?WT.mc_id=O16_BingHP" id="officemenu_docscom"
                                                    title="Docs.com" target="_blank" h="ID=SERP,5033.1">
                                                        <div>
                                                            <div class="oml_img" id="officemenu_docscom_img">
                                                            </div>
                                                            <div class="itm_desc">
                                                                Docs.com
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://onedrive.live.com/?gologin=1&amp;WT.mc_id=O16_BingHP"
                                                    id="officemenu_onedrive" title="OneDrive" target="_blank" h="ID=SERP,5034.1">
                                                        <div>
                                                            <div class="oml_img" id="officemenu_onedrive_img">
                                                            </div>
                                                            <div class="itm_desc">
                                                                OneDrive
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://calendar.live.com/?WT.mc_id=O16_BingHP" id="officemenu_calendar"
                                                    title="日历" target="_blank" h="ID=SERP,5035.1">
                                                        <div>
                                                            <div class="oml_img" id="officemenu_calendar_img">
                                                            </div>
                                                            <div class="itm_desc">
                                                                日历
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://people.live.com/?WT.mc_id=O16_BingHP" id="officemenu_people"
                                                    title="人脉" target="_blank" h="ID=SERP,5036.1">
                                                        <div>
                                                            <div class="oml_img" id="officemenu_people_img">
                                                            </div>
                                                            <div class="itm_desc">
                                                                人脉
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li id="outlook">
                                        <a href="https://outlook.com/?WT.mc_id=O16_BingHP?mkt=zh-CN" id="off_link"
                                        aria-owns="off_menu_cont" aria-controls="off_menu_cont" aria-expanded="false"
                                        target="_blank" h="ID=SERP,5013.1">
                                            Outlook.com
                                        </a>
                                    </li>
                                </ul>
                                <div id="hp_id_hdr">
                                    <div id="id_h" role="complementary">
                                        <a href="javascript:void(0);" id="id_l" class="id_button" h="ID=SERP,5068.1">
                                            <span id="id_s">
                                                登录
                                            </span>
                                            <span class="sw_spd id_avatar" id="id_a">
                                            </span>
                                            <span id="id_n" style="display:none">
                                            </span>
                                            <img id="id_p" class="b_icon id_avatar" style="display:none" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
                                            onError="FallBackToDefaultProfilePic(this)" />
                                        </a>
                                        <a href="javascript:void(0);" id="id_sc" class="sw_pref" title="首选项" h="ID=SERP,5078.1">
                                        </a>
                                        <span id="id_scfo" _iid="SERP.5077" class="b_hide">
                                        </span>
                                        <span id="id_d" _iid="SERP.5079">
                                        </span>
                                    </div>
                                    <div id="sw_tfbb">
                                    </div>
                                    <span class="sw_mktsw" id="sw_mktsw">
                                        <a href="http://global.bing.com/?FORM=HPCNEN&amp;setmkt=en-us&amp;setlang=en-us"
                                        id="sw_mkt_wrapper" h="ID=SERP,5042.1">
                                            <span class="sw_mkt_ficon">
                                            </span>
                                            Switch to Bing in English
                                        </a>
                                        <span>
                                            |
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
						-->
                        <!--
                        <div id="lap_w" data-ajaxiid="5044" data-date="20160313">
                        </div>
                        -->
						<!----页面下面的元素，需要的时候可以添加
                        <div id="hp_bottomCell">
                            <div id="hp_ctrls" class=" cnhpCtrls cnlifeaa">
                                <div id="sh_rdiv">
                                    <a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title={0}&amp;summary={1}&amp;url={2}&amp;pics={3}"
                                    id="sh_shqzl" title="QQ空间" target="_blank" h="ID=SERP,5041.1">
                                        <div id="sh_shqz" class="hpcsQzone sh_hide">
                                        </div>
                                    </a>
                                    <a href="http://service.weibo.com/share/share.php?title={1}&amp;placeholder={0}&amp;url={2}&amp;pic={3}"
                                    id="sh_shwbl" title="微博" target="_blank" h="ID=SERP,5040.1">
                                        <div id="sh_shwb" class="hpcsWeibo sh_hide">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" id="sh_shwcl" title="微信" h="ID=SERP,5039.1">
                                        <div id="sh_shwc" class="hpcsWechat sh_hide">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" id="sh_shl" class="sc_lightdis" title="分享"
                                    data-sharedCountEnabled="True" h="ID=SERP,5038.1">
                                        <div id="sh_sh" class="hpcShare">
                                        </div>
                                    </a>
                                    <div id="sh_shwcp" class="sh_hide">
                                        <div id="sh_shwcpq">
                                            <img id="sh_shwci0" class="sh_hide" data-pageUrl="http://cn.bing.com/coverstory?date=20160313"
                                            />
                                            <img id="sh_shwci1" class="sh_hide" data-pageUrl="http://cn.bing.com/coverstory?date=20160312"
                                            />
                                            <img id="sh_shwci2" class="sh_hide" data-pageUrl="http://cn.bing.com/coverstory?date=20160311"
                                            />
                                            <img id="sh_shwci3" class="sh_hide" data-pageUrl="http://cn.bing.com/coverstory?date=20160310"
                                            />
                                            <img id="sh_shwci4" class="sh_hide" data-pageUrl="http://cn.bing.com/coverstory?date=20160309"
                                            />
                                            <img id="sh_shwci5" class="sh_hide" data-pageUrl="http://cn.bing.com/coverstory?date=20160308"
                                            />
                                            <img id="sh_shwci6" class="sh_hide" data-pageUrl="http://cn.bing.com/coverstory?date=20160307"
                                            />
                                            <img id="sh_shwci7" class="sh_hide" data-pageUrl="http://cn.bing.com/coverstory?date=20160306"
                                            />
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" id="sh_psv" onclick="VM.pauseAction()" class="sh_psl"
                                    title="暂停" tabindex="-1" h="ID=SERP,5049.1">
                                        <div id="sh_ps" class="hpcPause">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" onclick="VM.playAction()" class="sh_pll"
                                    title="播放" tabindex="-1" h="ID=SERP,5048.1">
                                        <div id="sh_pl" class="hpcPlay">
                                        </div>
                                    </a>
                                    <a href="?FORM=HYLH#" id="sh_igl" title="上一页" h="ID=SERP,5064.1">
                                        <div class="sc_lightdis">
                                            <div id="sh_lt" class="hpcPrevious">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="?FORM=HYLH1#" id="sh_igr" title="下一页" h="ID=SERP,5063.1">
                                        <div class="sc_lightdis">
                                            <div id="sh_rt" class="hpcNext">
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" id="sh_cp" class="sc_light" title="加拿大，不列颠哥伦比亚省，大熊雨林的灰熊 (© Jack Chapman/Minden Pictures)"
                                    alt="加拿大，不列颠哥伦比亚省，大熊雨林的灰熊 (© Jack Chapman/Minden Pictures)" h="ID=SERP,5037.1">
                                        <div>
                                            <div id="sh_cp_in" class="hpcCopyInfo">
                                            </div>
                                            <div id="lifeNotify">
                                                点击此图标 查看今日美图故事及下载今日美图。
                                                <div class="hLine">
                                                </div>
                                                <div class="vLine">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" id="sh_igw" h="ID=SERP,5066.1">
                                        <div class="sc_dark">
                                            <div id="sh_dw" class="hpcDown">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div id="hp_notf" role="contentinfo">
                                </div>
                                <div id="hp_tbar" class=" hp_cnCarousel">
                                </div>
                            </div>
							
							
                            <div id="sb_foot" role="contentinfo">
                                <ul id="sw_footL">
                                    <li>
                                        <span>
                                            &#169; 2016 Microsoft
                                        </span>
                                        |
                                    </li>
                                    <li>
                                        <span>
                                            沪ICP备10042051号
                                        </span>
                                        |
                                    </li>
                                    <li>
                                        <a href="http://go.microsoft.com/fwlink/?LinkId=248686&amp;CLCID=804"
                                        h="ID=SERP,5083.1">
                                            隐私声明和 Cookie
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a href="http://go.microsoft.com/fwlink/?LinkID=246338&amp;CLCID=804"
                                        h="ID=SERP,5084.1">
                                            使用条款
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a href="http://go.microsoft.com/?linkid=9844344" h="ID=SERP,5085.1">
                                            广告
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a href="http://go.microsoft.com/fwlink/?LinkID=617297" id="sb_help" target="_blank"
                                        h="ID=SERP,5086.1">
                                            帮助
                                        </a>
                                        |
                                    </li>
                                    <li>
                                        <a href="#" id="sb_feedback" h="ID=SERP,5087.1">
                                            反馈
                                        </a>
                                    </li>
                                </ul>
                            </div>
							
                        </div>
						-->
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>