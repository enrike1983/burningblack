<?php

namespace Bb\SiteBundle\Manager;

use Doctrine\ORM\EntityManager;

class PagesManager
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

	public function getActivePages()
	{
		return $this->entityManager->getRepository('BbSiteBundle:Page')
			->findActivePages();
	}
}