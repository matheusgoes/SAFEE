@extends('layouts.admin_template')

@section('content')
<div class="row">
  <div class="col-xs-5">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 id="total-historico-ano-atual-title" class="box-title">Divisão da Fatura por Regionais</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="chart">
          <canvas id="totalRegionaisPieChart" style="height:230px"></canvas>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

  <div class="col-xs-7">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 id="total-historico-ano-atual-title" class="box-title">Histórico</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="chart">
          <canvas id="totalBarChart" style="height:230px"></canvas>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

</div>
<div class="row">
  <div class="col-xs-12">
  <div class="box  box-info">
    <div class="box-header">
      <h3 id="pageTitle" class="box-title">Faturas</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="width:100%;overflow:auto;">
        <table id="datatable" class="table table-sm table-bordered table-striped table-hover table-responsive">
        <thead class="thead-inverse">
          <tr><div class="col-xs-12">
            <h4>Relatório de Tarifa Mínima</h4>
            <span>Selecione a Regional
            <select id='selectRegional' class="form-control">
              <option> TODAS AS REGIONAIS </option>
            </select></sapn><br>
          </div>

            <th>ID</th>
            <th>DATA DE EMISSÃO DA FATURA</th>
            <th>DATA DE LEITURA DA ATUAL</th>
            <th>REGIONAL</th>
            <th>CLASSIFICAÇÃO</th>
            <th>CONTRATO</th>
            <th>ENDEREÇO</th>
            <th>TIPO DE SERVIÇO</th>
            <th>DEMANDA CONTATADA</th>
            <th>DEMANDA CONTATADA NP</th>
            <th>DEMANDA CONTATADA FP</th>
            <th>SALDO FATURA</th>
            <th>MULTAS</th>
            <th>JUROS</th>
            <th>DEMANDA ATIVA (R$)</th>
            <th>DEMANDA ATIVA (kW)</th>
            <th>DEMANDA ATIVA PONTA (R$)</th>
            <th>DEMANDA ATIVA PONTA (kW)</th>
            <th>DEMANDA ATIVA FORA PONTA (R$)</th>
            <th>DEMANDA ATIVA FORA PONTA (kW)</th>
            <th>CONSUMO ATIVO (R$)</th>
            <th>CONSUMO ATIVO (kWh)</th>
            <th>CONSUMO ATIVO PONTA (R$)</th>
            <th>CONSUMO ATIVO PONTA kWH</th>
            <th>CONSUMO ATIVO FORA PONTA (R$)</th>
            <th>CONSUMO ATIVO FORA PONTA (kWh)</th>
            <th>CONSUMO REATIVO EXCEDENTE (R$)</th>
            <th>CONSUMO REATIVO EXCEDENTE (kVarh)</th>
            <th>CONSUMO REATIVO EXCEDENTE NA PONTA (R$)</th>
            <th>CONSUMO REATIVO EXCEDENTE NA PONTA kVarh</th>
            <th>CONSUMO REATIVO EXCEDENTE FORA DE PONTA (R$)</th>
            <th>CONSUMO REATIVO EXCEDENTE FORA DE PONTA (kVarh)</th>
            <th>DEMANDA REATIVA EXCEDENTE (R$)</th>
            <th>DEMANDA REATIVA EXCEDENTE (kVar)</th>
            <th>DEMANDA REATIVA EXCEDENTE FORA DE PONTA (R$)</th>
            <th>DEMANDA REATIVA EXCEDENTE FORA DE PONTA (kVar)</th>
            <th>DEMANDA REATIVA EXCEDENTE NA PONTA (R$)</th>
            <th>DEMANDA REATIVA EXCEDENTE NA PONTA (kVar)</th>
            <th>DEMANDA ATIVA ULTRAPASSAGEM (R$)</th>
            <th>DEMANDA ATIVA ULTRAPASSAGEM (kW)</th>
            <th>DEMANDA ULTRAPASSAGEM NA PONTA (R$)</th>
            <th>DEMANDA ULTRAPASSAGEM NA PONTA (kW)</th>
            <th>DEMANDA ULTRAPASSAGEM FORA DE PONTA (R$)</th>
            <th>DEMANDA ULTRAPASSAGEM FORA DE PONTA (kW)</th>
            <th>DEMANDA MÁXIMA (kW)</th>
            <th>DEMANDA MÁXIMA NA PONTA (kW)</th>
            <th>DEMANDA MÁXIMA FORA DE PONTA (kW)</th>
            <th>CONSUMO REATIVO TOTAL (kVarh)</th>
            <th>CONSUMO REATIVO NA PONTA (kVarh)</th>
            <th>CONSUMO REATIVO FORA DE PONTA (kVarh)</th>
            <th>DEMANDA MÁXIMA CORRIGIDA (kVar)</th>
            <th>DEMANDA MÁXIMA CORRIGIDA NA PONTA (kVar)</th>
            <th>DEMANDA MÁXIMA CORRIGIDA FORA DE PONTA (kVar)</th>
            <th>TENSÃO DE FORNECIMENTO V</th>
            <th>FATOR DE POTÊNCIA</th>
            <th>PERDA DE TRANSFORMAÇÃO</th>
            <th>SITUAÇÃO DA FATURA</th>
          </tr>
        </thead>



        <tfoot>
        <tr>
          <th>ID</th>
          <th>DATA DE EMISSÃO DA FATURA</th>
          <th>DATA DE LEITURA DA ATUAL</th>
          <th>REGIONAL</th>
          <th>CLASSIFICAÇÃO</th>
          <th>CONTRATO</th>
          <th>ENDEREÇO</th>
          <th>TIPO DE SERVIÇO</th>
          <th>DEMANDA CONTATADA</th>
          <th>DEMANDA CONTATADA NP</th>
          <th>DEMANDA CONTATADA FP</th>
          <th>SALDO FATURA</th>
          <th>MULTAS</th>
          <th>JUROS</th>
          <th>DEMANDA ATIVA (R$)</th>
          <th>DEMANDA ATIVA (kW)</th>
          <th>DEMANDA ATIVA PONTA (R$)</th>
          <th>DEMANDA ATIVA PONTA (kW)</th>
          <th>DEMANDA ATIVA FORA PONTA (R$)</th>
          <th>DEMANDA ATIVA FORA PONTA (kW)</th>
          <th>CONSUMO ATIVO (R$)</th>
          <th>CONSUMO ATIVO (kWh)</th>
          <th>CONSUMO ATIVO PONTA (R$)</th>
          <th>CONSUMO ATIVO PONTA kWH</th>
          <th>CONSUMO ATIVO FORA PONTA (R$)</th>
          <th>CONSUMO ATIVO FORA PONTA (kWh)</th>
          <th>CONSUMO REATIVO EXCEDENTE (R$)</th>
          <th>CONSUMO REATIVO EXCEDENTE (kVarh)</th>
          <th>CONSUMO REATIVO EXCEDENTE NA PONTA (R$)</th>
          <th>CONSUMO REATIVO EXCEDENTE NA PONTA kVarh</th>
          <th>CONSUMO REATIVO EXCEDENTE FORA DE PONTA (R$)</th>
          <th>CONSUMO REATIVO EXCEDENTE FORA DE PONTA (kVarh)</th>
          <th>DEMANDA REATIVA EXCEDENTE (R$)</th>
          <th>DEMANDA REATIVA EXCEDENTE (kVar)</th>
          <th>DEMANDA REATIVA EXCEDENTE FORA DE PONTA (R$)</th>
          <th>DEMANDA REATIVA EXCEDENTE FORA DE PONTA (kVar)</th>
          <th>DEMANDA REATIVA EXCEDENTE NA PONTA (R$)</th>
          <th>DEMANDA REATIVA EXCEDENTE NA PONTA (kVar)</th>
          <th>DEMANDA ATIVA ULTRAPASSAGEM (R$)</th>
          <th>DEMANDA ATIVA ULTRAPASSAGEM (kW)</th>
          <th>DEMANDA ULTRAPASSAGEM NA PONTA (R$)</th>
          <th>DEMANDA ULTRAPASSAGEM NA PONTA (kW)</th>
          <th>DEMANDA ULTRAPASSAGEM FORA DE PONTA (R$)</th>
          <th>DEMANDA ULTRAPASSAGEM FORA DE PONTA (kW)</th>
          <th>DEMANDA MÁXIMA (kW)</th>
          <th>DEMANDA MÁXIMA NA PONTA (kW)</th>
          <th>DEMANDA MÁXIMA FORA DE PONTA (kW)</th>
          <th>CONSUMO REATIVO TOTAL (kVarh)</th>
          <th>CONSUMO REATIVO NA PONTA (kVarh)</th>
          <th>CONSUMO REATIVO FORA DE PONTA (kVarh)</th>
          <th>DEMANDA MÁXIMA CORRIGIDA (kVar)</th>
          <th>DEMANDA MÁXIMA CORRIGIDA NA PONTA (kVar)</th>
          <th>DEMANDA MÁXIMA CORRIGIDA FORA DE PONTA (kVar)</th>
          <th>TENSÃO DE FORNECIMENTO V</th>
          <th>FATOR DE POTÊNCIA</th>
          <th>PERDA DE TRANSFORMAÇÃO</th>
          <th>SITUAÇÃO DA FATURA</th>
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
    <div class="col-md-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 id="total-multa-mes-atual-title" class="box-title">Composição das Multas</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="multasMesAtualPieChart" style="height:230px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col (LEFT) -->
    <div class="col-md-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 id="composicao-mes-atual-title" class="box-title">Composição da Fatura</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="composicaoTotalMesAtualPieChart" style="height:230px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col (RIGHT) -->
  </div>
  <!-- /.row -->
  <span><h4>Contrato Selecionado</h4></span>
  <div class="row">
    <div class="col-md-4">
      <!-- AREA CHART -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 id="comapracao-anos-title" class="box-title">Selecione um contrato para comparar os últimos anos</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="saldoTresAnosChart" style="height:250px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-md-4">
      <!-- BAR CHART -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 id="historico-ano-atual-title" class="box-title">Selecione um contrato para verificar o histórico do último ano</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="historicaUltimoAnoChart" style="height:230px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-md-4">
      <!-- DONUT CHART -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Composição da Fatura</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <canvas id="composicaoFaturaChart" style="height:250px"></canvas>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

  <div class="row">
    <div class="col-md-7">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 id="barChartDemandaTitle" class="box-title">Demanda Ativa (Fora Ponta)</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="barChartDemanda1" style="height:230px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

    <div class="col-md-5">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 id="barChartConsumoTitle" class="box-title">Consumo Ativo (Fora Ponta)</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="chart">
            <canvas id="barChartConsumo1" style="height:230px"></canvas>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

    <div class="row">
      <div class="col-md-7">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 id="barChartDemanda2Title" class="box-title">Demanda Ativa (Na Ponta)</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="barChartDemanda2" style="height:230px"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

      <div class="col-md-5">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 id="barChartConsumo2Title" class="box-title">Consumo Ativo (Na Ponta)</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="barChartConsumo2" style="height:230px"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

  </div>
@endsection
