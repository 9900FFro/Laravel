<?php

namespace App\Http\Controllers;

class newsController extends Controller
{
    private $categoryNews = [
        'sport' => ['title' => 'sport'],
        'society' => ['title' => 'society']
    ];


    public function news()
    {
        foreach ($this->categoryNews as $route => $title) {
            $url = route("news::$route");
            echo "  <div>
                        <a href='$url'>
                            {$title['title']}
                        </a>
                    </div>";
        }
        exit;
    }

    public function newsSport()
    {
        echo   "<div>
                    <a href=''>
                        sportNews1
                    </a>
               </div>";
        exit;
    }

    public function newsSociety()
    {
        echo   "<div>
                    <a href=''>
                        societyNews1
                    </a>
               </div>";
        exit;
    }
}