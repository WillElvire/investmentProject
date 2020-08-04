@extends('admin/home')
@section('container')
<div class="content-page">
                <div class="content">


                  <div class="container">

                  <br>

                  <h3> Utilisateur {{$info->uniq_id }}</h3>
                         <br>
                     <div class="row">
                        
                        

                         <div class="card col-md-5">

                           <div class="card-body">
                               
                               <p> Nom:{{$info->name ?? ''}} </p>
                               <p> Prenom :   {{$info->lastname ?? ''}} </p>
                               <p> Pays :   {{$info->country ?? ''}} </p>
                                <p> Email  :  {{$info->email ?? ''}} </p>
                               <p> Id  :  {{$info->uniq_id ?? ''}} </p>
                                <p>Téléphone :  {{$info->phone ?? '' }} </p>
                                <p>Nombre de fieulles : {{$parrainage->count() ?? '0'}} fieulle(s)</p>
                                  
                        
                           </div>


                         </div>

                         <div class="col-md-2"></div>

                         <div  class="card col-md-5">

                            <div class="card-body">

                                <img src="{{$info->identity ?? ''}}" class="container-fluid">

                            </div>

                         </div>
                         
                     </div>


                     <div class="card">
                                    
                                    <div class="card-body">
                                    
                                        <h4 class="header-title mt-0 mb-1">Investissement</h4>
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                 
                                                    <th scope="col">Pack</th>
                                                    <th scope="col">Montant investits</th>
                                                    <th scope="col">Montant à recevoir</th>
                                                    <th scope="col">duree</th>
                                                    <th scope="col">nombre de personnes </th>
                                                    <th scope="col">Date de paiement</th>
                                                   
                                                    
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($invest as $index)
                                                    <tr>
                                                    
                                                    <td>{{$index->pack ?? ''}}</td>
                                                    <td>{{$index->montant ?? ''}}</td>
                                                    <td>{{$index->received ?? ''}}</td>
                                                    <td>{{$index->duree ?? ''}}  </td>
                                                    <td>{{$index->person ?? '1'}} personne(s)</td>
                                                    <td>{{$index->payday ?? '' }}</td>
                                                    
                                                    </tr>
                                                   
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        {{$invest->links()}}
                                    </div>
                                </div>


                  </div>


                </div>

</div>


@stop