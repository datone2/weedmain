<?php

namespace DirectoryPlatform\AdminBundle\Controller;

use DirectoryPlatform\AdminBundle\Form\Type\UserType;

use DirectoryPlatform\AppBundle\Entity\Config;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Model\UserInterface;

use DirectoryPlatform\AppBundle\Entity\User;

class ConfigController extends Controller
{
	/**
	 * @Route("/config", name="admin_config")
	 */

	public function updateAction(Request $request) {


		$config = $this->getDoctrine()->getRepository('AppBundle:Config')->findAll();
		if (empty($config))
			$config = new Config();
		else
			$config = $config['0'];
		$form = $this->createFormBuilder($config)
			->add('distance',IntegerType::class)
			->add('save', SubmitType::class, [
				'attr' => ['class' => 'btn-primary'],
			])
			->getForm();
			$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$em = $this->getDoctrine()->getManager();
			$em->persist($config);
			$em->flush();
			return $this->redirectToRoute('admin_config');
		}

		return $this->render('AdminBundle::Config/update.html.twig', [
			'form'  => $form->createView(),
			'config' =>$config
		]);
	}
}