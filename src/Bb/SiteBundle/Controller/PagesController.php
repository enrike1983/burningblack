<?php

namespace Bb\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
    /**
     * @Route("/")
     * @Template("BbSiteBundle:Pages:home.html.twig")
     */
    public function homeAction()
    {
    	$news = $this->get('bb_site.manager.news')->getRecentNews();
        $gigs = $this->get('bb_site.manager.gigs')->getRecentGigs();

    	return array(
            'news' => $news,
            'gigs' => $gigs
        );
    }
}
