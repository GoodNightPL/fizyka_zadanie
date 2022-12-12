<script>
    function bmi() {
        var gender1 = document.getElementById('dane').elements['gender'].value;
        var waga1 = document.getElementById('waga1').value;
        var wzrost1 = document.getElementById('wzrost1').value;
        var wiek1 = document.getElementById('wiek1').value;
        if(gender1 && waga1 && wzrost1 && wiek1) {
        if (gender1 == "kobieta") {
            result1 = "Twoje BMI wynosi: " + (waga1 / ((wzrost1/100) * (wzrost1/100))).toFixed(2);
        } else {
            result1 = "Twoje BMI wynosi: " + (waga1 / ((wzrost1/100) * (wzrost1/100))).toFixed(2);
        }

        document.getElementById("wynik1").innerHTML = result1;
        }
        else {alert("Wypełnij wszystkie pola!");}
    }
</script>

<!-- BMI = waga / (wzrost * wzrost) -->

<article>
<div id="kalorycznosc">
    <form id="dane" action="">
        <div class="plec_div kekw">
            <p>Płeć: </p>
            <label for="women">Kobieta</label>
            <input type="radio" id="women" name="gender" value="kobieta">
            <label for="men">Mężczyzna</label>
            <input type="radio" id="men" name="gender" value="mezczyzna">
        </div>



        <div class="waga_div kekw">
            <label for="waga1">Waga:</label>
            <input type="text" id="waga1" style="width: 150px" required><span> kg</span>
        </div>


        <div class="wzrost_div kekw">
            <label for="wzrost1">Wzrost:</label>
            <input type="text" id="wzrost1" style="width: 150px" required><span> cm</span>
        </div>
        

        <div class="wiek_div kekw">
            <label for="wiek1">Wiek:</label>
            <input type="text" id="wiek1" style="width: 150px" required><span> lat</span>
        </div>

    </form> 
    <button id="obliczanie" onclick="bmi()" >Oblicz</button>
<div class="wyniki">
    <center><span id='wynik1'></span></center>

    <ul>
        <li>mniej niż 16 – wygłodzenie</li>
        <li>16-16,99 – wychudzenie</li>
        <li>17-18,49 – niedowaga</li>
        <li>18,5-24,99 – wartość prawidłowa</li>
        <li>25-29,99 – nadwaga</li>
        <li>30-34,99 – otyłość I stopnia</li>
        <li>35-39,99 – otyłość II stopnia</li>
        <li>powyżej 40 – skrajna otyłość</li>
    </ul>
</div>
</div>
</article>