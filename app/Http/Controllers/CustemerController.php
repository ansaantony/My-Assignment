<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\icecream;
use DB;
use App\prize;
use Illuminate\Support\Facades\Auth;

class CustemerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
       $pid=$req->input('pid');
       $recipe = DB::select("SELECT * FROM `tbl_size` as a , tbl_shape as b , tbl_recipe as c,
       tbl_icecreams as d , tbl_prizes as e 
      where d.pid='$pid' AND d.szid= a.szid AND a.sid=b.sid AND b.rid=c.rid AND e.pid='$pid'");
      return view('customer.single',compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $re)
    {
        
        $pid=$re->input('pid'); 
        $id=$re->input('id');
        $quantity=$re->input('qnt_1');
        $prize=$re->input('prize');
        $recipe = DB::select("SELECT * FROM `tbl_size` as a , tbl_shape as b , tbl_recipe as c,
        tbl_icecreams as d , tbl_prizes as e 
       where d.pid='$pid' AND d.szid= a.szid AND a.sid=b.sid AND b.rid=c.rid AND e.pid='$pid'");
       foreach($recipe as $row)
        if($row->shape == 'Cup')  {
           
                $total = 2 ;
                $total = $total * $quantity  +  $prize;
                
            }
            else {
                $total = 0 ;
                $total = $total + $quantity  *  $prize;
               
            }
               
        $check=DB::table('tbl_carts')->where(['pid'=>$pid])->where(['id'=>$id])->get();
        if(count($check)==0)
       {
       DB::insert('insert into tbl_carts(cartid,pid,id,quantity,total,status) 
       values(?,?,?,?,?,?)',[null,$pid,$id,$quantity,$total,1]);
      
       return redirect('/cart')->with('Success','Item Addedd to Cart.');
      }
       else
       {
          return redirect()->back() ->with('Failed','Item Already Exists.');
         
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pid)
    {
        DB::delete('delete from tbl_carts where pid=?',[$pid]);
        return redirect("/home");
       
  }

    public function view(Request $req)
    {
     //DB::table('tbl_cart')->where('id', Auth::id())->get();
     $id=Auth::id();
    
    $cart=   DB::select("  SELECT * FROM `tbl_carts` , tbl_icecreams 
    WHERE  tbl_carts.id= $id AND tbl_carts.pid=tbl_icecreams.pid");
      if(count($cart)>=1)
      {
      return view('customer.cart',compact('cart'));
    }
    else { 
      return back();
  }
}
}
