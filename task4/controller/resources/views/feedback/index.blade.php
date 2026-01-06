<h2>Feedback List</h2>

@isset($feedback)
    <p><strong>Name:</strong> {{ $feedback['name'] }}</p>
    <p><strong>Message:</strong> {{ $feedback['message'] }}</p>
@endisset

@empty($feedback)
    <p>No feedback submitted yet.</p>
@endempty

<a href="{{ route('feedback.create') }}">Add New Feedback</a>