<?php $this->need('header.php'); ?> <header id="header" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>


  <i id="btn-open-sidebar" class="fa fa-lg fa-bars"></i>
    <h1 class="header-title">
        <a class="header-title-link" href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->title(); ?></a>
    </h1>
    
        
            <a  class="header-right-icon st-search-show-outputs"
                href="#about">
        
                <i class="fa fa-lg fa-search"></i>
            </a>
    
</header>

 <nav id="sidebar" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>

<?php $this->need('sidebar.php'); ?>

<?php if (isset($this->fields->fm)): ?>
<div class="post-header-cover
                    text-left
                    " style="background-image:url('<?php $this->fields->fm(); ?>');" data-behavior="3">
            
              <div class="post-header main-content-wrap text-left">
    
           <?php if (isset($this->fields->l)): ?><h1 itemprop="headline">
       <a class="link" href="<?php $this->fields->l(); ?>" target="_blank" itemprop="url"><?php $this->title() ?></a>
        </h1>

<?php else: ?>
          <h1 class="post-title" itemprop="headline">  <?php $this->title() ?>    </h1><?php endif; ?>
    <div class="post-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i:s'); ?>">
	
		 <?php $this->date('M d,Y'); ?>
    	
    </time>
  	
        <span>in </span>
  <a class="category-link" > <?php $this->title() ?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
            <?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
<?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank"><?php if ($this->options->cdl == '0'): ?>Edit<?php endif; ?><?php if ($this->options->cdl == '1'): ?>编辑<?php endif; ?></a>
<?php endif;?>
</div>
</div> </div><?php endif; ?>



   <div id="main" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>
                 class="
                        hasCoverMetaIn
                        ">



<article class="post" itemscope itemType="http://schema.org/BlogPosting">
    
<?php if (isset($this->fields->fm)): ?><?php else: ?>
<div class="post-header main-content-wrap text-left">
    
         <?php if (isset($this->fields->l)): ?><h1 itemprop="headline">
       <a class="link" href="<?php $this->fields->l(); ?>" target="_blank" itemprop="url"><?php $this->title() ?></a>
        </h1>

<?php else: ?>
          <h1 class="post-title" itemprop="headline">  <?php $this->title() ?>    </h1><?php endif; ?>
    
    <div class="post-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i:s'); ?>">
	
		 <?php $this->date('M d,Y'); ?>
    	
    </time>

        <span>in </span>
        
    <a class="category-link" > <?php $this->title() ?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
 <?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>     
<?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank"><?php if ($this->options->cdl == '0'): ?>Edit<?php endif; ?><?php if ($this->options->cdl == '1'): ?>编辑<?php endif; ?></a>
<?php endif;?>
    
</div>
</div>
<?php endif; ?>    
        
    
    <div class="post-content markdown" itemprop="articleBody">
        <div class="main-content-wrap" id="yl">
         <?php $this->content(); ?>
<?php if (isset($this->fields->t)): ?>
<div class="image-gallery">
        <div class="image-gallery-metabar">
            <span><?php $this->fields->t(); ?></span>
        </div>
        <div class="image-gallery-photos image-gallery-photos--thumbnail">
            
                    
                    
        <?php if (isset($this->fields->t1)): ?>       
             <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t1(); ?>" target="_blank" style="top: -168.5px;">
                        <img class="photo" src="<?php $this->fields->t1(); ?>" itemprop="image">
                    </a>
                </div>
             <?php endif; ?>   
                    
                    
                    
                
                    
                        <?php if (isset($this->fields->t2)): ?>    
                
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t2(); ?>" target="_blank" style="top: -31px;">
                        <img class="photo" src="<?php $this->fields->t2(); ?>" itemprop="image">
                    </a>
                </div>
            
                    
                       <?php endif; ?>   
                    
                
                    
                    <?php if (isset($this->fields->t3)): ?> 
                
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t3(); ?>" target="_blank" style="left: -18.9582px; top: -2.5px;">
                        <img class="photo" src="<?php $this->fields->t3(); ?>" itemprop="image" style="height: 328px; width: 584.916px;">
                    </a>
                </div>
            <?php endif; ?>   
                    
                    
                    
                
                    
                           <?php if (isset($this->fields->t4)): ?> 
                
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t4(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t4(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>
                 <?php endif; ?>   
                    
                    
                    
                
                    
                    
                       <?php if (isset($this->fields->t5)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t5(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t5(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>
            
                    
                    
                         <?php endif; ?>   
                
                    
                           <?php if (isset($this->fields->t6)): ?> 
                
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t6(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t6(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>     <?php endif; ?>   
            
                    
                    
                    
                
                    
                    
                       <?php if (isset($this->fields->t7)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t7(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t7(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>
            
                         <?php endif; ?>   
                    
                    
                
                    
                    
                       <?php if (isset($this->fields->t8)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t8(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t8(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>     <?php endif; ?>   
            
                    
                    
                    

       
                    
                       <?php if (isset($this->fields->t9)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t9(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t9(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>     <?php endif; ?>   
            
                    
                    
                    
                
                    
                    
                       <?php if (isset($this->fields->t10)): ?> 
                <div class="photo-box">
                    <a class="photo-box-inner fancybox" rel="fancybox-thumb" data-fancybox-group="gallery-undefined" title="" href="<?php $this->fields->t10(); ?>" target="_blank" style="top: -2px; left: -0.333333px;">
                        <img class="photo" src="<?php $this->fields->t10(); ?>" itemprop="image" style="height: 328px; width: 546.667px;">
                    </a>
                </div>     <?php endif; ?>   
            
        </div>
    </div><?php endif; ?> <?php if (isset($this->fields->t0)): ?> <p><?php $this->fields->t0(); ?></p><?php endif; ?>  

        </div>
    </div>
    <div class="post-footer main-content-wrap">
           <div class="post-footer-tags"> </div>
        <div class="post-actions-wrap">
    <nav>
        <ul class="post-actions post-action-nav">
            <li class="post-action">
        <?php thePrev($this); ?> <i class="fa fa-angle-left"></i><span class="hide-xs hide-sm text-small icon-ml"><?php if ($this->options->cdl == '0'): ?>PREVIOUS  <?php endif; ?><?php if ($this->options->cdl == '1'): ?>前一篇<?php endif; ?></span></a>
            
          
            </li>
            <li class="post-action">
                          <?php theNext($this); ?><span class="hide-xs hide-sm text-small icon-mr"><?php if ($this->options->cdl == '0'): ?>NEXT<?php endif; ?><?php if ($this->options->cdl == '1'): ?>后一篇<?php endif; ?></span>
                    <i class="fa fa-angle-right"></i></a>
                 </li>
        </ul>
    </nav>
      <ul class="post-actions post-action-share">
        <li class="post-action hide-lg hide-md hide-sm">
            <a class="post-action-btn btn btn--default btn-open-shareoptions"  href="#btn-open-shareoptions">
                <i class="fa fa-share-alt"></i>
            </a>
        </li>
   <li class="post-action hide-xs">
           <a class="post-action-btn btn btn--default tooltip--top" target="new" data-tooltip="分享至QQ空间" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&site=<?php $this->options->title(); ?>/&pics=<?php showThumbnail($this); ?>">
                <i class="fa fa-qq"></i>
            </a>
        </li>
        <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default tooltip--top" target="new" data-tooltip="分享至人人网" href="http://widget.renren.com/dialog/share?resourceUrl=<?php $this->permalink() ?>/&srcUrl=<?php $this->permalink() ?>/&pic=<?php showThumbnail($this); ?>&title=<?php $this->title() ?>">
                <i class="fa fa-renren"></i>
            </a>
        </li>
       
     

         <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至新浪微博" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>/&appkey=<?php $this->options->title(); ?>/&title=<?php $this->title() ?>&pic=<?php showThumbnail($this); ?>">
                <i class="fa fa-weibo"></i>
            </a>
        </li>

        
            <li class="post-action">
                <a class="post-action-btn btn btn--default" href="#disqus_thread">
                    <i class="fa fa-comment-o"></i>
                </a>
            </li>
        
        <li class="post-action">
            
                <a class="post-action-btn btn btn--default"  href="#" onclick="gotoTop();return false;">
            
               <i class="fa fa-arrow-up"></i>
            </a>
        </li>
    </ul>
</div>
<div id="disqus_thread">
    <?php $this->need('comments.php'); ?>
</div>
        
    </div>
</article>

	<?php $this->need('footer.php'); ?><?php if (isset($this->fields->li)): ?>
<style>
.fen{
 display: block;
}
@media only screen and (min-width:1024px){
.fen{
  float: left;
    width: 364px;
   white-space:nowrap; 
    text-overflow: ellipsis;
    overflow: hidden;
}
}
</style>

<script>
$('#yl ul li').each(function(){
  $(this).addClass('fen')
})  

</script>
<?php endif; ?> 
