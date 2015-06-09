{include file='/src/Front/View/ProjectMenu.tpl'}
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <div class="row">
                        {if $app.get.msg}
                            <div class="alert alert-success alert-dismissable">
                                <i class="fa fa-check"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <b>{$app.get.msg}!</b>
                            </div>
                        {/if}
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
                                            <th>{gettext word='Role'}</th>
                                            <th>{gettext word='Login'}</th>
                                            <th>{gettext word='Lastname'}/{gettext word='Firstname'}</th>
                                            <th>{gettext word='Login'}</th>
                                            <th>{gettext word='Options'}</th>
                                        </tr>
                                        {foreach from=$aRoles key=$iKey item=$oRole}
                                        <tr>
                                            <td>{$oRole->get_id()}</td>
                                            <td>{$oRole->get_name()}</td>
                                            <td>{$oRole->get_type()}</td>
                                            <td>{foreach from=$oRole->get_user() key=$iKey2 item=$oUser}{$oUser->get_login()} {/foreach}</td>
                                            <td>
                                                <a href="{url alias='setup_group_update' id=$oRole->get_id()}"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="javascript:void(0);" onClick="if (confirm('{gettext word='WouldYouReallyDeleteIt'}')) { window.location.href='{url alias='setup_groups'}?delete={$oRole->get_id()}'; }"><i class="fa fa-ban"></i></a>
                                            </td>
                                        </tr>
                                        {/foreach}
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                     
                    </div> <!-- /.row -->
               </section>