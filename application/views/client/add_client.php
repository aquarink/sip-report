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
                <a class="navbar-brand" href="#"> Regular Forms </a>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="post" action="<?php echo base_url('client-submit'); ?>" class="form-horizontal">
                            <div class="card-header card-header-text" data-background-color="blue">
                                <h4 class="card-title">Create Client Data</h4>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Username</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" required="" name="usernameCreate">
                                            <span class="help-block">Enter username for auth client</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Password</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" required="" name="passwordCreate">
                                            <span class="help-block">Enter password for auth client</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Context</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <select class="selectpicker" title="Choose Context" required="" name="contextCreate">
                                                <option disabled> Choose context</option>
                                                <?php if(count($context_list) > 0) { foreach($context_list as $key => $ctx) { ?>
                                                <option value="<?php echo $ctx->data ?>"><?php echo $ctx->data ?></option>
                                                <?php } } ?>
                                            </select>
                                            <span class="help-block">Choose context for auth client</span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-fill btn-info">Create Client</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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