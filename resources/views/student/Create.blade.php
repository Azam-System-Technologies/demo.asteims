
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('tittle')</title>
  <base href="{{\URL::to('/')}}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Layout
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{\URL::to('/')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Your Site</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('dashboard')}}" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('students')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Students

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('teachers')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Teachers

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('parents')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Parents

              </p>
            </a>
          </li>






          <li class="nav-item">
            <a href="{{url('user')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                 Mgmt. & Support Staff


              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('studentatts')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Student Attendance

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Teacher Attendance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              User Attendance

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('ven')}}" class="nav-link">
            <i class=" pl-1 far fa-address-card"></i>
              <p class="pl-2">
                Vendor
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('location')}}" class="nav-link">
            <i class=" pl-1 fas fa-globe-asia"></i>
              <p class="pl-2">
                Location
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('asset_category')}}" class="nav-link">
            <i class=" pl-1 fas fa-globe-asia"></i>
              <p class="pl-2">
                Asset Category
              </p>
            </a>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @yield('content')

   <div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      <form action="{{route('studentstore')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name<span class="text-danger">*</span></label></br>
        <input type="text" name="name" id="name" class="form-control"required></br>
        <label>Guardian</label></br>
        <select name="guardian" id="guardian" class="form-control">
       <option value="0">Select Guardian </option>
       <option value="7">AD (adlhr12345@gmail.com )</option>
<option value="8">Muhammad Akram</option>
<option value="11">Jehanzeb (rajajehanzeb@gmail.com )</option>
<option value="14">Munawar (capritech@hotmail.com )</option>
<option value="16">Arshad Khan</option>
<option value="17">akhter</option>
<option value="18">Gulzar</option>
<option value="19">Ajmal (ajmal@gmail.com )</option>
<option value="21">Zafar (shehlizah!@gmail.com )</option>
<option value="22">MA (aD@hotmail.com )</option>
<option value="23">Muhammad Arshad</option>
<option value="24">parent1</option>
<option value="25">Ayesha</option>
<option value="26">G1 (ma1955@hotmail.com )</option>
<option value="27">Muhammad Arshad</option>
<option value="28">Muhammad Azam</option>
<option value="31">Shahab</option>
        </select></br>
        <label>Date of Birth<span class="text-danger"></span></label></br>
        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"required></br>
        <label>Place of Birth<span class="text-danger"></span></label></br>
        <input type="text" name="place_of_birth" id="place_of_birth" class="form-control"required></br>
        <label> Emergency Contact No <span class="text-danger"></span></label></br>
        <input type="text" name="emergency_contact_no" id="emergency_contact_no" class="form-control"required></br>
        <label> Relationship with<span class="text-danger"></span></label></br>
        <input type="text" name="emergency_contact_relation" id="emergency_contact_relation" class="form-control"required></br>
        <label>Gender</label></br>
        <select name="gender" id="gender"  class="form-control">
        <option value="Male">Male</option>
         <option value="Female">Female</option>
        </select></br>
        <label> Blood Group</label></br>
        <select name="bloodgroup" id="bloodgroup" class="form-control">
       <option value="0">Select Blood Group </option>
       <option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
        </select></br>
        <label>Religion</label></br>
        <input type="text" name="religion" id="religion" class="form-control"></br>
        <label>Email<span class="text-danger">*</span></label></br>
        <input type="text" name="email" id="email" class="form-control"required></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"required></br>
        <label>State</label></br>
        <input type="text" name="state" id="state" class="form-control"></br>
        <label> Country </label></br>
        <select name="country" id="country" class="form-control select2">
        <option value="0">Select Country</option>
<option value="AF">Afghanistan</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="BQ">British Antarctic Territory</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="VG">British Virgin Islands</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CT">Canton and Enderbury Islands</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos [Keeling] Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo - Brazzaville</option>
<option value="CD">Congo - Kinshasa</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="CI">Cote dIvoire</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="NQ">Dronning Maud Land</option>
<option value="DD">East Germany</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="FQ">French Southern and Antarctic Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong SAR China</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JT">Johnston Island</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Laos</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macau SAR China</option>
<option value="MK">Macedonia</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="FX">Metropolitan France</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia</option>
<option value="MI">Midway Islands</option>
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar [Burma]</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NT">Neutral Zone</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="KP">North Korea</option>
<option value="VD">North Vietnam</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PC">Pacific Islands Trust Territory</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territories</option>
<option value="PA">Panama</option>
<option value="PZ">Panama Canal Zone</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="YD">People's Democratic Republic of Yemen</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn Islands</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RO">Romania</option>
<option value="RU">Russia</option>
<option value="RW">Rwanda</option>
<option value="RE">Reunion</option>
<option value="BL">Saint Barthelemy</option>
<option value="SH">Saint Helena</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="CS">Serbia and Montenegro</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="KR">South Korea</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syria</option>
<option value="ST">Sao Tome and Principe</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UM">U.S. Minor Outlying Islands</option>
<option value="PU">U.S. Miscellaneous Pacific Islands</option>
<option value="VI">U.S. Virgin Islands</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="SU">Union of Soviet Socialist Republics</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="ZZ">Unknown or Invalid Region</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VA">Vatican City</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="WK">Wake Island</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
<option value="AX">Aland Islands</option>
        </select></br>
        <label> Class<span class="text-danger">*</span></label></br>
        <select name="class_id" id="class_id" class="form-control select2" required>
        <option value="0">Select Class</option>
<option value="10">K.G.II</option>
<option value="11">Nursery</option>
<option value="13">Montessori</option>
<option value="14">KG-1</option>
<option value="15">Coaching</option>
<option value="20">Prep</option>
<option value="12">I</option>
<option value="1">II</option>
<option value="2">III</option>
<option value="3">IV</option>
<option value="4">V</option>
<option value="5">VI</option>
<option value="6">VII</option>
<option value="7">VIII</option>
<option value="8">IX</option>
<option value="21">X</option>
<option value="22">XI</option>
<option value="23">XII</option>
<option value="25">Test Class</option>
<option value="27">first</option>
<option value="28">BA</option>
<option value="26">BA</option>
<option value="24">Test</option>
        </select></br>
        <label> Section<span class="text-danger">*</span> </label></br>
        <select name="section_id" id="section_id" class="form-control select2" required>
        <option value="0">Select Section</option>
        <option value="22" selected="selected">A</option>
        <option value="23" selected="selected">B</option>
        </select></br>
        <label> Campus</label></br>
        <select name="campus_id" id="campus_id" class="form-control select2">
        <option value="1">College</option>
<option value="2">Academy</option>
<option value="3">uni</option>
<option value="4">cadow</option>
        </select></br>
        <label>  Group </label></br>
        <select name="studentGroupID" id="studentGroupID" class="form-control select2">
        <option value="0">Select Group</option>
<option value="1">Science</option>
<option value="2">General</option>
<option value="4">Computing</option>
<option value="5">Arts</option>
        </select></br>
        <label>Optional Subject  </label></br>
        <select name="optionalSubjectID" id="optionalSubjectID" class="form-control select2">
        <option value="0" selected="selected">Select Optional Subject</option>
        </select></br>
        <label>Register NO<span class="text-danger">*</span></label></br>
        <input type="text" name="registerNo" id="registerNo" class="form-control"required></br>
        <label>Roll<span class="text-danger"></span></label></br>
        <input type="text" name="roll" id="roll" class="form-control"></br>

        <label> Photo</label></br>
        <input type="file" name="file_path" id="file_path" class="form-control"required></br>

        <label>  Extra Curricular Activities<span class="text-danger"></span></label></br>
        <input type="text" name="extra_curricular_activities" id="extra_curricular_activities" class="form-control"></br>
        <label> Admission Test Result<span class="text-danger"></span></label></br>
        <div class="col-sm-6">
                            <input type="radio" class="form-radio" name="admission_result" value="pass"  checked="checked" >Pass
							<input type="radio" class="form-radio" name="admission_result" value="fail"  >Fail
							<input type="radio" class="form-radio" name="admission_result" value="s_permit"  >Special Permit
                        </div>
                        <div class="form-group ">
                        <label for="remarks" class="col-sm-2 control-label">
                            Interviewer Notes                        </label>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="remarks" name="remarks" value="" ></textarea>
                        </div>
                        <span class="col-sm-4 control-label">
                                                    </span>
                    </div>
                    <div class='form-group' >                        <label for="monthly_tuttion_fee" class="col-sm-2 control-label">
                            Monthly Tuttion Fee
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="monthly_tuttion_fee" name="monthly_tuttion_fee" value="" >
                        </div>
                        <span class="col-sm-4 control-label">
                                                    </span>
                    </div>
                    <div class='form-group' >                        <label for="admission_fee" class="col-sm-2 control-label">
                            Admission Fee
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="admission_fee" name="	admission_fee" value="" >
                        </div>
                        <span class="col-sm-4 control-label">
                                                    </span>
                    </div>
                    <div class='form-group' >                        <label for="registration_fee" class="col-sm-2 control-label">
                            Registration Fee
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="registration_fee" name="registration_fee" value="" >
                        </div>
                        <span class="col-sm-4 control-label">
                                                    </span>
                    </div>
                    <div class="form-group ">
                        <label for="remarks" class="col-sm-2 control-label">
                            Admission Status                        </label>
                        <div class="col-sm-6">
                            <input type="radio" class="form-radio" name="admission_status" value="TRUE"  checked="checked" >Admitted
							<input type="radio" class="form-radio" name="admission_status" value="FALSE"  >Not Admitted
                        </div>
                        <span class="col-sm-4 control-label">
                                                    </span>
                    </div>
                    <div class='form-group' >                        <label for="username" class="col-sm-2 control-label">
                            Username <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="username" name="username" value="" >
                        </div>
                         <span class="col-sm-4 control-label">
                                                    </span>
                    </div>


                    <div class='form-group' >                        <label for="password" class="col-sm-2 control-label">
                            Password <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password" value="" >
                        </div>
                         <span class="col-sm-4 control-label">
                                                    </span>
                    </div>


       <!-- <input type="submit" value="Save" class="btn btn-success"></br>-->
        <button type="submit" class="btn btn-success" title="Add Student" onclick="return confirm
             ('are you want to Add Student')"><i class="fa fa-trash-o" aria-hidden="true"></i> Add Student</button>

    </form>

  </div>
</div>


          </div>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">



          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
