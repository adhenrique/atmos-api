@component('mail::message')
<table>
<tr>
<td>
<img src="{{ url('/undraw_things_to_say_ewwb.svg') }}" alt="">
</td>
</tr>
<tr>
<td style="height: 20px"></td>
</tr>
<tr>
<td>
<h2>Hi Admin.</h2>
</td>
</tr>
<tr>
<td>An user is contacting you for help:</td>
</tr>
<tr>
<td>
<table style="width: 100%; margin-bottom: 10px; padding: 10px 0">
<tr>
<td>User name:</td>
<td>{{ $name }}</td>
</tr>
<tr>
<td>User email:</td>
<td>{{ $email }}</td>
</tr>
<tr>
<td>Subject:</td>
<td>{{ $mail_subject }}</td>
</tr>
<tr>
<td>Message:</td>
<td>{{ $message }}</td>
</tr>
</table>
</td>
</tr>
</table>
@endcomponent
