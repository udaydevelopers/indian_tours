Hello <strong>{{ $name }} Team,</strong>,
<p>Please find below booking details:</p>
<p>Full Name: {{$body->full_name}}</p>
<p>Email: {{$body->email}}</p>
<p>Mobile: {{$body->mobile}}</p>
<p>No of Persons: {{$body->no_of_persons}}</p>
<p>Bookig Date:{!! date('d/M/y', strtotime($booking_date)) !!}.</p>
<P>Package Name: {{ $body->package_name }}</p>
