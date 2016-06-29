<?php namespace App\Http\Controllers\secret;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;

use Input, Notification, Auth, Request, Cache;


class IndexController extends Controller
{

    public function __construct()
    {
        conversionClassPath(__CLASS__);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex(){
        return View('secret/index');
    }


}
