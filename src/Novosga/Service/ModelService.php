<?php

namespace Novosga\Service;

use Doctrine\ORM\EntityManager;

/**
 * ModelService.
 *
 * @author Alisson da Costa <alisson@procon.pb.gov.br>
 */
abstract class ModelService
{
    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
}
