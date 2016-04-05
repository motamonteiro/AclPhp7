<?php

use MotaMonteiro\Acl\Acl;
use MotaMonteiro\Acl\Book;
use MotaMonteiro\Acl\Entities\Permission;
use MotaMonteiro\Acl\Entities\Resource;
use MotaMonteiro\Acl\Entities\Role;
use MotaMonteiro\Acl\User;

require_once 'vendor\autoload.php';

$permission = new Permission();
$permission->setName("view");

$role = new Role("supervisor");
$role->addPermission($permission);
$roles[] = $role;

$user = new User();
$user->setId(1);

$user2 = new User();
$user->setId(1);

$resource = new Resource(Book::class, "getUserId");
$resources[] = $resource;

$book = new Book();
$book->setName('Um livro legal')->setId(1)->setUserId(1);

$acl = new Acl($roles, $resources);
$acl->isOwner($book, $user);

$acl->setUser($user);

//print_r($acl->isOwner($book));
//print_r($acl->hasPermission('supervisor', 'view'));

