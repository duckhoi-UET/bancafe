@extends('backend.master')
@section("title-page", "Quản lý đơn hàng")
@section("title-description", "chi tiết đơn hàng")
@section('content')
    <?php $open = "order"?>

    <div class="col-sm-12">
        <table class="table table-bordered">
            <tbody>

            <tr>
                <td class="td-title">Họ tên khách hàng:</td>
                <td><p class="updateInfoRequired editable editable-click" data-name="last_name" data-type="text"
                       data-pk="138" data-title="Last name">{{$orders->name}}</p></td>
            </tr>

            <tr>
                <td class="td-title">Phone:</td>
                <td><p class="updateInfoRequired editable editable-click" data-name="phone" data-type="text"
                       data-pk="138" data-url="https://demo.s-cart.org/sc_admin/order/update"
                       data-title="Phone">{{$orders->phone}}</p></td>
            </tr>

            <tr>
                <td class="td-title">Email:</td>
                <td>{{$orders->email}}</td>
            </tr>


            <tr>
                <td class="td-title">Địa chỉ:</td>
                <td><a class="updateInfoRequired editable editable-click" data-name="address1" data-type="text"
                       data-pk="138" data-url="https://demo.s-cart.org/sc_admin/order/update"
                       data-title="Address 1">{{$orders->address}}</a></td>
            </tr>




            <tr>
                <td class="td-title">Ghi chú:</td>
                <td><p class="updateInfoRequired editable editable-click" data-name="country" data-type="select"
                       data-source="[{&quot;value&quot;:&quot;AL&quot;,&quot;text&quot;:&quot;Albania&quot;},{&quot;value&quot;:&quot;DZ&quot;,&quot;text&quot;:&quot;Algeria&quot;},{&quot;value&quot;:&quot;DS&quot;,&quot;text&quot;:&quot;American Samoa&quot;},{&quot;value&quot;:&quot;AD&quot;,&quot;text&quot;:&quot;Andorra&quot;},{&quot;value&quot;:&quot;AO&quot;,&quot;text&quot;:&quot;Angola&quot;},{&quot;value&quot;:&quot;AI&quot;,&quot;text&quot;:&quot;Anguilla&quot;},{&quot;value&quot;:&quot;AQ&quot;,&quot;text&quot;:&quot;Antarctica&quot;},{&quot;value&quot;:&quot;AG&quot;,&quot;text&quot;:&quot;Antigua and Barbuda&quot;},{&quot;value&quot;:&quot;AR&quot;,&quot;text&quot;:&quot;Argentina&quot;},{&quot;value&quot;:&quot;AM&quot;,&quot;text&quot;:&quot;Armenia&quot;},{&quot;value&quot;:&quot;AW&quot;,&quot;text&quot;:&quot;Aruba&quot;},{&quot;value&quot;:&quot;AU&quot;,&quot;text&quot;:&quot;Australia&quot;},{&quot;value&quot;:&quot;AT&quot;,&quot;text&quot;:&quot;Austria&quot;},{&quot;value&quot;:&quot;AZ&quot;,&quot;text&quot;:&quot;Azerbaijan&quot;},{&quot;value&quot;:&quot;BS&quot;,&quot;text&quot;:&quot;Bahamas&quot;},{&quot;value&quot;:&quot;BH&quot;,&quot;text&quot;:&quot;Bahrain&quot;},{&quot;value&quot;:&quot;BD&quot;,&quot;text&quot;:&quot;Bangladesh&quot;},{&quot;value&quot;:&quot;BB&quot;,&quot;text&quot;:&quot;Barbados&quot;},{&quot;value&quot;:&quot;BY&quot;,&quot;text&quot;:&quot;Belarus&quot;},{&quot;value&quot;:&quot;BE&quot;,&quot;text&quot;:&quot;Belgium&quot;},{&quot;value&quot;:&quot;BZ&quot;,&quot;text&quot;:&quot;Belize&quot;},{&quot;value&quot;:&quot;BJ&quot;,&quot;text&quot;:&quot;Benin&quot;},{&quot;value&quot;:&quot;BM&quot;,&quot;text&quot;:&quot;Bermuda&quot;},{&quot;value&quot;:&quot;BT&quot;,&quot;text&quot;:&quot;Bhutan&quot;},{&quot;value&quot;:&quot;BO&quot;,&quot;text&quot;:&quot;Bolivia&quot;},{&quot;value&quot;:&quot;BA&quot;,&quot;text&quot;:&quot;Bosnia and Herzegovina&quot;},{&quot;value&quot;:&quot;BW&quot;,&quot;text&quot;:&quot;Botswana&quot;},{&quot;value&quot;:&quot;BV&quot;,&quot;text&quot;:&quot;Bouvet Island&quot;},{&quot;value&quot;:&quot;BR&quot;,&quot;text&quot;:&quot;Brazil&quot;},{&quot;value&quot;:&quot;IO&quot;,&quot;text&quot;:&quot;British Indian Ocean Territory&quot;},{&quot;value&quot;:&quot;BN&quot;,&quot;text&quot;:&quot;Brunei Darussalam&quot;},{&quot;value&quot;:&quot;BG&quot;,&quot;text&quot;:&quot;Bulgaria&quot;},{&quot;value&quot;:&quot;BF&quot;,&quot;text&quot;:&quot;Burkina Faso&quot;},{&quot;value&quot;:&quot;BI&quot;,&quot;text&quot;:&quot;Burundi&quot;},{&quot;value&quot;:&quot;KH&quot;,&quot;text&quot;:&quot;Cambodia&quot;},{&quot;value&quot;:&quot;CM&quot;,&quot;text&quot;:&quot;Cameroon&quot;},{&quot;value&quot;:&quot;CA&quot;,&quot;text&quot;:&quot;Canada&quot;},{&quot;value&quot;:&quot;CV&quot;,&quot;text&quot;:&quot;Cape Verde&quot;},{&quot;value&quot;:&quot;KY&quot;,&quot;text&quot;:&quot;Cayman Islands&quot;},{&quot;value&quot;:&quot;CF&quot;,&quot;text&quot;:&quot;Central African Republic&quot;},{&quot;value&quot;:&quot;TD&quot;,&quot;text&quot;:&quot;Chad&quot;},{&quot;value&quot;:&quot;CL&quot;,&quot;text&quot;:&quot;Chile&quot;},{&quot;value&quot;:&quot;CN&quot;,&quot;text&quot;:&quot;China&quot;},{&quot;value&quot;:&quot;CX&quot;,&quot;text&quot;:&quot;Christmas Island&quot;},{&quot;value&quot;:&quot;CC&quot;,&quot;text&quot;:&quot;Cocos (Keeling) Islands&quot;},{&quot;value&quot;:&quot;CO&quot;,&quot;text&quot;:&quot;Colombia&quot;},{&quot;value&quot;:&quot;KM&quot;,&quot;text&quot;:&quot;Comoros&quot;},{&quot;value&quot;:&quot;CG&quot;,&quot;text&quot;:&quot;Congo&quot;},{&quot;value&quot;:&quot;CK&quot;,&quot;text&quot;:&quot;Cook Islands&quot;},{&quot;value&quot;:&quot;CR&quot;,&quot;text&quot;:&quot;Costa Rica&quot;},{&quot;value&quot;:&quot;HR&quot;,&quot;text&quot;:&quot;Croatia (Hrvatska)&quot;},{&quot;value&quot;:&quot;CU&quot;,&quot;text&quot;:&quot;Cuba&quot;},{&quot;value&quot;:&quot;CY&quot;,&quot;text&quot;:&quot;Cyprus&quot;},{&quot;value&quot;:&quot;CZ&quot;,&quot;text&quot;:&quot;Czech Republic&quot;},{&quot;value&quot;:&quot;DK&quot;,&quot;text&quot;:&quot;Denmark&quot;},{&quot;value&quot;:&quot;DJ&quot;,&quot;text&quot;:&quot;Djibouti&quot;},{&quot;value&quot;:&quot;DM&quot;,&quot;text&quot;:&quot;Dominica&quot;},{&quot;value&quot;:&quot;DO&quot;,&quot;text&quot;:&quot;Dominican Republic&quot;},{&quot;value&quot;:&quot;TP&quot;,&quot;text&quot;:&quot;East Timor&quot;},{&quot;value&quot;:&quot;EC&quot;,&quot;text&quot;:&quot;Ecuador&quot;},{&quot;value&quot;:&quot;EG&quot;,&quot;text&quot;:&quot;Egypt&quot;},{&quot;value&quot;:&quot;SV&quot;,&quot;text&quot;:&quot;El Salvador&quot;},{&quot;value&quot;:&quot;GQ&quot;,&quot;text&quot;:&quot;Equatorial Guinea&quot;},{&quot;value&quot;:&quot;ER&quot;,&quot;text&quot;:&quot;Eritrea&quot;},{&quot;value&quot;:&quot;EE&quot;,&quot;text&quot;:&quot;Estonia&quot;},{&quot;value&quot;:&quot;ET&quot;,&quot;text&quot;:&quot;Ethiopia&quot;},{&quot;value&quot;:&quot;FK&quot;,&quot;text&quot;:&quot;Falkland Islands (Malvinas)&quot;},{&quot;value&quot;:&quot;FO&quot;,&quot;text&quot;:&quot;Faroe Islands&quot;},{&quot;value&quot;:&quot;FJ&quot;,&quot;text&quot;:&quot;Fiji&quot;},{&quot;value&quot;:&quot;FI&quot;,&quot;text&quot;:&quot;Finland&quot;},{&quot;value&quot;:&quot;FR&quot;,&quot;text&quot;:&quot;France&quot;},{&quot;value&quot;:&quot;FX&quot;,&quot;text&quot;:&quot;France, Metropolitan&quot;},{&quot;value&quot;:&quot;GF&quot;,&quot;text&quot;:&quot;French Guiana&quot;},{&quot;value&quot;:&quot;PF&quot;,&quot;text&quot;:&quot;French Polynesia&quot;},{&quot;value&quot;:&quot;TF&quot;,&quot;text&quot;:&quot;French Southern Territories&quot;},{&quot;value&quot;:&quot;GA&quot;,&quot;text&quot;:&quot;Gabon&quot;},{&quot;value&quot;:&quot;GM&quot;,&quot;text&quot;:&quot;Gambia&quot;},{&quot;value&quot;:&quot;GE&quot;,&quot;text&quot;:&quot;Georgia&quot;},{&quot;value&quot;:&quot;DE&quot;,&quot;text&quot;:&quot;Germany&quot;},{&quot;value&quot;:&quot;GH&quot;,&quot;text&quot;:&quot;Ghana&quot;},{&quot;value&quot;:&quot;GI&quot;,&quot;text&quot;:&quot;Gibraltar&quot;},{&quot;value&quot;:&quot;GK&quot;,&quot;text&quot;:&quot;Guernsey&quot;},{&quot;value&quot;:&quot;GR&quot;,&quot;text&quot;:&quot;Greece&quot;},{&quot;value&quot;:&quot;GL&quot;,&quot;text&quot;:&quot;Greenland&quot;},{&quot;value&quot;:&quot;GD&quot;,&quot;text&quot;:&quot;Grenada&quot;},{&quot;value&quot;:&quot;GP&quot;,&quot;text&quot;:&quot;Guadeloupe&quot;},{&quot;value&quot;:&quot;GU&quot;,&quot;text&quot;:&quot;Guam&quot;},{&quot;value&quot;:&quot;GT&quot;,&quot;text&quot;:&quot;Guatemala&quot;},{&quot;value&quot;:&quot;GN&quot;,&quot;text&quot;:&quot;Guinea&quot;},{&quot;value&quot;:&quot;GW&quot;,&quot;text&quot;:&quot;Guinea-Bissau&quot;},{&quot;value&quot;:&quot;GY&quot;,&quot;text&quot;:&quot;Guyana&quot;},{&quot;value&quot;:&quot;HT&quot;,&quot;text&quot;:&quot;Haiti&quot;},{&quot;value&quot;:&quot;HM&quot;,&quot;text&quot;:&quot;Heard and Mc Donald Islands&quot;},{&quot;value&quot;:&quot;HN&quot;,&quot;text&quot;:&quot;Honduras&quot;},{&quot;value&quot;:&quot;HK&quot;,&quot;text&quot;:&quot;Hong Kong&quot;},{&quot;value&quot;:&quot;HU&quot;,&quot;text&quot;:&quot;Hungary&quot;},{&quot;value&quot;:&quot;IS&quot;,&quot;text&quot;:&quot;Iceland&quot;},{&quot;value&quot;:&quot;IN&quot;,&quot;text&quot;:&quot;India&quot;},{&quot;value&quot;:&quot;IM&quot;,&quot;text&quot;:&quot;Isle of Man&quot;},{&quot;value&quot;:&quot;ID&quot;,&quot;text&quot;:&quot;Indonesia&quot;},{&quot;value&quot;:&quot;IR&quot;,&quot;text&quot;:&quot;Iran (Islamic Republic of)&quot;},{&quot;value&quot;:&quot;IQ&quot;,&quot;text&quot;:&quot;Iraq&quot;},{&quot;value&quot;:&quot;IE&quot;,&quot;text&quot;:&quot;Ireland&quot;},{&quot;value&quot;:&quot;IL&quot;,&quot;text&quot;:&quot;Israel&quot;},{&quot;value&quot;:&quot;IT&quot;,&quot;text&quot;:&quot;Italy&quot;},{&quot;value&quot;:&quot;CI&quot;,&quot;text&quot;:&quot;Ivory Coast&quot;},{&quot;value&quot;:&quot;JE&quot;,&quot;text&quot;:&quot;Jersey&quot;},{&quot;value&quot;:&quot;JM&quot;,&quot;text&quot;:&quot;Jamaica&quot;},{&quot;value&quot;:&quot;JP&quot;,&quot;text&quot;:&quot;Japan&quot;},{&quot;value&quot;:&quot;JO&quot;,&quot;text&quot;:&quot;Jordan&quot;},{&quot;value&quot;:&quot;KZ&quot;,&quot;text&quot;:&quot;Kazakhstan&quot;},{&quot;value&quot;:&quot;KE&quot;,&quot;text&quot;:&quot;Kenya&quot;},{&quot;value&quot;:&quot;KI&quot;,&quot;text&quot;:&quot;Kiribati&quot;},{&quot;value&quot;:&quot;KP&quot;,&quot;text&quot;:&quot;Korea,Democratic People's Republic of&quot;},{&quot;value&quot;:&quot;KR&quot;,&quot;text&quot;:&quot;Korea, Republic of&quot;},{&quot;value&quot;:&quot;XK&quot;,&quot;text&quot;:&quot;Kosovo&quot;},{&quot;value&quot;:&quot;KW&quot;,&quot;text&quot;:&quot;Kuwait&quot;},{&quot;value&quot;:&quot;KG&quot;,&quot;text&quot;:&quot;Kyrgyzstan&quot;},{&quot;value&quot;:&quot;LA&quot;,&quot;text&quot;:&quot;Lao People's Democratic Republic&quot;},{&quot;value&quot;:&quot;LV&quot;,&quot;text&quot;:&quot;Latvia&quot;},{&quot;value&quot;:&quot;LB&quot;,&quot;text&quot;:&quot;Lebanon&quot;},{&quot;value&quot;:&quot;LS&quot;,&quot;text&quot;:&quot;Lesotho&quot;},{&quot;value&quot;:&quot;LR&quot;,&quot;text&quot;:&quot;Liberia&quot;},{&quot;value&quot;:&quot;LY&quot;,&quot;text&quot;:&quot;Libyan Arab Jamahiriya&quot;},{&quot;value&quot;:&quot;LI&quot;,&quot;text&quot;:&quot;Liechtenstein&quot;},{&quot;value&quot;:&quot;LT&quot;,&quot;text&quot;:&quot;Lithuania&quot;},{&quot;value&quot;:&quot;LU&quot;,&quot;text&quot;:&quot;Luxembourg&quot;},{&quot;value&quot;:&quot;MO&quot;,&quot;text&quot;:&quot;Macau&quot;},{&quot;value&quot;:&quot;MK&quot;,&quot;text&quot;:&quot;Macedonia&quot;},{&quot;value&quot;:&quot;MG&quot;,&quot;text&quot;:&quot;Madagascar&quot;},{&quot;value&quot;:&quot;MW&quot;,&quot;text&quot;:&quot;Malawi&quot;},{&quot;value&quot;:&quot;MY&quot;,&quot;text&quot;:&quot;Malaysia&quot;},{&quot;value&quot;:&quot;MV&quot;,&quot;text&quot;:&quot;Maldives&quot;},{&quot;value&quot;:&quot;ML&quot;,&quot;text&quot;:&quot;Mali&quot;},{&quot;value&quot;:&quot;MT&quot;,&quot;text&quot;:&quot;Malta&quot;},{&quot;value&quot;:&quot;MH&quot;,&quot;text&quot;:&quot;Marshall Islands&quot;},{&quot;value&quot;:&quot;MQ&quot;,&quot;text&quot;:&quot;Martinique&quot;},{&quot;value&quot;:&quot;MR&quot;,&quot;text&quot;:&quot;Mauritania&quot;},{&quot;value&quot;:&quot;MU&quot;,&quot;text&quot;:&quot;Mauritius&quot;},{&quot;value&quot;:&quot;TY&quot;,&quot;text&quot;:&quot;Mayotte&quot;},{&quot;value&quot;:&quot;MX&quot;,&quot;text&quot;:&quot;Mexico&quot;},{&quot;value&quot;:&quot;FM&quot;,&quot;text&quot;:&quot;Micronesia, Federated States of&quot;},{&quot;value&quot;:&quot;MD&quot;,&quot;text&quot;:&quot;Moldova, Republic of&quot;},{&quot;value&quot;:&quot;MC&quot;,&quot;text&quot;:&quot;Monaco&quot;},{&quot;value&quot;:&quot;MN&quot;,&quot;text&quot;:&quot;Mongolia&quot;},{&quot;value&quot;:&quot;ME&quot;,&quot;text&quot;:&quot;Montenegro&quot;},{&quot;value&quot;:&quot;MS&quot;,&quot;text&quot;:&quot;Montserrat&quot;},{&quot;value&quot;:&quot;MA&quot;,&quot;text&quot;:&quot;Morocco&quot;},{&quot;value&quot;:&quot;MZ&quot;,&quot;text&quot;:&quot;Mozambique&quot;},{&quot;value&quot;:&quot;MM&quot;,&quot;text&quot;:&quot;Myanmar&quot;},{&quot;value&quot;:&quot;NA&quot;,&quot;text&quot;:&quot;Namibia&quot;},{&quot;value&quot;:&quot;NR&quot;,&quot;text&quot;:&quot;Nauru&quot;},{&quot;value&quot;:&quot;NP&quot;,&quot;text&quot;:&quot;Nepal&quot;},{&quot;value&quot;:&quot;NL&quot;,&quot;text&quot;:&quot;Netherlands&quot;},{&quot;value&quot;:&quot;AN&quot;,&quot;text&quot;:&quot;Netherlands Antilles&quot;},{&quot;value&quot;:&quot;NC&quot;,&quot;text&quot;:&quot;New Caledonia&quot;},{&quot;value&quot;:&quot;NZ&quot;,&quot;text&quot;:&quot;New Zealand&quot;},{&quot;value&quot;:&quot;NI&quot;,&quot;text&quot;:&quot;Nicaragua&quot;},{&quot;value&quot;:&quot;NE&quot;,&quot;text&quot;:&quot;Niger&quot;},{&quot;value&quot;:&quot;NG&quot;,&quot;text&quot;:&quot;Nigeria&quot;},{&quot;value&quot;:&quot;NU&quot;,&quot;text&quot;:&quot;Niue&quot;},{&quot;value&quot;:&quot;NF&quot;,&quot;text&quot;:&quot;Norfolk Island&quot;},{&quot;value&quot;:&quot;MP&quot;,&quot;text&quot;:&quot;Northern Mariana Islands&quot;},{&quot;value&quot;:&quot;NO&quot;,&quot;text&quot;:&quot;Norway&quot;},{&quot;value&quot;:&quot;OM&quot;,&quot;text&quot;:&quot;Oman&quot;},{&quot;value&quot;:&quot;PK&quot;,&quot;text&quot;:&quot;Pakistan&quot;},{&quot;value&quot;:&quot;PW&quot;,&quot;text&quot;:&quot;Palau&quot;},{&quot;value&quot;:&quot;PS&quot;,&quot;text&quot;:&quot;Palestine&quot;},{&quot;value&quot;:&quot;PA&quot;,&quot;text&quot;:&quot;Panama&quot;},{&quot;value&quot;:&quot;PG&quot;,&quot;text&quot;:&quot;Papua New Guinea&quot;},{&quot;value&quot;:&quot;PY&quot;,&quot;text&quot;:&quot;Paraguay&quot;},{&quot;value&quot;:&quot;PE&quot;,&quot;text&quot;:&quot;Peru&quot;},{&quot;value&quot;:&quot;PH&quot;,&quot;text&quot;:&quot;Philippines&quot;},{&quot;value&quot;:&quot;PN&quot;,&quot;text&quot;:&quot;Pitcairn&quot;},{&quot;value&quot;:&quot;PL&quot;,&quot;text&quot;:&quot;Poland&quot;},{&quot;value&quot;:&quot;PT&quot;,&quot;text&quot;:&quot;Portugal&quot;},{&quot;value&quot;:&quot;PR&quot;,&quot;text&quot;:&quot;Puerto Rico&quot;},{&quot;value&quot;:&quot;QA&quot;,&quot;text&quot;:&quot;Qatar&quot;},{&quot;value&quot;:&quot;RE&quot;,&quot;text&quot;:&quot;Reunion&quot;},{&quot;value&quot;:&quot;RO&quot;,&quot;text&quot;:&quot;Romania&quot;},{&quot;value&quot;:&quot;RU&quot;,&quot;text&quot;:&quot;Russian Federation&quot;},{&quot;value&quot;:&quot;RW&quot;,&quot;text&quot;:&quot;Rwanda&quot;},{&quot;value&quot;:&quot;KN&quot;,&quot;text&quot;:&quot;Saint Kitts and Nevis&quot;},{&quot;value&quot;:&quot;LC&quot;,&quot;text&quot;:&quot;Saint Lucia&quot;},{&quot;value&quot;:&quot;VC&quot;,&quot;text&quot;:&quot;Saint Vincent and the Grenadines&quot;},{&quot;value&quot;:&quot;WS&quot;,&quot;text&quot;:&quot;Samoa&quot;},{&quot;value&quot;:&quot;SM&quot;,&quot;text&quot;:&quot;San Marino&quot;},{&quot;value&quot;:&quot;ST&quot;,&quot;text&quot;:&quot;Sao Tome and Principe&quot;},{&quot;value&quot;:&quot;SA&quot;,&quot;text&quot;:&quot;Saudi Arabia&quot;},{&quot;value&quot;:&quot;SN&quot;,&quot;text&quot;:&quot;Senegal&quot;},{&quot;value&quot;:&quot;RS&quot;,&quot;text&quot;:&quot;Serbia&quot;},{&quot;value&quot;:&quot;SC&quot;,&quot;text&quot;:&quot;Seychelles&quot;},{&quot;value&quot;:&quot;SL&quot;,&quot;text&quot;:&quot;Sierra Leone&quot;},{&quot;value&quot;:&quot;SG&quot;,&quot;text&quot;:&quot;Singapore&quot;},{&quot;value&quot;:&quot;SK&quot;,&quot;text&quot;:&quot;Slovakia&quot;},{&quot;value&quot;:&quot;SI&quot;,&quot;text&quot;:&quot;Slovenia&quot;},{&quot;value&quot;:&quot;SB&quot;,&quot;text&quot;:&quot;Solomon Islands&quot;},{&quot;value&quot;:&quot;SO&quot;,&quot;text&quot;:&quot;Somalia&quot;},{&quot;value&quot;:&quot;ZA&quot;,&quot;text&quot;:&quot;South Africa&quot;},{&quot;value&quot;:&quot;GS&quot;,&quot;text&quot;:&quot;South Georgia South Sandwich Islands&quot;},{&quot;value&quot;:&quot;SS&quot;,&quot;text&quot;:&quot;South Sudan&quot;},{&quot;value&quot;:&quot;ES&quot;,&quot;text&quot;:&quot;Spain&quot;},{&quot;value&quot;:&quot;LK&quot;,&quot;text&quot;:&quot;Sri Lanka&quot;},{&quot;value&quot;:&quot;SH&quot;,&quot;text&quot;:&quot;St. Helena&quot;},{&quot;value&quot;:&quot;PM&quot;,&quot;text&quot;:&quot;St. Pierre and Miquelon&quot;},{&quot;value&quot;:&quot;SD&quot;,&quot;text&quot;:&quot;Sudan&quot;},{&quot;value&quot;:&quot;SR&quot;,&quot;text&quot;:&quot;Suriname&quot;},{&quot;value&quot;:&quot;SJ&quot;,&quot;text&quot;:&quot;Svalbard and Jan Mayen Islands&quot;},{&quot;value&quot;:&quot;SZ&quot;,&quot;text&quot;:&quot;Swaziland&quot;},{&quot;value&quot;:&quot;SE&quot;,&quot;text&quot;:&quot;Sweden&quot;},{&quot;value&quot;:&quot;CH&quot;,&quot;text&quot;:&quot;Switzerland&quot;},{&quot;value&quot;:&quot;SY&quot;,&quot;text&quot;:&quot;Syrian Arab Republic&quot;},{&quot;value&quot;:&quot;TW&quot;,&quot;text&quot;:&quot;Taiwan&quot;},{&quot;value&quot;:&quot;TJ&quot;,&quot;text&quot;:&quot;Tajikistan&quot;},{&quot;value&quot;:&quot;TZ&quot;,&quot;text&quot;:&quot;Tanzania, United Republic of&quot;},{&quot;value&quot;:&quot;TH&quot;,&quot;text&quot;:&quot;Thailand&quot;},{&quot;value&quot;:&quot;TG&quot;,&quot;text&quot;:&quot;Togo&quot;},{&quot;value&quot;:&quot;TK&quot;,&quot;text&quot;:&quot;Tokelau&quot;},{&quot;value&quot;:&quot;TO&quot;,&quot;text&quot;:&quot;Tonga&quot;},{&quot;value&quot;:&quot;TT&quot;,&quot;text&quot;:&quot;Trinidad and Tobago&quot;},{&quot;value&quot;:&quot;TN&quot;,&quot;text&quot;:&quot;Tunisia&quot;},{&quot;value&quot;:&quot;TR&quot;,&quot;text&quot;:&quot;Turkey&quot;},{&quot;value&quot;:&quot;TM&quot;,&quot;text&quot;:&quot;Turkmenistan&quot;},{&quot;value&quot;:&quot;TC&quot;,&quot;text&quot;:&quot;Turks and Caicos Islands&quot;},{&quot;value&quot;:&quot;TV&quot;,&quot;text&quot;:&quot;Tuvalu&quot;},{&quot;value&quot;:&quot;UG&quot;,&quot;text&quot;:&quot;Uganda&quot;},{&quot;value&quot;:&quot;UA&quot;,&quot;text&quot;:&quot;Ukraine&quot;},{&quot;value&quot;:&quot;AE&quot;,&quot;text&quot;:&quot;United Arab Emirates&quot;},{&quot;value&quot;:&quot;GB&quot;,&quot;text&quot;:&quot;United Kingdom&quot;},{&quot;value&quot;:&quot;US&quot;,&quot;text&quot;:&quot;United States&quot;},{&quot;value&quot;:&quot;UM&quot;,&quot;text&quot;:&quot;United States minor outlying islands&quot;},{&quot;value&quot;:&quot;UY&quot;,&quot;text&quot;:&quot;Uruguay&quot;},{&quot;value&quot;:&quot;UZ&quot;,&quot;text&quot;:&quot;Uzbekistan&quot;},{&quot;value&quot;:&quot;VU&quot;,&quot;text&quot;:&quot;Vanuatu&quot;},{&quot;value&quot;:&quot;VA&quot;,&quot;text&quot;:&quot;Vatican City State&quot;},{&quot;value&quot;:&quot;VE&quot;,&quot;text&quot;:&quot;Venezuela&quot;},{&quot;value&quot;:&quot;VN&quot;,&quot;text&quot;:&quot;Vietnam&quot;},{&quot;value&quot;:&quot;VG&quot;,&quot;text&quot;:&quot;Virgin Islands (British)&quot;},{&quot;value&quot;:&quot;VI&quot;,&quot;text&quot;:&quot;Virgin Islands (U.S.)&quot;},{&quot;value&quot;:&quot;WF&quot;,&quot;text&quot;:&quot;Wallis and Futuna Islands&quot;},{&quot;value&quot;:&quot;EH&quot;,&quot;text&quot;:&quot;Western Sahara&quot;},{&quot;value&quot;:&quot;YE&quot;,&quot;text&quot;:&quot;Yemen&quot;},{&quot;value&quot;:&quot;ZR&quot;,&quot;text&quot;:&quot;Zaire&quot;},{&quot;value&quot;:&quot;ZM&quot;,&quot;text&quot;:&quot;Zambia&quot;},{&quot;value&quot;:&quot;ZW&quot;,&quot;text&quot;:&quot;Zimbabwe&quot;}]"
                       data-pk="138" data-url="https://demo.s-cart.org/sc_admin/order/update" data-title="Country"
                       data-value="AU">{{ $orders->note }}</a></td>
            </tr>


            </tbody>
        </table>

        <h3>Tổng tiền: {{ number_format($orders->total, 0,'','.') }} <sup>đ</sup>
        </h3>


     </h3>

    </div>

    <?php
    $order_detail = App\Oders_detail::where('id_order', '=', $orders->id)->get();

    ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="box collapsed-box">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sản phẩm</th>

                            <th class="product_price">Gía</th>
                            <th class="product_price">Gía sau khuyến mãi</th>
                            <th class="product_qty">Số lượng</th>
                            <th class="product_total">Thành tiền</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($order_detail as $item)
                            <tr>
                                <td>
                                        {{$item->products['name']}}

                                </td>

{{--                            <!-- {{ $item->variant->products->id }} -->--}}

                                @if($item->id_accessories)

                                <td>{{ number_format($item->products['price'], 0,'','.') }} <sup>đ</sup></td>
                                @else


                                    <td>{{ number_format($item->products['price'], 0,'','.') }} <sup>đ</sup></td>
                                    <td>

                                    {{number_format($item->products['price']*(100 - $item->products['discount'])/100, 0, '.',',')}} <sup>đ</sup>

{{--                                        <!-- {{ $item->order->discount_code}} --}}
                                </td>
                                @endif




                                <td class="product_qty">
                                    <sapn>x {{ $item->qty }}</sapn>
                                </td>

                                    <td class="product_total item_id_183">{{ number_format($item->products['price']*(100 - $item->products['discount'])/100 * $item->qty, 0,'','.') }} <sup>đ</sup>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

