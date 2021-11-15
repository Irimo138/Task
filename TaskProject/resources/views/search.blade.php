<h1>Search</h1>
<form action="/show" method="get">
    @csrf
<input type="text" name="ser" id="ser"><input type="submit" value="Submit">

</form>

    @foreach($query as $que)
        <h3>{{ $que->task}}</h3>
    @endforeach
    
