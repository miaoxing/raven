<?php

namespace Miaoxing\Raven\Service;

use Miaoxing\Plugin\Service\ServiceTrait;
use Raven_Client;

class Raven extends Raven_Client
{
    use ServiceTrait;

    public function __invoke($message, $params = [], $levelOrOptions = [], $stack = false, $vars = null)
    {
        return $this->captureMessage($message, $params, $levelOrOptions, $stack, $vars);
    }

    public function getDsn()
    {
        $url = parse_url($this->server);
        $url = $url['host'] . ($url['port'] ? ':' . $url['port'] : '');

        // @codingStandardsIgnoreLine
        return sprintf('http://%s@%s/%s', $this->public_key, $url, $this->project);
    }

    /**
     * Always return true for raven to collect HTTP info
     *
     * {@inheritdoc}
     */
    protected function is_http_request() // @codingStandardsIgnoreLine
    {
        return true;
    }
}
