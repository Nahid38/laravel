<h1> Welcome to the Laravel</h1>
@foreach ($users as $item)
    <p>This is user {{ $item['fname'] }} <br>
        last name {{ $item['lname'] }} </p>
@endforeach
