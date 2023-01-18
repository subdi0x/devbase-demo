<?php

declare(strict_types=1);

namespace DevBase\Bundle\ThemeBundle;

use DevBase\Bundle\ThemeBundle\DependencyInjection\Compiler;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\HttpKernel\Kernel;

class DevBaseThemeBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new Compiler\ThemeCompilerPass());

        $container->addCompilerPass(new Compiler\TemplateResourcesPass());
        $container->addCompilerPass(new Compiler\TemplateLoaderPass());
        $container->addCompilerPass(new Compiler\ThemeLoaderPass());
        $container->addCompilerPass(new Compiler\TwigLoaderPass());
    }

    public function getPath(): string
    {
        return Kernel::VERSION_ID >= 40400 ? \dirname(__DIR__) : __DIR__;
    }
}
