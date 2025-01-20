<?php

namespace App\Structural\DataMapper;

class DataMapper
{


    private StorageManager $manager;

    public function __construct(StorageManager $manager)
    {
        $this->manager = $manager;
    }

    public function findById(int $id): User|null
    {
        $userArray = $this->manager->find($id);

        $user = new User();
        $user->setId($id);
        $user->setUserName($userArray[$id]['userName']);
        $user->setPassword($userArray[$id]['password']);

        return $user;
    }

    public function saveUser(User $user): bool
    {
        $this->manager->save([
            $user->getId() =>
                [
                    'userName' => $user->getUserName(),
                    'password' => $user->getPassword()
                ]
        ]);
        return true;
    }

}