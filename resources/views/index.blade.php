/**
 * Created by PhpStorm.
 * User: satvirgrewal
 * Date: 5/29/17
 * Time: 2:19 PM
 */
@extends('layouts.master')

@section('content')
    <h1>Project Management for Human Beings</h1>

    <p>The promise of PMApp is simple. All your projects and todos on one screen without having to filter by team or users. Finally, project management built just for human beings. Very Intuitive, Slick and crafted with the power of Laravel</p>

    <p><img src="{{asset('images/ProjectManagement.jpg')}}"></p>

    <a class="btn btn-large btn-info" href="/auth/register">Sign Up</a>

    <p class="login">Already signed up? <a class="btn btn-large btn-info" href="/auth/signin">Login</a></p>

    @stop