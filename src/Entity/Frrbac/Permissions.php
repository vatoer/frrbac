<?php

namespace App\Entity\Frrbac;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use App\Entity\Frrbac\Operations;
use App\Entity\Frrbac\ObjectTarget;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * Permission
 * @ApiResource
 * @ORM\Table(name="permissions", indexes={@ORM\Index(name="IDX_E04992AA232D562B", columns={"object_id"}), @ORM\Index(name="IDX_E04992AA44AC3583", columns={"operation_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\PermissionsRepository")
 */
class Permissions
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false, )
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UuidGenerator::class)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="string", length=100, nullable=true)
     */
    private $notes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="meta_dt_create", type="datetime", nullable=true)
     */
    private $metaDtCreate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="meta_dt_update", type="datetime", nullable=true)
     */
    private $metaDtUpdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_create_by", type="string", length=36, nullable=true)
     */
    private $metaCreateBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_update_by", type="string", length=36, nullable=true)
     */
    private $metaUpdateBy;

    /**
     * @var ObjectTarget
     *
     * @ORM\ManyToOne(targetEntity="ObjectTarget")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_id", referencedColumnName="id")
     * })
     * @ApiSubresource
     */
    private $object;

    /**
     * @var Operations
     *
     * @ORM\ManyToOne(targetEntity="Operations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operation_id", referencedColumnName="id")
     * })
     * @ApiSubresource
     */
    private $operation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Roles", mappedBy="permission")
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getMetaDtCreate(): ?\DateTimeInterface
    {
        return $this->metaDtCreate;
    }

    public function setMetaDtCreate(?\DateTimeInterface $metaDtCreate): self
    {
        $this->metaDtCreate = $metaDtCreate;

        return $this;
    }

    public function getMetaDtUpdate(): ?\DateTimeInterface
    {
        return $this->metaDtUpdate;
    }

    public function setMetaDtUpdate(?\DateTimeInterface $metaDtUpdate): self
    {
        $this->metaDtUpdate = $metaDtUpdate;

        return $this;
    }

    public function getMetaCreateBy(): ?string
    {
        return $this->metaCreateBy;
    }

    public function setMetaCreateBy(?string $metaCreateBy): self
    {
        $this->metaCreateBy = $metaCreateBy;

        return $this;
    }

    public function getMetaUpdateBy(): ?string
    {
        return $this->metaUpdateBy;
    }

    public function setMetaUpdateBy(?string $metaUpdateBy): self
    {
        $this->metaUpdateBy = $metaUpdateBy;

        return $this;
    }

    public function getObject(): ?ObjectTarget
    {
        return $this->object;
    }

    public function setObject(?ObjectTarget $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getOperation(): ?Operations
    {
        return $this->operation;
    }

    public function setOperation(?Operations $operation): self
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * @return Collection|Role[]
     */
    public function getRole(): Collection
    {
        return $this->role;
    }

    public function addRole(Roles $role): self
    {
        if (!$this->role->contains($role)) {
            $this->role[] = $role;
            $role->addPermission($this);
        }

        return $this;
    }

    public function removeRole(Roles $role): self
    {
        if ($this->role->contains($role)) {
            $this->role->removeElement($role);
            $role->removePermission($this);
        }

        return $this;
    }

}
