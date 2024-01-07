<?php

namespace App\Models;


class Produk 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Zufar Dafy",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur aliquid nam voluptates maxime autem vel aspernatur nisi laboriosam, dicta repellendus ab esse molestiae, quisquam, perspiciatis ex porro aperiam distinctio atque sed? Voluptates commodi ratione totam deleniti quae tempora voluptatibus! Ea, illo hic consequatur mollitia laboriosam voluptas corporis quis placeat ad! Qui sunt repudiandae atque possimus laborum ipsum? Labore, inventore itaque asperiores similique modi consequuntur mollitia doloribus ducimus, distinctio hic cum natus, sunt dolorum ex. Id perspiciatis voluptatibus laboriosam explicabo commodi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Zufar Dafy",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur aliquid nam voluptates maxime autem vel aspernatur nisi laboriosam, dicta repellendus ab esse molestiae, quisquam, perspiciatis ex porro aperiam distinctio atque sed? Voluptates commodi ratione totam deleniti quae tempora voluptatibus! Ea, illo hic consequatur mollitia laboriosam voluptas corporis quis placeat ad! Qui sunt repudiandae atque possimus laborum ipsum? Labore, inventore itaque asperiores similique modi consequuntur mollitia doloribus ducimus, distinctio hic cum natus, sunt dolorum ex. Id perspiciatis voluptatibus laboriosam explicabo commodi."
        ],
    ];    

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        // if($p["slug"] === $slug){
        //     $post = $p;
        //    }
        // }

        return $posts->firstWhere('slug',$slug);

    }
    
}
