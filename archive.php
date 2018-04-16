<?php $this->need('header.php');?>
<div class="content section-inner">


    <div class="posts">
        <div class="page-title">
            <h4>
                <?php $this->archiveTitle('','',''); ?>
            </h4>
        </div>
        <div class="clear"></div>
        <?php while ($this->next()): ?>
        <div id="<?php $this->theId() ?>" class="<?php $this->theId() ?> post type-post status-publish format-standard">

            <div class="post-bubbles">

                <a href="<?php $this->permalink() ?>" class="format-bubble"></a>

            </div>

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


                    <h2 class="post-title">
                        <a href="<?php $this->permalink() ?>" rel="bookmark" title="<?php $this->title() ?>">
                            <?php $this->title() ?>
                        </a>
                    </h2>

                    <div class="post-meta">

                        <span>
                            <a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>">
                                <?php $this->date('Y-m-d'); ?>
                            </a>
                        </span>

                        <span class="date-sep"> / </span>

                        <span>
                            <?php $this->category(','); ?>
                        </span>

                        <span class="date-sep"> / </span>

                        <a href="<?php $this->permalink() ?>#comments" title="<?php $this->title() ?>">
                            <?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?>
                        </a>


                    </div>
                    <!-- /post-meta -->

                </div>
                <!-- /post-header -->

                <div class="post-content">

                    <?php $this->excerpt(350, '...'); ?>

                    <p>
                        <a href="<?php $this->permalink() ?>" class="more-link">
                            <?php _e('[阅读更多]'); ?>
                        </a>
                    </p>


                </div>
                <!-- /post-content -->

                <div class="clear"></div>
            </div>
            <div class="clear"></div>

        </div>
        <!-- /post -->
        <?php endwhile; ?>
        <!-- /post -->
        <div class="post-nav archive-nav">

            <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

            <div class="clear"></div>

        </div>
        <!-- /post-nav archive-nav -->

        <div class="clear"></div>


    </div>
    <!-- /posts -->

</div>
<!-- /content section-inner -->
<?php $this->need('footer.php'); ?>