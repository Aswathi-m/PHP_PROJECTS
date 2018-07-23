<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class StudentRepository extends  EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->findBy(array(),array('name'=>'ASC'));
    }

    public function addAction(\AppBundle\Entity\Studentdata $stud)
    {  
        $this->_em->persist($stud);
        $this->_em->flush();
    }
    public function delAction(\AppBundle\Entity\Studentdata $stud) 
    {
         if (!$stud) {
            throw $this->createNotFoundException('No student found for id '.$id);
         }

         $this->_em->remove($stud);
         $this->_em->flush();
    }
    public function upAction(\AppBundle\Entity\Studentdata $stud)
    {
         if (!$stud) {
         throw $this->createNotFoundException('No student found for id '.$id );
         }

         $this->_em->persist($stud);
         $this->_em->flush();

     }

}

