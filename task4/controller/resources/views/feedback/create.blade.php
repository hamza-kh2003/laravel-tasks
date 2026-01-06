<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Send Feedback</h2>

<form method="POST" action="{{ route('feedback.store') }}">
    @csrf

    <div>
        <label>Name</label><br>
        <input type="text" name="name">
    </div>

    <div>
        <label>Message</label><br>
        <textarea name="message"></textarea>
    </div>

    <button type="submit">Submit</button>
</form>

<a href="{{ route('feedback.index') }}">Go to Feedback List</a>
</body>
</html>