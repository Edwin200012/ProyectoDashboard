<style>

#span1:hover, #span2:hover, #span3:hover, #span4:hover, #span5:hover {
   transition-delay:.15s;
   font-size: 16.5px;
   text-shadow: 0 1px 0 #ccc, 
                0 1px 0 #c9c9c9,
                0 1px 0 #bbb,
                0 1px 0 #b9b9b9,
                0 1px 0 #aaa,
                0 1px 1px rgba(0,0,0,.1),
                0 0 1px rgba(0,0,0,.1),
                0 1px 1px rgba(0,0,0,.1),
                0 1px 1px rgba(0,0,0,.1),
                0 1px 1px rgba(0,0,0,.2),
                0 1px 1px rgba(0,0,0,.1),
                0 1px 1px rgba(0,0,0,.1);
  }

  #sidebarmenu1, #sidebarmenu2, #sidebarmenu3, #sidebarmenu4, #sidebarmenu5 {
  background: rgb(6,14,131);
  background: linear-gradient(0deg, rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);
  border: none;
}
#sidebarmenu1:hover, #sidebarmenu2:hover, #sidebarmenu3:hover, #sidebarmenu4:hover, #sidebarmenu5:hover {
   
   /* background: rgb(0,3,255); */
   /* background: linear-gradient(0deg, rgba(0,3,255,1) 0%, rgba(2,126,251,1) 100%); */
    
  background: rgb(0,3,255);
  background: linear-gradient(-90deg, rgb(255,255,255) -10%, rgba(2,126,251,1) 90%);

}

</style>
<aside id="sidebar" class="sidebar" style="border-style: ridge; background-color: #3A1CA6; border-color: aliceblue;  border-width: 0.3px;">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a id="sidebarmenu1" style="border-radius: 15px; background-color: #3A1CA6;" class="nav-link " href="index.php">
          <i style="color: white;" class="bi bi-grid"></i>
          <span id="span1" style="color: white;">Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <hr style="color:white; margin-top: 5px;">
      <li class="nav-item">
        <a id="sidebarmenu2" style="border-radius: 15px; background-color: #3A1CA6;  margin-top: -15px;" class="nav-link collapsed" data-bs-target="#components-nav"  href="acercadenosotros.php">
          <i style="color: white;" class="bi bi-menu-button-wide"></i><span id="span2" style="color: white;">Acerca De Nosotros</span></i>
        </a>
      </li><!-- End Components Nav -->
      <hr style="color:white; margin-top: 5px;">
      <li class="nav-item">
        <a id="sidebarmenu3" style="border-radius: 15px; background-color: #3A1CA6; margin-top: -15px;" class="nav-link collapsed" data-bs-target="#forms-nav" href="servicios.php">
          <i style="color: white;" class="bi bi-journal-text"></i><span id="span3" style="color: white;">Servicios</span></i>
        </a>
        
      </li><!-- End Forms Nav -->
      <hr style="color:white; margin-top: 5px;">
      <li class="nav-item">
        <a id="sidebarmenu4" style="border-radius: 15px; background-color: #3A1CA6;  margin-top: -15px;" class="nav-link collapsed" data-bs-target="#tables-nav" href="equipo.php">
          <i style="color: white;" class="bi bi-layout-text-window-reverse"></i><span id="span4" style="color: white;">Equipo</span></i>
        </a>
        
      </li><!-- End Tables Nav -->
      <hr style="color:white; margin-top: 5px;">
      <li class="nav-item">
        <a  id="sidebarmenu5" style="border-radius: 15px; background-color: #3A1CA6;  margin-top: -15px;" class="nav-link collapsed" data-bs-target="#charts-nav" href="contacto.php">
          <i style="color: white;" class="bi bi-bar-chart"></i><span id="span5" style="color: white;">Contacto</span></i>
        </a>
        
      </li><!-- End Charts Nav -->
      <hr style="color:white; margin-top: 5px;">
      <!-- <button id="btn-1">Boton 1</button> -->
    </ul>

  </aside><!-- End Sidebar-->