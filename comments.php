<div id="comments">
    <div class="comments">
        <?php $this->comments()->to($comments); ?>
        <?php if ($comments->have()): ?>
        <h2 class="comments-title">

            <?php $this->commentsNum(_t('暂无评论'), _t('仅有 1 条评论'), _t('已有 %d 条评论')); ?>
        </h2>
        <div class="comment">
            <?php $comments->listComments(); ?>
        </div>
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

        <?php endif; ?>
    </div>
    <?php if ($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">


        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">
                <?php _e('添加新评论'); ?>
                <small>
                    <?php $comments->cancelReply(); ?>
                </small>
            </h3>

            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="comment-form" role="form">
                <?php if ($this->user->hasLogin()): ?>
                <p class="comment-notes">
                    <?php _e('登录身份：'); ?>
                    <a href="<?php $this->options->profileUrl(); ?>">
                        <?php $this->user->screenName(); ?>
                    </a>.
                    <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">
                        <?php _e('退出'); ?> &raquo;</a>
                </p>
                <?php else: ?>
                <p>

                    <p class="comment-form-author">
                        <input id="author" name="author" type="text" placeholder="<?php _e('称呼'); ?>" value="<?php $this->remember('author'); ?>"
                            size="30" required/>
                        <label for="author">
                            <?php _e('称呼'); ?>
                        </label>
                        <span class="required">*</span>
                    </p>

                    <p class="comment-form-email">
                        <input id="mail" name="mail" type="text" placeholder="<?php _e('Email'); ?>" value="<?php $this->remember('mail'); ?>" size="30"
                            required/>
                        <label for="email">
                            <?php _e('Email'); ?>
                        </label>
                        <span class="required">*</span>
                    </p>

                    <p class="comment-form-url">
                        <input id="url" name="url" type="text" placeholder="<?php _e('网站'); ?>" value="<?php $this->remember('url'); ?>" size="30"
                        />
                        <label for="url">
                            <?php _e('网站'); ?>
                        </label>
                    </p>
                    <?php endif; ?>
                    <p class="comment-form-comment">
                        <textarea id="textarea" name="text" cols="45" rows="6" required>
                            <?php $this->remember('text'); ?>
                        </textarea>
                    </p>

                    <p class="form-submit">
                        <input name="submit" type="submit" id="submit" value="<?php _e('提交评论'); ?>" />
                        <input type='hidden' name='comment_post_ID' value='0' id='comment_post_ID' />
                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                    </p>
            </form>
        </div>
    </div>
    <!-- #respond -->
    <?php else: ?>
    <h2 class="comments-title">
        <?php _e('评论已关闭'); ?>
    </h2>
    <?php endif; ?>


</div>
<!-- /comments -->