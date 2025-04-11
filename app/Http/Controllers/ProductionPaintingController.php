<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductionPaintingController extends Controller
{
    public function indexPainting()
    {
        return view('pages.productioncontrol.indexpainting', [
            'attributes' => collect([
                'sidebarVariant' => 'default',
                'headerVariant' => 'dark',
                'background' => 'bg-gray-100',
            ])
        ]);
    }
}