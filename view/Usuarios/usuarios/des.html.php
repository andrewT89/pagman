<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
            mollit anim id est laborum</p>
    </div>
    
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Disagree</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
</div>


<a class="modal-trigger" href="‪#‎editar‬" data-url="<?php echo crearUrl('equipos', 'equipos', 'editar', array('noVista' => "noVista", 'id' => $equipo['id'])) ?>" >Editar</a>

<div class="modal" id="editar" style="display: none; opacity: 1; top: 0px;">
    <div class="modal-content" id="model-data">
    </div>
    <div class="modal-footer">
        <a class="waves-effect waves-red btn-flat modal-action modal-close" href="#">Disagree</a>
        <a class="waves-effect waves-green btn-flat modal-action modal-close" href="#">Agree</a>
    </div>
</div>