<?php

namespace Diem\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class dmFrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('DiemAdminBundle:Default:index.html.twig');
    }


}
