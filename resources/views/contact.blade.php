@extends('layouts.appother')
@section('content')
    <div class="contact">
        <form method="POST" action="handler.php"  enctype="multipart/form-data">
            <label for="email"> Enter your email:</label>

            <input type = "text"  id ="email" value="<?php echo $_SESSION['inputs']['email']; ?>" name = "email">

            What info would you like to know?

            <textarea   id ="info"  cols="40" name="info" rows="15"><?php echo $_SESSION['inputs']['info']; ?>  </textarea>
            <input type="submit">
        </form>
    </div>
@endsection