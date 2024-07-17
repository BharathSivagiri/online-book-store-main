<?php 
session_start();

# Database Connection File
include "db_conn.php";

# Book helper function
include "php/func-book.php";
$books = get_all_books($conn);

# author helper function
include "php/func-author.php";
$authors = get_all_author($conn);

# Category helper function
include "php/func-category.php";
$categories = get_all_categories($conn);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GoodBooks - FAQs</title>

    <!-- bootstrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

    <link rel="stylesheet" href="styleabout.css">

	<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/faqs/faq-3/assets/css/faq-3.css">

</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="index.php">GoodBooks</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" 
		         id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" 
		             aria-current="page" 
		             href="index.php">Store</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="contactus.php">Contact us</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="aboutus.php">About us</a>
		        </li>
		        <li class="nav-item">
		          <?php if (isset($_SESSION['user_id'])) {?>
		          	<a class="nav-link" 
		             href="admin.php">Admin</a>
		          <?php }else{ ?>
		          <a class="nav-link" 
		             href="login.php">Login</a>
		          <?php } ?>

		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
		
<!-- FAQ 3 - Bootstrap Brain Component -->
<section class="bsb-faq-3 py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Frequently Asked Questions</h2>
        <p class="text-secondary text-center lead fs-4">Welcome to our FAQ page, your one-stop resource for answers to commonly asked questions.</p>
        <p class="mb-5 text-center">Whether you're a new customer looking to learn more about what we offer or a long-time user seeking clarification on specific topics, this page has clear and concise information about our products and services.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <!-- FAQs: My Account -->
  <div class="mb-8">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-xl-10">
          <div class="d-flex align-items-end mb-5">
            <i class="bi bi-person-gear me-3 lh-1 display-5"></i>
            <h3 class="m-0">General FAQs</h3>
          </div>
        </div>
        <div class="col-11 col-xl-10">
          <div class="accordion accordion-flush" id="faqAccount">
            <div class="accordion-item bg-transparent border-top border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading1">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse1" aria-expanded="false" aria-controls="faqAccountCollapse1">
                  Why this site dosen't have an account feature?
                </button>
              </h2>
              <div id="faqAccountCollapse1" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading1">
                <div class="accordion-body">
                  <p>Since this is an open source site, we did not bring the account feature.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading2">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse2" aria-expanded="false" aria-controls="faqAccountCollapse2">
                  When will you bring the account feature?
                </button>
              </h2>
              <div id="faqAccountCollapse2" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading2">
                <div class="accordion-body">
                  <p>We are currently working on the process and we'll update soon.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading3">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse3" aria-expanded="false" aria-controls="faqAccountCollapse3">
                  Can I apply as an collaborator?
                </button>
              </h2>
              <div id="faqAccountCollapse3" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading3">
                <div class="accordion-body">
                  <p>Sure. Just send us your resume/CV to our email and we'll talk about it.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading4">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse4" aria-expanded="false" aria-controls="faqAccountCollapse4">
                  How do I contact you?
                </button>
              </h2>
              <div id="faqAccountCollapse4" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading4">
                <div class="accordion-body">
                  <p>Just head over to "Contact Us" page and mail us or call us.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading5">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse5" aria-expanded="false" aria-controls="faqAccountCollapse5">
                  Can everyone access this site?
                </button>
              </h2>
              <div id="faqAccountCollapse5" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading5">
                <div class="accordion-body">
                  <p>Since this site only contains books starting from matured reading novels, literally anyone can access this page.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQs: Placing an Order -->
  <div class="mb-8">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-xl-10">
          <div class="d-flex align-items-end mb-5">
            <i class="bi bi-cart-plus me-3 lh-1 display-5"></i>
            <h3 class="m-0">Books</h3>
          </div>
        </div>
        <div class="col-11 col-xl-10">
          <div class="accordion accordion-flush" id="faqOrder">
            <div class="accordion-item bg-transparent border-top border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading1">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse1" aria-expanded="false" aria-controls="faqOrderCollapse1">
                  Cannot find the specific book i'm searching for?
                </button>
              </h2>
              <div id="faqOrderCollapse1" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading1">
                <div class="accordion-body">
                  <p>Don't worry just mail us your book suggestion via our dedicated discord community or via email and our team will validate your suggestion.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading2">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse2" aria-expanded="false" aria-controls="faqOrderCollapse2">
                  Can I change or cancel my order after it's been placed?
                </button>
              </h2>
              <div id="faqOrderCollapse2" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading2">
                <div class="accordion-body">
                  <p>Orders can be modified or canceled within a short time after placing them. Contact our customer support as soon as possible to make any changes.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading3">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse3" aria-expanded="false" aria-controls="faqOrderCollapse3">
                  Do you charge for downloading books from your site?
                </button>
              </h2>
              <div id="faqOrderCollapse3" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading3">
                <div class="accordion-body">
                  <p>This is a open source site mainly focused to help readers to afford the books they want so we won't charge money.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading4">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse4" aria-expanded="false" aria-controls="faqOrderCollapse4">
                  Will you bring the payment feature for this site for downloading books?
                </button>
              </h2>
              <div id="faqOrderCollapse4" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading4">
                <div class="accordion-body">
                  <p>This is a open source site for downloading books so no payment feature.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading5">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse5" aria-expanded="false" aria-controls="faqOrderCollapse5">
                  Do the books in this site safe to download?
                </button>
              </h2>
              <div id="faqOrderCollapse5" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading5">
                <div class="accordion-body">
                  <p>Yes the books are safe to download and cross verified for viruses before uploading to the site.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQs: Refunds and Exchanges -->
  <div class="mb-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-xl-10">
          <div class="d-flex align-items-end mb-5">
            <i class="bi bi-bag-dash me-3 lh-1 display-5"></i>
            <h3 class="m-0">Community FAQs</h3>
          </div>
        </div>
        <div class="col-11 col-xl-10">
          <div class="accordion accordion-flush" id="faqRefund">
            <div class="accordion-item bg-transparent border-top border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading1">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse1" aria-expanded="false" aria-controls="faqRefundCollapse1">
                  Do I need to be a member or collaborator to share books?
                </button>
              </h2>
              <div id="faqRefundCollapse1" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading1">
                <div class="accordion-body">
                  <p>You don't need to be a member or a coolaboratr to share books to our community.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading2">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse2" aria-expanded="false" aria-controls="faqRefundCollapse2">
                  Why do you have discord server community rather having an simple whatsapp group?
                </button>
              </h2>
              <div id="faqRefundCollapse2" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading2">
                <div class="accordion-body">
                  <p>Below are the following things that describe why we have only the discord community: </p>
                  <ul>
                    <li>It is easy to connect and chat with users and has accessibility to share absolutley anything.</li>
                    <li>Super secure and also can manage upto many users.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading3">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse3" aria-expanded="false" aria-controls="faqRefundCollapse3">
                  What if I receive a damaged or defective item?
                </button>
              </h2>
              <div id="faqRefundCollapse3" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading3">
                <div class="accordion-body">
                  <p>If you receive a damaged or defective item, please contact our customer support team immediately. We will guide you on the return process and offer a refund or replacement, as appropriate.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading4">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse4" aria-expanded="false" aria-controls="faqRefundCollapse4">
                  Who covers the shipping costs for exchanges?
                </button>
              </h2>
              <div id="faqRefundCollapse4" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading4">
                <div class="accordion-body">
                  <p>Shipping costs for returning the item for an exchange and sending the new item are usually the responsibility of the customer, unless the exchange is due to an error on our part.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading5">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse5" aria-expanded="false" aria-controls="faqRefundCollapse5">
                  Can I change my mind and cancel my refund or exchange request?
                </button>
              </h2>
              <div id="faqRefundCollapse5" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading5">
                <div class="accordion-body">
                  <p>If you change your mind about a refund or exchange request, please contact our customer support team as soon as possible. We will do our best to accommodate your request, but once a refund or exchange is processed, it may not be reversible.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

        <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="aboutus.php" class="nav-link px-2 text-muted">About Us</a></li>
            <li class="nav-item"><a href="contactus.php" class="nav-link px-2 text-muted">Contact Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2024 GoodBooks, Inc</p>
        </footer>
    
    </div>
</body>
</html>