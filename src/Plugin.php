<?php

namespace Miaoxing\Raven;

/**
 * @link https://github.com/getsentry/raven-js
 */
class Plugin extends \Miaoxing\Plugin\BasePlugin
{
    protected $name = 'Sentry,Raven集成';

    protected $version = '1.0.0';

    protected $description = '包含raven的PHP,JS客户端';

    public function onScript()
    {
        $this->display();
    }
}
