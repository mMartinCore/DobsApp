@extends('layouts.app')

@section('title', '| Permissions')

@section('content')

<link rel="stylesheet" href="{{asset('datePicker/bootstrap-datepicker.css')}}">
<script src="{{asset('datePicker/bootstrap-datepicker.js')}}"></script>
<style>

#imagebg {
  border: 1px solid black;
  padding: 15px;


  width: 215px;
  height: 200;
  background-repeat: no-repeat;

}
</style>
<br><br>

<div class="col-lg-10 col-lg-offset-1" style="background:white"><br>
       <div class="box text-left box-default">
                     <div class="box-header   with-border">
                       <h3 class="box-title">
                           <a href="/officers" class="btn btn-default   ">Go Back</a>
                           Create New Member </h3>
                      </div>
                  </div>

        {!! Form::open(['action' => 'OfficersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
           <div class="well">
                <div class="row">
                      <div class="  imgClick   col-sx-12    col-sm-12   col-md-12  col-lg-3 ">
                            <div id="imagebg">
                                    <div class="form-group img1">   <br>
                                    </div>
                                </div>

                        <div class="    col-sx-2 " style="font-size:xx-small">
                                {{Form::file('image')}}
                        </div>

                        <br>
                     </div>


                     <div class="  col-sx-12    col-sm-12  col-md-12  col-lg-3 ">
                            <div class="form-group {{$errors->has('id') ? 'has-error' :''}} ">
                                    {{Form::label('id','Computer Number')}}
                                    {{Form::text('id', '', ['class' => 'form-control', 'placeholder' => 'eg":15506'])}}
                                    <span>.</span>
                                </div>


                                <div class="form-group {{$errors->has('nis') ? 'has-error' :''}} ">
                                        {{Form::label('nis', 'NIS')}}
                                    {{Form::text('nis', '', ['class' => 'form-control', 'placeholder' => 'P- 89585..'])}}
                                    <span>.</span>
                                 </div>

                                 <div class="form-group {{$errors->has('enlist_date') ? 'has-error' :''}}">
                                        {{Form::label('enlist_date', 'Enlistment Date')}}
                                        {{Form::text('enlist_date', '', [ 'id'=>'enlist_date','class' => ' enlist_date form-control', 'placeholder' => 'eg:'])}}
                                        <span>.</span>
                                    </div>


                      </div>



                      <div class="  col-sx-12    col-sm-12   col-md-12  col-lg-3 ">
                            <div class="form-group {{$errors->has('reg_no') ? 'has-error' :''}}">
                                  {{Form::label('reg_no', 'Regulation Number')}}
                                    {{Form::text('reg_no', '', ['class' => 'form-control', 'placeholder' => 'eg":15506'])}}
                                    <span>.</span>
                             </div>

                                <div class="form-group {{$errors->has('suffix') ? 'has-error' :''}}">
                                        {{Form::label('suffix', 'Suffix')}}
                                        {{Form::text('Suffix', '', ['class' => 'form-control', 'placeholder' => 'eg:OD'])}}
                                        <span>.</span>
                                 </div>
                                 <div class="form-group {{$errors->has('dob') ? 'has-error' :''}}">
                                        {{Form::label('dob', 'Date of Birth')}}
                                        {{Form::text('dob', '', ['id' => 'dob','class' => ' dob form-control', 'placeholder' => '1989-08-17'])}}
                                        <span>.</span>
                                    </div>
                      </div>



                      <div class="   col-sx-12    col-sm-12  col-md-12  col-lg-3  ">
                            <div class="form-group {{$errors->has('trn') ? 'has-error' :''}}">
                                    {{Form::label('trn', 'TRN')}}
                                    {{Form::text('trn', '', ['class' => 'form-control', 'placeholder' => 'eg:117008498'])}}
                                    <span>.</span>
                                </div>

                                <div class="form-group {{$errors->has('title') ? 'has-error' :''}}">
                                        {{Form::label('title', 'Title')}}
                                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                                        <span>.</span>
                                 </div>
                                 <div class="form-group {{$errors->has('sex') ? 'has-error' :''}} ">
                                        {{Form::label('sex', 'Gender')}}
                                        <select name="sex" value="{{Request::old('sex')}}" class="form-control" >
                                        <option value="">----------------Select Gender---------------</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        </select>
                                       <span>.</span>


                                    </div>


                      </div>




                </div>
        </div>

        <div class="row">
                <div class="col-6 col-sm-4">    <div class="form-group">
                        {{Form::label('status', 'Status')}}
                        <input class="form-control" type="text" value="Active"  disabled>

                        <span>.</span>
                 </div></div>

                 <div class="col-6 col-sm-4">   <div class="form-group {{$errors->has('rank_id') ? 'has-error' :''}}">
                            {{Form::label('rank_id', 'Select Rank')}}
                            <select name="rank_id" value="{{Request::old('rank_id')}}" class="form-control" >
                             <option value="">----------------------Select Rank---------------</option>
                                   @foreach($ranks as $rank)
                                          <option value='{{ $rank->id }}'>{{ $rank->rank}}</option>
                                   @endforeach
                            </select>





                            <span>.</span>
                     </div> </div>


                 <div class="col-6 col-sm-4">   <div class="form-group {{$errors->has('original_rank') ? 'has-error' :''}}">
                        {{Form::label('original_rank', 'Select Original Rank')}}
                        <select name="original_rank" class="form-control" >
                     <option value="">----------------Select Original Rank------------</option>
                     <option value="Constable">District Constable</option>
                       <option value="Constable">Constable</option>
                        <option value="Corporal">Corporal</option>
                        <option value="Sergeant">Sergeant</option>
                        <option value="Inspector">Inspector</option>
                        <option value="Assistant Superintendent">Assistant Superintendent</option>
                        <option value="Deputy Superintendent"> Deputy Superintendent</option>
                        <option value="Superintendent">Superintendent</option>
                        <option value="Senior Superintendent">Senior Superintendent</option>
                        <option value="Assistant Commissioner">Assistant Commissioner</option>
                        <option value="Assistant Commissioner">Deputy Commissioner</option>
                        <option value="Assistant Commissioner">Commissioner</option>
                        </select>
                        <span>.</span>
                 </div> </div>
              </div>




              <div class="row">
                    <div class="col-6 col-sm-4">    <div class="form-group {{$errors->has('last_name') ? 'has-error' :''}}">
                            {{Form::label('last_name', 'Last Name')}}
                            {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => ''])}}
                            <span>.</span>
                     </div></div>
                     <div class="col-6 col-sm-4">   <div class="form-group {{$errors->has('first_name') ? 'has-error' :''}}">
                            {{Form::label('first_name', 'First Name')}}
                            {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => ''])}}
                            <span>.</span>
                     </div> </div>
                    <div class="col-6 col-sm-4">    <div class="form-group {{$errors->has('middle_name') ? 'has-error' :''}}">
                            {{Form::label('middle_name', 'Middle Name')}}
                            {{Form::text('middle_name', '', ['class' => 'form-control', 'placeholder' => ''])}}
                            <span>.</span>
                     </div></div>

                  </div>



                  <div class="row">
                        <div class="col-6 col-sm-6">    <div class="form-group {{$errors->has('station') ? 'has-error' :''}}">
                                {{Form::label('station', 'Station')}}
                                {{Form::text('station', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                <span>.</span>
                         </div></div>
                         <div class="col-6 col-sm-6">   <div class="form-group {{$errors->has('section') ? 'has-error' :''}}">
                                {{Form::label('section', 'Section')}}
                                {{Form::text('section', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                <span>.</span>
                         </div> </div>

                      </div>




        <div class="form-group {{$errors->has('division') ? 'has-error' :''}}">
            {{Form::label('division', 'Division')}}
            <select name="division" value="{{Request::old('division_id')}}" class="form-control" >
                    <option value="">------------------------------------------------------------------------------------------------------Select Division------------------------------------------------------------------------------------------------------</option>
                          @foreach($divisions as $division)
                                 <option value='{{ $division->id }}'>{{ $division->division}}</option>
                          @endforeach
            </select>
        </div>



        <div class="row">
        <div class="col-6 col-sm-6">    <div class="form-group {{$errors->has('nationality') ? 'has-error' :''}}">
                {{Form::label('nationality', 'Nationality')}}
                {{Form::text('nationality', '', ['class' => 'form-control', 'placeholder' => ''])}}
                <span>.</span>
         </div></div>
         <div class="col-6 col-sm-6">   <div class="form-group {{$errors->has('cob') ? 'has-error' :''}}">
                {{Form::label('cob', 'Country Of Birth')}}
                <select name="cob" class="form-control" >
                     <option value="">----------------Select Country------------</option>
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

                <span>.</span>
         </div> </div>

      </div>

        <div class="form-group {{$errors->has('remarks') ? 'has-error' :''}}">

            {{Form::label('remarks', 'Remarks')}}
            {{Form::textarea('remarks', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Type here...'])}}
        </div>




        @role('Writer|Administer')
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        @endrole
        {!! Form::close() !!} <br><br>
        <br>
 </div>

 <br><br>   <br><br>   <br><br>   <br><br>

<script type="text/javascript">
       $('.dob').datepicker({
          format: 'yyyy-mm-dd'
         });


         $('#enlist_date').datepicker({
          format: 'yyyy-mm-dd'
         });


   </script>

<script>
placeholder="";
$(document).ready(function() {

    var placeholder= '<img src="{{url('../')}}/storage/images/placeholder.png"width="185" height="225" class="img-circle"/> ';

       $('.img1').append(placeholder);
})






		//indirect ajax
		//file collection array
		var fileCollection = new Array();

		$('.imgClick').on('change',function(e){

			var files = e.target.files;

			$.each(files, function(i, file){

				fileCollection.push(file);

				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = function(e){
				var template = '<form action="/upload">'+
						'<img  width="190px" height="215px"  class="   rounded"  src="'+e.target.result+'   "> '



					'</form>';
                                   $('.img1').html("");

					$('.img1').append(template);
				};

			});

		});



	</script>


 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
