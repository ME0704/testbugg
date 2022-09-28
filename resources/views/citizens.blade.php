<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    @if($layout=='display')
    <div class="left">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone NUmber</th>
                    <th>Gender</th>
                    <th>Language</th>
                    <th>Zip Code</th>
                    <th>About</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citizens as $citizen)
                <tr>
                    <td>{{$citizen -> name}}</td>
                    <td>{{$citizen -> email}}</td>
                    <td>{{$citizen -> password}}</td>
                    <td>{{$citizen -> phone}}</td>
                    <td>{{$citizen -> gender}}</td>
                    <td>{{$citizen -> language}}</td>
                    <td>{{$citizen -> zip}}</td>
                    <td>{{$citizen -> about}}</td>
                    <td><a href="/edit/{{$citizen -> id}}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @elseif($layout=='edit')
    <div class="left">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone NUmber</th>
                    <th>Gender</th>
                    <th>Language</th>
                    <th>Zip Code</th>
                    <th>About</th>
                </tr>
            </thead>
            <tbody>
                {{-- when u make foreach variable citizens relate to $citizen, this collides with
                    the original $citizen variable in the same layout, so I only changed this to citibwoy --}}
                @foreach ($citizens as $citibwoy)
                <tr>
                    <td>{{$citibwoy -> name}}</td>
                    <td>{{$citibwoy -> email}}</td>
                    <td>{{$citibwoy -> password}}</td>
                    <td>{{$citibwoy -> phone}}</td>
                    <td>{{$citibwoy -> gender}}</td>
                    <td>{{$citibwoy -> language}}</td>
                    <td>{{$citibwoy -> zip}}</td>
                    <td>{{$citibwoy -> about}}</td>
                    <td><a href="/edit/{{$citibwoy -> id}}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="right">
        <form action="/update/{{$citizen->id}}" method="post">
            @csrf
            <h1>Edit</h1>
            <div class="input-value">
                <label for="#">Name</label>
                <input type="text" value="{{$citizen->name}}" placeholder="name" name="name"><br>
            </div>
            <div class="input-value">
                <label for="#">Email</label>
                <input type="email" value="{{$citizen->email}}" name="email" placeholder="email"><br>
            </div>
            <div class="input-value">
                <label for="#">Password</label>
                <input type="password" value="{{$citizen->password}}" name="password" placeholder="password"><br>
            </div>
            <div class="input-value">
                <label for="#">Phone Number</label>
                <input type="text" value="{{$citizen->phone}}" name="phone" placeholder="number"><br>
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
                <select value="{{$citizen->language}}" name="language" id="lang">
                    <option value="english">English</option>
                    <option value="germany">Germany</option>
                    <option value="japanese">Japanese</option>
                </select><br>
            </div>
            <div class="input-value">
                <label for="#">Zip Code</label>
                <input type="text" value="{{$citizen->zip}}" name="zip" placeholder="zip code"><br>
            </div>
            <div class="input-value">
                <label for="#">About</label>
                <textarea value="{{$citizen->about}}" name="about" id="" cols="" rows="" placeholder="Write About yourself"></textarea>
            </div>
            <input type="submit" value="Update" class="btn">
        </form>
    </div>

    @endif
</body>

</html>