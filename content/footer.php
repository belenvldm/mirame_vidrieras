<footer id="footer" class="container-fluid">
	<div class="row">
		<div class="simplificado">
			<div class="col-sm-6 col-md-6 map">
				<h5>mapa del sitio</h5>
			</div>
			<div class="col-sm-6 col-md-6">
				<h5>recibi las ultimas novedades</h5>
			</div>
		</div>
	  	<div class="ampliado">
	        <div class="col-sm-12 col-md-7">
	        	<?php @require '../../sitemap.html'; ?>
			</div>
			<div class="col-sm-12 col-md-5">
				<h3>sucribite</h3>
				<form>
					<div class="col-xs-3">
						<label class="sr-only" for="email">Usuario</label>
						<input type="email" class="form-control input-sm" id="email" placeholder="Usuario">
				    </div>
				    <button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
</footer>