<!doctype html>
<html lang="en">
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>VOIP Reporting</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/google-roboto-300-700.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com/" class="simple-text">
                    Report Panel
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="http://www.creative-tim.com/" class="simple-text">
                    Ct
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <!-- <div class="photo">
                        <img src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/img/faces/avatar.jpg" />
                    </div> -->
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <?php if($this->session->userdata('uname') != '') { echo strtoupper($this->session->userdata('uname')); } ?>
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#"><?php if($this->session->userdata('role') != '') { echo strtoupper($this->session->userdata('role')); } ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('auth-logout'); ?>">Signout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php $sg = $this->uri->segment(1); ?>

                <ul class="nav">
                    <li <?php if($sg == 'dashboard') { echo 'class="active"'; } ?>>
                        <a href="<?php echo base_url(); ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <?php if($this->session->userdata('role') == 'admin') { ?>
                    <li <?php if($sg == 'client-manage' || $sg == 'client-add') { echo 'class="active"'; } ?>>
                        <a href="<?php echo base_url('client-manage'); ?>">
                            <i class="material-icons">supervisor_account</i>
                            <p>Client Manage</p>
                        </a>
                    </li>
                    <?php } ?>
                    <li <?php if($sg == 'client-report') { echo 'class="active"'; } ?>>
                        <a href="<?php echo base_url('client-report'); ?>">
                            <i class="material-icons">book</i>
                            <p>Report</p>
                        </a>
                    </li>
                    <li <?php if($sg == 'client-voice') { echo 'class="active"'; } ?>>
                        <a href="<?php echo base_url('client-voice'); ?>">
                            <i class="material-icons">settings_voice</i>
                            <p>Voice Recording</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>