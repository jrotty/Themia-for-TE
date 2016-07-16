<?php if (!empty($this->options->sidebarBlock) && in_array('pltx', $this->options->sidebarBlock)): ?>
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>">
        <div class="comment-author">
  <?php
            //头像CDN by Rich
            $host = 'https://secure.gravatar.com'; //自定义头像CDN服务器
            $url = '/avatar/'; //自定义头像目录,一般保持默认即可
            $size = '32'; //自定义头像大小
            $rating = Helper::options()->commentsAvatarRating;
            $hash = md5(strtolower($comments->mail));
            $avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=';
            ?>
            <img class="avatar" src="<?php echo $avatar ?>" alt="<?php echo $comments->author; ?>" width="<?php echo $size ?>" height="<?php echo $size ?>" />
            <cite class="fn"><?php $comments->author(); ?></cite>
        </div>
        <div class="comment-meta">
            <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
            <span class="comment-reply"><?php $comments->reply(); ?></span>
        </div>
        <?php $comments->content(); ?>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>
<?php endif; ?> 
<div class="comments" id="comments">
    <?php $this->comments()->to($comments);?>
    <?php if ($comments->have()): ?>
        <span class="widget-title"><?php $this->commentsNum(_t('暂无评论'), _t('仅有 1 条评论'), _t('已有 %d 条评论'));?></span>
        <?php $comments->listComments();?>
        <?php $comments->pageNav('&laquo; ', ' &raquo;', 5, '...', array('wrapTag' => 'nav', 'wrapClass' => 'pagination', 'itemTag' => '', 'prevClass' => 'extend prev', 'nextClass' => 'extend next', 'currentClass' => 'page-number current'));?>
    <?php endif;?>
    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId();?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply();?>
            </div>
            <span id="response" class="widget-title"><?php _e('添加新评论');?></span>
            <form method="post" action="<?php $this->commentUrl()?>" id="comment-form">
                <div>
                    <?php if ($this->user->hasLogin()): ?>
                        <p><?php _e('登录身份：');?><a href="<?php $this->options->profileUrl();?>"><?php $this->user->screenName();?></a>. <a href="<?php $this->options->logoutUrl();?>" title="Logout"><?php _e('退出');?> &raquo;</a></p>
                    <?php else: ?>
                        <p class="comment-about">
                            <label for="author" class="required"><?php _e('称呼');?></label>
                            <input type="text" name="author" id="author" class="text" value="<?php $this->remember('author');?>"/>
                        </p>
                        <p class="comment-about">
                            <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif;?>><?php _e('邮箱');?></label>
                            <input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail');?>"/>
                        </p>
                        <p class="comment-about">
                            <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif;?>><?php _e('网站');?></label>
                            <input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://example.com');?>" value="<?php $this->remember('url');?>"/>
                        </p>
                    <?php endif;?>
                    <p>
                        <textarea rows="8" cols="50" name="text" class="text-area"><?php $this->remember('text');?></textarea>
                    </p>
                </div>
                <div class="col2">
                    <p>
                        <button type="submit" class="submit"><?php _e('提交评论');?></button>
                    </p>
                </div>
                <div class="clear"></div>
            </form>
        </div>
    <?php else: ?>
评论已关闭
    <?php endif;?>
</div>
