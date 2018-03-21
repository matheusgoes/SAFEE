@extends('layouts.admin_template')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <h4>Relatório de Tarifa Mínima</h4>
    <span>Selecione a Regional
      <select id='selectRegional' class="form-control">
        <option> TODAS AS REGIONAIS </option>
      </select></sapn><br>
    </div>
    <div class="col-xs-12">
      <div class="row">
        <div class="col-md-6">
          <!-- DONUT CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id='chartTitle' class="box-title">Custo Total: R$ </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- DONUT CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id='chart2Title' class="box-title">Custo por Regional </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart2" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

      <div class="box  box-info">
        <div class="box-header">
          <h3 id="pageTitle1" class="box-title">Relatório de Tarifa Mínima - MONOMIA</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="width:100%;overflow:auto;">
          <table id="datatableMonomia" class="table table-sm table-bordered table-striped table-hover table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>SALDO_FATURA</th>
                <th>CONSUMO ATIVO kW</th>
                <th>3 meses</th>
                <th>6 meses</th>
                <th>12 meses</th>
                <th>15 meses</th>
                <th>18 meses</th>
                <th>24 meses</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>SALDO_FATURA</th>
                <th>CONSUMO ATIVO kW</th>
                <th>3 meses</th>
                <th>6 meses</th>
                <th>12 meses</th>
                <th>15 meses</th>
                <th>18 meses</th>
                <th>24 meses</th>
              </tr>
            </tfoot>
          </table>

        </div>
        <!-- /.box-body -->
      </div>


      <div class="box  box-info">
        <div class="box-header">
          <h3 id="pageTitle2" class="box-title">Relatório de Tarifa Mínima - CONVENCIONAL</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="width:100%;overflow:auto;">
          <table id="datatableConvencional" class="table table-sm table-bordered table-striped table-hover table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>SALDO_FATURA</th>
                <th>CONSUMO ATIVO kW</th>
                <th>3 meses</th>
                <th>6 meses</th>
                <th>12 meses</th>
                <th>15 meses</th>
                <th>18 meses</th>
                <th>24 meses</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>SALDO_FATURA</th>
                <th>CONSUMO ATIVO kW</th>
                <th>3 meses</th>
                <th>6 meses</th>
                <th>12 meses</th>
                <th>15 meses</th>
                <th>18 meses</th>
                <th>24 meses</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>

      <div class="box  box-success">
        <div class="box-header">
          <h3 id="pageTitle3" class="box-title">Relatório de Tarifa Mínima - HORO-SAZONAL VERDE</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="width:100%;overflow:auto;">
          <table id="datatableHoroVerde" class="table table-sm table-bordered table-striped table-hover table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>SALDO_FATURA</th>
                <th>CONSUMO ATIVO kW</th>
                <th>3 meses</th>
                <th>6 meses</th>
                <th>12 meses</th>
                <th>15 meses</th>
                <th>18 meses</th>
                <th>24 meses</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>SALDO_FATURA</th>
                <th>CONSUMO ATIVO kW</th>
                <th>3 meses</th>
                <th>6 meses</th>
                <th>12 meses</th>
                <th>15 meses</th>
                <th>18 meses</th>
                <th>24 meses</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box  box-info">
        <div class="box-header">
          <h3 id="pageTitle4" class="box-title">Relatório de Tarifa Mínima - HORO-SAZONAL AZUL</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="width:100%;overflow:auto;">
          <table id="datatableHoroAzul" class="table table-sm table-bordered table-striped table-hover table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>SALDO_FATURA</th>
                <th>CONSUMO ATIVO kW</th>
                <th>3 meses</th>
                <th>6 meses</th>
                <th>12 meses</th>
                <th>15 meses</th>
                <th>18 meses</th>
                <th>24 meses</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>SALDO_FATURA</th>
                <th>CONSUMO ATIVO kW</th>
                <th>3 meses</th>
                <th>6 meses</th>
                <th>12 meses</th>
                <th>15 meses</th>
                <th>18 meses</th>
                <th>24 meses</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <button type="button" class="btn btn-danger" onclick="$('#rowdoc').show();" >Ver Documentação</button>


  <div class="row" id="rowdoc" style="display: none">
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 id=pageTitle class="box-title"> Documentação </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="width:100%;overflow:auto;">
          <section id="introduction">
            <h2 class="page-header"><a href="#introduction">Introdução</a></h2>
            <p class="lead">
              Neste relatório, buscou-se identificar os contratos que possuem consumo ativo nulo ou muito baixo.
              <br>O filtro utilizado para a seleção dos mesmos é consumo ativo em kW < <?php echo $limite ?> , consumo ativo na ponta em kW < <?php echo $limite ?> ou consumo ativo fora de ponta em kW < <?php echo $limite ?>.</p>
            </section><!-- /#introduction -->

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    @endsection
