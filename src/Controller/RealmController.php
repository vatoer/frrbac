<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealmController extends AbstractController
{
    /**
     * Undocumented function
     * @Route("/realm", name="realm")
     * @return Response
     */
    public function index() : Response{
        return $this->render('realm/index.html.twig',[
            'controller_name' => 'RealmController',
        ]);
    }
}
