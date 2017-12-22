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
            var_dump($name);
             var_dump($description);
              var_dump($dateStart);
               var_dump($dateEnd);

        return new Meetup($name, $description, $dateStart, $dateEnd);
    }
}
