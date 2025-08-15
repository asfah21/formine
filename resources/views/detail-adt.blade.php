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
				filename:     'Form-P2H-ADT-GSI.pdf', // Nama file PDF yang akan disimpan
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
  height:54px'><img width=60 height=54 src="{{ asset('storage/images/logo-gsi.png') }}"  v:shapes="Picture_x0020_1"></span></td>
  <td colspan=23 rowspan=2 class=xl120 width=393 style='border-right:.5pt solid black;border-left:none!important;
  border-bottom:none !important;width:296pt'>FORM / FORMULIR</td>
  <td colspan=6 class=xl127 width=101 style='border-right:.5pt solid black;border-bottom:none!important;
  border-left:none;width:76pt'>No. Dokumen</td>
  <td class=xl67 width=16 style='width:12pt;border-bottom:none !important;'>:</td>
  <td colspan=6 class=xl126xx width=106 style='border-right:.5pt solid black;border-bottom:none !important;
  width:80pt'>GSI4-OPR-002N</td>
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
  <td colspan=6 class=xl135 style='border-bottom:none !important;'>18-Sep-24</td>
  <td class=xl126c width=16 style='border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=14 style='mso-height-source:userset;height:11.1pt'>
  <td colspan=23 height=14 class=xl137 style='border-right:.5pt solid black;border-bottom: none !important;
  height:11.1pt;border-left:none'>ARTICULATED DUMP TRUCK (ADT)</td>
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
  <td colspan=7 style="border-bottom:none !important; text-align:left;"class=xl186>{{ $Dtl->NomorUnit}}</td>
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
  <td colspan=7 style="border-bottom:none !important;text-align:left;" class=xl187>{{ Carbon::parse($Dtl->AdtDate)->format('d-M-Y') }}</td>
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
  <td colspan=8 style="border-bottom:none !important;text-align:left;" class=xl187>{{$Dtl->StartHM}}</td>
  <td class=xl80>&nbsp;</td>
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl82 colspan=6 style='height:12.0pt;mso-ignore:colspan'>&nbsp;HM NEXT SERVICE</td>
  <td class=xl84>:</td>
  <td colspan=7 style="text-align:left;" class=xl187>{{ $Dtl->HMNextService }}</td>
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
  <td colspan=8 style="text-align:left;" class=xl187>{{ $Dtl->FinishHM }}</td>
  <td class=xl80>&nbsp;</td>
  <td class=xl126c width=16 style='border-left:none !important;border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
 </tr>

 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl85 style='height:12.0pt'>&nbsp;</td>
  <td colspan=8 rowspan="4" class=xl184>  <!-- tempat tanda tangan user -->
        <img id="res-img" src="{{ asset('storage/images/ttd_adt/' . $Dtl->adt_id . '.png') }}" alt="No data" style="width: 55%; height: 90%; margin: 7% 0% 3% 0%;"></td>
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
                                @if ($Dtl->Shift == "Siang")
									<td style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
                                @else
                                    <td class=xl90 ></td>
                                @endif

  <td class=xl81 colspan=4 style='mso-ignore:colspan'>&nbsp;DAY SHIFT</td>
  <td class=xl87></td>
                                <!-- Pemisah Kolom untuk Baik -->
                                @if ($Dtl->Shift == "Malam")
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
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PASS FUEL</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->PassFuel == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->PassFuel == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->PassFuel == "Tidak Ada")
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
            @if ($Dtl->StirKemudi == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->StirKemudi == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->StirKemudi == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>2</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TYRE</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Tyre == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Tyre == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Tyre == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>1</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI MESIN</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LevelOliMesin == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelOliMesin == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelOliMesin == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>2</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>RETARDER</td>
        <!-- Pemisah Kolom untuk Baik -->
        @if ($Dtl->Retarder == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Retarder == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Retarder == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>3</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>FINAL DRIVE</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->FinelDrive == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->FinelDrive == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->FinelDrive == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>2</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI TRANSMISI</td>
         <!-- Pemisah Kolom untuk Baik -->
         @if ($Dtl->LevelOliTransmisi == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelOliTransmisi == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelOliTransmisi == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>3</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>REM KAKI</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->RemKaki == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->RemKaki == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->RemKaki == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>4</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SELINDER STERING</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->SelinderSteering == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->SelinderSteering == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->SelinderSteering == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>3</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI HYDRAULIC</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LevelOliHydraulic == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelOliHydraulic == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelOliHydraulic == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>4</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>REM PARKIR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->RemParkir2 == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->RemParkir2 == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->RemParkir2 == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>5</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>DRIVE SHAFT</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->DriveShaft == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->DriveShaft == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->DriveShaft == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>4</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left: none'>LEVEL OLI REM</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LevelOliRem == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelOliRem == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelOliRem == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>5</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>GIGI PERSNELING</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->GigiPerseneling == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->GigiPerseneling == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->GigiPerseneling == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>6</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>DROP BOX</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->DropBox == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->DropBox == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->DropBox == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>5</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left: none'>LEVEL FUEL</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LevelFuel == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelFuel == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelFuel == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>6</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KLAKSON MUNDUR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->KlaksonMundur == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->KlaksonMundur == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->KlaksonMundur == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>7</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>HITCH /PIVOT</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Pivot == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Pivot == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Pivot == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>6</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>OIL TEMPERATUR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->OliTemp == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->OliTemp == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->OliTemp == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>7</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU PERINGATAN</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LampuPeringatan == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LampuPeringatan == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LampuPeringatan == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>8</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>C-FRAME</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->CFrame == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->CFrame == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->CFrame == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>7</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TEKANAN REM TRACTOR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->TekananRemTractor == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->TekananRemTractor == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->TekananRemTractor == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>8</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>ECU</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Ecu == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Ecu == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Ecu == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>9</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OIL HYDRAULIC</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LevelOliHidraulic == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelOliHidraulic == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelOliHidraulic == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>8</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TEKANAN REM TRAILER</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->TekananRemTrailer == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->TekananRemTrailer == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->TekananRemTrailer == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>9</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SISTEM HYDRAULIC</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->SystemHidraulik == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->SystemHidraulik == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->SystemHidraulik == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>10</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OIL TRANSMISI</td>
             <!-- Pemisah Kolom untuk Baik -->
             @if ($Dtl->LevelOliTransmisi == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelOliTransmisi == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelOliTransmisi == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>9</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEMUDI / STIR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Kemudi == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Kemudi == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Kemudi == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>10</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>GAUGE</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Gauge == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Gauge == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Gauge == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt;'>
  <td height=16 class=xl95 style='height:12.0pt'>11</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>BATTERY / AKI</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->BatteryAki == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->BatteryAki == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->BatteryAki == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>10</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PENGATUR STIR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->PangaturStir == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->PangaturStir == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->PangaturStir == "Tidak Ada")
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
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SELINDER DUMP</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->SelinderDump == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->SelinderDump == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->SelinderDump == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>11</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PEDAL GAS</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->PedalGas == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->PedalGas == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->PedalGas == "Tidak Ada")
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
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>DUMP BODY / VESSEL</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->DumpBody == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->DumpBody == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->DumpBody == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>12</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PEDAL REM SERVICE</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->DumpBody == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->DumpBody == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->DumpBody == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td colspan=13 class=xl163>UNTUK SEMUA OPERATOR</td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>14</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>RUBBER SPRING / BOGIE</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->RubberSpring == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->RubberSpring == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->RubberSpring == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>13</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PEDAL RETARDER</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->PedalRetarder == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->PedalRetarder == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->PedalRetarder == "Tidak Ada")
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
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PROPELLER SHAFT</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->PropellarShaft == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->PropellarShaft == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->PropellarShaft == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>14</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>DIFFLOCK 6X6</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Difflock == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Difflock == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Difflock == "Tidak Ada")
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
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>AXEL FRONT, MIDDLE, REAR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->AxelFront == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->AxelFront == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->AxelFront == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>15</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TUAS TRANSMISI</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->TuasTransmisi == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->TuasTransmisi == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->TuasTransmisi == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl104></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>17</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>A-FRAME</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->AFrame == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->AFrame == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->AFrame == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>16</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TUAS LEVER DUMP</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->TuasLeverDump == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->TuasLeverDump == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->TuasLeverDump == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl104></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>18</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OIL BRAKE</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LevelOliBrake == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelOliBrake == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelOliBrake == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>17</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>REM PARKIR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->RemParkir == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->RemParkir == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->RemParkir == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl74></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>19</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>MUFFLER / KNALPOT</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Muffler == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Muffler == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Muffler == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>18</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LDB</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LDB == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LDB == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LDB == "Tidak Ada")
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
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OIL ENGINE</td>
             <!-- Pemisah Kolom untuk Baik -->
             @if ($Dtl->LevelOliEngine == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelOliEngine == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelOliEngine == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>19</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>ATC (Auto Traction Control)</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->ATC == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->ATC == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->ATC == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl104></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>21</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL AIR COULANT</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LevelAirCoolant == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LevelAirCoolant == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LevelAirCoolant == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>20</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LOCK TRANSMISI</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LockTransmisi == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LockTransmisi == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LockTransmisi == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl74></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>22</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>V-BELT</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->VBelt == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->VBelt == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->VBelt == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl94></td>
  <td class=xl95>21</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>ENGINE BRAKE</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->EngineBrake == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->EngineBrake == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->EngineBrake == "Tidak Ada")
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
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>AIR CLEANER</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->AirCleaner == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->AirCleaner == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->AirCleaner == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl95>22</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SEAT BELT</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->SeatBelt == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->SeatBelt == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->SeatBelt == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl104></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>24</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>WATER SEPARATOR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->WaterSeparator == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->WaterSeparator == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->WaterSeparator == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl95>23</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVER SIGNAL / RETING</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->LeverSingnal == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->LeverSingnal == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->LeverSingnal == "Tidak Ada")
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
  <td colspan=13 height=16 class=xl157 style='border-right:2.0pt double black;height:12.0pt;border-top:none !important;'>PERKAKAS / PERALATAN</td>
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl95>24</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KLAKSON</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Klakson == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Klakson == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Klakson == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl99></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>1</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PEMADAM API / APAR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Apar == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Apar == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Apar == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl95>25</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>RADIO KOMUNIKASI</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Radio == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Radio == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Radio == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl99></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>2</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>FIRE SUPPRESSION</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->FireSup == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->FireSup == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->FireSup == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td colspan=13 class=xl165 style='border-right:2.0pt double black;border-top:none !important;'>DI LUAR
  KABIN</td>
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl74></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>3</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TALI PENGAMAN (SEAT BELT)</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->TaliPengaws == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif

            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->TaliPengaws == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->TaliPengaws == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl95>1</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEBOCORAN OLI</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->KebocoranOli == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->KebocoranOli == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->KebocoranOli == "Tidak Ada")
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
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>RADIO KOMUNIKASI</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->Radio == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->Radio == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->Radio == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl95>2</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEBOCORAN AIR</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->KebocoranAir == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->KebocoranAir == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->KebocoranAir == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td colspan="12" rowspan="4" class=xl71> <!-- Tanda Tangan-->
        <img id="res-img-pw" src="{{ asset('storage/images/ttd_mh_pw/' . $Dtl->status) }}" alt="Belum diapprove" style="width: 35%; height: 90%; margin: 0% 0% 0% 0%;"></td>
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

 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl95 style='height:12.0pt'>5</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SAFETY CONE</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->SafetyCone == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->SafetyCone == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->SafetyCone == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl95>3</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEBOCORAN UDARA</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->KebocoranUdara == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->KebocoranUdara == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->KebocoranUdara == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl73></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=13 height=16 class=xl157 style='border-right:2.0pt double black;border-top:none !important;
  height:12.0pt'>KEBERSIHAN</td>
  <td class=xl108 width=16 style='width:12pt'></td>
  <td class=xl95>4</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEBOCORAN FUEL</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->KebocoranFuel == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->KebocoranFuel == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->KebocoranFuel == "Tidak Ada")
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
            @if ($Dtl->KebersihanEquip == "Baik")
                <td style="font-weight:normal;text-align:center;border-left:none !important;border-top:none !important;"class=xl161 >&#10004;</td>
            @else
                <td class=xl161 style="border-left:none !important;border-top:none !important;" ></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->KebersihanEquip == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl101 >&#10006;</td>
            @elseif ($Dtl->KebersihanEquip == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl101 >-</td>
            @else
                <td class=xl101 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td colspan=13 class=xl165 style='border-top:none !important;border-right:2.0pt double black'>KONDISI EQUIPMENT</td>
  <td class=xl108 width=16 style='width:12pt'></td>

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
  <td class=xl95>1</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SUARA MESIN</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->SuaraMasuk == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->SuaraMasuk == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->SuaraMasuk == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
  <td class=xl108 width=16 style='width:12pt'></td>
  <td colspan=12 class=xl200>{{ $Dtl->pengawas}}</td> {{-- Nama Pengawas --}}
  {{-- <td colspan=12 class=xl200>{{ $Dtl->name}}</td> --}}
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
  <td class=xl95>2</td>
  <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SUARA TRANSMISI</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->SuaraTransmisi == "Baik")
                <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
            @else
                <td class=xl96 ></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->SuaraTransmisi == "Rusak")
                <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
            @elseif ($Dtl->SuaraTransmisi == "Tidak Ada")
                <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
            @else
                <td class=xl97 ></td>
            @endif
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
  <td class=xl98>3</td>
  <td colspan=10 class=xl161 style='border-right:.5pt solid black;border-left:none;border-top:none !important;'>SUARA DIFFERENTIAL</td>
            <!-- Pemisah Kolom untuk Baik -->
            @if ($Dtl->SuaraDifferential == "Baik")
                <td style="font-weight:normal;text-align:center;border-top:none !important;border-left:none !important;border-right:.5pt solid black !important;"class=xl161 >&#10004;</td>
            @else
                <td class=xl161 style="border-top:none !important;border-left:none !important;border-right:.5pt solid black !important;"></td>
            @endif
            <!-- Pemisah Kolom untuk Rusak -->
            @if ($Dtl->SuaraDifferential == "Rusak")
                <td style="font-weight:normal;text-align:center; border-left: none !important;"class=xl101 >&#10006;</td>
            @elseif ($Dtl->SuaraDifferential == "Tidak Ada")
                <td style="font-weight:normal;text-align:center; border-left: none !important;"class=xl101 >-</td>
            @else
                <td class=xl101 style="border-left: none !important;"></td>
            @endif
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
