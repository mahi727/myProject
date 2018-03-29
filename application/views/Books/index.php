<!--successfull msg-->
<?php
if ($this->session->flashdata('success_msg')) {
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg'); ?>
    </div>
    <?php
}
?>
<!--error msg-->
<?php
if ($this->session->flashdata('error_msg')) {
    ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_msg'); ?>
    </div>
    <?php
}
?>


<div class="box-body">
    <?php echo anchor(base_url("Books/add"), 'add new', array('class' => 'btn btn-info pull-left', 'title' => 'add_new',)); ?>
</div>


<div class="container">
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Publish Date</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($books as $book) { ?>
        <tr>
            <td> <?php echo $book->id; ?> </td>
            <td> <?php echo $book->book_name; ?> </td>
            <td> <?php echo $book->auth_name; ?> </td>
            <td> <?php echo $book->publish_date; ?> </td>
            <td>
                <?php echo anchor(base_url("Books/view/".$book->id), '<span class="glyphicon glyphicon-eye-open"></span>',
                    array('class' => 'btn', 'title' => 'view',)); ?>
                <?php echo anchor(base_url("Tables/edit/".$book->id), '<span class="glyphicon glyphicon-edit"></span>',
                    array('class' => 'btn', 'title' => 'edit',)); ?>
                <?php echo anchor(base_url("Tables/delete/".$book->id), '<span class="glyphicon glyphicon-trash"></span>',
                    array('class' => 'btn', 'title' => 'delete', 'onclick' => 'myFunction()')); ?>
            </td>
            <?php } ?>
        </tr>
        </tbody>
    </table>
</div>


<script>
    function myFunction() {
        alert("Delete row!");
    }
</script>