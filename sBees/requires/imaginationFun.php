<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location:./signIn.php");
    exit();
}

?>

<section id="gameWindow">
    <div class="container-fluid">     
       <div class="window">
       <div class="tagline">
            <h1 class="gameTag">Can you name all the things we see?</h1>
        </div>
        <iframe src="https://cdicksonnapier.github.io/imaginationFun/"  class="game"></iframe> 
            <h3>Can you find these words?</h3>
        <ul class="wordsToFind">
            <li>Dinosaur</li>
            <li>Star</li>
            <li>Planet</li>
            <li>Astronaut</li>
            <li>Spaceship</li>
            <li>Shuttle</li>
            <li>Flag</li>
            <li>Volcano</li>
            <li>Cloud</li>
            
        </ul>
       
        
       <!-- <h3>Bored? Why not try one of other games?</h3>
        <div class="gamePage-GameList">
            <div class="gamePage-Cards">
                <a href="imaginationFun.php" class="gamePage-Card">
                    <div class="gamePage-CardOverlay">
                      <h2>Imagination Fun</h2>
                    </div>
                </a>
                <a href="animalBuddies.php" class="gamePage-Card">
                    <div class="gamePage-CardOverlay">
                      <h2>Animal Buddies</h2>
                    </div>
                </a>
                <a href="kitchenFun.php" class="gamePage-Card">
                    <div class="gamePage-CardOverlay">
                      <h2>Kitchen Fun</h2>
                    </div>
                </a>
                <a href="beachDay.php" class="gamePage-Card">
                    <div class="gamePage-CardOverlay">
                      <h2>Beach Day</h2>
                    </div>
                </a>
            </div>
        </div>  -->
      
        </div>
            
       
        <h2 class="incompatableText">Sorry but this game is not compatable with your device. </h2>
       
</div>
    
</section>