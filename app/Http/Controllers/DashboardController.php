<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.welcome');
    }

    public function aboutPage(){

        return view('pages.about');
    }

    public function servicePage(){

        return view('pages.service');
    }


    public function contactPage(){
        return view('pages.contact');
    }


    public function teamPage(){

        return view('pages.team');
    }


    public function testmonialPage(){

        return view('pages.testmonial');
    }


    public function portfolioPage(){

        return view('pages.portfolio');
    }


    // public function blogPost($slug){

    //     return view('pages.blog-post',['slug'=>$slug]);
    // }



    public function blogPostPage($slug){

        return view('pages.blog',['slug'=>$slug]);

    }

    public function blogPage(){
        return view('pages.blog-page');
    }



    
}
