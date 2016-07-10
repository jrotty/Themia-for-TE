<?php $this->need('post.php'); ?>
<?php if ($this->fields->li): ?>
<style>
li.fen{
    display: block;
}
@media only screen and (min-width:1024px){
li.fen{
  float: left;
    width: 364px;
   white-space:nowrap; 
    text-overflow: ellipsis;
    overflow: hidden;
}
}
</style>
<?php endif; ?>
<SCRIPT language=javascript>
$('#yl ul li').each(function(){
  $(this).addClass('fen')
})  
</SCRIPT>
