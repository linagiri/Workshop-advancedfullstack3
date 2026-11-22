<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>
<h1>Create Course</h1>

@if($errors->any())
    <div>
        <h3>Please fix the following errors:</h3>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/courses" method="POST">
    @include('course._form')
    <button type="submit">Create Course</button>
</form>

<br>
<a href="/courses">Back to Courses</a>
</body>
</html>
