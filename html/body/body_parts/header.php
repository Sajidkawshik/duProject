<?php

  class Header{
      private $header = '';
      private $lang ='';
      
      public function Header($des_list){
      $this->lang = $des_list['lang'];
      $this->header = '<header class="main-header">
      <a href="#" class="logo">
      	<span class="logo-mini">'
      		.$this->lang['project_name_sm'].
      	'</span>
      	<span class="logo-lg">'
      		.$this->lang['project_name_bg'].
      	'</span>
      </a>
      <nav class="navbar navbar-static-top">
      	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      	<span class="sr-only">Toggle navigation</span></a>
      	<div class="navbar-custom-menu">
      	<ul class="nav navbar-nav">
      		<li class="dropdown notifications-menu lang-alt">
      			<a href="locale/langController.php" class="" >'
      				.$this->lang['lang_alt'].
      			'</a>
      		</li>
      		<li class="dropdown user user-menu">
      		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
      			<img src="html/template/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
      				<span class="hidden-xs">
      					Alexander Pierce
      				</span>
      		</a>
      		<ul class="dropdown-menu">
      			<li class="user-header">
      				<img src="html/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      				<p>Alexander Pierce - Web Developer<small>Member since Nov. 2012</small></p>
      			</li>
      			<li class="user-body">
      				<div class="row">
      					<div class="col-xs-4 text-center">
      						<a href="#">Followers</a>
      					</div>
      					<div class="col-xs-4 text-center">
      						<a href="#">Sales</a>
      					</div>
      					<div class="col-xs-4 text-center">
      						<a href="#">Friends</a>
      					</div>
      				</div>
      			</li>
      			<li class="user-footer">
      				<div class="pull-left">
      					<a href="#" class="btn btn-default btn-flat">Profile</a>
      				</div>
      				<div class="pull-right">
      					<a href="#" class="btn btn-default btn-flat">Sign out</a>
      				</div>
      			</li>
      		</ul>
      	</li>';

      foreach ($des_list['list'] as $key => $value) {
        if(isset($des_list['list'][$key]))
          $this->header .= '<li>
          	<a href="#" data-toggle="control-sidebar">'.$key.'</a></li>';
      }
      $this->header .= '</ul>
      					</div>
      				</nav>
      			</header>';
     }

     public function getHeader(){
        return $this->header;
     }
  }
  ?>

