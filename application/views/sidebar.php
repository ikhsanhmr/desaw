<body class="no-skin">
    <div id="navbar" class="navbar navbar-default">
        <script type="text/javascript">
            try{ace.settings.check('navbar' , 'fixed')}catch(e){}
        </script>

        <div class="navbar-container" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>
			<div class="navbar-header pull-left">
					<img src="<?php echo base_url(); ?>assets/images/Logo_PLN2.png" width="40" height="60">				
				</div>
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    
				<font size="4">UNIT INDUK PEMBANGUNAN PEMBANGKIT SUMATERA</font>  <br>
					
                   
					<font size="2">UNIT PELAKSANA PROYEK PEMBANGKIT SUMATERA 1</font>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    

                    

                    

                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="<?php echo base_url(); ?>assets/avatars/user.jpg" alt="Jason's Photo" />
                            <span class="user-info">
                                <small>Welcome,</small>
                                Admin
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                           
								<li>
									<a href="#">
										<i class="ace-icon fa fa-user"></i>
										Back to Administrator
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo site_url('admin/logout'); ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
                        </ul>
                    </>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>

    <div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="<?php echo site_url('admin/information_view'); ?>">
							<i class="menu-icon fa fa-inbox"></i>
							<span class="menu-text"> Information </span>
						</a>

						<b class="arrow"></b>
					</li>

					

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Activity </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url('admin/daily_activity_view'); ?>">
									<i class="menu-icon fa fa-child"></i>
									Daily Activity
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Warranty Notice </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url('admin/warranty_notice_view'); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Update Data
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>


					

					<li class="">
						<a href="<?php echo site_url('admin/gallery_view'); ?>">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> Gallery </span>
						</a>

						<b class="arrow"></b>
					</li>

					

					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
