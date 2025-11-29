
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
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
		color:black;}
	.xl67
		{mso-style-parent:style0;
		color:black;
		border-top:.5pt solid black;
		border-right:none;
		border-bottom:none;
		border-left:.5pt solid black;}
	.xl68
		{mso-style-parent:style0;
		color:black;
		border-top:.5pt solid black;
		border-right:none;
		border-bottom:none;
		border-left:none;}
	.xl69
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;}
	.xl70
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl71
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:left;
		vertical-align:middle;}
	.xl72
		{mso-style-parent:style0;
		color:black;
		border-top:none;
		border-right:none;
		border-bottom:none;
		border-left:.5pt solid black;}
	.xl73
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl74
		{mso-style-parent:style0;
		color:black;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:none;
		border-left:none;}
	.xl75
		{mso-style-parent:style0;
		color:black;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid black;}
	.xl76
		{mso-style-parent:style0;
		color:black;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl77
		{mso-style-parent:style0;
		color:black;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl78
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl79
		{mso-style-parent:style0;
		color:black;
		font-size:2.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;}
	.xl80
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;}
	.xl81
		{mso-style-parent:style0;
		color:black;
		font-size:2.0pt;
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
		text-align:center;}
	.xl83
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;}
	.xl84
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;}
	.xl85
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;}
	.xl86
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:right;
		vertical-align:middle;}
	.xl87
		{mso-style-parent:style0;
		color:black;
		font-size:9.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:left;
		vertical-align:middle;}
	.xl88
		{mso-style-parent:style0;
		color:black;
		font-size:9.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;}
	.xl89
		{mso-style-parent:style0;
		color:black;
		font-size:9.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		vertical-align:middle;}
	.xl90
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		vertical-align:middle;}
	.xl91
		{mso-style-parent:style0;
		color:windowtext;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:.5pt solid windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl92
		{mso-style-parent:style0;
		color:windowtext;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:1;
		vertical-align:middle;}
	.xl93
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;}
	.xl94
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:right;
		vertical-align:middle;}
	.xl95
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;}
	.xl96
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:none;
		border-left:none;}
	.xl97
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		border-top:none;
		border-right:none;
		border-bottom:none;
		border-left:2.0pt double windowtext;}
	.xl98
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;}
	.xl99
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:top;}
	.xl100
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:top;}
	.xl101
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		border-top:none;
		border-right:2.0pt double windowtext;
		border-bottom:none;
		border-left:none;}
	.xl102
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:left;
		vertical-align:top;}
	.xl103
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		border-top:none;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl104
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		border-top:none;
		border-right:2.0pt double windowtext;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl105
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
		border-left:.5pt solid windowtext;}
	.xl106
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
		border-left:none;}
	.xl107
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
		border-left:none;}
	.xl108
		{mso-style-parent:style0;
		color:black;
		font-size:9.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid black;
		border-left:.5pt solid windowtext;}
	.xl109
		{mso-style-parent:style0;
		color:black;
		font-size:9.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid black;
		border-left:none;}
	.xl110
		{mso-style-parent:style0;
		color:black;
		font-size:9.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid black;
		border-bottom:.5pt solid black;
		border-left:none;}
	.xl111
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl112
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid black;}
	.xl113
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid black;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl114
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:left;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl115
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:left;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid black;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl116
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
		border-left:.5pt solid windowtext;}
	.xl117
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
	.xl118
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
	.xl119
		{mso-style-parent:style0;
		color:black;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid black;
		border-left:.5pt solid windowtext;}
	.xl120
		{mso-style-parent:style0;
		color:black;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid black;
		border-left:none;}
	.xl121
		{mso-style-parent:style0;
		color:black;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid black;
		border-bottom:.5pt solid black;
		border-left:none;}
	.xl122
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;
		white-space:normal;}
	.xl123
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid black;
		white-space:normal;}
	.xl124
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid black;
		border-bottom:.5pt solid windowtext;
		border-left:none;
		white-space:normal;}
	.xl125
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Medium Date";
		text-align:left;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl126
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Medium Date";
		text-align:left;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid black;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl127
		{mso-style-parent:style0;
		color:windowtext;
		font-size:8.0pt;
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
	.xl128
		{mso-style-parent:style0;
		color:windowtext;
		font-size:8.0pt;
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
	.xl129
		{mso-style-parent:style0;
		color:windowtext;
		font-size:8.0pt;
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
	.xl130
		{mso-style-parent:style0;
		color:windowtext;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid windowtext;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl131
		{mso-style-parent:style0;
		color:windowtext;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:2.0pt double black;
		border-bottom:.5pt solid windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl132
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:none;
		border-left:2.0pt double windowtext;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl133
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:none;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl134
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:none;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl135
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
		border-bottom:none;
		border-left:2.0pt double windowtext;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl136
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl137
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:none;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl138
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
		border-bottom:2.0pt double windowtext;
		border-left:2.0pt double windowtext;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl139
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
		border-bottom:2.0pt double windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl140
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:2.0pt double windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl141
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:none;
		border-left:.5pt solid windowtext;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
	.xl142
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:none;
		border-left:.5pt solid windowtext;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
	.xl143
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:2.0pt double windowtext;
		border-left:.5pt solid windowtext;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
	.xl144
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:none;
		border-left:.5pt solid windowtext;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
	.xl145
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:none;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
	.xl146
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:2.0pt double black;
		border-bottom:none;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
	.xl147
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
		border-bottom:none;
		border-left:.5pt solid windowtext;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
	.xl148
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
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
		border-right:2.0pt double black;
		border-bottom:none;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
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
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:.5pt solid windowtext;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
	.xl151
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
		border-bottom:2.0pt double windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
	.xl152
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
		border-bottom:2.0pt double windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;
		mso-rotate:90;}
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
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:2.0pt double windowtext;}
	.xl154
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl155
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl156
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid windowtext;}
	.xl157
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:none;
		border-left:.5pt solid windowtext;
		white-space:normal;}
	.xl158
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl159
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl160
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:.5pt solid windowtext;
		white-space:normal;}
	.xl161
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl162
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl163
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:2.0pt double windowtext;}
	.xl164
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl165
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl166
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:left;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl167
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:left;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:.5pt solid windowtext;}
	.xl168
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
		text-align:left;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl169
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:2.0pt double windowtext;}
	.xl170
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl171
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl172
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl173
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid windowtext;}
	.xl174
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:2.0pt double windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl175
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:2.0pt double windowtext;
		border-right:2.0pt double black;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl176
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:2.0pt double windowtext;}
	.xl177
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl178
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl179
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl180
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid windowtext;}
	.xl181
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl182
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:2.0pt double black;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl183
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:2.0pt double windowtext;}
	.xl184
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl185
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl186
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl187
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:.5pt solid windowtext;}
	.xl188
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl189
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:2.0pt double black;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl190
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:left;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:2.0pt double windowtext;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl191
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:left;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl192
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Date";
		text-align:left;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl193
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Date";
		text-align:left;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:2.0pt double black;
		border-bottom:2.0pt double windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl194
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:2.0pt double windowtext;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl195
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl196
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		mso-number-format:"Short Time";
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:2.0pt double black;
		border-bottom:2.0pt double windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl197
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:2.0pt double windowtext;}
	.xl198
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl199
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:.5pt solid black;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl200
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:none;
		border-left:2.0pt double windowtext;
		white-space:normal;}
	.xl201
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:none;
		border-left:none;
		white-space:normal;}
	.xl202
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid black;
		border-bottom:none;
		border-left:none;
		white-space:normal;}
	.xl203
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:none;
		border-left:2.0pt double windowtext;
		white-space:normal;}
	.xl204
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		white-space:normal;}
	.xl205
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid black;
		border-bottom:none;
		border-left:none;
		white-space:normal;}
	.xl206
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:2.0pt double black;
		border-left:2.0pt double windowtext;
		white-space:normal;}
	.xl207
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:2.0pt double black;
		border-left:none;
		white-space:normal;}
	.xl208
		{mso-style-parent:style0;
		color:black;
		font-size:7.0pt;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid black;
		border-bottom:2.0pt double black;
		border-left:none;
		white-space:normal;}
	.xl209
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl210
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl211
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl212
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:2.0pt double windowtext;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl213
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
		mso-pattern:black none;}
	.xl214
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:.5pt solid windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl215
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
		mso-pattern:black none;}
	.xl216
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:.5pt solid black;
		border-bottom:none;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl217
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
		mso-pattern:black none;}
	.xl218
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:.5pt solid black;
		border-bottom:.5pt solid windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl219
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl220
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl221
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid black;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl222
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
		mso-pattern:black none;}
	.xl223
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl224
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl225
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:2.0pt double windowtext;
		border-right:2.0pt double black;
		border-bottom:.5pt solid windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl226
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl227
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl228
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid black;
		border-bottom:.5pt solid windowtext;
		border-left:none;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl229
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid black;
		background:#BDD7EE;
		mso-pattern:black none;}
	.xl230
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
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
	.xl231
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:none;
		border-left:2.0pt double windowtext;}
	.xl232
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:none;
		border-left:none;}
	.xl233
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:none;
		border-left:none;}
	.xl234
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:none;
		border-bottom:none;
		border-left:2.0pt double windowtext;}
	.xl235
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;}
	.xl236
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:none;
		border-left:none;}
	.xl237
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:2.0pt double windowtext;}
	.xl238
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl239
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl240
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:none;
		border-left:.5pt solid windowtext;}
	.xl241
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:none;
		border-bottom:none;
		border-left:.5pt solid windowtext;}
	.xl242
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:none;
		border-bottom:.5pt solid windowtext;
		border-left:.5pt solid windowtext;}
	.xl243
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:.5pt solid windowtext;
		border-right:2.0pt double black;
		border-bottom:none;
		border-left:none;}
	.xl244
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:2.0pt double black;
		border-bottom:none;
		border-left:none;}
	.xl245
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:2.0pt double black;
		border-bottom:.5pt solid windowtext;
		border-left:none;}
	.xl246
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:none;
		border-bottom:2.0pt double black;
		border-left:2.0pt double windowtext;}
	.xl247
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:none;
		border-bottom:2.0pt double black;
		border-left:none;}
	.xl248
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:.5pt solid windowtext;
		border-bottom:2.0pt double black;
		border-left:none;}
	.xl249
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:none;
		border-bottom:2.0pt double black;
		border-left:.5pt solid windowtext;}
	.xl250
		{mso-style-parent:style0;
		color:black;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		border-top:none;
		border-right:2.0pt double black;
		border-bottom:2.0pt double black;
		border-left:none;}
	.xl251
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:2.0pt double windowtext;}
	.xl252
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl253
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:.5pt solid windowtext;
		border-bottom:2.0pt double windowtext;
		border-left:none;}
	.xl254
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:none;
		border-bottom:2.0pt double windowtext;
		border-left:.5pt solid windowtext;}
	.xl255
		{mso-style-parent:style0;
		color:black;
		font-size:8.0pt;
		font-weight:700;
		font-family:Arial, sans-serif;
		mso-font-charset:0;
		text-align:center;
		vertical-align:middle;
		border-top:.5pt solid windowtext;
		border-right:2.0pt double black;
		border-bottom:2.0pt double windowtext;
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

		 opt = {
			margin:       0.25, // Margin 0.5 inci
			filename:     'Form-Timesheet-Mining.pdf', // Nama file PDF yang akan disimpan
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

<table border=0 cellpadding=0 cellspacing=0 width=902 style='border-collapse:
 collapse;table-layout:fixed;width:683pt;margin-top: 25px;'>
 <col class=xl65 width=20 span=2 style='mso-width-source:userset;mso-width-alt:
 731;width:15pt'>
 <col class=xl65 width=24 style='mso-width-source:userset;mso-width-alt:877;
 width:18pt'>
 <col class=xl65 width=18 style='mso-width-source:userset;mso-width-alt:658;
 width:14pt'>
 <col class=xl65 width=26 span=18 style='mso-width-source:userset;mso-width-alt:
 950;width:20pt'>
 <col class=xl65 width=19 span=5 style='mso-width-source:userset;mso-width-alt:
 694;width:14pt'>
 <col class=xl65 width=22 style='mso-width-source:userset;mso-width-alt:804;
 width:17pt'>
 <col class=xl65 width=19 span=9 style='mso-width-source:userset;mso-width-alt:
 694;width:14pt'>
 <col class=xl65 width=64 style='width:48pt'>
 <tr height=14 style='mso-height-source:userset;height:11.1pt'>

 <td colspan="4" rowspan="4" style="text-align:center; vertical-align:middle; border: .5pt solid black; border-right: none">
  <img src="{{ asset('storage/images/logo-gsi.png') }}" width="60" height="54" alt="Logo">
</td>
  <!-- <td class=xl68 width=20 style='width:15pt'>&nbsp;</td>
  <td class=xl68 width=24 style='width:18pt'>&nbsp;</td>
  <td class=xl68 width=18 style='width:14pt'>&nbsp;</td> -->
  <td colspan=16 rowspan=2 class=xl105 width=416 style='border-right:.5pt solid black;
  border-bottom:none;width:320pt'>FORM / FORMULIR</td>
  <td colspan=3 class=xl112 width=71 style='border-right:.5pt solid black; border-bottom:none;
  border-left:none;width:54pt'>No. Dokumen</td>
  <td class=xl70 width=19 style='width:14pt; border-bottom:none;'>:</td>
  <td colspan=5 class=xl114 width=98 style='border-right:.5pt solid black;
  border-bottom:none; width:73pt'>GSI4-OPR-001G</td>
  <td class=xl71 width=19 style='width:14pt'></td>
  <td class=xl71 width=19 style='width:14pt'></td>
  <td class=xl71 width=19 style='width:14pt'></td>
  <td class=xl71 width=19 style='width:14pt'></td>
  <td class=xl71 width=19 style='width:14pt'></td>
  <td class=xl71 width=19 style='width:14pt'></td>
  <td class=xl71 width=19 style='width:14pt'></td>
  <td class=xl71 width=19 style='width:14pt'></td>
  <td class=xl71 width=64 style='width:48pt'></td>
<!-- copy this syntax-->
 </tr>
 <tr height=14 style='mso-height-source:userset;height:11.1pt'>
  <!-- <td height=14 colspan=4 class=xl72 style='height:11.1pt'>&nbsp;</td> -->
  <!-- <td class=xl66></td>
  <td class=xl66></td>
  <td class=xl66></td> -->
  <td colspan=3 class=xl112 style='border-right:.5pt solid black;border-left:
  none; border-bottom:none;'>Revisi</td>
  <td class=xl73 style="border-bottom:none; border-top: .5pt solid black">:</td>
  <td colspan=5 class=xl114 style='border-right:.5pt solid black; border-bottom:none;'>1</td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
<!-- copy this syntax-->
 </tr>
 <tr height=14 style='mso-height-source:userset;height:11.1pt'>
  <!-- <td height=14 colspan=4 class=xl72 style='height:11.1pt'>&nbsp;</td> -->
  <!-- <td class=xl66></td>
  <td class=xl66></td>
  <td class=xl74>&nbsp;</td> -->
  <td colspan=16 rowspan=2 class=xl116 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>HEAVY EQUIPMENT TIMESHEET</td>
  <td colspan=3 class=xl123 width=71 style='border-right:.5pt solid black;
  border-bottom:none;
  border-left:none;width:54pt'>Tanggal Efektif</td>
  <td class=xl73 style="border-bottom:none; border-top: .5pt solid black">:</td>
  <td colspan=5 class=xl125 style='border-right:.5pt solid black; border-bottom:none;'>18-Sep-24</td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
<!-- copy this syntax-->
 </tr>
 <tr height=14 style='mso-height-source:userset;height:11.1pt'>
  <!-- <td height=14 colspan=4 class=xl75 style='height:11.1pt'>&nbsp;</td> -->
  <!-- <td class=xl76>&nbsp;</td>
  <td class=xl76>&nbsp;</td>
  <td class=xl77>&nbsp;</td> -->
  <td colspan=3 class=xl112 style='border-right:.5pt solid black;border-left:
  none'>Halaman</td>
  <td class=xl73 style="border-top: .5pt solid black">:</td>
  <td colspan=5 class=xl114 style='border-right:.5pt solid black'>1</td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
<!-- copy this syntax-->
 </tr>
 <tr height=9 style='mso-height-source:userset;height:6.95pt'>
  <td height=9 class=xl79 style='height:6.95pt'></td>
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
  <td class=xl79></td>
  <td class=xl79></td>
  <td class=xl79></td>
  <td class=xl79></td>
  <td class=xl79></td>
  <td class=xl79></td>
  <td class=xl80></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl81 style='height:12.0pt'></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
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
  <td class=xl81></td>
  <td colspan=12 class=xl82>LOKASI KERJA</td>
  <td class=xl83></td>
  <td class=xl83></td>
  <td class=xl83></td>
  <td class=xl83></td>
  <td class=xl83></td>
  <td class=xl83></td>
  <td class=xl83></td>
  <td class=xl82></td>
  <td class=xl71></td>
<!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=3 height=16 class=xl84 style='height:12.0pt'>NO UNIT</td>
  <td class=xl85>:</td>
  <td colspan=4 class=xl85 style="text-align: left;">{{ $timesheet->nomor_unit }}</td>
  <td class=xl84></td>
  <td colspan=2 class=xl84>NAMA</td>
  <td class=xl85>:</td>
  <td colspan=5 class=xl85 style="text-align: left;">{{ $timesheet->nama }}</td>
  <td class=xl86>1.&nbsp;</td>
  <td class=xl71>PIT</td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl86>4.&nbsp;</td>
  <td class=xl71 colspan=2 style='mso-ignore:colspan'>MHR</td>
  <td class=xl71></td>
  <td class=xl86>7.&nbsp;</td>
  <td class=xl71 colspan=3 style='mso-ignore:colspan'>SETPOND</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl71></td>
  <td class=xl86></td>
  <td colspan=3 class=xl71></td>
  <td class=xl81></td>
  <td class=xl71></td>
<!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=3 height=16 class=xl84 style='height:12.0pt'>HM AWAL</td>
  <td class=xl85>:</td>
  <td colspan=4 class=xl85 style="text-align: left;">{{ $timesheet->hm_awal }}</td>
  <td class=xl84></td>
  <td colspan=2 class=xl84>SHIFT</td>
  <td class=xl85>:</td>
  <td colspan=5 class=xl85 style="text-align: left;">{{ $timesheet->shift }}</td>
  <td class=xl86>2.&nbsp;</td>
  <td class=xl71 colspan=3 style='mso-ignore:colspan'>DISPOSAL</td>
  <td class=xl86>5.&nbsp;</td>
  <td class=xl71 colspan=2 style='mso-ignore:colspan'>DOME</td>
  <td class=xl71></td>
  <td class=xl86>8.&nbsp;</td>
  <td class=xl71 colspan=3 style='mso-ignore:colspan'>OTHERS</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl71></td>
  <td class=xl86></td>
  <td colspan=3 class=xl71></td>
  <td class=xl81></td>
  <td class=xl71></td>
<!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=3 height=16 class=xl84 style='height:12.0pt'>HM AKHIR</td>
  <td class=xl85>:</td>
  <td colspan=4 class=xl85 style="text-align: left;">{{ $timesheet->hm_akhir }}</td>
  <td class=xl84></td>
  <td colspan=2 class=xl84>TAGGAL</td>
  <td class=xl85>:</td>
  <td colspan=5 class=xl85 style="text-align: left;">{{ $timesheet->tanggal }}</td>
  <td class=xl86>3.&nbsp;</td>
  <td class=xl71 colspan=3 style='mso-ignore:colspan'>CLEARING</td>
  <td class=xl86>6.&nbsp;</td>
  <td class=xl71 colspan=3 style='mso-ignore:colspan'>BARGING</td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl71></td>
<!-- copy this syntax-->
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl89 style='height:12.0pt'></td>
  <td class=xl89></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl90></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl69></td>
  <td class=xl86></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl86></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl71></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td colspan=4 height=26 class=xl127 style='border-right:.5pt solid black;
  height:20.1pt;'>KODE LOSTIME</td>
  <td class=xl91>1</td>
  <td class=xl91>2</td>
  <td class=xl91>3</td>
  <td class=xl91>4</td>
  <td class=xl91>5</td>
  <td class=xl91>6</td>
  <td class=xl91>7</td>
  <td class=xl91>8</td>
  <td class=xl91>9</td>
  <td class=xl91>10</td>
  <td class=xl91>11</td>
  <td class=xl91>12</td>
  <td class=xl91>13</td>
  <td class=xl91>14</td>
  <td class=xl91>SCM</td>
  <td class=xl91>USM</td>
  <td colspan=9 class=xl130 style='border-right:2.0pt double black;border-left:
  none;'>CATATAN OPERATOR</td>
  <td class=xl92></td>
  <td class=xl92></td>
  <td class=xl92></td>
  <td class=xl92></td>
  <td class=xl92></td>
  <td class=xl92></td>
  <td class=xl92></td>
  <td class=xl92></td>
  <td class=xl71></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=4 rowspan=6 height=96 class=xl132 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black;height:72.0pt; border-top:none; border-bottom:none'>ACTIVITY</td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center; ">P2H</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">REFUELING</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">CEK TYRE</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">PINDAH FRONT</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">TUNGGU ALAT</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">ANTRI</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">ISOMA</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">STANDBY</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">SAFETY CHECK</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">TUNGGU OPR</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">BERDEBU</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">DAILY CHECK</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">HUJAN</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">LICIN</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">SCH</div></td>
  <td rowspan=6 class=xl142 style='border-bottom:2.0pt double black;border-top:none;border-bottom:none;border-left:none'>
	<div style="transform: rotate(-90deg); height: 100%; display: flex; align-items: center; justify-content: center;">BD</div></td>
  <td colspan=9 rowspan=6 class=xl144 style='border-right:2.0pt double black; border-left: none; border-top:none; text-align: center; vertical-align: middle;'>{{ $timesheet->catatan }}</td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl71></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl71 style='height:12.0pt'></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl71></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl71 style='height:12.0pt'></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl71></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl71 style='height:12.0pt'></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl71></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl71 style='height:12.0pt'></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl71></td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl71 style='height:12.0pt'></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl71></td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:20pt'>
  <td colspan=4 height=30 class=xl153 style='border-right:.5pt solid black;border-bottom:none;
  height:20pt'>SHIFT</td>
  <td colspan=21 class=xl156 style='border-right:.5pt solid black;border-left:
  none;border-bottom:none'>DIISI WAKTU YANG TERJADI (MENIT)</td>
  <td colspan=4 rowspan=2 class=xl157 width=79 style='border-right:2.0pt double black;
  border-bottom:none;border-left:none;width:59pt'>KODE AKTIVITAS</td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl87></td>
  <td class=xl88></td>
  <td class=xl71></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:15pt'>
  <td colspan=4 height=24 class=xl163 style='border-right:.5pt solid black;border-bottom:none;
  height:15pt'>{{ $timesheet->shift === 'siang' ? 'Siang (1)' : ($timesheet->shift === 'malam' ? 'Malam (2)' : '-') }}</td>
  </td>
  <td colspan=21 class=xl167 style='border-right:.5pt solid black;border-left:
  none;border-bottom:none'> &nbsp;START OPERASI JAM:</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>

 @forelse ($timesheet->entries as $entry)
 <tr height=30 style='mso-height-source:userset;height:18pt'>
  <!-- waktu mulai -->
  <td colspan=4 height=30 class=xl200 style='border-right:.5pt solid black;height:18pt'>
    {{ optional(\Carbon\Carbon::parse($entry->start_at))->format('H.i') ?? '-' }} -
	{{ optional(\Carbon\Carbon::parse($entry->end_at))->format('H.i') ?? '-' }}
  </td>

  <!-- waktu selesai -->
  <!-- <td colspan=3 class="xl199" style="border-right:.5pt solid black;border-left:none">
    {{ optional(\Carbon\Carbon::parse($entry->end_at))->format('H.i') ?? '-' }}
  </td> -->

  <!-- kolom tengah: tampilkan data entry agar tidak "hilang" -->
  <td colspan=21 class="xl200" style="border-right:.5pt solid black;border-left:none; text-align: left; text-transform: uppercase">
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
  <td colspan=4 class="xl200" style="border-right:2.0pt double black;border-left:none">
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

 <!-- <tr height=30 style='mso-height-source:userset;height:23.1pt'>
  <td colspan=4 height=30 class=xl176 style='border-right:.5pt solid black;
  height:23.1pt'>07.00 - 08:00</td>
  <td colspan=21 class=xl180 style='border-right:.5pt solid black;border-left:
  none'>&nbsp;</td>
  <td colspan=4 class=xl180 style='border-right:2.0pt double black;border-left:
  none'>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr> -->
 
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td colspan=7 height=24 class=xl190 style='height:18.0pt'>&nbsp;TIMESHEET DIKIRIM
  PADA :</td>
  <td colspan=22 class=xl192 style='border-right:2.0pt double black'>{{ $timesheet->created_at->format('d/m/Y H:i') }} WITA</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=21 style='height: 10px;pt'>
  <td height=21 class=xl80 style='height:10pt'></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.5pt'>
  <td colspan=29 height=22 class=xl194 style='border-right:2.0pt double black;
  height:16.5pt'>KUISIONER FATIGUE</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=5 height=21 class=xl197 style='border-right:.5pt solid black;border-top:none;
  height:15.75pt'>Pernyataan Karyawan</td>
  <td class=xl94>1.&nbsp;</td>
  <td class=xl96 colspan=9 style='mso-ignore:colspan; border-top:none'>Berapa lama anda tidur
  dalam kurun 24 jam terkahir</td>
  <td class=xl94>4.&nbsp;</td>
  <td class=xl95 colspan=12 style='mso-ignore:colspan'>Setelah istirahat dan
  kembali kerja, apa yang anda rasakan?</td>
  <td class=xl69 style='border-right:2.0pt double black'></td>
  <td class=xl97 style='border-left:none'>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:14.25pt'>
  <td colspan=5 rowspan=7 height=134 class=xl200 width=108 style='border-right:
  .5pt solid black; border-top: none; border-bottom:2.0pt double black;height:100.5pt;width:82pt; padding: 3px;'>Saya
  bertanda tangan dibawah ini menyatakan telah menjawab dan mengisi timesheet
  ini dengan sebenar-benarnya tanpa ada paksaan dari pihak manapun</td>
  <td class=xl93></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>a. &lt;6 Jam</td>
  <td class=xl80></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>b. 6-8 Jam</td>
  <td class=xl99></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>c. &gt;8 Jam</td>
  <td class=xl100></td>
  <td class=xl99></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>a. Malas</td>
  <td class=xl80></td>
  <td class=xl99 colspan=3 style='mso-ignore:colspan'>b. Biasa saja</td>
  <td class=xl99 colspan=3 style='mso-ignore:colspan'>c. Semangat</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl101>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:14.25pt'>
  <td height=19 class=xl98 align=right style='height:14.25pt'>2.&nbsp;</td>
  <td class=xl98 colspan=8 style='mso-ignore:colspan'>Pada hari kemarin, berapa
  kali anda mengantuk?</td>
  <td class=xl80></td>
  <td class=xl98 align=right>5.&nbsp;</td>
  <td class=xl98 colspan=11 style='mso-ignore:colspan'>Apakah saat ini Anda
  membawa bagde atau SIMPER ?</td>
  <td class=xl80></td>
  <td class=xl101>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:14.25pt'>
  <td height=19 class=xl80 style='height:14.25pt'></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>a. &gt;1 Kali</td>
  <td class=xl80></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>b. 1 Kali</td>
  <td class=xl99></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>c. 0 Kali</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>a. Ya</td>
  <td class=xl80></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>b. Tidak</td>
  <td class=xl99></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>c. Tidak Tau</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl101>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:14.25pt'>
  <td height=19 class=xl98 align=right style='height:14.25pt'>3.&nbsp;</td>
  <td class=xl98 colspan=9 style='mso-ignore:colspan'>Pada kondisi normal Anda
  mungkin bisa mencapai<span style='mso-spacerun:yes'> </span></td>
  <td class=xl98 align=right>6.&nbsp;</td>
  <td class=xl98 colspan=12 style='mso-ignore:colspan'>Berapa kali anda
  terbangun saat istirahat/tidur siang/malam ?</td>
  <td class=xl101>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:14.25pt'>
  <td height=19 class=xl80 style='height:14.25pt'></td>
  <td class=xl102 colspan=8 style='mso-ignore:colspan'><span
  style='mso-spacerun:yes'> </span>tiga ritase/jam, kira-kira sekarang bisa
  berapa?</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>a. &gt;2 Kali</td>
  <td class=xl80></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>b. 2 Kali</td>
  <td class=xl99></td>
  <td class=xl99 colspan=3 style='mso-ignore:colspan'>c. &lt;2 Kali</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl101>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:14.25pt'>
  <td height=19 class=xl80 style='height:14.25pt'></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>a. &lt;3 Ritase</td>
  <td class=xl80></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>b. 1 Ritase</td>
  <td class=xl99></td>
  <td class=xl99 colspan=2 style='mso-ignore:colspan'>c. &gt;3 Ritase</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl101>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=20 style='height:8pt'>
  <td height=20 class=xl103 style='height:8pt'>&nbsp;</td>
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
  <td class=xl104>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=21 style='height:10pt'>
  <td height=21 class=xl80 style='height:10pt'></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:13pt'>
  <td colspan=6 rowspan=2 height=41 class=xl209 style='border-right:.5pt solid black;
  border-bottom:none;height:25pt'>Dibuat oleh,</td>
  <td colspan=5 rowspan=2 class=xl215 style='border-right:.5pt solid black; border-left:none;
  border-bottom:none'>Diperiksa oleh</td>
  <td colspan=5 rowspan=2 class=xl219 style='border-right:2.0pt double black; border-left:none;
  border-bottom:none'>Diketahui oleh</td>
  <td class=xl84></td>
  <td colspan=12 class=xl223 style='border-right:2.0pt double black; border-bottom:none'>Jam Kerja
  Operator</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:13pt'>
  <td height=19 class=xl84 style='height:13pt'></td>
  <td colspan=5 class=xl226 style='border-right:.5pt solid black; border-bottom:none'>Jam Kerja
  Produktif</td>
  <td colspan=7 class=xl229 style='border-right:2.0pt double black;border-left:none;
  border-bottom:none'>Jam Kerja NonProduktif</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:10pt'>
  <td colspan=6 rowspan=3 height=95 class=xl231 style='border-right:.5pt solid black;
  border-bottom: none !important;height:60pt; padding: 2pt 1pt 1pt 1pt; '>
	<!-- Tanda tangan user -->
	@if($timesheet->signature_data)
	<img src="{{ asset($timesheet->signature_data) }}" alt="Tanda Tangan" style="width: 100%; height: 100%; margin: 1% 0% 0% 0%;">
	@endif
  </td>
  <td colspan=5 rowspan=3 class=xl240 style='border-right:.5pt solid black; border-left:none;
  border-bottom: none !important'>&nbsp;</td>
  <td colspan=5 rowspan=3 class=xl240 style='border-right:2.0pt double black; border-left:none;
  border-bottom: none !important'>&nbsp;</td>
  <td class=xl80></td>
  <td colspan=5 rowspan=5 class=xl231 style='border-right:.5pt solid black;
  border-bottom:2.0pt double black; text-align:center; vertical-align:middle;'>{{ $opHours }}j {{ $opMins }}m
	@if(is_null($timesheet->approved_by))
			<span style="font-size:12px; display:block; text-align:center;">
				menunggu approval <br> pengawas
			</span>
		@else
			{{ $opHours }}j {{ $opMins }}m
		@endif  
  </td>
  <td colspan=7 rowspan=5 class=xl240 style='border-right:2.0pt double black; border-left:none;
  border-bottom:2.0pt double black; text-align:center; vertical-align:middle;'> {{ $nonProdHours }}j {{ $nonProdMins }}m
	@if(is_null($timesheet->approved_by))
		<span style="font-size:12px; display:block; text-align:center;">
			menunggu approval <br> pengawas
		</span>
	@else
		{{ $nonProdHours }}j {{ $nonProdMins }}m
	@endif
  </td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:10pt'>
  <td height=19 class=xl80 style='height:10pt'></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:10pt'>
  <td height=19 class=xl80 style='height:10pt'></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=19 style='height:10pt'>
  <td height=19 colspan=6 rowspan=1 class=xl200 style='font-size: 11px;height:10pt;border-top: none !important; border-right: .5pt solid black !important'>{{ $timesheet->nama }}</td>
  <td height=19 colspan=5 rowspan=1 class=xl200 style='font-size: 11px;height:10pt; border-top: none !important; border-left: none !important; border-right: .5pt solid black !important'></td>
  <td height=19 colspan=5 rowspan=1 class=xl200 style='font-size: 11px;height:10pt; border-top: none !important; border-right: 2.0pt double black !important; border-left: none !important'></td>
 </tr>
 
 <!-- <tr height=19 style='height:14.25pt'>
  <td height=19 class=xl80 style='height:14.25pt'></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr> -->

 <tr height=27 style='mso-height-source:userset;height:20.25pt'>
  <td colspan=6 height=27 class=xl251 style='border-right:.5pt solid black;
  height:20.25pt'>Operator</td>
  <td colspan=5 class=xl254 style='border-right:.5pt solid black;border-left:
  none'>Foreman Operation</td>
  <td colspan=5 class=xl254 style='border-right:2.0pt double black;border-left:
  none'>Supervisor Operation</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl80 style='height:15.0pt'></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=20 style='width:15pt'></td>
  <td width=20 style='width:15pt'></td>
  <td width=24 style='width:18pt'></td>
  <td width=18 style='width:14pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=22 style='width:17pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
 <![endif]>
</table>

</body>

</html>
