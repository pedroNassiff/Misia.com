<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'lastname', 'email', 'password', 'rol_id', 'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }
    function getLasname() {
        return $this->lastname;
    }
    function getEmail() {
        return $this->email;
    }
    function getPassword() {
        return $this->password;
    }
    function getRolId() {
        return $this->rol_id;
    }
    function getImage() {
        return $this->image;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRolId($rol_id) {
        $this->rol_id = $rol_idea;
    }

    function setImage($image) {
        $this->image = $image;
    }

    public function save(){
        
    }
    
}

