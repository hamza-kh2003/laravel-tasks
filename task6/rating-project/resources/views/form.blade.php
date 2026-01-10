
<h2>Create Teacher Profile</h2>

<form action="{{ route('teacher_profiles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="number" name="user_id" placeholder="User ID"><br><br>

    <input type="file" name="image"><br><br>

    <input type="text" name="subject" placeholder="Subject"><br><br>

    <input type="text" name="branch" placeholder="Branch"><br><br>

    <input type="number" name="experience" placeholder="Experience"><br><br>

    <input type="text" name="phone" placeholder="Phone"><br><br>

    <textarea name="about" placeholder="About"></textarea><br><br>

    <button type="submit">Save Profile</button>
</form>