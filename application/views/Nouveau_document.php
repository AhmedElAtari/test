<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Acceuil</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Documents</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Nouveau document</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <h3 class="page-title"> Nouveau Document
            <small>Importer vos documents</small>
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light portlet-fit portlet-datatable">
                    <div class="porlet-body">
                        <div class="portlet light bordered">
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="<?php echo site_url('Document/do_upload');?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Document</label>
                                        <div class="col-md-3">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="input-group input-large">
                                                    <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                                        <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                        <span class="fileinput-filename"> </span>
                                                    </div>
                                                    <span class="input-group-addon btn default btn-file">
                                                        <span class="fileinput-new"> Selectionner </span>
                                                        <span class="fileinput-exists"> Changer </span>
                                                        <input type="file" name="docFile"> </span>
                                                    <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Supprimer </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Nom</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Nom du document">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Type</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Type du document">
                                            </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="col-md-3 control-label">Static Control</label>
                                            <div class="col-md-4">
                                                <p class="form-control-static"> email@example.com </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-4">
                                                <button type="submit" class="btn red-thunderbird">Enregistrer</button>
                                                <button type="button" class="btn default">Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>