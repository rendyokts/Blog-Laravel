<?php

namespace App\Models;


class Post
{
    private  static $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "user" => "Rendi Oktavian",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Itaque a fugit eum corporis voluptates animi eos voluptate harum laudantium cum! 
            Commodi vero hic quae officia ipsa modi accusamus mollitia dolor reprehenderit in maxime necessitatibus, 
            consequuntur quam tenetur culpa quisquam eligendi ducimus voluptatum nesciunt vitae libero minima, 
            officiis quaerat impedit? Adipisci placeat non quaerat ad asperiores maiores maxime praesentium blanditiis eligendi quisquam"
        ],
        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "user" => "Rendi Oktavian",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Itaque a fugit eum corporis voluptates animi eos voluptate harum laudantium cum! 
            Commodi vero hic quae officia ipsa modi accusamus mollitia dolor reprehenderit in maxime necessitatibus, 
            consequuntur quam tenetur culpa quisquam eligendi ducimus voluptatum nesciunt vitae libero minima, 
            officiis quaerat impedit? Adipisci placeat non quaerat ad asperiores maiores maxime praesentium blanditiis eligendi quisquam"
        ],
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
