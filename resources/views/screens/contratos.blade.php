@extends('layouts.admin_template')

@section('content')
<div class="row">
  <div class="col-xs-12">
     <div class="box box-info">
    <div class="box-header">
      <h3 id="pageTitle" class="box-title">Contratos</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="width:100%;overflow:auto;">
        <table id="datatable" class="table table-sm table-bordered table-striped table-hover table-responsive">
        <thead class="thead-inverse">
          <tr>
            <th>CONTRATO</th>
            <th>CLASSIFICACAO</th>
            <th>TENSAO DE FORNECIMENTO V</th>
            <th>TIPO SERVIÇO</th>
            <th>REGIONAL</th>
            <th>ENDERECO</th>
          </tr>
        </thead>

        <tfoot>
        <tr>
          <th>CONTRATO</th>
          <th>CLASSIFICACAO</th>
          <th>TENSAO DE FORNECIMENTO V</th>
          <th>TIPO SERVIÇO</th>
          <th>REGIONAL</th>
          <th>ENDERECO</th>
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
@endsection
