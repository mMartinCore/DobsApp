<div class="container"  >
<span class="CoprseSection">


        <h4>  Coprse Section</h4>
 <div class="well" style="background:whitesmoke">
        <div    class="row">
         <!-- Unidentified Field -->
<div class="form-group col-sm-3">
        {!! Form::label('unidentified', 'Unidentified:') !!}
        <select name="unidentified" class="form-control" id="unidentified">
                <option value="">Select an Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
    </div>

    <!-- First Name Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('first_name', 'First Name:') !!}
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Last Name Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('last_name', 'Last Name:') !!}
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Middle Name Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('middle_name', 'Middle Name:') !!}
        {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Dob Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('dob', 'Date of Birth:') !!}
        {!! Form::date('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#dob').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: false
            })
        </script>
    @endsection

    <!-- Sex Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('sex', 'Gender:') !!}
        <select name="sex" class="form-control" id="sex">
                <option value="">Select a Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Unknown">Unknown</option>
            </select>
    </div>

    <!-- Nationality Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('nationality', 'Country of nationality:') !!}
        <select name="nationality" class="form-control" id="nationality" >
                <option value="">Select a Country </option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American">America</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="England">England</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>

    </div>


    <!-- Death Date Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('death_date', 'Death Date:') !!}
        {!! Form::date('death_date', null, ['class' => 'form-control','id'=>'death_date']) !!}
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#death_date').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endsection

    <!-- Address Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('address', 'Address:') !!}
        <textarea class="form-control" name="address"  cols="120" rows="2">
            </textarea>
    </div>

    <!-- Parish Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('parish', 'Parish:') !!}
        <select name="parish" class="form-control" id="parish">
                <option value="">Select a parish</option>
                <option value="St.Mary">St.Mary</option>
                <option value="St.Catherine">St.Catherine</option>
                <option value="Portland">Portland</option>
                <option value="St.Ann">St.Ann</option>
                <option value="St.Thomas">St.Thomas</option>
                <option value="Manchester">Manchester</option>
                <option value="St.Andrew">St.Andrew</option>
                <option value="St.Elizabeth">St.Elizabeth</option>
                <option value="Trelawny">Trelawny</option>
                <option value="St.James">St.James</option>
                <option value="Hanover">Hanover</option>
                <option value="Clarendon">Clarendon</option>
                <option value="Kingston">Kingston</option>
                <option value="Westmoreland">Westmoreland</option>
            </select>
    </div>



 </div>
 <button id="CoprseSection"  class="btn btn-primary">Next</button>
</div>

</span>































<span class="CoprseSection2">
<hr>
<h4>  Corpse Section</h4>

<div class="well" style="background:lavenderblush">
        <div    class="row">

    <!-- Pickup Date Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('pickup_date', 'Pickup Date:') !!}
        {!! Form::date('pickup_date', null, ['class' => 'form-control','id'=>'pickup_date']) !!}
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#pickup_date').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endsection

    <!-- Condition Field -->
    <div class="form-group col-sm-3">
            {!! Form::label('condition', 'Condition:') !!}
            <select name="condition" class="form-control" id="condition">
                    <option value="">Select an Option</option>
                    <option value="Burnt">Burnt</option>
                    <option value="Succumbs">Succumbs</option>
                    <option value="Decomposing">Decomposing</option>
                    <option value="skeleton">skeleton</option>
                </select>
        </div>



    <!-- Type Death Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('type_death', 'Type Death:') !!}
        <select name="type_death" class="form-control" id="type_death">
                <option value="">Select an Option</option>
                <option value="Natural">Natural</option>
                <option value="Unnatural">Unnatural</option>
            </select>
    </div>

    <!-- Manner Death Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('manner_death', 'Manner Death:') !!}
        <select name="manner_death" class="form-control" id="manner_death">
                <option value="">Select an Option</option>
                <option value="Accident">Accident</option>
                <option value="Homicide">Homicide</option>
                <option value="Drowned">Drowned</option>
                <option value="Stillborn">Stillborn</option>
                <option value="Undertermined">Undertermined</option>
            </select>
    </div>

    <!-- Anatomy Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('anatomy', 'Anatomy:') !!}
        <select name="anatomy" class="form-control" id="anatomy">
                <option value="">Select an Option</option>
                <option value="Full body">Full body</option>
                <option value="Right foot">Right foot</option>
                <option value="Left foot">Left foot</option>
                <option value="Right arm">Right arm</option>
                <option value="Left arm">Left arm</option>
                <option value="Head">Head</option>
                <option value="Skull">Skull</option>
                <option value="Tarso">Tarso</option>
                <option value=""></option>

            </select>
    </div>

       <!-- Pickup Location Field -->
       <div class="form-group col-sm-9">
            {!! Form::label('pickup_location', 'Pickup Location:') !!}
            {!! Form::text('pickup_location', null, ['class' => 'form-control']) !!}
        </div>


</div>

<button id="CoprseSectionPre"  class="btn btn-default">Previous</button>&emsp;<button id="MorgueSection"  class="btn btn-primary">Next</button>

 </div><br><br><br><br><br><br><br><br>
</span>






































<div class="box box-primary">

    <div class="box-body">
            <br>
        <div class="row">

            <div class="container">

                <!-- Regnum Field -->
                <div class="form-group col-sm-3">
                      {!! Form::label('regNum', 'Regnum:') !!}
                      {!! Form::number('regNum', null, ['class' => 'form-control']) !!}
                  </div>


                  <!-- Rank Id Field -->
                  <div class="form-group col-sm-3">
                          {!! Form::label('rank_id', 'Rank Id:') !!}
                          {!! Form::number('rank_id', null, ['class' => 'form-control']) !!}
                      </div>

               <!-- Investigator First Name Field -->
              <div class="form-group col-sm-3">
                      {!! Form::label('investigator_first_name', 'Investigator First Name:') !!}
                      {!! Form::text('investigator_first_name', null, ['class' => 'form-control']) !!}
                  </div>

                  <!-- Investigator Last Name Field -->
                  <div class="form-group col-sm-3">
                      {!! Form::label('investigator_last_name', 'Investigator Last Name:') !!}
                      {!! Form::text('investigator_last_name', null, ['class' => 'form-control']) !!}
                  </div>



                  <!-- Assign Date Field -->
                  <div class="form-group col-sm-3">
                      {!! Form::label('assign_date', 'Assign Date:') !!}
                      {!! Form::date('assign_date', null, ['class' => 'form-control','id'=>'assign_date']) !!}
                  </div>

                  @section('scripts')
                      <script type="text/javascript">
                          $('#assign_date').datetimepicker({
                              format: 'YYYY-MM-DD HH:mm:ss',
                              useCurrent: false
                          })
                      </script>
                  @endsection

                  <!-- Contact No Field -->
                  <div class="form-group col-sm-3">
                      {!! Form::label('contact_no', 'Contact No:') !!}
                      {!! Form::text('contact_no', null, ['class' => 'form-control']) !!}
                  </div>



                  <!-- Station Id Field -->
                  <div class="form-group col-sm-6">
                      {!! Form::label('station_id', 'Station Id:') !!}
                      {!! Form::number('station_id', null, ['class' => 'form-control']) !!}
                  </div>


                  <br><br>
                  <div class="form-group col-sm-12">
                    <button id="CoprseSectionre" class="btn btn-default">Previous</button>&emsp;<button  class="btn btn-primary" id="adminSetion">Next  </button>

                </div>

               </div>
               <br><br>
               </span>


            </div>
    </div>
</div>







































<span class="MorgueSection">

 <hr>
 <h4>  Morgue Section</h4>

 <div class="well" style="background:paleturquoise">
         <div    class="row">

    <!-- Postmortem Status Field -->
    <div class="form-group col-sm-3">
            {!! Form::label('postmortem_status', 'Postmortem Status:') !!}
            <select name="postmortem_status" class="form-control" id="postmortem_status"">
                    <option value="">Select an Option</option>
                    <option value="Not Requested">Not Requested</option>
                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                </select>
        </div>

        <!-- Postmortem Date Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('postmortem_date', 'Postmortem Date:') !!}
            {!! Form::date('postmortem_date', null, ['class' => 'form-control','id'=>'postmortem_date']) !!}
        </div>

        @section('scripts')
            <script type="text/javascript">
                $('#postmortem_date').datetimepicker({
                    format: 'YYYY-MM-DD HH:mm:ss',
                    useCurrent: false
                })
            </script>
        @endsection

        <!-- Funeral Home Field -->
            <div class="form-group col-sm-3 {{$errors->has('funeralhome_id') ? 'has-error' :''}}">
                {!! Form::label('funeral_home', 'Funeral Home:') !!}
                <select name="funeralhome_id" value="{{Request::old('funeralhome_id')}}" class="form-control" >
                    <option value=""> select a Funeral Home</option>
                        @foreach($funeralhomes as $funeralhome)
                            <option value='{{ $funeralhome->id }}'>{{ $funeralhome->funeralhome}}</option>
                        @endforeach
                </select>
            </div>


        <!-- Pathlogist Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('pathlogist', 'Pathlogist:') !!}
            {!! Form::text('pathlogist', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Cause Of Death Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('cause_of_Death', 'Cause Of Death:') !!}
            <textarea class="form-control" name="cause_of_Death"  cols="120" rows="2">
             </textarea>
        </div>
        </div>
        <button id="CoprseSection2Pre" class="btn btn-default">Previous</button>&emsp;<button  class="btn btn-primary" id="adminSection">Next  </button>
 </div>
<br><br><br><br><br>
</span>


















<span class="adminSection">

 <hr>
 <h4>  Administration Section</h4>

 <div class="well" style="background:skyblue">
         <div    class="row">


    <!-- Finger Print Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('finger_print', 'Finger Print:') !!}
        <select name="finger_print" class="form-control" id="finger_print">
                <option value="">Select an Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
    </div>

    <!-- Finger Print Date Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('finger_print_date', 'Finger Print Date:') !!}
        {!! Form::date('finger_print_date', null, ['class' => 'form-control','id'=>'finger_print_date']) !!}
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#finger_print_date').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endsection

    <!-- Gazetted Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('gazetted', 'Gazetted:') !!}
        <select name="gazetted" class="form-control" id="gazetted">
                <option value="">Select an Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
    </div>

    <!-- Gazetted Date Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('gazetted_date', 'Gazetted Date:') !!}
        {!! Form::date('gazetted_date', null, ['class' => 'form-control','id'=>'gazetted_date']) !!}
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#gazetted_date').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endsection

    <!-- Pauper Burial Requested Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('pauper_burial_requested', 'Pauper Burial Requested:') !!}
        <select name="pauper_burial_requested" class="form-control" id="pauper_burial_requested">
            <option value="">Select an Option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

    </div>

    <!-- Pauper Burial Requested Date Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('pauper_burial_requested_date', 'Pauper Burial Requested Date:') !!}
        {!! Form::date('pauper_burial_requested_date', null, ['class' => 'form-control','id'=>'pauper_burial_requested_date']) !!}
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#pauper_burial_requested_date').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endsection

    <!-- Pauper Burial Approved Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('pauper_burial_approved', 'Pauper Burial Approved:') !!}
        <select name="pauper_burial_approved" class="form-control" id="pauper_burial_approved">
                <option value="">Select an Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
    </div>

    <!-- Pauper Burial Approved Date Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('pauper_burial_approved_date', 'Pauper Burial Approved Date:') !!}
        {!! Form::date('pauper_burial_approved_date', null, ['class' => 'form-control','id'=>'pauper_burial_approved_date']) !!}
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#pauper_burial_approved_date').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endsection

    <!-- Buried Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('buried', 'Buried:') !!}
        <select name="buried" class="form-control"  id="buried">
                <option value="">Select an Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
    </div>

    <!-- Burial Date Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('burial_date', 'Burial Date:') !!}
        {!! Form::date('burial_date', null, ['class' => 'form-control','id'=>'burial_date']) !!}
    </div>

    @section('scripts')
        <script type="text/javascript">
            $('#burial_date').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endsection

         </div>
 </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <button id="prev_MorgueSection"  class="btn btn-default">Previous</button>&emsp;
        <a href="{!! route('corpses.index') !!}" class="btn btn-danger">Cancel</a>&emsp;
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>


</div>
</span>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script>
$('.trigger, .slider').click(function( e) {
    e.preventDefault();
    $('.slider').toggleClass('close');
  });
</script>

<script>
        $(document).ready(function(){
            //$(".CoprseSection").slideUp();
            $(".CoprseSection2").slideUp();
            $(".MorgueSection").slideUp();
            $(".adminSection").slideUp();
            ////////////////////////////////

          $("#CoprseSection").click(function(e){
             e.preventDefault();
             $(".CoprseSection").slideUp();
             $(".CoprseSection2").slideDown();
          });

          $("#CoprseSectionPre").click(function(e){
            e.preventDefault();
             $(".CoprseSection").slideDown();
             $(".CoprseSection2").slideUp();
          });


          $("#MorgueSection").click(function(e){
             e.preventDefault();
             $(".CoprseSection2").slideUp();
             $(".MorgueSection").slideDown();
          });

          $("#CoprseSection2Pre").click(function(e){
             e.preventDefault();
             $(".MorgueSection").slideUp();
             $(".CoprseSection2").slideDown();
          });


          $("#adminSection").click(function(e){
             e.preventDefault();
             $(".MorgueSection").slideUp();
             $(".adminSection").slideDown();
          });

          $("#prev_MorgueSection").click(function(e){
             e.preventDefault();
             $(".MorgueSection").slideDown();
             $(".adminSection").slideUp();
          });


        });






        </script>

