<?php
/**
 * Created by PhpStorm.
 * User: alemonteiro
 * Date: 31/03/2016
 * Time: 12:45
 */

namespace MotaMonteiro\Acl;


use MotaMonteiro\Acl\Contracts\UserAcl;

class User implements UserAcl
{

    protected $id;

    public function getRole():string
    {
        return 'supervisor';
    }

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }



}