@extends('headerC')

@section('connexion')



<div class="page-wraper">

	<div id="loading-icon-bx"></div>

	<div class="account-form">

		<div class="account-head" style="background-image:url(assets/images//perso/Vegeta.jpg);">

			<a href="index.html"><img src="assets/images/perso/logoJakS.png" width="90" alt=""></a>

		</div>

		<div class="account-form-inner">

			<div class="account-container">

				<div class="heading-bx left">

					<h2 class="title-head"> Inscrivez <span> Vous</span></h2>

					<p> Connexion avec <a href="{{ route ('login') }}"> votre compte </a></p>

				</div>	

				<form method="POST" action="{{ route('register') }}">

					@csrf



					<div class="row mb-3">

						<label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>



						<div class="col-md-6">

							<input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>



							@error('nom')

								<span class="invalid-feedback" role="alert">

									<strong>{{ $message }}</strong>

								</span>

							@enderror

						</div>

					</div>



					{{-- First name --}}

					<div class="row mb-3">

						<label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>



						<div class="col-md-6">

							<input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>



							@error('prenom')

								<span class="invalid-feedback" role="alert">

									<strong>{{ $message }}</strong>

								</span>

							@enderror

						</div>

					</div>



					<div class="row mb-3">

						<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>



						<div class="col-md-6">

							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">



							@error('email')

								<span class="invalid-feedback" role="alert">

									<strong>{{ $message }}</strong>

								</span>

							@enderror

						</div>

					</div>



					{{-- Select Country --}}

					<div class="row mb-3">

						<label for="pays" class="col-md-4 col-form-label text-md-end">{{ __('Pays') }}</label>



						<div class="col-md-6">

							<select class="form-select form-select-lg mb-3 @error('pays') is-invalid @enderror" value="{{ old('pays') }}"  name="addresse" aria-label="Default select example">

								<option value="France" selected="selected"> Choisissez votre Pays </option>

								

								<option value="Afghanistan">Afghanistan </option>

								<option value="Afrique_Centrale">Afrique Centrale </option>

								<option value="Afrique_du_Sud">Afrique du Sud </option>

								<option value="Albanie">Albanie </option>

								<option value="Algerie">Algérie </option>

								<option value="Allemagne">Allemagne </option>

								<option value="Andorre">Andorre </option>

								<option value="Angola">Angola </option>

								<option value="Anguilla">Anguilla </option>

								<option value="Arabie_Saoudite">Arabie Saoudite </option>

								<option value="Argentine">Argentine </option>

								<option value="Armenie">Armenie </option>

								<option value="Australie">Australie </option>

								<option value="Autriche">Autriche </option>

								<option value="Azerbaidjan">Azerbaidjan </option>

								

								<option value="Bahamas">Bahamas </option>

								<option value="Bangladesh">Bangladesh </option>

								<option value="Barbade">Barbade </option>

								<option value="Bahrein">Bahrein </option>

								<option value="Belgique">Belgique </option>

								<option value="Belize">Belize </option>

								<option value="Benin">Bénin </option>

								<option value="Bermudes">Bermudes </option>

								<option value="Bielorussie">Bielorussie </option>

								<option value="Bolivie">Bolivie </option>

								<option value="Botswana">Botswana </option>

								<option value="Bhoutan">Bhoutan </option>

								<option value="Boznie_Herzegovine">Boznie Herzégovine </option>

								<option value="Bresil">Brésil </option>

								<option value="Brunei">Brunei </option>

								<option value="Bulgarie">Bulgarie </option>

								<option value="Burkina_Faso">Burkina Faso </option>

								<option value="Burundi">Burundi </option>

								

								<option value="Caiman">Caiman </option>

								<option value="Cambodge">Cambodge </option>

								<option value="Cameroun">Cameroun </option>

								<option value="Canada">Canada </option>

								<option value="Canaries">Canaries </option>

								<option value="Cap_vert">Cap Vert </option>

								<option value="Chili">Chili </option>

								<option value="Chine">Chine </option>

								<option value="Chypre">Chypre </option>

								<option value="Colombie">Colombie </option>

								<option value="Comores">Colombie </option>

								<option value="Congo">Congo </option>

								<option value="Congo_democratique">Congo Démocratique </option>

								<option value="Cook">Cook </option>

								<option value="Coree_du_Nord">Corée du Nord </option>

								<option value="Coree_du_Sud">Corée du Sud </option>

								<option value="Costa_Rica">Costa Rica </option>

								<option value="Cote_d_Ivoire">Côte d’Ivoire </option>

								<option value="Croatie">Croatie </option>

								<option value="Cuba">Cuba </option>

								

								<option value="Danemark">Danemark </option>

								<option value="Djibouti">Djibouti </option>

								<option value="Dominique">Dominique </option>

								

								<option value="Egypte">Egypte </option>

								<option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>

								<option value="Equateur">Equateur </option>

								<option value="Erythree">Erythrée </option>

								<option value="Espagne">Espagne </option>

								<option value="Estonie">Estonie </option>

								<option value="Etats_Unis">Etats-Unis </option>

								<option value="Ethiopie">Ethiopie </option>

								

								<option value="Falkland">Falkland </option>

								<option value="Feroe">Feroe </option>

								<option value="Fidji">Fidji </option>

								<option value="Finlande">Finlande </option>

								<option value="France">France </option>

								

								<option value="Gabon">Gabon </option>

								<option value="Gambie">Gambie </option>

								<option value="Georgie">Géorgie </option>

								<option value="Ghana">Ghana </option>

								<option value="Gibraltar">Gibraltar </option>

								<option value="Grece">Grece </option>

								<option value="Grenade">Grenade </option>

								<option value="Groenland">Groënland </option>

								<option value="Guadeloupe">Guadeloupe </option>

								<option value="Guam">Guam </option>

								<option value="Guatemala">Guatémala</option>

								<option value="Guernesey">Guernesey </option>

								<option value="Guinee">Guinée </option>

								<option value="Guinee_Bissau">Guinée Bissau </option>

								<option value="Guinee equatoriale">Guinée Equatoriale </option>

								<option value="Guyana">Guyana </option>

								<option value="Guyane_Francaise ">Guyane Francaise </option>

								

								<option value="Haiti">Haiti </option>

								<option value="Hawaii">Hawaii </option>

								<option value="Honduras">Honduras </option>

								<option value="Hong_Kong">Hong Kong </option>

								<option value="Hongrie">Hongrie </option>

								

								<option value="Inde">Inde </option>

								<option value="Indonesie">Indonésie </option>

								<option value="Iran">Iran </option>

								<option value="Iraq">Iraq </option>

								<option value="Irlande">Irlande </option>

								<option value="Islande">Islande </option>

								<option value="Israel">Israel </option>

								<option value="Italie">italie </option>

								

								<option value="Jamaique">Jamaïque </option>

								<option value="Jan Mayen">Jan Mayen </option>

								<option value="Japon">Japon </option>

								<option value="Jersey">Jersey </option>

								<option value="Jordanie">Jordanie </option>

								

								<option value="Kazakhstan">Kazakhstan </option>

								<option value="Kenya">Kenya </option>

								<option value="Kirghizstan">Kirghizistan </option>

								<option value="Kiribati">Kiribati </option>

								<option value="Koweit">Koweït </option>

								

								<option value="Laos">Laos </option>

								<option value="Lesotho">Lesotho </option>

								<option value="Lettonie">Lettonie </option>

								<option value="Liban">Liban </option>

								<option value="Liberia">Liberia </option>

								<option value="Liechtenstein">Liechtenstein </option>

								<option value="Lituanie">Lituanie </option>

								<option value="Luxembourg">Luxembourg </option>

								<option value="Lybie">Lybie </option>

								

								<option value="Macao">Macao </option>

								<option value="Macedoine">Macédoine </option>

								<option value="Madagascar">Madagascar </option>

								<option value="Madère">Madère </option>

								<option value="Malaisie">Malaisie </option>

								<option value="Malawi">Malawi </option>

								<option value="Maldives">Maldives </option>

								<option value="Mali">Mali </option>

								<option value="Malte">Malte </option>

								<option value="Man">Man </option>

								<option value="Mariannes du Nord">Mariannes du Nord </option>

								<option value="Maroc">Maroc </option>

								<option value="Marshall">Marshall </option>

								<option value="Martinique">Martinique </option>

								<option value="Maurice">Maurice </option>

								<option value="Mauritanie">Mauritanie </option>

								<option value="Mayotte">Mayotte </option>

								<option value="Mexique">Mexique </option>

								<option value="Micronesie">Micronesie </option>

								<option value="Midway">Midway </option>

								<option value="Moldavie">Moldavie </option>

								<option value="Monaco">Monaco </option>

								<option value="Mongolie">Mongolie </option>

								<option value="Montserrat">Montserrat </option>

								<option value="Mozambique">Mozambique </option>

								

								<option value="Namibie">Namibie </option>

								<option value="Nauru">Nauru </option>

								<option value="Nepal">Nepal </option>

								<option value="Nicaragua">Nicaragua </option>

								<option value="Niger">Niger </option>

								<option value="Nigeria">Nigéria </option>

								<option value="Niue">Niue </option>

								<option value="Norfolk">Norfolk </option>

								<option value="Norvege">Norvège </option>

								<option value="Nouvelle_Caledonie">Nouvelle Calédonie </option>

								<option value="Nouvelle_Zelande">Nouvelle Zélande </option>

								

								<option value="Oman">Oman </option>

								<option value="Ouganda">Ouganda </option>

								<option value="Ouzbekistan">Ouzbékistan </option>

								

								<option value="Pakistan">Pakistan </option>

								<option value="Palau">Palau </option>

								<option value="Palestine">Palestine </option>

								<option value="Panama">Panama </option>

								<option value="Papouasie_Nouvelle_Guinee">Papouasie Nouvelle Guinée</option>

								<option value="Paraguay">Paraguay </option>

								<option value="Pays_Bas">Pays Bas </option>

								<option value="Perou">Perou </option>

								<option value="Philippines">Philippines </option>

								<option value="Pologne">Pologne </option>

								<option value="Polynesie">Polynesie </option>

								<option value="Porto_Rico">Porto Rico </option>

								<option value="Portugal">Portugal </option>

								

								<option value="Qatar">Qatar </option>

								

								<option value="Republique_Dominicaine">Republique Dominicaine </option>

								<option value="Republique_Tcheque">Republique Tcheque </option>

								<option value="Reunion">Reunion </option>

								<option value="Roumanie">Roumanie </option>

								<option value="Royaume_Uni">Royaume Uni </option>

								<option value="Russie">Russie </option>

								<option value="Rwanda">Rwanda </option>

								

								<option value="Sahara Occidental">Sahara Occidental </option>

								<option value="Sainte_Lucie">Sainte-Lucie </option>

								<option value="Saint_Marin">Saint-Marin </option>

								<option value="Salomon">Salomon </option>

								<option value="Salvador">Salvador </option>

								<option value="Samoa_Occidentales">Samoa Occidentales</option>

								<option value="Samoa_Americaine">Samoa Americaine </option>

								<option value="Sao_Tome_et_Principe">Sao Tome et Principe </option>

								<option value="Senegal">Sénégal </option>

								<option value="Seychelles">Seychelles </option>

								<option value="Sierra Leone">Sierra Leone </option>

								<option value="Singapour">Singapour </option>

								<option value="Slovaquie">Slovaquie </option>

								<option value="Slovenie">Slovénie</option>

								<option value="Somalie">Somalie </option>

								<option value="Soudan">Soudan </option>

								<option value="Sri_Lanka">Sri Lanka </option>

								<option value="Suede">Suede </option>

								<option value="Suisse">Suisse </option>

								<option value="Surinam">Surinam </option>

								<option value="Swaziland">Swaziland </option>

								<option value="Syrie">Syrie </option>

								

								<option value="Tadjikistan">Tadjikistan </option>

								<option value="Taiwan">Taiwan </option>

								<option value="Tonga">Tonga </option>

								<option value="Tanzanie">Tanzanie </option>

								<option value="Tchad">Tchad </option>

								<option value="Thailande">Thailande </option>

								<option value="Tibet">Tibet </option>

								<option value="Timor_Oriental">Timor Oriental </option>

								<option value="Togo">Togo </option>

								<option value="Trinite_et_Tobago">Trinite et Tobago </option>

								<option value="Tristan da cunha">Tristan de cuncha </option>

								<option value="Tunisie">Tunisie </option>

								<option value="Turkmenistan">Turmenistan </option>

								<option value="Turquie">Turquie </option>

								

								<option value="Ukraine">Ukraine </option>

								<option value="Uruguay">Uruguay </option>

								

								<option value="Vanuatu">Vanuatu </option>

								<option value="Vatican">Vatican </option>

								<option value="Venezuela">Vénézuela </option>

								<option value="Vierges_Americaines">Vierges Américaines </option>

								<option value="Vierges_Britanniques">Vierges Britanniques </option>

								<option value="Vietnam">Vietnam </option>

								

								<option value="Wake">Wake </option>

								<option value="Wallis et Futuma">Wallis et Futuma </option>

								

								<option value="Yemen">Yemen </option>

								<option value="Yougoslavie">Yougoslavie </option>

								

								<option value="Zambie">Zambie </option>

								<option value="Zimbabwe">Zimbabwe </option>

							

							</select>



							@error('pays')

								<span class="invalid-feedback" role="alert">

									<strong>{{ $message }}</strong>

								</span>

							@enderror

						</div>

					</div>

					{{-- End Country --}}



					{{-- Sexe --}}

					<div class="row mb-3">

						<label for="sexe" class="col-md-4 col-form-label text-md-end">{{ __('Sexe') }}</label>

						<div class="col-md-6">

							<select type="select" class="form-select @error('sexe') is-invalid @enderror" name="sexe" value="{{ old('sexe') }}" aria-label="Default select example">

								<option selected> Choisissez Votre Sexe </option>

								<option value="M">Masculin</option>

								<option value="F">Feminin</option>

							  </select>

							@error('sexe')

								<span class="invalid-feedback" role="alert">

									<strong>{{ $message }}</strong>

								</span>

							@enderror

						</div>

					</div>

					

					



					<div class="row mb-3">

						<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>



						<div class="col-md-6">

							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">



							@error('password')

								<span class="invalid-feedback" role="alert">

									<strong>{{ $message }}</strong>

								</span>

							@enderror

						</div>

					</div>



					<div class="row mb-3">

						<label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>



						<div class="col-md-6">

							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

						</div>

					</div>



					<div class="row mb-0">

						<div class="col-md-6 offset-md-4">

							<button type="submit" class="btn btn-primary">

								{{ __('Register') }}

							</button>

						</div>

					</div>

				</form>

			</div>

		</div>

	</div>

</div>



@endsection







