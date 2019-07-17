<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\icecream;
use DB;
use App\prize;

class icecreamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icecream = DB::select("select * from tbl_icecreams as a,tbl_recipe as b,tbl_shape as c,tbl_size as d where 
          a.rid=b.rid and a.sid=c.sid and a.szid=d.szid");
  
        return view('admin.view',compact('icecream'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add');
    
    }
    public function createice()
    {
        $recipe = DB::table("tbl_recipe")->pluck("recipe","rid");
        return view('admin.addice',compact('recipe'));
      
    
    }
    
    public function updatep()
    {
        $recipe = DB::select("SELECT * FROM `tbl_size` as a , tbl_shape as b , tbl_recipe as c, tbl_icecreams as d 
        where d.szid= a.szid AND a.sid=b.sid AND b.rid=c.rid");
        return view('admin.prizetbl',compact('recipe'));
           
    }
    public function showp(Request $request)
    {
        $pid=$request->input('pid');
        $recipe = DB::select("SELECT * FROM `tbl_size` as a , tbl_shape as b , tbl_recipe as c, 
        tbl_icecreams as d  where d.pid=$pid AND d.szid= a.szid AND a.sid=b.sid AND b.rid=c.rid");
        return view('admin.update',compact('recipe'));
    }


    public function prize($rid,Request $data)
    {
        // $rid=$data->input('rid');
        // echo $rid;
        $rid=$data['rid'];
        // echo $rid;
        $val = DB::select("SELECT * FROM `tbl_icecreams` WHERE rid='$rid'");
        foreach ($val as $obj)
        { 

            $rid= $obj->rid;
            $pid= $obj->pid;
            // echo $pid;
        $value = DB::select("SELECT * FROM tbl_icecreams,tbl_recipe, tbl_shape , tbl_size WHERE tbl_icecreams.pid=$pid 
        AND tbl_shape.sid=tbl_icecreams.sid AND tbl_size.szid=tbl_icecreams.szid AND tbl_recipe.rid='$rid'");
           
    foreach ($value as $object)
    
{ 
  
        $recipe= $object->recipe;
        $shape=$object->shape;
        $size=$object->size;
        $pstatus=$object->pstatus;
        // echo $recipe;
        $prize=$data['prize'];
        if($size == 'Regular')
        {
            $regprize=$prize;
            $larprize=$prize+2.5; 

            if($shape == 'Cup')
            {
                $coneprize=$regprize+3;
                $cupprize=$regprize;
            }
            else
            {
                $coneprize=$regprize;
                $cupprize=$regprize-3;
            }
        }
        else
        {
            $larprize=$prize;
            $regprize=$prize-2.5; 
            if($shape == 'Cup')
            {
                $coneprize=$regprize+3;
                $cupprize=$regprize;
            }
            else
            {
                $coneprize=$regprize;
                $cupprize=$regprize-3;
            }
        }
        // echo $coneprize;
        // echo $cupprize;
        
       if($pstatus == 0)
        {
        if($shape == 'Cup')
        {
        prize::create([
            'pid' => $pid,
            'prize' => $coneprize,
            ]);
        }
        else{
            prize::create([
                'pid' => $pid,
                'prize' => $cupprize,
                ]);
        }
    }
    else{
        if($shape == 'Cup')
        {
            prize::where('pid', $pid)
        ->update(['prize' => $coneprize]);
           
      
        }
        else{
            prize::where('pid', $pid)
        ->update(['prize' =>$cupprize]);
        }
         

    }
        DB::table('tbl_icecreams')->where('pid', $pid)->update(['pstatus'=>1]);
    
    }    
    }

 return redirect()->back() ->with('success','Prize Added successfully.');
    }
    
    
    public function showprize(Request $request)
    {
        $pid=$request->input('pid');
        $recipe = DB::select("SELECT * FROM `tbl_size` as a , tbl_shape as b , tbl_recipe as c,
         tbl_icecreams as d , tbl_prizes as e 
        where d.pid='$pid' AND d.szid= a.szid AND a.sid=b.sid AND b.rid=c.rid AND e.pid='$pid'");
        return view('admin.editprizetbl',compact('recipe'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
 
       $image = $data['image'];
       $filename=$image->getClientOriginalName();
       $img=$image->move(public_path().'/images/icecreams/', $filename);
      icecream::create([
     'rid' => $data['recipe'],
     'sid' => $data['shape'],
     'szid' => $data['size'],
     'filename' => $filename,
     'pstatus' => 0 ,
    
     
    ] );
    return redirect()->back() ->with('success','Product created successfully.');
 
     
    }


    
        
        
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $pid=$request->input('pid');
      //  return $wid;
        $st=DB::select("select * from tbl_icecreams as a,tbl_recipe as b,tbl_shape as c,tbl_size as d where pid='$pid' and a.rid=b.rid and a.sid=c.sid and a.szid=d.szid");
            return view('admin.editt',compact('st'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pid,Request $data)
    {
        $value = icecream::where('pid', '=', $pid)->get();
        $rid=$data['recipe'];
        $sid=$data['shape'];
        $szid=$data['size'];
        icecream::where('pid', $pid)
        ->update(['rid' => $rid,'sid'=>$sid,'szid'=>$szid]);
        return redirect()->back() ->with('success','Product Editted successfully.');
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pid)
    {
        DB::delete('delete from tbl_icecreams where pid=?',[$pid]);
        
        return redirect()->back() ->with('success','Product deleted successfully.');
 
    }

    public function recipe(Request $re)
    {
      
        $recipe=$re->input('recipe');
        DB::insert('insert into tbl_recipe(rid,recipe) 
     values(?,?)',[null,$recipe]);
         return redirect()->back() ->with('success','Recipe Added successfully.');
    }
    public function shape(Request $re)
    {
        $rid=$re->input('rid');
        $shape=$re->input('shape');
        DB::insert('insert into tbl_shape(sid,rid,shape) 
     values(?,?,?)',[null,$rid,$shape]);
         return redirect()->back() ->with('success','Shape Added successfully.');
    }
    public function size(Request $re)
    {
        $rid=$re->input('recipe');
        $sid=$re->input('shape');
        $size=$re->input('size');
        DB::insert('insert into tbl_size(szid,rid,sid,size) 
     values(?,?,?,?)',[null,$rid,$sid,$size]);
         return redirect()->back() ->with('success','Recipe Added successfully.');
    }

    public function addrecipee()
    {
        $recipe = DB::table("tbl_recipe")->pluck("recipe","rid");
        return view('admin.adds',compact('recipe'));
           
    }
    public function myrecipeAjax($rid)
    {
       
        $shape = DB::table("tbl_shape")
        ->where("rid",$rid)
        ->pluck("shape","sid");
return json_encode($shape);

    }
    public function mysizeAjax($sid)
    {
       
        $size = DB::table("tbl_size")
        ->where("sid",$sid)
        ->pluck("size","szid");
return json_encode($size);

    }
    
    }