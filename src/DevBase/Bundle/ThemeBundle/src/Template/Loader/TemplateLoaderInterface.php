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

use DevBase\Bundle\ThemeBundle\Template\TemplateData;

interface TemplateLoaderInterface
{
    public function loadTemplateData(TemplateData $templateData);
}
