@extends('admin/home')

@section('container')

<div class="content-page">



                <div class="content">

                  <div class="container">

                      <div class="container">

                            <form method="post" action="" class="form-group">
            

                            <h2 class="row justify-content-center">Recherche</h2>
                                <div class="row">
                                @csrf
                                <input type="text" class="form-control col-md-10" name="search">
                                <button type="submit" class="btn btn-primary col-md-2">Recherche <span class="fa fa-search"></span></button>

                                </div>

                            </form>
                      
                        </div>


                      @if(isset($search))
                        <div class="card">
                                    
                                    <div class="card-body">
                                    
                                        <h4 class="header-title mt-0 mb-1">Resultat pour {{$search}} <span class="badge badge-danger">{{$user->count() ?? '0'}}</span></h4>
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                 
                                                    <th scope="col">Nom</th>
                                                    <th scope="col">Penom</th>
                                                    <th scope="col"> Email</th>
                                                    <th scope="col">Téléphone</th>
                                                    <th scope="col">Pays </th>
                                                   
                                                    
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($user as $index)
                                                    <tr>
                                                    
                                                    <td><a href="{{config('app.url')}}/admin/profil/{{$index->uniq_id}}">{{$index->name ?? ''}} </a></td>
                                                    <td><a href="{{config('app.url')}}/admin/profil/{{$index->uniq_id}}">{{$index->lastname ?? ''}}</a></td>
                                                    <td>{{$index->email ?? ''}}</td>
                                                    <td>{{$index->phone ?? ''}}  </td>
                                                    <td>{{$index->country ?? ''}} </td>
                                                    
                                                    </tr>
                                                   
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        {{$user->links()}}
                                    </div>
                                </div>


                                @endif


                  </div>


                   </div>



                </div>


</div>





@stop