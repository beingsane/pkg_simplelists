<?php 
/**
 * Joomla! component SimpleLists
 *
 * @author Yireo
 * @copyright Copyright 2012
 * @license GNU Public License
 * @link https://www.yireo.com/
 */

defined('_JEXEC') or die('Restricted access'); 
?>

<?php echo $this->loadTemplate('_header'); ?>

<?php if(!empty( $this->items)): ?>
<div id="simplelists-navigator">
    <ul>
    <?php foreach( $this->items as $item ): ?>
        <?php if($this->params->get('disable_jumplabels', 0) == 0) { ?>
        <li><a href="<?php echo $this->url; ?>#item<?php echo $item->id; ?>" class="simplelist-hover" id="simplelist-hover<?php echo $item->id; ?>">
            <?php echo $item->title; ?>
        </a></li>
        <?php } else { ?>
        <li><a onclick="return false;" class="simplelist-hover" id="simplelist-hover<?php echo $item->id; ?>">
            <?php echo $item->title; ?>
        </a></li>
        <?php } ?>
    <?php endforeach; ?>
    </ul>
</div>

<div class="<?php echo $this->page_class; ?>">
<?php foreach( $this->items as $item ) : ?>
    <div class="simplelists-item" id="item<?php echo $item->id; ?>" style="<?php echo $item->style; ?>">

        <a name="<?php echo $item->href; ?>"></a>

        <?php if($item->title): ?>
        <h3 class="contentheading"><?php echo $item->title; ?></h3>
        <?php endif; ?>

        <?php if($item->picture): ?>
        <?php echo $item->picture; ?>
        <?php endif; ?>

        <?php if($item->text): ?>
        <?php echo $item->text; ?>
        <?php endif; ?>

        <?php if($item->readmore): ?>
        <br/><?php echo $item->readmore; ?>
        <?php endif; ?>

    </div>
<?php endforeach; ?>
</div>
<?php else: ?>
    <?php echo $this->empty_list; ?>
<?php endif; ?>

<?php echo $this->loadTemplate('_footer'); ?>
