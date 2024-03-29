<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Multiverse Miner - Beta Sign Up</title>

		<link href='//fonts.googleapis.com/css?family=Roboto:300,300italic,400,400italic' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		<link rel="stylesheet" href="css/main.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<div class="row game-access v-center">
			<div class="large-7 small-centered columns end">
				<div class="signin-form">
					<div class="row">
						<div class="large-12 columns">
							<img class="logo" src="img/logo_placeholder.png">
						</div>
					</div>
					<div class="row">
						<div class="large-8 columns">
							<p>Welcome explorer, <br>
								Multiverse Miner is a unique game; it's part sim, part incremental, part rpg. The object of the game is to mine resources from planets, while defending yourself against hostile enemies; which include players and NPCs. To provide protection, and advance, you must craft items, weapons and armor from recipes which closely mirror their real world counterparts. Fly to the planets, and procedurally created alien planets, conquer or be conquered. The key to progressing is developing a plan to accrue elements, while not leaving yourself or your home planet vulnerable.</p>

							<div class="row">
								<div class="large-12 columns">
									<ul class="small-block-grid-3"> 
										<li><img src="img/preview/mm_v2_thumb.jpg"></li> 
										<li><img src="img/preview/hero_window_opt_thumb.jpg"></li> 
										<li><img src="img/preview/crafting_window_opt_thumb.jpg"></li> 
									</ul>
								</div>
							</div>

							<p>How you play is completely up to you. PvE, PvP, trophy hunters, stockpilers; all are welcome to enjoy the game.</p>

						</div>
						<div class="large-4 columns">
							{{ Form::open(array('action' => 'BetaController@store', 'class'=>'form-signin')) }}
							<div class="name-field field">
								<label>Name
									{{ Form::text('name','') }}
								</label>
							</div>
							<div class="mail-field field">
								<label>E-mail
									{{ Form::email('email','') }}
								</label>
							</div>
							<div class="row">
								<div class="large-12 columns">
									{{ Form::submit('Sign Up', array('class' => 'small button right')) }}
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									@foreach($errors->all() as $message)
									<small class="error">{{ $message }}</small>
									@endforeach

									@if(Session::has('global_success'))
									<div data-alert class="alert-box success">
										Success, submission sent.
										<a href="#" class="close">&times;</a>
									</div>
									@endif

								</div>
							</div>
							{{Form::close()}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="row">
				<div class="large-12 columns">
					<ul class="foot-menu right inline-list"> 
						<li><a target="_blank" href="https://github.com/MultiverseMiner/multiverseminer/wiki">Wiki / About</a></li> 
						<li><a target="_blank" href="http://twitter.com/multiverseminer">Twitter</a></li> 
						<li><a target="_blank" href="http://github.com/multiverseminer/multiverseminer">GitHub</a></li> 
						<li><a target="_blank" href="http://webchat.freenode.net/?channels=%23multiverseminer&uio=d4">Chat</a></li> 
						<li><a target="_blank" href="https://github.com/MultiverseMiner/multiverseminer/wiki/Changes">Changes</a></li>  
					</ul>
				</div>
			</div>
		</footer>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
