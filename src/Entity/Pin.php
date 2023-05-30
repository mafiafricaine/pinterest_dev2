<?php

namespace App\Entity;

use App\Repository\PinRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Traits\Timestampable;

#[ORM\Entity(repositoryClass: PinRepository::class)]
#[ORM\Table(name: "pins")]
#[ORM\HasLifecycleCallbacks]
class Pin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez entrer un titre")]
    #[Assert\NotEqualTo(value: "merde", message: "Vous ne pouvez pas introduire le mot grossier (m****)")]
    #[Assert\Length(min: 3, minMessage: "Vous devez avoir un titre de minimum 3 caractères")]
    private ?string $title = null;

    // #[Assert\Regex(pattern: "/merde/", match: false)]
    // #[Assert\NotIdenticalTo(value: "merde")]
    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Veuillez entrer une description")]
    #[Assert\Length(min: 10, minMessage: "Vous devez avoir une description de minimum 10 caractères")]
    private ?string $description = null;

    use Timestampable;



    #[ORM\Column(length: 500, nullable: true)]
    private ?string $imageName = "https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg";

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }



    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }
}
