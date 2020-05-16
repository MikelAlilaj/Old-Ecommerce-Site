@extends('layouts.app')

@section('content')

    @foreach($posts as $row)
        <div class="single_post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="single_post_title">
                            @if(Session()->get('lang') == 'italian')
                                {{ $row->post_title_it }}
                            @else
                                {{ $row->post_title_en }}
                            @endif
                        </div>


                        <div class="single_post_text">
                            <p> @if(Session()->get('lang') == 'italian')
                                    {!! $row->details_it !!}
                                @else
                                    {!! $row->details_en !!}
                                @endif </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach




@endsection
