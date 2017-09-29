<?php

namespace ChrisHarrison\ControllerBuilder;

use League\Flysystem\Filesystem;

class ControllerBuilder implements ControllerBuilderInterface
{
    protected const DEFAULT_EXTENSION = 'html';

    protected $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function build(ControllerInterface $controller) : void
    {
        $ext = self::DEFAULT_EXTENSION;
        $this->filesystem->put($controller->name() . '.' . $ext, $controller->render());
        return;
    }
}
