
<form class="form-horizontal" method="post" action="<?php echo base_url("Books/insert_data"); ?>">
    <div class="box-body">
        <div class="form-group">
            <label for="firstName" class="col-sm-2 control-label">Book Name</label>
            <div class="col-sm-10">
                <input class="form-control" name="bookName" id="bookName" required="required"
                       placeholder="Enter Book Name" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-2 control-label">Author Name</label>
            <div class="col-sm-10">
                <input class="form-control" name="authName" id="authName" required="required"
                       placeholder="Enter Author Name" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Publish Date</label>
            <div class="col-sm-10">
                <input class="form-control" name="date" id="date" required="required" type="date">
            </div>
        </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Add</button>
    </div>
    <!-- /.box-footer -->
</form>