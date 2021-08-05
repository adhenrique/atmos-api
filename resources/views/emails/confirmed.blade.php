@component('mail::message')
    <table>
        <tr>
            <td>
                <img src="{{ url('/undraw_Partying_re_at7f.svg') }}" alt="">
            </td>
        </tr>
        <tr>
            <td style="height: 20px"></td>
        </tr>
        <tr>
            <td>
                <h2>Hi {{ $user }}.</h2>
            </td>
        </tr>
        <tr>
            <td>Your registration was confirmed, and now you can access app.</td>
        </tr>
        <tr>
            <td>
                @component('mail::button', ['url' => env('WEB_URL')])
                    Let's go
                @endcomponent
            </td>
        </tr>
        <tr>
            <td>
                <p>If you can't click on the button above, copy this link and paste into your browser: <br />
                    <a href="{{ env('WEB_URL') }}">{{ env('WEB_URL') }}</a>
                </p>
            </td>
        </tr>
    </table>
@endcomponent
