    <!DOCTYPE html>
    <html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>متجرنا - الصفحة الرئيسية</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    </head>
    <body>
        <!-- شريط التنقل العلوي -->
        @include('client.partials.navbar')


@yield('content')
        <!-- تذييل الصفحة -->
       @include('client.partials.footer')

        <!-- Bootstrap JS -->
       @include('client.partials.script')
    </body>
    </html>
