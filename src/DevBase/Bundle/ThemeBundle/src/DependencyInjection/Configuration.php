<?php

namespace DevBase\Bundle\ThemeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('dixie_theme');

        $treeBuilder->getRootNode()
            ->children()
                ->booleanNode('debug')->defaultValue('%kernel.debug%')->end()
                ->scalarNode('theme_directory')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('public_directory')->defaultValue('themes')->cannotBeEmpty()->end()
                ->scalarNode('active_theme')->defaultValue('default')->cannotBeEmpty()->end()
                ->arrayNode('namespace_overrides')
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('templates')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('bundles')
                            ->prototype('scalar')->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('paths')
                    ->prototype('scalar')->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
