<?php

namespace App\Entity;

use App\Enum\AssetSourceType;
use App\Repository\AssetSourceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssetSourceRepository::class)]
class AssetSource
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::BIGINT)]
    private ?string $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?bool $isActive = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $externalIdentificationData = null;

    #[ORM\Column(enumType: AssetSourceType::class)]
    private ?AssetSourceType $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getExternalIdentificationData(): ?string
    {
        return $this->externalIdentificationData;
    }

    public function setExternalIdentificationData(string $externalIdentificationData): static
    {
        $this->externalIdentificationData = $externalIdentificationData;

        return $this;
    }

    public function getType(): ?AssetSourceType
    {
        return $this->type;
    }

    public function setType(AssetSourceType $type): static
    {
        $this->type = $type;

        return $this;
    }
}
