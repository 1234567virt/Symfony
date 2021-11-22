<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class RequestDTO
{
    /**
     * @Assert\NotBlank(message="Поле должно быть заполнено")
     * @Assert\Length(max=255)
     */
    private ?string $title;
    /**
     * @Assert\NotBlank (message="оле должно быть заполнено")
     * @Assert\Length (max=10000)
     */

    private ?string $message;



    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }



    /**
     * @param string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

}