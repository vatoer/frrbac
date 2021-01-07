<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleHierarchy
 *
 * @ORM\Table(name="role_hierarchy")
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\RoleHierarchyRepository")
 */
class RoleHierarchy
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_role_id", type="integer", nullable=true)
     */
    private $parentRoleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="child_role_id", type="integer", nullable=true)
     */
    private $childRoleId;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParentRoleId(): ?int
    {
        return $this->parentRoleId;
    }

    public function setParentRoleId(?int $parentRoleId): self
    {
        $this->parentRoleId = $parentRoleId;

        return $this;
    }

    public function getChildRoleId(): ?int
    {
        return $this->childRoleId;
    }

    public function setChildRoleId(?int $childRoleId): self
    {
        $this->childRoleId = $childRoleId;

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
