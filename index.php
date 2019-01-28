<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".nappi").click(function(){
            var arvo = parseInt($(this).val());
            //Tähän laitetaan pinninumerot järjestyksessä: 1 ON, 1 OFF, 2 ON, 2 OFF...
            var pin = [24,23,24,23,24,23,24,23];
            var pinnro;
            console.log("Nappia painettiin");
            if($('#nappi'+arvo).is(":checked") == true){       //Tarkastatetaan kummassako asennossa nappi on
                console.log("True IF -lauseke");
                pinnro = pin[arvo];
                nappi(pinnro);
            } else if($('#nappi'+arvo).is(":checked") == false){
                console.log("False IF -lauseke" + arvo);
                arvo += 1;                                     
                pinnro = pin[arvo];
                console.log(arvo + " ja " + pinnro);
                nappi(pinnro);
            }

            //Tämä funktio suoritetaan, kun ylläolevat iffit on juossu läpi
            function nappi(pinnro){
                var a = new XMLHttpRequest();
                console.log(pinnro);
                a.open("GET", "pin.php?q=" + pinnro);
                a.onreadystatechange=function(){
                    if(a.readyState == 4){
                        if(a.status == 200) {
                            console.log("Molemmat iffit meni läpi");
                        } else alert("HTTP ERROR");
                    }
                }
            console.log(pinnro + " - On menossa PHP:hen");
            a.send();
        }
    });
    });
</script>

    <title>Sepon valojen napsuttelu softa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div id="mainframe">
        <div id="otsikko"><h1>Sepon valojen ohjaussysteemi ver. 0.11</h1></div>
        <div class="nappilaatikko">
            NAPPI 1<br>
            <label class="switch">
            <input type="checkbox" class="nappi" id="nappi0" value="0">
            <span class="slider round"></span>
            </label>
        </div>
        <div class="nappilaatikko">
            NAPPI 2<br>
            <label class="switch">
            <input type="checkbox" class="nappi" id="nappi2" value="2">
            <span class="slider round"></span>
            </label>
        </div>
        <div class="nappilaatikko">
            NAPPI 3<br>
            <label class="switch">
            <input type="checkbox" class="nappi" id="nappi4" value="4">
            <span class="slider round"></span>
            </label>
        </div>
        <div class="nappilaatikko">
            NAPPI 4<br>
            <label class="switch">
            <input type="checkbox" class="nappi" id="nappi6" value="6">
            <span class="slider round"></span>
            </label>
        </div>
    </div>
</body>
</html>

