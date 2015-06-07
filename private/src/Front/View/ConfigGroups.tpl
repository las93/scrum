{include file='/src/Front/View/ProjectMenu.tpl'}
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">{gettext word='Groups'} <a href="{url alias='setup_group_add'}"><i class="fa fa-plus"></i></a></h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="{gettext word='Search'}"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>{gettext word='Id'}</th>
                                            <th>{gettext word='Group'}</th>
                                            <th>{gettext word='Type'}</th>
                                            <th>{gettext word='Users'}</th>
                                            <th>{gettext word='Options'}</th>
                                        </tr>
                                        {foreach from=$aRoles key=$iKey item=$oRole}
                                        <tr>
                                            <td>{$oRole->get_id()}</td>
                                            <td>{$oRole->get_name()}</td>
                                            <td>{$oRole->get_type()}</td>
                                            <td>{*$oUserStory->get_name()*}</td>
                                            <td></td>
                                        </tr>
                                        {/foreach}
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                     
                    </div> <!-- /.row -->
               </section>