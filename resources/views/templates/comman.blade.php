@extends('hotel')

@section('content')
<br>
<br>
<div class="mainslide smallmobile">
			<img src="http://placehold.it/1349x230" alt="Samui Accommodation with Seaview">
		</div>	
		
	</div>
	<div class=" contact-form">
		<h3 class="title">Contact form</h3>
		<div class="container">
      <form role="form" action="addComment" method="POST">
        <div class="form-group well">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name">  <br/>         
          <label for="comment">Comment:</label>
          <textarea class="form-control" rows="5" id="comment" name="comment"></textarea> <br/>
          <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />  
          <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
			<div class="clearfix"> </div>					
		</form>
	</div>
</div>		
</div> 
	
    @endsection