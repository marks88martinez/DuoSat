


{{--<form class="navbar-form navbar-left" role="search">--}}
{{--<div class="form-group frm_input">--}}
{{--<input type="text" class="form-control" placeholder="Search">--}}
{{--</div>--}}

{{--</form>--}}

             {!! Form::open(['route' => 'queries.store', 'class'=>'navbar-form navbar-left'])!!}
            <div class="form-group frm_input">
             {!! Form::text('search', null,
                                    array('required',
                                         'class'=>'form-control',
                                         'placeholder'=>'Search...')) !!}
            </div>
             {{--{!! Form::submit('Search',--}}
                                        {{--array('class'=>'btn btn-default')) !!}--}}
             {!! Form::close() !!}

