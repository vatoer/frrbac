<?php

namespace App\Entity\Frrbac;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;

/**
 * OauthJwt
 *
 * @ORM\Table(name="oauth_jwt")
 * @ORM\Entity(repositoryClass="App\Repository\Frrbac\OauthJwtRepository")
 */
class OauthJwt
{
    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class=UuidGenerator::class)
     */
    private $clientId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", length=80, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="public_key", type="string", length=2000, nullable=true)
     */
    private $publicKey;

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getPublicKey(): ?string
    {
        return $this->publicKey;
    }

    public function setPublicKey(?string $publicKey): self
    {
        $this->publicKey = $publicKey;

        return $this;
    }


}
