<?php


namespace PHPInitiation\Model\User;


class UserInfo
{
    private
    /**
     * @var string
     */
$firstName;


    /**
     * @return mixed
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }
}