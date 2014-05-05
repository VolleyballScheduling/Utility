<?php
namespace Volleyball\Component\Utility\Interfaces;

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
     * Get paginated collection
     *
     * @param array $criteria
     * @param array $orderBy
     *
     * @return mixed
     */
    public function createPaginator(array $criteria = null, array $orderBy = null);
}
