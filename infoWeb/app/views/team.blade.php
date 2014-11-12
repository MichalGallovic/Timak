@extends('_layouts.default')
@section('content')

		<div class="container space-top">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-11">
					<h1>Členovia Tímu</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<h3>Igor</h3>
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('assets/img/igor.png') }}" alt="igor" width=200/>
						</div>
						<div class="col-md-6">
							<p>
								Zaujíma sa o webové technológie, responzívny dizajn a redakčný systém wordpress.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<h3>Jakub</h3>
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('assets/img/forny.png') }}" alt="forny" width=200/>
						</div>
						<div class="col-md-6">
							<p>
								Venuje sa nízkoúrovňovému programovaniu najmä v jazyku C a C++. Má skúsenosti s riadeným sérv a reálnych dynamických systémov.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<h3>Michal</h3>
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('assets/img/miso.png') }}" alt="miso" width=200/>
						</div>
						<div class="col-md-6">
							<p>Zaoberá sa vývojom webových a mobilných aplikácií. Pracuje s PHP, iOS (Objective - C) a javascriptovým frameworkom Ember JS.</p>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<h3>Jakub</h3>
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('assets/img/jakub.png') }}" alt="ja" width=200/>
						</div>
						<div class="col-md-6">
							<p>
								V praxi sa venuje javascriptovému frameworku Backbone JS a front-end technológiám využívaných pri vývojí webových aplikácií.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-bottom:40px;">
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<h3>Ivan</h3>
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('assets/img/ivan.png') }}" alt="ivan" width=200/>
						</div>
						<div class="col-md-6">
							<p>Zaujíma sa vývojom webových aplikácií a vo voľnom čase športom.. Pracuje s PHP, HTML , CSS.</p>
						</div>
					</div>
				</div>

			</div>



		</div>
@stop