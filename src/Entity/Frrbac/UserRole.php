<?php

namespace App\Entity\Frrbac;

use App\Entity\Frrbac\Users;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
//use ApiPlatform\Core\Annotation\Id;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * Role
 * @ApiResource
 * @ORM\Table(name="user_role")
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\UserRoleRepository")
 */
class UserRole
{
    /**
     * Undocumented variable
     * @ORM\Id
     * @var \Doctrine\Common\Collections\Collection
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="user_role")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @ApiSubresource
     */
    private $user;

    /**
     * Undocumented variable
     * @ORM\Id
     * @var \Doctrine\Common\Collections\Collection
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Roles", inversedBy="user_role")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * @ApiSubresource
     */
    private $role;

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="notes", type="string", length=36, nullable=true)
     */
    private $notes;

    /**
     * @var \DateTime|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="meta_dt_create", type="datetime", nullable=true)
     */
    private $metaDtCreate;

    /**
     * @var \DateTime|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="meta_dt_update", type="datetime", nullable=true)
     */
    private $metaDtUpdate;

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="meta_create_by", type="string", length=36, nullable=true)
     */
    private $metaCreateBy;

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="meta_update_by", type="string", length=36, nullable=true)
     */
    private $metaUpdateBy;

    public function getUser()
    {
        return $this->user;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setUser(Users $user)
    {
        $this->users = $user;
        return $this;
    }

    public function setRole(Roles $role)
    {
        $this->role = $role;
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
}
