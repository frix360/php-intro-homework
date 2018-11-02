<?php

namespace Nfq\Akademija;


class ReservationException extends \Exception
{


    private $reservation;
    private $room;

    public function __construct(Reservation $reservation, Room $room)
    {
        $this->reservation = $reservation;
        $this->room = $room;
    }

    public function getErrorMessage()
    {
        return sprintf("Reservation for room %d already exists for this time period (from %s to %s)", $this->room->getRoomNumber(), $this->reservation->getStartDate(true), $this->reservation->getEndDate(true));
    }

}