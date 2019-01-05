<?php

class Post
{
    public $title;

    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;

        $this->published = $published;
    }
}


$posts = [

    new Post('My First Post', true),

    new Post('My Second Post', true),

    new Post('My Third Post', true),

    new Post('My Fourth Post', false),
];

$publishedPosts = array_filter($posts, function($post){
    
    return $post->published;

});


$unpublishedPosts = array_filter($posts, function($post){
    
    return ! $post->published;

});

$modifiedPosts = array_map(function($post){

    // return 'foobar';
    /*$post->published = true;
    return $post;*/
    // return ['title' => $post->title];
    return (array)$post;
    
}, $posts);

$titles = array_column($posts, 'title');

var_dump($titles);  