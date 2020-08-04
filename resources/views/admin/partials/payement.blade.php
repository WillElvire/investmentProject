@extends('admin/home')
@section('container')

<div class="content-page">
    <div class="content">
    <br>
    <br>
    <div class="alert alert-primary">Vous avez {{$paiement->count() ?? ''}} paiement  Aujourd'hui  {{date('Y-m-d')}}</div>
    
    <div class="row">

                            
                            
                            
                            <div class="col-md-6 col-xl-6">

                            
                            <br>
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                                    Somme à payer</span>
                                                <h2 class="mb-0">{{$paiement->sum('received') ?? '0'}} XOF</h2>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-6">
                            
                            <br>
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                                    Paiement</span>
                                                <h2 class="mb-0">{{$paiement->count() ?? ''}} Personnes</h2>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <div class="row">
                            <div class="col-lg-12">
                                    <br>
                                    <br>
                                <div class="card">
                                    
                                    <div class="card-body">
                                    
                                        <h4 class="header-title mt-0 mb-1">Paiement</h4>
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">nom</th>
                                                    <th scope="col">Prenom</th>
                                                    <th scope="col">telephone</th>
                                                    <th scope="col">Pays</th>
                                                    <th scope="col">Pack</th>
                                                    <th scope="col">Montant investis</th>
                                                    <th scope="col">Montant à recevoir</th>
                                                    <th scope="col">duree</th>
                                                    <th scope="col">nombre de personnes </th>
                                                   
                                                    
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($paiement as $index)
                                                    <tr>
                                                    <th scope="row">{{ $index->name ?? ''}}</th>
                                                    <td>{{ $index->lastname ?? '' }}</td>
                                                    <td>{{$index->phone ?? '' }}</td>
                                                    <td>{{$index->country ?? '' }}</td>
                                                    <td>{{$index->pack ?? ''}}</td>
                                                    <td>{{$index->montant ?? ''}}</td>
                                                    <td>{{$index->received ?? ''}}</td>
                                                    @if($index->pack=='heure')
                                                       <td>{{$index->duree ?? ''}}  Heure(s) </td>
                                                    @else
                                                       
                                                    <td>{{$index->duree ?? ''}}  Jours </td>
                                                    @endif
                                                    <td>{{$index->person ?? '1'}} personne(s)</td>
                                                    
                                                    </tr>
                                                   
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        {{$paiement->links()}}
                                    </div>
                                </div>

                            </div>

</div>
</div>

@stop