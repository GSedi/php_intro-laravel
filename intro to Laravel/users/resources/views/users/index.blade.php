<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>All Users</h1>

    @foreach($users as $user)

        <li>{{ $user->name }}</li>

    @endforeach

    <h2>Add a User</h2>

    <form action="users" method="POST">

        {{ csrf_field() }} 
        <!-- @csrf -->

        <p>
            <input type="text" name="name" id="" placeholder="Name" required>
        </p>
        <p>
            <input type="email" name="email" id="" placeholder="Email Address" required>
        </p>
        <p>
            <input type="password" name="password" id="" placeholder="Password" required>
        </p>
        <button type="submit">Submit</button>
    </form>

</body>
</html>