<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller{
    
    public function index(){
        $invoices = Invoices::all();

        return $invoices;
    }

    public function add(Request $r){
        $rawData = $r->only(['description', 'value', 'address_id', 'user_id']);

        $invoice = Invoices::create($rawData);

        return $invoice;
    }

    public function findOne(Request $r){
        $invoice = Invoices::find($r->id);
        $invoice['address'] = $invoice->address;
        $invoice['user'] = $invoice->user;

        return $invoice;
    }
}
