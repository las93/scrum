{include file='/src/Front/View/ProjectMenu.tpl'}
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">{gettext word='AllUserStoriesForThisEpic'}</h3>
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
                                            <th>{gettext word='User'}</th>
                                            <th>{gettext word='UserStory'}</th>
                                            <th>{gettext word='Date'}</th>
                                            <th>{gettext word='Status'}</th>
                                            <th>{gettext word='Task'}</th>
                                        </tr>
                                        {foreach from=$aUserStories key=$iKey item=$oUserStory}
                                        <tr>
                                            <td>{$oUserStory->get_id()}</td>
                                            <td>{$oUserStory->get_user()->get_login()}</td>
                                            <td>{$oUserStory->get_name()}</td>
                                            <td>{$oUserStory->get_date_create()}</td>
                                            <td><span class="label {$oUserStory->get_statut()->get_color()}">{$oUserStory->get_statut()->get_name()}</span></td>
                                            <td>{$oUserStory->count}</td>
                                        </tr>
                                        {/foreach}
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                     
                    </div> <!-- /.row -->
               </section>