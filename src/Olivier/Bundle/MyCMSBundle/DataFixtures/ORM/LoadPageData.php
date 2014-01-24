<?php

namespace Olivier\Bundle\MyCMSBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Olivier\Bundle\myCMSBundle\Entity\Page;

class LoadPageData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $page_1 = new Page();
        $page_1->setTitle('Page 1 de test');
        $page_1->setContent('<p>mon contenu</p>');
        $page_1->setPublish(1);

        $page_2 = new Page();
        $page_2->setTitle('Page 2 Lorem ipsum');
        $page_2->setContent('<p>mon contenu 2</p>');
        $page_2->setPublish(1);

        $page_3 = new Page();
        $page_3->setTitle('Page 3');
        $page_3->setContent('mon contenu 3');
        $page_3->setPublish(1);

        $manager->persist($page_1);
        $manager->persist($page_2);
        $manager->persist($page_3);
        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }

}