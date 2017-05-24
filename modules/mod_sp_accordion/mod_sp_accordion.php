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
JHtml::_('jquery.framework');
$uniqid 			= $module->id;
$document 			= JFactory::getDocument();
$layout 			= $params->get('layout', 'default');
$style 				= $params->get('sp_style', 'style1');
$opacity 			= $params->get('opacity', 1) ? "true" : "false";
$hidefirst			= $params->get('hidefirst');
$showauthor			= $params->get('showauthor');
$showdate			= $params->get('showdate');
$date_format		= $params->get('date_format');
$showreadon			= $params->get('showreadon');
$moduleclass_sfx 	= htmlspecialchars($params->get('moduleclass_sfx'));

$document->addStyleSheet(JURI::base(true) . '/modules/mod_sp_accordion/style/' . $style . '.css' );
$document->addScript(JURI::base(true) . '/modules/mod_sp_accordion/js/sp-accordion.js' );

?>
<script type="text/javascript">
	jQuery(function($) {
		$('#accordion_sp1_id<?php echo $uniqid; ?>').spAccordion({
			hidefirst: <?php echo $hidefirst; ?>
		});
	});
</script>	
<?php

// Include the syndicate functions only once
require_once (dirname(__FILE__).'/helper.php');
$list 				= modSPAccordionHelper::getList($params);
require( JModuleHelper::getLayoutPath( 'mod_sp_accordion', $layout ) );