@extends('member::layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">MAHAFANTATRA FENO NY HEVITR'ANDRIAMANITRA
                <div class="btn-group pull-right">
                    <a href="">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="box-body">
            <table class="table" id="mhf-table">
                <thead>
                <tr>
                    <th>Jour</th>
                    <th>Mois</th>
                    <th>Versé biblique (Matin)</th>
                    <th>Texte bibilque (Matin)</th>
                    <th>Versé biblique (Soir)</th>
                    <th>Texte biblique (Soir)</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            @foreach($mfhs as $m)

            @endforeach
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script src="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" type="text/javascript"></script>
    <script>
        $(function () {
            var table = $('#mhf-table');
        });
    </script>
@endsection