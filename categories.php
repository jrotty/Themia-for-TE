<?php 
/**
 * categories
 * 
 * @package custom 
 * 
 */
 $this->need('header.php'); 
?> 

  
            <div id="main" data-behavior="<?php $this->options->css(); ?>"
                 class="
                        hasCoverMetaIn
                        ">
                <div id="categories-archives" class="main-content-wrap">

         <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
    <h4 class="archive-result text-color-base text-xlarge"> </h4>
   <section>


                   <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
                    <?php while($categorys->next()): ?>
                        <?php if ($categorys->levels === 0): ?>
                            <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                            <?php if (empty($children)) { ?>
                             
                                    <a href="#posts-list-<?php $categorys->slug(); ?>" class="tag tag--primary tag--small t-link"  data-category="<?php $categorys->name(); ?>" ><?php $categorys->name(); ?>(<?php $categorys->count(); ?>)
                                        </a>
                                
                         
                            <?php } ?>
                        <?php endif; ?>
                    <?php endwhile; ?>

 <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
                    <?php while($categorys->next()): ?>
                        <?php if ($categorys->levels === 0): ?>
                            <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                            <?php if (empty($children)) { ?>
                        <?php } else { ?>
                            <br>
 <a class="tag tag--primary tag--small t-link"  data-category="<?php $categorys->name(); ?>"  onclick="var fu = document.getElementById('<?php $categorys->name(); ?>'); if (fu.style.display === 'none') {fu.style.display='inline';} else {fu.style.display='none'}"  target="_blank"><?php $categorys->name(); ?>&nbsp;<i class="fa fa-chevron-circle-right"></i>
                                        </a>
                                 <div id="<?php $categorys->name(); ?>" style="display: none;">
                                        <?php foreach ($children as $mid) { ?>
                                            <?php $child = $categorys->getCategory($mid); ?>
                                           

<a href="#posts-list-<?php echo $child['slug']; ?> " class="tag tag--primary tag--small t-link"  data-category="<?php echo $child['name']; ?>" ><?php echo $child['name']; ?>(<?php echo $child['count']; ?>)</a>
                                         
                                        <?php } ?>
                                   </div>
                            <?php } ?>
                        <?php endif; ?>
                    <?php endwhile; ?>

        
    </section>
    <section class="boxes"  id="disqus_thread">
    
   
            <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
<?php while ($categories->next()): ?>
<?php if(count($categories->children) === 0): ?>

<?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=10000&type=category', 'mid=' . $categories->mid)->to($posts); ?>  
<div id="posts-list-<?php $categories->name(); ?>" class="archive box" data-category="<?php $categories->name(); ?>">

             
                    <h4 class="archive-title">
                        <a href="<?php $categories->permalink(); ?>" class="link-unstyled" id="posts-list-<?php $categories->slug(); ?>"><?php $categories->name(); ?></a>
                    </h4>
                    <ul class="archive-posts">
<?php while ($posts->next()): ?> 
                            <li class="archive-post">
                                <a class="archive-post-title" href="<?php $posts->permalink(); ?>"><?php $posts->title(40); ?></a>
                                <span class="archive-post-date"><?php $posts->date('M d,Y'); ?></span>
                            </li>
                        
                        
                           
<?php endwhile; ?>
                        
                    </ul>
                </div>
<?php else: ?>

<?php endif; ?>
         <?php endwhile; ?>
        
<div id="duoshuo_thread">
    <?php $this->need('comments.php'); ?>

</div>



 
    </section>
</div> <?php $this->need('footer.php');?>
