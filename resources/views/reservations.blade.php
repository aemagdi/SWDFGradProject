<section class="section" id="reservation">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 align-self-center">
              <div class="left-text-content">
                  <div class="section-heading">
                      <h6>Contact Us</h6>
                      <h2>Here You Can Make A Reservation Or Just Walk in to Our Cafe</h2>
                  </div>
                  <p>For inquiries, we have a trained team of agents highly trained to receieve your requests, questions, and complaints. Reach us at the numbers below.</p>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="phone">
                              <i class="fa fa-phone"></i>
                              <h4>Phone Numbers</h4>
                              <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="message">
                              <i class="fa fa-envelope"></i>
                              <h4>Emails</h4>
                              <span><a href="#">contact@theparisian.com</a><br><a href="#">info@theparisian.com</a></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="contact-form">
                  <form id="contact" action="{{url('reservation')}}" method="post">
                      @csrf
                    <div class="row">
                      <div class="col-lg-12">
                          <h4>Table Reservation</h4>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address*" required="">
                      </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                          <input name="phone" type="text" pattern="[0][0-9]{10}" id="phone" placeholder="Phone Number*" required="">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <input type="number" name="guest" max="10" min="1" pattern="{10}" placeholder="Number of guests">
                          
                      </div>
                      <div class="col-lg-6">
                          <div id="filterDate2">
                            <div class="input-group date" data-date-format="dd/mm/yyyy">
                              <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy*" required="">
                              <div class="input-group-addon" >
                                <span class="glyphicon glyphicon-th"></span>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                          <input type="time" name="time" required="">

                        {{-- <fieldset>
                          <select value="time" name="time" id="time">
                              <option value="time">Time</option>
                              <option name="Breakfast" id="Breakfast">Breakfast</option>
                              <option name="Lunch" id="Lunch">Lunch</option>
                              <option name="Dinner" id="Dinner">Dinner</option>
                          </select>
                        </fieldset> --}}
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" rows="6" id="message" placeholder="Message"></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>