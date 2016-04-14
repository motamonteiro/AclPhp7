<?php

use MotaMonteiro\Acl\Acl;
use MotaMonteiro\Acl\Book;
use MotaMonteiro\Acl\Entities\Permission;
use MotaMonteiro\Acl\Entities\Resource;
use MotaMonteiro\Acl\Entities\Role;
use MotaMonteiro\Acl\User;

require_once __DIR__.'/../vendor/autoload.php';

$permissionView = new Permission("view");
$permissionCreate = new Permission("create");

$roles = [];
$role = new Role("supervisor");
$role->addPermissions([$permissionCreate, $permissionView]);
array_push($roles, $role);

$role = new Role("normal");
$role->addPermission($permissionView);
array_push($roles, $role);

$user = new User();
$user->setId(1);

$user2 = new User();
$user2->setId(2);

$resource = new Resource(Book::class, "getUserId");
$resources[] = $resource;

$book = new Book();
$book->setName('Um livro legal')->setId(1)->setUserId(1);

$acl = new Acl($roles, $resources);
//print_r($acl->isOwner($book, $user));
//exit;

$acl->setUser($user);

//print_r($acl->isOwner($book));
//exit;
print_r($acl->hasPermission('supervisor', 'create'));

