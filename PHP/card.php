<div class="card">
  <div class="card-body">
    <div class="card-picture" style="background-image: url('<?= $event['image_path'] ?>')">
      <div class="card-hover">
        <h4><?= $event['title'] ?></h4>
        <p><?= $event['message'] ?></p>
      </div>
    </div>
    <div class="card-likes">
      <ul class="list-inline">
        <li><i class="starts_at"></i><?= $event['starts_at']->diffForHumans() ?></li>
        <li><i class="username"></i><?= $event['uid'] ?></li>
        <li><i class="fa fa-heart"></i><?= $event['likes'] ?></li>
      </ul>
    </div>
  </div>
</div>