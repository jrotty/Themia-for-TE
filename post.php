<?php $this->need('header.php'); ?>


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
    <a class="category-link" ><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
<?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
           <?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank"><?php if ($this->options->cdl == '0'): ?>Edit<?php endif; ?><?php if ($this->options->cdl == '1'): ?>编辑<?php endif; ?></a>
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
        
    <a class="category-link" ><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
         <?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
      <?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank"><?php if ($this->options->cdl == '0'): ?>Edit<?php endif; ?><?php if ($this->options->cdl == '1'): ?>编辑<?php endif; ?></a>
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
    </div><?php endif; ?> <?php if (isset($this->fields->t0)): ?> <p><?php $this->fields->t0(); ?></p><?php endif; ?> 
    
 <div style="float:right">
<?php if (!empty($this->options->sidebarBlock) && in_array('bjq', $this->options->sidebarBlock)): ?>
最后由 <?php $this->author() ?> 编辑于<?php echo gmdate('Y年m月d日 H:i', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?><?php endif; ?> </div> 
        </div>
    </div>
    <div class="post-footer main-content-wrap">
        
            <div class="post-footer-tags">
                <span class="text-color-light text-small"><?php if ($this->options->cdl == '0'): ?>TAGGED IN<?php endif; ?><?php if ($this->options->cdl == '1'): ?>文章标签：<?php endif; ?></span><br/>


<nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">  
<?php if ($this->options->cdl == '0'): ?><?php $this->tags('</nav><nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">', true, ' <sx>none</sx>'); ?><?php endif; ?><?php if ($this->options->cdl == '1'): ?><?php $this->tags('</nav><nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">', true, ' <sx>无标签</sx>'); ?><?php endif; ?>

</nav>  <?php if (!empty($this->options->sidebarBlock) && in_array('kp', $this->options->sidebarBlock)): ?>


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
<div class="bdsharebuttonbox">



<img src="//pan.baidu.com/share/qrcode?w=200&h=200&url=<?php $this->permalink() ?>" alt="<?php $this->title() ?>"/>

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
        
        <div class="post-actions-wrap">
    <nav>
        <ul class="post-actions post-action-nav">
            <li class="post-action">
       <?php thePrev($this); ?> <i class="fa fa-angle-left"></i><span class="hide-xs hide-sm text-small icon-ml"><?php if ($this->options->cdl == '0'): ?>PREVIOUS  <?php endif; ?><?php if ($this->options->cdl == '1'): ?>前篇<?php endif; ?></span></a>
            
          
            </li>
            <li class="post-action">
                        <?php theNext($this); ?><span class="hide-xs hide-sm text-small icon-mr"><?php if ($this->options->cdl == '0'): ?>NEXT<?php endif; ?><?php if ($this->options->cdl == '1'): ?>后篇<?php endif; ?></span>
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
            <a class="post-action-btn btn btn--default tooltip--top" target="new" data-tooltip="分享至人人网" href="http://widget.renren.com/dialog/share?resourceUrl=<?php $this->permalink() ?>/&srcUrl=<?php $this->permalink() ?>&pic=<?php showThumbnail($this); ?>&title=<?php $this->title() ?>">
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


                    

	<?php $this->need('footer.php'); ?>
