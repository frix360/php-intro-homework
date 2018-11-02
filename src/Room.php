<?php

namespace Nfq\Akademija;

abstract class Room implements ReservableInterface
{
    protected $roomNumber;
    protected $price;
    protected $reservations = [];

    public function __construct($roomNumber, $price)
    {
        $this->roomNumber = $roomNumber;
        $this->price = $price;
    }

    /**
     * @return int
     */
    abstract function getRoomType();

    /**
     * @return boolean
     */
    abstract function getHasRestroom();

    /**
     * @return boolean
     */
    abstract function getHasBalcony();

    /**
     * @return int
     */
    abstract function getBedCount();

    /**
     * @return array
     */
    abstract function getExtras();

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @param $reservation
     */
    public function addReservation($reservation): void
    {
        $this->reservations[] = $reservation;
    }

    /**
     * @param $reservation
     */
    public function removeReservation($reservation): void
    {
        $this->reservations = array_filter($this->reservations, function ($a) use ($reservation) {
            return $a !== $reservation;
        });
    }

    public function __toString()
    {
        return sprintf("Room - number: %d, price: %d", $this->roomNumber, $this->price);
    }

}