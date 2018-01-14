<?php 

namespace Luar;
require __DIR__ . '/Language.php';

class MaintenanceScreen
{
    static public function load(array $options) {

        $enable = $options['enable'];

        if ($enable) {

            if ( !empty($options['language']) ) {
                $language = new Language($options['language']);
            }else {
                $language = new Language();
            }

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
                $title = $language->getTitle();
            }

            if (!empty($options['css_path'])) {	
                $css = $options['css_path'];
            } else {
                $css = false;
            }

            if (!empty($options['text'])) {	
                $text = $options['text'];
            } else {
                $text = $language->getMainText();
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