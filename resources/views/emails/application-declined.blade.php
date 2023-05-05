@extends('layouts.emails')

@section('content')
    <div style="margin: 0 auto; max-width: 600px;">
        <p>Dear {{ $application->last_name }} {{ $application->first_name }},</p>
        <p>We've reviewed your application but unfortunately, we cannot approve it at this point in time. Reasons for this is provided below:</p>
        <p>{{ $application->comments }}</p>
        <p>Regards,</p>
        <p>{{ config('app.name') }}</p>
    </div>
@endsection
