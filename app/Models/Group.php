<?php

namespace App\Models;

enum Group: int
{
    case PLAYER = 0;

    case COAL = 1;
    case GLORY = 2;
    case CRYSTAL = 3;
    case PLATINUM = 4;
    case NITRO = 5;

    case TESTER = 10;
    case MEDIA = 11;
    case BUILDER = 12;

    case HELPER = 30;
    case MODER = 35;

    case CURATOR = 40;
    case DEVELOPER = 90;
    case OWNER = 100;

    public function getName(): string
    {
        return match ($this) {
            Group::OWNER => 'Владелец',
            Group::DEVELOPER => 'Разработчик',
            Group::CURATOR => 'Куратор',
            Group::MODER => 'Модератор',
            Group::HELPER => 'Хелпер',
            Group::BUILDER => 'Билдер',
            Group::MEDIA => 'Ютубер',
            Group::TESTER => 'Тестер',
            Group::NITRO => 'Nitro',
            Group::PLATINUM => 'Platinum',
            Group::CRYSTAL => 'Crystal',
            Group::GLORY => 'Glory',
            Group::COAL => 'Coal',
            Group::PLAYER => 'Игрок',
        };
    }


    public function getColor(): string
    {
        return match ($this) {
            Group::OWNER => '#FF5555',
            Group::DEVELOPER => '#5555FF',
            Group::CURATOR => '#FF55FF',
            Group::MODER => '#5555FF',
            Group::HELPER => '#55FFFF',
            Group::BUILDER => '#00AA00',
            Group::MEDIA => '#FF5555',
            Group::TESTER => '#55FF55',
            Group::NITRO => '#FF5555',
            Group::PLATINUM => '#55FFFF',
            Group::CRYSTAL => '#FF55FF',
            Group::GLORY => '#FFAA00',
            Group::COAL => '#e5e569',
            Group::PLAYER => '#AAAAAA',
        };
    }
}
