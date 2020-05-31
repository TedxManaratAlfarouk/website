@extends('layouts.app')

@section('content')

   <div class="profile-body">
       

<!-- header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
                {{-- Profile Image --}}
                <img src="img/person_1.jpg"   width="30%"

                class="img-responsive img-circle tm-border" alt="">
                {{-- E3ml compressed lel Image w tb2a quality 3lya fe size 7lw 2ol msln 820px x 312px --}}            
                @foreach($users as $user)
             <h1 class="tm-title bold shadow">{{$user->first_name}}</h1>
            {{-- <h1 class="white bold shadow"></h1> --}} 
            {{-- User Member/ Head of Design , Media ... --}}

              @endforeach
              <a href="#"><i class="fas fa-cog fa-2x" style="color:white; position:relative; left:15%; top:-100px;"></i></a>

			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
                <h2>Bio</h2>
                    <p>Blah Blah Blah</p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">Skills</h2>
				<strong>Design</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
					</div>
				<strong>Photographer</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
					</div>
				<strong>HR</strong>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" 
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
					</div>
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="task">
				<h2 class="white">Tasks</h2>
					<div class="task-content">
							<div class="task-school">
                                <ul>
                                    <li>
                                        Task One
                                    </li>
                                </ul>
							</div>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>Languages</h2>
					<ul>
                        <li>Arabic</li>
                        <li>English</li>
						<li>French</li>

					</ul>
			</div>
		</div>
	</div>
</section>

<!-- contact and experience -->
<section class="container" >
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="contact">
				<h2>Info</h2>
					<p><i class="fas fa-map-marker-alt"></i> Cairo, Egypt</p>
                    <p><i class="fa fa-envelope"></i> User's Email</p>
                    <hr style="color:black">
                    <h6>Project Links:</h6>
					<a href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
					<a href="#"><i class="fab fa-twitter fa-lg"></i></a>
					<a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#"><i class="fab fa-behance fa-lg"></i></a>
                    <a href="#"><i class="fab fa-dribbble fa-lg"></i></a>
			</div>
		</div>
		<div class="col-md-8 col-sm-12" >
			<div class="interests">
				<h2 class="white">Interests</h2>
					<div class="interests-content">
					</div>
			</div>
		</div>
	</div>
</section>
</div>
@endsection
