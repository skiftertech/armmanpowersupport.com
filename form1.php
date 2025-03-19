 <form  action="doc.php" method="post">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
          <input type="text" name="name3" id="name3" data-validation="required" placeholder="Your name" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
          <input type="text" name="phone3" id="phone3" data-validation="required" placeholder="Phone" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
          <input type="text" name="email3" id="email3" placeholder="E-mail" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
          <input type="text" class="datepicker-f" id="date3" name="date3" data-validation="required" placeholder="Date" />
          <div class="help help-sm help-red">!</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
          <input type="text" class="timepicker-f" id="time3" name="time3" data-validation="required" placeholder="Time" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <textarea name="message3" id="message3" placeholder="Your message.."></textarea>
        </div>
      </div>
     
      <div class="row latest-row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <button type="submit" name="submit" class="btn btn-primary">
            SUBMIT
          </button>
          <a class="fb-close" id="fb-close2" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
      </div>
      <div class="form-messages form-messages-modal"></div>
    </form>