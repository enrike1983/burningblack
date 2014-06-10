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

	public function getMainMenu()
	{
		return $this->entityManager->getRepository('BbSiteBundle:Page')
			->findActivePages();
	}

	public function getPageBySlug($slug)
	{
		$page = $this->entityManager->getRepository('BbSiteBundle:Page')
			->findPageBySlug($slug);

		if(!$page) {
			$page = $this->entityManager->getRepository('BbSiteBundle:Page')
			->findOneBy(array('is_homepage' => true));			
		}

		return $page;
	}
}