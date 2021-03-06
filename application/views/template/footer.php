    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.select-bootstrap.js"></script>-->
<!-- Select Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<!-- <script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.datatables.js"></script> -->

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


<!-- Sweet Alert 2 plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>

<script type="text/javascript">
    function playWAV(path) {
        if (typeof window.Audio === 'function') {
            var audioElem = new Audio();
            audioElem.src = '<?php echo base_url('client-recording?voice='); ?>'+path;
            audioElem.play();
        }
    }
</script>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>