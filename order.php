<!DOCTYPE html>
<html>
  <head>
    <title>M.I. FISHFARM</title>
    <link href="order.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body>
  <div class="scrollToTop-btn">
      <i class="fas fa-angle-up"></i>
    </div>

    <header>
      <a href="index.html" class="brand">M.I Fishfarm</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <a href="#main">HOME</a>
        <a href="#about">ABOUT US</a>
        <a href="#contact">CONTACT US</a>
        <a href="order.php">ORDER FORM</a>
      </div>
    </header>
    <?php
    // (A) PROCESS ORDER FORM
    if (isset($_POST["name"])) {
      require "PROCESS.php";
      echo $result == ""
        ? "<div class='alert-success'>ORDER SUCCESS! WAIT FOR OUR REPLY. </div>"
        : "<div class='notify'>$result</div>" ;
    }
    ?>
    <!--alert messages start-->
    
    <!--alert messages end-->
    
    <!--contact section start-->
    <!-- (B) ORDER FORM -->
    <div class="contact-form">
        <h2><br>ORDER FORM</h2>
    <form 
    id="contact" 
    method="post" 
    target="_self"
    autocomplete="off">
    <input 
          type="text" 
          class="text-box" 
          name="name" 
          id="name"
          placeholder="Full Name" required
          minlength="10"
          maxlength="50"
          />
          <br>

          <input 
          type="text" 
          class="text-box" 
          name="address" 
          id="address" 
          placeholder="Exact Address" required
          />
          <br>

          <input 
          type="email" 
          class="text-box" 
          name="email" 
          id="email" 
          placeholder="Email" required
          maxlength="30"
          />
          <br>

          <input 
          type="text" 
          class="text-box"
          name="number" 
          id="number" 
          placeholder="Contact Number"  
          pattern="[0-9]+" required 
          minlength="7"
          maxlength="11"
          /> 
          <br>

          <label for="qty1"> Crowntail Mascot Betta </label>
            <input 
            type="number"
            class="text-bow" 
            name="qty1" 
            id="qty1" 
            /> 
            <br>

            
            <label for="qty2"> Dumbo Salamander Betta </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty2" 
            id="qty2"
            />
            <br>

            
            <label for="qty3"> Half Sun Mascot Betta  </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty3" 
            id="qty3" 
            />
            <br>

            
            <label for="qty4"> Avarat Koi Betta  </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty4" 
            id="qty4" 
            />
            <br>

            
            <label for="qty5"> Platinum Crown Tail Betta </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty5" 
            id="qty5" 
            />
            <br>
          <textarea name="message" rows="5" placeholder="Type your request" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send"> 
        </form>
        </div>
    </div>
    </div>
    </div>
    <!--contact section end-->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    // (A) PREVENT CONTEXT MENU FROM OPENING
    document.addEventListener("contextmenu", (evt) => {
    evt.preventDefault();
    }, false);
    // (B) PREVENT CLIPBOARD COPYING
    document.addEventListener("copy", (evt) => {
    // (B1) CHANGE THE COPIED TEXT IF YOU WANT
    evt.clipboardData.setData("text/plain", "FORBIDDEN");
 
    // (B2) PREVENT THE DEFAULT COPY ACTION
    evt.preventDefault();
    }, false);
    
    // (C) DISABLE CONTROL AND ALL FUNCTION KEYS
    document.addEventListener("keydown", (e) => {
    if (e.ctrlKey || e.keyCode==123) {
    e.stopPropagation();
    e.preventDefault();
    }
    });
</script>
<footer class="footer">
      <span class="footer-title">M.I. Fishfarm</span>
      <p>Copyright @2022 </a>. All Rights Reserved.</p>
    </footer>

    <script src="script.js" charset="utf-8"></script>

      
  </body>
</html>
