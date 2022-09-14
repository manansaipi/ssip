<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Abdul Mannan Saipii",
        "email" => "abdul.saipi@student.president.ac.id",
        "image" => "pp.jpg"
    ]);
});


Route::get('/blog', function () {



    $blog_posts = [
        [
            "title" => "First Title Post",
            "slug" => "first-post-title",
            "author" => "Abdul Mannan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic expedita similique corporis iusto provident sapiente illum neque molestias aliquid nesciunt ut laboriosam repudiandae cumque, quasi beatae eos at assumenda reprehenderit error animi tempore quos impedit. Eaque autem necessitatibus delectus atque. Itaque, quae dignissimos iure accusantium nostrum ipsam. Placeat, id ducimus nulla cupiditate quas dolore est, dolor quidem fuga omnis unde porro esse amet dolorem eum exercitationem odit. Iste ea voluptas id animi quos itaque minima? Ab nobis recusandae esse consequatur!"
        ],
        [
            "title" => "Second Title Post",
            "slug" => "second-post-title",
            "author" => "Mannan Saipi",
            "body" => "
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui magnam aspernatur molestias laboriosam sint, alias quo possimus reiciendis, ea, omnis consequuntur nobis? Impedit quibusdam totam ipsum deserunt voluptatum accusamus nam assumenda placeat nisi numquam! Quasi consequatur provident deserunt sapiente sed! Quas, iste ea! Aliquid quis eius voluptatum quam officiis cum possimus et aperiam assumenda, ullam excepturi fuga molestiae delectus magni corrupti quae autem, nesciunt impedit fugit est aut eos veritatis? Quia repudiandae odio distinctio numquam magnam illum hic recusandae adipisci fugiat molestiae accusantium incidunt nemo debitis vel vitae, rerum fugit repellat corrupti reprehenderit amet, at quas consectetur! Enim odio est ducimus tempora nesciunt recusandae iusto suscipit itaque quo blanditiis eaque neque dolorem harum quis aut doloremque officia, veniam dolorum nulla.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic expedita similique corporis iusto provident sapiente illum neque molestias aliquid nesciunt ut laboriosam repudiandae cumque, quasi beatae eos at assumenda reprehenderit error animi tempore quos impedit. Eaque autem necessitatibus delectus atque. Itaque, quae dignissimos iure accusantium nostrum ipsam. Placeat, id ducimus nulla cupiditate quas dolore est, dolor quidem fuga omnis unde porro esse amet dolorem eum exercitationem odit. Iste ea voluptas id animi quos itaque minima? Ab nobis recusandae esse consequatur!"
        ],

    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => @$blog_posts

    ]);
});


//single post page

route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "First Title Post",
            "slug" => "first-post-title",
            "author" => "Abdul Mannan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic expedita similique corporis iusto provident sapiente illum neque molestias aliquid nesciunt ut laboriosam repudiandae cumque, quasi beatae eos at assumenda reprehenderit error animi tempore quos impedit. Eaque autem necessitatibus delectus atque. Itaque, quae dignissimos iure accusantium nostrum ipsam. Placeat, id ducimus nulla cupiditate quas dolore est, dolor quidem fuga omnis unde porro esse amet dolorem eum exercitationem odit. Iste ea voluptas id animi quos itaque minima? Ab nobis recusandae esse consequatur!"
        ],
        [
            "title" => "Second Title Post",
            "slug" => "second-post-title",
            "author" => "Mannan Saipi",
            "body" => "
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui magnam aspernatur molestias laboriosam sint, alias quo possimus reiciendis, ea, omnis consequuntur nobis? Impedit quibusdam totam ipsum deserunt voluptatum accusamus nam assumenda placeat nisi numquam! Quasi consequatur provident deserunt sapiente sed! Quas, iste ea! Aliquid quis eius voluptatum quam officiis cum possimus et aperiam assumenda, ullam excepturi fuga molestiae delectus magni corrupti quae autem, nesciunt impedit fugit est aut eos veritatis? Quia repudiandae odio distinctio numquam magnam illum hic recusandae adipisci fugiat molestiae accusantium incidunt nemo debitis vel vitae, rerum fugit repellat corrupti reprehenderit amet, at quas consectetur! Enim odio est ducimus tempora nesciunt recusandae iusto suscipit itaque quo blanditiis eaque neque dolorem harum quis aut doloremque officia, veniam dolorum nulla.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic expedita similique corporis iusto provident sapiente illum neque molestias aliquid nesciunt ut laboriosam repudiandae cumque, quasi beatae eos at assumenda reprehenderit error animi tempore quos impedit. Eaque autem necessitatibus delectus atque. Itaque, quae dignissimos iure accusantium nostrum ipsam. Placeat, id ducimus nulla cupiditate quas dolore est, dolor quidem fuga omnis unde porro esse amet dolorem eum exercitationem odit. Iste ea voluptas id animi quos itaque minima? Ab nobis recusandae esse consequatur!"
        ],

    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
