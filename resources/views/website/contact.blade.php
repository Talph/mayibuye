@extends('layouts.contact')

@section('content')
@include('partials.quick-contact')
<iframe title="Mayibuye i-Afrika Address" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.7515445105464!2d28.12969745124143!3d-25.976187583459055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956f637717cb87%3A0x958e702dd975f3d9!2sMayibuye%20I-Afrika%20Trading!5e0!3m2!1sen!2sza!4v1610994166526!5m2!1sen!2sza" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('partials.alert')
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Pay us a visit.</h2>
                        <ul class="list-unstyled text-small">
                          <li>526 Constantia Square Office Park</li>
                          <li>16th Road</li>
                          <li>Midrand, Johannesburg</li>
                          <li>1685</li>
                          <br/>
                          <h2>Contact us.</h2>
                          <li>Tel: <a href="tel:+27 877 016 314">+27 877 016 314</a></li>
                          <li>Fax: <a href="tel:086 767 2586">086 767 2586</a></li>
                          <br/>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>We love to hear from you!</h2>
                        <small>Please fill in the form and our consultant will get back to you at the earlist possible time.</small>
                    <form id="contact-form" action="{{route('contact-send')}}" method="POST" enctype="multipart/form-data" onsubmit="disableButton()">
                        @csrf
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="first__name">First name: *</label>
                        <input name="first__name" type="text" class="form-control" value="{!! old('first__name') !!}" id="first__name" required>
                        <span role="alert" class="is-valid">{{ $errors->first('first__name') }}</span> 

                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="last__name">Last name: *</label>
                        <input name="last__name" type="text" class="form-control" value="{!! old('last__name') !!}" id="last__name" required>
                        <span role="alert" class="is-valid">{{ $errors->first('last__name') }}</span> 

                      </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="__phone">Telephone: *</label>
                          <input name="__phone" type="tel" class="form-control" value="{!! old('__phone') !!}" id="__phone" required>
                        <span role="alert" class="is-valid">{{ $errors->first('__phone') }}</span> 

                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="__email">Email Address: *</label>
                          <input name="__email" type="email" class="form-control" value="{!! old('__email') !!}" id="__email" required>
                        <span role="alert" class="is-valid">{{ $errors->first('__email') }}</span> 

                        </div>
                      </div>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="message">Message: *</label>
                        <textarea name="__message" type="text" class="form-control" id="message" aria-describedby="messageFeedback" required>{!! old('__message') !!}</textarea>
                        <span role="alert" class="is-valid">{{ $errors->first('__message') }}</span> 
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <label for="file">Document: <span class="small">PDF | DOCX | XLSX | PPTX</span> </label>
                          <input name="__document" type="file" class="form-control-file" value="{!! old('__document') !!}" id="file" aria-describedby="fileFeedback"/>
                          <span role="alert" class="is-valid">{{ $errors->first('__document') }}</span>
                        </div>
                      </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input name="__terms" class="form-check-input" type="checkbox" id="__terms" aria-describedby="termsFeedback">
                        <label class="form-check-label" for="__terms">
                         I Agree to the website terms and conditions
                        </label>
                      </div>
                    </div>
                    <button class="g-recaptcha btn btn-primary" 
                    id="btn"
        data-sitekey="6LcMokgaAAAAAESIxTpNJv4jMctO7RDfzYLJfIXB" 
        data-callback='onSubmit' 
        data-action='submit'>Submit form</button>
                  </form>

                  </div>

                  </div>
            </div>
        </div>

    </div>
</div>
@include('partials.footer')
@include('partials.reCaptcha.reCaptcha')
<script type="text/javascript">
    function disableButton(){
        var btn = document.getElementById('btn');
        btn.disabled = true;
        btn.innerText = 'Submitting...';
        setTimeout("$('#btn')", 2000);
    };

        </script>
@endsection
