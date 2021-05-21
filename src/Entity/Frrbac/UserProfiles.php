<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * UserProfiles
 * @ApiResource
 * @ORM\Table(name="user_profiles", indexes={@ORM\Index(name="IDX_6BBD61309DFF5F89", columns={"realm_id"}), @ORM\Index(name="IDX_6BBD6130A76ED395", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\UserProfilesRepository")
 */
class UserProfiles
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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="string", length=25, nullable=true)
     */
    private $notes;

    /**
     * @var \Realms
     *
     * @ORM\ManyToOne(targetEntity="Realms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="realm_id", referencedColumnName="id")
     * })
     */
    private $realm;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getRealm(): ?Realms
    {
        return $this->realm;
    }

    public function setRealm(?Realms $realm): self
    {
        $this->realm = $realm;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }


}
