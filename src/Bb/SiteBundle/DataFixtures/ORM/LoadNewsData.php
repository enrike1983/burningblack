<?php

namespace Bb\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Bb\SiteBundle\Entity\News;

class LoadNewsData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $news_array = array(
            'news_1',
            'news_2',
            'news_3',
            'news_4',
            'news_5',
            'news_6',
            'news_7',
            'news_8',
            'news_9',
            'news_10'
        );

        foreach($news_array as $news) {
            $news_obj = new News();
            $news_obj->setPublishDate(new \DateTime('2014-10-10'));
            $news_obj->setTitle($news);
            $news_obj->setDescription('Bb headliner al wacken!Bb headliner al wacken!Bb headliner al wacken!Bb headliner al wacken!');
            $news_obj->setIsActive(true);

            $manager->persist($news_obj);
        }

        $manager->flush();
    }
}