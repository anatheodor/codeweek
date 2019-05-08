@extends('layout.base') @section('content')<section>

        <div class="container">

            <div class="content-wrap nopadding">


                <div class="container clearfix ">


                    <div class="flex flex-col justify-center text-center w-full mb-8 uppercase">
                        <h1>Educatieve games maken met Scratch</h1><span>door Jes&uacute;s Moreno Le&oacute;n</span></div>

                    <hr>

                    <p>Kritisch denken, volharding, probleemoplossing, computationeel denken en creativiteit zijn slechts een paar van de basisvaardigheden die je leerlingen nodig hebben om succesvol te zijn in de 21e eeuw. Programmeren kan je helpen ze die vaardigheden op een leuke, motiverende manier te leren.</p>

                    <p>Algoritmebegrippen als flow control met reeksen instructies en lussen, gegevensweergave met variabelen en lijsten, of processynchronisatie lijken misschien ingewikkelde concepten, maar in deze video zie je dat ze gemakkelijker te leren zijn dan je denkt.</p>

                    <p>In deze video legt Jes&uacute;s Moreno Le&oacute;n, een informaticaleraar en onderzoeker uit Spanje, uit hoe je je leerlingen deze en andere vaardigheden op een leuke manier kunt leren. Hoe? Door een vraag- en antwoordspel te maken met Scratch, de populairste programmeertaal die op scholen over de hele wereld wordt gebruikt. Scratch verbetert niet alleen het computationeel denken, maar maakt het ook mogelijk om gamificatie-elementen in te zetten in de klas om je leerlingen gemotiveerd te houden terwijl ze leren en plezier maken.</p>

                    <p>Bekijk de video en zie hoe je aan de slag kunt gaan.</p>

                    @include('static.youtube', ['video_id' => 'M1zJOfmriGU'])

                    <p><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/NL/CNECT-2018-00222-00-19-NL-TRA-00.DOCX">Het videoscript downloaden</a></p>

                    <h2>Ben je er klaar voor om wat je hebt geleerd te delen met je leerlingen?</h2>

                    <p>Kies een van de onderstaande lesplannen en organiseer een activiteit met je leerlingen.</p>

                    <ul>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/NL/CNECT-2018-00222-00-10-NL-TRA-00.DOCX">Activiteit 1 &ndash; Vraag- en antwoordspel met Scratch voor het basisonderwijs</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/NL/CNECT-2018-00222-00-11-NL-TRA-00.DOCX">Activiteit 2 &ndash; Vraag- en antwoordspel met Scratch voor de onderbouw van het middelbaar onderwijs</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/NL/CNECT-2018-00222-00-12-NL-TRA-00.DOCX">Activiteit 3 &ndash; Vraag- en antwoordspel met Scratch voor het middelbaar onderwijs</a></li>
                    </ul>@if(view()->exists('static.'.App::getLocale().'.training.footer')) @include('static.'.App::getLocale().'.training.footer') @else @include('static.en.training.footer') @endif</div>

            </div>

        </div>

    </section>@endsection