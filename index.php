<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>calculator ukk 2024</title>
<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
<style>
   
   /*untuk jenis tulisan, warna tulisan dan 
   sudut lengkungan */
    * {
        font-family: 'Inconsolata', monospace;
        color: black;
        border-radius:5px;
    }

    /* digunakan untuk 
        memberikan ukuran 
        gambar latar belakang */

    body {
        background-image: url("kucing.jpeg");
    }

    /* untuk mengatur ukuran lebar, mengatur warna 
    latar belakang dan mengatur jarak teks pada elemen */ 
       
    .container {
        width: 320px;
        background-color: #ff3300;
        margin: 120px auto;

    /* untuk mengatur lebar dan warna border pada
       tabel */
    }
    table {
        width: 100%;
        border-color: #ff3300;
    }

    /*untuk mengatur lebar pada tabel data (sel) 
    */
    td {
        width: 25%;
     }

    /* untuk mengatur lebar, tinggi, 
    ukuran tulisan, warna latar belakang
    dan bingkai pada tombol kalkulator */

    button {
        width: 100%;
        height: 70px;
        font-size: 24px;
        background-color: #ffff66;
        border: none;
    }
    /* untuk mengatur tinggi, ukuran tulisan, posisi 
    tengah secara horizontal, posisi teks, posisi ruang
    dan warna latar belakang */

    #inputLabel {
        height: 120px;
        font-size: 40px;
        vertical-align: bottom;
        text-align: right;
        padding-right: 16px;
        background-color: orangered;
    }
</style>
</head>
<body>


<div class="container">
    <!-- tag tabel, baris, dan kolom -->
    <table border="1" cellspacing="0">
        <tr>
            <td colspan="4" id="inputLabel">0</td>
        </tr>
        <tr>
            <td colspan="3"><button onclick="pushBtn(this);">AC</button></td>
            <td><button onclick="pushBtn(this);">/</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">7</button></td>
            <td><button onclick="pushBtn(this);">8</button></td>
            <td><button onclick="pushBtn(this);">9</button></td>
            <td><button onclick="pushBtn(this);">*</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">4</button></td>
            <td><button onclick="pushBtn(this);">5</button></td>
            <td><button onclick="pushBtn(this);">6</button></td>
            <td><button onclick="pushBtn(this);">-</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">1</button></td>
            <td><button onclick="pushBtn(this);">2</button></td>
            <td><button onclick="pushBtn(this);">3</button></td>
            <td><button onclick="pushBtn(this);">+</button></td>
        </tr>
        <tr>
            <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
            <td><button onclick="pushBtn(this);">.</button></td>
            <td><button onclick="pushBtn(this);">=</button></td>
        </tr>
    </table>

</div>
 
<script>
    var inputLabel = document.getElementById('inputLabel');
     
    function pushBtn(obj) {
         
        var pushed = obj.innerHTML;
         
        if (pushed == '=') {
            // Calculate
            inputLabel.innerHTML = eval(inputLabel.innerHTML);
             
        } else if (pushed == 'AC') {
            // All Clear
            inputLabel.innerHTML = '0';
             
        } else {
            if (inputLabel.innerHTML == '0') {
                inputLabel.innerHTML = pushed;
                 
            } else {
                inputLabel.innerHTML += pushed;   
            }
        }
    }
</script>
</body>
</html