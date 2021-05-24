<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use ApiPlatform\Core\Annotation\ApiFilter;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use App\Filter\FullTextSearchFilter;



// Entity(repositoryClass="App\Repository\Frrbac\UsersRepository")

/**
 * User
 * @ApiResource(
 *     normalizationContext={
 *         "skip_null_values" = false,
 *         "groups"={"read","role_permission"}
 *     },
 *     denormalizationContext={"groups"={"write"}},
 * )
 * @ApiFilter(OrderFilter::class, properties={"username","email","fullName","loginType","locked"})
 * @ApiFilter(FullTextSearchFilter::class, properties={
 *             "search_user"={
 *                 "username": "partial",
 *                 "email": "partial",
 *                 "fullName": "partial",
 *             },
 *             "search_group"={
 *                 "organisation": "partial",
 *                 "roles": "partial"
 *             }
 *         })
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\UsersRepository")
 */
class Users
{
    // User status constants.
    const UNLOCK       = 0; //
    const LOCKED      = 1; //

    // User status constants.
    const STATUS_ACTIVE       = 1; // Active user.
    const STATUS_RETIRED      = 2; // Retired user.

    /**
     * @var \Ramsey\Uuid\UuidInterface
     * @Groups({"read", "write"})
     * @ORM\Column(name="id", type="uuid", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UuidGenerator::class)
    */
    private $id;

    /**
     * @var string
     * @Groups({"read", "write"})
     * @ORM\Column(name="username", type="string", length=36, nullable=false)
     */
    private $username;

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="email", type="string", length=36, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="full_name", type="string", length=100, nullable=true)
     */
    private $fullName;

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="organisation", type="string", length=36, nullable=true)
     */
    private $organisation;

    /**
     * @var string|null
     * @Groups("write")
     * @ORM\Column(name="password", type="string", length=150, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="login_type", type="string", length=36, nullable=true)
     */
    private $loginType;

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="reset_token", type="string", length=36, nullable=true)
     */
    private $resetToken;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reset_token_dt_create", type="datetime", nullable=true)
     */
    private $resetTokenDtCreate;

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

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="locked", type="string", length=1, nullable=true)
     */
    private $locked="0";

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     * @Groups({"read", "write"})
     * @ORM\Column(name="roles", type="string", length=1000, nullable=true)
     */
    private $roles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @Groups({"read", "write"})
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="user")
     * @ORM\JoinTable(name="user_role",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     *   }
     * )
     * @ApiSubresource
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getOrganisation(): ?string
    {
        return $this->organisation;
    }

    public function setOrganisation(?string $organisation): self
    {
        $this->organisation = $organisation;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

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

    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }

    public function getResetTokenDtCreate(): ?\DateTimeInterface
    {
        return $this->resetTokenDtCreate;
    }

    public function setResetTokenDtCreate(?\DateTimeInterface $resetTokenDtCreate): self
    {
        $this->resetTokenDtCreate = $resetTokenDtCreate;

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

    public function getLocked(): ?string
    {
        return $this->locked;
    }

    public function setLocked(?string $locked): self
    {
        $this->locked = $locked;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(?string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return Collection|Roles[]
     */
    public function getRole(): Collection
    {
        return $this->role;
    }

    public function addRole(Roles $role): self
    {
        if (!$this->role->contains($role)) {
            $this->role[] = $role;
        }

        return $this;
    }

    public function removeRole(Roles $role): self
    {
        if ($this->role->contains($role)) {
            $this->role->removeElement($role);
        }

        return $this;
    }


    public function clearPassword(): self
    {
        $this->resetToken = null;
        $this->password = null;
        return $this;
    }

}
