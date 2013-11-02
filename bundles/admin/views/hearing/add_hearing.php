<?php echo Section::start('page-header');?>
<div id="page-content" class="clearfix">
    <div class="page-header position-relative">
        <h1>
            Hearing
            <small>
                <i class="icon-double-angle-right"></i>
                Add Hearing
            </small>
        </h1>
    </div>
</div>
<?php Section::stop();?>
<?php echo Section::start('contentWrapper');?>
<?php $status=Session::get('status');
if(isset($status)){ ?>
    <div class="alert-success">
        <span><?php echo $status; ?></span>
    </div>
<?php }?>
<?php echo Section::start('contentWrapper'); ?>

<div class="row-fluid">
    <form class="form-horizontal" action="#">
        <div class="control-group">
            <label class="control-label" for="case_no">Case No.</label>
            <div class="controls">
                <select name="case_no" id="case_no">
                    <option value="">Select Case No.</option>
                    <option value="">233</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="hearing_date">Hearing Date:</label>
            <div class="controls">
                <input type="text" class="datepicker" id="hearing_date" name="hearing_date"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="doc_no">Document No.:</label>
            <div class="controls">
                <input type="text"  id="doc_no" name="doc_no"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="description">Description:</label>
            <div class="controls">
                <textarea name="description" id="description" rows="2"></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="court_hall">Court Hall</label>
            <div class="controls">
                <select name="court_hall" id="court_hall">
                    <option value="">Select Court Hall</option>
                    <option value=""></option>
                </select>
                <span><a href="#">New Court Hall</a></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="judge">Judge:</label>
            <div class="controls">
                <select id="judge" name="judge">
                    <option value="">Select Judge</option>
                    <option value="">hkjhkj</option>
                    </select>
                <span><a href="#">New Judge</a></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="stage">Stage:</label>
            <div class="controls">
                <select id="stage" name="stage">
                    <option value="">Select Stage</option>
                    <option value="">stage1</option>
                </select>
                <span><a href="#">New Stage</a></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="next_hearing_date">Hearing Date:</label>
            <div class="controls">
                <input type="text" class="datepicker" id="next_hearing_date" name="next_hearing_date"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="action_plan">Action Plan</label>
            <div class="controls">
                <textarea name="action_plan" id="action_plan" rows="2"></textarea>
            </div>

        </div>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-primary" type="submit">Add Hearing</button>
               <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </div>

    </form>
</div>
<script type="text/javascript">
       $(function(){
          $('.datepicker').datepicker();
       });
</script>

<?php Section::stop(); ?>
<?php echo render('admin::template.main'); ?>

