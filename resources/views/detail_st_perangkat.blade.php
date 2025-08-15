<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="./my-css/mypdf-adt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-ChzDzmAAZ0YIHCS3ve46r9IN7TNbIqChYbQ9L5ABrqPgU6qezieZmLQ9iY1ZAZbJ2A0jWM99d63Nd7dyVlc+r"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <!-- Back Button -->
    <button id="backBtn" onclick="window.history.back()" class="no-print"
        style="background-color: rgb(228, 0, 0);color: white; padding: 10px 20px;
        margin: 15px 15px 20px 0px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; display: inline-flex; align-items: center;">
        <!-- Icon Back -->
        <svg xmlns="http://www.w3.org/2000/svg" style="width: 16px; height: 16px; margin-right: 8px;"
            fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M10 18a1 1 0 01-.707-.293l-6-6a1 1 0 010-1.414l6-6a1 1 0 111.414 1.414L5.414 10H17a1 1 0 110 2H5.414l5.293 5.293A1 1 0 0110 18z"
                clip-rule="evenodd" />
        </svg>
        Back
    </button>

    @php
        $nama_Q = 'asfah21@gmail.com'
    @endphp

    <!-- Save Button -->
    <button id="downloadBtn" onclick="saveAsPDF()" class="no-print"
        style="background-color: rgb(0, 131, 0);color: white; padding: 10px 20px;
        margin: 15px 15px 15px 0px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; display: inline-flex; align-items: center;">
        <!-- Icon Save -->
        <svg xmlns="http://www.w3.org/2000/svg" style="width: 16px; height: 16px; margin-right: 8px;"
            fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M17 16V5a2 2 0 00-2-2H5a2 2 0 00-2 2v11a2 2 0 002 2h10a2 2 0 002-2zM9 14a3 3 0 100-6 3 3 0 000 6zm4-5a1 1 0 01-1-1V7a1 1 0 112 0v1a1 1 0 01-1 1z" />
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
            font-family:Calibri;
            mso-generic-font-family:auto;
            mso-font-charset:134;
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
            font-family:Calibri;
            mso-generic-font-family:auto;
            mso-font-charset:134;
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
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;}
        .xl66
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;}
        .xl67
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;}
        .xl68
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;}
        .xl69
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid  ;}
        .xl70
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:none;
            border-left:none;}
        .xl71
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:none;
            border-left:none;}
        .xl72
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid  ;}
        .xl73
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;}
        .xl74
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:.5pt solid  ;}
        .xl75
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl76
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl77
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;}
        .xl78
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;}
        .xl79
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;}
        .xl80
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;}
        .xl81
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;}
        .xl82
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;}
        .xl83
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;}
        .xl84
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid  ;
            border-left:none;}
        .xl85
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid  ;
            border-left:none;}
        .xl86
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid  ;
            border-left:none;}
        .xl87
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;}
        .xl88
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;}
        .xl89
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dotted  ;
            border-left:none;}
        .xl90
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dotted  ;
            border-left:none;}
        .xl91
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dotted  ;
            border-left:none;}
        .xl92
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;}
        .xl93
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl94
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl95
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:top;}
        .xl96
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:top;
            white-space:normal;}
        .xl97
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid  ;}
        .xl98
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl99
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid  ;}
        .xl100
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:top;}
        .xl101
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;
            white-space:normal;}
        .xl102
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:none;
            border-left:none;}
        .xl103
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:none;
            border-left:none;}
        .xl104
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl105
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl106
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:.5pt solid  ;
            border-bottom:none;
            border-left:none;}
        .xl107
            {mso-style-parent:style0;
            color: ;
            font-size:14.0pt;
            font-weight:700;
            font-family:Wingdings;
            mso-generic-font-family:auto;
            mso-font-charset:2;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid  ;}
        .xl108
            {mso-style-parent:style0;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;
            vertical-align:middle;}
        .xl109
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;
            vertical-align:middle;}
        .xl110
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;}
        .xl111
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;}
        .xl112
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            vertical-align:middle;}
        .xl113
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;}
        .xl114
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;
            vertical-align:middle;}
        .xl115
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;}
        .xl116
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            vertical-align:middle;}
        .xl117
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;}
        .xl118
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid  ;}
        .xl119
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;
            vertical-align:middle;}
        .xl120
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;
            vertical-align:top;}
        .xl121
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;
            vertical-align:middle;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl122
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid  ;
            border-left:none;}
        .xl123
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid  ;
            border-left:none;}
        .xl124
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:1.0pt solid  ;
            border-left:none;}
        .xl125
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;}
        .xl126
            {mso-style-parent:style0;
            font-size:9.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:none;
            border-left:none;}
        .xl127
            {mso-style-parent:style0;
            font-size:9.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl128
            {mso-style-parent:style0;
            font-size:9.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl129
            {mso-style-parent:style0;
            font-size:9.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:.5pt solid  ;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl130
            {mso-style-parent:style0;
            font-size:9.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:.5pt solid  ;}
        .xl131
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            border-top:.5pt dashed  ;
            border-right:none;
            border-bottom:.5pt dashed  ;
            border-left:none;}
        .xl132
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dashed  ;
            border-left:none;}
        .xl133
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dashed  ;
            border-left:none;}
        .xl134
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dashed  ;
            border-left:none;}
        .xl135
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl136
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border-right:none;
            border-bottom:.5pt dashed  ;
            border-left:none;}
        .xl137
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dashed  ;
            border-left:none;}
        .xl138
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:.5pt solid  ;}
        .xl139
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl140
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:.5pt solid  ;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl141
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid  ;}
        .xl142
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:none;
            border-left:none;}
        .xl143
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:.5pt solid  ;
            border-bottom:none;
            border-left:none;}
        .xl144
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:.5pt solid  ;}
        .xl145
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl146
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:.5pt solid  ;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl147
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:.5pt solid  ;}
        .xl148
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl149
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:.5pt solid  ;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl150
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:.5pt solid  ;}
        .xl151
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl152
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid  ;
            border-bottom:.5pt solid  ;
            border-left:none;}
        .xl153
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dotted  ;
            border-left:none;}
        .xl154
            {mso-style-parent:style0;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dotted  ;
            border-left:none;}
        .xl155
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dotted  ;
            border-left:none;}
        .xl156
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            mso-number-format:"Short Date";
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dotted  ;
            border-left:none;}
        .xl157
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:1.0pt solid  ;
            border-right:.5pt solid  ;
            border-bottom:.5pt solid  ;
            border-left:.5pt solid  ;
            background:#BDD7EE;
            mso-pattern:black none;}
        .xl158
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:left;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:.5pt solid  ;
            border-bottom:1.0pt solid  ;
            border-left:.5pt solid  ;
            background:#BDD7EE;
            mso-pattern:black none;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl159
            {mso-style-parent:style0;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border-top:.5pt solid  ;
            border-right:.5pt solid  ;
            border-bottom:1.0pt solid  ;
            border-left:.5pt solid  ;}
        .xl160
            {mso-style-parent:style0;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            border-top:none;
            border-right:none;
            border-bottom:.5pt dotted  ;
            border-left:none;}
        .xl161
            {mso-style-parent:style0;
            font-size:9.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            vertical-align:middle;
            border:.5pt solid  ;}
        .xl162
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid  ;}
        .xl163
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border-top:none;
            border-right:.5pt solid  ;
            border-bottom:none;
            border-left:none;}
        .xl164
            {mso-style-parent:style0;
            font-size:14.0pt;
            font-weight:700;
            font-family:Arial;
            mso-generic-font-family:auto;
            mso-font-charset:134;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid  ;}
        .xl165
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid  ;
            background:#BDD7EE;
            mso-pattern:black none;}
        .xl166
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:left;
            vertical-align:middle;
            border:.5pt solid  ;
            background:#BDD7EE;
            mso-pattern:black none;
            padding-left:9px;
            mso-char-indent-count:1;}
        .xl167
            {mso-style-parent:style0;
            font-size:10.0pt;
            font-weight:700;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid  ;}

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
            filename:     'Form-P2H-Serah-Terima-Barang.pdf', // Nama file PDF yang akan disimpan
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

        <body link="#0563C1" vlink="#954F72" class=xl66>

        <table border=0 cellpadding=0 cellspacing=0 width=699 style='table-layout:fixed;width:520pt'>
         <col class=xl66 width=19 span=9 style='mso-width-source:userset;mso-width-alt:
         694;width:14pt'>
         <col class=xl66 width=12 span=4 style='mso-width-source:userset;mso-width-alt:
         438;width:9pt'>
         <col class=xl66 width=26 style='mso-width-source:userset;mso-width-alt:950;
         width:20pt'>
         <col class=xl66 width=19 span=5 style='mso-width-source:userset;mso-width-alt:
         694;width:14pt'>
         <col class=xl66 width=26 span=2 style='mso-width-source:userset;mso-width-alt:
         950;width:20pt'>
         <col class=xl66 width=19 style='mso-width-source:userset;mso-width-alt:694;
         width:14pt'>
         <col class=xl66 width=12 span=3 style='mso-width-source:userset;mso-width-alt:
         438;width:9pt'>
         <col class=xl66 width=19 style='mso-width-source:userset;mso-width-alt:694;
         width:14pt'>
         <col class=xl66 width=26 style='mso-width-source:userset;mso-width-alt:950;
         width:20pt'>
         <col class=xl66 width=19 span=5 style='mso-width-source:userset;mso-width-alt:
         694;width:14pt'>
         <col class=xl66 width=12 span=3 style='mso-width-source:userset;mso-width-alt:
         438;width:9pt'>
         <col class=xl66 width=19 span=3 style='mso-width-source:userset;mso-width-alt:
         694;width:14pt'>
         <col class=xl66 width=19 style='mso-width-source:userset;mso-width-alt:694;
         width:14pt'>
         <tr height=20 style='mso-height-source:userset;height:15.0pt'>
          <td colspan=5 rowspan=4 height=56 width=85 style='border-bottom: .5pt solid !important;height:15.0pt;width:14pt;border-top: .5pt solid !important;border-left:.5pt solid !important;' align=left valign=top>

            <div style='   z-index:1;
                            margin-left:13px;
                            margin-top:2px;
                            margin-bottom:10px !important;
                            width:60px;
            height:54px'><img width=60 height=54 src="{{ asset('storage/images/logo-gsi.png') }}"  v:shapes="Picture_x0020_1"></div></td>
          </td>

          <td colspan=22 rowspan=2 class=xl162 width=397 style='border-right:.5pt solid black;border-top: .5pt solid !important; width:297pt'>FORM / FORMULIR</td>
          <td colspan=6 class=xl161 width=107 style='border-left:none;width:79pt;border-bottom: .5pt solid  !important;'>No. Dokumen</td>
          <td class=xl126 width=12 style='width:9pt;border-bottom:.5px solid !important;'>:</td>
          <td class=xl128 colspan=5 width=88 style='mso-ignore:colspan;border-right:
          .5pt solid black;width:65pt;'>GSI4-IT-001D</td>
         </tr>
         <tr height=19 style='mso-height-source:userset;height:14.25pt'>


          <td colspan=6 class=xl161 style='border-left:none;border-top: none !important;'>Revisi</td>
          <td class=xl127 style="border-top: none !important;">:</td>
          <td class=xl128 align=right style='border-top:none !important;'>1</td>
          <td class=xl128 style='border-top:none'>&nbsp;</td>
          <td class=xl128 style='border-top:none'>&nbsp;</td>
          <td class=xl128 style='border-top:none'>&nbsp;</td>
          <td class=xl129 style='border-top:none'>&nbsp;</td>
         </tr>
         <tr height=19 style='mso-height-source:userset;height:14.25pt'>

          <td colspan=22 rowspan=2 class=xl164>SERAH TERIMA PERANGKAT</td>
          <td colspan=6 class=xl161 style='border-left:none;border-top: none !important;'>Tanggal Efektif</td>
          <td class=xl127 style='border-top:none'>:</td>
          <td class=xl128 colspan=5 style='border-top: none !important;mso-ignore:colspan;border-right:.5pt solid black'>01
          Juli 2024</td>
         </tr>
         <tr height=19 style='mso-height-source:userset;height:14.25pt'>

          <td colspan=6 class=xl161 style='border-left:none;border-top: none !important;'>Halaman</td>
          <td class=xl127 style='border-top:none;border-left:none'>:</td>
          <td class=xl128 align=right style='border-top:none'>1</td>
          <td class=xl128 style='border-top:none'>&nbsp;</td>
          <td class=xl128 style='border-top:none'>&nbsp;</td>
          <td class=xl128 style='border-top:none'>&nbsp;</td>
          <td class=xl129 style='border-top:none'>&nbsp;</td>
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
          <td class=xl70 style='border-top:none'>&nbsp;</td>
          <td class=xl70 style='border-top:none'>&nbsp;</td>
          <td class=xl66></td>
          <td class=xl66></td>
          <td class=xl66></td>
          <td class=xl66></td>
         </tr>
         <tr class=xl65 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl110 style='height:15.95pt'>I.</td>
          <td class=xl111 colspan=7 style='mso-ignore:colspan'>Informasi Perangkat</td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl114>II.</td>
          <td class=xl114 colspan=6 style='mso-ignore:colspan'>Detail Perangkat</td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>
         <tr height=16 style='mso-height-source:userset;height:12.0pt'>
          <td height=16 class=xl115 style='height:12.0pt'></td>
          <td class=xl115></td>
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
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl116 style='height:15.95pt'></td>
          <td class=xl116 colspan=3 style='mso-ignore:colspan'>ID Aset</td>
          <td class=xl116></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl116></td>
          <td class=xl117>:</td>
          <td colspan=5 class=xl132>{{$Dtl->id_assets}}</td>
          <td class=xl116></td>
          <td class=xl116></td>
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
          <!-- Perangkat Keras -->
            @if ($Dtl->detail_perangkat == "Perangkat Keras (Hardware)")
                <td class=xl118 style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
            @else
                <td class=xl118></td>
            @endif

          <td class=xl117></td>
          <td class=xl119 colspan=10 style='mso-ignore:colspan;'>Perangkat Keras
          (Hardware)</td>
          <td class=xl117></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl116 style='height:15.95pt'></td>
          <td class=xl116 colspan=6 style='mso-ignore:colspan'>Jenis Perangkat</td>
          <td class=xl116></td>
          <td class=xl117>:</td>
          <td colspan=14 style="text-align: left;" class=xl137><b>{{$Dtl2->device_type}}</b></td>
          <td class=xl116></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <!-- Perangkat Keras -->
          @if ($Dtl->detail_perangkat == "Perangkat Lunak (Software)")
                <td class=xl118 style="border-top:none;font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none'></td>
          @endif

          <td class=xl117></td>
          <td class=xl119 colspan=10 style='mso-ignore:colspan'>Perangkat Lunak
          (Software)</td>
          <td class=xl117></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl116 style='height:15.95pt'></td>
          <td class=xl116 colspan=6 style='mso-ignore:colspan'>Nama Perangkat</td>
          <td class=xl116></td>
          <td class=xl117>:</td>
          <td colspan=14 style="text-align: left;" class=xl136>{{$Dtl2->brand}}</td>
          <td class=xl116></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl118 style='border-top:none'></td>

          <td class=xl117></td>
          <td class=xl119 colspan=10 style='mso-ignore:colspan'>Periferal Lainnya,
          Berupa :</td>
          <td class=xl117></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl116 style='height:15.95pt'></td>
          <td class=xl116 colspan=4 style='mso-ignore:colspan'>Merk/Model</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl116></td>
          <td class=xl117>:</td>
          <td colspan=14 class=xl136 style="text-align: left">{{$Dtl2->spesifikasi}}</td>
          <td class=xl116></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <td class=xl116></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl116 style='height:15.95pt'></td>
          <td class=xl116 colspan=4 style='mso-ignore:colspan'>Nomor Seri</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl116></td>
          <td class=xl117>:</td>
          <td colspan=14 class=xl136 style="text-align: left">{{$Dtl2->serial_number}}</td>
          <td class=xl116></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl120 colspan=6 style='mso-ignore:colspan'>Kondisi Perangkat</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl116 style='height:15.95pt'></td>
          <td class=xl116 colspan=7 style='mso-ignore:colspan'>Tanggal Pembelian</td>
          <td class=xl117>:</td>
          <td colspan=14 class=xl136 style="text-align: left">{{$Dtl2->tgl_serah_terima}}</td>
          <td class=xl116></td>
          <td class=xl117></td>
          <td class=xl114></td>
          <!-- Perangkat Keras -->
          @if ($Dtl->kondisi_perangkat == "Baru")
                <td class=xl118 style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 ></td>
          @endif

          <td class=xl117></td>
          <td class=xl119 colspan=6 style='mso-ignore:colspan'>Perangkat Baru</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl116 style='height:15.95pt'></td>
          <td class=xl116 colspan=7 style='mso-ignore:colspan'>Lokasi Penyerahan</td>
          <td class=xl117>:</td>
          <td colspan=14 class=xl136 style="text-align: left">{{$Dtl2->lokasi}}</td>
          <td class=xl116></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <!-- Perangkat Keras -->
          @if ($Dtl->kondisi_perangkat == "Bekas")
                <td class=xl118 style="border-top:none;font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none'></td>
          @endif

          <td class=xl117></td>
          <td class=xl119 colspan=7 style='mso-ignore:colspan'>Perangkat Bekas</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl116 style='height:15.95pt'></td>
          <td class=xl116 colspan=7 style='mso-ignore:colspan'>Tanggal Penyerahan</td>
          <td class=xl117>:</td>
          <td colspan="14" class="xl136" style="text-align: left">
            {{ \Carbon\Carbon::parse($Dtl->tgl_penyerahan)->format('d/m/Y') }}
        </td>

          <td class=xl116></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <!-- Perangkat Keras -->
          @if ($Dtl->kondisi_perangkat == "Rusak")
                <td class=xl118 style="border-top:none;font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none'></td>
          @endif

          <td class=xl117></td>
          <td class=xl119 colspan=3 style='mso-ignore:colspan'>Rusak</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
         </tr>
         <tr height=16 style='mso-height-source:userset;height:12.0pt'>
          <td height=16 class=xl115 style='height:12.0pt'></td>
          <td class=xl115></td>
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
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl115></td>
          <td class=xl115></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
         </tr>
         <tr height=24 style='mso-height-source:userset;height:18.0pt'>
          <td colspan=39 height=24 class=xl165 style='height:18.0pt'>III. Detail
          Pengecekan</td>
         </tr>
         <tr height=24 style='mso-height-source:userset;height:18.0pt'>
          <td colspan=27 height=24 class=xl166 style='height:18.0pt;border-top: none !important;'>Perangkat Keras
          (Hardware)</td>
          <td colspan=12 class=xl167 style='border-left:none;border-top: none !important;'>Catatan/Tindakan</td>
         </tr>
         <tr height=16 style='mso-height-source:userset;height:12.0pt'>
          <td height=16 class=xl117 style='height:12.0pt'></td>
          <td class=xl115></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl117 style='height:15.95pt'></td>
          <td class=xl116 colspan=4 style='mso-ignore:colspan'>Kondisi fisik</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <!-- Kondisi Fisik -->
          @if ($Dtl->kondisi_fisik == "Ya")
                <td class=xl118 style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 ></td>
          @endif

          <td class=xl121 colspan=3 style='mso-ignore:colspan'>Bagus</td>
          <td class=xl117></td>
          <td class=xl121></td>
          <!-- Kondisi Fisik -->
          @if ($Dtl->kondisi_fisik == "Tidak")
                <td class=xl118 style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 ></td>
          @endif

          <td class=xl121 colspan=3 style='mso-ignore:colspan'>Cacat</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl67></td>
          <td class=xl117></td>
          <td colspan=12 class=xl132>{{$Dtl->kondisi_fisik_ket}}</td>
         </tr>
         <tr height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl117 style='height:15.95pt'></td>
          <td class=xl116 colspan=8 style='mso-ignore:colspan'>Kelengkapan komponen</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <!-- Kelngkapan Komponen -->
          @if ($Dtl->komponen_lengkap == "Ya")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=4 style='mso-ignore:colspan'>Lengkap</td>
          <td class=xl121></td>

          <!-- Kelngkapan Komponen -->
          @if ($Dtl->komponen_lengkap == "Tidak")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none'></td>
          @endif
          <td class=xl121 colspan=6 style='mso-ignore:colspan'>Tidak Lengkap</td>
          <td class=xl117></td>
          <td colspan=12 class=xl132>{{$Dtl->komponen_lengkap_ket}}</td>
         </tr>
         <tr height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl117 style='height:15.95pt'></td>
          <td class=xl116 colspan=5 style='mso-ignore:colspan'>Fungsi dasar</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <!-- Fungsi Dasar -->
          @if ($Dtl->fungsi_dasar == "Ya")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=4 style='mso-ignore:colspan'>Berfungsi</td>
          <td class=xl121></td>
          <!-- Fungsi Dasar -->
          @if ($Dtl->fungsi_dasar == "Tidak")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=7 style='mso-ignore:colspan'>Tidak Berfungsi</td>
          <td colspan=12 class=xl132>{{$Dtl->fungsi_dasar_ket}}</td>
         </tr>
         <tr height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl117 style='height:15.95pt'></td>
          <td class=xl115 colspan=11 style='mso-ignore:colspan'>Kesesuaian dengan spesifikasi</td>
          <td class=xl117></td>
          <!-- Sesuai Spek -->
          @if ($Dtl->sesuai_spek == "Ya")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=3 style='mso-ignore:colspan'>Sesuai</td>
          <td class=xl117></td>
          <td class=xl121></td>
          <!-- Sesuai Spek -->
          @if ($Dtl->sesuai_spek == "Tidak")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=6 style='mso-ignore:colspan'>Tidak Sesuai</td>
          <td class=xl117></td>
          <td colspan=12 class=xl132>{{$Dtl->sesuai_spek_ket}}</td>
         </tr>
         <tr height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl115 style='height:15.95pt'></td>
          <td class=xl115 colspan=5 style='mso-ignore:colspan'>Kartu Garansi</td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <!-- Kartu Garansi -->
          @if ($Dtl->kartu_garansi == "Ya")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=2 style='mso-ignore:colspan'>Ada</td>
          <td class=xl115></td>
          <td class=xl117></td>
          <td class=xl121></td>
          <!-- Kartu Garansi -->
          @if ($Dtl->kartu_garansi == "Tidak")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=5 style='mso-ignore:colspan'>Tidak Ada</td>
          <td class=xl66></td>
          <td class=xl113></td>
          <td colspan=12 class=xl132>{{$Dtl->kartu_garansi_ket}}</td>
         </tr>
         <tr height=16 style='mso-height-source:userset;height:12.0pt'>
          <td height=16 class=xl115 style='height:12.0pt'></td>
          <td class=xl115></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>
         <tr height=24 style='mso-height-source:userset;height:18.0pt'>
          <td colspan=27 height=24 class=xl166 style='height:18.0pt'>Perangkat Lunak
          (Software)</td>
          <td colspan=12 class=xl167 style='border-left:none'>Catatan/Tindakan</td>
         </tr>
         <tr height=16 style='mso-height-source:userset;height:12.0pt'>
          <td height=16 class=xl115 style='height:12.0pt'></td>
          <td class=xl115></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>
         <tr height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl115 style='height:15.95pt'></td>
          <td class=xl116 colspan=7 style='mso-ignore:colspan'>Lisensi asli dan sah</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl116></td>
          <td class=xl116></td>
          <!-- Lisensi Asli -->
          @if ($Dtl->lisensi_asli == "Ya")
                <td class=xl118 style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 ></td>
          @endif

          <td class=xl121 colspan=4 style='mso-ignore:colspan'>Genuine</td>
          <td class=xl121></td>
          <!-- Lisensi Asli -->
          @if ($Dtl->kartu_garansi == "Tidak")
                <td class=xl118 style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 ></td>
          @endif
          <td class=xl121 colspan=4 style='mso-ignore:colspan'>Bajakan</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl66></td>
          <td colspan=12 class=xl132>{{$Dtl->lisensi_asli_ket}}</td>
         </tr>
         <tr height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl115 style='height:15.95pt'></td>
          <td class=xl116 colspan=11 style='mso-ignore:colspan'>Kode aktivasi / lisensi
          tersedia</td>
          <td class=xl117></td>
          <!-- Kode Aktivasi -->
          @if ($Dtl->kode_akt == "Ya")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=4 style='mso-ignore:colspan'>Tersedia</td>
          <td class=xl121></td>
          <!-- Kode Aktivasi -->
          @if ($Dtl->kode_akt == "Tidak")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=6 style='mso-ignore:colspan'>Tidak Tersedia</td>
          <td class=xl66></td>
          <td colspan=12 class=xl132>&nbsp;</td>
         </tr>
         <tr height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl115 style='height:15.95pt'></td>
          <td class=xl116 colspan=7 style='mso-ignore:colspan'>Dokumentasi lengkap</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <!-- Doc Lengkap -->
          @if ($Dtl->dok_lengkap == "Ya")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=4 style='mso-ignore:colspan'>Lengkap</td>
          <td class=xl121></td>
          <!-- Doc Lengkap -->
          @if ($Dtl->dok_lengkap == "Tidak")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=6 style='mso-ignore:colspan'>Tidak Lengkap</td>
          <td class=xl66></td>
          <td colspan=12 class=xl132>{{$Dtl->dok_lengkap_ket}}</td>
         </tr>
         <tr height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl115 style='height:15.95pt'></td>
          <td class=xl115 colspan=5 style='mso-ignore:colspan'>Versi terbaru</td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <td class=xl117></td>
          <!-- Versi Terbaru -->
          @if ($Dtl->versi_terbaru == "Ya")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=3 style='mso-ignore:colspan'>Terbaru</td>
          <td class=xl117></td>
          <td class=xl121></td>
          <!-- Versi Terbaru -->
          @if ($Dtl->versi_terbaru == "Tidak")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=5 style='mso-ignore:colspan'>Versi Lama</td>
          <td class=xl117></td>
          <td class=xl66></td>
          <td colspan=12 class=xl132>{{$Dtl->versi_terbaru_ket}}</td>
         </tr>
         <tr height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl115 style='height:15.95pt'></td>
          <td class=xl115 colspan=10 style='mso-ignore:colspan'>Kompatibilitas dengan
          sistem</td>
          <td class=xl113></td>
          <td class=xl113></td>
          <!-- Kompatibilitas Sistem -->
          @if ($Dtl->versi_terbaru == "Ya")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=5 style='mso-ignore:colspan'>Kompatibel</td>
          <!-- Kompatibilitas Sistem -->
          @if ($Dtl->versi_terbaru == "Tidak")
                <td class=xl118 style="border-top:none; font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
          @else
                <td class=xl118 style='border-top:none' ></td>
          @endif

          <td class=xl121 colspan=7 style='mso-ignore:colspan'>Tidak Kompatibel</td>
          <td colspan=12 class=xl132>{{$Dtl->versi_terbaru_ket}}</td>
         </tr>
         <tr height=16 style='mso-height-source:userset;height:12.0pt'>
          <td height=16 class=xl115 style='height:12.0pt'></td>
          <td class=xl115></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>
         <tr class=xl67 height=21 style='mso-height-source:userset;height:15.95pt'>
          <td height=21 class=xl116 style='height:15.95pt'></td>
          <td class=xl116 colspan=9 style='mso-ignore:colspan'>Sofware lain yang
          terinstal</td>
          <td class=xl113></td>
          <td class=xl117></td>
          <td class=xl117>:</td>
          <td colspan=26 class=xl133 style="text-align: left">{{$Dtl->software_terinstall}}</td>
         </tr>
         <tr height=16 style='mso-height-source:userset;height:12.0pt'>
          <td height=16 class=xl122 style='height:12.0pt'>&nbsp;</td>
          <td class=xl122>&nbsp;</td>
          <td class=xl123>&nbsp;</td>
          <td class=xl123>&nbsp;</td>
          <td class=xl123>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
          <td class=xl124>&nbsp;</td>
         </tr>
         <tr height=16 style='mso-height-source:userset;height:12.0pt'>
          <td height=16 class=xl115 style='height:12.0pt'></td>
          <td class=xl115></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl112></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>
         <tr class=xl68 height=20 style='mso-height-source:userset;height:15.0pt'>
          <td height=20 class=xl114 colspan=8 style='height:15.0pt;mso-ignore:colspan'>Keterangan
          Tambahan</td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
         </tr>
         <tr height=20 style='mso-height-source:userset;height:15.0pt'>
          <td colspan=39 height=20 class=xl134 style='height:15.0pt'>{{$Dtl->keterangan}}</td>
         </tr>
         <tr height=20 style='mso-height-source:userset;height:15.0pt'>
          <td colspan=39 height=20 class=xl131 style='height:15.0pt;border-top: none !important;'>&nbsp;</td>
         </tr>
         <tr height=20 style='mso-height-source:userset;height:15.0pt'>
          <td colspan=39 height=20 class=xl131 style='height:15.0pt;border-top: none !important;'>&nbsp;</td>
         </tr>
         <tr height=20 style='mso-height-source:userset;height:15.0pt'>
          <td height=20 class=xl125 style='height:15.0pt'></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
          <td class=xl125></td>
         </tr>
         <tr height=26 style='mso-height-source:userset;height:19.5pt'>
          <td height=26 class=xl114 colspan=6 style='height:19.5pt;mso-ignore:colspan'>Diperiksa
          oleh,</td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl114 colspan=5 style='mso-ignore:colspan'>Diterima oleh,</td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>
         <tr class=xl68 height=20 style='mso-height-source:userset;height:15.0pt'>
          <td height=20 class=xl119 colspan=3 style='height:15.0pt;mso-ignore:colspan'>Nama</td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl117>:</td>
          <td class=xl119 colspan=7 style='mso-ignore:colspan'>Muh. Al-Asfahani</td>
          <td class=xl114></td>
          <td class=xl119 colspan=3 style='mso-ignore:colspan'>Nama</td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl117>:</td>
          <td class=xl119 colspan=5 style='mso-ignore:colspan'>Lilis Susianti</td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
         </tr>
         <tr class=xl68 height=20 style='mso-height-source:userset;height:15.0pt'>
          <td height=20 class=xl119 colspan=3 style='height:15.0pt;mso-ignore:colspan'>Jabatan</td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl117>:</td>
          <td class=xl119>IT</td>
          <td class=xl68></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl119 colspan=3 style='mso-ignore:colspan'>Jabatan</td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl117>:</td>
          <td class=xl119 colspan=4 style='mso-ignore:colspan'>Admin GA</td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
         </tr>
         <tr class=xl68 height=20 style='mso-height-source:userset;height:15.0pt'>
          <td height=20 class=xl119 colspan=5 style='height:15.0pt;mso-ignore:colspan'>Tanda
          Tangan</td>
          <td class=xl114></td>
          <td class=xl117></td>
          <td class=xl119></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl119 colspan=5 style='mso-ignore:colspan'>Tanda Tangan</td>
          <td class=xl114></td>
          <td class=xl117></td>
          <td class=xl119></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
         </tr>
         <tr class=xl68 height=20 style='mso-height-source:userset;height:15.0pt'>
          <td colspan=9 rowspan=4 height=80 class=xl117 style='border-bottom:.5pt solid black;height:60.0pt'>
            <img id="res-img" src="{{ asset('storage/images/ttd_mh_pw/' . $nama_Q . '.png') }}" alt="No data" style="width: 95%; height: 80%; margin: 5% 10% 0% 0%;"></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td colspan=10 rowspan=4 class=xl117 style='border-bottom:.5pt solid black'>
          <img id="res-img" src="{{ asset('storage/images/ttd_it/apv1/' . $Dtl->fst_id . '.png') }}" alt="No data" style="width: 90%; height: 95%; margin: 0% 15% 5% 0%;"></td>

          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
         </tr>
         <tr class=xl68 height=20 style='mso-height-source:userset;height:15.0pt'>
          <td height=20 class=xl114 style='height:15.0pt'></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
          <td class=xl114></td>
         </tr>
         <tr height=20 style='mso-height-source:userset;height:15.0pt'>
          <td height=20 class=xl113 style='height:15.0pt'></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>
         <tr height=20 style='mso-height-source:userset;height:15.0pt'>
          <td height=20 class=xl113 style='height:15.0pt'></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>
         <tr height=20 style='mso-height-source:userset;height:15.0pt'>
          <td height=20 class=xl115 colspan=4 style='height:15.0pt;mso-ignore:colspan'>Tanggal
          : {{ \Carbon\Carbon::parse($Dtl->tgl_penyerahan)->format('d/m/Y') }}</td>
          <td class=xl112></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl115 colspan=4 style='mso-ignore:colspan'>Tanggal : {{ \Carbon\Carbon::parse($Dtl->tgl_penyerahan)->format('d/m/Y') }}</td>
          <td class=xl112></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
          <td class=xl113></td>
         </tr>

         <tr height=0 style='display:none'>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=26 style='width:20pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=26 style='width:20pt'></td>
          <td width=26 style='width:20pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=26 style='width:20pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=12 style='width:9pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
          <td width=19 style='width:14pt'></td>
         </tr>
         <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td colspan=39 height=20 class=xl125 style='height:15.0pt'></td>
         </tr>

        </table>

        </body>

        </html>

