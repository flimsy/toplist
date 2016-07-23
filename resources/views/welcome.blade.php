@extends('layouts.app')

@section('content')
<style>
.container {
   padding-top: 25px;
   margin-left: -40px;
}
</style>
 <div class="container">
            <div class="box">
                <div class="text-center">
                    <h1>TopList</h1>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">Premium</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">
                                    <h3>TurmoilX</h3>
                                    <img style="-webkit-user-select: none" src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=350%C3%97150&amp;w=700&amp;h=100">
                                </div>
                                <p style="font-size:140%;padding-top:5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <a href="#" class="btn btn-primary col-md-6">Buy a Premium Spot</a>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">Top List</h3>
                    </div>
                    <div class="panel-body">
                    @foreach($entries as $entry) 
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">
                                    <h3><a href="{{$entry->entry_url}}">{{ $entry-> entry_name}}</a></h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                    <a href="{{$entry->entry_url}}">
                                        <img style="-webkit-user-select: none" width="900px" height="100px" src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=900%C3%97100&amp;w=900&amp;h=100">
                                    </a>
                                    </div>
                                    <div class="col-xs-1">
                                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left" aria-describedby="tooltip947652"> <img style="vertical-align:middle; max-height:48px;" src="{{ URL::asset('green_arrow_up.png') }}">
                                            <h2 style="display:inline; padding-top:5px;">{{ $entry->votes }}</h2>
                                        </button>
                                    </div>
                                </div>
                                <p style="font-size:140%;padding-top:5px;">{{ $entry->description }}</p>
                            </div>

                            <div class="h-divider text-center"></div>
                        @endforeach
                        </div>

                        <div class="text-center">
                          {{ $entries }}
                      </div>
                  </div>


              </div>
        </div>
    </div>
@endsection
