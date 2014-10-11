<?php

namespace Livraria\Entity;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository {

    public function findByEmailAndPassword($email, $password) {

        $user = $this->findOneByEmail($email);
        if ($user) {
            $salt = $user->getSalt();

            $hashSenha = $user->encryptPassword($password);
        var_dump($user);
        var_dump($hashSenha);

            if ($hashSenha == $user->getPassword()) {
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}