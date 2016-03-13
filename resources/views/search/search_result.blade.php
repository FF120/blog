<!DOCTYPE html>
<html lang="zh-CN">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">

    <title>搜索结果页面</title>
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
          <a class="navbar-brand" href="http://v3.bootcss.com/examples/dashboard/#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://v3.bootcss.com/examples/dashboard/#">Dashboard</a></li>
            <li><a href="http://v3.bootcss.com/examples/dashboard/#">Settings</a></li>
            <li><a href="http://v3.bootcss.com/examples/dashboard/#">Profile</a></li>
            <li><a href="http://v3.bootcss.com/examples/dashboard/#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input id="search" type="text" class="form-control" placeholder="Search...">
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
            <li><a href="JavaScript:sougou()">搜狗</a></li>
            <li><a href="JavaScript:s360()">360</a></li>
            <li><a href="JavaScript:Google()">Google</a></li>
            <li><a href="http://v3.bootcss.com/examples/dashboard/#">雅虎</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!--<h1 class="page-header">Dashboard</h1>-->
          <!--在这里嵌入百度搜索的内容-->
          <div class="soso" id="innerHTML">
            <iframe style="display: inline-block" id="baidu" frameborder=0 width="1090" height="700" src="http://cn.bing.com/"></iframe>
            <iframe style="display: none" id="Google" frameborder=0 width="1090" height="700" src="http://www.baidu.com/"></iframe>
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
    function baidu(){
//      var url = "https://www.baidu.com/s?wd=";
//      var search = document.getElementById('search').value;
//      var baiduFrame = document.getElementById('baidu').setAttribute("src" , url+search);

      var ee = document.getElementById('baidu').parentNode;
      dump(ee);

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
</script>
</html>