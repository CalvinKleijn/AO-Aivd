@extends('main', ['titel' => '| Contact'])

@section('content')

<form id="contact-form" method="post" action="contacts.store">
    <div class="messages">
	    <div class="controls">
	        <div class="row">
	        		<h3 class="alert alert-info" role="alert"><small>Heb jij last van een technisch probleem? Neem dan contact met ons op doormiddel van dit contactformulier in te vullen.</small></h3>
		            <div class="col-md-6">
		                <div class="form-group">
		                    <label>Voornaam</label>
		                    <input id="form_name" type="text" name="voornaam" class="form-control" placeholder="Voornaam" required="required">
		                </div>
		            </div>
		            <div class="col-md-6">
		                <div class="form-group">
		                    <label>Achternaam</label>
		                    <input id="form_lastname" type="text" name="achternaam" class="form-control" placeholder="Achternaam" required="required">
		                </div>
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-md-6">
		                <div class="form-group">
		                    <label>Email</label>
		                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" >
		                </div>
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-md-12">
		                <div class="form-group">
		                    <label>Bericht</label>
		                    <textarea id="form_message" name="bericht" class="form-control" placeholder="Bericht" rows="5" required="required"></textarea>
		                </div>
		            </div>
		            <div class="col-md-12">
		                <input type="submit" class="btn btn-success" value="Verzenden">
		            </div>
		        </div>
	    </div>
	</div>
</form>

@endsection