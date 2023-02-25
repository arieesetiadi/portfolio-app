@extends('web.layouts.template')

@section('content')
    <div class="edina_tm_mainpart">
        {{-- Hero --}}
        @include('web.sections.hero')
        {{-- End Hero --}}

        {{-- About --}}
        @include('web.sections.about')
        {{-- End About --}}

        {{-- Services --}}
        @include('web.sections.services')
        {{-- End Services --}}

        {{-- Protfolio --}}
        @include('web.sections.portfolio')
        {{-- End Protfolio --}}

        {{-- Testimonial --}}
        @include('web.sections.testimonial')
        {{-- End Testimonial --}}

        {{-- News --}}
        @include('web.sections.news')
        {{-- End News --}}

        {{-- Contact --}}
        @include('web.sections.contact')
        {{-- End Contact --}}
    </div>
@endsection
