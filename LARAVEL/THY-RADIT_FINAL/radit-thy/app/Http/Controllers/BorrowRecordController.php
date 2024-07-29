<?php

namespace App\Http\Controllers;

use App\Models\BorrowRecord;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class BorrowRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $borrow_records = BorrowRecord::all();
        return response(["data"=>$borrow_records,"message"=>"Response has been successfuly","status"=>200]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'borrow_date' => 'required',
            'return_date' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 500);
        }
        $borrow_date = $request->get("borrow_date");
        $return_date = $request->get("return_date");
        $isBorrowRecord_created = BorrowRecord::create(["borrow_date" => $borrow_date, "return_date" => $return_date]);
        if ($isBorrowRecord_created) {
            return response(["data" => $isBorrowRecord_created, "message" => "BorrowRecord has been create successfuly"], 200);
        } else {
            return response(["data" => $isBorrowRecord_created, "message" => "BorrowRecord is not create successfuly"], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BorrowRecord $borrowRecord)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BorrowRecord $borrowRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowRecord $borrowRecord)
    {
        //
    }
}
