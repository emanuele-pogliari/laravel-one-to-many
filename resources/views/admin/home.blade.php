@extends('layouts.admin')


@section('content')

<div class="container-fluid">

<div class="row">
    <div id="sidebar">
        @include('admin/partials/side')
    </div>
    <div id="main-content">
        <h1 class="p-5">Welcome Back {{auth()->user()->name}}!</h1>
        <div class="container-fluid">
            <div class="row mx-auto justify-content-center w-75 p-3">
                <div class="col-6 p-3">
                    <div class="card">
                        <div class="card-header fs-2">{{ __('Editor Projects') }}</div>
                        <div class="card-body fs-4 px-5 d-flex flex-column gap-4">
                            <div>  
                                {{-- count projects found on db. just for fun --}}
                                <div>Number of project found: 
                                    <span class="fw-bold">{{count($projects)}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">  
                                <div>Click here to manage all your projects</div>
                                <a href="{{route('admin.projects.index')}}"><button class="btn btn-primary btn-lg">Clicca</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 p-3">
                    <div class="card">
                        <div class="card-header fs-2">{{ __('Placeholder') }}</div>
                        <div class="card-body fs-4 px-5 d-flex flex-column gap-4">
                           Placeholder for fure functionality 1
                        </div>
                    </div>
                </div>
                <div class="col-6 p-3">
                    <div class="card">
                        <div class="card-header fs-2">{{ __('Placeholder') }}</div>
                        <div class="card-body fs-4 px-5 d-flex flex-column gap-4">
                           Placeholder for fure functionality 2
                        </div>
                    </div>
                </div>
                <div class="col-6 p-3">
                    <div class="card">
                        <div class="card-header fs-2">{{ __('Placeholder') }}</div>
                        <div class="card-body fs-4 px-5 d-flex flex-column gap-4">
                           Placeholder for fure functionality 3
                        </div>
                    </div>
                </div>
                <div class="col-6 p-3">
                    <div class="card">
                        <div class="card-header fs-2">{{ __('Placeholder') }}</div>
                        <div class="card-body fs-4 px-5 d-flex flex-column gap-4">
                           Placeholder for fure functionality 4
                        </div>
                    </div>
                </div>
                <div class="col-6 p-3">
                    <div class="card">
                        <div class="card-header fs-2">{{ __('Placeholder') }}</div>
                        <div class="card-body fs-4 px-5 d-flex flex-column gap-4">
                           Placeholder for fure functionality 5
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection

