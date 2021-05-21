<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * UserProfileExtended
 * @ApiResource
 * @ORM\Table(name="user_profile_extended", indexes={@ORM\Index(name="IDX_A1C2A213CCFA12B8", columns={"profile_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\UserProfileExtendedRepository")
 */
class UserProfileExtended
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
     * @var \UserProfiles
     *
     * @ORM\ManyToOne(targetEntity="UserProfiles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     * })
     */
    private $profile;

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

    public function getProfile(): ?UserProfiles
    {
        return $this->profile;
    }

    public function setProfile(?UserProfiles $profile): self
    {
        $this->profile = $profile;

        return $this;
    }


}
