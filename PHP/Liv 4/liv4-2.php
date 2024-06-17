<?php

// Data la seguente interfaccia e classe astratta, implementare due classi concrete per ottenere il risultato indicato

interface IPlayer
{
    public static function play();
}

abstract class Player implements IPlayer
{
    public static function play() {
        echo "Playing...". get_called_class() .PHP_EOL;
    }
}

// soluzione livello 4-2 


class YoutubePlayer extends Player
{
    protected static function getPlatformName() {
        return "Youtube";
    }
}

class SpotifyPlayer extends Player
{
    protected static function getPlatformName() {
        return "Spotify";
    }
}

YoutubePlayer::play();
SpotifyPlayer::play();

