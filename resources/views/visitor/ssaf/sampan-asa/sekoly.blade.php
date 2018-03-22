@extends('layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('css/w3c.css')}}">
    <style>
        .zadi-color {
            background-color: #E9C35E;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="w3-col l8 s12">
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="w3-center">
                    <h3>NY TANTARAN'NY SEKOLY</h3>
                    <h5>Taona niorenana, <span class="w3-opacity">1931</span></h5>
                </div>
                <div class="w3-justify">
                    <img src="{{asset('images/SEKOLY1.jpg')}}" alt="Men in Hats" style="width:100%"
                         class="w3-padding-16">
                    <p>Ny sekoly FJKM Ilanivato Misionera dia manao zava-dehibe ny fitoriana ny Filazantsara sy ny
                        fanabeazana Kristiana amin’ny mpianatra sy ny mpanabe ary ny ray aman-drenin’ny Mpianatra</p>
                    @foreach($group->historiques as $history)
                        <div class="row">
                            <div class="col-sm-2"><b>{{ $history->date }} : </b></div>
                            <div class="col-sm-10">
                                <p>{{ $history->evenement }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <i>
                        Marihina fa ny fampianarana ankapobeny ambaratonga voalohany no misy ankehitriny ary ahitana
                        mpianatra miisa 301.
                    </i>
                    <hr>
                    <div class="accordion w3-white">
                        NY TANJON'NY SEKOLY
                    </div>
                    <div class="panel-about">
                        <ul>
                            @foreach($group->objectifs as $objectif)
                                <li>{{$objectif->intitule}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <hr>
                    <div class="accordion w3-white">
                        IREO MPIKAMBANA AO AMIN'NY FKS
                    </div>
                    <div class="panel-about">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ANARANA</th>
                                <th class="text-center">ANDRAIKITRA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>RAHARIHANTA Landisoa</td>
                                <td>Tale</td>
                            </tr>
                            <tr>
                                <td>RAMAHANDRISOA Eric</td>
                                <td>Biraom-piangonana</td>
                            </tr>
                            <tr>
                                <td>RAZANAMAHAZO Olga</td>
                                <td>Biraom-piangonana</td>
                            </tr>
                            <tr>
                                <td>RAVAHATRARIVO Hery</td>
                                <td>Laika</td>
                            </tr>
                            <tr>
                                <td>RATOVONARIVO Abela Nirina</td>
                                <td>Laika</td>
                            </tr>
                            <tr>
                                <td>RANDRIAMAMOHA Olivia</td>
                                <td>Laika</td>
                            </tr>
                            <tr>
                                <td>RANIVOARIMANANA Patricia</td>
                                <td>Laika</td>
                            </tr>
                            <tr>
                                <td>RAKOTOMALALA Nirina</td>
                                <td>Laika</td>
                            </tr>
                            <tr>
                                <td>ANDRIANALIJAONA Esther</td>
                                <td>Mpandraharaha</td>
                            </tr>
                            <tr>
                                <td>ANDRIAMPENOMANANA Hantasoa</td>
                                <td>Mpampianatra</td>
                            </tr>
                            <tr>
                                <td>RATSIMARATRA Mbolatiana</td>
                                <td>FRAM</td>
                            </tr>
                            <tr>
                                <td>RAMANAMBOLOLONIRINA Herimanantsoa</td>
                                <td>FRAM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <button class="accordion w3-white">Ireo mpiasa matihanina</button>
                <div class="panel-about">
                    <br>
                    <p>
                        Ireto avy ireo mpiasa matihaniana mivondrona ao amin'ny Sekoly ankehitriny :
                    </p>

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ANARANA</th>
                            <th class="text-center">ANDRAIKITRA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>RAHARIHANTA Voahanginirina Landisoa
                            </td>
                            <td class="text-center">Tale</td>
                        </tr>
                        <tr>
                            <td>ANDRIANALIJAONA Ravelosoa Esther
                            </td>
                            <td class="text-center">Mpandraharaha</td>
                        </tr>
                        <tr>
                            <td>RASOAMANATANY Rakotoarimisa
                            </td>
                            <td class="text-center">Mpampianatra</td>
                        </tr>
                        <tr>
                            <td>RAKOTOSON Tsiorinirina
                            </td>
                            <td class="text-center">Mpampianatra</td>
                        </tr>
                        <tr>
                            <td>RATSIMBAVOLOLONA Veroniaina Lydia
                            </td>
                            <td class="text-center">Mpampianatra</td>
                        </tr>
                        <tr>
                            <td>RAHELINIRINA Malalasoa
                            </td>
                            <td class="text-center">Mpampianatra</td>
                        </tr>
                        <tr>
                            <td>RAFARAVOLOLOMANANA Chantale Elie
                            </td>
                            <td class="text-center">Mpampianatra</td>
                        </tr>
                        <tr>
                            <td>ANDRIAMPENOMANANA Ravalison Hantasoa
                            </td>
                            <td class="text-center">Mpampianatra</td>
                        </tr>
                        <tr>
                            <td>RAVELOARINORO Miora Onisoa
                            </td>
                            <td class="text-center">Mpampianatra</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="w3-col l4">
            <div class="w3-white w3-margin">
                <div class="w3-container w3-padding zadi-color">
                    <h4 class="w3-text-white">Fifandraisana</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    <li class="w3-padding-16">
                        <span class="w3-large">Adresse</span>
                        <br>
                        <span>ECOLE FJKM ILANIVATOLot IV Y 205 Ilanivato Ampasika</span>
                    </li>
                    <li class="w3-padding-16">
                        <span class="w3-large">Téléphone</span>
                        <br>
                        <span>+ 261 33 14 484 74</span>
                    </li>
                    <li class="w3-padding-16">
                        <span class="w3-large">E-mail</span>
                        <br>
                        <span class="link">raharihanta@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endsection