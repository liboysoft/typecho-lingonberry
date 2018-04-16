<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

function themeConfig($form)
{
    $touchIconUrl = new Typecho_Widget_Helper_Form_Element_Text('touchIconUrl', null, null, _t('touch icon'), _t('在这里填入一个图片URL地址, 尺寸128x128，作为网站touch icon。'));
    $form->addInput($touchIconUrl);

    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', null, null, _t('favicon'), _t('在这里填入一个图片URL地址, 尺寸16x16，作为网站favicon。'));
    $form->addInput($faviconUrl);

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', null, null, _t('logo'), _t('在这里填入一个图片 URL 地址, 尺寸128x128，作为网站LOGO'));
    $form->addInput($logoUrl);

    $ICP = new Typecho_Widget_Helper_Form_Element_Text('ICP', null, null, _t('ICP备案号'), _t('在这里填入一个ICP备案号'));
$form->addInput($ICP);


    $otherConfig = new Typecho_Widget_Helper_Form_Element_Checkbox('otherConfig',
        array('ShowRamdomQoute' => _t('显示随机名言'),
            'ShowBlogRoll' => _t('显示友情链接（编辑blogroll.php文件），取消则显示其它杂项')),
        array('ShowRamdomQoute', 'ShowBlogRoll'), _t('其他配置'));

    $form->addInput($otherConfig->multiMode());
}


function themeFields($layout) {
$featureUrl = new Typecho_Widget_Helper_Form_Element_Text('featureUrl', NULL, NULL, _t('feature 图像'), _t('在这里填入一个图片URL地址, 以在网站文章标题前显示feature，建议宽度800。'));
$layout->addItem($featureUrl);
}