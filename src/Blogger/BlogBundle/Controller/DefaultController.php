<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $user = $this->container->get('fos_user.user_manager')->findUserByUsername('alithom39');
        var_dump($user);die;

        return $this->render('BloggerBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
