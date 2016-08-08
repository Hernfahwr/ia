<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js">
<![endif]-->
<html lang="en">
  <?php include "init-template.php";?>
  <body>
    <div id="container">
      <?php include "header.php";?>

      <div class="page-header">
        <div class="container">
          <div class="row">
            <div class="col-md-12">            
              <div class="breadcrumb">
                <span>คุณอยู่ที่นี่ : </span>
                <a href="./">หน้าแรก</a>
                <span class="crumbs-spacer">/</span>
                <span class="current">ติดต่อเรา</span>
              </div>
            </div>
          </div>
        </div>
      </div>

              
      <section id="content">
        <div class="container">     
          <div class="map-area" style="margin-bottom:30px">      
            <div class="map">        
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7749.127763298888!2d100.52725582789321!3d13.80514402366067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2996d4b47d5b7%3A0xbbcad9aac8ff5c2f!2sPrecise+International+Corporation+Ltd.!5e0!3m2!1sth!2sth!4v1467624623100" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d968.5571146493033!2d100.53158458400601!3d13.825315765304703!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc17f7649193db766!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4nuC4o-C4teC5hOC4i-C4iyDguITguK3guKPguYzguJvguK3guYDguKPguIrguLHguYjguJkg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sus!4v1469672066146" width="100%"  height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <h2 class="big-title">แบบฟอร์มติดต่อ</h2>   

              <!-- Start Contact Form -->
              <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
                <div class="form-group">
                  <div class="controls">
                    <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>  
                </div>

                <button type="submit" id="submit" class="btn btn-effect"><i class="fa fa-check"></i> Send Message</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                <div class="clearfix"></div>   
              </form> 
            </div>
            <div class="col-md-3">
              <h2 class="big-title">สำนักงานกรุงเทพฯ</h2>   
              <div class="information">              
                <div class="contact-datails">
                  <p><i class="icon-pointer"></i> 12 Tottenham Road, London, England.</p>
                  <p><i class="icon-call-out"></i> +880 123 456 789 </p>
                  <p><i class="icon-envelope"></i> info@wingtheme.com </p>
                  <p><i class="icon-clock"></i> Sun-Sat (9am-5pm)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
          
          

      <?php include "footer.php";?>
    </div>
  </body>
  <?php include "init-js.php";?>
</html>