<?php

namespace App\Repository;

use App\Entity\CatalogPromotion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * @method CatalogPromotion|null find($id, $lockMode = null, $lockVersion = null)
 * @method CatalogPromotion|null findOneBy(array $criteria, array $orderBy = null)
 * @method CatalogPromotion[]    findAll()
 * @method CatalogPromotion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CatalogPromotionRepository extends EntityRepository
{
}
