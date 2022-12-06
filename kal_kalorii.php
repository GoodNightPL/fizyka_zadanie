<?php
$conn = mysqli_connect('host', 'user', 'password', 'db');

if (!$conn) {
    echo 'MySQL connection error: ' . mysqli_connect_error();
}

$result_healthy = mysqli_query($conn, 'SELECT * FROM food WHERE healthy = 1 ORDER BY name ASC');
$result_healthy = mysqli_fetch_all($result_healthy, MYSQLI_ASSOC);

$result_bad = mysqli_query($conn, 'SELECT * FROM food WHERE healthy = 0 ORDER BY name ASC');
$result_bad = mysqli_fetch_all($result_bad, MYSQLI_ASSOC);

mysqli_close($conn);
?>

<div class="calc">
    <div class="left_side_calc">
        <p class="desc">Wybierz niezdrowy produkt:</p>
        <div class="box">
        <?php 
        for ($i=0; $i < count($result_bad); $i++) { ?>
        <div class="food_bad">
           <?php echo '<img class="food_pic" src="'. $result_bad[$i]['img'] .'"></img>'; ?> 
           <?php echo '<span>' . $result_bad[$i]['name'] . ' ' . $result_bad[$i]['calories'] . 'kcal w '. $result_bad[$i]['grams'] .'g </span>'; ?> 
        </div>
        <?php } ?> 
        </div>
    </div>
    
    <div class="center_calc">
        <div class="cen_div">
            <!--Searchbar-->

            <button>Potwierdź</button>
        </div>
    </div>

    <div class="right_side_calc">
    <div class="box">
        <?php 
        for ($i=0; $i < count($result_healthy); $i++) { ?>
        <div class="food_bad">
           <?php echo '<img class="food_pic" src="'. $result_healthy[$i]['img'] .'"></img>'; ?> 
           <?php echo '<span>' . $result_healthy[$i]['name'] . ' ' . $result_healthy[$i]['calories'] . 'kcal w '. $result_healthy[$i]['grams'] .'g </span>'; ?> 
        </div>
        <?php } ?> 
    </div>
    </div>
</div>