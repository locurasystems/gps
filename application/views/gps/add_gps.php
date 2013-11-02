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