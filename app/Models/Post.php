<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return
            [
                [
                    'id' => '1',
                    'slug' => 'judul-artikel-1',
                    'title' => 'Judul Article 1',
                    'author' => 'Riska Handika Saputra',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore laborum commodi sit voluptatem quas
                similique. Vitae deleniti distinctio molestiae, perspiciatis rem porro voluptatem unde enim quia commodi
                voluptate ab eos!'
                ],
                [
                    'id' => '2',
                    'slug' => 'judul-artikel-2',
                    'title' => 'Judul Article 2',
                    'author' => 'Andika IT',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore laborum commodi sit voluptatem quas
                similique. Vitae deleniti distinctio molestiae, perspiciatis rem porro voluptatem unde enim quia commodi
                voluptate ab eos!'
                ]
            ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}