<?php include 'inc/header.php'; ?>
      <div class="jumbotron">
        <h1>Найти работу</h1>
          <form method="get" action="index.php">
              <select name="category" class="form-control">
                  <option value="0">Выберете категорию</option>
                  <?php foreach($categories as $category) :?>
                      <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
                  <?php endforeach; ?>
              </select>
              <br />
              <input type="submit" class="btn btn-success btn-lg" value="Поиск" />
          </form>
      </div>

        <h3 id="search-info" class="text-center"><?= $title; ?></h3>
      	<?php foreach($jobs as $job): ?>
      	<div class="row marketing">
	        <div class="col-md-10">
	          <h4><?php echo $job->job_title; ?></h4>
	          <p><?php echo $job->description; ?></p>     
	        </div>
	        <div class="col-md-2">
	        		<a class="btn btn-default" href="#">View</a>
	        </div>
        </div>  
        <?php endforeach; ?>    

<?php include 'inc/footer.php'; ?>