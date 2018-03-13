@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">IREO FAMPIANARANA
                <div class="btn-group pull-right">
                    <a href="{{ route('fampianarana-member.create') }}">
                        <button type="button" class="btn btn-sm primary">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="box-body">
            <div class="m-b" id="accordion">
                @foreach($fampianarana as $f)
                    <div class="panel box no-border m-b-xs">
                        <div class="box-header p-y-sm">
                            <a href="{{ route('fampianarana-member.show',[ 'fampianarana_member' => $f->id]) }}">
                                {{ $f->titre }}
                            </a>
                            <div class="btn-group pull-right">
                                <a href="{{ route('fampianarana-member.edit',['fampianarana_member'=> $f]) }}"
                                   class="btn btn-xs white btn-icon"><i class="fa fa-pencil"></i>
                                </a>
                                <div style="display: inline-flex;padding-top: 0">
                                    {!! Form::open(['route'=> ['fampianarana-member.destroy', $f ], 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-icon btn-xs red-900">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $fampianarana->links() !!}
            </div>
        </div>
    </div>


@endsection
@section('js')
    @parent
    <script>
        $(function () {
            $('')

//            event.preventDefault();
//            document.getElementById('toritenyForm').submit();
        });
    </script>

@endsection