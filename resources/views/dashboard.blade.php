@extends('layouts.dash')
@section('content')


        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>{{Auth::user()->name }}</b></p>
                </div>
            </div>
            <!-- row -->
            <div class="row">
				@if ($errors->any())
    <div class="col-sm-12">
        <div class="alert  alert-warning alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
                <span><p>{{ $error }}</p></span>
            @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif

@if (session('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="col-sm-12">
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <form action="{{route('apply')}}" method="post">
							<input type="hidden" name="jobtitle" value="Manger">
                            <input type="hidden" name="jobyears" value="4">
                            <input type="hidden" name="jobpay" value="250k">
                            @csrf
                            <div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="#" class="text-white"><h4>Manager</h4></a>
											<h6>Premium Labels Limited</h6>					
										</div>	
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span> 4 years Experience</p>
									<p class="address"><span class="lnr lnr-database"></span>250k</p>
                                    <button type="submit" class="btn btn-primary">Apply</button>
								</div>
							</div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <form action="{{route('apply')}}" method="post">
                            @csrf
							<input type="hidden" name="jobtitle" value="Creative Art Designer">
                            <input type="hidden" name="jobyears" value="5">
                            <input type="hidden" name="jobpay" value="150k">
                            <div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="#" class="text-white"><h4>Creative Art Designer</h4></a>
											<h6>Premium Labels Limited</h6>					
										</div>	
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span> 5 years Experience</p>
									<p class="address"><span class="lnr lnr-database"></span> 150k</p>
                                    <button type="submit" class="btn btn-primary">Apply</button>
								</div>
							</div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <form action="{{route('apply')}}" method="post">
                            @csrf
                            <input type="hidden" name="jobtitle" value="Product Manager">
                            <input type="hidden" name="jobyears" value="3">
                            <input type="hidden" name="jobpay" value="350k">
                            <div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="img/post.png" alt="">
									
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="#" class="text-white"><h4>Product Manager</h4></a>
											<h6>Premium Labels Limited</h6>					
										</div>	
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span>3 Years Experience</p>
									<p class="address"><span class="lnr lnr-database"></span>350k</p>
                                    <button type="submit" class="btn btn-primary">Apply</button>
								</div>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
@endsection