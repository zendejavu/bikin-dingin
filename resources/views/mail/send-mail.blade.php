<x-mail::message>
# {{ $mailData['title'] }}

{{-- {{ 'Perangkat : '.$mailData['devices']['devices'] }}<br>
{{ 'Masalah : '.$mailData['problems']['problems'] }}<br>
{{ 'Alamat : '.$mailData['address'] }}<br>
{{ 'Tanggal Pengerjaan : '. Carbon\Carbon::parse($mailData['work_date'])->format('d M Y') }}<br>
{{ 'Catatan Tambahan : '.$mailData['notes'] }}<br> --}}

@lang("
    Terima kasih Anda telah mempercayakan Kami dalam jasa Servis dan Konsultasi terkait masalah Pendingin!.\n
")
@lang("
    Silakan lihat rincian biaya untuk pekerjaan yang baru saja diselesaikan. Kami menghargai pembayaran cepat Anda.
")

<x-mail::button :url="$mailData['url']">
Lihat Invoice
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