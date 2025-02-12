<?php

namespace App\Traits;

use App\Models\Adoption\Adoption;
use Jantinnerezo\LivewireAlert\LivewireAlert;

trait AdoptionTrait
{
    use LivewireAlert;
    public function getAdoptionExists($userId, $dogId)
    {
        $exists = Adoption::getCheckAdoptionRequest($userId, $dogId);
       return $exists;
    }

    public function getAdoptionCount($userId, $dogId)
    {
        $adoptionCount = Adoption::getAdoptionCount($userId, $dogId);

        return $adoptionCount;
    }
}
