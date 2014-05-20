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
		return $this->createQueryBuilder('p')
            ->where('p.is_active = :is_active')
            ->setParameter('is_active', 1)
            ->getQuery()
            ->getResult();
	}

	public function findPageBySlug($slug)
	{
		return $this->createQueryBuilder('p')
            ->where('p.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getOneOrNullResult();		
	}
}
