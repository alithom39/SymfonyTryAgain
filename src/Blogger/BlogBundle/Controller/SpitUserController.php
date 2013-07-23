<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SpitUserController extends Controller
{
    public function indexAction($username)
    {
        $user = $this->container->get('fos_user.user_manager')->findUserByUsername($username);
        var_dump($user);die;

        return $this->render('BloggerBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
