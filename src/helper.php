<?php

/**
 * This file is part of the Dd package.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
        call_user_func_array('dump', func_get_args());

        die(1);
    }
}

if (!function_exists('dump')) {
    /**
     * Dump the passed variables without end the script.
     *
     * @param  mixed
     * @return void
     */
    function dump()
    {
        array_map(function ($x) {
            $string = (new Dump(null, true))->variable($x);

            echo (PHP_SAPI == 'cli' ? strip_tags($string) . PHP_EOL : $string);

        }, func_get_args());
    }
}
