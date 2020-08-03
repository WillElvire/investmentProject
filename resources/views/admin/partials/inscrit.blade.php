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
                                        <h4 class="header-title mt-0 mb-1">Les Inscrits <span class="badge badge-danger"> {{ $info->count() ?? '0'}}</span></h4>
                                        <p class="sub-header">
                                           Cliquer sur le nom de la personne pour acceder aux informations des investisseurs
                                        </p>
    
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Nom</th>
                                                    <th scope="col">Prenom</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">pays</th>
                                                    <th scope="col">Telephone</th>
                                                    <th scope="col">action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($info as $index)
                                                    <tr>
                                                   
                                                    <td><a href="{{config('app.url')}}/admin/profil/{{$index->uniq_id ?? '' }}">{{$index->name ?? ''}}</a></td>
                                                    <td><a href="{{config('app.url')}}/admin/profil/{{$index->uniq_id ?? '' }}">{{$index->lastname ?? ''}}</a></td>
                                                    <td>{{$index->email ?? ''}}</td>
                                                    <td>{{$index->country ?? ''}}</td>
                                                    <th scope="row">{{$index->phone ?? ''}}</th>
                                                    <td>
                                                        <form method="post" action="{{config('app.url')}}/admin/delete/{{$index->uniq_id ?? ''}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                <span >Drop</span>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    </tr>

                                                    @endforeach
                                                   
                                                </tbody>
                                            </table>
                                            {{$info->links()}}
                                        </div>
                                    </div>
                                </div>

                            </div>

</div>
</div>

@stop