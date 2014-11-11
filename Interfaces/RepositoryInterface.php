<?php
namespace Volleyball\Component\Utility\Interfaces;

<<<<<<< HEAD
use Doctrine\Common\Persistence\ObjectRepository;

interface RepositoryInterface extends ObjectRepository
{
    /**
     * Create a new resource
     *
     * @return mixed
     */
    public function createNew();

    /**
=======
interface RepositoryInterface
{
    /**
     * Start creating the carousel with specified name.
     *
     * @param string $name
     *
     * @return CarouselBuilderInterface
     */
    public function create($name);

    /**
     * Save the carousel
     *
     * @param Boolean $flush
     *
     * @return CarouselInterface
     */
    public function save($flush = true);
    
    /**
>>>>>>> a97cd5629e0f96f64c81b3bee8ecafe9cbc9d823
     * Get paginated collection
     *
     * @param array $criteria
     * @param array $orderBy
     *
     * @return mixed
     */
    public function createPaginator(array $criteria = null, array $orderBy = null);
}
