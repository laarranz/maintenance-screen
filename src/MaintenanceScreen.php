<?php 

namespace laarranz;

class MaintenanceScreen
{
	static public function load(array $options) {

		$activo = $options['enable'];

		if ($activo) {

			if (!empty($options['flag'])) {
				if (!file_exists($options['flag'])) {
					return null;
				}
			}

			$ips_permitidas = $options['visible_hosts'];

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
				$title = "Tareas de mantenimiento";
			}

			if (!empty($options['css_path'])) {	
				$css = $options['css_path'];
			} else {
				$css = false;
			}

			if (!empty($options['text'])) {	
				$text = $options['text'];
			} else {
				$text = "La web se encuentra en tareas de mantenimiento, vuelva a intentarlo más tarde.";
			}
			
			if ($activo && !in_array($_SERVER["HTTP_HOST"], $ips_permitidas)) {
				
				include_once "screen.php";
				die();
			} elseif ($activo && in_array($_SERVER["HTTP_HOST"], $ips_permitidas)) {
				echo "Pantalla de mantenimiento habilitada. HOST: ".$_SERVER["HTTP_HOST"]."<br/>";
			}

		}
	}
}