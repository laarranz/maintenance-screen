<?php 

namespace Luar;

class MaintenanceScreen
{
	static public function load(array $options) {

		$enable = $options['enable'];

		if ($enable) {

			if (!empty($options['flag'])) {
				if (!file_exists($options['flag'])) {
					return null;
				}
			}

			$visible_hosts = $options['visible_hosts'];

			if (!empty($options['img_path'])) {
				$path_img = $options['img_path'];
			} else {
				$path_img = false;
			}

			if (!empty($options['bgcolor'])) {	
				$bgcolor = $options['bgcolor'];
			} else {
				$bgcolor = "white";
			}

			if (!empty($options['title'])) {	
				$title = $options['title'];
			} else {
				$title = "Website in maintenance mode";
			}

			if (!empty($options['css_path'])) {	
				$css = $options['css_path'];
			} else {
				$css = false;
			}

			if (!empty($options['text'])) {	
				$text = $options['text'];
			} else {
				$text = "The website is under maintenance. Please try again in a few minutes.";
			}
			
			if ($enable && !in_array($_SERVER["HTTP_HOST"], $visible_hosts)) {
				
				include_once "screen.php";
				die();
			} elseif ($enable && in_array($_SERVER["HTTP_HOST"], $visible_hosts)) {
				echo "MAINTENANCE ACTIVE. YOUR HOST: ".$_SERVER["HTTP_HOST"]."<br/>";
			}

		}
	}
}