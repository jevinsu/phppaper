<?php

include 'config.php';
include 'functions.php';

// Get overview of Article status
$status = get_json('{"jsonrpc": "2.0", "overview": "status"}');

?>

<div class="navbar navbar-fixed-top navbar-inverse">
   <div class="container">

    <!-- Be sure to leave the brand out there if you want it shown -->
    <a class="navbar-brand" href="<?php echo "$url/index.php"; ?>"><span class="badge pull-right"><?php echo $status[0]['count']; ?></span>Home</a>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

    <ul class="nav navbar-nav">
      <li class="dropdown">
         <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Views<b class="caret"></b></a>
         <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
            <li class="detailed-view" role="presentation"><a id="detailed-view" role="menuitem" tabindex="-1" href="#">Detailed view</a></li>
            <li class="list-view" role="presentation"><a id="list-view" role="menuitem" tabindex="-1" href="#">List view</a></li>
            <li class="minimal-view" role="presentation"><a id="minimal-view" role="menuitem" tabindex="-1" href="#">Minimal view</a></li>
         </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav">
      <li class="dropdown">
         <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Sort<b class="caret"></b></a>
         <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
            <li class="sort-asc" role="presentation"><a id="sort-asc" role="menuitem" tabindex="-1" href="#">Oldest first</a></li>
            <li class="sort-desc" role="presentation"><a id="sort-desc" role="menuitem" tabindex="-1" href="#">Latest first</a></li>
         </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a id="import-opml" href="#">Import OPML</a></li>
    </ul>

    <form class="navbar-form pull-left" method="post" placeholder="submitfeed">
      <input type="text" placeholder="Add feed or url" style="width: 200px;" id="feedname" name="feedname" class="form-control">
      <button type="button" id="submitfeed" class="btn btn-default">Submit</button>
    </form>

    <ul class="nav navbar-nav">
      <li><a class="update" href="#">Update feeds</a></li>
    </ul>

    </div><!-- /.nav-collapse -->

   </div><!-- /.container -->
</div><!-- /.navbar -->

