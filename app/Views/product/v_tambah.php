<!-- general form elements -->
<div class="card card-primary" style="width: 600px;">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="<?= base_url('product/save') ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>Product Name</label>
                <input name="p_name" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label>Product Description</label>
                <input name="p_description" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
<!-- /.card -->