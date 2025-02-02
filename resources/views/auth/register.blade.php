@extends('layouts.app')

@section('title', __('- Sign Up'))

@section('PAGE_LEVEL_STYLES')
<style type="text/css">
    .register-input-container {
        width: 100%;
        background: #6171A9;
    }
    .pt-2\.5 {
        padding-top: 12px;
    }
    .form-section {
        width: 680px;
    }
    .info-title {
        margin-bottom: 12px;
        padding-left: 40px;
    }
    label.has-error {
        padding: 8px 24px 0 16px;
        font-size: 14px;
        color: #00ffff;
        text-align: left;
        font-family: 'DinPro Light', sans-serif;
        margin: 0;
    }
    label.valid {
        padding: 8px 24px 0 16px;
        font-size: 14px;
        color: #00ffff;
        text-align: left;
        font-family: 'DinPro Light', sans-serif;
        margin: 0;
    }

    @media only screen and (max-width: 767.98px) {
        .form-section {
            width: 100%;
        }
    }

    .addresstab {
        display: none;
        width: 100%;
        z-index: 1000; 
        background: #2d23a3;
        position: absolute;
        padding-top: 12px;
        padding-bottom: 12px;
        max-height: 250px;
        overflow-y: auto;
        margin-top: -12px;
    }

    .addresstab div {
        color: #fff;
        border: none;
        outline: none;
        cursor: pointer;
        font-size: 18px;
        width: 100%;
        padding-left: 26px;
        padding-right: 20px;
    }
    .addresstab div:hover {
        background-color: #573fdb;
    }
</style>
@endsection

@section('PAGE_CONTENT')
<div class="main-bg-login d-flex justify-content-center align-items-center select-type-section">
    <div class="row justify-content-center">
        <div class="login-page">
            <div class="login-title text-center">
                <p class="mb-1">REGISTRATION</p>
                <span>FOR NEW USERS</span>
            </div>
            
            <div class="form-group row justify-content-center pt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-primary login-button select-type" attr-data="0">
                        {{ __('CUSTOMER') }}
                    </button>
                    <div class="login-title text-center mb-0 mt-2">
                        <span>REGISTRATION FOR CUSTOMORS</span>
                    </div>
                </div>
            </div>
            
            <div class="form-group row justify-content-center pt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-primary login-button select-type" attr-data="1">
                        {{ __('COACH') }}
                    </button>
                    <div class="login-title text-center mb-0 mt-2">
                        <span>REGISTRATION FOR COACHES</span>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-center pt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-primary login-button select-type" attr-data="2">
                        {{ __('COMPANY') }}
                    </button>
                    <div class="login-title text-center mb-0 mt-2">
                        <span>REGISTRATION FOR COMPANIES</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="register-input-container">
    <div class="container register-input-section d-none pt-5">
        <div class="row justify-content-center">
            <div class="login-page mt-5">
                <div class="login-title text-center">
                    <p class="mb-1 registration-title">REGISTRATION</p>
                    <span>PLEASE FILL OUT ALL FIELDS</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form class="form-section" data-form="register" autocomplete="off" method="POST" action="{{ route('register') }}">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br/>
                        @endforeach
                    </div>
                @endif

                @csrf

                <input type="hidden" name="user_type" id="userType" value="0" />

                <div class="row">
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="login-title info-title">
                                <span>WHO INVITED YOU TO SOCIAL.BRANDFIELDS.COM?</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input id="refererNumber" type="text" class="form-control" value="{{$referral_id}}" placeholder="Referer Number" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <label class="checkbox-container pt-2.5 pl-3">
                                    <input type="checkbox" name="seen_on_media" id="seenOnMedia" {{ old('seen_on_media') ? 'checked' : '' }}/>
                                    <span class="checkbox-circle"></span>
                                    <span class="checkbox-name">{{ __('SEEN ON MEDIA') }}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="login-title info-title">
                                <span>OWNER DETAILS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" id="firstName" placeholder="First Name" tabindex="1" value="{{old('first_name')}}">
                                <label id="first-name-error" class="has-error" for="first_name" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Last Name" tabindex="2" value="{{old('last_name')}}">
                                <label id="last-name-error" class="has-error" for="last_name" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="birthday" class="form-control" id="dateBirth" placeholder="Date of Birth" tabindex="3" value="{{old('birthday')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group d-flex pt-2.5 pl-3">
                                <label class="checkbox-container">
                                    <input type="radio" name="gender" checked id="gender-female" value="f" />
                                    <span class="checkbox-circle"></span>
                                    <span class="checkbox-name">{{ __('WOMAN') }}</span>
                                </label>
                                <label class="checkbox-container pl-5">
                                    <input type="radio" name="gender" id="gender-male" class="radio-button" value="m"/>
                                    <span class="checkbox-circle"></span>
                                    <span class="checkbox-name">{{ __('MAN') }}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 company-details-section">
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="login-title info-title">
                                <span>COMPANY DETAILS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="company_name" class="form-control" id="companyName" placeholder="Company Name" tabindex="4" value="{{old('company_name')}}">
                                <label id="company-name-error" class="has-error" for="company_name" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="vat_number" class="form-control" id="vatNumber" placeholder="VAT Number" tabindex="5" value="{{old('vat_number')}}">
                                <label id="vat-number-error" class="has-error" for="vat_number" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="login-title info-title">
                                <span>CONTACT DETAILS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="mobileNumber" placeholder="Phone Number" tabindex="6" value="{{old('phone')}}">
                                <label id="mobile-number-error" class="has-error" for="phone" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" tabindex="7" value="{{old('email')}}">
                                <label id="email-error" class="has-error" for="email" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="login-title info-title">
                                <span>ADDRESS DETAILS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="street_name" class="form-control" id="streetName" placeholder="Street" tabindex="8" value="{{old('street_name')}}">
                                <label id="street-name-error" class="has-error" for="street_name" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="house_number" class="form-control" id="houseNumber" placeholder="Number" tabindex="9" value="{{old('house_number')}}">
                                <label id="house-number-error" class="has-error" for="house_number" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <input type="text" name="city" class="form-control" id="real-city" placeholder="City" hidden>
                            <div class="form-group search-city">
                                <input type="text" class="form-control" id="city" placeholder="City" tabindex="10" >
                                <label id="city-error" class="has-error" for="city" style="display: none"></label>
                            </div>
                        </div>
                        <div class="addresstab">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="postal_code" class="form-control" id="postalCode" placeholder="Zip Code" tabindex="11" value="{{old('postal_code')}}">
                                <label id="postal-code-error" class="has-error" for="postal_code" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <input type="text" name="state" class="form-control" id="real-state" placeholder="Area" hidden>
                            <div class="form-group">
                                <input type="text" class="form-control" id="state" placeholder="Area" disabled>
                                <label id="state-error" class="has-error" for="state" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <input type="text" name="country" class="form-control" id="real-country" placeholder="Country" hidden>
                            <div class="form-group">
                                <input type="text" class="form-control" id="country" placeholder="Country" disabled>
                                <label id="country-error" class="has-error" for="country" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="login-title info-title">
                                <span>LOGIN DETAILS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" id="username" placeholder="User Name" tabindex="14" value="{{old('username')}}">
                                <label id="username-error" class="has-error" for="username" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-page">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" tabindex="15" value="{{old('password')}}">
                                <label id="password-error" class="has-error" for="password" style="display: none"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="login-page">
                        <div class="form-group row info-title">
                            <div class="col-12">
                                <label class="checkbox-container ml-3">
                                    <input type="checkbox" name="real-person" required />
                                    <span class="checkbox-circle"></span>
                                    <span class="checkbox-name">I AM A REAL PERSON AND THE DATA PROVIDED BY ME IS CORRECT</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row info-title">
                            <div class="col-12">
                                <label class="checkbox-container ml-3">
                                    <input type="checkbox" name="agree-rule" required />
                                    <span class="checkbox-circle"></span>
                                    <span class="checkbox-name">I AGREE ON THE COMMUNITY GUIDELINES AND I WILL FOLLOW THE RULES</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pb-5">
                    <div class="login-page">
                        <div class="form-group row justify-content-center pb-5">
                            <div class="col-12 text-center">
                                <button class="btn btn-primary login-button button-submit" data-button="submit">
                                    {{ __('SEND') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let timer = null;

        $('.register-input-section').on('click', function() {
            $('.addresstab').hide();
        })
        
        $('.search-city input[type="text"]').on('keyup', function() {
            const key = $(this).val();
            if (timer) {
                clearTimeout(timer)
            }
            timer = setTimeout(function() {
                if(key == '') {
                    $('.addresstab').hide();
                } else {
                    var options = {
                        distance: 'CITY',
                        keyword: key,
                    };
                    $.ajax({
                        url: '{{ route("address.search") }}',
                        method: "POST",
                        data: options,
                        success:function(res){
                            if (res.length) {
                                var html = '';
                                for(var resIndex = 0; resIndex < res.length; resIndex++) {
                                    html += 
                                        '<div class="address py-3" attr-data="' + res[resIndex].address + '"  attr-name="' + res[resIndex].name + '">' + res[resIndex].name + '</div>';
                                }
                                $('.addresstab').html(html);
                                $('.addresstab').show();
                            }
                        },
                        error:function(err){
                            toastr['error']('Error');
                        }
                    })
                }
            }, 1000);
        })

        $(document).on('click', '.address', function() {
            const ids = $(this).attr('attr-data').split(',');
            const names = $(this).attr('attr-name').split(', ');
            $("#city").val(names[0]);
            $("#state").val(names[1]);
            $("#country").val(names[2]);
            $("#real-city").val(ids[0]);
            $("#real-state").val(ids[1]);
            $("#real-country").val(ids[2]);
            $('.addresstab').hide();
        })

        var user_type = 0;
        const register = {
            init: function () {
                this.variables();
                this.addEventListeners();
                this.firstInputFocus();
                this.datePicker();
            },
            variables: function () {
                this.form = $('[data-form="register"]');
                this.submitButton = $('[data-button="submit"]');
                this.refererNumberInput = $('#refererNumber');
                this.seenOnMediaInput = $('#seenOnMedia');
                this.firstNameInput = $('#firstName');
                this.firstNameError = $('#first-name-error');
                this.lastNameInput = $('#lastName');
                this.lastNameError = $('#last-name-error');
                this.dateBirth = $('#dateBirth');
                this.companyNameInput = $('#companyName');
                this.companyNameError = $('#company-name-error');
                this.vatNumberInput = $('#vatNumber');
                this.vatNumberError = $('#vat-number-error');
                this.mobileNumberInput = $('#mobileNumber');
                this.mobileNumberError = $('#mobile-number-error');
                this.emailInput = $('#email');
                this.emailError = $('#email-error');
                this.streetNameInput = $('#streetName');
                this.streetNameError = $('#street-name-error');
                this.houseNumberInput = $('#houseNumber');
                this.houseNumberError = $('#house-number-error');
                this.cityInput = $('#city');
                this.cityError = $('#city-error');
                this.postalCodeInput = $('#postalCode');
                this.postalCodeError = $('#postal-code-error');
                this.stateInput = $('#state');
                this.stateError = $('#state-error');
                this.countryInput = $('#country');
                this.countryError = $('#country-error');
                this.usernameInput = $('#username');
                this.usernameError = $('#username-error');
                this.passwordInput = $('#password');
                this.passwordError = $('#password-error');
                this.scrollToError = '';
            },
            addEventListeners: function () {
                this.firstNameInput.on('keyup', function () {
                    this.validateFirstNameInput();
                }.bind(this));
                this.lastNameInput.on('keyup', function () {
                    this.validateLastNameInput();
                }.bind(this));
                this.companyNameInput.on('keyup', function () {
                    this.validateCompanyNameInput();
                }.bind(this));
                this.vatNumberInput.on('keyup', function () {
                    this.validateVatNumberInput();
                }.bind(this));
                this.mobileNumberInput.on('keyup', function () {
                    this.validateMobileNumberInput();
                }.bind(this));
                this.emailInput.on('keyup', function () {
                    this.validateEmailInput();
                }.bind(this));
                this.streetNameInput.on('keyup', function () {
                    this.validateStreetNameInput();
                }.bind(this));
                this.houseNumberInput.on('keyup', function () {
                    this.validateHouseNumberInput();
                }.bind(this));
                this.cityInput.on('keyup', function () {
                    this.validateCityInput();
                }.bind(this));
                this.postalCodeInput.on('keyup', function () {
                    this.validatePostalCodeInput();
                }.bind(this));
                this.stateInput.on('keyup', function () {
                    this.validateStateInput();
                }.bind(this));
                this.countryInput.on('keyup', function () {
                    this.validateCountryInput();
                }.bind(this));
                this.usernameInput.on('keyup', function () {
                    this.validateUsernameInput();
                }.bind(this));
                this.passwordInput.on('keyup', function () {
                    this.validatePasswordInput();
                }.bind(this));
                this.form.on('submit', function (event) {
                    if (this.validateFirstNameInput() &&
                        this.validateLastNameInput() &&
                        this.validateCompanyNameInput() &&
                        this.validateVatNumberInput() &&
                        this.validateMobileNumberInput() &&
                        this.validateEmailInput() &&
                        this.validateStreetNameInput() &&
                        this.validateHouseNumberInput() &&
                        this.validateCityInput() &&
                        this.validatePostalCodeInput() &&
                        this.validateStateInput() &&
                        this.validateCountryInput() &&
                        this.validateUsernameInput() &&
                        this.validatePasswordInput() &&
                        this.validateSponsorInput()) {
                        $('.button-submit').attr('disabled', true);
                        return true;
                    } else {
                        event.preventDefault();
                        this.scrollToElement(this.scrollToError);
                        this.scrollToError.focus();
                    }
                }.bind(this));
                $(document).on('keypress', function (e) {
                    if ((e.which === 13)) {
                        this.form.submit();
                    }
                }.bind(this));
            },
            scrollToElement: function (element) {
                $('body, html').animate({
                    scrollTop: element.offset().top - 80
                }, 500);
            },
            firstInputFocus: function () {
                setTimeout(function () {
                    this.firstNameInput.focus();
                }.bind(this), 300);
            },
            validateFirstNameInput: function () {
                var validationMessage = '';
                var value = this.firstNameInput.val();

                if ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)) || (/^[\p{L}\d\- ]{2,50}$/u.test(value))) {
                    validationMessage = 'Now, that\'s a good name.\n';
                    this.firstNameError.addClass('valid');
                    this.firstNameError.hide();
                } else if (value === '') {
                    validationMessage = 'The name field is required.';
                    this.firstNameError.removeClass('valid');
                    this.firstNameError.show();
                } else {
                    validationMessage = 'The name must contain only letter and be minimum of 2 characters.';
                    this.firstNameError.removeClass('valid');
                    this.firstNameError.show();
                }

                this.firstNameError.html(validationMessage);
                this.scrollToError = this.firstNameInput;

                return ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)));
            },
            validateLastNameInput: function () {
                var validationMessage = '';
                var value = this.lastNameInput.val();

                if ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)) || (/^[\p{L}\d\- ]{2,50}$/u.test(value))) {
                    validationMessage = 'Now, that\'s a good last name.\n';
                    this.lastNameError.addClass('valid');
                    this.lastNameError.hide();
                } else if (value === '') {
                    validationMessage = 'The last name field is required.';
                    this.lastNameError.removeClass('valid');
                    this.lastNameError.show();
                } else {
                    validationMessage = 'The last name must contain only letter and be minimum of 2 characters.';
                    this.lastNameError.removeClass('valid');
                    this.lastNameError.show();
                }

                this.lastNameError.html(validationMessage);
                this.scrollToError = this.lastNameInput;

                return ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)));
            },
            validateCompanyNameInput: function () {
                var validationMessage = '';
                var value = this.companyNameInput.val();

                if (user_type == 0) {
                    return true
                }

                if ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)) || (/^[\p{L}\d\- ]{2,50}$/u.test(value))) {
                    validationMessage = 'Now, that\'s a good company name.\n';
                    this.companyNameError.addClass('valid');
                    this.companyNameError.hide();
                } else if (value === '') {
                    validationMessage = 'The company name field is required.';
                    this.companyNameError.removeClass('valid');
                    this.companyNameError.show();
                } else {
                    validationMessage = 'The company name must contain only letter and be minimum of 2 characters.';
                    this.companyNameError.removeClass('valid');
                    this.companyNameError.show();
                }

                this.companyNameError.html(validationMessage);
                this.scrollToError = this.companyNameInput;

                return ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)));
            },
            validateVatNumberInput: function () {
                var validationMessage = '';
                var value = this.vatNumberInput.val();

                if (user_type == 0) {
                    return true
                }

                if ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good vat number.\n';
                    this.vatNumberError.addClass('valid');
                    this.vatNumberError.hide();
                } else if (value === '') {
                    validationMessage = 'The vat number field is required.';
                    this.vatNumberError.removeClass('valid');
                    this.vatNumberError.show();
                } else {
                    validationMessage = 'The vat number must contain only letter and be minimum of 2 characters.';
                    this.vatNumberError.removeClass('valid');
                    this.vatNumberError.show();
                }

                this.vatNumberError.html(validationMessage);
                this.scrollToError = this.vatNumberInput;

                return ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)));
            },
            validateMobileNumberInput: function () {
                var validationMessage = '';
                var value = this.mobileNumberInput.val();

                if ((/^[0-9 ]{7,50}$/.test(value.trim())) || (/^(\+)?[0-9 ]{6,50}$/.test(value.trim()))) {
                    validationMessage = 'Now, that\'s a good phone number.\n';
                    this.mobileNumberError.addClass('valid');
                    this.mobileNumberError.hide();
                } else if (value === '') {
                    validationMessage = 'Phone number is required.';
                    this.mobileNumberError.removeClass('valid');
                    this.mobileNumberError.show();
                } else {
                    validationMessage = 'Minimum 7 digits.';
                    this.mobileNumberError.removeClass('valid');
                    this.mobileNumberError.show();
                }

                this.mobileNumberError.html(validationMessage);
                this.scrollToError = this.mobileNumberInput;

                return ((/^[0-9 ]{7,50}$/.test(value.trim())) || (/^(\+)?[0-9 ]{6,50}$/.test(value.trim())));
            },
            validateEmailInput: function () {
                var validationMessage = '';
                var value = this.emailInput.val();
                var action = 'verifyEmail';
                let self = this;
                if (timer) {
                    clearTimeout(timer)
                }
                timer = setTimeout(async function() {
                    var response = await onVerify(action, value);
                    if (response.status) {
                        validationMessage = 'Email is in use already.';
                        self.emailError.removeClass('valid');
                        self.emailError.show();
                    } else {
                        if ((/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value))) {
                            validationMessage = 'Now, that\'s a good email.\n';
                            self.emailError.addClass('valid');
                            self.emailError.hide();
                        } else if (value === '') {
                            validationMessage = 'The email field is required.';
                            self.emailError.removeClass('valid');
                            self.emailError.show();
                        } else {
                            validationMessage = 'Email is not valid.';
                            self.emailError.removeClass('valid');
                            self.emailError.show();
                        }
                    }

                    self.emailError.html(validationMessage);
                    self.scrollToError = self.emailInput;
                }, 1000)

                return ((/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value)));
            },
            validateStreetNameInput: function () {
                var validationMessage = '';
                var value = this.streetNameInput.val();

                if ((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)) || (/^[\p{L}\d\- ]{3,50}$/u.test(value))) {
                    validationMessage = 'Now, that\'s a good street name.\n';
                    this.streetNameError.addClass('valid');
                    this.streetNameError.hide();
                } else if (value === '') {
                    validationMessage = 'Street name is required.';
                    this.streetNameError.removeClass('valid');
                    this.streetNameError.show();
                } else {
                    validationMessage = 'The street name must contain letter and number and be minimum of 3 characters.';
                    this.streetNameError.removeClass('valid');
                    this.streetNameError.show();
                }

                this.streetNameError.html(validationMessage);
                this.scrollToError = this.streetNameInput;

                return ((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)));
            },
            validateHouseNumberInput: function () {
                var validationMessage = '';
                var value = this.houseNumberInput.val();

                if ((/^.{1,50}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good house number.\n';
                    this.houseNumberError.addClass('valid');
                    this.houseNumberError.hide();
                } else if (value === '') {
                    validationMessage = 'House number is required.';
                    this.houseNumberError.removeClass('valid');
                    this.houseNumberError.show();
                } else {
                    validationMessage = 'The house number must contain letter and number and be minimum of 3 characters.';
                    this.houseNumberError.removeClass('valid');
                    this.houseNumberError.show();
                }

                this.houseNumberError.html(validationMessage);
                this.scrollToError = this.houseNumberInput;

                return ((/^.{1,50}$/.test(value)));
            },
            validateCityInput: function () {
                var validationMessage = '';
                var value = this.cityInput.val();

                if ((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)) || (/^[\p{L}\d\- ]{3,50}$/u.test(value))) {
                    validationMessage = 'Now, that\'s a good city name.\n';
                    this.cityError.addClass('valid');
                    this.cityError.hide();
                } else if (value === '') {
                    validationMessage = 'The city name field is required.';
                    this.cityError.removeClass('valid');
                    this.cityError.show();
                } else {
                    validationMessage = 'The city name must contain letter and number and be minimum of 3 characters.';
                    this.cityError.removeClass('valid');
                    this.cityError.show();
                }

                this.cityError.html(validationMessage);
                this.scrollToError = this.cityInput;

                return ((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)));
            },
            validatePostalCodeInput: function () {
                var validationMessage = '';
                var value = this.postalCodeInput.val();

                if ((/^.{3,50}$/.test(value))) {
                    validationMessage = 'Now, that\'s a good zip code.\n';
                    this.postalCodeError.addClass('valid');
                    this.postalCodeError.hide();
                } else if (value === '') {
                    validationMessage = 'Zip code is required.';
                    this.postalCodeError.removeClass('valid');
                    this.postalCodeError.show();
                } else {
                    validationMessage = 'Minimum 3 characters / digits.';
                    this.postalCodeError.removeClass('valid');
                    this.postalCodeError.show();
                }

                this.postalCodeError.html(validationMessage);
                this.scrollToError = this.postalCodeInput;

                return ((/^.{3,50}$/.test(value)));
            },
            validateStateInput: function () {
                var validationMessage = '';
                var value = this.stateInput.val();

                if ((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)) || (/^[\p{L}\d\- ]{3,50}$/u.test(value))) {
                    validationMessage = 'Now, that\'s a good area name.\n';
                    this.stateError.addClass('valid');
                    this.stateError.hide();
                } else if (value === '') {
                    validationMessage = 'The area name field is required.';
                    this.stateError.removeClass('valid');
                    this.stateError.show();
                } else {
                    validationMessage = 'The area name must contain letter and number and be minimum of 3 characters.';
                    this.stateError.removeClass('valid');
                    this.stateError.show();
                }

                this.stateError.html(validationMessage);
                this.scrollToError = this.stateInput;

                return ((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)));
            },
            validateCountryInput: function () {
                var validationMessage = '';
                var value = this.countryInput.val();

                if ((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)) || (/^[\p{L}\d\- ]{3,50}$/u.test(value))) {
                    validationMessage = 'Now, that\'s a good country name.\n';
                    this.countryError.addClass('valid');
                    this.countryError.hide();
                } else if (value === '') {
                    validationMessage = 'Country is required.';
                    this.countryError.removeClass('valid');
                    this.countryError.show();
                } else {
                    validationMessage = 'Minimum 3 characters.';
                    this.countryError.removeClass('valid');
                    this.countryError.show();
                }

                this.countryError.html(validationMessage);
                this.scrollToError = this.countryInput;

                return ((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)));
            },
            validateUsernameInput: function () {
                var validationMessage = '';
                var value = this.usernameInput.val();
                var action = 'verifyUsername';
                let self = this;
                if (timer) {
                    clearTimeout(timer)
                }
                timer = setTimeout(async function() {
                    var response = await onVerify(action, value);
                    if (response.status) {
                        validationMessage = 'The username seems to be exist !';
                        self.usernameError.removeClass('valid');
                        self.usernameError.show();
                    } else {
                        if ((/^.{6,50}$/.test(value))) {
                            validationMessage = 'Now, that\'s a good username.\n';
                            self.usernameError.addClass('valid');
                            self.usernameError.hide();
                        } else if (value === '') {
                            validationMessage = 'Username is required.';
                            self.usernameError.removeClass('valid');
                            self.usernameError.show();
                        } else {
                            validationMessage = 'Minimum 6 characters / digits.';
                            self.usernameError.removeClass('valid');
                            self.usernameError.show();
                        }
                    }

                    self.usernameError.html(validationMessage);
                    self.scrollToError = self.usernameInput;
                }, 1000);

                return ((/^.{6,50}$/.test(value)));
            },
            validatePasswordInput: function () {
                var validationMessage = '';
                var value = this.passwordInput.val();

                if ((/\d/.test(value)) && (/[a-zA-Z]/.test(value)) && (/^.{7,}$/.test(value))) {
                    validationMessage = 'Now, that\'s a secure password.\n';
                    this.validRegisterPassword();
                } else if ((/\d/.test(value)) && (/[a-zA-Z]/.test(value))) {
                    validationMessage = 'Password must contain a <strong><del>letter</del></strong> and a <strong><del>number</del></strong>, and be minimum of <strong>7 characters</strong>.';
                    this.errorRegisterPassword();
                } else if ((/^.{7,}$/.test(value)) && (/[a-zA-Z]/.test(value))) {
                    validationMessage = 'Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong><del>7 characters</del></strong>.';
                    this.errorRegisterPassword();
                } else if ((/^.{7,}$/.test(value)) && (/\d/.test(value))) {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong><del>7 characters</del></strong>.';
                    this.errorRegisterPassword();
                } else if ((/^.{7,}$/.test(value))) {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong><del>7 characters</del></strong>.';
                    this.errorRegisterPassword();
                } else if ((/\d/.test(value))) {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong>7 characters</strong>.';
                    this.errorRegisterPassword();
                } else if ((/[a-zA-Z]/.test(value))) {
                    validationMessage = 'Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.';
                    this.errorRegisterPassword();
                } else if (value === '') {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.';
                    this.errorRegisterPassword();
                } else {
                    validationMessage = 'Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.';
                    this.errorRegisterPassword();
                }

                this.passwordError.html(validationMessage);
                this.scrollToError = this.passwordInput;

                return (/\d/.test(value)) && (/[a-zA-Z]/.test(value)) && (/^.{7,}$/.test(value));
            },
            validRegisterPassword: function () {
                this.passwordError.addClass('valid');
                this.passwordError.hide();
            },
            errorRegisterPassword: function () {
                this.passwordError.removeClass('valid');
                this.passwordError.show();
            },
            validateSponsorInput: function () {
                var validationMessage = '';
                var value = this.refererNumberInput.val();

                if(this.refererNumberInput.val() || this.seenOnMediaInput.is(':checked') ) {
                    return true
                }

                this.scrollToError = this.refererNumberInput;

                return false;
            },
            datePicker: function () {
                this.dateBirth.datepicker({
                    autoclose: true,
                    todayHighlight: true,
                    endDate: '-18y',
                    format: 'yyyy-mm-dd',
                    showOnFocus: true
                }).on('hide', function () {
                    if (!this.firstHide) {
                        if (!$(this).is(":focus")) {
                            this.firstHide = true;
                            // this will inadvertently call show (we're trying to hide!)
                            this.focus();
                        }
                    } else {
                        this.firstHide = false;
                    }
                }).on('show', function () {
                    if (this.firstHide) {
                        // careful, we have an infinite loop!
                        $(this).datepicker('hide');
                    }
                })
            },
            addLoader: function () {
                this.submitButton.addClass('loader');
            },
            removeLoader: function () {
                this.submitButton.removeClass('loader');
            }
        };

        $(document).ready(function () {
            register.init();

            if(!$('#refererNumber').val())
            {
                alert('Please contact info@buddies.net');
                document.location.href = "{{route('login')}}";
            }
        });

        function onVerify(action, value) {
            return $.ajax({
                url: '{{ route('auth.verify') }}',
                type: 'POST',
                data: {
                    key: action,
                    value: value
                }
            });
        }

        $('.select-type').on('click', function() {
            user_type = $(this).attr('attr-data');
            $('#userType').val(user_type);
            $('.register-input-section').removeClass('d-none');
            $('.select-type-section').addClass('d-none');
            $('.select-type-section').removeClass('d-flex');
            if (user_type == 0) {
                $('.registration-title').html('CUSTOMER REGISTRATION');
                $('.company-details-section').addClass('d-none');
            }
            else if (user_type == 1) {
                $('.registration-title').html('COACH REGISTRATION');
                $('.company-details-section').addClass('d-none');
            }
            else if (user_type == 2) {
                $('.registration-title').html('COMPANY REGISTRATION');
            }
        })
    </script>
@endsection