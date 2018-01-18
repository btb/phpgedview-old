<?php
/**
 * Application configuration data.  Data here has no GUI to edit it,
 * although most of it can be altered to customise local installations.
 *
 * NOTE: This file contains some non-Latin letters.  It MUST be read and
 * written in UTF-8 mode (without BOM).
 *
 * NOTE: The one-item-per-line and extra-comma-after-last-item approach
 * is used to allow SVN to reliably merge changes for users that have
 * customised their local copy of this file.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2018  PGV Development Team.  All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @version $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_CONFIG_DATA_PHP', '');

// TEMP tags - LDS temple codes
$TEMPLE_CODES = array(
	'ABA'  =>'Aba, Nigeria',
	'ACCRA'=>'Accra, Ghana',
	'ADELA'=>'Adelaide, Australia',
	'ALBER'=>'Cardston, Alberta, Canada',
	'ALBUQ'=>'Albuquerque, New Mexico',
	'ANCHO'=>'Anchorage, Alaska',
	'APIA' =>'Apia, Samoa',
	'ARIZO'=>'Mesa, Arizona',
	'ASUNC'=>'Asunción, Paraguay',
	'ATLAN'=>'Atlanta, Georgia',
	'BAIRE'=>'Buenos Aires, Argentina',
	'BILLI'=>'Billings, Montana',
	'BIRMI'=>'Birmingham, Alabama',
	'BISMA'=>'Bismarck, North Dakota',
	'BOGOT'=>'Bogotá, Colombia',
	'BOISE'=>'Boise, Idaho',
	'BOSTO'=>'Boston, Massachusetts',
	'BOUNT'=>'Bountiful, Utah',
	'BRIGH'=>'Brigham City, Utah',
	'BRISB'=>'Brisbane, Australia',
	'BROUG'=>'Baton, Rouge, Louisiana',
	'CALGA'=>'Calgary, Alberta, Canada',
	'CAMPI'=>'Campinas, Brazil',
	'CARAC'=>'Caracas, Venezuela',
	'CEBUP'=>'Cebu City, Philippines',
	'CEDAR'=>'Cedar City, Utah',
	'CHICA'=>'Chicago, Illinois',
	'CIUJU'=>'Cuidad Juárez, Mexico',
	'COCHA'=>'Cochabamba, Bolivia',
	'COLJU'=>'Colonia Juárez, Chihuahua, Mexico',
	'COLSC'=>'Columbia, South Carolina',
	'COLUM'=>'Columbus, Ohio',
	'COPEN'=>'Copenhagen, Denmark',
	'CORDO'=>'Córdoba, Argentina',
	'CRIVE'=>'Columbia River, Washington',
	'CURIT'=>'Curitiba, Brazil',
	'DALLA'=>'Dallas, Texas',
	'DENVE'=>'Denver, Colorado',
	'DETRO'=>'Detroit, Michigan',
	'DRAPE'=>'Draper, Utah',
	'EDMON'=>'Edmonton, Alberta, Canada',
	'EHOUS'=>'Endowment House, Utah',
	'FORTC'=>'Fort Collins, Colorado',
	'FORTL'=>'Fort Lauderdale, Florida',
	'FRANK'=>'Frankfurt am Main, Germany',
	'FREIB'=>'Freiburg, Germany',
	'FRESN'=>'Fresno, California',
	'FUKUO'=>'Fukuoka, Japan',
	'GILAV'=>'Gila Valley, Arizona',
	'GILBE'=>'Gilbert, Arizona',
	'GUADA'=>'Guadalajara, Mexico',
	'GUATE'=>'Guatemala City, Guatemala',
	'GUAYA'=>'Guayaquil, Ecuador',
	'HAGUE'=>'The Hague, Netherlands',
	'HALIF'=>'Halifax, Nova Scotia, Canada',
	'HARTF'=>'Hartford, Connecticut',
	'HAWAI'=>'Laie, Hawaii',
	'HELSI'=>'Helsinki, Finland',
	'HERMO'=>'Hermosillo, Sonora, Mexico',
	'HKONG'=>'Hong Kong, China',
	'HOUST'=>'Houston, Texas',
	'IFALL'=>'Idaho Falls, Idaho',
	'INDIA'=>'Indianapolis, Indiana',
	'JOHAN'=>'Johannesburg, South Africa',
	'JRIVE'=>'Jordan River, Utah',
	'KANSA'=>'Kansas City, Missouri',
	'KIEV' =>'Kiev, Ukraine',
	'KONA' =>'Kona, Hawaii',
	'KYIV' =>'Kyiv, Ukraine',
	'LANGE'=>'Los Angeles, California',
	'LIMA' =>'Lima, Peru',
	'LOGAN'=>'Logan, Utah',
	'LONDO'=>'London, England',
	'LOUIS'=>'Louisville, Kentucky',
	'LUBBO'=>'Lubbock, Texas',
	'LVEGA'=>'Las Vegas, Nevada',
	'MADRI'=>'Madrid, Spain',
	'MANAU'=>'Manaus, Brazil',
	'MANHA'=>'Manhattan, New York',
	'MANIL'=>'Manila, Philippines',
	'MANTI'=>'Manti, Utah',
	'MEDFO'=>'Medford, Oregon',
	'MELBO'=>'Melbourne, Australia',
	'MEMPH'=>'Memphis, Tennessee',
	'MERID'=>'Mérida, Mexico',
	'MEXIC'=>'Mexico City, Mexico',
	'MIDAH'=>'Meridian, Idaho',
	'MNTVD'=>'Montevideo, Uruguay',
	'MONTE'=>'Monterrey, Mexico',
	'MONTI'=>'Monticello, Utah',
	'MONTR'=>'Montréal, Québec, Canada',
	'MTIMP'=>'Mt. Timpanogos, Utah',
	'NASHV'=>'Nashville, Tennessee',
	'NAUV2'=>'Nauvoo, Illinois (new)',
	'NAUVO'=>'Nauvoo, Illinois (original)',
	'NBEAC'=>'Newport Beach, California',
	'NUKUA'=>'Nuku\'Alofa, Tonga',
	'NYORK'=>'New York, New York',
	'NZEAL'=>'Hamilton, New Zealand',
	'OAKLA'=>'Oakland, California',
	'OAXAC'=>'Oaxaca, Mexico',
	'OGDEN'=>'Ogden, Utah',
	'OKLAH'=>'Oklahoma City, Oklahoma',
	'OQUIR'=>'Oquirrh Mountain, Utah',
	'ORLAN'=>'Orlando, Florida',
	'PALEG'=>'Porto Alegre, Mexico',
	'PALMY'=>'Palmyra, New York',
	'PANAM'=>'Panama City, Panama',
	'PAPEE'=>'Papeete, Tahiti',
	'PARIS'=>'Paris, France',
	'PAYSO'=>'Payson, Utah',
	'PERTH'=>'Perth, Australia',
	'PHILA'=>'Philadelphia, Pennsylvania',
	'PHOEN'=>'Phoenix, Arizona',
	'POFFI'=>'President\'s Office, Utah',
	'PORTL'=>'Portland, Oregon',
	'PREST'=>'Preston, England',
	'PROCC'=>'Provo City Center, Utah',
	'PROVO'=>'Provo, Utah',
	'QUETZ'=>'Quetzaltenango, Guatemala',
	'RALEI'=>'Raleigh, North Carolina',
	'RECIF'=>'Recife, Brazil',
	'REDLA'=>'Redlands, California',
	'REGIN'=>'Regina, Saskatchewan, Canada',
	'RENO' =>'Reno, Nevada',
	'REXBU'=>'Rexburg, Idaho',
	'SACRA'=>'Sacramento, California',
	'SAMOA'=>'Apia, Samoa',
	'SANSA'=>'San Salvador, El Salvador',
	'SANTI'=>'Santiago, Chile',
	'SANTO'=>'San Antonio, Texas',
	'SAPPO'=>'Sapporo, Japan',
	'SDIEG'=>'San Diego, California',
	'SDOMI'=>'Santo Domingo, Dominican Republic',
	'SEATT'=>'Seattle, Washington',
	'SEOUL'=>'Seoul, Korea',
	'SGEOR'=>'St. George, Utah',
	'SJOSE'=>'San José, Costa, Rica',
	'SLAKE'=>'Salt Lake City, Utah',
	'SLOUI'=>'St. Louis, Missouri',
	'SNOWF'=>'Snowflake, Arizona',
	'SPAUL'=>'São Paulo, Brazil',
	'SPMIN'=>'St. Paul, Minnesota',
	'SPOKA'=>'Spokane, Washington',
	'STARV'=>'Star Valley, Wyoming',
	'STOCK'=>'Stockholm, Sweden',
	'SUVA' =>'Suva, Fiji',
	'SWISS'=>'Bern, Switzerland',
	'SYDNE'=>'Sydney, Australia',
	'TAIPE'=>'Taipei, Taiwan',
	'TAMPI'=>'Tampico, Mexico',
	'TEGUC'=>'Tegucigalpa, Honduras',
	'TGUTI'=>'Tuxtla, Gutiérrez, Mexico',
	'TIJUA'=>'Tijuana, Mexico',
	'TOKYO'=>'Tokyo, Japan',
	'TORON'=>'Toronto, Ontario, Canada',
	'TRUJI'=>'Trujillo, Peru',
	'TUCSO'=>'Tucson, Arizona',
	'TWINF'=>'Twin Falls, Idaho',
	'VANCO'=>'Vancouver, British Columbia, Canada',
	'VERAC'=>'Veracruz, Mexico',
	'VERNA'=>'Vernal, Utah',
	'VILLA'=>'Villa Hermosa, Mexico',
	'WASHI'=>'Washington, DC',
	'WINTE'=>'Winter Quarters, Nebraska',
);

// STAT tags - LDS status codes
$STATUS_CODES = array(
	'BIC'      =>'Born in the covenant',
	'CANCELLED'=>'Sealing cancelled (divorce)',
	'CHILD'    =>'Died as a child: exempt',
	'CLEARED'  =>'Cleared but not yet completed',
	'COMPLETED'=>'Completed; date unknown',
	'DNS'      =>'Do Not Seal: unauthorized',
	'DNS/CAN'  =>'Do Not Seal, previous sealing cancelled',
	'INFANT'   =>'Died as an infant: exempt',
	'PRE-1970' =>'Completed before 1970; date not available',
	'STILLBORN'=>'Stillborn: exempt',
	'SUBMITTED'=>'Submitted but not yet cleared',
	'UNCLEARED'=>'Uncleared: insufficient data',
);

/**
 * 2-character ISO 3166 country codes for use in the GeoNames Country Bias selection
 * (See the GEDCOM Configuration for details)
 *
 * This is the full ISO 3166 list.  The countries which should be eliminated from the
 *		Bias selection have been commented out.  Feel free to adjust this list, but
 *		the USA selection MUST be kept.
 *
 * The array key is the 2-character code expected by GeoNames.
 * The array value is the matching 3-character ISO 3166 code.  This is also the key into
 *		the list of localized country names found in file /languages/countries.xx/php
 */
$GEONAMES_COUNTRY_CODES = array(
##		'AW' => 'ABW',		// Aruba
##		'AF' => 'AFG',		// Afghanistan
##		'AO' => 'AGO',		// Angola
##		'AI' => 'AIA',		// Anguilla
##		'AX' => 'ALA',		// Åland Islands
##		'AL' => 'ALB',		// Albania
##		'AD' => 'AND',		// Andorra
##		'AN' => 'ANT',		// Netherlands Antilles
##		'AE' => 'ARE',		// United Arab Emirates
		'AR' => 'ARG',		// Argentina
##		'AM' => 'ARM',		// Armenia
##		'AS' => 'ASM',		// American Samoa
##		'AQ' => 'ATA',		// Antarctica
##		'TF' => 'ATF',		// French Southern Territories
##		'AG' => 'ATG',		// Antigua and Barbuda
		'AU' => 'AUS',		// Australia
		'AT' => 'AUT',		// Austria
##		'AZ' => 'AZE',		// Azerbaijan
##		'BI' => 'BDI',		// Burundi
		'BE' => 'BEL',		// Belgium
##		'BJ' => 'BEN',		// Benin
##		'BF' => 'BFA',		// Burkina Faso
		'BD' => 'BGD',		// Bangladesh
		'BG' => 'BGR',		// Bulgaria
##		'BH' => 'BHR',		// Bahrain
##		'BS' => 'BHS',		// Bahamas
##		'BA' => 'BIH',		// Bosnia and Herzegovina
##		'BL' => 'BLM',		// Saint-Barthélemy
##		'BY' => 'BLR',		// Belarus
##		'BZ' => 'BLZ',		// Belize
##		'BM' => 'BMU',		// Bermuda
##		'BO' => 'BOL',		// Bolivia
		'BR' => 'BRA',		// Brazil
##		'BB' => 'BRB',		// Barbados
##		'BN' => 'BRN',		// Brunei Darussalam
##		'BT' => 'BTN',		// Bhutan
##		'BV' => 'BVT',		// Bouvet Island
##		'BW' => 'BWA',		// Botswana
##		'CF' => 'CAF',		// Central African Republic
		'CA' => 'CAN',		// Canada
##		'CC' => 'CCK',		// Cocos (Keeling) Islands
		'CH' => 'CHE',		// Switzerland
		'CL' => 'CHL',		// Chile
		'CN' => 'CHN',		// China
##		'CI' => 'CIV',		// Côte d'Ivoire
##		'CM' => 'CMR',		// Cameroon
##		'CD' => 'COD',		// Congo, (Kinshasa)
##		'CG' => 'COG',		// Congo (Brazzaville)
##		'CK' => 'COK',		// Cook Islands
##		'CO' => 'COL',		// Colombia
##		'KM' => 'COM',		// Comoros
##		'CV' => 'CPV',		// Cape Verde
##		'CR' => 'CRI',		// Costa Rica
##		'CU' => 'CUB',		// Cuba
##		'CX' => 'CXR',		// Christmas Island
##		'KY' => 'CYM',		// Cayman Islands
##		'CY' => 'CYP',		// Cyprus
		'CZ' => 'CZE',		// Czech Republic
		'DE' => 'DEU',		// Germany
##		'DJ' => 'DJI',		// Djibouti
##		'DM' => 'DMA',		// Dominica
		'DK' => 'DNK',		// Denmark
##		'DO' => 'DOM',		// Dominican Republic
##		'DZ' => 'DZA',		// Algeria
##		'EC' => 'ECU',		// Ecuador
##		'EG' => 'EGY',		// Egypt
##		'ER' => 'ERI',		// Eritrea
##		'EH' => 'ESH',		// Western Sahara
		'ES' => 'ESP',		// Spain
##		'EE' => 'EST',		// Estonia
##		'ET' => 'ETH',		// Ethiopia
		'FI' => 'FIN',		// Finland
##		'FJ' => 'FJI',		// Fiji
##		'FK' => 'FLK',		// Falkland Islands (Malvinas)
		'FR' => 'FRA',		// France
##		'FO' => 'FRO',		// Faeroe Islands
##		'FM' => 'FSM',		// Micronesia
##		'GA' => 'GAB',		// Gabon
		'GB' => 'GBR',		// United Kingdom
##		'GE' => 'GEO',		// Georgia
##		'GG' => 'GGY',		// Guernsey
##		'GH' => 'GHA',		// Ghana
##		'GI' => 'GIB',		// Gibraltar
##		'GN' => 'GIN',		// Guinea
##		'GP' => 'GLP',		// Guadeloupe
##		'GM' => 'GMB',		// Gambia
##		'GW' => 'GNB',		// Guinea-Bissau
##		'GQ' => 'GNQ',		// Equatorial Guinea
		'GR' => 'GRC',		// Greece
##		'GD' => 'GRD',		// Grenada
##		'GL' => 'GRL',		// Greenland
##		'GT' => 'GTM',		// Guatemala
##		'GF' => 'GUF',		// French Guiana
##		'GU' => 'GUM',		// Guam
##		'GY' => 'GUY',		// Guyana
##		'HK' => 'HKG',		// Hong Kong
##		'HM' => 'HMD',		// Heard and Mcdonald Islands
##		'HN' => 'HND',		// Honduras
		'HR' => 'HRV',		// Croatia
##		'HT' => 'HTI',		// Haiti
		'HU' => 'HUN',		// Hungary
##		'ID' => 'IDN',		// Indonesia
##		'IM' => 'IMN',		// Isle of Man
		'IN' => 'IND',		// India
##		'IO' => 'IOT',		// British Indian Ocean Terr.
		'IE' => 'IRL',		// Ireland
##		'IR' => 'IRN',		// Iran
##		'IQ' => 'IRQ',		// Iraq
##		'IS' => 'ISL',		// Iceland
		'IL' => 'ISR',		// Israel
		'IT' => 'ITA',		// Italy
##		'JM' => 'JAM',		// Jamaica
##		'JE' => 'JEY',		// Jersey
##		'JO' => 'JOR',		// Jordan
		'JP' => 'JPN',		// Japan
##		'KZ' => 'KAZ',		// Kazakhstan
##		'KE' => 'KEN',		// Kenya
##		'KG' => 'KGZ',		// Kyrgyzstan
##		'KH' => 'KHM',		// Cambodia
##		'KI' => 'KIR',		// Kiribati
##		'KN' => 'KNA',		// Saint Kitts and Nevis
		'KR' => 'KOR',		// Korea (South)
##		'KW' => 'KWT',		// Kuwait
##		'LA' => 'LAO',		// Laos
##		'LB' => 'LBN',		// Lebanon
##		'LR' => 'LBR',		// Liberia
##		'LY' => 'LBY',		// Libya
##		'LC' => 'LCA',		// Saint Lucia
##		'LI' => 'LIE',		// Liechtenstein
##		'LK' => 'LKA',		// Sri Lanka
##		'LS' => 'LSO',		// Lesotho
##		'LT' => 'LTU',		// Lithuania
##		'LU' => 'LUX',		// Luxembourg
##		'LV' => 'LVA',		// Latvia
##		'MO' => 'MAC',		// Macau
##		'MF' => 'MAF',		// Saint-Martin (French part)
##		'MA' => 'MAR',		// Morocco
##		'MC' => 'MCO',		// Monaco
##		'MD' => 'MDA',		// Moldova
##		'MG' => 'MDG',		// Madagascar
##		'MV' => 'MDV',		// Maldives
		'MX' => 'MEX',		// Mexico
##		'MH' => 'MHL',		// Marshall Islands
##		'MK' => 'MKD',		// Macedonia
##		'ML' => 'MLI',		// Mali
##		'MT' => 'MLT',		// Malta
##		'MM' => 'MMR',		// Myanmar
##		'ME' => 'MNE',		// Montenegro
##		'MN' => 'MNG',		// Mongolia
##		'MP' => 'MNP',		// Northern Mariana Islands
##		'MZ' => 'MOZ',		// Mozambique
##		'MR' => 'MRT',		// Mauritania
##		'MS' => 'MSR',		// Montserrat
##		'MQ' => 'MTQ',		// Martinique
##		'MU' => 'MUS',		// Mauritius
##		'MW' => 'MWI',		// Malawi
##		'MY' => 'MYS',		// Malaysia
##		'YT' => 'MYT',		// Mayotte
##		'NA' => 'NAM',		// Namibia
##		'NC' => 'NCL',		// New Caledonia
##		'NE' => 'NER',		// Niger
##		'NF' => 'NFK',		// Norfolk Island
##		'NG' => 'NGA',		// Nigeria
##		'NI' => 'NIC',		// Nicaragua
##		'NU' => 'NIU',		// Niue
		'NL' => 'NLD',		// Netherlands
		'NO' => 'NOR',		// Norway
##		'NP' => 'NPL',		// Nepal
##		'NR' => 'NRU',		// Nauru
		'NZ' => 'NZL',		// New Zealand
##		'OM' => 'OMN',		// Oman
		'PK' => 'PAK',		// Pakistan
##		'PA' => 'PAN',		// Panama
##		'PN' => 'PCN',		// Pitcairn
##		'PE' => 'PER',		// Peru
##		'PH' => 'PHL',		// Philippines
##		'PW' => 'PLW',		// Palau
##		'PG' => 'PNG',		// Papua New Guinea
		'PL' => 'POL',		// Poland
##		'PR' => 'PRI',		// Puerto Rico
		'KP' => 'PRK',		// North Korea
		'PT' => 'PRT',		// Portugal
##		'PY' => 'PRY',		// Paraguay
##		'PS' => 'PSE',		// Palestinian Territory
##		'PF' => 'PYF',		// French Polynesia
##		'QA' => 'QAT',		// Qatar
##		'RE' => 'REU',		// Réunion
##		'RO' => 'ROU',		// Romania
		'RU' => 'RUS',		// Russia
##		'RW' => 'RWA',		// Rwanda
##		'SA' => 'SAU',		// Saudi Arabia
##		'SD' => 'SDN',		// Sudan
##		'SN' => 'SEN',		// Senegal
##		'SG' => 'SGP',		// Singapore
##		'GS' => 'SGS',		// South Georgia etc.
##		'SH' => 'SHN',		// Saint Helena
##		'SJ' => 'SJM',		// Svalbard and Jan Mayen
##		'SB' => 'SLB',		// Solomon Islands
##		'SL' => 'SLE',		// Sierra Leone
##		'SV' => 'SLV',		// El Salvador
##		'SM' => 'SMR',		// San Marino
##		'SO' => 'SOM',		// Somalia
##		'PM' => 'SPM',		// Saint Pierre and Miquelon
##		'RS' => 'SRB',		// Serbia
##		'SS' => 'SSD',		// South Sudan
##		'ST' => 'STP',		// Sao Tome and Principe
##		'SR' => 'SUR',		// Suriname
##		'SK' => 'SVK',		// Slovakia
##		'SI' => 'SVN',		// Slovenia
##		'SE' => 'SWE',		// Sweden
##		'SZ' => 'SWZ',		// Swaziland
##		'SC' => 'SYC',		// Seychelles
##		'SY' => 'SYR',		// Syria
##		'TC' => 'TCA',		// Turks and Caicos Islands
##		'TD' => 'TCD',		// Chad
##		'TG' => 'TGO',		// Togo
##		'TH' => 'THA',		// Thailand
##		'TJ' => 'TJK',		// Tajikistan
##		'TK' => 'TKL',		// Tokelau
##		'TM' => 'TKM',		// Turkmenistan
##		'TL' => 'TLS',		// Timor-Leste
##		'TO' => 'TON',		// Tonga
##		'TT' => 'TTO',		// Trinidad and Tobago
##		'TN' => 'TUN',		// Tunisia
##		'TR' => 'TUR',		// Turkey
##		'TV' => 'TUV',		// Tuvalu
##		'TW' => 'TWN',		// Taiwan
##		'TZ' => 'TZA',		// Tanzania
##		'UG' => 'UGA',		// Uganda
		'UA' => 'UKR',		// Ukraine
##		'UM' => 'UMI',		// US Minor Outlying Islands
##		'UY' => 'URY',		// Uruguay
		'US' => 'USA',		// United States of America
##		'UZ' => 'UZB',		// Uzbekistan
##		'VA' => 'VAT',		// Vatican
##		'VC' => 'VCT',		// Saint Vincent & Grenadines
##		'VE' => 'VEN',		// Venezuela
##		'VG' => 'VGB',		// British Virgin Islands
##		'VI' => 'VIR',		// US Virgin Islands
		'VN' => 'VNM',		// Viet Nam
##		'VU' => 'VUT',		// Vanuatu
##		'WF' => 'WLF',		// Wallis and Futuna
##		'WS' => 'WSM',		// Samoa
##		'YE' => 'YEM',		// Yemen
		'ZA' => 'ZAF',		// South Africa
##		'ZM' => 'ZMB',		// Zambia
##		'ZW' => 'ZWE',		// Zimbabwe
);

// NPFX tags - name prefixes
$NPFX_accept=array(
	'Adm',
	'Amb',
	'Brig',
	'Can',
	'Capt',
	'Chan',
	'Chapln',
	'Cmdr',
	'Col',
	'Cpl',
	'Cpt',
	'Dr',
	'Gen',
	'Gov',
	'Hon',
	'Lady',
	'Lt',
	'Mr',
	'Mrs',
	'Ms',
	'Msgr',
	'Pfc',
	'Pres',
	'Prof',
	'Pvt',
	'Rabbi',
	'Rep',
	'Rev',
	'Sen',
	'Sgt',
	'Sir',
	'Sr',
	'Sra',
	'Srta',
	'Ven',
);

// SPFX tags - surname prefixes
$SPFX_accept=array(
	'al',
	'da',
	'de',
	'dem',
	'den',
	'der',
	'di',
	'du',
	'el',
	'la',
	'van',
	'von',
);

// NSFX tags - name suffixes
$NSFX_accept=array(
	'I',
	'II',
	'III',
	'IV',
	'Jr',
	'Junior',
	'MD',
	'PhD',
	'Senior',
	'Sr',
	'V',
	'VI',
);

// FILE:FORM tags - file formats
$FILE_FORM_accept=array(
	'avi',
	'bmp',
	'gif',
	'jpeg',
	'mp3',
	'ole',
	'pcx',
	'png',
	'tiff',
	'wav',
);

// Fact tags (as opposed to event tags), that don't normally have a value
$emptyfacts=array(
	'ADOP',
	'ANUL',
	'BAPL',
	'BAPM',
	'BARM',
	'BASM',
	'BIRT',
	'BLES',
	'BURI',
	'CENS',
	'CHAN',
	'CHR',
	'CHRA',
	'CONF',
	'CONL',
	'CREM',
	'DATA',
	'DEAT',
	'DIV',
	'DIVF',
	'EMIG',
	'ENDL',
	'ENGA',
	'FCOM',
	'GRAD',
	'HUSB',
	'IMMI',
	'MAP',
	'MARB',
	'MARC',
	'MARL',
	'MARR',
	'MARS',
	'NATU',
	'ORDN',
	'PROB',
	'RESI',
	'RETI',
	'SLGC',
	'SLGS',
	'WIFE',
	'WILL',
	'_HOL',
	'_NMR',
	'_SEPR',
);

// Tags that require a TEMP subtag
$templefacts=array(
	'BAPL',
	'CONL',
	'ENDL',
	'SLGC',
	'SLGS',
);

// Tags that don't require a PLAC subtag
$nonplacfacts=array(
	'ENDL',
	'NCHI',
	'SLGC',
	'SLGS',
);

// Tags that don't require a DATE subtag
$nondatefacts=array(
	'ABBR',
	'ADDR',
	'AFN',
	'AUTH',
	'CHIL',
	'EMAIL',
	'FAX',
	'HUSB',
	'NAME',
	'NCHI',
	'NOTE',
	'OBJE',
	'PHON',
	'PUBL',
	'REFN',
	'REPO',
	'SEX',
	'SOUR',
	'SSN',
	'TEXT',
	'TITL',
	'WIFE',
	'WWW',
	'_EMAIL',
);

// Tags that require a TYPE subtag
$typefacts=array(
);

// Tags that require a DATE:TIME as well as a DATE
$date_and_time=array(
	'BIRT',
	'DEAT',
);

// Level 2 tags that apply to specific Level 1 tags
// Tags are applied in the order they appear here.
$level2_tags=array(
	'_HEB'=>array(
		'NAME',
		'TITL',
	),
	'ROMN'=>array(
		'NAME',
		'TITL',
	),
	'TYPE'=>array(
		'EVEN',
		'FACT',
		'GRAD',
		'IDNO',
		'MARR',
		'ORDN',
		'SSN',
	),
	'AGNC'=>array(
		'EDUC',
		'GRAD',
		'OCCU',
		'ORDN',
		'RETI',
	),
	'CAUS'=>array(
		'DEAT',
	),
	'CALN'=>array(
		'REPO',
	),
	'CEME'=>array( // CEME is NOT a valid 5.5.1 tag
		'BURI',
	),
	'RELA'=>array(
		'ASSO',
	),
	'DATE'=>array(
		'ADOP',
		'ANUL',
		'BAPL',
		'BAPM',
		'BARM',
		'BASM',
		'BIRT',
		'BLES',
		'BURI',
		'CENS',
		'CENS',
		'CHR',
		'CHRA',
		'CONF',
		'CONL',
		'CREM',
		'DEAT',
		'DIV',
		'DIVF',
		'EDUC',
		'EMIG',
		'ENDL',
		'ENGA',
		'EVEN',
		'EVEN',
		'FCOM',
		'GRAD',
		'IMMI',
		'MARB',
		'MARC',
		'MARL',
		'MARR',
		'MARS',
		'NATU',
		'OCCU',
		'ORDN',
		'PROB',
		'PROP',
		'RELI',
		'RESI',
		'RETI',
		'SLGC',
		'SLGS',
		'WILL',
		'_TODO',
	),
	'TEMP'=>array(
		'BAPL',
		'CONL',
		'ENDL',
		'SLGC',
		'SLGS',
	),
	'PLAC'=>array(
		'ADOP',
		'ANUL',
		'BAPL',
		'BAPM',
		'BARM',
		'BASM',
		'BIRT',
		'BLES',
		'BURI',
		'CENS',
		'CENS',
		'CHR',
		'CHRA',
		'CONF',
		'CONL',
		'CREM',
		'DEAT',
		'DIV',
		'DIVF',
		'EDUC',
		'EMIG',
		'ENDL',
		'ENGA',
		'EVEN',
		'EVEN',
		'FCOM',
		'GRAD',
		'IMMI',
		'MARB',
		'MARC',
		'MARL',
		'MARR',
		'MARS',
		'NATU',
		'OCCU',
		'ORDN',
		'PROB',
		'PROP',
		'RELI',
		'RESI',
		'RETI',
		'SLGC',
		'SLGS',
		'SSN',
		'WILL',
	),
	'STAT'=>array(
		'BAPL',
		'CONL',
		'ENDL',
		'SLGC',
		'SLGS',
	),
	'ADDR'=>array(
		'BIRT',
		'BURI',
		'CENS',
		'CHR',
		'CHRA',
		'CREM',
		'DEAT',
		'EDUC',
		'EVEN',
		'GRAD',
		'MARR',
		'OCCU',
		'ORDN',
		'PROP',
		'RESI',
	),
	'PHON'=>array(
		'OCCU',
		'RESI',
	),
	'FAX'=>array(
		'OCCU',
		'RESI',
	),
	'EMAIL'=>array(
		'OCCU',
		'RESI',
	),
//	'URL'=>array(
	'WWW'=>array(
		'OCCU',
		'RESI',
	),
	'AGE'=>array(
		'CENS',
		'DEAT',
	),
	'HUSB'=>array(
		'MARR',
	),
	'WIFE'=>array(
		'MARR',
	),
	'FAMC'=>array(
		'ADOP',
		'SLGC',
	),
	'FILE'=>array(
		'OBJE',
	),
	'_PRIM'=>array(
		'OBJE',
	),
	'EVEN'=>array(
		'DATA',
	),
	'_PGVU'=>array(
		'_TODO',
	),
);

// The order of name parts, when generating names
$STANDARD_NAME_FACTS=array('NAME', 'NPFX', 'GIVN', 'SPFX', 'SURN', 'NSFX');
$REVERSED_NAME_FACTS=array('NAME', 'NPFX', 'SPFX', 'SURN', 'GIVN', 'NSFX');


