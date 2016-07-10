       <footer id="footer" class="main-content-wrap">


    <span class="copyrights">
 &copy; 2016 <?php $this->options->title(); ?> /
 Power By <a  target="_blank"  href="http://typecho.org/">Typecho</a> 
/ Designed By <a  target="_blank"  href="http://qqdie.com/">Jrotty</a>
/ Loading time <?php timer_stop($this) ?>s
/ <?php $this->options->tongji(); ?></span>
</footer>

            </div>



<?php if($this->is('post')): ?>


    <div id="bottom-bar" class="post-bottom-bar" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>

            
            
              
                    <div class="post-actions-wrap">
    <nav>
        <ul class="post-actions post-action-nav">
            <li class="post-action"> 
              <?php thePrev($this); ?><i class="fa fa-angle-left"></i><span class="hide-xs hide-sm text-small icon-ml"><?php if ($this->options->cdl == '0'): ?>PREVIOUS  <?php endif; ?><?php if ($this->options->cdl == '1'): ?>前一篇<?php endif; ?></span></a>
                
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
        </li>  <li class="post-action hide-xs">
          <a class="post-action-btn btn btn--default" target="new" data-tooltip="分享至Google"  href="https://plus.google.com/share?url=<?php $this->permalink() ?>">
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
        
        <li class="post-action">
             <?php if (!empty($this->options->sidebarBlock) && in_array('mulu', $this->options->sidebarBlock)): ?>
<a class="post-action-btn btn btn--default" href="#mulu">
                <i class="fa fa-list"></i>
            </a><?php else: ?>

                <a class="post-action-btn btn btn--default"  href="#" onclick="gotoTop();return false;">
            
               <i class="fa fa-arrow-up"></i>
            </a><?php endif; ?>
               
        </li>
    </ul>
</div>


                </div>

 <div id="share-options-bar" class="share-options-bar" <?php if ($this->fields->fm){ ?>data-behavior="3"<?php }else{ ?>
 <?php if ($this->fields->ys){ ?>data-behavior="<?php $this->fields->ys(); ?>"<?php }else{ ?>

data-behavior="<?php $this->options->css(); ?>"<?php };?><?php };?>>

                
    <ul class="share-options">
        <li class="share-option">
            <a class="share-option-btn" target="new" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>/&appkey=<?php $this->options->title(); ?>/&title=<?php $this->title() ?>&pic=<?php showThumbnail($this); ?>">
                 <i class="fa fa-weibo"></i><span class="">Share on 新浪微博</span>
            </a>
        </li>
     
        <li class="share-option">
            <a class="share-option-btn" target="new" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&site=<?php $this->options->title(); ?>/&pics=<?php showThumbnail($this); ?>">
                <i class="fa fa-qq"></i><span>Share on QQ空间</span>
            </a>
        </li><li class="share-option">
            <a class="share-option-btn" target="new" href="https://plus.google.com/share?url=<?php $this->permalink() ?>">
                <i class="fa fa-google-plus"></i><span>Share on Google</span>
            </a>
        </li>
    </ul>
</div>
<div id="share-options-mask" class="share-options-mask"></div>
     
<?php endif; ?>
   </div></div>
        <div id="about">
    <div id="about-card">
        <div id="about-btn-close">
            <i class="fa fa-remove"></i>
        </div>   
<?php if($this->user->hasLogin()): ?>
  <a href="<?php $this->options->adminUrl(); ?>" title="<?php $this->user->screenName(); ?>" target="_blank">
<?php else: ?>
        <a href="<?php $this->options->adminUrl('login.php'); ?>" target="_blank">        <?php endif; ?> <img id="about-card-picture" <?php if ($this->options->logoUrl){ ?>src="<?php $this->options->logoUrl();?>"<?php }else{ ?>src="<?php $this->options->themeUrl('image/avatar.jpg'); ?>"<?php };?>/></a>
        
            <h4 id="about-card-name">  <?php $this->author() ?></h4>
 <h5 id="about-card-bio"><p><?php $this->options->description() ?>
</p>
<SCRIPT language=javascript>
<!--
BirthDay1=new Date("<?php $this->options->time(); ?>");//改成你的计时日期
today1=new Date();
function THINPIGServerTime1(){
today1.setTime(today1.getTime()+250);
timeold1=(today1.getTime()-BirthDay1.getTime());
sectimeold1=timeold1/1000
secondsold1=Math.floor(sectimeold1);
msPerDay1=24*60*60*1000
e_daysold1=timeold1/msPerDay1
daysold1=Math.floor(e_daysold1);
e_hrsold1=(e_daysold1-daysold1)*24;
hrsold1=Math.floor(e_hrsold1);
e_minsold1=(e_hrsold1-hrsold1)*60;
minsold1=Math.floor((e_hrsold1-hrsold1)*60);
seconds1=Math.floor((e_minsold1-minsold1)*60);
document.getElementById("djclock").innerHTML ='博客已萌萌哒运行<span style="color:#E68321">'+daysold1+"</span><strong>天</strong><span style=\"color:#E68321\">"+hrsold1+"</span><strong>小时</strong><span style=\"color:#E68321\">"+minsold1+"</span><strong>分</strong><span style=\"color:#E68321\">"+seconds1+"</span><strong>秒</strong>";
}
setInterval("THINPIGServerTime1()",250);
//-->
</SCRIPT>

  <span id="djclock"></span>
        
    </div>
</div>
<?php if ($this->options->bgs == '1'): ?>
        <div id="cover"<?php if ($this->options->bgUrl){ ?>
style="background-image:url('<?php $this->options->bgUrl();?>');"
<?php }else{ ?>style="background-image:url('<?php $this->options->themeUrl('image/bg.jpg'); ?>');"<?php };?>></div>
<?php else: ?>
   <div id="cover"<?php if ($this->options->bgUrl){ ?>
style="background-color:<?php $this->options->bgUrl();?>;"
<?php }else{ ?>style="background-color: #444444;"<?php };?>></div>
<?php endif; ?>





<?php if($this->is('page')||$this->is('post')): ?>
<!--- 简繁转换开始 ---><script>
var defaultEncoding = 2; // 1: 繁體, 2: 简体
var translateDelay = 0; //延迟时间,若不在前, 要设定延迟翻译时间, 如100表示100ms,默认为0
var cookieDomain = "<?php $this->options->siteUrl(); ?>";
</script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/cn_tw.js'); ?>"></script>
<!--- 简繁转换结束 --->
<?php if ($this->options->bqg == '2'): ?>
<?php if($this->user->hasLogin()):?>

<?php else:?>
<script>
document.body.addEventListener('copy', function (e) {
    if (window.getSelection().toString() && window.getSelection().toString().length > 42) {
        setClipboardText(e);
     notie({
  type: 'info',
  text: '商业转载请联系作者获得授权，非商业转载请注明出处，谢谢合作。',
  autoHide: true
})
    }
}); 
function setClipboardText(event) {
    var clipboardData = event.clipboardData || window.clipboardData;
    if (clipboardData) {
        event.preventDefault();
 
        var htmlData = ''
            + '著作权归作者所有。<br>'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。<br>'
            + '作者：<?php $this->author() ?><br>'
            + '链接：' + window.location.href + '<br>'
            + '来源：<?php $this->options->siteUrl(); ?><br><br>'
            + window.getSelection().toString();
        var textData = ''
            + '著作权归作者所有。\n'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。\n'
            + '作者：<?php $this->author() ?>\n'
            + '链接：' + window.location.href + '\n'
            + '来源：<?php $this->options->siteUrl(); ?>\n\n'
            + window.getSelection().toString();
 
        clipboardData.setData('text/html', htmlData);
        clipboardData.setData('text/plain',textData);
    }
}

</script><?php endif;?><?php endif; ?><?php endif; ?>


    <!--SCRIPTS-->
<script src="<?php $this->options->themeUrl('js/script.min.js'); ?>" type="text/javascript"></script>
<!--PANGU AUTO SPACE-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pangu/3.0.0/pangu.min.js"></script>
<script> pangu.spacingPage(); </script>
<!--PANGU AUTO SPACE END-->
<script src="<?php $this->options->themeUrl('js/kz.js'); ?>" type="text/javascript"></script>
<?php if (!empty($this->options->sidebarBlock) && in_array('mulu', $this->options->sidebarBlock)): ?>
<?php if($this->is('post')): ?>
<script language="javascript" type="text/javascript">GenerateContentList();
</script><?php endif; ?><?php endif; ?>

<?php if($this->is('post')): ?>
 <script type="text/javascript">
        $(document).ready(function(){ 
            $('.tag sx').replaceWith('<?php $this->category('<div id="div" style="display: none" onMouseout="hidden();">', true, '木有标签且木有分类或者该分类已被删除'); ?></div>'); 
        });  
    </script> 
<?php endif; ?> 
<?php if (!empty($this->options->sidebarBlock) && in_array('kiana', $this->options->sidebarBlock)): ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('bga.min.js'); ?>"></script><?php endif; ?>

<div class="search_form">
        <form method="post" action="./" class="sosuo"> 
            <input class="search_key" name="s" autocomplete="off" placeholder="Enter search keywords..." type="text" value="" required="required">


<button type="submit" class="submit"><i class="fa fa-lg fa-search" id="bt"></i></button>
        </form>
        <span class="search_close"><i class="fa fa-close" id="close"></i></span>
    </div>
<?php $this->footer(); ?> 
    </body>
</html>
