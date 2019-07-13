@component('mail::message')
# Introduction

@component('mail::table')

| information	| data 	|
|:-------------:|:---- :|
|Name 			|{{ $user->name }}	|
|contact 			|{{ $user->contact }}	|
|address		|{{ $user->address }}	|
|email			|{{ $user->email }}	|

@endcomponent

@component('mail::button', ['url' => route('dashboard') ])
click here!!!!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
