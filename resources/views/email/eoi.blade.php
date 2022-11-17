<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <style>{!! $css ?? '' !!}</style>
    </head>
    <body>
        Dear {{$name}},<br>
        <p>
            This is to confirm that you EoI titled <strong>{{$eoi_project}}</strong> has been successfully submitted under IRIS. The EoI reference number is <strong>{{$eoi_no}}</strong>. Kindly refer this number for any future enquiry.
            {{-- The proposal is being examined for preliminary eligibility requirements. --}}
        </p>
        <p>
            In case of any queries, kindly contact Riya Rahiman, Lead Specialist - IRIS (<a href="mailto:iris@cdri.world">iris@cdri.world</a>).
        </p>
        <p>
            With Regards,<br>
            CDRI
        </p>
    </body>
</html>
