<?php

use Illuminate\Support\Facades\Route;
use App\Models\Address;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AddUser/name={name}&email={email}&password={pass}', function($name, $email, $pass){
    $user = new User(['name' => $name, 'email' => $email, 'password' => $pass]);
    if($user->save()){
        return "user saved";
    }
    else{
        return "not saved. ERROR !";
    }

});

Route::get('/User/{id}/AddAddress/address={addr}', function($id, $addr) {
    $user = User::findOrFail($id);

    $address = new Address(['full_address'=> $addr]);

    $user->address()->save($address);
});

Route::get('/User/{id}', function($id){
    $user = User::findOrFail($id);
    echo $user;
});

Route::get('/Address/{id}/edit/new_address={addr}', function ($id, $addr){
    $address = Address::findOrFail($id);

    $address->full_address = $addr;
    $address->save();

    echo "<script> alert('Address updated !');</script>";
    echo $address;
});


Route::get('/Address/search={addr_or_id}/User', function($addr_or_id){
    if(intval($addr_or_id)!=0){
        $address = Address::findOrFail($addr_or_id);
    }
    else{
        $address = Address::whereFullAddress($addr_or_id)->firstOrFail();
    }

    if(isset($address) && $address!=null){
        echo $address->user()->firstOrFail();

    }
    else{
        return request()->setStatusCode(400);
    }
});

Route::get('/Address/search={addr_or_id}/Delete', function($addr_or_id){
    if(intval($addr_or_id)!=0){
        $address = Address::findOrFail($addr_or_id);
    }
    else{
        $address = Address::whereFullAddress($addr_or_id)->firstOrFail();
    }

    if(isset($address) && $address!=null){
        $address->delete();
        $tmp = $address->full_address;
        echo "<script> alert('Address deleted !');</script>";
        sleep(5);
        return redirect('/Address/All');

    }
    else{
        return request()->setStatusCode(400);
    }
});

Route::get('/Address/search={addr_or_id}', function($addr_or_id){
    if(intval($addr_or_id)!=0){
        $address = Address::findOrFail($addr_or_id);
    }
    else{
        $address = Address::whereFullAddress($addr_or_id)->firstOrFail();
    }

    if(isset($address) && $address!=null){
        echo $address;

    }
    else{
        return request()->setStatusCode(400);
    }
});

Route::get('/Address/All', function(){
    $addresses = Address::get();
    foreach ($addresses as $addr){ 
        echo $addr; 
        echo "<br>";
        echo "<hr>";
        echo "<br>";
    }
});

