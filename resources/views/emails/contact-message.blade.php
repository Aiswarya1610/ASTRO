<h3>New Contact Form Submission</h3>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
@if(!empty($data['subject']))
<p><strong>Subject:</strong> {{ $data['subject'] }}</p>
@endif
<p><strong>Message:</strong><br>{{ $data['message'] }}</p>
