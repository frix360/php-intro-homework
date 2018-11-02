<?php

namespace Nfq\Akademija;


class SingleRoom extends Room
{
    /**
     * @return int
     */
    function getRoomType()
    {
        return RoomType::Standard;
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
        return false;
    }

    /**
     * @return int
     */
    function getBedCount()
    {
        return 1;
    }

    /**
     * @return array
     */
    function getExtras()
    {
        return ['TV', 'air-conditioner'];
    }
}