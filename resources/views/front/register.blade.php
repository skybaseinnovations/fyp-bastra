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
            <div class="photo3 info1 p-0" style="border-right: 0.001rem solid #dedede">
                <svg class="animated" id="freepik_stories-city-girl" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500" height="55vh" width="100%"
                     version="1.1" xmlns:svgjs="http://svgjs.com/svgjs">
                    <style>svg#freepik_stories-city-girl:not(.animated) .animable {
                            opacity: 0;
                        }

                        svg#freepik_stories-city-girl.animated #freepik--fire-hydrant--inject-46 {
                            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                            animation-delay: 0s;
                        }

                        @keyframes fadeIn {
                            0% {
                                opacity: 0;
                            }
                            100% {
                                opacity: 1;
                            }
                        }

                        .animator-hidden {
                            display: none;
                        }</style>
                    <g id="freepik--background-simple--inject-46" class="animable"
                       style="transform-origin: 255.665px 249.466px;">
                        <path
                            d="M164,78.16C-4.34,209.53,61.71,375.39,109,419.89c43.16,40.64,107.63,59.74,170.36,59.83,38.18.06,77.1-6.65,109.87-24.15s58.74-46.69,65-80.32c6.56-35.31-8.9-71.54-32.62-100.4s-55.22-51.73-85.63-75.06c-9.13-7-18.63-14.65-22-25-6.42-19.71,11.65-38.49,28.4-52.54,14.5-12.17,29.55-24.71,37.35-41s6.26-37.69-9.06-49C370.64,32.21,287-17.74,164,78.16Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 255.665px 249.466px;" id="eln5vv5lg723k"
                            class="animable"></path>
                        <g id="ely1n3rj1ua9">
                            <g style="opacity: 0.7; transform-origin: 255.665px 249.466px;" class="animable">
                                <path
                                    d="M164,78.16C-4.34,209.53,61.71,375.39,109,419.89c43.16,40.64,107.63,59.74,170.36,59.83,38.18.06,77.1-6.65,109.87-24.15s58.74-46.69,65-80.32c6.56-35.31-8.9-71.54-32.62-100.4s-55.22-51.73-85.63-75.06c-9.13-7-18.63-14.65-22-25-6.42-19.71,11.65-38.49,28.4-52.54,14.5-12.17,29.55-24.71,37.35-41s6.26-37.69-9.06-49C370.64,32.21,287-17.74,164,78.16Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 255.665px 249.466px;"
                                    id="elawp4n0b8p4o" class="animable"></path>
                            </g>
                        </g>
                    </g>
                    <g id="freepik--Car--inject-46" class="animable animator-hidden"
                       style="transform-origin: 142.215px 387.181px;">
                        <path
                            d="M205.55,414.94c-1.17,3.44-2.63,6.49-4.4,7.9-.93.73-3.27,1.33-6.53,1.83-4.56.69-10.9,1.17-17.61,1.5-16.34.81-34.79.73-34.79.73s-18.45.08-34.77-.72c-2.51-.13-5-.28-7.29-.44a9.2,9.2,0,0,0-.15-1.51,8.55,8.55,0,0,0-.33-1.39,3.33,3.33,0,0,0-.23-.65,6.5,6.5,0,0,0-.25-.61q-.14-.29-.3-.57h0a6.6,6.6,0,0,0-.7-1,3.81,3.81,0,0,0-.39-.42,4.37,4.37,0,0,0-.86-.68,3.71,3.71,0,0,0-2-.58c-2.52,0-4.64,2.74-5.08,6.36h-.08c-3.26-.49-5.62-1.11-6.56-1.83-1.76-1.41-3.23-4.46-4.39-7.9h23.36v4a2.61,2.61,0,0,0,5.21,0v-4H177v4c0,.11,0,.22,0,.32a2.6,2.6,0,0,0,5.17-.32v-4Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.195px 420.921px;"
                            id="elipc0odbueo" class="animable"></path>
                        <path
                            d="M107.45,426.18v12a3.88,3.88,0,0,1-3.88,3.87H93.7a3.87,3.87,0,0,1-3.87-3.87V424.67h.08c.44-3.62,2.56-6.36,5.08-6.36a3.71,3.71,0,0,1,2,.58,4.37,4.37,0,0,1,.86.68q.21.21.39.42a6.6,6.6,0,0,1,.7,1h0q.16.28.3.57a6.5,6.5,0,0,1,.25.61,3.33,3.33,0,0,1,.23.65,8.55,8.55,0,0,1,.33,1.39,9.2,9.2,0,0,1,.15,1.51C102.49,425.9,104.94,426.05,107.45,426.18Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 98.64px 430.18px;"
                            id="elj2c1p2qq5eq" class="animable"></path>
                        <path
                            d="M194.62,424.67V438.2a3.87,3.87,0,0,1-3.87,3.87h-9.87A3.87,3.87,0,0,1,177,438.2v-12C183.72,425.84,190.06,425.36,194.62,424.67Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 185.81px 433.37px;"
                            id="el7mg40biqsnl" class="animable"></path>
                        <rect x="81.92" y="389.29" width="30.03" height="15.54" rx="5.06"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 96.935px 397.06px;"
                              id="eluq5cdf7aedc" class="animable"></rect>
                        <rect x="81.92" y="389.29" width="30.03" height="15.54" rx="5.06"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 96.935px 397.06px;"
                              id="el1rjn9fsw81v" class="animable"></rect>
                        <line x1="81.92" y1="396.78" x2="111.95" y2="396.78"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 96.935px 396.78px;"
                              id="eld1hokrcaqmh" class="animable"></line>
                        <line x1="102.25" y1="396.78" x2="102.25" y2="404.83"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 102.25px 400.805px;"
                              id="elili802eqfxa" class="animable"></line>
                        <rect x="81.92" y="389.29" width="30.03" height="15.54" rx="5.06"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 96.935px 397.06px;"
                              id="elgeco9oerls9" class="animable"></rect>
                        <path
                            d="M107.45,410.35v8.58a2.61,2.61,0,0,1-5.21,0v-8.58a2.5,2.5,0,0,1,.15-.83,2.19,2.19,0,0,1,.37-.71,2.34,2.34,0,0,1,.25-.3,3.31,3.31,0,0,1,.3-.25,2.56,2.56,0,0,1,1.53-.51,2.59,2.59,0,0,1,1.84.76,2.72,2.72,0,0,1,.62,1h0A2.27,2.27,0,0,1,107.45,410.35Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 104.845px 414.564px;"
                            id="elkm72rlg4abe" class="animable"></path>
                        <path d="M102.39,409.52a2.5,2.5,0,0,0-.15.83v4.59H73.57a2.71,2.71,0,1,1,0-5.42Z"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 86.625px 412.23px;"
                              id="el1lhxtyrceyb" class="animable"></path>
                        <path
                            d="M100.15,425.74a10.73,10.73,0,0,0-.14-1.51,10.43,10.43,0,0,0-.33-1.39,3.33,3.33,0,0,0-.23-.65,6.5,6.5,0,0,0-.25-.61q-.14-.29-.3-.57h0a8.43,8.43,0,0,0-.7-1q-.18-.21-.39-.42a4.37,4.37,0,0,0-.86-.68,3.71,3.71,0,0,0-2-.58c-2.52,0-4.64,2.74-5.08,6.36h0a11.06,11.06,0,0,0-.08,1.42c0,4.31,2.31,7.8,5.16,7.8s5.17-3.49,5.17-7.8C100.16,426,100.16,425.86,100.15,425.74Zm-5.82,3.54a2.77,2.77,0,1,1,2.76-2.77A2.78,2.78,0,0,1,94.33,429.28Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 94.9726px 426.12px;"
                            id="elhor6jh8pwxj" class="animable"></path>
                        <path d="M97.1,426.51a2.77,2.77,0,1,1-2.77-2.77A2.77,2.77,0,0,1,97.1,426.51Z"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 94.33px 426.51px;"
                              id="elu6ihb8wxw" class="animable"></path>
                        <path d="M97.1,426.51a2.77,2.77,0,1,1-2.77-2.77A2.77,2.77,0,0,1,97.1,426.51Z"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 94.33px 426.51px;"
                              id="el4t8d4jb9pt" class="animable"></path>
                        <path
                            d="M201.6,377.17l-6.09-3.78-2.94-4.29L178.62,346l-36.4-1.55L105.81,346l-14,23.12-2.93,4.29-6.11,3.78s-7,10.6-7.45,21.81c0,0,.64,5,2,10.54h25a2.19,2.19,0,0,1,.37-.71,2.34,2.34,0,0,1,.25-.3,3.31,3.31,0,0,1,.3-.25,2.56,2.56,0,0,1,1.53-.51,2.59,2.59,0,0,1,1.84.76,2.72,2.72,0,0,1,.62,1h69.83a2.48,2.48,0,0,1,.62-1,2.6,2.6,0,0,1,1.83-.76l.35,0,.15,0h0a1.06,1.06,0,0,1,.19.06l.07,0h0a1.94,1.94,0,0,1,.36.15,1.3,1.3,0,0,1,.34.21l.31.26c.09.09.17.2.26.3a1.48,1.48,0,0,1,.17.28l.06.11c.05.09.09.21.14.31h25c1.33-5.52,2-10.54,2-10.54C208.6,387.77,201.6,377.17,201.6,377.17ZM100.41,365.94l6.3-14.37a2.85,2.85,0,0,1,2.55-1.72l33-1.05,32.94,1.05a2.88,2.88,0,0,1,2.56,1.72l6.3,14.37a2.89,2.89,0,0,1-2.65,4.06H103.06A2.89,2.89,0,0,1,100.41,365.94Zm-14.68,41a8.29,8.29,0,0,1-7-4.22,8.25,8.25,0,0,1-1.08-4.09v-3.74a8.3,8.3,0,0,1,1-4l.06-.12a8.32,8.32,0,0,1,7.19-4.35l56.33-.73,56.31.73a8.31,8.31,0,0,1,7.2,4.35l.06.12a8.29,8.29,0,0,1,1,4v3.74a8.45,8.45,0,0,1-1.06,4.09,8.36,8.36,0,0,1-7,4.22"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.115px 376.995px;"
                            id="elutrktan5rs" class="animable"></path>
                        <rect x="172.47" y="389.29" width="30.03" height="15.54" rx="5.06"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 187.485px 397.06px;"
                              id="elzmn09ubvlc" class="animable"></rect>
                        <rect x="172.47" y="389.29" width="30.03" height="15.54" rx="5.06"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 187.485px 397.06px;"
                              id="el25xly6zitx4" class="animable"></rect>
                        <line x1="202.5" y1="396.78" x2="172.47" y2="396.78"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 187.485px 396.78px;"
                              id="eljayf4t45ewc" class="animable"></line>
                        <line x1="182.18" y1="396.78" x2="182.18" y2="404.83"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 182.18px 400.805px;"
                              id="eled6ukegl7u" class="animable"></line>
                        <path
                            d="M112,399.77a5.05,5.05,0,0,1-5,5.06H87a5.06,5.06,0,0,1-5.06-5.06v-5.42A5.07,5.07,0,0,1,87,389.29H106.9a5.06,5.06,0,0,1,5,5.06Zm44.94,1.08a4.08,4.08,0,0,1-4.08,4.08H131.62a4.08,4.08,0,0,1-4.08-4.08v-7.08a4.07,4.07,0,0,1,4.08-4.07h21.19a4.08,4.08,0,0,1,4.08,4.07Zm45.61-1.08a5.05,5.05,0,0,1-5.06,5.06H177.53a5.06,5.06,0,0,1-5.06-5.06v-5.42a5.07,5.07,0,0,1,5.06-5.06h19.91a5.06,5.06,0,0,1,5.06,5.06Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.245px 397.11px;"
                            id="eltld8q54kaz" class="animable"></path>
                        <rect x="172.47" y="389.29" width="30.03" height="15.54" rx="5.06"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 187.485px 397.06px;"
                              id="elt0no3mo8xek" class="animable"></rect>
                        <path
                            d="M181.37,370H103.06a2.89,2.89,0,0,1-2.65-4.05l6.3-14.37a2.86,2.86,0,0,1,2.55-1.73l33-1.05,32.95,1.05a2.87,2.87,0,0,1,2.56,1.73L184,366A2.89,2.89,0,0,1,181.37,370Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.194px 359.4px;"
                            id="elqkkfrn5eyz" class="animable"></path>
                        <path
                            d="M182.18,410.35v8.58a2.6,2.6,0,0,1-5.17.32c0-.1,0-.21,0-.32v-8.58a2.55,2.55,0,0,1,.14-.84,2.48,2.48,0,0,1,.62-1,2.6,2.6,0,0,1,1.83-.76l.35,0,.15,0h0a1.06,1.06,0,0,1,.19.06l.07,0h0a1.94,1.94,0,0,1,.36.15,2.69,2.69,0,0,1,.65.47c.09.09.17.2.26.3a1.48,1.48,0,0,1,.17.28l.06.11c.05.09.09.21.14.31h0A2.49,2.49,0,0,1,182.18,410.35Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 179.595px 414.606px;"
                            id="elgsxlni3kzmo" class="animable"></path>
                        <path d="M177.13,409.51a2.55,2.55,0,0,0-.14.84v4.59H107.45v-4.59a2.27,2.27,0,0,0-.15-.83h69.83Z"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.215px 412.225px;"
                              id="elbg63005pd07" class="animable"></path>
                        <path
                            d="M213.57,412.23a2.72,2.72,0,0,1-2.71,2.71H182.18v-4.59a2.49,2.49,0,0,0-.13-.83h28.81a2.71,2.71,0,0,1,2.71,2.71Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 197.81px 412.23px;"
                            id="elugf72iz85yk" class="animable"></path>
                        <path d="M181.42,408.51a2.69,2.69,0,0,0-.65-.47A2.21,2.21,0,0,1,181.42,408.51Z"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 181.095px 408.275px;"
                              id="els1iwigo6m8" class="animable"></path>
                        <path d="M85.89,384.4s5.49-6.28,56.33-6.28,56.32,6.28,56.32,6.28"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.215px 381.26px;"
                              id="elh6k3udyx626" class="animable"></path>
                        <path
                            d="M161,341.73c0,2.68-8.39,3.07-18.74,3.07s-18.75-.39-18.75-3.07c0-2.26,14.17-4.8,14.17-4.84a4,4,0,1,1,7.91,0S161,339.35,161,341.73Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.255px 338.546px;"
                            id="elld7r7tsgdj" class="animable"></path>
                        <path d="M119.38,365l10.28-9"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 124.52px 360.5px;"
                              id="elutj2abyj17" class="animable"></path>
                        <path d="M149.45,352.41c1-.83,2.05-1.65,3.09-2.47"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 150.995px 351.175px;"
                              id="elfu85ema8f76" class="animable"></path>
                        <path d="M133.39,366.62q6.31-6.06,13-11.69"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 139.89px 360.775px;"
                              id="elaq2zxh93rtl" class="animable"></path>
                        <path d="M170.87,368.08a64.28,64.28,0,0,0,7.75-7.37"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 174.745px 364.395px;"
                              id="el4do4ar193na" class="animable"></path>
                    </g>
                    <g id="freepik--City--inject-46" class="animable animator-hidden"
                       style="transform-origin: 236.48px 263.955px;">
                        <line x1="55.59" y1="420.92" x2="55.59" y2="433.91"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 55.59px 427.415px;"
                              id="elt3gt19itv6e" class="animable"></line>
                        <polyline points="183.73 343.9 183.73 165.09 120.22 94 55.59 94 55.59 412.22"
                                  style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 119.66px 253.11px;"
                                  id="el0h5bfh4s83z" class="animable"></polyline>
                        <line x1="75.37" y1="104.98" x2="62.13" y2="97.63"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 68.75px 101.305px;"
                              id="elyxmdqriye5b" class="animable"></line>
                        <line x1="172.94" y1="159.1" x2="81.92" y2="108.61"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 127.43px 133.855px;"
                              id="elx4vlh55gewd" class="animable"></line>
                        <line x1="99.14" y1="130.81" x2="99.14" y2="337.84"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 99.14px 234.325px;"
                              id="elel18qykele7" class="animable"></line>
                        <line x1="120.94" y1="143.66" x2="120.94" y2="331.87"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 120.94px 237.765px;"
                              id="elhixl8o3dcac" class="animable"></line>
                        <line x1="142.74" y1="156.51" x2="142.74" y2="327.55"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 142.74px 242.03px;"
                              id="eloian0ngi1pa" class="animable"></line>
                        <line x1="164.54" y1="321.87" x2="164.54" y2="336.28"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 164.54px 329.075px;"
                              id="elgcl9hmv3n3k" class="animable"></line>
                        <line x1="164.54" y1="169.35" x2="164.54" y2="314.93"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 164.54px 242.14px;"
                              id="eld8i580ldlyf" class="animable"></line>
                        <line x1="77.33" y1="142.12" x2="77.33" y2="372.09"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 77.33px 257.105px;"
                              id="eloezcxtks8gq" class="animable"></line>
                        <line x1="77.33" y1="117.96" x2="77.33" y2="134.59"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 77.33px 126.275px;"
                              id="elt9ffnkbs1j" class="animable"></line>
                        <path
                            d="M189,295h11.9a4.85,4.85,0,0,1,4.83,4.83v25.3a4.82,4.82,0,0,0,4.82,4.82h5.19a4.82,4.82,0,0,0,4.82-4.82v-51h-.05V248.62h1v15.73a3.68,3.68,0,0,1,.3-.39l38.32-22c.81-.88,1.27,0,1.27-1.18V209.28l2.64-1.89L312,173.08l1-13.65v12.92l.2-.14v153A4.83,4.83,0,0,0,318,330h6.29a4.82,4.82,0,0,0,4.83-4.82l1.51-57.11a3.83,3.83,0,0,1,.38-1.59L340.38,247h.7V224.87A3.9,3.9,0,0,1,345,221h1.88l1-15.64V221h1a3.91,3.91,0,0,1,3.9,3.91v1h4.38v-1a3.91,3.91,0,0,1,3.91-3.91h1.66V205.32l1,15.64H365a3.91,3.91,0,0,1,3.9,3.91V247h.7l9.36,19.53a4,4,0,0,1,.39,1.59l1.53,57.05a4.83,4.83,0,0,0,4.83,4.83h8.84a4.82,4.82,0,0,1,4.82,4.82v6.65a4.82,4.82,0,0,0,4.82,4.82h6.31a4.81,4.81,0,0,1,4.76,4l2.11,11"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 303.185px 260.36px;"
                            id="eldra9ztk9za8" class="animable"></path>
                    </g>
                    <g id="freepik--Clouds--inject-46" class="animable" style="transform-origin: 283.259px 114.485px;">
                        <path
                            d="M333.39,170.13h97.72c12.52,0,15.54-17.52,3.72-21.64l-.46-.15c13.08-10.9-15.61-33.87-46.78-2.06,2.43-10.61-25.28-6.78-33.76,7.7C350.82,144.47,324.4,161,333.39,170.13Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 386.902px 150.104px;"
                            id="elvewprn76v6" class="animable"></path>
                        <path
                            d="M128.2,92.6h55.22s13-4.88,11.27-17.79-21.22-2.16-21.22-2.16,5.92-18-13-12.9-20.77,23-20.77,23S114.82,78.38,128.2,92.6Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 159.548px 75.72px;"
                            id="elcnh3rf2m36o" class="animable"></path>
                    </g>
                    <g id="freepik--traffic-light--inject-46" class="animable animator-hidden"
                       style="transform-origin: 431.98px 321.235px;">
                        <path
                            d="M455.71,250.56V442.12h-6V250.56a13.48,13.48,0,0,0-13.46-13.46H431v-6h5.29A19.48,19.48,0,0,1,455.71,250.56Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 443.355px 336.61px;"
                            id="el3yhezrkmqeo" class="animable"></path>
                        <path
                            d="M408.25,200.35v64.16H431V200.35Zm4.37,50.92a8.1,8.1,0,0,1-.06-.86,7.05,7.05,0,0,1,14.1,0,8.1,8.1,0,0,1-.06.86,7.91,7.91,0,0,1,.06.85,7.05,7.05,0,0,1-14.1,0A7.91,7.91,0,0,1,412.62,251.27Zm0-19.25a8.28,8.28,0,0,1-.06-.86,7.05,7.05,0,0,1,14.1,0,8.28,8.28,0,0,1-.06.86,7.91,7.91,0,0,1,.06.85,7,7,0,0,1-14.1,0A7.91,7.91,0,0,1,412.62,232Zm0-19.26a7.91,7.91,0,0,1-.06-.85,7.05,7.05,0,0,1,14.1,0,7.91,7.91,0,0,1-.06.85,8.1,8.1,0,0,1,.06.86,7.05,7.05,0,0,1-14.1,0A8.1,8.1,0,0,1,412.62,212.76Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.625px 232.43px;"
                            id="el61f4w9v4qlu" class="animable"></path>
                        <path d="M431,264.63a4.42,4.42,0,0,1-4.43,4.42H412.68a4.42,4.42,0,0,1-4.43-4.42v-.12H431Z"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.625px 266.78px;"
                              id="el0dr8ckfqmym5" class="animable"></path>
                        <path
                            d="M419.61,219a7,7,0,0,0,7-6.19,8.1,8.1,0,0,1,.06.86,7.05,7.05,0,0,1-14.1,0,8.1,8.1,0,0,1,.06-.86A7,7,0,0,0,419.61,219Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.62px 216.765px;"
                            id="els9zo7a32iar" class="animable"></path>
                        <path
                            d="M419.61,204.86a7,7,0,0,1,7.05,7,7.91,7.91,0,0,1-.06.85,7,7,0,0,1-14,0,7.91,7.91,0,0,1-.06-.85A7,7,0,0,1,419.61,204.86Z"
                            style="fill: rgb(109, 76, 254); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.6px 212.285px;"
                            id="eljkkkqqj2ec8" class="animable"></path>
                        <path
                            d="M419.61,238.21a7,7,0,0,0,7-6.19,7.91,7.91,0,0,1,.06.85,7,7,0,0,1-14.1,0,7.91,7.91,0,0,1,.06-.85A7,7,0,0,0,419.61,238.21Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.62px 235.97px;"
                            id="el9z1q8fv3ul" class="animable"></path>
                        <path
                            d="M419.61,224.11a7.05,7.05,0,0,1,7.05,7,8.28,8.28,0,0,1-.06.86,7,7,0,0,1-14,0,8.28,8.28,0,0,1-.06-.86A7.05,7.05,0,0,1,419.61,224.11Z"
                            style="fill: rgb(153, 153, 153); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.6px 231.54px;"
                            id="elekcbkufylr9" class="animable"></path>
                        <path
                            d="M419.61,257.46a7,7,0,0,0,7-6.19,7.91,7.91,0,0,1,.06.85,7.05,7.05,0,0,1-14.1,0,7.91,7.91,0,0,1,.06-.85A7,7,0,0,0,419.61,257.46Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.62px 255.22px;"
                            id="el79t2wmwyt6j" class="animable"></path>
                        <path
                            d="M419.61,243.37a7,7,0,0,1,7.05,7,8.1,8.1,0,0,1-.06.86,7,7,0,0,1-14,0,8.1,8.1,0,0,1-.06-.86A7,7,0,0,1,419.61,243.37Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.6px 250.8px;"
                            id="eldcw3xwnjjmi" class="animable"></path>
                    </g>
                    <g id="freepik--fire-hydrant--inject-46" class="animable animator-hidden animator-active"
                       style="transform-origin: 411.95px 403.34px;">
                        <path d="M435.44,392a1.78,1.78,0,0,1,1.78,1.78v1.95a1.78,1.78,0,0,1-1.78,1.78h-1V392Z"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 435.83px 394.755px;"
                              id="el0tphpg4kbce" class="animable"></path>
                        <path d="M388.45,392h1v5.51h-1a1.77,1.77,0,0,1-1.77-1.78v-1.95A1.78,1.78,0,0,1,388.45,392Z"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 388.065px 394.755px;"
                              id="elj8eyae6gtgo" class="animable"></path>
                        <rect x="394.94" y="386.09" width="6.39" height="17.25"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 398.135px 394.715px;"
                              id="elt25589qwpre" class="animable"></rect>
                        <rect x="422.57" y="386.09" width="6.39" height="17.25"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 425.765px 394.715px;"
                              id="elw0bcauhu9c8" class="animable"></rect>
                        <polygon
                            points="428.96 383.7 434.46 383.7 434.46 391.96 434.46 397.47 434.46 405.73 428.96 405.73 428.96 403.34 428.96 386.09 428.96 383.7"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 431.71px 394.715px;"
                            id="elsymd7ddshm7" class="animable"></polygon>
                        <polygon
                            points="389.43 383.7 394.94 383.7 394.94 386.09 394.94 403.34 394.94 405.73 389.43 405.73 389.43 397.47 389.43 391.96 389.43 383.7"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 392.185px 394.715px;"
                            id="el9vzvg9aivl6" class="animable"></polygon>
                        <path d="M401.33,375.18a10.62,10.62,0,0,1,21.24,0v.27H401.33Z"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 411.95px 370.005px;"
                              id="eltplxjppmc8b" class="animable"></path>
                        <path
                            d="M401.33,386.09v45.34a5.53,5.53,0,0,1,1.42-.2h18.39a5.67,5.67,0,0,1,1.43.2V381H401.33Zm12.48,25.37a2.76,2.76,0,0,1,2.76-2.75h0a2.75,2.75,0,0,1,2.75,2.75v14.23a2.76,2.76,0,0,1-5.51,0Zm-9.24,0a2.76,2.76,0,0,1,5.51,0v14.23a2.76,2.76,0,0,1-5.51,0Zm-1.71-16.78a9.09,9.09,0,1,1,9.09,9.09A9.08,9.08,0,0,1,402.86,394.68Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 411.95px 406.215px;"
                            id="elwm9ny8xgrcp" class="animable"></path>
                        <path
                            d="M421.14,431.23a5.67,5.67,0,0,1,1.43.2,5.26,5.26,0,0,1,3.83,5.06v5.63H397.49v-5.63a5.26,5.26,0,0,1,3.84-5.06,5.53,5.53,0,0,1,1.42-.2Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 411.945px 436.675px;"
                            id="el5ow84g4xot9" class="animable"></path>
                        <path
                            d="M412,403.77a9.09,9.09,0,1,0-9.09-9.09A9.09,9.09,0,0,0,412,403.77Zm0-11.25a2.17,2.17,0,1,1-2.17,2.16A2.16,2.16,0,0,1,412,392.52Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 412px 394.68px;"
                            id="elnavbhe1pmo8" class="animable"></path>
                        <path d="M414.11,394.68a2.17,2.17,0,1,1-2.16-2.16A2.17,2.17,0,0,1,414.11,394.68Z"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 411.94px 394.69px;"
                              id="el27aqtbu327q" class="animable"></path>
                        <path
                            d="M400.24,381a2.75,2.75,0,0,1,0-5.5h23.41a2.75,2.75,0,0,1,2.75,2.75h0a2.75,2.75,0,0,1-2.75,2.75H400.24Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 411.945px 378.25px;"
                            id="el65ty5qlf1h6" class="animable"></path>
                        <path
                            d="M416.57,408.71h0a2.75,2.75,0,0,1,2.75,2.75v14.23a2.76,2.76,0,0,1-5.51,0V411.46A2.76,2.76,0,0,1,416.57,408.71Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 416.565px 418.497px;"
                            id="el9fpo8yvo6z" class="animable"></path>
                        <path
                            d="M407.32,408.71a2.75,2.75,0,0,1,2.76,2.75v14.23a2.76,2.76,0,0,1-5.51,0V411.46A2.75,2.75,0,0,1,407.32,408.71Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 407.325px 418.497px;"
                            id="elequryrmwh9u" class="animable"></path>
                    </g>
                    <g id="freepik--Character--inject-46" class="animable"
                       style="transform-origin: 279.995px 264.857px;">
                        <path
                            d="M243.64,298.3l6.8,30.79a90.51,90.51,0,0,0,10.06,25.83l30.41,52.44,13.31-4.52S297,388.72,291.73,375c-5.56-14.39-11.09-27.84-20.66-40h0l-1-35.45Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 273.93px 352.83px;"
                            id="ele0ond9nremc" class="animable"></path>
                        <path
                            d="M226.18,311.22s-15.6,97.41-14.42,96.64,14.81.19,14.81.19l11-38.27a141.89,141.89,0,0,0,5.13-28.92l.82-11.37,13.24-31-23.39-.28C233.75,298.18,226.18,311.22,226.18,311.22Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 234.228px 353.13px;"
                            id="elukjp2cbivit" class="animable"></path>
                        <path d="M208.58,252.15v.11a3.47,3.47,0,0,0-1.11-.16C207.77,252.1,208.14,252.11,208.58,252.15Z"
                              style="fill: rgb(109, 76, 254); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 208.025px 252.18px;"
                              id="elp6khyrt2hhf" class="animable"></path>
                        <path
                            d="M241.5,252.34a3.66,3.66,0,0,1-3.82,4.53c-8.78-.64-26.16-1.93-28.14-2.16a8.11,8.11,0,0,0-1,0,7.7,7.7,0,0,0-1.05,0c-2,.18-21.55,1.08-30.67,1.49a3.66,3.66,0,0,1-3.75-4.37l6.16-31.3a6.26,6.26,0,0,1,6.21-5l42.25.51a6.24,6.24,0,0,1,6,4.74Z"
                            style="fill: rgb(153, 153, 153); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 207.304px 236.205px;"
                            id="elbolwuz79ci5" class="animable"></path>
                        <path d="M175.62,238.61l2.5.41a222.26,222.26,0,0,0,61.33,1.58h0"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 207.535px 240.31px;"
                              id="elmgv61i9qhs" class="animable"></path>
                        <path
                            d="M194.79,218.86c4.34,13,10.48,30.31,12.17,31.49a1.73,1.73,0,0,0,1,.38c.79,0,1.25-.88,1.55-1.61q6-14.76,11.93-29.5"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 208.115px 234.795px;"
                            id="elmpgz08ynd8e" class="animable"></path>
                        <path d="M183.73,223.53c.65-2.55,2.57-3.32,5.81-3"
                              style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 186.635px 221.996px;"
                              id="elpk70l0u0vsj" class="animable"></path>
                        <path d="M178.75,244.74q1.88-8.61,3.74-17.2c.06-.28.13-.56.19-.85"
                              style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 180.715px 235.715px;"
                              id="el37gcyql87f2" class="animable"></path>
                        <path
                            d="M227.09,236.5c-.77,7.24,0,15.95,1.26,23.85a125.75,125.75,0,0,1-2.16,50.48h0l3.07.91a77.57,77.57,0,0,0,41.61.67h0c-1.95-16.47-1.1-25.27,6.08-40.22,1.56-3.26,4.45-14.59,4.5-17.76.23-14.15-3.33-17.47-3.33-17.47S229.32,215.56,227.09,236.5Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 253.825px 271.119px;"
                            id="elw96lzn356ds" class="animable"></path>
                        <path
                            d="M211.76,407.86s-5.36,23.72-6.53,23.71-14.17,11.13-12.6,10.76,18.71.24,18.71.24L222.78,431l1.81,11.73,5.85.07.23-19.11L225,413.09l1.62-5Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 211.584px 425.33px;"
                            id="eld01qaocojjc" class="animable"></path>
                        <path
                            d="M290.88,407.13s8.95,22.61,8,23.26c-.46.3-.12,3-2.45,5.7-2.68,3.13-8,6.36-8,6.36,13.25,3.28,18.75-3.63,18.75-3.63L313,420l8.11,8.67,4.87-3.24-10.59-15.92-3.25-.75a12.34,12.34,0,0,1-7.95-5.94h0Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 307.205px 423.077px;"
                            id="elgzffoztkmxt" class="animable"></path>
                        <path
                            d="M204,190.79c-2.64,3.34-3.28,3.88-6.8,8.81-1.64-6.29-3.05-6.3-9.35-24.66,0,0-10.17-9.73-10.07-10.7.43-4.15,1.06-11.65,1.06-11.65l10.21-1,.33,13.19,2.27-4,1-4.56s.08-2.4,1.68-2.57.83,6.51,1.47,8.53c1.8,5.69-1.94,11.08-1.94,11.08Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 190.89px 175.595px;"
                            id="els3tlsc62ogo" class="animable"></path>
                        <path
                            d="M194.32,142v.11c0,.08-.06.74-.1,1s-.1.76-.16,1.14-.14.93-.21,1.4c0,0,0,.09,0,.13-.05.38-.12.75-.17,1.14s-.1.77-.18,1.15-.09.59-.14.89c-.08.49-.13,1-.21,1.49s-.15,1-.23,1.49c-.06.34-.09.69-.14,1,0,.18-.22,1.37-.44,2.88-.48,3.09-1.16,7.52-1.16,7.52l0,.12v0l0,.19a.68.68,0,0,1-.19.42,2.83,2.83,0,0,1-.79.45,4,4,0,0,1-.83.24c-.32.08-.64.13-1,.18a14.86,14.86,0,0,1-2.21.18c-.46,0-.92,0-1.36,0-.24,0-.5,0-.74-.06l-.71-.12a8.33,8.33,0,0,1-1.47-.37,3.47,3.47,0,0,1-1.18-.6c-.05,0-.09-.08-.09-.15l-.18-1.34c0-.37-.09-.73-.14-1.1-.07-.55-.13-1.09-.2-1.64l-.15-1.15c-.06-.51-.13-1-.19-1.53,0-.34-.08-.67-.13-1,0-.1,0-.23,0-.38-.05-.41-.11-.93-.15-1.23s-.34-2.71-.53-4.32c-.1-.79-.18-1.41-.2-1.56-.06-.5-.13-1-.19-1.49s-.14-1.09-.2-1.63c0-.21-.05-.41-.08-.61-.07-.56-.15-1.11-.21-1.66,0-.35-.08-.7-.1-1.06a.41.41,0,0,1,0-.11.39.39,0,0,1,.1-.31l.08-.07a1.78,1.78,0,0,1,.45-.24,2.81,2.81,0,0,1,.49-.16,15.29,15.29,0,0,1,2.22-.44c.49-.06,1-.1,1.47-.14.68-.06,1.34-.09,2-.12.45,0,.9,0,1.35,0,.7,0,1.39,0,2.09,0l.84,0,.84.07,1,.07,1.28.17.47.08a9.94,9.94,0,0,1,1.35.37.26.26,0,0,1,.15.07.51.51,0,0,1,.13.12A.67.67,0,0,1,194.32,142Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 186.154px 152.825px;" id="el2mezch36wtf"
                            class="animable"></path>
                        <path d="M188.77,162.82a1.28,1.28,0,0,0,.42-.13"
                              style="fill: rgb(109, 76, 254); transform-origin: 188.98px 162.755px;" id="elgqzgbrnc2xn"
                              class="animable"></path>
                        <path d="M182.29,162.63a8.21,8.21,0,0,0,2.29.39,15.86,15.86,0,0,0,2.07-.05"
                              style="fill: rgb(109, 76, 254); transform-origin: 184.47px 162.832px;" id="eloh798ihaf39"
                              class="animable"></path>
                        <path
                            d="M195.08,141.29a.86.86,0,0,1-.13.29.88.88,0,0,1-.6.4h0a.67.67,0,0,0-.18-.47.4.4,0,0,0-.13-.13.35.35,0,0,0-.15-.07,9.92,9.92,0,0,0-1.35-.36l-.47-.08-1.28-.18c-.31,0-.64-.05-1-.08l-.84-.05-.84,0c-.7,0-1.39,0-2.09,0q-.67,0-1.35,0c-.67,0-1.34.06-2,.12-.49,0-1,.08-1.47.14a15.29,15.29,0,0,0-2.22.44,4,4,0,0,0-.49.17,1.74,1.74,0,0,0-.45.23.6.6,0,0,0-.08.08.39.39,0,0,0-.1.31.41.41,0,0,0,0,.11h-.07a.83.83,0,0,1-.57-.29h0a.8.8,0,0,1-.1-.43,10.71,10.71,0,0,1,.14-1.79.85.85,0,0,1,.11-.34,1.21,1.21,0,0,1,.67-.47,8.46,8.46,0,0,1,1-.29l1.26-.27c.71-.13,1.45-.22,2.17-.31.35,0,.7-.07,1-.08l1.13-.07c.46,0,.92,0,1.38-.05a4.51,4.51,0,0,0,.52,0c.32,0,.62,0,.94,0s.45,0,.67,0c.65,0,1.3.09,1.95.17s1.05.13,1.58.23l.9.17,1.12.27a3.3,3.3,0,0,1,.49.19l.32.14a.79.79,0,0,1,.43.6C195,139.83,195.06,141.08,195.08,141.29Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 186.099px 139.965px;" id="elhjhbl03l0p7"
                            class="animable"></path>
                        <path
                            d="M194.21,138.67a.48.48,0,0,1,0,.12h-.05a3.3,3.3,0,0,0-.49-.19l-1.12-.27-.9-.17c-.53-.1-1.05-.17-1.58-.23s-1.3-.15-1.95-.17c-.22,0-.45,0-.67,0s-.62,0-.94,0a4.51,4.51,0,0,1-.52,0c-.46,0-.92.05-1.38.05l-1.13.07c-.34,0-.69,0-1,.08-.72.09-1.46.18-2.17.31l-1.26.27a8.46,8.46,0,0,0-1,.29h0a.81.81,0,0,1,.05-.31c.08-.61.14-1.35.23-2a.49.49,0,0,1,.21-.35,3,3,0,0,1,.64-.4,11.3,11.3,0,0,1,1.48-.52c.49-.12,1-.23,1.47-.32.29-.05.57-.09.86-.12l.63-.08c.18,0,.36,0,.53,0l.84-.06c.25,0,.51,0,.77,0,.48,0,1,0,1.43,0s1,.09,1.45.14l.81.11a7.69,7.69,0,0,1,1,.16,14.14,14.14,0,0,1,2.12.58,4.53,4.53,0,0,1,1.22.62.69.69,0,0,1,.33.45C194.1,137.3,194.14,138.05,194.21,138.67Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 186.132px 136.75px;" id="elbzgtzsoi3n8"
                            class="animable"></path>
                        <path
                            d="M194.32,142v.11c0,.08-.06.74-.1,1s-.1.76-.16,1.14-.14.93-.21,1.4c0,0,0,.09,0,.13-.05.38-.12.75-.17,1.14s-.1.77-.18,1.15-.09.59-.14.89c-.08.49-.13,1-.21,1.49s-.15,1-.23,1.49c-.06.34-.09.69-.14,1,0,.18-.22,1.37-.44,2.88-.48,3.09-1.16,7.52-1.16,7.52l0,.12v0l0,.19a.68.68,0,0,1-.19.42,2.83,2.83,0,0,1-.79.45,4,4,0,0,1-.83.24c-.32.08-.64.13-1,.18a14.86,14.86,0,0,1-2.21.18c-.46,0-.92,0-1.36,0-.24,0-.5,0-.74-.06l-.71-.12a8.33,8.33,0,0,1-1.47-.37,3.47,3.47,0,0,1-1.18-.6c-.05,0-.09-.08-.09-.15l-.18-1.34c0-.37-.09-.73-.14-1.1-.07-.55-.13-1.09-.2-1.64l-.15-1.15c-.06-.51-.13-1-.19-1.53,0-.34-.08-.67-.13-1,0-.1,0-.23,0-.38-.05-.41-.11-.93-.15-1.23s-.34-2.71-.53-4.32c-.1-.79-.18-1.41-.2-1.56-.06-.5-.13-1-.19-1.49s-.14-1.09-.2-1.63c0-.21-.05-.41-.08-.61-.07-.56-.15-1.11-.21-1.66,0-.35-.08-.7-.1-1.06a.41.41,0,0,1,0-.11.39.39,0,0,1,.1-.31l.08-.07a1.78,1.78,0,0,1,.45-.24,2.81,2.81,0,0,1,.49-.16,15.29,15.29,0,0,1,2.22-.44c.49-.06,1-.1,1.47-.14.68-.06,1.34-.09,2-.12.45,0,.9,0,1.35,0,.7,0,1.39,0,2.09,0l.84,0,.84.07,1,.07,1.28.17.47.08a9.94,9.94,0,0,1,1.35.37.26.26,0,0,1,.15.07.51.51,0,0,1,.13.12A.67.67,0,0,1,194.32,142Z"
                            style="fill: rgb(109, 76, 254); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 186.154px 152.825px;"
                            id="elezfxdcdtk8i" class="animable"></path>
                        <path d="M188.77,162.82a1.28,1.28,0,0,0,.42-.13"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 188.98px 162.755px;"
                              id="elwi2ew0sdz6" class="animable"></path>
                        <path d="M182.29,162.63a8.21,8.21,0,0,0,2.29.39,15.86,15.86,0,0,0,2.07-.05"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 184.47px 162.832px;"
                              id="el1watqk83rfn" class="animable"></path>
                        <path
                            d="M195.08,141.29a.86.86,0,0,1-.13.29.88.88,0,0,1-.6.4h0a.67.67,0,0,0-.18-.47.4.4,0,0,0-.13-.13.35.35,0,0,0-.15-.07,9.92,9.92,0,0,0-1.35-.36l-.47-.08-1.28-.18c-.31,0-.64-.05-1-.08l-.84-.05-.84,0c-.7,0-1.39,0-2.09,0q-.67,0-1.35,0c-.67,0-1.34.06-2,.12-.49,0-1,.08-1.47.14a15.29,15.29,0,0,0-2.22.44,4,4,0,0,0-.49.17,1.74,1.74,0,0,0-.45.23.6.6,0,0,0-.08.08.39.39,0,0,0-.1.31.41.41,0,0,0,0,.11h-.07a.83.83,0,0,1-.57-.29h0a.8.8,0,0,1-.1-.43,10.71,10.71,0,0,1,.14-1.79.85.85,0,0,1,.11-.34,1.21,1.21,0,0,1,.67-.47,8.46,8.46,0,0,1,1-.29l1.26-.27c.71-.13,1.45-.22,2.17-.31.35,0,.7-.07,1-.08l1.13-.07c.46,0,.92,0,1.38-.05a4.51,4.51,0,0,0,.52,0c.32,0,.62,0,.94,0s.45,0,.67,0c.65,0,1.3.09,1.95.17s1.05.13,1.58.23l.9.17,1.12.27a3.3,3.3,0,0,1,.49.19l.32.14a.79.79,0,0,1,.43.6C195,139.83,195.06,141.08,195.08,141.29Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 186.099px 139.965px;"
                            id="elulhtiz5e2w" class="animable"></path>
                        <path
                            d="M194.21,138.67a.48.48,0,0,1,0,.12h-.05a3.3,3.3,0,0,0-.49-.19l-1.12-.27-.9-.17c-.53-.1-1.05-.17-1.58-.23s-1.3-.15-1.95-.17c-.22,0-.45,0-.67,0s-.62,0-.94,0a4.51,4.51,0,0,1-.52,0c-.46,0-.92.05-1.38.05l-1.13.07c-.34,0-.69,0-1,.08-.72.09-1.46.18-2.17.31l-1.26.27a8.46,8.46,0,0,0-1,.29h0a.81.81,0,0,1,.05-.31c.08-.61.14-1.35.23-2a.49.49,0,0,1,.21-.35,3,3,0,0,1,.64-.4,11.3,11.3,0,0,1,1.48-.52c.49-.12,1-.23,1.47-.32.29-.05.57-.09.86-.12l.63-.08c.18,0,.36,0,.53,0l.84-.06c.25,0,.51,0,.77,0,.48,0,1,0,1.43,0s1,.09,1.45.14l.81.11a7.69,7.69,0,0,1,1,.16,14.14,14.14,0,0,1,2.12.58,4.53,4.53,0,0,1,1.22.62.69.69,0,0,1,.33.45C194.1,137.3,194.14,138.05,194.21,138.67Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 186.132px 136.75px;"
                            id="elw4xs6153nvh" class="animable"></path>
                        <path
                            d="M194.32,142v.11c0,.08-.06.74-.1,1s-.1.76-.16,1.14-.14.93-.21,1.4c0,0,0,.09,0,.13-.05.38-.12.75-.17,1.14s-.1.77-.18,1.15-.09.59-.14.89c-.08.49-.13,1-.21,1.49s-.15,1-.23,1.49c-.06.34-.09.69-.14,1,0,.18-.22,1.37-.44,2.88-.48,3.09-1.16,7.52-1.16,7.52l0,.12v0l0,.19a.68.68,0,0,1-.19.42,2.83,2.83,0,0,1-.79.45,4,4,0,0,1-.83.24c-.32.08-.64.13-1,.18a14.86,14.86,0,0,1-2.21.18c-.46,0-.92,0-1.36,0-.24,0-.5,0-.74-.06l-.71-.12a8.33,8.33,0,0,1-1.47-.37,3.47,3.47,0,0,1-1.18-.6c-.05,0-.09-.08-.09-.15l-.18-1.34c0-.37-.09-.73-.14-1.1-.07-.55-.13-1.09-.2-1.64l-.15-1.15c-.06-.51-.13-1-.19-1.53,0-.34-.08-.67-.13-1,0-.1,0-.23,0-.38-.05-.41-.11-.93-.15-1.23s-.34-2.71-.53-4.32c-.1-.79-.18-1.41-.2-1.56-.06-.5-.13-1-.19-1.49s-.14-1.09-.2-1.63c0-.21-.05-.41-.08-.61-.07-.56-.15-1.11-.21-1.66,0-.35-.08-.7-.1-1.06a.41.41,0,0,1,0-.11.39.39,0,0,1,.1-.31l.08-.07a1.78,1.78,0,0,1,.45-.24,2.81,2.81,0,0,1,.49-.16,15.29,15.29,0,0,1,2.22-.44c.49-.06,1-.1,1.47-.14.68-.06,1.34-.09,2-.12.45,0,.9,0,1.35,0,.7,0,1.39,0,2.09,0l.84,0,.84.07,1,.07,1.28.17.47.08a9.94,9.94,0,0,1,1.35.37.26.26,0,0,1,.15.07.51.51,0,0,1,.13.12A.67.67,0,0,1,194.32,142Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 186.154px 152.825px;"
                            id="elwn2oltqdiie" class="animable"></path>
                        <path d="M188.77,162.82a1.28,1.28,0,0,0,.42-.13"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 188.98px 162.755px;"
                              id="elcvuovny8g3q" class="animable"></path>
                        <path d="M182.29,162.63a8.21,8.21,0,0,0,2.29.39,15.86,15.86,0,0,0,2.07-.05"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 184.47px 162.832px;"
                              id="el7x00iyjlot8" class="animable"></path>
                        <path
                            d="M195.08,141.29a.86.86,0,0,1-.13.29.88.88,0,0,1-.6.4h0a.67.67,0,0,0-.18-.47.4.4,0,0,0-.13-.13.35.35,0,0,0-.15-.07,9.92,9.92,0,0,0-1.35-.36l-.47-.08-1.28-.18c-.31,0-.64-.05-1-.08l-.84-.05-.84,0c-.7,0-1.39,0-2.09,0q-.67,0-1.35,0c-.67,0-1.34.06-2,.12-.49,0-1,.08-1.47.14a15.29,15.29,0,0,0-2.22.44,4,4,0,0,0-.49.17,1.74,1.74,0,0,0-.45.23.6.6,0,0,0-.08.08.39.39,0,0,0-.1.31.41.41,0,0,0,0,.11h-.07a.83.83,0,0,1-.57-.29h0a.8.8,0,0,1-.1-.43,10.71,10.71,0,0,1,.14-1.79.85.85,0,0,1,.11-.34,1.21,1.21,0,0,1,.67-.47,8.46,8.46,0,0,1,1-.29l1.26-.27c.71-.13,1.45-.22,2.17-.31.35,0,.7-.07,1-.08l1.13-.07c.46,0,.92,0,1.38-.05a4.51,4.51,0,0,0,.52,0c.32,0,.62,0,.94,0s.45,0,.67,0c.65,0,1.3.09,1.95.17s1.05.13,1.58.23l.9.17,1.12.27a3.3,3.3,0,0,1,.49.19l.32.14a.79.79,0,0,1,.43.6C195,139.83,195.06,141.08,195.08,141.29Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 186.099px 139.965px;"
                            id="elv7yho43f67n" class="animable"></path>
                        <path
                            d="M194.21,138.67a.48.48,0,0,1,0,.12h-.05a3.3,3.3,0,0,0-.49-.19l-1.12-.27-.9-.17c-.53-.1-1.05-.17-1.58-.23s-1.3-.15-1.95-.17c-.22,0-.45,0-.67,0s-.62,0-.94,0a4.51,4.51,0,0,1-.52,0c-.46,0-.92.05-1.38.05l-1.13.07c-.34,0-.69,0-1,.08-.72.09-1.46.18-2.17.31l-1.26.27a8.46,8.46,0,0,0-1,.29h0a.81.81,0,0,1,.05-.31c.08-.61.14-1.35.23-2a.49.49,0,0,1,.21-.35,3,3,0,0,1,.64-.4,11.3,11.3,0,0,1,1.48-.52c.49-.12,1-.23,1.47-.32.29-.05.57-.09.86-.12l.63-.08c.18,0,.36,0,.53,0l.84-.06c.25,0,.51,0,.77,0,.48,0,1,0,1.43,0s1,.09,1.45.14l.81.11a7.69,7.69,0,0,1,1,.16,14.14,14.14,0,0,1,2.12.58,4.53,4.53,0,0,1,1.22.62.69.69,0,0,1,.33.45C194.1,137.3,194.14,138.05,194.21,138.67Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 186.132px 136.75px;"
                            id="elyv1urankcyq" class="animable"></path>
                        <polygon points="192.72 155.84 179.08 155.68 177.77 145.45 194.28 145.65 192.72 155.84"
                                 style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 186.025px 150.645px;"
                                 id="elldlhoi8wnlc" class="animable"></polygon>
                        <path d="M191,163.77s0,0,0,.06a5.24,5.24,0,0,0-1.49,5.44"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 190.137px 166.52px;"
                              id="elo9vrj4mm2tq" class="animable"></path>
                        <path
                            d="M198.64,214.44c0,.31,0,.62,0,.92a4.38,4.38,0,0,0,.61,2.14,1.68,1.68,0,0,0,2.53.52,3.08,3.08,0,0,0,.56-1.86c0-.16,0-.32,0-.47.32-5.9-.73-14.87,2.83-19.38a7.57,7.57,0,0,1,1.19-1.21,3.47,3.47,0,0,1,.73-.42,22.35,22.35,0,0,0,2.8-4.29c-1.06-2.09-4.77-2.26-6.54-1.44s-2.72,2.93-3.21,5.1c-.14.57-.24,1.15-.33,1.71A106.14,106.14,0,0,0,198.64,214.44Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 204.247px 203.44px;"
                            id="elpkrm0g2tq8" class="animable"></path>
                        <path
                            d="M214,215.67c-10.75.05-16.73-.44-17.73-1.12-.22-.15-2.48-17.25,4.41-29.4,1.11-2,4.65,2.61,4.65,2.61s.44,1.07,1.16,2.43a20.69,20.69,0,0,0,2.71,4,7.33,7.33,0,0,0,1.88,1.54C214.53,199.93,213.8,210.26,214,215.67Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 204.871px 200.16px;" id="ell421pihyct"
                            class="animable"></path>
                        <g style="clip-path: url(&quot;#freepik--clip-path--inject-46&quot;); transform-origin: 206.607px 201.605px;"
                           id="el6vyxohuizkf" class="animable">
                            <g id="elh6tipw9h48j">
                                <path
                                    d="M204.64,192.68c-2.22,5.73-4.48,11.78-3.52,17.85a33.56,33.56,0,0,1,2.79-7.69,10.66,10.66,0,0,0,2.86,5.9c-.17-1.75-.35-3.5-.52-5.25-.07-.69.06-1.65.76-1.71a1.36,1.36,0,0,1,1,.55l4.31,4.43a28.73,28.73,0,0,0-.84-6.54,9.73,9.73,0,0,0-3.58-5.4,9,9,0,0,0,.4,6.85A13.43,13.43,0,0,1,206.8,195a5.18,5.18,0,0,0-1.59,3.06c.14-1.65.28-3.31.41-5l-.92,0,.22.94"
                                    style="opacity: 0.2; transform-origin: 206.607px 201.605px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M214,215.67c-10.75.05-16.73-.44-17.73-1.12-.22-.15-2.48-17.25,4.41-29.4,1.11-2,4.65,2.61,4.65,2.61s.44,1.07,1.16,2.43a20.69,20.69,0,0,0,2.71,4,7.33,7.33,0,0,0,1.88,1.54C214.53,199.93,213.8,210.26,214,215.67Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 204.871px 200.16px;"
                            id="elpxeqdoyk2z" class="animable"></path>
                        <path
                            d="M245.85,167.93s-13.26,44.15-27.06,46.36c-.62.1-3.6,1.38-4.8,1.38-.19-5.41.54-15.74-2.92-19.95,1.59.88,3.37.66,5.08-1.95a28.23,28.23,0,0,0,3.23-8.45c5.74-22.94,10.92-31.7,12.62-32.59C249.28,143.71,245.85,167.93,245.85,167.93Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 228.599px 183.194px;" id="el88ewgyi4nkh"
                            class="animable"></path>
                        <g style="clip-path: url(&quot;#freepik--clip-path-2--inject-46&quot;); transform-origin: 222.72px 192.32px;"
                           id="el1o1uop6nfw4" class="animable">
                            <g id="elkc7x8eibm3b">
                                <path
                                    d="M219.81,195.17l-1.35-.44,3.4,7.41-3.22-2.58,1.35,6-2.16-4.09q0,6.42-.05,12.85a12.27,12.27,0,0,0,5.08-1.72c1.47-1,2.48-3,1.87-4.67,1.75-.21,2.88-2.1,2.93-3.86a13.92,13.92,0,0,0-1.3-5.09,37.56,37.56,0,0,1-2.2-14.82c.25-4.91,2.44-9.15,3.1-13.84A64.08,64.08,0,0,0,219.81,195.17Z"
                                    style="opacity: 0.2; transform-origin: 222.72px 192.32px;" class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M245.85,167.93s-13.26,44.15-27.06,46.36c-.62.1-3.6,1.38-4.8,1.38-.19-5.41.54-15.74-2.92-19.95,1.59.88,3.37.66,5.08-1.95a28.23,28.23,0,0,0,3.23-8.45c5.74-22.94,10.92-31.7,12.62-32.59C249.28,143.71,245.85,167.93,245.85,167.93Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 228.599px 183.194px;"
                            id="elrxvxt2388y" class="animable"></path>
                        <path
                            d="M217.22,214.66c0,.31,0,.62-.06.92a4.45,4.45,0,0,1-.66,2.13,1.68,1.68,0,0,1-2.54.46,3.05,3.05,0,0,1-.52-1.88c0-.16,0-.31,0-.47-.18-5.9,1.08-14.85-2.37-19.44a7.17,7.17,0,0,0-1.16-1.24,3,3,0,0,0-.71-.43,23.38,23.38,0,0,1-2.71-4.36c1.12-2.07,4.83-2.14,6.58-1.28s2.64,3,3.09,5.17c.12.58.2,1.16.28,1.72A106.25,106.25,0,0,1,217.22,214.66Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 211.912px 203.556px;"
                            id="elobq6gyvs7" class="animable"></path>
                        <path
                            d="M275,150.21l-19.58-6.43-23.38,9-5.3,18.46a53.72,53.72,0,0,0-.32,28.44l3.34,12.72s-2.88,22.28-2.63,24.14,51,.46,51,.46l-6.22-30.39s8.58-36.21,7.39-50.95A6.28,6.28,0,0,0,275,150.21Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 252.037px 190.643px;" id="ellkh4sbs4sx"
                            class="animable"></path>
                        <g style="clip-path: url(&quot;#freepik--clip-path-3--inject-46&quot;); transform-origin: 251.647px 201.86px;"
                           id="el2n8gu70hxx7" class="animable">
                            <g id="elryug71ep5pb">
                                <path
                                    d="M259.35,197.81l-2.85,6.5a37.43,37.43,0,0,1,6.39-3.36,3.09,3.09,0,0,1,1.85-.32,2.16,2.16,0,0,1,1.46,1.59,6.58,6.58,0,0,1,.08,2.26c0,.06-13.73,2.27-14.58,1.36C248.88,202.8,257.52,198.6,259.35,197.81Z"
                                    style="opacity: 0.2; transform-origin: 258.741px 201.935px;"
                                    class="animable"></path>
                            </g>
                            <g id="eln73erpproqm">
                                <path
                                    d="M263,164.72A24.17,24.17,0,0,0,262,174l-2.22-6.32h-.57a22.31,22.31,0,0,0,4.89,20.38q-.7-10.92-1.42-21.84l-.44,0"
                                    style="opacity: 0.2; transform-origin: 261.299px 176.39px;" class="animable"></path>
                            </g>
                            <g id="elc4xxby9d0wk">
                                <path
                                    d="M232.24,182.78a20.32,20.32,0,0,1,5.57,5.06,3.55,3.55,0,0,1,1,1.94c.12,1.51-1.61,2.49-3.11,2.71a9.77,9.77,0,0,1-7.39-2C223.19,186.39,225.33,179.05,232.24,182.78Z"
                                    style="opacity: 0.2; transform-origin: 232.149px 187.169px;"
                                    class="animable"></path>
                            </g>
                            <g id="eljklrfo9v0v">
                                <path
                                    d="M250.07,182.78c8.46,5.27,11.78,3.44,11.78,3.44a3.67,3.67,0,0,1,1,1.94c.11,1.52-1.61,2.5-3.12,2.72-2.59.37-11.55,1.25-13.6-.38C241,186.39,243.4,178.62,250.07,182.78Z"
                                    style="opacity: 0.2; transform-origin: 253.109px 186.521px;"
                                    class="animable"></path>
                            </g>
                            <g id="el1ftjwzm1hw4">
                                <path
                                    d="M254.55,239l-8,0c-.75,0-2.66-4.53-3-5.21a33,33,0,0,1-2-6c-.82-3.6-1.62-8.68-.34-12.22,1.42.83,1.73,3.55,2.28,5A59.61,59.61,0,0,0,254.55,239Z"
                                    style="opacity: 0.2; transform-origin: 247.544px 227.285px;"
                                    class="animable"></path>
                            </g>
                            <g id="elhz1vevomb7h">
                                <path
                                    d="M277.44,238c1.08-1.63-.53-6.89-.53-6.89s-3.28-.82-5.19-1.21-3.89-.44-5.82-.76c-5.62-.91-13.73-4.65-17.32-9.23,4.24,4,8.18,8,13.17,11.1a61.45,61.45,0,0,0,7.77,4.13C270.26,235.42,277.11,238.46,277.44,238Z"
                                    style="opacity: 0.2; transform-origin: 263.196px 228.979px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M275,150.21l-19.58-6.43-23.38,9-5.3,18.46a53.72,53.72,0,0,0-.32,28.44l3.34,12.72s-2.88,22.28-2.63,24.14,51,.46,51,.46l-6.22-30.39s8.58-36.21,7.39-50.95A6.28,6.28,0,0,0,275,150.21Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.037px 190.643px;"
                            id="elas6inrdr0fm" class="animable"></path>
                        <path
                            d="M227.23,205.17l-2,3.47,1.94,2.13-2,4.65,3.62,4.56a20.32,20.32,0,0,1,10.81-5.16c6.9-1.09,35.08,5.18,35.08,5.18l.09-7.95.11-8.49-36,4.06Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 250.025px 211.78px;" id="el1568fhrse1h"
                            class="animable"></path>
                        <g style="clip-path: url(&quot;#freepik--clip-path-4--inject-46&quot;); transform-origin: 250.59px 212.973px;"
                           id="elowdeg066jfe" class="animable">
                            <g id="elo2hb695q1zn">
                                <path
                                    d="M263.45,209.15a15.16,15.16,0,0,1-5.8,1l-13.26.46c10.14,2.18,22,5.12,31.46,9.42-.94-.43-2.94-3.58-3.37-4.53-.81-1.8-2.8-4.08-3.49-5.93-.39-1-.72-4-2.19-3.62C265.85,206.16,264.67,208.6,263.45,209.15Z"
                                    style="opacity: 0.2; transform-origin: 260.12px 212.973px;" class="animable"></path>
                            </g>
                            <g id="el2tgkpve6q2i">
                                <path d="M237,209.79c-1.5.54-9.52-2.57-10.1.36C226.5,212.13,235.7,210.25,237,209.79Z"
                                      style="opacity: 0.2; transform-origin: 231.944px 209.957px;"
                                      class="animable"></path>
                            </g>
                            <g id="elcfesz2ta2wi">
                                <path
                                    d="M225.33,215.46l2.95,3.07a1.44,1.44,0,0,0,1.83.46,9,9,0,0,0,3.66-1.54c.9-.75,1.92-2.3,1.43-3.41C231.86,214.77,228.83,215.67,225.33,215.46Z"
                                    style="opacity: 0.2; transform-origin: 230.329px 216.592px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M227.23,205.17l-2,3.47,1.94,2.13-2,4.65,3.62,4.56a20.32,20.32,0,0,1,10.81-5.16c6.9-1.09,35.08,5.18,35.08,5.18l.09-7.95.11-8.49-36,4.06Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 250.025px 211.78px;"
                            id="ell6y1sgku10s" class="animable"></path>
                        <path
                            d="M279.94,154.48a7,7,0,0,0-6.44-4c-3.23.09-7.23,1.58-9.21,7.69-3.64,11.27,4.45,51.13,4.45,51.13l13,23.55,13.59.17s12.18-8,11.13-17.41C305.58,207.61,285.67,166.25,279.94,154.48Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 284.936px 191.75px;" id="elska39r9hq08"
                            class="animable"></path>
                        <g style="clip-path: url(&quot;#freepik--clip-path-5--inject-46&quot;); transform-origin: 285.204px 194.96px;"
                           id="elwbyoxxs06b" class="animable">
                            <g id="elokq9c1883x">
                                <path
                                    d="M277.69,207.55c-1.84,0-4,.3-4.87,1.93-.68,1.31-.2,2.9.3,4.29,1.67,4.68,3.86,9.9,8.53,11.61,2.55.94,5.43.61,8,1.49,2.11.72,4,2.24,6.26,2.13,3.7-.18,6-4.5,7.52-7.35,2-3.72.08-5.47-3.14-7.48A43.4,43.4,0,0,0,277.69,207.55Z"
                                    style="opacity: 0.2; transform-origin: 288.364px 218.278px;"
                                    class="animable"></path>
                            </g>
                            <g id="el91qijpbpuim">
                                <path
                                    d="M278.48,182.8c1.85,1.34,7,2.84,9.16,2.11-.79-10.59-5.87-5.29-14.22-19.91-.87-1.51-4.61-5.44-6.69-3.61-1.6,1.41.63,6.28,1.27,7.89A30.63,30.63,0,0,0,278.48,182.8Z"
                                    style="opacity: 0.2; transform-origin: 276.902px 173.008px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M279.94,154.48a7,7,0,0,0-6.44-4c-3.23.09-7.23,1.58-9.21,7.69-3.64,11.27,4.45,51.13,4.45,51.13l13,23.55,13.59.17s12.18-8,11.13-17.41C305.58,207.61,285.67,166.25,279.94,154.48Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 284.936px 191.75px;"
                            id="el8lr2c6lbaou" class="animable"></path>
                        <path
                            d="M304.49,276.75a4.82,4.82,0,0,1-1.78,3.94s-3.67,1.9-5.13,2.61-7.54-7.7-7.54-7.7L292.33,264l-10.56-31.09c6.41-10.07,14.39-1.2,14.39-1.2l3,30.84,4,8A19.46,19.46,0,0,1,304.49,276.75Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 293.132px 255.722px;"
                            id="elaziq6lgiyhm" class="animable"></path>
                        <path
                            d="M237.07,86.94c-3.5.69-6.45,3.06-9,5.53a44.16,44.16,0,0,0-8.54,11.23c-3,5.59-4.71,12.38-2.32,18.25,1.73,4.22,5.41,7.42,9.48,9.48s10.32,4.8,14.77,5.84a15,15,0,0,0,5.94.57,14.06,14.06,0,0,0,4.39-1.83c4.4-2.48,6.9-6.94,11-9.95a21.06,21.06,0,0,0,6.1-6.16c2.67-4.74,1.65-10.8-.87-15.62a36.81,36.81,0,0,0-13.48-13.91C249.51,87.45,245.37,85.32,237.07,86.94Z"
                            style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 243.273px 112.151px;"
                            id="eloqoji9hevj" class="animable"></path>
                        <path
                            d="M253.92,123.89s-.92,11.52,1.46,19.89c0,0,8.25,2.43,8.2,3.73h0a120.38,120.38,0,0,0-22.81,38.2l-.67,1.82s-5.77-23.36-5.34-35l5.52-5-.05,4.72a51.67,51.67,0,0,0-.59-13.77l-.32-1.5,7.3-6.16Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 249.159px 155.71px;" id="el7la488249tl"
                            class="animable"></path>
                        <g style="clip-path: url(&quot;#freepik--clip-path-6--inject-46&quot;); transform-origin: 246.46px 131.044px;"
                           id="elkseqku8p8b" class="animable">
                            <path
                                d="M239.85,139.54c8.4,4.15,12.92-8.57,13.69-14a26.47,26.47,0,0,1-.24-3.81l-7.09,5.64-6.83,5.4Z"
                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 246.46px 131.044px;"
                                id="elvc3nvf9a20o" class="animable"></path>
                        </g>
                        <path
                            d="M253.92,123.89s-.92,11.52,1.46,19.89c0,0,8.25,2.43,8.2,3.73h0a120.38,120.38,0,0,0-22.81,38.2l-.67,1.82s-5.77-23.36-5.34-35l5.52-5-.05,4.72a51.67,51.67,0,0,0-.59-13.77l-.32-1.5,7.3-6.16Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 249.159px 155.71px;"
                            id="elmlsp4whmys" class="animable"></path>
                        <polygon points="226.1 127.06 224.39 130.96 226.56 135.52 228.72 130.45 226.1 127.06"
                                 style="fill: rgb(109, 76, 254); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 226.555px 131.29px;"
                                 id="eloayuj364a7g" class="animable"></polygon>
                        <path
                            d="M256.6,115s-6,2.25-9.42-4.2c-1.49-2.8-4.5-8.63-4.5-8.63-.91,2.26.13,5.73.13,5.73a22.62,22.62,0,0,0-5.9-1.16c-1.35-2.33-1.69-7.58-1.69-7.58-1.95,3.17-1.45,7.77-1.45,7.77a15.29,15.29,0,0,0-8.52,3.48c.48,2.07.63,5.28.38,12-.33,8.71,3.83,11.15,7.87,14.46S248.71,142,252.77,125c0,0,8.13-2.91,4.25-9.28Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.66px 119.108px;"
                            id="elh7etwk7lkcl" class="animable"></path>
                        <path d="M236,111.11c5.89-1.08,9,2.08,9,2.08"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 240.5px 112.038px;"
                              id="ellmax4ofotue" class="animable"></path>
                        <path d="M226.76,113.61a6.72,6.72,0,0,1,5-1.93"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 229.26px 112.642px;"
                              id="elebw3lj8x4yo" class="animable"></path>
                        <path
                            d="M240.19,131c1.83-1,2.87-3.7,2.87-3.7l-.38.2a21.82,21.82,0,0,1-7.64,2.34h0A4.38,4.38,0,0,0,240.19,131Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 239.05px 129.345px;"
                            id="el0g691h5qw266" class="animable"></path>
                        <path
                            d="M240.72,113.66c.56-.06,1.12.87,1.26,2.07s-.22,2.23-.77,2.3-1.12-.87-1.26-2.07S240.16,113.72,240.72,113.66Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 240.965px 115.845px;" id="el5rlzqe4i2js"
                            class="animable"></path>
                        <path
                            d="M231,117c.14,1.18-.2,2.19-.75,2.25s-1.1-.85-1.23-2,.21-2.19.76-2.25S230.84,115.84,231,117Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 230.012px 117.125px;" id="elsdwbwyhh7u8"
                            class="animable"></path>
                        <path d="M249.08,114.78s-.73-2.15.14-3.27"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 249.007px 113.145px;"
                              id="el7ccwl48n6gs" class="animable"></path>
                        <path
                            d="M232.55,115l-2.23-2.29-10.46,1.21.29,2.52,1.16-.14s.44,5.45,3.35,6.88S233.61,122.5,232.55,115Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 226.267px 118.155px;" id="elpcyb5ah8son"
                            class="animable"></path>
                        <path d="M225.9,113.19l-6,.7.29,2.52,1.16-.14s.44,5.45,3.35,6.88a4.33,4.33,0,0,0,1.22.36"
                              style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 222.91px 118.35px;"
                              id="elqjqm2tv4ry" class="animable"></path>
                        <path
                            d="M236.06,114.56l1.64-2.74,10.46-1.21.29,2.52-1.16.13s.82,5.4-1.69,7.46S236.74,122.14,236.06,114.56Z"
                            style="fill: rgb(38, 50, 56); transform-origin: 242.255px 116.171px;" id="el4aixhpqdsjy"
                            class="animable"></path>
                        <g id="eli1sf8q7o03l">
                            <rect x="232.22" y="114.26" width="4.85" height="1.84"
                                  style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 234.645px 115.18px; transform: rotate(-6.62deg);"
                                  class="animable"></rect>
                        </g>
                        <path d="M228.2,115.45l-2.09,5.1"
                              style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 227.155px 118px;"
                              id="elvjy5y4kujqs" class="animable"></path>
                        <path d="M239.54,113.49,238.11,117"
                              style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 238.825px 115.245px;"
                              id="el2h4oderx04a" class="animable"></path>
                        <path d="M245.2,113.63l-2.13,5.85"
                              style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 244.135px 116.555px;"
                              id="elakrgimw2j5t" class="animable"></path>
                        <path d="M223.69,115.17c-.14.37-.29.74-.44,1.11"
                              style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 223.47px 115.725px;"
                              id="eledy95gzanmo" class="animable"></path>
                        <polygon points="386.99 352.34 345.67 385.77 293.56 297.52 321.68 277.38 386.99 352.34"
                                 style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 340.275px 331.575px;"
                                 id="elrmci8xbxzgc" class="animable"></polygon>
                        <polygon points="345.67 385.77 358.73 375.2 299.21 292.95 293.56 297.52 345.67 385.77"
                                 style="fill: rgb(255, 255, 255); transform-origin: 326.145px 339.36px;"
                                 id="elg2k298djc8g" class="animable"></polygon>
                        <g style="clip-path: url(&quot;#freepik--clip-path-7--inject-46&quot;); transform-origin: 328.97px 339.385px;"
                           id="elkufsriq1izd" class="animable">
                            <g id="el1jv11ggrvi3">
                                <path d="M299.21,293s50.1,81.93,51.18,82.5,8.34-.25,8.34-.25Z"
                                      style="opacity: 0.2; transform-origin: 328.97px 334.351px;"
                                      class="animable"></path>
                            </g>
                            <g id="el9me6wlp01tc">
                                <polygon points="344.45 383.7 349.67 376.97 347.35 384.4 345.67 385.77 344.45 383.7"
                                         style="opacity: 0.2; transform-origin: 347.06px 381.37px;"
                                         class="animable"></polygon>
                            </g>
                        </g>
                        <polygon points="345.67 385.77 358.73 375.2 299.21 292.95 293.56 297.52 345.67 385.77"
                                 style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 326.145px 339.36px;"
                                 id="elugqguih8rkp" class="animable"></polygon>
                        <path d="M316.2,287.76a.92.92,0,0,1,.05,1.3.91.91,0,0,1-1.3.05.92.92,0,1,1,1.25-1.35Z"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 315.57px 288.433px;"
                              id="elhe9hhxcb7zg" class="animable"></path>
                        <path
                            d="M311.21,284.92c-4.29-4.36-6.81-7.72-12.06-10.85a6.61,6.61,0,0,0-2.3-1,2.21,2.21,0,0,0-2.11.67,2.34,2.34,0,0,0,0,2.46l-.5.23a2.79,2.79,0,0,1,.08-3,2.75,2.75,0,0,1,2.63-.87,7.08,7.08,0,0,1,2.49,1.06c5.29,3.15,7.85,6.55,12.17,10.93Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 302.726px 278.71px;"
                            id="elzg68vpysjv" class="animable"></path>
                        <path
                            d="M315.34,288.58c-3.22-5.55-9-13.37-14.36-16.56a6.67,6.67,0,0,0-2.29-1,2,2,0,0,0-2.12,3.14l-.5.23a2.81,2.81,0,0,1,.07-3,2.76,2.76,0,0,1,2.63-.87,7,7,0,0,1,2.49,1.06c5.41,3.23,11.3,11.15,14.55,16.75Z"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.74px 279.521px;"
                            id="elp6xq4wpk7vn" class="animable"></path>
                        <path d="M307.8,287.13c-.2-.18-6.67-4.14-7.71-4.68l.26-.49c1,.54,7.6,4.55,7.83,4.78Z"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 304.135px 284.545px;"
                              id="elnxv2dzhyieh" class="animable"></path>
                        <line x1="331.68" y1="292.95" x2="380.88" y2="350.8"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 356.28px 321.875px;"
                              id="el2icrhawkzes" class="animable"></line>
                        <line x1="326.14" y1="286.44" x2="328.62" y2="289.36"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 327.38px 287.9px;"
                              id="el9idogktmfs" class="animable"></line>
                        <path d="M317.54,283.44l2.29-1.92a1.65,1.65,0,0,1,2.3.2l2.4,2.83"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 321.035px 282.847px;"
                              id="el3d9awfy5r7b" class="animable"></path>
                        <path
                            d="M299.07,270.05l-2.75,1.47-2.06,2.22.42,3.17a1.54,1.54,0,0,1-.73,1.52h0a1.53,1.53,0,0,1-2-.37L290,275.6l1.57-8"
                            style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 294.535px 273.125px;"
                            id="eld9ongbdjp9n" class="animable"></path>
                        <polyline points="297.35 278.97 299.49 278.02 300.19 274.71 297.62 274.02"
                                  style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 298.77px 276.495px;"
                                  id="el6ui70o2kdu2" class="animable"></polyline>
                        <path d="M295.08,276.12l1.63-2.26,1.94.35a5.79,5.79,0,0,1-.84,2.88,4.94,4.94,0,0,0-.44,2.76"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 296.865px 276.855px;"
                              id="ell4jridkbd8e" class="animable"></path>
                        <path d="M299.88,278a14.46,14.46,0,0,0,1.55.58"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 300.655px 278.29px;"
                              id="elb49u2mvsp9f" class="animable"></path>
                        <path d="M235.62,153.4c-.86-.86,2.9,2.15,5.91,2.19"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 238.513px 154.418px;"
                              id="elfqhf6s9piuh" class="animable"></path>
                        <path d="M247.65,155a24.67,24.67,0,0,0,4.3-1.51,66.88,66.88,0,0,0,11.6-5.73"
                              style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 255.6px 151.38px;"
                              id="elzyfb9th0l8" class="animable"></path>
                        <path
                            d="M295.36,222.55l-8.46,8.5s-18.61.47-28.55-4.06c-1.21-.65-2.34-1.32-3.39-2-8.79-5.53-12.75-11.15-12.75-11.15l-1-2.21,1.67-2.3s.23,3.64,15.55,10.79c5.23,2.45,24.25,5.21,24.25,5.21C287.17,224.58,292.79,223.62,295.36,222.55Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 268.285px 220.197px;" id="elm2010u5wgrs"
                            class="animable"></path>
                        <g style="clip-path: url(&quot;#freepik--clip-path-8--inject-46&quot;); transform-origin: 279.18px 227.32px;"
                           id="ellqtk2eocola" class="animable">
                            <g id="elvfys73tsfl">
                                <g style="opacity: 0.2; transform-origin: 279.18px 227.32px;" class="animable">
                                    <path
                                        d="M263.76,227.46a156.28,156.28,0,0,0,17.18,3.42,10,10,0,0,0,5.26-.11,9,9,0,0,0,2.22-1.4,43.74,43.74,0,0,0,6.18-5.91,66,66,0,0,1-10.35,2,179.62,179.62,0,0,1-20.19,1.56Z"
                                        id="elgq8hjn2o87o" class="animable"
                                        style="transform-origin: 279.18px 227.32px;"></path>
                                </g>
                            </g>
                        </g>
                        <path
                            d="M295.36,222.55l-8.46,8.5s-18.61.47-28.55-4.06c-1.21-.65-2.34-1.32-3.39-2-8.79-5.53-12.75-11.15-12.75-11.15l-1-2.21,1.67-2.3s.23,3.64,15.55,10.79c5.23,2.45,24.25,5.21,24.25,5.21C287.17,224.58,292.79,223.62,295.36,222.55Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 268.285px 220.197px;"
                            id="elr1izwy58ai9" class="animable"></path>
                        <path
                            d="M238.81,208.31l-1.2,1.91a18.07,18.07,0,0,0-2.24,14l6.22,24.92,12.78,3.67L241,227.31l.19-15.67A3.74,3.74,0,0,0,238.81,208.31Z"
                            style="fill: rgb(109, 76, 254); transform-origin: 244.601px 230.56px;" id="ely9qt94ufxmc"
                            class="animable"></path>
                        <g style="clip-path: url(&quot;#freepik--clip-path-9--inject-46&quot;); transform-origin: 238.735px 218.995px;"
                           id="eltyo0aqsh94" class="animable">
                            <g id="elh23mq1tgo9r">
                                <path
                                    d="M240.74,225.11l-.12-10.67c0,1.15-3.59-1.05-3.89-1.56C237.54,217.4,237.74,221.31,240.74,225.11Z"
                                    style="opacity: 0.2; transform-origin: 238.735px 218.995px;"
                                    class="animable"></path>
                            </g>
                        </g>
                        <path
                            d="M238.81,208.31l-1.2,1.91a18.07,18.07,0,0,0-2.24,14l6.22,24.92,12.78,3.67L241,227.31l.19-15.67A3.74,3.74,0,0,0,238.81,208.31Z"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 244.601px 230.56px;"
                            id="elk1zcrofkai" class="animable"></path>
                        <path
                            d="M238.81,208.31a3.44,3.44,0,0,0-1.69,3.64,3.36,3.36,0,0,0,3,2.59,3.41,3.41,0,0,0,3.38-3.6,3.54,3.54,0,0,0-4-3Z"
                            style="fill: rgb(109, 76, 254); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 240.282px 211.223px;"
                            id="elg75yxmbgch" class="animable"></path>
                        <path d="M236.89,218.85l2,4c1.41,2.82,5.71,11.32,5.71,11.32"
                              style="fill: rgb(109, 76, 254); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 240.745px 226.51px;"
                              id="elvpvgbx8upo" class="animable"></path>
                        <path d="M258.35,227a15.85,15.85,0,0,1-3.39-2C256,225.67,257.14,226.34,258.35,227Z"
                              style="fill: rgb(109, 76, 254); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 256.655px 226px;"
                              id="el7cz8uvpwzxw" class="animable"></path>
                        <path
                            d="M257.73,225c9.14,2.06,13.61,1.4,18.19,1.19A89,89,0,0,0,286,224.91a41.09,41.09,0,0,0,9.33-2.36"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 276.53px 224.504px;"
                            id="el8c0dbint5cm" class="animable"></path>
                        <path
                            d="M230.42,96.87l3.13-4.05,0,3,2-2.86,1.1,1.08.65-1.09a1.88,1.88,0,0,0,.8,1.68c.59.29,1.42-.54.94-1a1.14,1.14,0,0,0,1.37.52,1.13,1.13,0,0,0,.68-1.29,3.65,3.65,0,0,0,2.13,1.67c.92.14,1.95-.9,1.44-1.67a5.53,5.53,0,0,0,3.68,1.47l-2.74-2.71A23.3,23.3,0,0,1,252.9,93a7.86,7.86,0,0,1,4.88,5.31"
                            style="fill: none; stroke: rgb(153, 153, 153); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 244.1px 94.965px;"
                            id="elk7ncq400ybs" class="animable"></path>
                        <path d="M269.12,282.84q2.14-3.07,4.36-6.12"
                              style="fill: none; stroke: rgb(153, 153, 153); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 271.3px 279.78px;"
                              id="el1hunnxznptb" class="animable"></path>
                        <path d="M250,314.5a303.65,303.65,0,0,1,16-27"
                              style="fill: none; stroke: rgb(153, 153, 153); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 258px 301px;"
                              id="elz7dc1tqvcuj" class="animable"></path>
                        <path d="M239.61,255.78A192.27,192.27,0,0,0,228,301.86"
                              style="fill: none; stroke: rgb(153, 153, 153); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 233.805px 278.82px;"
                              id="elw1ij51qyi0i" class="animable"></path>
                        <path d="M271.11,287.17s-2,5.78-.73,17.05"
                              style="fill: none; stroke: rgb(153, 153, 153); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 270.534px 295.695px;"
                              id="elxyi7jxbqtc" class="animable"></path>
                        <path d="M232.19,262.31c1.87,4.71.94,2.36,2.8,7.07"
                              style="fill: none; stroke: rgb(153, 153, 153); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 233.59px 265.845px;"
                              id="elvp7wccvlzc" class="animable"></path>
                        <path d="M205.91,194.93a22.49,22.49,0,0,0,.87,15"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 205.899px 202.43px;"
                              id="elw9yk9ff2l7" class="animable"></path>
                        <path d="M208.46,200.52a13.29,13.29,0,0,0,4.78,6.32"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 210.85px 203.68px;"
                              id="el9zqdhfu3gyk" class="animable"></path>
                        <path
                            d="M216.05,194.79A16.37,16.37,0,0,1,222.38,205a1,1,0,0,1-.08.78c-.31.39-.94.13-1.31-.19a6.51,6.51,0,0,1-2.23-4.8"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 219.237px 200.383px;"
                            id="ely2f8czcuqfh" class="animable"></path>
                        <path d="M224.77,183a19.64,19.64,0,0,0,4.26,9"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 226.9px 187.5px;"
                              id="el5e256dr4jgw" class="animable"></path>
                        <path d="M260.51,175.61a44.52,44.52,0,0,0,4.39,11.64"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 262.705px 181.43px;"
                              id="elxgdm4aaglx" class="animable"></path>
                        <path d="M259.47,167.85c0,1.22.16,2.44.31,3.65"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 259.625px 169.675px;"
                              id="elb2vrrft707a" class="animable"></path>
                        <path d="M249.31,205.78a33.47,33.47,0,0,1,7-6.46"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.81px 202.55px;"
                              id="el43yuu5w8x9s" class="animable"></path>
                        <path d="M229.64,210.89l7-.67"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 233.14px 210.555px;"
                              id="eln0pzjxzkexc" class="animable"></path>
                        <path d="M243.56,209.63c7-.34,14.09-.37,21.13-.1"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 254.125px 209.489px;"
                              id="el6ep3bxd1uqn" class="animable"></path>
                        <path d="M278.14,152.56a56,56,0,0,1,9.5,32.35"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 282.896px 168.735px;"
                              id="eleb04dncg0sf" class="animable"></path>
                        <path d="M279.4,209a38.25,38.25,0,0,1,23.53,7.52"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 291.165px 212.756px;"
                              id="elv4jpgas7mx" class="animable"></path>
                        <path d="M272.63,209.74a34.85,34.85,0,0,1,3.93-.6"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 274.595px 209.44px;"
                              id="el8p2u51sp16c" class="animable"></path>
                        <path d="M242.55,174.32a32.19,32.19,0,0,0-2.59,13"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.254px 180.82px;"
                              id="elt4mhub7780g" class="animable"></path>
                        <path d="M254,340.68a11.3,11.3,0,0,0,4.92,5.08l-.81-.82"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 256.46px 343.22px;"
                              id="elkzkoxcdaucb" class="animable"></path>
                        <path d="M224.5,326.57a22.69,22.69,0,0,0,1,12.27"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 224.788px 332.705px;"
                              id="eluqewks3m8x" class="animable"></path>
                        <polygon points="253.49 122.62 251.78 126.53 253.95 131.09 256.1 126.02 253.49 122.62"
                                 style="fill: rgb(109, 76, 254); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 253.94px 126.855px;"
                                 id="elu5xnntfpp5" class="animable"></polygon>
                        <path
                            d="M232,125.32c-.77-.1-2.95-1.16-3.11-2.65,0-.44.28-.84.76-1.19a6.8,6.8,0,0,0,2.94-5.89c0-.17,0-.26,0-.26"
                            style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 230.743px 120.325px;"
                            id="elxvucvktmbm9" class="animable"></path>
                    </g>
                    <g id="freepik--Floor--inject-46" class="animable" style="transform-origin: 251.11px 461.175px;">
                        <path
                            d="M409.27,442.6a149.79,149.79,0,0,1-20.24,13c-32.76,17.5-71.69,24.2-109.87,24.15-49.6-.07-100.28-12-140.66-37.12Z"
                            style="fill: rgb(153, 153, 153); transform-origin: 273.885px 461.175px;" id="elj2zpbkzk1ep"
                            class="animable"></path>
                        <line x1="45.04" y1="442.6" x2="457.18" y2="442.6"
                              style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 251.11px 442.6px;"
                              id="elvixshnh76g" class="animable"></line>
                    </g>
                    <defs>
                        <filter id="active" height="200%">
                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                            <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                            <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                            <feMerge>
                                <feMergeNode in="OUTLINE"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                        </filter>
                        <filter id="hover" height="200%">
                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                            <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                            <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                            <feMerge>
                                <feMergeNode in="OUTLINE"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                            <feColorMatrix type="matrix"
                                           values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>
                        </filter>
                    </defs>
                    <defs>
                        <clipPath id="freepik--clip-path--inject-46">
                            <path
                                d="M214,215.67c-10.75.05-16.73-.44-17.73-1.12-.22-.15-2.48-17.25,4.41-29.4,1.11-2,4.65,2.61,4.65,2.61s.44,1.07,1.16,2.43a20.69,20.69,0,0,0,2.71,4,7.33,7.33,0,0,0,1.88,1.54C214.53,199.93,213.8,210.26,214,215.67Z"
                                style="fill:#6D4CFE;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                        </clipPath>
                        <clipPath id="freepik--clip-path-2--inject-46">
                            <path
                                d="M245.85,167.93s-13.26,44.15-27.06,46.36c-.62.1-3.6,1.38-4.8,1.38-.19-5.41.54-15.74-2.92-19.95,1.59.88,3.37.66,5.08-1.95a28.23,28.23,0,0,0,3.23-8.45c5.74-22.94,10.92-31.7,12.62-32.59C249.28,143.71,245.85,167.93,245.85,167.93Z"
                                style="fill:#6D4CFE;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                        </clipPath>
                        <clipPath id="freepik--clip-path-3--inject-46">
                            <path
                                d="M275,150.21l-19.58-6.43-23.38,9-5.3,18.46a53.72,53.72,0,0,0-.32,28.44l3.34,12.72s-2.88,22.28-2.63,24.14,51,.46,51,.46l-6.22-30.39s8.58-36.21,7.39-50.95A6.28,6.28,0,0,0,275,150.21Z"
                                style="fill:#6D4CFE;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                        </clipPath>
                        <clipPath id="freepik--clip-path-4--inject-46">
                            <path
                                d="M227.23,205.17l-2,3.47,1.94,2.13-2,4.65,3.62,4.56a20.32,20.32,0,0,1,10.81-5.16c6.9-1.09,35.08,5.18,35.08,5.18l.09-7.95.11-8.49-36,4.06Z"
                                style="fill:#6D4CFE;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                        </clipPath>
                        <clipPath id="freepik--clip-path-5--inject-46">
                            <path
                                d="M279.94,154.48a7,7,0,0,0-6.44-4c-3.23.09-7.23,1.58-9.21,7.69-3.64,11.27,4.45,51.13,4.45,51.13l13,23.55,13.59.17s12.18-8,11.13-17.41C305.58,207.61,285.67,166.25,279.94,154.48Z"
                                style="fill:#6D4CFE;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                        </clipPath>
                        <clipPath id="freepik--clip-path-6--inject-46">
                            <path
                                d="M253.92,123.89s-.92,11.52,1.46,19.89c0,0,8.25,2.43,8.2,3.73h0a120.38,120.38,0,0,0-22.81,38.2l-.67,1.82s-5.77-23.36-5.34-35l5.52-5-.05,4.72a51.67,51.67,0,0,0-.59-13.77l-.32-1.5,7.3-6.16Z"
                                style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                        </clipPath>
                        <clipPath id="freepik--clip-path-7--inject-46">
                            <polygon points="345.67 385.77 358.73 375.2 299.21 292.95 293.56 297.52 345.67 385.77"
                                     style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></polygon>
                        </clipPath>
                        <clipPath id="freepik--clip-path-8--inject-46">
                            <path
                                d="M295.36,222.55l-8.46,8.5s-18.61.47-28.55-4.06c-1.21-.65-2.34-1.32-3.39-2-8.79-5.53-12.75-11.15-12.75-11.15l-1-2.21,1.67-2.3s.23,3.64,15.55,10.79c5.23,2.45,24.25,5.21,24.25,5.21C287.17,224.58,292.79,223.62,295.36,222.55Z"
                                style="fill:#6D4CFE;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                        </clipPath>
                        <clipPath id="freepik--clip-path-9--inject-46">
                            <path
                                d="M238.81,208.31l-1.2,1.91a18.07,18.07,0,0,0-2.24,14l6.22,24.92,12.78,3.67L241,227.31l.19-15.67A3.74,3.74,0,0,0,238.81,208.31Z"
                                style="fill:#6D4CFE;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                        </clipPath>
                    </defs>
                </svg>
                {{--                    <img class="align-items-center" style="width:100%;" src="front/images/shopping.avif" alt="">--}}

            </div>
            <div class="info1 ml-5">
                <form action="{{ $register_url }}" method="post">
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
        </div>



@endsection
