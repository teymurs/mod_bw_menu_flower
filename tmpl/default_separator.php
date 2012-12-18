<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_bw_menu_flower
 *
 * @copyright   Copyright (C) 2012 Brian Williford, All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * Last Modified: BW 121205
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$title = $item->anchor_title ? ' title="'.$item->anchor_title.'" ' : '';
if ($item->menu_image) {
		$item->params->get('menu_text', 1) ?
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" /><span class="image-title">'.$item->title.'</span> ' :
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" />';
}
else { $linktype = $item->title;
}

?><span class="separator"<?php echo $title; ?>><?php echo $linktype; ?></span>