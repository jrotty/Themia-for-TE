<!DOCTYPE html>
<html lang="zh-cn">
    
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if (!empty($this->options->sidebarBlock) && in_array('Showcolor', $this->options->sidebarBlock)): ?><meta name="theme-color" content="#fff"><?php endif; ?> 
<?php if (!empty($this->options->sidebarBlock) && in_array('Showfull', $this->options->sidebarBlock)): ?><meta name="full-screen" content="yes">  
<meta name="x5-fullscreen" content="true"> <?php endif; ?> <meta http-equiv="Page-Exit" ;="" content="blendTrans(Duration=1.0)">
    <title><?php $this->archiveTitle(array(
'category'=>_t('分类 %s 下的文章'),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')): ?> | <?php $this->options->description() ?>-第<?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?>页
<?php endif; ?></title>

 <meta property="og:image" <?php if($this->is('post')||$this->is('page')): ?>
content="<?php showThumbnail($this); ?>"<?php else: ?>
<?php if ($this->options->logoUrl){ ?>content="<?php $this->options->logoUrl();?>"<?php }else{ ?>content="<?php $this->options->themeUrl('image/avatar.jpg'); ?>"<?php };?><?php endif; ?>>
<meta property="og:title" content="<?php $this->archiveTitle(array(
'category'=>_t('分类 %s 下的文章'),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ' - '); ?><?php $this->options->title(); ?>"/>

<meta property="og:description" content="<?php if($this->is('index')): ?> <?php $this->options->description() ?>
<?php else: ?><?php $this->description(); ?><?php endif; ?>">  

<meta property="og:url" content="<?php $this->permalink() ?>"/>  

<meta itemprop="name" content="<?php $this->archiveTitle(array(
'category'=>_t('分类 %s 下的文章'),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ' - '); ?><?php $this->options->title(); ?>">
<meta itemprop="description" content="<?php if($this->is('index')): ?> <?php $this->options->description() ?>
<?php else: ?><?php $this->description(); ?><?php endif; ?>">
<meta itemprop="image" <?php if($this->is('post')||$this->is('page')): ?>
content="<?php showThumbnail($this); ?>"<?php else: ?>
<?php if ($this->options->logoUrl){ ?>content="<?php $this->options->logoUrl();?>"<?php }else{ ?>content="<?php $this->options->themeUrl('image/avatar.jpg'); ?>"<?php };?><?php endif; ?>>

 <!--STYLES-->
<link rel="stylesheet" href="<?php $this->options->themeUrl('fontawesome.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php $this->options->themeUrl('duoshuo.css'); ?>" type="text/css">


<link  id="web-icon" rel="shortcut icon" href="/favicon.ico"/>
<link rel="apple-touch-icon" href="<?php $this->options->themeUrl('favicon.png'); ?>"/>
<link rel="alternative" type="application/atom+xml" title="RSS" href="<?php $this->options->feedUrl(); ?>">    
<!--STYLES END--><meta property="wb:webmaster" content="8a2a0fa4ce931220" />
 
<?php if($this->options->tf == 'open'||$this->options->tf == 'more'):?>
<style>.postShorten-header {text-align: center;}</style>
<?php endif; ?>
<?php if($this->options->page_suo == 'display'):?>
<style> p{text-indent: 2em;}p iframe{margin-left:-2em;} </style>
<?php endif; ?>
<?php if($this->options->page_suo == 'display1'):?><?php if($this->is('post')): ?>
<style>.main-content-wrap p{text-indent: 2em;} .main-content-wrap p iframe{margin-left:-2em;} </style>
<?php endif; ?><?php endif; ?>
<?php if($this->options->page_suo == 'display2'):?><?php if($this->is('page')): ?>
<style>.main-content-wrap p{text-indent: 2em;} .main-content-wrap p iframe{margin-left:-2em;} </style>
<?php endif; ?><?php endif; ?>
<?php if($this->options->page_suo == 'display3'):?><?php if($this->is('index')): ?>
<style> p{text-indent: 2em;}p iframe{margin-left:-2em;} </style>
<?php endif; ?><?php endif; ?>
<?php $this->header("generator=&template="); ?>
</head>
<body>
<div id="sos">
<div id="blog">  <!--[if lt IE 9]>
		 <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
	    <![endif]-->

<?php if($this->is('post')||$this->is('page')): ?> 
<?php if (isset($this->fields->hb)): ?>
<style type="text/css">
html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(100%);}
</style>
 <?php endif; ?>
<header id="header" <?php if ($this->fields->fm){ ?>data-behavior="3" style=" opacity: 0.8;"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>


  <i id="btn-open-sidebar" class="fa fa-lg fa-bars"></i>
    <h1 class="header-title">
        <a class="header-title-link" href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->title(); ?></a>
    </h1>
    
        
            <a  class="header-right-icon st-search-show-outputs"
                id="sou" target="_blank">
        
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
                id="sou" target="_blank">
        
                <i class="fa fa-lg fa-search"></i>
            </a>
    
</header>

<?php endif; ?>


<?php $this->need('sidebar.php'); ?>
