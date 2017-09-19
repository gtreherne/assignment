<!-- This script was developed with help from Chris Clark @ Shift Innovation Centre -->
<?php
function get_font_size() {
	$fontsize='';
	if (isset($_COOKIE['font'])) {
		switch ($_COOKIE['font']) {
			case 'largest':
				$fontsize='largest';
				break;
			case 'large':
				$fontsize='large';
				break;
			case 'small':
				$fontsize='small';
				break;
			case 'smallest':
				$fontsize='smallest';
				break;
			default:
				$fontsize='default';
				break;
		}
	}
	return $fontsize;
}

function get_menu_position() {
	$menupos='';
	if (isset($_COOKIE['position'])) {
		switch ($_COOKIE['position']) {
			case 'right':
				$menupos='right';
				break;
			default:
				$menupos='left';
				break;
		}
	}
	return $menupos;
}
?>