<?php
include ('config.php');
if (isset($_SESSION['user_id']))
{
mysql_connect ($hostname, $username, $password) or die ('Error: ' . mysql_error());
mysql_select_db($dbName);

$user_id = $_SESSION['user_id'];
$accesslvl = $db->GetOne("SELECT accesslvl FROM users WHERE id = '$user_id'");

	switch($map)
	{
   		case 'chernarus':
			$mapName = "Chernarus";
			break;
    	case 'lingor':
			$mapName = "Lingor";
			break;
    	case 'tavi':
			$mapName = "Taviana";
			break;
	    case 'namalsk':
			$mapName = "Namalsk";
			break;
	    case 'takistan':
			$mapName = "Takistan";
			break;
	    case 'panthera2':
			$mapName = "Panthera";
			break;
	    case 'fallujah':
			$mapName = "Fallujah";
			break;
	}
?>

<div class="navbar navbar-inverse navbar-static-top navbar-custom">
	<div class="navbar-middle">
		<ul class="nav navbar-nav">
			<li <?php echo ($page == 'dashboard' ? ' class="active" ' : ' '); ?>><a href="<?php echo ($page == 'cpanel' ? ' ../admin.php ' : ' admin.php '); ?>"><i class="icon-cog"></i> Dashboard</a></li> 
			<li <?php echo ($page == 'home' ? ' class="active" ' : ' '); ?>><a href="<?php echo ($page == 'cpanel' ? ' ../index.php ' : ' index.php '); ?>"><i class="icon-home"></i> Stats</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Control<b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="admin.php?view=admin">Admin Options</a></li>
				<li><a href="admin.php?view=vip">VIP Manager</a></li>
				<li><a href="admin.php?view=database">Database Manager</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Entities<b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li>
					<a href="#">Entities <i class="icon-arrow-right"></i></a>
					<ul class="dropdown-menu sub-menu">
						<li>
							<a href="#">Players <i class="icon-arrow-right"></i></a>
							<ul class="dropdown-menu sub-menu">
								<li><a href="admin.php?view=table&show=0">Online</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Vehicles <i class="icon-arrow-right"></i></a>
							<ul class="dropdown-menu sub-menu">
								<li><a href="#"><br></a></li>
								<li><a href="admin.php?view=table&show=4">Ingame</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Database <i class="icon-arrow-right"></i></a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="#"><br></a></li>
						<li>
							<a href="#">Players <i class="icon-arrow-right"></i></a>
							<ul class="dropdown-menu sub-menu">
								<li><a href="#"><br></a></li>
								<li><a href="admin.php?view=table&show=1">Alive</a></li>
								<li><a href="admin.php?view=table&show=2">Dead</a></li>
								<li><a href="admin.php?view=table&show=3">All</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Vehicles <i class="icon-arrow-right"></i></a>
							<ul class="dropdown-menu sub-menu">
								<li><a href="#"><br></a></li>
								<li><a href="#"><br></a></li>
								<li><a href="admin.php?view=table&show=4">All Vehicles</a></li>
								<li><a href="admin.php?view=table&show=5">Spawn Locations</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="divider"></li>
				<li>
					<a href="admin.php?view=check">Check Items</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="admin.php?view=search">Search</a>
				</li>
			</ul>
			</li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $mapName; ?><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li>
					<a href="#">Instance ID: <?php echo $iid?> <i class="icon-arrow-right"></i></a>
						<ul class="dropdown-menu sub-menu">
							<li>
								<li>
								<a href="#">Recent Players <i class="icon-arrow-right"></i></a>
								<ul class="dropdown-menu sub-menu">
									<li><a href="admin.php?view=map&show=0">Within 1 Min</a></li>
								</ul>
								</li>
								<li>
								<a href="#">Deployables <i class="icon-arrow-right"></i></a>
								<ul class="dropdown-menu sub-menu">
									<li><a href="#"><br></li>
									<li><a href="admin.php?view=map&show=4">Vehicles Ingame</a></li>
									<li><a href="admin.php?view=map&show=6">All Ingame Tents/Stashes</a></li>
									<li><a href="admin.php?view=map&show=7">Other Deployables</a></li>
								</ul>
								</li>
								<li>
									<a href="admin.php?view=map&show=8">Everything</a>
								</li>
							</li>
						</ul>
					</li>
					<li>
					<a href="#">Database <i class="icon-arrow-right"></i></a>	
						<ul class="dropdown-menu sub-menu">
							<li>
								<li><a href="#"><br></a></li>
								<li>
									<a href="#">Players <i class="icon-arrow-right"></i></a>
									<ul class="dropdown-menu sub-menu">
										<li><a href="#"><br></a></li>
										<li><a href="admin.php?view=map&show=1">Alive</a></li>
										<li><a href="admin.php?view=map&show=2">Dead</a></li>
										<li><a href="admin.php?view=map&show=3">All</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Deployables <i class="icon-arrow-right"></i></a>
									<ul class="dropdown-menu sub-menu">
										<li><a href="#"><br></a></li>
										<li><a href="#"><br></a></li>
										<li><a href="admin.php?view=map&show=5">Spawn Locations</a></li>
									</ul>
								</li>
							</li>
						</ul>
					</li>
				</ul>
			</li> 
			</ul>
			<ul class="nav navbar-nav pull-right">
			<li><a href="admin.php?logout"><i class="icon-arrow-left"></i> Logout</a></li>
			</ul>
	</div>
</div>

<?php
}
else
{
	header('Location: admin.php');
}
?>
