<?php

namespace DevBase\Bundle\ThemeBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class ThemeCompilerPass
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 *
 * Created on base of the LiipAppBundle <https://github.com/liip/LiipAppBundle>
 *
 * Special thanks goes to its authors and contributors
 */
class ThemeCompilerPass implements CompilerPassInterface
{
    /**
     * Processes the container
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $container->setAlias('templating.locator', 'theme.templating_locator');
        $container->setAlias('templating.cache_warmer.template_paths', 'theme.template_paths.cache_warmer');
    }
}
