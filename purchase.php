<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>

  <?php include 'includes/navbar.php'; ?>

  <main>
    <section class="purchase-sec">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-4 col-lg-4">
            <div class="book-details">
              <div class="book-img d-flex justify-content-center">
                <img src="assets/images/book-cover2.png" alt="" class="img-fluid">
              </div>
              <div class="book-details-content text-center">
                <h3 class="title">The McAllister Contingency</h3>
                <h3 class="price">Price: <span>$19.99</span></h3>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="purchase-form">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-12">
                    <span class="veteran">Are you a Military / Police Veteran?</span>
                    <select name="veteran" id="veteranSelect" class="form-select primary-select">
                      <option value="default" selected disabled>Select an option</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>
              </form>
              <form action="" id="nonVeterans-form" class="nv-form" style="display: none;">
                <div class="row">
                  <div class="col-12 mb-3">
                    <select name="serving" id="servingSelect" class="form-select" id="">
                      <option value="default" selected disabled>
                        Are you still serving in the armed services or the Police?
                      </option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                  <div class="col-12 mb-3">
                    <select name="serving" id="servingSelect" class="form-select" id="">
                      <option value="default" selected disabled>Which country have you served?</option>
                      <option value="usa">USA</option>
                      <option value="uk">UK</option>
                      <option value="aus">Australia</option>
                      <option value="nz">New Zealand</option>
                      <option value="canada">Canada</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <select name="serving" id="servingSelect" class="form-select" id="">
                      <option value="default" selected disabled>
                        Which branch of the armed services have you served in or do you serve in now?
                      </option>
                      <option value="airForce">Air Force</option>
                      <option value="army">Army</option>
                      <option value="marines">Marines</option>
                      <option value="navy">Navy</option>
                      <option value="coastGuards">Coastguard</option>
                      <option value="police">Police</option>
                    </select>
                  </div>
                </div>
              </form>
              <div class="purchase-action d-flex mt-5 justify-content-between align-items-center">
                <div class="total">
                  <p>Total Amount: <span id="totalAmount">$19.99</span><span id="discountedPrice"></span></p>
                  <small id="discountText" style="display: none;">*25% OFF</small>
                </div>
                <button id="purchaseBtn" class="btn btn-black text-uppercase" disabled>Purchase</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>

  <script>
    $(document).ready(function() {
      const originalPrice = 19.99;
      const discount = 0.25;
      const discountedPrice = originalPrice - (originalPrice * discount);

      $('#veteranSelect').change(function() {
        if ($(this).val() === 'yes') {
          // Update the total amount with strikethrough and show the discounted price
          $('#totalAmount').html(`<s>$${originalPrice.toFixed(2)}</s>`);
          $('#discountedPrice').html(`$${discountedPrice.toFixed(2)}`);
          $('#discountText').show();
          // Enable the purchase button
          $('#purchaseBtn').prop('disabled', false);

          $('#purchaseBtn').html('Purchase');
          $('#nonVeterans-form').hide();

        } else if ($(this).val() === 'no') {
          $('#nonVeterans-form').show();
          $('#nonVeterans-form').addClass('animate__animated animate__fadeInUp');

          // Reset the price if "No" is selected
          $('#totalAmount').html(`$${originalPrice.toFixed(2)}`);
          $('#discountText').hide();
          $('#discountedPrice').hide();
          // Enable the purchase button
          $('#purchaseBtn').prop('disabled', false);
          $('#purchaseBtn').html('Next');
        } else {
          // Reset the price if "No" is selected
          $('#totalAmount').html(`$${originalPrice.toFixed(2)}`);
          $('#discountText').hide();
          $('#discountedPrice').hide();
          $('#nonVeterans-form').hide();

          // Keep the purchase button disabled
          $('#purchaseBtn').prop('disabled', true);
          $('#purchaseBtn').html('Purchase');
        }
      });
    });
  </script>


</body>

</html>
