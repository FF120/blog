<!DOCTYPE html>
<html lang="zh-CN">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">

    <title>SEARCH-ALL</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/search/search_result/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/search/search_result/dashboard.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body mycollectionplug="bind">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://my.blog.com/find/result">SEARCH_ALL</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://v3.bootcss.com/examples/dashboard/#">Dashboard</a></li>
            <li><a href="http://v3.bootcss.com/examples/dashboard/#">Settings</a></li>
            <li><a href="http://v3.bootcss.com/examples/dashboard/#">Profile</a></li>
            <li><a href="http://v3.bootcss.com/examples/dashboard/#">Help</a></li>
          </ul>
          <form style="width:60%" action="JavaScript:baidu()" class="navbar-form navbar-left">
            <input style="width:100%" id="search" type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" id="sousuo">
            <li class="active"><a href="JavaScript:baidu()">百度<span class="sr-only">(current)</span></a></li>
            <li><a href="JavaScript:bing()">必应</a></li>
            <li><a href="JavaScript:s360()">360</a></li>
            <li><a href="JavaScript:sougou()">搜狗</a></li>

            <li><a href="JavaScript:Google()">Google</a></li>
            <li><a href="JavaScript:Yahoo()">雅虎</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="JavaScript:GooglePaper()">谷歌学术</a></li>
            <li><a href="JavaScript:BingPaper()">必应学术</a></li>
            <li><a href="JavaScript:BaiduPaper()">百度学术</a></li>
            <li><a href="JavaScript:CnkiPaper()">知网学术</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="JavaScript:BaiduTranslate()">百度翻译</a></li>
            <li><a href="JavaScript:CnkiTranslate()">知网翻译</a></li>
            <li><a href="JavaScript:GoogleTranslate()">谷歌翻译</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!--<h1 class="page-header">Dashboard</h1>-->
          <!---->
          <div class="soso" id="innerHTML">
            <iframe  onLoad="JavaScript:changeFrameHeight()" style="display: inline-block" id="baidu" frameborder=0 width="1400" height="100%" src="http://www.baidu.com"></iframe>
            <iframe style="display: none" id="bing" frameborder=0 width="1090" height="700" src=""></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('/css/search/search_result/jquery.min.js')}}"></script>
    <script src="{{asset('/css/search/search_result/bootstrap.min.js ')}}"></script>
    <script src="{{asset('/css/search/search_result/dump_src.js ')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('/css/search/search_result/ie10-viewport-bug-workaround.js')}}"></script>


<div style="position: static; width: 0px; height: 0px; border: none; padding: 0px; margin: 0px;"><div id="trans-tooltip"><div id="tip-left-top" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-left-top.png&quot;);"></div><div id="tip-top" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-top.png&quot;) repeat-x;"></div><div id="tip-right-top" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-right-top.png&quot;);"></div><div id="tip-right" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-right.png&quot;) repeat-y;"></div><div id="tip-right-bottom" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-right-bottom.png&quot;);"></div><div id="tip-bottom" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-bottom.png&quot;) repeat-x;"></div><div id="tip-left-bottom" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-left-bottom.png&quot;);"></div><div id="tip-left" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-left.png&quot;);"></div><div id="trans-content"></div></div><div id="tip-arrow-bottom" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-arrow-bottom.png&quot;);"></div><div id="tip-arrow-top" style="background: url(&quot;chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-arrow-top.png&quot;);"></div></div>
  </body>
<script>
    //搜索引擎
    function baidu(){
      var url = "https://www.baidu.com/s?wd=";
      var search = document.getElementById('search').value;
      var baiduFrame = document.getElementById('baidu').setAttribute("src" , url+search);
    }
    function bing(){
      var url = "http://cn.bing.com/search?q=";
      var search = document.getElementById('search').value;
      var bingFrame = document.getElementById('baidu').setAttribute("src" , url+search);
    }
    function s360(){
      var url = "http://www.so.com/s?q=";
      var search = document.getElementById('search').value;
      var s360Frame = document.getElementById('baidu').setAttribute("src" , url+search);
    }
    function sougou(){
      var url = "https://www.sogou.com/web?query=";
      var search = document.getElementById('search').value;
      var sougouFrame = document.getElementById('baidu').setAttribute("src" , url+search);
    }
    function Google(){
      var url = "https://www.google.com/#newwindow=1&q=";
      var search = document.getElementById('search').value;
      window.open(url+search);
    }
    function Yahoo(){
      var url = "https://search.yahoo.com/search?p=";
      var search = document.getElementById('search').value;
      window.open(url+search);
    }
    //--------------------------------------------------------------------------
    //学术搜索
    function GooglePaper(){
      var url = "https://scholar.google.com/scholar?hl=en&q=";
      var search = document.getElementById('search').value;
      window.open(url+search);
    }
    function BingPaper(){
      var url = "http://cn.bing.com/academic/search?q=";
      var search = document.getElementById('search').value;
      var baiduFrame = document.getElementById('baidu').setAttribute("src" , url+search);
    }
    function BaiduPaper(){
      var url = "http://xueshu.baidu.com/s?wd=";
      var search = document.getElementById('search').value;
      var baiduFrame = document.getElementById('baidu').setAttribute("src" , url+search);
    }
    function CnkiPaper(){
      var url = "http://scholar.cnki.net/result.aspx?q=";
      var search = document.getElementById('search').value;
      var baiduFrame = document.getElementById('baidu').setAttribute("src" , url+search);
    }
  //------------------------------------------------------------------------------------------------
  //翻译
  function BaiduTranslate(){
    var url = "http://fanyi.baidu.com/#en/zh/";
    var search = document.getElementById('search').value;
    var baiduFrame = document.getElementById('baidu').setAttribute("src" , url+search);
  }
  function CnkiTranslate(){
    var url = "http://dict.cnki.net/dict_result.aspx?searchword=";
    var search = document.getElementById('search').value;
    var baiduFrame = document.getElementById('baidu').setAttribute("src" , url+search);
  }
  function GoogleTranslate(){
    var url = "http://translate.google.cn/#en/zh-CN/";
    var search = document.getElementById('search').value;
    window.open(url+search);
  }

</script>

  <script type="text/javascript" language="javascript">

    function changeFrameHeight(){
      var ifm= document.getElementById("baidu");
      ifm.height=document.documentElement.clientHeight;
      ifm.width=0.8*document.documentElement.clientWidth;
    }
    window.onresize=function(){
      changeFrameHeight();
    }

  </script>
</html>