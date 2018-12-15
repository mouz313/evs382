<div class="row">
    <div class="col-md-12">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navigation">
                <i class="icon-bar"></i>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="menu collapse navbar-collapse" id="header-navigation">
            <ul class="clearfix">
                <li class="pull-left active"><a href="{{url('/')}}">Home</a></li>
                <li class="pull-left"><a href="#">What's New</a></li>
                <li class="pull-left"><a href="#">Specials</a></li>
                <li class="pull-left"><a href="{{url('/registration')}}">Registration</a></li>
                <li class="pull-left"><a href="#">Contact</a></li>
            </ul>
            <div class="search-bar">
                <div class="form-group">
                    {{ Form::label('searchbar:', null) }}
                    {{ Form::text('searchbar', '', ['placeholder' => '' , 'id' => 'searchText' , 'class' => 'searchbar' ]) }}
                </div>
                <input type="submit" id="searchBtn" onclick="event.preventDefault();getSearchProducts()" value="search">
            </div>
        </nav>
    </div>
</div>