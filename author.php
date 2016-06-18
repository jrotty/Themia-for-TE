<?php 
 $this->need('header.php'); 
?> 


<div id="main" data-behavior="<?php $this->options->css(); ?>"
                 class="
                        hasCoverMetaIn
                        ">
           

<div id="archives" class="main-content-wrap"><section class="boxes"  id="disqus_thread"><?php if ($this->have()): ?> 

<h4 class="archive-title">
           <?php $this->author() ?>的信息<aux> <?php $this->author->gravatar(100);
?></aux>
        </h4>
 <ul>
<li style="display: block;">称呼：<?php $this->author() ?>  </li>
<li style="display: block;">主页：<a href="<?php $this->author('url'); ?>"><?php $this->author('url'); ?></a></li>
<li style="display: block;">联系：<a href="mailto:<?php $this->author('mail'); ?> " target="_blank" rel="external"><?php $this->author('mail'); ?> </a></li> 
                    <?php if($this->user->hasLogin()):?><div style="float:right">
  <a href="<?php $this->options->adminUrl(); ?>profile.php" class="category-link"  target="_blank">编辑</a></div>
<?php endif;?>
                 
</ul>


<div  class="archive box" data-category="<?php $this->author() ?>">
 <h4 class="archive-title"> <a  class="link-unstyled" id="<?php $this->author() ?>"><?php $this->author() ?>的文章</a> </h4>
<ul class="archive-posts">  <?php while($this->next()): ?>

<li class="archive-post"> <a class="archive-post-title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a> <span class="archive-post-date"><?php $this->date('M d,Y'); ?></span> </li> 

 <?php endwhile; ?> 
     
        <div class="pagination-bar">

    <ul class="pagination">
    
     <li class="pagination-prev">
    <?php if ($this->options->cdl == '0'): ?>
            <?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<i class="fa fa-angle-left text-base icon-mr"></i><span>Previous</span>&nbsp;  </b>','prev'); ?> 
<?php endif; ?>
<?php if ($this->options->cdl == '1'): ?> <?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<i class="fa fa-angle-left text-base icon-mr"></i><span>上一页</span>&nbsp;  </b>','prev'); ?> <?php endif; ?>

                </li>
 
        <li class="pagination-next">        
  <?php if ($this->options->cdl == '0'): ?>
<?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<span>Next</span><i class="fa fa-angle-right text-base icon-ml"></i>&nbsp;</b>','next'); ?>   <?php endif; ?> <?php if ($this->options->cdl == '1'): ?><?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<span>下一页</span><i class="fa fa-angle-right text-base icon-ml"></i>&nbsp;</b>','next'); ?> <?php endif; ?>
        </li>
        

<div style="display:none;">
<?php $this->pageNav('上一页', '下一页', '5', '……'); ?>
</div>


    <li class="pagination-number">

<?php if ($this->options->cdl == '0'): ?>page <?php endif; ?><?php if ($this->options->cdl == '1'): ?>第<?php endif; ?><?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?>


<?php if ($this->options->cdl == '0'): ?>  of <?php endif; ?><?php if ($this->options->cdl == '1'): ?>页/共<?php endif; ?><?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?><?php if ($this->options->cdl == '1'): ?>页<?php endif; ?>
</li>
        



         
  </div><?php else: ?>该用户很懒，没有写任何文章！！！ <?php endif; ?>  </section></div>
 <?php $this->need('footer.php');?>
<style>
.txtx{
float:right;
border-radius:50px; 
}
</style>
<script>
$('aut a img').each(function(){
  $(this).addClass('sidebar-profile-picture');

})
$('aux img').each(function(){
  $(this).addClass('txtx');

})
</script>
