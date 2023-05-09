<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard

    </title>

        <style>
            body {
            font-family: "Lato", sans-serif;
            background: linear-gradient(to right, #76BDF0,#E496BC);
            
            }

            .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 0.863);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            }

            .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
            }

            .sidenav a:hover {
            color: #f1f1f1;
            }

            .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            }

            @media screen and (max-height: 450px) 
            {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            }

            h1 {
                color: black;
                margin-left: 20px;
            }

            h3{
                color: black;
                margin-left: 20px;
            }
            .keluar{
                margin-left: 1000px;
                background-color: transparent;
                border: transparent;
            }
            h6{
                margin-left: 880px;
                margin-top: 0px;
            }
            .konfig{
                margin-left: 20px;
                background-color: transparent;
                border: transparent;
            }
            .perangkat{
                margin-left: 270px;
                margin-top: 40px;
            }
            .non{
                margin-left: 50px;
            }
            .total{
                margin-left: 50px;
            }
            .burger{
                margin-left: 20px;
            }
            
            th, td {
            border: 1px solid black;
            }
            .taktif{
                margin-left:270px;
                margin-right:240px;
                border : 1px solid black;
                float: left;
                background-color: white;
            }
            .tnon{
                margin-top: 50px;
                border : 1px solid black;
                background-color: white;
            }
            .tname{
                font-weight: bold;
                text-align: center;
            }
        </style>

    </head>
    <body>

        <div class="bar" id="bar">
            <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <h1> MQTT </h1>
            <h3>- Dashboard </h3><br>
            <button style="font-size:20px;cursor:pointer" class="konfig"><i class="fa fa-gears"> Konfigurasi </i></button>
            </div>
        </div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="burger">&#9776;</span>
    <button style="font-size:20px;cursor:pointer" class="keluar"><i class="fa fa-sign-out"></i> Logout </button>

    <div class="perangkat">
        <button style="font-size:25px;cursor:pointer" class="aktif"><i class="fa fa-users">
         perangkat aktif <br> 7 </i></button>

         <button style="font-size:25px;cursor:pointer" class="total"><i class="fa fa-users">
         jumlah perangkat <br> 15 </i></button>

         <button style="font-size:25px;cursor:pointer" class="non"><i class="fa fa-users">
         perangkat non-aktif <br> 8 </i></button>
    </div>


    <div class="tabel1">
        <table style="width:20%" class="taktif">
            <tr style="background-color: red">
                <td colspan="3" class="tname">perangkat aktif</td>
            </tr>
            <tr>
                <td> Perangkat </td>
                <td> Topic </td>
            </tr>
            <tr>
                <td> Device-1 </td>
                <td> weather </td>
            </tr>
            <tr>
                <td> Device-2 </td>
                <td> Temperature </td>
            </tr>
            <tr>
                <td> Device-3 </td>
                <td> Hypertext </td>
            </tr></table>

        <table style="width:20%;"  class="tnon">
            <tr style="background-color: yellow">
                <td colspan="3" class="tname">perangkat non-aktif</td>
            </tr>
                <tr> 
                    <td> Perangkat </td>
                    <td> Topic </td>
                </tr>
                <tr>
                    <td> Device-1 </td>
                    <td> weather </td>
                </tr>
                <tr>
                    <td> Device-2 </td>
                    <td> Temperature </td>
                </tr>
                <tr>
                    <td> Device-3 </td>
                    <td> Hypertext </td>
                </tr></table>
    
    </div>
    

        <script>
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            }
        </script>
            
    </body>
</html>
