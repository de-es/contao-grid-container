<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Grid Container extension.
 *
 * (c) [de][es] web solutions
 *
 * @license LGPL-3.0-or-later
 */

namespace DeEs\ContaoGridContainer\EventListener\DataContainer;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\System;
use Symfony\Contracts\Translation\TranslatorInterface;

#[AsCallback(table: 'tl_content', target: 'fields.gridClass.options')]
class GridClassOptionsCallbackListener
{
    public function __construct(private readonly TranslatorInterface $translator)
    {
    }

    public function __invoke(): array
    {
        $options = [];

        foreach (System::getContainer()->getParameter('contao_grid_container.classes') as $class) {
            $options[$class] = $this->translator->trans($class, [], 'grid_container');
        }

        return $options;
    }
}
