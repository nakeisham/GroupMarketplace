<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- My CSS -->
    <link rel="stylesheet" href="dashboard.css" />

    <title>Sell</title>
  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="#" class="brand">
        <i class="bx bxs-shopping-bags"></i>
        <span class="text">Uni Market</span>
      </a>
      <ul class="side-menu top">
        <li>
          <a href="dashboard.php">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="orders.php">
            <i class="bx bxs-shopping-bag-alt"></i>
            <span class="text">Orders</span>
          </a>
        </li>
        <li>
          <a href="sell.php">
            <i class="bx bxl-product-hunt"></i>
            <span class="text">Sell</span>
          </a>
        </li>
        <li>
          <a href="token.php">
            <i class="bx bxs-coin-stack"></i>
            <span class="text">Token</span>
          </a>
        </li>
        <li class="active">
          <a href="help.php">
            <i class="bx bxs-coin-stack"></i>
            <span class="text">Help</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
            <a href="settings.html" class="">
                <i class='bx bx-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
          <a href="#" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
      <!-- NAVBAR -->
      <nav>
        <i class="bx bx-menu"></i>

        <input type="checkbox" id="switch-mode" hidden />
        <label for="switch-mode" class="switch-mode"></label>

        <a href="#" class="profile">
          <img src="img/people.png" />
        </a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Help</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Home</a>
              </li>
            </ul>
          </div>
        </div>

    
        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>FAQs</h3>
            </div>
            <p>
              <text><b>How are items being sold verified?</text></b>
            </p>
            <p>
            <text> Each item being added to our marketplace is reviewed by us before being posted. We also have a 2-week policy which ensures that if you don’t receive your item(s) within this time period, you will receive a full refund. 
            </text>
            </p>
            
            <p>
            <text><b>I am having issues with uploading items/buying an item/I haven’t received my item?
            </b></text>
            </p>
            <p>
            <text>Please see our contact page and get in touch. A member of our team will be able to help resolve this issue. </text>
            </p>
            
            <p>
            <text><b>Do you accept returns or exchanges?</b></text>
            </p>
            <p>
            <text>We are able to accept returns, it will be returned to the original seller- not us. We do not do exchanges due to the nature of the site, it is a marketplace so each seller is likely only selling one of each item. Please see our returns and refunds policy for terms and conditions. If you are unhappy with an item you have received, please contact us to discuss a refund. For further queries, please see our returns and refunds policy. </text>
            </p>
            
            <p>
            <text><b>What payment methods do you accept?</b></text>
            </p>
            <p>
            <text>We currently only accept card payments on our site. If you choose to purchase an item from a seller outside of our site, we are not liable for any issues that may arise e.g. not receiving item/item being damaged or faulty or not receiving item. </text>
            </p>
            
            <p>
            <text><b>What delivery options do you have? Would I be able to pick an order up?</b></text>
            </p>
            <p>
            <text>Due to our site being made of individual student sellers, the seller will be sending the item for delivery to the address you provide. You could make alternative arrangements with the seller if the item is large and cannot be delivered thus there will be no charge for delivery. </text>
            </p>
            
            <p>
            <text><b>Can I track my order?</b></text>
            </p>
            <p>
            <text>If you would like the option of a tracked delivery, most sellers will offer this however it will result in a higher delivery charge. The standard delivery will not be tracked unless you have requested to do so.</text>
            </p>
            
            <p>
            <text><b>Can I use Klarna or do several payments instead of one upfront payment?</b></text>
            </p>
            <p>
            <text>Unfortunately this is not possible on our site, all payments will be an individual upfront payment. </text>
            </p>
            
            <p>
            <text><b>Where do you ship?</b></text>
            </p>
            <p>
            <text>All items are limited to shipping within the UK.</text>
            </p>
            
            <p>
            <text><b>Do I need to message the seller before buying?</b></text>
            </p>
            <p>
            <text>We recommend contacting the seller beforehand to sort any queries/confirm the item is still available and ready to ship.
            </text>
            </p>
            
            <p>
            <text><b>What are the delivery costs?</b></text>
            </p>
            <p>
            <text>It depends on the seller & the item of which they are selling. Naturally the heavier the item, the more expensive shipping will be. It also depends on if you opt for standard delivery or first class etc. 
            </text>
            </p>
            <div class="head">
              <h3> </h3>
            </div>
            
            <div class="head">
              <h3>Refunds & Returns Policy</h3>
            </div>
            
            <p>
            <text><b>Returns</b></text>
            </p>
            <p>
            <text>You have 14 days/2 weeks to return an item from the date you received it. Due to this being a marketplace where students sell their items, the item has to be returned to the original seller. You must get into contact with the original seller for a return address. The cost of return will also be refunded to you. The seller must confirm they have received the item back & that it is a good condition/same condition as sold. Then your refund will be given to the card which you paid on.
       
      To be eligible for a return, your item must be unused and in the same condition that you received it. If possible, the item should be in the original packaging it was sent in.
      Your item needs to have the receipt or proof of purchase (this will have been sent to email address you signed up with).
      If you have any questions on how to return your item to us, contact us at <a href ="mailto: groupmarketplace@gmail.com">groupmarketplace@gmail.com</a href> .
      </text>
      </p>
        
        <p>
            <text><b>Refunds
            </b></text>
            </p>
            <p>
            <text>Refunds are applicable as long as the item(s) is not as advertised/damaged or (if reason for returning is unrelated to the condition of the item aka clothing not fitting, don’t like the item) it is in good condition/same condition as sold. Please see <a href ="www.GOV.uk  / 
      https://www.gov.uk/accepting-returns-and-giving-refunds#:~:text=You%20must%20offer%20a%20refund,have%20to%20provide%20a%20reason">GOV.uk</a href> for the laws around returns and refunds to ensure our site has the correct information:
      for more details on this as this is what we are abiding by. Please get into contact with us if you feel you are entitled to a refund.  You must get into contact with the original seller for a return address. The cost of return will also be refunded to you. Once the seller receives their item back, they will check it and notify us that they have received the returned item. We will immediately notify on the status of your refund after they have inspected the item. 
      If your return is approved, we will initiate a refund to your card. You will receive the amount within a certain amount of days, depending on your card issuer's policies.

            </text>
            </p>
        
            <p>
            <text><b>Exchanges
            </b></text>
            </p>
            <p>
            <text>We are unfortunately unable to accept exchanges due to the nature of the site & logistically. Since everyone is uploading their own items (most being unique/individual), we cannot offer exchanges. If you are unhappy with an item you have received, please contact us to discuss a refund. 
            </text>
            </p>
        
        
            <p>
            <text><b>Shipping
            </b></text>
            </p>
            <p>
            <text>You will be responsible for paying for your own shipping costs for returning your item. These shipping costs are refundable. 
      If you have any questions on how to return your item to us, contact us at <a href ="mailto: groupmarketplace@gmail.com">groupmarketplace@gmail.com</a href>
            </text>
            </p>

            <div class="head">
              <h3> </h3>
            </div>
            
            <p>Tokens redeemable by game and trading. Up to 20% off</p>
              
            
      
              
          </div>
        </div>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="dashboard.js"></script>
  </body>
</html>