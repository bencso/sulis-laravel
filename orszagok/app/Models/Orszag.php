<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orszag extends Model
{
    use HasFactory;

    protected $table = "orszag";
    public $timestamps = false;
    public $primaryKey = "orszag_id";

    public function kontinens()
    {
        return $this->belongsTo(Kontinens::class, 'kontinens_id');
    }

    public $kodjelek = [
        "HU" => "Magyarország",
        "AD" => "Andorra",
        "AE" => "Egyesült Arab Emírségek",
        "AF" => "Afganisztán",
        "AG" => "Antigua és Barbuda",
        "AI" => "Anguilla",
        "AL" => "Albánia",
        "AM" => "Örményország",
        "AO" => "Angola",
        "AQ" => "Antarktisz",
        "AR" => "Argentina",
        "AS" => "Amerikai Szamoa",
        "AT" => "Ausztria",
        "AU" => "Ausztrália",
        "AW" => "Aruba",
        "AX" => "Aaland szigetek",
        "AZ" => "Azerbajdzsán",
        "BA" => "Bosznia-Hercegovina",
        "BB" => "Barbados",
        "BD" => "Banglades",
        "BE" => "Belgium",
        "BF" => "Burkina Faso",
        "BG" => "Bulgária",
        "BH" => "Bahrein",
        "BI" => "Burundi",
        "BJ" => "Benin",
        "BL" => "Saint Barthélémy",
        "BM" => "Bermuda",
        "BN" => "Brunei",
        "BO" => "Bolívia",
        "BQ" => "Bonaire",
        "BR" => "Brazília",
        "BS" => "Bahama-szigetek",
        "BT" => "Bhután",
        "BV" => "Bouvet-sziget",
        "BW" => "Botswana",
        "BY" => "Fehéroroszország",
        "BZ" => "Belize",
        "CA" => "Kanada",
        "CC" => "Kókusz (Keeling)-szigetek",
        "CD" => "Kongói Demokratikus Köztársaság",
        "CF" => "Közép-afrikai Köztársaság",
        "CG" => "Kongó",
        "CH" => "Svájc",
        "CI" => "Elefántcsontpart",
        "CK" => "Cook-szigetek",
        "CL" => "Chile",
        "CM" => "Kamerun",
        "CN" => "Kína",
        "CO" => "Kolumbia",
        "CR" => "Costa Rica",
        "CU" => "Kuba",
        "CV" => "Zöld-foki Köztársaság",
        "CW" => "Curacao",
        "CX" => "Karácsony-sziget",
        "CY" => "Ciprus",
        "CZ" => "Csehország",
        "DE" => "Németország",
        "DJ" => "Dzsibuti",
        "DK" => "Dánia",
        "DM" => "Dominikai Közösség",
        "DO" => "Dominikai Köztársaság",
        "DZ" => "Algéria",
        "EC" => "Ecuador",
        "EE" => "Észtország",
        "EG" => "Egyiptom",
        "EH" => "Nyugat-Szahara",
        "ER" => "Eritrea",
        "ES" => "Spanyolország",
        "ET" => "Etiópia",
        "FI" => "Finnország",
        "FJ" => "Fidzsi-szigetek",
        "FK" => "Falkland-szigetek",
        "FM" => "Mikronéziai Szövetségi Államok",
        "FO" => "Faroe szigetek",
        "FR" => "Franciaország",
        "FX" => "France, metropolitan",
        "GA" => "Gabon",
        "GB" => "Egyesült Királyság",
        "GD" => "Grenada",
        "GE" => "Grúzia",
        "GF" => "Francia Guiana",
        "GG" => "Guernsey",
        "GH" => "Ghána",
        "GI" => "Gibraltár",
        "GL" => "Grönland",
        "GM" => "Gambia",
        "GN" => "Guinea",
        "GP" => "Guadeloupe",
        "GQ" => "Egyenlítői-Guinea",
        "GR" => "Görögország",
        "GS" => "Déli-Georgia és Déli-Sandwich-szigetek",
        "GT" => "Guatemala",
        "GU" => "Guam",
        "GW" => "Bissau-Guinea",
        "GY" => "Guyana",
        "HK" => "Hongkong",
        "HM" => "Heard-sziget és McDonalds-szigetek",
        "HN" => "Honduras",
        "HR" => "Horvátország",
        "HT" => "Haiti",
        "ID" => "Indonézia",
        "IE" => "Írország",
        "IL" => "Izrael",
        "IM" => "Man sziget",
        "IN" => "India",
        "IO" => "Brit Indiai-Óceániai Terület",
        "IQ" => "Irak",
        "IR" => "Irán",
        "IS" => "Izland",
        "IT" => "Olaszország",
        "JE" => "Jersey",
        "JM" => "Jamaica",
        "JO" => "Jordánia",
        "JP" => "Japán",
        "KE" => "Kenya",
        "KG" => "Kirgizisztán",
        "KH" => "Kambodzsa",
        "KI" => "Kiribati",
        "KM" => "Comore-szigetek",
        "KN" => "Saint Kitts és Nevis",
        "KP" => "Észak-Korea",
        "KR" => "Dél-Korea",
        "KW" => "Kuvait",
        "KY" => "Kajmán-szigetek",
        "KZ" => "Kazahsztán",
        "LA" => "Laosz",
        "LB" => "Libanon",
        "LC" => "Saint Lucia",
        "LI" => "Liechtenstein",
        "LK" => "Srí Lanka",
        "LR" => "Libéria",
        "LS" => "Lesotho",
        "LT" => "Litvánia",
        "LU" => "Luxemburg",
        "LV" => "Lettország",
        "LY" => "Líbia",
        "MA" => "Marokkó",
        "MC" => "Monaco",
        "MD" => "Moldova",
        "ME" => "Montenegró",
        "MF" => "Saint Martin",
        "MG" => "Madagaszkár",
        "MH" => "Marshall-szigetek",
        "MK" => "Észak-Macedónia",
        "ML" => "Mali",
        "MM" => "Mianmar",
        "MN" => "Mongólia",
        "MO" => "Macao",
        "MP" => "Északi-Mariana-szigetek",
        "MQ" => "Martinique",
        "MR" => "Mauritánia",
        "MS" => "Montserrat",
        "MT" => "Málta",
        "MU" => "Mauritius",
        "MV" => "Maldív-szigetek",
        "MW" => "Malawi",
        "MX" => "Mexikó",
        "MY" => "Malajzia",
        "MZ" => "Mozambik",
        "NA" => "Namíbia",
        "NC" => "Új-Kaledónia",
        "NE" => "Niger",
        "NF" => "Norfolk szigetek",
        "NG" => "Nigéria",
        "NI" => "Nicaragua",
        "NL" => "Hollandia",
        "NO" => "Norvégia",
        "NP" => "Nepál",
        "NR" => "Nauru",
        "NU" => "Niue",
        "NZ" => "Új-Zéland",
        "OM" => "Omán",
        "PA" => "Panama",
        "PE" => "Peru",
        "PF" => "Francia Polinézia",
        "PG" => "Pápua Új-Guinea",
        "PH" => "Fülöp-szigetek",
        "PK" => "Pakisztán",
        "PL" => "Lengyelország",
        "PM" => "Saint Pierre és Miquelon",
        "PN" => "Pitcairn-sziget",
        "PR" => "Puerto Rico",
        "PRK" => "Észak Korea",
        "PS" => "Palesztina",
        "PT" => "Portugália",
        "PW" => "Palau",
        "PY" => "Paraguay",
        "QA" => "Katar",
        "RE" => "Reunion",
        "RO" => "Románia",
        "RS" => "Szerbia",
        "RU" => "Oroszország",
        "RW" => "Ruanda",
        "SA" => "Szaúd-Arábia",
        "SB" => "Salamon-szigetek",
        "SC" => "Seychelle-szigetek",
        "SD" => "Szudán",
        "SE" => "Svédország",
        "SG" => "Szingapúr",
        "SH" => "Szent Ilona",
        "SI" => "Szlovénia",
        "SJ" => "Svalbard és Jan Mayen",
        "SK" => "Szlovákia",
        "SL" => "Sierra Leone",
        "SM" => "San Marino",
        "SN" => "Szenegál",
        "SO" => "Szomália",
        "SR" => "Suriname",
        "SS" => "Dél-Szudán",
        "ST" => "São Tomé és Príncipe",
        "SV" => "El Salvador",
        "SX" => "St. Maarten",
        "SY" => "Szíria",
        "SZ" => "Szváziföld",
        "TC" => "Turks- és Caicos-szigetek",
        "TD" => "Csád",
        "TF" => "Francia Déli Területek",
        "TG" => "Togo",
        "TH" => "Thaiföld",
        "TJ" => "Tádzsikisztán",
        "TK" => "Tokelau-szigetek",
        "TL" => "Kelet-Timor",
        "TM" => "Türkmenisztán",
        "TN" => "Tunézia",
        "TO" => "Tonga",
        "TR" => "Törökország",
        "TT" => "Trinidad és Tobago",
        "TV" => "Tuvalu",
        "TW" => "Taiwan",
        "TZ" => "Tanzánia",
        "UA" => "Ukrajna",
        "UG" => "Uganda",
        "UM" => "Amerikai Csendes-óceáni-Szigetek",
        "US" => "Amerikai Egyesült Államok",
        "UY" => "Uruguay",
        "UZ" => "Üzbegisztán",
        "VA" => "Vatikán",
        "VC" => "Saint Vincent és a Grenadine-szigetek",
        "VE" => "Venezuela",
        "VG" => "Brit Virgin-szigetek",
        "VI" => "Amerikai Virgin-szigetek",
        "VN" => "Vietnam",
        "VU" => "Vanuatu",
        "W1" => "Gáza és Jerikó",
        "WF" => "Wallis és Futuna",
        "WS" => "Szamoa",
        "XK" => "Koszovó",
        "YE" => "Jemen",
        "YT" => "Mayotte",
        "ZA" => "Dél-afrikai Köztársaság",
        "ZM" => "Zambia",
        "ZW" => "Zimbabwe",
    ];

    public function varosFlag($orszag)
    {
        $code = array_search($orszag, $this->kodjelek);
        $api = "https://flagsapi.com/{$code}/flat/64.png";
        return $api;
    }
}
