<!DOCTYPE html>

<html lang="ru_RU">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{env('APP_NAME')}}</title>
    </head>
    <body>
<h1>{{env('APP_NAME')}}</h1>
<form action="{{route('register')}}" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <br>
    <input type="date" name="birthday" placeholder="Birthday">
    <input type="number" name="age" placeholder="Age">
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br>
    <button type="submit">Register</button>
</form>
<script>

</script>
    </body>
</html>
