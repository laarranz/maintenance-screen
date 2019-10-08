<?php

namespace Luar;

require __DIR__ . '/Language.php';

class MaintenanceScreen
{
    private $options;
    private $path_img;
    private $bgcolor;
    private $title;
    private $css;
    private $text;

    public function __construct($options)
    {
        $this->options = $options;
    }

    public function load()
    {

        $result = $this->processOptions($this->options);

        switch ($result) {
            case 1:
                $path_img = $this->path_img;
                $bgcolor = $this->bgcolor;
                $title = $this->title;
                $css = $this->css;
                $text = $this->text;
                include_once "screen.php";
                die();
                break;
            case 2:
                echo "MAINTENANCE ACTIVE. YOUR HOST: " . $_SERVER["HTTP_HOST"] . "<br/>";
                break;
            default:
                break;
        }
    }

    public function processOptions(array $options)
    {

        $enable = $options['enable'];

        if ($enable) {

            if (!empty($options['language'])) {
                $language = new Language($options['language']);
            } else {
                $language = new Language();
            }

            if (!empty($options['flag'])) {
                if (!file_exists($options['flag'])) {
                    return null;
                }
            }

            $visible_hosts = $options['visible_hosts'];

            if (!empty($options['img_path'])) {
                $this->path_img = $options['img_path'];
            } else {
                $this->path_img = false;
            }

            if (!empty($options['bgcolor'])) {
                $this->bgcolor = $options['bgcolor'];
            } else {
                $this->bgcolor = "white";
            }

            if (!empty($options['title'])) {
                $this->title = $options['title'];
            } else {
                $this->title = $language->getTitle();
            }

            if (!empty($options['css_path'])) {
                $this->css = $options['css_path'];
            } else {
                $this->css = false;
            }

            if (!empty($options['text'])) {
                $this->text = $options['text'];
            } else {
                $this->text = $language->getMainText();
            }

            if ($enable && isset($_SERVER["HTTP_HOST"]) && !in_array($_SERVER["HTTP_HOST"], $visible_hosts)) {

                return 1; // active without visibility

            } elseif ($enable && isset($_SERVER["HTTP_HOST"]) && in_array($_SERVER["HTTP_HOST"], $visible_hosts)) {

                return 2; // active and visible to hosts included
            }
        }

        return 0; // inactive
    }
}