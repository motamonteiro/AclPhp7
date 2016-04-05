<?php
declare(strict_types=1);

namespace MotaMonteiro\Acl\Entities;


class Resource
{
    protected $name;
    protected $ownerField;

    /**
     * Resource constructor.
     * @param string|null $name
     * @param string|null $ownerField
     */
    public function __construct(string $name = null, string $ownerField = null)
    {
        $this->name = $name;
        $this->ownerField = $ownerField;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Resource
     */
    public function setName(string $name):Resource
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerField():string
    {
        return $this->ownerField;
    }

    /**
     * @param string $ownerField
     * @return Resource
     */
    public function setOwnerField(string $ownerField): Resource
    {
        $this->ownerField = $ownerField;
        return $this;
    }
}