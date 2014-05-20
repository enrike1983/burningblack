<?php

namespace Bb\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Bb\SiteBundle\Entity\Page;

class LoadPagesData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $pages_array = array(
            'news',
            'biography',
            'tour',
            'music',
            'merchandise',
            'media',
            'contacts'
        );

        foreach($pages_array as $page) {
            $page_obj = new Page();
            $page_obj->setTitle($page);
            $page_obj->setDescription('Bb headliner al wacken!Bb headliner al wacken!Bb headliner al wacken!Bb headliner al wacken!');
            $page_obj->setIsActive(true);
            $page_obj->setTemplate('BbSiteBundle:Pages:'.$page.'.html.twig');

            $manager->persist($page_obj);
        }

        $manager->flush();
    }
}