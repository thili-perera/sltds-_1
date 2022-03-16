<?php

namespace App\Http\Controllers\Branch;

use App\Bank;
use App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = Bank::all();
        return view('Branch.create',compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bank_id' => ['required'],
            'branch_name' => ['required'],
            'branch_code' => ['required'],
        ]);
        $branch = new Branch();
        $branch->bank_id = $request->bank_id;
        $branch->branch_name = $request->branch_name;
        $branch->branch_code = $request->branch_code;
        $branch->save();

        return redirect()->route('branch.create')->with('success','successfully added new branch');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('Branch.edit',compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'branch_name' => ['required'],
            'branch_code' => ['required'],
        ]);
        $branch->branch_name = $request->branch_name;
        $branch->branch_code = $request->branch_code;
        $branch->save();
        return redirect()->route('bank.show',$branch->bank_id)
        ->with('success','you have updated branch details successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        // dd($branch);
        $branch->delete();
        return redirect()->route('bank.show', $branch->bank_id)->with('success','Branch Deleted Successfully');
    }
}