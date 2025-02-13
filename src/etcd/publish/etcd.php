<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    # Etcd Client
    'uri' => 'http://127.0.0.1:2379',
    'version' => 'v3beta',
    'options' => [
        'timeout' => 10,
    ],
];
