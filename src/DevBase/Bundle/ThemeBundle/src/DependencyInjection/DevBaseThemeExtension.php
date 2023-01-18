<?php

namespace DevBase\Bundle\ThemeBundle\DependencyInjection;

use DevBase\Bundle\ThemeBundle\Twig\FilesystemLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class DevBaseThemeExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        //$loader = new Loader\YamlFileLoader($container, new FileLocator(\dirname(__DIR__, 2).'/config'));

        //$loader->load('services.yml');
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('services.yml');

        $loader->load('theme.yml');
        $loader->load('template.yml');
        $loader->load('layout.yml');

	    $container->setParameter('symedit_theme.debug', $config['debug']);
	    $container->setParameter('symedit_theme.theme_directory', $config['theme_directory']);
	    $container->setParameter('symedit_theme.public_directory', $config['public_directory']);
	    $container->setParameter('symedit_theme.active_theme', $config['active_theme']);
	    $container->setParameter('symedit_theme.namespace_overrides', $config['namespace_overrides']);
        $container->setParameter('symedit_theme.templates.bundles', $config['templates']['bundles']);
        $container->setParameter('symedit_theme.paths', $config['paths']);
//
//	    $definition = $container->findDefinition('twig.loader.filesystem')
//            ->setClass(FilesystemLoader::class);
//
//        $definition->addMethodCall('setThemePaths', [
//            new Reference('symedit_theme.theme'),
//            $container->getParameter('symedit_theme.namespace_overrides'),
//        ]);

    }
}
