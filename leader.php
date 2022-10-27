<div class="container-fluid">
  <div class="row">
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="basepage.php">
              Bases
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="martianpage.php">
              Martians
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="leaderpage.php">
              Leaders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="visitorpage.php">
              Visitors
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="martianPerBasePage.php">
              Martians per Base
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="martianPerLeaderPage.php">
              Martians per Leader
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="visitorsPage.php">
            Visitors per Base
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Martian Leaders</h1>
      </div>
      <div class="container mt-3">
        <div class="table-responsive">
          <?php
            require_once ("pdo.php");

            $sql = "CALL view_leaders()";

            $stmt = $pdo->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
          ?>
            <table class="table table-striped table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                <th class="col-1">Martian ID</th>
                <th class="col-4">Leader Name</th>
                </tr>
            </thead>
            <tbody>
              <?php while ($row = $stmt->fetch()): ?>
                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['leader'] ?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
            </table>
        </div>
      </div>
    </main>
  </div>
</div>