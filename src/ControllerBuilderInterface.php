<?php

namespace ChrisHarrison\ControllerBuilder;

interface ControllerBuilderInterface
{
    public function build(ControllerInterface $controller) : void;
}
