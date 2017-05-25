<div class='card'>
  <div class='card-body'>
    <div class="card-picture" style="background-image: url('<?= $event->image_path ?>')"></div>
    <div class='card-title'>
      <h1><?= $event->title ?></h1>
    </div>
    <div class='card-username'>
      <h3>Placeholder</h3>
    </div>
    <div class='card-description'>
      <p><?= $event->description ?></p>
    </div>
    <div class='card-likes'>
      <a href="like.php?type=event&id=<?php echo $event->id; ?>"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><a class='card-number-likes'><?php echo $event->likes; ?></a>
    </div>
  </div>
</div>