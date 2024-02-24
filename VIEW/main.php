<main>
  <br>
  <div id="formDiv">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <span class="labelSpan"><label for='firstName'>First Name: </label></span>
    <input type='text' name='firstName' id='firstName' autocomplete='off'>
    <br>
    <span class="labelSpan"><label for='lastName'>Last Name: </label></span>
    <input type='text' name='lastName' id='lastName' autocomplete='off'>
    <br>
    <span class="labelSpan"><label for='age'>Age: </label></span>
    <input type='text' name='age' id='age' autocomplete='off'>
    <div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </div>
    </form>
  </div>
</main>