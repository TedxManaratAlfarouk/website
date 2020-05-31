@extends('layouts.app')

@section('content')
 <section class="ftco-section" id="register">
    <div class="container">
      <div class="row">
        <div class="form-v10">
        <div class="page-content">
          <div class="form-v10-content">
            <form class="form-detail" action="#" method="post" id="myform">
              <div class="form-left">
                <h2>General Infomation</h2>
                <div class="form-row">
                  <select name="committe">
                      <option class="option" value="">Committe</option>
                      <option class="option" value="">IT</option>
                      <option class="option" value="">HR</option>
                      <option class="option" value="">PR</option>
                      <option class="option" value="">ER</option>
                      <option class="option" value="">Coaching</option>
                      <option class="option" value="">Design</option>
                      <option class="option" value="">Media</option>
                      <option class="option" value="">Branding</option>
                  </select>
                  <span class="select-btn">
                      <i class="zmdi zmdi-chevron-down"></i>
                  </span>
                </div>
                <div class="form-group">
                  <div class="form-row form-row-1">
                    <input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
                  </div>
                  <div class="form-row form-row-2">
                    <input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
                  </div>
                </div>
                <div class="form-row">
                  <select name="position">
                      <option value="head">Head</option>
                      <option value="member">Member</option>
                  </select>
                  <span class="select-btn">
                      <i class="zmdi zmdi-chevron-down"></i>
                  </span>
                </div>
              </div>
              <div class="form-right">
                <h2>Contact Details</h2>
                <div class="form-row">
                  <input type="text" class="input-email" placeholder="Email" required>
                </div>
                <div class="form-row">
                  <input type="text" class="input-text" placeholder="Registration Key" required>
                </div>
                <div class="form-group">
                  <div class="form-row form-row-2">
                    <span class="select-btn">
                        <i class="zmdi zmdi-chevron-down"></i>
                    </span>
                  </div>
                </div>
                <div class="form-row">
                  <span class="select-btn">
                      <i class="zmdi zmdi-chevron-down"></i>
                  </span>
                </div>
              

                <div class="form-checkbox">
                  <label class="container"><p>I do accept the <a href="https://www.ted.com/participate/organize-a-local-tedx-event/before-you-start/tedx-rules"
                     target="_blank"class="text">Terms and Conditions</a></p>
                      <input type="checkbox" name="checkbox">
                      <span class="checkmark"></span>
                  </label>
                </div>
                <div class="form-row-last">
                  <input type="submit" name="register" class="register" value="Register">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
@endsection

