<?php

/**
 * This file is part of frontend-block
 *
 * (c) Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 */

namespace Bldr\Block\Frontend;

use Bldr\DependencyInjection\AbstractBlock;
use Symfony\Component\DependencyInjection\ContainerBuilder as SymfonyContainerBuilder;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 */
class FrontendBlock extends AbstractBlock
{
    /**
     * {@inheritDoc}
     */
    protected function assemble(array $config, SymfonyContainerBuilder $container)
    {
        $this->addCall('bldr_frontend.less', 'Bldr\Block\Frontend\Call\LessCall');
        $this->addCall('bldr_frontend.sass', 'Bldr\Block\Frontend\Call\SassCall');
        $this->addCall('bldr_frontend.coffee', 'Bldr\Block\Frontend\Call\CoffeeCall');
        $this->addCall('bldr_frontend.concat', 'Bldr\Block\Frontend\Call\ConcatCall');
        $this->addCall('bldr_frontend.minify.css', 'Bldr\Block\Frontend\Call\Minify\CssCall');
        $this->addCall('bldr_frontend.minify.js', 'Bldr\Block\Frontend\Call\Minify\JsCall');
    }
}
