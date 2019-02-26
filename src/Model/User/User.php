<?php

namespace PHPInitiation\Model\User;

/**
 * Class User
 * @package PHPInitiation\Model\User
 */
class User
{
    private
        /**
         * @var int
         */
        $id,
    /**
     * @var UserLogIn
     */
$login,
        /**
         * @var UserInfo
         */
        $info,
    /**
     * @var UserAvatar
     */
$avatar;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin(): ?UserLogIn
    {
        return $this->logIn;
    }

    /**
     * @param mixed $login
     */
    public function setLogin(UserLogIn $logIn): void
    {
        $this->logIn = $logIn;
    }

    /**
     * @return mixed
     */
    public function getInfo(): ?UserInfo
    {
        return $this->info;

    }

    /**
     * @param mixed $info
     */
    public function setInfo(UserInfo $info): void
    {
        $this->info = $info;
    }

    /**
     * @return mixed
     */
    public function getAvatar(): ?UserAvatar
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar(UserAvatar $avatar): void
    {
        $this->avatar = $avatar;
    }

}