<?php

namespace DirectoryPlatform\AppBundle\Repository;
use Doctrine\ORM\EntityRepository;
/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
	public function findAll() 
    {
		$qb = $this->createQueryBuilder('product');

		return $qb->orderBy('product.created', 'DESC')
		          ->getQuery()
		          ->execute();
	}
	public function findByUser(\DirectoryPlatform\AppBundle\Entity\User $user)
    {
        if (!$user) {
            return false;
        }

        $qb = $this->createQueryBuilder('product');

        return $qb->andWhere('product.user = :user')
            ->setParameter('user', $user)
            ->orderBy('product.created', 'DESC')
            ->addOrderBy('product.id', 'DESC')
            ->getQuery()
            ->execute();
    }
	
	public function findForListing($user_id,$count = 10) {
		//$qb = $this->createQueryBuilder('product');
		$qb = $this->createQueryBuilder('product');
		$qb->andWhere('product.enabled = 1')
		   ->orderBy('product.created', 'DESC')
		   ->setParameters([
				'user' => $user_id,
		   ]);

		if ($count !== -1) {
			$qb->setMaxResults($count);
		}

		return $qb->getQuery()
		          ->execute();
	}
}
