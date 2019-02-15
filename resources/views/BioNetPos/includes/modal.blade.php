<!-- modal content -->
<div class="modal fade layout-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div id="modal-title" class="modal-title h4" style="width: 100%; padding: 1px 10px;"></div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="modal-contenido" style="width: 100%;"></div>
            </div>
            <div class="modal-footer text-right">
                <div class="container">
                    <div id="modal-footer" class="row text-righ" style="width: 100%;"></div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- model preloader -->
<div class="modal fade layout-modal-preloader" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                    <div class="card text-center">
                        <div class="card-body bg-info text-white">
                            <div class="p-25">
                                <span><i class="fa fa-spinner fa-spin" style="font-size: 40px;"></i></span>
                                <br /><br />
                                <h4 class="font-lightdisplay-6 m-t-15">Procesando información, espere por favor.</h4>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- /.modal -->

<script id="modal-titulo" type="text/x-handlebars-template">
	@{{ titulo }}
</script>
<script id="modal-mensaje-confirmacion" type="text/x-handlebars-template">
	@{{ mensaje }}
</script>

<script id="modal-mensaje-lista-error" type="text/x-handlebars-template">
    <div class="card border-left border-orange">
            <div class="card-body">
                <div class="d-flex no-block align-items-center">
                    <div>
                        <span class="text-danger display-6" style="font-size: 70px;"><i class="fas fa-exclamation-triangle"></i></span>
                    </div>
                    <div class="ml-auto">
                        <h6 class="text-dark">@{{ mensaje }}</h6>
                        <h6 class="text-dark">
                            <ol>
                                @{{#each asError}}
                                    <li>@{{ this }}</li>
                                @{{/each}}
                            </ol>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
</script>

<script id="modal-mensaje-success" type="text/x-handlebars-template">
    <div class="card border-left border-orange">
            <div class="card-body">
                <div class="d-flex no-block align-items-center">
                    <div>
                        <span class="text-success display-6" style="font-size: 70px;"><i class="fas fa-check-circle"></i></span>
                    </div>
                    <div class="ml-auto">
                        <h6 class="text-dark">@{{ mensaje }}</h6>
                    </div>
                </div>
                <div class="progress m-t-30">
                    <div id="progress-time" class="progress-bar bg-primary active progress-bar-striped" style="width: 0%; height:12px;" role="progressbar"> <span class="sr-only">0%</span> </div>
                </div>
            </div>
        </div>

</script>

<script id="modal-botones" type="text/x-handlebars-template">
    @{{#if btn1}}
    <div class="col-sm">
		<button type="button" class="btn btn-success-modal" onclick="@{{ function1 }}">
			<span class="@{{ icono1 }}"></span>&nbsp;@{{ label1 }}</button>
    </div>
    @{{/if}}
    @{{#if btn2}}
    <div class="col-sm">
		<button type="button" class="btn btn-@{{ tipo2 }}-modal" onclick="@{{ function2 }}">
			<span class="@{{ icono2 }}"></span>&nbsp;@{{ label2 }}</button>
    </div>
    @{{/if}}
    @{{#if btn3}}
    <div class="col-sm">
        <button type="button" class="btn btn-@{{ tipo3 }}-modal" onclick="@{{ function3 }}">
            <span class="@{{ icono3 }}"></span>&nbsp;@{{ label3 }}</button>
    </div>
	@{{/if}}
    <div class="col-sm">
		<button type="button" class="btn btn-secondary-modal" data-dismiss="modal" aria-label="Close">
			<i class="fas fa-times"></i>&nbsp;Cerrar</button>
    </div>
</script>
