<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php $this->archiveTitle(array(
'category'=>_t('分类 %s 下的文章'),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 发布的文章')
), '', ' - '); ?><?php $this->options->title(); ?></title>
    

<?php if (!empty($this->options->sidebarBlock) && in_array('Showcolor', $this->options->sidebarBlock)): ?>
<meta name="theme-color" content="#fff">

<?php endif; ?> 
<?php if (!empty($this->options->sidebarBlock) && in_array('Showfull', $this->options->sidebarBlock)): ?>

<meta name="full-screen" content="yes">  
<meta name="x5-fullscreen" content="true"> <?php endif; ?> 
        <link rel="icon" id="web-icon" href="/favicon.ico">
<link rel="alternative" type="application/atom+xml" title="RSS" href="<?php $this->options->feedUrl(); ?>">
 <meta property="og:image" content="<?php $this->options->themeUrl('image/avatar.jpg'); ?>"/>
 <!--STYLES-->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.min.css'); ?>" type="text/css">

    <!--STYLES END-->
   <?php $this->header("generator=&template="); ?> 
</head>

    <body>
        <div id="blog">



