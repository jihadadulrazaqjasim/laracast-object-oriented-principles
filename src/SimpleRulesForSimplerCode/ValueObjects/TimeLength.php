<?php

namespace ObjectOrientedPrinciples\SimpleRulesForSimplerCode\ValueObjects;

class TimeLength
{
    protected $seconds;

    private function __construct($seconds)
    {
        $this->seconds = $seconds;
    }

    public static function fromMinutes($minutes)
    {
        return new static($minutes * 60);
    }

    public static function fromHours($hours)
    {
        return new static($hours * 60 * 60);
    }

    public function inSeconds()
    {
        return $this->seconds;
    }

    public function inMinutes()
    {
        return $this->seconds / 60;
    }

    public function inHours()
    {
        return $this->seconds / 60 / 60;
    }
}
