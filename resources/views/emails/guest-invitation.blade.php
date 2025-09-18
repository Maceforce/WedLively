<p>Dear {{ $guest->first_name }} {{ $guest->last_name }},</p>

<p>You have been invited to attend the wedding event.</p>

<p>Please confirm your attendance by clicking the link below:</p>

<a href="{{ $confirmationLink }}">Confirm Attendance</a>

<p>Thank you!</p>
