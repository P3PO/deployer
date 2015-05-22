<?php

/*
 * (c) Anton Medvedev <anton@elfet.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

localServer('localhost');
localServer('server1');
localServer('server2');

task('test', function () {
    writeln('Hello world!');
});
