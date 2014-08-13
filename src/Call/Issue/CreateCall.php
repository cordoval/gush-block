<?php

/**
 * This file is part of gush-block
 *
 * (c) Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 */

namespace Bldr\Block\Gush\Call\Issue;

use Bldr\Block\Gush\Call\AbstractGushCall;

/**
 * Example: 
 * -
 *     type: gush:issue:create
 */
class CreateCall extends AbstractGushCall
{
    /**
     * {@inheritDoc}
     */
    public function configure()
    {
        $this
            ->setName('gush:issue:create')
            ->setDescription('Creates an issue with bldr')
            ->addOption('symlinked', false, 'Run with symlinked gush', true)
        ;
    }

    /**
     * {@inheritDoc}
     */
    public function run()
    {
        $symlinked = $this->getOption('symlinked');

        $output = $this->runGush(['i:create'], $symlinked);
        $this->writeln($output);
    }
}
