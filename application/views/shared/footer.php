
        <div class="page-footer">
            <div class="page-footer-inner"> 2019 &copy; by Ahmed.E</div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>


        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->


        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url();?>assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!-- <script src="<?php echo base_url();?>assets/pages/scripts/table-datatables-ajax.min.js" type="text/javascript"></script> -->
        <!-- END PAGE LEVEL SCRIPTS -->
        
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url();?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                $('#docsTable').dataTable({
                    "language": {
                        "aria": {
                            "sortAscending": ": activate to sort column ascending",
                            "sortDescending": ": activate to sort column descending"
                        },
                        "emptyTable": "No data available in table",
                        "info": "Affichage _START_ sur _END_ de _TOTAL_ enregistrements",
                        "infoEmpty": "No entries found",
                        "infoFiltered": "(filtered1 from _MAX_ total entries)",
                        "lengthMenu": "_MENU_ enregistrements",
                        "search": "Recherche ",
                        "zeroRecords": "No matching records found"
                    },
                    searching: true,
                    paging: true,
                    ordering: true,
                    // lengthChange: false,
                    // autoWidth: false,
                    buttons: true,
                    responsive: true,
                    pageLength: 10,
                    info: true,
                    rowId: 'id_fichier',
                    columns : [
                        // {data:'id_fichier', title: "ID", visible: false, orderable: false},
                        {data:'nom', title: "Nom"},
                        {data:'taille', title: "Taille"},
                        {data:'format', title: "Format", render : (data, type, row, meta)=>{
                            switch (data) {
                                case 'JPEG':
                                    return '<i class="fa fa-file-pdf-o"></i> '+ data;
                                    break;
                                default:
                                    return data;
                                    break;
                            }
                        }},
                        {data:'date', title: "Date de dépot"}
                    ],
                    ajax : '<?=site_url('document/docList')?>'
                });
            });
        </script>


    </body>

</html>