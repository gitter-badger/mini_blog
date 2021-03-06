<?php
/**
 * Posts list view
 * 
 * @var array      $posts
 *      bool|array $posts['items']      - posts
 *      array      $posts['pagination'] - pagination
 * @var string     $url
 */
?>
<article class="posts">
    <?php if (!$posts['items']): ?> 
    <div class="post">
        <div class="content">
            <p><?php echo i18n('posts.empty') ?></p>
        </div>
    </div>
    <?php else: ?> 
        <?php foreach ($posts['items'] as $post): ?> 
        <div class="post">
            <div class="content">
                <h2 class="post-title">
                    <a href="<?php echo url('#post', array($post['url'])) ?>">
                        <?php echo $post['title'] ?> 
                    </a>
                </h2>
                
                <p class="info">
                    <?php echo i18n('posts.published') ?> 
                    <a href="<?php echo url('#category', array($post['category_url'])) ?>">
                        <?php echo $post['category'] ?> 
                    </a> 
                    <?php echo i18n('posts.by') ?> <?php echo $post['username'] ?> 
                    <?php echo i18n('posts.at') ?> <?php echo date('d.m.Y', strtotime($post['date'])) ?> 
                </p>
            
                <p class="description">
                    <?php echo $post['description'] ?> 
                </p>
            </div>
        </div>
        <?php endforeach; ?> 
        
        <div class="fluid">
        <?php view(
            'admin:blocks/pagination', 
            array_merge($posts['pages'], compact('url')), 
            false
        ) ?> 
        </div>
    <?php endif; ?> 
</article>
