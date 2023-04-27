<?php
namespace App/controllers;
class student extends Basecontroller
{
    public function index (){
       return view ( name 'student/index');

    }
    public function new (){
        return view (name's student/new);
    }
}