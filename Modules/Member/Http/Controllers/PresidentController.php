<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\President;
use Modules\Member\Http\Services\President\PresidentServiceInterface;

class PresidentController extends Controller
{
    private $presidentService;

    public function __construct(PresidentServiceInterface $presidentService)
    {
        $this->presidentService = $presidentService;
    }

    public function update(Request $request, President $president)
    {
        $this->presidentService->update($request, $president);
        return redirect()->route('bureaux.index');
    }
}
