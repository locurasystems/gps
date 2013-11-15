<div class="span4 row-fluid">
    <form action="<?php echo URL::to_route('Gps'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="control-group">
            <label class="control-label" for="vehicle_no">Vehicle no.</label>
            <div class="controls">
                <input type="text" name="vehicle_no" id="vehicle_no"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="file_data">Select File:</label>
            <div class="controls">
                <input type="file" name="file_data" id="file_data"/>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-primary" type="submit">Add File</button>

            </div>
        </div>
    </form>
</div>
<html>
<body>
<div id="map" style="width:400px; height:400px;" >
    <?php
    $map=new Map();
    $map->center_lat='28.022900221052016'; // set latitude for center location
    $map->center_lng='73.3011245727539'; // set langitude for center location
    $map->zoom=14;

    //marker information

    // marker 1
    $lat='28.022900221052016'; // latitude
    $lng='73.3011245727539'; // longitude
    $isclickable='true';
    $title="Truck no:8428423";
    $info='<b>DATE</b> 24-Aug-1990 <br/> <b>TIME</b> 12:00 AM jediehdoewh';
    $map->addMarker($lat,$lng,$isclickable,$title,$info);


    // marker 2
    $lat='28.011100221052016'; // latitude
    $lng='73.3011245727539'; // longitude
    $isclickable='true';
    $title="Truck no:7863872";
    $info='<b>DATE</b> 24-Aug-1990 <br/> <b>TIME</b> 12:00 AM jediehdoewh';
    $icon='';
    $map->addMarker($lat,$lng,$isclickable,$title,$info,$icon);

    echo $map->display();
    ?>
</div>

</body>
</html>