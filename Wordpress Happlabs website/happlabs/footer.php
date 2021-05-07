<section class="schedule-demo-section">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 schedule-demo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/hl_logo.png" width="100%">
        <p class="font-larsseit-regular">Work with us and let our custom software work for you</p>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col text-center"> 
        <button type="button" class="btn" data-toggle="modal" data-target="#modal-click"><p class="font-larsseit-bold">SCHEDULE DEMO</p></button>
      </div>
    </div>
  </div>
</section>  

<section class="footer">
  <div class="container-fluid">
    <div class="row footer-row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <a href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[0] ?>"><img class="ml-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer_logo.png" width="100px"></a>
        <p class="mb-0">© <?php echo date('Y'); ?> HappLabs Tech Inc.<br/><span class="ml-3"></span>All rights reserved.</p>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 mt-4">
        <ul>      
          <li class="font-roboto-regular mt-4"><a href="about">About</a></li>
          <li class="font-roboto-regular"><a href="services">Services</a></li>
          <li class="font-roboto-regular"><a href="work">Work</a></li>
          <li class="font-roboto-regular"><a href="contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-4">
        <ul>
          <li class="font-oneday footer-office mb-2">US OFFICE</li>
          <li class="font-roboto-regular">HappLabs Tech Inc.</li>
          <li class="font-roboto-regular">733 3rd Avenue</li> 
          <li class="font-roboto-regular">16th Floor</li> 
          <li class="font-roboto-regular">New York, NY 10017</li>
        </ul>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-4">
        <ul>
          <li class="font-oneday footer-office mb-2">INDIA OFFICE</li>
          <li class="font-roboto-regular">743, Shri Krishna Temple Rd</li>
          <li class="font-roboto-regular">Indira Nagar 1st Stage</li>
          <li class="font-roboto-regular">Stage 1, Indiranagar</li>
          <li class="font-roboto-regular">Bengaluru, Karnataka 560038</li>
        </ul>
      </div>
    </div>
    <!--<hr>
    <div class="row footer-terms">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 footer-terms-row">
         <div class="row">
          <div class="circle"><a href=""><i class="fab fa-twitter"></i></a></div>
          <div class="circle"><a href="https://www.linkedin.com/company/happlabs"><i class="fab fa-linkedin-in"></i></a></div>
          <div class="circle"><a href=""><i class="fab fa-facebook-f"></i></a></div>
        </div>
      </div>
      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
        <div class="terms-privacy">
          <div>
            Terms of Use
          </div>
          <div>
            Privacy & Data Protection Policy
          </div>
        </div>
      </div>
    </div> -->
  </div>
</section>

<section class="schedule-demo-modal-section">
  <div class="modal fade" id="modal-click" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body font-roboto-regular">
          <div class="container px-5">
            <h2 class="modal-title font-oneday template-base-text-color">Schedule a demo</h2>  
            <br/>    
            <!-- Stepper -->
            <div class="steps-form">
                <div class="steps-row setup-panel">
                    <div class="steps-step1">
                        <a href="#step-1" type="button" class="btn btn-circle font-oneday stepper-active">1</a>
                        <p>Your details</p>
                    </div>
                    <div class="steps-step2">
                        <a href="#step-2" type="button" class="btn btn-circle font-oneday">2</a>
                        <p>Your needs</p>
                    </div>
                    <div class="steps-step3">
                        <a href="#step-3" type="button" class="btn btn-circle font-oneday">3</a>
                        <p>Finish</p>
                    </div>
                </div>
            </div>

        <!-- Steps form -->
            <form method="post">
              <!-- First Step -->
              <div class="setup-content1" id="step-1">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="md-form">
                              <label for="firstName">First Name<span class="mandatory">&nbsp;*</span></label>
                              <input id="firstName" name="firstName" type="text" required="required" class="form-control">
                          </div>
                      </div>
                        <div class="col-md-6 px-1">
                          <div class="md-form">
                              <label for="lastName">Last Name<span class="mandatory">&nbsp;*</span></label>
                              <input id="lastName" name="lastName" type="text" required="required" class="form-control">
                          </div>
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                              <label for="email">Email Address<span class="mandatory">&nbsp;*</span></label>
                              <input id="email" name="email" type="email" required="required" class="form-control">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                              <label for="company">Company<span class="mandatory">&nbsp;*</span></label>
                              <input id="company" name="company" type="text" required="required" class="form-control">
                          </div>
                      </div>
                  </div>
   <!--                <div class="row">
                    <div class="col-md-12">
                      <select class="custom-select custom-select-sm" id="job-function" name="job_function">
                  <option disabled selected>Select Job Function</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                      </div>
                  </div> -->
                  <div class="row mt-4">
                    <div class="col-md-12">
                      <select class="custom-select custom-select-sm" id="country" name="country">
                      <option disabled selected>Country</option>
                     <option value="Afganistan">Afghanistan</option>
                     <option value="Albania">Albania</option>
                     <option value="Algeria">Algeria</option>
                     <option value="American Samoa">American Samoa</option>
                     <option value="Andorra">Andorra</option>
                     <option value="Angola">Angola</option>
                     <option value="Anguilla">Anguilla</option>
                     <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                     <option value="Argentina">Argentina</option>
                     <option value="Armenia">Armenia</option>
                     <option value="Aruba">Aruba</option>
                     <option value="Australia">Australia</option>
                     <option value="Austria">Austria</option>
                     <option value="Azerbaijan">Azerbaijan</option>
                     <option value="Bahamas">Bahamas</option>
                     <option value="Bahrain">Bahrain</option>
                     <option value="Bangladesh">Bangladesh</option>
                     <option value="Barbados">Barbados</option>
                     <option value="Belarus">Belarus</option>
                     <option value="Belgium">Belgium</option>
                     <option value="Belize">Belize</option>
                     <option value="Benin">Benin</option>
                     <option value="Bermuda">Bermuda</option>
                     <option value="Bhutan">Bhutan</option>
                     <option value="Bolivia">Bolivia</option>
                     <option value="Bonaire">Bonaire</option>
                     <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                     <option value="Botswana">Botswana</option>
                     <option value="Brazil">Brazil</option>
                     <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                     <option value="Brunei">Brunei</option>
                     <option value="Bulgaria">Bulgaria</option>
                     <option value="Burkina Faso">Burkina Faso</option>
                     <option value="Burundi">Burundi</option>
                     <option value="Cambodia">Cambodia</option>
                     <option value="Cameroon">Cameroon</option>
                     <option value="Canada">Canada</option>
                     <option value="Canary Islands">Canary Islands</option>
                     <option value="Cape Verde">Cape Verde</option>
                     <option value="Cayman Islands">Cayman Islands</option>
                     <option value="Central African Republic">Central African Republic</option>
                     <option value="Chad">Chad</option>
                     <option value="Channel Islands">Channel Islands</option>
                     <option value="Chile">Chile</option>
                     <option value="China">China</option>
                     <option value="Christmas Island">Christmas Island</option>
                     <option value="Cocos Island">Cocos Island</option>
                     <option value="Colombia">Colombia</option>
                     <option value="Comoros">Comoros</option>
                     <option value="Congo">Congo</option>
                     <option value="Cook Islands">Cook Islands</option>
                     <option value="Costa Rica">Costa Rica</option>
                     <option value="Cote DIvoire">Cote DIvoire</option>
                     <option value="Croatia">Croatia</option>
                     <option value="Cuba">Cuba</option>
                     <option value="Curaco">Curacao</option>
                     <option value="Cyprus">Cyprus</option>
                     <option value="Czech Republic">Czech Republic</option>
                     <option value="Denmark">Denmark</option>
                     <option value="Djibouti">Djibouti</option>
                     <option value="Dominica">Dominica</option>
                     <option value="Dominican Republic">Dominican Republic</option>
                     <option value="East Timor">East Timor</option>
                     <option value="Ecuador">Ecuador</option>
                     <option value="Egypt">Egypt</option>
                     <option value="El Salvador">El Salvador</option>
                     <option value="Equatorial Guinea">Equatorial Guinea</option>
                     <option value="Eritrea">Eritrea</option>
                     <option value="Estonia">Estonia</option>
                     <option value="Ethiopia">Ethiopia</option>
                     <option value="Falkland Islands">Falkland Islands</option>
                     <option value="Faroe Islands">Faroe Islands</option>
                     <option value="Fiji">Fiji</option>
                     <option value="Finland">Finland</option>
                     <option value="France">France</option>
                     <option value="French Guiana">French Guiana</option>
                     <option value="French Polynesia">French Polynesia</option>
                     <option value="French Southern Ter">French Southern Ter</option>
                     <option value="Gabon">Gabon</option>
                     <option value="Gambia">Gambia</option>
                     <option value="Georgia">Georgia</option>
                     <option value="Germany">Germany</option>
                     <option value="Ghana">Ghana</option>
                     <option value="Gibraltar">Gibraltar</option>
                     <option value="Great Britain">Great Britain</option>
                     <option value="Greece">Greece</option>
                     <option value="Greenland">Greenland</option>
                     <option value="Grenada">Grenada</option>
                     <option value="Guadeloupe">Guadeloupe</option>
                     <option value="Guam">Guam</option>
                     <option value="Guatemala">Guatemala</option>
                     <option value="Guinea">Guinea</option>
                     <option value="Guyana">Guyana</option>
                     <option value="Haiti">Haiti</option>
                     <option value="Hawaii">Hawaii</option>
                     <option value="Honduras">Honduras</option>
                     <option value="Hong Kong">Hong Kong</option>
                     <option value="Hungary">Hungary</option>
                     <option value="Iceland">Iceland</option>
                     <option value="Indonesia">Indonesia</option>
                     <option value="India">India</option>
                     <option value="Iran">Iran</option>
                     <option value="Iraq">Iraq</option>
                     <option value="Ireland">Ireland</option>
                     <option value="Isle of Man">Isle of Man</option>
                     <option value="Israel">Israel</option>
                     <option value="Italy">Italy</option>
                     <option value="Jamaica">Jamaica</option>
                     <option value="Japan">Japan</option>
                     <option value="Jordan">Jordan</option>
                     <option value="Kazakhstan">Kazakhstan</option>
                     <option value="Kenya">Kenya</option>
                     <option value="Kiribati">Kiribati</option>
                     <option value="Korea North">Korea North</option>
                     <option value="Korea Sout">Korea South</option>
                     <option value="Kuwait">Kuwait</option>
                     <option value="Kyrgyzstan">Kyrgyzstan</option>
                     <option value="Laos">Laos</option>
                     <option value="Latvia">Latvia</option>
                     <option value="Lebanon">Lebanon</option>
                     <option value="Lesotho">Lesotho</option>
                     <option value="Liberia">Liberia</option>
                     <option value="Libya">Libya</option>
                     <option value="Liechtenstein">Liechtenstein</option>
                     <option value="Lithuania">Lithuania</option>
                     <option value="Luxembourg">Luxembourg</option>
                     <option value="Macau">Macau</option>
                     <option value="Macedonia">Macedonia</option>
                     <option value="Madagascar">Madagascar</option>
                     <option value="Malaysia">Malaysia</option>
                     <option value="Malawi">Malawi</option>
                     <option value="Maldives">Maldives</option>
                     <option value="Mali">Mali</option>
                     <option value="Malta">Malta</option>
                     <option value="Marshall Islands">Marshall Islands</option>
                     <option value="Martinique">Martinique</option>
                     <option value="Mauritania">Mauritania</option>
                     <option value="Mauritius">Mauritius</option>
                     <option value="Mayotte">Mayotte</option>
                     <option value="Mexico">Mexico</option>
                     <option value="Midway Islands">Midway Islands</option>
                     <option value="Moldova">Moldova</option>
                     <option value="Monaco">Monaco</option>
                     <option value="Mongolia">Mongolia</option>
                     <option value="Montserrat">Montserrat</option>
                     <option value="Morocco">Morocco</option>
                     <option value="Mozambique">Mozambique</option>
                     <option value="Myanmar">Myanmar</option>
                     <option value="Nambia">Nambia</option>
                     <option value="Nauru">Nauru</option>
                     <option value="Nepal">Nepal</option>
                     <option value="Netherland Antilles">Netherland Antilles</option>
                     <option value="Netherlands">Netherlands (Holland, Europe)</option>
                     <option value="Nevis">Nevis</option>
                     <option value="New Caledonia">New Caledonia</option>
                     <option value="New Zealand">New Zealand</option>
                     <option value="Nicaragua">Nicaragua</option>
                     <option value="Niger">Niger</option>
                     <option value="Nigeria">Nigeria</option>
                     <option value="Niue">Niue</option>
                     <option value="Norfolk Island">Norfolk Island</option>
                     <option value="Norway">Norway</option>
                     <option value="Oman">Oman</option>
                     <option value="Pakistan">Pakistan</option>
                     <option value="Palau Island">Palau Island</option>
                     <option value="Palestine">Palestine</option>
                     <option value="Panama">Panama</option>
                     <option value="Papua New Guinea">Papua New Guinea</option>
                     <option value="Paraguay">Paraguay</option>
                     <option value="Peru">Peru</option>
                     <option value="Phillipines">Philippines</option>
                     <option value="Pitcairn Island">Pitcairn Island</option>
                     <option value="Poland">Poland</option>
                     <option value="Portugal">Portugal</option>
                     <option value="Puerto Rico">Puerto Rico</option>
                     <option value="Qatar">Qatar</option>
                     <option value="Republic of Montenegro">Republic of Montenegro</option>
                     <option value="Republic of Serbia">Republic of Serbia</option>
                     <option value="Reunion">Reunion</option>
                     <option value="Romania">Romania</option>
                     <option value="Russia">Russia</option>
                     <option value="Rwanda">Rwanda</option>
                     <option value="St Barthelemy">St Barthelemy</option>
                     <option value="St Eustatius">St Eustatius</option>
                     <option value="St Helena">St Helena</option>
                     <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                     <option value="St Lucia">St Lucia</option>
                     <option value="St Maarten">St Maarten</option>
                     <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                     <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                     <option value="Saipan">Saipan</option>
                     <option value="Samoa">Samoa</option>
                     <option value="Samoa American">Samoa American</option>
                     <option value="San Marino">San Marino</option>
                     <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                     <option value="Saudi Arabia">Saudi Arabia</option>
                     <option value="Senegal">Senegal</option>
                     <option value="Seychelles">Seychelles</option>
                     <option value="Sierra Leone">Sierra Leone</option>
                     <option value="Singapore">Singapore</option>
                     <option value="Slovakia">Slovakia</option>
                     <option value="Slovenia">Slovenia</option>
                     <option value="Solomon Islands">Solomon Islands</option>
                     <option value="Somalia">Somalia</option>
                     <option value="South Africa">South Africa</option>
                     <option value="Spain">Spain</option>
                     <option value="Sri Lanka">Sri Lanka</option>
                     <option value="Sudan">Sudan</option>
                     <option value="Suriname">Suriname</option>
                     <option value="Swaziland">Swaziland</option>
                     <option value="Sweden">Sweden</option>
                     <option value="Switzerland">Switzerland</option>
                     <option value="Syria">Syria</option>
                     <option value="Tahiti">Tahiti</option>
                     <option value="Taiwan">Taiwan</option>
                     <option value="Tajikistan">Tajikistan</option>
                     <option value="Tanzania">Tanzania</option>
                     <option value="Thailand">Thailand</option>
                     <option value="Togo">Togo</option>
                     <option value="Tokelau">Tokelau</option>
                     <option value="Tonga">Tonga</option>
                     <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                     <option value="Tunisia">Tunisia</option>
                     <option value="Turkey">Turkey</option>
                     <option value="Turkmenistan">Turkmenistan</option>
                     <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                     <option value="Tuvalu">Tuvalu</option>
                     <option value="Uganda">Uganda</option>
                     <option value="United Kingdom">United Kingdom</option>
                     <option value="Ukraine">Ukraine</option>
                     <option value="United Arab Erimates">United Arab Emirates</option>
                     <option value="United States of America">United States of America</option>
                     <option value="Uraguay">Uruguay</option>
                     <option value="Uzbekistan">Uzbekistan</option>
                     <option value="Vanuatu">Vanuatu</option>
                     <option value="Vatican City State">Vatican City State</option>
                     <option value="Venezuela">Venezuela</option>
                     <option value="Vietnam">Vietnam</option>
                     <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                     <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                     <option value="Wake Island">Wake Island</option>
                     <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                     <option value="Yemen">Yemen</option>
                     <option value="Zaire">Zaire</option>
                     <option value="Zambia">Zambia</option>
                     <option value="Zimbabwe">Zimbabwe</option>
                </select>
                      </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="">
                    <input type="checkbox" name="check" class="form-check-input" id="check">
                    <label class="form-check-label" for="check">I consent to be approached by HappLabs Tech team for further communication.</label>
                  </div>
                      </div>
                  </div>
                  <div class="row mt-5">
                      <div class="col-3">
                            <button type="button" class="btn nextBtn step-1-next font-larsseit"><b>NEXT</b></button>
                        </div>
                  </div> 
              </div>
        
              <!-- Second Step -->
              <div class="setup-content2" id="step-2">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="md-form">
                  <textarea id="needs" name="needs" class="md-textarea form-control" rows="4"></textarea>
                  <label for="needs">Needs<span class="mandatory">&nbsp;*</span></label>
                </div>
                      </div>
                  </div>
                  <div class="row button-bottom">
                      <div class="col-3">
                            <button type="button" class="btn nextBtn step-2-next font-larsseit"><b>NEXT</b></button>
                        </div>
                  </div> 
                </div>
  
                <!-- Third Step -->
                <div class="setup-content3" id="step-3">
<!--                  <div class="row">
                      <div class="col-md-6">
                        <div class="md-form">
                  <label id="first-name-val-label">First Name </label>
                   <input id="first-name-val" name="first-name-val" type="text" class="form-control" disabled>
                
                          </div>
                      </div>
                        <div class="col-md-6 px-1">
                          <div class="md-form">
                            <label id="last-name-val-label" >Last Name </label>
                            <input id="last-name-val" name="last-name-val" type="text" class="form-control" disabled>
                          
                          </div>
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                              <label id="email-val-label">Email Address</label>
                              <input id="email-val" name="email-val" type="email" class="form-control" disabled>
                          </div>
                      </div>
                  </div>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="md-form">
                  <textarea id="needs-val" name="needs-val" class="md-textarea form-control" rows="3" disabled></textarea>
                  <label id="needs-val-label">Needs</label>
                </div>
                      </div>
                  </div> -->
                  <div class="rows button-bottom">
                      <div class="col-3">
                            <button type="submit" name="demo_submit" class="btn nextBtn step-3-submit font-larsseit"><b>SUBMIT</b></button>
                        </div>
                  </div> 
                </div>
            </form>    
        <!-- Steps form -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <?php wp_footer(); ?>
  <script type="text/javascript">
    $('.datepicker').pickadate();
    $('.timepicker').pickatime();
    //$('.contact-alert').hide();
  </script>
</body>
</html>
