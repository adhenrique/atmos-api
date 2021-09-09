@component('mail::message')
    <table>
        <tr>
            <td>
                <img src="{{ url('/undraw_Partying_re_at7f.png') }}" alt="">
            </td>
        </tr>
        <tr>
            <td style="height: 20px"></td>
        </tr>
        <tr>
            <td>
                <h2>Welcome {{ $user }}.</h2>
            </td>
        </tr>
        <tr>
            <td>Your registration was successful and is in the process of confirmation with one of the administrators. Keep an eye on your inbox :D</td>
        </tr>
    </table>
@endcomponent
