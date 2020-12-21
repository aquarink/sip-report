<div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                    <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons visible-on-sidebar-mini">view_list</i>
                </button>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> List Client</a>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="green">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">List Client</h4>
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Context</th>
                                            <th>Last Login</th>
                                            <th>Date</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Username</th>
                                            <th>Token</th>
                                            <th>Last Login</th>
                                            <th>Created at</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php if(count($client_list) > 0) { foreach($client_list as $key => $client) { ?>
                                        <tr>
                                            <td><?php echo $client->uname; ?></td>
                                            <td><?php echo $client->context; ?></td>
                                            <td><?php echo $client->last_login; ?></td>
                                            <td><?php echo $client->created_at; ?></td>
                                            <td class="text-right">
                                                <a href="<?php echo base_url('client-edit?id='.$client->uname); ?>" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i> Edit</a>
                                                <a href="<?php echo base_url('client-delete?id='.$client->uname); ?>" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i> Delete</a>
                                            </td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>

                                <a class="btn btn-info" href="<?php echo base_url('client-add'); ?>">Add New Client</a>
                            </div>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <p class="copyright pull-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="http://www.waktu.my.id/">Pebri Waktu.my.id</a>
            </p>
        </div>
    </footer>
</div>