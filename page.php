<?php $this->
    need('header.php'); ?>

    <div class="content section-inner">


        <div class="posts">

<div id="post-<?php $this->theId() ?>"
 class="post-
<?php $this->theId() ?> post type-post status-publish format-standard">

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

<a href="<?php $this->permalink() ?>#comments" title="<?php $this->title() ?>">
    <?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?>
</a>


                        </div>
                        <!-- /post-meta -->

                    </div>
                    <!-- /post-header -->

                    <div class="post-content">

                        <?php $this->content(); ?>


                    </div>
                    <!-- /post-content -->

                    <div class="clear"></div>


                </div>
                <!-- /post content-inner -->

                <div class="clear"></div>

<?php $this->need('comments.php'); ?>
            </div>
            <!-- /post -->

        </div>
        <!-- /posts -->

    </div>
    <!-- /content section-inner -->


<?php $this->need('footer.php'); ?>