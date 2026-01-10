<h2>Teacher Details</h2>

@if($profile->image)
    <img src="{{ asset('storage/'.$profile->image) }}" width="200">
@endif

<p><strong>Subject:</strong> {{ $profile->subject }}</p>
<p><strong>Branch:</strong> {{ $profile->branch }}</p>
<p><strong>Experience:</strong> {{ $profile->experience }} years</p>
<p><strong>Phone:</strong> {{ $profile->phone }}</p>
<p><strong>About:</strong> {{ $profile->about }}</p>