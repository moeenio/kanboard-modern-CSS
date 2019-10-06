<?php

namespace Kanboard\Plugin\KanboardModernCss;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/KanboardModernCss/skin.css"));
    }

    public function getPluginName()
    {
        return 'KanboardModernCSS';
    }

    public function getPluginDescription()
    {
        return t('A modern CSS theme for Kanboard');
    }

    public function getPluginAuthor()
    {
        return 'Locness';
    }

    public function getPluginVersion()
    {
        return '0.1.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/locness3/kanboard-modern-CSS';
    }
}
