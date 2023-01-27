@extends('layouts.Customer')

@section('title', 'Contact')

@section('content')
<style>
    form {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        padding: 30px;
        width: 40%;
        margin-left: auto;
        margin-right: auto;
    }
    form input {
        font-size: 1.5rem;
        border: 10px solid rgb(245,198,69);
        border-radius: 25px;
        padding: 20px;
        background-color: rgb(0, 0, 0, 0.0);
        color: rgb(100, 206, 187);
    }
    form textarea {
        font-size: 1.3rem;
        resize: none;
        border: 10px solid rgb(245,198,69);
        border-radius: 25px;
        padding: 20px;
        background-color: rgb(0, 0, 0, 0.0);
        color: rgb(100, 206, 187);
        height: 300px;
    }
    form h1 {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        font-size: 2rem;
        font-family: spe;
        color: rgb(100, 206, 187);
    }
</style>
    <form action="{{}}" method="post">
        <h1>Contact Me</h1>
        @csrf
        <input type="text" name="name" placeholder="Name: " />
        <input type="text" name="subject" placeholder="Subject: " />
        <input type="text" name="email" placeholder="Email: ">
        <textarea name="message" placeholder="Message: " style="font-family: helvetica;"></textarea>
        <input type="submit" value="Submit">
    </form>
@endsection