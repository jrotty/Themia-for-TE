<?php
/**
 *Te响应式主题 : Themia，一款个性化十分丰富，附加功能非常全面，自定义字段非常屌的华丽的响应式模板。
 * 
 * @package Themia
 * @author Jrotty
 * @version 3.7.3
 * @link http://qqdie.com
 */
?>
  <?php $this->need('header.php'); ?>
 
<div id="main" data-behavior="<?php $this->options->css(); ?>"
                 class="
                        hasCoverMetaIn
                        ">            
            
<section class="postShorten-group main-content-wrap">
 <?php if ($this->have()): ?>
<?php /*
	if(is_home() && get_option('sticky_posts')){
    $sticky = get_option('sticky_posts'); 
    rsort( $sticky );//对数组逆向排序，即大ID在前 
    $sticky = array_slice( $sticky, 0, 3);//输出置顶文章数，请修改5，0不要动，如果需要全部置顶文章输出，可以把这句注释掉 
    query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) ); 
    if (have_posts()) :while (have_posts()) : the_post();*/
?>
<?php if($this->_currentPage>1): ?><?php else: ?>
<?php if($this->is('index')): ?> 
<?php
$db = Typecho_Db::get();
$prefix = $db->getPrefix();
$sticky_posts = $db->fetchAll($this->db
	->select()->from($prefix.'contents')
	->orWhere('cid = ?',$this->options->sticky_1)
	->orWhere('cid = ?',$this->options->sticky_2)
	->orWhere('cid = ?',$this->options->sticky_3)
	->where('type = ? AND status = ? AND password IS NULL', 'post', 'publish'));
	rsort( $sticky_posts );//对数组逆向排序，即大ID在前 
	foreach ($sticky_posts as $sticky_posts) {
		$result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($sticky_posts);
		$post_views = number_format($result['views']);
		$post_title = htmlspecialchars($result['title']);
		$post_date = date('M d,Y', $result['created']);
		$permalink = $result['permalink'];
		/*if($post_views > $this->options->view_num){echo 'HOT';} else {echo ''.$post_views.''' VIEW';};*/
		echo '<article class="postShorten" itemscope="" itemtype="http://schema.org/BlogPosting" id="article">   

                        
                     
      
            <div class="postShorten-wrap">
                <div class="postShorten-header">
                    <h1 class="postShorten-title" itemprop="headline">
                        
                               <span style="color:red">[置顶] </span> <a class="link-unstyled" href="'.$permalink.'">'.$post_title.'</a>
                        
                    </h1>
                
                </div>
                
            </div>
            
                  
          
                             
                
            
        </article>'."\n\r";}
?>
<?php endif; ?>

<?php
/*global $query_string;
  query_posts( $query_string . '&ignore_sticky_posts=1' );*/
?><?php endif; ?>

        <?php while($this->next()): ?>
        <?php if (!empty($this->options->sidebarBlock) && in_array('simg', $this->options->sidebarBlock)): ?>


     <article class="postShorten" itemscope itemType="http://schema.org/BlogPosting" id="article">  
<?php else: ?>

        <article class="postShorten postShorten--thumbnailimg-<?php if($this->options->tf == 'more'||isset($this->fields->x)||isset($this->fields->m)):?>bottom<?php else: ?>right<?php endif; ?>" itemscope itemType="http://schema.org/BlogPosting" id="article">
          
                <?php endif; ?>     
      
            <div class="postShorten-wrap">
                <div class="postShorten-header">
                    <h1 class="postShorten-title" itemprop="headline">
                        
                                <a class="link-unstyled"  <?php if ($this->fields->l){ ?>href="<?php $this->fields->l(); ?>"  target="_blank"<?php }else{ ?>

href="<?php $this->permalink() ?>"<?php };?>><?php $this->title() ?></a>
                        
                    </h1>
                    <div class="postShorten-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i'); ?>">
	
		     <?php $this->date('M d,Y'); ?>
    	
    </time>
    
      	  <span>in </span>
        
    <a class="category-link"><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?></a>
<?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>

  <?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank"><?php if ($this->options->cdl == '0'): ?>Edit<?php endif; ?><?php if ($this->options->cdl == '1'): ?>编辑<?php endif; ?></a>
<?php endif;?>
    
</div>
                </div>
                <div class="postShorten-excerpt" itemprop="articleBody">        
                        <p style=" margin: 0 0 0em;">
<?php if ($this->fields->d): ?><?php $this->fields->d(); ?>...
<?php else: ?>
<?php if ($this->fields->m||$this->options->tf == 'more'): ?>
   <style>
p{
    margin: 0 0 0em;
}
        </style>
        <?php if ($this->options->cdl == '0'): ?><?php $this->content('Continue reading'); ?><?php endif; ?>
        <?php if ($this->options->cdl == '1'): ?><?php $this->content('继续阅读'); ?><?php endif; ?>
 <?php else: ?> 
     <?php $this->excerpt(140, '...'); ?> 
                <?php endif; ?>       <?php endif; ?> 
</p>
                    
                     <?php if ($this->fields->m||$this->options->tf == 'more'): ?> <?php else: ?> 
                        
                            <a  <?php if ($this->fields->l){ ?>href="<?php $this->fields->l(); ?>"  target="_blank"<?php }else{ ?>

href="<?php $this->permalink() ?>"<?php };?> class="postShorten-excerpt_link link ">
   <?php if ($this->fields->l){ ?><?php if ($this->options->cdl == '0'): ?>OPEN LINK<?php endif; ?><?php if ($this->options->cdl == '1'): ?>打开链接<?php endif; ?><?php }else{ ?><?php if ($this->options->cdl == '0'): ?>Continue reading<?php endif; ?><?php if ($this->options->cdl == '1'): ?>继续阅读<?php endif; ?> <?php };?>  </a>
                            
                        
 <?php endif; ?> 
                   
                </div>
            </div>
            
             <?php if (!empty($this->options->sidebarBlock) && in_array('simg', $this->options->sidebarBlock)): ?>
<?php else: ?>
<?php if ($this->fields->x||$this->fields->m||$this->options->tf == 'more'): ?>    
                       <?php else: ?>
                <div class="postShorten-thumbnailimg">
                    <img alt="" itemprop="image" src="<?php showThumbnail($this); ?>"/>
                </div>
                <?php endif; ?>  <?php endif; ?>   
        </article>
    
            <?php endwhile; ?> 
        
        <div class="pagination-bar">

   <ul class="pagination">
                  
        <li class="pagination-prev">
    <?php if ($this->options->cdl == '0'): ?>
            <?php $this->pageLink('<xb class="btn btn--default btn--small">&nbsp;<i class="fa fa-angle-left text-base icon-mr"></i><span>Previous</span>&nbsp;  </xb>','prev'); ?> 
<?php endif; ?><?php if ($this->options->cdl == '1'): ?> <?php $this->pageLink('<xb class="btn btn--default btn--small">&nbsp;<i class="fa fa-angle-left text-base icon-mr"></i><span>上一页</span>&nbsp;  </xb>','prev'); ?> <?php endif; ?>

                </li>
 
        <li class="pagination-next">        
  <?php if ($this->options->cdl == '0'): ?>
<?php $this->pageLink('<xb class="btn btn--default btn--small">&nbsp;<span>Next</span><i class="fa fa-angle-right text-base icon-ml"></i>&nbsp;</xb>','next'); ?>   <?php endif; ?> <?php if ($this->options->cdl == '1'): ?><?php $this->pageLink('<xb class="btn btn--default btn--small">&nbsp;<span>下一页</span><i class="fa fa-angle-right text-base icon-ml"></i>&nbsp;</xb>','next'); ?> <?php endif; ?>
        </li>
        
            
 <li class="pagination-number">

<?php if ($this->options->cdl == '0'): ?>page <?php endif; ?><?php if ($this->options->cdl == '1'): ?>第<?php endif; ?><?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?>


<?php if ($this->options->cdl == '0'): ?>  of <?php endif; ?><?php if ($this->options->cdl == '1'): ?>页/共<?php endif; ?><?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?><?php if ($this->options->cdl == '1'): ?>页<?php endif; ?>
</li>
    </ul>
</div>
 <?php else: ?>
<?php if ($this->is('category')) : ?>该分类下没有任何文章。<?php else: ?><?php if ($this->is('tag')) : ?>该标签下没有任何文章。<?php else: ?>暂无与之相关文章<?php endif; ?><?php endif; ?><?php endif; ?>
</section>
	<?php $this->need('footer.php'); ?>
