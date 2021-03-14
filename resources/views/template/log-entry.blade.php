<tr>
  <th scope="row">{{ $loop->iteration }}</th>
  <td>{{ $log->log_date }}</td>
  <td>{{ $log->title }}</td>
  <td><a href="{{ url('/log/'.$log->id) }}" class="badge bg-primary">Detail</a></td>
</tr>