<?php 
/**
 * categories
 * 
 * @package custom 
 * 
 */
 $this->need('header.php'); 
?>  <header id="header" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
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
  
            <div id="main" data-behavior="<?php $this->options->css(); ?>"
                 class="
                        hasCoverMetaIn
                        ">
                <div id="categories-archives" class="main-content-wrap">
 按分类归档
    <h4 class="archive-result text-color-base text-xlarge"></h4>
    <section>


<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
    <?php while ($category->next()): ?>

<a class="category category--small category--primary" href="#posts-list-<?php $category->name(); ?>" data-category="<?php $category->count(); ?>篇文章"><?php $category->name(); ?>(<?php $category->count(); ?>)</a>

 <?php endwhile; ?>

        
    </section>
    <section class="boxes">
        
            <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
<?php while ($categories->next()): ?>
<?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=10000&type=category', 'mid=' . $categories->mid)->to($posts); ?>  <div id="posts-list-Themia" class="archive box" data-category="themia">

             
                    <h4 class="archive-title">
                        <a href="<?php $categories->permalink(); ?>" class="link-unstyled" id="posts-list-<?php $categories->name(); ?>"><?php $categories->name(); ?></a>
                    </h4>
                    <ul class="archive-posts">
<?php while ($posts->next()): ?> 
                            <li class="archive-post">
                                <a class="archive-post-title" href="<?php $posts->permalink(); ?>"><?php $posts->title(40); ?></a>
                                <span class="archive-post-date">-<?php $posts->date('M d,Y'); ?></span>
                            </li>
                        
                        
                           
<?php endwhile; ?>
                        
                    </ul>
                </div>
         <?php endwhile; ?>
        
    </section>
</div>

  
 <?php $this->need('footer.php');?>