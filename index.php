<?php
/**
 * 极简的typecho单栏主题。
 * @package  
 * @author Xema
 * @version 1.0
 * @link http://xema.ink
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 	<?php while($this->next()): ?>
    <div class="index-post">
        <h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <div class="titile-info"><?php $this->date('Y-m-d'); ?>
            &nbsp; | &nbsp; <?php $this->category(','); ?>
        </div>
        <div class="index-content">
            <?php $this->content(''); ?>
        </div>
        <p id="hr">● ● ● ● ● ●</p>
    </div>
<?php endwhile; ?>
<div class="change">
    <span id="last">
    <?php $this->pageLink('<x aria-label="Previous" class="newer-posts">上一页</x>'); ?>
    </span>
    <span id="next">
        <?php $this->pageLink('<x aria-label="Next" class="older-posts">下一页</x>','next'); ?> 
    </span>
</div>
<?php $this->need('footer.php'); ?>
