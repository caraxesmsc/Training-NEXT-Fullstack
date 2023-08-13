<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first Laravel Project</h1>
    <form action="" method="post">
        <label>Name:</label>
        @csrf
        <input type="text" name="name" >
        <label>Email:</label>
        @csrf
        <input type="email" name="email">
        <label>Grade:</label>
        @csrf
        <input type="text" name="grade">
        <input type="Submit">

    </form>
</body>
</html>