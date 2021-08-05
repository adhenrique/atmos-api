@component('mail::message')
    <table>
        <tr>
            <td>
                <img src="{{ url('/undraw_forgot_password_gi2d.svg') }}" alt="">
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
            <td>You are receiving this email because we received a password reset request for your account.</td>
        </tr>
        <tr>
            <td>
                @component('mail::button', ['url' => $url])
                    Reset Password
                @endcomponent
            </td>
        </tr>
        <tr>
            <td>This password reset link will expire in {{ config('auth.passwords.'.config('auth.defaults.passwords').'.expire')  }} minutes.</td>
        </tr>
        <tr>
            <td style="height: 20px"></td>
        </tr>
        <tr>
            <td>If you did not request a password reset, no further action is required.</td>
        </tr>
        <tr>
            <td style="height: 20px"></td>
        </tr>
        <tr>
            <td>
                <p>If you’re having trouble clicking the button, copy and paste the URL below into your web browser: <br />
                    <a href="{{ $url }}">{{ $url }}</a>
                </p>
            </td>
        </tr>
    </table>
@endcomponent
