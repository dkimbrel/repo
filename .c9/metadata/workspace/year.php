{"filter":false,"title":"year.php","tooltip":"/year.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"remove","lines":["t"],"id":41},{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"remove","lines":["o"]}],[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"remove","lines":["g"],"id":42}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"remove","lines":[" "],"id":43},{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["u"]}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"remove","lines":["o"],"id":44},{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"remove","lines":["y"]}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"remove","lines":[">"],"id":45}],[{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"remove","lines":["1"],"id":46}],[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"remove","lines":["h"],"id":47}],[{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"remove","lines":["<"],"id":48}],[{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["<"],"id":49}],[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":[">"],"id":50}],[{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["b"],"id":51}],[{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["o"],"id":52}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["d"],"id":53}],[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["y"],"id":54}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["<"],"id":55}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":[">"],"id":56}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["/"],"id":57}],[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["b"],"id":58}],[{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"insert","lines":["o"],"id":59}],[{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"insert","lines":["d"],"id":60}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":["y"],"id":61}],[{"start":{"row":2,"column":10},"end":{"row":4,"column":4},"action":"insert","lines":["","        ","    "],"id":62}],[{"start":{"row":3,"column":8},"end":{"row":30,"column":0},"action":"insert","lines":["<form action = \".\" method = \"post\">","<?php","$servername = \"localhost\";","$username = \"siteuser\";","$password = \"mypass\";","$dbname = \"Olympics\";","$conn = new mysqli($servername, $username, $password, $dbname);","// Check connection","if ($conn->connect_error) {","     die(\"Connection failed: \" . $conn->connect_error);","}","","  $sql = \"SELECT ID, year FROM Olympiads\";","        $result = $conn->query($sql);","        echo \"<select name='categoryName'>\";","        while ($row = $result -> fetch_assoc()) {","          echo '<option value=\"'.$row[\"ID\"].'\">'.$row[\"year\"].'</option>';","        }","        echo \"</select>\";","        ","","","","$conn->close();","?>","<input type = \"submit\" text = \"Submit\" />","</form>",""],"id":63}],[{"start":{"row":30,"column":0},"end":{"row":72,"column":2},"action":"insert","lines":["<?php","$servername = \"localhost\";","$username = \"siteuser\";","$password = \"mypass\";","$dbname = \"Olympics\";","$conn = new mysqli($servername, $username, $password, $dbname);","// Check connection","if ($conn->connect_error) {","     die(\"Connection failed: \" . $conn->connect_error);","}","",""," if($_POST['categoryName'])"," $categoryID=$_POST['categoryName'];","",""," if(isset($categoryID))","{","   // $categoryID=$_POST['categoryName'];","    $sql2 = \"SELECT FirstName, LastName, YearID FROM Winners\";","    $result2 = $conn -> query($sql2);","","    echo \"<table>\";","        echo \"<tr>\";","         echo\"Olympic Atheletes by Year: \";","         echo\"</tr>\";","         echo \"<tr>\";","        while ($row2 = $result2 -> fetch_assoc()){","            if ($categoryID == $row2[\"YearID\"]){","                echo \"<td>\";","                echo $row2[\"FirstName\"];","                echo \" \";","                echo $row2[\"LastName\"];","                echo \"</td>\";","         }","        }","        echo \"</tr>\";","    echo \"</table>\";","  $conn -> close(); ","}","","","?>"],"id":64}],[{"start":{"row":3,"column":24},"end":{"row":3,"column":25},"action":"remove","lines":["."],"id":65}],[{"start":{"row":3,"column":24},"end":{"row":3,"column":25},"action":"insert","lines":["y"],"id":66}],[{"start":{"row":3,"column":25},"end":{"row":3,"column":26},"action":"insert","lines":["e"],"id":67}],[{"start":{"row":3,"column":26},"end":{"row":3,"column":27},"action":"insert","lines":["a"],"id":68}],[{"start":{"row":3,"column":27},"end":{"row":3,"column":28},"action":"insert","lines":["r"],"id":69}],[{"start":{"row":3,"column":28},"end":{"row":3,"column":29},"action":"insert","lines":["."],"id":70}],[{"start":{"row":3,"column":29},"end":{"row":3,"column":30},"action":"insert","lines":["p"],"id":71}],[{"start":{"row":3,"column":30},"end":{"row":3,"column":31},"action":"insert","lines":["h"],"id":72}],[{"start":{"row":3,"column":31},"end":{"row":3,"column":32},"action":"insert","lines":["p"],"id":73}],[{"start":{"row":1,"column":6},"end":{"row":2,"column":4},"action":"insert","lines":["","    "],"id":74}],[{"start":{"row":2,"column":4},"end":{"row":9,"column":9},"action":"insert","lines":["        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>","    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">","   <ul>","       <li><a href=\"year.php\">Year</a></li>","       <li><a href=\"country.php\">Country</a></li>","       <li><a href=\"addCountry.php\">Add Country</a></li>","       <li><a href=\"addYear.php\">Add city and year</a></li>","   </ul> "],"id":75}],[{"start":{"row":4,"column":1},"end":{"row":9,"column":8},"action":"remove","lines":["  <ul>","       <li><a href=\"year.php\">Year</a></li>","       <li><a href=\"country.php\">Country</a></li>","       <li><a href=\"addCountry.php\">Add Country</a></li>","       <li><a href=\"addYear.php\">Add city and year</a></li>","   </ul>"],"id":76},{"start":{"row":4,"column":1},"end":{"row":17,"column":6},"action":"insert","lines":["    <nav class=\"navbar navbar-default\">","  <div class=\"container-fluid\">","    <div class=\"navbar-header\">","      <a class=\"navbar-brand\" href=\"#\">Olympics Database</a>","    </div>","    <ul class=\"nav navbar-nav\">","      <li class=\"active\"><a href=\"index.php\">Home</a></li>","        <li><a href=\"year.php\">Year</a></li>","        <li><a href=\"country.php\">Country</a></li>","        <li><a href=\"addCountry.php\">Add Country</a></li>","        <li><a href=\"addYear.php\">Add city and year</a></li>","    </ul>","  </div>","</nav>"]}],[{"start":{"row":44,"column":0},"end":{"row":44,"column":41},"action":"remove","lines":["<input type = \"submit\" text = \"Submit\" />"],"id":77},{"start":{"row":44,"column":0},"end":{"row":46,"column":13},"action":"insert","lines":["<button type=\"submit\" class=\"btn btn-info\" style = \"margin-top: 20%;\">","      <span class=\"glyphicon glyphicon-search\"></span> Search","    </button>"]}],[{"start":{"row":44,"column":65},"end":{"row":44,"column":66},"action":"remove","lines":["0"],"id":78}],[{"start":{"row":44,"column":64},"end":{"row":44,"column":65},"action":"remove","lines":["2"],"id":79}],[{"start":{"row":44,"column":64},"end":{"row":44,"column":65},"action":"insert","lines":["5"],"id":80}],[{"start":{"row":44,"column":65},"end":{"row":44,"column":66},"action":"insert","lines":["0"],"id":81}],[{"start":{"row":44,"column":43},"end":{"row":44,"column":67},"action":"remove","lines":["style = \"margin-top: 50%"],"id":82}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":[" "],"id":83}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["c"],"id":84}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["l"],"id":85}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["a"],"id":86}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["s"],"id":87}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["s"],"id":88}],[{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["="],"id":89}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":20},"action":"insert","lines":["\"\""],"id":90}],[{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["a"],"id":91}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["c"],"id":92}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["t"],"id":93}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["i"],"id":94}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["v"],"id":95}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["e"],"id":96}],[{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"remove","lines":["\""],"id":97}],[{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"remove","lines":["e"],"id":98}],[{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"remove","lines":["v"],"id":99}],[{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"remove","lines":["i"],"id":100}],[{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"remove","lines":["t"],"id":101}],[{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"remove","lines":["c"],"id":102}],[{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"remove","lines":["a"],"id":103}],[{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"remove","lines":["\""],"id":104}],[{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"remove","lines":["="],"id":105}],[{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"remove","lines":["s"],"id":106}],[{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"remove","lines":["s"],"id":107}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"remove","lines":["a"],"id":108}],[{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"remove","lines":["l"],"id":109}],[{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"remove","lines":["c"],"id":110}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"remove","lines":[" "],"id":111}],[{"start":{"row":91,"column":3},"end":{"row":91,"column":4},"action":"insert","lines":["\""],"id":128}],[{"start":{"row":91,"column":3},"end":{"row":91,"column":4},"action":"remove","lines":["\""],"id":129}],[{"start":{"row":91,"column":3},"end":{"row":92,"column":0},"action":"insert","lines":["",""],"id":130},{"start":{"row":92,"column":0},"end":{"row":92,"column":3},"action":"insert","lines":["   "]}],[{"start":{"row":92,"column":2},"end":{"row":92,"column":3},"action":"remove","lines":[" "],"id":131}],[{"start":{"row":92,"column":1},"end":{"row":92,"column":2},"action":"remove","lines":[" "],"id":132}],[{"start":{"row":44,"column":44},"end":{"row":44,"column":45},"action":"remove","lines":["\""],"id":133}],[{"start":{"row":44,"column":43},"end":{"row":44,"column":44},"action":"remove","lines":[";"],"id":134}],[{"start":{"row":44,"column":42},"end":{"row":44,"column":43},"action":"remove","lines":[" "],"id":135}],[{"start":{"row":91,"column":1},"end":{"row":91,"column":2},"action":"insert","lines":["<"],"id":136}],[{"start":{"row":91,"column":2},"end":{"row":91,"column":3},"action":"insert","lines":[">"],"id":137}],[{"start":{"row":91,"column":2},"end":{"row":91,"column":3},"action":"insert","lines":["/"],"id":138}],[{"start":{"row":91,"column":3},"end":{"row":91,"column":4},"action":"insert","lines":["d"],"id":139}],[{"start":{"row":91,"column":4},"end":{"row":91,"column":5},"action":"insert","lines":["i"],"id":140}],[{"start":{"row":91,"column":5},"end":{"row":91,"column":6},"action":"insert","lines":["v"],"id":141}],[{"start":{"row":91,"column":8},"end":{"row":91,"column":9},"action":"remove","lines":[" "],"id":142},{"start":{"row":91,"column":8},"end":{"row":92,"column":0},"action":"insert","lines":["",""]},{"start":{"row":92,"column":0},"end":{"row":92,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":92,"column":1},"end":{"row":92,"column":2},"action":"insert","lines":["<"],"id":143}],[{"start":{"row":92,"column":2},"end":{"row":92,"column":3},"action":"insert","lines":[">"],"id":144}],[{"start":{"row":92,"column":2},"end":{"row":92,"column":3},"action":"insert","lines":["/"],"id":145}],[{"start":{"row":92,"column":3},"end":{"row":92,"column":4},"action":"insert","lines":["d"],"id":146}],[{"start":{"row":92,"column":4},"end":{"row":92,"column":5},"action":"insert","lines":["i"],"id":147}],[{"start":{"row":92,"column":5},"end":{"row":92,"column":6},"action":"insert","lines":["v"],"id":148}],[{"start":{"row":92,"column":7},"end":{"row":93,"column":0},"action":"insert","lines":["",""],"id":149},{"start":{"row":93,"column":0},"end":{"row":93,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":93,"column":1},"end":{"row":93,"column":2},"action":"insert","lines":["<"],"id":150}],[{"start":{"row":93,"column":2},"end":{"row":93,"column":3},"action":"insert","lines":[">"],"id":151}],[{"start":{"row":93,"column":2},"end":{"row":93,"column":3},"action":"insert","lines":["/"],"id":152}],[{"start":{"row":93,"column":3},"end":{"row":93,"column":4},"action":"insert","lines":["d"],"id":153}],[{"start":{"row":93,"column":4},"end":{"row":93,"column":5},"action":"insert","lines":["i"],"id":154}],[{"start":{"row":93,"column":5},"end":{"row":93,"column":6},"action":"insert","lines":["v"],"id":155}],[{"start":{"row":18,"column":10},"end":{"row":19,"column":8},"action":"insert","lines":["","        "],"id":156}],[{"start":{"row":19,"column":8},"end":{"row":21,"column":27},"action":"insert","lines":[" <div class=\"container\">","  <div class=\"row\">","    <div class=\"col-sm-12\">"],"id":157}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":27},"end":{"row":21,"column":27},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1476823250740,"hash":"ee9b6702b1554587b1da6c0c4056f1c09dd1c6c5"}