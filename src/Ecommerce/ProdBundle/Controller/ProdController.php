<?php

namespace Ecommerce\ProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class ProdController extends Controller
{
   /**
     * @Route("/produits",name="produit_list")
     */
    public function indexAction()
    {
        $prod=$this->getDoctrine()
		->getRepository('AppBundle:Produit')
		->findAll();
        return $this->render('ProdBundle:Produit:index.html.twig',array(
		'produit' => $prod
		));
    }
	/**
     * @Route("/Ajoutproduit",name="produit_ajout")
     */
	public function AjoutAction(Request $request)
    {
   $prod=new¨Produit();
   $formAjt->createFormBuilder($prod);
   ->add('Libelle',textType::class,array('attr'=>array('class'=>'form=control','style'=>'margin=button:15px')))
   ->add('Prix',textType::class,array('attr'=>array('class'=>'form=control','style'=>'margin=button:15px')))
   ->add('Description',textType::class,array('attr'=>array('class'=>'form=control','style'=>'margin=button:15px')))
   ->add('Categorie',textType::class,array('attr'=>array('class'=>'form=control','style'=>'margin=button:15px')))
   ->add('Ajouter',SubmitType::class,array('label'=>'Ajouter','attr'=>array('class'=>'form=control','style'=>'margin=button:15px')))
	->getForm();
	$formAjt->hendleRequest($request);
	        return $this->render('ProdBundle:Produit:ajout.html.twig');

    }
	/**
     * @Route("/Supproduit",name="produit_supp")
     */
	public function SuppAction()
    {
        return $this->render('EcommerceProdBundle:Produit:supp.html.twig');
    }
	/**
     * @Route("/Modproduit",name="produit_Mod")
     */
	public function ModifAction($id,Request $request)
    {
		        return $this->render('EcommerceProdBundle:Produit:mod.html.twig');

    }
	/**
     * @Route("/Detailproduit",name="produit_detail")
     */
	public function DetailAction($id)
    {
	        return $this->render('EcommerceProdBundle:Produit:detail.html.twig');
	
	
    }
}
