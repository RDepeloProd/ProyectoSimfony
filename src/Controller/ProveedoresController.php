<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProveedoresController extends AbstractController{
    
    #[Route('/proveedores', name: 'app_proveedores',defaults:['name'=>null], methods:['GET','HEAD'])]
    public function index(): Response
    {
       
        $nombre = 'manolo';
        return $this->render('proveedores/index.html.twig', [
            'controller_name' => 'ProveedoresController',
        ]);
    }

    #[Route('/proveedor/{id}', name: 'proveedor')]
    public function singular($id): Response
    {
            $nombre = 'Manolo';
        return $this->render('proveedores/singular.html.twig', [
            'idProveedor' => $id,
            'nombre' => $nombre,
        ]);
    }
    
    public function getProveedores(){
        $em = $this->getDoctrine()->getManager();
        $listProv = $em->getRepository('App::Proveedores')->findAll();
        return $this->render('universal.html.twig',[
            'listProv'=> $listProv
        ]);   
    }

}