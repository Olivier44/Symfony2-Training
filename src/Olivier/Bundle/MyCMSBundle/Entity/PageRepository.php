<?php

namespace Olivier\Bundle\MyCMSBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Olvier\Bundle\MyCMSBundle\Entity\Page;

/**
 * PageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PageRepository extends EntityRepository
{
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAllPages()
    {
        //$this->entityManager->$this->getDoctrine()->getRepository('OlivierMyCMSBundle:Page')->findAll();

        /*$this
            ->createQueryBuilder('p')
            ->select('p.id')
            ->getQuery()
            ->getFirstResult();*/
    }
}