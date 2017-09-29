<?php

namespace ChrisHarrison\ControllerBuilder;

interface ControllerInterface
{
    public function render() : string;
    public function name() : string;
}
