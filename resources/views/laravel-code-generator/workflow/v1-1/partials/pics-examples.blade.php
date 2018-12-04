<section id="look-and-feel">

	<div id="myCarousel" class="carousel slide example-carousel" data-ride="carousel" style="max-width: 600px; margin: 0 auto;">
	  <!-- Indicators -->
	  <ol class="carousel-indicators carousel-indicators-below">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	    <li data-target="#myCarousel" data-slide-to="4"></li>
	    <li data-target="#myCarousel" data-slide-to="5"></li>
	    <li data-target="#myCarousel" data-slide-to="6"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">

	    <div class="item active">
	        <img src="{{ URL::to('/') }}/images/laravel-code-generator/add.png" alt="Create form example">
	        <div class="carousel-caption carousel-caption-below">
	            <h3>Create View</h3>
	            <p>Checkbox or Radio buttons can listed on the same line using is-inline-options option.</p>
	        </div>
	    </div>

	    <div class="item">
	      <img src="{{ URL::to('/') }}/images/laravel-code-generator/index.png" alt="Index form example">
	        <div class="carousel-caption carousel-caption-below ">
	            <h3>Index View</h3>
	            <p>This view was generated with the --models-per-page=15 option to demo the pagination.</p>
	        </div>
	    </div>

	    <div class="item">
	      <img src="{{ URL::to('/') }}/images/laravel-code-generator/edit.png" alt="Edit form example">
	        <div class="carousel-caption carousel-caption-below">
	            <h3>Edit View</h3>
	            <p>Any field generated with the is-on-form=1 options will be visible on the edit view.</p>
	        </div>
	    </div>

	    <div class="item">
	      <img src="{{ URL::to('/') }}/images/laravel-code-generator/edit-validation.png" alt="Edit form example client-side validation">
	        <div class="carousel-caption carousel-caption-below">
	            <h3>Client-Side Validation</h3>
	            <p>Before we issue an HTTP request, we make sure the form is valid at the client side.</p>
	        </div>
	    </div>

	    <div class="item">
	      <img src="{{ URL::to('/') }}/images/laravel-code-generator/show.png" alt="Show form example">
	        <div class="carousel-caption carousel-caption-below">
	            <h3>Show View</h3>
	            <p>Any field generated with the is-on-show=1 options will be visible on the show view.</p>
	        </div>
	    </div>

	    <div class="item">
	      <img src="{{ URL::to('/') }}/images/laravel-code-generator/index-updated.png" alt="Updated form">
	        <div class="carousel-caption carousel-caption-below">
	            <h3>Index View</h3>
	            <p>Once a record is added or updated, notification alert is displayed on the index screen.</p>
	        </div>
	    </div>

	    <div class="item">
	      <img src="{{ URL::to('/') }}/images/laravel-code-generator/delete.png" alt="Delete form">
	      <div class="carousel-caption carousel-caption-below">
	            <h3>Delete Confirmation</h3>
	            <p>Before processing a delete request, we prompt the user for confirmation.</p>
	        </div>
	    </div>


	  </div>


	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

</section>