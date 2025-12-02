<?php include "db1.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Airline Booking Form</title>

<style>
/* YOUR FULL STYLES – unchanged */
body {
    font-family: "Segoe UI", Arial, sans-serif;
    margin: 0;
    background: linear-gradient(to bottom right, #005eb8, #199ded);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.form-container {
    background: white;
    width: 850px;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.3);
    border: 2px solid #e6e6e6;
    animation: fadeIn 0.8s ease;
}
h2 {
    text-align: center;
    color: #005eb8;
    font-size: 28px;
    margin-bottom: 20px;
}
.section-title {
    font-weight: bold;
    font-size: 18px;
    margin-top: 25px;
    margin-bottom: 10px;
    color: #005eb8;
    border-left: 4px solid #005eb8;
    padding-left: 8px;
}
.flight-type-box { display: flex; gap: 20px; margin-bottom: 20px; }
.grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px 30px; }
.full-width { grid-column: span 2; }
label { font-weight: 600; color: #444; }
select, input {
    width: 100%; padding: 12px; margin-top: 6px;
    font-size: 15px; border: 1px solid #cfcfcf; border-radius: 5px;
}
button {
    margin-top: 30px;
    padding: 16px;
    width: 100%;
    background: #005eb8;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    font-weight: bold;
}
</style>

</head>
<body>

<div class="form-container">

    <h2>✈ Flight Booking</h2>

    <form action="submit_booking.php" method="POST">

        <div class="section-title">Flight Type</div>
        <div class="flight-type-box">
            <label><input type="radio" name="trip_type" value="one-way" checked> One Way</label>
            <label><input type="radio" name="trip_type" value="round-trip"> Round Trip</label>
            <label><input type="radio" name="trip_type" value="multi-city"> Multi-City</label>
        </div>

        <!-- Your entire large country list stays the same -->
        <!-- Departure -->
        <div class="section-title">Travel Information</div>
        <div class="grid">
            <div class="full-width">
                <label>Departure From</label>
                <select name="departure" required>
                    <option value="">Select departure...</option>
                    <<option value="Afghanistan - Kabul">Afghanistan - Kabul</option>
<option value="Albania - Tirana">Albania - Tirana</option>
<option value="Algeria - Algiers">Algeria - Algiers</option>
<option value="Andorra - Andorra la Vella">Andorra - Andorra la Vella</option>
<option value="Angola - Luanda">Angola - Luanda</option>
<option value="Antigua and Barbuda - St. John's">Antigua and Barbuda - St. John's</option>
<option value="Argentina - Buenos Aires">Argentina - Buenos Aires</option>
<option value="Armenia - Yerevan">Armenia - Yerevan</option>
<option value="Australia - Canberra">Australia - Canberra</option>
<option value="Austria - Vienna">Austria - Vienna</option>
<option value="Azerbaijan - Baku">Azerbaijan - Baku</option>
<option value="Bahamas - Nassau">Bahamas - Nassau</option>
<option value="Bahrain - Manama">Bahrain - Manama</option>
<option value="Bangladesh - Dhaka">Bangladesh - Dhaka</option>
<option value="Barbados - Bridgetown">Barbados - Bridgetown</option>
<option value="Belarus - Minsk">Belarus - Minsk</option>
<option value="Belgium - Brussels">Belgium - Brussels</option>
<option value="Belize - Belmopan">Belize - Belmopan</option>
<option value="Benin - Porto-Novo">Benin - Porto-Novo</option>
<option value="Bhutan - Thimphu">Bhutan - Thimphu</option>
<option value="Bolivia - Sucre">Bolivia - Sucre</option>
<option value="Bosnia and Herzegovina - Sarajevo">Bosnia and Herzegovina - Sarajevo</option>
<option value="Botswana - Gaborone">Botswana - Gaborone</option>
<option value="Brazil - Brasília">Brazil - Brasília</option>
<option value="Brunei - Bandar Seri Begawan">Brunei - Bandar Seri Begawan</option>
<option value="Bulgaria - Sofia">Bulgaria - Sofia</option>
<option value="Burkina Faso - Ouagadougou">Burkina Faso - Ouagadougou</option>
<option value="Burundi - Gitega">Burundi - Gitega</option>
<option value="Cabo Verde - Praia">Cabo Verde - Praia</option>
<option value="Cambodia - Phnom Penh">Cambodia - Phnom Penh</option>
<option value="Cameroon - Yaoundé">Cameroon - Yaoundé</option>
<option value="Canada - Ottawa">Canada - Ottawa</option>
<option value="Central African Republic - Bangui">Central African Republic - Bangui</option>
<option value="Chad - N'Djamena">Chad - N'Djamena</option>
<option value="Chile - Santiago">Chile - Santiago</option>
<option value="China - Beijing">China - Beijing</option>
<option value="Colombia - Bogotá">Colombia - Bogotá</option>
<option value="Comoros - Moroni">Comoros - Moroni</option>
<option value="Congo, Democratic Republic of the - Kinshasa">Congo, Democratic Republic of the - Kinshasa</option>
<option value="Congo, Republic of the - Brazzaville">Congo, Republic of the - Brazzaville</option>
<option value="Costa Rica - San José">Costa Rica - San José</option>
<option value="Côte d'Ivoire - Yamoussoukro">Côte d'Ivoire - Yamoussoukro</option>
<option value="Croatia - Zagreb">Croatia - Zagreb</option>
<option value="Cuba - Havana">Cuba - Havana</option>
<option value="Cyprus - Nicosia">Cyprus - Nicosia</option>
<option value="Czechia - Prague">Czechia - Prague</option>
<option value="Denmark - Copenhagen">Denmark - Copenhagen</option>
<option value="Djibouti - Djibouti">Djibouti - Djibouti</option>
<option value="Dominica - Roseau">Dominica - Roseau</option>
<option value="Dominican Republic - Santo Domingo">Dominican Republic - Santo Domingo</option>
<option value="Ecuador - Quito">Ecuador - Quito</option>
<option value="Egypt - Cairo">Egypt - Cairo</option>
<option value="El Salvador - San Salvador">El Salvador - San Salvador</option>
<option value="Equatorial Guinea - Malabo">Equatorial Guinea - Malabo</option>
<option value="Eritrea - Asmara">Eritrea - Asmara</option>
<option value="Estonia - Tallinn">Estonia - Tallinn</option>
<option value="Eswatini - Mbabane">Eswatini - Mbabane</option>
<option value="Ethiopia - Addis Ababa">Ethiopia - Addis Ababa</option>
<option value="Fiji - Suva">Fiji - Suva</option>
<option value="Finland - Helsinki">Finland - Helsinki</option>
<option value="France - Paris">France - Paris</option>
<option value="Gabon - Libreville">Gabon - Libreville</option>
<option value="Gambia - Banjul">Gambia - Banjul</option>
<option value="Georgia - Tbilisi">Georgia - Tbilisi</option>
<option value="Germany - Berlin">Germany - Berlin</option>
<option value="Ghana - Accra">Ghana - Accra</option>
<option value="Greece - Athens">Greece - Athens</option>
<option value="Grenada - St. George's">Grenada - St. George's</option>
<option value="Guatemala - Guatemala City">Guatemala - Guatemala City</option>
<option value="Guinea - Conakry">Guinea - Conakry</option>
<option value="Guinea-Bissau - Bissau">Guinea-Bissau - Bissau</option>
<option value="Guyana - Georgetown">Guyana - Georgetown</option>
<option value="Haiti - Port-au-Prince">Haiti - Port-au-Prince</option>
<option value="Honduras - Tegucigalpa">Honduras - Tegucigalpa</option>
<option value="Hungary - Budapest">Hungary - Budapest</option>
<option value="Iceland - Reykjavík">Iceland - Reykjavík</option>
<option value="India - New Delhi">India - New Delhi</option>
<option value="Indonesia - Jakarta">Indonesia - Jakarta</option>
<option value="Iran - Tehran">Iran - Tehran</option>
<option value="Iraq - Baghdad">Iraq - Baghdad</option>
<option value="Ireland - Dublin">Ireland - Dublin</option>
<option value="Israel - Jerusalem">Israel - Jerusalem</option>
<option value="Italy - Rome">Italy - Rome</option>
<option value="Jamaica - Kingston">Jamaica - Kingston</option>
<option value="Japan - Tokyo">Japan - Tokyo</option>
<option value="Jordan - Amman">Jordan - Amman</option>
<option value="Kazakhstan - Astana">Kazakhstan - Astana</option>
<option value="Kenya - Nairobi">Kenya - Nairobi</option>
<option value="Kiribati - South Tarawa">Kiribati - South Tarawa</option>
<option value="Korea, North - Pyongyang">Korea, North - Pyongyang</option>
<option value="Korea, South - Seoul">Korea, South - Seoul</option>
<option value="Kuwait - Kuwait City">Kuwait - Kuwait City</option>
<option value="Kyrgyzstan - Bishkek">Kyrgyzstan - Bishkek</option>
<option value="Laos - Vientiane">Laos - Vientiane</option>
<option value="Latvia - Riga">Latvia - Riga</option>
<option value="Lebanon - Beirut">Lebanon - Beirut</option>
<option value="Lesotho - Maseru">Lesotho - Maseru</option>
<option value="Liberia - Monrovia">Liberia - Monrovia</option>
<option value="Libya - Tripoli">Libya - Tripoli</option>
<option value="Liechtenstein - Vaduz">Liechtenstein - Vaduz</option>
<option value="Lithuania - Vilnius">Lithuania - Vilnius</option>
<option value="Luxembourg - Luxembourg">Luxembourg - Luxembourg</option>
<option value="Madagascar - Antananarivo">Madagascar - Antananarivo</option>
<option value="Malawi - Lilongwe">Malawi - Lilongwe</option>
<option value="Malaysia - Kuala Lumpur">Malaysia - Kuala Lumpur</option>
<option value="Maldives - Malé">Maldives - Malé</option>
<option value="Mali - Bamako">Mali - Bamako</option>
<option value="Malta - Valletta">Malta - Valletta</option>
<option value="Marshall Islands - Majuro">Marshall Islands - Majuro</option>
<option value="Mauritania - Nouakchott">Mauritania - Nouakchott</option>
<option value="Mauritius - Port Louis">Mauritius - Port Louis</option>
<option value="Mexico - Mexico City">Mexico - Mexico City</option>
<option value="Micronesia - Palikir">Micronesia - Palikir</option>
<option value="Moldova - Chișinău">Moldova - Chișinău</option>
<option value="Monaco - Monaco">Monaco - Monaco</option>
<option value="Mongolia - Ulaanbaatar">Mongolia - Ulaanbaatar</option>
<option value="Montenegro - Podgorica">Montenegro - Podgorica</option>
<option value="Morocco - Rabat">Morocco - Rabat</option>
<option value="Mozambique - Maputo">Mozambique - Maputo</option>
<option value="Myanmar - Naypyidaw">Myanmar - Naypyidaw</option>
<option value="Namibia - Windhoek">Namibia - Windhoek</option>
<option value="Nauru - Yaren">Nauru - Yaren</option>
<option value="Nepal - Kathmandu">Nepal - Kathmandu</option>
<option value="Netherlands - Amsterdam">Netherlands - Amsterdam</option>
<option value="New Zealand - Wellington">New Zealand - Wellington</option>
<option value="Nicaragua - Managua">Nicaragua - Managua</option>
<option value="Niger - Niamey">Niger - Niamey</option>
<option value="Nigeria - Abuja">Nigeria - Abuja</option>
<option value="North Macedonia - Skopje">North Macedonia - Skopje</option>
<option value="Norway - Oslo">Norway - Oslo</option>
<option value="Oman - Muscat">Oman - Muscat</option>
<option value="Pakistan - Islamabad">Pakistan - Islamabad</option>
<option value="Palau - Ngerulmud">Palau - Ngerulmud</option>
<option value="Panama - Panama City">Panama - Panama City</option>
<option value="Papua New Guinea - Port Moresby">Papua New Guinea - Port Moresby</option>
<option value="Paraguay - Asunción">Paraguay - Asunción</option>
<option value="Peru - Lima">Peru - Lima</option>
<option value="Philippines - Manila">Philippines - Manila</option>
<option value="Poland - Warsaw">Poland - Warsaw</option>
<option value="Portugal - Lisbon">Portugal - Lisbon</option>
<option value="Qatar - Doha">Qatar - Doha</option>
<option value="Romania - Bucharest">Romania - Bucharest</option>
<option value="Russia - Moscow">Russia - Moscow</option>
<option value="Rwanda - Kigali">Rwanda - Kigali</option>
<option value="Saint Kitts and Nevis - Basseterre">Saint Kitts and Nevis - Basseterre</option>
<option value="Saint Lucia - Castries">Saint Lucia - Castries</option>
<option value="Saint Vincent and the Grenadines - Kingstown">Saint Vincent and the Grenadines - Kingstown</option>
<option value="Samoa - Apia">Samoa - Apia</option>
<option value="San Marino - San Marino">San Marino - San Marino</option>
<option value="Sao Tome and Principe - São Tomé">Sao Tome and Principe - São Tomé</option>
<option value="Saudi Arabia - Riyadh">Saudi Arabia - Riyadh</option>
<option value="Senegal - Dakar">Senegal - Dakar</option>
<option value="Serbia - Belgrade">Serbia - Belgrade</option>
<option value="Seychelles - Victoria">Seychelles - Victoria</option>
<option value="Sierra Leone - Freetown">Sierra Leone - Freetown</option>
<option value="Singapore - Singapore">Singapore - Singapore</option>
<option value="Slovakia - Bratislava">Slovakia - Bratislava</option>
<option value="Slovenia - Ljubljana">Slovenia - Ljubljana</option>
<option value="Solomon Islands - Honiara">Solomon Islands - Honiara</option>
<option value="Somalia - Mogadishu">Somalia - Mogadishu</option>
<option value="South Africa - Pretoria">South Africa - Pretoria</option>
<option value="South Sudan - Juba">South Sudan - Juba</option>
<option value="Spain - Madrid">Spain - Madrid</option>
<option value="Sri Lanka - Sri Jayawardenepura Kotte">Sri Lanka - Sri Jayawardenepura Kotte</option>
<option value="Sudan - Khartoum">Sudan - Khartoum</option>
<option value="Suriname - Paramaribo">Suriname - Paramaribo</option>
<option value="Sweden - Stockholm">Sweden - Stockholm</option>
<option value="Switzerland - Bern">Switzerland - Bern</option>
<option value="Syria - Damascus">Syria - Damascus</option>
<option value="Taiwan - Taipei">Taiwan - Taipei</option>
<option value="Tajikistan - Dushanbe">Tajikistan - Dushanbe</option>
<option value="Tanzania - Dodoma">Tanzania - Dodoma</option>
<option value="Thailand - Bangkok">Thailand - Bangkok</option>
<option value="Timor-Leste - Dili">Timor-Leste - Dili</option>
<option value="Togo - Lomé">Togo - Lomé</option>
<option value="Tonga - Nuku'alofa">Tonga - Nuku'alofa</option>
<option value="Trinidad and Tobago - Port of Spain">Trinidad and Tobago - Port of Spain</option>
<option value="Tunisia - Tunis">Tunisia - Tunis</option>
<option value="Turkey - Ankara">Turkey - Ankara</option>
<option value="Turkmenistan - Ashgabat">Turkmenistan - Ashgabat</option>
<option value="Tuvalu - Funafuti">Tuvalu - Funafuti</option>
<option value="Uganda - Kampala">Uganda - Kampala</option>
<option value="Ukraine - Kyiv">Ukraine - Kyiv</option>
<option value="United Arab Emirates - Abu Dhabi">United Arab Emirates - Abu Dhabi</option>
<option value="United Kingdom - London">United Kingdom - London</option>
<option value="United States - Washington, D.C.">United States - Washington, D.C.</option>
<option value="Uruguay - Montevideo">Uruguay - Montevideo</option>
<option value="Uzbekistan - Tashkent">Uzbekistan - Tashkent</option>
<option value="Vanuatu - Port Vila">Vanuatu - Port Vila</option>
<option value="Vatican City - Vatican City">Vatican City - Vatican City</option>
<option value="Venezuela - Caracas">Venezuela - Caracas</option>
<option value="Vietnam - Hanoi">Vietnam - Hanoi</option>
<option value="Yemen - Sana'a">Yemen - Sana'a</option>
<option value="Zambia - Lusaka">Zambia - Lusaka</option>
<option value="Zimbabwe - Harare">Zimbabwe - Harare</option>          

                    <!-- your entire country list here -->
                </select>
            </div>

            <div class="full-width">
                <label>Destination To</label>
                <select name="destination" required>
                    <option value="">Select destination...</option>
                    <option value="Afghanistan - Kabul">Afghanistan - Kabul</option>
<option value="Albania - Tirana">Albania - Tirana</option>
<option value="Algeria - Algiers">Algeria - Algiers</option>
<option value="Andorra - Andorra la Vella">Andorra - Andorra la Vella</option>
<option value="Angola - Luanda">Angola - Luanda</option>
<option value="Antigua and Barbuda - St. John's">Antigua and Barbuda - St. John's</option>
<option value="Argentina - Buenos Aires">Argentina - Buenos Aires</option>
<option value="Armenia - Yerevan">Armenia - Yerevan</option>
<option value="Australia - Canberra">Australia - Canberra</option>
<option value="Austria - Vienna">Austria - Vienna</option>
<option value="Azerbaijan - Baku">Azerbaijan - Baku</option>
<option value="Bahamas - Nassau">Bahamas - Nassau</option>
<option value="Bahrain - Manama">Bahrain - Manama</option>
<option value="Bangladesh - Dhaka">Bangladesh - Dhaka</option>
<option value="Barbados - Bridgetown">Barbados - Bridgetown</option>
<option value="Belarus - Minsk">Belarus - Minsk</option>
<option value="Belgium - Brussels">Belgium - Brussels</option>
<option value="Belize - Belmopan">Belize - Belmopan</option>
<option value="Benin - Porto-Novo">Benin - Porto-Novo</option>
<option value="Bhutan - Thimphu">Bhutan - Thimphu</option>
<option value="Bolivia - Sucre">Bolivia - Sucre</option>
<option value="Bosnia and Herzegovina - Sarajevo">Bosnia and Herzegovina - Sarajevo</option>
<option value="Botswana - Gaborone">Botswana - Gaborone</option>
<option value="Brazil - Brasília">Brazil - Brasília</option>
<option value="Brunei - Bandar Seri Begawan">Brunei - Bandar Seri Begawan</option>
<option value="Bulgaria - Sofia">Bulgaria - Sofia</option>
<option value="Burkina Faso - Ouagadougou">Burkina Faso - Ouagadougou</option>
<option value="Burundi - Gitega">Burundi - Gitega</option>
<option value="Cabo Verde - Praia">Cabo Verde - Praia</option>
<option value="Cambodia - Phnom Penh">Cambodia - Phnom Penh</option>
<option value="Cameroon - Yaoundé">Cameroon - Yaoundé</option>
<option value="Canada - Ottawa">Canada - Ottawa</option>
<option value="Central African Republic - Bangui">Central African Republic - Bangui</option>
<option value="Chad - N'Djamena">Chad - N'Djamena</option>
<option value="Chile - Santiago">Chile - Santiago</option>
<option value="China - Beijing">China - Beijing</option>
<option value="Colombia - Bogotá">Colombia - Bogotá</option>
<option value="Comoros - Moroni">Comoros - Moroni</option>
<option value="Congo, Democratic Republic of the - Kinshasa">Congo, Democratic Republic of the - Kinshasa</option>
<option value="Congo, Republic of the - Brazzaville">Congo, Republic of the - Brazzaville</option>
<option value="Costa Rica - San José">Costa Rica - San José</option>
<option value="Côte d'Ivoire - Yamoussoukro">Côte d'Ivoire - Yamoussoukro</option>
<option value="Croatia - Zagreb">Croatia - Zagreb</option>
<option value="Cuba - Havana">Cuba - Havana</option>
<option value="Cyprus - Nicosia">Cyprus - Nicosia</option>
<option value="Czechia - Prague">Czechia - Prague</option>
<option value="Denmark - Copenhagen">Denmark - Copenhagen</option>
<option value="Djibouti - Djibouti">Djibouti - Djibouti</option>
<option value="Dominica - Roseau">Dominica - Roseau</option>
<option value="Dominican Republic - Santo Domingo">Dominican Republic - Santo Domingo</option>
<option value="Ecuador - Quito">Ecuador - Quito</option>
<option value="Egypt - Cairo">Egypt - Cairo</option>
<option value="El Salvador - San Salvador">El Salvador - San Salvador</option>
<option value="Equatorial Guinea - Malabo">Equatorial Guinea - Malabo</option>
<option value="Eritrea - Asmara">Eritrea - Asmara</option>
<option value="Estonia - Tallinn">Estonia - Tallinn</option>
<option value="Eswatini - Mbabane">Eswatini - Mbabane</option>
<option value="Ethiopia - Addis Ababa">Ethiopia - Addis Ababa</option>
<option value="Fiji - Suva">Fiji - Suva</option>
<option value="Finland - Helsinki">Finland - Helsinki</option>
<option value="France - Paris">France - Paris</option>
<option value="Gabon - Libreville">Gabon - Libreville</option>
<option value="Gambia - Banjul">Gambia - Banjul</option>
<option value="Georgia - Tbilisi">Georgia - Tbilisi</option>
<option value="Germany - Berlin">Germany - Berlin</option>
<option value="Ghana - Accra">Ghana - Accra</option>
<option value="Greece - Athens">Greece - Athens</option>
<option value="Grenada - St. George's">Grenada - St. George's</option>
<option value="Guatemala - Guatemala City">Guatemala - Guatemala City</option>
<option value="Guinea - Conakry">Guinea - Conakry</option>
<option value="Guinea-Bissau - Bissau">Guinea-Bissau - Bissau</option>
<option value="Guyana - Georgetown">Guyana - Georgetown</option>
<option value="Haiti - Port-au-Prince">Haiti - Port-au-Prince</option>
<option value="Honduras - Tegucigalpa">Honduras - Tegucigalpa</option>
<option value="Hungary - Budapest">Hungary - Budapest</option>
<option value="Iceland - Reykjavík">Iceland - Reykjavík</option>
<option value="India - New Delhi">India - New Delhi</option>
<option value="Indonesia - Jakarta">Indonesia - Jakarta</option>
<option value="Iran - Tehran">Iran - Tehran</option>
<option value="Iraq - Baghdad">Iraq - Baghdad</option>
<option value="Ireland - Dublin">Ireland - Dublin</option>
<option value="Israel - Jerusalem">Israel - Jerusalem</option>
<option value="Italy - Rome">Italy - Rome</option>
<option value="Jamaica - Kingston">Jamaica - Kingston</option>
<option value="Japan - Tokyo">Japan - Tokyo</option>
<option value="Jordan - Amman">Jordan - Amman</option>
<option value="Kazakhstan - Astana">Kazakhstan - Astana</option>
<option value="Kenya - Nairobi">Kenya - Nairobi</option>
<option value="Kiribati - South Tarawa">Kiribati - South Tarawa</option>
<option value="Korea, North - Pyongyang">Korea, North - Pyongyang</option>
<option value="Korea, South - Seoul">Korea, South - Seoul</option>
<option value="Kuwait - Kuwait City">Kuwait - Kuwait City</option>
<option value="Kyrgyzstan - Bishkek">Kyrgyzstan - Bishkek</option>
<option value="Laos - Vientiane">Laos - Vientiane</option>
<option value="Latvia - Riga">Latvia - Riga</option>
<option value="Lebanon - Beirut">Lebanon - Beirut</option>
<option value="Lesotho - Maseru">Lesotho - Maseru</option>
<option value="Liberia - Monrovia">Liberia - Monrovia</option>
<option value="Libya - Tripoli">Libya - Tripoli</option>
<option value="Liechtenstein - Vaduz">Liechtenstein - Vaduz</option>
<option value="Lithuania - Vilnius">Lithuania - Vilnius</option>
<option value="Luxembourg - Luxembourg">Luxembourg - Luxembourg</option>
<option value="Madagascar - Antananarivo">Madagascar - Antananarivo</option>
<option value="Malawi - Lilongwe">Malawi - Lilongwe</option>
<option value="Malaysia - Kuala Lumpur">Malaysia - Kuala Lumpur</option>
<option value="Maldives - Malé">Maldives - Malé</option>
<option value="Mali - Bamako">Mali - Bamako</option>
<option value="Malta - Valletta">Malta - Valletta</option>
<option value="Marshall Islands - Majuro">Marshall Islands - Majuro</option>
<option value="Mauritania - Nouakchott">Mauritania - Nouakchott</option>
<option value="Mauritius - Port Louis">Mauritius - Port Louis</option>
<option value="Mexico - Mexico City">Mexico - Mexico City</option>
<option value="Micronesia - Palikir">Micronesia - Palikir</option>
<option value="Moldova - Chișinău">Moldova - Chișinău</option>
<option value="Monaco - Monaco">Monaco - Monaco</option>
<option value="Mongolia - Ulaanbaatar">Mongolia - Ulaanbaatar</option>
<option value="Montenegro - Podgorica">Montenegro - Podgorica</option>
<option value="Morocco - Rabat">Morocco - Rabat</option>
<option value="Mozambique - Maputo">Mozambique - Maputo</option>
<option value="Myanmar - Naypyidaw">Myanmar - Naypyidaw</option>
<option value="Namibia - Windhoek">Namibia - Windhoek</option>
<option value="Nauru - Yaren">Nauru - Yaren</option>
<option value="Nepal - Kathmandu">Nepal - Kathmandu</option>
<option value="Netherlands - Amsterdam">Netherlands - Amsterdam</option>
<option value="New Zealand - Wellington">New Zealand - Wellington</option>
<option value="Nicaragua - Managua">Nicaragua - Managua</option>
<option value="Niger - Niamey">Niger - Niamey</option>
<option value="Nigeria - Abuja">Nigeria - Abuja</option>
<option value="North Macedonia - Skopje">North Macedonia - Skopje</option>
<option value="Norway - Oslo">Norway - Oslo</option>
<option value="Oman - Muscat">Oman - Muscat</option>
<option value="Pakistan - Islamabad">Pakistan - Islamabad</option>
<option value="Palau - Ngerulmud">Palau - Ngerulmud</option>
<option value="Panama - Panama City">Panama - Panama City</option>
<option value="Papua New Guinea - Port Moresby">Papua New Guinea - Port Moresby</option>
<option value="Paraguay - Asunción">Paraguay - Asunción</option>
<option value="Peru - Lima">Peru - Lima</option>
<option value="Philippines - Manila">Philippines - Manila</option>
<option value="Poland - Warsaw">Poland - Warsaw</option>
<option value="Portugal - Lisbon">Portugal - Lisbon</option>
<option value="Qatar - Doha">Qatar - Doha</option>
<option value="Romania - Bucharest">Romania - Bucharest</option>
<option value="Russia - Moscow">Russia - Moscow</option>
<option value="Rwanda - Kigali">Rwanda - Kigali</option>
<option value="Saint Kitts and Nevis - Basseterre">Saint Kitts and Nevis - Basseterre</option>
<option value="Saint Lucia - Castries">Saint Lucia - Castries</option>
<option value="Saint Vincent and the Grenadines - Kingstown">Saint Vincent and the Grenadines - Kingstown</option>
<option value="Samoa - Apia">Samoa - Apia</option>
<option value="San Marino - San Marino">San Marino - San Marino</option>
<option value="Sao Tome and Principe - São Tomé">Sao Tome and Principe - São Tomé</option>
<option value="Saudi Arabia - Riyadh">Saudi Arabia - Riyadh</option>
<option value="Senegal - Dakar">Senegal - Dakar</option>
<option value="Serbia - Belgrade">Serbia - Belgrade</option>
<option value="Seychelles - Victoria">Seychelles - Victoria</option>
<option value="Sierra Leone - Freetown">Sierra Leone - Freetown</option>
<option value="Singapore - Singapore">Singapore - Singapore</option>
<option value="Slovakia - Bratislava">Slovakia - Bratislava</option>
<option value="Slovenia - Ljubljana">Slovenia - Ljubljana</option>
<option value="Solomon Islands - Honiara">Solomon Islands - Honiara</option>
<option value="Somalia - Mogadishu">Somalia - Mogadishu</option>
<option value="South Africa - Pretoria">South Africa - Pretoria</option>
<option value="South Sudan - Juba">South Sudan - Juba</option>
<option value="Spain - Madrid">Spain - Madrid</option>
<option value="Sri Lanka - Sri Jayawardenepura Kotte">Sri Lanka - Sri Jayawardenepura Kotte</option>
<option value="Sudan - Khartoum">Sudan - Khartoum</option>
<option value="Suriname - Paramaribo">Suriname - Paramaribo</option>
<option value="Sweden - Stockholm">Sweden - Stockholm</option>
<option value="Switzerland - Bern">Switzerland - Bern</option>
<option value="Syria - Damascus">Syria - Damascus</option>
<option value="Taiwan - Taipei">Taiwan - Taipei</option>
<option value="Tajikistan - Dushanbe">Tajikistan - Dushanbe</option>
<option value="Tanzania - Dodoma">Tanzania - Dodoma</option>
<option value="Thailand - Bangkok">Thailand - Bangkok</option>
<option value="Timor-Leste - Dili">Timor-Leste - Dili</option>
<option value="Togo - Lomé">Togo - Lomé</option>
<option value="Tonga - Nuku'alofa">Tonga - Nuku'alofa</option>
<option value="Trinidad and Tobago - Port of Spain">Trinidad and Tobago - Port of Spain</option>
<option value="Tunisia - Tunis">Tunisia - Tunis</option>
<option value="Turkey - Ankara">Turkey - Ankara</option>
<option value="Turkmenistan - Ashgabat">Turkmenistan - Ashgabat</option>
<option value="Tuvalu - Funafuti">Tuvalu - Funafuti</option>
<option value="Uganda - Kampala">Uganda - Kampala</option>
<option value="Ukraine - Kyiv">Ukraine - Kyiv</option>
<option value="United Arab Emirates - Abu Dhabi">United Arab Emirates - Abu Dhabi</option>
<option value="United Kingdom - London">United Kingdom - London</option>
<option value="United States - Washington, D.C.">United States - Washington, D.C.</option>
<option value="Uruguay - Montevideo">Uruguay - Montevideo</option>
<option value="Uzbekistan - Tashkent">Uzbekistan - Tashkent</option>
<option value="Vanuatu - Port Vila">Vanuatu - Port Vila</option>
<option value="Vatican City - Vatican City">Vatican City - Vatican City</option>
<option value="Venezuela - Caracas">Venezuela - Caracas</option>
<option value="Vietnam - Hanoi">Vietnam - Hanoi</option>
<option value="Yemen - Sana'a">Yemen - Sana'a</option>
<option value="Zambia - Lusaka">Zambia - Lusaka</option>
<option value="Zimbabwe - Harare">Zimbabwe - Harare</option>          

                    <!-- your full country list here -->
                </select>
            </div>

            <div>
                <label>Departure Date</label>
                <input type="date" name="departure_date" required>
            </div>

            <div>
                <label>Return Date</label>
                <input type="date" name="return_date">
            </div>

            <div>
                <label>Departure Time</label>
                <input type="time" name="departure_time" required>
            </div>

            <div>
                <label>Return Time</label>
                <input type="time" name="return_time">
            </div>
        </div>

        <!-- Airline -->
        <div class="section-title">Select Airline</div>
        <select name="airline" required>
            <option value="">Select Airline...</option>
            
                    <option value="North America">✈ North America</option>
                    <option value="American Airlines">American Airlines</option>
                    <option value="Delta Air Lines">Delta Air Lines</option>
                    <option value="United Airlines">United Airlines</option>
                    <option value="Southwest Airlines">Southwest Airlines</option>
                    <option value="Alaska Airlines">Alaska Airlines</option>
                    <option value="JetBlue Airways">JetBlue Airways</option>
                    <option value="Air Canada">Air Canada</option>
                    <option value="WestJet">WestJet</option>
                     <option value="Air Transat">Air Transat</option>
                     <option value="Europe">✈ Europe</option>
                      <option value="British Airways"> British Airways</option>
                       <option value="Lufthansa">Lufthansa</option>
                        <option value="Air France">Air France</option>
                         <option value="KLM Royal Dutch Airline">KLM Royal Dutch Airlines</option>
                          <option value="Swiss International Air Lines">Swiss International Air Lines</option>
                           <option value="Austrian Airlines">Austrian Airlines</option>
                            <option value="Scandinavian Airlines">Scandinavian Airlines</option>
                             <option value="Iberia">Iberia</option>
                              <option value="Ryanair">Ryanair</option>
                               <option value="EasyJet">EasyJet</option>
                                <option value="Wizz Air">Wizz Air</option>
                                 <option value="Finnair">Finnair</option>
                                 <option value="LOT Polish Airlines">LOT Polish Airlines</option>
                                 <option value="Turkish Airlines">Turkish Airlines </option>
                                 <option value="Middle East">✈ Middle East</option>
                                 <option value="Emirates">Emirates</option>
                                 <option value="Etihad Airways">Etihad Airways</option>
                                 <option value="Qatar Airways">Qatar Airways</option>
                                 <option value="Saudia">Saudia</option>
                                 <option value="Oman Air">Oman Air</option>
                                 <option value="Gulf Air">Gulf Air</option>
                                 <option value="Kuwait Airlines">Kuwait Airlines</option>
                                 <option value="Royal Jordanian">Royal Jordanian</option>
                                 <option value="Asia">✈ Aisa</option>
                                 <option value="Singapore Airlines">Singapore Airlines</option>
                                 <option value="Cathay Pacific">Cathay Pacific</option>
                                 <option value="Japan Airlines">Japan Airlines</option>
                                 <option value="All Nippon Airways">All Nippon Airways</option>
                                 <option value="Korean Air">Korean Air</option>
                                 <option value="Asiana Airlines">Asiana Airlines</option>
                                 <option value="China Airlines">China Airlines</option>
                                 <option value="EVA Air">EVA Air</option>
                                 <option value="Air India">Air India</option>
                                 <option value="IndiGo">IndiGo</option>
                                 <option value="Philippines Airlines">Philippines Airlines</option>
                                 <option value="Thai Airways">Thai Airways</option>
                                 <option value="Vietnam Airlines">Vietnam Airlines</option>
                                 <option value="Ocenia">✈ Oceania</option>
                                 <option value="Qantas">Qantas</option>
                                 <option value="Virgin Australia">Virgin Australia</option>
                                 <option value="Air New Zealand">Air New Zealand</option>
                                 <option value="Fiji Airways">Fiji Airways</option>
                                 <option value="Africa">✈ Africa</option>
                                 <option value="Ethiopian Airlines">Ethiopian Airlines</option>
                                 <option value="South African Airways">South Africans Airways</option>
                                 <option value="EgyptAir">EgyptAir</option>
                                 <option value="Kenya Airways">Kenya Airways</option>
                                 <option value="Royal Air Maroc">Royal Air Maroc</option>
                                 <option value="Tunisair">Tunisair</option>
                                 <option value="South America">✈ South America</option>
                                 <option value="LATAM Airlines">LATAM Airlines</option>
                                 <option value="Avianca">Avianca</option>
                                 <option value="Aerolíneas Argentinas">Aerolíneas Argentinas</option>
                                 <option value="GOL Linhas Aéreas">GOL Linhas Aéreas</option>
                                 <option value="Azul Brazilian Airlines">Azul Brazilian Airlines</option>

        </select>

        <!-- Passengers -->
        <div class="section-title">Passenger & Class</div>
        <div class="grid">
            <div>
                <label>Number of Passengers</label>
                <input type="number" name="passengers" min="1" max="9" value="1">
            </div>

            <div>
                <label>Travel Class</label>
                <select name="class">
                    <option value="Economy">Economy</option>
                    <option value="Premium Economy">Premium Economy</option>
                    <option value="Business">Business</option>
                    <option value="First Class">First Class</option>
                </select>
            </div>
        </div>

        <button type="submit">Submit Booking</button>
    </form>

</div>

</body>
</html>
