<!DOCTYPE html>
<html>
    @include("components.head") 
    <body>
        <header>
            <div class="container">
                @include("components.logo_sec") 
                @include("components.navigation") 
                @include("components.main_slider") 
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                       @include("components.left_navigation") 
                    </div>
                    <div class="col-md-8 col-sm-8">
                        @include("components.featured_products") 
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container hidden-xs">
                @include("components.spotlight_slider") 
            </div>
        </section>
        <footer>
            <div class="container">
                @include("components.footer_nav") 
                @include("components.copy_right") 
            </div>
        </footer>
        <script src="{{url('/js/jquery.js')}}" type="text/javascript"></script>
        <script src="{{url('/js/bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{url('/js/custom.js')}}" type="text/javascript"></script>
    </body>
</html>
