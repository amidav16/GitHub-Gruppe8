<div class="card">
  <div class="card-body">
    <div class="card-picture" style="background-image: url('http://unsplash.it/400/300?image=10')">
      <div class="card-hover">
        <h4><?= $row['title'] ?></h4>
        <p><?= $row['message'] ?></p>
      </div>
    </div>
    <div class="card-likes">
      <ul class="list-inline">
        <li><i class="username"></i><?= $row['uid'] ?></li>
        <li><i class="fa fa-heart"></i><?= $row['likes'] ?></li>
      </ul>
    </div>
  </div>
</div>