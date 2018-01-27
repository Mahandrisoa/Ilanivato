<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class TafikaMasinaController extends AbstractPostController
{
    protected $nbrPerPage = 5;
    protected $typeId = [17,18];
    protected $typePost = "tafika-masina";
    protected $typePostId = 6;
}
