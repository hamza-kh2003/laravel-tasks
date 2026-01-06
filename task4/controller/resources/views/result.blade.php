<h2>Contact Result</h2>
{{-- 
@isset is used to check if a variable exists and is not null before displaying it.
@empty is used to check if a variable has no value (null, empty string, empty array, etc.) and display a fallback message.
--}}
@isset($data)
    <p>Name: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Message: {{ $data['message'] }}</p>
@endisset

@empty($data)
    <p>No data found</p>
@endempty