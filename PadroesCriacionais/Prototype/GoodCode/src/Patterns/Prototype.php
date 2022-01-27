<?php

namespace Src\Patterns;

interface Prototype
{

    public function clone(): Prototype;

}