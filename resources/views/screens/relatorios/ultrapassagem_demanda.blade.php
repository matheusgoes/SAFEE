@extends('layouts.admin_template')

@section('content')
<div class="row">
  <div class="col-xs-12">

    <h4>Relatório de Ultrapassagem de Demanda</h4>
    <span>Selecione a Regional
      <select id='selectRegional' class="form-control">
        <option> TODAS AS REGIONAIS </option>
      </select></sapn><br>

      <div class="row">
        <div class="col-md-6">
          <!-- DONUT CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id='pieChart1Title' class="box-title">Total: R$</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart1" style="height:250px"></canvas>
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
              <h3 id="pieChart2Title" class="box-title">Divisão Por Regional</h3>

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
      <div class="row">
        <div class="col-md-6">
          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="barChart1TitleAbs" class="box-title">Histórico Demanda Ultrapassagem R$ - Total Gasto</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart1Abs" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">
          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="barChart1TitlePerc" class="box-title">Histórico Demanda Ultrapassagem R$ por Mês - Percentual</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart1Perc" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- ./ row -->

      <div class="row">
        <div class="col-md-6">
          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="barChart2TitleAbs" class="box-title">Histórico Demanda Ultrapassagem R$ por Contrato - Valor Absoluto</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart2Abs" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">
          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 id="barChart2TitlePerc" class="box-title">Histórico Demanda Ultrapassagem R$ por contrato - Valor Percentual</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart2Perc" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- ./ row -->

      <div class="box  box-info">
        <div class="box-header">
          <h3 id=pageTitle class="box-title">Relatório de Ultrapassagem de Demanda</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="width:100%;overflow:auto;">
          <table id="datatable" class="table table-sm table-bordered table-striped table-hover table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>DEMANDA_CONTATADA</th>
                <th>SALDO_FATURA</th>
                <th>ULTRAPASSAGEM PONTA KW</th>
                <th>ULTRAPASSAGEM FORA PONTA KW</th>
                <th>ULTRAPASSAGEM PONTA R$</th>
                <th>ULTRAPASSAGEM FORA PONTA R$</th>
                <th>TOTAL R$</th>
                <th>PERCENTUAL</th>
                <th>Dem Máx Mês Atual/NP/FP</th>
                <th>Dem Ult Mês R$ Atual/NP/FP</th>
                <th>Dem Máx Mês -01/NP/FP</th>
                <th>Dem Ult Mês R$ -01/NP/FP</th>
                <th>Dem Máx Mês -02/NP/FP</th>
                <th>Dem Ult Mês R$ -02/NP/FP</th>
                <th>Dem Máx Mês -03/NP/FP</th>
                <th>Dem Ult Mês R$ -03/NP/FP</th>
                <th>Dem Máx Mês -04/NP/FP</th>
                <th>Dem Ult Mês R$ -04/NP/FP</th>
                <th>Dem Máx Mês -05/NP/FP</th>
                <th>Dem Ult Mês R$ -05/NP/FP</th>
                <th>Dem Máx Mês -06/NP/FP</th>
                <th>Dem Ult Mês R$ -06/NP/FP</th>
                <th>Dem Máx Mês -07/NP/FP</th>
                <th>Dem Ult Mês R$ -07/NP/FP</th>
                <th>Dem Máx Mês -08/NP/FP</th>
                <th>Dem Ult Mês R$ -08/NP/FP</th>
                <th>Dem Máx Mês -09/NP/FP</th>
                <th>Dem Ult Mês R$ -09/NP/FP</th>
                <th>Dem Máx Mês -10/NP/FP</th>
                <th>Dem Ult Mês R$ -10/NP/FP</th>
                <th>Dem Máx Mês -11/NP/FP</th>
                <th>Dem Ult Mês R$ -11/NP/FP</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>REGIONAL</th>
                <th>CONTRATO</th>
                <th>TIPO SERVIÇO</th>
                <th>DEMANDA_CONTATADA</th>
                <th>SALDO_FATURA</th>
                <th>ULTRAPASSAGEM PONTA KW</th>
                <th>ULTRAPASSAGEM FORA PONTA KW</th>
                <th>ULTRAPASSAGEM PONTA R$</th>
                <th>ULTRAPASSAGEM FORA PONTA R$</th>
                <th>TOTAL R$</th>
                <th>PERCENTUAL</th>
                <th>Dem Máx Mês Atual/NP/FP</th>
                <th>Dem Ult Mês R$ Atual/NP/FP</th>
                <th>Dem Máx Mês -01/NP/FP</th>
                <th>Dem Ult Mês R$ -01/NP/FP</th>
                <th>Dem Máx Mês -02/NP/FP</th>
                <th>Dem Ult Mês R$ -02/NP/FP</th>
                <th>Dem Máx Mês -03/NP/FP</th>
                <th>Dem Ult Mês R$ -03/NP/FP</th>
                <th>Dem Máx Mês -04/NP/FP</th>
                <th>Dem Ult Mês R$ -04/NP/FP</th>
                <th>Dem Máx Mês -05/NP/FP</th>
                <th>Dem Ult Mês R$ -05/NP/FP</th>
                <th>Dem Máx Mês -06/NP/FP</th>
                <th>Dem Ult Mês R$ -06/NP/FP</th>
                <th>Dem Máx Mês -07/NP/FP</th>
                <th>Dem Ult Mês R$ -07/NP/FP</th>
                <th>Dem Máx Mês -08/NP/FP</th>
                <th>Dem Ult Mês R$ -08/NP/FP</th>
                <th>Dem Máx Mês -09/NP/FP</th>
                <th>Dem Ult Mês R$ -09/NP/FP</th>
                <th>Dem Máx Mês -10/NP/FP</th>
                <th>Dem Ult Mês R$ -10/NP/FP</th>
                <th>Dem Máx Mês -11/NP/FP</th>
                <th>Dem Ult Mês R$ -11/NP/FP</th>
              </tr>
            </tfoot>
          </table>
          *As Demandas de Contratos tipo CONVENCIONAL estão nas colunas Demanda na Ponta
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
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
              O relatório de ultrapssagem de demanda mostra as faturas com cobrança de ultrapassagem de demanda, isto é, demanda medida superior a demanda contratada para o último mês, além da tolerância de 5%, permitida contratualmente.
            </p>
          </section><!-- /#introduction -->

          <section id="Convencional">
            <h2 class="page-header"><a href="#convencional">Ultrapassagem de Demanda</a></h2>
            <p class="lead">
              + Os valores das ultrapassagens de demanda na ponta e fora de ponta, tanto em R$ quanto em kW, são conhecidos e já estão presentes no banco de dados.
              <br>
              + O valor total é a soma dos valores em R$ da ultrapassagem na ponta e fora de ponta.
              <br>
              + O percentual é a divisão entre o valor total da ultrapassagem e o saldo da fatura (fatura a fatura).
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
