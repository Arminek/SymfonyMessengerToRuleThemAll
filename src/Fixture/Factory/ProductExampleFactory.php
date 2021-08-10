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

namespace App\Fixture\Factory;

use Sylius\Bundle\CoreBundle\Fixture\Factory\ProductExampleFactory as BaseFactory;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class ProductExampleFactory extends BaseFactory
{
    protected function configureOptions(OptionsResolver $resolver): void
    {
        $faker = \Faker\Factory::create();
        parent::configureOptions($resolver);

        $resolver
            ->setDefault('name', function (Options $options) use ($faker): string {
                /** @var string $words */
                $words = $faker->realText(200, true);

                return $words;
            })
        ;
    }
}
