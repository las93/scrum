{include file='/src/Front/View/ProjectMenu.tpl'}
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <h2 class="page-header">{gettext word='AllEpicsForThisTheme'}</h2>
                    <div class="row">
 
                        {foreach from=$aEpics key=$iKey item=$oEpic}
                            <div class="col-md-6">
                                <div class="box {$oEpic->get_color()}">
                                    <div class="box-header">
                                        <i class="fa fa-bullhorn"></i>
                                        <h3 class="box-title">{$oEpic->get_name()}</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="callout callout-info">
                                            <h4>{gettext word='Description'}</h4>
                                            <p>{if $oEpic->get_content()}{$oEpic->get_content()}{else}...{/if}</p>
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div><!-- /.col -->
                        {/foreach}
                     
                    </div> <!-- /.row -->
               </section>