@extends('../layout/master', ['title' => 'Create Contact'])
@section('content')
    <h3>Form Contact</h3>
    <hr>
    <form action="/contact" method="post">
        @csrf
        Email Address: &nbsp;
        <input type="email" name="email" placeholder="Enter email address">
        <br><br>
        Message: &nbsp;
        <textarea name="message" cols="30" rows="10"></textarea>
        <br>
        <br>
        <button type="submit" name="submit">Send</button>
    </form>
@endsection
