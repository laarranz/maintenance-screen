<?php

use PHPUnit\Framework\TestCase;
use Luar\MaintenanceScreen;

final class MaintenanceScreenTest extends TestCase
{
    public function testLoadScreen()
    {
        $options = array(
            'enable' => true,
            'visible_hosts' => array()
        );

        $maintenance = new MaintenanceScreen($options);

        $result = $maintenance->processOptions($options);
        $this->assertEquals(0, $result);

        $_SERVER["HTTP_HOST"] = "127.0.0.1";

        $result = $maintenance->processOptions($options);
        $this->assertEquals(1, $result);

        $options['visible_hosts'][] = "127.0.0.1";
        $result = $maintenance->processOptions($options);
        $this->assertEquals(2, $result);

        $options['enable'] = false;
        $result = $maintenance->processOptions($options);
        $this->assertEquals(0, $result);
    }
}
