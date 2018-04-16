<div class="footer section">

    <div class="footer-inner section-inner">


        <div class="footer-a widgets">

            <div class="widget">
                <div class="widget-content">
                    <h3 class="widget-title">
                        <?php _e('最新文章'); ?>
                    </h3>
                    <ul>
                        <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>');?>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

        </div>

        <!-- /footer-a -->


        <div class="footer-b widgets">
            <div class="widget">
                <div class="widget-content">
                    <h3 class="widget-title">
                        <?php _e('最近回复'); ?>
                    </h3>
                    <ul>
                        <?php $this->widget('Widget_Comments_Recent')->to($comments);?>
                        <?php while ($comments->next()): ?>
                        <li>
                            <a href="<?php $comments->permalink();?>">
                                <?php $comments->author(false);?> ：
                                <?php $comments->excerpt(35, '...');?>
                            </a>
                        </li>
                        <?php endwhile;?>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

        </div>

        <!-- /footer-b -->


        <div class="footer-c widgets">
            <div class="widget">
                <div class="widget-content">
                    <?php if (!empty($this->options->otherConfig) && in_array('ShowBlogRoll', $this->options->otherConfig)): ?>
                    <h3 class="widget-title">
                        <?php _e('友情链接'); ?>
                    </h3>
                    <ul>
                        <?php $this->need('blogroll.php');?>
                    </ul>

                    <?php else: ?>
                    <h3 class="widget-title">
                        <?php _e('其它功能'); ?>
                    </h3>
                    <ul class="widget-list">
                        <?php if($this->user->hasLogin()): ?>
                        <li class="last">
                            <a href="<?php $this->options->adminUrl(); ?>">
                                <?php _e('进入后台'); ?> (
                                <?php $this->user->screenName(); ?>)</a>
                        </li>
                        <li>
                            <a href="<?php $this->options->logoutUrl(); ?>">
                                <?php _e('退出'); ?>
                            </a>
                        </li>
                        <?php else: ?>
                        <li class="last">
                            <a href="<?php $this->options->adminUrl('login.php'); ?>">
                                <?php _e('登录'); ?>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?php $this->options->feedUrl(); ?>">
                                <?php _e('文章 RSS'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $this->options->commentsFeedUrl(); ?>">
                                <?php _e('评论 RSS'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.typecho.org">Typecho</a>
                        </li>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

        </div>

        <!-- /footer-c -->

        <div class="clear"></div>

    </div>
    <!-- /footer-inner -->

</div>
<!-- /footer -->

<div class="credits section">

    <div class="credits-inner section-inner">

        <p class="credits-left">

            &copy;
            <?php echo date('Y'); ?>
            <a ref="<?php $this->options->siteUrl();?>">
                <?php $this->options->title();?>
            </a>
            <?php if ($this->options->ICP): ?> ｜

            <a href="http://www.miitbeian.gov.cn/" target="_blank">
                <?php $this->options->ICP()?>

            </a>
            <?php endif;?>

        </p>

        <p class="credits-right">

            <span>
                <?php _e('THEME BY <a href="http://liboy.net" target="_blank">LIBOY</a>');?> </span>
                 ｜ 
            <a title="To the top" class="tothetop">UP &uarr;</a>

        </p>

        <div class="clear"></div>

    </div>
    <!-- /credits-inner -->

</div>
<!-- /credits -->

<script src="<?php $this->options->themeUrl('js/jquery.min.js');?>"></script>
<?php if (!empty($this->options->otherConfig) && in_array('ShowRamdomQoute', $this->options->otherConfig)): ?>
<script src="<?php $this->options->themeUrl('js/random-quotes.js');?>"></script>
<?php endif;?>
<script>
    $(document).ready(function () {
        // toggle blog-menu
        $(".nav-toggle").on("click", function () {
            $(this).toggleClass("active");
            $(".navigation").slideToggle(function () {
                $(".navigation").css('overflow', 'visible');
            });
        });
        // Smooth scroll to the top
        $('.tothetop').on('click', function () {
            $("html, body").animate({
                scrollTop: 0
            }, 500);
        });
    })
</script>
</body>

</html>