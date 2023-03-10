<?php

/*
 * This file is part of the SymEdit package.
 *
 * (c) Craig Blanchette <craig.blanchette@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevBase\Bundle\ThemeBundle\Theme;

interface ThemeFactoryInterface
{
    /**
     * Get Theme by Name.
     */
    public function getTheme($name);
}
