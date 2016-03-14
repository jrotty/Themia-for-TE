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
            
              <div class="post-header main-content-wrap text-center">
    
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
    <a class="category-link" ><?php $this->category(','); ?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
<?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
           <?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">编辑</a>
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
        
    <a class="category-link" ><?php $this->category(','); ?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
         <?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
      <?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">编辑</a>
<?php endif;?>
</div>

</div>
<?php endif; ?>    
 <div class="post-content markdown" itemprop="articleBody">
        <div class="main-content-wrap">

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
    </div><?php endif; ?> <?php if (isset($this->fields->t0)): ?> <p><?php $this->fields->t0(); ?></p><?php endif; ?>  <?php if (!empty($this->options->sidebarBlock) && in_array('bjq', $this->options->sidebarBlock)): ?>
最后由 <?php $this->author() ?> 编辑于<?php echo gmdate('Y年m月d日 H:i', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?><?php endif; ?> 
<?php if (!empty($this->options->sidebarBlock) && in_array('kp', $this->options->sidebarBlock)): ?>


  <div id="social">
<div class="social-main">
<span class="like">
<a data-dialog="#popup-erwei" data-effect="effect-newspaper" title="跨屏浏览">&nbsp;跨屏浏览</a>
</span>
<span class="shang-p">
<a data-dialog="#popup-shang" data-effect="effect-slide-top" title="赞助本站">赏</a>
</span>
<span class="share-s">
<a data-dialog="#popup-share" data-effect="effect-newspaper" title="版权声明">&nbsp;版权声明</a>
</span>
<div class="clear"></div>
</div>
</div>
<div class="popup effect-fade-scale" id="popup-erwei">
<div class="popup-content"><center>
<h3><i class="sidebar-button-icon fa fa-mobile-phone"></i>手机扫描下方二维码</h3>
<div class="bdsharebuttonbox"><div id="qrcode"></div>
</div></center></div>
</div>

<div class="popup effect-fade-scale" id="popup-shang">
<div class="popup-content"><center><h3>
支付宝转账赞助本站</h3>
<div class="bdsharebuttonbox">
<img width="200" height="200" <?php if ($this->options->zfbUrl){ ?>src="<?php $this->options->zfbUrl();?>"<?php }else{ ?>src="https://mobilecodec.alipay.com/show.htm?code=apx04121sgsu8ym0ho9wt59&picSize=L"<?php };?> title="支付宝转账赞助" />
<!--<p><img width="280" height="280" src="" title="微信转账赞助" /></p>--></div></center>

</div>
</div>
<div class="popup effect-fade-scale" id="popup-share">
<div class="popup-content"><div class="bdsharebuttonbox">
著作权归作者所有。<br>
商业转载请联系作者获得授权，非商业转载请注明出处。<br>
作者：<?php $this->author() ?><br>
链接：<?php $this->permalink() ?><br>
</div></div>
</div>

<?php endif; ?> 
        </div>
    </div>
    <div class="post-footer main-content-wrap">
        
            <div class="post-footer-tags">
                <span class="text-color-light text-small"><?php if ($this->options->cdl == '0'): ?>TAGGED IN<?php endif; ?><?php if ($this->options->cdl == '1'): ?>文章ラベル：<?php endif; ?><?php if ($this->options->cdl == '2'): ?>文章标签：<?php endif; ?></span><br/>


<nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">
<?php if ($this->options->cdl == '0'): ?><?php $this->tags('</nav><nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">', true, ' none'); ?><?php endif; ?><?php if ($this->options->cdl == '1'): ?><?php $this->tags('</nav><nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">', true, ' 無'); ?><?php endif; ?><?php if ($this->options->cdl == '2'): ?><?php $this->tags('</nav><nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">', true, ' 无标签'); ?><?php endif; ?>

</nav>







            </div>
        
        <div class="post-actions-wrap">
    <nav>
        <ul class="post-actions post-action-nav">
            <li class="post-action">
       <?php thePrev($this); ?> <i class="fa fa-angle-left"></i><span class="hide-xs hide-sm text-small icon-ml"><?php if ($this->options->cdl == '0'): ?>PREVIOUS  <?php endif; ?><?php if ($this->options->cdl == '1'): ?>前编<?php endif; ?><?php if ($this->options->cdl == '2'): ?>前一篇<?php endif; ?></span></a>
            
          
            </li>
            <li class="post-action">
                        <?php theNext($this); ?><span class="hide-xs hide-sm text-small icon-mr"><?php if ($this->options->cdl == '0'): ?>NEXT<?php endif; ?><?php if ($this->options->cdl == '1'): ?>后编<?php endif; ?><?php if ($this->options->cdl == '2'): ?>后一篇<?php endif; ?></span>
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
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至Twitter" href="https://twitter.com/intent/tweet?text=<?php $this->permalink() ?>">
                <i class="fa fa-twitter"></i>
            </a>
        </li>
        <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至Google+" href="https://plus.google.com/share?url=<?php $this->permalink() ?>">
                <i class="fa fa-google-plus"></i>
            </a>
        </li>
       
     

         <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至新浪微博" href="http://www.jiathis.com/send/?webid=tsina&amp;appkey=&amp;uid=1850331&amp;url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>">
                <i class="fa fa-weibo"></i>
            </a>
        </li>

        
            <li class="post-action">
                <a class="post-action-btn btn btn--default" href="#disqus_thread">
                    <i class="fa fa-comment-o"></i>
                </a>
            </li>
        
        <li class="post-action">
            
                <a class="post-action-btn btn btn--default" href="#blog">
            
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



    <div id="bottom-bar" class="post-bottom-bar" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>

            
            
              
                    <div class="post-actions-wrap">
    <nav>
        <ul class="post-actions post-action-nav">
            <li class="post-action"> 
              <?php thePrev($this); ?><i class="fa fa-angle-left"></i><span class="hide-xs hide-sm text-small icon-ml"><?php if ($this->options->cdl == '0'): ?>PREVIOUS  <?php endif; ?><?php if ($this->options->cdl == '1'): ?>前编<?php endif; ?><?php if ($this->options->cdl == '2'): ?>前一篇<?php endif; ?></span></a>
                
            </li>
 <li class="post-action">
                
            <?php theNext($this); ?><span class="hide-xs hide-sm text-small icon-mr"><?php if ($this->options->cdl == '0'): ?>NEXT<?php endif; ?><?php if ($this->options->cdl == '1'): ?>前编<?php endif; ?><?php if ($this->options->cdl == '2'): ?>后一篇<?php endif; ?></span>
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
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至Twitter" href="https://twitter.com/intent/tweet?text=<?php $this->permalink() ?>">
                <i class="fa fa-twitter"></i>
            </a>
        </li>
        <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至Google+" href="https://plus.google.com/share?url=<?php $this->permalink() ?>">
                <i class="fa fa-google-plus"></i>
            </a>
        </li>
       
  

         <li class="post-action hide-xs">
            <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至新浪微博" href="http://www.jiathis.com/send/?webid=tsina&amp;appkey=&amp;uid=1850331&amp;url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>">
                <i class="fa fa-weibo"></i>
            </a>
        </li>

        
            <li class="post-action">
                <a class="post-action-btn btn btn--default" href="#disqus_thread">
                    <i class="fa fa-comment-o"></i>
                </a>
            </li>
        
        <li class="post-action">
            
                <a class="post-action-btn btn btn--default" href="#blog">
            
             <i class="fa fa-arrow-up"></i>
            </a>
        </li>
    </ul>
</div>


                </div>

 <div id="share-options-bar" class="share-options-bar" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>

                
    <ul class="share-options">
        <li class="share-option">
            <a class="share-option-btn" target="new" href="https://plus.google.com/share?url=<?php $this->permalink() ?>">
                <i class="fa fa-google-plus"></i><span class="">Share on Google Plus</span>
            </a>
        </li>
        <li class="share-option">
            <a class="share-option-btn" target="new" href="https://www.facebook.com/sharer/sharer.php?u=<?php $this->permalink() ?>">
                <i class="fa fa-facebook-official"></i><span>Share on Facebook</span>
            </a>
        </li>
        <li class="share-option">
            <a class="share-option-btn" target="new" href="https://twitter.com/intent/tweet?text=<?php $this->permalink() ?>">
                <i class="fa fa-twitter"></i><span>Share on Twitter</span>
            </a>
        </li>
    </ul>
</div>
<div id="share-options-mask" class="share-options-mask"></div>
                    

	<?php $this->need('footer.php'); ?>