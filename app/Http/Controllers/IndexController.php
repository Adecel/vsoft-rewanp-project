<?php

namespace App\Http\Controllers;

use App\Models\NewsArticles;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getData(){

        $testimonials = Testimonial::orderBy('CreDate', 'desc')->take(3)->get();
        $articles = NewsArticles::orderBy('PublishDate', 'desc')->take(3)->get();

        return \view('index', compact('testimonials', 'articles'));
    }


    // public function getAllArticles(){

    //     $allArticles = NewsArticles::orderBy('PublishDate', 'desc')->paginate(9);
    //     return \view('articles.all_news', compact('allArticles'));
    // }

    // public function readArticle($id){

    //     $article = NewsArticles::where('TextNo', $id)->get();
    //     return \view('articles.news', compact('article'));
    // }
}
