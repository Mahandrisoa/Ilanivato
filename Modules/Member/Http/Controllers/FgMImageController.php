<?php

namespace Modules\Member\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Member\Entities\FgMImage;

class FgMImageController extends Controller
{
    public function destroy($id)
    {
        $img = FgMImage::findOrFail($id);
        $img->delete();
        return response()->json(null, 204);
    }
}
