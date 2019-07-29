@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header">
                Menu
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="">Manage Users</a></li>
                <li class="list-group-item"><a href="">Placeholder</a></li>
                <li class="list-group-item"><a href="">Placeholder</a></li>
                <li class="list-group-item"><a href="">Placeholder</a></li>
            </ul>

        </div>
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Active Employees</div>
                    <div class="card-body">
                        <h4 class="text-center">4 </h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Current Sales Leader</div>
                    <div class="card-body">
                        <h4 class="text-center">Joy Leader</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Sales for month</div>
                    <div class="card-body">
                        <h4 class="text-center">5</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Total Sales Value</div>
                    <div class="card-body">
                        <h4 class="text-center">42000</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
          
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header"> Unassigned Prospects</div>
                    <ul class="list-group list-group-flush">
                        @for($i=0;$i< 6;$i++)
                    <li class="list-group-item">
                        Mr Big <span class="float-right btn btn-sm btn-success">Assign</span>
                    </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="#" class="btn btn-block btn-md btn-primary"> View all Unassigned Leads</a>
                        </li>
                 
                        </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-header">Recent Estimates</div>
                    <ul class="list-group list-group-flush">
                        @for($i=0;$i< 6;$i++)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-4">Mr Big</div>
                            <div class="col-sm-4">July 28th 2019</div>
                            <div class="col-sm-4">Value:Ksh 30000 
                            <span class="float-right btn btn-sm btn-success">Details</span>
                            </div>
                        </div>
                    </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="#" class="btn btn-block btn-md btn-primary"> View all Recent Estimates</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
