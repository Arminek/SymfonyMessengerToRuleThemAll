<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();
        $menu
            ->addChild('catalog_promotions')
            ->setLabel('Catalog Promotions')
            ->addChild('index', ['route' => 'app_admin_catalog_promotion_index'])
            ->setLabel('List')
            ->setLabelAttribute('icon', 'star');
    }
}
