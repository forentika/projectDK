
<style>
    
/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: Ubuntu-Regular;
  src: url('../fonts/ubuntu/Ubuntu-Regular.ttf'); 
}

@font-face {
  font-family: Ubuntu-Bold;
  src: url('../fonts/ubuntu/Ubuntu-Bold.ttf'); 
}
@font-face{font-family:Linearicons-Free;src:url(https://cdn.linearicons.com/free/1.0.0/Linearicons-Free.eot);src:url(https://cdn.linearicons.com/free/1.0.0/Linearicons-Free.eot?#iefix) format('embedded-opentype'),url(https://cdn.linearicons.com/free/1.0.0/Linearicons-Free.woff2) format('woff2'),url(https://cdn.linearicons.com/free/1.0.0/Linearicons-Free.ttf) format('truetype'),url(https://cdn.linearicons.com/free/1.0.0/Linearicons-Free.woff) format('woff'),url(https://cdn.linearicons.com/free/1.0.0/Linearicons-Free.svg#Linearicons-Free) format('svg');font-weight:400;font-style:normal}.lnr{font-family:Linearicons-Free;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.lnr-home:before{content:"\e800"}.lnr-apartment:before{content:"\e801"}.lnr-pencil:before{content:"\e802"}.lnr-magic-wand:before{content:"\e803"}.lnr-drop:before{content:"\e804"}.lnr-lighter:before{content:"\e805"}.lnr-poop:before{content:"\e806"}.lnr-sun:before{content:"\e807"}.lnr-moon:before{content:"\e808"}.lnr-cloud:before{content:"\e809"}.lnr-cloud-upload:before{content:"\e80a"}.lnr-cloud-download:before{content:"\e80b"}.lnr-cloud-sync:before{content:"\e80c"}.lnr-cloud-check:before{content:"\e80d"}.lnr-database:before{content:"\e80e"}.lnr-lock:before{content:"\e80f"}.lnr-cog:before{content:"\e810"}.lnr-trash:before{content:"\e811"}.lnr-dice:before{content:"\e812"}.lnr-heart:before{content:"\e813"}.lnr-star:before{content:"\e814"}.lnr-star-half:before{content:"\e815"}.lnr-star-empty:before{content:"\e816"}.lnr-flag:before{content:"\e817"}.lnr-envelope:before{content:"\e818"}.lnr-paperclip:before{content:"\e819"}.lnr-inbox:before{content:"\e81a"}.lnr-eye:before{content:"\e81b"}.lnr-printer:before{content:"\e81c"}.lnr-file-empty:before{content:"\e81d"}.lnr-file-add:before{content:"\e81e"}.lnr-enter:before{content:"\e81f"}.lnr-exit:before{content:"\e820"}.lnr-graduation-hat:before{content:"\e821"}.lnr-license:before{content:"\e822"}.lnr-music-note:before{content:"\e823"}.lnr-film-play:before{content:"\e824"}.lnr-camera-video:before{content:"\e825"}.lnr-camera:before{content:"\e826"}.lnr-picture:before{content:"\e827"}.lnr-book:before{content:"\e828"}.lnr-bookmark:before{content:"\e829"}.lnr-user:before{content:"\e82a"}.lnr-users:before{content:"\e82b"}.lnr-shirt:before{content:"\e82c"}.lnr-store:before{content:"\e82d"}.lnr-cart:before{content:"\e82e"}.lnr-tag:before{content:"\e82f"}.lnr-phone-handset:before{content:"\e830"}.lnr-phone:before{content:"\e831"}.lnr-pushpin:before{content:"\e832"}.lnr-map-marker:before{content:"\e833"}.lnr-map:before{content:"\e834"}.lnr-location:before{content:"\e835"}.lnr-calendar-full:before{content:"\e836"}.lnr-keyboard:before{content:"\e837"}.lnr-spell-check:before{content:"\e838"}.lnr-screen:before{content:"\e839"}.lnr-smartphone:before{content:"\e83a"}.lnr-tablet:before{content:"\e83b"}.lnr-laptop:before{content:"\e83c"}.lnr-laptop-phone:before{content:"\e83d"}.lnr-power-switch:before{content:"\e83e"}.lnr-bubble:before{content:"\e83f"}.lnr-heart-pulse:before{content:"\e840"}.lnr-construction:before{content:"\e841"}.lnr-pie-chart:before{content:"\e842"}.lnr-chart-bars:before{content:"\e843"}.lnr-gift:before{content:"\e844"}.lnr-diamond:before{content:"\e845"}.lnr-linearicons:before{content:"\e846"}.lnr-dinner:before{content:"\e847"}.lnr-coffee-cup:before{content:"\e848"}.lnr-leaf:before{content:"\e849"}.lnr-paw:before{content:"\e84a"}.lnr-rocket:before{content:"\e84b"}.lnr-briefcase:before{content:"\e84c"}.lnr-bus:before{content:"\e84d"}.lnr-car:before{content:"\e84e"}.lnr-train:before{content:"\e84f"}.lnr-bicycle:before{content:"\e850"}.lnr-wheelchair:before{content:"\e851"}.lnr-select:before{content:"\e852"}.lnr-earth:before{content:"\e853"}.lnr-smile:before{content:"\e854"}.lnr-sad:before{content:"\e855"}.lnr-neutral:before{content:"\e856"}.lnr-mustache:before{content:"\e857"}.lnr-alarm:before{content:"\e858"}.lnr-bullhorn:before{content:"\e859"}.lnr-volume-high:before{content:"\e85a"}.lnr-volume-medium:before{content:"\e85b"}.lnr-volume-low:before{content:"\e85c"}.lnr-volume:before{content:"\e85d"}.lnr-mic:before{content:"\e85e"}.lnr-hourglass:before{content:"\e85f"}.lnr-undo:before{content:"\e860"}.lnr-redo:before{content:"\e861"}.lnr-sync:before{content:"\e862"}.lnr-history:before{content:"\e863"}.lnr-clock:before{content:"\e864"}.lnr-download:before{content:"\e865"}.lnr-upload:before{content:"\e866"}.lnr-enter-down:before{content:"\e867"}.lnr-exit-up:before{content:"\e868"}.lnr-bug:before{content:"\e869"}.lnr-code:before{content:"\e86a"}.lnr-link:before{content:"\e86b"}.lnr-unlink:before{content:"\e86c"}.lnr-thumbs-up:before{content:"\e86d"}.lnr-thumbs-down:before{content:"\e86e"}.lnr-magnifier:before{content:"\e86f"}.lnr-cross:before{content:"\e870"}.lnr-menu:before{content:"\e871"}.lnr-list:before{content:"\e872"}.lnr-chevron-up:before{content:"\e873"}.lnr-chevron-down:before{content:"\e874"}.lnr-chevron-left:before{content:"\e875"}.lnr-chevron-right:before{content:"\e876"}.lnr-arrow-up:before{content:"\e877"}.lnr-arrow-down:before{content:"\e878"}.lnr-arrow-left:before{content:"\e879"}.lnr-arrow-right:before{content:"\e87a"}.lnr-move:before{content:"\e87b"}.lnr-warning:before{content:"\e87c"}.lnr-question-circle:before{content:"\e87d"}.lnr-menu-circle:before{content:"\e87e"}.lnr-checkmark-circle:before{content:"\e87f"}.lnr-cross-circle:before{content:"\e880"}.lnr-plus-circle:before{content:"\e881"}.lnr-circle-minus:before{content:"\e882"}.lnr-arrow-up-circle:before{content:"\e883"}.lnr-arrow-down-circle:before{content:"\e884"}.lnr-arrow-left-circle:before{content:"\e885"}.lnr-arrow-right-circle:before{content:"\e886"}.lnr-chevron-up-circle:before{content:"\e887"}.lnr-chevron-down-circle:before{content:"\e888"}.lnr-chevron-left-circle:before{content:"\e889"}.lnr-chevron-right-circle:before{content:"\e88a"}.lnr-crop:before{content:"\e88b"}.lnr-frame-expand:before{content:"\e88c"}.lnr-frame-contract:before{content:"\e88d"}.lnr-layers:before{content:"\e88e"}.lnr-funnel:before{content:"\e88f"}.lnr-text-format:before{content:"\e890"}.lnr-text-format-remove:before{content:"\e891"}.lnr-text-size:before{content:"\e892"}.lnr-bold:before{content:"\e893"}.lnr-italic:before{content:"\e894"}.lnr-underline:before{content:"\e895"}.lnr-strikethrough:before{content:"\e896"}.lnr-highlight:before{content:"\e897"}.lnr-text-align-left:before{content:"\e898"}.lnr-text-align-center:before{content:"\e899"}.lnr-text-align-right:before{content:"\e89a"}.lnr-text-align-justify:before{content:"\e89b"}.lnr-line-spacing:before{content:"\e89c"}.lnr-indent-increase:before{content:"\e89d"}.lnr-indent-decrease:before{content:"\e89e"}.lnr-pilcrow:before{content:"\e89f"}.lnr-direction-ltr:before{content:"\e8a0"}.lnr-direction-rtl:before{content:"\e8a1"}.lnr-page-break:before{content:"\e8a2"}.lnr-sort-alpha-asc:before{content:"\e8a3"}.lnr-sort-amount-asc:before{content:"\e8a4"}.lnr-hand:before{content:"\e8a5"}.lnr-pointer-up:before{content:"\e8a6"}.lnr-pointer-right:before{content:"\e8a7"}.lnr-pointer-down:before{content:"\e8a8"}.lnr-pointer-left:before{content:"\e8a9"}



/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: Ubuntu-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
	font-family: Ubuntu-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  color: #fff;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: Ubuntu-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #555555;}
input:-moz-placeholder { color: #555555;}
input::-moz-placeholder { color: #555555;}
input:-ms-input-placeholder { color: #555555;}

textarea::-webkit-input-placeholder { color: #555555;}
textarea:-moz-placeholder { color: #555555;}
textarea::-moz-placeholder { color: #555555;}
textarea:-ms-input-placeholder { color: #555555;}

label {
  margin: 0;
  display: block;
}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-family: Poppins-Regular;
  font-size: 13px;
  color: #e5e5e5;
  line-height: 1.5;
}


/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;

  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  z-index: 1;  
}

.container-login100::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.65);
}

.wrap-login100 {
  width: 390px;
  border-radius: 10px;
  overflow: hidden;

  background: transparent;
}


/*------------------------------------------------------------------
[ Form ]*/

.login100-form {
  width: 100%;
  border-radius: 10px;
  background-color: #fff;
}

.login100-form-logo {
  font-size: 60px; 
  color: #333333;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  background-color: #fff;
  margin: 0 auto;
}

.login100-form-title {
  font-family: Ubuntu-Bold;
  font-size: 28px;
  color: #fff;
  line-height: 1.2;
  text-align: center;
  text-transform: uppercase;

  display: block;
}


/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 1px solid #e6e6e6;
  padding: 29px 0;
}

.input100 {
  font-family: Ubuntu-Regular;
  font-size: 20px;
  color: #555555;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 50px;
  background: transparent;
  padding: 0 10px 0 80px;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

/*---------------------------------------------*/ 
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 0;
  height: 1px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  background: #d41872;
  background: -webkit-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: -o-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: -moz-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: linear-gradient(left, #a445b2, #d41872, #fa4299);
}

.focus-input100::after {
  font-family: Linearicons-Free;
  font-size: 18px;
  color: #999999;

  content: attr(data-placeholder);
  display: block;
  width: 100%;
  position: absolute;
  top: 40px;
  left: 35px;
 

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus {
  padding-left: 60px;
}

.input100:focus + .focus-input100::after {
  left: 23px;
  color: #d41872;
}

.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::after {
  left: 23px;
  color: #d41872;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

.has-val.input100 {
  padding-left: 60px;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
  font-family: Ubuntu-Bold;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 160px;
  height: 42px;
  border-radius: 21px;

  background: #d41872;
  background: -webkit-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: -o-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: -moz-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: linear-gradient(left, #a445b2, #d41872, #fa4299);
  position: relative;
  z-index: 1;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 21px;
  background-color: #555555;
  top: 0;
  left: 0;
  opacity: 0;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background-color: transparent;
}

.login100-form-btn:hover:before {
  opacity: 1;
}



/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 10px;
  pointer-events: none;

  font-family: Ubuntu-Bold;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f12a";
  font-family: FontAwesome;
  font-size: 16px;
  color: #c80000;

  display: block;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 15px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}





</style>


<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('images/enak.png') }}');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                {{ __('Login') }}
            </span>
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5">
                @csrf
                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="email" name="email" id="email" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" id="password" name="password" placeholder="{{ __('Password') }} " class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                
                <div class="container-login100-form-btn m-t-32">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
            <div class="container-login100-form-btn m-t-32">
              <a href="{{ route('password.request') }}" class="txt1">
                  Forgot Password?
              </a>
          </div>
          
        </div>
    </div>
</div>