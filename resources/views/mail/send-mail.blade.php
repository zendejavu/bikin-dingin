<x-mail::message>
# {{ $mailData['title'] }}

{{ 'Perangkat : '.$mailData['devices']['devices'] }}<br>
{{ 'Masalah : '.$mailData['problems']['problems'] }}<br>
{{ 'Alamat : '.$mailData['address'] }}<br>
{{ 'Tanggal Pengerjaan : '. Carbon\Carbon::parse($mailData['work_date'])->format('d M Y') }}<br>
{{ 'Catatan Tambahan : '.$mailData['notes'] }}<br>

<x-mail::button :url="$mailData['url']">
Lihat Riwayat
</x-mail::button>

Thanks,<br>
{{ 'BikinDingin' }}

{{-- Subcopy --}}
@isset($actionText)
<x-slot:subcopy>
@lang(
    "Jika tombol \":actionText\" bermasalah, salin dan tempel URL dibawah ini\n".
    'ke dalam web browser Anda:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message>