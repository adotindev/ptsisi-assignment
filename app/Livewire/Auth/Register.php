<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Livewire\Component;
// use Illuminate\Http\Request;

class Register extends Component
{
        
    // public string $name = '';
    // public string $email = '';
    // public string $password = '';
    // public string $password_confirmation = '';
    public $username;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function register()
    {
        // print_r($this->username);
        $data = [
            'username' => $this->username,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ];
        // print_r($data);
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        DB::table('user')->insert([
            'ID_USER' => $data['username'],
            'NAMA_USER' => $data['name'],
            'EMAIL' => $data['email'],
            'PASSWORD' => Hash::make($data['password']),
            'CREATE_BY' => now(),
            'UPDATE_BY' => now(),
        ]);
        // event(new Registered($user = User::create($validated)));

        // Auth::login($data);

        session()->flash('success', 'Registration successful!');
        $this->redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}