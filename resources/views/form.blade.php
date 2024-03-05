<form action="/post" method="POST">
    @csrf

    <p>Name</p>
    <div>
        <input type="text" name="name">
    </div>

    <p>Username</p>
    <div>
        <input type="text" name="username">
    </div>

    <p>Password</p>
    <div>
        <input type="password" name="password">
    </div>

    <br>

    <div>
        <button type="submit">Register</button>
    </div>
</form>