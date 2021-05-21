<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * RealmOptions
 * @ApiResource
 * @ORM\Table(name="realm_options", indexes={@ORM\Index(name="IDX_53DF9B339DFF5F89", columns={"realm_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\RealmOptionsRepository")
 */
class RealmOptions
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
     * @ORM\Column(name="option", type="string", length=36, nullable=true)
     */
    private $option;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_type", type="string", length=36, nullable=true)
     */
    private $valueType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_text", type="text", length=-1, nullable=true)
     */
    private $valueText;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_int", type="integer", nullable=true)
     */
    private $valueInt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="value_bool", type="boolean", nullable=true)
     */
    private $valueBool = '0';

    /**
     * @var \Realms
     *
     * @ORM\ManyToOne(targetEntity="Realms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="realm_id", referencedColumnName="id")
     * })
     */
    private $realm;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getOption(): ?string
    {
        return $this->option;
    }

    public function setOption(?string $option): self
    {
        $this->option = $option;

        return $this;
    }

    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    public function setValueType(?string $valueType): self
    {
        $this->valueType = $valueType;

        return $this;
    }

    public function getValueText(): ?string
    {
        return $this->valueText;
    }

    public function setValueText(?string $valueText): self
    {
        $this->valueText = $valueText;

        return $this;
    }

    public function getValueInt(): ?int
    {
        return $this->valueInt;
    }

    public function setValueInt(?int $valueInt): self
    {
        $this->valueInt = $valueInt;

        return $this;
    }

    public function getValueBool(): ?bool
    {
        return $this->valueBool;
    }

    public function setValueBool(?bool $valueBool): self
    {
        $this->valueBool = $valueBool;

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


}
