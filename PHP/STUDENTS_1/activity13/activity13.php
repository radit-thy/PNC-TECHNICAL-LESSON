<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts template</title>
    <link rel="stylesheet" href="css/app.css">

</head>

<body>

    <?php
    // A list of posts
    $posts = [
        [
            'id' => 1,
            'title' => "Natural in the world",
            'image' => "https://www.pure-leisure.co.uk/wp-content/uploads/2019/03/3-Reasons-Why-Conservation-Is-So-Important.jpg",
            'description' => "Lorem ipsum dolor sitore aliquam ab sequi saepe facilis, ipsam illo modi cupiditate illum iure? Maiores suscipit dicta mollitia velit. Eveniet reprehenderit rem odio provident quibusdam consequatur aspernatur porro aliquam similique illo ut cum reiciendis amet placeat dolor possimus laboriosam, aliquid,",
            'date' => "14 / April / 2021",
            'author' => "Rady Cody"
        ],
        [
            'id' => 2,
            'title' => "Natural Tiger",
            'image' => "https://www.pmtoday.co.uk/wp-content/uploads/2020/09/tiger-wildlife-animal.jpg",
            'description' => "Lorem ipsum dolor sitore aliquam ab sequi saepe facilis, ipsam illo modi cupiditate illum iure? Maiores suscipit dicta mollitia velit. Eveniet reprehenderit rem odio provident quibusdam consequatur aspernatur porro aliquam similique illo ut cum reiciendis amet placeat dolor possimus laboriosam, aliquid,",
            'date' => "18 / April / 2021",
            'author' => "Dara Sisu"
        ],
        [
            'id' => 3,
            'title' => "Natural in the world",
            'image' => "https://birdinflight.imgix.net/wp-content/uploads/2017/07/world-nature-contest_05.jpg?fm=pjpg&q=70&fit=crop&crop=faces&w=1200",
            'description' => "Lorem ipsum dolor sitore aliquam ab sequi saepe facilis, ipsam illo modi cupiditate illum iure? Maiores suscipit dicta mollitia velit. Eveniet reprehenderit rem odio provident quibusdam consequatur aspernatur porro aliquam similique illo ut cum reiciendis amet placeat dolor possimus laboriosam, aliquid,",
            'date' => "11 / April / 2021",
            'author' => "Sakira savi"
        ],
    ];
    ?>

    <?php for ($i = 0; $i < count($posts); $i++) :
        $post = $posts[$i];

    ?>
        <div class="card" id=<?php echo $post['id']; ?>>
        <div class="card-img">
        <img
        src="<?php echo $post['image']?>">
      </div>
      <div class="card-body">
        <h2 class="card-title"><?php echo $post['title']?></h2>
        <p class="description">
        <?php echo $post['description']?>
        </p>
      </div>
      <div class="card-footer">
        <span class="date"><?php echo $post['date']?></span>
        <span class="author"><?php echo $post['author']?></span>
      </div>
        </div>
    <?php
    endfor
    ?>
</body>

</html>