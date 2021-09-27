<?php

include 'header.php';

?>


<body>

  <!--slideshow-->

<div class="container" id="container">
    <ul>
      <li class="active"><img src="nature/nature3.jpg" alt="" /></li>
      <li><img src="bird/bird8.jpg" alt="" /></li>
      <li><img src="sp/sp1.jpg" alt="" /></li>
      <li><img src="fish/fish26.jpg" alt="" /></li>
      <li><img src="plane/plane1.jpg" alt="" /></li>
      <li><img src="animal/animal17.jpg" alt="" /></li>
    </ul>
</div>


<!--slideshow over-->





<!---filter-->

<div style="overflow-x: hidden; overflow-y: auto;">

<h2 style="font-weight: bold;">“Great photography is about depth of feeling, not depth of field.”
</h2>
<h3>– Peter Adams</h3>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Nature</button>
  <button class="btn" onclick="filterSelection('aquatic')">Aquatic</button>
  <button class="btn" onclick="filterSelection('bird')">Bird</button>
  <button class="btn" onclick="filterSelection('animal')">Animal</button>
  <button class="btn" onclick="filterSelection('plane')">Fighter Jet</button>
  <button class="btn" onclick="filterSelection('space')">Space</button>
</div>

<!---Portfolio Gallery Grid-->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="nature/nature26.jpg" alt="Mountains" style="width:100%">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="nature/nature27.jpg" alt="Lights" style="width:100%">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="nature/nature32.jpg" alt="Nature" style="width:100%">
      
    </div>
  </div>
  
  <div class="column aquatic">
    <div class="content">
      <img src="fish/fish17.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
  <div class="column aquatic">
    <div class="content">
    <img src="fish/fish22.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>
  <div class="column aquatic">
    <div class="content">
    <img src="fish/fish30.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>

  <div class="column bird">
    <div class="content">
      <img src="bird/bird26.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>
  <div class="column bird">
    <div class="content">
    <img src="bird/bird2.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
  <div class="column bird">
    <div class="content">
    <img src="bird/bird6.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>
  <div class="column animalal">
    <div class="content">
      <img src="animal/animal1.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>
  <div class="column animal">
    <div class="content">
    <img src="animal/animal4.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>
  <div class="column animal">
    <div class="content">
    <img src="animal/animal30.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>

  <div class="column plane">
    <div class="content">
      <img src="plane/plane1.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>
  <div class="column plane">
    <div class="content">
    <img src="plane/plane2.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>
  <div class="column plane">
    <div class="content">
    <img src="plane/plane3.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>

  <div class="column space">
    <div class="content">
      <img src="sp/sp1.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>
  <div class="column space">
    <div class="content">
    <img src="sp/sp2.jpg" alt="Car" style="width:100%">
      
    </div>
  </div>
  <div class="column space">
    <div class="content">
    <img src="sp/sp3.jpg" alt="Car" style="width:100%">
     
    </div>
  </div>



<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>



<!---filter end-->
</body>

<?php
include 'footer.php';

?>