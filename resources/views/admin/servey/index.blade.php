@extends('admin.layouts.admin')

@section('content')

<!-- Main content -->
<section class="content" id="contentContainer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  {{-- <th>Sl</th> --}}
                  <th>Date</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Please rate the overall cleanliness.</th>
                  <th>Please rate the customer service provided by our staff.</th>
                  <th>Please rate the comport of your room.</th>
                  <th>Please rate the process of getting in to your room.</th>
                  <th>Please rate how likely would you recommend us to a family or friend.</th>
                  <th>Others</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $data)
                  <tr>
                    {{-- <td style="text-align: center">{{ $key + 1 }}</td> --}}
                    <td style="text-align: center">{{$data->created_at}}</td>
                    <td style="text-align: center">{{$data->name}}</td>
                    <td style="text-align: center">{{$data->email}}</td>
                    <td style="text-align: center">
                        @if ($data->overall_cleanliness == 1)
                            Excellent
                        @elseif ($data->overall_cleanliness == 2)
                            Good
                        @elseif ($data->overall_cleanliness == 3)
                            Not good not poor	
                        @elseif ($data->overall_cleanliness == 4)
                            Poor
                        @else
                            Very poor
                        @endif
                    </td>
                    <td style="text-align: center">
                        @if ($data->customer_service == 1)
                            Excellent
                        @elseif ($data->customer_service == 2)
                            Good
                        @elseif ($data->customer_service == 3)
                            Not good not poor	
                        @elseif ($data->customer_service == 4)
                            Poor
                        @else
                            Very poor
                        @endif
                    </td>
                    <td style="text-align: center">
                    
                        @if ($data->comport == 1)
                            Excellent
                        @elseif ($data->comport == 2)
                            Good
                        @elseif ($data->comport == 3)
                            Not good not poor	
                        @elseif ($data->comport == 4)
                            Poor
                        @else
                            Very poor
                        @endif
                    </td>
                    <td style="text-align: center">
                        @if ($data->process == 1)
                            Excellent
                        @elseif ($data->process == 2)
                            Good
                        @elseif ($data->process == 3)
                            Not good not poor	
                        @elseif ($data->process == 4)
                            Poor
                        @else
                            Very poor
                        @endif
                    </td>
                    <td style="text-align: center">
                        @if ($data->recommend == 1)
                            Excellent
                        @elseif ($data->recommend == 2)
                            Good
                        @elseif ($data->recommend == 3)
                            Not good not poor	
                        @elseif ($data->recommend == 4)
                            Poor
                        @else
                            Very poor
                        @endif
                    </td>
                    <td style="text-align: center">{{$data->others}}</td>
                  </tr>
                  @endforeach
                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection
@section('script')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection