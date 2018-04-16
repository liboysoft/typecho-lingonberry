<!DOCTYPE HTML>

<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
        <?php $this->archiveTitle(array(
    'category' => _t('分类 %s 下的文章'),
    'search' => _t('包含关键字 %s 的文章'),
    'tag' => _t('标签 %s 下的文章'),
    'author' => _t('%s 发布的文章'),
), '', ' - ');?>
        <?php $this->options->title();?>
    </title>
    <?php if ($this->options->touchIconUrl): ?>
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?php $this->options->touchIconUrl();?>">
    <?php endif;?>
    <?php if ($this->options->faviconUrl): ?>
    <link rel="shortcut icon" href="<?php $this->options->faviconUrl(); ?>">
    <?php endif;?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css');?>">

    <?php $this->header();?>
</head>

<body class="<?php
if ($this->is('post') || $this->is('single') || $this->is('page') || $this->is('archive', '404')) {
    echo (" single single-post ");
}
?>">

    <div class="navigation">

        <div class="navigation-inner section-inner">

            <ul class="blog-menu">

                <li>
<a href="<?php $this->options->siteUrl();?>" title="<?php _e('首页'); ?>">
    <?php _e('首页'); ?>
</a>
                </li>
                <li class="has-children">
<a href="#" title="<?php _e('所有分类'); ?>">
    <?php _e('所有分类'); ?>
</a>
                    <ul class="sub-menu">
                        <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}" title="{name}">{name}</a></li>');?>
                    </ul>
                </li>

                <?php $this->widget('Widget_Contents_Page_List')->to($pages);?>
                <?php while ($pages->next()): ?>
                <li>
                    <a href="<?php $pages->permalink();?>" title="<?php $pages->title();?>">
                        <?php $pages->title();?>
                    </a>
                </li>
                <?php endwhile;?>

            </ul>

            <form id="search" class="search-form" method="post" action="./" role="search">
<input type="search" value="<?php _e('按回车搜索'); ?>" onfocus="if(this.value=='<?php _e('按回车搜索'); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e('按回车搜索'); ?>';"
                    name="s" id="s" />
                <input type="submit" id="searchsubmit" value="Search" class="button hidden">
            </form>

            <div class="clear"></div>

        </div>
        <!-- /navigation-inner -->

    </div>
    <!-- /navigation -->

    <div class="header section">

        <div class="header-inner section-inner">

            <a href="<?php $this->options->siteUrl();?>" title="<?php $this->options->title()?>  &mdash; <?php $this->options->description()?>"
                rel="home" class="logo">
                <?php if ($this->options->logoUrl): ?>
                <img src="<?php $this->options->logoUrl();?>" alt="<?php $this->options->title()?>">
                <?php else: ?>
                <img src="/usr/themes/lime/images/logo.png" alt="<?php $this->options->title()?>">
                <?php endif;?>
            </a>


            <h1 class="blog-title">
                <a href="<?php $this->options->siteUrl();?>" title="<?php $this->options->title()?>  &mdash; <?php $this->options->description()?>"
                    rel="home">
                    <?php $this->options->title()?>
                </a>
                <?php if (!empty($this->options->otherConfig) && in_array('ShowRamdomQoute', $this->options->otherConfig)): ?>
                <span id="random-qoute"></span>
                <?php endif; ?>
            </h1>

            <div class="nav-toggle">

                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>

                <div class="clear"></div>

            </div>

            <div class="clear"></div>

        </div>
        <!-- /header section -->

    </div>
    <!-- /header-inner section-inner -->