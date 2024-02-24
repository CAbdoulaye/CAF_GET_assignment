<main>
    <h2>About Me: </h2>
    <p>
      Hello, my name is <?= $firstname?> <?= $lastname?> <br>
      I am <?= $age?> years old and 
      <?php if($age >= 18) {?>
        I am old enough to vote in the United States. <br>
      <?php } else {?>
        I am not old enough to vote in the United States. <br>
      <?php }?>
      I am <?= $age * 365?> days old.
    </p>
</main>