
<!DOCTYPE html>
<html>
<head>
<title>Sistemas Embarcados - Teste Json Ajax</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
        #main {
            margin-left: 50px;
            width: 600px;
            height: 200px;
            border: 1px solid black;
            display: -webkit-flex;
            display: flex;
            color: white;
        }
         
        h1 {
            color: #009900;
            font-size: 42px;
            margin-left: 50px;
        }
         
        h3 {
            margin-top: -20px;
            margin-left: 50px;
        }
         
        #main div {
            flex-grow: 1;
            flex-shrink: 1;
            flex-basis: 100px;
        }
         
        <!-- shrinking the 2nd div compare to others -->
        #main div:nth-of-type(2) {
            flex-shrink: 4;
        }

        .container2 {
            margin-left: 50px;
  width: 600px;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  background: #e2eaf4;
  padding: 10px;
}

.child {
  display: inline-block;
  font-family: "Open Sans", Arial;
  font-size: 20px;
  color: #FFF;
  text-align: center;
  background: #3794fe;
  border-radius: 6px;
  padding: 20px;
  margin: 12px;
}




.child:first-child {
  width: 80%;
}

.child:not(:first-child) {
  flex: 1;
}

    </style>
<script>
setInterval(function() {
  // Call a function repetatively with 2 Second interval
  getData();
}, 10000); //2000mSeconds update rate

function getData() {

$.getJSON( "https://api.coindesk.com/v1/bpi/currentprice/BRL.json", function( data ) {
  var items = [];
 // console.log(data.time.updated);  // imprime dados no console

  $(".bitcoinreal").html(data.bpi.BRL.rate_float);
  $(".bitcoindolar").html(data.bpi.USD.rate_float);
  $(".bitcoindate").html(data.time.updated);

});

$.getJSON( "temperaturasendjson.php", function( data2 ) {
  var items = [];
  // console.log(data2.Estacao.temperatura);
 $(".temperatura").html( data2.Estacao.temperatura );
 $(".humidade").html( data2.Estacao.humidade );
});


}
</script>
</head>
<body>

<center><h1>Bitcoin</h1></center><br>
 <div class="container2">
 <div class="child"> <h2><ul class="bitcoinreal"> </ul> </h2><BR><h3>R$</h3></div>
 <div class="child"> <h2><ul class="bitcoindolar"> </ul> </h2><BR><h3>U$</h3></div>
  <div class="child"> <h2><ul class="bitcoindate"> </ul></h2><BR><h3>Atualização</h3></div></div>
  </div>
 <P><BR>
 <center><h1>Estação</h1></center><br>
  <div class="container2">
 <div class="child"> <h2><ul class="temperatura"> </ul> </h2><BR><h3>°C</h3></div>
 <div class="child"> <h2><ul class="humidade"> </ul> </h2><BR><h3>%</h3></div>
  </div>

</body>
</html>
