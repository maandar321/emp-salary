<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Akkas Tech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('salary-slip/favicon.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
</head>
<body style="font-family: 'Lato', sans-serif; margin: 0;">
<div style="width: 100%; float: left;">
    <div style="width: 100%; margin: 0 auto; background: #fff; min-height: 845px;">
        <header style="width: 100%; float: left;">
            <div style="width: 100%; float: left;">
                <strong style="float: right;"><img style="display:block;" src="{{asset('salary-slip/logo.png')}}" height="107" width="83" alt="image description"></strong>
                <div class="at-sectionhead" style="width: 50%; float: left; padding: 25px 0px">
                    <h1 style="margin: 0; color: #c02026; font-size: 26px; font-weight: 400; line-height: 30px;">Salary Slip</h1><span style="display: block; color: #010101; font-size: 14px; font-weight: 400;">Month: {{$salary->date}}</span>
                </div>
            </div>
        </header>
        <div style="width: 100%; float: left; padding: 30px 0">
            <ul style="width: 100%; float: left; display: block; margin: 0 auto; list-style: none; padding: 0px;">
                <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; color: #010101; list-style-type: none; line-height: 12px; padding: 8px 0; text-transform: uppercase;">Employee ID:<span style="display: inline-block; color: #010101; text-transform: capitalize; vertical-align: middle; padding: 0 12px;">{{$employee->id}}</span></li>
                <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; color: #010101; list-style-type: none; line-height: 12px; padding: 8px 0; text-transform: uppercase;">date:<span style="display: inline-block; color: #010101; text-transform: capitalize; vertical-align: middle; padding: 0 12px;">{{$salary->date}}</span></li>
                <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; color: #010101; list-style-type: none; line-height: 12px; padding: 8px 0; text-transform: uppercase;">Employee Name:<span style="display: inline-block; color: #010101; text-transform: capitalize; vertical-align: middle; padding: 0 12px;">{{$employee->name}}</span></li>
                <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; color: #010101; list-style-type: none; line-height: 12px; padding: 8px 0; text-transform: uppercase;">status:<span style="display: inline-block; color: #010101; text-transform: capitalize; vertical-align: middle; padding: 0 12px;">{{$employee->status}}</span></li>
                <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; color: #010101; list-style-type: none; line-height: 12px; padding: 8px 0; text-transform: uppercase;">Date of joining:<span style="display: inline-block; color: #010101; text-transform: capitalize; vertical-align: middle; padding: 0 12px;">{{$employee->doj}}</span></li>
                <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; color: #010101; list-style-type: none; line-height: 12px; padding: 8px 0; text-transform: uppercase;">designation:<span style="display: inline-block; color: #010101; text-transform: capitalize; vertical-align: middle; padding: 0 12px;">{{$employee->designation}}</span></li>
            </ul>
        </div>
        <ul style="width: 50%; float: left; display: block; margin: 0 auto; list-style: none; padding: 0px;">
            <li style="color: #010101; font-size: 13px; font-weight: 700; text-transform: uppercase; text-align: left; padding: 15px 0 15px 20px; list-style-type: none; background: #d1d3d5;     border-top: 2px solid #a7a9ac; border-bottom: 2px solid #a7a9ac;">payables</li>
            <li style="width: 50%; float: left; color: #231f20; font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none;">Basic Salary</li>
            <li style="font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none; border-bottom: 2px solid #333; border-right: 2px solid #333;">{{$salary->basic_salary}}</li>
            <li style="width: 50%; float: left; color: #231f20; font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none;">Arrears</li>
            <li style="font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none; border-bottom: 2px solid #333; border-right: 2px solid #333;">NA</li>
            <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; padding: 10px; line-height: 12px; min-height: 12px; list-style-type: none;">Bonus</li>
            <li style="font-size: 12px; font-weight: 700; padding: 10px; line-height: 12px; min-height: 12px; list-style-type: none; border-bottom: 2px solid #333; border-right: 2px solid #333;">{{$salary->bonus}}</li>
            <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; padding: 10px; line-height: 12px; min-height: 12px; list-style-type: none;"></li>
            <li style="font-size: 12px; font-weight: 700; padding: 10px; line-height: 12px; min-height: 12px; list-style-type: none; border-bottom: 2px solid #333; border-right: 2px solid #333;"></li>
            <li style="width: 50%; float: left; color: #231f20; font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none;">TOTAL</li>
            <li style="font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none; border-bottom: 2px solid #333; border-right: 2px solid #333;">60,000</li>
            <li style="color: #231f20; font-size: 12px; font-weight: 700; padding: 10px; line-height: 12px; min-height: 12px; list-style-type: none; background: #000;"></li>
        </ul>
        <ul style="width: 50%; float: left; display: block; margin: 0 auto; list-style: none; padding: 0px;">
            <li style="color: #010101; font-size: 13px; font-weight: 700; text-transform: uppercase; text-align: left; padding: 15px 0 15px 20px; list-style-type: none; background: #d1d3d5; border-top: 2px solid #a7a9ac; border-bottom: 2px solid #a7a9ac;">deduction</li>
            <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none;">Advances</li>
            <li style="font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none; border-bottom: 2px solid #333;">0</li>
            <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none;">Tax Deduction</li>
            <li style="font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none; border-bottom: 2px solid #333;">{{$salary->tax_ded}}</li>
            <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none;">Other Deduction</li>
            <li style="font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none; border-bottom: 2px solid #333;">{{$salary->other_deduction}}</li>
            <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; padding: 10px; line-height: 12px; min-height: 12px; list-style-type: none; text-transform: capitalize;">absences</li>
            <li style="font-size: 12px; font-weight: 700; padding: 10px; line-height: 12px; min-height: 12px; list-style-type: none; border-bottom: 2px solid #333;">{{$salary->absence}}</li>
            <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; padding: 10px; line-height:12px; min-height: 12px; list-style-type: none;"></li>
            <li style="font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; line-height:12px; min-height: 12px; list-style-type: none; border-bottom: 2px solid #333;"></li>
            <li style="width: 50%; float: left; font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none; background: #000; color: #fff;">Net Payable</li>
            <li style="font-size: 12px; font-weight: 700; line-height: 12px; padding: 10px; list-style-type: none; background: #000; color: #fff;">{{$salary->net_payable}}</li>
        </ul>
        <div style="width: 100%; float: left; padding: 230px 0 0; background: url({{asset('salary-slip/img-02.png')}})no-repeat right; background-size: contain;">
            <div style="width: 50%; float: left;">
                <h2 style="width: 50%; float: left; font-size: 12px; line-height: 15px; font-weight: 700; color: #58595b; padding: 10px 0 0; border-top: 2px solid #333; margin: 0 0 0 100px;">HR Manager</h2>
            </div>
            <div style="width: 50%; float: left;">
                <h2 style="width: 50%; float: left; margin: 0; font-size: 12px; line-height: 15px; font-weight: 700; color: #58595b; padding: 10px 0 0; border-top: 2px solid #333;">Receiver’s Signature</h2>
            </div>
        </div>
        <footer style="width: 100%; float: left; padding:50px 0 0; position: fixed; bottom: 0;">
            <h3 style="margin: 0; color: #c02026; font-size: 12px; font-weight: 700; text-align: center; display: block; line-height: 15px; text-transform: uppercase; padding: 0 0 7px;">bringing ideas to life</h3>
            <div style="width: 100%; float: left;">
                <figure style="margin: 0; position: relative; width: 100%; height: 20px; float: left; overflow: hidden; background: url({{asset('salary-slip/img-01.jpg')}}) no-repeat; background-size: cover;">
                    <figcaption style="bottom:0; left: 0; position: absolute;"><span style="color: #fff; font-size: 11px; line-height: 19px; text-transform: uppercase; padding:0 0 0 110px; ">A PROJECT OF AKKAS MANAGEMENT GROUP</span>
                    </figcaption>
                </figure>

            </div>
            <ul style="width: 100%; float: left; margin: 0; list-style: none; line-height: inherit; padding: 20px 0;">
                <li style="width: 42%; float: left; list-style-type: none; line-height: inherit; font-size: 12px; font-weight: 700; color: #010101;"><span style="width: 10px; display: inline-block; vertical-align: middle; height: 10px; padding: 0 5px 1px 0; background: url({{asset('salary-slip/img-03.png')}}) no-repeat;"></span>Suite 205 - 3950 14th Avenue, Markham ON, L3R 0A9</li>
                <li style="width: 18%; float: left; list-style-type: none; line-height: inherit; font-size: 12px; font-weight: 700; color: #010101;"><span style="width: 10px; display: inline-block; vertical-align: middle; height: 10px; padding: 0 5px 2px 0; background: url({{asset('salary-slip/img-04.png')}}) no-repeat;"></span>+1 (647) 381 2401</li>
                <li style="width: 20%; float: left; list-style-type: none; line-height: inherit; font-size: 12px; font-weight: 700; color: #010101;"><span style="width: 10px; display: inline-block; vertical-align: middle; height: 10px;     padding: 0 5px 3px 0; background: url({{asset('salary-slip/img-05.png')}}) no-repeat;"></span>info@akkastech.com</li>
                <li style="width: 20%; float: left; list-style-type: none; line-height: inherit; font-size: 12px; font-weight: 700; color: #010101;"><span style="width: 10px; display: inline-block; vertical-align: middle; height: 10px; padding: 0 5px 0 0; background: url({{asset('salary-slip/img-06.png')}}) no-repeat;"></span>www.akkastech.com</li>
            </ul>
        </footer>
    </div>
</div>
</body>
</html>