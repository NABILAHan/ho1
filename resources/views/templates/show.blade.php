 @extends('hotel')

@section('content')

 <br>
 <div class="mainslide smallmobile">
			<img src="http://placehold.it/1349x230" alt="Samui Accommodation with Seaview">
		</div>	
		
	</div>
	<div class=" contact-form">
		<h3 class="title">COMMENTS</h3>
</div>


<div class="row">  
  <div class="col-md-2"></div>
      <div class="col-md-8">
<h1><pre>
  
@foreach($comments as $comment)
<div class="well">
Name : {{$comment->name}} 
Comment : {{$comment->comment}} 
</div>
@endforeach
</div>
</div>
<ul class="pager">
   <div class="container">
    <h2><li><a href="contact">BACK</a></li></h2>

  </ul>
  </div>
@endsection