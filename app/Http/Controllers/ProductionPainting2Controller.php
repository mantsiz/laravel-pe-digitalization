<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductionPainting2Controller extends Controller
{
    public function indexPainting2()
    {
        return view('pages.productioncontrol.indexpainting2', [
            'attributes' => collect([
                'sidebarVariant' => 'compact', 
                'headerVariant' => 'light', 
                'background' => 'bg-white', 
            ])
        ]);
    }
}
