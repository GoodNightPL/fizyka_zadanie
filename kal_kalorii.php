<?php
$conn = mysqli_connect('54.38.50.59', 'www10808_fizyka_zadanie', 'PDvEgkrEdRDWXvRglkPe', 'www10808_fizyka_zadanie');

if (!$conn) {
    echo 'MySQL connection error: ' . mysqli_connect_error();
}

$result_healthy = mysqli_query($conn, 'SELECT * FROM food WHERE healthy = 1 ORDER BY name ASC');
$result_healthy = mysqli_fetch_all($result_healthy, MYSQLI_ASSOC);

$result_bad = mysqli_query($conn, 'SELECT * FROM food WHERE healthy = 0 ORDER BY name ASC');
$result_bad = mysqli_fetch_all($result_bad, MYSQLI_ASSOC);

$result_xD = mysqli_query($conn, 'SELECT * FROM food');
$result_xD = mysqli_fetch_all($result_xD, MYSQLI_ASSOC);

mysqli_close($conn);
?>

<script>

      var attrs = {};
      var selected;
      var ilosc;
      function food(id, healthy) {
        ilosc = document.getElementById('ilosc').value;
        if(ilosc) {
            
        if (!attrs[id]) {
            if(selected && selected != id) {
                document.getElementById(selected).style.borderWidth = '0px';
            }
            document.getElementById(id).style.borderStyle = 'solid';
            document.getElementById(id).style.borderWidth = '2px';
            document.getElementById(id).style.borderColor = '#787878';
            selected=id;
            attrs[id] = true;

            window.location.href =  'index.php?id=' + id + '&g=' + ilosc;
        } else {
            document.getElementById(id).style.borderWidth = '0px';
            attrs[id] = false;
        }
    }
    else {alert("Wpisz liczbę gramów!");}
    }
</script>



<div class="calc">
    <div class="left_side_calc">
        <p class="desc">Wybierz niezdrowy produkt:</p>
        <div class="box">
        <?php 
        for ($i=0; $i < count($result_bad); $i++) { ?>
        <?php echo '<div id="' . $result_bad[$i]['id'] . '" class="food_bad" onclick="food('. $result_bad[$i]['id'] .', false)" data-value="' . $result_bad[$i]['id'] . '">'; ?>
            
                <?php echo '<img class="food_pic" src="'. $result_bad[$i]['img'] .'"></img>'; ?> 
                <?php echo '<span>' . $result_bad[$i]['name'] . ' ' . $result_bad[$i]['calories'] . 'kcal w '. $result_bad[$i]['grams'] .'g </span>'; ?> 
            
        </div>
        <?php } ?> 
        </div>
    </div>
    
    <div class="center_calc">
        <div class="cen_div">
            <!--Searchbar-->
            <p>Podaj wagę produktu (w gramach):</p>
            <input type="text" name="Waga" id="ilosc">
            <!-- <button id="porownaj">Porównaj</button> -->
        </div>
    </div>

    <div class="right_side_calc">
    <p class="desc">Zdrowe produkty:</p>
    <div class="box">
        <?php 
        for ($i=0; $i < count($result_healthy); $i++) { ?>
        <div class="food_bad">
                <?php echo '<img class="food_pic" src="'. $result_healthy[$i]['img'] .'"></img>'; ?> 
                <?php if (isset($GLOBALS["id"])) {
                $res = ($result_xD[$GLOBALS["id"]]['calories'] * ($GLOBALS["g"] / 100)) / $result_healthy[$i]['calories'];
                        echo '<span>' . $result_healthy[$i]['name'] . ': ' . (floor($res) * $result_healthy[$i]['calories']) . 'g </span>'; 
                    } else {
                        echo '<span>' . $result_healthy[$i]['name'] . ' ' . $result_healthy[$i]['calories'] . 'kcal w '. $result_healthy[$i]['grams'] .'g </span>'; 
                    }
                ?> 
            </div>
        <?php } ?> 
    </div>
    </div>
</div>