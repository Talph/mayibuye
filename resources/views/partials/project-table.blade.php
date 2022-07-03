
    <div class="row mt-5">
        <div class="col-md-12">
    <div class="title text-left"><h3 class="h3">Projects</h3></div>
<table class="table" id="dataTable">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Project number</th>
        <th scope="col">Project Name</th>
        <th scope="col">Client</th>
        <th scope="col">Project value</th>
        <th scope="col">Start date</th>
          <th scope="col">Completion date</th>
        <th scope="col">Project status</th>

      </tr>
    </thead>
    <tbody>
      @foreach($projects as $project)
      <tr>
        <th scope="row">{{$project->id}}</th>
        <td>{{$project->project_number}}</td>
        <td>{{ucfirst(strtolower($project->project_name))}}</td>
        <td>{{$project->getRelatedClients()->client_name}}</td>
        <td>{{$project->project_value}}</td>
        <td>{{$project->start_date}}</td>
          <td>{{$project->end_date}}</td>
        <td>{{ucfirst($project->project_status)}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>

