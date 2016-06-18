<!DOCTYPE html>
<html lang="zh-cn">
    
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 
    <title><?php $this->archiveTitle(array(
'category'=>_t('分类 %s 下的文章'),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 发布的文章')
), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')): ?> | <?php $this->options->description() ?>
<?php endif; ?></title>
    

<?php if (!empty($this->options->sidebarBlock) && in_array('Showcolor', $this->options->sidebarBlock)): ?>
<meta name="theme-color" content="#fff">

<?php endif; ?> 
<?php if (!empty($this->options->sidebarBlock) && in_array('Showfull', $this->options->sidebarBlock)): ?>

<meta name="full-screen" content="yes">  
<meta name="x5-fullscreen" content="true"> <?php endif; ?> 
        <link rel="icon" id="web-icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="<?php $this->options->themeUrl('favicon.png'); ?>"/>
<link rel="alternative" type="application/atom+xml" title="RSS" href="<?php $this->options->feedUrl(); ?>">
 <meta property="og:image" content="<?php $this->options->themeUrl('image/avatar.jpg'); ?>"/>
 <!--STYLES--> <link rel="stylesheet" href="<?php $this->options->themeUrl('fontawesome.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.min.css'); ?>" type="text/css">
<?php if($this->options->page_suo == 'display'):?>
<style> p{text-indent: 2em;}p iframe{margin-left:-2em;} </style>
<?php endif; ?>
<?php if($this->options->page_suo == 'display1'):?><?php if($this->is('post')): ?>
<style> p{text-indent: 2em;}p iframe{margin-left:-2em;} </style>
<?php endif; ?><?php endif; ?>
<?php if($this->options->page_suo == 'display2'):?><?php if($this->is('page')): ?>
<style> p{text-indent: 2em;}p iframe{margin-left:-2em;} </style>
<?php endif; ?><?php endif; ?>
<?php if($this->options->page_suo == 'display3'):?><?php if($this->is('index')): ?>
<style> p{text-indent: 2em;}p iframe{margin-left:-2em;} </style>
<?php endif; ?><?php endif; ?>
    <!--STYLES END-->
   <?php $this->header("generator=&template="); ?> 
</head>

    <body><div id="sos">
        <div id="blog">
        <!--[if lt IE 9]>
		 <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
	    <![endif]-->

<?php if($this->is('post')): ?> 



<header id="header" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>


  <i id="btn-open-sidebar" class="fa fa-lg fa-bars"></i>
    <h1 class="header-title">
        <a class="header-title-link" href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->title(); ?></a>
    </h1>
    
        
            <a  class="header-right-icon st-search-show-outputs"
                id="sou">
        
                <i class="fa fa-lg fa-search"></i>
            </a>    
</header>
<?php else: ?>
 <header id="header" data-behavior="<?php $this->options->css(); ?>">
 <i id="btn-open-sidebar" class="fa fa-lg fa-bars"></i>
    <h1 class="header-title">
        <a class="header-title-link" href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->title(); ?></a>
    </h1>
    
        
            <a  class="header-right-icon st-search-show-outputs"
                id="sou">
        
                <i class="fa fa-lg fa-search"></i>
            </a>
    
</header>

<?php endif; ?>

<?php $this->need('sidebar.php'); ?>
