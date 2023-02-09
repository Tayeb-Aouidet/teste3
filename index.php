<?php
include './partials/head.php';
//include_once './partials/header.php';
// include_once './partials/header.php';
// require './partials/header.php';
?>
<main>
    <?php include './partials/header.php'?>
    <?php include './partials/nav.php'?>


    <div class="timeHeader">
    <span>Open from 10am to 12pm</span>
  </div>
  <!-- Menu Container -->
  <section id="menu">
    <h2 class="sectionTitle">THE MENU</h2>
    <ul class="navMenu">
      <li class="piz"><a href="#tabs-1">Pizza</a></li>
      <li class="past"><a href="#tabs-2">Salads</a></li>
      <li class="start"><a href="#tabs-3">Starter</a></li>
    </ul>

    <div id="tabs-1">
      <h3><span class="bold">Margherita</span> <span class="price">$12.50</span></h3>
      <p>Fresh tomatoes, fresh mozzarella, fresh basil</p>
      <hr>

      <h3><span class="bold">Formaggio</span> <span class="price">$15.50</span></h3>
      <p>Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
      <hr>

      <h3><span class="bold">Chicken</span> <span class="price">$17.00</span></h3>
      <p>Fresh tomatoes, mozzarella, chicken, onions</p>
      <hr>

      <h3><span class="bold">Pineapple'o'clock</span> <span class="price">$16.50</span></h3>
      <p>Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
      <hr>

      <h3><span class="bold">Meat Town</span> <span class="hot">Hot!</span><span class="price">$20.00</span></h3>
      <p>Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
      <hr>

      <h3><span class="bold">Parma</span> <span class="new">New</span><span class="price">$21.50</span></h3>
      <p>Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
    </div>

    <div id="tabs-2">
      <h3><span class="bold">Lasagna</span> <span>Popular</span> <span class="price">$13.50</span></h3>
      <p>Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>

      <h3><span class="bold">Ravioli</span> <span class="price">$14.50</span></h3>
      <p>Ravioli filled with cheese</p>
      <hr>

      <h3><span class="bold">Spaghetti Classica</span> <span class="price">$11.00</span></h3>
      <p>Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h3><span class="bold">Seafood pasta</span> <span class="price">$25.50</span></h3>
      <p>Salmon, shrimp, lobster, garlic</p>
    </div>


    <div id="tabs-3">
      <h3><span class="bold">Today's Soup</span> <span>Seasonal</span><span class="price">$5.50</span></h3>
      <p>Ask the waiter</p>
      <hr>

      <h3><span class="bold">Bruschetta</span> <span class="price">$8.50</span></h3>
      <p>Bread with pesto, tomatoes, onion, garlic</p>
      <hr>

      <h3><span class="bold">Garlic bread</span> <span class="price">$9.50</span></h3>
      <p>Grilled ciabatta, garlic butter, onions</p>
      <hr>

      <hh3><span class="bold">Tomozzarella</span> <span class="price">$10.50</span></h3>
      <p>Tomatoes and mozzarella</p>
    </div>

  </section>

  <section id="about">
    <div class="aboutContent">
      <h2 class="sectionTitle">About</h2>
      <p>The Pizza Restaurant was founded in blabla by Mr. Italiano in lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <p><strong>The Chef?</strong> Mr. Italiano himself<img src="assets/img/chef.jpg" alt="Chef" class="chef"></p>
      <p>We are proud of our interiors.</p>
      <img src="assets/img/onepage_restaurant.jpg" alt="Restaurant" class="restaurant">
      <h3><span class="bold">Opening Hours</span></h3>

      <div class="open">
        <div>
          <p>Mon & Tue CLOSED</p>
          <p>Wednesday 10.00 - 24.00</p>
          <p>Thursday 10:00 - 24:00</p>
        </div>
        <div>
          <p>Friday 10:00 - 12:00</p>
          <p>Saturday 10:00 - 23:00</p>
          <p>Sunday Closed</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Image of location/map -->
  <div id="map">
    <img src="assets/img/map.jpg">
  </div>
  <!-- Contact -->
  <section id="contact">
    <div class="formContact">
      <h2 class="sectionTitle">Contact</h2>
      <p>Find us at some address at some place or call us at 05050515-122330</p>
      <p><span class="fyi">FYI!</span> We offer full-service catering for any event, large or small. We understand your
        needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
      <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
      <form action="/action_page.php" target="_blank">
        <p><input type="text" placeholder="Name" required name="Name"></p>
        <p><input type="number" placeholder="How many people" required name="People"></p>
        <p><input type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
        <p><input type="text" placeholder="Message \ Special requirements" required name="Message"></p>
        <p><button type="submit" class="contactBtn">SEND MESSAGE</button></p>
      </form>
    </div>
  </section>
  <?php include './partials/footer.php'?>
