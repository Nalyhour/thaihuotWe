<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partner::where('Status', 0)->orderBy('id', 'ASC')->get();
        // Additional logic or processing if needed
        return view('partners.index', ['partners' => $partners]);
    }
}