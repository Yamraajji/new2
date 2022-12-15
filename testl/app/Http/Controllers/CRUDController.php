<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use App\Models\Cruds;
use DB;

class CRUDController extends Controller
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
    public function create(Request $req)
    {
      $name=$req->name;
      $password=$req->password; 
      $age=$req->age;
     // $req=$req->file;


$fileName = time().'.'.$req->file->extension();  
 $req->file->move(public_path('uploads'), $fileName);
   //   $req->move();
     $data=['name'=>$name,
            'password'=>$password,
            'age'=>$age,
            'photo'=>$fileName
            ]; 
 Cruds::create($data);
  // wapas same 
      return redirect()->back();
// at specific place
  //    return redirect('/route name')
     
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
    public function show() 
    {  $title="Show";
      // $data= Cruds::all();
     $data= Cruds::paginate(2);
     
       return view('all',compact('data','title'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {  $title="Edit";
     $id=$request->id;
      $data=Cruds::find($id);
    return view('edit',compact('data','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $name=$request->name;
        $age=$request->age;
        $password=$request->password;

        Cruds::find($id);

        $data=['name'=>$name,
            'password'=>$password,
            'age'=>$age
            ]; 
            
      
        Cruds::where('id',$id)->update($data);
         
         return redirect('/all');
         // delete command when ID is auto increment 
          
         //Cruds::update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $id=$req->id;        
        Cruds::find($id)->delete();
        return redirect('/all');
    }

 
  public function logined()
    {
     $id=session()->get('user_id');
      $data=Cruds::where('id',$id)->first();
      return view('user/user',compact('data'));  
  }

     public function check(Request $req)
    {
        $id=$req->id; 
        $name=$req->name;
        $password=$req->password;
        $all=['name'=>$name,'password'=>$password
    ];

     

 $data=Cruds::where('name',$name)->where('password',$password)->first();
        
        
        if($data){     
       
       $ide= $data->id;
       session(['user_id'=>$ide]);
     //  auth()->user()->id;

       $ch= session()->all();
        return redirect('/user/');

         }

    else
       {
       
        return redirect()->back()->with('Wrong','yes');
     }
       
       
   
     }
       public function  logout()
    {
        //Session::forget('user_id');
          // auth()->logout();
     session()->forget('user_id');
       return redirect('/login');
  
  }

    

 
     
}
