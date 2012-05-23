<?php

namespace Site\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('SiteHomeBundle:Default:index.html.twig');
    }
	
	public function viewPageContactAction()
	{
		return $this->render("SiteHomeBundle:Default:contact.html.twig");
	}
	
	public function viewPageLacarteAction() 
	{
		return $this->render("SiteHomeBundle:Default:lacarte.html.twig");
	}
	
	public function viewPageAnimationsAction()
	{
		return $this->render("SiteHomeBundle:Default:animations.html.twig");
	}
}
