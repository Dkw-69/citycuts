<?php $this->view('citycuts-template/header', $data); ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Instantiation and passing [ICODE]true[/ICODE] enables exceptions
$mail = new PHPMailer(true);
$mail->Mailer = "smtp";


 //Server settings
 $mail->SMTPDebug = false; // Enable verbose debug output
 $mail->isSMTP(); // Set mailer to use SMTP
 $mail->Host = ''; // Specify main and backup SMTP servers 
 $mail->SMTPAuth = true; // Enable SMTP authentication
 $mail->Username = ''; // SMTP username
 $mail->Password = ''; // SMTP password
 $mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
 $mail->Port = 587; // TCP port to connect to




     if( $_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email'], $_POST['subject'], $_POST['message'] ) ){

         // $name       = trim(stripslashes($_POST['name'])); 
         $from       = trim(stripslashes($_POST['email'])); 
         $subject    = trim(stripslashes($_POST['subject'])); 
         $message    = trim(stripslashes($_POST['message'])); 
         $to         = 'admin@webtrybe.com';
         $headers    = array();


         $headers[] = "MIME-Version: 1.0";
         $headers[] = "Content-type: text/plain; charset=iso-8859-1";
         $headers[] = "From: <{$from}>";
         $headers[] = "Reply-To: <{$from}>";
         $headers[] = "Subject: {$subject}";
         $headers[] = "X-Mailer: PHP/".phpversion();
    
    try {
        //Recipients
         $mail->setFrom($from);
         $mail->addAddress($to); 
        
        
        // Content
         $mail->isHTML(true); // Set email format to HTML
         $mail->Subject = $subject;
         $mail->Body = $message;
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        $mail->send();
         echo '<h6 style="color: green; margin-top: 15px; font-wight:bold;">Message has been sent!</h6>';
        
        } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    //     $result=mail( $to, $subject, $message, implode( "\r\n", $headers ) );
    //     //echo "<h1>success!</h1>";
    //     // exit( header( "Location:".ROOT."home" ) );
     }
?>
	
  <!-- ================ start banner area ================= -->
	<section class="banner-area contact" id="contact">
		<div class="container h-100">
			<div class="banner-area__content text-center">
        <h1>Contact Us</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Talk To Us</li>
          </ol>
        </nav>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->

	<!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">
      <div class="mb-5 video-area">
    
      </div>


      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Nairobi, Kenya</h3>
              <p>Avenue Road</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:admin@webtrybe.com">admin@webtrybe.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          
          <form action="" class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                    <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

  

  <?php $this->view('citycuts-template/footer', $data); ?>
