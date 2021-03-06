<?php

namespace Workshop\DemoBundle\Template;

use Mapbender\CoreBundle\Template\Fullscreen;

/**
 * Template DemoFullscreen
 * 
 * @author Astrid Emde
 */
class DemoFullscreen extends Fullscreen
{
    protected static $title = 'Fullscreen Template Workshop';
    protected static $css   = array(
        '@MapbenderCoreBundle/Resources/public/sass/template/fullscreen.scss',
        '@WorkshopDemoBundle/Resources/public/demo_fullscreen.scss',
    );

    public $twigTemplate = 'WorkshopDemoBundle:Template:demo_fullscreen.html.twig';

}
