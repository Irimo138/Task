<h3>{{ $task->task}}</h3>
        <form action="/listo/{{$task->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">                   
        </form>