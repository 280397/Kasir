<section class="content-header">
    <h1>
        Users

    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('User') ?>"><i class="fa fa-user"></i> Users</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add User</h3>
                    <div class="pull-right">
                        <a href="<?= site_url('User') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"> Back</i></a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" value="<?= set_value('name') ?>" id="name" name="name" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username *</label>
                                    <input type="text" class="form-control" value="<?= set_value('username') ?>" id="username" name="username" required autofocus>
                                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input type="password" class="form-control" id="password" name="password" required autofocus>
                                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="passwordconf">Password Confirmation *</label>
                                    <input type="password" class="form-control" id="passwordconf" name="passwordconf" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address *</label>
                                    <textarea type="text" class="form-control" id="address" name="address" required autofocus><?= set_value('address') ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="level">Level *</label>
                                    <select name="level" class="form-control" required autofocus>
                                        <option value="">- Pilih -</option>
                                        <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                        <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"> Save</i></button>
                                    <button type="reset" class="btn"><i class="fa fa-undo"> Reset</i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>

        </div>
</section>