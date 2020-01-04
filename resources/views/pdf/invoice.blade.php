<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    h1 {
        text-transform: uppercase;
        letter-spacing: 1pt;
        font-size: 30pt;
        margin-bottom: 15px;
    }

    .text-right {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .text-content {
        text-align: center;
        font-weight: bold;
        font-size: 10pt;
    }

    .text-title {
        text-align: center;
        font-weight: bold;
        font-size: 12pt;
        color: #000;
    }

    .invoice-box {
        max-width: 100%;
        margin: auto;
        padding: 30px;
        border: 2px solid #000;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .car-data table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .car-data table td {
        padding: 5px;
    }
    
    .car-data table tr.top table td {
        padding-bottom: 20px;
    }
    
    .car-data table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
        padding: 0px;
    }
    
    .car-data table tr.information table td {
        padding-bottom: 40px;
    }
    
    .car-data table tr.heading td {
        background: #f9f9f9;
        border-top: 1px solid #000;
        border-right: 1px solid #000;
        border-left: 1px solid #000;
        border-bottom: 1px solid #000;
    }

    .car-data table tr.heading-float td {
        background: #f9f9f9;
        border-right: 1px solid #000;
        border-left: 1px solid #000;
        border-bottom: 1px solid #000;
    }
    
    .car-data table tr.details td {
        padding-bottom: 20px;
    }
    
    .car-data table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .car-data table tr.item.last td {
        border-bottom: none;
    }
    
    .car-data table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    .car-items table {
        border-collapse: collapse;
    }

    .car-items table td, th {
        border: 1px solid #000;
        padding: 3px;
    }

    .car-items table thead tr:nth-child(2) {
        background: #ca0000;
        color: #fff;
    }

    .thubnail img {
        float: left;
        width:50%;
        box-sizing: border-box;
        padding: 0.2em;
        height: 250px;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <div class="car-data">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="{{url('/img/logo.png')}}" style="width:300px;">
                                </td>
                                <td class="text-right">
                                    Santa Cruz de la Sierra<br>
                                    <strong>23/12/2019</strong><br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    Av. 2 De Agosto Calle 6 entre 4 y 5 Anillo.<br>
                                    Teléf-Fax: (591) 3494677 - 76722731 - 77537044<br>
                                    E-mail: mikaelac@imagenpublicidad.com
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr class="heading">
                    <td width="70%">
                        <strong>Cliente:</strong> CIS S.R.L
                    </td>
                    
                    <td>
                        <strong>NIT:</strong> 78765480
                    </td>
                </tr>

                <tr class="heading-float">
                    <td width="70%">
                        <strong>Atención:</strong> Lucia Recacoechea
                    </td>
                    
                    <td rowspan="2">
                        <strong>E-mail:</strong> correodepruebalargo@hotmail.com
                    </td>
                </tr>

                <tr class="heading-float">
                    <td width="70%">
                        <strong>Teléfono/Cel:</strong> 33456078-77078147
                    </td>
                    
                </tr>

                <tr class="heading-float">
                    <td width="70%">
                        <strong>Dirección:</strong> Av. Roca y Coronado 
                    </td>
                    <td>
                        <strong>CITE:</strong> 01/19
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div class="car-items">
            <table>
                <thead class="text-center">
                    <tr>
                        <td colspan="6"><h1>PRO FORMA</h1></td>
                    </tr>
                    <tr>
                        <td width="8%">Item</td>
                        <td width="8%">Cantidad</td>
                        <td width="10%">Dimensión</td>
                        <td width="50%">Descripción</td>
                        <td width="10%">P/U</td>
                        <td width="14%">Total (Bs.)</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="8%" rowspan="2" class="text-content">1</td>
                        <td width="8%" rowspan="2" class="text-content">3</td>
                        <td width="10%" rowspan="2" class="text-content">12 x 6</td>
                        <td width="50%" class="text-title">Letrero Luminoso</td>
                        <td width="10%" rowspan="2" class="text-content">2000</td>
                        <td width="14%" rowspan="2" class="text-content">6000</td>
                    </tr>
                    <tr>
                        <td width="50%" class="text-content">
                            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se).
                            <div class="thubnail">
                                <img src="https://app.imagenpublicidad.com.bo/img/Displays/gal-13184029-MESA.jpg" alt="Desmond">
                            </div>
                            <div class="thubnail">
                                <img src="https://app.imagenpublicidad.com.bo/img/Displays/gal-13184026-BACKPANEL.jpg" alt="Desmond">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="8%" rowspan="2" class="text-content">1</td>
                        <td width="8%" rowspan="2" class="text-content">3</td>
                        <td width="10%" rowspan="2" class="text-content">12 x 6</td>
                        <td width="50%" class="text-title">Letrero Luminoso</td>
                        <td width="10%" rowspan="2" class="text-content">2000</td>
                        <td width="14%" rowspan="2" class="text-content">6000</td>
                    </tr>
                    <tr>
                        <td width="50%" class="text-content">
                            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se).
                            <div class="thubnail">
                                <img src="https://app.imagenpublicidad.com.bo/img/Displays/gal-13184029-MESA.jpg" alt="Desmond">
                            </div>
                            <div class="thubnail">
                                <img src="https://app.imagenpublicidad.com.bo/img/Displays/gal-13184026-BACKPANEL.jpg" alt="Desmond">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="8%" rowspan="2" class="text-content">1</td>
                        <td width="8%" rowspan="2" class="text-content">3</td>
                        <td width="10%" rowspan="2" class="text-content">12 x 6</td>
                        <td width="50%" class="text-title">Letrero Luminoso</td>
                        <td width="10%" rowspan="2" class="text-content">2000</td>
                        <td width="14%" rowspan="2" class="text-content">6000</td>
                    </tr>
                    <tr>
                        <td width="50%" class="text-content">
                            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se).
                            <div class="thubnail">
                                <img src="https://app.imagenpublicidad.com.bo/img/Displays/gal-13184029-MESA.jpg" alt="Desmond">
                            </div>
                            <div class="thubnail">
                                <img src="https://app.imagenpublicidad.com.bo/img/Displays/gal-13184026-BACKPANEL.jpg" alt="Desmond">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>