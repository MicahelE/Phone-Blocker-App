@extends('csv_file')

@section('csv_data')

<table class="table table-bordered table-striped">
 <thead>
  <tr>
   <th>Name</th>
   <th>Phone no</th>
   <th>Date of Birth</th>
   <th>LGA</th>
   <th>Mother's maiden name</th>
   <th>Line Blockage status</th>
   
  </tr>
 </thead>
 <tbody>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->name }}</td>
   <td>{{ $row->phonenumber }}</td>
   <td>{{ $row->dob }}</td>
   <td>{{ $row->lga }}</td>
   <td>{{ $row->momname }}</td>
   <td>{{ $row->blockstatus }}</td>
  </tr>
 @endforeach
 </tbody>
</table>

{!! $data->links() !!}

@endsection