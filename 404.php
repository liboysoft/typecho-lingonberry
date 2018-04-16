<?php
$this->need('header.php');
?>
<div class="content section-inner">

    <div class="posts">

        <div class="post">

            <div class="content-inner">

                <div class="post-header">

                    <h2 class="post-title">
                        <?php _e('404 错误'); ?>
                    </h2>

                </div>

                <div class="post-content">

                    <p>
                        <?php _e('页面消失于神秘的二次元空间，你可以尝试使用搜索看看。'); ?>
                    </p>

                    <form class="search-form" method="post" action="./">
                        <input id="s" type="search" name="s" onblur="if(this.value=='')this.value='<?php _e('按回车搜索'); ?>';" onfocus="if(this.value=='<?php _e('按回车搜索'); ?>')this.value='';"
                            value="<?php _e('按回车搜索'); ?>" />

                        <input id="searchsubmit" class="button hidden" type="submit" value="Search" />
                    </form>
                </div>
                <!-- /post-content -->

            </div>
            <!-- /content-inner -->

        </div>
        <!-- /post -->

    </div>
    <!-- /posts -->

</div>
<?php $this->need('footer.php'); ?>