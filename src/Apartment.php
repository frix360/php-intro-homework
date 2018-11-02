<?php

namespace Nfq\Akademija;

class Apartment extends Room
{

    /**
     * @return int
     */
    function getRoomType()
    {
        return RoomType::Diamond;
    }

    /**
     * @return bool
     */
    function getHasRestroom()
    {
        return true;
    }

    /**
     * @return bool
     */
    function getHasBalcony()
    {
        return true;
    }

    /**
     * @return int
     */
    function getBedCount()
    {
        return 4;
    }

    /**
     * @return array
     */
    function getExtras()
    {
        return ['TV', 'air-conditioner', 'refrigerator', 'kitchen box', 'mini-bar', 'bathtub', 'free Wi-fi'];
    }
}