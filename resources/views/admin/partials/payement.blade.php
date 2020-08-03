@extends('admin/home')
@section('container')

<div class="content-page">
    <div class="content">

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
                                                    <td>{{$index->duree ?? ''}}  </td>
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