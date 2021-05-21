<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ProfileRoleExtended
 * @ApiResource
 * @ORM\Table(name="profile_role_extended", indexes={@ORM\Index(name="IDX_216DC28E5BDFC30", columns={"profile_role_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\ProfileRolesExtendedRepository")
 */
class ProfileRoleExtended
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext_obj", type="string", length=36, nullable=true)
     */
    private $extObj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext_obj_type", type="string", length=36, nullable=true)
     */
    private $extObjType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext_obj_reference", type="string", length=36, nullable=true)
     */
    private $extObjReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="string", length=25, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext_options", type="string", length=1000, nullable=true)
     */
    private $extOptions;

    /**
     * @var \ProfileRoles
     *
     * @ORM\ManyToOne(targetEntity="ProfileRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_role_id", referencedColumnName="id")
     * })
     */
    private $profileRole;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getExtObj(): ?string
    {
        return $this->extObj;
    }

    public function setExtObj(?string $extObj): self
    {
        $this->extObj = $extObj;

        return $this;
    }

    public function getExtObjType(): ?string
    {
        return $this->extObjType;
    }

    public function setExtObjType(?string $extObjType): self
    {
        $this->extObjType = $extObjType;

        return $this;
    }

    public function getExtObjReference(): ?string
    {
        return $this->extObjReference;
    }

    public function setExtObjReference(?string $extObjReference): self
    {
        $this->extObjReference = $extObjReference;

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

    public function getExtOptions(): ?string
    {
        return $this->extOptions;
    }

    public function setExtOptions(?string $extOptions): self
    {
        $this->extOptions = $extOptions;

        return $this;
    }

    public function getProfileRole(): ?ProfileRoles
    {
        return $this->profileRole;
    }

    public function setProfileRole(?ProfileRoles $profileRole): self
    {
        $this->profileRole = $profileRole;

        return $this;
    }


}
