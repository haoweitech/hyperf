<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Devtool\Generator;

use Hyperf\Framework\Annotation\Command;

/**
 * @Command
 */
class CommandCommand extends GeneratorCommand
{
    public function __construct()
    {
        parent::__construct('gen:command');
        $this->setDescription('Create a new command class');
    }

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/command.stub';
    }

    protected function getDefaultNamespace(): string
    {
        return 'App\\Commands';
    }
}