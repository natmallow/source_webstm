<?php

namespace Webstm\GobletOfTruthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction($name, $count)
    {

        return $this->render(
            'GotBundle:Default:index.html.twig',
            array(
                'name' => $name, 
                'count' => $count
            )
        );

        //
//        $data = array(
//            "name" => $name,
//            "count" => $count,
//            "nate" => "Hello I would love that",
//        );
//        
//        $json = json_encode($data);
//        
//        $response = new Response($json);
//        $response->headers->set('Content-type', 'application/json');
//        return $response;
//        return $this->render('GotBundle:Default:index.html.twig', array('name' => $name, 'count'=> $count));
    }
}
