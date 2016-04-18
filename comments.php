<style>

.pagination {
    height: 50px;
    padding: 10px;
    border-top: 1px solid #eee;
    margin-top: 50px;
}
button[type=submit], .commentclosed {
    color: #6E7173;
    background-color: #fff;
    border: 0px;
    padding-left: 8px;
    transition: .5s;
}
textarea {
    width: 100%;
    height: 60px;
    border: solid 1px #D4D4D4;
    outline: none;
}
.text{
    -webkit-box-shadow: 0 0 0 1000px #FFF inset;
}
.submit:hover{
    background-color: #26303a;
    opacity: .8;
    color: #fff;
    transition: .5s;
}
.respond {}
#response {
    color: #6E7173;
    line-height: 2.7;
    margin-top: 0;
    font-size: 16px;
    border-bottom: 1px solid #ddd;
    display: block;
    margin: 0;
    padding-bottom: 0px;
  float:right;
}
#comment-form label {
    display: block;
    color: #888;
    position: absolute;
    margin: 4px 8px;
}
#comments {
    padding-top: 10px;
}
#comment-form input {
    padding: 6px 6px;
    border: 0px;
    border-bottom: solid 1px #D4D4D4;
    background: #fdfdfd;
    padding-left: 45px;
    color: #555;
    max-width: 100%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
}
.comment-meta {
    margin-top: -5px;
    margin-bottom: 5px;
    position: relative;
    bottom: 15px;
    left: 35px;
    font-size: 15px;
}
.comment-meta a{
    color: #999;
    font-size: .92857em;
}
.comment-content {
    line-height: 1.5;
    word-wrap: break-word;
    padding: 0px 0px 0px 0px;
    font-size: 15px;
}
.comment-list li {
    padding: 22px 0 0;
    border-top: 1px solid #ddd;
}
.comment-list li .comment-reply {
    float: right;
    margin-top: -39px;
    font-size: .92857em;
}
.comment-children {
    margin-left: 22px;
}
.comment-author {
    display: block;
    margin-bottom: 1px;
    color: #444;
}
.comment-author cite {
    font-style: normal;
    font-size: 15px;
    line-height: 1.2;
    position: relative;
    bottom: 15px;
}
</style>
<div class="comments" id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
  


    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; ', ' &raquo;',5,'...',array('wrapTag' => 'nav','wrapClass' =>'pagination','itemTag'=>'','prevClass'  =>  'extend prev', 'nextClass'     =>  'extend next', 'currentClass'     =>  'page-number current')); ?>
    <?php endif; ?>










    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond" >
       
        <spa id="response">

        <?php $comments->cancelReply(); ?>
      
   <?php if($this->user->hasLogin()): ?>
         <?php _e('添加新评论'); ?><?php $this->commentsNum(_t(''), _t('/共 1 条评论'), _t('/共 %d 条评论')); ?>: <?php _e('登录身份：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
           <?php endif; ?></spa>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
            <div class="col1">
         
                <textarea rows="8" cols="50" name="text" class="textarea"><?php $this->remember('text'); ?></textarea>
          
            </div>
            <div class="col2">
            <?php if($this->user->hasLogin()): ?>
       
            <?php else: ?>
            <p>
                <label for="author" class="required"><?php _e('称呼'); ?></label>
                <input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" />
            </p>
            <p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('邮箱'); ?></label>
                <input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>" />
            </p>
            <p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
                <input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://example.com'); ?>" value="<?php $this->remember('url'); ?>" />
            </p>
            <?php endif; ?>
            <p>
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
            </p>
            </div>
            <div class="clear"></div>
        </form>
    </div>
    <?php else: ?>
        <span class="commentclosed"><?php _e('评论已关闭'); ?></span>
    <?php endif; ?>
</div>