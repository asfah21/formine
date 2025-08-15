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
        font-family:Arial, sans-serif;
        mso-font-charset:0;}
    .xl67
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid !important;
        border-right:none;
        border-bottom:.5pt solid !important;
        border-left:none;}
    .xl68
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
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
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl70
        {mso-style-parent:style0;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;}
    .xl71
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;}
    .xl72
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Calibri, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border:.5pt solid black;
        border-top:.5pt solid !important;
        border-right:.5pt solid !important;
        border-left:.5pt solid !important;
        border-bottom:.5pt solid !important;}
    .xl73
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;}
    .xl74
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;}
    .xl75
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-left:.5pt solid !important;
        border-right:.5pt solid !important;
        border-top:.5pt solid !important;
        border-bottom:.5pt solid !important;}
    .xl76
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;
        border-top:none;
        border-right:2.0pt double black;
        border-bottom:none;
        border-left:none;}
    .xl77
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
        border-left:2.0pt double !important;}
    .xl78
        {mso-style-parent:style0;
        color:black;
        font-size:2.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;}
    .xl79
        {mso-style-parent:style0;
        color:black;
        font-size:2.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;}
    .xl80
        {mso-style-parent:style0;
        color:black;
        font-size:2.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-left: none ;
        border-right: 2.0pt double !important;
        border-bottom:none;
        border-left:none;}
    .xl81
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;}
    .xl82
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:2.0pt double !important;}
    .xl83
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;}
    .xl84
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;}
    .xl85
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:2.0pt double !important;}
    .xl86
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        vertical-align:middle;}
    .xl87
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;}
    .xl88
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        border-left:none !important;
        vertical-align:middle;}
    .xl89
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border-top:none;
        border-bottom:none;
        border-right:2.0pt double !important;}
    .xl90
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;
        border:.5pt solid black;}
    .xl91
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:2.0pt double !important;}
    .xl92
        {mso-style-parent:style0;
        color:black;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        vertical-align:middle;}
    .xl93
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid !important;
        border-right:2.0pt double !important;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl94
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;}
    .xl95
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid !important;
        border-bottom:.5pt solid black !important;
        border-left:2.0pt double !important;}
    .xl96
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid !important;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl97
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;
        border-top:none;
        border-right:2.0pt double !important;
        border-bottom:.5pt solid black !important;
        border-left:none !important;}
    .xl98
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:2.0pt double !important;
        border-left:2.0pt double !important;}
    .xl99
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;}
    .xl100
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:2.0pt double !important;
        border-left:none;}
    .xl101
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;
        border-top:none;
        border-right:2.0pt double !important;
        border-bottom:2.0pt double !important;
        border-left:.5pt solid black !important;}
    .xl102
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;}
    .xl103
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;}
    .xl104
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;}
    .xl105
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:top;}
    .xl106
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid !important;
        border-bottom:.5pt solid black !important;
        border-left:none;
        white-space:normal;}
    .xl107
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;
        border-top:none;
        border-right:2.0pt double !important;
        border-bottom:.5pt solid black !important;
        border-left:none;
        white-space:normal;}
    .xl108
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;
        white-space:normal;}
    .xl109
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        border-top:none;
        border-right:.5pt solid !important;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl110
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        border-top:none;
        border-right:2.0pt double !important;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl111
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:top;
        white-space:normal;}
    .xl112
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:2.0pt double !important;
        border-left:none;}
    .xl113
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        border-top:none;
        border-right:2.0pt double !important;
        border-bottom:2.0pt double !important;
        border-left:.5 solid black !important;}
    .xl114
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;}
    .xl115
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        vertical-align:middle;
        white-space:normal;}
    .xl116
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:"Arial Narrow", sans-serif;
        mso-font-charset:1;
        vertical-align:middle;}
    .xl117
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:"Arial Narrow", sans-serif;
        mso-font-charset:1;
        text-align:center-across;
        vertical-align:middle;}
    .xl118
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:"Arial Narrow", sans-serif;
        mso-font-charset:1;
        vertical-align:justify;}
    .xl119
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-style:italic;
        font-family:"Arial Narrow", sans-serif;
        mso-font-charset:1;
        vertical-align:middle;}
    .xl120
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid !important;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;}
    .xl121
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
    .xl122
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
    .xl123
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:.5pt solid black;}
    .xl124
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl125
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl126
        {mso-style-parent:style0;
        color:black;
        font-size:2.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid !important;
        border-right:none !important;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl126c
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        border-top:none !important;
        border-right:none !important;
        border-bottom:none !important;
        border-left:.5pt solid black !important;}
    .xl126xx
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid !important;
        border-right:none !important;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl127
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid !important;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:.5pt solid black;}
    .xl128
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl129
        {mso-style-parent:style0;
        color:black;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;}
    .xl130
        {mso-style-parent:style0;
        color:black;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;}
    .xl131
        {mso-style-parent:style0;
        color:black;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:none;}
    .xl132
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;
        white-space:normal;}
    .xl133
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:.5pt solid black;
        white-space:normal;}
    .xl134
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black !important;
        border-left:none;
        white-space:normal;}
    .xl135
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"Medium Date";
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl136
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"Medium Date";
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl137
        {mso-style-parent:style0;
        color:black;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:.5pt solid black;}
    .xl138
        {mso-style-parent:style0;
        color:black;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl139
        {mso-style-parent:style0;
        color:black;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl140
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:2.0pt double !important;}
    .xl141
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:middle;}
    .xl142
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:2.0pt double !important;
        border-right:2.0pt double !important;
        border-bottom:.5pt solid black !important;
        border-left:2.0pt double !important;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl143
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:2.0pt double black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl144
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:2.0pt double black;
        border-right:2.0pt double black;
        border-bottom:.5pt solid black !important;
        border-left:none;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl145
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:2.0pt double !important;
        white-space:normal;}
    .xl146
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;
        white-space:normal;}
    .xl147
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:2.0pt double black;
        border-bottom:none;
        border-left:none;
        white-space:normal;}
    .xl148
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:2.0pt double !important;
        white-space:normal;}
    .xl149
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black;
        border-left:none;
        white-space:normal;}
    .xl150
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:2.0pt double black;
        border-bottom:.5pt solid black;
        border-left:none;
        white-space:normal;}
    .xl151
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:2.0pt double !important;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl152
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl153
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:2.0pt double black;
        border-bottom:.5pt solid black !important;
        border-left:none;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl154
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl155
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:middle;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:.5pt solid black;}
    .xl156
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl157
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:2.0pt double !important;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl158
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl159
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:2.0pt double black;
        border-bottom:.5pt solid black !important;
        border-left:none;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl160
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:2.0pt double black;
        border-left:none;}
    .xl161
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:2.0pt double !important;
        border-left:.5pt solid black;}
    .xl162
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:2.0pt double black;
        border-left:none;}
    .xl163
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        text-decoration:underline;
        text-underline-style:single;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;}
    .xl164
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:top;
        white-space:normal;}
    .xl165
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:2.0pt double !important;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl166
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl167
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:2.0pt double black;
        border-bottom:.5pt solid black !important;
        border-left:none;
        background:#DDEBF7;
        mso-pattern:black none;}
    .xl168
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;}
    .xl169
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        background:#DDEBF7;
        mso-pattern:black none;
        white-space:normal;}
    .xl170
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:.5pt solid !important;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;}
    .xl171
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;}
    .xl172
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:none;}
    .xl173
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid black;}
    .xl174
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;}
    .xl175
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:none;
        border-left:none;}
    .xl176
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:.5pt solid black;}
    .xl177
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl178
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl179
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:2.0pt double !important;
        border-right:none;
        border-bottom:none;
        border-left:2.0pt double !important;}
    .xl180
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:2.0pt double black;
        border-right:none;
        border-bottom:none;
        border-left:none;}
    .xl181
        {mso-style-parent:style0;
        color:black;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:2.0pt double black;
        border-left:2.0pt double !important;
        border-bottom:none;
        border-left:none;}
    .xl182
        {mso-style-parent:style0;
        color:black;
        font-size:2.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:2.0pt double !important;
        border-left:none;
        height:2px !important;}
    .xl183
        {mso-style-parent:style0;
        color:black;
        font-size:2.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:2.0pt double black;
        border-right:none;
        border-bottom:none;
        border-left:none;}
    .xl183x
        {mso-style-parent:style0;
        color:black;
        font-size:2.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:2.0pt double black;
        border-right:none;
        border-bottom:none;
        border-left:none;}
    .xl184
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;}
    .xl185
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;}
    .xl186
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none !important;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl187
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl188
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
        border-bottom:2.0pt double !important;
        border-left:2.0pt double !important;}
    .xl189
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:2.0pt double black;
        border-left:none;}
    .xl190
        {mso-style-parent:style0;
        color:black;
        font-size:9.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-left:2.0pt double !important;
        border-bottom:2.0pt double black;
        border-left:none;}
    .xl191
        {mso-style-parent:style0;
        color:black;
        font-size:2.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:2.0pt double !important;}
    .xl192
        {mso-style-parent:style0;
        color:black;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;}
    .xl193
        {mso-style-parent:style0;
        color:black;
        font-size:10.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-left:2.0pt double !important;
        border-bottom:none;
        border-left:none;}
    .xl194
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:2.0pt double !important;}
    .xl195
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl196
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl197
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:2.0pt double !important;
        white-space:normal;}
    .xl198
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;
        white-space:normal;}
    .xl199
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-left:2.0pt double !important;
        border-bottom:.5pt solid black !important;
        border-left:none;
        white-space:normal;}
    .xl200
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-weight:700;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl201
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:"Arial Narrow", sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl202
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:"Arial Narrow", sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:.5pt solid black !important;
        border-left:none;}
    .xl203
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:"Arial Narrow", sans-serif;
        mso-font-charset:1;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:none;
        border-bottom:none;
        border-left:none;}
    .xl204
        {mso-style-parent:style0;
        color:black;
        font-size:8.0pt;
        font-family:Arial, sans-serif;
        mso-font-charset:1;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid black;
        border-right:.5pt solid black;
        border-bottom:.5pt solid black !important;
        border-left:none;}


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
				filename:     'Form-P2H-Excavator-GSI.pdf', // Nama file PDF yang akan disimpan
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

            <table border=0 cellpadding=0 cellspacing=0 width=701 style='border-collapse:
            collapse;table-layout:fixed;width:528pt'>
            <col class=xl65 width=21 style='mso-width-source:userset;mso-width-alt:768;
            width:16pt'>
            <col class=xl65 width=16 span=6 style='mso-width-source:userset;mso-width-alt:
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
            <col class=xl65 width=13 span=2 style='mso-width-source:userset;mso-width-alt:
            475;width:10pt'>
            <col class=xl65 width=19 style='mso-width-source:userset;mso-width-alt:694;
            width:14pt'>
            <col class=xl65 width=16 span=7 style='mso-width-source:userset;mso-width-alt:
            585;width:12pt'>
            <col class=xl65 width=21 span=2 style='mso-width-source:userset;mso-width-alt:
            768;width:16pt'>
            <col class=xl65 width=16 style='mso-width-source:userset;mso-width-alt:585;
            width:12pt'>
            <col class=xl65 width=21 style='mso-width-source:userset;mso-width-alt:768;
            width:16pt'>
            <col class=xl65 width=16 span=10 style='mso-width-source:userset;mso-width-alt:
            585;width:12pt'>
            <col class=xl65 width=21 span=2 style='mso-width-source:userset;mso-width-alt:
            768;width:16pt'>
            <tr height=14 style='mso-height-source:userset;height:11.1pt'>
            <td colspan=5 rowspan=4 height=56 width=85 style='border-right:.5pt solid black;
            border-bottom:none !important;border-top:.5pt solid black;border-left:.5pt solid black;height:44.4pt;width:64pt' align=left  valign=top>

            <span style='mso-ignore:vglayout;
            z-index:1;margin-left:13px;margin-top:2px;width:60px;
            height:54px'><img width=60 height=54 src="{{ asset('storage/images/logo-gsi.png') }}" v:shapes="Picture_x0020_1"></span></td>
            <td colspan=23 rowspan=2 class=xl120 width=393 style='border-right:.5pt solid black;border-left:none!important;
            border-bottom:none !important;width:296pt'>FORM / FORMULIR</td>
            <td colspan=6 class=xl127 width=101 style='border-right:.5pt solid black;border-bottom:none!important;
            border-left:none;width:76pt'>No. Dokumen</td>
            <td class=xl67 width=16 style='width:12pt;border-bottom:none !important;'>:</td>
            <td colspan=6 class=xl126xx width=106 style='border-right:.5pt solid black;border-bottom:none !important;
            width:80pt'>GSI4-OPR-002G</td>
            <td class=xl126c width=16 style='border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=14 style='mso-height-source:userset;height:11.1pt'>
            <td colspan=6 height=14 class=xl127 style='border-right:.5pt solid black;border-bottom:none !important;
            height:11.1pt;border-left:none'>Revisi</td>
            <td class=xl68 style="border-bottom:none !important;">:</td>
            <td colspan=6 class=xl126xx style='border-right:.5pt solid black;border-bottom:none !important;'>0</td>
            <td class=xl126c width=16 style='border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=14 style='mso-height-source:userset;height:11.1pt'>
            <td colspan=23 height=14 class=xl129 style='border-right:.5pt solid black;
            height:11.1pt;border-left:none'>P2H</td>
            <td colspan=6 class=xl133 width=101 style='border-right:.5pt solid black;border-bottom:none !important;
            border-left:none;width:76pt'>Tanggal Efektif</td>
            <td class=xl69 style="border-top:.5pt solid black; border-bottom:none !important;">:</td>
            <td colspan=6 class=xl135 style='border-bottom:none !important;'>24-Juli-2023</td>
            <td class=xl126c width=16 style='border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=14 style='mso-height-source:userset;height:11.1pt'>
            <td colspan=23 height=14 class=xl137 style='border-right:.5pt solid black;border-bottom: none !important;
            height:11.1pt;border-left:none'>EXCAVATOR</td>
            <td colspan=6 class=xl127 style='border-right:.5pt solid black;border-left:none;border-bottom:none !important;'>Halaman</td>
            <td class=xl69 style="border-top:.5pt solid black !important; border-bottom: none !important;">:</td>
            <td colspan=6 class=xl126xx style='border-right:.5pt solid black;border-bottom:none !important;'>1</td>
            <td class=xl126c width=16 style='border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=9 style='mso-height-source:userset;height:6.95pt'>
            <td colspan=41 height=9 class=xl182 style='height:6.95pt'>&nbsp;</td>
            </tr>
            <tr height=7 style='mso-height-source:userset;height:5.25pt'>
            <td height=7 class=xl77 style='height:5.25pt'>&nbsp;</td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl80>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr class=xl70 height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=6 height=16 class=xl140 style='height:12.0pt'>&nbsp;BERIKAN TANDA</td>
            <td class=xl71>:</td>
            <td class=xl72><b>&#10004;</b></td>
            <td class=xl73 colspan=7 style='mso-ignore:colspan'>JIKA KEADAAN BAIK</td>
            <td class=xl73></td>
            <td class=xl74></td>
            <td class=xl75>&#10006;</td>
            <td class=xl73 colspan=8 style='mso-ignore:colspan'>JIKA KEADAAN RUSAK</td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl75><b>-</b></td>
            <td class=xl73 colspan=12 style='mso-ignore:colspan;border-right:2.0pt double black !important;'><span
            style='mso-spacerun:yes'>&nbsp;</span>JIKA TIDAK ADA PADA PERALATAN</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=7 style='mso-height-source:userset;height:5.25pt'>
            <td height=7 class=xl77 style='height:5.25pt'>&nbsp;</td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl79></td>
            <td class=xl79></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl78></td>
            <td class=xl80>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl82 colspan=4 style='height:12.0pt;mso-ignore:colspan'>&nbsp;EQUIP.
            NO</td>
            <td class=xl81></td>
            <td class=xl83></td>
            <td class=xl84>:</td>
            <td colspan=7 style="border-bottom:none !important; text-align:left;"class=xl186>{{ $Dtl->no_unit}}</td>
            <td class=xl81></td>
            <td class=xl81></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl81 colspan=3 style='mso-ignore:colspan'>NAMA</td>
            <td class=xl81></td>
            <td class=xl84>:</td>
            <td colspan=8 style="border-bottom:none !important;text-align:left"class=xl186> {{ $Dtl->nama_driver }}</td>
            <td class=xl80>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl82 colspan=2 style='height:12.0pt;mso-ignore:colspan'>&nbsp;DATE</td>
            <td class=xl81></td>
            <td class=xl81></td>
            <td class=xl81></td>
            <td class=xl83></td>
            <td class=xl84>:</td>
            <td colspan=7 style="border-bottom:none !important;text-align:left;" class=xl187>{{ Carbon::parse($Dtl->date)->format('d-M-Y') }}</td>
            <td class=xl81></td>
            <td class=xl81></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl81 colspan=4 style='mso-ignore:colspan'>START HM</td>
            <td class=xl84>:</td>
            <td colspan=8 style="border-bottom:none !important;text-align:left;" class=xl187>{{$Dtl->start_hm}}</td>
            <td class=xl80>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl82 colspan=6 style='height:12.0pt;mso-ignore:colspan'>&nbsp;HM NEXT SERVICE</td>
            <td class=xl84>:</td>
            <td colspan=7 style="text-align:left;" class=xl187>{{ $Dtl->hm_next_service }}</td>
            <td class=xl81></td>
            <td class=xl81></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl83></td>
            <td class=xl81 colspan=4 style='mso-ignore:colspan'>FINISH HM</td>
            <td class=xl84>:</td>
            <td colspan=8 style="text-align:left;" class=xl187>{{ $Dtl->finish_hm }}</td>
            <td class=xl80>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
            </tr>

            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl85 style='height:12.0pt'>&nbsp;</td>
            <td colspan=8 rowspan="4" class=xl184>  <!-- tempat tanda tangan user -->
                <img id="res-img" src="{{ asset('storage/images/ttd_exca/' . $Dtl->ex_id . '.png') }}" alt="No data" style="width: auto; height: 90%; margin: 7% 0% 0% 0%;"></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87 colspan=4 ></td>
            <td class=xl87></td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87 colspan=5 ></td>
            <td class=xl88></td>
            <td class=xl89>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
            </tr>

            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl85 style='height:12.0pt'>&nbsp;</td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
                                            <!-- Pemisah Kolom untuk Baik -->
                                            @if ($Dtl->shift == "Siang")
                                                <td style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
                                            @else
                                                <td class=xl90 ></td>
                                            @endif

            <td class=xl81 colspan=4 style='mso-ignore:colspan'>&nbsp;DAY SHIFT</td>
            <td class=xl87></td>
                                            <!-- Pemisah Kolom untuk Baik -->
                                            @if ($Dtl->shift == "Malam")
                                                <td style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
                                            @else
                                                <td class=xl90 ></td>
                                            @endif
            <td class=xl81 colspan=5 style='mso-ignore:colspan'>&nbsp;NIGHT SHIFT</td>
            <td class=xl88></td>
            <td class=xl89>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;border-right:.5pt solid black;width:5pt'></td>
            </tr>

            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl85 style='height:12.0pt'>&nbsp;</td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87 colspan=4 ></td>
            <td class=xl87></td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87 colspan=5 ></td>
            <td class=xl88></td>
            <td class=xl89>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;border-right:.5pt solid black;width:5pt'></td>
            </tr>

            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl85 style='height:12.0pt'>&nbsp;</td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87 colspan=4 ></td>
            <td class=xl87></td>
            <td class=xl87>&nbsp;</td>
            <td class=xl87 colspan=5 ></td>
            <td class=xl88></td>
            <td class=xl89>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;border-right:.5pt solid black;width:5pt'></td>
            </tr>

            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl91 style='height:12.0pt'>&nbsp;</td>
            <td colspan=8 class=xl185>Tanda Tangan Operator</td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl87></td>
            <td class=xl88></td>
            <td class=xl89>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=5 style='mso-height-source:userset;height:3.75pt'>
            <td colspan=41 height=5 class=xl188 style='border-right:2.0pt double black;
            height:3.75pt'>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=9 style='mso-height-source:userset;height:6.95pt'>
            <td colspan=41 height=9 class=xl183x style='height:6.95pt;border-top:none !important;'>&nbsp;</td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=13 height=16 class=xl142 style='border-right:2.0pt double black;
            height:12.0pt'>KENDARAAN BERHENTI / MESIN MATI</td>
            <td class=xl87></td>
            <td colspan=13 class=xl142 style='border-right:2.0pt double black'>MESIN
            HIDUP</td>
            <td class=xl87></td>
            <td colspan=13 class=xl142 style='border-right:2.0pt double black'>KENDARAAN
            BERGERAK</td>
            <td class=xl126c width=16 style='border-left:none !important; width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=14 style='mso-height-source:userset;height:11.1pt'>
            <td colspan=13 rowspan=2 height=28 class=xl145 width=226 style='border-right:
            2.0pt double black;border-top: none !important;border-bottom:none !important;height:22.2pt;width:170pt'>MESIN
            MATI, PORSNELING NETRAL, REM PARKIR TERPASANG</td>
            <td class=xl87></td>
            <td colspan=13 rowspan=2 class=xl145 width=220 style='border-right:2.0pt double black;border-top: none !important;
            border-bottom:none !important;;width:166pt'>PORSNELING NETRAL,REM PARKIR
            TERPASANG</td>
            <td class=xl87></td>
            <td colspan=13 rowspan=2 class=xl145 width=223 style='border-right:2.0pt double black;border-top: none !important;
            border-bottom:none !important;width:168pt'>UNTUK UJI JALAN / GERAK</td>
            <td class=xl126c rowspan=2 width=16 style='border-left:none !important;;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=14 style='mso-height-source:userset;height:11.1pt'>
            <td height=14 class=xl87 style='height:11.1pt'></td>
            <td class=xl87></td>
            </tr>
            <tr height=5 style='mso-height-source:userset;height:3.75pt'>
            <td colspan=13 height=5 class=xl197 width=226 style='border-right:2.0pt double black;
            height:3.75pt;width:170pt'>&nbsp;</td>
            <td class=xl87></td>
            <td colspan=13 class=xl197 width=220 style='border-right:2.0pt double black;
            width:166pt'>&nbsp;</td>
            <td class=xl87></td>
            <td colspan=13 class=xl197 width=223 style='border-right:2.0pt double black;
            width:168pt'>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=13 height=16 class=xl151 style='border-right:2.0pt double black;border-top: none !important;border-bottom: none !important;
            height:12.0pt'>KELILING, ATAS/BAWAH KENDARAAN</td>
            <td class=xl87></td>
            <td colspan=13 class=xl151 style='border-right:2.0pt double black;border-bottom: none !important;border-top: none !important;'>DI DALAM
            KABIN</td>
            <td class=xl87></td>
            <td colspan=13 class=xl151 style='border-right:2.0pt double black;border-top: none !important;border-bottom: none !important;'>KENDARAAN
            DIJALANKAN</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=5 style='mso-height-source:userset;height:3.75pt'>
            <td colspan=13 height=5 class=xl191 style='border-right:2.0pt double black;
            height:3.75pt'>&nbsp;</td>
            <td class=xl92></td>
            <td colspan=13 class=xl191 style='border-right:2.0pt double black'>&nbsp;</td>
            <td class=xl92></td>
            <td colspan=13 class=xl191 style='border-right:2.0pt double black'>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=11 height=16 class=xl194 style='border-right:.5pt solid black;
            height:12.0pt'>&nbsp;</td>
            <td class=xl72 style='border-left:none !important;'>&#10004;</td>
            <td class=xl93>&#10006;</td>
            <td class=xl94></td>
            <td colspan=11 class=xl194 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl72 style='border-left:none !important;'>&#10004;</td>
            <td class=xl93>&#10006;</td>
            <td class=xl94></td>
            <td colspan=11 class=xl194 style='border-right:.5pt solid black'>&nbsp;</td>
            <td class=xl72 style='border-left:none !important;'>&#10004;</td>
            <td class=xl93>&#10006;</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>1</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TRACK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->track == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->track == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->track == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td colspan=13 class=xl157 style='border-top: none !important; border-right:2.0pt double black'>FUNGSI
            METERAN / INDIKATOR ALARM</td>
            <td class=xl94></td>
            <td class=xl95>1</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left: none'>STIR / KEMUDI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->stir_kemudi == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->stir_kemudi == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->stir_kemudi == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>2</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>ROLLER TRACK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->roller_track == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->roller_track == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->roller_track == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>1</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI MESIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->level_oli_mesin2 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->level_oli_mesin2 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->level_oli_mesin2 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>2</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KLAKSON TRAVEL</td>
                    <!-- Pemisah Kolom untuk Baik -->
                    @if ($Dtl->klakson_travel == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->klakson_travel == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->klakson_travel == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>3</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>IDLER</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->idler == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->idler == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->idler == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>2</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI HIDROLIK</td>
                    <!-- Pemisah Kolom untuk Baik -->
                    @if ($Dtl->level_oli_hidrolik2 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->level_oli_hidrolik2 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->level_oli_hidrolik2 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>3</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>EMS / CMS</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->ems_cms3 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->ems_cms3 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->ems_cms3 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>4</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SPROCKET</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->sprocket == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->sprocket == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->sprocket == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>3</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI SWING</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->level_oli_swing == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->level_oli_swing == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->level_oli_swing == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>4</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SISTEM HIDROLIK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->sistem_hidrolik == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->sistem_hidrolik == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->sistem_hidrolik == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>5</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>MOTOR TRAVEL</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->motor_travel == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->motor_travel == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->motor_travel == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>4</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left: none'>SEATS / TEMPAT DUDUK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->seats == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->seats == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->seats == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>5</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU PERINGATAN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->lampu_peringatan == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->lampu_peringatan == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->lampu_peringatan == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>6</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TANGGA PEGANGAN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->tangga_pggn == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->tangga_pggn == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->tangga_pggn == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>5</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left: none'>AC</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->ac == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->ac == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->ac == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>6</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU PUTAR (STROBE)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->strobe == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->strobe == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->strobe == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>7</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU MUKA / BELAKANG</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->lampu_mk_blk == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->lampu_mk_blk == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->lampu_mk_blk == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>6</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEMUDI / STIR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kemudi_stir == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kemudi_stir == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->kemudi_stir == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>7</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->selang_pipaC == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->selang_pipaC == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->selang_pipaC == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>8</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SELANG / PIPA HIDROLIK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->selang_pipa == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->selang_pipa == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->selang_pipa == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>7</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>GAS TANGAN (THROTTLE)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->throttle == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->throttle == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->throttle == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>8</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->ems_cms34 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->ems_cms34 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->ems_cms34 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>9</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TANGKI HIDROLIK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->tangki_hidrolik == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->tangki_hidrolik == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->tangki_hidrolik == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>8</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TUAS REM PARKIR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->tuas_rem_parkir == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->tuas_rem_parkir == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->tuas_rem_parkir == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>9</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->sistem_hidrolik5 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->sistem_hidrolik5 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->sistem_hidrolik5 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>10</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>BUCKET, GIGI BUCKET</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->bucket == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->bucket == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->bucket == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>9</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TUAS KONTROL</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->tuas_kontrol == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->tuas_kontrol == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->tuas_kontrol == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>10</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->gauge22 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->gauge22 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->gauge22 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt;'>
            <td height=16 class=xl95 style='height:12.0pt'>11</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>BOOM BUCKET</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->boom_bucket == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->boom_bucket == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->boom_bucket == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>10</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KLAKSON</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->klakson == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->klakson == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->klakson == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl98>&nbsp;</td>
            <td colspan=10 class=xl161 style='border-right:.5pt solid black;border-top:none !important;border-left:
            none'>&nbsp;</td>
            <td class=xl100>&nbsp;</td>
            <td class=xl101 style="border-left:none !important;">&nbsp;</td>
            <td class=xl126c width=16 style='border-right:.5pt solid black;width:5pt;border-left:none !important;'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>12</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>STICK ARM BUCKET</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->stick_arm_bucket == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->stick_arm_bucket == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->stick_arm_bucket == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>11</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KABIN OPERATOR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kabin_operator == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kabin_operator == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->kabin_operator == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl102></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl94></td>
            <td class=xl94></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>13</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>BATTERY</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->battery == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->battery == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->battery == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>12</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU MUKA / BELAKANG</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->lampu_mk_blk2 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->lampu_mk_blk2 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->lampu_mk_blk2 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td colspan=13 class=xl163>UNTUK SEMUA OPERATOR</td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>14</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>RUANG MESIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->ruang_mesin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->ruang_mesin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->ruang_mesin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>13</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU KABIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->lampu_kabin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->lampu_kabin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->lampu_kabin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl102></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl103></td>
            <td class=xl94></td>
            <td class=xl94></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>15</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>INDIKATOR SARINGAN UDARA</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->indikator_srg_udara == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->indikator_srg_udara == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->indikator_srg_udara == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>14</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>EMS, CMS</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->ems == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->ems == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->ems == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl104>1</td>
            <td colspan=12 rowspan=4 class=xl164 width=202 style='width:152pt'>FORMULIR
            INI HARUS DIISI SETELAH PERALATANNYA DIPERIKSA DAN KEMUDIAN DISERAHKAN KEPADA
            PENGAWAS SETELAH BEROPERASI</td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>16</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PEMADAM API</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->pemadam_api == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->pemadam_api == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->pemadam_api == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>15</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SWITCH WORK MODE</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->switch_work_mode == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->switch_work_mode == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->switch_work_mode == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl104></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>17</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KABIN OPERATOR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kabin_opr == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kabin_opr == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->kabin_opr == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>16</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SWITCH POWER MODE</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->switch_power_mode == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->switch_power_mode == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->switch_power_mode == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl104></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>18</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>JENDELA, PINTU</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->jendela_pintu == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->jendela_pintu == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->jendela_pintu == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>17</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SWITCH AEC</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->switch_aec == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->switch_aec == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->switch_aec == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl74></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>19</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KIPAS KACA (Apabila ada)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kipas_kaca == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kipas_kaca == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->kipas_kaca == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>18</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>RADIO KOMUNIKASI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->radio == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->radio == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->radio == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl105>2</td>
            <td colspan=12 rowspan=3 class=xl164 width=202 style='width:152pt'>DENGARKAN
            DAN CATAT SUARA YANG TIDAK BAIK DARI MESIN MAUPUN PADA BAGIAN LAIN PERALATAN</td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>20</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KACA SPION</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kaca_spion == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kaca_spion == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->kaca_spion == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>19</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>MONITOR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->monitor == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->monitor == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->monitor == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl104></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>21</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>EMS / CMS</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->ems_cms == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->ems_cms == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->ems_cms == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>20</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>MIC</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->mic == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->mic == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->mic == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl74></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>22</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>HANDLE KONTROL</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->handle_control == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->handle_control == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->handle_control == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>21</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KABEL MIC</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kabel_mic == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kabel_mic == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->kabel_mic == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl105>3</td>
            <td colspan=12 rowspan=2 class=xl164 width=202 style='width:152pt'>BUATLAH
            WORK ORDER (WO) DAN SEGERA MASUKKAN KE WORKSHOP</td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>23</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI MESIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->level_oli_mesin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->level_oli_mesin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->level_oli_mesin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>22</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->radio2 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->radio2 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->radio2 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl104></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>24</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI HIDROLIK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->level_oli_hidrolik == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->level_oli_hidrolik == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->level_oli_hidrolik == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>23</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->monitor4 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->monitor4 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->monitor4 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl105>4</td>
            <td colspan=12 rowspan=4 class=xl164 width=202 style='width:152pt'>JIKA ADA
            KERUSAKAN, TULIS DI KOLOM KETERANGAN DAN LAPORKAN KONDISI TEMUAN KE PADA
            PENGAWAS</td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
                <td height=16 class=xl95 style='height:12.0pt'>25</td>
                <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL AIR RADIATOR</td>
                            <!-- Pemisah Kolom untuk Baik -->
                            @if ($Dtl->level_air_radiator == "Baik")
                                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                            @else
                                <td class=xl96 ></td>
                            @endif

                            <!-- Pemisah Kolom untuk Rusak -->
                            @if ($Dtl->level_air_radiator == "Rusak")
                                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                            @elseif ($Dtl->level_air_radiator == "Tidak Ada")
                                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                            @else
                                <td class=xl97 ></td>
                            @endif

                <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>24</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->mic3 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->mic3 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->mic3 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif



            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=13 height=16 class=xl157 style='border-right:2.0pt double black;height:12.0pt;border-top:none !important;'>PERKAKAS / PERALATAN</td>
            <td class=xl108 width=16 style='width:12pt'></td>
            <td colspan=13 class=xl165 style='border-right:2.0pt double black;border-top:none !important;'>DI LUAR
            KABIN</td>
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl74></td>
            </tr>

            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl99></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>1</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PEMADAM API</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->pemadam_api2 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->pemadam_api2 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->pemadam_api2 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>1</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEBOCORAN OLI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kebocoran_oli == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kebocoran_oli == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->kebocoran_oli == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl99></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>2</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TALI PENGAMAN (SEAT BELT)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->seat_belt == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->seat_belt == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->seat_belt == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>2</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEBOCORAN AIR</td>
                    <!-- Pemisah Kolom untuk Baik -->
                    @if ($Dtl->kebocoran_air == "Baik")
                    <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                    @else
                    <td class=xl96 ></td>
                    @endif
                    <!-- Pemisah Kolom untuk Rusak -->
                    @if ($Dtl->kebocoran_air == "Rusak")
                    <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                    @elseif ($Dtl->kebocoran_air == "Tidak Ada")
                    <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                    @else
                    <td class=xl97 ></td>
                    @endif
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>3</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TRICON</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->tricon == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->tricon == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->tricon == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>3</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kebocoran_olia == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kebocoran_olia == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->kebocoran_olia == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td colspan=12 class=xl71>DIPERIKSA OLEH PENGAWAS</td>
            <td class=xl73></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>4</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->ganjal_ban == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->ganjal_ban == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->ganjal_ban == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td colspan=13 class=xl165 style='border-top:none !important;border-right:2.0pt double black'>KONDISI EQUIPMENT</td>
            <td class=xl108 width=16 style='width:12pt'></td>

            <td colspan="12" rowspan="4" class=xl71> <!-- Tanda Tangan Pengawas-->
                    <img id="res-img-pw" src="{{ asset('storage/images/ttd_mh_pw/' . $Dtl->status) }}" alt="Belum diapprove" style="width: 50%; height: 90%; margin: 0% 0% 0% 0%;"></td>
            <td class=xl73></td>
            </tr>

            <script>
                window.addEventListener('load', function() {
                // Dapatkan semua elemen gambar dengan ID "res-img"
                const images = document.querySelectorAll('img[id="res-img"]');

                images.forEach(function(img) {
                    const container = img.parentElement;

                    // Atur lebar gambar menjadi 90% dari lebar kontainer
                    img.style.width = container.offsetWidth * 0.5 + 'px';

                    // Atur tinggi gambar secara otomatis
                    img.style.height = 'auto';
                    img.style.maxHeight = '60px';

                    // Atur tinggi minimal kontainer jika gambar tidak ada atau gagal dimuat
                    img.onerror = function() {
                    container.style.height = '25px';
                    };
                });
                });
            </script>

            <script>
                window.addEventListener('load', function() {
                    const images = document.querySelectorAll('img[id="res-img-pw"]');

                    images.forEach(function(img) {
                        const container = img.parentElement;
                        img.style.width = container.offsetWidth * 0.85 + 'px';

                        // Atur tinggi gambar secara otomatis
                        img.style.height = 'auto';
                        img.style.maxHeight = '50px';
                        img.style.maxWidth = '120px';

                        // Atur tinggi minimal kontainer jika gambar gagal dimuat
                        img.onerror = function() {
                            container.style.height = '25px'; // Menyusutkan kontainer jika gambar gagal
                        };
                    });
                });
            </script>

            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl73></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td colspan=13 height=16 class=xl157 style='border-right:2.0pt double black;border-top:none !important; height:12.0pt'>KEBERSIHAN</td>
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>1</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SUARA MESIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->suara_mesin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->suara_mesin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($Dtl->suara_mesin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl73></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl98 style='height:12.0pt'>1</td>
            <td colspan=10 class=xl161 style='border-right:.5pt solid black;border-left:none;border-top:none !important;'>KEBERSIHAN EQUIPMENT</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->kebersihan == "Baik")
                            <td style="font-weight:normal;text-align:center;border-left:none !important;border-top:none !important;"class=xl161 >&#10004;</td>
                        @else
                            <td class=xl161 style="border-left:none !important;border-top:none !important;" ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->kebersihan == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl101 >&#10006;</td>
                        @elseif ($Dtl->kebersihan == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl101 >-</td>
                        @else
                            <td class=xl101 ></td>
                        @endif

             <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl98>2</td>
            <td colspan=10 class=xl161 style='border-right:.5pt solid black;border-left:none;border-top:none !important;'>SUARA TRANSMISI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($Dtl->suara_trans == "Baik")
                            <td style="font-weight:normal;text-align:center;border-top:none !important;border-left:none !important;border-right:.5pt solid black !important;"class=xl161 >&#10004;</td>
                        @else
                            <td class=xl161 style="border-top:none !important;border-left:none !important;border-right:.5pt solid black !important;"></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($Dtl->suara_trans == "Rusak")
                            <td style="font-weight:normal;text-align:center; border-left: none !important;"class=xl101 >&#10006;</td>
                        @elseif ($Dtl->suara_trans == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center; border-left: none !important;"class=xl101 >-</td>
                        @else
                            <td class=xl101 style="border-left: none !important;"></td>
                        @endif

            <td class=xl73></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl74 style='height:12.0pt'></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>

            <td class=xl108 width=16 style='border: none !important;'></td>
            <td class=xl95 style='border: none !important;'></td>
            <td colspan=10 class=xl155 style='border: none !important;'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                            <td class=xl96 style='border: none !important;'></td>
                            <td class=xl97 style='border: none !important;'></td>

            <td class=xl108 width=16 style='width:12pt'></td>
            <td colspan=12 class=xl200>{{ $Dtl->pengawas}}</td> {{-- Nama Pengawas --}}
            <td class=xl73></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl74 style='height:12.0pt'></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>

            <td class=xl108 width=16 style='border: none !important;'></td>
            <td class=xl95 style='border: none !important;'></td>
            <td colspan=10 class=xl155 style='border: none !important;'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                            <td class=xl96 style='border: none !important;'></td>
                            <td class=xl97 style='border: none !important;'></td>

            <td class=xl108 width=16 style='width:12pt'></td>
            <td colspan=12 class=xl168 style="border-top:none !important;">Nama Pengawas &amp; Tanda Tangan</td>
            <td class=xl73></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl74 style='height:12.0pt'></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>

            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl66></td>
            <td class=xl73></td>
            </tr>
            <tr height=12 style='mso-height-source:userset;height:9.0pt'>
            <td height=12 class=xl114 colspan=8 style='height:9.0pt;mso-ignore:colspan'>Keterangan kerusakan :</td>
            <td class=xl114></td>
            <td class=xl116></td>
            <td class=xl116></td>
            <td class=xl116></td>
            <td class=xl116></td>
            <td class=xl116></td>
            <td class=xl116></td>
            <td class=xl116></td>
            <td class=xl116></td>
            <td class=xl117></td>
            <td class=xl117></td>
            <td class=xl117></td>
            <td class=xl117></td>
            <td class=xl117></td>
            <td class=xl117></td>
            <td class=xl117></td>
            <td class=xl117></td>
            <td class=xl117></td>
            <td class=xl118></td>
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            <td class=xl74></td>
            </tr>
            <tr height=12 style='mso-height-source:userset;height:9.0pt'>
            <td height=12 class=xl119 style='height:9.0pt'></td>
            <td colspan=39 style="text-align:left"class=xl201>&nbsp; &nbsp; &nbsp;{{ $Dtl->pesan}}</td>
            <td class=xl74></td>
            </tr>
            <tr height=12 style='mso-height-source:userset;height:9.0pt'>
            <td height=12 class=xl119 style='height:9.0pt'></td>
            <td colspan=39 class=xl201>&nbsp;</td>
            <td class=xl74></td>
            </tr>
            <tr height=12 style='mso-height-source:userset;height:9.0pt'>
            <td height=12 class=xl119 style='height:9.0pt'></td>
            <td colspan=39 class=xl203 style="border-top:none !important;">&nbsp;</td>
            <td class=xl74></td>
            </tr>
            <tr height=12 style='mso-height-source:userset;height:9.0pt'>
                <td colspan=41 rowspan=2 height=24 class=xl169 width=701 style='height:18.0pt;
                width:528pt'>OPERATOR YANG BAIK, SELALU MEMERIKSA DENGAN BENAR PERALATANNYA
                SEBELUM DIOPERASIKAN OPERATOR MENGERTI BAHWA KESELAMATAN DIRINYA DAPAT
                DITUNJANG PADA KONDISI PERALATAN YANG AKAN DIOPERASIKANNYA</td>
               </tr>
               <tr height=12 style='mso-height-source:userset;height:9.0pt'>
               </tr>
               <tr height=16 style='mso-height-source:userset;height:12.0pt'>
                <td height=16 class=xl66 style='height:12.0pt'></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
                <td class=xl66></td>
               </tr>
               <tr height=0 style='display:none'>
                <td width=21 style='width:16pt'></td>
                <td width=16 style='width:12pt'></td>
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
                <td width=19 style='width:14pt'></td>
                <td width=16 style='width:12pt'></td>
                <td width=16 style='width:12pt'></td>
                <td width=16 style='width:12pt'></td>
                <td width=16 style='width:12pt'></td>
                <td width=16 style='width:12pt'></td>
                <td width=16 style='width:12pt'></td>
                <td width=16 style='width:12pt'></td>
                <td width=21 style='width:16pt'></td>
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
               </tr>

              </table>
              </body>
            </html>
