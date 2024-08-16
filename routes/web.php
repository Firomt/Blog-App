<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title"=> "Blog App",

        "blogs"=>[
            [
                "url"=> "",
                "is_trending"=> true,
                "author_image_url"=> "https://avatars.githubusercontent.com/u/147161286?v=4",
                "author"=>"Firomsa Mitiku",
                "image_url_portrait" => "https://picsum.photos/300/350",
                "image_url_landscape"=>"https://picsum.photos/360/160",
                "title"=>"Laravel Websockets | Chat Application Example",
                "date"=>"July 27, 2024",
                "description"=>"This course is about how to implements custom laravel web socket chat application",
                "tags"=>"tag1, tag2,tag3"




            ],
            [
                "url"=> "",
                "is_trending"=> true,
                "author_image_url"=> "https://avatars.githubusercontent.com/u/147161286?v=4",
                "author"=>"Firomsa Mitiku",
                "image_url_portrait" => "https://picsum.photos/300/350",
                "image_url_landscape"=>"https://picsum.photos/360/160",
                "title"=>"Laravel Websockets | Chat Application Example",
                "date"=>"July 27, 2024",
                "description"=>"This course is about how to implements custom laravel web socket chat application",
                "tags"=>"tag1, tag2,tag3"




            ],
            [
                "url"=> "",
                "is_trending"=> true,
                "author_image_url"=> "https://avatars.githubusercontent.com/u/147161286?v=4",
                "author"=>"Firomsa Mitiku",
                "image_url_portrait" => "https://picsum.photos/300/350",
                "image_url_landscape"=>"https://picsum.photos/360/160",
                "title"=>"Laravel Websockets | Chat Application Example",
                "date"=>"July 27, 2024",
                "description"=>"This course is about how to implements custom laravel web socket chat application",
                "tags"=>"tag1, tag2,tag3"




            ]
            ],

            "trending"=>[
            [
                "url"=> "",
                "is_trending"=> true,
                "author_image_url"=> "https://avatars.githubusercontent.com/u/147161286?v=4",
                "author"=>"Firomsa Mitiku",
                "image_url_portrait" => "https://picsum.photos/300/350",
                "image_url_landscape"=>"https://picsum.photos/360/160",
                "title"=>"Laravel Websockets | Chat Application Example",
                "date"=>"July 27, 2024",
                "description"=>"This course is about how to implements custom laravel web socket chat application",
                "tags"=>"tag1, tag2,tag3"




            ],
            [
                "url"=> "",
                "is_trending"=> true,
                "author_image_url"=> "https://avatars.githubusercontent.com/u/147161286?v=4",
                "author"=>"Firomsa Mitiku",
                "image_url_portrait" => "https://picsum.photos/300/350",
                "image_url_landscape"=>"https://picsum.photos/360/160",
                "title"=>"Laravel Websockets | Chat Application Example",
                "date"=>"July 27, 2024",
                "description"=>"This course is about how to implements custom laravel web socket chat application",
                "tags"=>"tag1, tag2,tag3"




            ],
            [
                "url"=> "",
                "is_trending"=> true,
                "author_image_url"=> "https://avatars.githubusercontent.com/u/147161286?v=4",
                "author"=>"Firomsa Mitiku",
                "image_url_portrait" => "https://picsum.photos/300/350",
                "image_url_landscape"=>"https://picsum.photos/360/160",
                "title"=>"Laravel Websockets | Chat Application Example",
                "date"=>"July 27, 2024",
                "description"=>"This course is about how to implements custom laravel web socket chat application",
                "tags"=>"tag1, tag2,tag3"




            ]
            ],

            "recentlyWritten"=>[
            [
                "url"=> "",
                "is_trending"=> true,
                "author_image_url"=> "https://avatars.githubusercontent.com/u/147161286?v=4",
                "author"=>"Firomsa Mitiku",
                "image_url_portrait" => "https://picsum.photos/300/350",
                "image_url_landscape"=>"https://picsum.photos/360/160",
                "title"=>"Laravel Websockets | Chat Application Example",
                "date"=>"July 27, 2024",
                "description"=>"This course is about how to implements custom laravel web socket chat application",
                "tags"=>"tag1, tag2,tag3"




            ],
            [
                "url"=> "",
                "is_trending"=> true,
                "author_image_url"=> "https://avatars.githubusercontent.com/u/147161286?v=4",
                "author"=>"Firomsa Mitiku",
                "image_url_portrait" => "https://picsum.photos/300/350",
                "image_url_landscape"=>"https://picsum.photos/360/160",
                "title"=>"Laravel Websockets | Chat Application Example",
                "date"=>"July 27, 2024",
                "description"=>"This course is about how to implements custom laravel web socket chat application",
                "tags"=>"tag1, tag2,tag3"




            ],
            [
                "url"=> "",
                "is_trending"=> true,
                "author_image_url"=> "https://avatars.githubusercontent.com/u/147161286?v=4",
                "author"=>"Firomsa Mitiku",
                "image_url_portrait" => "https://picsum.photos/300/350",
                "image_url_landscape"=>"https://picsum.photos/360/160",
                "title"=>"Laravel Websockets | Chat Application Example",
                "date"=>"July 27, 2024",
                "description"=>"This course is about how to implements custom laravel web socket chat application",
                "tags"=>"tag1, tag2,tag3"




            ]
        ]


    ]);
});
