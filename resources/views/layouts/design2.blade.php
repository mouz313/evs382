<!DOCTYPE html>
<html>
    @foreach($headSections as $headSection)
    @include("components.".$headSection) 
    @endforeach
    <body>
        <header>
            <div class="container">
                @foreach($headerSections as $headerSection)
                @include("components.".$headerSection) 
                @endforeach
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        @foreach($leftSections as $leftSection)
                        @include("components.".$leftSection) 
                        @endforeach
                    </div>
                    <div class="col-md-8 col-sm-8">
                        @foreach($rightSections as $rightSection)
                        @include("components.".$rightSection) 
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container hidden-xs">
                @foreach($bottomSections as $bottomSection)
                @include("components.".$bottomSection) 
                @endforeach 
            </div>
        </section>
        <footer>
            <div class="container">
                @foreach($footerSections as $footerSection)
                @include("components.".$footerSection) 
                @endforeach 
            </div>
        </footer>
        <script src="{{url('/js/jquery.js')}}" type="text/javascript"></script>
        <script src="{{url('/js/bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{url('/js/custom.js')}}" type="text/javascript"></script>
    </body>
</html>
