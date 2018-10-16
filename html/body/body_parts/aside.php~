  <?php

  class Aside{
      private $right_aside = '';
      private $lang ='';

     public function Aside($des_list){
      $this->lang = $des_list['lang'];
      $this->right_aside = '<aside class="main-sidebar">
 	   <section class="sidebar">
      	<div class="user-panel">
      		<div class="pull-left image">
      			<img src="html/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      		</div>
      		<div class="pull-left info">
      			<p>Alexander Pierce</p>
      			<a href="#"><i class="fa fa-circle text-success"></i> '.$this->lang['active'].'</a>
      		</div> 
      	</div>
      	<form action="#" method="get" class="sidebar-form">
      		<div class="input-group">
      			<input type="text" name="q" class="form-control" placeholder="'.$this->lang['search'].'...">
      				<span class="input-group-btn">
      					<button type="submit" name="search" id="search-btn" class="btn btn-flat">
      						<i class="fa fa-search"></i>
      					</button>
      				</span>
      		</div>
      	</form>
      	<ul class="sidebar-menu" data-widget="tree">
      		<li class="header">'.$this->lang['main_menu'].'</li>
      		<li class="active"><a href=""><i class="fa fa-dashboard"></i><span>'.$this->lang['dashboard'].'</span></a></li>
      	</ul>
      </section>
     </aside>';
     }

     public function getAside(){
        return $this->right_aside;
     }
  }


  
        
            
          
      
  ?>