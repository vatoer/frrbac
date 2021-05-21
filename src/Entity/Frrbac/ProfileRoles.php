<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ProfileRoles
 * @ApiResource
 * @ORM\Table(name="profile_roles", indexes={@ORM\Index(name="IDX_41EAB115CCFA12B8", columns={"profile_id"}), @ORM\Index(name="IDX_41EAB115D60322AC", columns={"role_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\ProfileRolesRepository")
 */
class ProfileRoles
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
     * @ORM\Column(name="notes", type="string", length=25, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="realm", type="string", length=36, nullable=true)
     */
    private $realm;

    /**
     * @var \UserProfiles
     *
     * @ORM\ManyToOne(targetEntity="UserProfiles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     * })
     */
    private $profile;

    /**
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getRealm(): ?string
    {
        return $this->realm;
    }

    public function setRealm(?string $realm): self
    {
        $this->realm = $realm;

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

    public function getRole(): ?Roles
    {
        return $this->role;
    }

    public function setRole(?Roles $role): self
    {
        $this->role = $role;

        return $this;
    }


}
