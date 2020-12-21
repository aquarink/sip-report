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
                <a class="navbar-brand" href="#"> Dashboard </a>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">perm_phone_msg</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Last Call</p>
                            <h3 class="card-title">
                                <?php if(count($last_call) > 0) { foreach ($last_call as $key => $val) { echo $val->dst; }} ?>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">perm_phone_msg</i> Dial History
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">av_timer</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Total Duration</p>
                            <h3 class="card-title">
                                <?php if(count($total_duration) > 0) { foreach ($total_duration as $key => $val) { echo number_format($val->total_duration); }} ?>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">av_timer</i> Dial History
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">attach_money</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Bill Sec</p>
                            <h3 class="card-title">
                                <?php if(count($total_billsec) > 0) { foreach ($total_billsec as $key => $val) { echo number_format($val->total_billsec); }} ?>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">attach_money</i> Dial History
                            </div>
                        </div>
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
    
            