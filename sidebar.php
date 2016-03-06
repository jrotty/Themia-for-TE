 <div class="sidebar-profile">
            <a href="/#about">
                    <img class="sidebar-profile-picture" <?php if ($this->options->logoUrl){ ?>src="<?php $this->options->logoUrl();?>"<?php }else{ ?>src="<?php $this->options->themeUrl('image/avatar.jpg'); ?>"<?php };?>/> </a>
        <span class="sidebar-profile-name"><?php $this->options->title(); ?></span> 
        </div>
    
    
        <ul class="sidebar-buttons">
        
            <li class="sidebar-button">
                
                    <a  class="sidebar-button-link " href="<?php $this->options->siteUrl(); ?>" >
                
                    <i class="sidebar-button-icon fa fa-lg fa-home" ></i>
                    <span class="sidebar-button-desc">Home</span>
                </a>
        </li>
        
            <li class="sidebar-button">
                
                    <a  class="sidebar-button-link "
                         href="<?php $this->options->Categories();?>"
                        
                    >
                
                    <i class="sidebar-button-icon fa fa-lg fa-bookmark"></i>
                    <span class="sidebar-button-desc">Categories</span>
                </a>
        </li>
        
            <li class="sidebar-button">
                
                    <a  class="sidebar-button-link "
                         href="<?php $this->options->Archive();?>"
                        
                    >
                
                    <i class="sidebar-button-icon fa fa-lg fa-bars"></i>
                    <span class="sidebar-button-desc">Archive</span>
                </a>
        </li>
        
            <li class="sidebar-button">
                
                    <a  class="sidebar-button-link st-search-show-outputs"
                         href="/#about"
                        
                    >
                
                    <i class="sidebar-button-icon fa fa-lg fa-search"></i>
                    <span class="sidebar-button-desc">Search</span>
                </a>
        </li>
   
            <li class="sidebar-button">
                
                    <a  class="sidebar-button-link "
                         href="<?php $this->options->about();?>"
                        
                    >
                
                    <i class="sidebar-button-icon fa fa-lg fa-info-circle"></i>
                    <span class="sidebar-button-desc">About</span>
                </a>
        </li>
        
    </ul>
    
        <ul class="sidebar-buttons">
 
         
                   <li class="sidebar-button">
                
                    <a  class="sidebar-button-link " href="<?php $this->options->weibo();?>" target="_blank" >
                
                    <i class="sidebar-button-icon fa fa-lg fa-weibo"></i>
                    <span class="sidebar-button-desc">Weibo</span>
                </a>
        </li>

<li class="sidebar-button">
                
                    <a class="sidebar-button-link " href="<?php $this->options->links();?>">
                
                    <i class="sidebar-button-icon fa fa-lg fa-at"></i>
                    <span class="sidebar-button-desc">Links</span>
                </a>
        </li>
    </ul>
    
</nav>
