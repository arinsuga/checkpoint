<?php

namespace Arins\Fo\Repositories\Attend;

use Arins\Repositories\Data\DataRepositoryInterface;

//Inherit interface to DataRepositoryInterface
interface AttendRepositoryInterface extends DataRepositoryInterface
{
    function getAttendanceByUserIdAndDate($parUserId, $parAttend_dt = null);
    function getAttendancesByUserIdAndDate($parUserId, $parAttend_dt = null);
    function getAttendancesCustomFilter($parUserId, $parCheckpoint_dt1, $parCheckpoint_dt2);
    function getOutstandingCheckoutByUserId($parUserId);
}