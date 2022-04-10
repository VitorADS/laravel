<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller{
    
    public function index(){
        $invoices = Invoice::all();

        return $invoices;
    }

    public function add(Request $r){
        $rawData = $r->only(['description', 'value', 'address_id', 'user_id']);

        $invoice = Invoice::create($rawData);

        return $invoice;
    }

    public function findOne(Request $r){
        $invoice = Invoice::find($r->id);

        return $invoice->user;
    }
}
