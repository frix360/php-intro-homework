<?php

use Nfq\Akademija\BookingManager;
use Nfq\Akademija\Guest;
use Nfq\Akademija\Reservation;
use Nfq\Akademija\ReservationException;
use Nfq\Akademija\SingleRoom;

require_once __DIR__ . '/vendor/autoload.php';


$room = new SingleRoom(1408, 99);
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new \DateTime('2018-11-01');
$endDate = new \DateTime('2018-11-05');
$reservation = new Reservation($startDate, $endDate, $guest);
$reservation2 = new Reservation('2018-10-30', '2018-11-02', $guest);
try {
    BookingManager::bookRoom($room, $reservation);
} catch (ReservationException $e) {
    echo $e->getErrorMessage();
}

try {
    BookingManager::bookRoom($room, $reservation2); // Will throw an exception
} catch (ReservationException $e) {
    echo $e->getErrorMessage();
}









