<div class="pattern-lab__forms-section">

    <form>
        <label for="name">Name:</label>
        <input id="name" type="text" name="textfield">
    </form>

</div>

<div class="pattern-lab__forms-section">

    <form>
        <label for="address">Enter your address:</label>
        <textarea id="address" name="addresstext"></textarea>
    </form>

</div>


<div class="pattern-lab__forms-section">

    <fieldset>
        <legend>Select your pizza toppings:</legend>
        <input id="ham" type="checkbox" name="toppings" value="ham">
        <label for="ham">Ham</label>
        <input id="pepperoni" type="checkbox" name="toppings" value="pepperoni">
        <label for="pepperoni">Pepperoni</label>
        <input id="mushrooms" type="checkbox" name="toppings" value="mushrooms">
        <label for="mushrooms">Mushrooms</label>
        <input id="olives" type="checkbox" name="toppings" value="olives">
        <label for="olives">Olives</label>
    </fieldset>

</div>

<div class="pattern-lab__forms-section">

    <fieldset>
        <legend>Choose a shipping method:</legend>
        <input id="overnight" type="radio" name="shipping" value="overnight">
        <label for="overnight">Overnight</label>
        <input id="twoday" type="radio" name="shipping" value="twoday">
        <label for="twoday">Two day</label>
        <input id="ground" type="radio" name="shipping" value="ground">
        <label for="ground">Ground</label>
    </fieldset>

</div>

<div class="pattern-lab__forms-section">

    <form>       
        <label for="favcity">Choose your favorite city?</label>
        <select id="favcity" name="select">
            <option value="1">Amsterdam</option>
            <option value="2">Buenos Aires</option>
            <option value="3">Delhi</option>
            <option value="4">Hong Kong</option>
            <option value="5">London</option>
            <option value="6">Los Angeles</option>
            <option value="7">Moscow</option>
            <option value="8">Mumbai</option>
            <option value="9">New York</option>
            <option value="10">Sao Paulo</option>
            <option value="11">Tokyo</option>
        </select>
    </form>

</div>

<div class="pattern-lab__forms-section">

    <form>  
        <label for="favcity2">Choose your favorite city?</label>
        <select id="favcity2" name="favcity2">
        <optgroup label="Asia">
          <option value="3">Delhi</option>
          <option value="4">Hong Kong</option>
          <option value="8">Mumbai</option>
          <option value="11">Tokyo</option>
        </optgroup>
        <optgroup label="Europe">
          <option value="1">Amsterdam</option>
          <option value="5">London</option>
          <option value="7">Moscow</option>
        </optgroup>
        <optgroup label="North America">
          <option value="6">Los Angeles</option>
          <option value="9">New York</option>
        </optgroup>
        <optgroup label="South America">
          <option value="2">Buenos Aires</option>
          <option value="10">Sao Paulo</option>
        </optgroup>
        </select>
    </form>

</div>