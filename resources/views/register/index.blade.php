@extends('layouts.app')

@section('content')
    <!-- ================= HERO ================= -->
    <section class="register-hero">

        <div class="container">

            <div class="register-hero-content">

                <span class="register-hero-label">
                    عضویت در آکادمی
                </span>

                <h1>
                    ثبت‌نام در آکادمی نقش آزاد
                </h1>

                <p>
                    اولین قدم برای شروع مسیر حرفه‌ای فوتبال
                </p>


                <div class="register-breadcrumb">

                    <a href="/">
                        خانه
                    </a>

                    <i class="bi bi-chevron-left"></i>

                    <span>
                        ثبت‌نام
                    </span>

                </div>

            </div>

        </div>

    </section>

    <!-- ================= REGISTER ================= -->
    <section class="register-section">

        <div class="container">

            <div class="register-wrapper">


                <!-- ================= FORM ================= -->

                <div class="register-form-card">


                    <div class="form-header">

                        <div class="form-header-icon">

                            <i class="bi bi-person-plus-fill"></i>

                        </div>


                        <div>

                            <span>
                                فرم ثبت‌نام
                            </span>

                            <h2>
                                اطلاعات بازیکن
                            </h2>

                            <p>
                                لطفاً اطلاعات زیر را با دقت تکمیل کنید.
                            </p>

                        </div>

                    </div>


                    <form action="{{ route('player.registration.store') }}" method="POST" id="academyRegisterForm" class="academy-register-form">

                        @csrf


                        <!-- نام و نام خانوادگی -->

                        <div class="row g-4">

                            {{-- name --}}
                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="name">

                                        <i class="bi bi-person"></i>

                                        نام

                                        <span>*</span>

                                    </label>


                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" placeholder="نام بازیکن را وارد کنید" required>


                                    @error('first_name')
                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>
                                    @enderror

                                </div>

                            </div>


                            {{-- family --}}
                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="family">

                                        <i class="bi bi-person"></i>

                                        نام خانوادگی

                                        <span>*</span>

                                    </label>


                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" placeholder="نام خانوادگی را وارد کنید" required>


                                    @error('last_name')
                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>
                                    @enderror

                                </div>

                            </div>


                        </div>



                        <!-- نام پدر + تاریخ تولد -->

                        <div class="row g-4">

                            {{-- father name --}}
                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="father_name">

                                        <i class="bi bi-person-vcard"></i>

                                        نام پدر

                                        <span>*</span>

                                    </label>


                                    <input type="text" name="father_name" id="father_name"
                                        class="form-control @error('father_name') is-invalid @enderror"
                                        value="{{ old('father_name') }}" placeholder="نام پدر را وارد کنید" required>


                                    @error('father_name')
                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>
                                    @enderror

                                </div>

                            </div>


                            {{-- birth date --}}
                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="birth_date">

                                        <i class="bi bi-calendar3"></i>

                                        تاریخ تولد

                                        <span>*</span>

                                    </label>

                                    <div class="date-input-wrapper">

                                        <input type="text" id="birth_date" name="birth_date"
                                            class="form-control @error('birth_date') is-invalid @enderror"
                                            value="{{ old('birth_date') }}" placeholder="انتخاب تاریخ تولد"
                                            autocomplete="off" readonly>

                                        <i class="bi bi-calendar-event date-icon"></i>

                                    </div>

                                    <small class="form-help">

                                        برای انتخاب تاریخ روی کادر کلیک کنید.

                                    </small>

                                    @error('birth_date')
                                        <div class="invalid-feedback d-block">

                                            {{ $message }}

                                        </div>
                                    @enderror

                                </div>

                            </div>


                        </div>



                        <!-- تلفن پدر و مادر -->

                        <div class="row g-4">

                            {{-- father phone --}}
                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="father_phone">

                                        <i class="bi bi-phone"></i>

                                        شماره همراه پدر

                                        <span>*</span>

                                    </label>


                                    <input type="tel" name="father_phone" id="father_phone"
                                        class="form-control phone-input @error('father_phone') is-invalid @enderror"
                                        value="{{ old('father_phone') }}" placeholder="09123456789" maxlength="11"
                                        inputmode="numeric" dir="ltr" required>


                                    @error('father_phone')
                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>
                                    @enderror

                                </div>

                            </div>


                            {{-- mother phone --}}
                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="mother_phone">

                                        <i class="bi bi-phone"></i>

                                        شماره همراه مادر

                                        <span>*</span>

                                    </label>


                                    <input type="tel" name="mother_phone" id="mother_phone"
                                        class="form-control phone-input @error('mother_phone') is-invalid @enderror"
                                        value="{{ old('mother_phone') }}" placeholder="09123456789" maxlength="11"
                                        inputmode="numeric" dir="ltr" required>


                                    @error('mother_phone')
                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>
                                    @enderror

                                </div>

                            </div>


                        </div>



                        <!-- پست مورد علاقه -->
                        <div class="form-group">

                            <label for="position">

                                <i class="bi bi-dribbble"></i>

                                پست مورد علاقه

                                <span>*</span>

                            </label>


                            <div class="select-wrapper">

                                <select name="position" id="position"
                                    class="form-select @error('position') is-invalid @enderror" required>

                                    <option value="" disabled {{ old('favorite_position') ? '' : 'selected' }}>
                                        پست مورد علاقه بازیکن را انتخاب کنید
                                    </option>


                                    <option value="goalkeeper"
                                        {{ old('position') == 'goalkeeper' ? 'selected' : '' }}>

                                        دروازه‌بان

                                    </option>


                                    <option value="defender"
                                        {{ old('position') == 'defender' ? 'selected' : '' }}>

                                        مدافع

                                    </option>


                                    <option value="midfielder"
                                        {{ old('position') == 'midfielder' ? 'selected' : '' }}>

                                        هافبک

                                    </option>


                                    <option value="winger" {{ old('position') == 'winger' ? 'selected' : '' }}>

                                        وینگر

                                    </option>


                                    <option value="forward" {{ old('position') == 'forward' ? 'selected' : '' }}>

                                        مهاجم

                                    </option>


                                </select>

                            </div>


                            @error('position')
                                <div class="invalid-feedback d-block">

                                    {{ $message }}

                                </div>
                            @enderror

                        </div>



                        <!-- ================= Preferred Foot ================= -->
                        <div class="form-group preferred-foot-group">


                            <div class="foot-title">

                                <div>

                                    <i class="bi bi-person-walking"></i>

                                    <span>
                                        پای تخصصی
                                    </span>

                                </div>


                                <small>
                                    پای غالب بازیکن را انتخاب کنید
                                </small>

                            </div>



                            <div class="foot-options">


                                <!-- RIGHT -->

                                <label class="foot-option">


                                    <input type="radio" name="foot" value="right"
                                        {{ old('foot', 'right') == 'right' ? 'checked' : '' }}>


                                    <span class="foot-card">


                                        <span class="radio-circle"></span>


                                        <span class="foot-icon">

                                            <i class="bi bi-person-walking"></i>

                                        </span>


                                        <span class="foot-text">

                                            <strong>
                                                پای راست
                                            </strong>

                                            <small>
                                                Right Foot
                                            </small>

                                        </span>


                                    </span>


                                </label>



                                <!-- LEFT -->

                                <label class="foot-option">


                                    <input type="radio" name="foot" value="left"
                                        {{ old('foot') == 'left' ? 'checked' : '' }}>


                                    <span class="foot-card">


                                        <span class="radio-circle"></span>


                                        <span class="foot-icon">

                                            <i class="bi bi-person-walking"></i>

                                        </span>


                                        <span class="foot-text">

                                            <strong>
                                                پای چپ
                                            </strong>

                                            <small>
                                                Left Foot
                                            </small>

                                        </span>


                                    </span>


                                </label>


                            </div>


                            @error('preferred_foot')
                                <div class="invalid-feedback d-block">

                                    {{ $message }}

                                </div>
                            @enderror


                        </div>


                        <!-- Submit -->
                        <div class="register-submit-wrapper">


                            <button type="submit" class="register-submit-btn">

                                <span>
                                    ثبت اطلاعات و ارسال درخواست
                                </span>

                                <i class="bi bi-arrow-left"></i>

                            </button>


                            <p class="register-notice">

                                <i class="bi bi-shield-check"></i>

                                اطلاعات شما فقط جهت ثبت‌نام و هماهنگی آکادمی استفاده خواهد شد.

                            </p>


                        </div>


                    </form>


                </div>


            </div>

        </div>

    </section>
@endsection
