<?php

namespace Bb\SiteBundle\Manager;

use Doctrine\ORM\EntityManager;

class NewsManager
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

	public function getRecentNews()
	{
		return $this->entityManager->getRepository('BbSiteBundle:News')
			->findActiveNews();
	}
}