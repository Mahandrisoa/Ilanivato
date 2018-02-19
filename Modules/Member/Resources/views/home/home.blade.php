@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header text-center">
            <h5>Fiangonana Lehibe sy Mitory</h5>
        </div>
        <div class="box-body">
            @foreach($posts as $post)
                <div class="sl-item">
                    <div class="sl-content">
                        <p>
                            {{ $post->titre }} <span
                                    class="sl-date text-muted pull-right margin">{{ $post->created_at }}</span>
                        </p>

                    </div>
                </div>
                <div class="box-divider"></div>
            @endforeach
        </div>
    </div>
@endsection