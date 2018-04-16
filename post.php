<?php $this->
    need('header.php'); ?>

<div class="content section-inner">


    <div class="posts">

    <div id="post-<?php $this->theId() ?>"
         class="post-<?php $this->theId() ?> post type-post status-publish format-standard">

    <div class="content-inner">

        <div class="post-header">


<?php if($this->fields->featureUrl): ?>
<div class="featured-media">
    <a href="<?php $this->permalink() ?>" rel="bookmark" title="<?php $this->title() ?>">
        <img src="<?php $this->fields->featureUrl(); ?>" class="attachment-post-image" alt="<?php $this->title() ?>" />
    </a>
</div>
<!-- /featured-media -->
<?php endif; ?>


            <h2 class="post-title"><a href="<?php $this->permalink() ?>" rel="bookmark"
                                      title="<?php $this->title() ?>"><?php $this->title() ?></a>
            </h2>

            <div class="post-meta">

                        <span><a href="<?php $this->permalink() ?>"
                                 title="<?php $this->title() ?>"><?php $this->date('Y-m-d'); ?></a></span>

                <span class="date-sep"> / </span>

                <span><?php $this->category(','); ?></span>

                <span class="date-sep"> / </span>

                <a href="<?php $this->permalink() ?>#comments"
                   title="<?php $this->title() ?>"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>


            </div>
            <!-- /post-meta -->

        </div>
        <!-- /post-header -->

        <div class="post-content">

            <?php $this->content(); ?>


        </div>
        <!-- /post-content -->

        <div class="clear"></div>


        <div class="post-cat-tags">

<p class="post-link">
<?php _e('原文链接：'); ?>
    <a href="<?php $this->permalink() ?>">
        <?php $this->permalink() ?>
    </a>
</p>
            <br/>

<p class="post-tags">
<?php _e('标签：'); ?>
    <?php $this->tags(', ', true, '暂无标签'); ?>
</p>

        </div>


    </div>
    <!-- /post content-inner -->

    <div class="clear"></div>
    <div class="post-nav">


        <span class="post-nav-newer"><?php $this->thePrev('%s'); ?></span>
        <span class="post-nav-older"><?php $this->theNext('%s'); ?></span>


        <div class="clear"></div>

    </div>
    <!-- /post-nav -->
        <?php $this->need('comments.php'); ?>

    </div>
        <!-- /post -->

    </div>
    <!-- /posts -->

</div>
    <!-- /content section-inner -->


<?php $this->need('footer.php'); ?>