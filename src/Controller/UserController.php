<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function index(Request $request, Environment $twig)
    {
        // replace this line with your own code!

        return $this->render('user/user_list.html.twig',array(
            "welcom_message" => "User's list"
        ));
    }
}
