<?php


namespace Test\Test;


use Test\Kernel\Support\Str;

/**
 * Class Factory.
 *
 */

class Factory
{
    public static function make($name, array $config)
    {
        $namespace = Str::studly($name);
//        $namespace = Test\Kernel\Support\Str::studly($name);
        $application = "\\Test\\{$namespace}\\Application";

        return new $application($config);
    }
}