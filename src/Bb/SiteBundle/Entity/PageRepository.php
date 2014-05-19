<?php

namespace Bb\SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PageRepository extends EntityRepository
{
	public function findActivePages()
	{
		return $this->createQueryBuilder('n')
            ->where('n.is_active = :is_active')
            ->setParameter('is_active', 1)
            ->getQuery()
            ->getResult();
	}
}
