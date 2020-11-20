<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends User
{
            public function index()
        {
            $users['users']=user::where('deleted', 0)->paginate(7);
        
            
    
            return view('users.index', $users);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('users.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            User::insert(['name'=>request()->name, 'firstname'=>request()->firstname , 'phone'=>request()->phone, 'email'=>request()->email,'email_verified_at'=>request()->email_verified_at, 'password'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'type'=>request()->type, 'enterprise_id'=>request()->enterprise_id, 'cycle_id'=>request()->cycle_id]);

            return redirect('users');
           
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $user = User::findOrFail($id);

            return view('users.edit', compact('user'));
        }
        
        public function update(Request $request, $id)
        {
            $datosUser = request()->except(['_token', '_method']);
            User::where('id','=',$id)->update($datosUser);
    
            return redirect('users');
        }

        public static function destroy($id)
    {

        $user = User::where('id', $id);
        $user -> increment('deleted');
        

        return redirect('users');
    }


        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
       
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
       
}
