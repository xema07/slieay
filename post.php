<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="post">
    <div id="post-title">
         <?php $this->title() ?>      
    </div>
    <div class="post-info">
    <?php $this->date('Y-m-d'); ?>
    &nbsp; | &nbsp; <?php $this->category(','); ?>
    </div>
    <div class="post-content">
    <?php $this->content(); ?>
    </div>
    <div class="tags">
    <?php $this->tags(' ', true); ?>
    </div>
    <?php if($this->allow('comment')){$this->need('comments.php');}?>
    <?php $this->need('footer.php'); ?>
</div>

