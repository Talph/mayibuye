@extends('backend.layouts.dashboard')

@section('content')

<div class="container">
  <div class="animated fadeIn">
    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Emails </h1>
    <div class="createProduct my-4">
    <a class="btn btn-primary" href={{route('emails.create')}}>{{__('Create New email')}}</a>
  </div>

    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="card">
        <div class="card-header">
          {{ __('Emails') }}</div>
        <div class="card-body">
          <table id="dataTable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Email name</th>
                <th>Content excert</th>
                <th>Logo</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($emails as $email)
              <tr class="odd">
                <td>{{ $email->email_name }}</td>
                <td>{{\Illuminate\Support\Str::limit(strip_tags($email->email_desc, 160)) }}</td>
                <td><img src="{{$email->getFirstMediaUrl('logos')}}" width="100"></td>
                  @if($email->is_published == 0)
                  <span class="draft">
                    Draft
                  </span>
                  @elseif($email->is_published == 1)
                  <span class="draft">
                    Published
                  </span>
                  @else
                  <span class="draft">
                    Awaiting approval
                  </span>
                  @endif

                </td>
                <td>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLinkemails" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false" aria-label="emails action button">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                      aria-labelledby="dropdownMenuLinkemails">
                      <div class="dropdown-header">Actions:</div>
                      <a href="{{ route('emails.edit', $email->id) }}" class="btn dropdown-item">Edit</a>

                      @can('delete', $email)
                      <div class="dropdown-divider"></div>
                      <form action="{{ route('emails.destroy', $email->id ) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn dropdown-item text-danger">Delete</button>
                      </form>
                      @endcan

                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>email name</th>
                <th>Content</th>
                <th>Status</th>
                <th></th>
              </tr>
            </tfoot>
          </table>
          {{ $emails->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection


@section('javascript')

@endsection