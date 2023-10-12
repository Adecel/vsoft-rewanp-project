<?php

namespace App\Http\Controllers;

use App\Models\NewsArticles;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\NewsArticles2;

class IndexController extends Controller
{
    public function getData(){

        $testimonials = Testimonial::orderBy('CreDate', 'desc')->take(3)->get();
        $articles = NewsArticles::orderBy('PublishDate', 'desc')->take(3)->get();

        return \view('index', compact('testimonials', 'articles'));

    }

    public function tempGetData(){

        $testimonials = Testimonial::orderBy('CreDate', 'desc')->take(3)->get();
        $articles = NewsArticles::orderBy('TimeStamp', 'desc')->take(3)->get();

        return \view('index_temp', compact('testimonials', 'articles'));

    }

    public function getAllArticles(){

        $allArticles = NewsArticles::orderBy('PublishDate', 'desc')->paginate(9);

        return \view('articles.all_news', compact('allArticles'));
    }

    public function readArticle($id){

        $article = NewsArticles::where('TextNo', $id)->get();
        /*$article = $articles->where('TextNo', '=', $id);*/

        return \view('articles.news', compact('article'));

    }

    public function getAllArticles2(){

        $allArticles = NewsArticles2::orderBy('PublishDate', 'desc')->paginate(9);

        return \view('articles2.all_news', compact('allArticles2'));
    }

    public function readArticle2($id){

        $article = NewsArticles2::where('id', $id)->get();
        /*$article = $articles->where('TextNo', '=', $id);*/

        return \view('articles2.news', compact('article2'));

    }
}
