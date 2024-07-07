<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Blog extends Model{
    
    // public static function all(){
    // return [
    //     [
    //         'id' => 1,
    //         'slug' => 'judul-artikel-1',
    //         'title' => 'Judul Artikel 1',
    //         'author' => 'Muh. Ahyan Saputra',
    //         'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, minus. Unde dignissimos rerum ipsum id fuga, laborum quam eius assumenda repellendus dolores porro, vel adipisci excepturi deleniti tempora hic, perferendis nisi. Illum accusamus esse iste totam natus nobis, dignissimos, eum quisquam possimus quibusdam quidem earum ducimus eius voluptatem, doloremque fuga!'
    //     ],
    //     [
    //         'id' => 2,
    //         'slug' => 'judul-artikel-2',
    //         'title' => 'Judul Artikel 2',
    //         'author' => 'Muh. Ahyan Saputra',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad accusantium, quidem autem perferendis facere assumenda ipsam veniam nisi quo labore praesentium et saepe pariatur deserunt dolor reprehenderit voluptatum molestias! Sunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil officia, quos neque repudiandae, molestiae commodi veniam quibusdam ullam vero eius voluptate eos ex, perferendis pariatur nobis maxime reprehenderit laudantium praesentium?'
    //     ]
    // ];
    // }

    // public static function find($slug){
    //     // return Arr::first(static::all(), function($element) use ($slug){
    //     //     return $element['slug'] == $slug;
    //     // });
    //     $blog = Arr::first(static::all(), fn($element) => $element['slug'] == $slug);

    //     if(!$blog){
    //         abort(404);
    //     }

    //     return $blog;
    // } 
}