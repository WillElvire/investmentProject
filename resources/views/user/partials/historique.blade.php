@extends('user/home')

@section('container')


<div class="right_col" role="main">
                
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Investment history</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Pack</th>
                          <th>Montant</th>
                          <th>duree</th>
                          <th>montant à recevoir</th>
                          <th>Nombre de personnes</th>
                          
                          <th>jours de retrait</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($history as $index)
                        <tr>
                          <td>{{$index->pack ?? ''}}</td>
                          <td>{{$index->montant ?? '' }}</td>
                          @if($index->pack=='heure')
                            <td>{{$index->duree ?? '' }}  Hours (Heures)</td>
                          @else

                            <td>{{$index->duree ?? '' }}  Days(Jours)</td>

                          @endif
                          <td>{{ $index->received ?? '' }}</td>
                          <td>{{$index->person ?? '1' }} persons</td>
                          <td>{{ $index->payday ??''}}</td>
                          
                          <td>

                                  <form method="post" action="/invest/history/{{$index->id}}">
                                
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                
                                   </form>

                          </td>
                          
                          
                        </tr>
                       
                        
                        
                        @endforeach
                       
                      </tbody>
                    </table>


                    {{$history->links()}}
					
					
                  </div>
                </div>
              </div>
            </div>

</div>


@stop