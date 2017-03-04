<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

$category = !empty($_GET['category']) ? $_GET['category'] : null;

if ($category) {
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Вакансии по категории: <em>'. $job->getCategory($category)->name . '</em>';

} else {
    $template->title = 'Latest Jobs';
    $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;