<html>
<head>
	<link rel="stylesheet" href="/assets/css/mypdf-lv.css">
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
				filename:     'Form-P2H-LV-GSI.pdf', // Nama file PDF yang akan disimpan
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
	max-width: 800px;
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
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl67
	{mso-style-parent:style0;
	font-size:10.0pt;
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
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl69
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid !important;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid !important;}
.xl70
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl71
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl72
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid !important;}
.xl73
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl74
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid !important;
	border-left:.5pt solid !important;}
.xl75
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid !important;
	border-left:none;}
.xl76
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid !important;
	border-left:none;}
.xl77
	{mso-style-parent:style0;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl78
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border:.5pt solid !important;}
.xl79
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl80
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl81
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;}
.xl82
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl83
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl84
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl85
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl86
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl87
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:2.0pt double black;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double black;}
.xl88
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:2.0pt double black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl89
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:2.0pt double black;
	border-right:2.0pt double !important;
	border-bottom:none;
	border-left:none;}
.xl90
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;}
.xl91
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double !important;}
.xl92
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double !important;
	border-bottom:none;
	border-left:none;}
.xl93
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double black;}
.xl94
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;}
.xl95
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double !important;
	border-left:2.0pt double !important;}
.xl96
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double !important;
	border-left:none;}
.xl97
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double !important;
	border-left:none;}
.xl98
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double !important;
	border-bottom:2.0pt double !important;
	border-left:none;}
.xl99
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	white-space:normal;}
.xl100
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid black;}
.xl101
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border:.5pt solid black;
	white-space:normal;}
.xl102
	{mso-style-parent:style0;
	font-size:10.0pt;
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
.xl103
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	white-space:normal;}
.xl104
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border:.5pt solid black;}
.xl105
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl106
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl107
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl108
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl109
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:top;}
.xl110
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	white-space:normal;}
.xl111
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl112
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl113
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl114
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl115
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	text-align:center-across;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl116
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	text-align:center-across;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl117
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl118
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	text-align:center-across;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl119
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	text-align:center-across;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl120
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl121
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl122
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	text-align:center-across;
	vertical-align:middle;}
.xl123
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	text-align:center-across;
	vertical-align:middle;}
.xl124
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:justify;}
.xl125
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-style:italic;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl126
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	text-decoration:underline;
	text-underline-style:single;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:justify;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl127
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl128
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl129
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl130
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:justify;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl131
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:2.0pt double black;
	white-space:normal;}
.xl132
	{mso-style-parent:style0;
	font-size:10.0pt;
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
.xl133
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:2.0pt double black;}
.xl134
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;}
.xl135
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	white-space:normal;}
.xl136
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:2.0pt double black;}
.xl137
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;}
.xl138
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double black;
	border-left:2.0pt double black;}
.xl139
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double black;
	border-left:.5pt solid black;}
.xl140
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:2.0pt double black;
	border-left:.5pt solid black;}
.xl141
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double black;
	border-left:2.0pt double black;}
.xl142
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double black;
	border-left:.5pt solid black;}
.xl143
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:2.0pt double black;
	border-left:.5pt solid black;}
.xl144
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;}
.xl145
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl146
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl147
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border:.5pt solid black;}
.xl148
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double black;}
.xl149
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double black;}
.xl150
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl151
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl152
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:none;
	border-left:none;}
.xl153
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:2.0pt double black;}
.xl154
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl155
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl156
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid black;}
.xl157
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;}
.xl158
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;}
.xl159
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl160
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	text-align:center-across;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl161
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	text-align:center-across;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl162
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	vertical-align:justify;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl163
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;
	white-space:normal;}
.xl164
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid black;}
.xl165
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl166
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl167
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:2.0pt double black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl168
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl169
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl170
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:2.0pt double black;
	white-space:normal;}
.xl171
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl172
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl173
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double black;
	white-space:normal;}
.xl174
	{mso-style-parent:style0;
	font-size:10.0pt;
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
.xl175
	{mso-style-parent:style0;
	font-size:10.0pt;
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
.xl176
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl177
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:2.0pt double black;
	border-left:.5pt solid black;}
.xl178
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:2.0pt double black;
	border-left:none;}
.xl179
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double black;
	border-left:none;}
.xl180
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl181
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:top;
	white-space:normal;}
.xl182
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:2.0pt double black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl183
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl184
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl185
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;}
.xl186
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl187
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;}
.xl188
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl189
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl190
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;}
.xl191
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl192
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl193
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	white-space:normal;}
.xl194
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl195
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl196
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;}
.xl197
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl198
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl199
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Medium Date";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl200
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid !important;}
.xl201
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl202
	{mso-style-parent:style0;
	font-size:12.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid !important;
	border-left:.5pt solid !important;}
.xl203
	{mso-style-parent:style0;
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
.xl204
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:2.0pt double black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl205
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl206
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double black;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl207
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double black;}
.xl208
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;}
.xl209
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl210
	{mso-style-parent:style0;
	font-size:9.0pt;
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
.xl211
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	background:#DDEBF7;
	mso-pattern:black none;
	white-space:normal;}
.xl212
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:2.0pt double black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl213
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl214
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl215
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:.5pt solid black;
	border-bottom:.5pt solid !important;
	border-left:2.0pt double black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl216
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl217
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:2.0pt double black;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	background:#DDEBF7;
	mso-pattern:black none;}
.xl218
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:2.0pt double black;
	border-left:.5pt solid black;}
.xl219
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid black;}
.xl220
	{mso-style-parent:style0;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid !important;
	border-color: black !important;
	background:#44546A !important;
	mso-pattern:black none;}
.xl221
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl222
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:right;}
.xl223
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid !important;}
.xl224
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-left:.5pt solid !important;
	border-bottom:none;}
.xl225
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl226
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
.xl227
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-left:.5pt solid !important;}
.xl228
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid;
	border-right:none;
	border-bottom:.5pt solid;
	border-left:.5pt solid !important;}
.xl228x
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:none !important;
	border-bottom:none !important;
	border-left:.5pt solid !important;}
.xl229
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl230
	{mso-style-parent:style0;
	color:black;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-left:.5pt solid !important;}
.xl231
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;}
.xl232
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid ;
	border-right:.5pt solid ;
	border-bottom:none;
	border-left:none;}
.xl233
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid black;}
.xl234
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl235
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl236
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl237
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:.5pt solid !important;
	border-bottom:none;
	border-left:none;}
.xl238
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid !important;
	border-left:none;}
.xl239
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid !important;
	border-bottom:.5pt solid !important;
	border-left:none;}
.xl240
	{mso-style-parent:style0;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:none;
	border-left:.5pt solid ;
	background:#44546A;
	border-color: black !important;
	mso-pattern:black none;}
.xl241
	{mso-style-parent:style0;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#44546A;
	mso-pattern:black none;}
.xl242
	{mso-style-parent:style0;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#44546A;
	mso-pattern:black none;}
.xl243
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:none;
	border-left:.5pt solid !important;
	background:#C5C2C2;
	mso-pattern:black none;}
.xl244
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#C5C2C2;
	mso-pattern:black none;}
.xl245
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	background:#C5C2C2;
	mso-pattern:black none;}
.xl246
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-left:.5pt solid !important;
	border-top:.5pt solid !important;
	background:#C5C2C2;
	mso-pattern:black none;
	white-space:normal;}
.xl247
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-left:.5pt solid !important;}
.xl248
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:.5pt solid !important;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl249
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid !important;}
.xl250
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid !important;
	border-left:.5pt solid !important;}
.xl251
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid !important;
	border-left:none;}
.xl252
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid !important;
	border-left:none;}
.xl253
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	border-top:.5pt solid !important;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl254
	{mso-style-parent:style0;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;}
.xl255
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
	border-bottom:.5pt solid !important;
	border-left:none;}
.xl256
	{mso-style-parent:style0;
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
.xl257
	{mso-style-parent:style0;
	font-size:14.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl258
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid !important;}
.xl259
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl260
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl261
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;}
.xl262
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl263
	{mso-style-parent:style0;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl264
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:none;
	border-bottom:.5pt solid !important;
	border-left:.5pt solid black;}
.xl265
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl266
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:.5pt solid black;
	white-space:normal;}
.xl267
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl268
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl269
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;
	white-space:normal;}
.xl270
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid !important;}
.xl271
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Medium Date";
	text-align:left;
	vertical-align:middle;
	border:.5pt solid !important;}
.xl272
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:.5pt solid black;
	border-bottom:none;
	border-left:none;}
.xl273
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl274
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:.5pt solid !important;
	border-bottom:.5pt solid !important;
	border-left:none;
	white-space:normal;}
.xl275
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5 pt solid !important;
	border-right:.5pt solid black;
	border-bottom:.5pt solid !important;
	border-left:none;}
.xl276
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:none;
	border-left:.5pt solid !important;}
.xl277
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl278
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid black;
	border-right:.5pt solid black;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl279
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-weight:700;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\[ENG\]\[$-409\]dd\\-mmm\\-yy\;\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid !important;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid !important;}

</style>


</head>

<body>

<table border=0 cellpadding=0 cellspacing=0 width=736 style='border-spacing:0;
table-layout:fixed;width:562pt'>
 <col class=xl65 width=26 style='mso-width-source:userset;mso-width-alt:950;
 width:20pt'>
 <col class=xl65 width=21 span=11 style='mso-width-source:userset;mso-width-alt:
 768;width:16pt'>
 <col class=xl65 width=26 span=2 style='mso-width-source:userset;mso-width-alt:
 950;width:20pt'>
 <col class=xl65 width=21 span=3 style='mso-width-source:userset;mso-width-alt:
 768;width:16pt'>
 <col class=xl65 width=26 style='mso-width-source:userset;mso-width-alt:950;
 width:20pt'>
 <col class=xl65 width=21 span=11 style='mso-width-source:userset;mso-width-alt:
 768;width:16pt'>
 <col class=xl65 width=26 span=2 style='mso-width-source:userset;mso-width-alt:
 950;width:20pt'>
 <col class=xl65 width=21 span=2 style='mso-width-source:userset;mso-width-alt:
 768;width:16pt'>
 <col class=xl65 width=13 style='mso-width-source:userset;mso-width-alt:475;
 width:10pt'>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=4 rowspan=4 height=77 width=89 style='border-right:none;
  border-bottom:.5pt solid black;height:57.75pt;width:68pt' align=left  valign=top>
  <span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:6px;margin-top:9px;width:70px;
  height:61px'><img width=76 height=60 src="{{ asset('storage/images/logo-gsi.png') }}" v:shapes="Picture_x0020_1"></span>
  <span style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0 style="border-spacing:0;">
   <tr>
    <td colspan=4 rowspan=4 height=77 class=xl228x width=89 style='border-right:
    .5pt solid black;border-bottom:.5pt solid black;height:57.75pt;width:68pt'>&nbsp;</td>
   </tr>
  </table>
  </span></td>
  <td colspan=18 rowspan=2 class=xl169 width=393 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;background:none;width:300pt'>FORM / FORMULIR</td>
  <td colspan=5 class=xl238 width=105 style='border-right:.5pt solid black; border-top:.5pt solid black !important;
  border-left:none;width:80pt'>No. Dokumen</td>
  <td class=xl215 width=21 style='width:16pt; border-left:none; border-right:none;background:none'>:</td>
  <td colspan=5 class=xl270 width=115 style='border-right:.5pt solid black;
  border-left:none;width:88pt'>GSI4-OPR-002N</td>
  <td class=xl65 width=13 style='width:10pt'></td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=5 height=19 class=xl238 style='border-right:.5pt solid black;
  height:14.25pt;border-left:none'>Revisi</td>
  <td class=xl275 style="border-right:none">:</td>
  <td colspan=5 class=xl270 style='border-right:.5pt solid black;border-left:
  none; border-top:none !important;'>0</td>
  <td class=xl65></td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=18 height=19 class=xl202 style='border-right:.5pt solid black;
  height:14.25pt;border-left:none; border-bottom: none !important;'>P2H<span style='mso-spacerun:yes'></span></td>
  <td colspan=5 class=xl238 width=105 style='border-right:.5pt solid black;
  border-left:none;width:80pt'>Tanggal Efektif</td>
  <td class=xl275 width=21 style='border-right:none !important; width:16pt'>:</td>
  <td colspan=5 class=xl270 style='border-right:.5pt solid black;border-left:
  none; border-top:none !important;'>18-Sep-24</td>
  <td class=xl65></td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td colspan=18 class=xl202 style='border-right:.5pt solid black'>KENDARAAN LV</td>
  <td colspan=5 class=xl238 style='border-right:.5pt solid black;border-left:
  none'>Halaman</td>
  <td class=xl275 style="border-right:none !important;">:</td>
  <td colspan=5 class=xl238 style='border-right:.5pt solid black;border-left:.5pt solid black !important;'>1</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl97 style='height:15.0pt'>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=12 style='mso-height-source:userset;height:9.0pt'>
  <td height=12 class=xl91 style='height:9.0pt'>&nbsp;</td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl89 style='border-top:none'>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl91 style='height:15.0pt'>&nbsp;</td>
  <td class=xl80 colspan=4 style='mso-ignore:colspan'>NAMA DRIVER</td>
  <td class=xl65></td>
  <td class=xl84>:</td>
  <td class=xl85>{{ $Dtl->nama_driver }}</td>
  <td class=xl85>&nbsp;</td>
  <td class=xl85>&nbsp;</td>
  <td class=xl85>&nbsp;</td>
  <td class=xl85>&nbsp;</td>
  <td class=xl85>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl80 colspan=2 style='mso-ignore:colspan'>SHIFT</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl84>:</td>
  <td class=xl85>{{ $Dtl->shift }}</td>
  <td class=xl85>&nbsp;</td>
  <td class=xl85>&nbsp;</td>
  <td class=xl85>&nbsp;</td>
  <td class=xl85>&nbsp;</td>
  <td class=xl92>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl91 style='height:15.0pt'>&nbsp;</td>
  <td class=xl80 colspan=4 style='mso-ignore:colspan'>DEPARTEMEN</td>
  <td class=xl65></td>
  <td class=xl84>:</td>
                        <td class=xl86 style='border-top:none'>{{ $Dtl->departemen }}</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl80 colspan=3 style='mso-ignore:colspan'>NO. ALAT</td>
  <td class=xl80></td>
  <td class=xl84>:</td>
  <td class=xl86 style='border-top:none'>{{ $Dtl->no_unit }}</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl92>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl91 style='height:15.0pt'>&nbsp;</td>
  <td class=xl80 colspan=3 style='mso-ignore:colspan'>TANGGAL</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl84>:</td>
  <td class=xl86 style='border-top:none'>{{ $Dtl->date }}</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl80 colspan=3 style='mso-ignore:colspan'>KM AKHIR</td>
  <td class=xl80></td>
  <td class=xl84>:</td>
  <td class=xl86 style='border-top:none'>{{ $Dtl->start_hm }}</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl86 style='border-top:none'>&nbsp;</td>
  <td class=xl92>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl91 style='height:9.75pt'>&nbsp;</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl84></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl84></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl92>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl91 style='height:15.0pt'>&nbsp;</td>
  <td class=xl221 colspan=5 style='mso-ignore:colspan'>KETERANGAN :</td>
  <td class=xl84></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl84></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl92>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl91 style='height:15.0pt'>&nbsp;</td>
  <td class=xl222>1.</td>
  <td class=xl221 colspan=26 style='mso-ignore:colspan'>Pada kolom
  &quot;Kondisi&quot; beri tanda ( &#10004; ) sesuai dengan kondisi kendaraan pada
  saat pemeriksaan</td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl80></td>
  <td class=xl92>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl91 style='height:15.0pt'>&nbsp;</td>
  <td class=xl222>2.</td>
  <td class=xl221 colspan=31 style='mso-ignore:colspan;border-right:2.0pt double black'>Tuliskan
  di kolom catatan, apabila ada informasi tambahan mengenai kerusakan /
  ketidaksesuaian yang ditemukan</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl91 style='height:15.0pt'>&nbsp;</td>
  <td class=xl222>3.</td>
  <td class=xl221 colspan=31 style='mso-ignore:colspan;border-right:2.0pt double black'>Bila
  ditemukan dari pemeriksaan ada temuan Rusak dan perlu dilengkapi segera
  laporkan ke Pengawas/Mekanik</td>
  <td class=xl65></td>
 </tr>
 <tr height=5 style='mso-height-source:userset;height:3.75pt'>
  <td height=5 class=xl95 style='height:3.75pt'>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl96>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl97>&nbsp;</td>
  <td class=xl98>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl81 style='height:15.0pt'></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td rowspan=3 height=78 class=xl246 width=26 style='height:60.3pt;width:20pt'>NO</td>
  <td colspan=7 rowspan=3 class=xl246 width=147 style='width:112pt'>ITEM YANG
  HARUS DIPERIKSA</td>
  <td colspan=2 rowspan=3 class=xl246 width=42 style='width:32pt'>KODE</td>
  <td colspan=6 class=xl246 width=136 style='border-right:.5pt solid black !important; width:104pt'>KONDISI</td>
  <td class=xl82></td>
  <td rowspan=3 class=xl246 width=26 style='width:20pt'>NO</td>
  <td colspan=7 rowspan=3 class=xl246 width=147 style='width:112pt'>ITEM YANG
  HARUS DIPERIKSA</td>
  <td colspan=2 rowspan=3 class=xl246 width=42 style='width:32pt'>KODE</td>
  <td colspan=6 class=xl246 width=136 style='border-right:.5pt solid black !important; border-left:none;width:104pt'>KONDISI</td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td colspan=2 rowspan=2 height=52 class=xl246 width=42 style='height:40.2pt;
  width:32pt'>BAIK</td>
  <td colspan=2 rowspan=2 class=xl246 width=52 style='width:40pt'>Rusak / Tidak
  Sesuai</td>
  <td colspan=2 rowspan=2 class=xl246 width=42 style='border-right:.5pt solid black !important; width:32pt'>Tidak Ada</td>
  <td class=xl82></td>
  <td colspan=2 rowspan=2 class=xl246 width=42 style='width:32pt'>BAIK</td>
  <td colspan=2 rowspan=2 class=xl246 width=52 style='width:40pt'>Rusak / Tidak
  Sesuai</td>
  <td colspan=2 rowspan=2 class=xl246 width=42 style='border-right:.5pt solid black !important; width:32pt'>Tidak Ada</td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl82 style='height:20.1pt'></td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=16 height=20 class=xl220 style='height:15.0pt; border-bottom:none !important;'>PEMERIKSAAN
  KELILING UNIT / DILUAR KABIN</td>
  <td class=xl82></td>
  <td colspan=16 class=xl220 style="border-bottom:none !important;">PEMERIKSAAN KELILING UNIT / DILUAR KABIN</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>1</td>
  <td colspan=7 class=xl230>Level Oli Transmisi</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
								@if ($Dtl->LevelOlitrans == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->LevelOlitrans == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->LevelOlitrans == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>16</td>
  <td colspan=7 class=xl230 style='border-left:none'>Kemudi (Steering)</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->LevelOlikemudi == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->LevelOlikemudi == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->LevelOlikemudi == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none; border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>2</td>
  <td colspan=7 class=xl230>Air Radiator</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
								@if ($Dtl->AirRadiator == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->AirRadiator == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->AirRadiator == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl81></td>
  <td class=xl247 style='border-top:none'>17</td>
  <td colspan=7 class=xl230 style='border-left:none'>Rem Tangan</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
								@if ($Dtl->RemTangan == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->RemTangan == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->RemTangan == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl81></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>3</td>
  <td colspan=7 class=xl230>Level Oli Kemudi</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->LevelOlikemudi == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->LevelOlikemudi == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->LevelOlikemudi == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>18</td>
  <td colspan=7 class=xl230 style='border-left:none'>Rem Kaki</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->RemKaki == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->RemKaki == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->RemKaki == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>4</td>
  <td colspan=7 class=xl230>Level Oli Engine</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->LevelOliengine == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->LevelOliengine == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->LevelOliengine == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>19</td>
  <td colspan=7 class=xl230 style='border-left:none'>Klakson</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->Klakson == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->Klakson == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->Klakson == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>5</td>
  <td colspan=7 class=xl230>Level Oli Rem</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->LevelOlirem == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->LevelOlirem == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->LevelOlirem == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>20</td>
  <td colspan=7 class=xl230 style='border-left:none'>Panel Indikator/Gauge</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->PanelIndikator == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->PanelIndikator == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->PanelIndikator == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>6</td>
  <td colspan=7 class=xl230>Level Oli Perseneling</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->LevelOliperseneling == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->LevelOliperseneling == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->LevelOliperseneling == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>21</td>
  <td colspan=7 class=xl230 style='border-left:none'>4WD Double Gardan</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->Wd == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->Wd == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->Wd == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>7</td>
  <td colspan=7 class=xl230>Body Unit</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->BodyUnit == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->BodyUnit == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->BodyUnit == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>22</td>
  <td colspan=7 class=xl230 style='border-left:none'>Wipers</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->Wipers == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->Wipers == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->Wipers == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>8</td>
  <td colspan=7 class=xl230>Ban, Baut Roda</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->BanBautroda == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->BanBautroda == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->BanBautroda == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>23</td>
  <td colspan=7 class=xl230 style='border-left:none'>Radio Rig</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->RadioRig == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->RadioRig == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->RadioRig == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>9</td>
  <td colspan=7 class=xl230>Kaca Spion</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->KacaSpion == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->KacaSpion == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->KacaSpion == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>24</td>
  <td colspan=7 class=xl230 style='border-left:none'>Seat Belt</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->SeatBelt == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->SeatBelt == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->SeatBelt == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>10</td>
  <td colspan=7 class=xl230>Alarm Mundur</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->AlarmMundur == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->AlarmMundur == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->AlarmMundur == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>25</td>
  <td colspan=7 class=xl230 style='border-left:none'>Tempat Duduk</td>
  <td colspan=2 class=xl227 style='border-left:none'>A</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->TempatDuduk == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->TempatDuduk == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->TempatDuduk == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>11</td>
  <td colspan=7 class=xl230>Lampu Rem &amp; Sein</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->LampuRem == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->LampuRem == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->LampuRem == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>26</td>
  <td colspan=7 class=xl230 style='border-left:none'>Dongkrak</td>
  <td colspan=2 class=xl227 style='border-left:none'>A</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->Dongkrak == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->Dongkrak == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->Dongkrak == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>12</td>
  <td colspan=7 class=xl230>Lampu Depan</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->LampuDepan == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->LampuDepan == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->LampuDepan == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>27</td>
  <td colspan=7 class=xl230 style='border-left:none'>Ganjal Roda</td>
  <td colspan=2 class=xl227 style='border-left:none'>A</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->GanjalRoda == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->GanjalRoda == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->GanjalRoda == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>13</td>
  <td colspan=7 class=xl230>Lampu Rotary</td>
  <td colspan=2 class=xl227 style='border-left:none'>AA</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->LampuRotary == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->LampuRotary == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->LampuRotary == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>28</td>
  <td colspan=7 class=xl230 style='border-left:none'>Kebersihan Kabin</td>
  <td colspan=2 class=xl227 style='border-left:none'>A</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->KabinKaca == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->KabinKaca == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->KabinKaca == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none'>14</td>
  <td colspan=7 class=xl230>Air Wiper dan Air Aki</td>
  <td colspan=2 class=xl227 style='border-left:none'>A</td>

							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->AirWiper == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->AirWiper == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->AirWiper == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none'>29</td>
  <td colspan=7 class=xl230 style='border-left:none'>Kunci Baut Roda</td>
  <td colspan=2 class=xl227 style='border-left:none'>A</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->KunciBautroda == "Baik")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->KunciBautroda == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->KunciBautroda == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl276 style='height:15.0pt;border-top:none; border-bottom:.5pt solid !important;'>15</td>
  <td colspan=7 class=xl230 style="border-bottom:.5pt solid !important;">Tiang Bendera</td>
  <td colspan=2 class=xl227 style='border-left:none; border-bottom:.5pt solid !important;'>A</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->TiangBendera == "Baik")
									<td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->TiangBendera == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->TiangBendera == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;border-bottom:.5pt solid !important;'></td>
                                @endif
  <td class=xl82></td>
  <td class=xl247 style='border-top:none;border-bottom:.5pt solid !important;'>30</td>
  <td colspan=7 class=xl230 style='border-left:none;border-bottom:.5pt solid !important;'>APAR</td>
  <td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;'>A</td>
							<!-- Pemisah Kolom untuk Baik -->
							@if ($Dtl->Apar == "Baik")
									<td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;'></td>
                                @endif
							<!-- Pemisah Kolom untuk Rusak -->
  								@if ($Dtl->Apar == "Rusak")
									<td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;'></td>
                                @endif
							<!-- Pemisah Kolom untuk Tidak Ada -->
  								@if ($Dtl->Apar == "Tidak Ada")
									<td colspan=2 class=xl227 style='border-left:none;border-bottom:.5pt solid !important;border-right:.5pt solid !important;'>&#10004;</td>
                                @else
                                    <td colspan=2 class=xl227 style='border-left:none;border-right:.5pt solid !important;border-bottom:.5pt solid !important;'></td>
                                @endif
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl81 style='height:15.0pt'></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=4 height=20 class=xl279 style='height:15.0pt'>PENTING :</td>
  <td class=xl253>1.</td>
  <td class=xl248 colspan=5 style='mso-ignore:colspan'>Kode Bahaya A<span
  style='mso-spacerun:yes'></span>:</td>
  <td class=xl248>&nbsp;</td>
  <td class=xl248 colspan=12 style='mso-ignore:colspan'>Unit harus diperbaiki
  sebelum di operasikan</td>
  <td class=xl236>&nbsp;</td>
  <td class=xl236>&nbsp;</td>
  <td class=xl236>&nbsp;</td>
  <td class=xl236>&nbsp;</td>
  <td class=xl236>&nbsp;</td>
  <td class=xl236>&nbsp;</td>
  <td class=xl236>&nbsp;</td>
  <td class=xl236>&nbsp;</td>
  <td class=xl236>&nbsp;</td>
  <td class=xl237>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl249 style='height:15.0pt'>&nbsp;</td>
  <td class=xl231></td>
  <td class=xl231></td>
  <td class=xl65></td>
  <td class=xl254>2.</td>
  <td class=xl231 colspan=6 style='mso-ignore:colspan'>Kode Bahaya AA<span
  style='mso-spacerun:yes'></span>:</td>
  <td class=xl231 colspan=22 style='mso-ignore:colspan;border-right:.5pt solid black'>Berhenti
  dan SEGERA Laporkan Keatasan, putuskan lanjutkan atau perbaiki segera</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl250 style='height:15.0pt'>&nbsp;</td>
  <td class=xl251>&nbsp;</td>
  <td class=xl251>&nbsp;</td>
  <td class=xl75>&nbsp;</td>
  <td class=xl255>3.</td>
  <td class=xl252 colspan=26 style='mso-ignore:colspan'>Mengoperasikan alat
  dengan kerusakan AA akan dikenakan sanksi sesuai Peraturan Perusahaan</td>
  <td class=xl238>&nbsp;</td>
  <td class=xl239>&nbsp;</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl81 style='height:15.0pt'></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=19 height=20 class=xl243 >CATATAN : Tuliskan bila ada temuan dan kelainan selain item
  diatas</td>
  <td colspan=7 class=xl240 >DIISI OLEH,</td>
  <td colspan=7 class=xl240 style="border-right:.5pt solid black !important;">DIPERIKSA OLEH,</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=19 rowspan=6 height=120 class=tdclass style='border-bottom:.5pt solid black;height:90.0pt'>{{ $Dtl->pesan }}</td>

<td colspan=7 rowspan=4 class=xl228>
    <img id="res-img" src="{{ asset('storage/images/ttd_lv/' . $Dtl->lv_id . '.png') }}" alt="No data" style="width: 90%; height: 90%; margin: 5% 0%;"></td>

<td colspan=7 rowspan=4 class=xl228 style='border-right:.5pt solid black'>
    <img id="res-img" src="{{ asset('storage/images/ttd_mh_pw/' . $Dtl->status) }}" alt="Belum diapprove" style="width: 90%; height: 90%; margin: 5% 0%;"></td>

   <script>
        window.addEventListener('load', function() {
        // Dapatkan semua elemen gambar dengan ID "res-img"
        const images = document.querySelectorAll('img[id="res-img"]');

        images.forEach(function(img) {
            const container = img.parentElement;

            // Atur lebar gambar menjadi 90% dari lebar kontainer
            img.style.width = container.offsetWidth * 0.9 + 'px';

            // Atur tinggi gambar secara otomatis
            img.style.height = 'auto';
            img.style.maxHeight = '120px';

            // Atur tinggi minimal kontainer jika gambar tidak ada atau gagal dimuat
            img.onerror = function() {
            container.style.height = '25px';
            };
        });
        });
    </script>

  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl65 style='height:15.0pt'></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl65 style='height:15.0pt'></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl65 style='height:15.0pt'></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=7 height=20 class=xl233 >{{ $Dtl->nama_driver }}</td>
  <td colspan=7 class=xl233 style='border-right:.5pt solid !important;'>{{ $Dtl->pengawas}}</td> {{-- tanda tangan pengawas LV --}}
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=7 height=20 class=xl276 style='border-bottom:.5pt solid black;
  height:15.0pt;border-left:none'>TTD DRIVER</td>
  <td colspan=7 class=xl276 style='border-right:.5pt solid black; border-bottom:.5pt solid black !important;'>TTD PENGAWAS</td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl81 style='height:15.0pt'></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl81 style='height:15.0pt'></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl82></td>
  <td class=xl65></td>
 </tr>
</table>
</body>

</html>
