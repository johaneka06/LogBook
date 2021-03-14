<tr>
  <td>{{ $log->log_date }}</td>
  <td>{{ $log->title }}</td>
  <td>
  <a href="{{ url('/log/'.$log->id.'/detail') }}" class="badge bg-primary">Detail</a>
  <a href="{{ url('/log/'.$log->id.'/delete') }}" class="badge bg-danger">Delete current logs</a>
  </td>
  
</tr>