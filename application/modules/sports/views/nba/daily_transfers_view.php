<?php
/**
* @author : Manton Horton Jr.
* Email : mantonhorton@gmail.com
* Website : www.mantonhortonjr.com
* Subject : Daily Transfer
*/


// copy file content into a string var
$json_file = file_get_contents('https://api.sportradar.us/nba-t3/league/2016/10/18/transfers.json?api_key=s2n89799m8hfjkapcvb7qsxk');


// convert the string to a json object
$jfo = json_decode($json_file);


// exit(print_r($zero_g = $jfo->players));


// Players
$zero_g = $jfo->players;



?>



  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Manton Horton</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>NFL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/nfl_depthchart'); ?>"><i class="fa fa-circle-o"></i>Depth Chart</a></li>
            <li><a href="<?php echo site_url('sports/nfl_injuries'); ?>"><i class="fa fa-circle-o"></i>Injuries</a></li>
            <li><a href="<?php echo site_url('sports/nfl_standings'); ?>"><i class="fa fa-circle-o"></i>Standings</a></li>
            <li><a href="<?php echo site_url('sports/nfl_weekly_schedule'); ?>"><i class="fa fa-circle-o"></i>Weekly Schedule</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>NBA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/nba_daily_schedule'); ?>"><i class="fa fa-circle-o"></i>Daily Schedule</a></li>
            <li class="active"><a href="<?php echo site_url('sports/nba_daily_transfers'); ?>"><i class="fa fa-circle-o"></i>Daily Transfers</a></li>
            <li><a href="<?php echo site_url('sports/nba_injuries'); ?>"><i class="fa fa-circle-o"></i>Injuries</a></li>
            <li><a href="<?php echo site_url('sports/nba_league_leaders'); ?>"><i class="fa fa-circle-o"></i>League Leaders</a></li>
            <li><a href="<?php echo site_url('sports/nba_standings'); ?>"><i class="fa fa-circle-o"></i>Standings</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>NCAAFB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/ncaafb_associated_press'); ?>"><i class="fa fa-circle-o"></i>Associated Press Top 25</a></li>
            <li><a href="<?php echo site_url('sports/ncaafb_amway_coaches_poll'); ?>"><i class="fa fa-circle-o"></i>Amway Coaches Poll</a></li>
            <li><a href="<?php echo site_url('sports/ncaafb_college_playoff_rankings'); ?>"><i class="fa fa-circle-o"></i>College Playoff Rankings</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> 
            <span>NCAAMBB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('sports/ncaambb_associated_press'); ?>"><i class="fa fa-circle-o"></i>Associated Press Top 25</a></li>
            <li><a href="<?php echo site_url('sports/ncaambb_coaches_poll'); ?>"><i class="fa fa-circle-o"></i>Coaches poll</a></li>
          </ul>
        </li>
        
        <!-- <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        NBA - Daily Transfers
        <small></small>
      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="#">NBA</a></li>

        <li class="active">Daily Transfers</li>

      </ol>

    </section>
  
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                </div>
                <h3 class="box-title">Daily Transfers</h3>
                <!-- /.box-header -->
                <div class="box-body">

            <table class="table table-bordered table-striped">

            <?php

            foreach ($zero_g as $post) {

                if ($post->transfers[0]->from_team->name == 'Clippers') {
                    
                    $post->transfers[0]->from_team->name = 'lac';

                }elseif ($post->transfers[0]->from_team->name == 'Grizzlies') {
                    
                    $post->transfers[0]->from_team->name = 'mem';

                }elseif ($post->transfers[0]->from_team->name == 'Trail Blazers') {
                    
                    $post->transfers[0]->from_team->name = 'por';

                }elseif ($post->transfers[0]->from_team->name == 'Raptors') {
                    
                    $post->transfers[0]->from_team->name = 'tor';
                    
                }elseif ($post->transfers[0]->from_team->name == '76ers') {
                    
                    $post->transfers[0]->from_team->name = 'phi';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Mavericks') {
                    
                    $post->transfers[0]->from_team->name = 'dal';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Heat') {
                    
                    $post->transfers[0]->from_team->name = 'mia';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Nuggets') {
                    
                    $post->transfers[0]->from_team->name = 'den';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Nets') {
                    
                    $post->transfers[0]->from_team->name = 'bkn';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Pistons') {
                    
                    $post->transfers[0]->from_team->name = 'det';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Hawks') {
                    
                    $post->transfers[0]->from_team->name = 'atl';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Cavaliers') {
                    
                    $post->transfers[0]->from_team->name = 'cle';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Rockets') {
                    
                    $post->transfers[0]->from_team->name = 'hou';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Jazz') {
                    
                    $post->transfers[0]->from_team->name = 'uta';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Celtics') {
                    
                    $post->transfers[0]->from_team->name = 'bos';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Hornets') {
                    
                    $post->transfers[0]->from_team->name = 'cha';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Timberwolves') {
                    
                    $post->transfers[0]->from_team->name = 'min';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Wizards') {
                    
                    $post->transfers[0]->from_team->name = 'was';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Magic') {
                    
                    $post->transfers[0]->from_team->name = 'orl';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Thunder') {
                    
                    $post->transfers[0]->from_team->name = 'okc';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Bulls') {
                    
                    $post->transfers[0]->from_team->name = 'chi';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Kings') {
                    
                    $post->transfers[0]->from_team->name = 'sac';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Pacers') {
                    
                    $post->transfers[0]->from_team->name = 'ind';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Spurs') {
                    
                    $post->transfers[0]->from_team->name = 'sa';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Warriors') {
                    
                    $post->transfers[0]->from_team->name = 'gs';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Knicks') {
                    
                    $post->transfers[0]->from_team->name = 'ny';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Pelicans') {
                    
                    $post->transfers[0]->from_team->name = 'no';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Bucks') {
                    
                    $post->transfers[0]->from_team->name = 'mlw';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Lakers') {
                    
                    $post->transfers[0]->from_team->name = 'lak';
                    
                }elseif ($post->transfers[0]->from_team->name == 'Suns') {
                    
                    $post->transfers[0]->from_team->name = 'pho';
                    
                }




     
            ?>
                <thead>
                    <tr>
                        <th>Team</th>
                        <th>Player Name</th>
                        <th>Position</th>
                        <th>Transfer Description</th>
                        <th>Transfer Effective Date</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?php echo "<img src = http://www.rotoworld.com/img/NBA/teams/logos/".$post->transfers[0]->from_team->name.".png alt='".$post->transfers[0]->from_team->name."' style='width:90px;height:75px;'> ";?></td>
                        <td><?php echo $post->full_name; ?></td>
                        <td><?php echo $post->primary_position; ?></td>
                        <td><?php echo $post->transfers[0]->desc; ?></td>
                        <td><?php echo $post->transfers[0]->effective_date; ?></td>
                    </tr>
                <?php
                } // end foreach
                ?>
                </tbody>
            </table>
            </div>
      </div>
    </div>

        
       </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2017 <a href="#">Fantasy Application</a>.</strong> All rights
        reserved.
      </footer>