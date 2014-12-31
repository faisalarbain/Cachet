@extends('layout.dashboard')

@section('content')
    <div class="header fixed">
        <span class="uppercase">
            <i class="icon icon ion-android-alert"></i> {{ Lang::get('cachet.dashboard.team') }}
        </span>
        <a class="btn btn-sm btn-success pull-right" href="{{ URL::route('dashboard.team.add') }}">
            {{ Lang::get('cachet.dashboard.team-add') }}
        </a>
        <div class="clearfix"></div>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <p class='lead'>Team Members will be able to add, modify &amp; edit components and incidents.</p>
            </div>
        </div>
    </div>
@stop
