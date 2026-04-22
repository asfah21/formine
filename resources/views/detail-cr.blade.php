<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel="stylesheet" href="./my-css/mypdf-adt.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-ChzDzmAAZ0YIHCS3ve46r9IN7TNbIqChYbQ9L5ABrqPgU6qezieZmLQ9iY1ZAZbJ2A0jWM99d63Nd7dyVlc+r" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    {{-- <button id="backBtn" onclick="window.history.back()" class="no-print" style="background-color: red;color: white; padding: 10px 20px;
        margin: 15px 15px 0px 0px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer;">Back</button>

    <button id="downloadBtn" onclick="saveAsPDF()" class="no-print" style="background-color: green;color: white; padding: 10px 20px;
        margin: 15px 15px 15px 0px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer;">Save</button> --}}


<!-- Back Button -->
<button id="backBtn" onclick="window.history.back()" class="no-print" style="background-color: rgb(228, 0, 0);color: white; padding: 10px 20px;
        margin: 15px 15px 0px 0px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; display: inline-flex; align-items: center;">
    <!-- Icon Back -->
    <svg xmlns="http://www.w3.org/2000/svg" style="width: 16px; height: 16px; margin-right: 8px;" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M10 18a1 1 0 01-.707-.293l-6-6a1 1 0 010-1.414l6-6a1 1 0 111.414 1.414L5.414 10H17a1 1 0 110 2H5.414l5.293 5.293A1 1 0 0110 18z" clip-rule="evenodd" />
    </svg>
    Back
</button>

<!-- Save Button -->
<button id="downloadBtn" onclick="saveAsPDF()" class="no-print" style="background-color: rgb(0, 131, 0);color: white; padding: 10px 20px;
        margin: 15px 15px 15px 0px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; display: inline-flex; align-items: center;">
    <!-- Icon Save -->
    <svg xmlns="http://www.w3.org/2000/svg" style="width: 16px; height: 16px; margin-right: 8px;" fill="currentColor" viewBox="0 0 20 20">
        <path d="M17 16V5a2 2 0 00-2-2H5a2 2 0 00-2 2v11a2 2 0 002 2h10a2 2 0 002-2zM9 14a3 3 0 100-6 3 3 0 000 6zm4-5a1 1 0 01-1-1V7a1 1 0 112 0v1a1 1 0 01-1 1z" />
    </svg>
    Save
</button>

<style>
    @media print {
        .no-print {
            display: none;
        }
        .xl220{
            background:#44546A !important;
        }
    }

    .tdclass {
        mso-style-parent:style0;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid !important;
        width: 100%;
        word-wrap: break-word;
        white-space: normal;
    }

    body {
        max-width: 710px;
        margin: 0 auto;
    }

    height:2px !important;
tr
	{mso-height-source:auto;}
col
	{mso-width-source:auto;}
br
	{mso-data-placement:same-cell;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	border:none;
	mso-protection:locked visible;
	mso-style-name:Normal;
	mso-style-id:0;}
td
	{mso-style-parent:style0;
	padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl65
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl66
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;}
.xl67
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl68
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl69
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl70
	{mso-style-parent:style0;
	color:black;
	font-size:2.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl71
	{mso-style-parent:style0;
	color:black;
	font-size:2.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double black;}
.xl72
	{mso-style-parent:style0;
	color:black;
	font-size:2.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl73
	{mso-style-parent:style0;
	color:black;
	font-size:2.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;}
.xl74
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt none !important;}
.xl75
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl76
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double black;}
.xl77
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl78
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl79
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl80
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;
	border-left:.5pt solid ;}
.xl81
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;}
.xl82
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;}
.xl83
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl84
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid ;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl85
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	vertical-align:middle;
	white-space:normal;}
.xl86
	{mso-style-parent:style0;
	color:;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	vertical-align:middle;}
.xl87
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	vertical-align:middle;}
.xl88
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	vertical-align:middle;}
.xl89
	{mso-style-parent:style0;
	color:black;}
.xl90
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl91
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl92
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl93
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl94
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl95
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;}
.xl96
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl97
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl98
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:.5pt solid black;}
.xl99
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl100
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl101
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl102
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl103
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	white-space:normal;}
.xl104
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl105
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Medium Date";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl106
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Medium Date";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl107
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl108
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl109
	{mso-style-parent:style0;
	color:black;
	font-size:2.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double black;
	border-left:none;}
.xl110
	{mso-style-parent:style0;
	color:black;
	font-size:2.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double ;
	border-left:2.0pt double black;}
.xl111
	{mso-style-parent:style0;
	color:black;
	font-size:2.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double ;
	border-left:none;}
.xl112
	{mso-style-parent:style0;
	color:black;
	font-size:2.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:2.0pt double ;
	border-left:none;}
.xl113
	{mso-style-parent:style0;
	color:black;
	font-size:2.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl114
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:none;
	border-left:.5pt solid ;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl115
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid ;
	border-bottom:.5pt solid black;
	border-left:.5pt solid ;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl116
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid ;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl117
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl118
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl119
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:.5pt solid ;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl120
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl121
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl122
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl123
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:.5pt solid black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl124
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl125
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl126
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:.5pt solid black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl127
	{mso-style-parent:style0;
	color:;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl128
	{mso-style-parent:style0;
	color:;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:left;
	vertical-align:middle;
	border-top:none !important;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:.5pt solid ;}
.xl129
	{mso-style-parent:style0;
	color:;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl130
	{mso-style-parent:style0;
	color:;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl131
	{mso-style-parent:style0;
	color:;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none !important;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:.5pt solid black;}
.xl132
	{mso-style-parent:style0;
	color:;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl133
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl134
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none !important;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:.5pt solid black;}
.xl135
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl136
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:right;}
.xl137
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:.5pt solid ;}
.xl138
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl139
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl140
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl141
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:.5pt solid ;
	border-left:.5pt solid black;}
.xl142
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:.5pt solid ;
	border-left:none;}
.xl143
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid ;}
.xl144
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl145
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl146
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid ;}
.xl147
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl148
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid ;}
.xl149
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl150
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl151
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;}
.xl152
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl153
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:none;
	border-left:none;}
.xl154
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;}
.xl155
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;}
.xl156
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid ;
	border-bottom:none;
	border-left:none;}
.xl157
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid ;}
.xl158
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl159
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid;}
.xl160
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl161
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:1;
	mso-number-format:"\@";}


    </style>

    <script>
        function saveAsPDF() {
            // Ambil tombol yang ingin disembunyikan
            var downloadBtn = document.getElementById('downloadBtn');
            var backBtn = document.getElementById('backBtn');
            var loadingIndicator = document.getElementById('loadingIndicator');

            // Sembunyikan tombol dan tampilkan indikator loading
            downloadBtn.style.display = 'none';
            backBtn.style.display = 'none';

            // Ambil elemen body
            var element = document.body;

			var opt = {
				margin:       0.25, // Margin 0.5 inci
				filename:     'Form-P2H-Air-Compressor-GSI.pdf', // Nama file PDF yang akan disimpan
				image:        { type: 'jpeg', quality: 0.98 },
				html2canvas:  { scale: 2 },
				jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' } // Format A4
			};

            // Gunakan html2pdf untuk menyimpan body sebagai PDF dengan nama file yang diinginkan
            html2pdf().from(element).set(opt).save().then(function() {
                // Tampilkan kembali tombol dan sembunyikan indikator loading setelah PDF disimpan
                downloadBtn.style.display = 'none';
                backBtn.style.display = 'none';
            });
        }
    </script>

</head>

<body link="#0563C1" vlink="#954F72" class=xl65>
@php
    use Carbon\Carbon;
@endphp

    <table border=0 cellpadding=0 cellspacing=0 width=762 style='border-collapse:
    collapse;table-layout:fixed;width:574pt'>
    <col class=xl65 width=26 style='mso-width-source:userset;mso-width-alt:950;
    width:20pt'>
    <col class=xl65 width=16 span=5 style='mso-width-source:userset;mso-width-alt:
    585;width:12pt'>
    <col class=xl65 width=19 style='mso-width-source:userset;mso-width-alt:694;
    width:14pt'>
    <col class=xl65 width=16 span=3 style='mso-width-source:userset;mso-width-alt:
    585;width:12pt'>
    <col class=xl65 width=21 span=2 style='mso-width-source:userset;mso-width-alt:
    768;width:16pt'>
    <col class=xl65 width=16 style='mso-width-source:userset;mso-width-alt:585;
    width:12pt'>
    <col class=xl65 width=21 style='mso-width-source:userset;mso-width-alt:768;
    width:16pt'>
    <col class=xl65 width=13 span=3 style='mso-width-source:userset;mso-width-alt:
    475;width:10pt'>
    <col class=xl65 width=19 style='mso-width-source:userset;mso-width-alt:694;
    width:14pt'>
    <col class=xl65 width=16 span=8 style='mso-width-source:userset;mso-width-alt:
    585;width:12pt'>
    <col class=xl65 width=21 style='mso-width-source:userset;mso-width-alt:768;
    width:16pt'>
    <col class=xl65 width=16 style='mso-width-source:userset;mso-width-alt:585;
    width:12pt'>
    <col class=xl65 width=21 style='mso-width-source:userset;mso-width-alt:768;
    width:16pt'>
    <col class=xl65 width=16 span=10 style='mso-width-source:userset;mso-width-alt:
    585;width:12pt'>
    <col class=xl65 width=21 span=2 style='mso-width-source:userset;mso-width-alt:
    768;width:16pt'>
    <col class=xl65 width=64 style='width:48pt'>
    <tr height=16 style='mso-height-source:userset;height:12.0pt'>
    <td colspan=5 rowspan=4 height=64 width=90 style='height:48.0pt;width:68pt;border:1px solid black !important;'
    align=left valign=top>

    <span style='mso-ignore:vglayout;
    position:absolute;z-index:1;margin-left:12px;margin-top:4px;width:60px;
    height:54px'><img width=60 height=54 src="{{ asset('storage/images/logo-gsi.png') }}" v:shapes="Picture_x0020_1"></span>

    <span
    style='mso-ignore:vglayout2'>
    <table cellpadding=0 cellspacing=0>
    <tr>
        <td colspan=5 rowspan=4 height=64 class=xl89 width=90 style='height:48.0pt;
        width:68pt'></td>
    </tr>
    </table>
        </span></td>
        <td colspan=23 rowspan=2 class=xl90 width=385 style='border-right:.5pt solid black;
        border-bottom:.5pt solid black;width:290pt'>FORM / FORMULIR</td>
        <td colspan=6 class=xl95 width=101 style='border-right:.5pt solid black;
        border-left:none;width:76pt'>No. Dokumen</td>
        <td class=xl67 width=16 style='width:12pt'>:</td>
        <td colspan=6 class=xl94 width=106 style='border-right:.5pt solid black;
        width:80pt'>GSI4-OPR-002K</td>
        <td class=xl68 width=64 style='width:48pt'></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td colspan=6 height=16 class=xl98 style='border-right:.5pt solid black;border-top:none !important;
        height:12.0pt;border-left:none'>Revisi</td>
        <td class=xl69>:</td>
        <td colspan=6 class=xl97 style='border-right:.5pt solid black;border-top:none !important;'>0</td>
        <td class=xl68></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td colspan=23 height=16 class=xl100 style='border-right:.5pt solid black;border-top:none !important;
        height:12.0pt'>P2H</td>
        <td colspan=6 class=xl103 width=101 style='border-right:.5pt solid black;border-top:none !important;
        border-left:none;width:76pt'>Tanggal Efektif</td>
        <td class=xl69>:</td>
        <td colspan=6 class=xl105 style='border-right:.5pt solid black;border-top:none !important;'>23-Jun-24</td>
        <td class=xl68></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td colspan=23 height=16 class=xl107 style='border-right:.5pt solid black;
        height:12.0pt'>AIR COMPRESSOR</td>
        <td colspan=6 class=xl98 style='border-right:.5pt solid black;border-left:
        none;border-top:none !important;'>Halaman</td>
        <td class=xl69>:</td>
        <td colspan=6 class=xl97 style='border-right:.5pt solid black;border-top:none !important;'>1</td>
        <td class=xl68></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td colspan=41 height=16 class=xl109 style='height:12.0pt'>&nbsp;</td>
        <td class=xl68></td>
        </tr>
        <tr height=7 style='mso-height-source:userset;height:2.5pt'>
        <td height=7 class=xl71 style='height:5.25pt'>&nbsp;</td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl70></td>
        <td class=xl70></td>
        <td class=xl70></td>
        <td class=xl70></td>
        <td class=xl70></td>
        <td class=xl70></td>
        <td class=xl70></td>
        <td class=xl70></td>
        <td class=xl70></td>
        <td class=xl70></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl70></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl72></td>
        <td class=xl73>&nbsp;</td>
        <td class=xl74 style='border-left:none !important;'>&nbsp;</td>
        <!-- separator-->
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td height=16 class=xl76 colspan=4 style='height:12.0pt;mso-ignore:colspan'><span
        style='mso-spacerun:yes'> </span>OPERATOR</td>
        <td class=xl77></td>
        <td class=xl78>:</td>
        <td colspan=7 class=xl78 style="text-align: left">{{$Dtl->nama_driver}}</td>
        <td class=xl75></td>
        <td class=xl75></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl75 colspan=2 style='mso-ignore:colspan'>SHIFT</td>
        <td class=xl75></td>
        <td class=xl75></td>
        <td class=xl78>:</td>
        <td colspan=8 class=xl78 style="text-align: left">{{$Dtl->shift}}</td>
        <td class=xl73>&nbsp;</td>
        <td class=xl74>&nbsp;</td>
        <!-- separator-->
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td height=16 class=xl76 colspan=4 style='height:12.0pt;mso-ignore:colspan'><span
        style='mso-spacerun:yes'> </span>HARI/TGL</td>
        <td class=xl77></td>
        <td class=xl78>:</td>
        <td colspan=7 class=xl78 style="text-align: left"> {{ Carbon::parse($Dtl->date)->format('d-M-Y') }}</td>
        <td class=xl75></td>
        <td class=xl75></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl75 colspan=3 style='mso-ignore:colspan'>NO UNIT</td>
        <td class=xl75></td>
        <td class=xl78>:</td>
        <td colspan=8 class=xl78 style="text-align: left">{{$Dtl->no_unit}}</td>
        <td class=xl73>&nbsp;</td>
        <td class=xl74>&nbsp;</td>
        <!-- separator-->
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td height=16 class=xl76 colspan=3 style='height:12.0pt;mso-ignore:colspan'><span
        style='mso-spacerun:yes'> </span>LOKASI</td>
        <td class=xl75></td>
        <td class=xl75></td>
        <td class=xl78>:</td>
        <td colspan=7 class=xl78 style="text-align: left">Site Wolo</td>
        <td class=xl75></td>
        <td class=xl75></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl77></td>
        <td class=xl75 colspan=2 style='mso-ignore:colspan'>HM</td>
        <td class=xl75></td>
        <td class=xl75></td>
        <td class=xl78>:</td>
        <td colspan=8 class=xl78 style="text-align: left">{{$Dtl->start_hm}}</td>
        <td class=xl73>&nbsp;</td>
        <td class=xl74>&nbsp;</td>
        <!-- separator-->
        </tr>
        <tr height=5 style='mso-height-source:userset;height:3.75pt'>
        <td colspan=41 height=5 class=xl110 style='border-right:2.0pt double black;
        height:3.75pt'>&nbsp;</td>
        <td class=xl74>&nbsp;</td>
        <!-- separator-->
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td colspan=41 height=16 class=xl113 style='height:12.0pt;border-top:none !important;'>&nbsp;</td>
        <td class=xl68></td>
        </tr>
        <tr height=26 style='mso-height-source:userset;height:20.1pt'>
        <td rowspan=2 height=52 class=xl114 style='border-bottom:.5pt solid black;
        height:40.2pt;border-top:none'>NO</td>
        <td colspan=21 rowspan=2 class=xl116 style='border-right:.5pt solid black;border-left:none !important;
        border-top:none !important;border-bottom:.5pt solid black'>ITEM YANG HARUS DIPERIKSA</td>
        <td colspan=6 class=xl123 style='border-right:.5pt solid black;border-left:
        none;border-top:none !important;'>KONDISI</td>
        <td colspan=13 rowspan=2 class=xl125 style='border-right:.5pt solid black;border-top:none !important;border-left:
        none!important;border-bottom:.5pt solid black'>KETERANGAN</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=26 style='mso-height-source:userset;height:20.1pt'>
        <td colspan=3 height=26 class=xl123 style='border-right:.5pt solid black;
        height:20.1pt;border-left:none;border-top:none !important;'>BAIK</td>
        <td colspan=3 class=xl123 style='border-right:.5pt solid black;border-left:
        none;border-top:none !important;'>RUSAK</td>
        <td class=xl79></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>1</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Kebersian Mesin</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kebersian_mesin == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kebersian_mesin == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->kebersian_mesin == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>2</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Switch/Sakelar</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->switch == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->switch == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->switch == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>3</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa Hose/Tubing</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_hose == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_hose == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_hose == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>4</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Pemeriksaan sebelum mesin hidup</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_sebelum_mesin_hidup == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_sebelum_mesin_hidup == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_sebelum_mesin_hidup == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>5</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa kondisi level solar</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_kondisi_level_solar == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_kondisi_level_solar == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_kondisi_level_solar == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>6</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa kondisi level oli mesin</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_kondisi_level_oli_mesin == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_kondisi_level_oli_mesin == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_kondisi_level_oli_mesin == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>7</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa kondisi kebocoran oli mesin</td>
         <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_kondisi_kebocoran_oli_mesin == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_kondisi_kebocoran_oli_mesin == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_kondisi_kebocoran_oli_mesin == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>8</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa kondisi level oli kompresor</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_kondisi_level_oli_kompresor == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_kondisi_level_oli_kompresor == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_kondisi_level_oli_kompresor == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>9</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa kondisi level air battery</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_kondisi_level_air_battery == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_kondisi_level_air_battery == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_kondisi_level_air_battery == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>10</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa kondisi level air radiator</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_kondisi_level_air_radiator == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_kondisi_level_air_radiator == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_kondisi_level_air_radiator == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>11</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa kondisi kebocoran solar</td>
         <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_kondisi_kebocoran_solar == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_kondisi_kebocoran_solar == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_kondisi_kebocoran_solar == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl66></td>
        <!-- separator-->
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>12</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa air cleaner</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_air_cleaner == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_air_cleaner == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_air_cleaner == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl68></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>13</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa kabel/wiring tidak ada yang kendor atau lepas</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_kabel_wiring_kendor == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_kabel_wiring_kendor == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_kabel_wiring_kendor == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl68></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>14</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Cek semua instalasi/kabel power tidak ada yang rusak</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->cek_semua_instalasi == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->cek_semua_instalasi == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->cek_semua_instalasi == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl68></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>15</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Pemeriksaan setelah mesin hidup</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->pemeriksaan_setelah_mesin_hidup == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->pemeriksaan_setelah_mesin_hidup == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->pemeriksaan_setelah_mesin_hidup == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl68></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>16</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Panaskan mesin selama 1-2 menit</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->panaskan_mesin == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->panaskan_mesin == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->panaskan_mesin == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl68></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>17</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa semua meteran dalam kondisi normal</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->cek_semua_meteran_normal == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->cek_semua_meteran_normal == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->cek_semua_meteran_normal == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl68></td>
        </tr>

        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>18</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa V-Pulley</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_v_pulley == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_v_pulley == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_v_pulley == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl68></td>
        </tr>
		
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>19</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Periksa Suara atau Getaran Tidak Normal</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->periksa_suara_getaran_tidak_normal == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->periksa_suara_getaran_tidak_normal == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->periksa_suara_getaran_tidak_normal == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl68></td>
        </tr>
		
        <tr height=21 style='mso-height-source:userset;height:15.95pt'>
        <td height=21 class=xl80 style='height:15.95pt'>20</td>
        <td colspan=21 class=xl128 style='border-right:.5pt solid black;border-left:none'>Buang Sisa Air Pada Drain Plug</td>
        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->buang_sisa_air_pada_drain == "Baik")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10004;</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->buang_sisa_air_pada_drain == "Rusak")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>&#10006;</td>
                        @elseif ($Dtl->buang_sisa_air_pada_drain == "Tidak Ada")
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'>-</td>
                        @else
                            <td colspan=3 class=xl131 style='border-right:.5pt solid black;border-left:none'></td>
                        @endif
        <td colspan=13 class=xl134 style='border-right:.5pt solid black;border-left:none'>&nbsp;</td>
        <td class=xl68></td>
        </tr>

        <tr height=9 style='mso-height-source:userset;height:6.95pt'>
        <td height=9 class=xl68 style='height:6.95pt'></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        <td class=xl68></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td colspan=3 height=16 class=xl136 style='height:12.0pt'>NOTE:</td>
        <td class=xl161>1.</td>
        <td class=xl81 colspan=14 style='mso-ignore:colspan'>Pastikan tekanan udara Normal sebelum dan selama operasi</td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl68></td>
        </tr>
        <tr height=6 style='mso-height-source:userset;height:5.1pt'>
        <td height=6 class=xl81 style='height:5.1pt'></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl68></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td height=16 class=xl81 style='height:12.0pt'></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81>2.</td>
        <td class=xl81 colspan=16 style='mso-ignore:colspan'>Segera Matikan Air Compressor jika
        ada yang tidak normal</td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl68></td>
        </tr>
        <tr height=9 style='mso-height-source:userset;height:6.95pt'>
        <td height=9 class=xl81 style='height:6.95pt'></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl68></td>
        </tr>
        <tr height=28 style='mso-height-source:userset;height:21.0pt'>
        <td colspan=19 height=28 class=xl137 style='border-right:.5pt solid black;
        height:21.0pt'>KETERANGAN (sebutkan dan tuliskan jika ada temuan)</td>
        <td colspan=11 class=xl141 style='border-right:.5pt solid black;border-left:
        none'>DIBUAT OLEH</td>
        <td colspan=11 class=xl141 style='border-right:.5pt solid black;border-left:
        none'>DIKETAHUI OLEH</td>
        <td class=xl68></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
        <td colspan=19 rowspan=7 height=147 class=xl143 style='border-right:.5pt solid black;border-top:none!important;
        border-bottom:.5pt solid black;height:110.25pt'>{{$Dtl->pesan}}</td>

        <td colspan=11 rowspan=5 class=xl151 style='border-right:.5pt solid black;border-top:none!important;border-left:none!important;'>
            <img id="res-img" src="{{ asset('storage/images/ttd_cr/' . $Dtl->tl_id . '.png') }}" alt="No data" style="width: 55%; height: 90%; margin: 7% 0% 0% 0%;">
        </td>

        <td colspan=11 rowspan=5 class=xl157 style='border-right:.5pt solid black;border-top:none!important;border-left:none!important;'>
            <!-- Tanda Tangan Pengawas-->
            <img id="res-img-pw" src="{{ asset('storage/images/ttd_cr_pw/' . $Dtl->status) }}" alt="Waiting approval" style="width: 55%; height: 90%; margin: 7% 0% 0% 0%;">
        </td>

        <td class=xl68></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
        <td height=20 class=xl68 style='height:15.0pt'></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
        <td height=20 class=xl68 style='height:15.0pt'></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
        <td height=20 class=xl68 style='height:15.0pt'></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
        <td height=20 class=xl68 style='height:15.0pt'></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
        <td height=20 colspan=11 class=xl83 style='text-align:center;height:15.0pt; border-right:.5pt solid black !important;'>{{$Dtl->nama_driver}}</td>
        {{-- <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl84>&nbsp;</td> --}}
        <!-- separator-->
        <td class=xl83 colspan="11" style="text-align:center;border-right: .5pt solid black !important;">{{$Dtl->pengawas}}</td>
        {{-- <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl83>&nbsp;</td>
        <td class=xl84>&nbsp;</td> --}}
        <td class=xl68></td>
        </tr>
        <tr height=27 style='mso-height-source:userset;height:20.25pt'>
        <td colspan=11 height=27 class=xl141 style='border-right:.5pt solid black;border-top:none!important;
        height:20.25pt;border-left:none'>Operator</td>
        <td colspan=11 class=xl141 style='border-right:.5pt solid black;border-top:none!important;
        border-left:none'>Pengawas Lapangan</td>
        <td class=xl68></td>
        </tr>
        <tr height=16 style='mso-height-source:userset;height:12.0pt'>
        <td height=16 class=xl81 style='height:12.0pt'></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl85 width=16 style='width:12pt'></td>
        <td class=xl82></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl86></td>
        <td class=xl87></td>
        <td class=xl85 width=16 style='width:12pt'></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl81></td>
        <td class=xl88></td>
        <td class=xl68></td>
        </tr>

        <tr height=0 style='display:none'>
        <td width=26 style='width:20pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=19 style='width:14pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=21 style='width:16pt'></td>
        <td width=21 style='width:16pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=21 style='width:16pt'></td>
        <td width=13 style='width:10pt'></td>
        <td width=13 style='width:10pt'></td>
        <td width=13 style='width:10pt'></td>
        <td width=19 style='width:14pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=21 style='width:16pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=21 style='width:16pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=16 style='width:12pt'></td>
        <td width=21 style='width:16pt'></td>
        <td width=21 style='width:16pt'></td>
        <td width=64 style='width:48pt'></td>
        </tr>
    </table>
</body>
</html>
