<?php

namespace App\Http\Controllers\User;

use App\Bank;
use App\Bank_User;
use App\User;
use App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('User.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $banks = Bank::all();
        $branches = Branch::all();
        return view('User.create',compact('banks', 'branches'));
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
            'fname' => ['required', 'string', 'max:150'],
            'bank_id' => ['required'],
            'branch_id' => ['required'],
            'acc_number' => ['required'],
            'nic' => ['required', 'string', 'unique:users','min:10', 'max:11'],
        ]);
        // dd($request);
        $user = new User();
        $user->fname = $request->fname;
        $user->nic = $request->nic;
        $user->save();

        $bank_user = new Bank_User();
        $bank_user->user_id = $user->id;
        $bank_user->bank_id = $request->bank_id;
        $bank_user->branch_name = $request->branch_id;
        $bank_user->acc_number = $request->acc_number;

        $bank_user->save();


        return redirect()->back()->with('success','Add new user successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id',$id)->first();
        $user_details = Bank_User::where('user_id',$id)->get();
        return view('User.show',compact('user_details', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
    //     $acc_number = Bank_User::select('acc_number')->where('id',$id)->first();
    //     $user_id = Bank_User::select('user_id')->where('id', $id)->first();
    //    // dd($user_id);
    //     $user = User::where('id',$user_id)->first();
    //     // dd($user);
    //     $bank_id = Bank_User::where('bank_id',$id)->first();
    //     // dd($user);
    //     $branch_id = Bank_User::where('branch_name', $id)->first();

    //     $bank_name = Bank::where('bank_name', $bank_id)->first();
    //     $branch_name = Branch::where('branch_name', $branch_id)->first();

    //     $banks = Bank::all();
    //     $branches = Branch::all();
        
        return view('User.edit' ,compact('id'));
    }

    public function account_edit(Request $request, $id)
    {
        $user_id = Bank_User::select('user_id')->where('id', $id)->first();
        $user = User::find($user_id)->first();

        $banks = Bank::all();
        $branches = Branch::all();

        $bank_user = Bank_User::select('bank_id','acc_number')->where('id', $id)->first();
        $user_branch = Bank_User::select('branch_name')->where('id', $id)->first();

        // $bank_user = Bank_User::where('bank_id', $id)->first();
        // $user_branch = Bank_User::where('branch_name', $id)->first();

        // dd($bank_user);


        return view('User.edit', compact('user', 'branches', 'banks', 'bank_user', 'user_branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user_update(Request $request, Bank_User $account)
    {
        $request->validate([
            
            'acc_number' => ['required'],
        ]);
        // dd($request);
        $account->branch_name = $request->branch_name;
        $account->bank_id = $request->bank_id;
        $account->acc_number = $request->acc_number;
        $account->save();
        return redirect()->route('user.account_edit', $account->id)
        ->with('success', 'you have updated account details successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}