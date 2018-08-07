@extends('layout.base')

@section('content')
    <section>
        <div class="container">
            @can('approve', $event)
                <moderate-event :event="{{$event}}"></moderate-event>
            @endcan

            @can('report', $event)
                <report-event :event="{{$event}}"></report-event>
            @endcan

            <div class="about-event clearfix">
                <div class="col-md-8 event-description first">


                    <h1>{{ $event->title }}</h1>
                    <hr>

                    <strong>Organized by:</strong>

                    <p> {{ $event->organizer }}</p>
                    @if($event->contact_person)

                        <strong>Contact email:</strong><br>
                        <p><a href="mailto:{{ $event->owner->email }}">{{ $event->contact_person }}</a></p>
                    @endif

                    <address>
                        <strong>Happening at: </strong><br/>
                        {{ $event->location }}
                    </address>
                    <p>
                        <strong>From</strong> {{Carbon\Carbon::parse($event->start_date)->format('l jS \o\f F Y \a\t H:i')}}
                        {{--<strong>From</strong> {{ $event->start_date }} at {{ $event->start_date }}--}}
                        <strong>to</strong> {{Carbon\Carbon::parse($event->end_date)->format('l jS \o\f F Y \a\t H:i')}}
                    </p>
                    <strong>Description:</strong>

                    <p>
                        {{ $event->description }}
                    </p>

                    @if($event->event_url)

                        <strong>More information:</strong>
                        <p><a href="{{ $event->event_url }}" target="_blank">{{ $event->event_url }}</a></p>
                    @endif

                    <strong>This event is for:</strong>

                    @if($event->audiences->count())
                        <div class="itens">
                            <ul class="event-list">
                                @foreach($event->audiences as $audience)
                                    <li><span class="label label-info">{{ $audience->name }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($event->themes->count())
                        <strong>Main themes:</strong>
                        <div class="itens">
                            <ul class="event-list">
                                @foreach($event->themes as $theme)
                                    <li><span class="label label-info">{{ $theme->name }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($event->tags)
                        <strong>Tags:</strong>
                        <div class="itens">
                            <ul class="event-list">
                                @foreach($event->tags as $tag)
                                    <li><span class="label label-info">{{ $tag->name }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <strong>Share the event:</strong>
                    <div class="share-event-wrapper">

                        <div class="fb-like"
                             data-href="{{$event->path()}}" data-layout="button_count" data-action="recommend"
                             data-show-faces="false" data-share="true"></div>

                        <a href="https://twitter.com/share" class="twitter-share-button"
                           data-url="http://events.codeweek.eu{{$event->path()}}"
                           data-text="Check out {{ $event->title }} at" data-via="CodeWeekEU"
                           data-hashtags="codeEU">Tweet</a>

                        <div class="g-plusone" data-size="medium" data-href="http://events.codeweek.eu"></div>
                        <a class="fa fa-envelope" title="Click to email this to a friend"
                           href="mailto:?subject=Look at this awesome coding event&amp;body=Hi, check out {{ $event->title }} event at {{$event->path()}}"></a>
                    </div>
                </div>
                <div class="col-md-4 event-time-place">

                    <div>


                        @if (Auth::check())
                            @if($event->creator_id === auth()->user()->id)
                                <a href="{{route('edit_event',$event->id)}}" class="btn pull-right edit-event-btn">
                                    <i class="fa fa-pencil-square-o"></i>Edit event</a>

                                @if($event->status === 'PENDING')
                                    <div class="alert alert-warning">
                                        <strong>NOTE:</strong> This event is stil being reviewed by <a
                                                href="{{route('ambassadors')}}">moderators</a>.
                                    </div>
                                @endif

                            @endif
                        @endif
                    </div>

                    <div class="event-jumbotron">
                        <img src="{{$event->picture_path()}}"/>
                    </div>


                    <div id="calendar">
                        @component('components.calendar',['event'=>$event])
                        @endcomponent
                    </div>
                </div>
                <div class="col-md-12 first">
                    <hr>
                </div>
                <div id="view-event-map-wrapper" class="col-md-12 first">
                    <div id="map" style="width:100%; height:100%"></div>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>

            <div class="col-md-12">
                <h3>Nearby upcoming events:</h3>


                <div class="justify-between md:flex sm:flex-row">
                    @component('components.close-events',['closeEvents'=>$event->getClosest()])
                    @endcomponent

                </div>
            </div>
        </div>


    </section>


@endsection

@push('scripts')


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZivlK6i8_JWt15x-BewfW9Vw2mhWPd7o&libraries=places"></script>
    <script>


        var event = {!! json_encode($event) !!};

        var geoposition = event.geoposition;
        var coordinates = geoposition.split(",");


        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: {
                lat: parseFloat(coordinates[0]),
                lng: parseFloat(coordinates[1])
            }

        });

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(coordinates[0], coordinates[1]),
            map: map,
            animation: google.maps.Animation.DROP,

        });


        var contentString = '<div id="content">' +
            '<h1 id="firstHeading" class="firstHeading">' + event.title + '</h1>' +
            '<div id="bodyContent">' +
            '<p>' + event.description + '</p>' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });


    </script>



@endpush



