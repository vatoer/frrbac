<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Ramsey\Uuid\Doctrine\UuidGenerator;


/**
 * Realms
 * @ApiResource
 * @ORM\Table(name="realms")
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\RealmsRepository")
 */
class Realms
{
    /**
     * @var \Ramsey\Uuid\UuidInterface
     * @ORM\Column(name="id", type="uuid", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UuidGenerator::class)
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
     * @ORM\Column(name="notes", type="text", length=-1, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_name", type="string", length=200, nullable=true)
     */
    private $displayName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain_name", type="string", length=200, nullable=true)
     */
    private $domainName;

    /**
     * @var string|null
     * @ORM\Column(name="login_type", type="string", length=36, nullable=true)
     */
    private $loginType;

    /**
     * @var string|null
     * @ORM\Column(name="allow_manage_user", type="string", length=1, nullable=true)
     */
    private $allowManageUser;

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

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }


    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;

        return $this;
    }


    public function getLoginType(): ?string
    {
        return $this->loginType;
    }

    public function setLoginType(?string $loginType): self
    {
        $this->loginType = $loginType;

        return $this;
    }


    public function getAllowManageUser(): ?string
    {
        return $this->allowManageUser;
    }

    public function setAllowManageUser(?string $allowManageUser): self
    {
        $this->allowManageUser = $allowManageUser;

        return $this;
    }

    


}
