@extends('layouts.admin_template')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <h4>Relatório de Ajuste de Demanda</h4>
    <span>Selecione a Regional
      <select id='selectRegional' class="form-control">
        <option> TODAS AS REGIONAIS </option>
      </select></sapn><br>

      <div class="row">
        <div class="col-md-4">
          <!-- DONUT CHART -->
          SUGESTÃO 3 MESES
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id='pieChart1ConvTitle' class="box-title">Economia Convencional R$: </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartConv1" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (LEFT) -->

        <div class="col-md-4">
          <!-- DONUT CHART -->
          SUGESTÃO 6 MESES
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id='pieChart2ConvTitle' class="box-title">Economia Convencional R$: </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartConv2" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (CENTER) -->

        <div class="col-md-4">
          <!-- DONUT CHART -->
          SUGESTÃO 12 MESES
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id='pieChart3ConvTitle' class="box-title">Economia Convencional R$: </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartConv3" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-4">
          <!-- DONUT CHART -->
          SUGESTÃO 3 MESES
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="pieChartVerde1Title" class="box-title">Economia HOROSAZONAL VERDE R$: </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartVerde1" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (LEFT) -->

        <div class="col-md-4">
          <!-- DONUT CHART -->
          SUGESTÃO 6 MESES
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="pieChartVerde2Title" class="box-title">Economia HOROSAZONAL VERDE R$: </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartVerde2" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (CENTER) -->

        <div class="col-md-4">
          <!-- DONUT CHART -->
          SUGESTÃO 12 MESES
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="pieChartVerde3Title" class="box-title">Economia HOROSAZONAL VERDE R$: </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartVerde3" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-4">
          <!-- DONUT CHART -->
          SUGESTÃO 3 MESES
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="pieChartAzul1Title" class="box-title">Economia HOROSAZONAL AZUL R$: </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartAzul1" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (LEFT) -->

        <div class="col-md-4">
          <!-- DONUT CHART -->
          SUGESTÃO 6 MESES
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="pieChartAzul2Title" class="box-title">Economia HOROSAZONAL AZUL R$: </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartAzul2" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (CENTER) -->

        <div class="col-md-4">
          <!-- DONUT CHART -->
          SUGESTÃO 12 MESES
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="pieChartAzul3Title" class="box-title">Economia HOROSAZONAL AZUL R$: </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartAzul3" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-4">
          <!-- DONUT CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id='pieChartPercentual3mesesTitle' class="box-title"> Percentual de Economia 3 meses</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartPercentual3meses" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (LEFT) -->

        <div class="col-md-4">
          <!-- DONUT CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id='pieChartPercentual6mesesTitle' class="box-title"> Percentual de Economia 6 meses</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartPercentual6meses" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (CENTER) -->

        <div class="col-md-4">
          <!-- DONUT CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id='pieChartPercentual12mesesTitle' class="box-title"> Percentual de Economia 12 meses</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChartPercentual12meses" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="barChart1Title" class="box-title">Histórico do Contrato Selecionado</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart1" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <div class="box">
        <div class="box-header">
          <h3 id=pageTitle1 class="box-title">Relatório de Ajuste de Demanda - TIPO CONVENCIONAL </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="width:100%;overflow:auto;">
          <table id="datatableConvencional" class="table table-sm table-bordered table-striped table-hover table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th>Contrato</th>
                <th>Demanda atual (kW)</th>
                <th>Demanda Atual (R$)</th>
                <th>Dem máx 3m (kW)</th>
                <th>Per Dem máx 3m</th>
                <th>Demanda sugerida 3m</th>
                <th>Demanda com Folga 3m</th>
                <th>Valor novo 3m</th>
                <th>Economia 3m</th>
                <th>Dem máx 6m (kW)</th>
                <th>Per Dem máx 6m</th>
                <th>Demanda sugerida 6m</th>
                <th>Demanda c/ folga 6m</th>
                <th>Valor novo 6m</th>
                <th>Economia 6m</th>
                <th>Dem máx 12m (kW)</th>
                <th>Per Dem máx 12m</th>
                <th>Demanda sugerida 12m</th>
                <th>Dem c/ folga 12m</th>
                <th>Valor novo 12m</th>
                <th>Economia 12m</th>
                <th>Dem máx 24m (kW)</th>
                <th>Per Dem máx 24m</th>
                <th>Demanda sugerida 24m</th>
                <th>Dem c/ folga 24m</th>
                <th>Valor novo 24m</th>
                <th>Economia 24m</th>
                <th>Dem Máx Mês Atual</th>
                <th>Dem Máx Mês -01</th>
                <th>Dem Máx Mês -02</th>
                <th>Dem Máx Mês -03</th>
                <th>Dem Máx Mês -04</th>
                <th>Dem Máx Mês -05</th>
                <th>Dem Máx Mês -06</th>
                <th>Dem Máx Mês -07</th>
                <th>Dem Máx Mês -08</th>
                <th>Dem Máx Mês -09</th>
                <th>Dem Máx Mês -10</th>
                <th>Dem Máx Mês -11</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>Contrato</th>
                <th>Demanda atual (kW)</th>
                <th>Demanda Atual (R$)</th>
                <th>Dem máx 3m (kW)</th>
                <th>Per Dem máx 3m</th>
                <th>Demanda sugerida 3m</th>
                <th>Demanda com Folga 3m</th>
                <th>Valor novo 3m</th>
                <th>Economia 3m</th>
                <th>Dem máx 6m (kW)</th>
                <th>Per Dem máx 6m</th>
                <th>Demanda sugerida 6m</th>
                <th>Demanda c/ folga 6m</th>
                <th>Valor novo 6m</th>
                <th>Economia 6m</th>
                <th>Dem máx 12m (kW)</th>
                <th>Per Dem máx 12m</th>
                <th>Demanda sugerida 12m</th>
                <th>Dem c/ folga 12m</th>
                <th>Valor novo 12m</th>
                <th>Economia 12m</th>
                <th>Dem máx 24m (kW)</th>
                <th>Per Dem máx 24m</th>
                <th>Demanda sugerida 24m</th>
                <th>Dem c/ folga 24m</th>
                <th>Valor novo 24m</th>
                <th>Economia 24m</th>
                <th>Dem Máx Mês Atual</th>
                <th>Dem Máx Mês -01</th>
                <th>Dem Máx Mês -02</th>
                <th>Dem Máx Mês -03</th>
                <th>Dem Máx Mês -04</th>
                <th>Dem Máx Mês -05</th>
                <th>Dem Máx Mês -06</th>
                <th>Dem Máx Mês -07</th>
                <th>Dem Máx Mês -08</th>
                <th>Dem Máx Mês -09</th>
                <th>Dem Máx Mês -10</th>
                <th>Dem Máx Mês -11</th>
              </tr>
            </tfoot>
          </table>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header">
          <h3 id=pageTitle2 class="box-title">Relatório de Ajuste de Demanda - TIPO HOROSAZONAL VERDE </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="width:100%;overflow:auto;">
          <table id="datatableHoroVerde" class="table table-sm table-bordered table-striped table-hover table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th>Contrato</th>
                <th>Demanda Atual (kW)</th>
                <th>Valor Atual (R$)</th>
                <th>Dem máx 3m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx 6m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx 12m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx 24m (kW)</th>
                <th>Per Dem máx 24m</th>
                <th>Demanda sugerida 24m</th>
                <th>Dem c/ folga 24m</th>
                <th>Valor novo 24m</th>
                <th>Economia 24m</th>
                <th>Dem Máx Mês Atual</th>
                <th>Dem Máx Mês -01</th>
                <th>Dem Máx Mês -02</th>
                <th>Dem Máx Mês -03</th>
                <th>Dem Máx Mês -04</th>
                <th>Dem Máx Mês -05</th>
                <th>Dem Máx Mês -06</th>
                <th>Dem Máx Mês -07</th>
                <th>Dem Máx Mês -08</th>
                <th>Dem Máx Mês -09</th>
                <th>Dem Máx Mês -10</th>
                <th>Dem Máx Mês -11</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>Contrato</th>
                <th>Demanda Atual (kW)</th>
                <th>Valor Atual (R$)</th>
                <th>Dem máx 3m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx 6m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx 12m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx 24m (kW)</th>
                <th>Per Dem máx 24m</th>
                <th>Demanda sugerida 24m</th>
                <th>Dem c/ folga 24m</th>
                <th>Valor novo 24m</th>
                <th>Economia 24m</th>
                <th>Dem Máx Mês Atual</th>
                <th>Dem Máx Mês -01</th>
                <th>Dem Máx Mês -02</th>
                <th>Dem Máx Mês -03</th>
                <th>Dem Máx Mês -04</th>
                <th>Dem Máx Mês -05</th>
                <th>Dem Máx Mês -06</th>
                <th>Dem Máx Mês -07</th>
                <th>Dem Máx Mês -08</th>
                <th>Dem Máx Mês -09</th>
                <th>Dem Máx Mês -10</th>
                <th>Dem Máx Mês -11</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->


  <div class="row">
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 id=pageTitle3 class="box-title">Relatório de Ajuste de Demanda - TIPO HOROSAZONAL AZUL </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="width:100%;overflow:auto;">
          <table id="datatableHoroAzul" class="table table-sm table-bordered table-striped table-hover table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th>Contrato</th>
                <th>Demanda atual Fora Ponta (kW)</th>
                <th>Valor Atual Fora Ponta(R$)</th>
                <th>Dem máx FP 3m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx FP 6m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx FP 12m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx FP 24m (kW)</th>
                <th>Per Dem máx 24m</th>
                <th>Demanda sugerida 24m</th>
                <th>Dem c/ folga 24m</th>
                <th>Valor novo 24m</th>
                <th>Economia 24m</th>
                <th>Demanda atual NA Ponta (kW)</th>
                <th>Valor Atual Na Ponta (R$)</th>
                <th>Dem máx NP 3m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx NP 6m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx NP 12m (kW)</th>
                <th>Período</th>
                <th>Sugeestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx NP 24m (kW)</th>
                <th>Per Dem máx 24m</th>
                <th>Demanda sugerida 24m</th>
                <th>Dem c/ folga 24m</th>
                <th>Valor novo 24m</th>
                <th>Economia 24m</th>
                <th>Dem Máx Mês Atual</th>
                <th>Dem Máx Mês -01</th>
                <th>Dem Máx Mês -02</th>
                <th>Dem Máx Mês -03</th>
                <th>Dem Máx Mês -04</th>
                <th>Dem Máx Mês -05</th>
                <th>Dem Máx Mês -06</th>
                <th>Dem Máx Mês -07</th>
                <th>Dem Máx Mês -08</th>
                <th>Dem Máx Mês -09</th>
                <th>Dem Máx Mês -10</th>
                <th>Dem Máx Mês -11</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>Contrato</th>
                <th>Demanda atual Fora Ponta (kW)</th>
                <th>Valor Atual Fora Ponta(R$)</th>
                <th>Dem máx FP 3m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx FP 6m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx FP 12m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx FP 24m (kW)</th>
                <th>Per Dem máx 24m</th>
                <th>Demanda sugerida 24m</th>
                <th>Dem c/ folga 24m</th>
                <th>Valor novo 24m</th>
                <th>Economia 24m</th>
                <th>Demanda atual NA Ponta (kW)</th>
                <th>Valor Atual Na Ponta (R$)</th>
                <th>Dem máx NP 3m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx NP 6m (kW)</th>
                <th>Período</th>
                <th>Sugestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx NP 12m (kW)</th>
                <th>Período</th>
                <th>Sugeestão</th>
                <th>Sugestão com folga</th>
                <th>Valor Novo</th>
                <th>Economia</th>
                <th>Dem máx NP 24m (kW)</th>
                <th>Per Dem máx 24m</th>
                <th>Demanda sugerida 24m</th>
                <th>Dem c/ folga 24m</th>
                <th>Valor novo 24m</th>
                <th>Economia 24m</th>
                <th>Dem Máx Mês Atual</th>
                <th>Dem Máx Mês -01</th>
                <th>Dem Máx Mês -02</th>
                <th>Dem Máx Mês -03</th>
                <th>Dem Máx Mês -04</th>
                <th>Dem Máx Mês -05</th>
                <th>Dem Máx Mês -06</th>
                <th>Dem Máx Mês -07</th>
                <th>Dem Máx Mês -08</th>
                <th>Dem Máx Mês -09</th>
                <th>Dem Máx Mês -10</th>
                <th>Dem Máx Mês -11</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->


  <button type="button" class="btn btn-danger" onclick="$('#rowdoc').show();" >Ver Documentação</button>
  <div class="row" id="rowdoc" style="display: none">						<div class="col-xs-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 id=pageTitle class="box-title"> Documentação </h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body" style="width:100%;overflow:auto;">
        <section id="introduction">
          <h2 class="page-header"><a href="#introduction">Introdução</a></h2>
          <p class="lead">
            Os relatórios de ajuste de demanda apresentam as faturas que possuem potencial 	de redução de demanda, ou seja, a demanda utilizada é inferior à demanda contratada. Para esta análise devemos levar em consideração os tipos de contrato A3, que são: CONVENCIONAL, HOROSAZONAL VERDE e HOROSAZONAL AZUL. Contratos tipo B3 (MONOMIA) não são avaliados neste relatório pois para eles não é contratada demanda.
          </p>
        </section><!-- /#introduction -->

        <section id="Convencional">
          <h2 class="page-header"><a href="#convencional">Contrato Tipo A3 Convencional</a></h2>
          <p class="lead">
            + Para o cálculo da sugestão de demanda, foi usada a seguinte fórmula:
            <img alt="Formula Sugestão de Demanda" src="../img/demanda_sugerida.png">
            Onde k1 = <span class='k1'><?php echo $k1 ?></span>
            <br>
            + Para o cálculo da sugestão de demanda com folga, foi usada a seguinte fórmula:
            <img alt="Formula Sugestão de Demanda com Folga" src="../img/demanda_sugerida_folga.png">
            Onde k1 = <span class='k1'><?php echo $k1 ?></span> e k2 = <span class='k2'><?php echo $k2 ?></span>
            <br><br>
            + Para o cálculo do valor novo, devemos primeiramente encontrar o valor cobrado por kW. Para isso, utilizamos a fórmula a seguir: <img src="../img/preco_kw.png" alt="Cálculo do preço do kW"> onde os valores de demanda ativa em R$ e kW são fornecidos na fatura.
            <br><br>
            + O valor novo pode então ser cálculado multiplicando-se o valor do kw pela demanda sugerida, conforme a equação:  <img src="../img/valornovo.png" alt="Valor novo">
            <br>
            + O valor da economia pode então ser cálculado subtraindo-se o valor novo do valor antigo, conforme a equação:  <img src="../img/economia.png" alt="Valor economia">
            <br><br>
          </p>
        </section><!-- /#convencional -->

        <section id="HOROSAZONALVERDE">
          <h2 class="page-header"><a href="#convencional">Contrato Tipo A3 HOROSAZONAL VERDE</a></h2>
          <p class="lead">
            <b>* 	A metodologia de cálculo é semelhante à adotada para o tipo convencional, com a ressalva que os valores de demanda utilizados são as demandas na ponta.</b><br>
            + Para o cálculo da sugestão de demanda, foi usada a seguinte fórmula:
            <img alt="Formula Sugestão de Demanda" src="../img/demanda_sugerida.png">
            Onde k1 = <span class='k1'><?php echo $k1 ?></span>
            <br>
            + Para o cálculo da sugestão de demanda com folga, foi usada a seguinte fórmula:
            <img alt="Formula Sugestão de Demanda com Folga" src="../img/demanda_sugerida_folga.png">
            Onde k1 = <span class='k1'><?php echo $k2 ?></span> e k2 = <span class='k2'><?php echo $k2 ?></span>
            <br><br>
            + Para o cálculo do valor novo, devemos primeiramente encontrar o valor cobrado por kW. Para isso, utilizamos a fórmula a seguir: <img src="../img/preco_kw.png" alt="Cálculo do preço do kW"> onde os valores de demanda ativa em R$ e kW são fornecidos na fatura.
            <br><br>
            + O valor novo pode então ser cálculado multiplicando-se o valor do kw pela demanda sugerida, conforme a equação:  <img src="../img/valornovo.png" alt="Valor novo">
            <br>
            + O valor da economia pode então ser cálculado subtraindo-se o valor novo do valor antigo, conforme a equação:  <img src="../img/economia.png" alt="Valor economia">
            <br><br>
          </p>
        </section><!-- /#convencional -->

        <section id="HOROSAZONALAZUL">
          <h2 class="page-header"><a href="#convencional">Contrato Tipo A3 HOROSAZONAL AZUL</a></h2>
          <p class="lead">
            Para este tipo de contrato leva-se em consideração a demanda na ponta e fora de ponta. Ressaltamos que, para os contratos da CAERN, as demandas contratadas na ponta e fora de ponta são iguais. <br><br>

            + Para o cálculo da sugestão de demanda na ponta, foi usada a seguinte fórmula:
            <img alt="Formula Sugestão de Demanda na ponta" src="../img/demanda_sugerida_np.png">
            Onde k1 = <span class='k1'><?php echo $k1 ?></span>
            <br>
            + Para o cálculo da sugestão de demanda fora de ponta, foi usada a seguinte fórmula:
            <img alt="Formula Sugestão de Demanda fora de ponta" src="../img/demanda_sugerida_fp.png">
            Onde k1 = <span class='k1'><?php echo $k1 ?></span>
            <br>
            + Para o cálculo da sugestão de demanda com folga, foi usada a seguinte fórmula:
            <img alt="Formula Sugestão de Demanda com Folga Na Ponta" src="../img/demanda_sugerida_folga_np.png">
            Onde k1 = <span class='k1'><?php echo $k1 ?> </span> e k2 = <span class='k2'><?php echo $k1 ?></span><br>
            + Para o cálculo da sugestão de demanda com folga, foi usada a seguinte fórmula:
            <img alt="Formula Sugestão de Demanda com Folga Fora de Ponta" src="../img/demanda_sugerida_folga_fp.png">
            Onde k1 = <span class='k1'><?php echo $k1 ?></span> e k2 = <span class='k2'><?php echo $k2 ?></span>
            <br><br>
            + Para o cálculo do valor novo na ponta, devemos primeiramente encontrar o valor cobrado por kW. Para isso, utilizamos a fórmula a seguir: <img src="../img/preco_kw_np.png" alt="Cálculo do preço do kW na ponta"> onde os valores de demanda ativa em R$ e kW são fornecidos na fatura.
            <br>
            + Para o cálculo do valor novo fora de ponta, devemos primeiramente encontrar o valor cobrado por kW. Para isso, utilizamos a fórmula a seguir: <img src="../img/preco_kw_fp.png" alt="Cálculo do preço do kW fora de ponta"> onde os valores de demanda ativa em R$ e kW são fornecidos na fatura.
            <br><br>
            + O valor novo na ponta pode então ser cálculado multiplicando-se o valor do kw pela demanda sugerida, conforme a equação:  <img src="../img/valornovonp.png" alt="Valor novo">
            <br>
            + O valor novo fora de ponta pode então ser cálculado multiplicando-se o valor do kw pela demanda sugerida, conforme a equação:  <img src="../img/valornovoFp.png" alt="Valor novo">
            <br>
            + O valor da economia na ponta pode então ser cálculado subtraindo-se o valor novo do valor antigo, conforme a equação:  <img src="../img/economianp.png" alt="Valor economia">
            <br>
            + O valor da economia fora de ponta pode então ser cálculado subtraindo-se o valor novo do valor antigo, conforme a equação:  <img src="../img/economiafp.png" alt="Valor economia">
            <br>
            + O valor da economia total pode então ser cálculada somando-se as duas anteriores, conforme a equação:  <img src="../img/economiatot.png" alt="Valor economia">

          </p>
        </section><!-- /#convencional -->

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
@endsection
