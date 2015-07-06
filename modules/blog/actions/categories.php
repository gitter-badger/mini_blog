<?php

/**
 * Initialize action
 */
function actions_init () {
    $path = module_path('blog', 'models', true);
    
    load_model('categories', $path);
    load_model('posts', $path);
}

/**
 * View a category by url slug and its posts
 * 
 * @param string $url
 */
function action_view ($url, $page = 1) {
    if (!$category = category_by_url($url)) {
        return false;
    }
    
    layout('posts/category', array(
        'title'    => $category['title'],
        'posts'    => posts_by_category($category['id'], $page),
        'url'      => url('#category', array($category['url'])),
        'category' => $category
    ));
}