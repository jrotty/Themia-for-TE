       <footer id="footer" class="main-content-wrap">


    <span class="copyrights">
 &copy; 2016 <?php $this->author() ?>'s /
 Power By <a  target="_blank"  href="http://typecho.org/">Typecho</a> 
/ Designed By <a  target="_blank"  href="http://qqdie.com/">Jrotty</a>
/ Loading time <?php timer_stop($this) ?>s
/ <?php $this->options->tongji(); ?></span>
</footer>

            </div>



   </div>
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
<form id="search" method="post" action="./" role="search">
<input type="text" name="s" class="text" placeholder="输入关键字搜索">
<button type="submit" class="submit" ><i class="fa fa-lg fa-search"></i></button>
</form> <h5 id="about-card-bio"><p><?php $this->options->description() ?>
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




<script>
window.onblur = function() {
    document.title = "发呆- ( ゜- ゜)つロ ";
$("#web-icon").attr('href',"<?php $this->options->themeUrl('loss.ico'); ?>");
window.onfocus = function() {
    document.title = "<?php $this->archiveTitle(array(
'category'=>_t('分类 %s 下的文章'),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 发布的文章')
), '', ' - '); ?><?php $this->options->title(); ?>";
$("#web-icon").attr('href',"<?php $this->options->siteUrl(); ?>favicon.ico");

}
};
</script>
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

</script><?php endif;?><?php endif; ?>


    <!--SCRIPTS-->
<script src="<?php $this->options->themeUrl('js/script.min.js'); ?>" type="text/javascript"></script>
<?php if (!empty($this->options->sidebarBlock) && in_array('kiana', $this->options->sidebarBlock)): ?>


<script type="text/javascript" src="<?php $this->options->themeUrl('bga.min.js'); ?>"></script><?php endif; ?> 



<?php $this->footer(); ?> 
    </body>
</html>



