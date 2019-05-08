@extends('layout.base') @section('content')<section>

        <div class="container">

            <div class="content-wrap nopadding">


                <div class="container clearfix ">


                    <div class="flex flex-col justify-center text-center w-full mb-8 uppercase">
                        <h1>S&aring;dan laver du uddannelsesspil med Scratch</h1><span>af Jes&uacute;s Moreno Le&oacute;n</span></div>

                    <hr>

                    <p>Kritisk tankegang, vedholdenhed, probleml&oslash;sning, datalogisk t&aelig;nkning og kreativitet er blot nogle af de vigtige kompetencer, som dine elever skal tilegne sig for at klare sig godt i det 21.&nbsp;&aring;rhundrede, og kodning kan v&aelig;re med til at opn&aring; dette p&aring; en sjov og motiverende m&aring;de.</p>

                    <p>Algoritmiske notationer af flowkontrol ved hj&aelig;lp af sekvenser af instruktioner og loops, datarepr&aelig;sentation ved hj&aelig;lp af variabler og lister eller synkronisering af processer kan lyde som komplicerede koncepter, men i denne video vil du finde ud af, at de er lettere at l&aelig;re, end du tror.</p>

                    <p>I denne video forklarer Jes&uacute;s Moreno Le&oacute;n, l&aelig;rer og forsker i computervidenskab fra Spanien, hvordan du kan udvikle disse og andre f&aelig;rdigheder hos dine elever, mens I har det sjovt. Hvordan g&oslash;r man det? Ved at lave et spil med sp&oslash;rgsm&aring;l og svar i Scratch, som er det mest popul&aelig;re programmeringssprog, der bruges i skoler over hele verden. Scratch forbedrer ikke alene datalogisk t&aelig;nkning &ndash; det giver ogs&aring; mulighed for at introducere spilelementer i klassev&aelig;relset for at holde elevernes motivation oppe, mens de l&aelig;rer og har det sjovt.</p>

                    <p>Tag et kig p&aring; videoen for at l&aelig;re, hvordan du kommer i gang:</p>

                    @include('static.youtube', ['video_id' => 'M1zJOfmriGU'])

                    <p><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/DA/CNECT-2018-00222-00-19-DA-TRA-00.DOCX">Download videoscriptet</a></p>

                    <h2>Er du klar til at dele det, du har l&aelig;rt, med dine elever?</h2>

                    <p>V&aelig;lg en af l&aelig;replanerne nedenfor, og afhold en aktivitet med dine elever.</p>

                    <ul>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/DA/CNECT-2018-00222-00-10-DA-TRA-00.DOCX">Aktivitet 1 &ndash; Spil med sp&oslash;rgsm&aring;l og svar med Scratch til indskolingen/mellemtrinnet</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/DA/CNECT-2018-00222-00-11-DA-TRA-00.DOCX">Aktivitet 2 &ndash; Spil med sp&oslash;rgsm&aring;l og svar med Scratch til udskolingen</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/DA/CNECT-2018-00222-00-12-DA-TRA-00.DOCX">Aktivitet 3 &ndash; Spil med sp&oslash;rgsm&aring;l og svar med Scratch til gymnasiale uddannelser</a></li>
                    </ul>@if(view()->exists('static.'.App::getLocale().'.training.footer')) @include('static.'.App::getLocale().'.training.footer') @else @include('static.en.training.footer') @endif</div>

            </div>

        </div>

    </section>@endsection