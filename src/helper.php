<?php
/*
 +------------------------------------------------------------------------+
 | dd                                                                     |
 +------------------------------------------------------------------------+
 | Copyright (c) 2016 Phalcon Team (https://www.phalconphp.com)           |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
 | Authors: Serghei Iakovlev <serghei@phalconphp.com>                     |
 +------------------------------------------------------------------------+
*/

use Phalcon\Debug\Dump;

if (!function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function dd()
    {
        array_map(function ($x) {
            echo (new Dump)->variable($x);
        }, func_get_args());

        die(1);
    }
}
