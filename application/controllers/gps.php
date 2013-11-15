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
                    $value=$cols;
                    $latitude=number_format($value[2],5,'','');
                    $longitude=number_format($value[4],5,'','');
                    $x=$latitude/10000000;//prints xx.xxxxx
                    $y=$longitude/10000000;//prints xx.xxx
                    $a=$latitude%10000000;//prints decimal values
                    $b=$longitude%10000000;//prints decimal values
                    $a_div=$a/60;
                    $b_div=$b/60;
                    $a_div_round=round($a_div);
                    $b_div_round=round($b_div);
                    $x_mod=$x%100;
                    $y_mod=$y%100;
                    $lat=$x_mod.'.'.$a_div_round;
                    $lng=$y_mod.'.'.$b_div_round;
                    $lat_value=array(2=>$lat);
                    $lng_value=array(4=>$lng);
                    $op=json_encode(array_replace($value,$lat_value,$lng_value));
                    array_push($history,$op);
            }
        }
        $history1=json_encode($history);
            $data=array(
            'vehicle_no'=>$vehicle_no,
            'gps_history'=>$history1
        );
        $res=Gps::addgps($data);
        return Redirect::back()
            ->with('status','Gps Added successfully');
    }

}