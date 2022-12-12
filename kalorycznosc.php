<script>
    function kalorie() {
        var gender = document.getElementById('ihgi').elements['plec'].value;
        var waga = document.getElementById('waga').value;
        var wzrost = document.getElementById('wzrost').value;
        var wiek = document.getElementById('wiek').value;
        var select = document.getElementById('aktywność');
        var aktywnosc = select.options[select.selectedIndex].value
        if(gender && waga && wzrost && wiek && aktywnosc) {
        if (gender == "kobieta") {
            result = "Twój wynik to: " + Math.floor((655 + (9.6 * waga) + (1.8 * wzrost) - (4.7 * wiek)) * aktywnosc) + " kcal";
        } else {
            result = "Twój wynik to: " + Math.floor((66 + (13.7 * waga) + (5 * wzrost) - (6.8 * wiek)) * aktywnosc) + " kcal";
        }

        document.getElementById("wynik").innerHTML = result;
        } else {alert("Wypełnij wszystkie pola!");}
    }
</script>


<article>
<div id="kalorycznosc">
    <form id="ihgi" action="">
        <div class="plec_div kekw">
            <p>Płeć: </p>
            <label for="women">Kobieta</label>
            <input type="radio" id="women" name="plec" value="kobieta">
            <label for="men">Mężczyzna</label>
            <input type="radio" id="men" name="plec" value="mezczyzna">
        </div>



        <div class="waga_div kekw">
            <label for="waga">Waga:</label>
            <input type="text" id="waga" style="width: 150px" required><span> kg</span>
        </div>


        <div class="wzrost_div kekw">
            <label for="wzrost">Wzrost:</label>
            <input type="text" id="wzrost" style="width: 150px" required><span> cm</span>
        </div>
        

        <div class="wiek_div kekw">
            <label for="wiek">Wiek:</label>
            <input type="text" id="wiek" style="width: 150px" required><span> lat</span>
        </div>
       


        <div class="aktywnosc_div kekw">
            <label for="aktywność">Aktywność fizyczna:</label>
            <select name="aktywność" id="aktywność">
            <option value="1.2">Znikoma(brak ćwiczeń, praca siedząca, szkoła)</option>
            <option value="1.375">Bardzo mała(ćwiczenia raz na tydzień, praca lekka)</option>
            <option value="1.55">Umiarkowana(ćwiczenia 2 razy w tygodniu – średniej intensywności)</option>
            <option value="1.725">Duża(dość ciężki trening kilka razy w tygodniu)</option>
            <option value="1.9">Bardzo duża(przynajmniej 4 ciężkie treningi w tygodniu, praca fizyczna)</option>
            </select>
        </div>



    </form> 
    <button id="obliczanie" onclick="kalorie()" >Oblicz</button>
<div class="wyniki">
    <center><span id='wynik'></span></center>
</div>
</div>
</article>

<!-- 
    Dla kobiet:

BMR = 655 + (9,6 × waga w kg) + (1,8 × wysokość w cm) - (4,7 × wiek w latach) x aktywność

Dla mężczyzn:

BMR = 66 + (13,7 × waga w kg) + (5 × wysokość w cm) - (6,8 × wiek w latach) x aktywność


<script>
    const form = document.querySelector('form');
    const result = document.querySelector('#result');

    form.addEventListener('submit', event => {
      event.preventDefault();

      const weight = form.weight.value;
      const height = form.height.value;
      const gender = form.gender.value;
      const age = form.age.value;
      const activity = form.activity.value;

      let bmr = 0;
      if (gender === 'male') {
        bmr = (66 + (13.7 * weight) + (5 * height) - (6.8 * age))* activity;
      } else if (gender === 'female') {
        bmr = (655 + (9.6 * weight) + (1.8 * height) - (4.7 * age)) * activity;
      }

      result.textContent = bmr.toFixed(2);
    });
  </script>

-->