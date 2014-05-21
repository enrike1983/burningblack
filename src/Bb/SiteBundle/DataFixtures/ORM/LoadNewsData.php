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
            'NEWS 1' => array(
                'description' => "'28.05.2014 &nbsp; &nbsp; &nbsp;D-Wallsbüll, Wallsbüll Open Air<br>
29.05.2014 &nbsp; &nbsp; &nbsp;RU-Moscow, Crocus<br>
31.05.2014 &nbsp; &nbsp; &nbsp;RU-St.Petersburg, Subur Arena<br>
27.06.2014 &nbsp; &nbsp; &nbsp;EE-Tallinn, Tallinn Weekend Festival<br>
25.07.2014 &nbsp; &nbsp; &nbsp;D-Seebronn, Rock Of Ages<br>
06.09.2014 &nbsp; &nbsp; &nbsp;CH-Porsel, FestiWolf 2014'"
            ),
            'NEWS 2' => array(
                'description' => 'Amazing news: The official AVANTASIA & Tobias Sammet Facebook page has hit the 500,000-Likes mark. At www.facebook.com/avantasia you get news on whatever AVANTASIA and Tobias are up to. You can also follow Tobias ranting about football or discussing his favourite bands on Twitter.com/tobiassammet. Spread the word and shar'
            ),
            'NEWS 3' => array(
                'description' => 'New live confirmed! New live confirmed! New live confirmed!'
            ),
            'NEWS 4' => array(
                'description' => 'asdasd asdasd <br/> asdasd <br/></br>asdasdasd<br/>New live confirmed!New live confirmed!New live confirmed!New live confirmed!<br/><br/>New live confirmed!'
            )
        );

        foreach($news_array as $i => $news) {
            $news_obj = new News();
            $news_obj->setPublishDate(new \DateTime('2014-10-10'));
            $news_obj->setTitle($i);
            $news_obj->setDescription(
                $news['description']
            );
            $news_obj->setIsActive(true);

            $manager->persist($news_obj);
        }

        $manager->flush();
    }
}