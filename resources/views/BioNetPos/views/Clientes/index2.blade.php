@extends('layouts.BioNetPos.base')
@section('title','BioNet')
@section('css_content')
@endsection

@section('content')
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Artículos</h3>
        <h5 class="card-subtitle">Estos son los artículos en el sistema. <small></small></h5>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true"><span class="hidden-sm-up">
            <i class="mdi mdi-shopping"></i></span><span class="hidden-xs-down">Surtido de artículos</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#modificadores" role="tab" aria-selected="false"><span class="hidden-sm-up">
            <i class="ti-book"></i></span> <span class="hidden-xs-down">Modificadores</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#categorias" role="tab" aria-selected="false"><span class="hidden-sm-up">
            <i class="mdi mdi-animation"></i></span> <span class="hidden-xs-down">Categorias</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#marcas" role="tab" aria-selected="false"><span class="hidden-sm-up">
            <i class="mdi mdi-shield-outline"></i></span> <span class="hidden-xs-down">Marcas</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#descuentospromociones" role="tab" aria-selected="false"><span class="hidden-sm-up">
            <i class="mdi mdi-sale"></i></span> <span class="hidden-xs-down">Descuentos y promociones</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#impuestos" role="tab" aria-selected="false"><span class="hidden-sm-up">
            <i class="mdi mdi-content-paste"></i></span><span class="hidden-xs-down">Impuestos</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#unidadesmedida" role="tab" aria-selected="false"><span class="hidden-sm-up">
            <i class="mdi mdi-vector-polyline"></i></span> <span class="hidden-xs-down">Unidades de Medida</span></a>
          </li>
        </ul>
        <div class="tab-content tabcontent-border">
          <div class="tab-pane active show" id="home" role="tabpanel">
            <div class="p-20">
              <h4>Artículos</h4>
              <h5><small>Crea, elimina y edita artículos.</small></h5>
              <div class="row">
                <!-- Column -->
                <div class="col-md-9 col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="button-group m-2" style="text-align:right">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Alta de artículo">
                          <button type="button" class="btn waves-effect waves-light btn-primary">
                            <i class="fas fa-plus"></i> Alta de artículo
                          </button>
                        </a>

                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" data-original-title="Alta de artículo">
                          <button type="button" class="btn waves-effect waves-light btn-primary">
                            <i class="mdi mdi-import"></i> Importar
                          </button></a>

                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" data-original-title="Alta de artículo">
                          <button type="button" class="btn waves-effect waves-light btn-primary">
                            <i class="mdi mdi-export"></i>Exportar
                          </button>
                        </a>
                      </div>
                      <div class="input-group mb-3 col-12">
                        <div class="input-group col-4">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                          </div>
                          <select id="CategoriaSelect" class="custom-select" onchange="BusquedaFiltro(1)">
                            <option value="" selected>Todas las categorias</option>
                              <option value="option">opcion</option>
                          </select>
                        </div>
                        <div class="input-group col-4">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Articulo</label>
                          </div>
                          <select id="ArticuloSelect" class="custom-select" onchange="BusquedaFiltro(2)">
                            <option value="" selected>Todos los articulos</option>
                            <option value="1">Articulos en existencia</option>
                            <option value="1">Articulos sin existencia</option>
                            <option value="1">necesarios de reordenar</option>
                          </select>
                        </div>
                      </div>
                      <div class="row col-12">
                        <div class="row col-12">
                          <div class="form-group col-6">
                            Artículo <input id="art_nombre" type="text" class="form-control">
                          </div>
                          <div class="form-group col-3">
                            Tipo
                            <select id="selectTipoArticulo" class="custom-select">
                              <option value="articulo">Artículo</option>
                              <option value="servicio">Servicio</option>
                            </select>
                          </div>
                          <div class="form-group col-3">
                            Unidad de medida
                            <div class="input-group mb-3">
                              <div class="input-group-prepend" data-toggle="tooltip" data-placement="bottom" data-original-title="Agregar unidad de medida">
                                <button class="btn btn-primary" type="button" onclick="ingresarUnidadMedida()"><i class="ti-plus"></i></button>
                              </div>
                              <select id="selectUnidadMedida" class="custom-select">
                                <option value="" selected>-N/A-</option>
                                  <option value="_id">dqwdw</option>
                              </select>
                            </div>
                          </div>
                          <!--CATEGORIA DEL PRODUCTO -->
                          <div class="form-group col-6">
                            Categoría
                            <div class="input-group mb-3">
                              <div class="input-group-prepend" data-toggle="tooltip" data-placement="bottom" data-original-title="Agregar categoría">
                                <button class="btn btn-primary" type="button" onclick="ingresarCategoria()"><i class="ti-plus"></i></button>
                              </div>
                              <select id="selectCategoriaArticulo" class="custom-select">
                                <option value="" selected>-Seleccionar-</option>
                                  <option value=""></option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group col-6">
                            Marca
                            <div class="input-group mb-3">
                              <div class="input-group-prepend" data-toggle="tooltip" data-placement="bottom" data-original-title="Agregar marca">
                                <button class="btn btn-primary" type="button" onclick="ingresarMarca()"><i class="ti-plus"></i></button>
                              </div>
                              <select id="selectMarca" class="custom-select">
                                <option value="">-Seleccionar-</option>
                                  <option value="">asda</option>
                              </select>
                            </div>


                          </div>
                          <div class="form-group col-12">
                            Descripción <textarea id="art_descripcion" class="form-control" rows="7"></textarea>
                          </div>
                          <div class="form-group col-12">
                            <div class="custom-control custom-checkbox">
                              <input id="checkDisponibleCompra" class="custom-control-input" type="checkbox" class="custom-control-input" value="">
                              <label class="custom-control-label" for="checkDisponibleCompra">Disponible para compra</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input id="checkDisponibleVenta" class="custom-control-input" type="checkbox" class="custom-control-input" value="">
                              <label class="custom-control-label" for="checkDisponibleVenta">Disponible para venta</label>
                            </div>

                            <div class="AplicaDisponibleVenta">
                              <div class="custom-control custom-checkbox">
                                <input id="checkAplicaCambioDevoluciones" class="custom-control-input" type="checkbox" class="custom-control-input" value="">
                                <label class="custom-control-label" for="checkAplicaCambioDevoluciones">Aplica para cambio y devoluciones</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input id="checkAplicaOrdenesEspeciales" class="custom-control-input" type="checkbox" class="custom-control-input" value="">
                                <label class="custom-control-label" for="checkAplicaOrdenesEspeciales">Aplica para ordenes especiales</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input id="checkAplicaApartados" class="custom-control-input" type="checkbox" class="custom-control-input" value="">
                                <label class="custom-control-label" for="checkAplicaApartados">Aplica para apartados</label>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <div class="table-responsive">
                        <table id="data-table-fixed-header-1" class="table tableborder">
                          <thead>
                            <tr>
                              <th class="text-nowrap">Producto</th>
                              <th class="text-nowrap" hidden>Descripción</th>
                              <th class="text-nowrap" hidden>Categoria</th>
                              <th class="text-nowrap">Precio bruto</th>
                              <th class="text-nowrap"></th>
                              <th class="text-nowrap"></th>
                            </tr>
                          </thead>
                          <tbody>
                                <tr id="TrProducto">
                                  <td align="center">
                                    Categoría
                                  </td>
                                  <td width="550" hidden>
                                    Categoría
                                  </td>
                                  <td hidden>
                                  </td>
                                  <td align="right">
                                  </td>
                                  <td width="50" align="center">
                                    <a href=""
                                    data-articulo_nombre=""
                                    data-articulo_uuid=""
                                    data-toggle="tooltip"
                                    data-placement="bottom"
                                    data-original-title="Editar artículo">
                                    <button type="button" class="btn btn-success"><i class="mdi mdi-pencil"></i>
                                    </button>
                                  </a>
                                </td>
                                <td width="50" align="center">
                                  <a href="javascript:void(0)" class="classEliminarArticulo"
                                  data-articulo_id=""
                                  data-articulo_nombre=""
                                  data-articulo_uuid=""
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  data-original-title="Eliminar artículo">
                                  <button type="button" class="btn btn-danger"><i class="mdi mdi-close"></i>
                                  </button>
                                </a>
                              </td>
                            </tr>
                              <tr id="TrProducto">
                                <td align="center">
                                </td>
                                <td width="550" hidden>
                                </td>
                                <td hidden>
                                </td>
                                <td align="right">
                                </td>
                                <td width="50" align="center">
                                  <a href=""
                                  data-articulo_nombre=""
                                  data-articulo_uuid=""
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  data-original-title="Editar artículo">
                                  <button type="button" class="btn btn-success"><i class="mdi mdi-pencil"></i></button>
                                </a>
                              </td>
                              <td width="50" align="center">
                                <a href="javascript:void(0)" class="classEliminarArticulo"
                                data-articulo_id=""
                                data-articulo_nombre=""
                                data-articulo_uuid=""
                                data-toggle="tooltip"
                                data-placement="bottom"
                                data-original-title="Eliminar artículo">
                                <button type="button" class="btn btn-danger"><i class="mdi mdi-close"></i></button>
                              </a>
                              </td>
                              </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane p-20" id="modificadores" role="tabpanel">
    <div class="p-20">
      <h4>Sets de Modificadores</h4>
      <h5><small>Crea, elimina y edita set de modificadores.</small></h5>
      <div class="row">
        <!-- Column -->
        <div class="col-md-9 col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="button-group m-2" style="text-align:right">
                <a href="{{asset('articulos/setmodificadores/crear')}}" data-toggle="tooltip" data-placement="bottom" data-original-title="Crear set modificador">
                  <button type="button" class="btn waves-effect waves-light btn-primary">
                    <i class="fas fa-plus"></i> Crear Set de Modificadores
                  </button>
                </a>
              </div>
              <div class="table-responsive">
                <table id="data-table-fixed-header-2" class="table tableborder">
                  <thead>
                    <tr>
                      <th class="text-nowrap">Nombre</th>
                      <th class="text-nowrap">Descripción</th>
                      <th class="text-nowrap">Sucursales</th>
                      <th class="text-nowrap"></th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr id="TrSetModificador">
                        <td width="150" align="center">
                          <a href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Editar set modificador">
                            <h5 class="font-500"></h5>
                          </a>
                        </td>
                        <td width="550">
                        </td>
                        <td>
                          Sucursal 1
                        </td>
                        <td width="50" align="center">
                          <a href="javascript:void(0)" class="classEliminarSetModificador" data-toggle="tooltip" data-placement="bottom" data-original-title="Eliminar set modificador"
                          data-setmodificador_id=""
                          data-setmodificador_uuid=""
                          data-setmodificador_nombre="">
                          <button type="button" class="btn btn-primary"><i class="mdi mdi-close"></i>
                          </button>
                        </a>
                      </td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tab-pane p-20" id="marcas" role="tabpanel">
  <div class="p-20">
    <h4>Marcas</h4>
    <h5><small>Crea, elimina y edita las marcas de los productos y servicios.</small></h5>
    <div class="row">
      <!-- Column -->
      <div class="col-md-9 col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="button-group m-2" style="text-align:right">
              <a href="javascript:void(0)" onclick="clickAltaMarca()"
              data-toggle="tooltip" data-placement="bottom" data-original-title="Crear marca">
              <button type="button" class="btn waves-effect waves-light btn-primary">
                <i class="fas fa-plus"></i> Añadir Marca
              </button>
            </a>
          </div>
          <div class="table-responsive">
            <table id="data-table-fixed-header-3" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="text-nowrap">Nombre</th>
                  <th class="text-nowrap">Descripción</th>
                  <th class="text-nowrap"></th>
                </tr>
              </thead>
              <tbody>
                  <tr id="TrMarca">
                    <td width="150" align="center">
                      <a href="javascript:void(0)" onclick="clickEditarMarca()"
                      data-toggle="tooltip" data-placement="bottom" data-original-title="Editar Marca">
                      <h5 class="font-500"></h5>
                    </a>
                  </td>
                  <td>
                  </td>
                  <td width="50" align="center">
                    <a href="javascript:void(0)" class="classEliminarMarca" data-toggle="tooltip" data-placement="bottom" data-original-title="Eliminar Marca"
                    data-marca_id=""
                    data-marca_uuid=""
                    data-marca_nombre="">
                    <button type="button" class="btn btn-primary"><i class="mdi mdi-close"></i>
                    </button>
                  </a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="tab-pane p-20" id="descuentospromociones" role="tabpanel">
  <div class="p-20">
    <h4>Descuentos</h4>
    <h5><small>Crea, elimina y edita los descuentos para productos y servicios.</small></h5>
    <div class="row">
      <!-- Column -->
      <div class="col-md-9 col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="button-group m-2" style="text-align:right">
              <a href="{{asset('articulos/descuentos/crear')}}" data-toggle="tooltip" data-placement="bottom" data-original-title="Crear descuento">
                <button type="button" class="btn waves-effect waves-light btn-primary">
                  <i class="fas fa-plus"></i> Crear Descuento
                </button>
              </a>
            </div>
            <div class="table-responsive">
              <table id="data-table-fixed-header-4" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descuento</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <tr id="TrDescuento">
                      <td align="center">
                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" data-original-title="Editar Descuento">
                          <h5 class="font-500"></h5>
                        </a>
                      </td>
                      <td align="right">
                      </td>
                      <td width="50" align="center">
                        <a href="javascript:void(0)" class="classEliminarDescuento" data-toggle="tooltip" data-placement="bottom" data-original-title="Eliminar Descuento"
                        data-descuento_id=""
                        data-descuento_uuid=""
                        data-descuento_nombre="">
                        <button type="button" class="btn btn-primary"><i class="mdi mdi-close"></i>
                        </button>
                      </a>
                    </td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="p-20">
  <h4>Promociones</h4>
  <h5><small>Crea, elimina y edita las promociones para productos y servicios.</small></h5>
  <div class="row">
    <!-- Column -->
    <div class="col-md-9 col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="button-group m-2" style="text-align:right">
            <a href="{{asset('articulos/promociones/crear')}}" data-toggle="tooltip" data-placement="bottom" data-original-title="Crear promoción">
              <button type="button" class="btn waves-effect waves-light btn-primary">
                <i class="fas fa-plus"></i> Crear Promoción
              </button>
            </a>
          </div>
          <div class="table-responsive">
            <table id="data-table-fixed-header-5" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="text-nowrap">Nombre</th>
                  <th class="text-nowrap">Descripción</th>
                  <th class="text-nowrap"></th>
                </tr>
              </thead>
              <tbody>
                  <tr id="TrPromocio">
                    <td width="150" align="center">
                      <a onclick="clickEditarPromocion()"
                      data-toggle="tooltip" data-placement="bottom" data-original-title="Editar Promoción">
                      <h5 class="font-500">nombre</h5>
                    </a>
                  </td>
                  <td width="550">
                  </td>
                  <td width="50" align="center">
                    <a href="javascript:void(0)" class="classEliminarPromocion" data-toggle="tooltip" data-placement="bottom" data-original-title="Eliminar Promoción"
                    data-promocion_id=""
                    data-promocion_uuid=""
                    data-promocion_nombre="">
                    <button type="button" class="btn btn-primary"><i class="mdi mdi-close"></i>
                    </button>
                  </a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="tab-pane p-20" id="categorias" role="tabpanel">
  <div class="p-20">
    <h4>Categorías</h4>
    <h5><small>Crea, elimina y edita las categorías de los productos y servicios.</small></h5>
    <div class="row">
      <!-- Column -->
      <div class="col-md-9 col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="button-group m-2" style="text-align:right">
              <a href="javascript:void(0)" onclick="clickAltaCategoria()" data-toggle="tooltip" data-placement="bottom" data-original-title="Crear Categoría">
                <button type="button" class="btn waves-effect waves-light btn-primary">
                  <i class="fas fa-plus"></i> Añadir Categoría
                </button>
              </a>
            </div>
            <div class="table-responsive">
              <table id="data-table-fixed-header-6" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-nowrap">Nombre</th>
                    <th class="text-nowrap">Descripción</th>
                    <th class="text-nowrap"></th>
                  </tr>
                </thead>
                <tbody>
                    <tr id="TrCategoria">
                      <td width="150" align="center">
                        <a href="javascript:void(0)" onclick="ClickEditarCategoria()"
                        data-toggle="tooltip" data-placement="bottom" data-original-title="Editar Categoría">
                        <h5 class="font-500"></h5>
                      </a>
                    </td>
                    <td>
                    </td>
                    <td width="50" align="center">
                      <a href="javascript:void(0)" class="classEliminarCategoria" data-toggle="tooltip" data-placement="bottom" data-original-title="Eliminar Categoría"
                      data-categoria_id=""
                      data-categoria_uuid=""
                      data-categoria_nombre="">
                      <button type="button" class="btn btn-primary"><i class="mdi mdi-close"></i>
                      </button>
                    </a>
                  </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
@section('js_content')
  <script type="text/javascript">
  //CREAR TABLAS
  $(document).ready(function () {
    $('table.table').DataTable();
  });

</script>
@endsection
