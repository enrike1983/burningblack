<?php

namespace Bb\SiteBundle\Manager;

use Doctrine\ORM\EntityManager;

class GigsManager
{
	protected $entityManager, $container;

	public function setServiceContainer($container)
    {
        $this->container = $container;
    }

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

	public function getRecentGigs()
	{
		return $this->entityManager->getRepository('BbSiteBundle:Gig')
			->findActiveGigs();
	}
}