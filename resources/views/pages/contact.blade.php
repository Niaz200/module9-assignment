@extends('layout.app')

@section('title', 'Contact')

@section('content')
    <div>
        <h1>Contact Me</h1>
        <p>Feel free to reach out to me using the form below:</p>
        
        <form action="/submit-contact" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" required></br></br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required></br></br>
            
            <label for="message">Message:</label>
            <textarea name="message" required></textarea></br></br>
            
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection