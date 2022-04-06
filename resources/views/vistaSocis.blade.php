<table class="table">
    <thead>
        <tr class="table-primary">
          <td># id</td>
          <td>nom</td>
          <td>cognoms</td>
          <td>correu</td>
        </tr>
    </thead>
    <tbody>
        @foreach($socis as $soci)
        <tr>
            <td>{{$soci->id}}</td>
            <td>{{$soci->nom}}</td>
            <td>{{$soci->cognoms}}</td>
            <td>{{$soci->correu}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>