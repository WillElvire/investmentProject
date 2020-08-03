@extends('admin/home')
@section('container')
<div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Dashboard</h4>
                            </div>
                            
                        </div>

                        <!-- content -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Today
                                                    Revenue</span>
                                                <h2 class="mb-0">$2189</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="today-revenue-chart" class="apex-charts"></div>
                                                <span class="text-success font-weight-bold font-size-13"><i
                                                        class='uil uil-arrow-up'></i> 10.21%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Product
                                                    Sold</span>
                                                <h2 class="mb-0">1065</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="today-product-sold-chart" class="apex-charts"></div>
                                                <span class="text-danger font-weight-bold font-size-13"><i
                                                        class='uil uil-arrow-down'></i> 5.05%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                                                    Customers</span>
                                                <h2 class="mb-0">11</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="today-new-customer-chart" class="apex-charts"></div>
                                                <span class="text-success font-weight-bold font-size-13"><i
                                                        class='uil uil-arrow-up'></i> 25.16%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                                                    Visitors</span>
                                                <h2 class="mb-0">750</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="today-new-visitors-chart" class="apex-charts"></div>
                                                <span class="text-danger font-weight-bold font-size-13"><i
                                                        class='uil uil-arrow-down'></i> 5.05%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- stats + charts -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <h5 class="card-title header-title border-bottom p-3 mb-0">Overview</h5>
                                        <!-- stat 1 -->
                                        <div class="media px-3 py-4 border-bottom">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">121,000</h4>
                                                <span class="text-muted">Total Visitors</span>
                                            </div>
                                            <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                                        </div>

                                        <!-- stat 2 -->
                                        <div class="media px-3 py-4 border-bottom">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">21,000</h4>
                                                <span class="text-muted">Total Product Views</span>
                                            </div>
                                            <i data-feather="image" class="align-self-center icon-dual icon-lg"></i>
                                        </div>

                                        <!-- stat 3 -->
                                        <div class="media px-3 py-4">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">$21.5</h4>
                                                <span class="text-muted">Revenue Per Visitor</span>
                                            </div>
                                            <i data-feather="shopping-bag" class="align-self-center icon-dual icon-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <ul class="nav card-nav float-right">
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">7d</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">15d</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">1m</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">1y</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title mb-0 header-title">Revenue</h5>

                                        <div id="revenue-chart" class="apex-charts mt-3"  dir="ltr"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title header-title">Targets</h5>
                                        <div id="targets-chart" class="apex-charts mt-3" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                
                       

                       
                           
                                           
    
                                         

                                         
                                        
                                            
                                        </div> <!-- end .chat-conversation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                </div> <!-- content -->
@stop