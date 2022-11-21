<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <style>{!! $css ?? '' !!}</style>
    </head>
    <body>
        <p><strong>{{ $url?? '' }}</strong></p>
        {!! $error ?? '' !!}
    </body>
</html>
