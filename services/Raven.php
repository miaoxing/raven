<?php

namespace miaoxing\raven\services;

use services\traits\Service;

class Raven extends \Raven_Client
{
    use Service;

    public function __invoke($message, $params = array(), $level_or_options = array(), $stack = false, $vars = null)
    {
        return $this->captureMessage($message, $params, $level_or_options, $stack, $vars);
    }

    public function getDsn()
    {
        $url = parse_url($this->server);
        $url = $url['host'] . ($url['port'] ? ':' . $url['port'] : '');
        return sprintf('http://%s@%s/%s', $this->public_key, $url, $this->project);
    }

    /**
     * Always return true for raven to collect HTTP info
     *
     * {@inheritdoc}
     */
    protected function is_http_request()
    {
        return true;
    }
}
