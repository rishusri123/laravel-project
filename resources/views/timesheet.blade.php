<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h2 {
    text-align: center;
}
form {
    text-align: center;
    background-color:pink;
    margin-left:70px;
    margin-right:80px;
}
</style>
<body>
    <h2>TIMESHEET FORM</h2>
    <form method="POST" action="/store">
        @csrf   
        <label for="projectname">PROJECTNAME<label><br>
        <input type="text" name="projectname" placeholder="projectname"/><br>

        <label for="task">Task<label><br>
        <input type="text" name="task"  placeholder="task"/><br>

        <label for="Descripition">Descripition<label><br>
        <input type="textarea"  name="descripition" placeholder="projectname"/><br>

        <button type="submit">Submit<button>
    </form>
</body>
</html>