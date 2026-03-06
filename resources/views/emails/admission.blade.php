<h2>New Student Application</h2>

<p>A new student has submitted an application through the website.</p>

<hr>

<table style="width:100%; border-collapse: collapse;">
    <tr>
        <td style="padding:8px;"><strong>Full Name:</strong></td>
        <td>{{ $app->name }}</td>
    </tr>

    <tr>
        <td style="padding:8px;"><strong>Email Address:</strong></td>
        <td>{{ $app->email }}</td>
    </tr>

    <tr>
        <td style="padding:8px;"><strong>Phone Number:</strong></td>
        <td>{{ $app->phone }}</td>
    </tr>

    <tr>
        <td style="padding:8px;"><strong>Course Applied For:</strong></td>
        <td>{{ $app->course->name }}</td>
    </tr>

    <tr>
        <td style="padding:8px;"><strong>Education Level:</strong></td>
        <td>{{ $app->education_level }}</td>
    </tr>

    @if($app->kcse_grade)
    <tr>
        <td style="padding:8px;"><strong>KCSE Mean Grade:</strong></td>
        <td>{{ $app->kcse_grade }}</td>
    </tr>
    @endif
</table>

<hr>

<p>
<strong>Submitted on:</strong> {{ $app->created_at->format('d M Y, H:i A') }}
</p>

<p style="color:gray;">
This message was automatically generated from the Siloam Medical & Technical College website application form.
</p>
