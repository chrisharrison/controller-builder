<?php

namespace ChrisHarrison\ControllerBuilder;

use League\Flysystem\Filesystem;
use League\Flysystem\Memory\MemoryAdapter;
use PHPUnit\Framework\TestCase;

class ControllerBuilderTest extends TestCase
{
    public function testBuild()
    {
        $controller = $this->createMock(ControllerInterface::class);
        $controller->method('name')->willReturn('test');
        $controller->method('render')->willReturn('dummyContent');

        $filesystem = new Filesystem(new MemoryAdapter);

        $test1 = new ControllerBuilder($filesystem);
        $test1->build($controller);
        $this->assertEquals('dummyContent', $filesystem->read('test.html'));
    }
}
