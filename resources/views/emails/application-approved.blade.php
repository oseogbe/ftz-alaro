@extends('layouts.emails')

@section('content')
    <div style="margin: 0 auto; max-width: 600px;">
        <p>Dear {{ $application->last_name }} {{ $application->first_name }},</p>
        <p>We're glad to approve your application on behalf of {{ $application->company_name }}. You can proceed with your application via the link provided below.</p>
        <p><a href="{{ $application_link }}" style="color: #6DA681">Continue Application</a></p>
        <p>Regards,</p>
        <p>{{ config('app.name') }}</p>
    </div>
@endsection
