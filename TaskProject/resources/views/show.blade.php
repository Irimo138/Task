<h1>Form</h1>

    <form method="POST" action="{{route('task.store')}}">   
    @csrf
        <input type="text" name="newTask" id="newTask">
        <input type="submit" value="Send">
    </form>
    