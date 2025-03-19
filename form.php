 <form  action="mail1.php" method="post">
     
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
          <input type="text" name="name1" id="name1" data-validation="required" placeholder="Your name" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
          <input type="text" name="phone1" id="phone1" data-validation="required" placeholder="Phone" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
          <input type="text" name="email1" id="email1" placeholder="E-mail" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
          <input type="text" class="datepicker-f" id="date1" name="date1" data-validation="required" placeholder="Date" />
          <div class="help help-sm help-red">!</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
          <input type="text" class="timepicker-f" id="time1" name="time1" data-validation="required" placeholder="Time" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <textarea name="message1" id="message1" placeholder="Your message.."></textarea>
        </div>
      </div>
     
      <div class="row latest-row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <button type="submit" name="submit1" class="btn btn-primary">
            SUBMIT
          </button>
          <a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
      </div>
      <div class="form-messages form-messages-modal"></div>
    </form>