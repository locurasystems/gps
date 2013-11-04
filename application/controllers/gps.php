<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 11/2/13
 * Time: 4:08 PM
 * To change this template use File | Settings | File Templates.
 */

class Gps_Controller extends Base_Controller {
    public $restful=true;
    public function get_Index()
    {
        return View::make('gps.add_gps');
    }
    public function post_AddGps()
    {
        $vehicle_no=Input::get('vehicle_no');
        $file=Input::file('file_data');
        $path=$file['tmp_name'];
        $history=array();
        if($path!=NULL)
        {
            $handle=fopen($path,'r');
            while(($cols = fgetcsv($handle,1000,',')) !== FALSE)
            {
                    $value=json_encode($cols);
                    array_push($history,$value);
            }
        }
        $history1=json_encode($history);

        $data=array(
            'vehicle_no'=>$vehicle_no,
            'gps_history'=>$history1
        );
        $res=Gps::addgps($data);
        return Redirect::back();
    }


}