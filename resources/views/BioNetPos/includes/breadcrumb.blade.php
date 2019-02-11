
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        @if(count($asMenuTitulo) > 0)
                            <h4 class="page-title dropdown-toggle pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars"></i> {{ $sTitlePage }}
                            </h4>
                            <div class="dropdown-menu">
                                @foreach ($asMenuTitulo as $item)
                                    <a class="dropdown-item {{ $item['sActive'] }}" href="{{ $item['sHref'] }}">{{ $item['sNombre'] }}</a>
                                @endforeach
                            </div>
                        @else
                            <h4 class="page-title">{{ $sTitlePage }}</h4>
                        @endif
                        <!-- div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div-->
                    </div>
                    <!--div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="m-r-10">
                                <div class="lastmonth"></div>
                            </div>
                            <div class=""><small>LAST MONTH</small>
                                <h4 class="text-info m-b-0 font-medium">$58,256</h4></div>
                        </div>
                    </div-->
                </div>
            </div>
