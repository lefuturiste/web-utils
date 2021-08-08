<?php

return [
  'actions' => [
    [
      'name' => 'Get unix epoch',
      'path' => '/?format=unix'
    ],
    [
      'name' => 'Get unix epoch (in milliseconds)',
      'path' => '/?format=unix_milli'
    ],
    [
      'name' => 'Change timezones',
      'path' => '/?timezone=Asia/Tokyo'
    ]
  ],
  'append' => function () {
    ?>
    <h2>List of supported timezones</h2>

    <table class="doctable table">
      <caption><strong>Europe</strong></caption>
      
        <tbody class="tbody">
        <tr>
          <td>Europe/Amsterdam</td>
          <td>Europe/Andorra</td>
          <td>Europe/Astrakhan</td>
          <td>Europe/Athens</td>
        </tr>

        <tr>
          <td>Europe/Belgrade</td>
          <td>Europe/Berlin</td>
          <td>Europe/Bratislava</td>
          <td>Europe/Brussels</td>
        </tr>

        <tr>
          <td>Europe/Bucharest</td>
          <td>Europe/Budapest</td>
          <td>Europe/Busingen</td>
          <td>Europe/Chisinau</td>
        </tr>

        <tr>
          <td>Europe/Copenhagen</td>
          <td>Europe/Dublin</td>
          <td>Europe/Gibraltar</td>
          <td>Europe/Guernsey</td>
        </tr>

        <tr>
          <td>Europe/Helsinki</td>
          <td>Europe/Isle_of_Man</td>
          <td>Europe/Istanbul</td>
          <td>Europe/Jersey</td>
        </tr>

        <tr>
          <td>Europe/Kaliningrad</td>
          <td>Europe/Kiev</td>
          <td>Europe/Kirov</td>
          <td>Europe/Lisbon</td>
        </tr>

        <tr>
          <td>Europe/Ljubljana</td>
          <td>Europe/London</td>
          <td>Europe/Luxembourg</td>
          <td>Europe/Madrid</td>
        </tr>

        <tr>
          <td>Europe/Malta</td>
          <td>Europe/Mariehamn</td>
          <td>Europe/Minsk</td>
          <td>Europe/Monaco</td>
        </tr>

        <tr>
          <td>Europe/Moscow</td>
          <td>Europe/Oslo</td>
          <td>Europe/Paris</td>
          <td>Europe/Podgorica</td>
        </tr>

        <tr>
          <td>Europe/Prague</td>
          <td>Europe/Riga</td>
          <td>Europe/Rome</td>
          <td>Europe/Samara</td>
        </tr>

        <tr>
          <td>Europe/San_Marino</td>
          <td>Europe/Sarajevo</td>
          <td>Europe/Saratov</td>
          <td>Europe/Simferopol</td>
        </tr>

        <tr>
          <td>Europe/Skopje</td>
          <td>Europe/Sofia</td>
          <td>Europe/Stockholm</td>
          <td>Europe/Tallinn</td>
        </tr>

        <tr>
          <td>Europe/Tirane</td>
          <td>Europe/Ulyanovsk</td>
          <td>Europe/Uzhgorod</td>
          <td>Europe/Vaduz</td>
        </tr>

        <tr>
          <td>Europe/Vatican</td>
          <td>Europe/Vienna</td>
          <td>Europe/Vilnius</td>
          <td>Europe/Volgograd</td>
        </tr>

        <tr>
          <td>Europe/Warsaw</td>
          <td>Europe/Zagreb</td>
          <td>Europe/Zaporozhye</td>
          <td>Europe/Zurich</td>
        </tr>

        </tbody>
      
      </table>

      <table class="doctable table">
      <caption><strong>Africa</strong></caption>
      
        <tbody class="tbody">
        <tr>
          <td>Africa/Abidjan</td>
          <td>Africa/Accra</td>
          <td>Africa/Addis_Ababa</td>
          <td>Africa/Algiers</td>
        </tr>

        <tr>
          <td>Africa/Asmara</td>
          <td>Africa/Bamako</td>
          <td>Africa/Bangui</td>
          <td>Africa/Banjul</td>
        </tr>

        <tr>
          <td>Africa/Bissau</td>
          <td>Africa/Blantyre</td>
          <td>Africa/Brazzaville</td>
          <td>Africa/Bujumbura</td>
        </tr>

        <tr>
          <td>Africa/Cairo</td>
          <td>Africa/Casablanca</td>
          <td>Africa/Ceuta</td>
          <td>Africa/Conakry</td>
        </tr>

        <tr>
          <td>Africa/Dakar</td>
          <td>Africa/Dar_es_Salaam</td>
          <td>Africa/Djibouti</td>
          <td>Africa/Douala</td>
        </tr>

        <tr>
          <td>Africa/El_Aaiun</td>
          <td>Africa/Freetown</td>
          <td>Africa/Gaborone</td>
          <td>Africa/Harare</td>
        </tr>

        <tr>
          <td>Africa/Johannesburg</td>
          <td>Africa/Juba</td>
          <td>Africa/Kampala</td>
          <td>Africa/Khartoum</td>
        </tr>

        <tr>
          <td>Africa/Kigali</td>
          <td>Africa/Kinshasa</td>
          <td>Africa/Lagos</td>
          <td>Africa/Libreville</td>
        </tr>

        <tr>
          <td>Africa/Lome</td>
          <td>Africa/Luanda</td>
          <td>Africa/Lubumbashi</td>
          <td>Africa/Lusaka</td>
        </tr>

        <tr>
          <td>Africa/Malabo</td>
          <td>Africa/Maputo</td>
          <td>Africa/Maseru</td>
          <td>Africa/Mbabane</td>
        </tr>

        <tr>
          <td>Africa/Mogadishu</td>
          <td>Africa/Monrovia</td>
          <td>Africa/Nairobi</td>
          <td>Africa/Ndjamena</td>
        </tr>

        <tr>
          <td>Africa/Niamey</td>
          <td>Africa/Nouakchott</td>
          <td>Africa/Ouagadougou</td>
          <td>Africa/Porto-Novo</td>
        </tr>

        <tr>
          <td>Africa/Sao_Tome</td>
          <td>Africa/Tripoli</td>
          <td>Africa/Tunis</td>
          <td>Africa/Windhoek</td>
        </tr>

        </tbody>
      
      </table>

    <table class="doctable table">
      <caption><strong>America</strong></caption>
      
        <tbody class="tbody">
        <tr>
          <td>America/Adak</td>
          <td>America/Anchorage</td>
          <td>America/Anguilla</td>
          <td>America/Antigua</td>
        </tr>

        <tr>
          <td>America/Araguaina</td>
          <td>America/Argentina/Buenos_Aires</td>
          <td>America/Argentina/Catamarca</td>
          <td>America/Argentina/Cordoba</td>
        </tr>

        <tr>
          <td>America/Argentina/Jujuy</td>
          <td>America/Argentina/La_Rioja</td>
          <td>America/Argentina/Mendoza</td>
          <td>America/Argentina/Rio_Gallegos</td>
        </tr>

        <tr>
          <td>America/Argentina/Salta</td>
          <td>America/Argentina/San_Juan</td>
          <td>America/Argentina/San_Luis</td>
          <td>America/Argentina/Tucuman</td>
        </tr>

        <tr>
          <td>America/Argentina/Ushuaia</td>
          <td>America/Aruba</td>
          <td>America/Asuncion</td>
          <td>America/Atikokan</td>
        </tr>

        <tr>
          <td>America/Bahia</td>
          <td>America/Bahia_Banderas</td>
          <td>America/Barbados</td>
          <td>America/Belem</td>
        </tr>

        <tr>
          <td>America/Belize</td>
          <td>America/Blanc-Sablon</td>
          <td>America/Boa_Vista</td>
          <td>America/Bogota</td>
        </tr>

        <tr>
          <td>America/Boise</td>
          <td>America/Cambridge_Bay</td>
          <td>America/Campo_Grande</td>
          <td>America/Cancun</td>
        </tr>

        <tr>
          <td>America/Caracas</td>
          <td>America/Cayenne</td>
          <td>America/Cayman</td>
          <td>America/Chicago</td>
        </tr>

        <tr>
          <td>America/Chihuahua</td>
          <td>America/Costa_Rica</td>
          <td>America/Creston</td>
          <td>America/Cuiaba</td>
        </tr>

        <tr>
          <td>America/Curacao</td>
          <td>America/Danmarkshavn</td>
          <td>America/Dawson</td>
          <td>America/Dawson_Creek</td>
        </tr>

        <tr>
          <td>America/Denver</td>
          <td>America/Detroit</td>
          <td>America/Dominica</td>
          <td>America/Edmonton</td>
        </tr>

        <tr>
          <td>America/Eirunepe</td>
          <td>America/El_Salvador</td>
          <td>America/Fort_Nelson</td>
          <td>America/Fortaleza</td>
        </tr>

        <tr>
          <td>America/Glace_Bay</td>
          <td>America/Goose_Bay</td>
          <td>America/Grand_Turk</td>
          <td>America/Grenada</td>
        </tr>

        <tr>
          <td>America/Guadeloupe</td>
          <td>America/Guatemala</td>
          <td>America/Guayaquil</td>
          <td>America/Guyana</td>
        </tr>

        <tr>
          <td>America/Halifax</td>
          <td>America/Havana</td>
          <td>America/Hermosillo</td>
          <td>America/Indiana/Indianapolis</td>
        </tr>

        <tr>
          <td>America/Indiana/Knox</td>
          <td>America/Indiana/Marengo</td>
          <td>America/Indiana/Petersburg</td>
          <td>America/Indiana/Tell_City</td>
        </tr>

        <tr>
          <td>America/Indiana/Vevay</td>
          <td>America/Indiana/Vincennes</td>
          <td>America/Indiana/Winamac</td>
          <td>America/Inuvik</td>
        </tr>

        <tr>
          <td>America/Iqaluit</td>
          <td>America/Jamaica</td>
          <td>America/Juneau</td>
          <td>America/Kentucky/Louisville</td>
        </tr>

        <tr>
          <td>America/Kentucky/Monticello</td>
          <td>America/Kralendijk</td>
          <td>America/La_Paz</td>
          <td>America/Lima</td>
        </tr>

        <tr>
          <td>America/Los_Angeles</td>
          <td>America/Lower_Princes</td>
          <td>America/Maceio</td>
          <td>America/Managua</td>
        </tr>

        <tr>
          <td>America/Manaus</td>
          <td>America/Marigot</td>
          <td>America/Martinique</td>
          <td>America/Matamoros</td>
        </tr>

        <tr>
          <td>America/Mazatlan</td>
          <td>America/Menominee</td>
          <td>America/Merida</td>
          <td>America/Metlakatla</td>
        </tr>

        <tr>
          <td>America/Mexico_City</td>
          <td>America/Miquelon</td>
          <td>America/Moncton</td>
          <td>America/Monterrey</td>
        </tr>

        <tr>
          <td>America/Montevideo</td>
          <td>America/Montserrat</td>
          <td>America/Nassau</td>
          <td>America/New_York</td>
        </tr>

        <tr>
          <td>America/Nipigon</td>
          <td>America/Nome</td>
          <td>America/Noronha</td>
          <td>America/North_Dakota/Beulah</td>
        </tr>

        <tr>
          <td>America/North_Dakota/Center</td>
          <td>America/North_Dakota/New_Salem</td>
          <td>America/Nuuk</td>
          <td>America/Ojinaga</td>
        </tr>

        <tr>
          <td>America/Panama</td>
          <td>America/Pangnirtung</td>
          <td>America/Paramaribo</td>
          <td>America/Phoenix</td>
        </tr>

        <tr>
          <td>America/Port-au-Prince</td>
          <td>America/Port_of_Spain</td>
          <td>America/Porto_Velho</td>
          <td>America/Puerto_Rico</td>
        </tr>

        <tr>
          <td>America/Punta_Arenas</td>
          <td>America/Rainy_River</td>
          <td>America/Rankin_Inlet</td>
          <td>America/Recife</td>
        </tr>

        <tr>
          <td>America/Regina</td>
          <td>America/Resolute</td>
          <td>America/Rio_Branco</td>
          <td>America/Santarem</td>
        </tr>

        <tr>
          <td>America/Santiago</td>
          <td>America/Santo_Domingo</td>
          <td>America/Sao_Paulo</td>
          <td>America/Scoresbysund</td>
        </tr>

        <tr>
          <td>America/Sitka</td>
          <td>America/St_Barthelemy</td>
          <td>America/St_Johns</td>
          <td>America/St_Kitts</td>
        </tr>

        <tr>
          <td>America/St_Lucia</td>
          <td>America/St_Thomas</td>
          <td>America/St_Vincent</td>
          <td>America/Swift_Current</td>
        </tr>

        <tr>
          <td>America/Tegucigalpa</td>
          <td>America/Thule</td>
          <td>America/Thunder_Bay</td>
          <td>America/Tijuana</td>
        </tr>

        <tr>
          <td>America/Toronto</td>
          <td>America/Tortola</td>
          <td>America/Vancouver</td>
          <td>America/Whitehorse</td>
        </tr>

        <tr>
          <td>America/Winnipeg</td>
          <td>America/Yakutat</td>
          <td>America/Yellowknife</td>
          <td class="empty">&nbsp;</td>
        </tr>

        </tbody>
      
      </table>

      <table class="doctable table">
      <caption><strong>Asia</strong></caption>
      
        <tbody class="tbody">
        <tr>
          <td>Asia/Aden</td>
          <td>Asia/Almaty</td>
          <td>Asia/Amman</td>
          <td>Asia/Anadyr</td>
        </tr>

        <tr>
          <td>Asia/Aqtau</td>
          <td>Asia/Aqtobe</td>
          <td>Asia/Ashgabat</td>
          <td>Asia/Atyrau</td>
        </tr>

        <tr>
          <td>Asia/Baghdad</td>
          <td>Asia/Bahrain</td>
          <td>Asia/Baku</td>
          <td>Asia/Bangkok</td>
        </tr>

        <tr>
          <td>Asia/Barnaul</td>
          <td>Asia/Beirut</td>
          <td>Asia/Bishkek</td>
          <td>Asia/Brunei</td>
        </tr>

        <tr>
          <td>Asia/Chita</td>
          <td>Asia/Choibalsan</td>
          <td>Asia/Colombo</td>
          <td>Asia/Damascus</td>
        </tr>

        <tr>
          <td>Asia/Dhaka</td>
          <td>Asia/Dili</td>
          <td>Asia/Dubai</td>
          <td>Asia/Dushanbe</td>
        </tr>

        <tr>
          <td>Asia/Famagusta</td>
          <td>Asia/Gaza</td>
          <td>Asia/Hebron</td>
          <td>Asia/Ho_Chi_Minh</td>
        </tr>

        <tr>
          <td>Asia/Hong_Kong</td>
          <td>Asia/Hovd</td>
          <td>Asia/Irkutsk</td>
          <td>Asia/Jakarta</td>
        </tr>

        <tr>
          <td>Asia/Jayapura</td>
          <td>Asia/Jerusalem</td>
          <td>Asia/Kabul</td>
          <td>Asia/Kamchatka</td>
        </tr>

        <tr>
          <td>Asia/Karachi</td>
          <td>Asia/Kathmandu</td>
          <td>Asia/Khandyga</td>
          <td>Asia/Kolkata</td>
        </tr>

        <tr>
          <td>Asia/Krasnoyarsk</td>
          <td>Asia/Kuala_Lumpur</td>
          <td>Asia/Kuching</td>
          <td>Asia/Kuwait</td>
        </tr>

        <tr>
          <td>Asia/Macau</td>
          <td>Asia/Magadan</td>
          <td>Asia/Makassar</td>
          <td>Asia/Manila</td>
        </tr>

        <tr>
          <td>Asia/Muscat</td>
          <td>Asia/Nicosia</td>
          <td>Asia/Novokuznetsk</td>
          <td>Asia/Novosibirsk</td>
        </tr>

        <tr>
          <td>Asia/Omsk</td>
          <td>Asia/Oral</td>
          <td>Asia/Phnom_Penh</td>
          <td>Asia/Pontianak</td>
        </tr>

        <tr>
          <td>Asia/Pyongyang</td>
          <td>Asia/Qatar</td>
          <td>Asia/Qostanay</td>
          <td>Asia/Qyzylorda</td>
        </tr>

        <tr>
          <td>Asia/Riyadh</td>
          <td>Asia/Sakhalin</td>
          <td>Asia/Samarkand</td>
          <td>Asia/Seoul</td>
        </tr>

        <tr>
          <td>Asia/Shanghai</td>
          <td>Asia/Singapore</td>
          <td>Asia/Srednekolymsk</td>
          <td>Asia/Taipei</td>
        </tr>

        <tr>
          <td>Asia/Tashkent</td>
          <td>Asia/Tbilisi</td>
          <td>Asia/Tehran</td>
          <td>Asia/Thimphu</td>
        </tr>

        <tr>
          <td>Asia/Tokyo</td>
          <td>Asia/Tomsk</td>
          <td>Asia/Ulaanbaatar</td>
          <td>Asia/Urumqi</td>
        </tr>

        <tr>
          <td>Asia/Ust-Nera</td>
          <td>Asia/Vientiane</td>
          <td>Asia/Vladivostok</td>
          <td>Asia/Yakutsk</td>
        </tr>

        <tr>
          <td>Asia/Yangon</td>
          <td>Asia/Yekaterinburg</td>
          <td>Asia/Yerevan</td>
          <td class="empty">&nbsp;</td>
        </tr>

        </tbody>
      
      </table>


    <table class="doctable table">
      <caption><strong>Indian</strong></caption>
      
        <tbody class="tbody">
        <tr>
          <td>Indian/Antananarivo</td>
          <td>Indian/Chagos</td>
          <td>Indian/Christmas</td>
          <td>Indian/Cocos</td>
        </tr>

        <tr>
          <td>Indian/Comoro</td>
          <td>Indian/Kerguelen</td>
          <td>Indian/Mahe</td>
          <td>Indian/Maldives</td>
        </tr>

        <tr>
          <td>Indian/Mauritius</td>
          <td>Indian/Mayotte</td>
          <td>Indian/Reunion</td>
          <td class="empty">&nbsp;</td>
        </tr>

        </tbody>
      
      </table>
      <table class="doctable table">
      <caption><strong>Pacific</strong></caption>
      
        <tbody class="tbody">
        <tr>
          <td>Pacific/Apia</td>
          <td>Pacific/Auckland</td>
          <td>Pacific/Bougainville</td>
          <td>Pacific/Chatham</td>
        </tr>

        <tr>
          <td>Pacific/Chuuk</td>
          <td>Pacific/Easter</td>
          <td>Pacific/Efate</td>
          <td>Pacific/Enderbury</td>
        </tr>

        <tr>
          <td>Pacific/Fakaofo</td>
          <td>Pacific/Fiji</td>
          <td>Pacific/Funafuti</td>
          <td>Pacific/Galapagos</td>
        </tr>

        <tr>
          <td>Pacific/Gambier</td>
          <td>Pacific/Guadalcanal</td>
          <td>Pacific/Guam</td>
          <td>Pacific/Honolulu</td>
        </tr>

        <tr>
          <td>Pacific/Kiritimati</td>
          <td>Pacific/Kosrae</td>
          <td>Pacific/Kwajalein</td>
          <td>Pacific/Majuro</td>
        </tr>

        <tr>
          <td>Pacific/Marquesas</td>
          <td>Pacific/Midway</td>
          <td>Pacific/Nauru</td>
          <td>Pacific/Niue</td>
        </tr>

        <tr>
          <td>Pacific/Norfolk</td>
          <td>Pacific/Noumea</td>
          <td>Pacific/Pago_Pago</td>
          <td>Pacific/Palau</td>
        </tr>

        <tr>
          <td>Pacific/Pitcairn</td>
          <td>Pacific/Pohnpei</td>
          <td>Pacific/Port_Moresby</td>
          <td>Pacific/Rarotonga</td>
        </tr>

        <tr>
          <td>Pacific/Saipan</td>
          <td>Pacific/Tahiti</td>
          <td>Pacific/Tarawa</td>
          <td>Pacific/Tongatapu</td>
        </tr>

        <tr>
          <td>Pacific/Wake</td>
          <td>Pacific/Wallis</td>
          <td class="empty">&nbsp;</td>
          <td class="empty">&nbsp;</td>
        </tr>

        </tbody>
      
      </table>

      <table class="doctable table">
      <caption><strong>Others</strong></caption>
      
        <tbody class="tbody">
        <tr>
          <td>Africa/Asmera</td>
          <td>Africa/Timbuktu</td>
          <td>America/Argentina/ComodRivadavia</td>
          <td>America/Atka</td>
        </tr>

        <tr>
          <td>America/Buenos_Aires</td>
          <td>America/Catamarca</td>
          <td>America/Coral_Harbour</td>
          <td>America/Cordoba</td>
        </tr>

        <tr>
          <td>America/Ensenada</td>
          <td>America/Fort_Wayne</td>
          <td>America/Godthab</td>
          <td>America/Indianapolis</td>
        </tr>

        <tr>
          <td>America/Jujuy</td>
          <td>America/Knox_IN</td>
          <td>America/Louisville</td>
          <td>America/Mendoza</td>
        </tr>

        <tr>
          <td>America/Montreal</td>
          <td>America/Porto_Acre</td>
          <td>America/Rosario</td>
          <td>America/Santa_Isabel</td>
        </tr>

        <tr>
          <td>America/Shiprock</td>
          <td>America/Virgin</td>
          <td>Antarctica/South_Pole</td>
          <td>Asia/Ashkhabad</td>
        </tr>

        <tr>
          <td>Asia/Calcutta</td>
          <td>Asia/Chongqing</td>
          <td>Asia/Chungking</td>
          <td>Asia/Dacca</td>
        </tr>

        <tr>
          <td>Asia/Harbin</td>
          <td>Asia/Istanbul</td>
          <td>Asia/Kashgar</td>
          <td>Asia/Katmandu</td>
        </tr>

        <tr>
          <td>Asia/Macao</td>
          <td>Asia/Rangoon</td>
          <td>Asia/Saigon</td>
          <td>Asia/Tel_Aviv</td>
        </tr>

        <tr>
          <td>Asia/Thimbu</td>
          <td>Asia/Ujung_Pandang</td>
          <td>Asia/Ulan_Bator</td>
          <td>Atlantic/Faeroe</td>
        </tr>

        <tr>
          <td>Atlantic/Jan_Mayen</td>
          <td>Australia/ACT</td>
          <td>Australia/Canberra</td>
          <td>Australia/Currie</td>
        </tr>

        <tr>
          <td>Australia/LHI</td>
          <td>Australia/North</td>
          <td>Australia/NSW</td>
          <td>Australia/Queensland</td>
        </tr>

        <tr>
          <td>Australia/South</td>
          <td>Australia/Tasmania</td>
          <td>Australia/Victoria</td>
          <td>Australia/West</td>
        </tr>

        <tr>
          <td>Australia/Yancowinna</td>
          <td>Brazil/Acre</td>
          <td>Brazil/DeNoronha</td>
          <td>Brazil/East</td>
        </tr>

        <tr>
          <td>Brazil/West</td>
          <td>Canada/Atlantic</td>
          <td>Canada/Central</td>
          <td>Canada/Eastern</td>
        </tr>

        <tr>
          <td>Canada/Mountain</td>
          <td>Canada/Newfoundland</td>
          <td>Canada/Pacific</td>
          <td>Canada/Saskatchewan</td>
        </tr>

        <tr>
          <td>Canada/Yukon</td>
          <td>CET</td>
          <td>Chile/Continental</td>
          <td>Chile/EasterIsland</td>
        </tr>

        <tr>
          <td>CST6CDT</td>
          <td>Cuba</td>
          <td>EET</td>
          <td>Egypt</td>
        </tr>

        <tr>
          <td>Eire</td>
          <td>EST</td>
          <td>EST5EDT</td>
          <td>Etc/GMT</td>
        </tr>

        <tr>
          <td>Etc/GMT+0</td>
          <td>Etc/GMT+1</td>
          <td>Etc/GMT+10</td>
          <td>Etc/GMT+11</td>
        </tr>

        <tr>
          <td>Etc/GMT+12</td>
          <td>Etc/GMT+2</td>
          <td>Etc/GMT+3</td>
          <td>Etc/GMT+4</td>
        </tr>

        <tr>
          <td>Etc/GMT+5</td>
          <td>Etc/GMT+6</td>
          <td>Etc/GMT+7</td>
          <td>Etc/GMT+8</td>
        </tr>

        <tr>
          <td>Etc/GMT+9</td>
          <td>Etc/GMT-0</td>
          <td>Etc/GMT-1</td>
          <td>Etc/GMT-10</td>
        </tr>

        <tr>
          <td>Etc/GMT-11</td>
          <td>Etc/GMT-12</td>
          <td>Etc/GMT-13</td>
          <td>Etc/GMT-14</td>
        </tr>

        <tr>
          <td>Etc/GMT-2</td>
          <td>Etc/GMT-3</td>
          <td>Etc/GMT-4</td>
          <td>Etc/GMT-5</td>
        </tr>

        <tr>
          <td>Etc/GMT-6</td>
          <td>Etc/GMT-7</td>
          <td>Etc/GMT-8</td>
          <td>Etc/GMT-9</td>
        </tr>

        <tr>
          <td>Etc/GMT0</td>
          <td>Etc/Greenwich</td>
          <td>Etc/UCT</td>
          <td>Etc/Universal</td>
        </tr>

        <tr>
          <td>Etc/UTC</td>
          <td>Etc/Zulu</td>
          <td>Europe/Belfast</td>
          <td>Europe/Nicosia</td>
        </tr>

        <tr>
          <td>Europe/Tiraspol</td>
          <td>Factory</td>
          <td>GB</td>
          <td>GB-Eire</td>
        </tr>

        <tr>
          <td>GMT</td>
          <td>GMT+0</td>
          <td>GMT-0</td>
          <td>GMT0</td>
        </tr>

        <tr>
          <td>Greenwich</td>
          <td>Hongkong</td>
          <td>HST</td>
          <td>Iceland</td>
        </tr>

        <tr>
          <td>Iran</td>
          <td>Israel</td>
          <td>Jamaica</td>
          <td>Japan</td>
        </tr>

        <tr>
          <td>Kwajalein</td>
          <td>Libya</td>
          <td>MET</td>
          <td>Mexico/BajaNorte</td>
        </tr>

        <tr>
          <td>Mexico/BajaSur</td>
          <td>Mexico/General</td>
          <td>MST</td>
          <td>MST7MDT</td>
        </tr>

        <tr>
          <td>Navajo</td>
          <td>NZ</td>
          <td>NZ-CHAT</td>
          <td>Pacific/Johnston</td>
        </tr>

        <tr>
          <td>Pacific/Ponape</td>
          <td>Pacific/Samoa</td>
          <td>Pacific/Truk</td>
          <td>Pacific/Yap</td>
        </tr>

        <tr>
          <td>Poland</td>
          <td>Portugal</td>
          <td>PRC</td>
          <td>PST8PDT</td>
        </tr>

        <tr>
          <td>ROC</td>
          <td>ROK</td>
          <td>Singapore</td>
          <td>Turkey</td>
        </tr>

        <tr>
          <td>UCT</td>
          <td>Universal</td>
          <td>US/Alaska</td>
          <td>US/Aleutian</td>
        </tr>

        <tr>
          <td>US/Arizona</td>
          <td>US/Central</td>
          <td>US/East-Indiana</td>
          <td>US/Eastern</td>
        </tr>

        <tr>
          <td>US/Hawaii</td>
          <td>US/Indiana-Starke</td>
          <td>US/Michigan</td>
          <td>US/Mountain</td>
        </tr>

        <tr>
          <td>US/Pacific</td>
          <td>US/Samoa</td>
          <td>UTC</td>
          <td>W-SU</td>
        </tr>

        <tr>
          <td>WET</td>
          <td>Zulu</td>
          <td class="empty">&nbsp;</td>
          <td class="empty">&nbsp;</td>
        </tr>

        </tbody>
      
      </table>
    <?php
  }
];
