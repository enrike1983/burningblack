<?php

namespace Bb\SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GigRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GigRepository extends EntityRepository
{
	public function findActiveGigs()
	{
		return $this->createQueryBuilder('n')
            ->where('n.is_active = :is_active')
            ->setParameter('is_active', 1)
            ->getQuery()
            ->getResult();
	}
}
