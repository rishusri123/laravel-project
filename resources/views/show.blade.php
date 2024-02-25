<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Details</title>
</head>
<body>  
    <style>
        .container {
    background: aquamarine;
    text-align: -webkit-center;
}
h2{
    text-align:center;
}
        </style>
   
    <h2>Show Details</h2>
    <div class="container">
    <table>
        <div id="w1">
        <thead id="aa1">
            <tr>
                <th>ID</th>
                <th>projectname</th>
                <th>task</th>
                <th>descripition</th>
                <th>Edit</th>
            </tr>
         @foreach($team as $team)
            <tbody id="aa1">
                <tr id="a2">
                    <td>{{$team->id}}</td>
                    <td>{{$team->projectname}}</td>
                    <td>{{$team->task}}</td>
                    <td>{{$team->descripition}}</td>
                    <td><a href="/edit/{{$team->id}}">Edit</a></td>
                </tr>
            </tbody>
    @endforeach
        </thead>
</div>
    </table>
    </div>
    
</body>
</html>