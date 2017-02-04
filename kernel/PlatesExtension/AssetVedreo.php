<?php

namespace kernel\PlatesExtension;

use League\Plates\Extension\ExtensionInterface;
use League\Plates\Engine;
use League\Plates\Template\Template;
use LogicException;

/**
 * Extension that adds the ability to create "cache busted" asset URLs.
 */
class AssetVedreo implements ExtensionInterface{
    
    /**
     * Register extension function.
     * @param Engine $engine
     * @return null
     */
    public function register(Engine $engine)
    {
        $engine->registerFunction('js', array($this, 'LoadJavascript'));
        $engine->registerFunction('css', array($this, 'LoadCSS'));
        $engine->registerFunction('route', array($this, 'getRoute'));
        $engine->registerFunction('img', array($this, 'getImg'));
    }

    /**
     * Create "cache busted" asset URL.
     * @param  string $url
     * @return string
     */

    public function LoadJavascript($string)
    {
        return '/'.FOLDER.'/public/js/'.$string;
    }

    public function LoadCSS($string)
    {
        return '/'.FOLDER.'/public/css/'.$string;
    }
    
    public function getRoute($string)
    {
        return $GLOBALS['router']->url($string);
    }

    public function getImg($string)
    {
        return '/'.FOLDER.'/public/img/'.$string;
    }    

}

 