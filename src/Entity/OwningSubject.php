<?php

namespace App\Entity;

use App\Enum\OwningSubjectType;
use App\Repository\OwningSubjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OwningSubjectRepository::class)]
class OwningSubject
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::BIGINT)]
    private ?string $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(enumType: OwningSubjectType::class)]
    private ?OwningSubjectType $type = null;

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

    public function getType(): ?OwningSubjectType
    {
        return $this->type;
    }

    public function setType(OwningSubjectType $type): static
    {
        $this->type = $type;

        return $this;
    }
}
