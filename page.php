<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="post">
    <div id="post-title">
         <?php $this->title() ?>      
    </div>
    <?php $this->content(); ?>
    <?php if($this->allow('comment')){$this->need('comments.php');}?>
    <?php $this->need('footer.php'); ?>
</div>


