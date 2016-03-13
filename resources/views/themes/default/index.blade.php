@extends('themes.default.layouts')

@section('header')
    <title>{{ systemConfig('title','Fei Blog') }} -Powered By  {{ systemConfig('subheading','Fei Blog') }}</title>
    <meta name="keywords" content="{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{{ systemConfig('seo_desc') }}">
@endsection

@section('site_header')
    <header class="site-header">
        <div class="container">
            @if(empty($auth))
                <h1><a href="/">Index Blog</a></h1>
            @elseif(!empty($auth))
                <h1><a href="/">{{$auth->name}} Blog</a></h1>
            @endif
            <nav class="site-header-nav" role="navigation">
                @if(empty($auth))
                    <a href="{{url('backend/auth/login')}}" class=" site-header-nav-item" target="" title="Login">Login</a>
                @elseif(!empty($auth))
                    <a href="{{url('backend/auth/logout')}}" class=" site-header-nav-item" target="" title="Login">Logout</a>
                @endif
                <a href="/" class=" site-header-nav-item" target="" title="Home">Home</a>


                @if(!empty($navList))
                    @foreach($navList as $nav)
                        <a href="{{ $nav->url }}" class="site-header-nav-item">{{ $nav->name }}</a>
                    @endforeach

                @endif
                <form class="demo_search" action="{{url('search/keyword')}}" method="get">
                    <i class="icon_search" id="open"></i>
                    <input class="demo_sinput" type="text" name="keyword" id="search_input" placeholder="输入关键字 回车搜索" />
                </form>
            </nav>


        </div>
    </header>

    <!-- / header -->

@endsection

@section('content')
<section class="banner">
    <div class="collection-head">
        <div class="container">
            <div class="collection-title">
                @if(!empty($auth))
                    <h1 class="collection-header">{{$auth->name}}</h1>
                @else
                    <h1 class="collection-header">Hello Word</h1>
                @endif
                <div class="collection-info">
                    <span class="meta-info">
                        如果不能成为拯救世界的神，那就堕落到征服世界的魔吧！
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.banner -->
<section class="container content">
    <div class="columns">
        <div class="column two-thirds" >
            <ol class="repo-list">
                @if(!empty($articleList))
                    @foreach($articleList['data'] as $article)
                        <li class="repo-list-item">
                            <h3 class="repo-list-name">
                                <a href="{{ route('article.show',array('id'=>$article->id)) }}" title="{{ $article->title }}">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            <p class="repo-list-description">
                                {{ strCut(conversionMarkdown($article->content),80) }}
                            </p>
                            <p class="repo-list-meta">
                                <span class="octicon octicon-calendar"></span>{{ $article->created_at->format('Y-m-d') }}
                            </p>
                        </li>
                    @endforeach
                @endif
            </ol>
        </div>
        <div class="column one-third">
            @include('themes.default.right')
        </div>
    </div>
    <div class="pagination text-align">
        <nav>
           {!! $articleList['page']->render($page) !!}
        </nav>
    </div>
    <!-- /pagination -->
</section>
<!-- /section.content -->

@endsection