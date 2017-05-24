<?php
/*------------------------------------------------------------------------
# JoomShaper Accordion Module by JoomShaper.com
# ------------------------------------------------------------------------
# author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2014 JoomShaper.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomshaper.com
-------------------------------------------------------------------------*/
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div id="accordion_sp1_id<?php echo $uniqid; ?>" class="sp-accordion sp-accordion-<?php echo $style ?> <?php echo $moduleclass_sfx ?>">
	<?php foreach ( $list as $item ) { ?>
		<div class="sp-accordion-item">
			<div class="toggler">
				<span><span><?php echo $item->title; ?></span></span>
			</div>
			<div class="clr"></div>
			<div class="sp-accordion-container">
				<div class="sp-accordion-inner">
					<p></p>
					<?php if ($showauthor || $showdate) { ?>
						<div class="sp-accordion-info">
							<?php if ($showauthor ) echo '<small class="sp-accordion-author">' . JText::_('WRITTEN') . ' ' . $item->author . '</small>'; ?>
							<?php if ($showauthor ) echo '<small class="sp-accordion-date">' . JText::_('JON') . ' ' . Jhtml::_('date', $item->created, JText::_($date_format)) . '</small>'; ?>
						</div>
					<?php } ?>
					<?php echo $item->introtext; ?>
					<div class="clr"></div>
					<?php if ($showreadon ) { ?>
						<a class="readmore" href="<?php echo $item->link; ?>"><span><?php echo jText::_('SP_READ_MORE') ?></span></a>
					<?php } ?>
					<p></p>
				</div>
			</div>
		</div>
	<?php } ?>
</div>