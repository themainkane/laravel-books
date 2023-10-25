
    <h1>Book Details</h1>
    <br>
    <br>
      <div>
        <h4> Tile: {{$book->title}}</h4>
        <br>
        <h4>Desctiption: {{$book->description}}</h4>
        <br>

        <h2>Owner details</h2>
        <h4> Name: {{$animal->owner->first_name}} {{$animal->owner->surname}}</h4>
        <br>

         <div><img src="/images/pets/{{$animal->image->path}}" alt="animal"></div>
      </div>