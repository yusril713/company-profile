@component('mail::message')
Berikut kami lampirkan permintaan full dokumen yang anda request

@component('mail::table')
|                                                                |
| -------------------------------------------------------------- |
|{{ $kegiatan->title }} |
|<a href="{{ url('public/storage/' . $kegiatan->file) }}">Download Full Documents</a> |
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
