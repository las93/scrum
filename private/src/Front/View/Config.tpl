{include file='/src/Front/View/ProjectMenu.tpl'}
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="{url alias='setup_groups'}"><i class="fa fa-group"></i> <span>{gettext word='ManageGroups'}</span></a>       
                        </div>      
                        <div class="col-xs-12">
                            <a href="{url alias='setup_users'}"><i class="fa fa-group"></i> <span>{gettext word='ManageUsers'}</span></a>       
                        </div>          
                    </div> <!-- /.row -->
               </section>