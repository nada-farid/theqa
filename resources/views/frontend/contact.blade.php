@extends('frontend.layouts.main')

@section('content')
    @include('frontend.partials.breadcrumb', [
        'heading' => trans('front.Contact'),
        'heading2' => trans('front.Contact'),
    ])

    <div class="about-page mt-5 ">
        <div class="container">

            <div class="row text-center">
                <p class="">
                    {{ $setting->contact_text }}
                </p>


            </div>

        </div>
        <div class="contacts bg-grey mt-5 ">
            <div class="container">

                <div class="row">
                    <div class="col-md-7">
                        <div class="contact-info">
                            <h4>{{ trans('front.GETINTOUCH') }} </h4>


                            <ul>
                                <li>
                                    <div class="contact-det">
                                        <div class="icon"> <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="30px" fill="#fff">
                                                <path
                                                    d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                            </svg></i></div>
                                        <div class="info">
                                            <p class="title">{{ trans('front.Address') }}</p>
                                            <p>{{ $setting->address }}</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="contact-det">
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="30px" fill="#fff">
                                                <path
                                                    d="M280-40q-33 0-56.5-23.5T200-120v-720q0-33 23.5-56.5T280-920h400q33 0 56.5 23.5T760-840v720q0 33-23.5 56.5T680-40H280Zm0-200v120h400v-120H280Zm200 100q17 0 28.5-11.5T520-180q0-17-11.5-28.5T480-220q-17 0-28.5 11.5T440-180q0 17 11.5 28.5T480-140ZM280-320h400v-400H280v400Zm0-480h400v-40H280v40Zm0 560v120-120Zm0-560v-40 40Z" />
                                            </svg></div>
                                        <div class="info">
                                            <p class="title">{{ trans('front.Phone') }}</p>
                                            <p>{{ $setting->phone }}</p>
                                        </div>
                                    </div>
                                </li>


                                <li>
                                    <div class="contact-det">
                                        <div class="icon"><i class="fa-brands fa-whatsapp"></i></div>
                                        <div class="info">
                                            <p class="title">{{ trans('front.WhatsApp') }}</p>
                                            <p>{{ $setting->whatsapp }}</p>
                                        </div>
                                    </div>
                                </li>


                                <li>
                                    <div class="contact-det">
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="30px" fill="#fff">
                                                <path
                                                    d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                                            </svg></div>
                                        <div class="info">
                                            <p class="title">{{ trans('front.Email') }}</p>
                                            <p>{{ $setting->email }}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div class="social">
                            <h4>{{ trans('front.FollowUs') }}</h4>
                            <ul>
                                @if ($setting->twitter)
                                    <li><a href="{{ $setting->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                                @endif
                                @if ($setting->facebook)
                                    <li><a href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                @endif
                                @if ($setting->youtube)
                                    <li><a href="{{ $setting->youtube }}"><i class="fa-brands fa-youtube"></i></a></li>
                                @endif
                                @if ($setting->instagram)
                                    <li><a href="{{ $setting->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                                @endif
                                @if ($setting->whatsapp)
                                    <li><a href="{{ $setting->whatsapp }}"><i class="fa-brands fa-whatsapp"></i></a></li>
                                @endif
                                @if ($setting->snapchat)
                                    <li><a href="{{ $setting->snapchat }}"><i class="fa-brands fa-snapchat"></i></a></li>
                                @endif
                                @if ($setting->linkedin)
                                    <li><a href="{{ $setting->linkedin }}"><i class="fa-brands fa-linkedin"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-form">
                            <form id="contact" action="{{ route('frontend.contact.store') }}" method="post">
                                @csrf
                                <h3>{{ trans('front.ContactForm') }}</h3>
                                <h4>{{ trans('front.ContactUsTodayReply') }}</h4>
                                <fieldset>
                                    <input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                                        placeholder=" {{ trans('front.Name') }} " type="text" tabindex="1" required
                                        autofocus value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </fieldset>
                                <fieldset>
                                    <input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                                        placeholder="{{ trans('front.Email') }}"type="email" tabindex="2" required
                                        value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </fieldset>
                                <fieldset>
                                    <input class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone"
                                        placeholder="{{ trans('front.Phone') }}" type="tel" tabindex="3" required
                                        value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                </fieldset>
                                {{-- <fieldset>
                                    <input class="{{ $errors->has('website') ? 'is-invalid' : '' }}"
                                        name="website"placeholder="{{ trans('front.Website') }}" id="website"
                                        type="url" tabindex="4" value="{{ old('website') }}">
                                    @if ($errors->has('website'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('website') }}
                                        </div>
                                    @endif
                                </fieldset> --}}
                                <fieldset>
                                    <textarea class="{{ $errors->has('message') ? 'is-invalid' : '' }}" name="message"
                                        placeholder="{{ trans('front.TypeYourMessage') }}...." tabindex="5" required autofocus>{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('message') }}
                                        </div>
                                    @endif
                                </fieldset>
                                <fieldset>
                                    <button name="submit" type="submit" id="contact-submit"
                                        data-submit="...Sending">{{ trans('front.Submit') }}</button>
                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>

            </div>



        </div>

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804"
                        frameborder="0" style="border:0"></iframe>

                </div>
            </div>
        </div>

    </div>
@endsection
