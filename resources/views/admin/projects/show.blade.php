@extends('layouts.app')

@section('page-title', 'show')

@section('main-content')

    <div class=" container ">

        <div class="row my-4 ">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul>
                            <li>
                                {{ $project->title }}
                            </li>
                            <li>
                                {{ $project->description }}
                            </li>
                            <li>
                                {{ $project->date }}
                            </li>
                            <li>
                                {{ $project->type->title }}
                            </li>
                            <li>
                                {{ $project->url }}
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>

        </div>

    </div>


@endsection
