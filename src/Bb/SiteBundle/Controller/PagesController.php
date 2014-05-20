<?php

namespace Bb\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
    /**
     * @Route("/{slug}", requirements={"slug" = "[0-9a-zA-Z\/\-]*"})
     */
    public function pageAction($slug)
    {
        //current page
        $page = $this->get('bb_site.manager.pages')->getPageBySlug($slug);

        $template = $page->getTemplate();

    	$news = $this->get('bb_site.manager.news')->getRecentNews();
        $gigs = $this->get('bb_site.manager.gigs')->getRecentGigs();

        return $this->render($template, array(
            'page' => $page,
            'news' => $news,
            'gigs' => $gigs
        ));
    }
}
