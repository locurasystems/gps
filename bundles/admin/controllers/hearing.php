<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 11/1/13
 * Time: 4:13 PM
 * To change this template use File | Settings | File Templates.
 */

class Admin_Hearing_Controller extends Admin_Base_Controller {
    public $restful=true;
    public function get_Index()
    {
        return View::make('admin::hearing.add_hearing');
    }

}