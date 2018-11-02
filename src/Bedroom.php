<?php

namespace Nfq\Akademija;

class Bedroom extends Room
{

    /**
     * @return int
     */
    function getRoomType()
    {
        return RoomType::Gold;
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
        return 2;
    }

    /**
     * @return array
     */
    function getExtras()
    {
        return ['TV', 'air-conditioner', 'refrigerator', 'minibar', 'bathtub' ];
    }
}