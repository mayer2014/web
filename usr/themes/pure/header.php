<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-CN" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
    <!-- Title -->
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')): ?> - <?php $this->options->description() ?> <?php endif; ?>
    </title>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" charset="text/html; <?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="Author" contect="Mayer">
    <meta http-equiv="windows-Target" contect="_top">

    <!-- Favicon & Mobileicon -->
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>">
    <link rel="apple-touch-icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>">

    <link rel="canonical" href="<?php $this->options->siteUrl(); ?>">
    <meta property="og:locale" content="zh_CN">
    <meta property="og:type" content="article">
    <meta property="og:title" content="架构之美">
    <meta property="og:description" content="架构之美是一个专注于IT互联网的技术分享的站点">
    <meta property="og:url" content="<?php $this->options->siteUrl(); ?>">
    <meta property="og:site_name" content="架构之美">


    <link rel="shortlink" href="<?php $this->options->siteUrl(); ?>">

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="site-name col-mb-12 col-2">
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <?php if ($this->options->logoUrl){ ?>
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                    <?php 
                        }else{
                         $this->options->title();
                        }
                    ?>
                </a>

            </div>
            <div class="site-search col-8 kit-hidden-tb">
                <nav id="nav-menu" class="clearfix" role="navigation">
                    <a class="category-level-1 category-child category-level-odd" href="<?php $this->options->siteUrl(); ?>">首页</a>                
                    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                    <?php while ($category->next()): ?>
                    <a class="category-level-<?php if($category->isParent()): ?>0 category-parent<?php else: ?>1 category-child category-level-odd<?php endif;?>" href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a>
                    <?php endwhile; ?>

                </nav>
            </div>

        </div><!-- end .row -->
    </div>
</header><!-- end #header -->
<div id="body">
    <?php if (!empty($this->options->decBlock) && in_array('ShowDec', $this->options->decBlock)): ?>
<div class="container">
 <p class="description"><?php $this->options->description() ?></p>
</div>
<?php endif;?>
<div class="width100">
   
    <div class="container">
        <div class="row">

    
    
