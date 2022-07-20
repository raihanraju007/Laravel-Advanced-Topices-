@component('mail::message')
{{--    # {{ $maildata['title'] }}--}}
    Your message body.
{{--    @component('mail::button', ['url' => $maildata['url']])--}}
    @component('mail::button', ['url' => 'url'])
        More Details
    @endcomponent
    Thanks,<br>
    Laravel
{{--    {{ config('app.name') }}--}}
@endcomponent
