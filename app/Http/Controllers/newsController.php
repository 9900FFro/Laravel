<?php

namespace App\Http\Controllers;

class newsController extends Controller
{
    private $categoryNews = [
        'sport' => 'content.newsSport',
        'society' => 'content.newsSociety'
    ];


    public function news()
    {
        $category = $this->categoryNews;
        return view('content.news', ['category' => $category]);
        // foreach ($this->categoryNews as $route => $title) {
        //     $url = route("news::$route");
        //     echo "  <div>
        //                 <a href='$url'>
        //                     {$title['title']}
        //                 </a>
        //             </div>";
        // }
        // exit;
    }

    public function card($category)
    {
        foreach($this->categoryNews as $key => $value) {
            if($key == $category) {
                $content = $value;
            }
        }
        return view($content);

        // return view('content.card', ['category' => $category]);
    }

    // public function newsSport()
    // {
    //     return view('blocks.newsSport');
    // }

    // public function newsSociety()
    // {
    //     return view('blocks.newsSociety');
    // }
}