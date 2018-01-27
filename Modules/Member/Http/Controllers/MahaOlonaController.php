<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MahaOlonaController extends AbstractPostController
{
    protected $nbrPerPage = 5;
    protected $typeId = [19,20];
    protected $typePost = "maha-olona";
    protected $typePostId = 7;
}
