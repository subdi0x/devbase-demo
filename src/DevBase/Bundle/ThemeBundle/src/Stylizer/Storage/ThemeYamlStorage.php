<?php

/*
 * This file is part of the SymEdit package.
 *
 * (c) Craig Blanchette <craig.blanchette@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DevBase\Bundle\ThemeBundle\Stylizer\Storage;

use DevBase\Bundle\StylizerBundle\Storage\YamlStorage;
use DevBase\Bundle\ThemeBundle\Model\ThemeInterface;

class ThemeYamlStorage extends YamlStorage
{
    public function __construct(ThemeInterface $theme)
    {
        parent::__construct($theme->getThemeDirectory().'/colors.yml');
    }
}
