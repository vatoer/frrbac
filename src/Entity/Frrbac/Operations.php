<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Operations
 * @ApiResource
 * @ORM\Table(name="operations")
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\OperationsRepository")
 */
class Operations
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=5, nullable=false)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_create", type="integer", nullable=true)
     */
    private $create = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="_read", type="integer", nullable=true)
     */
    private $read = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="_update", type="integer", nullable=true)
     */
    private $update = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="_delete", type="integer", nullable=true)
     */
    private $delete = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="locked", type="string", length=36, nullable=true)
     */
    private $locked;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreate(): ?int
    {
        return $this->create;
    }

    public function setCreate(?int $create): self
    {
        $this->create = $create;

        return $this;
    }

    public function getRead(): ?int
    {
        return $this->read;
    }

    public function setRead(?int $read): self
    {
        $this->read = $read;

        return $this;
    }

    public function getUpdate(): ?int
    {
        return $this->update;
    }

    public function setUpdate(?int $update): self
    {
        $this->update = $update;

        return $this;
    }

    public function getDelete(): ?int
    {
        return $this->delete;
    }

    public function setDelete(?int $delete): self
    {
        $this->delete = $delete;

        return $this;
    }

    public function getLocked(): ?string
    {
        return $this->locked;
    }

    public function setLocked(?string $locked): self
    {
        $this->locked = $locked;

        return $this;
    }


}
