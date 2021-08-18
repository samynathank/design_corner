<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="inner-heading">
          <h2>Get in touch</h2>
        </div>
      </div>
      <div class="span8">
        <ul class="breadcrumb">
          <li><a href="index.php?file=home"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
          <li class="active">Contact</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="content">
  <!-- <iframe type="hidden" src="https://goo.gl/maps/SrZSw4efn1qsiMb58" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->

  <div class="container">
    <div class="row">
      <div class="span12">
        <h4>Get in touch with us by filling <strong>contact form below</strong></h4>

        <form role="form" class="contactForm">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage">Message Not Sent. Try again</div>

          <div class="row">
            <div class="span4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="span4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="span4 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter 10 digits" />
              <div class="validation"></div>
            </div>
            <div class="span12 margintop10 form-group">
              <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
              <p class="text-center">
                <button class="btn mail_sub btn-large btn-theme margintop10" onclick="mail_transmission('mail_send')" type="button">Submit message</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
    $("#sendmessage").hide();
    $("#errormessage").hide();

  });

  function mail_transmission(action) {

    // var form = new FormData($(".contactForm")[0]);
    var form = $(".contactForm").serialize();

    form += "&action=" + action;

    $.ajax({
      type: "POST",
      url: "mail.php",
      dataType: "json",
      data: form,
      beforeSend: function() {

        $(".mail_sub").text("Loading...");
        $(".mail_sub").attr("disabled", "disabled");
      },
      success: function(obj) {

        if (obj.msg == 'send') {
          alert("Our Team will contact you soon.");
          $("#sendmessage").show();
          $("#errormessage").hide();
        } else if (obj.error != '') {
          $("#sendmessage").hide();
          $("#errormessage").show();
        }
        $(".mail_sub").text("Submit message");
        $(".mail_sub").removeAttr("disabled");

      },
      error: function() {

        alert('network error');
        $(".mail_sub").text("Submit message");
        $(".mail_sub").removeAttr("disabled");
        $("#sendmessage").hide();
        $("#errormessage").show();

      }

    });
  }
</script>