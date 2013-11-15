<?php
<<<<<<< HEAD
/**
 * Created by JetBrains PhpStorm.
 * User: bhoo
 * Date: 11/15/13
 * Time: 12:51 PM
 * To change this template use File | Settings | File Templates.
 */

class Map
{

    var $code =''; // Do not edit this.
    var $zoom =14; // Zoom Level.
    var $center_lat ='28.022900221052016'; // google map center location latitude
    var $center_lng ='73.3011245727539'; // google map center longitutde
    var $divID ='map'; // Div id for the map
    var $marker =array();
    var $instance =1;
=======
class Map
{

    var $code       ='';  // Do not edit this.
    var $zoom       =14; // Zoom Level.
    var $center_lat ='28.022900221052016'; // google map center location latitude
    var $center_lng ='73.3011245727539'; // google map center longitutde
    var $divID      ='map'; // Div id for the map
    var $marker     =array();
    var $instance   =1;
>>>>>>> 4f1154212ac0f5fce2002beb938b0c821616cfa7
    function __construct()
    {
        echo '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>';
    }
    // Intialized google map scripts.
    private function start()
    {

        $this->code='
<<<<<<< HEAD
<script type="text/javascript">
(function() {
window.onload = function(){
// Creating a LatLng object containing the coordinate for the center of the map
var latlng = new google.maps.LatLng('.$this->center_lat.', '.$this->center_lng.');
// Creating an object literal containing the properties we want to pass to the map
var options = {
zoom: '.$this->zoom.',
center: latlng,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
// Calling the constructor, thereby initializing the map
var map = new google.maps.Map(document.getElementById("'.$this->divID.'"), options); ';
=======
        <script type="text/javascript">
      (function() {
        window.onload = function(){
            // Creating a LatLng object containing the coordinate for the center of the map
          var latlng = new google.maps.LatLng('.$this->center_lat.', '.$this->center_lng.');
          // Creating an object literal containing the properties we want to pass to the map
          var options = {
              zoom: '.$this->zoom.',
              center: latlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          // Calling the constructor, thereby initializing the map
          var map = new google.maps.Map(document.getElementById("'.$this->divID.'"), options); ';
>>>>>>> 4f1154212ac0f5fce2002beb938b0c821616cfa7


        for($i=0;$i<count($this->marker);$i++)
        {

            $this->code.=' var marker'.$i.' = new google.maps.Marker({
<<<<<<< HEAD
position: new google.maps.LatLng('.$this->marker[$i]['lat'].', '.$this->marker[$i]['lng'].'),
map: '.$this->marker[$i]['map'].',
title: "'.$this->marker[$i]['title'].'",
clickable: '.$this->marker[$i]['click'].',
icon: "'.$this->marker[$i]['icon'].'"
});';
=======
                position: new google.maps.LatLng('.$this->marker[$i]['lat'].', '.$this->marker[$i]['lng'].'),
                map: '.$this->marker[$i]['map'].',
                title: "'.$this->marker[$i]['title'].'",
                clickable: '.$this->marker[$i]['click'].',
                icon: "'.$this->marker[$i]['icon'].'"
              });';
>>>>>>> 4f1154212ac0f5fce2002beb938b0c821616cfa7

            // Creating an InfoWindow object
            if($this->marker[$i]['info']!='')
            {
                $this->code.=' var infowindow'.$i.' = new google.maps.InfoWindow({content: "'.$this->marker[$i]['info'].'"}); ';
                $this->code.=" google.maps.event.addListener(marker".$i.", 'click', function() { infowindow".$i.".open(map, marker".$i."); });";
            }
        }


<<<<<<< HEAD
        $this->code.=' }
})();
</script>';
=======
        $this->code.='    }
      })();
        </script>';
>>>>>>> 4f1154212ac0f5fce2002beb938b0c821616cfa7

    }

    // Add markers to google map.

    public function addMarker($lat='14.0730',$lng='56.0848',$click='false',$title='My WorkPlace',$info='Hello World',$icon='',$map='map')
    {
        $count=count($this->marker);
        $this->marker[$count]['lat']=$lat;
        $this->marker[$count]['lng']=$lng;
        $this->marker[$count]['map']=$map;
        $this->marker[$count]['title']=$title;
        $this->marker[$count]['click']=$click;
        $this->marker[$count]['icon']=$icon;
        $this->marker[$count]['info']=$info;
    }

    // Call this function to create a google map.

    public function display()
    {
        $this->start();
        $this->instance++;
        return $this->code;
    }
}


?>
?>