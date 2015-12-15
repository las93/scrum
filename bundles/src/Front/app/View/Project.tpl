{include file='/src/Front/View/ProjectMenu.tpl'}
<!-- Main content -->
                <section class="content">
                    <h4 class="page-header">
                        {gettext word='AllThemes'}
                        <small>{gettext word='TheThemeContainEpic'}</small>
                    </h4>
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        {foreach from=$aProjects key=$iKey item=$oProject}
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box {$oProject->get_color()}">
                                    <div class="inner">
                                        <h3>
                                            {$aCountEpics.$oProject->get_id()}
                                        </h3>
                                        <p>
                                            {$oProject->get_name()}
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion {$oProject->get_icon()}"></i>
                                    </div>
                                    <a href="{url alias='theme' id=$oProject->get_id()}" class="small-box-footer">
                                        {gettext word='MoreInfo'} <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div><!-- ./col -->
                        {/foreach}
                    </div><!-- /.row -->
                </section>