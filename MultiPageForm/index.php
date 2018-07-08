<!DOCTYPE html>
<html>
	<head>
		<title>
			Passport Form
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			* {
			box-sizing: border-box;
			}
			
			.column 
			{
			float: left;
			width: 50%;
			padding: 10px;
			}
			
			.row:after 
			{
			content: "";
			display: table;
			clear: both;
			}
			
		</style>
	</head>
	
	<body>
		<h3>
			PASSPORT APPLICATION - STAGE 1
		</h3>
		<p>
			Fields marked with <font color = "red">(*)</font> are mandatory.
		</p>
		<hr/>
		
		<form action = "indexHandler.php" method = "post" name = "page1" onsubmit = "return validation()" novalidate>
			<fieldset>
				<div class = "row">
					<div class = "column">
						<table>
							<tr>
								<td colspan = "2">
									<h4>Passport Application Information</h4>
								</td>
							</tr>
							<tr>
								<td>
									Applying in:<font color = "red">*</font> 
								</td>
								<td>
									<select name = "applyingin" required>
										<option value="">-SELECT-</option>
										<option value="Afganistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
										<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
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
										<option value="Cote DIvoire">Cote D'Ivoire</option>
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
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
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
										<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
										<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
										<option value="Saipan">Saipan</option>
										<option value="Samoa">Samoa</option>
										<option value="Samoa American">Samoa American</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
										<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Erimates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
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
										<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
										<option value="Yemen">Yemen</option>
										<option value="Zaire">Zaire</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
										
									</select>
									<font color = "red"  size = "1"><div id = "applyingin_err"></div></font>
								</td>
							</tr>
							<tr>
								<td>
									Application Type:
								</td>
								<td>
									<b> NEW APPLICATION </b>
								</td>
							</tr>
							
							<tr>
								<td>
									Passport Type:<font color = "red">*</font>
								</td>
								<td>
									<select name = "ptype" required>
										<option value = "">-SELECT-</option>
										<option value = "ORDINARY">ORDINARY</option>
										<option value = "DIPLOMATIC">DIPLOMATIC</option>
										<option value = "OFFICIAL">OFFICIAL</option>
									</select>
									<font color = "red"  size = "1"><div id = "ptype_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Delivery Type: 
								</td>
								<td>
									<input type = "radio" name = "dtype" value = "Regular">
									Regular
									</input>
									<br/>
									<input type = "radio" name = "dtype" value = "Express">
									Express
									</input>
								</td>
							</tr>
							
							<tr colspan = "2">
								<td>
									<h4>Personal Information</h4>
								</td>
							</tr>
							
							<tr>
								<td>
									Name of applicant:<font color = "red">*</font> 
								</td>
								<td>
									<input type = "text" name = "nameofapplicant" id = "nameofapplicantid" pattern = "^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" required>
									</input>
								<font color = "red" size = "1"><div id = "nameofapplicant_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									First Part (Given Name):
								</td>
								<td>
									<input type = "text" name = "firstpart" id = "firstpartid" pattern = "^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$">
									</input>
									<font color = "red" size = "1"><div id = "firstpart_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Second Part (Surname):<font color = "red">*</font>
								</td>
								<td>
									<input type = "text" name = "secondpart"  id = "secondpartid" pattern = "^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" required>
									</input >
									<font color = "red" size = "1"><div id = "secondpart_err"></div></font>
								</td>
							</tr>
							<tr>
								<td colspan = "2">
									<br/>
								</td>
							</tr>
							
							<tr>
								<td colspan = "2">
									Guardian <input type = "checkbox" name = "guardian">
									</input>
									<font color = "red">"Tick"</font>
									only if Applicant is legally adapted 
								</td>
							</tr>
							
							<tr>
								<td colspan = "2">
									<br/>
								</td>
							</tr>
							
							<tr>
								<td>
									Father's name:<font color = "red">*</font>
								</td>
								<td>
									<input type = "text" name = "fathersname" id = "fathersnameid" pattern = "^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" required>
									</input >
									<font color = "red" size = "1"><div id = "fathersname_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Father's Nationality:<font color = "red">*</font>
								</td>
								<td>
									<select name = "fathersnationality" id = "fathersnationalityid" required>
										<option value="">-SELECT-</option>
										<option value="afghan">Afghan</option>
										<option value="albanian">Albanian</option>
										<option value="algerian">Algerian</option>
										<option value="american">American</option>
										<option value="andorran">Andorran</option>
										<option value="angolan">Angolan</option>
										<option value="antiguans">Antiguans</option>
										<option value="argentinean">Argentinean</option>
										<option value="armenian">Armenian</option>
										<option value="australian">Australian</option>
										<option value="austrian">Austrian</option>
										<option value="azerbaijani">Azerbaijani</option>
										<option value="bahamian">Bahamian</option>
										<option value="bahraini">Bahraini</option>
										<option value="bangladeshi">Bangladeshi</option>
										<option value="barbadian">Barbadian</option>
										<option value="barbudans">Barbudans</option>
										<option value="batswana">Batswana</option>
										<option value="belarusian">Belarusian</option>
										<option value="belgian">Belgian</option>
										<option value="belizean">Belizean</option>
										<option value="beninese">Beninese</option>
										<option value="bhutanese">Bhutanese</option>
										<option value="bolivian">Bolivian</option>
										<option value="bosnian">Bosnian</option>
										<option value="brazilian">Brazilian</option>
										<option value="british">British</option>
										<option value="bruneian">Bruneian</option>
										<option value="bulgarian">Bulgarian</option>
										<option value="burkinabe">Burkinabe</option>
										<option value="burmese">Burmese</option>
										<option value="burundian">Burundian</option>
										<option value="cambodian">Cambodian</option>
										<option value="cameroonian">Cameroonian</option>
										<option value="canadian">Canadian</option>
										<option value="cape verdean">Cape Verdean</option>
										<option value="central african">Central African</option>
										<option value="chadian">Chadian</option>
										<option value="chilean">Chilean</option>
										<option value="chinese">Chinese</option>
										<option value="colombian">Colombian</option>
										<option value="comoran">Comoran</option>
										<option value="congolese">Congolese</option>
										<option value="costa rican">Costa Rican</option>
										<option value="croatian">Croatian</option>
										<option value="cuban">Cuban</option>
										<option value="cypriot">Cypriot</option>
										<option value="czech">Czech</option>
										<option value="danish">Danish</option>
										<option value="djibouti">Djibouti</option>
										<option value="dominican">Dominican</option>
										<option value="dutch">Dutch</option>
										<option value="east timorese">East Timorese</option>
										<option value="ecuadorean">Ecuadorean</option>
										<option value="egyptian">Egyptian</option>
										<option value="emirian">Emirian</option>
										<option value="equatorial guinean">Equatorial Guinean</option>
										<option value="eritrean">Eritrean</option>
										<option value="estonian">Estonian</option>
										<option value="ethiopian">Ethiopian</option>
										<option value="fijian">Fijian</option>
										<option value="filipino">Filipino</option>
										<option value="finnish">Finnish</option>
										<option value="french">French</option>
										<option value="gabonese">Gabonese</option>
										<option value="gambian">Gambian</option>
										<option value="georgian">Georgian</option>
										<option value="german">German</option>
										<option value="ghanaian">Ghanaian</option>
										<option value="greek">Greek</option>
										<option value="grenadian">Grenadian</option>
										<option value="guatemalan">Guatemalan</option>
										<option value="guinea-bissauan">Guinea-Bissauan</option>
										<option value="guinean">Guinean</option>
										<option value="guyanese">Guyanese</option>
										<option value="haitian">Haitian</option>
										<option value="herzegovinian">Herzegovinian</option>
										<option value="honduran">Honduran</option>
										<option value="hungarian">Hungarian</option>
										<option value="icelander">Icelander</option>
										<option value="indian">Indian</option>
										<option value="indonesian">Indonesian</option>
										<option value="iranian">Iranian</option>
										<option value="iraqi">Iraqi</option>
										<option value="irish">Irish</option>
										<option value="israeli">Israeli</option>
										<option value="italian">Italian</option>
										<option value="ivorian">Ivorian</option>
										<option value="jamaican">Jamaican</option>
										<option value="japanese">Japanese</option>
										<option value="jordanian">Jordanian</option>
										<option value="kazakhstani">Kazakhstani</option>
										<option value="kenyan">Kenyan</option>
										<option value="kittian and nevisian">Kittian and Nevisian</option>
										<option value="kuwaiti">Kuwaiti</option>
										<option value="kyrgyz">Kyrgyz</option>
										<option value="laotian">Laotian</option>
										<option value="latvian">Latvian</option>
										<option value="lebanese">Lebanese</option>
										<option value="liberian">Liberian</option>
										<option value="libyan">Libyan</option>
										<option value="liechtensteiner">Liechtensteiner</option>
										<option value="lithuanian">Lithuanian</option>
										<option value="luxembourger">Luxembourger</option>
										<option value="macedonian">Macedonian</option>
										<option value="malagasy">Malagasy</option>
										<option value="malawian">Malawian</option>
										<option value="malaysian">Malaysian</option>
										<option value="maldivan">Maldivan</option>
										<option value="malian">Malian</option>
										<option value="maltese">Maltese</option>
										<option value="marshallese">Marshallese</option>
										<option value="mauritanian">Mauritanian</option>
										<option value="mauritian">Mauritian</option>
										<option value="mexican">Mexican</option>
										<option value="micronesian">Micronesian</option>
										<option value="moldovan">Moldovan</option>
										<option value="monacan">Monacan</option>
										<option value="mongolian">Mongolian</option>
										<option value="moroccan">Moroccan</option>
										<option value="mosotho">Mosotho</option>
										<option value="motswana">Motswana</option>
										<option value="mozambican">Mozambican</option>
										<option value="namibian">Namibian</option>
										<option value="nauruan">Nauruan</option>
										<option value="nepalese">Nepalese</option>
										<option value="new zealander">New Zealander</option>
										<option value="ni-vanuatu">Ni-Vanuatu</option>
										<option value="nicaraguan">Nicaraguan</option>
										<option value="nigerien">Nigerien</option>
										<option value="north korean">North Korean</option>
										<option value="northern irish">Northern Irish</option>
										<option value="norwegian">Norwegian</option>
										<option value="omani">Omani</option>
										<option value="pakistani">Pakistani</option>
										<option value="palauan">Palauan</option>
										<option value="panamanian">Panamanian</option>
										<option value="papua new guinean">Papua New Guinean</option>
										<option value="paraguayan">Paraguayan</option>
										<option value="peruvian">Peruvian</option>
										<option value="polish">Polish</option>
										<option value="portuguese">Portuguese</option>
										<option value="qatari">Qatari</option>
										<option value="romanian">Romanian</option>
										<option value="russian">Russian</option>
										<option value="rwandan">Rwandan</option>
										<option value="saint lucian">Saint Lucian</option>
										<option value="salvadoran">Salvadoran</option>
										<option value="samoan">Samoan</option>
										<option value="san marinese">San Marinese</option>
										<option value="sao tomean">Sao Tomean</option>
										<option value="saudi">Saudi</option>
										<option value="scottish">Scottish</option>
										<option value="senegalese">Senegalese</option>
										<option value="serbian">Serbian</option>
										<option value="seychellois">Seychellois</option>
										<option value="sierra leonean">Sierra Leonean</option>
										<option value="singaporean">Singaporean</option>
										<option value="slovakian">Slovakian</option>
										<option value="slovenian">Slovenian</option>
										<option value="solomon islander">Solomon Islander</option>
										<option value="somali">Somali</option>
										<option value="south african">South African</option>
										<option value="south korean">South Korean</option>
										<option value="spanish">Spanish</option>
										<option value="sri lankan">Sri Lankan</option>
										<option value="sudanese">Sudanese</option>
										<option value="surinamer">Surinamer</option>
										<option value="swazi">Swazi</option>
										<option value="swedish">Swedish</option>
										<option value="swiss">Swiss</option>
										<option value="syrian">Syrian</option>
										<option value="taiwanese">Taiwanese</option>
										<option value="tajik">Tajik</option>
										<option value="tanzanian">Tanzanian</option>
										<option value="thai">Thai</option>
										<option value="togolese">Togolese</option>
										<option value="tongan">Tongan</option>
										<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
										<option value="tunisian">Tunisian</option>
										<option value="turkish">Turkish</option>
										<option value="tuvaluan">Tuvaluan</option>
										<option value="ugandan">Ugandan</option>
										<option value="ukrainian">Ukrainian</option>
										<option value="uruguayan">Uruguayan</option>
										<option value="uzbekistani">Uzbekistani</option>
										<option value="venezuelan">Venezuelan</option>
										<option value="vietnamese">Vietnamese</option>
										<option value="welsh">Welsh</option>
										<option value="yemenite">Yemenite</option>
										<option value="zambian">Zambian</option>
										<option value="zimbabwean">Zimbabwean</option>
									</select>
									<font color = "red" size = "1"><div id = "fathersnationality_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Father's Profession:<font color = "red">*</font>
								</td>
								<td>
									<select name = "fathersprofession" id = "fathersprofessionid" required>
										<option value = "">-SELECT-</option>
										<option value = "ACCOUNTANT">ACCOUNTANT</option>
										<option value = "ACTOR">ACTOR</option>
										<option value = "BANKER">BANKER</option>
										<option value = "BARBER">BARBER</option>
										<option value = "BUSINESSMAN">BUSINESSMAN</option>
										<option value = "DOCTOR">DOCTOR</option>
										<option value = "ENGINEER">ENGINEER</option>
										<option value = "LAWYER">LAWYER</option>
									</select>
									<font color = "red" size = "1"><div id = "fathersprofession_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Mother's name:<font color = "red">*</font>
								</td>
								<td>
									<input type = "text" name = "mothersname" id = "mothersnameid" pattern = "^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$" required>
									</input >
									<font color = "red" size = "1"><div id = "mothersname_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Mother's Nationality:<font color = "red">*</font>
								</td>
								<td>
									<select name = "mothersnationality" id = "mothersnationalityid" required>
										<option value="">-SELECT-</option>
										<option value="afghan">Afghan</option>
										<option value="albanian">Albanian</option>
										<option value="algerian">Algerian</option>
										<option value="american">American</option>
										<option value="andorran">Andorran</option>
										<option value="angolan">Angolan</option>
										<option value="antiguans">Antiguans</option>
										<option value="argentinean">Argentinean</option>
										<option value="armenian">Armenian</option>
										<option value="australian">Australian</option>
										<option value="austrian">Austrian</option>
										<option value="azerbaijani">Azerbaijani</option>
										<option value="bahamian">Bahamian</option>
										<option value="bahraini">Bahraini</option>
										<option value="bangladeshi">Bangladeshi</option>
										<option value="barbadian">Barbadian</option>
										<option value="barbudans">Barbudans</option>
										<option value="batswana">Batswana</option>
										<option value="belarusian">Belarusian</option>
										<option value="belgian">Belgian</option>
										<option value="belizean">Belizean</option>
										<option value="beninese">Beninese</option>
										<option value="bhutanese">Bhutanese</option>
										<option value="bolivian">Bolivian</option>
										<option value="bosnian">Bosnian</option>
										<option value="brazilian">Brazilian</option>
										<option value="british">British</option>
										<option value="bruneian">Bruneian</option>
										<option value="bulgarian">Bulgarian</option>
										<option value="burkinabe">Burkinabe</option>
										<option value="burmese">Burmese</option>
										<option value="burundian">Burundian</option>
										<option value="cambodian">Cambodian</option>
										<option value="cameroonian">Cameroonian</option>
										<option value="canadian">Canadian</option>
										<option value="cape verdean">Cape Verdean</option>
										<option value="central african">Central African</option>
										<option value="chadian">Chadian</option>
										<option value="chilean">Chilean</option>
										<option value="chinese">Chinese</option>
										<option value="colombian">Colombian</option>
										<option value="comoran">Comoran</option>
										<option value="congolese">Congolese</option>
										<option value="costa rican">Costa Rican</option>
										<option value="croatian">Croatian</option>
										<option value="cuban">Cuban</option>
										<option value="cypriot">Cypriot</option>
										<option value="czech">Czech</option>
										<option value="danish">Danish</option>
										<option value="djibouti">Djibouti</option>
										<option value="dominican">Dominican</option>
										<option value="dutch">Dutch</option>
										<option value="east timorese">East Timorese</option>
										<option value="ecuadorean">Ecuadorean</option>
										<option value="egyptian">Egyptian</option>
										<option value="emirian">Emirian</option>
										<option value="equatorial guinean">Equatorial Guinean</option>
										<option value="eritrean">Eritrean</option>
										<option value="estonian">Estonian</option>
										<option value="ethiopian">Ethiopian</option>
										<option value="fijian">Fijian</option>
										<option value="filipino">Filipino</option>
										<option value="finnish">Finnish</option>
										<option value="french">French</option>
										<option value="gabonese">Gabonese</option>
										<option value="gambian">Gambian</option>
										<option value="georgian">Georgian</option>
										<option value="german">German</option>
										<option value="ghanaian">Ghanaian</option>
										<option value="greek">Greek</option>
										<option value="grenadian">Grenadian</option>
										<option value="guatemalan">Guatemalan</option>
										<option value="guinea-bissauan">Guinea-Bissauan</option>
										<option value="guinean">Guinean</option>
										<option value="guyanese">Guyanese</option>
										<option value="haitian">Haitian</option>
										<option value="herzegovinian">Herzegovinian</option>
										<option value="honduran">Honduran</option>
										<option value="hungarian">Hungarian</option>
										<option value="icelander">Icelander</option>
										<option value="indian">Indian</option>
										<option value="indonesian">Indonesian</option>
										<option value="iranian">Iranian</option>
										<option value="iraqi">Iraqi</option>
										<option value="irish">Irish</option>
										<option value="israeli">Israeli</option>
										<option value="italian">Italian</option>
										<option value="ivorian">Ivorian</option>
										<option value="jamaican">Jamaican</option>
										<option value="japanese">Japanese</option>
										<option value="jordanian">Jordanian</option>
										<option value="kazakhstani">Kazakhstani</option>
										<option value="kenyan">Kenyan</option>
										<option value="kittian and nevisian">Kittian and Nevisian</option>
										<option value="kuwaiti">Kuwaiti</option>
										<option value="kyrgyz">Kyrgyz</option>
										<option value="laotian">Laotian</option>
										<option value="latvian">Latvian</option>
										<option value="lebanese">Lebanese</option>
										<option value="liberian">Liberian</option>
										<option value="libyan">Libyan</option>
										<option value="liechtensteiner">Liechtensteiner</option>
										<option value="lithuanian">Lithuanian</option>
										<option value="luxembourger">Luxembourger</option>
										<option value="macedonian">Macedonian</option>
										<option value="malagasy">Malagasy</option>
										<option value="malawian">Malawian</option>
										<option value="malaysian">Malaysian</option>
										<option value="maldivan">Maldivan</option>
										<option value="malian">Malian</option>
										<option value="maltese">Maltese</option>
										<option value="marshallese">Marshallese</option>
										<option value="mauritanian">Mauritanian</option>
										<option value="mauritian">Mauritian</option>
										<option value="mexican">Mexican</option>
										<option value="micronesian">Micronesian</option>
										<option value="moldovan">Moldovan</option>
										<option value="monacan">Monacan</option>
										<option value="mongolian">Mongolian</option>
										<option value="moroccan">Moroccan</option>
										<option value="mosotho">Mosotho</option>
										<option value="motswana">Motswana</option>
										<option value="mozambican">Mozambican</option>
										<option value="namibian">Namibian</option>
										<option value="nauruan">Nauruan</option>
										<option value="nepalese">Nepalese</option>
										<option value="new zealander">New Zealander</option>
										<option value="ni-vanuatu">Ni-Vanuatu</option>
										<option value="nicaraguan">Nicaraguan</option>
										<option value="nigerien">Nigerien</option>
										<option value="north korean">North Korean</option>
										<option value="northern irish">Northern Irish</option>
										<option value="norwegian">Norwegian</option>
										<option value="omani">Omani</option>
										<option value="pakistani">Pakistani</option>
										<option value="palauan">Palauan</option>
										<option value="panamanian">Panamanian</option>
										<option value="papua new guinean">Papua New Guinean</option>
										<option value="paraguayan">Paraguayan</option>
										<option value="peruvian">Peruvian</option>
										<option value="polish">Polish</option>
										<option value="portuguese">Portuguese</option>
										<option value="qatari">Qatari</option>
										<option value="romanian">Romanian</option>
										<option value="russian">Russian</option>
										<option value="rwandan">Rwandan</option>
										<option value="saint lucian">Saint Lucian</option>
										<option value="salvadoran">Salvadoran</option>
										<option value="samoan">Samoan</option>
										<option value="san marinese">San Marinese</option>
										<option value="sao tomean">Sao Tomean</option>
										<option value="saudi">Saudi</option>
										<option value="scottish">Scottish</option>
										<option value="senegalese">Senegalese</option>
										<option value="serbian">Serbian</option>
										<option value="seychellois">Seychellois</option>
										<option value="sierra leonean">Sierra Leonean</option>
										<option value="singaporean">Singaporean</option>
										<option value="slovakian">Slovakian</option>
										<option value="slovenian">Slovenian</option>
										<option value="solomon islander">Solomon Islander</option>
										<option value="somali">Somali</option>
										<option value="south african">South African</option>
										<option value="south korean">South Korean</option>
										<option value="spanish">Spanish</option>
										<option value="sri lankan">Sri Lankan</option>
										<option value="sudanese">Sudanese</option>
										<option value="surinamer">Surinamer</option>
										<option value="swazi">Swazi</option>
										<option value="swedish">Swedish</option>
										<option value="swiss">Swiss</option>
										<option value="syrian">Syrian</option>
										<option value="taiwanese">Taiwanese</option>
										<option value="tajik">Tajik</option>
										<option value="tanzanian">Tanzanian</option>
										<option value="thai">Thai</option>
										<option value="togolese">Togolese</option>
										<option value="tongan">Tongan</option>
										<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
										<option value="tunisian">Tunisian</option>
										<option value="turkish">Turkish</option>
										<option value="tuvaluan">Tuvaluan</option>
										<option value="ugandan">Ugandan</option>
										<option value="ukrainian">Ukrainian</option>
										<option value="uruguayan">Uruguayan</option>
										<option value="uzbekistani">Uzbekistani</option>
										<option value="venezuelan">Venezuelan</option>
										<option value="vietnamese">Vietnamese</option>
										<option value="welsh">Welsh</option>
										<option value="yemenite">Yemenite</option>
										<option value="zambian">Zambian</option>
										<option value="zimbabwean">Zimbabwean</option>
									</select>
									<font color = "red" size = "1"><div id = "mothersnationality_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Mother's Profession:<font color = "red">*</font>
								</td>
								<td>
									<select name = "mothersprofession"  id = "mothersprofessionid" required>
										<option value = "">-SELECT-</option>
										<option value = "ACCOUNTANT">ACCOUNTANT</option>
										<option value = "ACTOR">ACTOR</option>
										<option value = "BANKER">BANKER</option>
										<option value = "BARBER">BARBER</option>
										<option value = "BUSINESSMAN">BUSINESSMAN</option>
										<option value = "DOCTOR">DOCTOR</option>
										<option value = "ENGINEER">ENGINEER</option>
										<option value = "LAWYER">LAWYER</option>
									</select>
									<font color = "red" size = "1"><div id = "mothersprofession_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Spouse's name:
								</td>
								<td>
									<input type = "text" name = "spousesname" id = "spousesnameid" pattern = "^([a-zA-Z]+)((' |[ ]|[-])([a-zA-Z]*))*$">
									</input >
									<font color = "red" size = "1"><div id = "spousesname_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Spouse's Nationality:
								</td>
								<td>
									<select name = "spousesnationality" id = "spousesnationalityid" >
										<option value="">-SELECT-</option>
										<option value="afghan">Afghan</option>
										<option value="albanian">Albanian</option>
										<option value="algerian">Algerian</option>
										<option value="american">American</option>
										<option value="andorran">Andorran</option>
										<option value="angolan">Angolan</option>
										<option value="antiguans">Antiguans</option>
										<option value="argentinean">Argentinean</option>
										<option value="armenian">Armenian</option>
										<option value="australian">Australian</option>
										<option value="austrian">Austrian</option>
										<option value="azerbaijani">Azerbaijani</option>
										<option value="bahamian">Bahamian</option>
										<option value="bahraini">Bahraini</option>
										<option value="bangladeshi">Bangladeshi</option>
										<option value="barbadian">Barbadian</option>
										<option value="barbudans">Barbudans</option>
										<option value="batswana">Batswana</option>
										<option value="belarusian">Belarusian</option>
										<option value="belgian">Belgian</option>
										<option value="belizean">Belizean</option>
										<option value="beninese">Beninese</option>
										<option value="bhutanese">Bhutanese</option>
										<option value="bolivian">Bolivian</option>
										<option value="bosnian">Bosnian</option>
										<option value="brazilian">Brazilian</option>
										<option value="british">British</option>
										<option value="bruneian">Bruneian</option>
										<option value="bulgarian">Bulgarian</option>
										<option value="burkinabe">Burkinabe</option>
										<option value="burmese">Burmese</option>
										<option value="burundian">Burundian</option>
										<option value="cambodian">Cambodian</option>
										<option value="cameroonian">Cameroonian</option>
										<option value="canadian">Canadian</option>
										<option value="cape verdean">Cape Verdean</option>
										<option value="central african">Central African</option>
										<option value="chadian">Chadian</option>
										<option value="chilean">Chilean</option>
										<option value="chinese">Chinese</option>
										<option value="colombian">Colombian</option>
										<option value="comoran">Comoran</option>
										<option value="congolese">Congolese</option>
										<option value="costa rican">Costa Rican</option>
										<option value="croatian">Croatian</option>
										<option value="cuban">Cuban</option>
										<option value="cypriot">Cypriot</option>
										<option value="czech">Czech</option>
										<option value="danish">Danish</option>
										<option value="djibouti">Djibouti</option>
										<option value="dominican">Dominican</option>
										<option value="dutch">Dutch</option>
										<option value="east timorese">East Timorese</option>
										<option value="ecuadorean">Ecuadorean</option>
										<option value="egyptian">Egyptian</option>
										<option value="emirian">Emirian</option>
										<option value="equatorial guinean">Equatorial Guinean</option>
										<option value="eritrean">Eritrean</option>
										<option value="estonian">Estonian</option>
										<option value="ethiopian">Ethiopian</option>
										<option value="fijian">Fijian</option>
										<option value="filipino">Filipino</option>
										<option value="finnish">Finnish</option>
										<option value="french">French</option>
										<option value="gabonese">Gabonese</option>
										<option value="gambian">Gambian</option>
										<option value="georgian">Georgian</option>
										<option value="german">German</option>
										<option value="ghanaian">Ghanaian</option>
										<option value="greek">Greek</option>
										<option value="grenadian">Grenadian</option>
										<option value="guatemalan">Guatemalan</option>
										<option value="guinea-bissauan">Guinea-Bissauan</option>
										<option value="guinean">Guinean</option>
										<option value="guyanese">Guyanese</option>
										<option value="haitian">Haitian</option>
										<option value="herzegovinian">Herzegovinian</option>
										<option value="honduran">Honduran</option>
										<option value="hungarian">Hungarian</option>
										<option value="icelander">Icelander</option>
										<option value="indian">Indian</option>
										<option value="indonesian">Indonesian</option>
										<option value="iranian">Iranian</option>
										<option value="iraqi">Iraqi</option>
										<option value="irish">Irish</option>
										<option value="israeli">Israeli</option>
										<option value="italian">Italian</option>
										<option value="ivorian">Ivorian</option>
										<option value="jamaican">Jamaican</option>
										<option value="japanese">Japanese</option>
										<option value="jordanian">Jordanian</option>
										<option value="kazakhstani">Kazakhstani</option>
										<option value="kenyan">Kenyan</option>
										<option value="kittian and nevisian">Kittian and Nevisian</option>
										<option value="kuwaiti">Kuwaiti</option>
										<option value="kyrgyz">Kyrgyz</option>
										<option value="laotian">Laotian</option>
										<option value="latvian">Latvian</option>
										<option value="lebanese">Lebanese</option>
										<option value="liberian">Liberian</option>
										<option value="libyan">Libyan</option>
										<option value="liechtensteiner">Liechtensteiner</option>
										<option value="lithuanian">Lithuanian</option>
										<option value="luxembourger">Luxembourger</option>
										<option value="macedonian">Macedonian</option>
										<option value="malagasy">Malagasy</option>
										<option value="malawian">Malawian</option>
										<option value="malaysian">Malaysian</option>
										<option value="maldivan">Maldivan</option>
										<option value="malian">Malian</option>
										<option value="maltese">Maltese</option>
										<option value="marshallese">Marshallese</option>
										<option value="mauritanian">Mauritanian</option>
										<option value="mauritian">Mauritian</option>
										<option value="mexican">Mexican</option>
										<option value="micronesian">Micronesian</option>
										<option value="moldovan">Moldovan</option>
										<option value="monacan">Monacan</option>
										<option value="mongolian">Mongolian</option>
										<option value="moroccan">Moroccan</option>
										<option value="mosotho">Mosotho</option>
										<option value="motswana">Motswana</option>
										<option value="mozambican">Mozambican</option>
										<option value="namibian">Namibian</option>
										<option value="nauruan">Nauruan</option>
										<option value="nepalese">Nepalese</option>
										<option value="new zealander">New Zealander</option>
										<option value="ni-vanuatu">Ni-Vanuatu</option>
										<option value="nicaraguan">Nicaraguan</option>
										<option value="nigerien">Nigerien</option>
										<option value="north korean">North Korean</option>
										<option value="northern irish">Northern Irish</option>
										<option value="norwegian">Norwegian</option>
										<option value="omani">Omani</option>
										<option value="pakistani">Pakistani</option>
										<option value="palauan">Palauan</option>
										<option value="panamanian">Panamanian</option>
										<option value="papua new guinean">Papua New Guinean</option>
										<option value="paraguayan">Paraguayan</option>
										<option value="peruvian">Peruvian</option>
										<option value="polish">Polish</option>
										<option value="portuguese">Portuguese</option>
										<option value="qatari">Qatari</option>
										<option value="romanian">Romanian</option>
										<option value="russian">Russian</option>
										<option value="rwandan">Rwandan</option>
										<option value="saint lucian">Saint Lucian</option>
										<option value="salvadoran">Salvadoran</option>
										<option value="samoan">Samoan</option>
										<option value="san marinese">San Marinese</option>
										<option value="sao tomean">Sao Tomean</option>
										<option value="saudi">Saudi</option>
										<option value="scottish">Scottish</option>
										<option value="senegalese">Senegalese</option>
										<option value="serbian">Serbian</option>
										<option value="seychellois">Seychellois</option>
										<option value="sierra leonean">Sierra Leonean</option>
										<option value="singaporean">Singaporean</option>
										<option value="slovakian">Slovakian</option>
										<option value="slovenian">Slovenian</option>
										<option value="solomon islander">Solomon Islander</option>
										<option value="somali">Somali</option>
										<option value="south african">South African</option>
										<option value="south korean">South Korean</option>
										<option value="spanish">Spanish</option>
										<option value="sri lankan">Sri Lankan</option>
										<option value="sudanese">Sudanese</option>
										<option value="surinamer">Surinamer</option>
										<option value="swazi">Swazi</option>
										<option value="swedish">Swedish</option>
										<option value="swiss">Swiss</option>
										<option value="syrian">Syrian</option>
										<option value="taiwanese">Taiwanese</option>
										<option value="tajik">Tajik</option>
										<option value="tanzanian">Tanzanian</option>
										<option value="thai">Thai</option>
										<option value="togolese">Togolese</option>
										<option value="tongan">Tongan</option>
										<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
										<option value="tunisian">Tunisian</option>
										<option value="turkish">Turkish</option>
										<option value="tuvaluan">Tuvaluan</option>
										<option value="ugandan">Ugandan</option>
										<option value="ukrainian">Ukrainian</option>
										<option value="uruguayan">Uruguayan</option>
										<option value="uzbekistani">Uzbekistani</option>
										<option value="venezuelan">Venezuelan</option>
										<option value="vietnamese">Vietnamese</option>
										<option value="welsh">Welsh</option>
										<option value="yemenite">Yemenite</option>
										<option value="zambian">Zambian</option>
										<option value="zimbabwean">Zimbabwean</option>
									</select>
									<font color = "red" size = "1"><div id = "spousesnationality_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Spouse's Profession:
								</td>
								<td>
									<select name = "spousesprofession"  id = "spousesprofessionid" >
										<option value = "">-SELECT-</option>
										<option value = "ACCOUNTANT">ACCOUNTANT</option>
										<option value = "ACTOR">ACTOR</option>
										<option value = "BANKER">BANKER</option>
										<option value = "BARBER">BARBER</option>
										<option value = "BUSINESSMAN">BUSINESSMAN</option>
										<option value = "DOCTOR">DOCTOR</option>
										<option value = "ENGINEER">ENGINEER</option>
										<option value = "LAWYER">LAWYER</option>
									</select>
									<font color = "red" size = "1"><div id = "spousesprofession_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Marital Status:<font color = "red">*</font>
								</td>
								<td>
									<select name = "maritalstatus" id = "maritalstatusid" required>
										<option value = "">-SELECT-</option>
										<option value = "SINGLE">SINGLE</option>
										<option value = "MARRIED">MARRIED</option>
										<option value = "DIVORCED">DIVORCED</option>
										<option value = "WIDOWED">WIDOWED</option>
									</select>
									<font color = "red" size = "1"><div id = "maritalstatus_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Applicant's Profession:<font color = "red">*</font>
								</td>
								<td>
									<select name = "applicantsprofession" id = "applicantsprofessionid" required>
										<option value = "">-SELECT-</option>
										<option value = "ACCOUNTANT">ACCOUNTANT</option>
										<option value = "ACTOR">ACTOR</option>
										<option value = "BANKER">BANKER</option>
										<option value = "BARBER">BARBER</option>
										<option value = "BUSINESSMAN">BUSINESSMAN</option>
										<option value = "DOCTOR">DOCTOR</option>
										<option value = "ENGINEER">ENGINEER</option>
										<option value = "LAWYER">LAWYER</option>
									</select>
									<font color = "red" size = "1"><div id = "applicantsprofession_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Country of Birth:<font color = "red">*</font>
								</td>
								<td>
									<select name = "countryofbirth" id = "countryofbirthid" required>
										<option value="">-SELECT-</option>
										<option value="Afganistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
										<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
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
										<option value="Cote DIvoire">Cote D'Ivoire</option>
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
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
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
										<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
										<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
										<option value="Saipan">Saipan</option>
										<option value="Samoa">Samoa</option>
										<option value="Samoa American">Samoa American</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
										<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Erimates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
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
										<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
										<option value="Yemen">Yemen</option>
										<option value="Zaire">Zaire</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
									<font color = "red" size = "1"><div id = "countryofbirth_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Birth District:<font color = "red">*</font>
								</td>
								<td>
									<select name = "birthdistrict" id = "birthdistrictid" required>
										<option value = "">-SELECT-</option>
										<option value = "DHAKA">DHAKA</option>
										<option value = "CHITTAGONG">CHITTAGONG</option>
										<option value = "SYLHET">SYLHET</option>
										<option value = "RAJSHAHI">RAJSHAHI</option>
										<option value = "RANGPUR">RANGPUR</option>
										<option value = "BARISHAL">BARISHAL</option>
									</select>
									<font color = "red" size = "1"><div id = "birthdistrict_err"></div></font>
								</td>
							</tr>
							
						</table>
					</div>
					<div class = "column">
						<table>
							<tr>
								<td>
									Date of Birth:<font color = "red">*</font>
								</td>
								<td>
									<input type = "date" name = "dateofbirth" min="1918-12-31"  id = "dateofbirthid" required>
									</input>
									<font color = "red" size = "1"><div id = "dateofbirth_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Gender:<font color = "red">*</font>
								</td>
								<td>
									<input type = "radio" name = "gender" id = "gender1" value = "Male" required>
									Male
									</input>
									<br/>
									<input type = "radio" name = "gender" id = "gender2" value = "Female">
									Female
									</input>
									<br/>
									<input type = "radio" name = "gender" id = "gender3" value = "Others">
									Others
									</input>
									<font color = "red" size = "1"><div id = "gender_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Birth ID No:<font color = "red">*</font>
								</td>
								<td>
									<input type = "number" name = "birthidno" id = "birthidnoid" pattern = "\d\d\d\d\d\d\d\d\d\d\d\d\d\d" required>
									</input >
									<font color = "red" size = "1"><div id = "birthidno_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									National ID No:
								</td>
								<td>
									<input type = "number" name = "nationalidno" id = "nationalidnoid" pattern = "\d\d\d\d\d\d\d\d\d\d" >
									</input >
									<font color = "red" size = "1"><div id = "nationalidno_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Tax ID No:
								</td>
								<td>
									<input type = "number" name = "taxidno"  id = "taxidnoid" pattern = "\d">
									</input >
									<font color = "red" size = "1"><div id = "taxidno_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Height:<font color = "red">*</font>
								</td>
								<td>
									<input type = "number" name = "cm"  id = "cmid" pattern = "\d" required>
									</input >
									cm
									<font color = "red" size = "1"><div id = "cm_err"></div></font>
									<input type = "number" name = "inch" id = "inchid" pattern = "[0-9]" required>
									</input >
									inch
									<font color = "red" size = "1"><div id = "inch_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Religion:<font color = "red">*</font>
								</td>
								<td>
									<select name = "religion"  id = "religionid" required>
										<option value = "">-SELECT-</option>
										<option value = "ISLAM">ISLAM</option>
										<option value = "HINDUISM">HINDUISM</option>
										<option value = "BUDDHISM">BUDDHISM</option>
										<option value = "CHRISTIANITY">CHRISTIANITY</option>
										<option value = "SIKHISM">SIKHISM</option>
										<option value = "OTHERS">OTHERS</option>
									</select>
									<font color = "red" size = "1"><div id = "religion_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Email:<font color = "red">*</font>
								</td>
								<td>
									<input type = "email" name = "email" id = "emailid" pattern = "\S+@\S+\.\S+" required>
									</input>
									<font color = "red" size = "1"><div id = "email_err"></div></font>
								</td>
							</tr>
							
							<tr colspan = "2">
								<td>
									<h4>Citizenship Information</h4>
								</td>
							</tr>
							
							<tr>
								<td>
									Nationality:<font color = "red">*</font>
								</td>
								<td>
									<select name = "nationality" id = "nationalityid" required>
										<option value="">-SELECT-</option>
										<option value="afghan">Afghan</option>
										<option value="albanian">Albanian</option>
										<option value="algerian">Algerian</option>
										<option value="american">American</option>
										<option value="andorran">Andorran</option>
										<option value="angolan">Angolan</option>
										<option value="antiguans">Antiguans</option>
										<option value="argentinean">Argentinean</option>
										<option value="armenian">Armenian</option>
										<option value="australian">Australian</option>
										<option value="austrian">Austrian</option>
										<option value="azerbaijani">Azerbaijani</option>
										<option value="bahamian">Bahamian</option>
										<option value="bahraini">Bahraini</option>
										<option value="bangladeshi">Bangladeshi</option>
										<option value="barbadian">Barbadian</option>
										<option value="barbudans">Barbudans</option>
										<option value="batswana">Batswana</option>
										<option value="belarusian">Belarusian</option>
										<option value="belgian">Belgian</option>
										<option value="belizean">Belizean</option>
										<option value="beninese">Beninese</option>
										<option value="bhutanese">Bhutanese</option>
										<option value="bolivian">Bolivian</option>
										<option value="bosnian">Bosnian</option>
										<option value="brazilian">Brazilian</option>
										<option value="british">British</option>
										<option value="bruneian">Bruneian</option>
										<option value="bulgarian">Bulgarian</option>
										<option value="burkinabe">Burkinabe</option>
										<option value="burmese">Burmese</option>
										<option value="burundian">Burundian</option>
										<option value="cambodian">Cambodian</option>
										<option value="cameroonian">Cameroonian</option>
										<option value="canadian">Canadian</option>
										<option value="cape verdean">Cape Verdean</option>
										<option value="central african">Central African</option>
										<option value="chadian">Chadian</option>
										<option value="chilean">Chilean</option>
										<option value="chinese">Chinese</option>
										<option value="colombian">Colombian</option>
										<option value="comoran">Comoran</option>
										<option value="congolese">Congolese</option>
										<option value="costa rican">Costa Rican</option>
										<option value="croatian">Croatian</option>
										<option value="cuban">Cuban</option>
										<option value="cypriot">Cypriot</option>
										<option value="czech">Czech</option>
										<option value="danish">Danish</option>
										<option value="djibouti">Djibouti</option>
										<option value="dominican">Dominican</option>
										<option value="dutch">Dutch</option>
										<option value="east timorese">East Timorese</option>
										<option value="ecuadorean">Ecuadorean</option>
										<option value="egyptian">Egyptian</option>
										<option value="emirian">Emirian</option>
										<option value="equatorial guinean">Equatorial Guinean</option>
										<option value="eritrean">Eritrean</option>
										<option value="estonian">Estonian</option>
										<option value="ethiopian">Ethiopian</option>
										<option value="fijian">Fijian</option>
										<option value="filipino">Filipino</option>
										<option value="finnish">Finnish</option>
										<option value="french">French</option>
										<option value="gabonese">Gabonese</option>
										<option value="gambian">Gambian</option>
										<option value="georgian">Georgian</option>
										<option value="german">German</option>
										<option value="ghanaian">Ghanaian</option>
										<option value="greek">Greek</option>
										<option value="grenadian">Grenadian</option>
										<option value="guatemalan">Guatemalan</option>
										<option value="guinea-bissauan">Guinea-Bissauan</option>
										<option value="guinean">Guinean</option>
										<option value="guyanese">Guyanese</option>
										<option value="haitian">Haitian</option>
										<option value="herzegovinian">Herzegovinian</option>
										<option value="honduran">Honduran</option>
										<option value="hungarian">Hungarian</option>
										<option value="icelander">Icelander</option>
										<option value="indian">Indian</option>
										<option value="indonesian">Indonesian</option>
										<option value="iranian">Iranian</option>
										<option value="iraqi">Iraqi</option>
										<option value="irish">Irish</option>
										<option value="israeli">Israeli</option>
										<option value="italian">Italian</option>
										<option value="ivorian">Ivorian</option>
										<option value="jamaican">Jamaican</option>
										<option value="japanese">Japanese</option>
										<option value="jordanian">Jordanian</option>
										<option value="kazakhstani">Kazakhstani</option>
										<option value="kenyan">Kenyan</option>
										<option value="kittian and nevisian">Kittian and Nevisian</option>
										<option value="kuwaiti">Kuwaiti</option>
										<option value="kyrgyz">Kyrgyz</option>
										<option value="laotian">Laotian</option>
										<option value="latvian">Latvian</option>
										<option value="lebanese">Lebanese</option>
										<option value="liberian">Liberian</option>
										<option value="libyan">Libyan</option>
										<option value="liechtensteiner">Liechtensteiner</option>
										<option value="lithuanian">Lithuanian</option>
										<option value="luxembourger">Luxembourger</option>
										<option value="macedonian">Macedonian</option>
										<option value="malagasy">Malagasy</option>
										<option value="malawian">Malawian</option>
										<option value="malaysian">Malaysian</option>
										<option value="maldivan">Maldivan</option>
										<option value="malian">Malian</option>
										<option value="maltese">Maltese</option>
										<option value="marshallese">Marshallese</option>
										<option value="mauritanian">Mauritanian</option>
										<option value="mauritian">Mauritian</option>
										<option value="mexican">Mexican</option>
										<option value="micronesian">Micronesian</option>
										<option value="moldovan">Moldovan</option>
										<option value="monacan">Monacan</option>
										<option value="mongolian">Mongolian</option>
										<option value="moroccan">Moroccan</option>
										<option value="mosotho">Mosotho</option>
										<option value="motswana">Motswana</option>
										<option value="mozambican">Mozambican</option>
										<option value="namibian">Namibian</option>
										<option value="nauruan">Nauruan</option>
										<option value="nepalese">Nepalese</option>
										<option value="new zealander">New Zealander</option>
										<option value="ni-vanuatu">Ni-Vanuatu</option>
										<option value="nicaraguan">Nicaraguan</option>
										<option value="nigerien">Nigerien</option>
										<option value="north korean">North Korean</option>
										<option value="northern irish">Northern Irish</option>
										<option value="norwegian">Norwegian</option>
										<option value="omani">Omani</option>
										<option value="pakistani">Pakistani</option>
										<option value="palauan">Palauan</option>
										<option value="panamanian">Panamanian</option>
										<option value="papua new guinean">Papua New Guinean</option>
										<option value="paraguayan">Paraguayan</option>
										<option value="peruvian">Peruvian</option>
										<option value="polish">Polish</option>
										<option value="portuguese">Portuguese</option>
										<option value="qatari">Qatari</option>
										<option value="romanian">Romanian</option>
										<option value="russian">Russian</option>
										<option value="rwandan">Rwandan</option>
										<option value="saint lucian">Saint Lucian</option>
										<option value="salvadoran">Salvadoran</option>
										<option value="samoan">Samoan</option>
										<option value="san marinese">San Marinese</option>
										<option value="sao tomean">Sao Tomean</option>
										<option value="saudi">Saudi</option>
										<option value="scottish">Scottish</option>
										<option value="senegalese">Senegalese</option>
										<option value="serbian">Serbian</option>
										<option value="seychellois">Seychellois</option>
										<option value="sierra leonean">Sierra Leonean</option>
										<option value="singaporean">Singaporean</option>
										<option value="slovakian">Slovakian</option>
										<option value="slovenian">Slovenian</option>
										<option value="solomon islander">Solomon Islander</option>
										<option value="somali">Somali</option>
										<option value="south african">South African</option>
										<option value="south korean">South Korean</option>
										<option value="spanish">Spanish</option>
										<option value="sri lankan">Sri Lankan</option>
										<option value="sudanese">Sudanese</option>
										<option value="surinamer">Surinamer</option>
										<option value="swazi">Swazi</option>
										<option value="swedish">Swedish</option>
										<option value="swiss">Swiss</option>
										<option value="syrian">Syrian</option>
										<option value="taiwanese">Taiwanese</option>
										<option value="tajik">Tajik</option>
										<option value="tanzanian">Tanzanian</option>
										<option value="thai">Thai</option>
										<option value="togolese">Togolese</option>
										<option value="tongan">Tongan</option>
										<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
										<option value="tunisian">Tunisian</option>
										<option value="turkish">Turkish</option>
										<option value="tuvaluan">Tuvaluan</option>
										<option value="ugandan">Ugandan</option>
										<option value="ukrainian">Ukrainian</option>
										<option value="uruguayan">Uruguayan</option>
										<option value="uzbekistani">Uzbekistani</option>
										<option value="venezuelan">Venezuelan</option>
										<option value="vietnamese">Vietnamese</option>
										<option value="welsh">Welsh</option>
										<option value="yemenite">Yemenite</option>
										<option value="zambian">Zambian</option>
										<option value="zimbabwean">Zimbabwean</option>
									</select>
									<font color = "red" size = "1"><div id = "nationality_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Citizenship Status:<font color = "red">*</font>
								</td>
								<td>
									<select name = "citizenshipstatus" id = "citizenshipstatusid" required>
										<option value = "">-SELECT-</option>
										<option value = "BIRTH">BIRTH</option>
										<option value = "PARENTAGE">PARENTAGE</option>
										<option value = "MIGRATION">MIGRATION</option>
										<option value = "NATURALIZATION">NATURALIZATION</option>
										<option value = "OTHERS">OTHERS</option>
									</select>
									<font color = "red" size = "1"><div id = "citizenshipstatus_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Dual Citizenship:<font color = "red">*</font> 
								</td>
								<td>
									<input type = "radio" name = "dualcitizenship" value = "Yes" required>
									Yes
									</input>
									<br/>
									<input type = "radio" name = "dualcitizenship" value = "No">
									No
									</input>
									<font color = "red" size = "1"><div id = "dualcitizenship_err"></div></font>
								</td>
							</tr>
							
							<tr colspan = "2">
								<td>
									<h4>Present Address</h4>
								</td>
							</tr>
							
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type = "text" name = "villagehouse"  pattern = "[a-zA-Z]*" id = "villagehouseid">
									</input >
									<font color = "red" size = "1"><div id = "villagehouse_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Road/Block/Sector:
								</td>
								<td>
									<input type = "text" name = "roadblocksector" pattern = "[0-9]*" id = "roadblocksectorid">
									</input >
									<font color = "red" size = "1"><div id = "roadblocksector_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									District:<font color = "red">*</font>
								</td>
								<td>
									<select name = "district" id = "districtid" required>
										<option value = "">-SELECT-</option>
										<option value = "DHAKA">DHAKA</option>
										<option value = "CHITTAGONG">CHITTAGONG</option>
										<option value = "SYLHET">SYLHET</option>
										<option value = "RAJSHAHI">RAJSHAHI</option>
										<option value = "RANGPUR">RANGPUR</option>
										<option value = "BARISHAL">BARISHAL</option>
									</select>
									<font color = "red" size = "1"><div id = "district_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Police Station:<font color = "red">*</font>
								</td>
								<td>
									<select name = "policestation"  id = "policestationid" required>
										<option value = "">-SELECT-</option>
										<option value = "RAMPURA">RAMPURA</option>
										<option value = "BANANI">BANANI</option>
										<option value = "KHILKHET">KHILKHET</option>
									</select>
									<font color = "red" size = "1"><div id = "policestation_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Post Office:<font color = "red">*</font>
								</td>
								<td>
									<select name = "postoffice" id = "postofficeid" required>
										<option value = "">-SELECT-</option>
										<option value = "BANANI">BANANI</option>
										<option value = "GULSHAN">GULSHAN</option>
										<option value = "MOHAKHALI">MOHAKHALI</option>
									</select>
									<font color = "red" size = "1"><div id = "postoffice_err"></div></font>
								</td>
							</tr>
							
							<tr colspan = "2">
								<td>
									<h4>Permanent Address</h4>
								</td>
							</tr>
							
							<tr>
								<td colspan = "2">
									<input type = "checkbox" name = "sameasabove">
									</input>
									Same as above
								</td>
							</tr>
							
							<tr>
								<td>
									Village/House:
								</td>
								<td>
									<input type = "text" name = "villagehouse1" pattern = "[a-zA-Z]*" id = "villagehouse1id">
									</input >
									<font color = "red" size = "1"><div id = "villagehouse1_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Road/Block/Sector:
								</td>
								<td>
									<input type = "text" name = "roadblocksector1" pattern = "[0-9]*" id = "roadblocksector1id">
									</input >
									<font color = "red" size = "1"><div id = "roadblocksector1_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									District:<font color = "red">*</font>
								</td>
								<td>
									<select name = "district1" id = "district1id" required>
										<option value = "">-SELECT-</option>
										<option value = "DHAKA">DHAKA</option>
										<option value = "CHITTAGONG">CHITTAGONG</option>
										<option value = "SYLHET">SYLHET</option>
										<option value = "RAJSHAHI">RAJSHAHI</option>
										<option value = "RANGPUR">RANGPUR</option>
										<option value = "BARISHAL">BARISHAL</option>
									</select>
									<font color = "red" size = "1"><div id = "district1_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Police Station:<font color = "red">*</font>
								</td>
								<td>
									<select name = "policestation1" id = "policestation1id" required>
										<option value = "">-SELECT-</option>
										<option value = "RAMPURA">RAMPURA</option>
										<option value = "BANANI">BANANI</option>
										<option value = "KHILKHET">KHILKHET</option>
									</select>
									<font color = "red" size = "1"><div id = "policestation1_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td>
									Post Office:<font color = "red">*</font>
								</td>
								<td>
									<select name = "postoffice1" id = "postoffice1id" required>
										<option value = "">-SELECT-</option>
										<option value = "BANANI">BANANI</option>
										<option value = "GULSHAN">GULSHAN</option>
										<option value = "MOHAKHALI">MOHAKHALI</option>
									</select>
									<font color = "red" size = "1"><div id = "postoffice1_err"></div></font>
								</td>
							</tr>
							
							<tr>
								<td colspan = "2">
									<button type = "submit" name "saveandexit">SAVE AND EXIT</button>
								</td>
							</tr>
							
						</table>
					</div>
				</div>
			</fieldset>
		</form>
		
	</body>
	
</html>

<script type = "text/javascript">
	
	var applyingin = document.forms['page1']['applyingin'];
	var ptype = document.forms['page1']['ptype'];
	var nameofapplicant = document.forms['page1']['nameofapplicant'];
	var firstpart = document.forms['page1']['firstpart'];
	var secondpart = document.forms['page1']['secondpart'];
	var fathersname = document.forms['page1']['fathersname'];
	var fathersnationality = document.forms['page1']['fathersnationality'];
	var fathersprofession = document.forms['page1']['fathersprofession'];
	var mothersname = document.forms['page1']['mothersname'];
	var mothersnationality = document.forms['page1']['mothersnationality'];
	var mothersprofession = document.forms['page1']['mothersprofession'];
	var spousesname = document.forms['page1']['spousesname'];
	var maritalstatus = document.forms['page1']['maritalstatus'];
	var applicantsprofession = document.forms['page1']['applicantsprofession'];
	var countryofbirth = document.forms['page1']['countryofbirth'];
	var birthdistrict = document.forms['page1']['birthdistrict'];
	var dateofbirth = document.forms['page1']['dateofbirth'];
	//var gender = document.forms['page1']['gender'];
	var birthidno = document.forms['page1']['birthidno'];
	var nationalidno = document.forms['page1']['nationalidno'];
	var taxidno = document.forms['page1']['taxidno'];
	var cm = document.forms['page1']['cm'];
	var inch = document.forms['page1']['inch'];
	var religion = document.forms['page1']['religion'];
	var email = document.forms['page1']['email'];
	var nationality = document.forms['page1']['nationality'];
	var citizenshipstatus = document.forms['page1']['citizenshipstatus'];
	//var dualcitizenship = document.forms['page1']['dualcitizenship'];
	var villagehouse = document.forms['page1']['villagehouse'];
	var roadblocksector = document.forms['page1']['roadblocksector'];
	var district = document.forms['page1']['district'];
	var policestation = document.forms['page1']['policestation'];
	var postoffice = document.forms['page1']['postoffice'];
	var villagehouse1 = document.forms['page1']['villagehouse1'];
	var roadblocksector1 = document.forms['page1']['roadblocksector1'];
	var district1 = document.forms['page1']['district1'];
	var policestation1 = document.forms['page1']['policestation1'];
	var postoffice1 = document.forms['page1']['postoffice1'];
	
	
	var applyingin_err = document.getElementById('applyingin_err');
	var ptype_err = document.getElementById('ptype_err');
	var nameofapplicant_err = document.getElementById('nameofapplicant_err');
	var firstpart_err = document.getElementById('firstpart_err');
	var secondpart_err = document.getElementById('secondpart_err');
	var fathersname_err = document.getElementById('fathersname_err');
	var fathersnationality_err = document.getElementById('fathersnationality_err');
	var fathersprofession_err = document.getElementById('fathersprofession_err');
	var mothersname_err = document.getElementById('mothersname_err');
	var mothersnationality_err = document.getElementById('mothersnationality_err');
	var mothersprofession_err = document.getElementById('mothersprofession_err');
	var spousesname_err = document.getElementById('spousesname_err');
	var maritalstatus_err = document.getElementById('maritalstatus_err');
	var applicantsprofession_err = document.getElementById('applicantsprofession_err');
	var countryofbirth_err = document.getElementById('countryofbirth_err');
	var birthdistrict_err = document.getElementById('birthdistrict_err');
	var dateofbirth_err = document.getElementById('dateofbirth_err');
	//var gender_err = document.getElementById('gender_err');
	var birthidno_err = document.getElementById('birthidno_err');
	var nationalidno_err = document.getElementById('nationalidno_err');
	var taxidno_err = document.getElementById('taxidno_err');
	var cm_err = document.getElementById('cm_err');
	var inch_err = document.getElementById('inch_err');
	var religion_err = document.getElementById('religion_err');
	var email_err = document.getElementById('email_err');
	var nationality_err = document.getElementById('nationality_err');
	var citizenshipstatus_err = document.getElementById('citizenshipstatus_err');
	//var dualcitizenship_err = document.getElementById('dualcitizenship_err');
	var villagehouse_err = document.getElementById('villagehouse_err');
	var roadblocksector_err = document.getElementById('villagehouse_err');
	var district_err = document.getElementById('district_err');
	var policestation_err = document.getElementById('policestation_err');
	var postoffice_err = document.getElementById('postoffice_err');
	var villagehouse1_err = document.getElementById('villagehouse1_err');
	var roadblocksector1_err = document.getElementById('villagehouse1_err');
	var district1_err = document.getElementById('district1_err');
	var policestation1_err = document.getElementById('policestation1_err');
	var postoffice1_err = document.getElementById('postoffice1_err');
	
	
	applyingin.addEventListener ('blur', applyinginvalidation, true);
	ptype.addEventListener ('blur', ptypevalidation, true);
	nameofapplicant.addEventListener ('blur', nameofapplicantvalidation, true);
	firstpart.addEventListener ('blur', firstpartvalidation, true);
	secondpart.addEventListener ('blur', secondpartvalidation, true);
	fathersname.addEventListener ('blur', fathersnamevalidation, true);
	fathersnationality.addEventListener ('blur', fathersnationalityvalidation, true);
	fathersprofession.addEventListener ('blur', fathersprofessionvalidation, true);
	mothersname.addEventListener ('blur', mothersnamevalidation, true);
	mothersnationality.addEventListener ('blur', mothersnationalityvalidation, true);
	mothersprofession.addEventListener ('blur', mothersprofessionvalidation, true);
	spousesname.addEventListener ('blur', spousesnamevalidation, true);
	maritalstatus.addEventListener ('blur', maritalstatusvalidation, true);
	applicantsprofession.addEventListener ('blur', applicantsprofessionvalidation, true);
	countryofbirth.addEventListener ('blur', countryofbirthvalidation, true);
	birthdistrict.addEventListener ('blur', birthdistrictvalidation, true);
	dateofbirth.addEventListener ('blur', dateofbirthvalidation, true);
	//gender.addEventListener ('blur', gendervalidation, true);
	birthidno.addEventListener ('blur', birthidnovalidation, true);
	nationalidno.addEventListener ('blur', nationalidnovalidation, true);
	taxidno.addEventListener ('blur', taxidnovalidation, true);
	cm.addEventListener ('blur', cmvalidation, true);
	inch.addEventListener ('blur', inchvalidation, true);
	religion.addEventListener ('blur', religionvalidation, true);
	email.addEventListener ('blur', emailvalidation, true);
	nationality.addEventListener ('blur', nationalityvalidation, true);
	citizenshipstatus.addEventListener ('blur', citizenshipstatusvalidation, true);
	//dualcitizenship.addEventListener ('blur', dualcitizenshipvalidation, true);
	villagehouse.addEventListener ('blur', villagehousevalidation, true);
	roadblocksector.addEventListener ('blur', roadblocksectorvalidation, true);
	district.addEventListener ('blur', districtvalidation, true);
	policestation.addEventListener ('blur', policestationvalidation, true);
	postoffice.addEventListener ('blur', postofficevalidation, true);
	villagehouse1.addEventListener ('blur', villagehouse1validation, true);
	roadblocksector1.addEventListener ('blur', roadblocksector1validation, true);
	district1.addEventListener ('blur', district1validation, true);
	policestation1.addEventListener ('blur', policestation1validation, true);
	postoffice1.addEventListener ('blur', postoffice1validation, true);
	
	
	function validation ()
	{
		if (applyingin.value == "")
		{
			applyingin.style.border = "1px solid red";
			applyingin.style.height = "20px";
			applyingin_err.textContent = "Select a Country";
			//applyingin.focus();
			return false;
		}
		
		else if (ptype.value == "")
		{
			ptype.style.border = "1px solid red";
			ptype.style.height = "20px";
			ptype_err.textContent = "Select A Passport Type";
			//applyingin.focus();
			return false;
		}
		
		else if (nameofapplicant.value == "")
		{
			nameofapplicant.style.border = "1px solid red";
			nameofapplicant.style.height = "20px";
			nameofapplicant_err.textContent = "Name Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("nameofapplicantid").validity.patternMismatch)
		{
			nameofapplicant.style.border = "1px solid red";
			nameofapplicant.style.height = "20px";
			nameofapplicant_err.textContent = "Letters Only and (-,') (e.g.)xx, xx xx, xx-xx, xx' xx, xx xx xx, xx-xx-xx";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("firstpartid").validity.patternMismatch)
		{
			firstpart.style.border = "1px solid red";
			firstpart.style.height = "20px";
			firstpart_err.textContent = "Letters Only and (-,') (e.g.)xx, xx xx, xx-xx, xx' xx, xx xx xx, xx-xx-xx";
			//applyingin.focus();
			return false;
		}
		
		else if (secondpart.value == "")
		{
			secondpart.style.border = "1px solid red";
			secondpart.style.height = "20px";
			secondpart_err.textContent = "This Field Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("secondpartid").validity.patternMismatch)
		{
			secondpart.style.border = "1px solid red";
			secondpart.style.height = "20px";
			secondpart_err.textContent = "Letters Only and (-,') (e.g.)xx, xx xx, xx-xx, xx' xx, xx xx xx, xx-xx-xx";
			//applyingin.focus();
			return false;
		}
		
		else if (fathersname.value == "")
		{
			fathersname.style.border = "1px solid red";
			fathersname.style.height = "20px";
			fathersname_err.textContent = "Name Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("fathersnameid").validity.patternMismatch)
		{
			fathersname.style.border = "1px solid red";
			fathersname.style.height = "20px";
			fathersname_err.textContent = "Letters Only and (-,') (e.g.)xx, xx xx, xx-xx, xx' xx, xx xx xx, xx-xx-xx";
			//applyingin.focus();
			return false;
		}
		
		else if (fathersnationality.value == "")
		{
			fathersnationality.style.border = "1px solid red";
			fathersnationality.style.height = "20px";
			fathersnationality_err.textContent = "Nationality Required";
			//applyingin.focus();
			return false;
		}
		
		else if (fathersprofession.value == "")
		{
			fathersprofession.style.border = "1px solid red";
			fathersprofession.style.height = "20px";
			fathersprofession_err.textContent = "Profession Required";
			//applyingin.focus();
			return false;
		}
		
		else if (mothersname.value == "")
		{
			mothersname.style.border = "1px solid red";
			mothersname.style.height = "20px";
			mothersname_err.textContent = "Name Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("mothersnameid").validity.patternMismatch)
		{
			mothersname.style.border = "1px solid red";
			mothersname.style.height = "20px";
			mothersname_err.textContent = "Letters Only and (-,') (e.g.)xx, xx xx, xx-xx, xx' xx, xx xx xx, xx-xx-xx";
			//applyingin.focus();
			return false;
		}
		
		else if (mothersnationality.value == "")
		{
			mothersnationality.style.border = "1px solid red";
			mothersnationality.style.height = "20px";
			mothersnationality_err.textContent = "Nationality Required";
			//applyingin.focus();
			return false;
		}
		
		else if (mothersprofession.value == "")
		{
			mothersprofession.style.border = "1px solid red";
			mothersprofession.style.height = "20px";
			mothersprofession_err.textContent = "Profession Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("spousesnameid").validity.patternMismatch)
		{
			spousesname.style.border = "1px solid red";
			spousesname.style.height = "20px";
			spousesname_err.textContent = "Letters Only and (-,') (e.g.)xx, xx xx, xx-xx, xx' xx, xx xx xx, xx-xx-xx";
			//applyingin.focus();
			return false;
		}
		
		else if (maritalstatus.value == "")
		{
			maritalstatus.style.border = "1px solid red";
			maritalstatus.style.height = "20px";
			maritalstatus_err.textContent = "Select Marital Status";
			//applyingin.focus();
			return false;
		}
		
		else if (applicantsprofession.value == "")
		{
			applicantsprofession.style.border = "1px solid red";
			applicantsprofession.style.height = "20px";
			applicantsprofession_err.textContent = "Select a Profession";
			//applyingin.focus();
			return false;
		}
		
		else if (countryofbirth.value == "")
		{
			countryofbirth.style.border = "1px solid red";
			countryofbirth.style.height = "20px";
			countryofbirth_err.textContent = "Select a Country";
			//applyingin.focus();
			return false;
		}
		
		else if (birthdistrict.value == "")
		{
			birthdistrict.style.border = "1px solid red";
			birthdistrict.style.height = "20px";
			birthdistrict_err.textContent = "Select a District";
			//applyingin.focus();
			return false;
		}
		
		else if (dateofbirth.value == "")
		{
			dateofbirth.style.border = "1px solid red";
			dateofbirth.style.height = "20px";
			dateofbirth_err.textContent = "Select a Date";
			//applyingin.focus();
			return false;
		}
		
		/*var gen = document.getElementByName("gender");
		else if (gen[0].checked == false && gen[1].checked == false && gen[2].checked == false)
		{
			gender.style.border = "1px solid red";
			gender.style.height = "20px";
			gender_err.textContent = "Select a Gender";
			//applyingin.focus();
			return false;
		}*/
		
		else if (birthidno.value == "")
		{
			birthidno.style.border = "1px solid red";
			birthidno.style.height = "20px";
			birthidno_err.textContent = "Birth Id No Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("birthidnoid").validity.patternMismatch)
		{
			birthidno.style.border = "1px solid red";
			birthidno.style.height = "20px";
			birthidno_err.textContent = "Numbers Only and Length Must Be 14";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("nationalidnoid").validity.patternMismatch)
		{
			nationalidno.style.border = "1px solid red";
			nationalidno.style.height = "20px";
			nationalidno_err.textContent = "Numbers Only and Length Must Be 10";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("taxidnoid").validity.patternMismatch)
		{
			taxidno.style.border = "1px solid red";
			taxidno.style.height = "20px";
			taxidno_err.textContent = "Numbers Only";
			//applyingin.focus();
			return false;
		}
		
		else if (cm.value == "")
		{
			cm.style.border = "1px solid red";
			cm.style.height = "20px";
			cm_err.textContent = "CM Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("cmid").validity.patternMismatch)
		{
			cm.style.border = "1px solid red";
			cm.style.height = "20px";
			cm_err.textContent = "Numbers Only";
			//applyingin.focus();
			return false;
		}
		
		else if (inch.value == "")
		{
			inch.style.border = "1px solid red";
			inch.style.height = "20px";
			inch_err.textContent = "INCH Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("inchid").validity.patternMismatch)
		{
			inch.style.border = "1px solid red";
			inch.style.height = "20px";
			inch_err.textContent = "Numbers Only";
			//applyingin.focus();
			return false;
		}
		
		else if (religion.value == "")
		{
			religion.style.border = "1px solid red";
			religion.style.height = "20px";
			religion_err.textContent = "Select a Religion";
			//applyingin.focus();
			return false;
		}
		
		else if (email.value == "")
		{
			email.style.border = "1px solid red";
			email.style.height = "20px";
			email_err.textContent = "Email Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("emailid").validity.patternMismatch)
		{
			email.style.border = "1px solid red";
			email.style.height = "20px";
			email_err.textContent = "Invalide Email (e.g.) xxx@xx.xx";
			//applyingin.focus();
			return false;
		}
		
		else if (nationality.value == "")
		{
			nationality.style.border = "1px solid red";
			nationality.style.height = "20px";
			nationality_err.textContent = "Nationality Required";
			//applyingin.focus();
			return false;
		}
		
		else if (citizenshipstatus.value == "")
		{
			citizenshipstatus.style.border = "1px solid red";
			citizenshipstatus.style.height = "20px";
			citizenshipstatus_err.textContent = "Citizenship Status Required";
			//applyingin.focus();
			return false;
		}
		
		/*else if (dualcitizenship.value == "")
		{
			dualcitizenship.style.border = "1px solid red";
			dualcitizenship.style.height = "20px";
			dualcitizenship_err.textContent = "Select Yes or No";
			//applyingin.focus();
			return false;
		}*/
		
		else if (document.getElementById("villagehouseid").validity.patternMismatch)
		{
			villagehouse.style.border = "1px solid red";
			villagehouse.style.height = "20px";
			villagehouse_err.textContent = "Letters Only";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("roadblocksectorid").validity.patternMismatch)
		{
			roadblocksector.style.border = "1px solid red";
			roadblocksector.style.height = "20px";
			roadblocksector_err.textContent = "Numbers Only";
			//applyingin.focus();
			return false;
		}
		
		else if (district.value == "")
		{
			district.style.border = "1px solid red";
			district.style.height = "20px";
			district_err.textContent = "District Required";
			//applyingin.focus();
			return false;
		}
		
		else if (policestation.value == "")
		{
			policestation.style.border = "1px solid red";
			policestation.style.height = "20px";
			policestation_err.textContent = "Police Station Required";
			//applyingin.focus();
			return false;
		}
		
		else if (postoffice.value == "")
		{
			postoffice.style.border = "1px solid red";
			postoffice.style.height = "20px";
			postoffice_err.textContent = "Post Office Required";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("villagehouse1id").validity.patternMismatch)
		{
			villagehouse1.style.border = "1px solid red";
			villagehouse1.style.height = "20px";
			villagehouse1_err.textContent = "Letters Only";
			//applyingin.focus();
			return false;
		}
		
		else if (document.getElementById("roadblocksector1id").validity.patternMismatch)
		{
			roadblocksector1.style.border = "1px solid red";
			roadblocksector1.style.height = "20px";
			roadblocksector1_err.textContent = "Numbers Only";
			//applyingin.focus();
			return false;
		}
		
		else if (district1.value == "")
		{
			district1.style.border = "1px solid red";
			district1.style.height = "20px";
			district1_err.textContent = "District Required";
			//applyingin.focus();
			return false;
		}
		
		else if (policestation1.value == "")
		{
			policestation1.style.border = "1px solid red";
			policestation1.style.height = "20px";
			policestation1_err.textContent = "Police Station Required";
			//applyingin.focus();
			return false;
		}
		
		else if (postoffice1.value == "")
		{
			postoffice1.style.border = "1px solid red";
			postoffice1.style.height = "20px";
			postoffice1_err.textContent = "Post Office Required";
			//applyingin.focus();
			return false;
		}
		
	}
	
	function applyinginvalidation ()
	{
		if (applyingin.value != "")
		{
			applyingin_err.innerHTML = "";
			applyingin.style.border = "1px solid lightgray";
			applyingin.style.height = "20px";
			return true;
		}
	}
	
	function ptypevalidation()
	{
		if (ptype.value != "")
		{
			ptype_err.innerHTML = "";
			ptype.style.border = "1px solid lightgray";
			ptype.style.height = "20px";
			return true;
		}
	}
	
	function nameofapplicantvalidation()
	{
		if (nameofapplicant.value != "" || !document.getElementById("nameofapplicantid").validity.patternMismatch)
		{
			nameofapplicant_err.innerHTML = "";
			nameofapplicant.style.border = "1px solid lightgray";
			nameofapplicant.style.height = "20px";
			return true;
		}
	}
	
	function firstpartvalidation()
	{
		if (firstpart.value == "" || !document.getElementById("firstpartid").validity.patternMismatch)
		{
			firstpart_err.innerHTML = "";
			firstpart.style.border = "1px solid lightgray";
			firstpart.style.height = "20px";
			return true;
		}
	}
	
	function secondpartvalidation ()
	{
		if (secondpart.value != "" || !document.getElementById("secondpartid").validity.patternMismatch)
		{
			secondpart_err.innerHTML = "";
			secondpart.style.border = "1px solid lightgray";
			secondpart.style.height = "20px";
			return true;
		}
	}
	
	function fathersnamevalidation()
	{
		if (fathersname.value != "" || !document.getElementById("fathersnameid").validity.patternMismatch)
		{
			fathersname_err.innerHTML = "";
			fathersname.style.border = "1px solid lightgray";
			fathersname.style.height = "20px";
			return true;
		}
	}
	
	function fathersnationalityvalidation ()
	{
		if (fathersnationality.value != "")
		{
			fathersnationality_err.innerHTML = "";
			fathersnationality.style.border = "1px solid lightgray";
			fathersnationality.style.height = "20px";
			return true;
		}
	}
	
	function fathersprofessionvalidation ()
	{
		if (fathersprofession.value != "")
		{
			fathersprofession_err.innerHTML = "";
			fathersprofession.style.border = "1px solid lightgray";
			fathersprofession.style.height = "20px";
			return true;
		}
	}
	
	function mothersnamevalidation()
	{
		if (mothersname.value != "" || !document.getElementById("mothersnameid").validity.patternMismatch)
		{
			mothersname_err.innerHTML = "";
			mothersname.style.border = "1px solid lightgray";
			mothersname.style.height = "20px";
			return true;
		}
	}
	
	function mothersnationalityvalidation ()
	{
		if (mothersnationality.value != "")
		{
			mothersnationality_err.innerHTML = "";
			mothersnationality.style.border = "1px solid lightgray";
			mothersnationality.style.height = "20px";
			return true;
		}
	}
	
	function mothersprofessionvalidation ()
	{
		if (mothersprofession.value != "")
		{
			mothersprofession_err.innerHTML = "";
			mothersprofession.style.border = "1px solid lightgray";
			mothersprofession.style.height = "20px";
			return true;
		}
	}
	
	function spousesnamevalidation()
	{
		if (spousesname.value == "" || !document.getElementById("spousesnameid").validity.patternMismatch)
		{
			spousesname_err.innerHTML = "";
			spousesname.style.border = "1px solid lightgray";
			spousesname.style.height = "20px";
			return true;
		}
	}
	
	function maritalstatusvalidation ()
	{
		if (maritalstatus.value != "")
		{
			maritalstatus_err.innerHTML = "";
			maritalstatus.style.border = "1px solid lightgray";
			maritalstatus.style.height = "20px";
			return true;
		}
	}
	
	function applicantsprofessionvalidation ()
	{
		if (applicantsprofession.value != "")
		{
			applicantsprofession_err.innerHTML = "";
			applicantsprofession.style.border = "1px solid lightgray";
			applicantsprofession.style.height = "20px";
			return true;
		}
	}
	
	function countryofbirthvalidation ()
	{
		if (countryofbirth.value != "")
		{
			countryofbirth_err.innerHTML = "";
			countryofbirth.style.border = "1px solid lightgray";
			countryofbirth.style.height = "20px";
			return true;
		}
	}
	
	function birthdistrictvalidation ()
	{
		if (birthdistrict.value != "")
		{
			birthdistrict_err.innerHTML = "";
			birthdistrict.style.border = "1px solid lightgray";
			birthdistrict.style.height = "20px";
			return true;
		}
	}
	
	function dateofbirthvalidation ()
	{
		if (dateofbirth.value != "")
		{
			dateofbirth_err.innerHTML = "";
			dateofbirth.style.border = "1px solid lightgray";
			dateofbirth.style.height = "20px";
			return true;
		}
	}
	
	function gendervalidation ()
	{
		if (gender.value != "")
		{
			gender_err.innerHTML = "";
			gender.style.border = "1px solid lightgray";
			gender.style.height = "20px";
			return true;
		}
	}
	
	function birthidnovalidation()
	{
		if (birthidno.value != "" || !document.getElementById("birthidnoid").validity.patternMismatch)
		{
			birthidno_err.innerHTML = "";
			birthidno.style.border = "1px solid lightgray";
			birthidno.style.height = "20px";
			return true;
		}
	}
	
	function nationalidnovalidation()
	{
		if (nationalidno.value == "" || !document.getElementById("nationalidnoid").validity.patternMismatch)
		{
			nationalidno_err.innerHTML = "";
			nationalidno.style.border = "1px solid lightgray";
			nationalidno.style.height = "20px";
			return true;
		}
	}
	
	function taxidnovalidation()
	{
		if (taxidno.value == "" || !document.getElementById("taxidnoid").validity.patternMismatch)
		{
			taxidno_err.innerHTML = "";
			taxidno.style.border = "1px solid lightgray";
			taxidno.style.height = "20px";
			return true;
		}
	}
	
	function cmvalidation()
	{
		if (cm.value != "" || !document.getElementById("cmid").validity.patternMismatch)
		{
			cm_err.innerHTML = "";
			cm.style.border = "1px solid lightgray";
			cm.style.height = "20px";
			return true;
		}
	}
	
	function inchvalidation()
	{
		if (inch.value != "" || !document.getElementById("inchid").validity.patternMismatch)
		{
			inch_err.innerHTML = "";
			inch.style.border = "1px solid lightgray";
			inch.style.height = "20px";
			return true;
		}
	}
	
	function religionvalidation ()
	{
		if (religion.value != "")
		{
			religion_err.innerHTML = "";
			religion.style.border = "1px solid lightgray";
			religion.style.height = "20px";
			return true;
		}
	}
	
	function emailvalidation()
	{
		if (email.value != "" && !document.getElementById("emailid").validity.patternMismatch)
		{
			email_err.innerHTML = "";
			email.style.border = "1px solid lightgray";
			email.style.height = "20px";
			return true;
		}
	}
	
	function nationalityvalidation ()
	{
		if (nationality.value != "")
		{
			nationality_err.innerHTML = "";
			nationality.style.border = "1px solid lightgray";
			nationality.style.height = "20px";
			return true;
		}
	}
	
	function citizenshipstatusvalidation ()
	{
		if (citizenshipstatus.value != "")
		{
			citizenshipstatus_err.innerHTML = "";
			citizenshipstatus.style.border = "1px solid lightgray";
			citizenshipstatus.style.height = "20px";
			return true;
		}
	}
	
	/*function dualcitizenshipvalidation ()
	{
		if (dualcitizenship.value != "")
		{
			dualcitizenship_err.innerHTML = "";
			dualcitizenship.style.border = "1px solid lightgray";
			dualcitizenship.style.height = "20px";
			return true;
		}
	}*/
	
	function villagehousevalidation()
	{
		if (villagehouse.value == "" || !document.getElementById("villagehouseid").validity.patternMismatch)
		{
			villagehouse_err.innerHTML = "";
			villagehouse.style.border = "1px solid lightgray";
			villagehouse.style.height = "20px";
			return true;
		}
	}
	
	function roadblocksectorvalidation()
	{
		if (roadblocksector.value == "" || !document.getElementById("roadblocksectorid").validity.patternMismatch)
		{
			roadblocksector_err.innerHTML = "";
			roadblocksector.style.border = "1px solid lightgray";
			roadblocksector.style.height = "20px";
			return true;
		}
	}
	
	function districtvalidation()
	{
		if (district.value != "")
		{
			district_err.innerHTML = "";
			district.style.border = "1px solid lightgray";
			district.style.height = "20px";
			return true;
		}
	}
	
	function policestationvalidation()
	{
		if (policestation.value != "")
		{
			policestation_err.innerHTML = "";
			policestation.style.border = "1px solid lightgray";
			policestation.style.height = "20px";
			return true;
		}
	}
	
	function postofficevalidation()
	{
		if (postoffice.value != "")
		{
			postoffice_err.innerHTML = "";
			postoffice.style.border = "1px solid lightgray";
			postoffice.style.height = "20px";
			return true;
		}
	}
	
	function villagehouse1validation()
	{
		if (villagehouse1.value == "" || !document.getElementById("villagehouse1id").validity.patternMismatch)
		{
			villagehouse1_err.innerHTML = "";
			villagehouse1.style.border = "1px solid lightgray";
			villagehouse1.style.height = "20px";
			return true;
		}
	}
	
	function roadblocksectorvalidation()
	{
		if (roadblocksector1.value == "" || !document.getElementById("roadblocksector1id").validity.patternMismatch)
		{
			roadblocksector1_err.innerHTML = "";
			roadblocksector1.style.border = "1px solid lightgray";
			roadblocksector1.style.height = "20px";
			return true;
		}
	}
	
	function district1validation()
	{
		if (district1.value != "")
		{
			district1_err.innerHTML = "";
			district1.style.border = "1px solid lightgray";
			district1.style.height = "20px";
			return true;
		}
	}
	
	function policestation1validation()
	{
		if (policestation1.value != "")
		{
			policestation1_err.innerHTML = "";
			policestation1.style.border = "1px solid lightgray";
			policestation1.style.height = "20px";
			return true;
		}
	}
	
	function postoffice1validation()
	{
		if (postoffice1.value != "")
		{
			postoffice1_err.innerHTML = "";
			postoffice1.style.border = "1px solid lightgray";
			postoffice1.style.height = "20px";
			return true;
		}
	}
	
	</script>