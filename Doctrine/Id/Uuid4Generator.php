<?php

namespace KHerGe\Bundle\UuidBundle\Doctrine\Id;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Ramsey\Uuid\Uuid;

/**
 * Generates v4 UUIDs.
 *
 * @author Kevin Herrera <kevin@herrera.io>
 */
class Uuid4Generator extends AbstractIdGenerator
{
    /**
     * {@inheritdoc}
     *
     * @return Uuid The new UUID.
     */
    public function generate(EntityManager $em, $entity)
    {
        return Uuid::uuid4();
    }
}
