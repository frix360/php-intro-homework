<?php

namespace Nfq\Akademija;


use Carbon\Carbon;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct($startDate, $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("Reservation - from %s to %s from %s", $this->startDate, $this->endDate, $this->guest->getFullName());
    }

    /**
     * @param bool $formatDate
     * @return mixed
     */
    public function getStartDate($formatDate = false)
    {

        return $formatDate ? Carbon::parse($this->startDate)->format('Y-m-d') : Carbon::parse($this->startDate);
    }

    /**
     * @param bool $formatDate
     * @return mixed
     */
    public function getEndDate($formatDate = false)
    {
        return $formatDate ? Carbon::parse($this->endDate)->format('Y-m-d') : Carbon::parse($this->endDate);
    }

    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }
}