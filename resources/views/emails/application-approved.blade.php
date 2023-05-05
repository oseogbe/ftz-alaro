@extends('layouts.emails')

@section('content')
    <div style="margin: 0 auto; max-width: 600px;">
        <p>Dear {{ $application->last_name }} {{ $application->first_name }},</p>
        <p>We're glad to approve your application on behalf of {{ $application->company_name }}. You can continue your application process via the link provided below.</p>
        <p>{{ $application_link }}</p>
        <p>Regards,</p>
        <p>{{ config('app.name') }}</p>
    </div>
@endsection
