<?php
namespace Volleyball\Component\Utility\Repository;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
<<<<<<< HEAD
use Doctrine\ORM\Repository\RepositoryFactory as RepositoryFactoryInterface;

use Volleyball\Bundle\UtilityBundle\Doctrine\ORM\EntityRepository;

class RepositoryFactory extends EntityRepository implements RepositoryFactoryInterface
=======
use Doctrine\ORM\Repository\RepositoryFactory as BaseRepositoryFactory;

use Volleyball\Bundle\UtilityBundle\Doctrine\ORM\EntityRepository;

class RepositoryFactory extends EntityRepository implements BaseRepositoryFactory
>>>>>>> a97cd5629e0f96f64c81b3bee8ecafe9cbc9d823
{
    /**
     * Id
     * @var array $ids
     */
    private $ids;
    
    /**
     * Container
     * @var ContainerInterface $container 
     */
    private $container;
    
    /**
     * Repository Factory
     * @var RepositoryFactory $default
     */
    private $default;

    /**
     * Construct
     * @param array $ids
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     * @param \Volleyball\UtilityBundle\Repository\RepositoryFactory $default
     */
<<<<<<< HEAD
    public function __construct(array $ids, ContainerInterface $container, RepositoryFactory $default)
=======
    public function __construct(array $ids, ContainerInterface $container, BaseRepositoryFactory $default)
>>>>>>> a97cd5629e0f96f64c81b3bee8ecafe9cbc9d823
    {
        $this->ids = $ids;
        $this->container = $container;
        $this->default = $default;
<<<<<<< HEAD
        parent::construct();
=======
>>>>>>> a97cd5629e0f96f64c81b3bee8ecafe9cbc9d823
    }

    /**
     * Get Repository
     * @param \Doctrine\ORM\EntityManagerInterface $entityManager
     * @param string $entityName
     * @return type
     */
    public function getRepository(EntityManagerInterface $entityManager, $entityName)
    {
        if (isset($this->ids[$entityName])) {
            return $this->container->get($this->ids[$entityName]);
        }

        return $this->default->getRepository($entityManager, $entityName);
    }
}
