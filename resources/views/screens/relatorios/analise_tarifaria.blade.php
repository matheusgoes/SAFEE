@extends('layouts.admin_template')

@section('content')
<div class="row">
  <div class="col-xs-12">

    <span> Selecione a Regional </span>
    <select id='selectRegional' class="form-control">
      <option> TODAS AS REGIONAIS </option>
    </select><br>

    <div class="box box-info">
      <div class="box-header">
        <h3 id=pageTitle1 class="box-title">HORO-SAZONAL AZUL para HORO-SAZONAL VERDE</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body" style="width:100%;overflow:auto;">
        <table id="datatableAzulVerde" class="table table-sm table-bordered table-striped table-hover table-responsive">
          <thead class="thead-inverse">
            <tr>
              <th>CONTRATO</th>
              <th>SALDO FATURA</th>
              <th>DEMANDA (R$)</th>
              <th>DEMANDA (KW)</th>
              <th>CONSUMO PONTA (R$)</th>
              <th>CONSUMO PONTA (KW)</th>
              <th>CONSUMO FORA PONTA (R$)</th>
              <th>CONSUMO FORA PONTA (KW)</th>
              <th>SUBTOTAL</th>
              <th>PERCENTUAL DE REDUÇÃO %</th>
              <th>ECONOMIA</th>
            </tr>
          </thead>

          <tfoot>
            <tr>
              <th>CONTRATO</th>
              <th>SALDO FATURA</th>
              <th>DEMANDA (R$)</th>
              <th>DEMANDA (KW)</th>
              <th>CONSUMO PONTA (R$)</th>
              <th>CONSUMO PONTA (KW)</th>
              <th>CONSUMO FORA PONTA (R$)</th>
              <th>CONSUMO FORA PONTA (KW)</th>
              <th>SUBTOTAL</th>
              <th>PERCENTUAL DE REDUÇÃO %</th>
              <th>ECONOMIA</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->


    <div class="box box-info">
      <div class="box-header">
        <h3 id=pageTitle2 class="box-title">HORO-SAZONAL VERDE para HORO-SAZONAL AZUL</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body" style="width:100%;overflow:auto;">
        <table id="datatableVerdeAzul" class="table table-sm table-bordered table-striped table-hover table-responsive">
          <thead class="thead-inverse">
            <tr>
              <th>CONTRATO</th>
              <th>SALDO FATURA</th>
              <th>DEMANDA PONTA (R$)</th>
              <th>DEMANDA PONTA (KW)</th>
              <th>DEMANDA FORA PONTA (R$)</th>
              <th>DEMANDA FORA PONTA (KW)</th>
              <th>CONSUMO PONTA (R$)</th>
              <th>CONSUMO PONTA (KW)</th>
              <th>CONSUMO FORA PONTA (R$)</th>
              <th>CONSUMO FORA PONTA (KW)</th>
              <th>SUBTOTAL</th>
              <th>PERCENTUAL DE REDUÇÃO %</th>
              <th>ECONOMIA</th>
            </tr>
          </thead>

          <tfoot>
            <tr>
              <th>CONTRATO</th>
              <th>SALDO FATURA</th>
              <th>DEMANDA PONTA (R$)</th>
              <th>DEMANDA PONTA (KW)</th>
              <th>DEMANDA FORA PONTA (R$)</th>
              <th>DEMANDA FORA PONTA (KW)</th>
              <th>CONSUMO PONTA (R$)</th>
              <th>CONSUMO PONTA (KW)</th>
              <th>CONSUMO FORA PONTA (R$)</th>
              <th>CONSUMO FORA PONTA (KW)</th>
              <th>SUBTOTAL</th>
              <th>PERCENTUAL DE REDUÇÃO %</th>
              <th>ECONOMIA</th>
            </tr>
          </tfoot>
        </table>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->


    <div class="box box-info">
      <div class="box-header">
        <h3 id=pageTitle3 class="box-title">CONVENCIONAL para HORO-SAZONAL VERDE</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body" style="width:100%;overflow:auto;">
        <table id="datatableConvencionalVerde" class="table table-sm table-bordered table-striped table-hover table-responsive">
          <thead class="thead-inverse">
            <tr>
              <th>CONTRATO</th>
              <th>SALDO FATURA</th>
              <th>DEMANDA (R$)</th>
              <th>DEMANDA (KW)</th>
              <th>CONSUMO PONTA (R$)</th>
              <th>CONSUMO PONTA (KW)</th>
              <th>CONSUMO FORA PONTA (R$)</th>
              <th>CONSUMO FORA PONTA (KW)</th>
              <th>SUBTOTAL</th>
              <th>PERCENTUAL DE REDUÇÃO %</th>
              <th>ECONOMIA</th>
            </tr>
          </thead>

          <tfoot>
            <tr>
              <th>CONTRATO</th>
              <th>SALDO FATURA</th>
              <th>DEMANDA (R$)</th>
              <th>DEMANDA (KW)</th>
              <th>CONSUMO PONTA (R$)</th>
              <th>CONSUMO PONTA (KW)</th>
              <th>CONSUMO FORA PONTA (R$)</th>
              <th>CONSUMO FORA PONTA (KW)</th>
              <th>SUBTOTAL</th>
              <th>PERCENTUAL DE REDUÇÃO %</th>
              <th>ECONOMIA</th>
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
            Para o relatório de mudança contratual, buscou-se simular os custos para um contrato caso fossem aplicadas as tarifas de um outro tipo de contrato.
            <br>Não avaliaram-se mudanças para o tipo convencional, pois há perspectiva de extinção do mesmo em curto prazo, por volta de março/2017.
            <br>Para a estimativa de mudança de contrato, inicialmente calculam-se os valores do kWh de consumo, ponta e fora ponta, caso a simulação seja para o tipo azul, e kW de demanda, ponta e fora ponta, caso a simulação seja para o tipo azul.
            <br>O cálculo do preço do kWh, em R$/kWh, é feito conforme a equação abaixo:
            <br>
            &emsp;&emsp;<img src="../img/preco_kwh_mudancacontratual.PNG" alt="fórmula preço do kwh">
            <br>
            Deve-se atentar para selecionar o consumo desejado entre ponta e fora ponta.
            <br><br>
            &emsp;De maneira análoga, faz-se o cálculo do preço do kW de demanda.
            <br>
            &emsp;&emsp;<img src="../img/preco_kw_mudancacontratual.PNG" alt="fórmula preço do kW">
            <br><br>
            Caso a mudança seja de um contrato tipo horosazonal azul ou convecional para horosazonal verde, aplicam-se as fórmulas selecionando as grandezas de consumo e de demanda na ponta para qualquer contrato tipo horosazonal verde, utilizando as grandezas na ponta.
            <br>Caso seja do horosazonal verde ou convencional para horosazonal azul, aplicam-se as fórmulas selecionando as grandezas de consumo e de demanda na ponta e fora de ponta para qualquer contrato tipo horosazonal azul, utilizando as grandezas na ponta.
            <br>Para as situações em que não se tenham os dados separados entre ponta e fora ponta, usou-se os seguintes critérios:
            <br>&emsp;Demanda &rarr; A demanda da ponta será considerada a mesma de fora ponta;
            <br>&emsp;Consumo &rarr; O consumo será divido na proporção de 3/24 para ponta e 21/24 para fora ponta, para o caso mais simples. Uma forma alternativa é comparar a proporção entre consumo na ponta e fora ponta entre os contratos existentes.
          </p>
        </section><!-- /#introduction -->

        <section id="verdeParaAzul">
          <h2 class="page-header"><a href="#convencional">Mudança Tipo HOROSAZONAL VERDE para HOROSAZONAL AZUL</a></h2>
          <p class="lead">
            A diferença entre o verde e o azul é que o azul possui demanda contratada na ponta e fora ponta, porém essas demandas, no caso da caern, são sempre iguais.
            <br>Logo, para a estimativa do custo, utilizou-se a demanda contratada do contrato horosazonal verde desejado e multiplicou-se tanto pelo custo do kW na ponta quanto pelo custo do kw fora de ponta, somando-os, conforme a equação:
            <br>
            &emsp;&emsp;<img src="../img/precodemanda1.png" alt="Equação">
            <br>
            Para o cálculo do valor do consumo, procedeu-se de forma similar, substituindo as grandezas de demanda por grandezas de consumo e atentando para o fato do contrato tipo verde diferenciar consumo na ponta e fora da ponta:
            <br>
            &emsp;&emsp;<img src="../img/precoconsumo1.png" alt="Equação">
            <br>
            O total é a soma do preço do consumo e o preço da demanda.
            <br>
          </p>
        </section><!-- /#verdeParaAzul -->

        <section id="convencionalparaazul">
          <h2 class="page-header"><a href="#convencional">Mudança CONVENCIONAL para HOROSAZONAL AZUL</a></h2>
          <p class="lead">
            O contrato convencional possui tarifa única, não diferenciando ponta e fora ponta.
            <br>Logo,
            <br>
            &emsp;&emsp;<img src="../img/precodemanda1.png" alt="Equação">
            <br>
            Para o cálculo do valor do consumo, procedeu-se de forma similar, substituindo as grandezas de demanda por grandezas de consumo e atentando para o fato do contrato tipo convencional não diferenciar consumo na ponta e fora da ponta.
            <br>Então, devemos estimar esses consumos.<br>
            &emsp;&emsp;<img src="../img/precoconsumo2.png" alt="Equação">
            <br>
            &emsp;Onde fator1 = 2.176/24  e fator2 = (24 - 2.176) / 24.
            <br><i>O valor 2.176 foi encontrado a partir da proporção entre o consumo de ponta de fora ponta para cada contrato horosazonal verde de Natal. Após isso, foi feito o desvio padrão dessas proporções, para conferir se eles seriam representativos.</i>
            <br>
            O total é a soma do preço do consumo e o preço da demanda.
            <br>
          </p>
        </section><!-- /#convencionalparaazul -->

        <section id="azulParaVerde">
          <h2 class="page-header"><a href="#convencional">Mudança Tipo HOROSAZONAL AZUL para HOROSAZONAL VERDE</a></h2>
          <p class="lead">
            O contrato horosazonal verde não diferencia demanda na ponta e fora ponta, logo, o custo de demanda para o contrato horosazonal verde é a demanda em kW fora de ponta multiplicada pela tarifa aplicada no contrato tipo verde.
            <br>
            Já para o consumo, multiplicam-se os valores em kW do contrato tipo azul pelas tarifas aplicadas no contrato tipo verde.
            <br>
          </p>
        </section><!-- /#verdeParaAzul -->

        <section id="convencionalparaverde">
          <h2 class="page-header"><a href="#convencional">Mudança HOROSAZONAL AZUL para HOROSAZONAL VERDE</a></h2>
          <p class="lead">
            O custo de demanda será a demanda contratada multiplicada pela tarifa de demanda no contrato tipo verde.
            <br>
            Para o consumo, aplica-se a fórmula abaixo:
            <br>
            &emsp;&emsp;<img src="../img/precoconsumo2.png" alt="Equação">
            <br>
            Já o consumo, multiplicam-se os valores em kw do contrato tipo azul pelas tarifas aplicadas no contrato tipo verde.
            <br>
            Onde fator1 = 2.176/24  e fator2 = (24 - 2.176) / 24.
            <br>
          </p>
        </section><!-- /#azulparaverde -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
@endsection
