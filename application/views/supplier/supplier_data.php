<section class="content-header">
    <h1>
        Suppliers
        <small>Pemasok Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('Supplier') ?>"><i class="fa fa-user"></i> Suppliers</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?= $this->session->flashdata('message'); ?>
                    <h3 class="box-title">Data Supplier</h3>
                    <div class="pull-right">
                        <a href="<?= site_url('Supplier/add') ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"> Add</i></a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($row->result() as $key => $data) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->phone ?></td>
                                    <td><?= $data->address ?></td>
                                    <td><?= $data->description ?></td>
                                    <td class="text-center">
                                        <a href="<?= site_url('Supplier/edit/' . $data->supplier_id) ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"> Edit</i></a>
                                        <a href="<?= site_url('Supplier/delete/' . $data->supplier_id) ?>" onclick="return confirm('Are you sure you delete it?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"> Delete</i></a>
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

        </div>
</section>