    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">

                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Online Store Visitors</h3>
                        <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kabupaten</th>
                                <th>Jenis Data</th>
                                <th>Tahun 2015</th>
                                <th>Tahun 2016</th>
                                <th>Tahun 2017</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($product as $key => $values) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $values['Kabupaten']; ?></td>
                                    <td><?= $values['Jenis']; ?></td>
                                    <td><?= $values['2015']; ?></td>
                                    <td><?= $values['2016']; ?></td>
                                    <td><?= $values['2017']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- /.d-flex -->

                    <!-- /.card -->

                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <!-- BAR CHART -->
                    <canvas id="barChart" style="
                          min-height: 250px;
                          height: 250px;
                          max-height: 250px;
                          max-width: 100%;
                        "></canvas>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.row -->