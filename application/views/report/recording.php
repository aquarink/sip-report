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
                <a class="navbar-brand" href="#"> Recoding of Call</a>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="green">
                            <i class="material-icons">record_voice_over</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Recoding of Call</h4>
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>From</th>
                                            <th>Dest</th>
                                            <th>Context</th>
                                            <th>Chanel</th>
                                            <th>Dest Chanel</th>
                                            <th>SIP</th>
                                            <th colspan="2">Voice Recording</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php if(count($cdr_list) > 0) { foreach($cdr_list as $key => $cdr) { ?>
                                        <tr>
                                            <td><?php echo $cdr->src; ?></td>
                                            <td><?php echo $cdr->dst; ?></td>
                                            <td><?php echo $cdr->dcontext; ?></td>
                                            <td><?php echo $cdr->channel; ?></td>
                                            <td><?php echo $cdr->dstchannel; ?></td>
                                            <td><?php echo $cdr->lastdata; ?></td>

                                            <?php if($cdr->recordingfile != '') { ?>
                                            <td>
                                                <button class="btn btn-danger" onclick="playWAV('<?php echo urlencode(str_replace('/var/spool/asterisk/monitor/', '', $cdr->recordingfile)); ?>');">
                                                    <i class="material-icons">play_arrow</i> Play
                                                </button>
                                            </td>

                                            <td>
                                                <a class="btn btn-info" href="<?php echo base_url('client-recording?voice='.urlencode(str_replace('/var/spool/asterisk/monitor/', '', $cdr->recordingfile))); ?>">
                                                    <i class="material-icons">cloud_download</i> Download
                                                </a>
                                            </td>
                                            <?php } else { ?>
                                            <td>
                                                <button class="btn btn-default">
                                                    <i class="material-icons">shuffle</i>
                                                </button>
                                            </td>

                                            <td>
                                                <a class="btn btn-default" href="#">
                                                    <i class="material-icons">cloud_off</i>
                                                </a>
                                            </td>
                                            <?php } ?>
                                            <td><?php echo $cdr->calldate; ?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
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