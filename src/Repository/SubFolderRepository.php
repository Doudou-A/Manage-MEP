<?php

namespace App\Repository;

use App\Entity\SubFolder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SubFolder|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubFolder|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubFolder[]    findAll()
 * @method SubFolder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubFolderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubFolder::class);
    }

    public function findListByFolder($jsId)
    {
        $rawSql = "SELECT * FROM folder WHERE on_folder_id = $jsId";
        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        $stmt->execute([]);
        
        return $stmt->fetchAll();
    }
    
    public function findListBySubFolder($jsId)
    {
        $rawSql = "SELECT * FROM sub_folder WHERE on_sub_folder_id = $jsId";
        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        $stmt->execute([]);
        
        return $stmt->fetchAll();
    }
    
    public function findList($jsId, $server)
    {
        $rawSql = "SELECT * FROM sub_folder AS sf WHERE on_folder = $jsId AND server_id = $server";
        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        $stmt->execute([]);
        
        return $stmt->fetchAll();
    }

    // /**
    //  * @return SubFolder[] Returns an array of SubFolder objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SubFolder
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
