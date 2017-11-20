@extends('basicModel')

    @section('content')
        <div class="row">
           <div class="col-lg-6">
              <table class="table table-hover table-bordered table-striped">
               <thead CLASS="bg-secundary">
               <tr>
                   <th colspan="4" clas>Últimas ofertas</th>
               </tr>
               <tr>
                   <th>#</th>
                   <th>Produtor</th>
                   <th>Produto</th>
                   <th>Data</th>
               </tr>
               </thead>
               <tbody>
               <tr>
                   <th scope="row">1</th>
                   <td>Mark</td>
                   <td>Ameixa</td>
                   <td>00/00/00</td>
               </tr>
               <tr>
                   <th scope="row">2</th>
                   <td>Jacob</td>
                   <td>Alface</td>
                   <td>00/00/00</td>

               </tr>
               <tr>
                   <th scope="row">3</th>
                   <td>Larry the Bird</td>
                   <td>Batata</td>
                   <td>00/00/00</td>
               </tr>
               <tr>
                   <th colspan="4" scope="row">Vizualisar todos</th>
               </tr>

               </tbody>
               </table>
           </div>
           <div class="col-lg-6">
               <table class="table table-hover table-bordered">
                   <thead class="thead bg-secundary">
                   <tr>
                       <th colspan="4">Últimos pedidos</th>
                   </tr>
                   <tr>
                       <th>#</th>
                       <th>Cliente</th>
                       <th>Produto</th>
                       <th>Data</th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                       <th scope="row">1</th>
                       <td>Mark</td>
                       <td>Ameixa</td>
                       <td>00/00/00</td>
                   </tr>
                   <tr>
                       <th scope="row">2</th>
                       <td>Jacob</td>
                       <td>Alface</td>
                       <td>00/00/00</td>

                   </tr>
                   <tr>
                       <th scope="row">3</th>
                       <td>Larry the Bird</td>
                       <td>Batata</td>
                       <td>00/00/00</td>
                   </tr>
                   <tr>
                       <th colspan="4" scope="row">Visualizar todos</th>
                   </tr>
                   </tbody>
               </table>
           </div>
       </div> <!-- fim da row 1 -->

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover table-bordered">
                    <thead class="thead bg-secundary">
                    <tr>
                        <th colspan="5">Contratos em abertos</th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Número do contrato</th>
                        <th>Demandante</th>
                        <th>Data Limte de inscrição</th>
                        <th>Número de interessados</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>321423123</td>
                        <td>EBM. PRES. CASTELO BRANCO</td>
                        <td>00/00/00</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>65645432</td>
                        <td>EBM. PRES. CASTELO BRANCO</td>
                        <td>00/00/00</td>
                        <td>23</td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>325243564</td>
                        <td>EBM. PRES. CASTELO BRANCO</td>
                        <td>00/00/00</td>
                        <td>43</td>
                    </tr>
                    <tr>
                        <th colspan="5" scope="row">Visualizar todos</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @stop

    @section('sideMenuRight')
        @include('sideMenuRight')
    @stop