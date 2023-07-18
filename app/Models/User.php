<?php

namespace App\Models;

use App\Http\Controllers\MainController;

class User
{

    private $nick;
    private $id;
    private $groupid;
    private $coins;
    private $golds;
    private $registerDate;
    private $lastDate;
    private $lastAddress;
    private $typass;
    private $online;
    private $level;
    private $experience;
    private $maxExperience;


    public function __construct(string $nickname)
    {
        $hash = MainController::generateHash("information", 0, $nickname);
        $result = MainController::sendRequestAPI("player/information", ["name" => $nickname, "value" => 0, "protect_key" => $hash])->response;
        $this->nick = $nickname;
        $this->id = $result->id;
        $this->groupid = $result->groupId;
        $this->coins = $result->coins;
        $this->golds = $result->golds;
        $this->registerDate = $result->registerDate;
        $this->lastAddress = $result->lastAddress;
        $this->typass = $result->typass;
        $this->online = $result->online;
        $this->level = $result->level;
        $this->experience = $result->experience;
        $this->maxExperience = $result->maxExperience;
        $this->lastDate = $result->lastDate;
    }

    public function getCoins(): int
    {
        return $this->coins;
    }

    public function getGolds(): int
    {
        return $this->golds;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function getRegisterDate(): string
    {
        return $this->registerDate;
    }

    public function getLastDate(): string
    {
        return $this->lastDate;
    }

    public function getLastAdress(): string
    {
        return $this->lastAddress;
    }

    public function getMaxExperience(): int
    {
        return $this->maxExperience;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getPass(): bool
    {
        return $this->typass;
    }

    public function isOnline(): bool
    {
        return $this->online;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getGroupId(): int
    {
        return $this->groupid;
    }

    public function getName(): string
    {
        return $this->nick;
    }
}
