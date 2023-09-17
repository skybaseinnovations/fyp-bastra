@extends('front.component.layout');
@php($register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register'))

@section('title', 'Contact')

@section('content')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans:ital,wght@0,400;1,300&family=Roboto:wght@500&family=Source+Code+Pro:ital@1&display=swap"
        rel="stylesheet">

    <style>
        /* Section */

        /*.section {*/
        /*    padding: 5em;*/
        /*    width: 1300px;*/
        /*}*/
    </style>
    <style>
        /* Section */

        .section {
            display: flex;
            padding: 10em;
            height: 100vh;
            /*width: 1300px;*/
        }

        .photo3 {
            flex-wrap: wrap;

        }

        /*.photo4 {*/
        /*    flex-wrap: wrap;*/
        /*    justify-content: center;*/
        /*}*/

        .info1 {
            height: 500px;
            flex: 1;
            padding: 1rem;
        }

        label {
            color: #858383;
        }

        @media (max-width: 600px) {
            .section {
                flex-direction: column;
            }
        }
      .input-group-text
       {
        padding:0.67rem 0.75rem !important;
      }
    </style>

    <section>
        <div class="section">
            <div class="info1 mr-5">
                <form action="{{ route('register') }}" method="post">

                    <h4 class=" w-50 m-auto">Register Here</h4>
                    <br>
                    @csrf

{{--                    Name field--}}
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>

                        <div class="input-group-append">
                            <div class="input-group-text" >
                                <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                            </div>
                        </div>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

{{--                    Email field--}}
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                            </div>
                        </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

{{--                    Address field--}}
                    <div class="input-group mb-3">
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                               value="{{ old('address') }}" placeholder="Address">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                            </div>
                        </div>

                        @error('address')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

{{--                    Password field--}}
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                               placeholder="{{ __('adminlte::adminlte.password') }}">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                            </div>
                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

{{--                    Confirm password field--}}
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation"
                               class="form-control @error('password_confirmation') is-invalid @enderror"
                               placeholder="{{ __('adminlte::adminlte.retype_password') }}">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                            </div>
                        </div>

                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

{{--                    Register button--}}
                    <button type="submit"
                            class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                        <span class="fas fa-user-plus"></span>
                        {{ __('adminlte::adminlte.register') }}
                    </button>

                </form>

            </div>
            <div class="photo3 info1 p-0" style="border-left: 0.001rem solid #dedede">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><g id="freepik--background-simple--inject-38"><path d="M215.89,328.78c-14-15.22-25.15-34.72-19.52-56,2.14-8.1,6.63-16.12,7.32-24.2.67-7.74-2.23-14.84-5.55-21.46A162.14,162.14,0,0,0,162,179.75c-9.45-8.57-20-16.23-28.6-25.48S118.16,133.82,118,121c-.15-9.38,4.21-20.41,14.22-25.93s21.95-3.69,32-1.08c32.12,8.37,61.14,22,90,35.51,23.25,10.92,46.72,22,65.74,37.47,22.43,18.29,37.87,42.09,53.05,65.61,6.33,9.8,12.73,21.52,6.66,33.28-6.41,12.41-23.81,18.89-32.48,30.51-6.56,8.79-7.12,19.24-5.68,28.54s4.62,18.19,4.66,27.78-3.81,20.52-13.27,27.18c-17.6,12.41-44.11-3.32-57.66-9.35C252.08,360.3,231.88,346.1,215.89,328.78Z" style="fill:#BE8DEB"></path><path d="M215.89,328.78c-14-15.22-25.15-34.72-19.52-56,2.14-8.1,6.63-16.12,7.32-24.2.67-7.74-2.23-14.84-5.55-21.46A162.14,162.14,0,0,0,162,179.75c-9.45-8.57-20-16.23-28.6-25.48S118.16,133.82,118,121c-.15-9.38,4.21-20.41,14.22-25.93s21.95-3.69,32-1.08c32.12,8.37,61.14,22,90,35.51,23.25,10.92,46.72,22,65.74,37.47,22.43,18.29,37.87,42.09,53.05,65.61,6.33,9.8,12.73,21.52,6.66,33.28-6.41,12.41-23.81,18.89-32.48,30.51-6.56,8.79-7.12,19.24-5.68,28.54s4.62,18.19,4.66,27.78-3.81,20.52-13.27,27.18c-17.6,12.41-44.11-3.32-57.66-9.35C252.08,360.3,231.88,346.1,215.89,328.78Z" style="fill:#fff;opacity:0.9"></path></g><g id="freepik--Shadow--inject-38"><ellipse id="freepik--path--inject-38" cx="250" cy="415.69" rx="193.89" ry="11.32" style="fill:#f5f5f5"></ellipse></g><g id="freepik--character-2--inject-38"><path d="M306.09,156.35c-.67,2.71-1.43,5.39-2.15,8.08s-1.51,5.36-2.31,8c-1.57,5.35-3.24,10.67-4.94,16l-.16.49-.06.15c-1.35,3-2.76,6.06-4.15,9.07s-2.84,6-4.26,9c-2.91,6-5.87,11.95-9.06,17.82a3.24,3.24,0,0,1-6-2.42h0c1.81-6.43,3.85-12.76,5.95-19.07,1.07-3.14,2.12-6.29,3.24-9.42s2.2-6.27,3.35-9.38l-.22.65c1.22-5.44,2.49-10.87,3.85-16.28.66-2.7,1.37-5.4,2.08-8.09s1.45-5.38,2.25-8a6.51,6.51,0,0,1,12.55,3.42Z" style="fill:#BE8DEB"></path><path d="M306.09,156.35c-.67,2.71-1.43,5.39-2.15,8.08s-1.51,5.36-2.31,8c-1.57,5.35-3.24,10.67-4.94,16l-.16.49-.06.15c-1.35,3-2.76,6.06-4.15,9.07s-2.84,6-4.26,9c-2.91,6-5.87,11.95-9.06,17.82a3.24,3.24,0,0,1-6-2.42h0c1.81-6.43,3.85-12.76,5.95-19.07,1.07-3.14,2.12-6.29,3.24-9.42s2.2-6.27,3.35-9.38l-.22.65c1.22-5.44,2.49-10.87,3.85-16.28.66-2.7,1.37-5.4,2.08-8.09s1.45-5.38,2.25-8a6.51,6.51,0,0,1,12.55,3.42Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M298.68,158.67c.55,1.65-2.21,30.41-2.21,30.41l6.69-20.93Z" style="opacity:0.2"></path><path d="M278.85,224.31,273.6,221l-5,13.34,8.16.7A12.86,12.86,0,0,0,278.85,224.31Z" style="fill:#ff8b7b"></path><polygon points="268.58 234.35 268.24 238.56 275.08 241.7 276.74 235.05 268.58 234.35" style="fill:#ff8b7b"></polygon><polygon points="304.86 396.37 303.14 413.97 293.53 413.06 294.3 393.88 304.86 396.37" style="fill:#ff8b7b"></polygon><path d="M289,413.28c-1.21-.07-2.44-.38-2.81-.92a.86.86,0,0,1,.08-1,1.2,1.2,0,0,1,.76-.5c1.66-.34,4.93,1.82,5.07,1.91a.25.25,0,0,1,.1.25.28.28,0,0,1-.2.18A17.7,17.7,0,0,1,289,413.28Zm-1.42-2a1.71,1.71,0,0,0-.45,0,.64.64,0,0,0-.47.29c-.19.28-.14.42-.08.5.41.67,2.87.84,4.69.73A10.63,10.63,0,0,0,287.58,411.29Z" style="fill:#BE8DEB"></path><path d="M292,413.19a.14.14,0,0,1-.09,0c-1.13-.59-3.34-2.85-3.06-3.94,0-.26.26-.57.9-.59a1.69,1.69,0,0,1,1.26.48c1.17,1.1,1.26,3.74,1.27,3.86a.24.24,0,0,1-.12.2A.22.22,0,0,1,292,413.19Zm-2.13-4.09-.13,0c-.41,0-.45.17-.47.23-.1.66,1.32,2.4,2.48,3.2a5.39,5.39,0,0,0-1.1-3.07,1.14,1.14,0,0,0-.78-.34Z" style="fill:#BE8DEB"></path><path d="M293.08,411.9l10.62.68a.86.86,0,0,1,.79.72l1.37,8.77a1.42,1.42,0,0,1-1.18,1.63,1,1,0,0,1-.3,0c-3.82-.31-7.22-.74-12-1-5.63-.36-4.25.41-10.87.08-4-.21-4.42-4.78-2.72-4.9,7.8-.48,8.75-2.76,11.91-5.34A3.41,3.41,0,0,1,293.08,411.9Z" style="fill:#263238"></path><path d="M293.08,411.9l10.62.68a.86.86,0,0,1,.79.72l1.37,8.77a1.42,1.42,0,0,1-1.18,1.63,1,1,0,0,1-.3,0c-3.82-.31-7.22-.74-12-1-5.63-.36-4.25.41-10.87.08-4-.21-4.42-4.78-2.72-4.9,7.8-.48,8.75-2.76,11.91-5.34A3.41,3.41,0,0,1,293.08,411.9Z" style="fill:#fff;opacity:0.4"></path><polygon points="293.87 404.52 301.04 404.18 303.98 405.37 303.62 409.03 293.69 408.6 293.87 404.52" style="opacity:0.2"></polygon><path d="M328.07,214,311.23,322l-5,83.84L291,405.15s-1.93-41.66.07-87c1.8-40.92,7.66-91,8.57-104.64Z" style="fill:#263238"></path><path d="M372.92,408.37l-7.66,3.07s-1.39-3.09-3.62-8.08l-1.61-3.6,9.08-3,.12,0c.06.2.13.4.19.59.34,1.08.65,2.08,1,3C372,405.29,372.92,408.37,372.92,408.37Z" style="fill:#ff8b7b"></path><path d="M360.05,410.69c-1.15.39-2.41.59-3,.23a.87.87,0,0,1-.31-1,1.17,1.17,0,0,1,.51-.75c1.4-1,5.25-.22,5.42-.19a.25.25,0,0,1,.19.19.24.24,0,0,1-.12.24A17.19,17.19,0,0,1,360.05,410.69Zm-2.09-1.3a1.87,1.87,0,0,0-.4.2.68.68,0,0,0-.33.46c-.06.32,0,.44.13.49.63.45,3-.33,4.61-1.14A10.81,10.81,0,0,0,358,409.39Z" style="fill:#BE8DEB"></path><path d="M362.75,409.46a.17.17,0,0,1-.1,0c-1.27-.11-4.18-1.36-4.34-2.46-.06-.26,0-.63.6-.9a1.71,1.71,0,0,1,1.35,0c1.51.56,2.61,3,2.67,3.08a.23.23,0,0,1,0,.23A.22.22,0,0,1,362.75,409.46Zm-3.55-3-.13,0c-.38.17-.35.33-.35.4.16.64,2.16,1.71,3.53,2a5.35,5.35,0,0,0-2.2-2.41,1.19,1.19,0,0,0-.85,0Z" style="fill:#BE8DEB"></path><path d="M363.92,407.73l8-2.83a.86.86,0,0,1,1,.36l4.64,7.58a1.43,1.43,0,0,1-.46,2,1.13,1.13,0,0,1-.27.13c-3.66,1.19-4.86,1.46-9.38,3-5.35,1.84-3.77,2-10,4.26-3.77,1.35-5.94-2.72-4.41-3.48C360.05,415.29,363.11,408,363.92,407.73Z" style="fill:#263238"></path><path d="M363.92,407.73l8-2.83a.86.86,0,0,1,1,.36l4.64,7.58a1.43,1.43,0,0,1-.46,2,1.13,1.13,0,0,1-.27.13c-3.66,1.19-4.86,1.46-9.38,3-5.35,1.84-3.77,2-10,4.26-3.77,1.35-5.94-2.72-4.41-3.48C360.05,415.29,363.11,408,363.92,407.73Z" style="fill:#fff;opacity:0.4"></path><path d="M370.38,400.33l-8.74,3-1.61-3.6,9.08-3,.31.55C369.76,398.39,370.07,399.39,370.38,400.33Z" style="opacity:0.2"></path><path d="M319.13,270.26l-4.6,29.5c-1.7-21.07,0-46.26,0-46.26Z" style="opacity:0.2"></path><path d="M307.64,216.51s17.65,88.63,24.06,114.59c4.74,19.23,26.59,70.11,26.59,70.11l14-4.86s-17-73.85-18.74-77.82c-2.34-5.22-.49-95-13.6-103.49Z" style="fill:#263238"></path><path d="M298.25,150.56a2.65,2.65,0,0,1,1.6-2.44c21.65-8.42,46.5-4.57,51.46-1.51,6.61,4.08-9.61,62.33-9.41,65.62A2.66,2.66,0,0,1,340,215c-4.87,1.17-27.14,1.59-31.16,1.47a72.38,72.38,0,0,1-8-.59,2.72,2.72,0,0,1-2.09-3.26C299.32,209.59,298.07,156.75,298.25,150.56Z" style="fill:#BE8DEB"></path><path d="M298.25,150.56a2.65,2.65,0,0,1,1.6-2.44c21.65-8.42,46.5-4.57,51.46-1.51,6.61,4.08-9.61,62.33-9.41,65.62A2.66,2.66,0,0,1,340,215c-4.87,1.17-27.14,1.59-31.16,1.47a72.38,72.38,0,0,1-8-.59,2.72,2.72,0,0,1-2.09-3.26C299.32,209.59,298.07,156.75,298.25,150.56Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M328.21,126.47c-.87,5.46-1.64,13.44,2.28,16.93,0,0,0,5.55-15.15,12.07-5.82-7.74-1.78-11.47-1.78-11.47,6-1.66,5.77-4.12,4.57-8.3Z" style="fill:#ff8b7b"></path><path d="M324.12,130.19l-5.92,5.51a17.61,17.61,0,0,1,.62,3c2.32-.41,5.89-2.51,6.29-5A7.25,7.25,0,0,0,324.12,130.19Z" style="isolation:isolate;opacity:0.2"></path><path d="M335,116.91c-2.12,9-2.83,12.82-8.22,16.68-8.1,5.82-18.67,1.23-19.28-8.19-.53-8.5,3-21.81,12.55-23.83a12.58,12.58,0,0,1,15,15.34Z" style="fill:#ff8b7b"></path><path d="M321.24,116.26c-.14.74-.64,1.27-1.11,1.19s-.78-.76-.65-1.49.63-1.27,1.1-1.2S321.32,115.55,321.24,116.26Z" style="fill:#263238"></path><path d="M312.78,114.9c-.13.75-.63,1.27-1.11,1.19s-.77-.75-.65-1.49.63-1.27,1.11-1.18S312.9,114.16,312.78,114.9Z" style="fill:#263238"></path><path d="M314.54,117.14a20,20,0,0,1-3.46,4.26,3.28,3.28,0,0,0,2.55.95Z" style="fill:#ff5652"></path><path d="M316,126.42a6.72,6.72,0,0,1-1.1-.1.22.22,0,0,1-.19-.25h0a.23.23,0,0,1,.26-.18,6,6,0,0,0,5.17-1.46.22.22,0,1,1,.32.3A6.12,6.12,0,0,1,316,126.42Z" style="fill:#263238"></path><path d="M323.33,114.75a.43.43,0,0,1-.46-.24,5.24,5.24,0,0,0-3.51-2.24.45.45,0,0,1-.38-.5.42.42,0,0,1,.49-.37h0a6,6,0,0,1,4.17,2.73.43.43,0,0,1-.2.58h0A.18.18,0,0,1,323.33,114.75Z" style="fill:#263238"></path><path d="M309.66,111.72a.44.44,0,0,1-.41-.75,4.3,4.3,0,0,1,3.88-1.21.43.43,0,0,1,.33.5v0a.43.43,0,0,1-.52.32h0a3.55,3.55,0,0,0-3,1A.4.4,0,0,1,309.66,111.72Z" style="fill:#263238"></path><path d="M334.33,143l-2.54-.43-17,.64-1.16.45s-4.24,4.59-2,15.93l7.15,31.28h.06l12.86-26.45,2.23-9.48C334.94,151.05,334.33,143,334.33,143Z" style="fill:#BE8DEB"></path><g style="opacity:0.6000000000000001"><path d="M334.33,143l-2.54-.43-17,.64-1.16.45s-4.24,4.59-2,15.93l7.15,31.28h.06l12.86-26.45,2.23-9.48C334.94,151.05,334.33,143,334.33,143Z" style="fill:#fff"></path></g><path d="M313.17,140.81v3.52s1.1,3.51,10.65,3.31,10.31-4.4,10.31-4.4v-2.57a2.92,2.92,0,0,0-3.49-2.86c-2.74.55-7.28.93-14.23.09A2.92,2.92,0,0,0,313.17,140.81Z" style="fill:#BE8DEB"></path><path d="M313.17,140.81v3.52s1.1,3.51,10.65,3.31,10.31-4.4,10.31-4.4v-2.57a2.92,2.92,0,0,0-3.49-2.86c-2.74.55-7.28.93-14.23.09A2.92,2.92,0,0,0,313.17,140.81Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M323.82,147.64c-9.55.2-10.65-3.31-10.65-3.31v-.83s-2.81,5.45,5.48,6.32,13.78-3.12,14.93-5.49h0C332.66,145.59,330.21,147.52,323.82,147.64Z" style="opacity:0.2"></path><path d="M335,116.91c-1.73,7.38-2.53,11.28-5.74,14.58.22-2,.25-18.84.06-22.17a53,53,0,0,0-12.1-2.22c-.84-.93-1.67-1.87-2.49-2.81a11.71,11.71,0,0,1,5.32-2.72,12.58,12.58,0,0,1,15,15.34Z" style="fill:#263238;isolation:isolate"></path><path d="M334.67,123.38a6.21,6.21,0,0,1-3.7,2.94c-2.11.58-3.16-1.3-2.57-3.3.55-1.78,2.29-4.24,4.39-4a2.79,2.79,0,0,1,2.33,3.19A2.9,2.9,0,0,1,334.67,123.38Z" style="fill:#ff8b7b"></path><path d="M342.21,153.92l6.47,27.36,3.63-20.53A115.88,115.88,0,0,1,342.21,153.92Z" style="opacity:0.2"></path><path d="M354.22,148.79c4.53,4.62,8.81,9.23,13,14.07,2.11,2.42,4.19,4.89,6.21,7.46a71.6,71.6,0,0,1,5.83,8.43,24.82,24.82,0,0,1,1.35,2.73,15.22,15.22,0,0,1,.61,1.78,9.8,9.8,0,0,1,.35,2.64,7.55,7.55,0,0,1-.31,2,6.6,6.6,0,0,1-1.29,2.37c-.15.18-.31.34-.48.51l-.12.11,0,0-.08.06-.29.23-.59.47c-.4.34-.74.56-1.1.82l-1.07.74c-2.78,1.85-5.5,3.47-8.25,5.08-5.49,3.18-10.95,6.26-16.55,9.18a4,4,0,0,1-4-6.84l0,0c5.18-3.4,10.43-6.76,15.51-10.27,2.53-1.74,5.06-3.52,7.36-5.31.29-.22.54-.44.81-.66s.56-.45.74-.63l.3-.29.16-.14,0,0,0,0-.07.06a2.68,2.68,0,0,0-.28.3,3.72,3.72,0,0,0-.74,1.33,3.32,3.32,0,0,0-.16.89c0,.37,0,.39,0,.34l-.21-.42a16.2,16.2,0,0,0-.87-1.4,62.52,62.52,0,0,0-5.44-6.54c-2-2.19-4.17-4.34-6.36-6.46-4.37-4.23-9-8.42-13.55-12.37l0,0a7,7,0,0,1,9.15-10.62Z" style="fill:#263238"></path><path d="M354.22,148.79c4.53,4.62,8.81,9.23,13,14.07,2.11,2.42,4.19,4.89,6.21,7.46a71.6,71.6,0,0,1,5.83,8.43,24.82,24.82,0,0,1,1.35,2.73,15.22,15.22,0,0,1,.61,1.78,9.8,9.8,0,0,1,.35,2.64,7.55,7.55,0,0,1-.31,2,6.6,6.6,0,0,1-1.29,2.37c-.15.18-.31.34-.48.51l-.12.11,0,0-.08.06-.29.23-.59.47c-.4.34-.74.56-1.1.82l-1.07.74c-2.78,1.85-5.5,3.47-8.25,5.08-5.49,3.18-10.95,6.26-16.55,9.18a4,4,0,0,1-4-6.84l0,0c5.18-3.4,10.43-6.76,15.51-10.27,2.53-1.74,5.06-3.52,7.36-5.31.29-.22.54-.44.81-.66s.56-.45.74-.63l.3-.29.16-.14,0,0,0,0-.07.06a2.68,2.68,0,0,0-.28.3,3.72,3.72,0,0,0-.74,1.33,3.32,3.32,0,0,0-.16.89c0,.37,0,.39,0,.34l-.21-.42a16.2,16.2,0,0,0-.87-1.4,62.52,62.52,0,0,0-5.44-6.54c-2-2.19-4.17-4.34-6.36-6.46-4.37-4.23-9-8.42-13.55-12.37l0,0a7,7,0,0,1,9.15-10.62Z" style="fill:#BE8DEB"></path><path d="M354.22,148.79c4.53,4.62,8.81,9.23,13,14.07,2.11,2.42,4.19,4.89,6.21,7.46a71.6,71.6,0,0,1,5.83,8.43,24.82,24.82,0,0,1,1.35,2.73,15.22,15.22,0,0,1,.61,1.78,9.8,9.8,0,0,1,.35,2.64,7.55,7.55,0,0,1-.31,2,6.6,6.6,0,0,1-1.29,2.37c-.15.18-.31.34-.48.51l-.12.11,0,0-.08.06-.29.23-.59.47c-.4.34-.74.56-1.1.82l-1.07.74c-2.78,1.85-5.5,3.47-8.25,5.08-5.49,3.18-10.95,6.26-16.55,9.18a4,4,0,0,1-4-6.84l0,0c5.18-3.4,10.43-6.76,15.51-10.27,2.53-1.74,5.06-3.52,7.36-5.31.29-.22.54-.44.81-.66s.56-.45.74-.63l.3-.29.16-.14,0,0,0,0-.07.06a2.68,2.68,0,0,0-.28.3,3.72,3.72,0,0,0-.74,1.33,3.32,3.32,0,0,0-.16.89c0,.37,0,.39,0,.34l-.21-.42a16.2,16.2,0,0,0-.87-1.4,62.52,62.52,0,0,0-5.44-6.54c-2-2.19-4.17-4.34-6.36-6.46-4.37-4.23-9-8.42-13.55-12.37l0,0a7,7,0,0,1,9.15-10.62Z" style="fill:#fff;opacity:0.6000000000000001"></path><path d="M335.16,208.36l1.4-2.45a3.29,3.29,0,0,1,2.52-1.64l7.17-1.5s1.69,1.56,3,3.06l.81.92C348,211,342.7,214,342.7,214l-1.42,1a2.74,2.74,0,0,1-3.86-.5l-2.1-2.78A3.17,3.17,0,0,1,335.16,208.36Z" style="fill:#ff8b7b"></path><path d="M334.33,143A120.1,120.1,0,0,1,329,154c-3,5.44-7,11.39-8,13.15l3.5,2.63s13.51-20.4,13.83-26.32Z" style="fill:#263238"></path><path d="M320,166.1l9.47,7.42a1.75,1.75,0,0,1,.63,1.73,1.9,1.9,0,0,1-.34.72L315.38,194.3a1.76,1.76,0,0,1-2.45.3l-9.47-7.43a1.72,1.72,0,0,1-.65-1.61,1.67,1.67,0,0,1,.36-.83l14.36-18.33a1.66,1.66,0,0,1,.62-.5A1.74,1.74,0,0,1,320,166.1Z" style="fill:#263238"></path><path d="M323.41,172.22c1.21,2.86,1.37,6.56-1.73,10.74-2.51,3.34-7.1,5.83-11.05,5.75-.22,0-.43,0-.63,0a12.53,12.53,0,0,1-6.52-2.6l-.67-.52a1.58,1.58,0,0,1,.36-.83l14.37-18.34a1.68,1.68,0,0,1,.61-.49l.71.55A15.44,15.44,0,0,1,323.41,172.22Z" style="fill:#fff;opacity:0.2"></path><rect x="317.64" y="181.08" width="4.39" height="1.46" transform="translate(-21.24 319.71) rotate(-51.63)" style="fill:#fff"></rect><polygon points="318.7 167.81 304.5 185.79 303.93 185.35 318.13 167.36 318.7 167.81" style="fill:#fff;opacity:0.1"></polygon><path d="M330.08,175.24a1.83,1.83,0,0,1-.34.72L315.38,194.3a1.78,1.78,0,0,1-.74.54l-.55-.45a12.32,12.32,0,0,1-4.09-5.71c.2,0,.41,0,.63,0,3.95.08,8.54-2.41,11.05-5.75,3.1-4.18,2.94-7.88,1.73-10.74a12.22,12.22,0,0,1,6,2.55Z" style="fill:#fff;opacity:0.1"></path><path d="M298.43,181.78l-.15,7.15a7.12,7.12,0,0,0,.08,1.39,6.3,6.3,0,0,0,.46,1.28c.62,1.36.58,2.05,2,2.56a4.75,4.75,0,0,0,2.4.09,8.43,8.43,0,0,0,2.17-.61,5.77,5.77,0,0,0,2.88-2.94c-1.31-1-1.82-1.48-3.13-2.48a6.38,6.38,0,0,1-2.09,1.67,2.25,2.25,0,0,1-1.19.25,2.4,2.4,0,0,1-1.68-1.43,13.5,13.5,0,0,1-1.26-5A4,4,0,0,0,298.43,181.78Z" style="fill:#263238"></path></g><g id="freepik--character-1--inject-38"><path d="M209,250.2l4.23-3.63,6.24,11.22-7.18,1.71A11.61,11.61,0,0,1,209,250.2Z" style="fill:#ffc3bd"></path><polygon points="219.51 257.79 220.37 261.5 214.69 265.2 212.33 259.5 219.51 257.79" style="fill:#ffc3bd"></polygon><path d="M189.35,180.34c.94,2.62,1.8,5.27,2.69,7.91s1.74,5.29,2.56,7.95c1.69,5.32,3.29,10.65,4.85,16l-.22-.55c1.34,3,2.64,6.1,3.94,9.15s2.57,6.12,3.85,9.19,2.5,6.16,3.71,9.25,2.41,6.21,3.53,9.35a2.76,2.76,0,0,1-5,2.36c-1.72-2.86-3.35-5.76-5-8.65s-3.23-5.81-4.83-8.73-3.16-5.85-4.7-8.8-3.09-5.88-4.6-8.84l-.09-.19-.13-.35c-2-5.22-3.91-10.45-5.77-15.7-.94-2.62-1.85-5.25-2.75-7.89s-1.78-5.28-2.61-7.94a5.56,5.56,0,0,1,10.55-3.53Z" style="fill:#ffc3bd"></path><path d="M203.81,239.57a48.91,48.91,0,0,1,7.27-7.4c5.64-2.91,2.17-8.78.9-12.11-1.94-5.13-20.18-42.45-32.5-51.5-3.78-1.25.57,19.43-.43,28.67C178.71,200.43,191.7,230.17,203.81,239.57Z" style="fill:#BE8DEB"></path><path d="M179.38,200.66l5-15.33,2.51,5.49a135.38,135.38,0,0,1,11.64,43.47h0Z" style="opacity:0.2"></path><path d="M214.13,231.07a71.68,71.68,0,0,0-11.26,9.62c-2.09-.78-4.64-2.55-5.34-4.39,3.29-7.65,9.24-12.76,16.95-15.89C215.46,222.62,216.38,229.55,214.13,231.07Z" style="fill:#BE8DEB"></path><path d="M214.13,231.07a71.68,71.68,0,0,0-11.26,9.62c-2.09-.78-4.64-2.55-5.34-4.39,3.29-7.65,9.24-12.76,16.95-15.89C215.46,222.62,216.38,229.55,214.13,231.07Z" style="fill:#fff;opacity:0.30000000000000004"></path><path d="M163.94,146.44c1.68,5.15,2.2,3.81,4.75,8.6,1.64,3.1,0,5.35,1.93,8.47,2.73,4.4,6.06,4.11,6.06,4.11-1,.63-3.32,1.21-4.42.79a10.87,10.87,0,0,0,3,2,6.56,6.56,0,0,1-3.53,2.7,3.56,3.56,0,0,1-4-1.44,1.72,1.72,0,0,1,.82,1.68c-1.45.13-9.95-3.69-9.26-15.12.2-3.19.82-6.39.34-9.55a8.33,8.33,0,0,1-.25-3.46c.31-1.13,1.74-2,2.66-1.31A11.88,11.88,0,0,1,163.94,146.44Z" style="fill:#263238"></path><g style="opacity:0.2"><path d="M163.94,146.44c1.68,5.15,2.2,3.81,4.75,8.6,1.64,3.1,0,5.35,1.93,8.47,2.73,4.4,6.06,4.11,6.06,4.11-1,.63-3.32,1.21-4.42.79a10.87,10.87,0,0,0,3,2,6.56,6.56,0,0,1-3.53,2.7,3.56,3.56,0,0,1-4-1.44,1.72,1.72,0,0,1,.82,1.68c-1.45.13-9.95-3.69-9.26-15.12.2-3.19.82-6.39.34-9.55a8.33,8.33,0,0,1-.25-3.46c.31-1.13,1.74-2,2.66-1.31A11.88,11.88,0,0,1,163.94,146.44Z"></path></g><path d="M145.49,168.25a5.61,5.61,0,0,1-.27,2.38,2.11,2.11,0,0,1-1.81,1.39c-.16,0-.34-.06-.36-.21s.3-.15.23,0c.85.81,2.23,1.74,3.39,1.55a3.87,3.87,0,0,0,2.75-2,10.77,10.77,0,0,1-.95,3.51,6.6,6.6,0,0,0,4.43-.32,3.58,3.58,0,0,0,2-3.71,1.7,1.7,0,0,0,.51,1.79,4.66,4.66,0,0,0,1.64-3.87,13.89,13.89,0,0,0-1-4.23,22.8,22.8,0,0,0-2.94-6.25c-1.92-2.56-4.86-4.24-6.6-6.91a8.41,8.41,0,0,0-2.12-2.75c-1-.64-2.64-.37-2.85.78,0,.2,0,.47.23.49s.12-.42,0-.28S145.27,162.83,145.49,168.25Z" style="fill:#263238"></path><g style="opacity:0.2"><path d="M145.49,168.25a5.61,5.61,0,0,1-.27,2.38,2.11,2.11,0,0,1-1.81,1.39c-.16,0-.34-.06-.36-.21s.3-.15.23,0c.85.81,2.23,1.74,3.39,1.55a3.87,3.87,0,0,0,2.75-2,10.77,10.77,0,0,1-.95,3.51,6.6,6.6,0,0,0,4.43-.32,3.58,3.58,0,0,0,2-3.71,1.7,1.7,0,0,0,.51,1.79,4.66,4.66,0,0,0,1.64-3.87,13.89,13.89,0,0,0-1-4.23,22.8,22.8,0,0,0-2.94-6.25c-1.92-2.56-4.86-4.24-6.6-6.91a8.41,8.41,0,0,0-2.12-2.75c-1-.64-2.64-.37-2.85.78,0,.2,0,.47.23.49s.12-.42,0-.28S145.27,162.83,145.49,168.25Z"></path></g><path d="M174,422.69c-7,0-7.94-.11-11.88-.24-3.37-.12-4.17.3-6.88.24-2.27-.05-2.18-2.22-1.49-4.71.35-1.25.89-3.9,1.37-5.92l10.27-.75c1.45,2.76,4.71,6.69,8.66,7.22C177.81,419,176.78,422.69,174,422.69Z" style="fill:#263238"></path><path d="M243.9,376.46c-10.75,6.15-19.58.58-30.86-4.52s-46.26,1-51.7,4.7q5.13-65.91,10.25-131.81c.75-.06-.18.58.57.52a33.88,33.88,0,0,1,1-9.54c.93-3.06,2.9-6,5.83-7.28,2.18-1,8.62-.6,11-.58C192.17,228,231.38,331.25,243.9,376.46Z" style="fill:#BE8DEB"></path><path d="M243.9,376.46c-10.75,6.15-19.58.58-30.86-4.52s-46.26,1-51.7,4.7q5.13-65.91,10.25-131.81c.75-.06-.18.58.57.52a33.88,33.88,0,0,1,1-9.54c.93-3.06,2.9-6,5.83-7.28,2.18-1,8.62-.6,11-.58C192.17,228,231.38,331.25,243.9,376.46Z" style="opacity:0.2"></path><path d="M239.33,398.49l-7.82.79-12.69,1.29-6.17.64c-1.86.22-17.54-57.48-18.51-61.08,0-.12,0-.18,0-.18-7.58-23.15-17.15-60.76-24.41-80.52s3-31.63,3-31.63l19.29-2,1.35,6.83,22.37,97.53v0Z" style="fill:#263238"></path><path d="M239.33,398.49l-7.82.79-12.69,1.29-6.17.64c-1.86.22-17.54-57.48-18.51-61.08,0-.12,0-.18,0-.18-7.58-23.15-17.15-60.76-24.41-80.52s3-31.63,3-31.63l19.29-2,1.35,6.83,22.37,97.53v0Z" style="opacity:0.2"></path><path d="M234.74,413.34H224s-2.12-5.23-5.21-12.77l12.69-1.29Z" style="fill:#263238"></path><path d="M181.43,227.86s-5.28,62.18-9.57,90.08c-4.51,29.31-6.49,78.36-5.36,97.52-1.64,1-7.19.89-10.43-.12,0,0-18.45-65.48-4.16-94.5-9.24-67.82,1.92-92.32,1.92-92.32Z" style="fill:#263238"></path><path d="M146.49,341.46s-.5,61.58,1.43,61.35,25.31.25,25.31.25l3.26-61.6Z" style="fill:#263238"></path><path d="M146.49,341.46s-.5,61.58,1.43,61.35,25.31.25,25.31.25l3.26-61.6Z" style="opacity:0.2"></path><path d="M186.33,180.18a113.15,113.15,0,0,1,2.48,15.23c.88,7.47,1.53,14.85,2.39,27.19l-37.37,5.92c-5.13-12-12.52-20.58-16-46.27-1.24-9.1-3.34-8.32,3.72-11.28a78.64,78.64,0,0,1,8.06-2.32,120.13,120.13,0,0,1,17-2.69c1.87-.12,3.82-.19,5.69-.23C179,165.6,185.09,173.62,186.33,180.18Z" style="fill:#BE8DEB"></path><path d="M186.33,180.18a113.15,113.15,0,0,1,2.48,15.23c.88,7.47,1.53,14.85,2.39,27.19l-37.37,5.92c-5.13-12-12.52-20.58-16-46.27-1.24-9.1-3.34-8.32,3.72-11.28a78.64,78.64,0,0,1,8.06-2.32,120.13,120.13,0,0,1,17-2.69c1.87-.12,3.82-.19,5.69-.23C179,165.6,185.09,173.62,186.33,180.18Z" style="fill:#fff;opacity:0.1"></path><path d="M147.76,150.55c2.34,5.23,5.74,14.94,2.76,19.15,0,0,8.81,7.55,17.11,3.46,2.46-5.07-.14-6.15-.14-6.15-6.42-.47-7.32-5-7.25-9.32Z" style="fill:#ffc3bd"></path><path d="M152.85,153.47l7.39,4.22a17.24,17.24,0,0,0,.18,3.06c-2.41,0-6.2-2-7-4.35A8.06,8.06,0,0,1,152.85,153.47Z" style="opacity:0.2"></path><path d="M141.36,140.33c3,8.56,4.16,12.23,9.86,15.66,8.58,5.16,18.44.15,18-9-.39-8.23-5.31-20.84-14.86-22.31A11.63,11.63,0,0,0,141.36,140.33Z" style="fill:#ffc3bd"></path><path d="M140.54,148.15a7.29,7.29,0,0,0,5.11,2.22c2.47,0,2.87-2.56,1.48-4.68-1.25-1.91-4-4.2-6.18-3.16S138.83,146.4,140.54,148.15Z" style="fill:#ffc3bd"></path><path d="M181.31,387.26c-10.36,1.88-27.74,1.53-38.12-.28-7-1.22-13.86-4.11-18.25-9.68,9.6-36.23,16.77-66.67,19.28-104.06.88-13.22,2.1-34.82,7.82-48.08,11-1,19.2-1.32,30-3.4C182.07,221.76,181,339.72,181.31,387.26Z" style="fill:#BE8DEB"></path><path d="M181.31,387.26c-10.36,1.88-27.74,1.53-38.12-.28-7-1.22-13.86-4.11-18.25-9.68,9.6-36.23,16.77-66.67,19.28-104.06.88-13.22,2.1-34.82,7.82-48.08,11-1,19.2-1.32,30-3.4C182.07,221.76,181,339.72,181.31,387.26Z" style="fill:#fff;opacity:0.1"></path><path d="M234.38,411.74H224a.79.79,0,0,0-.78.65l-1.58,8.44a1.44,1.44,0,0,0,1.43,1.69c3.74-.06,9.14-.28,13.84-.28,5.5,0,5.53.3,12,.3,3.9,0,4.84-3.94,3.2-4.3-7.49-1.63-8.83-1.8-15.4-5.76A4.51,4.51,0,0,0,234.38,411.74Z" style="fill:#263238"></path><path d="M176,221.76c1.17.76,17.56,39.39,27.89,68,15.48,42.93,30.88,94.94,30.88,94.94s16-3.82,15-7.25S212,246.82,188.55,219.25Z" style="fill:#BE8DEB"></path><path d="M148.7,170.26s3.7-3.34,2.81-7.57c0,0,5.46,1.9,9.4,0,.56-.27.76,2.49,5.65,3.57H170s2.42,9.53,4,15.94,4.22,23.71,4.22,33.69Z" style="fill:#BE8DEB"></path><path d="M148.7,170.26s3.7-3.34,2.81-7.57c0,0,5.46,1.9,9.4,0,.56-.27.76,2.49,5.65,3.57H170s2.42,9.53,4,15.94,4.22,23.71,4.22,33.69Z" style="fill:#263238"></path><path d="M148.7,170.26s3.7-3.34,2.81-7.57c0,0,5.46,1.9,9.4,0,.56-.27.76,2.49,5.65,3.57H170s2.42,9.53,4,15.94,4.22,23.71,4.22,33.69Z" style="opacity:0.2"></path><path d="M136.53,132.48c-5.19,17.21.85,18.4,5.76,18.6a40,40,0,0,1,.49-11.4,16.48,16.48,0,0,1,8-10.76c2.07-1.09,4.5-1.08,6.83-1.36,6.54-.8,10.29,11.88,11,14.76,2.67-10.14-2.46-20-12.81-21.68C142.32,118.51,138.09,127.28,136.53,132.48Z" style="fill:#BE8DEB"></path><path d="M136.53,132.48c-5.19,17.21.85,18.4,5.76,18.6a40,40,0,0,1,.49-11.4,16.48,16.48,0,0,1,8-10.76c2.07-1.09,4.5-1.08,6.83-1.36,6.54-.8,10.29,11.88,11,14.76,2.67-10.14-2.46-20-12.81-21.68C142.32,118.51,138.09,127.28,136.53,132.48Z" style="fill:#fff;opacity:0.2"></path><path d="M168.58,142.32c-.7-2.88-4.45-15.56-11-14.76-2.33.28-4.76.27-6.83,1.36a16.48,16.48,0,0,0-8,10.76,40,40,0,0,0-.49,11.4,15.92,15.92,0,0,1-2.66-.29,32.93,32.93,0,0,1,2.29-17.52,13.27,13.27,0,0,1,1.63-3,12.21,12.21,0,0,1,3.91-3.1,17.69,17.69,0,0,1,13.81-1.59,13.13,13.13,0,0,1,7.19,5.92A19.45,19.45,0,0,1,168.58,142.32Z" style="fill:#fff;opacity:0.1"></path><path d="M166,134.91c-.2.47-.7.81-1.76.63-2.73-3.46-4.22-2.63-4.47-3.07a5.17,5.17,0,0,0,1.8,2.23c-.56.42-2.13,1.6-5.78-.7-2.88-1.81-1.42,1.16-.55,1.65a6.16,6.16,0,0,1-3.43.07,7.91,7.91,0,0,1-1.53-.72,13.72,13.72,0,0,1-3.65-2.71,15,15,0,0,1,4.17-3.37c2.08-1.09,4.51-1.08,6.84-1.36C161.28,127.11,164.09,131,166,134.91Z" style="fill:#263238"></path><path d="M180.3,214.67c-.14,1.75-.3,3.52-.47,5.29-1.33-1.52-2.72-3.05-4.13-4.57h0c-10-10.68-21.18-20.62-24.3-22.41,1.42-2.79,2.34-5.77,4.44-8.1a91.09,91.09,0,0,0-11.23-6s.68-6.77,0-10.64c1.18-1.73,4.14-2.62,4.14-2.62,9.76,10.63,17.56,23.12,25.56,37.77h0C176.28,207,178.27,210.77,180.3,214.67Z" style="fill:#BE8DEB"></path><path d="M180.3,214.67c-.14,1.75-.3,3.53-.47,5.3-1.33-1.53-2.72-3.06-4.13-4.58h0c-10-10.68-21.18-20.62-24.3-22.41,1.42-2.79,2.34-5.77,4.44-8.1a91.09,91.09,0,0,0-11.23-6s.68-6.77,0-10.64c1.18-1.73,4.14-2.62,4.14-2.62,9.77,10.64,17.57,23.12,25.56,37.78C176.28,207,178.27,210.77,180.3,214.67Z" style="fill:#fff;opacity:0.30000000000000004"></path><path d="M182.47,186.43c-1,3.79-1.19,21-3.07,37.66,0,.13,0,.25,0,.38h0c-.22,2-.46,3.91-.74,5.82l-1.94.24c0-1.79-.13-3.66-.24-5.59l0-.48c-1.17-19.8-5.29-46.09-11.54-60.37a.42.42,0,0,1,.52-.56c2.42.85,5.7.85,7.4,1.55,1.55,3.62,6,9,6,9-2.51,2.77-2.47,5.5-4.09,8.87A29.62,29.62,0,0,1,182.47,186.43Z" style="fill:#BE8DEB"></path><path d="M182.47,186.43c-.82,3.07-1.09,15-2.17,28.24-.14,1.75-.3,3.52-.47,5.29h0c-.13,1.38-.27,2.75-.43,4.12,0,.13,0,.25-.05.38-.22,2-.46,3.91-.74,5.82l-1.94.24c0-1.79-.13-3.66-.24-5.59l0-.48c-.17-2.9-.41-5.94-.7-9.07h0c-.37-3.9-.83-7.93-1.39-12h0c-2-14.78-5.25-29.73-9.44-39.3a.42.42,0,0,1,.52-.56c2.42.85,5.7.85,7.4,1.55,1.55,3.62,6,9,6,9-2.51,2.77-2.47,5.5-4.09,8.87A29.62,29.62,0,0,1,182.47,186.43Z" style="fill:#fff;opacity:0.4"></path><path d="M189.67,224.45l-14,1.77-1.94.24-24.66,3.12s1.65-4.3,1.31-6.28l21.06-2.11,2.05-.32,14.76-2.34Z" style="fill:#263238"></path><path d="M189.67,224.45l-14,1.77-1.94.24-24.66,3.12s1.65-4.3,1.31-6.28l21.06-2.11,2.05-.32,14.76-2.34Z" style="fill:#fff;opacity:0.1"></path><path d="M158.82,221.48l-2.57-1.18a3.3,3.3,0,0,0-3,.15l-6.69,3s-.45,2.25-.64,4.23l-.11,1.22c4.13,2.23,10.23,1.61,10.23,1.61h1.76a2.73,2.73,0,0,0,2.83-2.66l.08-3.49A3.16,3.16,0,0,0,158.82,221.48Z" style="fill:#ffc3bd"></path><path d="M139.78,184c-1.24,2.44-2.57,5.06-3.77,7.63s-2.42,5.19-3.55,7.8-2.18,5.22-3.1,7.84a69.9,69.9,0,0,0-2.29,7.77l.06-1.06c0-.29-.16-.47-.17-.43a1.15,1.15,0,0,0,.27.44,8.91,8.91,0,0,0,1.9,1.64,39.35,39.35,0,0,0,5.8,3.13c2.11,1,4.33,1.84,6.58,2.69s4.56,1.65,6.8,2.43l.08,0a2.77,2.77,0,0,1-1.1,5.38c-2.61-.18-5.09-.54-7.64-1a74.22,74.22,0,0,1-7.57-1.72,40.67,40.67,0,0,1-7.69-3,18.69,18.69,0,0,1-4-2.79,11.26,11.26,0,0,1-2-2.46,9.15,9.15,0,0,1-1.24-4,5.57,5.57,0,0,1,0-.82l0-.24a68.32,68.32,0,0,1,2.08-9.36c.87-3,1.91-5.9,3-8.76s2.32-5.65,3.6-8.4,2.6-5.43,4.15-8.19a5.56,5.56,0,0,1,9.81,5.23Z" style="fill:#ffc3bd"></path><path d="M141.53,232.79s-3.42-.56-6.07-1.23h0a61.64,61.64,0,0,1-16.64-6.92,9,9,0,0,1-2.84-2.82,10.64,10.64,0,0,1-1.65-5.35c-.6-13.53,6.81-31,17.59-40.28.58-.51,1.3-.9,1.92-1.4,3.65-2.9,7.93-1.76,9.7,2.56a7.41,7.41,0,0,1,.26.75c1,3.34.23,6.94-.59,10.34a92.73,92.73,0,0,1-9.83,23.27c.87,1,2.32,1.08,3.44,1.91,1.62,1.21,3.52,2.33,5.67,3.74l0,0,1.64,3.73a8.52,8.52,0,0,0-2,8.72Z" style="fill:#BE8DEB"></path><path d="M144.14,221.12a8.52,8.52,0,0,0-2,8.72l-.44,3.07-1.28-.27a36.1,36.1,0,0,1-5-1.08h0a61.64,61.64,0,0,1-16.64-6.92,9,9,0,0,1-2.84-2.82,10.64,10.64,0,0,1-1.65-5.35c-.6-13.53,6.81-31,17.59-40.28.58-.51,1.3-.9,1.92-1.4,3.65-2.9,7.93-1.76,9.7,2.56a7.41,7.41,0,0,1,.26.75c1,3.34.23,6.94-.59,10.34a72.88,72.88,0,0,1-2.73,8.54l-.29.75,0,.06a97.9,97.9,0,0,1-6.78,13.92,2.79,2.79,0,0,0,.35.34h0c.88.7,2.1.84,3.08,1.56,1.62,1.21,3.52,2.33,5.67,3.74l0,0Z" style="fill:#fff;opacity:0.1"></path><path d="M144.42,221.81a44.92,44.92,0,0,0-2.73,11.34c-2.15.61-5.25.7-6.91-.38-1.89-8.1-.75-12.65,3.6-19.74C140.48,214.22,145.33,219.26,144.42,221.81Z" style="fill:#BE8DEB"></path><path d="M144.42,221.81a44.92,44.92,0,0,0-2.73,11.34c-2.15.61-5.25.7-6.91-.38-1.89-8.1-.75-12.65,3.6-19.74C140.48,214.22,145.33,219.26,144.42,221.81Z" style="fill:#fff;opacity:0.30000000000000004"></path><path d="M133.37,211.71a2.79,2.79,0,0,0,.35.34l-1.38-.46-4.26-1.18s9.89-7.9,12.07-12.62A97.9,97.9,0,0,1,133.37,211.71Z" style="opacity:0.2"></path><path d="M147.34,181c.79-1.59.58-5.91-.13-7.54A16.26,16.26,0,0,1,146,170.8c-.29-1.32.19-2.69.13-4.05-.07-1.7-1-3.22-1.54-4.83a38.84,38.84,0,0,1-1.1-5.9c-.34-2,.25-4.27-1.17-5.67-.06-.51-.13-1-.2-1.52v0a43.43,43.43,0,0,1,.65-9.53,12.76,12.76,0,0,1,1.76-4.47,16.86,16.86,0,0,1,1.73-2.32c1.89,3.75-.85,9.78,2.27,14.84,1.9,3.09,3.75,6.42,3.73,10,0,1.81-1.2,3.87-.33,5.46a10.22,10.22,0,0,1,1.37,2.56c.42,2.44-.61,4.53.39,5.68C156.52,174.34,153.3,175.89,147.34,181Z" style="fill:#263238"></path><path d="M153.13,141.58c.22.73.79,1.23,1.26,1.12s.67-.79.45-1.52-.79-1.23-1.26-1.12S152.9,140.86,153.13,141.58Z" style="fill:#263238"></path><path d="M162.64,139.9c.22.73.79,1.23,1.26,1.12s.67-.79.45-1.52-.79-1.23-1.27-1.12S162.41,139.17,162.64,139.9Z" style="fill:#263238"></path><path d="M162.89,138.47l1.58-.91S164,139.14,162.89,138.47Z" style="fill:#263238"></path><path d="M161.12,141.07a22.31,22.31,0,0,0,4,4.05,3,3,0,0,1-2.42,1.09Z" style="fill:#ed847e"></path><path d="M162.05,150.23a7.24,7.24,0,0,0,1.25-.18.2.2,0,0,0,.14-.26.23.23,0,0,0-.28-.17,6.33,6.33,0,0,1-5.36-1.16.22.22,0,0,0-.31,0,.22.22,0,0,0,0,.31A6.69,6.69,0,0,0,162.05,150.23Z" style="fill:#263238"></path><path d="M151.8,139a.41.41,0,0,0,.28-.18,3.26,3.26,0,0,1,2.68-1.55.4.4,0,0,0,.43-.42.48.48,0,0,0-.46-.46,4.07,4.07,0,0,0-3.41,1.92.46.46,0,0,0,.15.61A.49.49,0,0,0,151.8,139Z" style="fill:#263238"></path><path d="M166,136a.4.4,0,0,0,.29-.12.43.43,0,0,0,0-.62,4.65,4.65,0,0,0-3.91-1.35.42.42,0,0,0-.31.52.48.48,0,0,0,.55.34,3.77,3.77,0,0,1,3.09,1.1A.46.46,0,0,0,166,136Z" style="fill:#263238"></path><path d="M153.38,140.15l1.58-.91S154.49,140.82,153.38,140.15Z" style="fill:#263238"></path><path d="M178,176.64c-2,1.51-3.91-.34-5.35-1.63a9.74,9.74,0,0,1-2.6-3c-.61-1.22.11-2.12-.24-3.43a13.12,13.12,0,0,0-1.36-2.56,3.62,3.62,0,0,1-.46-1.3c-.13-1.16.52-2.3.43-3.46-.16-2.09-2.56-3.62-3-5.51A10.21,10.21,0,0,0,169,147.2a31.21,31.21,0,0,0-5.91-16.57,11.58,11.58,0,0,1,1,.87c3.31,3.54,6.36,7.1,6.27,14.87,0,2.7-1,5.71.28,7,1.13,1.14,2.35,4.59,1.84,8-.3,2,.93,3,1.64,4.77a6.51,6.51,0,0,1,.43,3.2c-.24,2.66.08,5.64,3.36,7.24C178,176.61,178,176.62,178,176.64Z" style="fill:#263238"></path><path d="M195.42,215.5l1.5,11.94a1.72,1.72,0,0,1-1.51,1.94l-23.1,2.91a1.7,1.7,0,0,1-.9-.13,1.73,1.73,0,0,1-1-1.38l-1.5-11.94a1.72,1.72,0,0,1,.67-1.6,1.66,1.66,0,0,1,.84-.35l23.11-2.9a1.62,1.62,0,0,1,.79.08A1.73,1.73,0,0,1,195.42,215.5Z" style="fill:#263238"></path><path d="M193.55,222.26c-1.15,2.89-3.64,5.63-8.79,6.41-4.13.61-9.14-.86-11.89-3.69l-.43-.47a12.45,12.45,0,0,1-2.8-6.43l-.11-.85a1.64,1.64,0,0,1,.84-.33L193.48,214a1.68,1.68,0,0,1,.78.08l.12.89A15.34,15.34,0,0,1,193.55,222.26Z" style="fill:#fff;opacity:0.2"></path><rect x="182.07" y="225.82" width="4.39" height="1.46" transform="translate(-25.84 23.73) rotate(-6.89)" style="fill:#fff"></rect><polygon points="193.32 215.81 170.57 218.59 170.48 217.87 193.22 215.09 193.32 215.81" style="fill:#fff;opacity:0.1"></polygon><path d="M196.16,229.1a1.8,1.8,0,0,1-.74.28l-23.11,2.91a1.78,1.78,0,0,1-.9-.13l-.09-.71a12.4,12.4,0,0,1,1.12-6.94l.43.47c2.75,2.83,7.76,4.3,11.89,3.69,5.15-.78,7.64-3.52,8.79-6.41a12.29,12.29,0,0,1,2.51,6.07Z" style="fill:#fff;opacity:0.1"></path><path d="M215.43,248.23a1.21,1.21,0,0,1-.85,1.65,17.13,17.13,0,0,1-6.48.31c-.33-.05-.94-.77-1.34-1.4a.64.64,0,0,1,.48-1,29.54,29.54,0,0,0,6.28-1.2,1.21,1.21,0,0,1,1.36.53A10,10,0,0,1,215.43,248.23Z" style="fill:#263238"></path><path d="M215.42,247.68a2,2,0,0,1-.28,2.67c-.76.44-1.85,0-2.46-1.09a1.66,1.66,0,1,1,2.74-1.58Z"></path></g></svg>
                {{--                    <img class="align-items-center" style="width:100%;" src="front/images/shopping.avif" alt="">--}}

            </div>
        </div>



@endsection
