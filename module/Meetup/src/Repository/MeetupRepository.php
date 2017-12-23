<?php

declare(strict_types=1);

namespace Meetup\Repository;

use Meetup\Entity\Meetup;
use Doctrine\ORM\EntityRepository;

final class MeetupRepository extends EntityRepository
{

    public function add($meetup) : void
    {
        $this->getEntityManager()->persist($meetup);
        $this->getEntityManager()->flush($meetup);
    }

    public function createMeetupFromNameAndDescriptionAndDatestartAndDateend(string $name, string $description, string $dateStart, string $dateEnd)
    {
        return new Meetup($name, $description, $dateStart, $dateEnd);
    }

    public function save(Meet $meet) : string
    {
        //Faire le update
        $this->getEntityManager()->persist($meet);
        $this->getEntityManager()->flush($meet);
    }
}
