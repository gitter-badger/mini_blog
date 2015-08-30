<?php

/**
 * Blog routes.
 * Here are routes to:
 * 
 * Index page
 * Blog posts
 * Blog categories
 */

$path = module_path('blog');

route('GET #index /', "{$path}actions/index");
route('GET #posts /page-:num?', "{$path}actions/blog:list");
route('GET #post /:any', "{$path}actions/blog:view");
route('GET #category /categories/:any/:num?', "{$path}actions/categories:view");