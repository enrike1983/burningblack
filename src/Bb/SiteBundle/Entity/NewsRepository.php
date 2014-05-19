<?php

namespace Bb\SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository extends EntityRepository
{
	public function findActiveNews()
	{
		return $this->createQueryBuilder('n')
            ->where('n.is_active = :is_active')
            ->setParameter('is_active', 1)
            ->getQuery()
            ->getResult();
	}
}