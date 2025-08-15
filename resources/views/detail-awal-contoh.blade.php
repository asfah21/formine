
@extends('layouts.app')

@section('title', 'Form Manhaul')

@section('content')

<link type="text/css" rel="stylesheet" href="./my-css/my-sign-pad.css">

<section class="!pt-28 min-h-screen bg-gray-100 dark:bg-gray-900 flex flex-col items-center">
    {{-- Wrapper Tombol dan Container --}}
    <div class="w-full max-w-[210mm] flex flex-col gap-4">
        {{-- Tombol Print --}}
        <div class="flex justify-end mb-4">
            <button
                onclick="printSection()"
                class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600">
                <i class="fa fa-print"></i> Print
            </button>
        </div>

        {{-- Container A4 --}}
        <div id="printable-section" class="!mb-28 bg-white shadow-lg border border-gray-200 w-full aspect-[210/310] max-h-[310mm] p-8 overflow-auto">

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

            <span><img width=78 height=54 src="{{ asset('storage/images/logo-gsi.png') }}" v:shapes="Picture_x0020_1"></span></td>
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
            height:11.1pt;border-left:none'>BUS/MANHAUL</td>
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
            <td colspan=7 style="border-bottom:none !important; text-align:left;"class=xl186>{{ $manHauls->no_unit}}</td>
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
            <td colspan=8 style="border-bottom:none !important;text-align:left"class=xl186> {{ $manHauls->nama_driver }}</td>
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
            <td colspan=7 style="border-bottom:none !important;text-align:left;" class=xl187>{{ Carbon::parse($manHauls->date)->format('d-M-Y') }}</td>
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
            <td colspan=8 style="border-bottom:none !important;text-align:left;" class=xl187>{{$manHauls->start_hm}}</td>
            <td class=xl80>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl82 colspan=6 style='height:12.0pt;mso-ignore:colspan'>&nbsp;HM NEXT SERVICE</td>
            <td class=xl84>:</td>
            <td colspan=7 style="text-align:left;" class=xl187>{{ $manHauls->hm_next_service }}</td>
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
            <td colspan=8 style="text-align:left;" class=xl187>{{ $manHauls->finish_hm }}</td>
            <td class=xl80>&nbsp;</td>
            <td class=xl126c width=16 style='border-left:none !important;border-right:.5pt solid black;width:5pt'></td> <!-- copy this syntax-->
            </tr>

            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl85 style='height:12.0pt'>&nbsp;</td>
            <td colspan=8 rowspan="4" class=xl184>  <!-- tempat tanda tangan user -->
                <img id="res-img" src="{{ asset('storage/images/ttd_mh/' . $manHauls->mh_id . '.png') }}" alt="No data" style="width: 55%; height: 90%; margin: 7% 0% 3% 0%;"></td>
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
                                            @if ($manHauls->shift == "Siang")
                                                <td style="font-weight:bold;text-align:center"class=xl90 >&#10004;</td>
                                            @else
                                                <td class=xl90 ></td>
                                            @endif

            <td class=xl81 colspan=4 style='mso-ignore:colspan'>&nbsp;DAY SHIFT</td>
            <td class=xl87></td>
                                            <!-- Pemisah Kolom untuk Baik -->
                                            @if ($manHauls->shift == "Malam")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KACA DEPAN / PINTU</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->kaca_depan == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->kaca_depan == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->kaca_depan == "Tidak Ada")
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
                        @if ($manHauls->stir_kemudi == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->stir_kemudi == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->stir_kemudi == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>2</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KACA SPION</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->kaca_spion == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->kaca_spion == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->kaca_spion == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>1</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>OLI MESIN TEK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->oli_mesin_tek == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->oli_mesin_tek == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->oli_mesin_tek == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>2</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU MUNDUR</td>
                    <!-- Pemisah Kolom untuk Baik -->
                    @if ($manHauls->lampu_mundur2 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_mundur2 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_mundur2 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>3</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KIPAS KACA (WIPER)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->wiper == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->wiper == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->wiper == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>2</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>AIR PENDINGIN</td>
                    <!-- Pemisah Kolom untuk Baik -->
                    @if ($manHauls->air_pendingin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->air_pendingin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->air_pendingin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>3</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>REM KAKI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->rem_kaki == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->rem_kaki == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->rem_kaki == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>4</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU BESAR / DIM</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_besar == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_besar == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_besar == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>3</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>ANGIN / TEKANAN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->angin_tekanan == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->angin_tekanan == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->angin_tekanan == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>4</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>REM PARKIR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->rem_parkir == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->rem_parkir == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->rem_parkir == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>5</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU KECIL</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_kecil == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_kecil == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_kecil == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>4</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left: none'>SOLAR / ISI TANGKI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->solar_isi_tangki == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->solar_isi_tangki == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->solar_isi_tangki == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>5</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>GIGI PERSNELING</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->gigi_pers == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->gigi_pers == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->gigi_pers == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>6</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU SEIN SIGNAL</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_sein == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_sein == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_sein == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>5</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left: none'>KLAKSON ANGIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->klakson_angin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->klakson_angin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->klakson_angin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>6</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KLAKSON MUNDUR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->klakson_mundur == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->klakson_mundur == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->klakson_mundur == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>7</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU MUNDUR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_mundur == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_mundur == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_mundur == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>6</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KLAKSON LISTRIK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->klakson_listrik == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->klakson_listrik == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->klakson_listrik == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>7</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU PERINGATAN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_peringatan == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_peringatan == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_peringatan == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>8</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU KABUT</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_kabut == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_kabut == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_kabut == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>7</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU BESAR / DIM</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_dim == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_dim == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_dim == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>8</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>EMS / CMS</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->ems_cms == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->ems_cms == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->ems_cms == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>9</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KACA JENDELA PENUMPANG</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->kaca_jdl_pnpg == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->kaca_jdl_pnpg == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->kaca_jdl_pnpg == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>8</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU KECIL</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_kecil2 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_kecil2 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_kecil2 == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>9</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>RETARDER</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->retarder == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->retarder == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->retarder == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>10</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TANGGA PENUMPANG</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->tangga_pnpg == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->tangga_pnpg == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->tangga_pnpg == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>9</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU SEN / SIGNAL</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_sen == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_sen == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_sen == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>10</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU PUTAR (STROBE)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->strobe == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->strobe == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->strobe == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl126c width=16 style='border-left:none !important;width:5pt'></td> <!-- copy this syntax-->
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt;'>
            <td height=16 class=xl95 style='height:12.0pt'>11</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TANGKI ANGIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->tangki_angin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->tangki_angin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->tangki_angin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>10</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU REM</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_rem == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_rem == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_rem == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>BAUT MUR RODA</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->baut_mur == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->baut_mur == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->baut_mur == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>11</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU KABUT</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_kabut2 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_kabut2 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_kabut2 == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>BAN (KONDISI TEKANAN)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->ban_kondisi == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->ban_kondisi == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->ban_kondisi == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>12</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU KABIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_kabin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_kabin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_kabin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td colspan=13 class=xl163>UNTUK SEMUA OPERATOR</td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>14</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PER (BAUT / MUR)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->per_baut_mur == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->per_baut_mur == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->per_baut_mur == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>13</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LAMPU PENUMPANG</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->lampu_pnpg == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->lampu_pnpg == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->lampu_pnpg == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TALI KIPAS</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->tali_kipas == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->tali_kipas == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->tali_kipas == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>14</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TACHOMETER/RPM</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->tachometer == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->tachometer == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->tachometer == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TANGKI SOLAR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->tangki_solar == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->tangki_solar == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->tangki_solar == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>15</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>HI LOW SWITCH</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->hilo_switch == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->hilo_switch == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->hilo_switch == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl104></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>17</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI MESIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->level_oli_mesin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->level_oli_mesin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->level_oli_mesin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>16</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PEDAL GAS</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->pedal_gas == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->pedal_gas == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->pedal_gas == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl104></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>18</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL AIR RADIATOR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->level_air_radiator == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->level_air_radiator == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->level_air_radiator == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>17</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>SEATS / TEMPAT DUDUK</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->seats == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->seats == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->seats == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl74></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>19</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI MESIN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->level_oli_mesin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->level_oli_mesin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->level_oli_mesin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>18</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>FAN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->fan == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->fan == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->fan == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OIL STEERING</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->level_oli_steering == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->level_oli_steering == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->level_oli_steering == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>19</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>BELL PENUMPANG</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->bel_pnpg == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->bel_pnpg == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->bel_pnpg == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl104></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>21</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>LEVEL OLI TRANSMISI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->level_oli_trans == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->level_oli_trans == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->level_oli_trans == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>20</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>AC</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->ac == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->ac == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->ac == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl74></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>22</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>FENDERS</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->fenders == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->fenders == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->fenders == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl94></td>
            <td class=xl95>21</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>RADIO KOMUNIKASI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->radio2 == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->radio2 == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->radio2 == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>CAT (PAINT)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->cat == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->cat == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->cat == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>22</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>MONITOR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->monitor == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->monitor == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->monitor == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl104></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>24</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KAP MESIN (HOODS)</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->kap_mesin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->kap_mesin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->kap_mesin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>23</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>MIC</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->mic == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->mic == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->mic == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KABEL MIC</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->kabel_mic == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->kabel_mic == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->kabel_mic == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl99></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>1</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>PEMADAM API</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->pemadam_api == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->pemadam_api == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->pemadam_api == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>25</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->Radio == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->Radio == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->Radio == "Tidak Ada")
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
                        @if ($manHauls->seat_belt == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->seat_belt == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->seat_belt == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>RADIO KOMUNIKASI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->radio == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif

                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->radio == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->radio == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>1</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEBOCORAN OLI</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->kebocoran_oli == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->kebocoran_oli == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->kebocoran_oli == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>GANJAL BAN</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->ganjal_ban == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->ganjal_ban == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->ganjal_ban == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>2</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEBOCORAN AIR</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->kebocoran_air == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->kebocoran_air == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->kebocoran_air == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td colspan="12" rowspan="4" class=xl71> <!-- Tanda Tangan-->
                    <img id="res-img" src="{{ asset('images/ttd_adt_pw/' . $manHauls->mh_id . '.png') }}" alt="Belum diapprove" style="width: 35%; height: 90%; margin: 0% 0% 0% 0%;"></td>
            <td class=xl73></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12.0pt'>
            <td height=16 class=xl95 style='height:12.0pt'>5</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>TRICON</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->tricon == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->tricon == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->tricon == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td class=xl95>3</td>
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'>KEBOCORAN UDARA</td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->kebocoran_udara == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->kebocoran_udara == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->kebocoran_udara == "Tidak Ada")
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
            <td colspan=10 class=xl155 style='border-right:.5pt solid black;border-left:none'></td>
                        <!-- Pemisah Kolom untuk Baik -->
                        @if ($manHauls->KebocoranFuel == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->KebocoranFuel == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->KebocoranFuel == "Tidak Ada")
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
                        @if ($manHauls->kebersihan == "Baik")
                            <td style="font-weight:normal;text-align:center;border-left:none !important;border-top:none !important;"class=xl161 >&#10004;</td>
                        @else
                            <td class=xl161 style="border-left:none !important;border-top:none !important;" ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->kebersihan == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl101 >&#10006;</td>
                        @elseif ($manHauls->kebersihan == "Tidak Ada")
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
                        @if ($manHauls->suara_mesin == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->suara_mesin == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->suara_mesin == "Tidak Ada")
                            <td style="font-weight:normal;text-align:center"class=xl97 >-</td>
                        @else
                            <td class=xl97 ></td>
                        @endif
            <td class=xl108 width=16 style='width:12pt'></td>
            <td colspan=12 class=xl200>{{ $manHauls->nama_driver}}</td>
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
                        @if ($manHauls->suara_trans == "Baik")
                            <td style="font-weight:normal;text-align:center"class=xl96 >&#10004;</td>
                        @else
                            <td class=xl96 ></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->suara_trans == "Rusak")
                            <td style="font-weight:normal;text-align:center"class=xl97 >&#10006;</td>
                        @elseif ($manHauls->suara_trans == "Tidak Ada")
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
                        @if ($manHauls->suara_diff == "Baik")
                            <td style="font-weight:normal;text-align:center;border-top:none !important;border-left:none !important;border-right:.5pt solid black !important;"class=xl161 >&#10004;</td>
                        @else
                            <td class=xl161 style="border-top:none !important;border-left:none !important;border-right:.5pt solid black !important;"></td>
                        @endif
                        <!-- Pemisah Kolom untuk Rusak -->
                        @if ($manHauls->suara_diff == "Rusak")
                            <td style="font-weight:normal;text-align:center; border-left: none !important;"class=xl101 >&#10006;</td>
                        @elseif ($manHauls->suara_diff == "Tidak Ada")
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
            <td colspan=39 style="text-align:left"class=xl201>&nbsp; &nbsp; &nbsp;{{ $manHauls->Message}}</td>
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
        </div>
    </div>
</section>

{{-- JavaScript untuk Print --}}
<style>
    /* @media print {
    .no-print {
        display: none;
    }
	.xl220{
		background:#44546A !important;
	}
} */

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
/*
body {
	max-width: 710px;
    margin: 0 auto;
} */

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
    function printSection() {
        const printableArea = document.getElementById('printable-section').innerHTML;

        const printWindow = window.open('', '_blank');
        printWindow.document.open();
        printWindow.document.write(`
            <html>
                <head>
                    <title>Print Preview</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
                        .table-auto { width: 100%; border-collapse: collapse; }
                        .table-auto th, .table-auto td { border: 1px solid #000; padding: 8px; text-align: left; }
                        .table-auto thead th { background-color: #f2f2f2; }
                        #printable-section { width: 210mm; height: 297mm; background: white; }
                    </style>
                </head>
                <body>
                    ${printableArea}
                </body>
            </html>
        `);
        printWindow.document.close();
        printWindow.print();
    }
</script>

@endsection
