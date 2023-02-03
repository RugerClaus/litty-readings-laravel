@extends('layouts.Customer')

@section('title', 'Schedule an Appointment')

@section('content')
    <section class="maincontent">
        <form action="{{}}" class="scheduler" method='post'>
            @csrf
            <input type="text" name="name" placeholder="Name:">
            <input type="text" name="email" placeholder="Email:">
            <select name="month" class="month">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            <select name="day"class="day">
                
            </select>
            <input type="hidden" name="year" class="year">
        </form>
    </section>
    <script src="{{asset('js/schedule.js')}}" defer></script>
@endsection