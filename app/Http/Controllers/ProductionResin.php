<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductionResin extends Controller
{
    public function indexResin()
    {
        return view('pages.productioncontrol.indexresin', [
            'attributes' => collect([
                'sidebarVariant' => 'default',
                'headerVariant' => 'dark',
                'background' => 'bg-gray-100',
            ])
        ]);
    }
}