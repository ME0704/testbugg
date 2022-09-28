<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
</head>

<body>
    @if($layout == 'index')

    <form action="{{url('/store')}}" method="post">
        @csrf
        <h1>Welcome</h1>
        <div class="input-value">
            <label for="#">Name</label>
            <input type="text" name="name" placeholder="name"><br>
        </div>
        <div class="input-value">
            <label for="#">Email</label>
            <input type="email" name="email" placeholder="email"><br>
        </div>
        <div class="input-value">
            <label for="#">Password</label>
            <input type="password" name="password" placeholder="password"><br>
        </div>
        <div class="input-value">
            <label for="#">Phone Number</label>
            <input type="text" name="phone" placeholder="number"><br>
        </div>
        <div class="input-value">
            <label for="">Gender</label>
            <input type="radio" group="gender" name="gender" value="male" id="male">
            <label for="male">male</label>
            <input type="radio" group="gender" name="gender" value="female" id="female">
            <label for="female">female</label>
            <input type="radio" group="gender" name="gender" value="sus" id="sus">
            <label for="sus">sus</label>
        </div>
        <div class="input-value">
            <label for="lang">Language</label>
            <select name="language" id="lang">
                <option value="english">English</option>
                <option value="germany">Germany</option>
                <option value="japanese">Japanese</option>
            </select><br>
        </div>
        <div class="input-value">
            <label for="#">Zip Code</label>
            <input type="text" name="zip" placeholder="zip code"><br>
        </div>
        <div class="input-value">
            <label for="#">About</label>
            <textarea name="about" id="" cols="" rows="" placeholder="Write About yourself"></textarea>
        </div>
        <input type="submit" value="Register" class="btn">
    </form>

    @endif
    <script src="{{asset('/js/app.js')}}"></script>
</body>

</html>