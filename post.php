<?php
include_once "templates/header.php";

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet. Et impedit nihil 33 praesentium doloremque non mollitia
            iure. Aut ratione voluptas et maiores quas nam accusamus similique in sequi expedita non nisi numquam et
            molestiae nostrum. Eum fuga molestiae qui odio repudiandae et quasi fugiat! Vel quisquam molestias ea animi
            quos in officia facere.
            Sit error velit sed optio accusantium est deleniti dolor ut voluptatem exercitationem qui quos illo ut
            voluptas dolorum vel modi iste. Et voluptatem rerum aut obcaecati quibusdam aut eligendi beatae rem atque
            assumenda qui rerum dolor. Est laborum reprehenderit aut officia eaque in velit consequatur et harum eius
            sed nihil quae et obcaecati alias ad velit totam.
            Et quod autem et sapiente galisum cum asperiores quisquam. Ea dolorem quisquam non nihil perferendis et modi
            recusandae in nisi voluptas ea error facilis et consequatur quibusdam est soluta laboriosam. Qui tempore
            accusantium id natus voluptates id quasi accusamus aut mollitia sint qui quia modi. Vel deserunt quod qui
            molestias porro id consequuntur magni.</p>
        <p class="post-content">Lorem ipsum dolor sit amet. Et impedit nihil 33 praesentium doloremque non mollitia
            iure. Aut ratione voluptas et maiores quas nam accusamus similique in sequi expedita non nisi numquam et
            molestiae nostrum. Eum fuga molestiae qui odio repudiandae et quasi fugiat! Vel quisquam molestias ea animi
            quos in officia facere.
            Sit error velit sed optio accusantium est deleniti dolor ut voluptatem exercitationem qui quos illo ut
            voluptas dolorum vel modi iste. Et voluptatem rerum aut obcaecati quibusdam aut eligendi beatae rem atque
            assumenda qui rerum dolor. Est laborum reprehenderit aut officia eaque in velit consequatur et harum eius
            sed nihil quae et obcaecati alias ad velit totam.
            Et quod autem et sapiente galisum cum asperiores quisquam. Ea dolorem quisquam non nihil perferendis et modi
            recusandae in nisi voluptas ea error facilis et consequatur quibusdam est soluta laboriosam. Qui tempore
            accusantium id natus voluptates id quasi accusamus aut mollitia sint qui quia modi. Vel deserunt quod qui
            molestias porro id consequuntur magni.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once "templates/footer.php";

?>