<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'A&AE')
<img src="{{ asset('img/AAEdarkbg.jpg') }}" class="logo" alt="A&AE Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
