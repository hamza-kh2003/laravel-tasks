<h2>Teachers</h2>

<div style="display: flex; gap: 20px; flex-wrap: wrap;">
    @foreach ($profiles as $profile)
        <div style="border:1px solid #ccc; width:250px; padding:10px">
            
            @if($profile->image)
                <img src="{{ asset('storage/'.$profile->image) }}" style="width:100%; height:180px; object-fit:cover">
            @endif

            <h4>{{ $profile->subject }}</h4>
            <p>{{ $profile->branch }}</p>

            <a href="{{ route('teacher_profiles.show', $profile->id) }}">
                View Details
            </a>
        </div>
    @endforeach
</div>