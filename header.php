<?php if(!defined( '__TYPECHO_ROOT_DIR__'))exit;?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
            ), '', ' - '); ?>
        <?php $this->options->title(); ?></title>
        <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>" />
</head>
<body>
    <div class="header">
        <p><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></p>
        <div class="navi">
            <input type="checkbox" id="menu-navi">
            <label for="menu-navi"><img id="navi-img" src="<?php $this->options->themeUrl('img/Category.png'); ?>" alt="导航" width="30px"></label>
            <div id="navi">
                <hr id="#hr-top">
                    <ul id="navi-menu">
                        <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                        <?php $this->widget('Widget_Contents_Page_List')
                                   ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                    </ul>
                <hr id="hr-bottom">
            </div>
        </div>
    </div>
