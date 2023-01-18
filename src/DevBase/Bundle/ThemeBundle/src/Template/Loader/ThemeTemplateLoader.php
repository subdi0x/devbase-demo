<?php

/*
 * This file is part of the SymEdit package.
 *
 * (c) Craig Blanchette <craig.blanchette@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevBase\Bundle\ThemeBundle\Template\Loader;

use DevBase\Bundle\ThemeBundle\Model\Theme;

class ThemeTemplateLoader extends DirectoriesTemplateLoader
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    protected function getDirectories()
    {
        return $this->theme->getTemplateDirectories();
    }
}
