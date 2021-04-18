@component('mail::message')
# Hello!
{{$name}}

{{$title}}

{{$body}}

@component('mail::button', ['url' => $action_url])
{{$action_button}}
@endcomponent

Thanks for your order,<br>
{{ config('app.name') }}
@endcomponent
