<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <style>{!! $css ?? '' !!}</style>
    </head>
    <body>
        Dear {{$name}},<br>
        <h3>
            Thank you
        </h3>
        <p>
            Your EOI form in IRIS has been submited successfully.
        </p>
        <p>
            <strong>{{$eoi_no}}</strong> is the reference number for future enquiry.
        </p>
        <p>
            In case of any queries, kindly contact Riya Rahiman, Lead Specialist - IRIS (<a href="mailto:iris@cdri.world">iris@cdri.world</a>).
        </p>
        <p>
            With Best Regards,<br>
            CDRI
        </p>
    </body>
</html>
