<ul class="sidebar-menu">
          <li class="header">HEADER</li>
          <!-- Optionally, you can add icons to the links -->
          
          <li class="treeview">
              <a href="<?php echo SITE_ROOT ?>about/edit/1"><i class="fa fa-link"></i> <span>About Us</span></a>
          </li>

          <li>
              <a href=""><i class="fa fa-calendar" aria-hidden="true"></i> <span>Events</span></a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo SITE_ROOT ?>events/browse">Browse</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>events/addnew">Add New</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>events/trash">Trash</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href=""><i class="fa fa-map-marker"></i> <span>Sectors</span></a>
              <ul class="treeview-menu">
              <!-- for sectors as different sections are made they are by default loaded and shown by the use of a hidden field
                    so all will be edit (like browse)
               -->
                  <li><a href="<?php echo SITE_ROOT ?>sectors/browse">Browse</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>sectors/addnew">Add New</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>sectors/trash">Trash</a></li>
                  
              </ul>
          </li>

          <li class="treeview">
              <a href=""><i class="fa fa-graduation-cap"></i> <span>Students</span></a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo SITE_ROOT ?>student/browse">Browse</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>student/addnew">Add New</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>student/trash">Trash</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href=""><i class="fa fa-link"></i> <span>Projects</span></a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo SITE_ROOT ?>projects/browse">Browse</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>projects/addnew">Add New</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>projects/trash">Trash</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href=""><i class="fa fa-picture-o"></i> <span>Gallery</span></a>
              <ul class="treeview-menu">
                  <li><a href="">Browse</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>gallery/addnew">Add New</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>gallery/trash">Trash</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href=""><i class="fa fa-link"></i> <span>Post Holders</span></a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo SITE_ROOT ?>team/browse">Browse</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>team/addnew">Add New</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>team/trash">Trash</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href=""><i class="fa fa-users"></i> <span>People Speak</span></a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo SITE_ROOT ?>people/browse">Browse</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>people/addnew">Add New</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>people/trash">Trash</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href=""><i class="fa fa-link"></i> <span>Collaborators</span></a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo SITE_ROOT ?>collaborators/browse">Browse</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>collaborators/addnew">Add New</a></li>
                  <li><a href="<?php echo SITE_ROOT ?>collaborators/trash">Trash</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href="<?php echo SITE_ROOT ?>blog/edit/1"><i class="fa fa-rss"></i> <span>Blog Link</span></a>
          </li>
      </ul>