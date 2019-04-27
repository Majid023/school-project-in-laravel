
@extends('layouts.app')
@section('content')
<br />
<div class="container">
    <div class="container">
        <div class="jumbotron shadow--box--1">
            <h3>Contact us</h3>
            <p style="font-weight:bold"> abc, Road <br/>Ranchi Jharkhand 825315</p>
            <p >
                <ul style="color:blue">
                    <li>456782323</li>
                    <li>345678322</li>
                    <li>098765435</li>
                    <li>abc@gmail.com</li>
                </ul>
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="container">
        <div class="jumbotron shadow--box--1">
            <fieldset>
                <legend>
                    <h3>Send an email. All Fields are required.</h3>
                </legend>
                <form action="" method="POST">

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                            required="required" />
                    </div>


                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>


                    <div class="form-group">
                        <label for="number">Mobile no.:</label>
                        <input type="text" class="form-control" id="number" name="number" placeholder="Mobile no." required pattern="(^[6789]\d{9}$)">
                    </div>
                    <div class="form-group">
                        <label for="message">Messge:</label>
                        <textarea class="form-control" rows="5" id="message" name="msg" required
                            placeholder="Type message here."></textarea>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="copytosend">
                        <label class="custom-control-label" for="customCheck">Send a copy to yourself</label>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <button type="submit" class="dbtn btn--style--1">Send</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>
<br />
@endsection