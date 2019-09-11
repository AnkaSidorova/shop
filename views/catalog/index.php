<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
	<div class="row">
      <?php foreach ($latestProducts as $product): ?>
				<div class="col col-sm-6 col-md-4 mb-4">
					<div class="card">
						<a href="/product/<?php echo $product['id'] ?>">
							<img src="/template/img/her.jpg" class="card-img-top" alt="xxx">
						</a>
						<div class="card-body text-center">
							<h5 class="text-dark"><?php echo $product['name'] ?></h5>
							<hr>
							<p class="text-secondary"><?php echo $product['price'] ?> руб.</p>
							<button type="button" class="btn btn-dark">В корзину</button>
						</div>
					</div>
				</div>
      <?php endforeach; ?>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<nav aria-label="Page navigation example">
				<ul class="pagination justify-content-end">
					<li class="page-item">
						<a class="page-link text-dark" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
					<li class="page-item">
						<a class="page-link text-dark" href="#">1</a>
					</li>
					<li class="page-item">
						<a class="page-link text-dark" href="#">2</a>
					</li>
					<li class="page-item">
						<a class="page-link text-dark" href="#">3</a>
					</li>
					<li class="page-item">
						<a class="page-link text-dark" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<div class="container">
	<div class="row footer">
		<div class="col copyrate font-italic">
			<div>An_shop©2019г. Все права защищены.</div>
		</div>
	</div>
</div>

</body></html>
