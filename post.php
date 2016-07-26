<?php $this->need('header.php'); ?>


<?php if ($this->fields->fm): ?>
<div class="post-header-cover
                    <?php if($this->options->tf == 'open'||$this->options->tf == 'more'):?>
text-center<?php else: ?>text-left<?php endif; ?>
                    " style="background-image:url('<?php $this->fields->fm(); ?>');" data-behavior="3">
            
              <div class="post-header main-content-wrap text-center">
    
     <?php if ($this->fields->l): ?><h1 itemprop="headline">
       <a class="link" href="<?php $this->fields->l(); ?>" target="_blank" itemprop="url"><?php $this->title() ?></a>
        </h1>

<?php else: ?>
          <h1 class="post-title" itemprop="headline">  <?php $this->title() ?>    </h1><?php endif; ?>
 
    <div class="post-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i:s'); ?>">
	
		 <?php $this->date('M d,Y'); ?>
    	
    </time>
    
        <span>in </span>
    <a class="category-link" ><?php if($this->is('post')): ?><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?><?php else: ?><?php $this->title() ?><?php endif;?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
<?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
           <?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-<?php if($this->is('post')): ?>post<?php else: ?>page<?php endif; ?>.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank"><?php if ($this->options->cdl == '0'): ?>Edit<?php endif; ?><?php if ($this->options->cdl == '1'): ?>编辑<?php endif; ?></a>
<?php endif;?>
</div>
</div> </div><?php endif; ?>



   <div id="main" <?php if ($this->fields->fm){ ?>data-behavior="3" class="hasCover                         hasCoverMetaOut"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>data-behavior="<?php $this->options->css(); ?>"<?php };?>class="hasCoverMetaIn"<?php };?> >



<article class="post" itemscope itemType="http://schema.org/BlogPosting">
    
<?php if ($this->fields->fm): ?><?php else: ?>
<div class="post-header main-content-wrap <?php if($this->options->tf == 'open'||$this->options->tf == 'more'):?>
text-center<?php else: ?>text-left<?php endif; ?>">
    
           <?php if ($this->fields->l): ?><h1 itemprop="headline">
       <a class="link" href="<?php $this->fields->l(); ?>" target="_blank" itemprop="url"><?php $this->title() ?></a>
        </h1>

<?php else: ?>
          <h1 class="post-title" itemprop="headline">  <?php $this->title() ?>    </h1><?php endif; ?>
    
    <div class="post-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i:s'); ?>">
	
		 <?php $this->date('M d,Y'); ?>
    	
    </time>
    
        <span>in </span>
        
    <a class="category-link" ><?php if($this->is('post')): ?><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?><?php else: ?><?php $this->title() ?><?php endif;?></a> <span>lang </span>
            <a class="category-link"    id="translateLink" href="javascript:translatePage();">繁</a> 
         <?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>
      <?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-<?php if($this->is('post')): ?>post<?php else: ?>page<?php endif; ?>.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank"><?php if ($this->options->cdl == '0'): ?>Edit<?php endif; ?><?php if ($this->options->cdl == '1'): ?>编辑<?php endif; ?></a>
<?php endif;?>
</div>

</div>
<?php endif; ?>    
 <div class="post-content markdown" itemprop="articleBody">
        <div class="main-content-wrap" id="yl"><?php if (!empty($this->options->sidebarBlock) && in_array('mulu', $this->options->sidebarBlock)): ?>
<?php if($this->is('post')): ?><tree id="mulu"></tree><?php endif; ?><?php endif; ?>
     <?php $this->content(); ?>
 </div>
    </div>
    <div class="post-footer main-content-wrap">
        
        <?php if($this->is('post')): ?>

 <?php if (!empty($this->options->sidebarBlock) && in_array('kp', $this->options->sidebarBlock)): ?>


<div style=" text-align: center;">  

    <div id="QR" style="display: none;">
      
        <div id="wechat" style="display: inline-block;    padding-right: 7px;">
         <img id="wechat_qr" <?php if ($this->options->wxUrl){ ?>src="<?php $this->options->wxUrl();?>"<?php }else{ ?>src="<?php $this->options->themeUrl('image/wx.jpg'); ?>"<?php };?> alt="jrotty WeChat Pay" >
          <p style=" text-indent: 0em; margin-left:-0em;">微信打赏</p>
        </div>
        <div id="alipay" style="display: inline-block;    padding-left: 7px;"><img id="alipay_qr" <?php if ($this->options->zfbUrl){ ?>src="<?php $this->options->zfbUrl();?>"<?php }else{ ?>src="<?php $this->options->themeUrl('image/tb.jpg'); ?>"<?php };?> alt="jrotty Alipay">
          <p style=" text-indent: 0em; margin-left:-0em;">支付宝打赏</p>
        </div>
    
    </div>


  <div id="ew" style="display: none;">
      
        
    <div id="erweima" style="display: inline-block">

<img id="erwei_qr" src="https://pan.baidu.com/share/qrcode?w=143&h=143&url=<?php $this->permalink() ?>"/>
 <p style=" text-indent: 0em; margin-left:-0em;">文章二维码</p>
 </div>
    </div>




  <a id="rewardButton" disable="enable" onclick="var qr = document.getElementById('ew');var ds = document.getElementById('QR');if (qr.style.display === 'none') {qr.style.display='block';} else {qr.style.display='none'}{ds.style.display='none'}" class="tag tag--primary tag--small t-link">
   文章二维码
    </a>
  <a id="rewardButton" disable="enable" onclick="var qr = document.getElementById('QR'); var ds = document.getElementById('ew');if (qr.style.display === 'none') {qr.style.display='block';} else {qr.style.display='none'} {ds.style.display='none'}" class="tag tag--primary tag--small t-link">
   赏
    </a>

  </div>


<?php endif; ?>

        
        
            <div class="post-footer-tags"><?php if (!empty($this->options->sidebarBlock) && in_array('bjq', $this->options->sidebarBlock)): ?>
<div style="float:right">最后由<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>编辑于<?php echo gmdate('Y:m:d', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?>  <xa title="点我点我" id="ymzz" ></xa>

</div> <?php endif; ?> 
                <span class="text-color-light text-small"><?php if ($this->options->cdl == '0'): ?>TAGGED IN<?php endif; ?><?php if ($this->options->cdl == '1'): ?>文章标签：<?php endif; ?></span><br/>


<nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">  
<?php if ($this->options->cdl == '0'): ?><?php $this->tags('</nav><nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">', true, ' <sx>none</sx>'); ?><?php endif; ?><?php if ($this->options->cdl == '1'): ?><?php $this->tags('</nav><nav class="tag tag--primary tag--small t-link" style=" display: inline-block;">', true, ' <sx>无标签</sx>'); ?><?php endif; ?>

</nav>  </div><?php endif;?>
        
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
        </li> <li class="post-action hide-xs">
<a class="post-action-btn btn btn--default" target="_blank" data-tooltip="分享至Google"  href="https://plus.google.com/share?url=<?php $this->permalink() ?>">
                <i class="fa fa-google-plus"></i>
            </a>

        </li>
   <li class="post-action hide-xs">
           <a class="post-action-btn btn btn--default tooltip--top" target="new" data-tooltip="分享至QQ空间" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&site=<?php $this->options->title(); ?>/&pics=<?php showThumbnail($this); ?>">
                <i class="fa fa-qq"></i>
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
        
        <li class="post-action"><?php if($this->is('post')): ?>
            <?php if (!empty($this->options->sidebarBlock) && in_array('mulu', $this->options->sidebarBlock)): ?>
<a class="post-action-btn btn btn--default" href="#mulu">
                <i class="fa fa-list"></i>
            </a><?php else: ?>

                <a class="post-action-btn btn btn--default"  href="#" onclick="gotoTop();return false;">
            
               <i class="fa fa-arrow-up"></i>
            </a><?php endif; ?><?php endif; ?>
        </li>
    </ul>
</div>
<div id="disqus_thread">
    <?php $this->need('comments.php'); ?>
</div>
        
    </div>
</article>
	<?php $this->need('footer.php'); ?>
