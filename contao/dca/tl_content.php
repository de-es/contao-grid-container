<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Grid Container extension.
 *
 * (c) [de][es] web solutions
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['grid_container'] = '
    {type_legend},type,gridClass;
    {template_legend:hide},customTpl;
    {protected_legend:hide},protected;
    {expert_legend:hide},cssID;
    {invisible_legend:hide},invisible,start,stop
';

$GLOBALS['TL_DCA']['tl_content']['list']['sorting']['headerFields'][] = 'gridClass';

$GLOBALS['TL_DCA']['tl_content']['fields']['gridClass'] = [
    'exclude' => true,
    'inputType' => 'select',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "varchar(32) NOT NULL default ''",
];
