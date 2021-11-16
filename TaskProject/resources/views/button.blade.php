<h3>{{ $task->task}}</h3>
        <form action="/listo/{{$task->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">                   
        </form>
        <br>
        <form method="POST" action="/update/{{$task->id}}">   
            @csrf
            @method('PUT')
        <input type="text" name="update">
        <input type="submit" value="Update">
    </form>