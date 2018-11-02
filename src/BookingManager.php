<?php

namespace Nfq\Akademija;


class BookingManager
{
    /**
     * @param Room $room
     * @param Reservation $reservation
     * @throws ReservationException
     */
    public static function bookRoom(Room $room, Reservation $reservation): void
    {
        $existingReservations = $room->getReservations();
        $newReservationStartDate = $reservation->getStartDate();
        $newReservationEndDate = $reservation->getEndDate();

        foreach ($existingReservations as $existingReservation) {
            $existingReservationStartDate = $existingReservation->getStartDate();
            $existingReservationEndDate = $existingReservation->getEndDate();

            if ($newReservationStartDate->between($existingReservationStartDate, $existingReservationEndDate)
                || $newReservationEndDate->between($existingReservationStartDate, $existingReservationEndDate)) {
                throw new ReservationException($reservation, $room);
            }
        }

        $room->addReservation($reservation);

        printf("Room <strong>%d</strong> successfully booked for <strong>%s</strong>
from <time>%s</time> to <time>%s</time>! <br>", $room->getRoomNumber(), $reservation->getGuest()->getFullName(), $reservation->getStartDate(true), $reservation->getEndDate(true));
    }
}