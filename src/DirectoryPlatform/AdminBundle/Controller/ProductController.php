<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use DirectoryPlatform\AdminBundle\Form\Type\ProductType;
use DirectoryPlatform\AppBundle\Entity\Field;
use DirectoryPlatform\AppBundle\Helper\Hierarchy;
use DirectoryPlatform\AppBundle\Entity\Product;

class ProductController extends Controller
{
	/**
	* @Route("/products", name="admin_product")
	*/
	public function indexAction(Request $request)
	{
		$products = $this->getDoctrine()->getRepository('AppBundle:Product')->findAll();
		$products = $this->get('knp_paginator')->paginate($products, $request->query->getInt('page', 1), 10);
		return $this->render('AdminBundle::Product/index.html.twig', ['products' => $products]);
	}	
	
	/**
	 * @Route("/products/create", name="admin_product_create")
	 */	
	public function createAction(Request $request) {
		$product = new Product();
		$form = $this->createForm(ProductType::class, $product, [
			'currency' => $this->getParameter('app.currency'),
			'hierarchy_categories' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
			/* 'hierarchy_users' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:User'), 'user', 'users'), */
			/* 'hierarchy_products' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Product'), 'product', 'products'), */
		]);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$product = $form->getData();
			if($this->getUser()!=""){$product->setUser($this->getUser());}

			try {
				$em = $this->getDoctrine()->getManager();
				$em->persist($product);
				$em->flush();
				$this->addFlash('success', $this->get('translator')->trans('Product has been successfully created.'));
			} catch (\Exception $e) {
				$this->addFlash('danger', $this->get('translator')->trans('An error occurred when creating product object.'));
			}

			return $this->redirectToRoute('admin_product');
		}

		return $this->render('AdminBundle::Product/create.html.twig', ['form' => $form->createView()]);
	}


	
	/**
	 * @Route("/products/update/{id}", name="admin_product_update", requirements={"id": "\d+"})
	 * @ParamConverter("product", class="DirectoryPlatform\AppBundle\Entity\Product")
	 */
	public function updateAction(Request $request, Product $product)
	{
		$form = $this->createForm(ProductType::class, $product, [
			'currency' => $this->getParameter('app.currency'),
			'user' => $product->getUser(),
			'hierarchy_categories' => new Hierarchy($this->getDoctrine()->getRepository('AppBundle:Category'), 'category', 'categories'),
		]);
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) {
            /** @var product $product */
            $product = $form->getData();

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($product);
                $em->flush();

                $this->addFlash('success', $this->get('translator')->trans('Product has been successfully saved.'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $this->get('translator')->trans('An error occurred when saving product object.' . $e));
            }

			return $this->redirectToRoute('admin_product_update', ['id' => $product->getId()]);
		}

		return $this->render('AdminBundle::Product/update.html.twig', [
			'product' => $product,
			'form' => $form->createView(),
		]);
		
	}
	

	/**
	 * @Route("/products/delete/{id}", name="admin_product_delete", requirements={"id": "\d+"})
	 * @ParamConverter("product", class="DirectoryPlatform\AppBundle\Entity\Product")
	 */
	public function deleteAction(Request $request, Product $product)
	{
		try {
			$em = $this->getDoctrine()->getManager();
			$em->remove($product);
			$em->flush();
			$this->addFlash('success', $this->get('translator')->trans('Product has been successfully deleted.'));
		} catch (\Exception $e) {
			$this->addFlash('danger', $this->get('translator')->trans('An error occurred when deleting product object.'));
		}

		return $this->redirectToRoute('admin_product');
	}
	
	

    /**
     * Creates a form to delete a product entity.
     *
     * @param Product $product The product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /* private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_delete', array('id' => $product->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    } */
}
