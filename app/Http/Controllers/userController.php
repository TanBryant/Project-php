<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{ 
        public function tableList()
        {
            $user = User::all();
            return view ('Admin.pages.tables.table')->with('user', $user);
        }
      
        public function store(Request $request)
        {
            $input = $request->all();
            User::create($input);
            return redirect('user')->with('flash_message', 'user Addedd!');  
        } 
     
        
        public function edit($id)
        {
            $student = Student::find($id);
            return view('students.edit')->with('students', $student);
        }
     
      
        public function update(Request $request, $id)
        {
            $student = Student::find($id);
            $input = $request->all();
            $student->update($input);
            return redirect('student')->with('flash_message', 'student Updated!');  
        }
     
       
        public function destroy($id)
        {
            User::destroy($id);
            return redirect('user')->with('flash_message', 'user deleted!');  
        }
    
}
