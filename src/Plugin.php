<?php

namespace Miaoxing\Raven;

/**
 * @link https://github.com/getsentry/raven-js
 */
class Plugin extends \miaoxing\plugin\BasePlugin
{
    protected $name = 'Sentry,Raven集成';

    protected $version = '1.0.0';

    protected $description = '包含raven的PHP,JS客户端';

    /**
     * 前端采样上报的概率
     *
     * @var float
     */
    protected $sampleRate = 1;

    public function onInlineScript()
    {
        $controller = $this->app->getController();
        if ($this->wei->isDebug() || strpos($controller, 'admin') !== false || $this->isHit()) {
            $this->view->display('raven:raven/inlineScript.php');
        }
    }

    /**
     * 检查是否命中采样
     *
     * @return bool
     */
    protected function isHit()
    {
        return mt_rand(0, 100) <= $this->sampleRate * 100;
    }
}
