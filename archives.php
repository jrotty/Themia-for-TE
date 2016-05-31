<?php 
/**
 * archives
 * 
 * @package custom 
 * 
 */
 $this->need('header.php'); 

?> 

 <header id="header" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
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
           

<div id="archives" class="main-content-wrap">
 <form id="filter-form" action="#">
        <input name="date" type="text" class="form-control input--xlarge" placeholder="Search date (YYYY/MM/DD)" autofocus="autofocus">
    </form>
 <h5 class="archive-result text-color-base text-xlarge"
        data-message-zero="没有该时间段的文章"
        data-message-one="检索到 1 篇文章"
        data-message-other="检索到 {n} 篇文章"></h5>
    <section class="boxes"  id="disqus_thread">

<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
    $year=0; $mon=0; $i=0; $j=0;  
 
   $output = ''; 
    while($archives->next()):   
        $year_tmp = date('Y',$archives->created);   
        $mon_tmp = date('m',$archives->created);   
        $y=$year; $m=$mon;   

        if ($mon != $mon_tmp && $mon > 0) $output .= '</ul>';   
        if ($year != $year_tmp && $year > 0) $output .= '</div>';   
        if ($year != $year_tmp) {   
            $year = $year_tmp;   
            $output .= ' <div class="archive archive-year box" data-date="'. $year .'"><h4 class="archive-title">
                        <a class="link-unstyled" href="/'. $year .'">'. $year .'</a>
                    </h4>
                      '; //输出年份   


 if ($mon == $mon_tmp){
 $year = $year_tmp;   
            $mon = $mon_tmp;   
            $output .=  ' <ul class="archive-posts archive-month" data-date="'. $year .''. $mon .'">
                    <h5 class="archive-title">
                        <a class="link-unstyled" href="/'. $year .'/'. $mon .'">'. $mon .'月</a>
                    </h5>'; //输出月份 

}



}  

 if ($mon != $mon_tmp){

 $year = $year_tmp;   
            $mon = $mon_tmp;   
            $output .=  ' <ul class="archive-posts archive-month" data-date="'. $year .''. $mon .'">
                    <h5 class="archive-title">
                        <a class="link-unstyled" href="/'. $year .'/'. $mon .'">'. $mon .'月</a>
                    </h5>'; //输出月份 
}


        $output .= '  <li class="archive-post archive-day" data-date="'. $year .''. $mon .''.date('d',$archives->created).'">
                <a class="archive-post-title" href="'.$archives->permalink .'">'. $archives->title .'</a>
                <span class="archive-post-date"> - '.date('M',$archives->created).' '.date('d',$archives->created).', '. $year .'</span>
            </li>
'; //输出文章日期和标题   
    endwhile;   
    $output .= '</section>';   
    echo $output;   
?>  

</div>
                  

 <?php $this->need('footer2.php');?>
