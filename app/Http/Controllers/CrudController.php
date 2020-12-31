<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public function getOffer(){
        return Offer::get();
    }
    /*
    public function store(){
        Offer::create([
            'name'    => 'offes3',
            'price'   => '400',
            'details' => 'test Insert Offer'
        ]);
    }
    */

    public function creaet(Request $request){
        return view('Offers.Create');
    }
    public function store(Request $request){
        $roles = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',
        ];
        $message = [
            'name.required' => __('message.offer name required'),
            'name.max' => 'le max 12',
        ];
        $validator = Validator::make($request->all(),$roles,$message);
        if ($validator -> fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

        //insert
        Offer::create([
            'name' => $request ->name ,
            'price' => $request -> price,
            'details' => $request -> details,
        ]);
        return redirect()->back()->with(['success' => 'will Done!!']);
    }
}
