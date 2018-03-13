@extends('layouts.master')
@section('css')
    @parent
    <style>
        * {
            box-sizing: border-box;
        }

        ul {
            list-style-type: none;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .month {
            padding: 70px 25px;
            width: 100%;
            background: #d59e2d;
            text-align: center;
            height: 256px;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .month .prev {
            float: left;
            padding-top: 10px;
            cursor: pointer;
        }

        .month .next {
            float: right;
            padding-top: 10px;
            cursor: pointer;
        }

        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size: 12px;
            color: #777;
            cursor: pointer;
        }

        .days li .active {
            padding: 5px;
            background: #d59e2d;
            color: white !important
        }

        /* Add media queries for smaller screens */
        @media screen and (max-width: 720px) {
            .weekdays li, .days li {
                width: 13.1%;
            }
        }

        @media screen and (max-width: 420px) {
            .weekdays li, .days li {
                width: 12.5%;
            }

            .days li .active {
                padding: 2px;
            }
        }

        @media screen and (max-width: 290px) {
            .weekdays li, .days li {
                width: 12.2%;
            }
        }

        .matin,
        .soir {
            margin-top: 30px;
            margin-bottom: 50px;
        }

        i.verse {
            margin-left: 10pt;
            margin-right: 10pt;
            font-family: Times New Roman;
            font-size: 12pt;
        }

        p.mhf {
            padding-top: 10pt;
            font-family: Times New Roman;
            font-size: 12pt;
            margin-left: 10pt;
            margin-right: 10pt;
        }

        p.mhf::first-letter,
        p.mhf:nth-child(1)::first-letter {
            font-weight: bold;
            font-size: 80pt;
            text-transform: capitalize;
            color: black;
            display: block;
            float: left;
            margin-right: 5pt;
        }

        .divider {
            height: 6px;
            background: url('/images/hr-12.png') repeat-x 0 0;
            border: 0;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /**
        */
        /* The Modal (background) */
        .modal {
            display: block; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 50px; /* Location of the box */
            padding-bottom: 50px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
            border-radius: 0px;
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 40px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 0;
            font-family: Helvetica;
            color: black !important;
            text-align: justify;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .font-weight-bold {
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <h2>MAHAFANTATRA FENO NY HEVITR'ANDRIAMANITRA</h2>
    <div class="row">
        <div class="col-md-8" style="background-color: #f6e9c1;height:465px;overflow-y: scroll; box-shadow:0 0px 1px rgba(0, 0, 0, 0.15)">
            <div class="matin">
                <i class="verse verse-maraina"></i>
                <p class="mhf mhf-maraina">
                </p>
            </div>
            <div class="divider"></div>
            <div class="soir">
                <i class="verse-hariva"></i>
                <p class="mhf mhf-hariva">
                </p>
            </div>

        </div>
        <div class="col-md-4" style="padding-left: 0px;padding-right:0px;height:465px;box-shadow:0 0px 1px rgba(0, 0, 0, 0.15)">
            <div class="month">
                <ul>
                    <li class="prev">&#10094;</li>
                    <li class="next">&#10095;</li>
                    <li class="">
                        <span class="month-date" style="font-size:18px"></span>
                    </li>
                </ul>
            </div>
            <div id="myCarousel" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
                    <div class="item">
                        <div class="text-center font-weight-bold weekdays" >Janvier</div>
                        <ul class="days" data-month="1">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold weekdays" >Février</div>
                        <ul class="days" data-month="2">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                        </ul>
                    </div>
                    <div class="item active">
                        <div class="text-center font-weight-bold weekdays" >Mars</div>
                        <ul class="days" data-month="3">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold" >Avril</div>
                        <ul class="days" data-month="4">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold weekdays" >Mai</div>
                        <ul class="days" data-month="5">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold" >Juin</div>
                        <ul class="days" data-month="6">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold weekdays" >Juillet</div>
                        <ul class="days" data-month="7">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold weekdays" >Août</div>
                        <ul class="days" data-month="8">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold" >Septembre</div>
                        <ul class="days" data-month="9">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold" >Octobre</div>
                        <ul class="days" data-month="10">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold weekdays" >Novembre</div>
                        <ul class="days" data-month="11">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="text-center font-weight-bold weekdays" >Décembre</div>
                        <ul class="days" data-month="12">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal animated fadeIn">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h4>
                TENY FANOLORANA
            </h4>
            <div id="tenyFanolorana">
                <p>
                    Atolotra eo am-pelatananao ity bokikely ity hanampy anao ho amin'ny famakiana ny Baiboly ao
                    anatin'ny herintaona.
                </p>
                <p>
                    1- Araka ny soratra ao amin'ny Lioka 24: 27 "Dia nanomboka hatramin'i Mosesy sy ny mpaminany rehetra
                    Izy (Jesoa), ka nanambara taminy ny hevitry ny teny milaza Azy ao amin'ny Soratra Masina rehetra",
                    dia takatra fa ny Soratra manontolo (Baiboly feno) no nentin'ny Tompo namelona indray ny finoan'ny
                    mpianatra taorian'ny fahadisoam-panantenany. Tena ilaina noho izany ny mahalala feno ny
                    hevitr'Andriamanitra mba hitomboan'ny finoana
                </p>
                <p>
                    2- Izany fahafantarana ny làlan-kevitra fenon' ny Tompo izany no miaro antsika tsy hanorina ny
                    finoantsika eo ambonin'ny teny hafa fa eo amin'ny Tenin'Andriamanitra ihany. "Ny voa dia ny
                    Tenin'Andrf&Inanitra" (Lio. 8: 11) fa tsy teny mitovitovy aminy ary "ny finoana dia avy amin'ny
                    Tenin'i Kristy" (Rom. 10: 17). Mba hiorina mafy sy hamaka lalina ny fanantenantsika,
                </p>
                <p>3- Ny famakiana ampahany ihany ny amin'ny Soratra Masina dia mitondra fahadisoam-panantenana toy ireo
                    mpianatra voalaza ery ambony; ary talohan'ireo aza ny Jiosy izay tsy nahafantatra ny Mesia rehefa
                    tonga Izy, satria nanao "safidy" tamin'izay tiany hovakiana (ohatra /sa/a 11-12) fa tsy ny Soratra
                    rehetra (ohatra /sa/a 52: 13 - 53: 12). Tsara ny mahita indray
                    mjjery ao anatin'ny herintaona ny tolokevitr'Andriamanitra feno.
                </p>
            </div>
            <div class="nav-divider"></div>
            <h4 data-target="#torolalana">
                TORO-LALANA
            </h4>
            <div id="torolalana">
                <p>
                    1- Dieny ety am-panombohana dia mangataha amin'ny Tompo hanome anao fitiavana hamaky ny Soratra
                    Masina sy ny fanahin'ny faharetana satria tena ady izao fanapahan-kevitra noraisinao izao: ady
                    amin'ny maizina sy ny fanandevozany (jereo Gen. 1: 3; Jao. 8: 32). Ary mety raha averina izany isaky
                    ny hamaky boky vaovao ao amin'ny Baiboly ianao.
                </p>
                <p>2- Manokàna fotoana raikitra (ny maraina sy ny hariva) hamakiana ny anjara amin'ny indray andro.
                    Mahatsara ny fiainam-panahinao izany fifehezan-tena izany.</p>
                <p>3- Alohan'ny famakiana, mivavaha ary mangataha ny Fanahin'Andriamanitra hitari-dàlana sy hampahery ka
                    hahavita hatramin'ny farany ny vakiteny.</p>
                <p>4- Eo am-pamakiana, rehefa misy andininy iray na maromaro hametrahan'ny Tompo "entana" ao am-ponao,
                    dia mariho na tsipiho na soraty ery amin'ny vodi-pejy na amin'ny karine hafa, fa aza hajanona ny
                    famakiana; ary rehefa vita dia ivereno ilay "anjara entana" ho anao teo.</p>
                <p>5- Saintsaino (tsakotsakohy) tsara izany dia ezaho ankatoavina sy ivelomana (Sal. 1:2)</p>
                <p>6- Avadiho ho teny avy aminao izay novakiana teo ka avereno any amin'Andriamanitra amin'ny alalan'ny
                    vavaka (fifonana, fangatahana, fisaorana) izay mifanandrify mba ho tena resaka ifanaovana Aminy ilay
                    izy.</p>
                <p>7- Dia ho toy izany isan'andro (maraina sy hariva) ary mandritra ny taona. Rehefa vita ny taona
                    voalohany dia mitohy amin'ny taona faharoa sy ny manaraka fa mahasoa ny manantitra izany.
                    (Asa.17:11)</p>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $(function () {

            var modal = document.getElementById('myModal');
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function () {
                modal.style.display = "none";
            }
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            onInit();
            function onInit() {
                var today = new Date();
                var day = today.getUTCDate();
                var month = today.getMonth() + 1;
                var todayLi = $('.days>li:contains(' + day + ')');
                todayLi.html('<span class="active">' + day + '</span>');
                $('.month-date').html(moment(today).locale('fr').format('LL'));
                var options = {
                    'url': '/api/mahantatra-feno/mois=' + month + '&jour=' + day,
                    'method': 'GET'
                };
                $.ajax(options)
                        .success(function (response) {
                            if (response.length > 0) {
                                $('.verse-maraina').html(response[0].fandaharana_maraina);
                                $('.mhf-maraina').html(response[0].soratra_masina_maraina);
                                $('.verse-hariva').html(response[0].fandaharana_hariva);
                                $('.mhf-hariva').html(response[0].soratra_masina_hariva);
                                $('.divider').show();
                                $('.month-date').html(moment(today).locale('fr').format('LL'));
                            }
                            else {
                                $('.verse-maraina').html('');
                                $('.mhf-maraina').html('');
                                $('.verse-hariva').html('');
                                $('.mhf-hariva').html('');
                                $('.divider').hide();
                            }
                            if (day < 10) {
                                day = '0' + day;
                            }
                            if (month < 10) {
                                month = '0' + month;
                            }
                            var today = month + '/' + day + '/' + new Date().getFullYear();
                            $('.month-date').html(moment(today).locale('fr').format('ll'));
                        })
                        .error(function (err, jqXhr) {
                            console.warn(err);
                        })
                        .done(function () {
                            blocked = false;
                        });
            }

            $('.days>li').on('click', function (e) {
                var text = $(this)[0].innerText;
                var toggled = '<span class="active">' + text + '</span>';
                var that = $(this);
                var month = $(that.parents()[0]).data('month');

                if (!blocked) {
                    if (!that.children().hasClass('active')) {
                        that.html(toggled);
                        that.siblings().each(function (index, val) {
                            if ($(val).children().hasClass('active')) {
                                $(val).html(val.innerText);
                            }
                        });
                    }
                    blocked = true;
                    var url = '/api/mahantatra-feno/mois=' + month + '&jour=' + text;
                    var options = {
                                'url': url,
                                'method': 'GET'
                            },
                            blocked = false;
                    $.ajax(options)
                            .success(function (response) {
                                if (response.length > 0) {
                                    $('.verse-maraina').html(response[0].fandaharana_maraina);
                                    $('.mhf-maraina').html(response[0].soratra_masina_maraina);
                                    $('.verse-hariva').html(response[0].fandaharana_hariva);
                                    $('.mhf-hariva').html(response[0].soratra_masina_hariva);
                                    $('.divider').show();
                                } else {
                                    $('.verse-maraina').html('');
                                    $('.mhf-maraina').html('');
                                    $('.verse-hariva').html('');
                                    $('.mhf-hariva').html('');
                                }
                                if (month < 10) {
                                    month = '0' + month;
                                }
                                if (text < 10) {
                                    text = '0' + text;
                                }
                                var today = month + '/' + text + '/' + new Date().getFullYear();
                                $('.month-date').html(moment(today).locale('fr').format('ll'));
                            })
                            .error(function (err, jqXhr) {
                                console.warn(err);
                            })
                            .done(function () {
                                blocked = false;
                            });
                }
                console.log(text);
            });

            $('.prev').on('click', function (e) {
                $("#myCarousel").carousel("prev");
            });
            $('.next').on('click', function (e) {
                $("#myCarousel").carousel("next");
            });

            $('#myCarousel').on('slid.bs.carousel', function (e) {
                var target = $(e.relatedTarget);
                var month = target.find('ul.days').data('month');
                var day = target.find('span.active').html();
                var options = {
                    'url': '/api/mahantatra-feno/mois=' + month + '&jour=' + day,
                    'method': 'GET'
                };

                $.ajax(options)
                        .success(function (response) {
                            if (response.length > 0) {
                                $('.verse-maraina').html(response[0].fandaharana_maraina);
                                $('.mhf-maraina').html(response[0].soratra_masina_maraina);
                                $('.verse-hariva').html(response[0].fandaharana_hariva);
                                $('.mhf-hariva').html(response[0].soratra_masina_hariva);
                                $('.divider').show();
                                $('.month-date').html(moment(today).locale('fr').format('LL'));
                            }
                            else {
                                $('.verse-maraina').html('');
                                $('.mhf-maraina').html('');
                                $('.verse-hariva').html('');
                                $('.mhf-hariva').html('');
                                $('.divider').hide();
                            }
                            if (day < 10) {
                                day = '0' + day;
                            }
                            if (month < 10) {
                                month = '0' + month;
                            }
                            var today = month + '/' + day + '/' + new Date().getFullYear();
                            $('.month-date').html(moment(today).locale('fr').format('ll'));
                        }).error(function (err, jqXhr) {
                            console.warn(err);
                        })
                        .done(function () {
                            blocked = false;
                        });
            });
        });
    </script>
@endsection
