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
            'home' => array(
                'in_menu' => false
            ),
            'news' => array(
                'menu_position' => 1
            ),
            'bio' => array(
                'menu_position' => 2
            ),
            'tour' => array(
                'menu_position' => 3
            ),
            'music' => array(
                'menu_position' => 4
            ),
            'merch' => array(
                'menu_position' => 5
            ),
            'media' => array(
                'menu_position' => 6
            ),
            'contacts' => array(
                'menu_position' => 7
            ),
        );

        foreach($pages_array as $i => $page) {
            
            $page_obj = new Page();
            $page_obj->setTitle($i);
            $page_obj->setDescription('Bb headliner al wacken!Bb headliner al wacken!Bb headliner al wacken!Bb headliner al wacken!');
            $page_obj->setIsActive(true);
            $page_obj->setTemplate('BbSiteBundle:Pages:'.$i.'.html.twig');
            
            isset($page['in_menu']) ? $page_obj->setInMenu($page['in_menu']) : '';
            isset($page['menu_position']) ? $page_obj->setMenuPosition($page['menu_position']) : '';

            $manager->persist($page_obj);
        }

        $manager->flush();
    }
}