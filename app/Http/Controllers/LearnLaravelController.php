<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Tests\HttpCache\StoreTest;
use App\Model\Category;

class LearnLaravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        echo "<h1>这里是学习Laravel框架的测试页面</h1>";
        echo "<p>框架相关的各种操作都会在这里测试，所以这里存有Laravel的各种用法</p>";
    }

    /**
     * methods of operate file and directory
     * not support zh_CN
     */
    public function getFile()
    {
        if (Storage::has("testDirectory")) {
            Storage::deleteDirectory("testDirectory");
        }
        Storage::makeDirectory('testDirectory');
        if (Storage::has('testDirectory/testFile.txt')) {
            Storage::delete('testDirectory/testFile.txt');
        }
        Storage::disk('local')->put('testDirectory/testFile.txt', 'the content for test the filesystem');
        Storage::prepend('testDirectory/testFile.txt', 'FFFFront');
        Storage::append('testDirectory/testFile.txt', 'EEEEnd');

        Storage::makeDirectory("testDirectory/subDirectory1");
        Storage::makeDirectory("testDirectory/subDirectory2");
        Storage::makeDirectory("testDirectory/subDirectory3");

        Storage::copy('testDirectory/testFile.txt', 'testDirectory/subDirectory1/test1.txt');
        Storage::copy('testDirectory/testFile.txt', 'testDirectory/subDirectory2/test2.txt');
        Storage::copy('testDirectory/testFile.txt', 'testDirectory/subDirectory3/test3.txt');

        $files = Storage::files('testDirectory');
        $allfiles = Storage::allFiles('testDirectory');
        echo "文件夹testDirectory下的文件：<br>";
        dump($files);
        echo "文件夹testDirectory下的所有文件：<br>";
        dump($allfiles);
        $directories = Storage::directories('testDirectory');
        echo "文件夹testDirectory的子文件夹：<br>";
        dump($directories);

        Storage::deleteDirectory('testDirectory');
        echo "所有文件夹已删除！";
    }

    /**
     * method of operate file and directory using php method without laravel
     * this method support chinese
     */
    public function getWriteToFileGB2312(){
        $root_path =  storage_path().DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'myBlog'.DIRECTORY_SEPARATOR;
        $catagory = Category::getCategoryNameByCatId( 2 );
        $catagory = iconv('UTF-8','GB2312',$catagory);
        if(!is_dir($root_path.$catagory)){
            mkdir($root_path.$catagory);
        }
        $filename = "中文说明.md";
        $filename = iconv('UTF-8','GB2312',$filename);
        $content = "ffffff";
        file_put_contents($root_path.$catagory.DIRECTORY_SEPARATOR.$filename,$content);
    }

    public function getTime(){
        date_default_timezone_set('Asia/Shanghai');
        echo date("YmdHis");;
    }
    public function getPdf(){
        $filename = "fMRI Data analysis.pdf";
        $pdf_path =  storage_path().DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'myPDF'.DIRECTORY_SEPARATOR;
        $file = $pdf_path.DIRECTORY_SEPARATOR.$filename;
        $this->read_pdf($file);
    }

    private function read_pdf($file){
        if(strtolower(substr(strrchr($file,'.'),1)) != 'pdf') {
            echo '文件格式不对.';
            return;
        }
        if(!file_exists($file)) {
            echo '文件不存在';
            return;
        }
        header('Content-type: application/pdf');
        header('filename='.$file);
        readfile($file);
    }

}
