<div class="container mt-5 mb-5">
	<h1 class="contact-title"><?php the_title(); ?></h1>
		<form class="contact-form p-5">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>

			</div>
			<div class="form-group">
				<label for="inputAddress">Subject</label>
				<input type="text" class="form-control" id="inputSubject" placeholder="your subject">
			</div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>



			<button type="submit" class="btn btn-primary">Send</button>
		</form>
</div>
