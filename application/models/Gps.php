<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 11/2/13
 * Time: 5:25 PM
 * To change this template use File | Settings | File Templates.
 */

class Gps extends Eloquent {
    public static $table='vehicle_data';
public static function addgps($data)
{
    $res=DB::table(self::$table)
        ->insert($data);
    return $res;
}
}