<?php


namespace PHPInitiation\Model\User;


class UserAvatar
{
    private
    /**
     * @var string
     */
$avatar;

    /**
     * @return mixed
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar(string $avatar): void
    {
        $this->avatar = $avatar;
    }
}