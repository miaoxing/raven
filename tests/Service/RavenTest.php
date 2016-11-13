<?php

namespace MiaoxingTest\Raven\Service;

use Miaoxing\Plugin\Test\BaseTestCase;
use Miaoxing\Raven\Service\Raven;

/**
 * Raven服务
 */
class RavenTest extends BaseTestCase
{
    /**
     * 生成DSN
     */
    public function testGetDsn()
    {
        $raven = new Raven([
            'wei' => $this->wei,
            'server' => 'http://example/api/1/store/',
            'public_key' => 'public_key',
            'secret_key' => 'secret_key',
            'project' => '1',
            'curl_method' => 'exec',
        ]);
        $this->assertEquals('http://public_key@example/1', $raven->getDsn());
    }
}
