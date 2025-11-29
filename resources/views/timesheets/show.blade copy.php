<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Timesheet</title>
	<link rel="stylesheet" href="./my-css/mypdf-adt.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-ChzDzmAAZ0YIHCS3ve46r9IN7TNbIqChYbQ9L5ABrqPgU6qezieZmLQ9iY1ZAZbJ2A0jWM99d63Nd7dyVlc+r" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

	
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
body {
        max-width: 1042px;
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
	padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl68
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl69
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl70
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl71
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl72
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl73
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl74
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl75
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl76
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl77
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl78
	{mso-style-parent:style0;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl79
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl80
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid windowtext;}
.xl81
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl82
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl83
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl84
	{mso-style-parent:style0;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl85
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl86
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;}
.xl87
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl88
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl89
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl90
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl91
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl92
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;}
.xl93
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl94
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl95
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl96
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl97
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;}
.xl98
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;}
.xl99
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:top;}
.xl100
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;}
.xl101
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl102
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl103
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl104
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl105
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	white-space:normal;}
.xl106
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl107
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl108
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl109
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	white-space:normal;}
.xl110
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl111
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl112
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;
	white-space:normal;}
.xl113
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	white-space:normal;}
.xl114
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	white-space:normal;}
.xl115
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	white-space:normal;}
.xl116
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:top;}
.xl117
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:top;}
.xl118
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:top;
	white-space:normal;}
.xl119
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	white-space:normal;}
.xl120
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:top;
	padding-left:9px;
	mso-char-indent-count:1;}
.xl121
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:top;}
.xl122
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:top;
	white-space:normal;}
.xl123
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	white-space:normal;}
.xl124
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl125
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl126
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl127
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl128
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl129
	{mso-style-parent:style0;
	color:black;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl130
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl131
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid black;}
.xl132
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl133
	{mso-style-parent:style0;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl134
	{mso-style-parent:style0;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl135
	{mso-style-parent:style0;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl136
	{mso-style-parent:style0;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid windowtext;}
.xl137
	{mso-style-parent:style0;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl138
	{mso-style-parent:style0;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl139
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Medium Date";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl140
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Medium Date";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl141
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;}
.xl142
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;}
.xl143
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl144
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;}
.xl145
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl146
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl147
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl148
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid black;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl149
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl150
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl151
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl152
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl153
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl154
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl155
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl156
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl157
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl158
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl159
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl160
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl161
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;
	mso-rotate:90;}
.xl162
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;
	mso-rotate:90;}
.xl163
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;
	mso-rotate:90;}
.xl164
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;
	mso-rotate:90;}
.xl165
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid windowtext;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;
	mso-rotate:90;}
.xl166
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;
	mso-rotate:90;}
.xl167
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl168
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl169
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl170
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl171
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl172
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl173
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;}
.xl174
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl175
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl176
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid black;}
.xl177
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl178
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;
	white-space:normal;}
.xl179
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl180
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;
	white-space:normal;}
.xl181
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	white-space:normal;}
.xl182
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	white-space:normal;}
.xl183
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;}
.xl184
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl185
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:2.0pt double black;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl186
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double black;}
.xl187
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl188
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl189
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;}
.xl190
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl191
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;}
.xl192
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl193
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl194
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid black;}
.xl195
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl196
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid black;}
.xl197
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl198
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl199
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;}
.xl200
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl201
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl202
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid black;}
.xl203
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl204
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid black;}
.xl205
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl206
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:2.0pt double black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl207
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;}
.xl208
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl209
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl210
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Time";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;}
.xl211
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl212
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;}
.xl213
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl214
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:2.0pt double black;
	border-bottom:2.0pt double windowtext;
	border-left:none;}
.xl215
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl216
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl217
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Medium Date";
	text-align:left;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl218
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double black;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl219
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;}
.xl220
	{mso-style-parent:style0;
	color:black;
	font-size:8.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl221
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	white-space:normal;}
.xl222
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl223
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl224
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	white-space:normal;}
.xl225
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl226
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl227
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double black;
	border-left:2.0pt double windowtext;
	white-space:normal;}
.xl228
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double black;
	border-left:none;
	white-space:normal;}
.xl229
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:2.0pt double black;
	border-left:none;
	white-space:normal;}
.xl230
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl231
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl232
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:2.0pt double windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl233
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl234
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl235
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl236
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl237
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl238
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid windowtext;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl239
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl240
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl241
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl242
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl243
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl244
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl245
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl246
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl247
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl248
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl249
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;}
.xl250
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl251
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid black;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl252
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;}
.xl253
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;}
.xl254
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl255
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl256
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl257
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl258
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl259
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl260
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl261
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	white-space:normal;}
.xl262
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl263
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;}
.xl264
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl265
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl266
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid black;
	white-space:normal;}
.xl267
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl268
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl269
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;}
.xl270
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	white-space:normal;}
.xl271
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid black;
	white-space:normal;}
.xl272
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid black;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	white-space:normal;}
.xl273
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:2.0pt double black;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	white-space:normal;}
.xl274
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl275
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl276
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
.xl277
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;
	white-space:normal;}
.xl278
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:2.0pt double windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#BDD7EE;
	mso-pattern:black none;}
	
	@media print {
        .no-print {
            display: none;
        }
        .xl220{
            background:#44546A !important;
        }
    }

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
				filename:     'Form-P2H-Dumptruck-GSI.pdf', // Nama file PDF yang akan disimpan
				image:        { type: 'jpeg', quality: 0.98 },
				html2canvas:  { scale: 1 },
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

@php
    use Carbon\Carbon;
    
    $totalHours = floor($timesheet->total_work_minutes / 60);
    $totalMins = $timesheet->total_work_minutes % 60;
    $opHours = floor($timesheet->operational_minutes / 60);
    $opMins = $timesheet->operational_minutes % 60;
    $opPercentage = $timesheet->total_work_minutes > 0 ? 
        round(($timesheet->operational_minutes / $timesheet->total_work_minutes) * 100) : 0;
		
    $nonProdMinutes = max(0, $timesheet->total_work_minutes - $timesheet->operational_minutes);
    $nonProdHours = floor($nonProdMinutes / 60);
    $nonProdMins = $nonProdMinutes % 60;
    $nonProdPercentage = $timesheet->total_work_minutes > 0 
        ? round(($nonProdMinutes / $timesheet->total_work_minutes) * 100) 
        : 0;
@endphp

<body link="#0563C1" vlink="#954F72" class=xl65>

<table border=0 cellpadding=0 cellspacing=0 width=701 style='border-collapse:
collapse;table-layout:fixed;width:528pt'>
 <col class=xl65 width=64 style='width:48pt'>
 <col class=xl65 width=18 span=38 style='mso-width-source:userset;mso-width-alt:
 658;width:14pt'>
 <col class=xl65 width=19 span=13 style='mso-width-source:userset;mso-width-alt:
 694;width:14pt'>
 <col class=xl65 width=28 style='mso-width-source:userset;mso-width-alt:1024;
 width:21pt'>
 <col class=xl65 width=19 span=4 style='mso-width-source:userset;mso-width-alt:
 694;width:14pt'>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl66 width=64 style='height:15.0pt;width:48pt'></td>
  <td class=xl67 width=18 style='width:14pt'><a name="Print_Area">&nbsp;</a></td>
  <td class=xl68 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl68 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl68 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl69 width=18 style='width:14pt'>&nbsp;</td>
  <td colspan=36 rowspan=2 class=xl124 width=651 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:504pt'>FORM / FORMULIR</td>
  <td colspan=5 class=xl131 width=95 style='border-right:.5pt solid black;
  border-left:none;width:70pt'>No. Dokumen</td>
  <td class=xl70 width=19 style='width:14pt'>:</td>
  <td class=xl73 colspan=5 width=104 style='mso-ignore:colspan;border-right:
  .5pt solid black;width:77pt'>GSI4-OPR-001G</td>
  <td class=xl66 width=19 style='width:14pt'></td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td height=19 class=xl66 style='height:14.25pt'></td>
  <td class=xl75>&nbsp;</td>
  <td class=xl66></td>
  <td class=xl66></td>
  <td class=xl66></td>
  <td class=xl76>&nbsp;</td>
  <td colspan=5 class=xl131 style='border-right:.5pt solid black;border-left:
  none'>Revisi</td>
  <td class=xl77>:</td>
  <td colspan=5 class=xl130 style='border-right:.5pt solid black'>1</td>
  <td class=xl66></td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td height=19 class=xl66 style='height:14.25pt'></td>
  <td class=xl75>&nbsp;</td>
  <td class=xl66></td>
  <td class=xl66></td>
  <td class=xl66></td>
  <td class=xl76>&nbsp;</td>
  <td colspan=36 rowspan=2 class=xl133 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>HEAVY EQUIPRMENT TIME SHEET</td>
  <td colspan=5 class=xl131 style='border-right:.5pt solid black;border-left:
  none'>Tanggal Efektif</td>
  <td class=xl79>:</td>
  <td colspan=5 class=xl139 style='border-right:.5pt solid black'>24-Jun-24</td>
  <td class=xl66></td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td height=19 class=xl66 style='height:14.25pt'></td>
  <td class=xl80>&nbsp;</td>
  <td class=xl81>&nbsp;</td>
  <td class=xl81>&nbsp;</td>
  <td class=xl81>&nbsp;</td>
  <td class=xl82>&nbsp;</td>
  <td colspan=5 class=xl131 style='border-right:.5pt solid black;border-left:
  none'>Halaman</td>
  <td class=xl83>:</td>
  <td colspan=5 class=xl130 style='border-right:.5pt solid black'>1</td>
  <td class=xl66></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td height=18 class=xl66 style='height:14.1pt'></td>
  <td class=xl66></td>
  <td class=xl66></td>
  <td class=xl84></td>
  <td class=xl84></td>
  <td class=xl84></td>
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
  <td class=xl78></td>
  <td class=xl78></td>
  <td class=xl78></td>
  <td class=xl78></td>
  <td colspan=18 class=xl141></td>
  <td class=xl86></td>
  <td class=xl66></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td height=18 class=xl66 style='height:14.1pt'></td>
  <td class=xl85></td>
  <td class=xl87 colspan=3 style='mso-ignore:colspan'>NO UNIT</td>
  <td class=xl88></td>
  <td class=xl88>:</td>
  <td class=xl89 style="text-align: left;">{{ $timesheet->nomor_unit }}</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td colspan=4 class=xl142>NAMA</td>
  <td class=xl88>:</td>
  <td colspan=8 class=xl143 style="text-align: left;">{{ $timesheet->nama }}</td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td colspan=18 class=xl144>LOKASI KERJA</td>
  <td class=xl86></td>
  <td class=xl66></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td height=18 class=xl66 style='height:14.1pt'></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl90 align=right>1</td>
  <td colspan=4 class=xl86>PIT</td>
  <td class=xl90></td>
  <td class=xl91>4</td>
  <td colspan=4 class=xl86>MHR</td>
  <td class=xl90></td>
  <td class=xl91>7</td>
  <td colspan=4 class=xl86>SETPOND</td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl66></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td height=18 class=xl66 style='height:14.1pt'></td>
  <td class=xl85></td>
  <td class=xl87 colspan=4 style='mso-ignore:colspan'>HM AWAL</td>
  <td class=xl88>:</td>
  <td class=xl89 style="text-align: left;">{{ $timesheet->hm_awal }}</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td colspan=4 class=xl142>SHIFT</td>
  <td class=xl88>:</td>
  <td colspan=8 class=xl143 style="text-align: left; text-transform: uppercase">{{ $timesheet->shift }}</td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl90 align=right>2</td>
  <td class=xl86 colspan=4 style='mso-ignore:colspan'>DISPOSAL</td>
  <td class=xl91></td>
  <td class=xl91>5</td>
  <td class=xl86 colspan=3 style='mso-ignore:colspan'>DOME</td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl91>8</td>
  <td class=xl86 colspan=3 style='mso-ignore:colspan'>OTHERS</td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl66></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td height=18 class=xl66 style='height:14.1pt'></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl90 align=right>3</td>
  <td class=xl86 colspan=4 style='mso-ignore:colspan'>CLEARING</td>
  <td class=xl91></td>
  <td class=xl91>6</td>
  <td class=xl86 colspan=4 style='mso-ignore:colspan'>BARGING</td>
  <td class=xl86></td>
  <td class=xl91></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl66></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td height=18 class=xl66 style='height:14.1pt'></td>
  <td class=xl85></td>
  <td class=xl87 colspan=4 style='mso-ignore:colspan'>HM AKHIR</td>
  <td class=xl88>:</td>
  <td class=xl89 style="text-align: left;">{{ $timesheet->hm_akhir }}</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl89>&nbsp;</td>
  <td class=xl85></td>
  <td class=xl88></td>
  <td colspan=4 class=xl142>TANGGAL</td>
  <td class=xl88>:</td>
  <td colspan=8 class=xl143 style="text-align: left;">{{ \Carbon\Carbon::parse($timesheet->tanggal)->isoFormat('DD-MM-YYYY') }}</td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl92></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl66></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td height=18 class=xl66 style='height:14.1pt'></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl87></td>
  <td class=xl87></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl92></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan=6 class=xl145 style='border-right:.5pt solid black'>KODE LOSTTIME</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>1</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>2</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>3</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>4</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>5</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>6</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>7</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>8</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>9</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>10</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>11</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>12</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>13</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>14</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>SCM</td>
  <td colspan=2 class=xl148 style='border-right:.5pt solid black;border-left:
  none'>USM</td>
  <td colspan=14 class=xl150 style='border-right:2.0pt double black;border-left:
  none'>CATATAN OPERATOR :</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan=6 rowspan=4 class=xl152 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black'>ACTIVITY</td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">P2H</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">REFUELING</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">CEK TYRE</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">PINDAH FRONT</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">TUNGGU ALAT</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">ANTRI</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">ISTIRAHAT/ MAKAN</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">STANDBY</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">SAFETY CHECK</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">TUNGGU OPERATOR</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt;'>  <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">BERDEBU</div> </td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt'> <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">DAILY CHECK</div></td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt'> <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">HUJAN</div></td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt'> <div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">LICIN</div></td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt'> <div style="transform: rotate(-90deg);">SCH</div></td>
  <td colspan=2 rowspan=4 class=xl161 width=36 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;width:28pt'> <div style="transform: rotate(-90deg);">BD</div></td>
  <td colspan=14 rowspan=4 class=xl167 style='border-right:2.0pt double black;
  border-bottom:2.0pt double black; text-align: center; vertical-align: middle;'>{{ $timesheet->catatan }}</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl66></td>
 </tr>
 <tr height=36 style='mso-height-source:userset;height:27.0pt'>
  <td height=36 class=xl93 style='height:27.0pt'></td>
  <td colspan=6 class=xl173 style='border-right:.5pt solid black'>SHIFT</td>
  <td colspan=41 class=xl176 style='border-right:.5pt solid black;border-left:
  none'>DIISI WAKTU YANG TERJADI (MENIT)</td>
  <td colspan=5 rowspan=2 class=xl178 width=104 style='border-right:2.0pt double black;
  border-bottom:2.0pt double black;width:77pt'>KODE AKTIVITAS</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan="6" class="xl183" style="border-right:.5pt solid black">
    {{ $timesheet->shift === 'siang' ? 'Siang (1)' : ($timesheet->shift === 'malam' ? 'Malam (2)' : '-') }}</td>
  <td colspan=41 class=xl189 style='border-right:.5pt solid black;border-left:
  none'> &nbsp;START OPERASI JAM :</td>
  <td class=xl66></td>
 </tr>

 @forelse ($timesheet->entries as $entry)
<tr height=40 style="mso-height-source:userset;height:30.0pt">
  <td height=40 class="xl93" style="height:30.0pt"></td>

  <!-- waktu mulai -->
  <td colspan=6 class="xl199" style="border-right:.5pt solid black">
    {{ optional(\Carbon\Carbon::parse($entry->start_at))->format('H.i') ?? '-' }} -
	{{ optional(\Carbon\Carbon::parse($entry->end_at))->format('H.i') ?? '-' }}
  </td>

  <!-- waktu selesai -->
  <!-- <td colspan=3 class="xl199" style="border-right:.5pt solid black;border-left:none">
    {{ optional(\Carbon\Carbon::parse($entry->end_at))->format('H.i') ?? '-' }}
  </td> -->

  <!-- kolom tengah: tampilkan data entry agar tidak "hilang" -->
  <td colspan=41 class="xl199" style="border-right:.5pt solid black;border-left:none; text-align: left; text-transform: uppercase">
    <!-- {{ $entry->code->code ?? '-' }} -->
    &nbsp;
    @if(!empty($entry->description))
      {{ $entry->description }}
    @endif
    <!-- @php
      $minutes = (int)($entry->duration_minutes ?? 0);
      $h = intdiv($minutes, 60);
      $m = $minutes % 60;
      $dur = $minutes > 0 ? ($h > 0 ? "{$h}j {$m}m" : "{$m}m") : null;
    @endphp
    @if($dur) ({{ $dur }}) @endif -->
  </td>

  {{-- area kanan (biarkan kosong, sesuai template bawah) --}}
  <td colspan=5 class="xl199" style="border-right:2.0pt double black;border-left:none">
    {{ $entry->code->code ?? '-' }}
    <!-- @php
      $minutes = (int)($entry->duration_minutes ?? 0);
      $h = intdiv($minutes, 60);
      $m = $minutes % 60;
      $dur = $minutes > 0 ? ($h > 0 ? "{$h}j {$m}m" : "{$m}m") : null;
    @endphp
    @if($dur) ({{ $dur }}) @endif -->
  </td>

  <td class="xl66"></td>
</tr>
@empty
<tr><td colspan="54" class="xl196 text-center">Tidak ada data aktivitas.</td></tr>
@endforelse

 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan=10 class=xl215>TIMESHEET DIKIRIM PADA :</td>
  <td colspan=17 class=xl217>{{ $timesheet->created_at->format('d/m/Y H:i') }}</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl217>&nbsp;</td>
  <td class=xl95 style="border-top:2.0pt double black;">&nbsp;</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl87></td>
  <td class=xl87></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan=52 class=xl215 style='border-right:2.0pt double black'>KUISIONER
  FATIGUE</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan=9 class=xl219 style='border-right:.5pt solid black'>Pernyataan
  Karyawan</td>
  <td class=xl96></td>
  <td class=xl96>1</td>
  <td colspan=18 class=xl220>Berapa lama anda tidur dalam kurun 24 jam terkahir</td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96>4</td>
  <td colspan=16 class=xl220>Berapa lama anda tidur dalam kurun 24 jam terkahir</td>
  <td class=xl96></td>
  <td class=xl98>&nbsp;</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan=9 rowspan=6 class=xl221 width=162 style='border-right:.5pt solid black; padding: 10px;
  border-bottom:2.0pt double black;width:126pt'>Saya bertanda tangan dibawah
  ini menyatakan telah menjawab dan mengisi timesheet ini dengan
  sebenar-benarnya tanpa ada paksaan dari pihak manapun</td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td colspan=3 class=xl99>a. &lt;6jam</td>
  <td class=xl99></td>
  <td colspan=3 class=xl99>b. 6-8 jam</td>
  <td class=xl100></td>
  <td colspan=3 class=xl99>c. &gt;8 jam</td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td colspan=3 class=xl99>a. &lt;6jam</td>
  <td class=xl99></td>
  <td colspan=2 class=xl99></td>
  <td class=xl100></td>
  <td colspan=3 class=xl99>c. &gt;8 jam</td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl98>&nbsp;</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl96></td>
  <td class=xl96>2</td>
  <td colspan=18 class=xl97>Pada hari kemarin, berapa kali anda mengantuk?</td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96>5</td>
  <td colspan=16 class=xl97>Berapa lama anda tidur dalam kurun 24 jam terkahir</td>
  <td class=xl96></td>
  <td class=xl98>&nbsp;</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td colspan=3 class=xl99>a. &gt;1kali</td>
  <td class=xl99></td>
  <td colspan=3 class=xl99>b. 1 kali</td>
  <td class=xl100></td>
  <td colspan=3 class=xl99>c. 0 kali</td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td class=xl100></td>
  <td colspan=3 class=xl99>a. &lt;6jam</td>
  <td class=xl99></td>
  <td colspan=2 class=xl99></td>
  <td class=xl100></td>
  <td colspan=3 class=xl99>c. &gt;8 jam</td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl98>&nbsp;</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl96></td>
  <td class=xl96>3</td>
  <td colspan=18 class=xl97>Jika kemarin saat kondisi normal (jalan lebar,
  tidak hujan, dll)</td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96>6</td>
  <td colspan=16 class=xl97>Berapa lama anda tidur dalam kurun 24 jam terkahir</td>
  <td class=xl96></td>
  <td class=xl98>&nbsp;</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td colspan=18 class=xl97>Anda bisa mencapai 3 ritase / jam. Kira kira
  sekarang bisa berapa?</td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl96></td>
  <td class=xl97></td>
  <td colspan=3 class=xl99>a. &lt;6jam</td>
  <td class=xl99></td>
  <td colspan=2 class=xl99></td>
  <td class=xl100></td>
  <td colspan=3 class=xl99>c. &gt;8 jam</td>
  <td class=xl97></td>
  <td class=xl97></td>
  <td class=xl97></td>
  <td class=xl97></td>
  <td class=xl97></td>
  <td class=xl96></td>
  <td class=xl98>&nbsp;</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl101>&nbsp;</td>
  <td class=xl101>&nbsp;</td>
  <td class=xl101>&nbsp;</td>
  <td colspan=3 class=xl102>a. &lt;3 ritase</td>
  <td class=xl102>&nbsp;</td>
  <td colspan=3 class=xl102>b. 1 ritase</td>
  <td class=xl103>&nbsp;</td>
  <td colspan=3 class=xl102>c. &gt;3 ritase</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td colspan=3 class=xl102>&nbsp;</td>
  <td class=xl102>&nbsp;</td>
  <td colspan=2 class=xl102>&nbsp;</td>
  <td class=xl103>&nbsp;</td>
  <td colspan=3 class=xl102>&nbsp;</td>
  <td class=xl101>&nbsp;</td>
  <td class=xl101>&nbsp;</td>
  <td class=xl101>&nbsp;</td>
  <td class=xl101>&nbsp;</td>
  <td class=xl101>&nbsp;</td>
  <td class=xl101>&nbsp;</td>
  <td class=xl104>&nbsp;</td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl87></td>
  <td class=xl87></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl88></td>
  <td class=xl66></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl93 style='height:15.0pt'></td>
  <td colspan=9 rowspan=2 class=xl230 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>Dibuat Oleh,</td>
  <td colspan=9 rowspan=2 class=xl235 width=162 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:126pt'>Diperiksa Oleh,</td>
  <td colspan=9 rowspan=2 class=xl235 width=162 style='border-right:2.0pt double black;
  border-bottom:.5pt solid black;width:126pt'>Diketahui Oleh</td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td colspan=18 class=xl245 width=333 style='border-right:2.0pt double black;
  width:252pt'>Jam Kerja Operator</td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl66></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl93 style='height:15.0pt'></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td colspan=9 class=xl247 style='border-right:.5pt solid black'>Jam Kerja
  Produktif</td>
  <td colspan=9 class=xl248 style='border-right:2.0pt double black'>Jam Kerja Non
  Produktif</td>
  <td class=xl85></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan=9 rowspan=3 class=xl249 style='border-right:.5pt solid black'>

  <!-- Tanda tangan user -->
  @if($timesheet->signature_data)
  	<img src="{{ asset($timesheet->signature_data) }}" alt="Tanda Tangan" style="width: 100%; height: 100%; margin: 7% 0% 0% 0%;">
  @endif
  </td>

  <td colspan=9 rowspan=3 class=xl255 style='border-right:.5pt solid black'>&nbsp;</td>
  <td colspan=9 rowspan=3 class=xl257 width=162 style='border-right:2.0pt double black;
  width:126pt'>&nbsp;</td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl105 width=18 style='width:14pt'>&nbsp;</td>
  
  <!-- Jam kerja produktif -->
  <td colspan="7" rowspan="4" class="xl258" width="126"
    style="width:98pt; text-align:center; vertical-align:middle; font-size:40px; font-style:normal;">
	@if(is_null($timesheet->approved_by))
		<span style="font-size:12px; display:block; text-align:center;">
			menunggu approval pengawas
		</span>
	@else
		{{ $opHours }}j {{ $opMins }}m
	@endif
  </td>

  <td class=xl275 width=18 style='border-top:none;width:14pt'>&nbsp;</td>
  <td class=xl261 width=19 style='width:14pt'></td>

  <!-- Jam kerja non produktif -->
  <td colspan=7 rowspan=4 class=xl258 width=133
	style="width:98pt; text-align:center; vertical-align:middle; font-size:40px; font-style:normal;">
	@if(is_null($timesheet->approved_by))
		<span style="font-size:12px; display:block; text-align:center;">
			menunggu approval pengawas
		</span>
	@else
		{{ $nonProdHours }}j {{ $nonProdMins }}m
	@endif
  </td>
  <td class=xl107 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl85></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl105 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl106 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl261 width=19 style='width:14pt'></td>
  <td class=xl107 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl66></td>
 </tr>
 <tr class=xl71 height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl72 style='height:20.1pt'></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl105 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl106 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl261 width=19 style='width:14pt'></td>
  <td class=xl107 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl85></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan=9 class=xl263 style='border-right:.5pt solid black'>{{ $timesheet->nama }}</td>
  <td colspan=9 class=xl266 width=162 style='border-right:.5pt solid black;
  border-left:none;width:126pt'>&nbsp;</td>
  <td colspan=9 class=xl266 width=162 style='border-right:2.0pt double black;
  border-left:none;width:126pt'>&nbsp;</td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl109 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl110 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl274 width=19 style='width:14pt'></td>
  <td class=xl111 width=19 style='width:14pt'></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td colspan=9 class=xl269 style='border-right:.5pt solid black'>Operator</td>
  <td colspan=9 class=xl271 width=162 style='border-right:.5pt solid black;
  border-left:none;width:126pt'>Foreman Operation</td>
  <td colspan=9 class=xl271 width=162 style='border-right:2.0pt double black;
  border-left:none;width:126pt'>Supervisor Operation</td>
  <td class=xl85></td>
  <td class=xl85></td>
  <td class=xl112 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl114 width=18 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl113 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl115 width=19 style='width:14pt'>&nbsp;</td>
  <td class=xl85></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl66></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl93 style='height:20.1pt'></td>
  <td class=xl117></td>
  <td class=xl117></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl118 width=18 style='width:14pt'></td>
  <td class=xl119 width=18 style='width:14pt'></td>
  <td class=xl119 width=18 style='width:14pt'></td>
  <td class=xl119 width=18 style='width:14pt'></td>
  <td class=xl119 width=18 style='width:14pt'></td>
  <td class=xl119 width=18 style='width:14pt'></td>
  <td class=xl119 width=18 style='width:14pt'></td>
  <td class=xl119 width=18 style='width:14pt'></td>
  <td class=xl119 width=18 style='width:14pt'></td>
  <td class=xl119 width=18 style='width:14pt'></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl93></td>
  <td class=xl93></td>
  <td class=xl93></td>
  <td class=xl93></td>
  <td class=xl93></td>
  <td class=xl93></td>
  <td class=xl93></td>
  <td class=xl93></td>
  <td class=xl93></td>
  <td class=xl93></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl66></td>
 </tr>
</table>

</body>

</html>