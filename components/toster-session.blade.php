@php
if(!isset($errors)) $errors= new Illuminate\Support\ViewErrorBag;
@endphp

@if (session()->has('success'))
<input type="hidden" id="session_success" value="{{ session()->get('success')}}">
@endif
@if (session()->has('status'))
<input type="hidden" id="session_success" value="{{ session()->get('status')}}">
@endif
@if(session()->has('error'))
<input type="hidden" id="session_error" value="{{ session()->get('error')}}">
@endif
@if(session()->has('warning'))
<input type="hidden" id="session_warning" value="{{ session()->get('warning')}}">
@endif
@if(session()->has('info'))
<input type="hidden" id="session_info" value="{{ session()->get('info')}}">
@endif
@if($errors->any())
<input type="hidden" id="session_error_count" value="{{ count($errors) }}">
@foreach ($errors->all() as $key=>$error)
<input type="hidden" id="session_error{{ $key }}" value="{{ $error }}">
@endforeach
@endif