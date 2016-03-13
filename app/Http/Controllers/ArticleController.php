<?php namespace App\Http\Controllers;

use App\Components\EndaPage;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Model\ArticleStatus;
use App\Model\Article;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $article = Article::getNewsArticle(8);//每页显示文章的数量
        $auth_user = Auth::user();//获得登陆的用户
        viewInit();
        $page = new EndaPage($article['page']);
        return homeView('index', array(
            'articleList' => $article,
            'auth' => $auth_user,
            'page' => $page
        ));
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::getArticleModelByArticleId($id);

        ArticleStatus::updateViewNumber($id);
        $data = array(
            'article' => $article,
        );
        viewInit();
        return homeView('article', $data);
    }

}
