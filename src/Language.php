<?php

namespace Luar;

class Language
{

    public $language;

    public function __construct( $language  = 'EN')
    {
        $this->language = $language;
    }

    public function getMainText()
    {
        switch( $this->language ) {

            case 'ES':
                return "La página está desactivada en estos momentos";
            break;

            case 'EN':
                return "The website is under maintenance. Please try again in a few minutes.";
            break;

            default:
                return "The website is under maintenance. Please try again in a few minutes.";
            break;
        }

    }

    public function getTitle()
    {
        switch( $this->language ) {

            case 'ES':
                return "Sitio web en mantenimiento";
            break;

            case 'EN':
                return "Website in maintenance mode";
            break;

            default:
                return "Website in maintenance mode";
            break;
        }

    }

}