

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
           Anivet Admin
        @endcomponent
    @endslot

    {{-- Body --}}
# Hello

We have received a new contact mail.<br />
**Name :** {{ $data->contact_name }}<br />
**Email :** {{ $data->contact_email }}<br />
**Message :** {{ $data->contact_msg }}


Thanks,

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
           &copy; 2018 All Copy right reserved
        @endcomponent
    @endslot
@endcomponent
