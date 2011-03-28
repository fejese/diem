<?php

namespace Diem\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DiemCoreBundle:Default:index.html.twig');
    }
}
